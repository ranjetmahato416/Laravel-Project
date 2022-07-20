@extends('welcome')
@section('main_content')
<table class="table table-responsive">
    <thead>
    <th>#</th>
    <th>Student ID</th>
    <th>Board</th>
    <th>CGPA</th>
    <th>Symbol No</th>
    <th>Passed Year</th>
    <th>Institute Name</th>
    <th>Action</th>
    </thead>
    <tbody>
        @foreach($education_infos as $e)
        <tr>
            <td>{{$e->id}}</td>
            <td>{{$e->student_id}}</td>
            <td>{{$e->board}}</td>
            <td>{{$e->cgpa}}</td>
            <td>{{$e->symbol_no}}</td>
            <td>{{$e->passed_year}}</td>
            <td>{{$e->institute_name}}</td>
            <td>
                <a href="{{ route('education_info.edit',$e->id) }}" class="btn btn-warning">Edit</a>

            </td>
            <td>
            <form method="POST" action=" {{ route('education_info.destroy', $e->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection