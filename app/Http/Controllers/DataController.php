<?php

namespace App\Http\Controllers;

use App\Data;
use App\Product;    

use Illuminate\Http\Request;

    class DataController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
           
           }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create($id)

        {
            $product = Product::find($id);
            $datas = Data::all();
            return view('data.create')->with('datas',$datas)->with('product', $product);
        }
        

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request, $id)
        {
            
            $product = Product::find($id);
            $data = new Data();

            $data->fill($request->all());
            $data->product_id = $product->id;

            $data->save();

           return redirect()->route('products.show', $product);
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Data  $data
         * @return \Illuminate\Http\Response
         */
        public function show(Data $data)
        {
            
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Data  $data
         * @return \Illuminate\Http\Response
         */
        public function edit(Data $data)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Data  $data
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Data $data)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Data  $data
         * @return \Illuminate\Http\Response
         */
        public function destroy(Data $data)
        {
            $product = Product::findOrFail($data->product_id);
            $data->delete();
            return redirect()->route('products.show', $product);
        }
    }

