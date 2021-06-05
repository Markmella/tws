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
                'post' => Post::find($id)
            ]);
        }else {
            return back();
        }
    }
    
    public function accepted($id){

        $post = Post::find($id);

        $post->update([
            'status' => 'Accepted'
        ]);

        return redirect()->route('admin-dashboard')->with('accepted', ' ');
    }

    public function declined($id){

        $post = Post::find($id);

        $post->update([
            'status' => 'Declined'
        ]);

        return redirect()->route('admin-dashboard')->with('declined', ' ');
    }
    
}
