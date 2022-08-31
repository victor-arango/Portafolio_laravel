<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- ================ICONOS================ -->
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <!-- ================CSS================ -->
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     

     

     <title>@yield('title')</title>

        @include('partials.nav')

</head>
<body>
    <!-- ============   HEADER   ============ -->
    <section class="home" id="home">
     

        
     @yield('content')
    </section>
    <script src="{{ asset('js/sidebar.js') }}" type="text/javascript"></script>
   
 