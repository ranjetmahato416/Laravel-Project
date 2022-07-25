@extends('welcome')
@section('main_content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Quick Example</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" action="{{ route('education_info.store')}}">
    @csrf
    <div class="card-body">

      <div class="form-group">
        <label for="name">Student ID</label>
        <input type="name" class="form-control" name="student_id" placeholder="Enter ID">
      </div>
      <div class="form-group">
        <label for="bg">CGPA/Percentage</label>
        <input type="text" class="form-control" name="cgpa" placeholder="CGPA">
      </div>
      <div class="form-group">
        <label for="board">Board</label>
        <input type="text" class="form-control" name="board" placeholder="Board">
      </div>
      <div class="form-group">
        <label for="mobile">Symbol No</label>
        <input type="text" class="form-control" name="symbol_no" placeholder="Symbol Number">
      </div>
      <div class="form-group">
        <label for="gender">Passed Year</label>
        <input type="gender" class="form-control" name="passed_year" placeholder="Passed Year">
      </div>
      <div class="form-group">
        <label for="bg">Institute Name</label>
        <input type="text" class="form-control" name="institute_name" placeholder="Institute Name">
      </div>
   
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection('main_content')