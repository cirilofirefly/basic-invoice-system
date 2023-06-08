<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceRequest;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        return Invoice::all();
    }

    public function store(InvoiceRequest $request)
    {
        return Invoice::store($request->validated());
    }

    public function show(Invoice $invoice)
    {
        return $invoice;
    }

    public function update(InvoiceRequest $request, Invoice $invoice)
    {
        return $invoice->update($request->validated());
    }

    public function destroy($id)
    {
        Invoice::destroy($id);
    }
}
