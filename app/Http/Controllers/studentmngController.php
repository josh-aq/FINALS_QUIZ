<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentmngt;

class studentmngController extends Controller
{
    public function index()
    {
        $students = studentmngt::query()->latest('id')->get();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.add');
    }
}
