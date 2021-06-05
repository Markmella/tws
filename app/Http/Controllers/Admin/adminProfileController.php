<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class adminProfileController extends Controller
{

    



    public function store(Request $request){
        
        Admin::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success', ' ');

    }








}
