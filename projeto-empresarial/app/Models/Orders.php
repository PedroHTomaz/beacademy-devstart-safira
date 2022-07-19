<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orders extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'status'
  ];

  public function order_products()
  {
    return $this->hasMany(OrderProduct::class, 'order_id', 'id')
      ->select(DB::raw('product_id, sum(valor) as valores, count(1) as qtd'))
      ->groupBy('product_id')
      ->orderBy('product_id', 'desc');
  }

  public static function searchId($where)
  {
    $order = self::where($where)->first(['id']);
    return !empty($order->id) ? $order->id : null;
  }

  public function getOrders(string $search = null)
  {
    $orders = $this->where(function ($query) use ($search) {
      if ($search) {
        $query->where('email', $search);
        $query->orWhere('name', 'LIKE', "%{$search}%");
      };
    })->paginate(5);

    return $orders;
  }
}