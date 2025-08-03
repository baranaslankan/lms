@extends('admin')
@section('content')
<h1>{{ $student->fname }} {{ $student->lname }}</h1>
<p>Email: {{ $student->email }}</p>
<a href="{{ route('students.edit', $student) }}">Edit</a>
<a href="{{ route('students.index') }}">Back</a>
<form action="{{ route('students.destroy', $student) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>
@endsection