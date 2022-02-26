@extends('layouts.admin')

@section('body')

<div class="table-responsive">
    <h4 class="pb-4">LISTA COMENZI</h4>

    <table class="table table-condensed">
        <thead>
            <tr class="cart_menu">
                <td>Id</td>
                <td>Status</td>
                <td>Nume</td>
                <td>Telefon</td>
                <td>Email</td>
                <td>Adresa</td>
                <td>Nume business</td>
                <td>CUI</td>
                <td>Mesaj</td>
                <td>Produse comandate</td>
            </tr>
        </thead>
        <tbody>
            @foreach($adminOrders as $order)
            <tr>
                <td>
                    {{$order->order_id}}
                </td>
                <td>
                    {{$order->status}}
                </td>
                <td class="cart_price">
                    {{$order->name}}
                </td>
                <td class="cart_quantity">
                    {{$order->phone}}
                </td>
                <td class="cart_total">
                    {{$order->email}}
                </td>
                <td class="cart_delete">
                    {{$order->address}}
                </td>
                <td class="cart_delete">
                    {{$order->businessName}}
                </td>
                <td class="cart_delete">
                    {{$order->cui}}
                </td>
                <td class="cart_delete">
                    {{$order->message}}
                </td>
                <td class="cart_delete">
                    {{-- @foreach($order->order_id as $item)                 
                        {{$item->item_name}}
                    @endforeach --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
