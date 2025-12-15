@extends('layouts.app')

@section('content')
<h2>Student List</h2>

<a href="{{ route('students.create') }}" class="btn btn-primary mb-3">+ New Student</a>

<table class="table table-bordered table-striped">
    <tr>
        <th>Name</th><th>Email</th><th>Matric No</th><th>Action</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->matricNo }}</td>
        <td>
            <a href="{{ route('students.show',$student) }}" class="btn btn-info btn-sm">View</a>
            <a href="{{ route('students.edit',$student) }}" class="btn btn-warning btn-sm">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
