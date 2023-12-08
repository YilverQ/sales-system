<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Cashier;
use App\Models\Admin;

class CashierController extends Controller
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
        $cashiers = Cashier::all();
        return view('cashier.index')
                        ->with('cashiers', $cashiers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cashier.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Create a new element.
        $cashier = new Cashier;
        $cashier->name = $request->input('name');
        $cashier->lastname = $request->input('lastname');
        $cashier->identification_card = $request->input('identification_card');
        $cashier->email = $request->input('email');
        $cashier->password = $request->input('password');
        $cashier->number_phone = $request->input('number_phone');
        $cashier->admin_id = 1;
        $cashier->save();

        session()->flash('message-success', '¡Un nuevo cajero fue creado!');
        return to_route('cashier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cashier $item)
    {
        $admin = Admin::find($item->admin_id);
        return view('cashier.show')
                ->with('cashier', $item)
                ->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cashier $item)
    { 
        return view('cashier.edit')
                    ->with('cashier', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cashier $item)
    {
        //Check that the password field has changed.
        //Is assigned the new value.
        if ($request->input('password') != "****")
        {
            $item->password = $request->input('password');
        }
        
        //Is assigned the new values.
        $item->name = $request->input('name');
        $item->lastname = $request->input('lastname');
        $item->identification_card = $request->input('identification_card');
        $item->email = $request->input('email');
        $item->number_phone = $request->input('number_phone');
        $item->save();
        
        session()->flash('message-success', '¡cajero fue actualizado!');
        return to_route('cashier.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cashier $item)
    {
        $item->delete();
        
        session()->flash('message-success', '¡cajero fue eliminado!');
        return to_route('cashier.index');
    }
    
    /**
     * Disable the specified resource from storage.
     */
    public function disabled(Cashier $item)
    {
        $item->disabled = True;
        $item->save();
        
        session()->flash('message-success', '¡cajero fue deshabilitado!');
        return to_route('cashier.index');
    }
}
