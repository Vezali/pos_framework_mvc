<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\area;
use App\http\Requests\AreaRequest;


class AreaControler extends Controller
{
    //Index -- listagem dos dados
    //Create -- rota que vai redirecionar para a tela de criação(retornar view de cadastro).
    //Store -- salvar os dados. 
    //Update -- atualizar os dados.
    //Edit -- 
    //Destroy -- Deletar os dados
    //Show -- Visualizar os dados sem poder editar

    protected $areas;

    public function __construct(area $areas)
    {
        $this->area = $areas;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = $this->area->all();
        

        //dd($areas);
        //resources/view/areas
        return view('areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AreaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaRequest $request)
    {
        $area = new Area();
        $area->fill($request->all());
        $area->save();

        return redirect()->route('areas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

        $area = $this->area->findOrFail($id);
        return view('areas.edit', compact('area'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     *use App\http\Requests\AreaRequest;
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request, $id )
    {
        $area = $this->area->findOrFail($id);
        $area->fill($request->all());
        $area->save();

        return redirect()->route('areas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = $this->area->findOrFail($id);
        $area->delete();

        return redirect()->route('areas.index');
    }
}
