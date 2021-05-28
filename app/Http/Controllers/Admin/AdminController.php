<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Post;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.adminHome', [
            'admins' => Admin::get()
        ]);
    }


    public function login(){
        return view('admin.adminLogin');
    }


    public function store(Request $request){

        $admin = Admin::get();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if($admin[0]->username != $request->username && $admin[0]->password != $request->password){
            return back()->with('error', ' ');
        }

        return redirect()->route('admin-dashboard');
    }


    public function dashboard(){
        return view('admin.adminDashboard', [
            'posts' => Post::get(),
            'users' => User::get()
        ]);
    }


    public function show($id){

        return view('admin.adminShow', [
            'posts' => Post::find($id)
        ]);
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


    public function logout(Request $request){

        auth()->logout();

        return redirect('login-admin');
    }

}
