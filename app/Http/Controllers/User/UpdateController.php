<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index($id){

        return view('user.update', [
            'post' => Post::find($id)
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

        $user->update([
            'title' => ucfirst($request->title),
            'author' => ucfirst($request->author),
            'source' => $request->source,
            'article' => ucfirst($request->article),
            'updated_at' => now()
        ]);
        
        return redirect()->route('dashboard')->with('success', ' ');

    }
}
