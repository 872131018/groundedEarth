<!DOCTYPE html>
<html>
<title>Grounded Earth</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A Colorado based design firm specializing in the unusual.">

<!-- External stylesheets -->
<!--<link rel="stylesheet" href="//www.w3schools.com/lib/w3.css">-->
<link rel="stylesheet" href="{{ url('stylesheets/vendor/w3.css') }}">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!-- Internal stylesheets -->
<link rel="stylesheet" href="{{ url('stylesheets/background_slider.css') }}">
<link rel="stylesheet" href="{{ url('stylesheets/styles.css') }}">

<body>
    <!-- Navbar -->
    <div class="w3-top">
        <ul class="w3-navbar w3-black w3-card-2 w3-left-align">
            <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                <a class="w3-padding-large" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            </li>
            <li><a href="#" class="w3-hover-none w3-hover-text-grey w3-padding-large">Grounded Earth</a></li>
            <li class="w3-hide-small"><a href="{{ url('products') }}" class="w3-padding-large">Products</a></li>
            <li class="w3-hide-small"><a href="#" class="w3-padding-large">Designs</a></li>
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
    <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top">
        <ul class="w3-navbar w3-left-align w3-black">
            <li><a class="w3-padding-large" href="#">Grounded Earth</a></li>
            <li><a class="w3-padding-large" href="{{ url('products') }}">Products</a></li>
            <li><a class="w3-padding-large" href="#">Designs</a></li>
            <li><a class="w3-padding-large" href="#">Sign Up</a></li>
        </ul>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
        <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
        <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
        <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
        <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
        <p class="w3-medium">Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>

    <!-- External scripts -->
    <script src="//maps.googleapis.com/maps/api/js"></script>
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
    <script type="text/javascript" src="{{ url('javascripts/vendor/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('stickerjs-master/sticker.min.js') }}"></script>
    <!-- Internal scripts -->
    <script type="text/javascript" src="{{ url('javascripts/w3_googlemaps.js') }}"></script>
    <script type="text/javascript" src="{{ url('javascripts/w3_javascripts.js') }}"></script>
    <script type="text/javascript" src="{{ url('javascripts/index.js') }}"></script>
</body>
</html>
