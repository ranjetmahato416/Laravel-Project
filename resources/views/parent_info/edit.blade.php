@extends('welcome')
@section('main_content')
<div class="container">
    <form method="POST" action="{{ route('parent_info.update')}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
        <label for="father">Father's Name
            <input type="text" class="form-control" name="father" placeholder="Father's Name">
        </label>
        </div>
        <div class="form-group">
        <label for="mother">Mother's Name
            <input type="text" class="form-control" name="mother" placeholder="Mother's Name">
        </label>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection('main_content')