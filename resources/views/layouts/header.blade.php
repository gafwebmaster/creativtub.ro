<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CREATIV TUB</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/main.css')}}" rel="stylesheet">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('images/shop/favicon.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="tel:+040751839308"><i class="fa fa-phone"></i> 0751 839 308</a></li>
								<li><a href="mailto:contact@creativtub.ro"><i class="fa fa-envelope"></i> contact@creativtub.ro</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a target="_blank" href="https://www.facebook.com/CreativTub-106999601589519"><i class="fa fa-facebook"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="/"><img src="{{asset('images/shop/logo.png')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">

								<li>
                                    <a href="{{route('cartproducts')}}"><i class="fa fa-shopping-cart"></i> Detalii cos
                                        <strong>
                                            @if(session()->get('cart'))
                                                @if(Session::get('cart')->totalQuantity===1){{Session::get('cart')->totalQuantity}} produs @endif
                                                @if(Session::get('cart')->totalQuantity>1){{Session::get('cart')->totalQuantity}} produse @endif
                                            @endif
                                        </strong>
                                    </a>
                                </li>

                                @if(Auth::check())
                                <li><a href="/admin/products"><i class="fa fa-unlock-alt"></i> Admin</a></li>
                                <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout, {{ Auth::user()->name }}</a></li>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                <li><a href="/login"><i class="fa fa-sign-in"></i> Login</a></li>
                                @endif

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
		<div class="header-bottom" style="display: none">
			<!--header-bottom-->
			<div class="container">
		
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="/" class="active">Home</a></li>
								<li><a href="#">Transport marfa</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="search" method ="get">
								<input type="text" name="searchText" placeholder="Cautare"/>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
		</header><!--/header-->
		<div class="container">
			@include('alert')
		</div>
		<section id="slider">
			<!--slider-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="slider-carousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#slider-carousel" data-slide-to="1"></li>
								<li data-target="#slider-carousel" data-slide-to="2"></li>
								<li data-target="#slider-carousel" data-slide-to="3"></li>
								<li data-target="#slider-carousel" data-slide-to="4"></li>
								<li data-target="#slider-carousel" data-slide-to="5"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-4">
										<h1><span>CREATIV</span> TUB</h1>
										<h2>Materiale metalurgice</h2>
										<p>Asiguram transportul</p>
									</div>
									<div class="col-sm-8">
										<img src="{{asset('images/home/metalurgice.jpg')}}" class="girl img-responsive" alt="" />                                
									</div>
								</div>
								<div class="item">
									<div class="col-sm-4">
										<h1><span>CREATIV</span> TUB</h1>
										<h2>Materiale constructii</h2>
										<p>Asiguram transportul</p>
									</div>
									<div class="col-sm-8">
										<img src="{{asset('images/home/constructii.jpg')}}" class="girl img-responsive" alt="" />
									</div>
								</div>
								<div class="item">
									<div class="col-sm-4">
										<h1><span>CREATIV</span> TUB</h1>
										<h2>Sanitare</h2>
										<p>Asiguram transportul</p>
									</div>
									<div class="col-sm-8">
										<img src="{{asset('images/home/sanitare.jpg')}}" class="girl img-responsive" alt="" />
									</div>
								</div>
								<div class="item">
									<div class="col-sm-4">
										<h1><span>CREATIV</span> TUB</h1>
										<h2>Unelte</h2>
										<p>Asiguram transportul</p>
									</div>
									<div class="col-sm-8">
										<img src="{{asset('images/home/Unelte.jpg')}}" class="girl img-responsive" alt="" />
									</div>
								</div>
								<div class="item">
									<div class="col-sm-4">
										<h1><span>CREATIV</span> TUB</h1>
										<h2>Electrice</h2>
										<p>Asiguram transportul</p>
									</div>
									<div class="col-sm-8">
										<img src="{{asset('images/home/Electrice.jpg')}}" class="girl img-responsive" alt="" />
									</div>
								</div>
								<div class="item">
									<div class="col-sm-4">
										<h1><span>CREATIV</span> TUB</h1>
										<h2>Echipamente gradina</h2>
										<p>Asiguram transportul</p>
									</div>
									<div class="col-sm-8">
										<img src="{{asset('images/home/Gradina.jpg')}}" class="girl img-responsive" alt="" />
									</div>
								</div>
							</div>
							<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
							</a>
							<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/slider-->