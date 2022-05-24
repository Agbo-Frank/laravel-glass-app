<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{
     /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cart $cart, $id)
    {
        $carts = Cart::all() ;
        return $carts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = new Cart;
 
        $cart->user_id = $request->user_id;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;
 
        $cart->save();
        return redirect("/product")->with('status', 'Product uploaded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show($cart)
    {
        $carts = Cart::where('user_id', '=', $cart)->get();
        $carts_with_product = array();

        foreach($carts as $cart_){
            $cart_['product'] = $cart_->product;
            array_push($carts_with_product, $cart_);
        }
        return view('cart', ["carts" => $carts_with_product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cart)
    {
        Cart::destroy($cart);
        return redirect();
    }
}
