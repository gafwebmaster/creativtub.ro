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
                    @foreach ($products as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <div class="imgThumb">
                                        <a href="/{{Str::slug($product->product_name)}}/{{$product->id}}">
                                            <img src="{{Storage::disk('local')->url('product_images/'.$product->picture)}}" alt="" />
                                        </a>
                                    </div>

                                    @if($product->price =='livrare la comanda')         
                                        Cere oferta        
                                    @else
                                        <h2>{{ $product->price * (0.1) + $product->price }}  Ron</h2>    
                                    @endif

                                    
                                    <p>{{ Str::limit($product->product_name, 10) }}</p>
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
