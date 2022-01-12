<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EMA CERAMICS ART</title>
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
    <link rel="shortcut icon" href="{{asset('')}}images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">

								<li><a href="tel:+07294 457 64"><i class="fa fa-phone"></i> +4 07294 457 64</a></li>
								<li><a href="mailto:office@emaceramicsart.ro"><i class="fa fa-envelope"></i> office@emaceramicsart.ro</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a target="_blank" href="https://www.facebook.com/emaceramicsart.ro/"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/emaceramicsart/?utm_medium=copy_link"><i class="fa fa-instagram"></i></a></li>
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
							<a href="index.html"><img src="{{asset('images/home/logo.png')}}" alt="" /></a>
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
