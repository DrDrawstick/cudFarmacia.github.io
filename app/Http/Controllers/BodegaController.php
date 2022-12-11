<?php

namespace App\Http\Controllers;

use App\Bodega;
use CreateBodegasTable;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;


class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$bodegas = DB::select('select * from bodegas where id  = :id',['id' => 1]);
        return view('bodega.create', ['bodegas' => $bodegas]);*/
        $bodegas = DB::table('bodegas')->get();
        return view('index',['bodegas'=>$bodegas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        DB::insert('insert into bodegas(nombre, cantidad_medicamentos) values (?,?)');
        //DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bodegas = new Bodega();
        //$bodegas ->id = $request->id;
        $bodegas->nombre = $request->nombre;
        $bodegas->cantidad_medicamentos = $request->cantidad_medicamentos;
        $bodegas->save();
        return redirect('bodega')->with('message', 'Guardado Satisfactoriamente !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function show(Bodega $bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodega $bodega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */

    public function actualizar($id)
    {
        $bodegas = Bodega::find($id);
        return view('bodega.edit', ['bodega' => $bodegas]);
    }

    public function update(Request $request, $id)
    {
        $bodegas = Bodega::find($id);
        $bodegas->nombre = $request->nombre;
        $bodegas->cantidad_medicamentos = $request->cantidad_medicamentos;
        $bodegas->save();
        Bodega::flash('message', 'Editado Satisfactoriamente !');
        return FacadesRedirect::to('bodega');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bodegas = Bodega::find($id);

        Bodega::destroy($id);

        return FacadesRedirect::to('bodega');
    }
}
