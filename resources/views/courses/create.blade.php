@extends('layouts.app')

@section('content')
<h2>Create Course</h2>

<form method="POST" action="{{ route('courses.store') }}" class="card p-4">
@csrf
<input class="form-control mb-2" name="courseName" placeholder="Course Name">
<input class="form-control mb-2" name="courseCode" placeholder="Course Code">
<input class="form-control mb-2" name="creditHour" type="number" placeholder="Credit Hour">
<button class="btn btn-success">Save</button>
</form>
@endsection
