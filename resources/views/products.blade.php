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
                  <ul>
                  @foreach ($products as $product)
                    <li>{{ $product }}</li>
                  @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
