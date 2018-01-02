<!-- Sticky Header -->
<header class="main_h">
  <div class="row">
    <a class="logo" href="#">L/F</a>
    <div class="mobile-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div id="nav-floating">
      <ul>
        <li><a href="{{URL::route('home')}}">Home</a></li>
        <li><a href="#">Member</a></li>
        <li><a href="{{URL::route('catalogue')}}">Catalogue</a></li>
        <li><a href="{{URL::route('store')}}">Store</a></li>
        <li><a href="{{URL::route('contact')}}">Contact Us</a></li>
        <li>
          <form id="search-form-mobile">
            <div class="input-field">
              <input type="search" placeholder="Search" required class="transparent">
              <i class="material-icons">search</i>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
</header>

<!-- Main Header -->
<div class="custom-container center hide-on-med-and-down">
  <h1 id="main-title">Sophie</h1>
</div>
<div class="custom-container center hide-on-med-and-down">
  <div class="row">
    <form id="search-form" class="col s6 offset-s3 center">
      <div class="input-field">
        <input id="search" type="search" placeholder="Search" required>
        <i class="material-icons">search</i>
      </div>
    </form>
  </div>
</div>
<nav id="navbar-primary" >
  <div class="nav-wrapper white">
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="hide-on-med-and-down navbar-nav">
      <li><a href="{{URL::route('home')}}">Home</a></li>
      <li><a href="#">Member</a></li>
      <li><a href="{{URL::route('catalogue')}}">Catalogue</a></li>
      <li><a href="{{URL::route('store')}}">Store</a></li>
      <li><a href="{{URL::route('contact')}}">Contact Us</a></li>
    </ul>
  </div>
</nav>

<!-- Mobile Fixed Navbar -->
