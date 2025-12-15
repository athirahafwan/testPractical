@extends('layouts.app')

@section('content')
<h2>Course Details</h2>

<div class="card p-3 mb-3">
<p><b>Code:</b> {{ $course->courseCode }}</p>
<p><b>Name:</b> {{ $course->courseName }}</p>
<p><b>Credit Hour:</b> {{ $course->creditHour }}</p>
</div>

<h4>Registered Students</h4>
<ul class="list-group">
@forelse($course->students as $student)
<li class="list-group-item">
    {{ $student->matricNo }} - {{ $student->name }}
</li>
@empty
<li class="list-group-item">No student registered</li>
@endforelse
</ul>
@endsection
