<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsType;

class ProductsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type)
    {
        $Title=ProductsType::where('id',$type)->where('status', 1)->get();
        return view ('Products.catalogue',compact('Title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductsType $productsType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductsType $productsType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductsType $productsType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductsType $productsType)
    {
        //
    }
}