<!--header top start-->
<div id="header_top" style="background-color:rgba(211, 211, 211, 0.275);">
    <div class="container  justify-content-between">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="support_info">
                    {{-- <p>Telephone Enquiry: <a href="tel:0123456789">0123456789</a></p> --}}
                    <small><i class="fa fa-archive"></i> Free Shipping upto 10LBS  &nbsp;|&nbsp; <a href="#" style="color: black"><i class="fa fa-usd"></i> 500 month return policy</a> &nbsp;|&nbsp; <a href="#" style="color: black"><i class="fa fa-life-ring"></i> Customer support</a></small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="top_right mt-2 text-end">
                    <ul>
                        @guest
                            <a class="getstarted scrollto " href="{{route('login')}}">Login</a>&nbsp;|&nbsp;
                            <a class="getstarted scrollto " href="{{route('register')}}">Registers</a>
                        @endguest
                        @auth
                        <a href="{{ route('profile') }}"> My Account </a>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header top start-->
  <!-- ======= Header ======= -->
   <header id="header"  style="background-color: #F3F9FD;" class=" d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
         <a href="{{route('index')}}"><img src="{{asset('assets/img/img.png')}}" alt="" height="30%" width="30%" ></a>
      <nav id="navbar" class="navbar main_menu">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
