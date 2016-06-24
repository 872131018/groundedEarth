@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <form action="{{ url('/products') }}" method="POST">
                    <label for="name">Name</label>
                    <input type="text" name="name"><br>
                    <label for="name">Type</label>
                    <input type="text" name="type"><br>
                    <label for="name">Link</label>
                    <input type="text" name="link"><br>
                    <label for="name">Image</label>
                    <input type="text" name="image"><br>
                    <label for="name">Price</label>
                    <input type="text" name="price"><br>
                    <input type="submit" value="Add Product">
                </form>

                <div class="panel-body">
                  Products:
                  <table class="table table-striped">
                    <thead>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Link</th>
                      <th>Image</th>
                      <th>Price</th>
                    </thead>
                    <tbody>
                      @foreach ($products as $product)
                        <tr>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->type }}</td>
                          <td>{{ $product->link }}</td>
                          <td>{{ $product->image }}</td>
                          <td>{{ $product->price }}</td>
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
