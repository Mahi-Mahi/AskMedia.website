jQuery(document).ready(function() {
	var newtitle = "Accueil";
	document.title = 'Ask Media | ' + newtitle;
});

jQuery(function() {
	jQuery(window).bind("scroll", function(event) {
		var inview = jQuery(".page div:in-viewport:first").attr("id");
		jQuery(".page div:in-viewport").each(function() {
			document.getElementById("logo2").style.webkitTransition = 'background 600ms 100ms';
			document.getElementById("navMark").style.webkitTransition = 'border 150ms 0ms, border-color 150ms 0ms, left 150ms 400ms';
			if (inview == "container1") {
				var newtitle = "Accueil";
				document.getElementById("navMark").style.left = '527px';
				document.getElementById("navMark").style.border = "1px solid #C3E277";
				document.getElementById("navMark").style.borderColor = "transparent transparent #C3E277 transparent";
				document.getElementById("navMark").style.borderWidth = '5px';
			}
			if (inview == "container2") {
				var newtitle = "Savoir-faire";
				document.getElementById("navMark").style.left = '592px';
				document.getElementById("navMark").style.border = "1px solid #B5DDE8";
				document.getElementById("navMark").style.borderColor = "transparent transparent #B5DDE8 transparent";
				document.getElementById("navMark").style.borderWidth = '5px';
			}
			if (inview == "container3") {
				var newtitle = "R&eacute;alisations";
				document.getElementById("navMark").style.left = '654px';
				document.getElementById("navMark").style.border = "1px solid #CABBFF",
				document.getElementById("navMark").style.borderColor = "transparent transparent #CABBFF transparent";
				document.getElementById("navMark").style.borderWidth = '5px';
			} else if (inview == "container4") {
				var newtitle = "Contacts";
				document.getElementById("navMark").style.left = '715px';
				document.getElementById("navMark").style.border = "1px solid #FF9494",
				document.getElementById("navMark").style.borderColor = "transparent transparent #FF9494 transparent";
				document.getElementById("navMark").style.borderWidth = '5px';
			}
			document.title = "Ask Media | " + newtitle;
		});
	});

	/*********BACK TO TOP**********/

	jQuery('#logo1 , #logo2').click(function() {
		var newtitle = "Accueil";
		document.title = "Ask Media | " + newtitle;
		jQuery('body').animate({
			scrollTop: 0
		}, 400);
		return false;
	});

	/*********GO TO PAGE 1**********/
	jQuery('#rubrique1').click(function() {
		var newtitle = "Accueil";
		document.title = "Ask Media | " + newtitle;
		jQuery('body').animate({
			scrollTop: 0
		}, 400);
		return false;
	});

	/*********GO TO PAGE 2**********/
	jQuery('#rubrique2').click(function() {
		var newtitle = "R\351alisations";
		document.title = "Ask Media | " + newtitle;
		jQuery('body').animate({
			scrollTop: 1230
		}, 400);
		return false;
	});

	/*********GO TO PAGE 3**********/
	jQuery('#rubrique3').click(function() {
		var newtitle = "Contacts";
		document.title = "Ask Media | " + newtitle;
		jQuery('body').animate({
			scrollTop: 2428
		}, 400);
		return false;
	});

	/*********GO TO PAGE 4**********/
	jQuery('#rubrique4').click(function() {
		var newtitle = "Staff";
		document.title = "Ask Media | " + newtitle;
		jQuery('body').animate({
			scrollTop: 3435
		}, 400);
		return false;
	});

	/****FLOATING MENU******/
	jQuery(window).scroll(function(e) {
		if (jQuery('body').scrollTop() > 0) {
			jQuery("#navcontainer2").animate({
				'top': 0
			});
		}
	});
});

jQuery("window").load(function() {
	jQuery("body").removeClass("preload");
});