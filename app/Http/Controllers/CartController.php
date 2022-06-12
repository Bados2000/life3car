<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;



class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = Cart::getContent();
        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        Cart::add([
            'id' => $request->id,
            'typ_uslugi' => $request->typ_uslugi,
            'nazwa_uslugi' => $request->nazwa_uslugi,
            'czas_realizacji' => $request->czas_realizacji,
            'cena_brutto' => $request->cena_brutto,
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }



    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
