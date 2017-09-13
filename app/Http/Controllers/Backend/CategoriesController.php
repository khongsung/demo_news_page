<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Models\Categories;
use DateTime;

class CategoriesController extends Controller
{
    public function getCreate() {
    	return view('backend.categories.create');
    }

    public function store(CreateCategoryRequest $request) {
        $category = new Categories;
        $category->name = $request->name;
        $category->slug = str_slug($request->name, '-');
        $category->created_at = new DateTime();
        $category->save();

        return redirect()->route('getCatList');
    }

    public function getEdit($id) {
        $data = Categories::where('id', $id)->get();
    	return view('backend.categories.edit')->with(compact('data'));
    }

    public function postEdit(EditCategoryRequest $request,$id) {
        $category = Categories::find($id);
        $category->name = $request->name;
        $category->slug = str_slug($request->name, '-');
        $category->updated_at = new DateTime();
        $category->save();

        return redirect()->route('getCatList');
    }

    public function getDelete($id) {
        $category = Categories::find($id);
        $category->delete();
    	return redirect()->route('getCatList');
    }

    public function getList() {
        $data = Categories::all();
    	return view('backend.categories.list')->with(compact('data'));
    } 
}

