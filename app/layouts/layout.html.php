<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Pinp: A small framework for PHP 5.3">
  <meta name="author" content="Damien Hodgkin">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>Pinp: a small php framework</title>

  <?php Pinp_View::linkTo('link', array('href' => 'reset', 'type' => 'css')); ?>
  <?php Pinp_View::linkTo('link', array('href' => 'style', 'type' => 'css')); ?>

  <!-- link type="text/plain" rel="author" href="humans.txt" -->
  <?php Pinp_View::linkTo('link', array('href' => 'humans.txt', 'type' => 'plain', 'rel' => 'author')); ?>

  <?php Pinp_View::script('libs/modernizr-2.0.6.min.js'); ?>
</head>
<body>

<div id="container"><?php Pinp_View::yield(); ?></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>

<!-- scripts concatenated and minified via ant build script-->
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- end scripts-->

<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
  <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>