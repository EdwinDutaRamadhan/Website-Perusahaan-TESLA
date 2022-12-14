<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Shop;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::user()) {
            $id = Crypt::decryptString($request->id);
            $user = User::find($id);
            $data = $user->carts;
            $total = 0;
            foreach ($data as $d) {
                $total += ($d->price * $d->quantity);
            }

            return view('public.shop.shop-cart', [
                'data' => $data,
                'total' => $total,
            ]);
        }
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset(Auth::user()->role) and Auth::user()->role == 'User') {
            $idBarang = Crypt::decryptString($request->id);
            $id = Auth::user()->id;
            ($request->quantity == null) ? $request->quantity = 0 : $request->quantity;

            //ID Cart Rules
            $idRules = "1" . $id . $idBarang;

            if (Cart::find($idRules)) {
                if (Cart::find($idRules)->quantity + $request->quantity > 5) {
                    return redirect()->back()->with('quantity', "You've exceeded the maximum quantity allowed per order");
                }
                Cart::find($idRules)->update([
                    'id' => $idRules,
                    'user_id' => $id,
                    'title' =>  Shop::find($idBarang)->title,
                    'type' => Shop::find($idBarang)->type,
                    'price' => Shop::find($idBarang)->price,
                    'quantity' => (Cart::find($idRules)->quantity + $request->quantity),
                    'image' => Crypt::decryptString($request->image)
                ]);
            } else {

                Cart::create([
                    'id' => $idRules,
                    'user_id' => $id,
                    'title' =>  Shop::find($idBarang)->title,
                    'type' => Shop::find($idBarang)->type,
                    'price' => Shop::find($idBarang)->price,
                    'quantity' => $request->quantity,
                    'image' => Crypt::decryptString($request->image)
                ]);
                if (Cart::find($idRules)->quantity > 5) {
                    Cart::where('id', $idRules)->delete();
                    return redirect()->back()->with('quantity', "You've exceeded the maximum quantity allowed per order");
                }
            }
            $pathId = Crypt::encryptString(Auth::user()->id);
            return redirect()->route('cart', ['id' => $pathId]);
        } else {

            return redirect()->route('user-login')->with('checkout', 'Login first! ');
        }
    }
    public function remove(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        Cart::where('id', $id)->delete();
        $pathId = Crypt::encryptString(Auth::user()->id);
        return redirect()->route('cart', ['id' => $pathId]);
    }

    public function checkout(Request $request)
    {
        if (Auth::user()) {
            if (Auth::user()->role == 'User') {
                return view('public.shop.shop-checkout', [
                    'data' => Auth::user()->carts,
                    'total' => $request->total,
                ]);
            } else {
                abort(404);
            }
        } else {
            return redirect()->back();
        }
    }
    public function order(Request $request)
    {
        $paymentMethod = $request->paymentMethod;
        $id =  Auth::user()->id;
        //ID Order Rules

        $cart = User::find($id)->carts;
        foreach ($cart as $c) {
            Order::create([
                'user_id' => $c->user_id,
                'title' =>  $c->title,
                'type' => $c->type,
                'price' => $c->price,
                'quantity' => $c->quantity,
                'method' => $paymentMethod,
                'payment' => false,
                'image' => $c->image
            ]);
            Cart::find($c->id)->delete();
        }
        $pathId = Crypt::encryptString(Auth::user()->id);
        return redirect()->route('order', ['id' => $pathId]);
    }

    public function orderPage(Request $request){
        $id = Crypt::decryptString($request->id);
        return view('public.shop.shop-order',[
            'dataOrder' => User::find($id)->orders->where('payment', false),
            'dataOrderSuccess' => User::find($id)->orders->where('payment', true)
        ]);
    }
    public function updateOrder(Request $request){
        $id = Crypt::decryptString($request->id);
        Order::where('id', $id)->update([
                'payment' => true,
        ]);
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }
}
