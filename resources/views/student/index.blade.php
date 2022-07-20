@extends('welcome')
@section('main_content')
<table class="table table-responsive">
    <thead>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Gender</th>
    <th>Blood Group</th>
    <th>Address</th>
    <th>DOB</th>
    <th>Action</th>
    </thead>
    <tbody>
        @foreach($students as $s)
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->mobile}}</td>
            <td>{{$s->gender}}</td>
            <td>{{$s->blood_group}}</td>
            <td>{{$s->perm_address}}</td>
            <td>{{$s->dob}}</td>
            <td>
                <a href="{{ route('student.edit',$s->id) }}" class="btn btn-warning">Edit</a>

            </td>
            <td>
            <form method="POST" action=" {{ route('student.destroy', $s->id) }}">
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