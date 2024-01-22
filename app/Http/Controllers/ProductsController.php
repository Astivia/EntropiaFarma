<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductsType;

class ProductsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $Title=ProductsType::where('id',$type)->where('status', 1)->get();
        return view ('Products.catalogue',compact('Title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view ('Generos.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $datos=$request->all();
    //     Genero::create($datos);
    //     return redirect ('/generos'); 
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $Generos=Genero::find($id);
    //      return view ('Generos.read', compact('Generos'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $Generos=Genero::find($id);
    //     return view ('Generos.edit',compact('Generos'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $datos = $request->all();
    //     $genero = Genero::find($id);
    //     $genero->update($datos);
    //     return redirect('/generos');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $clasficacion =Genero::find($id);
    //     $clasficacion->status=0;
    //     $clasficacion->save();

    //     return redirect('generos');
    // }
}