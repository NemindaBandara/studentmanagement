@extends('layout')
@section('content')

<div class="card">
  <div class="card-reader">Course Page</div>
  <div class="class-body">
    <form action="{{ url('courses') }}" method="post">
    @csrf
      <label>Name</label><br>
      <input type="text" name="name" id="name" class="form-control"><br>
      <label>Syllabus</label><br>
      <input type="text" name="syllabus" id="syllabus" class="form-control"><br>
      <label>Duration</label><br>
      <input type="text" name="duration" id="duration" class="form-control"><br>
      <input type="submit" value="save" class="btn btn-success"><br>
    </form>
  </div>
</div>

@stop