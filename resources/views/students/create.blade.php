@extends('admin')
@section('content')
<h1>Add Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="fname" placeholder="First Name" required><br>
    <input type="text" name="lname" placeholder="Last Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <label for="courses">Courses:</label><br>
    <select name="courses[]" id="courses" multiple>
        @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->name }}</option>
        @endforeach
    </select><br>
    <input type="submit" value="Add">
</form>
<a href="{{ route('students.index') }}">Back</a>
@endsection