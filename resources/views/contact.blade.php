@extends('layout')

@section('content')
<h3>Contact</h3>
@foreach($data as $key => $value)
{{$key . " = " . "$value"}}
@endforeach
@endsection