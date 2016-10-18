@extends('layouts.frontend.app')

@section('content')
<!-- Page content -->
<div class="w3-content" style="max-width:1800px;">
    <!-- Automatic Slideshow Images -->
    <div class="w3-display-container" style="height: 720px">
        <ul class="cb-slideshow">
            @foreach($slider as $slide)
                <li>
                    <span>{{ $slide->image}}</span>
                    <div>
                        <h3>{{ $slide->header }}</h3>
                        <p><b>{{ $slide->caption }}</b></p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-32" style="max-width:800px">
        <div class="w3-row w3-padding-32">
            <div class="w3-half">
                <h2 class="w3-wide">Grounded Earth</h2>
                <p class="w3-opacity"><i>Welcome</i></p>
                <p class="w3-justify">We are a Colorado apparel and design company specializing in quality products at a fair price. We want to provide you with great gear as well as a positive attitude. Keep rocking and never stop sporting a unique lifestyle.</p>
            </div>
            <div class="w3-half">
                <div class="sticker logo-sticker"></div>
            </div>
        </div>
    </div>
    <!-- The Tour Section -->
    <div class="w3-black">
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
            <h2 class="w3-wide w3-center">Top Sellers</h2>
            <p class="w3-opacity w3-center"><i>Quick links to some hot items!</i></p><br>
            <!--
            <ul class="w3-ul w3-border w3-white w3-text-grey">
                <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
                <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
                <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
            </ul>
            -->
            <div class="w3-row-padding w3-padding-32">
                @foreach($products as $product)
                    <div class="w3-third w3-margin-bottom">
                        <img src="{{ url('images/'.$product->image) }}" alt="{{ $product->name }}" style="width:100%" class="w3-hover-opacity">
                        <div class="w3-container w3-white">
                            <p><b>{{ $product->name }}</b></p>
                            <p>{{ $product->description }}</p>
                            <p class="w3-opacity">{{ $product->price }}</p>
                            <button class="w3-btn w3-margin-bottom">Buy Now!</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Ticket Modal -->
    <!--
    <div id="ticketModal" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-8">
            <header class="w3-container w3-teal w3-center w3-padding-32">
                <span onclick="document.getElementById('ticketModal').style.display='none'"
             class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">×</span>
                <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
            </header>
            <div class="w3-container">
                <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
                <input class="w3-input w3-border" type="text" placeholder="How many?">
                <p><label><i class="fa fa-user"></i> Send To</label></p>
                <input class="w3-input w3-border" type="text" placeholder="Enter email">
                <button class="w3-btn-block w3-teal w3-padding-12 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
                <button class="w3-btn w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
                <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
            </div>
        </div>
    </div>
    -->
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
<!-- End Page Content -->
</div>
<!-- Add Google Map -->
<div id="googleMap" style="height:400px;filter:grayscale(90%);-webkit-filter:grayscale(90%);"></div>
@endsection
