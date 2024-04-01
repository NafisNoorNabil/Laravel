<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'email'];

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

}
