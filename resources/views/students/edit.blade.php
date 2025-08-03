@extends('admin')
@section('content')
<h1>Edit Student</h1>
<form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="fname" value="{{ $student->fname }}" required><br>
    <input type="text" name="lname" value="{{ $student->lname }}" required><br>
    <input type="email" name="email" value="{{ $student->email }}" required><br>
    <input type="submit" value="Update">
</form>
<a href="{{ route('students.index') }}">Back</a>
@endsection
