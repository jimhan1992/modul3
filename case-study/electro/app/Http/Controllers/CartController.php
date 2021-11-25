<?php

namespace App\Http\Controllers;

use App\Models\CatergoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    function index()
    {
        $oldCart = Session::get('cart');
        $category = CatergoryModel::all();
        $products = ProductModel::paginate(5);
        return view('site.home', compact('oldCart', 'category', 'products'));

    }

    function addToCart(Request $request)
    {
        $product = ProductModel::findOrFail($request->id);
        $cart = [
            "items" => [],
            "totalMoney" => 0,
            "totalQuantity" => 0,
        ];
        $oldCart = Session::get('cart');
        // xet cai gio hang k ton
        if (!$oldCart) {
            array_push($cart['items'], $product);
            $cart['totalMoney'] = $product->sale_price;
            $cart['totalQuantity'] = 1;
            // dua du lieu gio hang vao session
            Session::put('cart', $cart);
        } else {
            // gio hang da ton tai
//            $product=$product[$request->id];
            array_push($oldCart['items'], $product);
            $oldCart['totalMoney'] += $product->sale_price;
            $oldCart['totalQuantity']++;

            Session::put('cart', $oldCart);
        }

        return back();
    }

    function remove($index)
    {
        $oldCart = Session::get('cart');
        $productRemove = $oldCart['items'][$index];
        $oldCart['totalQuantity']--;
        $oldCart['totalMoney'] -= $productRemove->sale_price;
        array_splice($oldCart['items'], $index, 1);
        Session::put('cart', $oldCart);
        return back();
    }

}
