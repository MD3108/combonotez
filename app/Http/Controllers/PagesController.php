<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Note;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function guide(){
        return view('guide');
    }
}
