<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'amount',
        'stock'
    ];

    public function setAmountAttribute($value) {
        $this->attributes['amount'] = Str::replace(',', '.', $value);
  }
}
