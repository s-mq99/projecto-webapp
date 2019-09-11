<?php

namespace App\Http\Controllers;

use App\Option;
use App\Data;
use App\Product;
use Illuminate\Http\Request;


class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Product $product)
     {
        $options = Option::all();
        return view('options.create')->with('options',$options)->with('product', $product);
    }
        
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
            
        $option = new Option();

        $option->fill($request->all());
        $option->product_id = $product->id;

        $option->save();

        return redirect()->route('products.show', $product);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Option $option)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    public function destroy(Data $data)
    {
        $product = Product::findOrFail($data->product_id);
        $data->delete();
        return redirect()->route('products.show', $product);
    }
}
