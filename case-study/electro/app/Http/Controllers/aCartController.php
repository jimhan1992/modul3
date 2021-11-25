<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CatergoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class aCartController extends Controller
{
    public function index()
    {
        $products= ProductModel::all();
        $category = CatergoryModel::all();
        return view('site.test',compact('products','category'));
    }
    public function aaddCart(Request $request,$id)
    {
        $product= ProductModel::findOrFail($id)->first();
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->aaddCart($product, $id);
            $request->Session()->put('Cart' , $newCart);
        }
        return view('layout.coresite.cart',compact('newCart'));
    }
}
