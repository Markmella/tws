<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class adminShowDeleteController extends Controller
{
    public function showDelete($id){

        if(session('status')){
            return view('admin.adminShowArticle', [
                'post' => Post::find($id)
            ]);
        }else {
            return back();
        }
    }

    public function delete($id){

        $post = Post::find($id);
        $post->delete();

        return redirect()->route('admin-dashboard')->with('deleted', ' ');
    }

}
