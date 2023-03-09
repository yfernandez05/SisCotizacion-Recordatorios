<?php

namespace App\Http\Controllers;

use App\Models\DetalleRecordatorio;
use App\Models\TipoServicio;
use App\Util\LogErrorManager;
use App\Util\ResultManager;
use App\Util\RuleManager;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TipoServicioController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $this->getFilters($request, new TipoServicio());
        $perpage = $this->getLimitPagination($request);

        $servicios = TipoServicio::where($filters)
            ->orderBy('codservicio', 'DESC')
            ->paginate($perpage);
            
        return $servicios;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = "";
        try {

            $servicio = $this->setModel(new TipoServicio(), $request);
            $servicio->userinsert = $this->user->email;
            $servicio->save();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya un Servicio registrado con el mismo nombre.');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoServicio  $tipoServicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return TipoServicio::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoServicio  $tipoServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = "";
        try {

            $servicio = $this->setModel(TipoServicio::findOrFail($id), $request);
            $servicio->userupdate = $this->user->email;
            $servicio->update();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya un Servicio registrado con el mismo nombre.');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoServicio  $tipoServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result  = "";
        $errorMsg='No se puede eliminar. Hay Recordatorios que hacen uso de este Servicio.';
        try {
        $numberDependents = DetalleRecordatorio::where(['codservicio'=> $id,'estado' => 'A'])->count();

         if($numberDependents == 0){

            $rol=TipoServicio::findOrFail($id);
            $rol->estado = $rol->estado == RuleManager::DISABLED_STATE ? RuleManager::ACTIVE_STATE : RuleManager::DISABLED_STATE;
            $rol->update();

            if ($rol->estado == RuleManager::ACTIVE_STATE) {
                $result = ResultManager::successMessage('Servicio restaurado correctamente.');
            } else if($rol->estado == RuleManager::DISABLED_STATE) {
                $result = ResultManager::warningMessage('Servicio eliminado correctamente.');
            }
         }else{
             $result=ResultManager::errorMessage($errorMsg);
         }
            
        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::errorMessage($errorMsg);

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    public function setModel(TipoServicio $servicio,Request $request): TipoServicio
    {
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->precio = $request->precio;
        return $servicio;

    }
}
