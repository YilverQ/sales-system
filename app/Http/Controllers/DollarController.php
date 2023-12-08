<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Dollar;

class DollarController extends Controller
{
    /**
     * Middlewares necessary to work
     * auth.admin -> check that the user has permissions to admin
     */
    public function __construct()
    {
        $this->middleware('auth.admin')->only('index');
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dollars = Dollar::all();
        return view('dollar.index')
                ->with('dollars', $dollars);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dollar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Dollar;
        $product->dollar_date   = now();
        $product->value         = $request->input('value');
        $product->save();

        $message = '¡Se ha indicado el precio del dólar del día' . $product->dollar_date .  '!';
        session()->flash('message-success', $message);
        return to_route('dollar.index');
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dollar $item)
    {
        return view('dollar.edit')
                    ->with('dollar', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dollar $item)
    {
        $item->dollar_date   = now();
        $item->value         = $request->input('value');
        $item->save();
        
        $message = '¡Se ha actualizado el precio del dólar del día' . $product->dollar_date .  '!';
        session()->flash('message-success', $message);
        return to_route('dollar.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function check()
    {
        //Retornamos una vista para actualizar un registro. 
        //Debemos enviar el registro a la vista. 
    }
}
