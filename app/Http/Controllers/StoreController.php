<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('store', compact('movies'));
    }
}
