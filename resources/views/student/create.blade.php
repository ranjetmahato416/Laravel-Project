@extends('welcome')
@section('main_content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Quick Example</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" action="{{ route('student.store')}}">
    @csrf
    <div class="card-body">

      <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" name="name" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="email">
      </div>
      <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="num" class="form-control" name="mobile" placeholder="Mobile Number">
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <input type="gender" class="form-control" name="gender" placeholder="Gender">
      </div>
      <div class="form-group">
        <label for="bg">Blood Group</label>
        <input type="text" class="form-control" name="blood_group" placeholder="Blood Group">
      </div>
      <div class="form-group">
        <label for="bg">Address</label>
        <input type="text" class="form-control" name="perm_address" placeholder="Address">
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="dob" class="form-control" name="dob" placeholder="DOB">
      </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection('main_content')