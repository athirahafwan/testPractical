<?php
namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'matricNo' => 'required|string|unique:students,matricNo',
        ]);

        Student::create($data);
        return redirect()->route('students.index')->with('success', 'Student created.');
    }

    public function show(Student $student)
    {
        $student->load('courses');
        $courses = Course::orderBy('courseName')->get(); // for enroll dropdown
        return view('students.show', compact('student','courses'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'matricNo' => 'required|string|unique:students,matricNo,' . $student->id,
        ]);

        $student->update($data);
        return redirect()->route('students.index')->with('success', 'Student updated.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted.');
    }

    // Q9: enroll (attach/sync)
    public function enroll(Request $request, Student $student)
    {
        $data = $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        // attach (safe because we also added unique constraint in pivot)
        $student->courses()->syncWithoutDetaching([$data['course_id']]);

        return back()->with('success', 'Course enrolled.');
    }

    // Q9: remove enrollment (detach)
    public function drop(Student $student, Course $course)
    {
        $student->courses()->detach($course->id);
        return back()->with('success', 'Course removed.');
    }
}

