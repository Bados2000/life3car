<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\uslugi;
use App\Models\order_uslugi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Cart;
use App\Http\Controllers\Services;
//use MongoDB\Driver\Session;
use Illuminate\Support\Facades\Session;

use Auth;

class OrderController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('orders.index',[
            'orders' => Order::paginate(10)
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
     * @return RedirectResponse
     */
    public function getItems(Request $request)
    {
        return $this->items;
    }

    public function store(Request $request):RedirectResponse
    {

        $cart = Session::get('cart',new CartController());
        $order = new Order();
        $order -> quantity = $request->quantity;
        $order -> price = $request->price;
        $order->user_id=Auth::id();
        $order -> save();

        $order_uslugi = new order_uslugi();
            foreach(session('cart') as $id => $details) {
                $order->services()->attach($id,['liczba' => $details['quantity']]);
            }


        $request->session()->forget('cart');
        return redirect('/orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req): \Illuminate\Http\Response
    {
        $data = uslugi::find($req->id);
        $data -> status=$req->status;
        $data -> data_start=$req->data_start;
        $data -> data_koniec=$req->data_koniec;
        $data -> save();
        $data = Order::all();
        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
