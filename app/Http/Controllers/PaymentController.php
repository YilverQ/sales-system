<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Payment;
use App\Models\Admin;

class PaymentController extends Controller
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
        $payments = Payment::all();
        return view('payment.index')
                        ->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payment.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Creamos un usuario registro.
        $payment = new Payment;
        $payment->name = $request->input('name');
        $payment->save();

        session()->flash('message-success', '¡Un nuevo método de pago fue creado!');
        return to_route('payment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $item)
    {
        $admin = Admin::find($item->admin_id);
        return view('payment.show')
                ->with('payment', $item)
                ->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $item)
    {
        return view('payment.edit')
                    ->with('payment', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $item)
    {
        $item->name = $request->input('name');
        $item->save();
        
        session()->flash('message-success', '¡El método de pago fue actualizado!');
        return to_route('payment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $item)
    {
        $item->delete();
        
        session()->flash('message-success', '¡El método de pago fue eliminado!');
        return to_route('payment.index');
    }

    /**
     * Disable the specified resource from storage.
     */
    public function disabled(Payment $item)
    {
        $item->disabled = True;
        $item->save();
        
        session()->flash('message-success', '¡El método de pago fue deshabilitado!');
        return to_route('payment.index');
    }
}
