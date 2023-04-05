<?php

namespace App\Http\Controllers;

use App\Models\EstadoServicio;
use App\Models\Servicio;
use App\Util\LogErrorManager;
use App\Util\ResultManager;
use App\Util\RuleManager;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EstadoServicioController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $this->getFilters($request, new EstadoServicio());
        $perpage = $this->getLimitPagination($request);

        $estadoServicio = EstadoServicio::where($filters)
            ->with('tipoestadoservicio')
            ->orderBy('codestadoservicio', 'DESC')
            ->paginate($perpage);
            
        return $estadoServicio;
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

            $estadoServicio = $this->setModel(new EstadoServicio(), $request);
            $estadoServicio->userinsert = $this->user->email;
            $estadoServicio->save();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya un Estado de Servicio registrado con el mismo nombre.');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstadoServicio  $estadoServicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return EstadoServicio::with('tipoestadoservicio')->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstadoServicio  $estadoServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = "";
        try {

            $estadoServicio = $this->setModel(EstadoServicio::findOrFail($id), $request);
            $estadoServicio->userupdate = $this->user->email;
            $estadoServicio->update();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya un Estado de Servicio registrado con el mismo nombre.');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstadoServicio  $estadoServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result  = "";
        $errorMsg='No se puede eliminar. Hay Recordatorios que hacen uso de este Servicio.';
        try {
        $numberDependents = Servicio::where(['codestadoservicio'=> $id,'estado' => 'A'])->count();

         if($numberDependents == 0){

            $estadoServicio=EstadoServicio::findOrFail($id);
            $estadoServicio->estado = $estadoServicio->estado == RuleManager::DISABLED_STATE ? RuleManager::ACTIVE_STATE : RuleManager::DISABLED_STATE;
            $estadoServicio->update();

            if ($estadoServicio->estado == RuleManager::ACTIVE_STATE) {
                $result = ResultManager::successMessage('Estado de Servicio restaurado correctamente.');
            } else if($estadoServicio->estado == RuleManager::DISABLED_STATE) {
                $result = ResultManager::warningMessage('Estado de Servicio eliminado correctamente.');
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

    public function setModel(EstadoServicio $estadoServicio,Request $request): EstadoServicio
    {
        $estadoServicio->nombreestadoservicio = $request->nombreestadoservicio;
        $estadoServicio->descripcion = $request->descripcion;
        $estadoServicio->backgroundColor = $request->backgroundColor;
        $estadoServicio->textColor = $request->textColor;
        $estadoServicio->codtipoestadoservicio = $request->codtipoestadoservicio;
        return $estadoServicio;

    }

    public function selectgeneral(Request $request){

        $estadoServicio = EstadoServicio::where([['estado','A'],['codtipoestadoservicio','1']])
            ->orderBy('codestadoservicio', 'ASC')
            ->get();

        return $estadoServicio;
    }

    public function selectdetalle(Request $request){

        $estadoServicio = EstadoServicio::where([['estado','A'],['codtipoestadoservicio','2']])
            ->orderBy('codestadoservicio', 'ASC')
            ->get();

        return $estadoServicio;
    }
}
