<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("Frontend.welcome");
    }

    public function hackthone(){
        return view("Frontend.hackthone");
    }

    public function css(){
        return view("Frontend.css");
    }

    public function tailwind(){
        return view("Frontend.tailwind");
    }
    public function php(){
        return view("Frontend.php");
    }
    public function html(){
        return view("Frontend.html");
    }

    public function laravel(){
    return view("Frontend.laravel");
    }
}
