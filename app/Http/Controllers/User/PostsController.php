<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function index(){
        return view('user.posts');
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'source' => 'required',
            'article' => 'required'
        ]);

        $request->user()->posts()->create([
            'title' => ucfirst($request->title),
            'author' => ucfirst($request->author),
            'source' => $request->source,
            'article' => ucfirst($request->article)
        ]);

        return back()->with('success', ' ');

    }

}
