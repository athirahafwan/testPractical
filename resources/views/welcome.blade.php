@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="mb-4">Welcome</h1>
    <p class="lead">Student & Course Management System</p>

    <a href="{{ route('students.index') }}" class="btn btn-primary m-2">Manage Students</a>
    <a href="{{ route('courses.index') }}" class="btn btn-success m-2">Manage Courses</a>
</div>
@endsection
