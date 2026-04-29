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

    public function store()
    {
        ([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'midname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'date'],
        ]);

        studentmngt::create();

        return redirect()

            ->with('status', 'Student created successfully!');
    }

}
