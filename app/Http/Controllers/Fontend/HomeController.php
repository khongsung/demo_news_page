<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Categories;
use Auth;

class HomeController extends Controller
{
	
    public function getIndex()
    {
    	$news = News::all();
    	$categories = Categories::all();
    	return view('fontend.home.index')->with(compact('news', 'categories'));
    }

    public function getCategories($id)
    {
    	$categories = Categories::all();
    	$news = News::where('category_id', $id)->get();
    	return view('fontend.categories.index')->with(compact('news', 'categories'));
    }

    public function getDetail($id)
    {
    	$news = News::where('id', $id)->get();
    	$categories = Categories::all();
    	return view('fontend.details.index')->with(compact('news', 'categories'));
    }
}
