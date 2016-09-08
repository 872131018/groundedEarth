<!DOCTYPE html>
<html>
<title>Grounded Earth</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A Colorado based design firm specializing in the unusual.">
<link rel="stylesheet" href="//www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ @getenv("APP_URL") }}css/w3_styles.css">

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
    <img src="{{ @getenv('APP_URL') }}images/denvernight.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Downtown Denver</h3>
      <p><b>By night this city really comes to life.</b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container">
    <img src="{{ @getenv('APP_URL') }}images/rockymountains.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Rocky Mountains</h3>
      <p><b>In colorado, the mountains provide inspiration and relief.</b></p>
    </div>
  </div>
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
    <h2 class="w3-wide">Grounded Earth</h2>
    <p class="w3-opacity"><i>Welcome</i></p>
    <p class="w3-justify">
        We are a Colorado apparel and design company specializing in quality products at a fair price. We want to provide you with great gear as well as a positive attitude. Keep rocking and never stop sporting a unique lifestyle.
    </p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Name</p>
        <img src="img_bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Name</p>
        <img src="img_bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Name</p>
        <img src="img_bandmember.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>
  <!-- The Tour Section -->
  <div class="w3-black">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">TOUR DATES</h2>
      <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="img_newyork.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="img_paris.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="img_sanfran.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
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

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Comment">
        <button class="w3-btn w3-section w3-right">SEND</button>
      </div>
    </div>
  </div>
<!-- End Page Content -->
</div>




<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;filter:grayscale(90%);-webkit-filter:grayscale(90%);"></div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
    var mapProp = {
    center: myCenter,
    zoom: 12,
    scrollwheel: false,
    draggable: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
    position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
  <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000);
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>


<!-- old code below
<body>
<div class="splash-container">
  <div class="splash">
    <div>
      <h1 class="splash-head">Grounded Earth</h1>
    </div>
    <p class="splash-subhead">We are a Colorado apparel and design company specializing in quality products at a fair price. We want to provide you with great gear as well as a positive attitude.</p>
    <p>
        <a href="#" class="pure-button pure-button-primary">Welcome.</a>
    </p>
  </div>
</div>
<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Excepteur sint occaecat cupidatat.</h2>
        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Get Started Quickly
                </h3>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Responsive Layouts
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Modular
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Plays Nice
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div id="Glide" class="glide">
            <div class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<">prev</button>
                <button class="glide__arrow next" data-glide-dir=">">next</button>
            </div>
            <div class="glide__wrapper">
                <ul class="glide__track">
                    @foreach($products as $product)
                        <li class='glide__slide'>
                            <img src='{{ @getenv("APP_URL") }}images/{{ $product->image }}'/>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="glide__bullets"></div>
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">
            <h2 class="content-head content-head-ribbon">Check out these T's!</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor.
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Dolore magna aliqua. Uis aute irure.</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>
                        <label for="name">Your Name</label>
                        <input id="name" type="text" placeholder="Your Name">
                        <label for="email">Your Email</label>
                        <input id="email" type="email" placeholder="Your Email">
                        <label for="password">Your Password</label>
                        <input id="password" type="password" placeholder="Your Password">
                        <button type="submit" class="pure-button">Sign Up</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Contact Us</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>

                <h4>More Information</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
        View the source of this layout to learn more. Made with love by the YUI Team.
    </div>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}stickerjs-master/sticker.min.js"></script>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}glidejs-master/dist/glide.min.js"></script>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}js/validateSignup.js"></script>
<?php /*
* Load the driver for execution
*/ ?>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}js/index_driver.js"></script>
</body>
</html>
