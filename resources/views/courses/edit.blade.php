@extends('layouts.app')

@section('content')
<h2>Edit Course</h2>

<form method="POST" action="{{ route('courses.update',$course) }}" class="card p-4">
@csrf @method('PUT')
<input class="form-control mb-2" name="courseName" value="{{ $course->courseName }}">
<input class="form-control mb-2" name="courseCode" value="{{ $course->courseCode }}">
<input class="form-control mb-2" name="creditHour" value="{{ $course->creditHour }}">
<button class="btn btn-primary">Update</button>
</form>
@endsection
