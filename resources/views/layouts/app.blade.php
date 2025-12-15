<!DOCTYPE html>
<html>
<head>
    <title>Student Course System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">Student–Course System</a>
        <div>
            <a href="{{ route('students.index') }}" class="btn btn-light btn-sm">Students</a>
            <a href="{{ route('courses.index') }}" class="btn btn-light btn-sm">Courses</a>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
