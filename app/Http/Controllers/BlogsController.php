<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    //
    public function index(){
        $blogs=Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $input = $request->all();
        $blog = Blog::create($input);
        return redirect('/blogs');
    }

    public function show($id){
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id){
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $blog = Blog::findOrFail($id);
        $blog->update($input);
        return view('blogs.show', compact('blog'));
        // return redirect('blogs');
    }

    public function delete(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('blogs');
    }
}
