<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\CatergoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categorys = CatergoryModel::paginate(5);
        return view('admin.category.list',compact('categorys'));
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(CategoryRequest $request)
    {
        $category = new CatergoryModel();
        $category->name =$request->name;
        $category->status ='1';
        $category->prioty ='0';
        $category->save();
        return redirect()->route('category.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = CatergoryModel::findOrFail($id);
        return view('admin.category.edit',compact('category'));
    }


    public function update(CategoryRequest $request, $id)
    {
        $category = CatergoryModel::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        ProductModel::where("category_id",$id)->update(["category_id"=>1]);
        CatergoryModel::findOrFail($id)->delete();
        return redirect()->route('category.index');
    }
}
