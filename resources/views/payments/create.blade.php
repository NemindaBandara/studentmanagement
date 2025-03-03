@extends('layout')
@section('content')

<div class="card">
  <div class="card-header"><h5>Payment Page</h5></div>
  <div class="card-body">
    <form action="{{ url('payments') }}" method="post">
    @csrf
      <label>Enrollment Number</label><br>
      <!-- <input type="text" name="enroll_no" id="enroll_no" class="form-control"><br> -->

      <select name="enrollment_id" id="enrollment_id" class="form-control">
        @foreach($enrollments as $enrollment_id=>$enroll_no)
          <option value="{{ $enrollment_id }}" -> {{ $enroll_no }}</option>
        @endforeach
      </select>

      <label>Paid date</label><br>
      <input type="text" name="paid_date" id="paid_date" class="form-control"><br>
      <label>Fee</label><br>
      <input type="text" name="amount" id="amount" class="form-control"><br>
      <input type="submit" value="save" class="btn btn-success"><br>
    </form>
  </div>
</div>

<!-- comment -->
<!-- comment2 -->
<!-- comment3 -->

@stop