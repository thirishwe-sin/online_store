<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function buyNowCheckOutForm($item_id){
        $item = Item::findOrFail($item_id);
        return view('check-out', compact('item'));
    }

    public function buyNowCheckOut(Request $request, $item_id){

        $order = new Order();
        $order->total_amount = $request->quantity * $request->price;
        $order->remark = $request->remark;
        $order->save();
        
        $order_details = new OrderDetail();
        $order_details->order_id = $order->id;
        $order_details->item_id = $item_id;
        $order_details->quantity = $request->quantity;
        $order_details->price = $request->price;
        $order_details->sub_total = $request->quantity * $request->price;
        $order_details->save();

        return view('order-complete');
    }
}
