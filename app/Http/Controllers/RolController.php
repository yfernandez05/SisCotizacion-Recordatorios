<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use App\Util\LogErrorManager;
use App\Util\ResultManager;
use App\Util\RuleManager;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class RolController extends BaseController
{
    public function __construct()
    {
        parent::__construct(['index']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $this->getFilters($request, new Rol());
        $perpage = $this->getLimitPagination($request);

        $roles = Rol::where($filters)
            ->where('idrol','>',RuleManager::SYSTEM_ADMIN_ROLE)
            ->orderBy('idrol', 'DESC')
            ->paginate($perpage);
            
        return $roles;
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

            $rol = $this->setModel(new Rol(), $request);
            $rol->userinsert = $this->user->email;
            $rol->save();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya una Rol registrado con el mismo nombre.');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    public function edit($id)
    {
        return Rol::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = "";
        try {

            $rol = $this->setModel(Rol::findOrFail($id), $request);
            $rol->userupdate = $this->user->email;
            $rol->update();

            $result = ResultManager::genericSuccessMessage();

        } catch (QueryException $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::errorMessage('Es posible que haya una Rol registrado con el mismo nombre.');

        } catch (Exception $e) {
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);

            $result = ResultManager::gerericErrorMessage();
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result  = "";
        $errorMsg='No se puede eliminar. Hay Usuario que hacen uso de este Rol.';
        try {
        $numberDependents = User::where(['idrol'=> $id,'estado' => 'A'])->count();

         if($numberDependents == 0){

            $rol=Rol::findOrFail($id);
            $rol->estado = $rol->estado == RuleManager::DISABLED_STATE ? RuleManager::ACTIVE_STATE : RuleManager::DISABLED_STATE;
            $rol->update();

            if ($rol->estado == RuleManager::ACTIVE_STATE) {
                $result = ResultManager::successMessage('Rol Retaurado correctamente.');
            } else if($rol->estado == RuleManager::DISABLED_STATE) {
                $result = ResultManager::warningMessage('Rol eliminado correctamente.');
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

    public function select(Request $request)
    {
        $filters = $this->getFilters($request, new Rol());

        $roles = Rol::where($filters)
           /*  ->where('idrol','>',RuleManager::SYSTEM_ADMIN_ROLE) */
            ->orderBy('idrol', 'DESC')
            ->get();

        return $roles;
    }

    public function setModel(Rol $rol,Request $request): Rol
    {

        $rol->rol = $request->rol;
        return $rol;

    }
    
}
