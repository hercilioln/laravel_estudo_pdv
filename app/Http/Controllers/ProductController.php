<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Category;

class ProductController extends Controller
{
    
    public function index()
    {
       $products = Product::get();
       return view('admin.product.index', compact('products'));
    }

   
    public function create()
    {
        $categories = Category::get();        
        $providers = Provider::get();        
        return view('admin.product.create', compact('categories', 'providers'));
    }

    
    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }

   
    public function show(Product $product)
    {
        return view('admin.product.show', compact('products'));
    }

   
    public function edit(Product $product)
    {
        $categories = Category::get();        
        $providers = Provider::get();
        return view('admin.product.show', compact('products', 'categories', 'providers'));
    }

   
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
