<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }

    public function index(){
        include_once 'data.php';

        if(empty($_GET["article"])){
            return view('content.home')->with([
                "title" => $data[0][0],
                "datetime" => $data[0][1],
                "author" => $data[0][2],
                "content" => $data[0][3],
                "source" => $data[0][4]
                ]
            );
        }else {
            $articleNo = $_GET["article"];
            return view('content.home')->with([
                "title" => $data[$articleNo][0],
                "datetime" => $data[$articleNo][1],
                "author" => $data[$articleNo][2],
                "content" => $data[$articleNo][3],
                "source" => $data[$articleNo][4]
                ]
            );
        }
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
