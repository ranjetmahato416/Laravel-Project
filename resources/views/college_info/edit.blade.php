@extends('welcome')
@section('main_content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Quick Example</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" action="{{ route('college_info.store')}}">
    @method('PATCH')
    @csrf
    <div class="card-body">

      <div class="form-group">
        <label for="name">Faculty ID</label>
        <input type="name" class="form-control" name="faculty_id">
      </div>
      <div class="form-group">
        <label for="name">Batch ID</label>
        <input type="name" class="form-control" name="batch_id">
      </div>
      <div class="form-group">
        <label for="name">Student ID</label>
        <input type="name" class="form-control" name="student_id">
      </div>
      <div class="form-group">
        <label for="name">Registration Number</label>
        <input type="name" class="form-control" name="reg_no">
      </div>
   
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection('main_content')