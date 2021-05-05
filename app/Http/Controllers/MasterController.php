<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }

    public function about(){
        return view('content.about');
    }

    public function disclaimer(){
        return view('content.disclaimer');
    }

    public function contact(){
        return view('content.contact');
    }
    
}
