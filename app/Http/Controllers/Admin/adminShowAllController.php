<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class adminShowAllController extends Controller
{
    public function show($id){
        if(session('status')){
            return view('admin.adminShow', [
                'posts' => Post::find($id)
            ]);
        }else {
            return back();
        }
    }
    
    public function accepted($id){

        $posts = Post::find($id);

        $posts->update([
            'status' => 'Accepted'
        ]);

        return redirect()->route('admin-dashboard')->with('accepted', ' ');
    }

    public function declined($id){

        $posts = Post::find($id);

        $posts->update([
            'status' => 'Declined'
        ]);

        return redirect()->route('admin-dashboard')->with('declined', ' ');
    }
    
}
