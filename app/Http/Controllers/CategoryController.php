<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;
use App\Category;

//use DB;

class CategoryController extends Controller
{
    public function category(){
        return view('admin.category.add-category');
    }

    public function addCategory(Request $request){

        $category = new Category();

        $category->category_name      = $request->category_name;
        $category->category_for       = $request->category_for;
        $category->publication_status = $request->publication_status;

        $category->save();

        return redirect('/category')->with('message','category saved successfully');

//       Category::create($request->all());

//          DB::table('categories')->insert([
//              'category_name'           => $request->category_name,
//              'category_description'    => $request->category_description,
//              'publication_status'      => $request->publication_status
//          ]);





    }
}
