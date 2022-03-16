
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
            @foreach($orderDetails as $order)
            <tr>
                <td>
                    {{$order->user_id}}
                </td>
               
                <td class="cart_quantity">
                    {{$order->phone}}
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
