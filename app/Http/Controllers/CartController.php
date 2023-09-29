<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id) {
        $menu = Menu::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [

                "name" => $menu->name,
                "category_id" => $menu->category_id,
                "price" => $menu->price,
                "image" => $menu->image,
                "description" => $menu->description,
                "quantity" => 1,
            ];
        }

        session()->put('cart', $cart);
        $storedCart = new Cart();
        $storedCart->menu_name = $menu->name;
        $storedCart->menu_id = $menu->id;
        $storedCart->user_id = auth()->id();
        $storedCart->price = $menu->price;
        $storedCart->image = $menu->image;
        $storedCart->quantity = 1;
        $storedCart->category_name = $menu->category->name;
        $storedCart->save();
        return redirect()->back()->with('success', 'Menu added to cart successfully!');
    }

    public function index() {
        $carts = Cart::all();
        return view('cart', compact(['carts']));
    }
}
