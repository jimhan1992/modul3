<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\CatergoryModel;
use App\Models\Order_detailModel;
use App\Models\OrderModel;
use App\Models\ProductModel;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = OrderModel::paginate(5);
        return view('admin.orders.list',compact('orders'));
    }


    public function create(OrderRequest $request)
    {
        try {
            $cart = session('cart');
            $order = new OrderModel();
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->note = $request->note;
            $order->user_id = Auth::user()->id;
            $order->save();
            if (count($cart) > 0) {
                foreach ($cart as $key => $item) {
                    $order_detail = new Order_detailModel();
                    $order_detail->order_id = $order->id;
                    $order_detail->product_id = $item['id'];
                    $order_detail->quantity = $item['quantity'];
                    $order_detail->price = $item['price'];
                    $order_detail->save();
                    session()->forget('name');
                }
                session()->forget('cart');
                return back()->with('success', 'Order successfully!');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

        $order_detail = Order_detailModel::all()->where('order_id','=',$id);
//        dd($order_detail);
        return view('admin.orders.detail',compact('order_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function count()
    {
        $countOrder = OrderModel::all()->count();
        $countProduct = ProductModel::all()->count();
        $countCategory = CatergoryModel::all()->count();
        $countUser = User::all()->count();
        $products =ProductModel::paginate(5);
        return view('admin.dashboard',compact('products','countOrder','countProduct','countCategory','countUser'));
    }
}
