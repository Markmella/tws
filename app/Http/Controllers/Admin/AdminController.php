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

    public function dashboard(){
        if(session('status')){
            return view('admin.adminDashboard', [
                'posts' => Post::get(),
                'users' => User::get()
            ]);
        }else {
            return back();
        }
    }

    public function profile(Request $request){

        $id = $request->session()->get('id');
        $username = $request->session()->get('username');

        $adminUsername = array('username' => $username);

        return view('admin.adminProfile')->with($adminUsername);

    }

}