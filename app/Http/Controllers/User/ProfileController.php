<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index($id){
        return view('user.profile', [
            'users' => User::find($id),
        ]);
    }

    public function uploadProfile(Request $request, $id){      
        $user = User::find($id);

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5048'
        ]);
        
        $request->image->move(public_path('images-upload'), $request->image->getClientOriginalName());

        $user->update([
            'image' => $request->image->getClientOriginalName()
        ]);

        return back();
    }

    public function changePassword(Request $request, $id){      
        $user = User::find($id);

        $this->validate($request, [
            'password' => 'required|confirmed'
        ]);

        if(Hash::check($request->current_password, $user->password)){
            $user->update([
                'password' => $request->password
            ]);
        }else {
            return back()->withErrors(['current_password' => 'Incorrect Current Password']);
        }

        return back();
    }


    

}
