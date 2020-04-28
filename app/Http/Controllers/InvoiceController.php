<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Invoice;

class InvoiceController extends Controller
{
    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->customer);
        Invoice::create($request->invoice + ['customer_id' => $customer->id]);
        return 'to be continue';
    }
}
