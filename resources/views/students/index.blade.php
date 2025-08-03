@extends('admin')
@section('content')

<h1>All Students</h1>
<a href="{{ route('students.create') }}">Add New Student</a>
@foreach($students as $student)
({{ $student->fname }}) - {{ $student->email }}
<a href="{{ route('students.edit', ['student' => $student->id]) }}">Edit</a>
<a href="{{ route('students.show', ['student' => $student->id]) }}">View</a>
<a href="{{ route('students.destroy', ['student' => $student->id]) }}">Delete</a>
<br>
@endforeach

@endsection