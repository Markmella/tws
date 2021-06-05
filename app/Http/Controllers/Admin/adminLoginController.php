<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class adminLoginController extends Controller
{
    public function index(){
        if(session('status')){
            return back();
        }else {
            return view('admin.adminLogin');
        }
    }

    public function login(Request $request){

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
    
}
