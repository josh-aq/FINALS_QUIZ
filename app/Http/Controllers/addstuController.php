<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addstuController extends Controller
{
    public function add(){
        return view('student.add');
    }
}
