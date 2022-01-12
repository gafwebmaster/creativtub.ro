@extends('layouts.admin')

@section('body')


<div class="table-responsive">
    <h4 class="pb-4">ADAUGA PRODUS</h4>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <li>{!! print_r($errors->all()) !!}</li>
            </ul>
        </div>
    @endif

    <form action="/admin/sendCreateProductForm" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Product name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description" required>
        </div>
        <div class="form-group">
            <label for="description">Type</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Type" required>
        </div>
        <div class="form-group">
            <label for="description">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price" required>
        </div>



        <div class="form-group">
            <label for="lungime">Lungime</label>
            <input type="text" class="form-control" name="lungime" id="lungime" placeholder="Lungime">
        </div>
        <div class="form-group">
            <label for="latime">Latime</label>
            <input type="text" class="form-control" name="latime" id="price" placeholder="Latime">
        </div>
        <div class="form-group">
            <label for="description">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price">
        </div>



        <div class="form-group">
            <label for="description">Update image</label>
            <input type="file" name="image" placeholder="Image"  required>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
</div>

@endsection
