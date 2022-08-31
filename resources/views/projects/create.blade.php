@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

<h1>Crear nuevo proyecto</h1>

     @include('partials.validation-error')

    <form action="{{route('projects.store') }}" method="POST">
 
        @include('partials._form', ['btnText' => 'Guardar'])
   
    </form>  

@endsection

