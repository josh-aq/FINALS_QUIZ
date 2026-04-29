<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deletestuController extends Controller
{
    public function delete(){
        return view('student.delete');
    }
}