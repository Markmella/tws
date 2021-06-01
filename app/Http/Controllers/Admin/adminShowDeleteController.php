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
                'posts' => Post::find($id)
            ]);
        }else {
            return back();
        }
    }

    public function delete($id){

        $posts = Post::find($id);

        $article->update([
            'status' => 'Deleted'
        ]);

        return redirect()->route('admin-dashboard')->with('deleted', ' ');
    }

}
