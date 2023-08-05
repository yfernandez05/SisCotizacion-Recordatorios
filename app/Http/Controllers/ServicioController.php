<?php

namespace App\Http\Controllers;

use App\Models\DetalleServicio;
use App\Models\Servicio;
use App\Util\LogErrorManager;
use App\Util\ResultManager;
use App\Util\RuleManager;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perpage = $this->getLimitPagination($request);
        $filters = $this->getFilters($request, new Servicio());

        $queryVentas = Servicio::where($filters)
        ->with('user','cliente','estadoservicio','tipocomprobante','serviciodetalles');
       /*  ->whereHas('cliente', function ($query) use ($clientfilters) {
            $query->where($clientfilters);
        }); */

        if ($request->exists('fechadesde')) {
            $fechadesde = Carbon::createFromFormat('d-m-Y', $request->fechadesde)->toDateString();
            $fechahasta = Carbon::createFromFormat('d-m-Y', $request->fechahasta)->toDateString();

            $queryVentas->whereDate('fechaventa', '>=', $fechadesde)->whereDate('fechaventa', '<=', $fechahasta);
        }

        $ventas = $queryVentas->orderBy('codservicio', 'DESC')
        ->paginate($perpage);

        return $ventas;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return dd($request); */
        $result = "";
        DB::beginTransaction();
        try {

            //save servicio
            $servicio = $this->setModel(new Servicio(), $request);
            $servicio->userinsert = $this->user->email;
            $servicio->save();

            //add detail services
            $detalleServicio = $this->setModelDetalle($servicio->codservicio, new DetalleServicio(), $request->serviciodetalles);

            //save details
            $servicio->serviciodetalles()->saveMany($detalleServicio);

            DB::commit();

            $result = ResultManager::successMessage('Servicio registrado correctamente.');
        } catch (QueryException $e) {
            DB::rollback();
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::gerericErrorMessage();
        } catch (Exception $e) {
            DB::rollback();
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Servicio::with('cliente','serviciodetalles')
        ->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = "";
        DB::beginTransaction();
        try {
            // Actualizar los atributos del servicio con los datos del formulario.
           
            /* return dd($id); */
            $servicio = $this->setModel(Servicio::findOrFail($id), $request);
            $servicio->save(); // ejecutar la consulta SQL

            // Obtener los id de detallesservicio de servicio existentes del servicio actual que se está actualizando.
            $detallesExistente = $servicio->serviciodetalles()->where('estado', 'A')->pluck('id')->toArray();
            
            // Eliminar los detalles de servicio existentes dentro de detallesservicio que ya no están presentes en el formulario.
            $detallesEliminar = array_diff($detallesExistente, array_column($request->serviciodetalles, 'id'));         
            DetalleServicio::whereIn('id', $detallesEliminar)->update(['estado' => 'E']);
            
            // Actualizar los detalles de servicio existentes que aún están presentes en el formulario.
            $detalleUpdate = $this->setModelDetalleUdate($request->serviciodetalles);
            if ($detalleUpdate) {
                $detalleUpdate->save();
            }
            //return dd($request);

            // Agregar los nuevos detalles de servicio del formulario.
            $detallesNuevos = array_filter($request->serviciodetalles, function($detalle) {
                return !isset($detalle['id']);
            });
            $detalleServicio = $this->setModelDetalle($servicio->codservicio, new DetalleServicio(), $detallesNuevos);
            $servicio->serviciodetalles()->saveMany($detalleServicio);

            // Guardar los cambios en el servicio y en los detalles de servicio.
            /* DB::enableQueryLog(); */ // habilitar el registro de consultas
            $servicio->save(); 
            /* return dd(DB::getQueryLog()); */ // mostrar la consulta SQL generada

            DB::commit();

            $result = ResultManager::successMessage('Servicio actualizado correctamente.');

        } catch (QueryException $e) {
            DB::rollback();
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::gerericErrorMessage();

        } catch (Exception $e) {
            DB::rollback();
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result  = "";

        try {

            $servicio=Servicio::findOrFail($id);
            $servicio->estado = $servicio->estado == RuleManager::DISABLED_STATE ? RuleManager::ACTIVE_STATE : RuleManager::DISABLED_STATE;
            $servicio->update();

            if ($servicio->estado == RuleManager::ACTIVE_STATE) {
                $result = ResultManager::successMessage('Servicio Retaurado correctamente.');
            } else if($servicio->estado == RuleManager::DISABLED_STATE) {
                $result = ResultManager::warningMessage('Servicio eliminado correctamente.');
            }
            
        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::gerericErrorMessage();

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    public function setModel(Servicio $servicio,Request $request): Servicio
    {
        $servicio->codcliente = $request->codcliente;
        $servicio->url_documento = $request->url_documento;
        $servicio->codempleado = $this->user->id;
        $servicio->codcomprobante = $request->codcomprobante;
        $servicio->codestadoservicio = $request->codestadoservicio;
        $servicio->serie = $request->serie;
        $servicio->fecha_servicio = Carbon::createFromFormat('d-m-Y', $request->fecha_servicio);
        $servicio->fecha_anticipadogeneral = Carbon::createFromFormat('d-m-Y', $request->fecha_anticipadogeneral);
        $servicio->fecha_finsercanogeneral = Carbon::createFromFormat('d-m-Y', $request->fecha_finsercanogeneral);
        $servicio->fecha_fingeneral = Carbon::createFromFormat('d-m-Y', $request->fecha_fingeneral);
        $servicio->subtotal = $request->subtotal;
        $servicio->total = $request->total;
        return $servicio;
    }

    public function setModelDetalle($codservicio, DetalleServicio $detalleServicio, $request){
        $detalleServicio = []; 
        foreach($request as $detalle){
            /* $detalle['posicion'] = $posicion; */
            $detalleServicio[] = new DetalleServicio([
                'codservicio' => $codservicio,
                /* 'posicion' => $posicion, */
                'codtiposervicio' => $detalle['codtiposervicio'],
                'refe_url_servicio' => $detalle['refe_url_servicio'],
                'notadetalle' => $detalle['notadetalle'],
                'precio' => $detalle['precio'],
                'descuento' => $detalle['descuento'],
                'importe' => $detalle['importe'],
                'fecha_anticipado' => Carbon::createFromFormat('d-m-Y', $detalle['fechaanticipo']), 
                'fecha_contratacion' => Carbon::createFromFormat('d-m-Y', $detalle['fechainicio']), 
                'fecha_expiracion' => Carbon::createFromFormat('d-m-Y', $detalle['fechafin']), 
                'codestadoservicio' => 4,
                'frecuencia_recordatorio_fecha' => $detalle['frecuencia_recordatorio_fecha'],
            ]);
        }

        return $detalleServicio;
    }

    public function setModelDetalleUdate($serviciodetalles){
        
        $detallesModificados = 0;
        foreach ($serviciodetalles as $detalle) {
            if (isset($detalle['id']) && isset($detalle['changed']) && $detalle['changed'] === true) {
                $detalleExistente = DetalleServicio::find($detalle['id']);
                if (!empty($detalleExistente)) {
                    // Aquí actualizamos algunos datos del detalle existente con los datos del formulario.
                    $detalleExistente->fill([
                        'codtiposervicio' => $detalle['codtiposervicio'],
                        'refe_url_servicio' => $detalle['refe_url_servicio'],
                        'notadetalle' => $detalle['notadetalle'],
                        'precio' => $detalle['precio'],
                        'descuento' => $detalle['descuento'],
                        'importe' => $detalle['importe'],
                        'fecha_anticipado' => Carbon::createFromFormat('d-m-Y', $detalle['fechaanticipo']), 
                        'fecha_contratacion' => Carbon::createFromFormat('d-m-Y', $detalle['fechainicio']), 
                        'fecha_expiracion' => Carbon::createFromFormat('d-m-Y', $detalle['fechafin']), 
                        'codestadoservicio' => 4,
                        'frecuencia_recordatorio_fecha' => $detalle['frecuencia_recordatorio_fecha'],
                    ]);
                    $detalleExistente->save();
                    $detallesModificados++;
                }
            }
        }

        if ($detallesModificados > 0) {
            // Si se modificó al menos un detalle, realizamos alguna acción adicional.
        }
        return null; // Devolvemos null si no se encontró ninguna instancia para actualizar.

    }

}
