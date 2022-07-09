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

    public function getOrders(string $search = null)
    {
      $orders = $this->where(function ($query) use ($search)
      {
        if($search){
        $query->where('email', $search);
        $query->orWhere('name', 'LIKE', "%{$search}%");
        
        };
      })->paginate(5);

      return $orders;
    }
}