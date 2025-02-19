@extends('layout')
@section('content')

<div class="card">
  <div class="card-reader">Edit Page</div>
  <div class="class-body">

    <form action="{{ url('batches/' .$batches->id) }}" method="post">
    @csrf
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{$batches->id}}" class="form-control"><br>  
      <label>Name</label><br>
      <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"><br>
      <label>Course Name</label><br>
      <input type="text" name="course_id" value="{{$batches->course_id}}" id="course_id" class="form-control"><br>
      <label>Start Date</label><br>
      <input type="text" name="start_date" value="{{$batches->start_date}}" id="start_date" class="form-control"><br>
      <input type="submit" value="update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop