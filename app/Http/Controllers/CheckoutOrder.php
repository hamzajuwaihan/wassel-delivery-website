<?php

namespace App\Http\Controllers;

use App\Models\order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutOrder extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user_id = Auth::user()->id;
        $restaurant_id = $request->restaurant_id;
        $total = $request->total;
        $note = $request->note;
        $address = $request->address;
        $id = DB::table('order_details')->insertGetId(
            [
                'restaurant_id' => $restaurant_id,
                'user_id' => $user_id,
                'total' => $total,
                'note' => $note,
                'address' => $address,
                'phone'=> Auth::user()->phone, 
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        foreach (session()->get('order.meals') as $key => $value) {
            DB::table('order_items')->insert(
                [
                    [
                        'order_details_id' => $id,
                        'meal_id' => $key,
                        'amount' => $value
                    ]
                ]
            );
        }


        session()->forget("order");
        return redirect()->route('pastOrders')
            ->with('success', 'Order created successfully.');
    }
}
