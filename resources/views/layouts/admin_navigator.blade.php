<header>
  <div class="logo">Sophie</div>
</header>
<div class="nav-btn">Menu</div>

<div class="sidebar">
  <div>
    <a href="#">Sophie</a>
    <ul>
      <li><a href="{{URL::route('dashboard-home')}}">Dashboard</a></li>
      <li><a href="{{URL::route('dashboard-barang')}}">Edit Barang</a></li>
      <li><a href="{{URL::route('dashboard-member')}}">Member</a></li>
      <li><a href="{{URL::route('dashboard-subscriber')}}">Subscriber</a></li>
      <li><a href="{{URL::route('dashboard-login')}}">Logout</a></li>
    </ul>
  </div>
</div>