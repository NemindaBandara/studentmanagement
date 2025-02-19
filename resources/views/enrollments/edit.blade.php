@extends('layout')
@section('content')

<div class="card">
  <div class="card-reader">Edit Page</div>
  <div class="class-body">

    <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
    @csrf
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" class="form-control"><br>  
      <label>Enrollment Number</label><br>
      <input type="text" name="enroll_no" id="enroll_no" value="{{$enrollments->enroll_no}}" class="form-control"><br>
      <label>Batch ID</label><br>
      <input type="text" name="batch_id" value="{{$enrollments->batch_id}}" id="batch_id" class="form-control"><br>
      <label>Student ID</label><br>
      <input type="text" name="student_id" value="{{$enrollments->student_id}}" id="student_id" class="form-control"><br>
      <label>Join Date</label><br>
      <input type="text" name="join_date" id="join_date" value="{{$enrollments->join_date}}" class="form-control"><br>
      <label>Fee</label><br>
      <input type="text" name="fee" id="fee" value="{{$enrollments->fee}}" class="form-control"><br>
      <input type="submit" value="update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop