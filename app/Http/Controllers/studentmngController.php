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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'midname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'date'],
        ]);

        studentmngt::create($validated);

        return redirect()
            ->route('student.index')
            ->with('status', 'Student created successfully!');
    }

    public function edit(int $id)
    {
        $student = studentmngt::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'midname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'date'],
        ]);

        $student = studentmngt::findOrFail($id);
        $student->update($validated);

        return redirect()->back()->with('status', 'Student Updated Successfully!');
    }

    public function destroy(int $id)
    {
        $student = studentmngt::findOrFail($id);
        $student->delete();

        return redirect()->back()->with('status', 'Student Deleted');
    }
}
