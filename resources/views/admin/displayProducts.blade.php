@extends('layouts.admin')

@section('body')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Produc ID</th>
        <th scope="col">Imagine</th>
        <th scope="col">Nume</th>
        <th scope="col">Pret</th>
        <th scope="col">Categorie</th>
        <th scope="col">Schimba imagine</th>
        <th scope="col">Edit produs</th>
        <th scope="col">Sterge</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
      <tr>
        <th scope="row">{{ $product->id }}</th>
        <td><img width="100" src="{{Storage::disk('local')->url('product_images/'.$product->image)}}" alt="" /></td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->type }}</td>
        <td><a class="btn btn-primary" href="{{ route('adminEditProductImageForm',['id'=>$product['id']]) }}">Schimba imagine</a></td>
        <td><a class="btn btn-primary" href="{{ route('adminEditProductForm',['id'=>$product['id']]) }}">Edit produs</a></td>
        <td><a class="btn btn-danger" href="{{route('adminDeleteProduct',['id'=>$product['id']])}}">Sterge</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
{{$products->links()}}
@endsection
