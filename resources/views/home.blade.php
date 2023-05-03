@extends('layout')
@section('content')


<div class="container">
<div class="card">
  <div class="card-header" style="text-align:center">
    Contents
  </div>
  @foreach($data as $value)
  <div class="card-body">


    <h5 class="card-title">{{$value->name}}</h5>
    <p class="card-text">{{$value->description}}</p>
    <a href="#" class="btn btn-primary">View</a>
  </div><hr>
  @endforeach
</div>
</div>
   


@endsection
