<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<title>@yield('title')vistante</title>
         
       <link rel="stylesheet" href="{{asset('chosen/chosen.css')}}">
       <link rel="stylesheet" href="{{asset('tema/tema.css')}}">
       <link rel="stylesheet" href="{{asset('dist/ui/trumbowyg.css')}}">
</head>
<body>
    @include('admin.template.partials.nav2')
  
    <div class="container">
    <div class="row">
    
            <section>
               @include('flash::message')
                @yield('content')

            </section>

    </div>
   </div>    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="{{asset('chosen/chosen.jquery.js')}}"></script>
   <script src="{{asset('dist/trumbowyg.js')}}"></script>
      @yield('js')  
</body>
</html>
