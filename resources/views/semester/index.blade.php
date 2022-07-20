@extends('welcome')
@section('main_content')
<div>
    <table class="table table-responsive">
        <thead>
            <th>ID</th>
            <th>Semester</th>
            <th>ACTION</th>
        </thead>
        <tbody>
            @foreach($semesters as $s)
            <tr>
                <td>
                    {{$s->id}}
                </td>
                <td>
                    {{$s->name}}
                </td>
                <td>
                    <a href="{{ route('semester.edit', $s->id) }}">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{ route('semester.destroy', $s->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection('main_content')