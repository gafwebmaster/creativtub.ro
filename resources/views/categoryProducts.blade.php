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
                                    
                                    <p>{{ Str::limit($product->product_name, 50) }}</p>
                                    @if($product->price =='0')         
                                        <b>Disponibil la comanda</b>        
                                    @else
                                        <h2>{{ $product->price }}Ron</h2>    
                                    @endif
                                    <a href="{{route('AddToCartProduct', ['id'=>$product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                    {{ $products->links() }}
                    
                </div>
                <!--features_items-->
            </div>
        </div>
    </div>
</section>
@endsection
