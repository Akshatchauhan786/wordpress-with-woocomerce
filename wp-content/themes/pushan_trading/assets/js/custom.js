$(document).ready(function(){

// add and remove 
$('.times-1').click(function(){
  $('body').removeClass("open-p");
});
$('.search-1').click(function(){
  $('body').addClass("open-p");

});


    $('.slick-carousel').slick({
        dots:true,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 2000,
        
    });
    

    $('.projects-slider').slick({
      dots: false,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      // autoplay: true,
      // autoplaySpeed: 2000,
      arrows: true,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
         breakpoint: 400,
         settings: {
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
         }
      }]
  });

  $('.textmonials-boxs').slick({
    dots: false,
    infinite: true,
    speed: 500,
margin:10,
    slidesToShow: 3,
    slidesToScroll: 1,
    // autoplay: true,
    // autoplaySpeed: 2000,
    arrows: false,
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
       breakpoint: 600,
       settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
       }
    }]
});

// logo slider
$('.logo-slider').slick({
  dots: false,
  infinite: true,
  speed: 500,

  slidesToShow: 6,
  slidesToScroll: 1,
   autoplay: true,
   autoplaySpeed: 2200,
  arrows: false,
  responsive: [{
    breakpoint: 992,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1
    }
  },
  {
     breakpoint: 400,
     settings: {
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
     }
  }]
});

    $(function() {
        $('.tabs-nav a').click(function() {
      
          // Check for active
          $('.tabs-nav li').removeClass('active');
          $(this).parent().addClass('active');
      
          // Display active tab
          let currentTab = $(this).attr('href');
          $('.tabs-content div').hide();
          $(currentTab).show();
      
          return false;
        });
      });



    //   counter	
	
    let count = document.querySelectorAll("#count")
let arr = Array.from(count)



arr.map(function(item){
  let startnumber = 0

  function counterup(){
  startnumber++
  item.innerHTML= startnumber
   
  if(startnumber == item.dataset.number){
      clearInterval(stop)
  }
}

let stop =setInterval(function(){
  counterup()
},1)

})




$('#play-video').on('click', function(e){
  e.preventDefault();
  $('#video-overlay').addClass('open');
  $("#video-overlay").append('<iframe width="560" height="315" src="https://www.youtube.com/embed/ngElkyQ6Rhs" frameborder="0" allowfullscreen></iframe>');
});

$('.video-overlay, .video-overlay-close').on('click', function(e){
  e.preventDefault();
  close_video();
});

$(document).keyup(function(e){
  if(e.keyCode === 27) { close_video(); }
});

function close_video() {
  $('.video-overlay.open').removeClass('open').find('iframe').remove();
};




// accordion
$('.accordion__header').click(function(e) {
	e.preventDefault();
	var currentIsActive = $(this).hasClass('is-active');
	$(this).parent('.accordion').find('> *').removeClass('is-active');
	if(currentIsActive != 1) {
		$(this).addClass('is-active');
		$(this).next('.accordion__body').addClass('is-active');
	}
});


});


// tab

$('.tab-link').click( function() {
	
	var tabID = $(this).attr('data-tab');
	
	$(this).addClass('active').siblings().removeClass('active');
	
	$('#tab-'+tabID).addClass('active').siblings().removeClass('active');
});





$.fn.jQuerySimpleCounter = function( options ) {
  var settings = $.extend({
      start:  0,
      end:    100,
      easing: 'swing',
      duration: 2000,
      complete: ''
  }, options );

  var thisElement = $(this);

  $({count: settings.start}).animate({count: settings.end}, {
  duration: settings.duration,
  easing: settings.easing,
  step: function() {
    var mathCount = Math.ceil(this.count);
    thisElement.text(mathCount);
  },
  complete: settings.complete
});
};


$('#number1').jQuerySimpleCounter({end: 10000,duration: 1400});
$('#number2').jQuerySimpleCounter({end: 100,duration: 1500});
$('#number3').jQuerySimpleCounter({end: 30,duration: 1500});
$('#number4').jQuerySimpleCounter({end: 10,duration: 1500});



/* AUTHOR LINK */
 $('.about-me-img').hover(function(){
        $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
    }, function(){
        $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
    });



  const header = document.querySelector(".main-navbar");
const toggleClass = "sticky";

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll > 250) {
    header.classList.add(toggleClass);
  } else {
    header.classList.remove(toggleClass);
  }
});


$(document).ready(function(){
  $(".search_item").click(function(){
    $(".search_head").slideToggle();
  });
});

$(document).ready(function(){
  $(".search_item").click(function(){
    $(".search_item").toggleClass("cross_btn");
  });
});













