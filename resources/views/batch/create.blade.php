@extends('welcome')
@section('main_content')
<div class="container">
    <form method="POST" action="{{ route('batch.store')}}">
        @csrf
        <input type="text" name="batch_year"> Batch
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection('main_content')