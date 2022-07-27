@extends('welcome')
@section('main_content')
<table class="table table-responsive">
    <thead>
    <th>#</th>
    <th>Faculty ID</th>
    <th>Batch ID</th>
    <th>Student ID</th>
    <th>Semester ID</th>
    <th>Registration Number</th>
    <th>Action</th>
    </thead>
    <tbody>
        @foreach($college_infos as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->faculty_id}}</td>
            <td>{{$c->batch_id}}</td>
            <td>{{$c->student_id}}</td>
            <td>{{$c->semester_id}}</td>
            <td>{{$c->reg_no}}</td>
            <td>
                <a href="{{ route('college_info.edit',$c->id) }}" class="btn btn-warning">Edit</a>

            </td>
            <td>
            <form method="POST" action=" {{ route('college_info.destroy', $c->id) }}">
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