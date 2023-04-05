<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\TipoDocumento;
use App\Util\LogErrorManager;
use App\Util\ResultManager;
use App\Util\RuleManager;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TipoDocumentoController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $this->getFilters($request, new TipoDocumento());
        $perpage = $this->getLimitPagination($request);

        $tipodocumento = TipoDocumento::where($filters)
            ->orderBy('iddocumento', 'DESC')
            ->paginate($perpage);
            
        return $tipodocumento;
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

            $tipodocumento = $this->setModel(new TipoDocumento(), $request);
            $tipodocumento->userinsert = $this->user->email;
            $tipodocumento->save();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya un Documento registrado con el mismo nombre.');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return TipoDocumento::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = "";
        try {

            $tipoDocumento = $this->setModel(TipoDocumento::findOrFail($id), $request);
            $tipoDocumento->userupdate = $this->user->email;
            $tipoDocumento->update();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya una Documento registrado con el mismo nombre.');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result  = "";
        $errorMsg='No se puede eliminar. Hay Cliente que hacen uso de este Documento.';
        try {
        $numberDependents = Cliente::where(['codtipodoc'=> $id,'estado' => 'A'])->count();

         if($numberDependents == 0){

            $tipoDocumento=TipoDocumento::findOrFail($id);
            $tipoDocumento->estado = $tipoDocumento->estado == RuleManager::DISABLED_STATE ? RuleManager::ACTIVE_STATE : RuleManager::DISABLED_STATE;
            $tipoDocumento->update();

            if ($tipoDocumento->estado == RuleManager::ACTIVE_STATE) {
                $result = ResultManager::successMessage('Documento restaurado correctamente.');
            } else if($tipoDocumento->estado == RuleManager::DISABLED_STATE) {
                $result = ResultManager::warningMessage('Documento eliminado correctamente.');
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

    public function setModel(TipoDocumento $tipoDocumento,Request $request): TipoDocumento
    {
        $tipoDocumento->nombre = $request->nombre;
        return $tipoDocumento;

    }
}
