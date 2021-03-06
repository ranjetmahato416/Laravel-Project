@extends('welcome')
@section('main_content')
<div>
    <table class="table table-responsive">
        <thead>
            <th>ID</th>
            <th>Faculty Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($faculties as $f)
            <tr>
                <td>
                    {{$f->id}}
                </td>
                <td>
                    {{$f->faculty_name}}
                </td>
                <td>
                    <a href="{{ route('faculty.edit', $f->id) }}">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{ route('faculty.destroy', $f->id) }}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection('main_content')