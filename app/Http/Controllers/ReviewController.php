<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ReviewController extends Controller
{

    public function create(){
        return view('review-add');
    }
}
