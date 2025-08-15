@extends('admin')
@section('content')
<h1>Edit Course</h1>
@if($errors->any())
    <div style="color:red;">{{ $errors->first() }}</div>
@endif
<form action="{{ route('courses.update', $course) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ old('name', $course->name) }}" required><br>
    <textarea name="description">{{ old('description', $course->description) }}</textarea><br>
    <input type="submit" value="Update">
</form>
<a href="{{ route('courses.index') }}">Back</a>
@endsection
