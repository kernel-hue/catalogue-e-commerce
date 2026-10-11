<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request, Product $product)
    {
        $cart=session()->get('cart',[]);
        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
        }else{
        $cart[$product->id]=[
            'name'=>$product->name,
            'price'=>$product->price,
            'image'=>$product->image,
            'quantity'=>1,
        ];
        }

        session()->put('cart',$cart);

        return back()->with('success','Produit ajouté au panier');
    }

    public function index()
    {
        $cart=session()->get('cart',[]);
        return view('cart',compact('cart'));
    }

    public function remove($id)
    {
       $cart=session()->get('cart',[]);
       unset($cart[$id]);
       session()->put('cart',$cart);

       return back()->with('success','Produit retiré du panier');
    }

    public function update(Request $request, $id)
    {
        $cart=session()->get('cart',[]);

        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']=max(1,(int) $request->quantity);
            session()->put('cart',$cart);
        }

        return back();
    }
    
}
