<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*
	* Basic Page Needs
	*/ ?>
  <meta charset="utf-8">
  <title>Grounded Earth.</title>
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
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>/resources/Skeleton-2.0.4/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>/resources/Skeleton-2.0.4/css/skeleton.css">
	<?php /*
	* Page CSS
	*/ ?>
	<link rel="stylesheet" href="<?php echo $base_url ?>/css/styles.css">
	<?php /*
	* Favicon
	*/ ?>
  <link rel="icon" type="image/png" href="<?php echo $base_url ?>/resources/Skeleton-2.0.4/images/favicon.png">
</head>
<body>
  @yield('content')
</body>
</html>
