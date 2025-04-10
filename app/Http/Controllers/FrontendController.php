<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function learning(){
        return view('frontend.learning');
    }

    public function course(){
        return view('frontend.course');
    }

    public function pricing(){
        return view('frontend.pricing');
    }

    public function employee(){
        return view('frontend.employee');
    }
}
