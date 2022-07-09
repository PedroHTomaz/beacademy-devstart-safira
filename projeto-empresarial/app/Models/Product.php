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

    public function getProducts(string $search = null)
    {
      $products = $this->where(function ($query) use ($search)
      {
        if($search){
        $query->where('id', $search);
        $query->orWhere('name', 'LIKE', "%{$search}%");
        
        };
      })->paginate(5);

      return $products;
}

}