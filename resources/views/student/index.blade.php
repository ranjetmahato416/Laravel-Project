@extends('welcome')
@section('main_content')
<div class="row">
    <div class="col-md-12">
    <table class="table table-responsive">
    <thead>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Gender</th>
    <th>Information</th>
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
            <td>

                <table class="table table-responsive">
                    <tr>
                        <td><strong>College Info</strong></td>
                        @if($s->is_college_info)
                        <td>
                        <a href="{{ route('college_info.edit',$s->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                        <form method="POST" action=" {{ route('college_info.destroy', $s->id) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                @else
                <td>
                    <a href="{{ route('college_info.create',$s->id) }}" class="btn btn-warning">Create</a>
                </td>
                @endif
                    </tr>

                    <tr>
                        <td><strong>Education Info</strong></td>
                        @if($s->is_education_info)
                        <td>
                            <a href="{{ route('education_info.edit',$s->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                        <form method="POST" action=" {{ route('education_info.destroy', $s->id) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                @else
                <td>
                    <a href="{{ route('education_info.create',$s->id) }}" class="btn btn-warning">Create</a>
                </td>
                @endif
                        </td>
                    </tr>
                </table>
              

            </td>
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
    </div>
</div>

@endsection