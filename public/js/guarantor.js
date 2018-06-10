
$(document).ready(function () {
    $("#moreinfoG").click(function () {
        $(".g-moreinfo").toggleClass('ggg');
    });
});

function shownum() {
    var p;
    p = document.getElementById('show');
    p.innerHTML = '+0 1234 4578';
} 

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

//nice select
$(document).ready(function() {
  $('select').niceSelect();
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