@extends('layout')
@section('content')


<div class="container">
<div><a href="/posts/create" class="btn btn-success">New Post</a></div>
<br>
<div class="card">
  <div class="card-header" style="text-align:center">
    Contents
  </div>
  
  @foreach($data as $value)
  <div class="card-body">


    <h5 class="card-title">{{$value->name}}</h5>
    <p class="card-text">{{$value->description}}</p>
    <a href="/posts/{{$value->id}}" class="btn btn-primary">View</a>
    <a href="/posts/{{$value->id}}/edit" class="btn btn-warning">Edit</a>
    <form action="/posts/{{$value->id}}" method="post">
      @csrf 
      @method("DELETE")
      <button type="submit"class="btn btn-danger">Delete</button>
    </form>

  </div><hr>
  @endforeach
</div>
</div>
   


@endsection
