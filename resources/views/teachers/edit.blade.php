@extends('layout')
@section('content')

<div class="card">
  <div class="card-reader">Edit Page</div>
  <div class="class-body">

    <form action="{{ url('teachers/' .$teachers->id) }}" method="post">
    @csrf
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{$teachers->id}}" class="form-control"><br>  
    <label>Name</label><br>
      <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control"><br>
      <label>Address</label><br>
      <input type="text" name="address" value="{{$teachers->address}}" id="address" class="form-control"><br>
      <label>Mobile</label><br>
      <input type="text" name="mobile" value="{{$teachers->mobile}}" id="mobile" class="form-control"><br>
      <input type="submit" value="update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop