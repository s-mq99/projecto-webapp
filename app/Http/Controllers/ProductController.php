<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::where('status', '=', 'Em curso')->paginate(10);

        if($request->ver=='all') {
            $products = Product::paginate(10);
        }

        if($request->has('name')){
            $products = Product::where('name', '=', $request->name)->paginate(10);
        }

        return view('products.index')->with('products',$products);

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $products = Product::all();
        return view('products.create')->with('products',$products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->fill($request->all());

        $product->save();

       return redirect()->route('products.show', ['product'=>$product]);

   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view ('products.show')->with('product', $product);
    }

    /*function show ($id) {
        $product = Product::where('id', '=', $id)->get()[0];
        return view (product)->with('product', $product);
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());

        $product->save();

        return redirect()->route('products.index',['product'=>$product]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');

    }


    public function getSearchResult(): SearchResult
    {

        $url = route('products.index', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
         );
    }
}
