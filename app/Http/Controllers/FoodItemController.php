<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FoodItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('food_index')->with('items', FoodItem::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('food_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     //'name' => 'unique:customers, "name"',
        //     'email' => 'required|unique:customers, "email"',
        // ]);

        $res = new FoodItem;
        $res->menu_id = $request->input('menu_id');
        $res->name = $request->input('name');
        $res->img_path = $request->input('img_path');
        $res->description = $request->input('description');
        $res->price = $request->input('price');
        $res->save();

        $request->session()->flash('msg', 'Success!');
        return redirect('food_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodItem  $food
     * @return \Illuminate\Http\Response
     */
    public function show(FoodItem $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodItem  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodItem $food, $id)
    {
        return view('food_edit')->with('item', FoodItem::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodItem $food)
    {
        $res = FoodItem::find($request->id);
        $res->menu_id = $request->input('menu_id');
        $res->name = $request->input('name');
        $res->img_path = $request->input('img_path');
        $res->description = $request->input('description');
        $res->price = $request->input('price');
        $res->save();

        $request->session()->flash('msg', 'Data Updated');
        return redirect('food_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodItem  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodItem $food, $id)
    {
        FoodItem::destroy(array('id', $id));
        return redirect('food_index');
    }

    public function getFoodItems()
    {
        return FoodItem::all();
    }

    public function order(Request $request, $id)
    {
        if (Auth::check()) {
            $item = FoodItem::find($id);
            $orderlist_id = DB::table('orderlist')->insertGetId(['user_id' => Auth::user()->id, 'created_at' => now(), 'updated_at' => now()]);
            DB::table('orderitem')->insert(['orderlist_id' => $orderlist_id, 'item_id' => $id, 'created_at' => now(), 'updated_at' => now()]);
            DB::table('payment')->insert(['orderlist_id' => $orderlist_id, 'amount' => $item->price, 'created_at' => now(), 'updated_at' => now()]);
            $request->session()->flash('msg', 'Your Order has been Placed!');
        } else {
            $request->session()->flash('msg', 'Please Login First!');
        }
        return redirect()->back();
    }
}
