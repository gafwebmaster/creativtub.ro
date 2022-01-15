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
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Categorii</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->



                        @foreach ($category as $categories)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    {{$categories->denumire}}
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>                                        
                                        <li><a href="#">Suporti Lumanari</a></li>
                                        <li><a href="#">Vaze Decorative</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                                    <div class="imgThumb">
                                        <a href="product/{{$product->id}}">
                                            <img src="{{Storage::disk('local')->url('product_images/'.$product->image)}}" alt="" />
                                        </a>
                                    </div>
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
