<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{

    public function index()
    {
        $shops = Shop::paginate(5);
        return view('shops.list', compact('shops'));
    }


    public function create()
    {
        return view('shops.create');
    }


    public function store(CreateRequest $request)
    {
        $shop = new Shop();
        $shop->code = $request->code;
        $shop->shop_name = $request->shop_name;
        $shop->email = $request->email;
        $shop->phone = $request->phone;
        $shop->address = $request->address;
        $shop->manager = $request->manager;
        $shop->status = $request->status;
        $shop->save();
        return redirect()->route('shops.index')->with('success', 'Create successfully!');
    }


    public function show($id)
    {
//        return redirect()->route('shops.index');
    }


    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shops.edit', compact('shop'));
    }


    public function update(UpdateRequest $request, $id)
    {
        $shop = Shop::findOrFail($id);
        $shop->shop_name = $request->shop_name;
        $shop->email = $request->email;
        $shop->phone = $request->phone;
        $shop->address = $request->address;
        $shop->manager = $request->manager;
        $shop->status = $request->status;
        $shop->save();
        return redirect()->route('shops.index')->with('success', 'Update successfully!');
    }


    public function destroy($id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete($id);
        return redirect()->route('shops.index')->with('success', 'delete successfully!');
    }

    public function search(Request $request)
    {
        $shops = DB::table('shops')->where('shop_name', 'like', "%$request->search%")->paginate(3);
        return view('shops.list', compact('shops'));
    }
}
