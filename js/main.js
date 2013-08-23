/*! http://mths.be/placeholder v2.0.7 by @mathias */
;(function(window, document, $) {

	var isInputSupported = 'placeholder' in document.createElement('input');
	var isTextareaSupported = 'placeholder' in document.createElement('textarea');
	var prototype = $.fn;
	var valHooks = $.valHooks;
	var propHooks = $.propHooks;
	var hooks;
	var placeholder;

	if (isInputSupported && isTextareaSupported) {

		placeholder = prototype.placeholder = function() {
			return this;
		};

		placeholder.input = placeholder.textarea = true;

	} else {

		placeholder = prototype.placeholder = function() {
			var $this = this;
			$this
				.filter((isInputSupported ? 'textarea' : ':input') + '[placeholder]')
				.not('.placeholder')
				.bind({
					'focus.placeholder': clearPlaceholder,
					'blur.placeholder': setPlaceholder
				})
				.data('placeholder-enabled', true)
				.trigger('blur.placeholder');
			return $this;
		};

		placeholder.input = isInputSupported;
		placeholder.textarea = isTextareaSupported;

		hooks = {
			'get': function(element) {
				var $element = $(element);

				var $passwordInput = $element.data('placeholder-password');
				if ($passwordInput) {
					return $passwordInput[0].value;
				}

				return $element.data('placeholder-enabled') && $element.hasClass('placeholder') ? '' : element.value;
			},
			'set': function(element, value) {
				var $element = $(element);

				var $passwordInput = $element.data('placeholder-password');
				if ($passwordInput) {
					return $passwordInput[0].value = value;
				}

				if (!$element.data('placeholder-enabled')) {
					return element.value = value;
				}
				if (value == '') {
					element.value = value;
					// Issue #56: Setting the placeholder causes problems if the element continues to have focus.
					if (element != document.activeElement) {
						// We can't use `triggerHandler` here because of dummy text/password inputs :(
						setPlaceholder.call(element);
					}
				} else if ($element.hasClass('placeholder')) {
					clearPlaceholder.call(element, true, value) || (element.value = value);
				} else {
					element.value = value;
				}
				// `set` can not return `undefined`; see http://jsapi.info/jquery/1.7.1/val#L2363
				return $element;
			}
		};

		if (!isInputSupported) {
			valHooks.input = hooks;
			propHooks.value = hooks;
		}
		if (!isTextareaSupported) {
			valHooks.textarea = hooks;
			propHooks.value = hooks;
		}

		$(function() {
			// Look for forms
			$(document).delegate('form', 'submit.placeholder', function() {
				// Clear the placeholder values so they don't get submitted
				var $inputs = $('.placeholder', this).each(clearPlaceholder);
				setTimeout(function() {
					$inputs.each(setPlaceholder);
				}, 10);
			});
		});

		// Clear placeholder values upon page reload
		$(window).bind('beforeunload.placeholder', function() {
			$('.placeholder').each(function() {
				this.value = '';
			});
		});

	}

	function args(elem) {
		// Return an object of element attributes
		var newAttrs = {};
		var rinlinejQuery = /^jQuery\d+$/;
		$.each(elem.attributes, function(i, attr) {
			if (attr.specified && !rinlinejQuery.test(attr.name)) {
				newAttrs[attr.name] = attr.value;
			}
		});
		return newAttrs;
	}

	function clearPlaceholder(event, value) {
		var input = this;
		var $input = $(input);
		if (input.value == $input.attr('placeholder') && $input.hasClass('placeholder')) {
			if ($input.data('placeholder-password')) {
				$input = $input.hide().next().show().attr('id', $input.removeAttr('id').data('placeholder-id'));
				// If `clearPlaceholder` was called from `$.valHooks.input.set`
				if (event === true) {
					return $input[0].value = value;
				}
				$input.focus();
			} else {
				input.value = '';
				$input.removeClass('placeholder');
				input == document.activeElement && input.select();
			}
		}
	}

	function setPlaceholder() {
		var $replacement;
		var input = this;
		var $input = $(input);
		var id = this.id;
		if (input.value == '') {
			if (input.type == 'password') {
				if (!$input.data('placeholder-textinput')) {
					try {
						$replacement = $input.clone().attr({ 'type': 'text' });
					} catch(e) {
						$replacement = $('<input>').attr($.extend(args(this), { 'type': 'text' }));
					}
					$replacement
						.removeAttr('name')
						.data({
							'placeholder-password': $input,
							'placeholder-id': id
						})
						.bind('focus.placeholder', clearPlaceholder);
					$input
						.data({
							'placeholder-textinput': $replacement,
							'placeholder-id': id
						})
						.before($replacement);
				}
				$input = $input.removeAttr('id').hide().prev().attr('id', id).show();
				// Note: `$input[0] != input` now!
			}
			$input.addClass('placeholder');
			$input[0].value = $input.attr('placeholder');
		} else {
			$input.removeClass('placeholder');
		}
	}

}(this, document, jQuery));

jQuery(document).ready(function() {
	jQuery('input, textarea').placeholder();
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
				document.title = "Ask Media | Accueil";
				document.getElementById("navMark").style.left = '527px';
				document.getElementById("navMark").style.border = "1px solid #C3E277";
				document.getElementById("navMark").style.borderColor = "transparent transparent #C3E277 transparent";
				document.getElementById("navMark").style.borderWidth = '5px';
			}
			if (inview == "container2") {
				document.title = "Ask Media | Savoir-faire";
				document.getElementById("navMark").style.left = '592px';
				document.getElementById("navMark").style.border = "1px solid #B5DDE8";
				document.getElementById("navMark").style.borderColor = "transparent transparent #B5DDE8 transparent";
				document.getElementById("navMark").style.borderWidth = '5px';
			}
			if (inview == "container3") {
				document.title = "Ask Media | Réalisations";
				document.getElementById("navMark").style.left = '654px';
				document.getElementById("navMark").style.border = "1px solid #CABBFF",
				document.getElementById("navMark").style.borderColor = "transparent transparent #CABBFF transparent";
				document.getElementById("navMark").style.borderWidth = '5px';
			} else if (inview == "container4") {
				document.title = "Ask Media | Contacts";
				document.getElementById("navMark").style.left = '715px';
				document.getElementById("navMark").style.border = "1px solid #FF9494",
				document.getElementById("navMark").style.borderColor = "transparent transparent #FF9494 transparent";
				document.getElementById("navMark").style.borderWidth = '5px';
			}
		});
	});

	/*********BACK TO TOP**********/

	jQuery('#logo1 , #logo2').click(function(event) {
		document.title = "Ask Media | Accueil";
		event.preventDefault();
	});

	/*********GO TO PAGE 1**********/
	jQuery('#rubrique1').click(function(event) {
		document.title = "Ask Media | Accueil";
		$('body').stop().scrollTo( '0', 400 );
		event.preventDefault();
	});

	/*********GO TO PAGE 2**********/
	jQuery('#rubrique2').click(function(event) {
		document.title = "Ask Media | Réalisations";
		$('body').stop().scrollTo( '1230px', 400 );
		event.preventDefault();
	});

	/*********GO TO PAGE 3**********/
	jQuery('#rubrique3').click(function(event) {
		document.title = "Ask Media | Contacts";
		$('body').stop().scrollTo( '2428px', 400 );
		event.preventDefault();
	});

	/*********GO TO PAGE 4**********/
	jQuery('#rubrique4').click(function(event) {
		document.title = "Ask Media | Staff";
		$('body').stop().scrollTo( '3365px', 400 );
		event.preventDefault();
	});

	/****FLOATING MENU******/
	jQuery(window).scroll(function() {
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