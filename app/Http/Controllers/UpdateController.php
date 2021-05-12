<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index($id){
        $posts = Post::find($id);

        return view('user.update', [
            'posts' => $posts
        ]);
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'source' => 'required',
            'article' => 'required'
        ]);

        $user = Post::find($id);

        $user->title = ucfirst($request->title);
        $user->author = ucfirst($request->author);
        $user->source = $request->source;
        $user->article = ucfirst($request->article);

        $user->updated_at = now();
        
        $user->save();
        
        return redirect()->route('dashboard');

    }
}
