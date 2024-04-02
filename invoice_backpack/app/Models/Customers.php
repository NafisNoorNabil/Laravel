<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'email'];

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

}
