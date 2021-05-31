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
        if(session('status')){
            return back();
        }else {
            return view('admin.adminLogin');
        }
    }




    public function store(Request $request){

        $admins = Admin::get();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->username;
        $password = $request->password;

        foreach($admins as $admin){
            if($admin->username == $username && $admin->password == $password){
    
                $request->session()->put('status', 'in');
                return redirect()->route('admin-dashboard');
            }
        }
        return back()->with('error', ' ');
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



    
    public function logout(Request $request){

        if(session('status')){
            session()->pull('status');
        }

        return redirect('admin-login');
    }

}
