<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use App\Models\Admin;


class ProductController extends Controller
{
    /**
     * Middlewares necessary to work
     * auth.admin -> check that the user has permissions to admin
     */
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()#: Response
    {
        $products = Product::all();
        return view('product.index')
                        ->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Create a new element.
        $product = new Product;
        $product->name = $request->input('name');
        $product->barcode = $request->input('barcode');
        $product->stock = $request->input('stock');
        $product->cost = $request->input('cost');
        $product->price = $request->input('price');
        $product->admin_id = 1;
        $product->save();

        session()->flash('message-success', '¡Un nuevo producto fue creado!');
        return to_route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $item)
    {
        $admin = Admin::find($item->admin_id);
        return view('product.show')
                ->with('product', $item)
                ->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $item)
    {
        return view('product.edit')
                ->with('product', $item);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $item)
    {
        $item->name = $request->input('name');
        $item->barcode = $request->input('barcode');
        $item->stock = $request->input('stock');
        $item->cost = $request->input('cost');
        $item->price = $request->input('price');
        $item->save();
        
        session()->flash('message-success', '¡El producto fue actualizado!');            
        return to_route('product.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $item)
    {
        $item->delete();

        session()->flash('message-success', '¡El producto fue eliminado!');            
        return to_route('product.index');
    }

    /**
     * Disable the specified resource from storage.
     */
    public function disabled(Product $item)
    {
        $item->disabled = True;
        $item->save();
        
        session()->flash('message-success', '¡El producto fue deshabilitado!');            
        return to_route('product.index');
    }
}
