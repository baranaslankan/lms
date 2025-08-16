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
        $courses = \App\Models\Course::all();
        return view('students.create', compact('courses'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());
        if ($request->has('courses')) {
            $student->courses()->sync($request->courses);
        }
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