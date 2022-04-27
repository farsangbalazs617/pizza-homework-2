<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" >
    <script src="{{asset('js/app.js')}}" defer></script>

    <title>Pizza order</title>
  </head>
  <body class="d-flex flex-column h-100">
    @include('layouts.nav')
    <main class="flex-shrink-0">
        @yield('content')
    </main>
    @include('layouts.footer')
  </body>
</html>