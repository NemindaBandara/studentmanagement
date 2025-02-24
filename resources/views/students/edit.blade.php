@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="class-body">

    <form action="{{ url('students/' .$students->id) }}" method="post">
    @csrf
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{$students->id}}" class="form-control"><br>  
    <label>Name</label><br>
      <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"><br>
      <label>Address</label><br>
      <input type="text" name="address" value="{{$students->address}}" id="address" class="form-control"><br>
      <label>Mobile</label><br>
      <input type="text" name="mobile" value="{{$students->mobile}}" id="mobile" class="form-control"><br>
      <input type="submit" value="update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop