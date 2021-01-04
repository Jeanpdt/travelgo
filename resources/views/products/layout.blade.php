<!DOCTYPE html>
<html>
<head>
    <title>CRUD - produtos</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <style>
        #outer {
            width:100%;
            text-align: center;
        }
        .inner {
            display: inline-block;
        } 
    </style>
</head>
<body>
  
<div class="container"> 
    @yield('content')
</div>
   
</body>
</html>