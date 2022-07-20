@extends('welcome')
@section('main_content')
<div class="container">
    <form method="POST" action="{{ route('semester.store')}}">
        @csrf
        <input type="text" name="name">Semester<br>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection('main_content')