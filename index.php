<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
	<meta name="viewport" content="width=1000">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<script>
	jQuery(document).ready(function(){jQuery("#content").hide();jQuery("body").append('<div id="wait"><img id="preload" src="img/preload.png" alt="chargement..."/></div>')});jQuery(window).load(function(){jQuery("#wait").hide();jQuery("#content").fadeIn();});
	</script>
</head>
<body id="top" class="hires preload">
	<!-- CARROUSEL -->
	<div id="CarrouselMask">
		<div id="BgMask"></div>
		<div id="CarrouselWrapper"><img id="imagewrapper" class="hires" src=""></div>
	</div>

	<?php $rubrique=array("Accueil","R&eacute;alisations","Contacts","Staff")?>
	<div id="content"><div id="navcontainer2" class="alt-nav">
		<div id="blackTopLine"></div>
		<img id="logo2" class="logo hires" src="img/logo1.png">
		<div id="navMark"></div>
	    <ul class="navlist">
	         <li id="rubrique1"><a href="#page1"><?php print($rubrique[0])?></a></li>
	         <li id="rubrique2"><a href="#page2"><?php print($rubrique[1])?></a></li>
	         <li id="rubrique3"><a href="#page3"><?php print($rubrique[2])?></a></li>
	         <li id="rubrique4" style="border-right:none;"><a href="#page4"><?php print($rubrique[3])?></a></li>
	     </ul>
		<a id="blogLink" href="http://www.askmedia.fr/blog/"><img id="blogRibbon" class="hires" src="img/ribbonMenu.png"><span>Blog</span></a>
	</div>
	<div class="page page1">
		<?php include 'pages/page1.php';?>
		<?php include 'pages/page2.php';?>
		<?php include 'pages/page3.php';?>
		<?php include 'pages/page4.php';?>
		<?php include 'pages/page5.php';?>
	</div>

	</div>
	</div>

	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.viewport.js"></script>
	<script type="text/javascript" src="js/jquery.scrollto.js"></script>
	<script type="text/javascript" src="js/slides.jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/page1.js"></script>
	<script type="text/javascript" src="js/page3.js"></script>

</body>
</html>