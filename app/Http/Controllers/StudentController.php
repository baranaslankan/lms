<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', [
            'students' => Student::all()
        ]);
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());
        return redirect()->route('students.index');
    }

    public function update(StoreStudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}