@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>Courses Management</h1>
    </div>
    <div class="col-md-6">
        <form action="{{ route('course.index') }}" method="get" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search courses..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="mb-3">
    <a href="{{ route('course.create') }}" class="btn btn-primary">Add New Course</a>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Course Name</th>
                <th>Instructor</th>
                <th>Course Head</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($courses as $course)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->title }}</td>
            <td>{{ $course->instructor }}</td>
            <td>{{ $course->courseHead }}</td>
            <td>
                <div class="btn-group" role="group">
                    <a href="{{ route('course.show', $course->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('course.destroy', $course->id)}}" method="post" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this course?');">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">No courses found</td>
        </tr>
        @endforelse
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center">
    {{ $courses->links() }}
</div>

@endsection