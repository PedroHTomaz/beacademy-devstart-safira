<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'products_id',
        'value',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(Registered::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}