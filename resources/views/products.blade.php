@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <form action="{{ url('/products') }}" method="POST" role="form" class="form-horizontal">
          <div class="form-group">
            <label for="name" class="control-label col-sm-2">Name</label>
            <div class="col-sm-8">
             <input type="text" name="name" class="form-control">
            </div>
            <div class="col-sm-2"></div>
          </div>
          <div class="form-group">
            <label for="name" class="control-label col-sm-2">Type</label>
            <div class="col-sm-8">
              <input type="text" name="type" class="form-control">
            </div>
            <div class="col-sm-2"></div>
          </div>
          <div class="form-group">
            <label for="name" class="control-label col-sm-2">Link</label>
            <div class="col-sm-8">
              <input type="text" name="link" class="form-control">
            </div>
            <div class="col-sm-2"></div>
          </div>
          <div class="form-group">
            <label for="name" class="control-label col-sm-2">Image</label>
            <div class="col-sm-8">
              <input type="text" name="image" class="form-control">
            </div>
            <div class="col-sm-2"></div>
          </div>
          <div class="form-group">
            <label for="name" class="control-label col-sm-2">Thumbnail</label>
            <div class="col-sm-8">
              <input type="text" name="thumbnail" class="form-control">
            </div>
            <div class="col-sm-2"></div>
          </div>
          <div class="form-group">
            <label for="name" class="control-label col-sm-2">Price</label>
            <div class="col-sm-8">
              <input type="text" name="price" class="form-control">
            </div>
            <div class="col-sm-2"></div>
          </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <button type="button" class="btn btn-success" data-delegate="product_add">Add Product</button>
            </div>
        </form>
        <div class="panel-body">
          Products:
          <table class="table table-striped">
            <thead>
              <th>Name</th>
              <th>Type</th>
              <th>Link</th>
              <th>Image</th>
              <th>Thumbnail</th>
              <th>Price</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>
                  <td data-field="name">{{ $product->name }}</td>
                  <td data-field="type">{{ $product->type }}</td>
                  <td data-field="link">{{ $product->link }}</td>
                  <td data-field="image">{{ $product->image }}</td>
                  <td data-field="image">{{ $product->thumbnail }}</td>
                  <td data-field="price">{{ $product->price }}</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-delegate="product_edit" data-id="{{$product->id}}">Edit</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger" data-delegate="product_delete" data-id="{{$product->id}}">Delete</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
