@extends('layouts.default')

@section('content')
<div class="custom-container">
  <div class="section">
    <div class="row">
      <div class="col s12 center">
        <h1>List Barang</h1>
      </div>
      <div class="col s12 m4 l3">
        <ul class="collapsible" data-collapsible="accordion">
          @for ($i = 0; $i < 10; $i++)
            <li>
              <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
          @endfor
        </ul>
      </div>
      <div class="col s12 m8 l9">
        @for ($i = 0; $i < 10; $i++)
          <!-- <div class="col s12 m3">
            <div class="custom-card">
              <div class="image">
                <img src="{{URL::asset('/img/bag.jpeg')}}">
              </div>
              <div class="title">
                <h5>Name</h5>
              </div>
            </div>
          </div> -->
          @include('layouts.product') 
        @endfor
      </div>
    </div>
  </div>
</div>
@endsection