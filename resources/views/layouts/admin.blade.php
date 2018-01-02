<!doctype html>
<html>
  <head>
    @include('layouts.admin_head')
  </head>
  <body>
    <div class="navigator">
      @include('layouts.admin_navigator') 
    </div>
    <div class="content">
      @yield('content')
    </div>
    @include('layouts.admin_footer_script')
  </body>
</html>
