<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editstuController extends Controller
{
    public function edit(){
        return view('student.edit');
    }
}

