<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index(){
        return view('user.dashboard', [
            'posts' => Post::get(),
            'users' => User::get()
        ]);
    }

    public function delete($id){
        
        $post = Post::find($id);
        $post->delete();

        return back()->with('deleted', ' ');
    }
    
    
}
