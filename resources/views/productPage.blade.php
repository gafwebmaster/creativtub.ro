@extends('layouts.index')
@section('center')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include("layouts.categoryNavigation")
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Lista de produse</h2>

                    @foreach($product as $detail)              

                <div>
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{Storage::disk('local')->url('product_images/'.$detail->picture)}}" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <a href="{{ url()->previous() }}"><i class="fa fa-angle-left back" aria-hidden="true"></i> Inapoi</a>
                                <img src="images/product-details/new.jpg" class="newarrival" alt="">
                                <h2>{{$detail->product_name}}</h2>
                                <p>Cod produs: {{$detail->id}}</p>
                
                                <span>
                                    @if($detail->price =='livrare la comanda')         
                                    Cere oferta        
                                    @else
                                        <h2 class="price">{{ $detail->price }}Ron</h2>    
                                    @endif
                                    <a href="{{route('AddToCartProduct', ['id'=>$detail->id])}}" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>Adauga in cos</a>
                                </span>
                
                                <p><b>Disponibilitate:</b>
                                    @if(($detail->in_stock)=="Da")
                                            in Stoc
                                    @else
                                            stoc epuizat
                                    @endif
                                </p>             
                                        
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
                                    <p>{!!$detail->desOne!!}</p>
                                    <p>{!!$detail->desTwo!!}</p>
                                    <p>{!!$detail->desThree!!}</p>
                                    <p>{!!$detail->desFour!!}</p>
                                </div>
                            </div>
                        </div>
                    </div><!--/category-tab-->
                </div>
                
                
                @endforeach           


                </div>
                <!--features_items-->
            </div>
        </div>
    </div>
</section>
@endsection
