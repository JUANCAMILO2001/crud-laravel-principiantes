<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'price' => 'required',
        ]);
        $perros = $request->all();
        Product::create($perros);
        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'price' => 'required',
        ]);
        $xas = $request->all();
        $product->update($xas);
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
