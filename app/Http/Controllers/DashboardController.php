<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index(){

        $posts = Post::get();

        return view('user.dashboard', [
            'posts' => $posts
        ]);
        
    }

    public function delete($id){
        $_SESSION['delete'] = 'delete';

        $article = Post::find($id);
        $article->delete();

        return redirect()->route('dashboard');
    }
    
    
}
