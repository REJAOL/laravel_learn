<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function home(){
        return view('homepage');
    }
    public function about(){
        return view('single-post');
    }
}
