//plugins


//css image preloader
$.preloadCssImages();

//tabs
$(function () {

	var tabContainers = $('div.tabmenu > div');
	tabContainers.hide().filter(':first').show();

	$('div.tabmenu ul.tab a').click(function () {
		tabContainers.hide();
		tabContainers.filter(this.hash).show();
		$('div.tabmenu ul.tab a').removeClass('current');
		$(this).addClass('current');
		return false;
	}).filter(':first').click();
});

//featured
$(function () {
	$('#featured').append('<img class="slide" id="second" src="http://www.midaym.com/wp-content/uploads/featured/sites-banner2.jpg" width="419" height="249" alt="midaym.com: Featured Work" />') // add featured sites
	$('#featured').append('<img  class="slide" id="third" src="http://www.midaym.com/wp-content/uploads/featured/sites-banner3.jpg" width="419" height="249" alt="midaym.com: Featured Work" />') // add featured sites
	$('#featured').before('<a id="prevF" href="#prev" title="Previous: Featured Work">&#x2190;</a>') // add prev link
	$('#featured').after('<a id="nextF" href="#next" title="Next: Featured Work">&#x2192;</a>') // add next link
	
	$('#featured').cycle({ 
	    fx:     'fade', 
	    speed:  'fast', 
	    timeout: 0, 
	    next:   '#nextF', 
	    prev:   '#prevF' 
	});
});

//fancyZoom Setup
$(function() {
	
//Set the default directory to find the images needed
//by the plugin (closebtn.png, blank.gif, loading images ....)
$.fn.fancyzoom.defaultsOptions.imgDir='http://midaym.com/wp-content/themes/thinker/images/zoom/';

// Select all links with tozoom class, set the open animation time to 1000
$('a.zoom').fancyzoom({Speed:1000});

});

//popups
$(function () {
	// options
	var distance = 10;
	var time = 250;
	var hideDelay = 250;
	 
	var hideDelayTimer = null;
	
	// tracker
	var beingShown = false;
	var shown = false;
	
	var spanContainer = $('div.bd li a > span.popup');
	spanContainer.append('<b class="right" /><b class="left" />');
	spanContainer.hide();
	
	var popup = null;
	
	// set the mouseover and mouseout
	$('div.bd a').mouseover(function () {
		//get popup element
		popup = $(this).find('> span.popup');
		
		// stops the hide event if we move from the trigger to the popup element
		if (hideDelayTimer) clearTimeout(hideDelayTimer);
		
		// don't trigger the animation again if we're being shown, or already visible
		if (beingShown) {
			return;
		} else {
			beingShown = true;
			spanContainer.hide();
			popup.css({ 
				top: -25,
				display: 'block' 
			})
			
			// (we're using chaining on the popup) now animate it's opacity and position
			.stop().animate({
				opacity: 1,
				top: '-=' + distance + 'px'
			}, time, 'swing', function() {
				// once the animation is complete, set the tracker variables
				beingShown = false;
				shown = true;
			});
		}
	}).mouseout(function () {
		// reset the timer if we get fired again - avoids double animations
		if (hideDelayTimer) clearTimeout(hideDelayTimer);
		
		// store the timer so that it can be cleared in the mouseover if required
		hideDelayTimer = setTimeout(function () {
			hideDelayTimer = null;
			popup.stop().animate({
				top: '-=' + distance + 'px',
				opacity: 0
			}, time, 'swing', function () {
				// once the animate is complete, set the tracker variables
				shown = false;
				// hide the popup entirely after the effect (opacity alone doesn't do the job)
				popup.css({
					display: 'none'
				});
			});
		}, hideDelay);
	});
});

//news scroller
$('#newsscroller').newsScroll({
		speed: 2000,
		delay: 7000
	});