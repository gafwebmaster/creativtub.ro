@extends('layouts.index')
@section('center')
<div class="header-bottom">
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
                        <li><a href="#">Despre noi</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Cautare"/>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/header-bottom-->
</header><!--/header-->
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
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>EMA</span>-CERAMICS ART</h1>
                                <h2>Ceramica si portelanuri</h2>
                                <p>Cadouri unice lucrate manual</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                <img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>EMA</span>-CERAMICS ART</h1>
                                <h2>Ceramica si portelanuri</h2>
                                <p>Cadouri unice lucrate manual</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                <img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>EMA</span>-CERAMICS ART</h1>
                                <h2>Ceramica si portelanuri</h2>
                                <p>Cadouri unice lucrate manual</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                <img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />
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
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Categorii</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    Bijuterii din Portelan de Limoges
                                    </a>
                                </h4>
                            </div>
                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Brose </a></li>
                                        <li><a href="#">Cercei </a></li>
                                        <li><a href="#">Pandantive </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    Decoratiuni Pentru Casa si Vesela
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Boluri</a></li>
                                        <li><a href="#">Cani Unicat si Personalizate</a></li>
                                        <li><a href="#">Ceasuri Masa</a></li>
                                        <li><a href="#">Ceasuri Perete</a></li>
                                        <li><a href="#">Chivete Interior-Exterior</a></li>
                                        <li><a href="#">Ghivece Flori</a></li>
                                        <li><a href="#">Platouri</a></li>
                                        <li><a href="#">Servicii Masa</a></li>
                                        <li><a href="#">Suporti Lumanari</a></li>
                                        <li><a href="#">Vaze Decorative</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    Decoratiuni si Vaze Pentru Florarii
                                    </a>
                                </h4>
                            </div>
                            <div id="womens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Figurine Pentru Decor Ghivece si Buchete</a></li>
                                        <li><a href="#">Ghivece</a></li>
                                        <li><a href="#">Vaze Ceramica</a></li>
                                        <li><a href="#">Vaze Portelan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#textile">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    Textile
                                    </a>
                                </h4>
                            </div>
                            <div id="textile" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Decoratiuni Craciun</a></li>
                                        <li><a href="#">Decoratiuni Paste</a></li>
                                        <li><a href="#">Moda - Tricouri Pictate Manual</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#gift">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    Decoratiuni pentru Gradina
                                    </a>
                                </h4>
                            </div>
                            <div id="gift" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Figurine Decor Ghivece</a></li>
                                        <li><a href="#">Figurine Decor Gradina</a></li>
                                        <li><a href="#">Ghivece Flori</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Decoratiuni si Vaze Pentru Florarii</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{route('menProducts')}}">Men</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{route('womenProducts')}}">Women</a></h4>
                            </div>
                        </div>
                    </div>
                    <!--/category-products-->
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Realizari noi</h2>
                    @foreach ($products as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{Storage::disk('local')->url('product_images/'.$product->image)}}" alt="" />
                                    <h2>{{ $product->price }}Ron</h2>
                                    <p>{{ $product->name }}</p>
                                    <a href="{{route('AddToCartProduct', ['id'=>$product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--features_items-->
            </div>
        </div>
    </div>
</section>
@endsection
