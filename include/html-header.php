<!doctype html>
<!--[if lt IE 7]>
<html class="ie6"> <![endif]-->
<!--[if IE 7]>
<html class="ie7"> <![endif]-->
<!--[if IE 8]>
<html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>         <!--<![endif]-->

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<?php
	echo '<title>';
	if (isset($title)) {
		echo $title;
	} else {
		echo "a default in case you forget to put in title";
	} //a default in case you forget to put in $title
	echo '</title>';
	?>
	<link rel="shortcut icon" href="/favicon.ico">
	<link href="bootstrap/css/bootstrap.css" media="all" rel="stylesheet" type="text/css" />

	<link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
	<link href="css/style-responsive.css" media="all" rel="stylesheet" type="text/css" />

	<link href="font-awesome/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements --><!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<style>
		.rc-anchor-light {
			background: transparent !important;
			border: none !important;
			color: #000 !important;
		}
	</style>

<?php $url_get = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
 if($url_get == '#'){ ?>
    
<meta name="description" content="#" />
<meta name="keywords" content="#" />
    
<?php }


else if($url_get == '#'){ ?>
    
<meta name="description" content="#" />
<meta name="keywords" content="#" />
    
<?php } ?>

</head>