<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class OrderController extends Controller
{
    public function buyNowCheckOut($item_id){
        $item = Item::findOrFail($item_id);
        return view('check-out', compact('item'));
    }
}
