<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        $data['cart'] = Cart::where('user_id',Auth::user()->id)->get();
        return view('cart',$data);
    }
    public function addcart($id)
    {
        $uid = Auth::user()->id;
        $input['produk_id'] = $id;
        $input['user_id'] = $uid;
        $input['qty'] = 1;
        $cek = Cart::where('user_id',$uid)->where('produk_id',$id)->first();
        if($cek){
            $cek->qty = $cek->qty+1;
            $status = $cek->save();
        }else{
            $status = Cart::create($input);
        }
        if ($status) {
            return redirect('shop');
        }
    }
    public function update(Request $request)
    {
        if(count($request->qty) > 0){
            foreach ($request->qty as $key => $q) {
                $cart = Cart::find($key);
                if($q == 0){
                    $status = $cart->delete();
                }else{
                    $cart->qty = $q;
                    $status = $cart->save();
                }
            }
            if ($status) {
                return redirect('cart');
            }
        }
        else{
            return redirect('cart');
        }
    }
}
