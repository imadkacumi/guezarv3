<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Cart;

class ClientController extends Controller
{
    public function home(){
        $sliders = Slider::All()->where('status', 1);

        $products = Product::All()->where('status', 1);
        return view('client.home')->with('sliders', $sliders)->with('products', $products);
    }
    public function paiement(){
        return view('client.paiement');
    }
    public function shop(){

        $categories = Category::All();

        $products = Product::All()->where('status', 1);
        return view('client.shop')->with('products', $products)->with('categories', $categories);
    }
    public function ajouteraupanier($id){

        $product = Product::find($id);

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return back();
    }
    public function panier(){
        if(!Session::has('cart')){
            return redirect('/cart');
        }

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);

        return view('client.panier', ['products' => $cart->items]);
    }
    public function login(){
        return view('client.login');
    }
    public function orders(){
        return view('admin.orders');
    }
}
