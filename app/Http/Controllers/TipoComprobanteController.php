<?php

namespace App\Http\Controllers;

use App\Models\TipoComprobante;
use App\Util\LogErrorManager;
use App\Util\ResultManager;
use App\Util\RuleManager;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TipoComprobanteController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $this->getFilters($request, new TipoComprobante());
        $perpage = $this->getLimitPagination($request);

        $tipocomprobante = TipoComprobante::where($filters)
            ->orderBy('codcomprobante', 'DESC')
            ->paginate($perpage);
            
        return $tipocomprobante;
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

            $tipocomprobante = $this->setModel(new TipoComprobante(), $request);
            $tipocomprobante->userinsert = $this->user->email;
            $tipocomprobante->save();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya un Comprobante registrado con el mismo nombre.');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoComprobante  $tipoComprobante
     * @return \Illuminate\Http\Response
     */
    public function show(TipoComprobante $id)
    {
        return TipoComprobante::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoComprobante  $tipoComprobante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = "";
        try {

            $tipocomprobante = $this->setModel(TipoComprobante::findOrFail($id), $request);
            $tipocomprobante->userupdate = $this->user->email;
            $tipocomprobante->update();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya un Comprobante registrado con el mismo nombre.');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoComprobante  $tipoComprobante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result  = "";
        try {

            $tipocomprobante=TipoComprobante::findOrFail($id);
            $tipocomprobante->estado = $tipocomprobante->estado == RuleManager::DISABLED_STATE ? RuleManager::ACTIVE_STATE : RuleManager::DISABLED_STATE;
            $tipocomprobante->update();

            if ($tipocomprobante->estado == RuleManager::ACTIVE_STATE) {
                $result = ResultManager::successMessage('Comprobante restaurado correctamente.');
            } else if($tipocomprobante->estado == RuleManager::DISABLED_STATE) {
                $result = ResultManager::warningMessage('Comprobante eliminado correctamente.');
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
}
