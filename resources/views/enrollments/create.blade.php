@extends('layout')
@section('content')

<div class="card">
  <div class="card-reader"><h5>Enrollment Page</h5></div>
  <div class="class-body">
    <form action="{{ url('enrollments') }}" method="post">
    @csrf
      <label>Enrollment Number</label><br>
      <input type="text" name="enroll_no" id="enroll_no" class="form-control"><br>

      <label>Batch ID</label><br>
      <!-- <input type="text" name="batch_id" id="batch_id" class="form-control"><br> -->

      <select name="batch_id" id="batch_id" class="form-control">
        @foreach($batches as $id=>$name)
          <option value="{{ $id }}" -> {{ $name }}</option>
        @endforeach
      </select>


      <label>Student ID</label><br>
      <!-- <input type="text" name="student_id" id="student_id" class="form-control"><br> -->

      <select name="student_id" id="student_id" class="form-control">
        @foreach($students as $id=>$name)
          <option value="{{ $id }}" -> {{ $name }}</option>
        @endforeach
      </select>


      <label>Join Date</label><br>
      <input type="text" name="join_date" id="join_date" class="form-control"><br>
      <label>Fee</label><br>
      <input type="text" name="fee" id="fee" class="form-control"><br>
      <input type="submit" value="save" class="btn btn-success"><br>
    </form>
  </div>
</div>

@stop