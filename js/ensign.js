jQuery(document).ready(function($){

     'use strict'; 


jQuery(".post-image-gallery").slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
dots: false,
        arrows: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
dots: false,
        arrows: true
      }
    }
  ],
    focusOnSelect: false
      }); 	
	
/**** Back to top ****/


	

	jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() < 200) {
			jQuery('#smoothup') .fadeOut('slow');
        } else {
			jQuery('#smoothup') .fadeIn('slow');
        }
    });
	jQuery('#smoothup').on('click', function(){
		jQuery('html, body').animate({scrollTop:0}, '700');
		return false;
		});

	
/*Twitter*/

jQuery(".twitter-carousel-slider").slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        cssEase: 'linear',
responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
dots: false,
        arrows: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
dots: false,
        arrows: true
      }
    }
  ],
    focusOnSelect: false
      }); 
      


/*pricing table equal height*/

jQuery(".inv-pricing-double-layer-wrapper").each(function(){
    var divHeight = jQuery(this).find('.inv-pricing-double-layer-upper').height();
    jQuery(this).find('.inv-pricing-double-layer-lower').css('min-height', divHeight+70+20+'px');
});



 /*Single Portfolio gallery slider*/

jQuery(".inv-portfolio-gallery-slider").slick({
        dots: true,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        cssEase: 'linear',
responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
dots: false,
        arrows: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
dots: false,
        arrows: true
      }
    }
  ],
    focusOnSelect: false
      }); 

/** counter section **/
            jQuery('.insignia-up-counter').counterUp({
                delay: 10,
                time: 3000
            });

/** counter section **/
          

 jQuery('.ins-counter').counterUp({
                delay: 10,
                time: 3000
            });

		
jQuery( '.inv-popup-gallery' ).swipebox();
       
jQuery( '.insignia-video-popup' ).swipebox();

jQuery( '.inv-video-lightbox-element' ).swipebox();
	
	var isLateralNavAnimating = false;
	

	$('.cd-nav-trigger').on('click', function(event){
		event.preventDefault();

		if( !isLateralNavAnimating ) {
			if(jQuery(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
			
			jQuery('body').toggleClass('navigation-is-open');
			jQuery('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				//animation is over
				isLateralNavAnimating = false;
			});
		}
	});
	
	
});








/** typed jQuery **/
document.addEventListener('DOMContentLoaded', function(){
	Typed.new('.invictus_typed', {
	strings: ["Creativity.", "Quality.", "Innovation."],
	typeSpeed: 50,
	loop: null,
	backSpeed: 50,
	cursorChar: "_",
	backDelay: 500
	});
        Typed.new('.inv_typed', {
	strings: ["We're doing our best to launch asap.", "It's currently under construction."],
	typeSpeed: 20,
	loop: null,
	backSpeed: 20,
	backDelay: 200
	});
  });




//preloader
jQuery(window).load(function() {
		// Animate loader off screen
		jQuery(".se-pre-con").fadeOut("slow");
		
		});


/*Heade search form*/
jQuery(function () {

jQuery(document).on( 'click', 'a[href="#search"]', function() {


    jQuery("#search").addClass("open-search-form");
        jQuery('#search > form > input[type="search"]').focus();
    });
    
    jQuery('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            jQuery(this).removeClass('open-search-form');
        }
    });
});


	jQuery(function() {
		jQuery( '#dl-menu' ).dlmenu();
		});


/*Navigation menu*/


	jQuery('.sub-menu').mouseover(function() {
				var $item = jQuery(this);
				var $mainitem = jQuery('.sub-sub-menu');
				var self = this;
				$mainitem.removeClass('invert');

					if(jQuery( window ).width() - ($item.offset().left + $item.outerWidth()) < $item.outerWidth()) {
						$item.addClass('invert');
					}
				
				});	

/*Post format gallery*/

function slickCarousel() {

      jQuery(".post-image-gallery").not('.slick-initialized').slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
dots: false,
        arrows: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
dots: false,
        arrows: true
      }
    }
  ],
    focusOnSelect: false
      });  
}



/*demo slick carousel*/

/*travel demo*/


jQuery('.travel-offer').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    }
  ]
});


/* Restaurant demo*/
jQuery('.restaurant-about-carousel').slick({
 	slidesToShow: 2,
 	slidesToScroll: 2,
 	arrows: false,
 	fade: false,
        autoplay: true,
        autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
 
 });

/* Seo demo*/
jQuery('.seo-services-carousel').slick({
  dots: true,
  arrows: false,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


/*Masonry layout*/
if(jQuery('#ms-container').length>0){	
	jQuery(window).load(function() {

      var container = document.querySelector('#ms-container');
      var msnry = new Masonry( container, {
        itemSelector: '.ms-item',
        columnWidth: '.ms-item',
 percentPosition: true,
        transitionDuration: '0.1s',
        //gutter: 10,                
      });  
     
        });
 function reload(){    
      var container = document.querySelector('#ms-container');
var msnry = new Masonry( container, {
       itemSelector: '.ms-item',
        columnWidth: '.ms-item', 
 percentPosition: true,
        transitionDuration: '2s'           
      });        
msnry.layout();
    
}
}

jQuery(document).ready(function(){



	jQuery(document).on( 'click', '#navtoggler', function() {
		jQuery(this).toggleClass('open');
	});

	jQuery(document).on( 'click', 'nav#ddfullscreenmenu ul li a', function() {
		jQuery('#nav-icon2').removeClass('open');
	});
});

jQuery(document).ready(function(){

	jQuery(document).on( 'click', '#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4', function() {
		jQuery(this).toggleClass('open');
	});
});
	  


	navtoggler = document.getElementById('navtoggler')
	if(navtoggler){
		ddfullscreenmenu.init();
	}

	nav_icon2 = document.getElementById('nav-icon2')
	if(nav_icon2){
		ddfullscreenmenu.init();
	}

jQuery( function($) {

jQuery(document).on('click', 'li.vc_tta-tab a', function( e ){
jQuery('html, body').stop();
});
jQuery(document).on('click', '.vc_tta-panel-title', function( e ){
jQuery('html, body').stop();
});
});
      




const tilt = jQuery('.js-tilt').tilt();

    jQuery('.js-destroy').on('click', function () {
        const element = jQuery(this).closest('.js-parent').find('.js-tilt');
        element.tilt.destroy.call(element);
    });

    jQuery('.js-getvalue').on('click', function () {
        const element = jQuery(this).closest('.js-parent').find('.js-tilt');
        const test = element.tilt.getValues.call(element);
        console.log(test[0]);
    });

    jQuery('.js-reset').on('click', function () {
        const element = jQuery(this).closest('.js-parent').find('.js-tilt');
        element.tilt.reset.call(element);
    });


jQuery(document).ready(function($){

var $blog_masonry = jQuery('.inv-blog-element-masonry-wrapper').imagesLoaded( function() {

  // init Isotope after all images have loaded
  $blog_masonry.isotope({

		itemSelector: '.inv-post-masonry-item-holder',
		percentPosition: true,
		masonry: {
		columnWidth: '.grid-sizer'
		}
  });
});

var $blog_grid = jQuery('.inv-blog-element-grid-wrapper').imagesLoaded( function() {

  // init Isotope after all images have loaded
  $blog_grid.isotope({
		itemSelector: '.inv-post-blog-item-holder',
		layoutMode: 'fitRows'
  });
});


var $gridd = jQuery('.portfolio-masonry-inner-holder');
$gridd.isotope({
  itemSelector: '.inv-portfolio-item-holder',
  percentPosition: true,
  masonry: {
 columnWidth: '.grid-sizer'
  }
});
 

if (jQuery('.inv-portfolio-filter-enabled').length) {
var iso = new Isotope( '.inv-portfolio-filter-enabled', {
  itemSelector: '.inv-portfolio-item-holder',
  hiddenStyle: {
    opacity: 0
  },
  visibleStyle: {
    opacity: 1
  }
});
}
// layout Isotope after each image loads
$gridd.imagesLoaded().progress( function() {
  $gridd.isotope('layout');
}); 



// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function( itemElem ) {
    var number = itemElem.querySelector('.number').textContent;
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function( itemElem ) {
    var name = itemElem.querySelector('.name').textContent;
    return name.match( /ium$/ );
  }
};



/**/
jQuery(function() {

   jQuery(document).on( 'click', '.inv-portfolio-filter-button-inner', function() {
      jQuery(".inv-portfolio-filter-button-inner").removeClass("active-filter-button");
      jQuery(this).addClass("active-filter-button");
      jQuery(".inv-portfolio-item-holder").removeAttr("data-aos");
   });
});



jQuery(function() {
if (jQuery('.inv-portfolio-filter-enabled').length) {
   jQuery( document ).ready(function() {
      jQuery(".inv-portfolio-item-holder").removeAttr("data-aos");
   });
}
});




// bind filter button click
var filtersElem = document.querySelector('.inv-portfolio-filter-button-holder');
if(filtersElem){
filtersElem.addEventListener( 'click', function( event ) {
  // only work with buttons
  if ( !matchesSelector( event.target, 'button' ) ) {
    return;
  }
  var filterValue = event.target.getAttribute('data-filter');
  // use matching filter function
  filterValue = filterFns[ filterValue ] || filterValue;
  iso.arrange({ filter: filterValue });
});
}

// change is-checked class on buttons
var buttonGroups = document.querySelectorAll('.button-group');
for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
  var buttonGroup = buttonGroups[i];
  radioButtonGroup( buttonGroup );
}

function radioButtonGroup( buttonGroup ) {
  buttonGroup.addEventListener( 'click', function( event ) {
    // only work with buttons
    if ( !matchesSelector( event.target, 'button' ) ) {
      return;
    }
    buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
    event.target.classList.add('is-checked');
  });
}

		(function($){
			jQuery(window).on("load",function(){
				
				/* Page Scroll to id fn call */
				jQuery("#primary_menu a").mPageScroll2id({
					highlightSelector:"#primary_menu a"
				});
			
				
			});
		})(jQuery);

jQuery('.nav-tabs > li').mouseover( function(){
    jQuery(this).find('a').tab('show');
  });
  jQuery('.nav-tabs > li').mouseout( function(){
    jQuery(this).find('a').tab('hide');
  });
jQuery(document).ready(function($){
    var url = window.location.href;
    jQuery('#primary_menu li a[href="'+url+'"]').parents('.menu-item-depth-0').addClass('active');

});


});

jQuery('.Security-services-carousel').slick({
 	slidesToShow: 2,
 	slidesToScroll: 1,
 	arrows: false,
        dots: true,
 responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});





