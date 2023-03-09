<?php

namespace App\Http\Controllers;

use App\Models\LogError;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LogErrorController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $this->getFilters($request, new LogError(),[]);
        $perpage = $this->getLimitPagination($request);

        $querylogerror = LogError::where($filters);
        
        if ($request->exists('fechadesde')) {
            $fechadesde = Carbon::createFromFormat('d-m-Y', $request->fechadesde)->toDateString();
            $querylogerror->whereDate('dateoccurred', '>=', $fechadesde);
        }

        if ($request->exists('fechahasta')) {
            $fechahasta = Carbon::createFromFormat('d-m-Y', $request->fechahasta)->toDateString();
            $querylogerror->whereDate('dateoccurred', '<=', $fechahasta);
        }
        
        $logerror = $querylogerror->orderBy('id', 'DESC')
        ->paginate($perpage);
            
        return $logerror;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LogError  $logError
     * @return \Illuminate\Http\Response
     */
    public function show(LogError $logError)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LogError  $logError
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogError $logError)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LogError  $logError
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogError $logError)
    {
        //
    }
}
