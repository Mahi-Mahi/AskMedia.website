jQuery(function() {
	jQuery("#player2").slides({
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