<?php

namespace App\Http\Controllers;

use App\Models\order_detail;
use App\Models\order_item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderOwners extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $order_info = DB::table('order_details')->join('users', 'order_details.user_id', '=', 'users.id')
            ->select('order_details.*', 'users.name')->where('order_details.restaurant_id', '=', Auth::user()->restaurant_id)->get();

        return view('owner.all-orders', [
            'order_info' => $order_info
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = order_detail::find($id);
        $user = User::find($order->user_id);
        // $meals = DB::table('order_items')
        //     ->join('order_details', 'order_details.id', '=', 'order_items.order_details_id')
        //     ->select('order_items.meal_id', 'order_items.amount','order_details.id')
        //     ->get();
        $meals = order_item::get()->where('order_details_id','=',$order->id);

        
        
        return view('owner.edit-order', [
            'order' => $order,
            'name' => $user->name,
            'meals' => $meals
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $order = order_detail::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect()->route('add-order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
