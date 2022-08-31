@extends('layout')

@section('title', 'Editar proyecto')

@section('content')

<h1>Editar proyecto</h1>


     @include('partials.validation-error')

    <form action="{{route('projects.update', $project ) }}" method="POST">
     @method('patch')

     @include('partials._form', ['btnText' => 'Actualizar'])
     
    </form>  

@endsection

