@extends('layouts.frontend.app')

@section('content')
<!-- !PAGE CONTENT! -->
<div class="w3-section w3-bottombar w3-padding-64">
    <span class="w3-margin-right">Filter:</span>
    <button class="w3-btn w3-hover-black">ALL</button>
    <button class="w3-btn w3-white w3-hover-black"><i class="w3-margin-right"></i>T-Shirt</button>
    <button class="w3-btn w3-white w3-hover-black"><i class="w3-margin-right"></i>Hoodie</button>
</div>

<div class="w3-main w3-content w3-margin-top" style="max-width:1200px;">
    <div class="grid w3-row-padding w3-center">
        @foreach($products as $product)
            <div class="grid-item">
                <img src="{{ url('images/'.$product->image) }}" alt="{{ $product->name }}" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>{{ $product->name }}</b></p>
                    <p>{{ $product->description }}</p>
                    <p class="w3-opacity">{{ $product->price }}</p>
                    <button class="w3-btn w3-margin-bottom">Buy Now!</button>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
        <ul class="w3-pagination">
            <li><a class="w3-black" href="#">1</a></li>
            <li><a class="w3-hover-black" href="#">2</a></li>
            <li><a class="w3-hover-black" href="#">3</a></li>
            <li><a class="w3-hover-black" href="#">4</a></li>
            <li><a class="w3-hover-black" href="#">»</a></li>
        </ul>
    </div>
    <hr>

    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
        <h2 class="w3-wide w3-center">Contact</h2>
        <p class="w3-opacity w3-center"><i>Want to reach out? Drop a note!</i></p>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-map-marker" style="width:30px"></i> Denver, US<br>
                <i class="fa fa-phone" style="width:30px"></i> Phone: 970 303 1234<br>
                <i class="fa fa-envelope" style="width:30px"> </i> Email: superemail@mail.com<br>
            </div>
            <div class="w3-col m6">
                <form>
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" name="name" placeholder="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" name="city" placeholder="City">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" name="state" placeholder="State">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" name="comment" placeholder="Comment">
                    {{ csrf_field() }}
                    <button class="w3-btn w3-section w3-right" type="button" data-delegate="signup">SEND</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End page content -->
@endsection
