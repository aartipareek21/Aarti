@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Courses</h2>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <a href="{{ route('projects.create') }}">Add New Course</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Price</th>
            <th>description</th>
            <th>Actions</th>
        </tr>
        @foreach($projects as $proj)
        <tr>
            <td>{{$proj->id}}</td>
            <td>{{ $proj->price }}</td>
            <td>{{ $proj->due_date }}</td>
            <td>{{ $proj->desc }}</td>
          
            <td>
                <a href="{{ route('projects.edit', $proj->id) }}">Edit</a> |
                <form action="{{ route('projects.destroy', $proj->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Delete this project?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
