<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Invoices;
class InvoiceController extends Controller
{
    public function invoices()    {
        // Retrieve all invoices along with their associated orders, which in turn have the customer information
        $invoices = Invoices::with('order')->get();

        
        return view("invoice.invoices", ["invoices" => $invoices]);
    }
}
