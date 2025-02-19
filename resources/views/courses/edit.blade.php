@extends('layout')
@section('content')

<div class="card">
  <div class="card-reader">Edit Page</div>
  <div class="class-body">

    <form action="{{ url('courses/' .$courses->id) }}" method="post">
    @csrf
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{$courses->id}}" class="form-control"><br>  
    <label>Name</label><br>
      <input type="text" name="name" id="name" value="{{$courses->name}}" class="form-control"><br>
      <label>Syllabus</label><br>
      <input type="text" name="syllabus" value="{{$courses->syllabus}}" id="syllabus" class="form-control"><br>
      <label>Duration</label><br>
      <input type="text" name="duration" value="{{$courses->duration}}" id="duration" class="form-control"><br>
      <input type="submit" value="update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop