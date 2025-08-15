<?php
namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
class CourseController extends Controller {
    public function index() {
        return view('courses.index', ['courses' => Course::all()]);
    }
    public function create() {
        return view('courses.create');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);
        Course::create($data);
        return redirect()->route('courses.index');
    }
    public function edit(Course $course) {
        return view('courses.edit', compact('course'));
    }
    public function update(Request $request, Course $course) {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);
        $course->update($data);
        return redirect()->route('courses.index');
    }
    public function destroy(Course $course) {
        $course->delete();
        return redirect()->route('courses.index');
    }
}
