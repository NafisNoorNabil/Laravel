<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InvoicesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


use App\Models\Invoices; 
use App\Models\Orders;
use App\Models\OrderItems;
use App\Models\Products;
use App\Models\Customers;
/**
 * Class InvoicesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InvoicesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Invoices::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/invoices');
        CRUD::setEntityNameStrings('invoices', 'invoices');

        
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::addColumn([
            'name' => 'order.customer.name', // Accessing the customer_id through the order relationship
            'label' => 'Customer Name',
            'type' => 'text'
        ]);
        CRUD::addColumn([
            'name' => 'order.customer.email', // Accessing the customer_id through the order relationship
            'label' => 'Email',
            'type' => 'text'
        ]);

        CRUD::addColumn([
            'name' => 'product',
            'label' => 'Product Name',
            'type' => 'text',
            'value' => function ($entry) {
                // Decode the JSON object
                $orderItem = json_decode($entry->order->orderItems->first());
                
                // Access the product_id
                $product_id = $orderItem->product_id;
                
                // Retrieve the product name using the product_id
                $product = Products::find($product_id);
                if ($product) {
                    return $product->name;
                } else {
                    return 'Product Not Found';
                }
            }
        ]);
        CRUD::addColumn([
            'name' => 'singleprice',
            'label' => 'Single Price',
            'type' => 'text',
            'value' => function ($entry) {
                // Decode the JSON object
                $orderItem = json_decode($entry->order->orderItems->first());
                
                // Access the product_id
                $product_id = $orderItem->product_id;
                
                // Retrieve the product name using the product_id
                $product = Products::find($product_id);
                if ($product) {
                    return $product->price . 'TK';
                } else {
                    return 'Product Not Found';
                }
            }
        ]);

        CRUD::addColumn([
            'name' => 'quantity',
            'label' => 'Quantity',
            'type' => 'text',
            'value' => function ($entry) {
                // Decode the JSON object
                $orderItem = json_decode($entry->order->orderItems->first());
                
                // Return the product_id property
                return $orderItem->quantity;
            }
        ]);

        CRUD::column('total_amount')->suffix("TK");
        CRUD::column('invoice_date');


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(InvoicesRequest::class);

        CRUD::field('order_id');

        CRUD::field('invoice_date');
        CRUD::field('total_amount');



        // Field for quantity
    
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
