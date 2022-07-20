@extends('welcome')
@section('main_content')
<div class="container">
    <form method="POST" action="{{ route('faculty.update', $faculty->id)}}">
        @method('PATCH')
        @csrf
        <input type="text" name="faculty_name"> Faculty<br>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection('main_content')