@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Student Page</div>
  
    <div class="card-body">
      <h5 class="card-title">Name: {{ $students->name }}</h5>
      <p class="card-text">Address: : {{ $students->address }}</p>
      <p class="card-text">Mobile: : {{ $students->mobile }}</p>
    </div>

  
</div>

@endsection