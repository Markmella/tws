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

    public function updatePicture(Request $request, $id){      
        $user = User::find($id);

        $this->validate($request, [
            'image' => 'required|mimes:jpeg,jpg,png|max:5048'
        ]);
        
        $filename = $request->image->getClientOriginalName();

        $request->image->move(public_path('uploads'), $filename);

        $user->update([
            'image' => $filename
        ]);

        return back()->with('success', ' ');
    }

    public function updatePassword(Request $request, $id){
        $user = User::find($id);

        $this->validate($request, [
            'password' => 'required|confirmed'
        ]);

        if(Hash::check($request->current_password, $user->password)){
            $user->update([
                'password' => Hash::make($request->password)
            ]);

            return back()->with('updated-password', ' ');
        }
        
        return back()->with('error', ' ');
    }

    public function updateInformation(Request $request, $id){
        $user = User::find($id);

        // Need to edit 
        // if($user->email == $request->email && $user->username == $request->username){
        //     $user->update([
        //         'name' => ucwords($request->name),
        //         'username' => $request->username,
        //         'email' => $request->email,
        //     ]);

        //     return back()->with('updated-info', ' ');
        // }else {
        //     $this->validate($request, [
        //         'name' => 'required|max:255',
        //         'username' => 'required|max:255|unique:users',
        //         'email' => 'required|max:255|unique:users'
        //     ]);
        // }

        // $user->update([
        //     'name' => ucwords($request->name),
        //     'username' => $request->username,
        //     'email' => $request->email,
        // ]);

        return back()->with('updated-info', ' ');
    }

    public function deleteAccount($id){

        $user = User::find($id);
        $user->delete();

        return redirect()->route('login')->with('deleted', ' ');
    }

}
