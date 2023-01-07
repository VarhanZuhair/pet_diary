<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function view(){
        return view('review-page');
    }

    public function create(){
        return view('review-add');
    }
}
