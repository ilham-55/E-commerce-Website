<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category added Successfully');

    }

    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category deleted Successfully');
    }

    public function view_product()
    {
        $category=category::all();
        return view('admin.product',compact('category'));

    }

    public function add_product(Request $request){
        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->dis_price;
        $product->category = $request->category;

        $image = $request->image;
        $imageName = "IMG-".uniqid().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imageName);

        $product->image = $imageName;

        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');
    }

    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }



}
