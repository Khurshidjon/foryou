$('#what').click (function(){
   $('.hidden_div').toggleClass('btnsnavshow');
});

 $('#closesale').click (function(){
    if (!$('.btnsaletank2').hasClass('btnshow2')) {
    } else { 
        $('.btnsaletank2').removeClass('btnshow2');
        $('.btnsaletank').show(); 
        $('#what').fadeIn();
    }
 });
 $('#closebuy').click (function(){
    if (!$('.btnbuytank2').hasClass('btnshow2')) {
    } else { 
        $('.btnbuytank2').removeClass('btnshow2');
        $('.btnbuytank').show();
        $('#what').fadeIn();
    }
 });
 $('#closeenter').click (function(){
    if (!$('.btnenter2').hasClass('btnshow2')) {
    } else { 
        $('.btnenter2').removeClass('btnshow2'); 
        $('.btnenter').show();
        $('#what').fadeIn();
    }
 });


$('.btnsaletank').click (function(){
     $('.btnsaletank2').addClass('btnshow2');
     $('.btnsaletank').hide();
     $('#what').hide();
    });
$('.btnbuytank').click (function(){
     $('.btnbuytank2').addClass('btnshow2');
     $('.btnbuytank').hide();
     $('#what').hide();
    });

 $('.btnenter').click (function(){
    $('.btnenter2').addClass('btnshow2');
    $('.btnenter').hide();
    $('#what').hide();
});

 $('#go').click (function(){
    if (!$('.btnsaletank2').hasClass('btnshow2')) {
    } else { 
       window.location.href = "saletank.html";
    }
 });
$('#go').click (function(){
    if (!$('.btnbuytank2').hasClass('btnshow2')) {
    } else { 
       window.location.href = "index.html";
    }
 });
$('#go').click (function(){
    if (!$('.btnenter2').hasClass('btnshow2')) {
    } else { 
       window.location.href = "index.html";
    }
 });