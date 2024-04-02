<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'order_id', 'invoice_date', 'total_amount',
    ];


    public function order()
    {
        return $this->belongsTo(Orders::class);
    }
}
