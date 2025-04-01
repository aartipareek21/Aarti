<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('website.order'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Get Product Price
        $product = product::findOrFail($request->product_id);
        $totalAmount = $product->price * $request->quantity;

        // Save Order in Database
        Order::create([
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),  // Get logged-in user ID
            'quantity' => $request->quantity,
            'total_amount' => $totalAmount,
        ]);

        return redirect()->back()->with('success', 'Order Placed Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
         $data=order::all();
         return view('admin.manage_orders',['data'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
}
