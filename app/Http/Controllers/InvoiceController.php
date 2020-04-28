<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class InvoiceController extends Controller
{
    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        Customer::create($request->customer);
        return 'to be continue';
    }
}
