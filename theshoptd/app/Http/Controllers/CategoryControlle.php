<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
class CategoryControlle extends Controller
{
    public function index(){
        return view('back-end.category.add-category');
    }

    public function SaveCategory(Request $request){
        /**********  Role no_1 Eloquent ORM   ***********/
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        /**********  Role no_2 Query Builder  ***********/

        // DB::table('categories')->insert([
        // 'category_name' => $request->category_name,
        // 'category_description' => $request->category_description,
        // 'publication_status' => $request->publication_status
        // ]);

        return redirect('/category')->with('message', '1 Category information saved successfully');

    }

    public function manageCategories(){

        $categories = Category::all();
        // return $categories;
        return view('back-end.category.manage-categories', ['categories'=>$categories]);
    }
    
    public function unpublishedCategory($id){
        $category = Category ::find($id);
        $category->publication_status = 0;
        $category->save();

        return redirect('/category/manage')->with('message','Category Unpulished');
    }

    public function publishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();
        return redirect('/category/manage')->with('message','Category Pulished');
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('message','1 Category Deleted');
    }

    public function editCategory($id){
        $category = Category::find($id);
        return view('back-end.category.edit-category', ['category'=> $category]);
    }

    public function updateCategory(Request $request){
        $category_id = $request->category_id;
        $category = Category::find($category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('category/manage')->with('message','Category Updated');

    }

}