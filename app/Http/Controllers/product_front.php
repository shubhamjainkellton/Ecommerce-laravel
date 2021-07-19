<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\product_front;
use Illuminate\Http\Request;

class product_front extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $result['data']=Product::all();
        return view('front/index',$result);
        //
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
     * @param  \App\Models\product_front  $product_front
     * @return \Illuminate\Http\Response
     */
    public function show(product_front $product_front)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_front  $product_front
     * @return \Illuminate\Http\Response
     */
    public function edit(product_front $product_front)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product_front  $product_front
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product_front $product_front)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_front  $product_front
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_front $product_front)
    {
        //
    }
}
