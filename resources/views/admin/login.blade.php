<!doctype html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('/css/materialize.min.css')}}"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/login.css')}}" />
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('/js/materialize.min.js')}}"></script>

		
		<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/normalize.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/component.css')}}" />
		<script src="{{URL::asset('/js/modernizr.custom.js')}}"></script>
  </head>
  <body class="blue lighten-1">
    <div class="container">
      <div class="row">
        <div id="login-container" class="col s12 m8 l6 offset-m2 offset-l3 center">
          <section id="login-section" class="col-2 center ss-style-triangles">
            <div id="login-header" class="col s12 center white-text">
              <h1>Login</h1>
            </div>
            <form id="login-form" class="yellow">
              <div class="input-field col s12 center">
                <input id="username" type="text" class="validate blue-text text-darken-4">
                <label for="username">Username</label>
              </div>
              <div class="input-field col s12 center">
                <input id="password" type="password" class="validate blue-text text-darken-4">
                <label for="password">Password</label>
              </div>
              <div class="btn">
                <span>Login</span>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
