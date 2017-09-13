<?php

namespace App\Http\Controllers\Backend;

use App\Models\News;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNewRequest;
use App\Http\Requests\EditNewRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;

class NewsController extends Controller
{
    public function getCreate() {
        $cate = Categories::all();
    	return view('backend.news.create')->with(compact('cate'));
    }

    public function store(CreateNewRequest $request) {
        $new = new News;
        $new->title = $request->title;
        $new->description = $request->description;
        $new->content = $request->detail;
        //$new->image = $request->image;
        $new->status = $request->status;
        $new->category_id = $request->category_id;
        $new->user_id = Auth::user()->id;
        $new->created_at = new DateTime;

        if ($request->hasFile('image')) {
            $fileName = time() . $request->image->getClientOriginalName();
            $request->image = move_uploaded_file(public_path('uploads'), $fileName);
            $new->image = '/uploads/' . $fileName;
        } else {
            $new->image = "";
        }

        $new->save();

        return redirect()->route('getNewList');
    }

    public function getEdit($id)
    {  
        $news = News::where('id', $id)->get();
        $categories = Categories::all();
    	return view('backend.news.edit')->with(compact('news', 'categories'));
    }

    public function postEdit(EditNewRequest $request,$id)
    {
        $new = News::find($id);
        $new->title = $request->title;
        $new->description = $request->description;
        $new->content = $request->detail;
        //$new->image = $request->image;
        $new->status = $request->status;
        $new->category_id = $request->category_id;
        $new->updated_at = new DateTime;

        if ($request->hasFile('image')) {
            $fileName = time() . $request->image->getClientOriginalName();
            $request->image = move_uploaded_file(public_path('uploads'), $fileName);
            $new->image = '/uploads/' . $fileName;
        } else {
            $new->image = "";
        }

        $new->save();

        return redirect()->route('getNewList');
    }

    public function getDelete($id)
    {
        $news = News::find($id);
        $news->delete();
    	return redirect()->route('getNewList');
    }

    public function getList()
    {
        $news = News::all();
    	return view('backend.news.list')->with(compact('news'));
    }
}
