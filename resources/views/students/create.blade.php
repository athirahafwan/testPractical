@extends('layouts.app')

@section('content')
<h2>Create Student</h2>

<form method="POST" action="{{ route('students.store') }}" class="card p-4">
@csrf
<input class="form-control mb-2" name="name" placeholder="Name">
<input class="form-control mb-2" name="email" placeholder="Email">
<input class="form-control mb-2" name="matricNo" placeholder="Matric No">
<button class="btn btn-success">Save</button>
</form>
@endsection
