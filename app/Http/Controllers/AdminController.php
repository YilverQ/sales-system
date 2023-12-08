<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Admin;


class AdminController extends Controller
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
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        ////Retornamos una vista de un elemento.
        $admin = Admin::find(1);
        return view('admin.show')
        ->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //Retornamos una vista para actualizar un registro. 
        //Debemos enviar el registro a la vista. 
        
        $admin = Admin::find(1);
        return view('admin.edit')
                    ->with('admin', $admin);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $item)
    {
        //Método para actualizar un registro.
        if ($request->input('password') != "****")
        {
            $item->password = $request->input('password');
        }
            
        $item->name = $request->input('name');
        $item->lastname = $request->input('lastname');
        $item->identification_card = $request->input('identification_card');
        $item->email = $request->input('email');
        $item->number_phone = $request->input('number_phone');
        $item->save();
        
        session()->flash('message-success', '¡El administrador fue actualizado!');
        return to_route('admin.index');
    }
}
