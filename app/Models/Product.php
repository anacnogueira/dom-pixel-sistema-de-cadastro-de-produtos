<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'amount',
        'stock'
    ];

    protected function amount(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) =>  number_format($value, 2, ','),
            set: fn (string $value) => Str::replace(',', '.', $value),
        );
    }
}
