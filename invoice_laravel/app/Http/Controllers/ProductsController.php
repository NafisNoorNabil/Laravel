<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customers;
use App\Models\Invoices;
use App\Models\OrderItems;
use App\Models\Orders;
class ProductsController extends Controller
{
    public function products(){
        $products =Products::all();
        return view("invoice.products", ["products"=>$products]);
    }
    public function buynow(Products $productId){
        return view("invoice.buynow",["productId"=>$productId]);
    }

    public function store(Request $request)
{
    // Validate input
    $request->validate([
        'name' => 'required|string',
        'qty' => 'required|integer|min:1',
    ]);

    // Find or create the customer
    $customer = Customers::where('name', $request->input('name'))->first();
    
    $order=new Orders();
    $order->customer_id=$customer->id;
    $order->order_date = now();
    $order->save();

    // Create order item
    $orderItem = new OrderItems();
    $orderItem->order_id = $order->id;
    $orderItem->product_id = $request->input('product_id');
    $orderItem->quantity = $request->input('qty');
    $orderItem->save();


    $product = Products::find($request->input('product_id'));
    $invoice= new Invoices();
    $invoice->order_id = $order->id;
    $invoice->invoice_date = now();
    $invoice->total_amount=$product->price*$request->input('qty');
    $invoice->save();
    return redirect()->route('invoice.products')->with('success', 'Product ordered successfully!');
}
}
