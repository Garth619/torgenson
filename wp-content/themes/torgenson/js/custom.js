// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'
// @codekit-prepend 'underscore.js'

jQuery(document).ready(function($){
	
	
	
		
		
	
	 /* Modernizr - check if browser supports webp for section_one. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});
		
		
		
		/* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      $('img').each(function () {
        
        if ($(this).attr('data-src')) {
          
          var img = $(this).data('src');
          
          $(this).attr('src', img);
        
        }
      
      });

      // background images
      
      $('div, section').each(function () {
       
        if ($(this).attr('data-src')) {
          
          var backgroundImg = $(this).data('src');
          
          $(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    createWaypoint('section_one', null, null, -5, loadImages, false);
    createWaypoint('internal_main', null, null, -5, loadImages, false);



		



     /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    //function wistiaLoad() {
     // jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        //console.log('wistia load:', textStatus); // Success
     // });
   // }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)
    
    
     // loads wistia on click to improve initial page speed
    $('.wistia_embed').click(function () {
        //make sure to only load if Wistia is not already loaded
        let self = this
        if (typeof Wistia === 'undefined') {
            jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js", function (data, textStatus, jqxhr) {
                // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
                // a hook we can listen for. So we need to set an interval to check when it's ready 
                var interval = setInterval(function () {
                    if (jQuery(self).attr('id') && window._wq) {
                        var videoId = jQuery(self).attr('id').split('-')[1];
                        window._wq = window._wq || [];
                        _wq.push({
                            id: videoId,
                            onReady: function (video) {
                                jQuery(self).find('.wistia_click_to_play').eq(0).trigger('click');
                            }
                        });
                        clearInterval(interval);
                    }
                }, 100)
            });
        }
    });

   
    
    
    
    
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		/* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
		
		
		$('body').addClass('ready');
		
		createWaypoint('sec_bottom_left_trigger', '.sec_bottom_left', 'visible', 500, null, true);
		createWaypoint('section_two', '#section_two', 'visible', 500, null, true);
		createWaypoint('section_three', '#section_three', 'visible', 500, null, true);
		createWaypoint('section_four', '#section_four', 'visible', 500, null, true);
		createWaypoint('footer_trigger', '#footer_trigger', 'visible', 500, null, true);
		createWaypoint('about_middle_trigger', '#about_middle_trigger', 'visible', 300, null, true);
		createWaypoint('about_bottom_trigger', '#about_bottom_trigger', 'visible', 300, null, true);
		// reposition fixed image way before you get to it in the footer
		//createWaypoint('section_four', 'img.hero_bottom', 'visible', 0, null, true);
    
   


		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
   --------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);
   // createWaypoint('internal_trigger', null, null, -100, livechatLoad, false);




        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */






$('.sec_one_testi_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:true,
	fade:true,
	prevArrow:".test_arrow_left",
	nextArrow:".test_arrow_right",
	responsive: [
    {
      breakpoint: 700,
      settings: {
      slidesToShow: 1,
      adaptiveHeight:true,
      slidesToScroll: 1,
      autoplay: true,
			autoplaySpeed: 4500,
     }
   }
	]
 });
 
 
 
 
 $('.sp_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:true,
	fade:true,
	adaptiveHeight:true,
	mobileFirst:true,
	prevArrow:".sp_arrow_left",
	nextArrow:".sp_arrow_right",
	responsive: [
    {
      breakpoint: 701,
      settings: "unslick",
    }
	]
 });
 
 
 
 
 $('.sec_three_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:true,
	fade:true,
	adaptiveHeight:true,
	mobileFirst:true,
	prevArrow:".sec_three_arrow_left",
	nextArrow:".sec_three_arrow_right",
	responsive: [
    {
      breakpoint: 1150,
      settings: "unslick",
    }
	]
 });



$('.about_awards_slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
	arrows:false,
	autoplay: true,
	autoplaySpeed: 2500,
	responsive: [
    {
      breakpoint: 1390,
      settings: {
	      dots:true,
      	slidesToShow: 2,
      	slidesToScroll: 2,
			}
   },
   {
      breakpoint: 985,
      settings: {
	      dots:true,
      	slidesToShow: 1,
      	slidesToScroll: 1,
			}
   }
	]
 });

 
 
 
// macy http://macyjs.com/

/*
var macyInstance = Macy({
  container: '.testimonials_wrapper',
	columns: 3,
	margin:49,
	breakAt: {
        1450: 2,
        1066:1
  }
});
*/


	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");


// not found go back button



function goBack() {
 	window.history.back();
}
	
$('span.go_back').on('click', function(e) {
	
	 goBack();
  
});



// wrap submit button for fluid width, this is so spanish words can be added


$("footer .gform_footer").wrapInner("<div class='my_submit_inner'></div>");



// current sidebar




var pgurl = window.location.href;
	
	$(".sidebar ul li").each(function(){
  
  if($(this).find('a').attr("href") == pgurl)
    
    $(this).addClass("active");
	
	})



// sidebar


	$('.sidebar ul > li.current-menu-ancestor > a').addClass('active');


	$('.sidebar ul > li.menu-item-has-children > a').on('click', function(e) {
	  
		$(this).next('ul').slideToggle(300);
		
		$(this).toggleClass('active');
	
	});
	
	
	// faq
	
	
	$('.question_wrapper').on('click', function(e) {
		
		$(this).find('.answer').slideToggle(300);
		$(this).find('.drop_arrow').toggleClass('open');
	  
	});


	// nav
	
	$('.mobile_menu').on('click', function(e) {
	  
	  $('nav').slideToggle(300);
	  
	});
	
	$('.close').on('click', function(e) {
	  
	  $('nav').slideToggle(300);
	  
	});

	
	function navDesktop() {
		
		$('nav').addClass('nav_desktop');
		
		//$('.nav_inner li.menu-item-has-children > a').next('ul.sub-menu').removeClass('open');
		
		$('nav').removeClass('nav_tablet');
		
	}
	
	
	function navTablet() {
		
		$('nav').removeClass('nav_desktop');
		
		$('nav').addClass('nav_tablet');
		
		
		
	}
	

	function tabletClick() {
		
		$(this).toggleClass('open');
		
		$(this).next('ul.sub-menu').toggleClass('open');
		
	}

	
	
	if ($(window).width() > 1180) {
			
		navDesktop();
		
	}	
	
	
	if ($(window).width() <= 1180) {
			
		navTablet();
		
		$('nav ul.menu > li.menu-item-has-children > a').off().on('click', tabletClick);
				
	}
	
	
	// resize window width and fire functions
	
	
	$(window).resize(_.debounce(function() {
		
		if ($(window).width() > 1181) {
			
			navDesktop();
			
			// off
			
			$('nav li.menu-item-has-children > a').off('click', tabletClick);			
		
		}	
		
		if ($(window).width() <= 1180) {
			
			navTablet();
			
			// off
			
			$('nav li.menu-item-has-children > a').off().on('click', tabletClick);
					
		}
		
	}, 100)); 



	// section one magic line
	
	
if($('.magikline').length >0 ){// just show on homepage class 'nav'
  
  	
    
  

        var $el, leftPos, newWidth,
            $mainNav = $('.magikline').find("ul");

        $mainNav.append("<li class='magic-line'></li>");
        var $magicLine = $(".magic-line");



        if($('.magikline ul > li').hasClass('active')) {
            $magicLine
                .css({
                    "left": $('.magikline').find("ul > li.active").position().left,
                    "width": $('.magikline ul > li.active a').width(),
                }).data("origLeft", $magicLine.position().left);
        } else {
            $magicLine
                .css({
                    "left": 0,
                    "width": $('.magikline ul > li:first a').width()
                }).data("origLeft", $magicLine.position().left);
        }




        $('.magikline').find("ul > li:not(.magic-line)").hover(function() {
            $el = $(this);
            leftPos = $el.position().left;
            newWidth = $el.children().width();
            $magicLine.stop().animate({
                left: leftPos,
                width: newWidth
            });
        }, function() {
            $magicLine.stop().animate({
                left: $magicLine.data("origLeft"),
                width: $('.magikline ul > li.active a').width()
            });
        });

 

    
    
}


  
}); // document ready