<div id="page3">
	<img src="img/realisations.png" id="realisations" class="animate hires">
	
	<!--<img src="img/Elipse-Camembert.png" id="ellipse2" class="animate hires">
	<p id="text3a"class="stdEntry">Le souci apport&eacute; design d'informations, tant sur papier qu'en version num&eacute;rique, est le c&oelig;ur de notre fabrique. Nous nous appliquons au quotidien &agrave; fa&ccedil;onner et affiner les formats et r&eacute;alisations graphiques<br/>pour restituer au mieux toute la saveur des informations.</p>
	<h2 id="text3b">NOS CLIENTS</h2>
	<!--<h3 id="text3c">Ask m&eacute;dia &eacute;dite &eacute;galement le site d'informations quotidien <span>QUOI.INFO,</span> sp&eacute;cialis&eacute; dans l'explication p&eacute;dagogique d'origine contr&ocirc;l&eacute;e de l'actualit&eacute;.</h3>
	<img src="img/block-logos.png" id="blockLogos" class="animate hires"/>
	<img src="img/logo-Bayard.png" id="logoBayard" class="animate hires"/>
	<img src="img/logo-laTribune.png" id="logoLaTribune" class="animate hires"/>
	<img src="img/logo-LPM.png" id="logoLeParisienMag" class="animate hires"/>-->

<script>
/****Carrousel****/
(function(a){a.fn.slides=function(b){return b=a.extend({},a.fn.slides.option,b),this.each(function(){function w(g,h,i){if(!p&&o){switch(p=!0,b.animationStart(n+1),g){case"next":l=n,k=n+1,k=e===k?0:k,r=2*f,g=2*-f,n=k;break;case"prev":l=n,k=n-1,k=-1===k?e-1:k,r=0,g=0,n=k;break;case"pagination":k=parseInt(i,10),l=a("."+b.paginationClass+" li."+b.currentClass+" a",c).attr("href").match("[^#/]+$"),k>l?(r=2*f,g=2*-f):(r=0,g=0),n=k}"fade"===h?b.crossfade?d.children(":eq("+k+")",c).css({zIndex:10}).fadeIn(b.fadeSpeed,b.fadeEasing,function(){b.autoHeight?d.animate({height:d.children(":eq("+k+")",c).outerHeight()},b.autoHeightSpeed,function(){d.children(":eq("+l+")",c).css({display:"none",zIndex:0}),d.children(":eq("+k+")",c).css({zIndex:0}),b.animationComplete(k+1),p=!1}):(d.children(":eq("+l+")",c).css({display:"none",zIndex:0}),d.children(":eq("+k+")",c).css({zIndex:0}),b.animationComplete(k+1),p=!1)}):d.children(":eq("+l+")",c).fadeOut(b.fadeSpeed,b.fadeEasing,function(){b.autoHeight?d.animate({height:d.children(":eq("+k+")",c).outerHeight()},b.autoHeightSpeed,function(){d.children(":eq("+k+")",c).fadeIn(b.fadeSpeed,b.fadeEasing)}):d.children(":eq("+k+")",c).fadeIn(b.fadeSpeed,b.fadeEasing,function(){}),b.animationComplete(k+1),p=!1}):(d.children(":eq("+k+")").css({left:r,display:"block"}),b.autoHeight?d.animate({left:g,height:d.children(":eq("+k+")").outerHeight()},b.slideSpeed,b.slideEasing,function(){d.css({left:-f}),d.children(":eq("+k+")").css({left:f,zIndex:5}),d.children(":eq("+l+")").css({left:f,display:"none",zIndex:0}),b.animationComplete(k+1),p=!1}):d.animate({left:g},b.slideSpeed,b.slideEasing,function(){d.css({left:-f}),d.children(":eq("+k+")").css({left:f,zIndex:5}),d.children(":eq("+l+")").css({left:f,display:"none",zIndex:0}),b.animationComplete(k+1),p=!1})),b.pagination&&(a("."+b.paginationClass+" li."+b.currentClass,c).removeClass(b.currentClass),a("."+b.paginationClass+" li:eq("+k+")",c).addClass(b.currentClass))}}function x(){clearInterval(c.data("interval"))}function y(){b.pause?(clearTimeout(c.data("pause")),clearInterval(c.data("interval")),u=setTimeout(function(){clearTimeout(c.data("pause")),v=setInterval(function(){w("next",i)},b.play),c.data("interval",v)},b.pause),c.data("pause",u)):x()}a("."+b.container,a(this)).children().wrapAll('<div class="slides_control"/>');var o,p,q,r,t,u,v,c=a(this),d=a(".slides_control",c),e=d.children().size(),f=d.children().outerWidth(),g=d.children().outerHeight(),h=b.start-1,i=0>b.effect.indexOf(",")?b.effect:b.effect.replace(" ","").split(",")[0],j=0>b.effect.indexOf(",")?i:b.effect.replace(" ","").split(",")[1],k=0,l=0,m=0,n=0;if(2>e)return a("."+b.container,a(this)).fadeIn(b.fadeSpeed,b.fadeEasing,function(){o=!0,b.slidesLoaded()}),a("."+b.next+", ."+b.prev).fadeOut(0),!1;if(!(2>e)){if(0>h&&(h=0),h>e&&(h=e-1),b.start&&(n=h),b.randomize&&d.randomize(),a("."+b.container,c).css({overflow:"hidden",position:"relative"}),d.children().css({position:"absolute",top:0,left:d.children().outerWidth(),zIndex:0,display:"none"}),d.css({position:"relative",width:3*f,height:g,left:-f}),a("."+b.container,c).css({display:"block"}),b.autoHeight&&(d.children().css({height:"auto"}),d.animate({height:d.children(":eq("+h+")").outerHeight()},b.autoHeightSpeed)),b.preload&&d.find("img:eq("+h+")").length){a("."+b.container,c).css({background:"url("+b.preloadImage+") no-repeat 50% 50%"});var z=d.find("img:eq("+h+")").attr("src")+"?"+(new Date).getTime();t="slides_control"!=a("img",c).parent().attr("class")?d.children(":eq(0)")[0].tagName.toLowerCase():d.find("img:eq("+h+")"),d.find("img:eq("+h+")").attr("src",z).load(function(){d.find(t+":eq("+h+")").fadeIn(b.fadeSpeed,b.fadeEasing,function(){a(this).css({zIndex:5}),a("."+b.container,c).css({background:""}),o=!0,b.slidesLoaded()})})}else d.children(":eq("+h+")").fadeIn(b.fadeSpeed,b.fadeEasing,function(){o=!0,b.slidesLoaded()});b.bigTarget&&(d.children().css({cursor:"pointer"}),d.children().on("click",function(){return w("next",i),!1})),b.hoverPause&&b.play&&(d.bind("mouseover",function(){x()}),d.bind("mouseleave",function(){y()})),b.generateNextPrev&&(a("."+b.container,c).after('<a href="#" class="'+b.prev+'">Prev</a>'),a("."+b.prev,c).after('<a href="#" class="'+b.next+'">Next</a>')),a("."+b.next,c).on("click",function(a){a.preventDefault(),b.play&&y(),w("next",i)}),a("."+b.prev,c).on("click",function(a){a.preventDefault(),b.play&&y(),w("prev",i)}),b.generatePagination?(b.prependPagination?c.prepend("<ul class="+b.paginationClass+"></ul>"):c.append("<ul class="+b.paginationClass+"></ul>"),d.children().each(function(){a("."+b.paginationClass,c).append('<li><a href="#'+m+'">'+(m+1)+"</a></li>"),m++})):a("."+b.paginationClass+" li a",c).each(function(){a(this).attr("href","#"+m),m++}),a("."+b.paginationClass+" li:eq("+h+")",c).addClass(b.currentClass),a("."+b.paginationClass+" li a",c).on("click",function(){return b.play&&y(),q=a(this).attr("href").match("[^#/]+$"),n!=q&&w("pagination",j,q),!1}),a("a.link",c).on("click",function(){return b.play&&y(),q=a(this).attr("href").match("[^#/]+$")-1,n!=q&&w("pagination",j,q),!1}),b.play&&(v=setInterval(function(){w("next",i)},b.play),c.data("interval",v))}})},a.fn.slides.option={preload:!1,preloadImage:"/img/loading.gif",container:"slides_container",generateNextPrev:!1,next:"next",prev:"previous",pagination:!0,generatePagination:!0,prependPagination:!1,paginationClass:"pagination",currentClass:"current",fadeSpeed:350,fadeEasing:"",slideSpeed:350,slideEasing:"",start:1,effect:"slide",crossfade:!1,randomize:!1,play:0,pause:0,hoverPause:!1,autoHeight:!1,autoHeightSpeed:350,bigTarget:!1,animationStart:function(){},animationComplete:function(){},slidesLoaded:function(){}},a.fn.randomize=function(b){function c(){return Math.round(Math.random())-.5}return a(this).each(function(){var d=a(this),e=d.children(),f=e.length;if(f>1){e.hide();var g=[];for(i=0;f>i;i++)g[g.length]=i;g=g.sort(c),a.each(g,function(a,c){var f=e.eq(c),g=f.clone(!0);g.show().appendTo(d),void 0!==b&&b(f,g),f.remove()})}})}})(jQuery);</script>
		<script>
            $(function(){
                $("#player2").slides({
	                prev: 'previous',
	                next: 'next',
	                container: 'clients_slides_container',
	                effect: 'slide',
	                preload: false,
					autoplay: true,
			        play: 10000,
			        pause: 10000,
			        hoverPause: true,
			        paginationClass: false,
			        generatePagination: false,
			        slideSpeed: 1200
                });
            });
</script>

<script>
	$(function(){
		$(".logoclilink:hover").animate(style{'background':'white'},'fast');});
</script>

<a onclick="window.open('http://www.globaleditorsnetwork.org/dja/')" style="cursor:pointer;"><img id="awards" src="img/awards.png" title="Global Editors Network - Data-Driven Storytelling Small Media Price &amp; Public price"></a>

<div id="bannTitleClients"><h2>Nos clients</h2></div>
<div id="player2">
<a class="previous" href="#">
	<img id="left-arrow" class="btn hires" src="img/left-arrow.png">
</a>
			    	<div class="clients_slides_container">
				    	<ul class="clients">
				    		<li><a id="client1" class="logoclilink" onclick="window.open('http://www.leparisien.fr');">
				    		<img id="clientImg1" class="logoclient" src="img/clients/lpm.png">
				    	</a><a id="client2" class="logoclilink" onclick="window.open('http://www.parismatch.fr');">
				    		<img id="clientImg2" class="logoclient" src="img/clients/parismatch.png">
				    	</a><a id="client3" class="logoclilink" onclick="window.open('http://www.groupebayard.com/fr');">
				    		<img id="clientImg3" class="logoclient" src="img/clients/Bayard_logo.png">
				    	</a></li>
				    	</ul>
				    <ul class="clients">
				    	<li>
				    	<a id="client4" class="logoclilink" onclick="window.open('http://www.latribune.fr');">
				    		<img id="clientImg4" class="logoclient" src="img/clients/tribune.png">
				    	</a><a id="client5" class="logoclilink" onclick="window.open('http://www.wedemain.fr');">
				    		<img id="clientImg5" class="logoclient" src="img/clients/WeDemain.png">
				    	</a><a id="client6" class="logoclilink" onclick="window.open('http://www.cartier.fr');">
				    		<img id="clientImg6" class="logoclient" src="img/clients/Cartier_logo.png">
				    	</a>
		    	</li>
	    </ul>
</div>

<a class="next" href="#">
	<img id="right-arrow" class="btn hires" src="img/right-arrow.png">
</a>
</div>			    	
<!--Fin carrousel-->			    	

	<img src="img/ill3.png" id="ill3" class="animate hires" alt=""/>

	<div id="Print">
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print1.jpg');" style="background:url(img/portfolio/print1s.jpg);" title="C'est quoi un r&eacute;acteur nucl&eacute;aire EPR?"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print2.jpg');" style="background:url(img/portfolio/print2s.jpg);" title="Combien paye-t-on d'imp&ocirc;ts en France?"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print3.jpg');" style="background:url(img/portfolio/print3s.jpg);" title="Comment le pape est-il &eacute;lu?"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print4.jpg');" style="background:url(img/portfolio/print4s.jpg);" title="C'est quoi la r&eacute;alit&eacute; augment&eacute;e?"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print5.jpg');" style="background:url(img/portfolio/print5s.jpg);" title="C'est quoi les Class Actions?"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print6.jpg');" style="background:url(img/portfolio/print6s.jpg);" title="Contrat de g&eacute;n&eacute;ration: comment &ccedil;a va marcher?"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print7.jpg');" style="background:url(img/portfolio/print7s.jpg);" title="C'est quoi cette mode des sequels?"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print8.jpg');" style="background:url(img/portfolio/print8s.jpg);" title="Vous avez loup&eacute; Gangnam Style?"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print9.jpg');" style="background:url(img/portfolio/print9s.jpg);" title="Les dix commandements d'un nouveau mod&egrave;le"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print10.jpg');" style="background:url(img/portfolio/print10s.jpg);" title="Ils se sont aussi fait la belle"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print11.jpg');" style="background:url(img/portfolio/print11s.jpg);" title="Cloud Computing"></li>
	<li class="PortfolioSquare Print" onclick="changeImage('img/portfolio/print12.jpg');" style="background:url(img/portfolio/print12s.jpg);" title="50 ans d'agriculture"></li>
	</div>
	
	<div id="Web">
	<li class="PortfolioSquare Web" onclick="window.open('http://quoi.askmedia.fr/en');" style="background:url(img/portfolio/web1s.jpg);" title=""></li>
	<li class="PortfolioSquare Web" onclick="window.open('http://www.leparisien.fr/magazine/bonus/141212/01/index.php');" style="background:url(img/portfolio/web2s.jpg);" title="C'est quoi &quot;ouvrir un compte en Suisse?&quot;"></li>
	<li class="PortfolioSquare Web" onclick="window.open('http://www.leparisien.fr/magazine/bonus/280912/01/index.php');" style="background:url(img/portfolio/web3s.jpg);" title="Que dit le trait&eacute; budg&eacute;taire europ&eacute;en?"></li>
	<li class="PortfolioSquare Web" onclick="window.open('http://www.leparisien.fr/magazine/bonus/260713/01/index.php');" style="background:url(img/portfolio/web4s.jpg);" title="O&ugrave; va l'argent du livret A?"></li>
	<li class="PortfolioSquare Web" onclick="window.open('http://www.leparisien.fr/magazine/bonus/020813/01/index.php');" style="background:url(img/portfolio/web5s.jpg);" title="C'est quoi une &eacute;tiquette NFC?"></li>
	<li class="PortfolioSquare Web" onclick="window.open('http://www.leparisien.fr/magazine/bonus/260413/01/index.php');" style="background:url(img/portfolio/web6s.jpg);" title="Comment fonctionne le plan vigipirate?"></li>
	</div>
	
	<div id="Data">
	<li class="PortfolioSquare Web" onclick="changeImage('img/portfolio/data1.jpg');" style="background:url(img/portfolio/data1s.jpg);" title="Que fait l'État avec 1000 euros d'impôts?"></li>
	<li class="PortfolioSquare Web" onclick="changeImage('img/portfolio/data2.jpg');" style="background:url(img/portfolio/data2s.jpg);" title="Le low Cost est-il vraiment moins cher?"></li>
	<li class="PortfolioSquare Web" onclick="changeImage('img/portfolio/data3.jpg');" style="background:url(img/portfolio/data3s.jpg);" title="Roland Garros en chiffres..."></li>
	</div>
</div>