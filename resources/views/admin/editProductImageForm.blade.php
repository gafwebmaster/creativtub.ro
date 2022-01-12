@extends('layouts.admin')

@section('body')

<div class="table-responsive">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <li>{!! print_r($errors->all()) !!}</li>
            </ul>
        </div>
    @endif

    <h3>Current image</h3>
    <div><img src="{{asset('storage')}}/product_images/{{$product['image']}}" width="100" ></div>
    <form action="/admin/updateProductImage/{{$product->id}}" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}

        <div class="form-group">
            <label for="description">Update image</label>
            <input type="file" name="image" placeholder="Image" value="{{$product->image}}" required>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>

    </form>

</div>

@endsection
