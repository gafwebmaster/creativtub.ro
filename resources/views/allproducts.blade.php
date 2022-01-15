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
