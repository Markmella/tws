<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct(){
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(!auth()->attempt($credentials, $request->remember)){
            return back()->with('error', ' ');
        }

        return redirect()->route('dashboard');

    }

}
