@extends('welcome')
@section('main_content')
<table class="table table-responsive">
    <thead>
    <th>#</th>
    <th>Father's Name</th>
    <th>Mother's Name</th>
    <th>Action</th>
    </thead>
    <tbody>
        @foreach($parent_infos as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->father}}</td>
            <td>{{$p->mother}}</td>
            <td>
                <a href="{{ route('parent_info.edit',$p->id) }}" class="btn btn-warning">Edit</a>

            </td>
            <td>
            <form method="POST" action=" {{ route('parent_info.destroy', $p->id) }}">
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