<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiCheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $id_order = $request->orders_id;

        $order = Orders::find($id_order);

        $response = Http::withHeaders([
            'content-type' => 'application/json',
            'token' => 'UGFyYWLDqW5zLCB2b2PDqiBlc3RhIGluZG8gYmVtIQ=='

        ])->post('https://tracktools.vercel.app/api/checkout', [
            "transaction_type" => $request->transaction_type,
            "transaction_amount" => $request->transaction_amount,
            "transaction_installments" => $request->transaction_installments,
            "customer_name" => $request->customer_name,
            "customer_document" => $request->customer_document,
            "customer_card_number" => $request->customer_card_number,
            "customer_card_expiration_date" => $request->customer_card_expiration_date,
            "customer_card_cvv" => $request->customer_card_cvv
        ]);

        $status = $response['transaction']['status'];

        if ($status == 'paid') {
            $orders_status = [
                'status' => 'PA'
            ];
        };

        $order->update($orders_status);

        return redirect()->route('orders.concluded');
    }
}