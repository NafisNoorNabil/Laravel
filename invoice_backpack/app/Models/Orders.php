<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use CrudTrait;
    
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'customer_id', 'order_date',
    ];
    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

    
    public function orderItems() {
        return $this->hasMany(OrderItems::class, 'order_id'); // Assuming 'order_id' is the correct foreign key
    }

    
    public function invoice()
    {
        return $this->hasOne(Invoices::class);
    }
}
