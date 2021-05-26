<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    // public function __construct(){
    //     $this->middleware(['guest']);
    // }

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

        return redirect()->route('dashboard');
    }
}
