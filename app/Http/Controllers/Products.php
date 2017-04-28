<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class Products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->join('categories', 'categories.id', '=', 'products.category_id')->select('products.id', 'products.title', 'products.description', 'products.value', 'categories.title as category')->get();
        return view('view_product', ['products'=> $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->select('id', 'title')->get();
        return view('new_product', ['categories'=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'value' => 'required',
            'category' => 'required',
            ]);
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->value = $request->value;
        $product->category_id = $request->category;
        
        if ($product->save()){
            return back()->with('msj', 'S');
        }else{
            return back()->with('msj', 'N');
        }
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
        $product = Product::findOrFail($id);
        $categories = DB::table('categories')->select('id', 'title')->get();
        return view('edit_product', ['product'=> $product, 'categories'=> $categories]);
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'value' => 'required',
            'category' => 'required',
            ]);
        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->value = $request->value;
        $product->category_id = $request->category;
        
        if ($product->save()){
            return back()->with('msj', 'S');
        }else{
            return back()->with('msj', 'N');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }
}
