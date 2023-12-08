<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Report;

class ReportController extends Controller
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
        //Retornamos una vista con todos los cashier.
        $reports = Report::all();
        
        return view('report.index')
                        ->with('reports', $reports);
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
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
