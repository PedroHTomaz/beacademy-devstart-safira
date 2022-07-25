<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'valor',
        'status'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function getQtdProduct()
    {
        $id_user = Auth::id();
        $order = Orders::where('user_id', $id_user)->first('id');

        if (!empty($order)) {
            $qtdProduct = DB::table('order_products')
                ->select(DB::raw('count(1) as qtd'))
                ->where('order_id', $order->id)
                ->groupBy('order_id')
                ->get();

            return $qtdProduct[0]->qtd;
        }

        return 0;
    }

    public static function getQtdProductCart()
    {
        $id_user = Auth::id();
        $order = Orders::where('user_id', $id_user)->where('status', 'RE')->first('id');

        if (!empty($order)) {
            $qtdProduct = DB::table('order_products')
                ->select(DB::raw('count(1) as qtd'))
                ->where('order_id', $order->id)
                ->groupBy('order_id')
                ->get();

            return $qtdProduct[0]->qtd;
        }

        return 0;
    }
}