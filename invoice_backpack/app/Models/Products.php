<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use CrudTrait;
    protected $primaryKey = 'id';
    use HasFactory;
    protected $fillable = [
        'name', 'price', 'description',
    ];
    public function orderItems()
    {
        return $this->hasMany(OrderItems::class);
    }
}
