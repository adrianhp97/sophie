@extends('layouts.default')

@section('content')
<div class="custom-container">
  <div class="slider transparent">
    <ul class="slides transparent">
      <li>
        <img src="{{URL::asset('/img/background1.jpg')}}"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="{{URL::asset('/img/background2.jpg')}}"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="{{URL::asset('/img/background3.jpg')}}"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="{{URL::asset('/img/back.jpg')}}"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
</div>

<div class="custom-container">
  <div class="row">
    <div class="col s12 m3 center">
      <div class="card">
        <div class="card-image">
          <img src="{{URL::asset('/img/background1.jpg')}}">
          <span class="card-title">Card Title</span>
        </div>
      </div>  
    </div>
    <div class="col s12 m3 center">
      <div class="card">
        <div class="card-image">
          <img src="{{URL::asset('/img/background1.jpg')}}">
          <span class="card-title">Card Title</span>
        </div>
      </div>  
    </div>
    <div class="col s12 m3 center">
      <div class="card">
        <div class="card-image">
          <img src="{{URL::asset('/img/background1.jpg')}}">
          <span class="card-title">Card Title</span>
        </div>
      </div>  
    </div>
    <div class="col s12 m3 center">
      <div class="card">
        <div class="card-image">
          <img src="{{URL::asset('/img/background1.jpg')}}">
          <span class="card-title">Card Title</span>
        </div>
      </div>  
    </div>  
  </div>
</div>

<div class="custom-container">
  <div class="row">
    <div class="col s12 center title-separator">
      <h2>Title Gallery</h2>
    </div>
  </div>
</div>

<div class="custom-container">
  <div class="row">
    <div id="home-carousel" class="carousel">
      <a class="carousel-item" href="#one!"><img src="{{URL::asset('/img/download.jpeg')}}"></a>
      <a class="carousel-item" href="#two!"><img src="{{URL::asset('/img/download.jpeg')}}"></a>
      <a class="carousel-item" href="#three!"><img src="{{URL::asset('/img/download.jpeg')}}"></a>
      <a class="carousel-item" href="#four!"><img src="{{URL::asset('/img/download.jpeg')}}"></a>
      <a class="carousel-item" href="#five!"><img src="{{URL::asset('/img/download.jpeg')}}"></a>
    </div>
  </div>
</div>

<div class="custom-container">
  <div class="row">
    <div class="col s12 center title-separator">
      <h2>Title Gallery</h2>
    </div>
  </div>
</div>

<div class="custom-container">
  <div class="row">
    @for($i=0;$i<8;++$i)
    <div class="col s12 m3">
      <div class="custom-card">
        <div class="image">
          <img src="{{URL::asset('/img/bag.jpeg')}}">
        </div>
        <div class="title">
          <h5>Name</h5>
        </div>
      </div>
    </div>
    @endfor
  </div>
</div>

<div class="custom-container">
  <div class="row">
    <div class="go-to-link cl-effect-21">
      <a href="#">
        <h6>
          <i class="material-icons">chevron_right</i>
          <span>Go to Store</span>
        </h6>
      </a>
    </div>
  </div>
</div>
@endsection