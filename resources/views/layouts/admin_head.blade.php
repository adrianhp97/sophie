<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->

<link href="{{URL::asset('/css/admin.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="{{URL::asset('/css/materialize.min.css')}}"  media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{URL::asset('/js/materialize.min.js')}}"></script>
