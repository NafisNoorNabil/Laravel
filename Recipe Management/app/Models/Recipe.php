<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'ingredients',
        'instructions',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }


    protected function title(): Attribute
    {
        return Attribute::make(
            get: function (string $value) {
                return strtoupper($value);
            }
        );
    }
    
    protected function ingredients(): Attribute
    {
        return Attribute::make(
            get: function (string $value) {
                if (strpos($value, ',') !== false) {
                    return array_map('ucwords', explode(',', $value));
                } else {
                    return ucfirst($value);
                }
            }
        );
    }
    
    protected function instructions(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucfirst($value),
        );
    }
}
