<!doctype html>
<html>
  <head>
    @include('layouts.head')
  </head>
  <body>
    @include('layouts.navigator') 
    
    @yield('content')

    @include('layouts.footer')
  </body>
</html>
