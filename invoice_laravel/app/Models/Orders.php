<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'customer_id', 'order_date',
    ];
    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

    
    public function orderItems()
    {
        return $this->hasMany(OrderItems::class);
    }

    
    public function invoice()
    {
        return $this->hasOne(Invoices::class);
    }
}
