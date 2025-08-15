@extends('admin')
@section('content')
<h1>All Courses</h1>
<a href="{{ route('courses.create') }}">Add New Course</a>
@if($errors->any())
    <div style="color:red;">{{ $errors->first() }}</div>
@endif
<table border="1" cellpadding="8">
    <tr><th>Name</th><th>Description</th><th>Actions</th></tr>
    @foreach($courses as $course)
    <tr>
        <td>{{ $course->name }}</td>
        <td>{{ $course->description }}</td>
        <td>
            <a href="{{ route('courses.edit', $course) }}">Edit</a>
            <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
