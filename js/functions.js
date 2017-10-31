/*ovdje se nalaze funcije za javascript/jquery*/

$(document).ready(function() {

	resizeDiv();

	$('img.lazy').lazy({
		effect:"fadeIn",
		effectTime: 500,
		threshold: 0
	});

	(function($,sr){

	     // debouncing function from John Hann
	     // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
	     var debounce = function (func, threshold, execAsap) {
	       var timeout;

	       return function debounced () {
	         var obj = this, args = arguments;
	         function delayed () {
	           if (!execAsap)
	             func.apply(obj, args);
	           timeout = null;
	         };

	         if (timeout)
	           clearTimeout(timeout);
	         else if (execAsap)
	           func.apply(obj, args);

	         timeout = setTimeout(delayed, threshold || 1);
	       };
	     }
	     // smartresize
	     jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

	   })(jQuery,'smartresize');

	   	function resizeDiv() {
			visina_ekrana = $(window).height();
	 		$(".home-page").css({"min-height": visina_ekrana + "px"});
		}

		function eqHeight(){
			$(".eqheight").css("min-height", "");
			if($(window).width() >= 800){
				var max = -1;
				$(".eqheight").each(function(){
				var h = $(this).outerHeight();
				max = h > max ? h : max;
			});

			$(".eqheight").css("min-height", max);
			}
		};

	   // usage:

	   	$(window).resize(function() {
	   	  resizeDiv();
	   	});

	   	$(window).smartresize(function(){
	   		resizeDiv();
	   		eqHeight();
	   	});

	   	$(window).load(function(){
	   		eqHeight();
	   	});


	var aktivni_gumb = "";
	$('.tab-holder > a').click(function(){

		var tabId = $(this).attr("id");

		$(".tabs-container").slideUp(500); // sakrij sve hidden desc divove
		$("#"+ tabId + "-container li a").removeClass("active-tab");

		if ($(this).hasClass("aktivni")){
	   		$(".tab-holder > a").removeClass("aktivni");
	   	} else {
	   		$(".tab-holder > a").removeClass("aktivni");
	   		$(this).addClass("aktivni");
	   	}

	   	if (aktivni_gumb != tabId) {

	   		$("#"+ tabId + "-container").slideDown(500); // prikazi onaj na kojeg je kliknuti

	   		aktivni_gumb = tabId;
		} else {
			aktivni_gumb = "";
		}
	});


	$('.gallery').each(function() {
	    $(this).magnificPopup({
	      delegate: 'a',
	      type: 'image',
	      tLoading: 'Loading image #%curr%...',
	      mainClass: 'mfp-img-mobile gallery-img',
	      gallery: {
	      enabled: true,
	      navigateByImgClick: true,
	      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	      }
	    });
	});

	$('#toggle').click(function(){
	    $(this).next().slideToggle();
	});

});
