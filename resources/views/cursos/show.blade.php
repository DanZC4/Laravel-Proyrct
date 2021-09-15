@extends('layouts.plantilla') 
@section('title', $curso->name)
@section('content')
<h1>welcome to course {{$curso->name}} </h1>

<a href="{{route('cursos.index')}}">Return to courses </a>
<br>
<a href="{{route('cursos.index')}}">Edit course</a>

<p><strong>Category: </strong>{{$curso->categoria}}</p>

<p>{{$curso->description}}</p>
@endsection

