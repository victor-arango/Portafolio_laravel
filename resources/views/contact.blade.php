@extends('layout')

@section('title', 'Contacto')




@section('content')

<h1>{{ __('Contact')}}</h1>


 <form action="{{route('contact.store')}}" method="post">
          @csrf
          <input type="text" name="name" placeholder="Nombre..." value="{{old('name')}}" ><br>

          {!! $errors->first('name', '<small>:message</small><br>') !!}


          <input type="text" name="email" placeholder="Email..." value="{{old('email')}}" ><br>

          {!! $errors->first('email', '<small>:message</small><br>') !!}


          <input type="text" name="subject" placeholder="Asunto..." value=
          "{{old('asunto')}}"><br>

          {!! $errors->first('asunto', '<small>:message</small><br>') !!} 

          <textarea name="mensaje" placeholder="Mensaje...">{{old('mensaje')}}</textarea><br>

            {!! $errors->first('mensaje', '<small>:message</small><br>') !!} 

          <br>
          <button>Enviar</button>

     </form>









    
@endsection