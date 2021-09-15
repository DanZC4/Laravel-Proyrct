@extends('layouts.plantilla')
@section('title', 'Cursos')

@section('content')
<div class="space-y-4">
<h1 class="pb-4">welcome to curso </h1>
<a href="{{route('cursos.create')}}" class="bg-red-500 text-white font-blod py-2 px-5">Create Curso</a>
<ul>
    @foreach ($cursos as $curso)
        <li>
            <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
        </li>
    @endforeach
</ul>

{{$cursos->links()}}
</div>
@endsection