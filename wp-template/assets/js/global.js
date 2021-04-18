jQuery(document).ready(function($) {

	// Toggle mobile-menu
	$(".nav-toggle").on("click", function(){	
		$(this).toggleClass("active");
		$(".mobile-menu").slideToggle();
		if ($(".search-toggle").hasClass("active")) {
			$(".search-toggle").removeClass("active");
			$(".blog-search").slideToggle();
		}
	});
	
	// Toggle search form
	$(".search-toggle").on("click", function(){	
		$(this).toggleClass("active");
		$(".blog-search").slideToggle();
		if ($(".nav-toggle").hasClass("active")) {
			$(".nav-toggle").removeClass("active");
			$(".mobile-menu").slideToggle();
		}
	});
	
	
	// Show mobile-menu > 700
	$(window).resize(function() {
		if ($(window).width() > 800) {
			$(".toggle").removeClass("active");
			$(".mobile-menu").hide();
			$(".blog-search").hide();
		}
	});
	
	
	// Cool header image scroll
	$(window).scroll(function(e){
		if ($(window).width() > 800) {
			$('.header').css({
				'bottom' : -($(this).scrollTop()/3)+"px",
			}); 
			var thisdist = $(this).scrollTop();
			var headerheight = $(".header").outerHeight();
			$('.blog-info').css({
				'opacity' : (1 - thisdist/headerheight)
			}); 
		} else {
			$('.header').css({'bottom' : 'auto'}); 	
			$('.blog-info').css({'opacity' : "1" });
		}
	});
	
		
	// resize videos after container
	var vidSelector = ".post iframe, .post object, .post video, .widget-content iframe, .widget-content object, .widget-content iframe";	
	var resizeVideo = function(sSel) {
		$( sSel ).each(function() {
			var $video = $(this),
				$container = $video.parent(),
				iTargetWidth = $container.width();

			if ( !$video.attr("data-origwidth") ) {
				$video.attr("data-origwidth", $video.attr("width"));
				$video.attr("data-origheight", $video.attr("height"));
			}

			var ratio = iTargetWidth / $video.attr("data-origwidth");

			$video.css("width", iTargetWidth + "px");
			$video.css("height", ( $video.attr("data-origheight") * ratio ) + "px");
		});
	};

	resizeVideo(vidSelector);

	$(window).resize(function() {
		resizeVideo(vidSelector);
	});
	
	// Smooth scroll to header
    $('.tothetop').click(function(){
		$('html,body').animate({scrollTop: 0}, 500);
		$(this).unbind("mouseenter mouseleave");
        return false;
    });
	
	// Gallery hover styling
	const galleryImages = $('figure.my-thumbnail .blocks-gallery-grid .blocks-gallery-item figure img')
	
	galleryImages.mouseenter(function(){
    if(!$(this).attr('src').includes('transparent')){
		  $(this).next().addClass('my-thumbnail-hover');
		}
	});

	galleryImages.mouseleave(function(){
    if(!$(this).attr('src').includes('transparent')){
		  $(this).next().removeClass('my-thumbnail-hover');
		}
	});
	
	// Spoiler section
	const spoilerImages = $('figure.my-thumbnail .blocks-gallery-grid .blocks-gallery-item figure img[src*=spoiler]');
	for(i = 0; i < spoilerImages.length; i++){
		const figcaption = $(spoilerImages[i].nextElementSibling);
		const originalValue = figcaption.html();
		figcaption.attr("alt",originalValue);
		figcaption.html("Spoiler - click to reveal");
	};
	spoilerImages.addClass("spoiler-image");
	spoilerImages.wrap('<div class=image-wrap></div>');

	$('.my-thumbnail div.image-wrap').mouseenter(function(){
		$(this).next().addClass('my-thumbnail-hover');
	});
	$('.my-thumbnail div.image-wrap').mouseleave(function(){
		$(this).next().removeClass('my-thumbnail-hover');
	})
  
  var coll = document.getElementsByClassName("spoiler");
  var i;
  
	// Spoiler reveal
  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      this.firstChild.class = "arrow down";
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    });
  }
  const showLargeImage = function() {
		if($(this).hasClass('spoiler-image')){
			return;
		}
		var modal = document.getElementById("myModal");

	  // Get the image and insert it inside the modal - use its "alt" text as a caption
	  var img = $(this)
	  var modalImg = document.getElementById("modalImage");;
	    
		modal.style.display = "block";
		modalImg.src = img.attr('src');
	};

	for (i = 0; i < spoilerImages.length; i++){
		const image = spoilerImages[i];
		image.addEventListener("click", function() {
			if($(this).hasClass('spoiler-image')){
				$(this).removeClass('spoiler-image');
				$(this).addClass('reveal-image');
				const figcaption = $(this).parent().next();
				const caption = figcaption.attr('alt');
				figcaption.html(caption);
				$(this).on('click', showLargeImage);
			}
		});
	}

	galleryImages.filter(function(){
		return !$(this).hasClass('spoiler-image') && !$(this).attr('src').includes('transparent');
	}).on('click', showLargeImage);
	// Get the <span> element that closes the modal
	var span = document.getElementById("modalClose");
	span.onclick = function() { 
		document.getElementById("myModal").style.display = "none";
	}
});
