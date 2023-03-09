<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Util\LogErrorManager;
use App\Util\ResultManager;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ClienteController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $this->getFilters($request, new Cliente());
        $perpage = $this->getLimitPagination($request);

        $cliente = Cliente::where($filters)
            ->orderBy('codcliente', 'DESC')
            ->paginate($perpage);
            
        return $cliente;
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
            $cliente = new Cliente();
            $cliente = $this->setModel($cliente, $request);
            $cliente->userinsert = $this->user->email;
            $cliente->save();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $duplicateEntry = 1062; // registro duplicado

            if (count($e->errorInfo)) {
                if ($e->errorInfo[1] == $duplicateEntry) {
                    $result = ResultManager::warningMessage('La dirección de correo electrónico que ha ingresado ya está registrada.');
                } else {
                    $result = ResultManager::errorMessage('Intente nuevamente más tarde.');
                }

            } else {
                $result = ResultManager::errorMessage('Intente nuevamente más tarde.');
            }

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cliente::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result ="";
        try {

            $cliente = $this->setModel(Cliente::findOrFail($id), $request);
            $cliente->userupdate = $this->user->email;
            $cliente->update();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya un cliente registrado con el mismo correo');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }

    private function setModel(Cliente $cliente, Request $request): Cliente
    {
        $cliente->nombrecliente = $request->nombrecliente;
        $cliente->appaternocl = $request->appaternocl;
        $cliente->apmaternocl = $request->apmaternocl;
        $cliente->codtipodoc = $request->codtipodoc;
        $cliente->coducmento = $request->coducmento;
        $cliente->pais = $request->pais;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        
        return $cliente;
    }
}
