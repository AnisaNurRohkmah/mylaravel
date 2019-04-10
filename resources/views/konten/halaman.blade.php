<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" type="text/css" href="/css/app.css">


<div class="a">
@extends('layout.layout')

@section('title',$title)

@section('sidebar')
@parent
 <li class="nav-item">
    <a class="nav-link" href="#">PHP</a>
  </li>

@endsection

@section('content')
<center><img src="pic.jpg" width="100%" height="70%">

<p>{{ $konten }}</p>
@stop
</div>


