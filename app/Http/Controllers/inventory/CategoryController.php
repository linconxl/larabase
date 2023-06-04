<?php

namespace App\Http\Controllers\Inventory;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use App\Modules\Inventory\Entity\Category;

class CategoryController extends Controller
{
    public function Add()
    {
        return view("inventory.category.add");
    }
    public function AddPost()     //FormRequest $request
    {
        $name = request("name"); // get data from input name="name "
        $code = request("code");  // get data from input name="code "


        //insert in database
        $category = new Category();
        $category->name = $name;
        $category->code = $code;
        $category->save(); //
        return redirect("/inventory/category");
    }
    public function Index()
    {
        $data = Category::all(); //get all data from database 
        return view("inventory.category.index", ['categorylist' => $data]);
    }
    public function edit()
    {

        //data retrieval
        $id = request('categoryId');
        $category = Category::find($id);
        return view("inventory.category.edit", ['category' => $category]);
    }
    public function editpost()
    {
        $id = request('id');
        $name = request('name');
        $code = request('code');
        $category = category::find($id);
        $category->name = $name;
        $category->code = $code;
        $category->save();
        return redirect("/inventory/category");
    }
    public function delete()
    {
        $id = request('categoryId');
        $category = category::find($id);
        $category->delete();
        Alert::SetSuccessMessage("Category deleted");
        return redirect("/inventory/category");

    }
}

