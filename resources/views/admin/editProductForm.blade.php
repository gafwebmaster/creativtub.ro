@extends('layouts.admin')

@section('body')

<div class="table-responsive">
    <form action="/admin/updateProducts/{{$product->id}}" method="post">
        {{@csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Product name" value="{{$product->name}}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="{{$product->description}}" required>
        </div>
        <div class="form-group">
            <label for="description">Type</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{$product->type}}" required>
        </div>
        <div class="form-group">
            <label for="description">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{$product->price}}" required>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
</div>

@endsection
