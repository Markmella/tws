<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index(){
        return view('user.profile');
    }


    public function store(Request $request){
        
        dd('image');

        // if($request->hasfile('image'){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = 'profile.' . $extension;
        //     $file->move('uploads/', $filename);
        //     $highlights->image = $filename;
        // })else {
        //     return $request;
        //     $highlights->image = "";
        // }

        // User::save();

    }




    public function updatePassword(Request $request){

        return redirect()->route('profile');
    }

}
