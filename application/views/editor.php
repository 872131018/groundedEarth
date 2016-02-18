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
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/Skeleton-2.0.4/css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>resources/Skeleton-2.0.4/css/skeleton.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/slick-1.5-2.9/slick/slick.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/slick-1.5-2.9/slick/slick-theme.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">
	<?php /*
	* Favicon
	*/ ?>
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>resources/Skeleton-2.0.4/images/favicon.png">
</head>
<body>
	<?php /*
	* Primary Page Layout
	*/ ?>
	<div class="section values">
    <div class="container">
      <div class="row">
        <div class="one-half column value">
          <h2 class="value-multiplier">Select a design on the right</h2>
          <h5 class="value-heading">Dont Worry!</h5>
          <p class="value-description">You'll be able to customize it soon ;)</p>
        </div>
				<div class="one-half column phones">
					<div class="slider">
						<div>
							<?php foreach($images as $key => $value) {
									$url = base_url()."images/thumbnails/".$value;
									echo "<img src=\"".$url."\"/>";
								} ?>
						</div>
					</div>
        </div>
      </div>
    </div>
  </div>
  <div class="section hero">
    <div class="container">
      <div class="row">
        <div class="one-half column">
          <h4 class="hero-heading">Swap some colors.</h4>
					<div class="circle" id="circle1"></div>
					<div class="circle" id="circle2"></div>
					<div class="circle" id="circle3"></div>
        </div>
        <div class="one-half column phones">
					<div id="svgWrapper">
						<?php //echo file_get_contents("images/skull_redraw_020416-3.svg"); ?>
					</div>
        </div>
      </div>
    </div>
  </div>
	<?php /*
	* Must load the external sources first
	*/ ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<?php /*
	* Then load the internal sources second
	*/ ?>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/slick-1.5-2.9/slick/slick.js"></script>
	<?php /*
	* Load the driver for execution
	*/ ?>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/editorDriver.js"></script>
</body>
</html>
