@extends('admin')
@section('content')
<h1>Add Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="fname" placeholder="First Name" required><br>
    <input type="text" name="lname" placeholder="Last Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="submit" value="Add">
</form>
<a href="{{ route('students.index') }}">Back</a>
@endsection