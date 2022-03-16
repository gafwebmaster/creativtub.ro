@extends('layouts.index')
@section('center')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="/products">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>

                    <tr class="cart_menu">
                        <td class="image"></td>
                        <td class="description">Produs</td>
                        <td class="price">Pret</td>
                        <td class="quantity">Cantitate</td>
                        <td class="total">Total</td>
                        <td>Sterge</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems->items as $item)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img width="100" src="{{Storage::disk('local')->url('product_images/'.$item['data']['picture'])}}"></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$item['data']['name']}}</a></h4>
                            <p class="ml">{{$item['data']['product_name']}}</p>
                        </td>
                        <td class="cart_price">
                            <p> {{ $item['data']['price'] * (0.1) + $item['data']['price'] }}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_down" href="{{route('DecreaseSingleProduct',['id'=>$item['data']['id']])}}"> - </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item['quantity']}}" autocomplete="off" size="2">
                                <a class="cart_quantity_up" href="{{route('IncreaseSingleProduct',['id'=>$item['data']['id']])}}"> + </a>

                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{$item['totalSinglePrice'] * (0.1) + $item['totalSinglePrice']}}Ron</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{route('DeleteItemFromCart',['id'=>$item['data']['id']])}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="shopper-informations shopper-info">
            <form action="/product/createOrder" method="POST">
                {{csrf_field()}}

            <div class="row">
                <div class="col-sm-8">
                    <div>
                        <p>Date expeditor</p>


                            <input type="text" name="fullName" placeholder="Nume*" required>
                            <input type="text" name="phone" placeholder="Telefon*" required>
                            <input type="email" name="email" placeholder="Email*" required>
                            <input type="text" name="address" placeholder="Adresa*" required>
                            <input type="text" name="businessName" placeholder="Nume firma">
                            <input type="text" name="cui" placeholder="CUI">
                            <textarea name="message"  placeholder="Doriti sa ne transmiteti ceva?" rows="5"></textarea>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="order-message">
                        <div class="total_area">
                            <p>Cost comanda</p>
                            <ul>
                                <li>Cost comanda <span>{{$cartItems->totalPrice}}Ron</span></li>
                                <li>Cost livrare <span>20Ron</span></li>
                                <li><strong>Total</strong> <span>{{$cartItems->totalPrice+20}}Ron</span></li>
                            </ul>
                                <button class="btn btn-default check_out" type="submit">Plaseaza comanda</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</section>

<section id="do_action">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>
    </div>
</section>
@endsection
