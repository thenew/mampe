window.addEvent('domready', function () {



	// var wrap = $('home-wrapper');
	// var page_home = $('home');
	// var page_porfolio = $('porfolio');

	// smoothScroll on first degree pages
	// if( 0 < $$('body.home').length || 0 < $$('body.post-type-archive-portfolio').length || 0 < $$('page-id-4').length || 0 < $$('page-id-6').length ){
	if( 0 < $$('body.home').length ){
		$$('.smoothScroll').addEvent('click', function(e){
	        e.preventDefault();
			// e.stop();
	        var href = e.target.getProperty('href');
	        // var anchor = href.split('#')[1];
	        var anchor = e.target.getProperty('data-anchor');
		    var smoothScroll = new Fx.Scroll(window);
		    smoothScroll.toElement($(anchor));
	        history.pushState(null, null, href);
		});
	}
	

});
