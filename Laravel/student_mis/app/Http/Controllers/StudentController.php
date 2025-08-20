<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::all();
        $students = Student::orderBy('sid')->get();
        return view('students.index', compact('students'));
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }


    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added.');
    }

    public function edit(Student $student)
    {
        // $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate(['name' => 'required']);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted.');
    }
}
