@extends('layouts.app')

@section('content')
<h2>Student Details</h2>

<div class="card p-3 mb-3">
<p><b>Name:</b> {{ $student->name }}</p>
<p><b>Email:</b> {{ $student->email }}</p>
<p><b>Matric No:</b> {{ $student->matricNo }}</p>
</div>

<h4>Enrolled Courses</h4>
<ul class="list-group">
@forelse($student->courses as $course)
<li class="list-group-item">
    {{ $course->courseCode }} - {{ $course->courseName }}
</li>
@empty
<li class="list-group-item">No course enrolled</li>
@endforelse
</ul>
@endsection
