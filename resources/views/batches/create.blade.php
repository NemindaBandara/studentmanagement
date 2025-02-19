@extends('layout')
@section('content')

<div class="card">
  <div class="card-reader">Batch</div>
  <div class="class-body">
    <form action="{{ url('batches') }}" method="post">
    @csrf
      <label>Name</label><br>
      <input type="text" name="name" id="name" class="form-control"><br>
      <label>Course Name</label><br>
      <input type="text" name="course_id" id="course_id" class="form-control"><br>
      <label>Start Date</label><br>
      <input type="text" name="start_date" id="start_date" class="form-control"><br>
      <input type="submit" value="save" class="btn btn-success"><br>
    </form>
  </div>
</div>

@stop