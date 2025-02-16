<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index()
    {
        $items=Cart::where('user_id', auth()->id())->where('quantity', '>', 0)->get()->load('product');
        return view('cart', compact('items'));
    }
    public function change(Request $request)
    {
        Cart::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'product_id' => $request->product_id,
            ],
            [
                'quantity' => \DB::raw('quantity + '.$request->quantity),
            ],
        );
        return redirect()->route('cart.index');
        return view('cart');
    }
    public function remove(Request $request)
    {
        Cart::where('user_id', auth()->id())
            ->where('product_id', $request->product_id)
            ->delete();
            return redirect()->route('cart.index');
        return view('cart');
    }
}
