<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*
	* Basic Page Needs
	*/ ?>
  <meta charset="utf-8">
  <title>Nukleus Design</title>
  <meta name="description" content="">
  <meta name="author" content="">
	<?php /*
	* Mobile Specific Metas
	*/ ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /*
	* Font
	*/ ?>
  <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
	<?php /*
	* CSS
	*/ ?>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/Skeleton-2.0.4/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/Skeleton-2.0.4/css/skeleton.css">
	<?php /*
	* Favicon
	*/ ?>
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>resources/Skeleton-2.0.4/images/favicon.png">
</head>
<body>
	<?php /*
	* Primary Page Layout
	*/ ?>
  <div class="section hero">
    <div class="container">
      <div class="row">
        <div class="one-half column">
          <h4 class="hero-heading">Start letting your personality speak for itself.</h4>
          <a class="button button-primary" id="customize">Customize Design</a>
        </div>
        <div class="one-half column phones">
          <img class="phone" src="images/iphone.png">
          <img class="phone" src="images/iphone.png">
        </div>
      </div>
    </div>
  </div>
  <div class="section values">
    <div class="container">
      <div class="row">
        <div class="one-third column value">
          <h2 class="value-multiplier">67%</h2>
          <h5 class="value-heading">Purchase Increase</h5>
          <p class="value-description">Percentage of users more likely to purchase on mobile friendly site.</p>
        </div>
        <div class="one-third column value">
          <h2 class="value-multiplier">90%</h2>
          <h5 class="value-heading">Multi-device Users</h5>
          <p class="value-description">Most of the world accesses the internet on multiple devices.</p>
        </div>
        <div class="one-third column value">
          <h2 class="value-multiplier">66%</h2>
          <h5 class="value-heading">Sad Users</h5>
          <p class="value-description">Percentage of users that are frustrated with page load times.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section get-help">
    <div class="container">
      <h3 class="section-heading">Need help getting started?</h3>
      <p class="section-description">Skeleton is an amazingly easy place to start with responsive development. If you want to learn more, just visit the documentation!</p>
      <a class="button button-primary" href="http://getskeleton.com">View Skeleton Docs</a>
    </div>
  </div>
  <div class="section categories">
    <div class="container">
      <h3 class="section-heading">Responsive Images</h3>
      <p class="section-description">Skeleton images sit easily in grid with .u-max-full-width class. I suggest exploring solution to serving different images based on device size.</p>
      <div class="row">
        <div class="one-half column category">
          <img class="u-max-full-width" src="images/placeholder.png">
        </div>
      </div>
    </div>
  </div>
	<?php /*
	* Must load the external sources first
	*/ ?>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
	<?php /*
	* Then load the internal sources second
	*/ ?>
	<?php /*
	* Load the driver for execution
	*/ ?>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/splashDriver.js"></script>
</body>
</html>
