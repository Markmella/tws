<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminLogoutController extends Controller
{
    public function logout(Request $request){

        if(session('status')){
            session()->pull('status');
        }

        return redirect('admin-login');
    }
    
}
