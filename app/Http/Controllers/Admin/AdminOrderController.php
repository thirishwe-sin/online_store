<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller
{
    public function index(){
        $orders = Order::paginate(2);
        return view('order.index', compact('orders'));
    }
}
