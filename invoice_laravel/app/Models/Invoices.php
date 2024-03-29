<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;
    
    protected $fillable = ['customer_id', 'invoice_date', 'due_date', 'total_amount', 'status'];

    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

    public function items()
    {
        return $this->hasMany(Items::class);
    
    }
}
