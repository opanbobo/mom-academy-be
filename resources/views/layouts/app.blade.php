<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mom Academy</title>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <script src="{{ asset('scripts/modernizr.js') }}"></script>
  </head>
  <body>
    <div id="wrapper">
		<div id="top-desktop">
			<div class="orange-top">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6">
						<div class="d-flex justify-content-end align-items-center">
							@if (AppHelper::getAuth())
              <div class="user pr-2">
                {{-- <a data-dismiss="modal" data-toggle="modal" href="#modalLogin"> --}}
                  <img src="{{ asset('images/ico-user.png') }}" alt="" class="img-fluid">
                {{-- </a> --}}
							</div>
								<div class=" pr-2 text-center">
                 <span class="white-color">{{ ucwords(strtok(AppHelper::getAuth('user_name'), ' ')) }}</span>
                </div>
							@else	
              <div class="user pr-2"><a data-dismiss="modal" data-toggle="modal" href="#modalLogin">
                <img src="{{ asset('images/ico-user.png') }}" alt="" class="img-fluid"></a>
							</div>
								<div class="act-link pr-2 text-center"><a data-toggle="modal" data-target="#modalRegist">Join MoM</a></div>
							@endif
							<form class="searchbar">
								<input type="search" placeholder="Search here" name="search" class="searchbar-input" onkeyup="buttonUp();" required> 
								<input type="submit" class="searchbar-submit" value="GO"> 
								<span class="searchbar-icon"><i class="fa fa-search" aria-hidden="true"></i></span> 
							</form>
						</div>
					</div>
				</div>            
			</div>
			</div>
			<div class="after-orange-top">
			<div class="container">
				<div class="top-wrapper d-flex py-3">
				<div class="logo"><a href="{{ url('/')}}"><img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid"></a></div>
				<div class="menus d-flex align-items-center">
					<ul>
            <li class="mr-4 {{ Request::segment(1) == 'about-us' ? 'active' :'' }} "><a href="{{ url('about-us') }}">About Us</a></li>					
					<li class="mr-4 {{ Request::segment(1) == 'class' ? 'active' :'' }} "><a href="{{ url('class') }}">The Academy</a></li>
					<li class="mr-4 {{ Request::segment(1) == 'get-income' ? 'active' :'' }} "><a href="{{ url('get-income') }}">Get Income</a></li>
					<li class="mr-4 {{ Request::segment(1) == 'events' ? 'active' :'' }} "><a href="{{ url('events') }}">Events</a></li>
          <li class="mr-4 {{ Request::segment(1) == 'articles' ? 'active' :'' }} "><a href="{{ url('articles') }}">Article</a></li>
					<li class="mr-4 {{ Request::segment(1) == 'market-day' ? 'active' :'' }} "><a href="{{ url('market-day') }}">Market Day</a></li>
          @if (!AppHelper::getAuth())
          <li class="mr-4 "><a data-toggle="modal" data-target="#modalRegist">Join Us</a></li>          
          @endif
					</ul>
				</div>
				</div>            
			</div>
			</div>
		</div>
      	<div id="top-mobile">
			<nav class="navbar navbar-expand-lg orange-top">
			<button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars text-white"></i>
			</button>
			<div class="d-flex justify-content-end align-items-center">
				<div class="user "><a href="#"><img src="{{ asset('images/ico-user.png') }}" alt="" class="img-fluid"></a></div>
				<div class="act-link text-center"><a href="#">Join MoM</a></div>
			</div>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link text-white" href="index.html">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="detail-class.html">The Academy</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="get-income.html">Get Income</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="events.html">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="market.html">Market Day</a>
				</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-danger my-3 my-sm-0 text-white border-white" type="submit">Search</button>
				</form>
			</div>
			</nav>
    	</div>

		@yield('content')

      <div id="bottom">
        <div class="container">
          <div class="d-flex justify-content-between py-4">
            <div class="block">
              <img src="images/logo-footer.png" alt="" class="img-fluid">
            </div>
            <div class="block">
              <img src="images/logo-fab.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>        
      </div>
    </div>

    <!-- Modal Regist -->
    <div class="modal fade form-popup" id="modalRegist">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-0">
            <div class="text-center w-100"><img src="images/logo.png" alt="" class="img-fluid"></div>
          </div>
          <div class="modal-body px-md-5">
            <h4 class="title">Register</h4>
            <div class="sso mb-3">
				<a href="{{ url('auth/facebook') }}">
					<img src="images/btn-fb.png" alt="" class="img-fluid">
				</a>
		  	</div>
            <div class="sso mb-3">
              <a href="{{ url('auth/google') }}">
                <img src="images/btn-google.png" alt="" class="img-fluid">
               </a>
            </div>
            <div class="wrapper-oblock position-relative text-center mb-3">
              <div class="oblock px-3">atau</div>
            </div>
            <form action="" class="form-regist" id="registerForm" content="{{ csrf_token() }}">
             
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Depan" name="name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Belakang" name="lastname">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Alamat Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nomor Ponsel" name="phone">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="*Konfirmasi Password" name="password_confirmation">
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    Saya telah <span>membaca dan mengerti</span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck2">
                  <label class="form-check-label" for="gridCheck2">
                    Saya menerima <span>kebijakan privasi</span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck3">
                  <label class="form-check-label" for="gridCheck3">
                    Saya tertarik mendapatkan kabar, informasi, diskon dari Mothers on Mission
                  </label>
                </div>
              </div>
              <div class="form-group">
                <button class="text-uppercase text-white font-weight-bold border-0 w-100 btn-submit-popup" type="submit">Daftar sekarang</button>
				<div class="d-flex justify-content-center btn-spinner-login">
					
				  </div>				  
              </div>
			  <div class="form-group alert">
				{{-- <div class="alert alert-danger">error</div> --}}
			  </div>
              <div class="form-group">
                <div data-dismiss="modal" data-toggle="modal" href="#modalLogin">Sudah punya akun? Masuk</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>    
    <!-- Modal Login -->
    <div class="modal fade form-popup pb-5" id="modalLogin" >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-0">
            <div class="text-center w-100"><img src="images/logo.png" alt="" class="img-fluid"></div>
          </div>
          <div class="modal-body px-md-5">
            <h4 class="title">Login</h4>
            <div class="sso mb-3">
				<a href="{{ url('auth/facebook') }}">
					<img src="images/btn-fb.png" alt="" class="img-fluid">
				</a>
			</div>
            <div class="sso mb-3">
             <a href="{{ url('auth/google') }}">
              <img src="images/btn-google.png" alt="" class="img-fluid">
             </a>
            </div>
            <div class="wrapper-oblock position-relative text-center mb-3">
              <div class="oblock px-3">atau</div>
            </div>
            <form action="" class="form-regist" method="POST" id="loginForm" content="{{ csrf_token() }}">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
              <div class="form-group">
                <button class="text-uppercase text-white font-weight-bold border-0 w-100 btn-submit-popup" type="submit">Next</button>
                <div class="d-flex justify-content-center btn-spinner-login">
                
                </div>
              </div>
              <div class="form-group alert">
                {{-- <div class="alert alert-danger">error</div> --}}
              </div>
              <div class="form-group">
                <div class="" data-dismiss="modal" data-toggle="modal" href="#modalRegist">Belum punya akun? Yuk Daftar</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    <script src="{{ asset('scripts/vendor.js') }}"></script>
    <script src="{{ asset('scripts/main.js') }}"></script>
    <script src="{{ asset('scripts/ajax.js') }}"></script>
  </body>
</html>
