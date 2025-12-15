<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->paginate(10);
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'courseName' => 'required|string|max:255',
            'courseCode' => 'required|string|max:50|unique:courses,courseCode',
            'creditHour' => 'required|integer|min:1|max:10',
        ]);

        Course::create($data);
        return redirect()->route('courses.index')->with('success', 'Course created.');
    }

    public function show(Course $course)
    {
        $course->load('students');
        $students = Student::orderBy('name')->get(); // optional if you want assign here too
        return view('courses.show', compact('course','students'));
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            'courseName' => 'required|string|max:255',
            'courseCode' => 'required|string|max:50|unique:courses,courseCode,' . $course->id,
            'creditHour' => 'required|integer|min:1|max:10',
        ]);

        $course->update($data);
        return redirect()->route('courses.index')->with('success', 'Course updated.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted.');
    }
}
