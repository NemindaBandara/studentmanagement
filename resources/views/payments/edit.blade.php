@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

    <form action="{{ url('payments/' .$payments->id) }}" method="post">
    @csrf
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{$payments->id}}" class="form-control"><br>  
      <label>Enrollment Number</label><br>
      <input type="text" name="enrollment_id" id="enrollment_id" value="{{$enrollments->enrollment_id}}" class="form-control"><br>
      <label>Paid Date</label><br>
      <input type="text" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control"><br>
      <label>Fee</label><br>
      <input type="text" name="amount" id="fee" value="{{$payments->amount}}" class="form-control"><br>
      <input type="submit" value="update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop