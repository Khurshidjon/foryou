


  // Slideshow 1
function shownum1() {
    var p;
    p = document.getElementById('show1');
    p.innerHTML = '+0 1234 4578';
}


//sign and log in
    $('#signin').click(function(){
    $('.sigin-form').toggleClass('sigin-panel-show');
    $('.login-form').toggleClass('login-panel-show');
   
  });
$('#loginm').click(function(){
    $('.sigin-form').toggleClass('sigin-panel-show');
    $('.login-form').toggleClass('login-panel-show');
   
  });

//languages
 $('#lang_nav').click(function(){
    $('#langs').slideToggle();
  });




//btn to top

 
 $(document).ready(function(){   

    $(window).scroll(function () {

        if ($(this).scrollTop() > 0) {

            $('#upbutton').fadeIn();

        } else {

            $('#upbutton').fadeOut();

        }

    });

    $('#scroller').click(function () {

        $('body,html').animate({

            scrollTop: 0

        }, 400);

        return false;

    });

});


//comment add
 $('#addcomment').click(function(){
    $('.comment-panel').slideToggle();
  });

//btn share fancybox

  $('#sharing').click(function(){
    $('.share-panel').toggleClass('share-panel-show');
  });
 

//$('[data-fancybox="gallery"]').fancybox({
//	// Options will go here
//});


//nice select
$(document).ready(function() {
  $('select').niceSelect();
});

//btn users profile
$(document).ready(function(){
  $('#user-profile').click(function(){
    $('.users').toggleClass('users-show');
  });
});



//burger menu
$(function() {
  $('.burger-box,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart', function(e) {
    e.preventDefault();
    $('.burger-box').toggleClass('is-open');
    $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
  });
});

$().fancybox({
    selector : '[data-fancybox="gallery"]',
    loop     : true
});

//slick
$(".slick-carousel").slick({
    speed: 500,
		autoplay: false,
		autoplaySpeed: 0,
		cssEase: 'linear',
    slidesToShow: 1,
  	slidesToScroll: 1,
    infinite: true,
    swipeToSlide: true,
  	centerMode: false,
    focusOnSelect: true,
    
});