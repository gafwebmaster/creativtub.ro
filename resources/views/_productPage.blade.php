@include('layouts.header')

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
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{Storage::disk('local')->url('product_images/'.$selectedProduct->image)}}" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <a href="{{ url()->previous() }}"><i class="fa fa-angle-left back" aria-hidden="true"></i> Inapoi</a>
                            <img src="images/product-details/new.jpg" class="newarrival" alt="">
                            <h2>{{$selectedProduct->name}}</h2>
                            <p>Cod produs: {{$selectedProduct->id}}</p>

                            <span>
                                <span>{{$selectedProduct->price}} RON</span>
                                <a href="{{route('AddToCartProduct', ['id'=>$selectedProduct->id])}}" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>Adauga in cos</a>
                            </span>

                            <p><b>Disponibilitate:</b>
                                @if(($selectedProduct->disponibilitate)=="yes")
                                        in Stoc
                                @else
                                        stoc epuizat
                                @endif
                            </p>

                            @if(($selectedProduct->lungime))
                                <p><b>Lungime:</b> {{$selectedProduct->lungime}} cm</p>
                            @endif

                            @if(($selectedProduct->latime))
                                <p><b>Latime:</b> {{$selectedProduct->latime}} cm</p>
                            @endif

                            @if(($selectedProduct->adancime))
                                <p><b>Adancime:</b> {{$selectedProduct->adancime}} cm</p>
                            @endif

                            <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt=""></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab">Descriere</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews">
                            <div class="col-sm-12">
                                <p>{{$selectedProduct->description}}</p>
                            </div>
                        </div>
                    </div>
                </div><!--/category-tab-->
            </div>
        </div>
    </div>
</section>

