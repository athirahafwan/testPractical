@extends('layouts.app')

@section('content')
<h2>Edit Student</h2>

<form method="POST" action="{{ route('students.update',$student) }}" class="card p-4">
@csrf @method('PUT')
<input class="form-control mb-2" name="name" value="{{ $student->name }}">
<input class="form-control mb-2" name="email" value="{{ $student->email }}">
<input class="form-control mb-2" name="matricNo" value="{{ $student->matricNo }}">
<button class="btn btn-primary">Update</button>
</form>
@endsection
