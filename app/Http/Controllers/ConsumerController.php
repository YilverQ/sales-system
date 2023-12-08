<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Consumer;


class ConsumerController extends Controller
{
    /**
     * Middlewares necessary to work
     * auth.admin -> check that the user has permissions to admin
     */
    public function __construct()
    {
        $this->middleware('auth.cashier');
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consumer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Create a new element.
        $consumer = new Consumer;
        $consumer->name     = $request->input('name');
        $consumer->lastname = $request->input('lastname');
        $consumer->identification_card = $request->input('identification_card');
        $consumer->number_phone  = $request->input('number_phone');
        $consumer->total_to_buys = 1;
        $consumer->last_entry    = now();
        $consumer->save();

        session()->flash('message-success', '¡Un nuevo consumidor fue creado!');
        return to_route('consumer.show', $consumer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Consumer $item)
    {
        return view('consumer.show')
                ->with('consumer', $item);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consumer $item)
    {
        return view('consumer.edit')
                    ->with('consumer', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consumer $item)
    {       
        $item->name = $request->input('name');
        $item->lastname = $request->input('lastname');
        $item->identification_card = $request->input('identification_card');
        $item->number_phone = $request->input('number_phone');
        $item->save();
        
        session()->flash('message-success', '¡El consumidor fue actualizado!');
        return to_route('consumer.show', $item);
    }
}
