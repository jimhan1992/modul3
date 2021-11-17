<?php

namespace App\Http\Controllers;

use App\Models\CatergoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $category = CatergoryModel::all();
        $products = ProductModel::paginate(5);
        return view('admin.products.list', compact('products','category'));
    }
    public function listAll()
    {
        $category = CatergoryModel::all();
        $products = ProductModel::paginate(5);
        return view('site.home', compact('products','category'));
    }

    public function create()
    {
        $categorys = CatergoryModel::all();
        return view('admin.products.create', compact('categorys'));
    }


    public function store(Request $request)
    {
        $product = new ProductModel();
        $product->name = $request->name;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        }
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->description = $request->description;
        $product->image_list = 'dsfsd';
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('products.index');
    }


    public function show($id)
    {
        $product = ProductModel::findOrFail($id);
        return view('site.show',compact('product'));
    }


    public function edit($id)
    {
        $product = ProductModel::findOrFail($id);
        $category = CatergoryModel::all();
        return view('admin.products.edit', compact('product','category'));
    }


    public function update(Request $request, $id)
    {
        $product = ProductModel::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        }
        $product->sale_price = $request->sale_price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('products.index');
    }


    public function destroy($id)
    {
        $product = ProductModel::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }

}
