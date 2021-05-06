<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function getOrders(Request $request)
    {
        //$orders = DB::select('select * from food_items join orderitem on food_items.id = orderitem.item_id where orderitem.user_id in (select * from orderlist where orderitem.user_id = orderitem.orderlist_id and user_id = ?)', [Auth::user()->id]);
        $orders = DB::select('select * from orderlist join orderitem on orderlist.id = orderitem.orderlist_id join food_items on food_items.id = orderitem.item_id where user_id = ?', [Auth::user()->id]);
        //dd($orders);
        return view('account')->with('orders', $orders)->with('user', Auth::user());
    }
}
