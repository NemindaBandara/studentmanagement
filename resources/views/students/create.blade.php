@extends('layout')
@section('content')

<div class="card">
  <div class="card-reader">Student Page</div>
  <div class="class-body">
    <form action="{{ url('students') }}" method="post">
    @csrf
      <label>Name</label><br>
      <input type="text" name="name" id="name" class="form-control"><br>
      <label>Address</label><br>
      <input type="text" name="address" id="address" class="form-control"><br>
      <label>Mobile</label><br>
      <input type="text" name="mobile" id="mobile" class="form-control"><br>
      <input type="submit" value="save" class="btn btn-success"><br>
    </form>
  </div>
</div>

@stop