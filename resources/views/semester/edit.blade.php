@extends('welcome')
@section('main_content')
<div class="container">
    <form method="POST" action="{{ route('semester.update', $semester->id)}}">
        @method('PATCH')
        @csrf
        <input type="text" value={{ $semester->name }} name="name">Semester<br>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection('main_content')