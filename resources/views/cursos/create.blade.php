@extends('layouts.plantilla')
@section('title', 'Curso')

@section('content')
<h1>En esta pagina podras crear un curso</h1>

<div>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label for="#name">Name:</label><br>
        <input type="text" name="name" id="name"><br>

        <label for="#description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>

        <label for="#category">Category</label><br>
        <input type="text" name="categoria" id="category"><br>

        <br>
        <button type="submit">Send</button>
    </form>
</div>

@endsection
