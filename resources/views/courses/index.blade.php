@extends('layouts.app')

@section('content')
<h2>Course List</h2>

<a href="{{ route('courses.create') }}" class="btn btn-success mb-3">+ New Course</a>

<table class="table table-bordered">
<tr>
<th>Code</th><th>Name</th><th>Credit Hour</th><th>Action</th>
</tr>
@foreach($courses as $course)
<tr>
<td>{{ $course->courseCode }}</td>
<td>{{ $course->courseName }}</td>
<td>{{ $course->creditHour }}</td>
<td>
<a href="{{ route('courses.show',$course) }}" class="btn btn-info btn-sm">View</a>
<a href="{{ route('courses.edit',$course) }}" class="btn btn-warning btn-sm">Edit</a>
</td>
</tr>
@endforeach
</table>
@endsection
