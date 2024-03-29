<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function addcategory(){
        return view('admin.addcategory');
    }

    public function categories(){
        $categories = Category::All();

        return view('admin.categories')->with('categories', $categories);
    }
    public function savecategory(Request $request){
        $this->validate($request, ['category_name' => 'required']);
    
        $category = new Category();
        $category->category_name = $request->input('category_name');

        $category->save();
        return back()->with('status', 'La catégorie a été enregistrée avec succès !!!');
    }
    public function edit_category($id){
        $category = Category::find($id);

        return view('admin.editcategory')->with('category', $category);
    }
    public function updatecategory(Request $request){
        $category = Category::find($request->input('id'));

        $category->category_name = $request->input('category_name');
        $category->update();

        return redirect('/categories')->with('status', 'La catégorie a été modifiée avec succés !!!');
    }
    public function delete_category($id){
        $category = Category::find($id);

        $category->delete();

        return redirect('/categories')->with('status', 'La catégorie a été supprimée avec succès !!!');
    }
}
