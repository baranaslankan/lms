@extends('admin')
@section('content')
<h1>Add Course</h1>
@if($errors->any())
    <div style="color:red;">{{ $errors->first() }}</div>
@endif
<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required><br>
    <textarea name="description" placeholder="Description">{{ old('description') }}</textarea><br>
    <input type="submit" value="Add">
</form>
<a href="{{ route('courses.index') }}">Back</a>
@endsection
