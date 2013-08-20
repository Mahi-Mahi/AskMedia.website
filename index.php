<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<meta name="viewport" content="width=1000">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
$(document).ready(function(){$("#content").hide();$("body").append('<div id="wait"><img id="preload" src="img/preload.png" alt="chargement..."/></div>')});$(window).load(function(){$("#wait").hide();$("#content").fadeIn();});
</script>
<script>
//****ViewPort Jquery*******//
(function($){$.belowthefold=function(element,settings){var fold=$(window).height()+$(window).scrollTop();return fold<=$(element).offset().top-settings.threshold;};$.abovethetop=function(element,settings){var top=$(window).scrollTop();return top>=$(element).offset().top+$(element).height()-settings.threshold;};$.rightofscreen=function(element,settings){var fold=$(window).width()+$(window).scrollLeft();return fold<=$(element).offset().left-settings.threshold;};$.leftofscreen=function(element,settings){var left=$(window).scrollLeft();return left>=$(element).offset().left+$(element).width()-settings.threshold;};$.inviewport=function(element,settings){return!$.rightofscreen(element,settings)&&!$.leftofscreen(element,settings)&&!$.belowthefold(element,settings)&&!$.abovethetop(element,settings);};$.extend($.expr[':'],{"below-the-fold":function(a,i,m){return $.belowthefold(a,{threshold:0});},"above-the-top":function(a,i,m){return $.abovethetop(a,{threshold:0});},"left-of-screen":function(a,i,m){return $.leftofscreen(a,{threshold:0});},"right-of-screen":function(a,i,m){return $.rightofscreen(a,{threshold:0});},"in-viewport":function(a,i,m){return $.inviewport(a,{threshold:0});}});})(jQuery);
</script>
<script>
//********ScrollTo PLugin*********//
;(function($){var h=$.scrollTo=function(a,b,c){$(window).scrollTo(a,b,c)};h.defaults={axis:'xy',duration:parseFloat($.fn.jquery)>=1.3?0:1,limit:true};h.window=function(a){return $(window)._scrollable()};$.fn._scrollable=function(){return this.map(function(){var a=this,isWin=!a.nodeName||$.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!isWin)return a;var b=(a.contentWindow||a).document||a.ownerDocument||a;return/webkit/i.test(navigator.userAgent)||b.compatMode=='BackCompat'?b.body:b.documentElement})};$.fn.scrollTo=function(e,f,g){if(typeof f=='object'){g=f;f=0}if(typeof g=='function')g={onAfter:g};if(e=='max')e=9e9;g=$.extend({},h.defaults,g);f=f||g.duration;g.queue=g.queue&&g.axis.length>1;if(g.queue)f/=2;g.offset=both(g.offset);g.over=both(g.over);return this._scrollable().each(function(){if(e==null)return;var d=this,$elem=$(d),targ=e,toff,attr={},win=$elem.is('html,body');switch(typeof targ){case'number':case'string':if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(targ)){targ=both(targ);break}targ=$(targ,this);if(!targ.length)return;case'object':if(targ.is||targ.style)toff=(targ=$(targ)).offset()}$.each(g.axis.split(''),function(i,a){var b=a=='x'?'Left':'Top',pos=b.toLowerCase(),key='scroll'+b,old=d[key],max=h.max(d,a);if(toff){attr[key]=toff[pos]+(win?0:old-$elem.offset()[pos]);if(g.margin){attr[key]-=parseInt(targ.css('margin'+b))||0;attr[key]-=parseInt(targ.css('border'+b+'Width'))||0}attr[key]+=g.offset[pos]||0;if(g.over[pos])attr[key]+=targ[a=='x'?'width':'height']()*g.over[pos]}else{var c=targ[pos];attr[key]=c.slice&&c.slice(-1)=='%'?parseFloat(c)/100*max:c}if(g.limit&&/^\d+$/.test(attr[key]))attr[key]=attr[key]<=0?0:Math.min(attr[key],max);if(!i&&g.queue){if(old!=attr[key])animate(g.onAfterFirst);delete attr[key]}});animate(g.onAfter);function animate(a){$elem.animate(attr,f,g.easing,a&&function(){a.call(this,e,g)})}}).end()};h.max=function(a,b){var c=b=='x'?'Width':'Height',scroll='scroll'+c;if(!$(a).is('html,body'))return a[scroll]-$(a)[c.toLowerCase()]();var d='client'+c,html=a.ownerDocument.documentElement,body=a.ownerDocument.body;return Math.max(html[scroll],body[scroll])-Math.min(html[d],body[d])};function both(a){return typeof a=='object'?a:{top:a,left:a}}})(jQuery);
/*********/
</script>
<script>
$(document).ready(function(){
	var newtitle = "Accueil";
	document.title = 'Ask Media | ' + newtitle;
});

$(window).bind("scroll", function(event) {
var inview = $(".page div:in-viewport:first").attr("id");
$(".page div:in-viewport").each(function(){
	document.getElementById("logo").style.webkitTransition='background 600ms 100ms';
	document.getElementById("navMark").style.webkitTransition='border 150ms 0ms, border-color 150ms 0ms, left 150ms 400ms';
if (inview == "container1"){
	var newtitle = "Accueil";
	document.getElementById("navMark").style.left='527px';
	document.getElementById("navMark").style.border="1px solid #C3E277";
	document.getElementById("navMark").style.borderColor="transparent transparent #C3E277 transparent";
	document.getElementById("navMark").style.borderWidth='5px';}
if (inview == "container2"){
	var newtitle = "Savoir-faire";
	document.getElementById("navMark").style.left='592px';
	document.getElementById("navMark").style.border="1px solid #B5DDE8";
	document.getElementById("navMark").style.borderColor="transparent transparent #B5DDE8 transparent";
	document.getElementById("navMark").style.borderWidth='5px';}
if (inview == "container3"){
	var newtitle = "R&eacute;alisations";
	document.getElementById("navMark").style.left='654px';
	document.getElementById("navMark").style.border="1px solid #CABBFF",
	document.getElementById("navMark").style.borderColor="transparent transparent #CABBFF transparent";
	document.getElementById("navMark").style.borderWidth='5px';}
	else if(inview == "container4"){
	var newtitle = "Contacts";
	document.getElementById("navMark").style.left='715px';
	document.getElementById("navMark").style.border="1px solid #FF9494",
	document.getElementById("navMark").style.borderColor="transparent transparent #FF9494 transparent";
	document.getElementById("navMark").style.borderWidth='5px';}
document.title = "Ask Media | " + newtitle;
});});
</script>
<script>
/*********BACK TO TOP**********/
$(document).ready(function(){
	$(function () {
		$('#logo1 , #logo2').click(function () {
		var newtitle = "Accueil";
		document.title = "Ask Media | " + newtitle;
			$('body').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
	});
});
/*********GO TO PAGE 1**********/
$(document).ready(function(){
	$(function () {
		$('#rubrique1').click(function () {
		var newtitle = "Accueil";
		document.title = "Ask Media | " + newtitle;
			$('body').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
	});
});

/*********GO TO PAGE 2**********/
$(document).ready(function(){
	$(function () {
		$('#rubrique2').click(function () {
		var newtitle = "R\351alisations";
		document.title = "Ask Media | " + newtitle;
			$('body').animate({
				scrollTop: 1230
			}, 400);
			return false;
		});
	});
});


/*********GO TO PAGE 3**********/
$(document).ready(function(){
	$(function () {
		$('#rubrique3').click(function () {
		var newtitle = "Contacts";
		document.title = "Ask Media | " + newtitle;
			$('body').animate({
				scrollTop: 2428
			}, 400);
			return false;
		});
	});
});

/*********GO TO PAGE 4**********/
$(document).ready(function(){
	$(function () {
		$('#rubrique4').click(function () {
		var newtitle = "Staff";
		document.title = "Ask Media | " + newtitle;
			$('body').animate({
				scrollTop: 3435
			}, 400);
			return false;
		});
	});
});
</script>
<script>
$("window").load(function() {
  $("body").removeClass("preload");
});
</script>
<script>
/****FLOATING MENU******/
$(window).scroll(function(e) {
   if($('body').scrollTop() > 0) {
       $("#navcontainer2").animate({'top'});}});
</script>
</head>
<body id="top" class="hires preload">
<!---CARROUSEL--->
<div id="CarrouselMask">
		<div id="BgMask"></div>
		<div id="CarrouselWrapper"><img id="imagewrapper" class="hires" src=""></div>
</div>

<!---BODY--->
<script type="text/javascript">
	$(function(){
	if (window.devicePixelRatio == 2){
		document.write("<?php include 'preload-elements-@2x.php';?>");
		          var images = $("img.hires");

          // loop through the images and make them hi-res
          for(var i = 0; i < images.length; i++) {

            // create new image name
            var imageType = images[i].src.substr(-4);
            var imageName = images[i].src.substr(0, images[i].src.length - 4);
            imageName += "-@2x" + imageType;

            //rename image
            images[i].src = imageName;
          }else{
		document.write("<?php include 'preload-elements.php';?>")
	}}});
</script>

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
</body>
</html>