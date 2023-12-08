<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Invoice;
use App\Models\Cashier;
use App\Models\Dollar;
use App\Models\Product;
use App\Models\Record;

class InvoiceController extends Controller
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
    public function index()#
    {
        $invoices = Invoice::select('cashiers.name',
                                    'dollars.dollar_date', 
                                    'invoices.invoice_time', 
                                    'invoices.total_to_paid',
                                    'invoices.id')
                            ->join('cashiers', 'cashiers.id', '=', 'invoices.cashier_id')
                            ->join('dollars', 'dollars.id', '=', 'invoices.dollar_id')
                            ->get();
        return view('invoice.index')
                    ->with('invoices', $invoices);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_invoice)#: Response
    {
        $invoice  = Invoice::find($id_invoice);
        $cashier  = $invoice->cashier;
        $dollar   = $invoice->dollar;
        $consumer = $invoice->consumer;
        $payments = $invoice->payments;
        $records  = $invoice->records;
        $products = Record::select( 'products.name',
                                    'records.quantity',
                                    'products.price')
                                ->join('products', 'products.id', '=', 'records.product_id')
                                ->get();

        return view('invoice.show')
                ->with('invoice', $invoice)
                ->with('cashier', $cashier)
                ->with('dollar', $dollar)
                ->with('consumer', $consumer)
                ->with('products', $products);
    }
}
