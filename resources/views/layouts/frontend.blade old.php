<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   
  {{-- <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" /> --}}
  <link href="{{ asset('frontend/css/bootstrap5.min.css') }}" rel="stylesheet">
 
  <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('frontend/css/jquery-ui.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/owlcarousel/owl.theme.default.min.css') }}" rel="stylesheet">

  
</head>
<body>
  
  


        @include('layouts.inc.frontnav')
        <div class="content">
          @yield('content')
        </div>

        

  </div>
  </div>





  <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}" ></script> 
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" ></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}" defer></script> 
 

  {{-- <script src="{{ asset('frontend/js/jquery3.6.min.js') }}" ></script>  --}}
  {{-- <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" ></script> --}}
  {{-- <script src="{{ asset('frontend/js/jquery-ui.min.js') }}" ></script>
  <script src="{{ asset('frontend/js/jquery.slicknav.js') }}" ></script>   --}}
    {{-- <script src="{{ asset('frontend/js/perfect-scrollbar.jquery.min.js') }}" defer></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
  @if(session('status'))
      <script>
        swal("{{ session('status') }}");
      </script>
    @endif
   @yield('scripts') 

  
</body>
</html>
