<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer_create');
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
        $this->validate($request, [
            //'name' => 'unique:customers, "name"',
            'email' => 'required|unique:customers, "email"',
        ]);

        $res = new Customer;
        $res->name = $request->input('name');
        $res->password = $request->input('password');
        $res->email = $request->input('email');
        $res->phone = $request->input('phone');
        $res->address = $request->input('address');
        $res->save();

        $request->session()->flash('msg', 'Success!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
        return view('customer_show')->with('customers', Customer::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer, $id)
    {
        //
        return view('customer_edit')->with('customer', Customer::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $res = Customer::find($request->id);
        $res->name = $request->input('name');
        $res->password = $request->input('password');
        $res->email = $request->input('email');
        $res->phone = $request->input('phone');
        $res->address = $request->input('address');
        $res->save();

        $request->session()->flash('msg', 'Data Updated');
        return redirect('customer_show');
        //return $request->input();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer, $id)
    {
        //
        /*echo '<pre>';
        print_r($id);*/
        Customer::destroy(array('id', $id));
        return redirect('customer_show');
    }
}
