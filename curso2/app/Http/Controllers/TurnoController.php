<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TurnoCreatePrequest;
use App\Http\Requests\TurnoActualizarPrequest;
use App\Turno;
use Redirect;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnosx = Turno::paginate(4);
        return view('turno.index',compact('turnosx'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turno.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TurnoCreatePrequest $request)
    {
        $turnoxs = new Turno;
        $turnoxs->nombreTurno = $request->nombreTurno;
        $turnoxs->save();
        // dd($request->all());
        // dd($request->descripcion);
        return redirect('/turnos')->with('message','store');
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
        $turno = Turno::find($id);
        return view('turno.edit',['turno'=>$turno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TurnoActualizarPrequest $request, $id)
    {
        //dd($request->all());
        $turnoxs = Turno::find($id);
         $turnoxs->nombreTurno = $request->nombreTurno;
         $turnoxs->save();
        return Redirect::to('turnos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Turno::destroy($id);
        return Redirect::to('turnos');
    }
}
