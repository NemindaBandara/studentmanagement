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
      <input type="text" name="enrollment_id" id="enrollment_id" value="{{$payments->enroll_no}}" class="form-control"><br>
      <label>Paid Date</label><br>
      <input type="text" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control"><br>
      <label>Fee</label><br>
      <input type="text" name="amount" id="fee" value="{{$payments->amount}}" class="form-control"><br>
      <input type="submit" value="update" class="btn btn-success"><br>
    </form>

    <select name="enrollment_id" id="enrollment_id" class="form-control">
        @foreach($enrollments as $enrollment_id=>$enroll_no)
          <option value="{{ $enrollment_id }}" -> {{ $enroll_no }}</option>
        @endforeach
      </select>

  </div>
</div>

<!-- comment3 -->

@stop