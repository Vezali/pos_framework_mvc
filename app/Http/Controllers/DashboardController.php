<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\Study;

class DashboardController extends Controller
{
    
    public function __construct(Study $dashboards)
    {
        $this->middleware('auth');
        $this->study = $dashboards;
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Em_Atraso = $this->study->where ('status', '=', 'Em atraso') -> count();
        $Em_Andamento = $this->study->where ('status', '=', 'Em andamento') -> count();
        $Finalizado = $this->study->where ('status', '=', 'Finalizado') -> count();
        
        return view('dashboards.index', compact('Em_Atraso', 'Em_Andamento', 'Finalizado'));
        
        
        
        
        $dashboards = $this->status->all();
            
        return view('dashboards.index', compact('dashboards'));
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dashboards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
