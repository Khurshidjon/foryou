//select form sale tank
//var tiersArr = {
//	'tier1': ['Hydrus', 'Draco', 'Dorado'],
//	'tier2': ['Ursa', 'Sirius', 'Apus'],
//	'tier3': ['Aquila', 'Lipus', 'Corvus', 'Lyra'],
//  'tier4': ['Lynx', 'Vulpecula', 'Lacerta'],
//	'tier4s': ['S Lynx', 'S Vulpecula', 'S Lacerta'],
//	'tier5': ['Scorpius', 'Pavo', 'Monocores'],
//  'tier5s': ['S Scorpius', 'S Pavo', 'S Monocores'],
//	'tier6': ['Fornax', 'Centaurus', 'Sagitta', 'Serpens', 'Cygnus', 'Cepheus'],
// }
//
//var tiers_select = document.getElementById('tiers1');
//tiers_select.addEventListener('change', func);
//tiers_select.addEventListener('change', toParagraph);
//
//var tanks_select = document.getElementById('tanks1');
//tanks_select.addEventListener('change', toParagraph);
//
//function func(){
//	tanks_select.innerHTML = '';
//	var selected_country = tiers_select.value;
//	for (var i = 0; i < tiersArr[selected_country].length; i++) {
//		var new_option = document.createElement('option');
//		new_option.innerHTML = tiersArr[selected_country][i];
//		tanks_select.appendChild(new_option);
//	}
//}
//
//var parag = document.querySelector('phh');
//function toParagraph() {
//	parag.innerHTML = '';
//	parag.innerHTML = tiers_select.options[tiers_select.selectedIndex].text + ','
//	+tanks_select.options[tanks_select.selectedIndex].text;
// }



//agreement
$("#agreement-link").click(function(){
    $("#agreement").slideToggle();
});




//file upload
$(function(){
  var viewModel = {};
  viewModel.fileData = ko.observable({
    dataURL: ko.observable(),
    // base64String: ko.observable(),
  });
  viewModel.multiFileData = ko.observable({
    dataURLArray: ko.observableArray(),
  });
  viewModel.onClear = function(fileData){
    if(confirm('Are you sure?')){
      fileData.clear && fileData.clear();
    }                            
  };
  viewModel.debug = function(){
    window.viewModel = viewModel;
    console.log(ko.toJSON(viewModel));
    debugger; 
  };
  ko.applyBindings(viewModel);
});


//step form
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

//choose plan
//document.getElementById("w").onclick = function(){
//var z = document.getElementsByName('q'),s='Choose your destiny!!';
//for (var i = 0; i < z.length; i++)  {
//    if  (z[i].checked) {
//      s = 'Выбор сделан!'; break;
//    }
//}
//alert(s);
//}

//nice select
$(document).ready(function() {
  $('select').niceSelect();
});

//mask plugin
$(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('0 000 000', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00day", {
      translation: {
        'day': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
    $('.fallback').mask("$100", {
      translation: {
        '$': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
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

//languages
 $('#lang_nav').click(function(){
    $('#langs').slideToggle();
  });