@extends('welcome')
@section('main_content')
<div>
    <table class="table table-responsive">
        <thead>
            <th>ID</th>
            <th>Batch</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($batches as $b)
            <tr>
                <td>
                    {{$b->id}}
                </td>
                <td>
                    {{$b->batch_year}}
                </td>
                <td>
                    <a href="{{ route('batch.edit', $b->id) }}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{ route('batch.destroy', $b->id) }}">
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