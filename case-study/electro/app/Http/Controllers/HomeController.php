<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfile;
use App\Models\CatergoryModel;
use App\Models\Order_detailModel;
use App\Models\OrderModel;
use App\Models\ProductModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{


    public function checkout(){
        $oldCart = Session::get('cart');
        return view('site.checkout',compact('oldCart'));
    }
    public function viewcart(){
        return view('site.view-cart');
    }

    public function cart()
    {
        return view('site.cart') && view('site.show');
    }

    public function index(){
        $products = ProductModel::all();
        return view('site.home',compact('products'));
    }


    public function addToCart($id)
    {
        $product = ProductModel::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id"=>$product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->sale_price,
                "image" => $product->image,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function remove(Request $request ,$id)
    {
        if($id) {

            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        return back();
    }
    public function search(Request $request){
        $paginate = ProductModel::paginate();
        $products = DB::table('products')->where('name','like',"%$request->search%")->paginate(3);
        return view('site.search',compact('products','paginate'));
    }
    public function searchCategory(Request $request){
        $category = DB::table('products')->where('category_id','like',"%$request%")->get();
        dd($request);
        return view('site.search',compact('category'));
    }
    public function profile($id){
        $user = User::findOrFail($id);
        $order = OrderModel::all()->where('user_id', "=", $user->id);

        foreach ($order as $item) {
            $order_detail1 = Order_detailModel::all()->where('order_id', "=", $item->id);
        }
        $order_detail = $order_detail1 ?? $order_detail1 = [];
        return view('site.profile', compact('user', 'order', 'order_detail'));

    }

    public function updateProfile(UpdateProfile $request,$id){
        $user = User::findOrFail($id);
        $user->name=$request->name;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $user->image = $path;
        }
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->save();
        return redirect()->back()->with('success', 'Update successfully!');
    }
}
