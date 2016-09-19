<!DOCTYPE html>
<html>
<title>Grounded Earth</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A Colorado based design firm specializing in the unusual.">
<link rel="stylesheet" href="//www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ @getenv("APP_URL") }}stylesheets/w3_styles.css">
<link rel="stylesheet" href="{{ @getenv("APP_URL") }}stylesheets/styles.css">

<body>
<!-- Navbar -->
<div class="w3-top">
<ul class="w3-navbar w3-black w3-card-2 w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="#" class="w3-hover-none w3-hover-text-grey w3-padding-large">Grounded Earth</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-padding-large">Designs</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-padding-large">Products</a></li>
  <li class="w3-hide-small"><a href="#" class=" w3-padding-large">Sign Up</a></li>
  <!--
  <li class="w3-hide-small w3-dropdown-hover">
    <a href="javascript:void(0)" class="w3-hover-none w3-padding-large" title="More">MORE <i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="#">Merchandise</a>
      <a href="#">Extras</a>
      <a href="#">Media</a>
    </div>
  </li>
  <li class="w3-hide-small w3-right"><a href="javascript:void(0)" class="w3-padding-large w3-hover-red"><i class="fa fa-search"></i></a></li>
  -->
</ul>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <ul class="w3-navbar w3-left-align w3-black">
    <li><a class="w3-padding-large" href="#">Grounded Earth</a></li>
    <li><a class="w3-padding-large" href="#">Designs</a></li>
    <li><a class="w3-padding-large" href="#">Products</a></li>
    <li><a class="w3-padding-large" href="#">Sign Up</a></li>
  </ul>
</div>
<!-- Page content -->
<div class="w3-content" style="max-width:1800px;margin-top:46px">
  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container">
    <img src="{{ @getenv('APP_URL') }}images/denverskyline.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Denver Skyline</h3>
      <p><b>What a legit place to do business!</b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container">
    <img src="{{ @getenv('APP_URL') }}images/mountainlake.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Downtown Denver</h3>
      <p><b>By night this city really comes to life.</b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container">
    <img src="{{ @getenv('APP_URL') }}images/redrocks.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Rocky Mountains</h3>
      <p><b>In colorado, the mountains provide inspiration and relief.</b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container">
    <img src="{{ @getenv('APP_URL') }}images/mountainflower.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Rocky Mountains</h3>
      <p><b>In colorado, the mountains provide inspiration and relief.</b></p>
    </div>
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
        <!--<img src="{{ @getenv('APP_URL') }}images/grounded.jpg" class="w3-round w3-margin-bottom" alt="Grounded Earth Logo" style="width:100%">-->
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
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        @foreach($products as $product)
            <div class="w3-third w3-margin-bottom">
              <img src="{{ @getenv('APP_URL') }}images/{{ $product->image }}" alt="{{ $product->name }}" style="width:100%" class="w3-hover-opacity">
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

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
  <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<!-- external scripts -->
<script src="//maps.googleapis.com/maps/api/js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- local scripts -->
<script type="text/javascript" src="{{ @getenv("APP_URL") }}stickerjs-master/sticker.min.js"></script>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}javascripts/w3_googlemaps.js"></script>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}javascripts/w3_javascripts.js"></script>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}javascripts/index.js"></script>

</body>
</html>
