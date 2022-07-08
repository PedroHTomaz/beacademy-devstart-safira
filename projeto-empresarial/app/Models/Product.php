<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'cust_price',
        'sale_price',
        'photo',
        'description'
    ];

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}