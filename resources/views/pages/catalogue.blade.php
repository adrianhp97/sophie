@extends('layouts.default')

@section('content')
<div class="custom-container">
  <div class="row">
    <div class="col s12 center title-separator">
      <h2>Catalogue</h2>
    </div>
  </div>
</div>

<section>
  <div class="custom-container">
    <div class="row">
      <div class="col s12 m4 center">
        <div class="image-catalogue hoverable">
          <img src="{{URL::asset('/img/bag.jpeg')}}" alt="catalogue">
        </div>
        <h5>Catalogue 1</h5>
      </div>
      <div class="col s12 m4 center">
        <div class="image-catalogue hoverable">
          <img src="{{URL::asset('/img/bag.jpeg')}}" alt="catalogue">
        </div>
        <h5>Catalogue 2</h5>
      </div>
      <div class="col s12 m4 center">
        <div class="image-catalogue hoverable">
          <img src="{{URL::asset('/img/bag.jpeg')}}" alt="catalogue">
        </div>
        <h5>Catalogue 3</h5>
      </div>
    </div>
  </div>
</section>
@endsection