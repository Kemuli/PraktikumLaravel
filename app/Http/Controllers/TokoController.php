<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function admin()
    {
        $products = Product::all();
        return view ('toko/admin', compact('products'));
    }

    public function costumer()
    {
        
        return view('toko/costumer');
    }
    public function create()
    {
        return view('toko/create');
    }
    public function store(request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        product::create($request->all());
        return redirect(route('produk.admin'))->with ('success','product created successfully');
    }

    public function edit(product $product)
    {
        return view('toko/edit', compact('product'));
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect(route('produk.admin'))->with ('success','product deleted successfully');
    }
    public function update(request $request, product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            ]);
        $product->update($request->all());
        return redirect(route('produk.admin'))->with ('success','product updated successfully');
    }


}
