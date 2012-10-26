window.addEventListener('load', function() {
  document.getElementById('form1').addEventListener('submit', function(e) {
    e.preventDefault();
    if (checkForm()) this.submit();
  });

  //getElementById shorthand
  var $ = function(id) {
  	return document.getElementById(id);
  };

  var checkForm = function() {
	  // clear error messages
	  $('errTitle').innerHTML = "";
	  $('errName').innerHTML = "";
	  $('errStreet').innerHTML = "";
	  $('errCity').innerHTML = "";
	  $('errZipcode').innerHTML = "";
	  $('errCard').innerHTML = "";
	  $('errCardnumber').innerHTML = "";
	  $('errExpirationdate').innerHTML = "";

	  // check form
	  var isValid = true;

	  // title selected?
	  if ($('title').value == "-1") {
	    $('errTitle').innerHTML = "selecteer een titel";
	    isValid = false;
	  }

	  // name provided?
	  if ($('name').value == "") {
	    $('errName').innerHTML = "geef een naam op";
	    isValid = false;
	  }

	  // street provided?
	  if ($('street').value == "") {
	    $('errStreet').innerHTML = "geef een straat op";
	    isValid = false;
	  }

	  // city provided?
	  if ($('city').value == "") {
	    $('errCity').innerHTML = "geef een stad op";
	    isValid = false;
	  }

	  // zipcode provided?
	  if ($('zipcode').value == "") {
	    $('errZipcode').innerHTML = "geef een postcode op";
	    isValid = false;
	  }

	  //is een van de radio buttons die horen bij de meegegeven naam gechecked
	  var gechecked = function(name) {
	  	boxes=document.getElementsByName(name);
		for(var i = 0; i < boxes.length; i++){
		  if(boxes[i].checked){
			return true; // No need to check the rest since only one can be checked.
		  }
		}
		return false;
	  }

	  // card selected
	  if(!gechecked('card')){
	  	$('errCard').innerHTML = "geef op welke kredietkaart je gaat gebruiken";
	    isValid = false;
	  }
	  

	  /*// other way to select
	  if(!($('amex').checked || $('mc').checked || $('visa').checked)){
	  	$('errCard').innerHTML = "geef op welke kredietkaart je gaat gebruiken";
	    isValid = false;
	  }*/

	  // cardnumber correct?
	  var rex = /^(\d{4})([-]{1})(\d{4})([-]{1})(\d{4})([-]{1})(\d{4})+$/;
	  if (!rex.test($('cardnumber').value)) {
	    $('errCardnumber').innerHTML = "incorrect formaat";
	    isValid = false;
	  }
	  // cardnumber provided?
	  if ($('cardnumber').value == "") {
	    $('errCardnumber').innerHTML = "geef een kaartnummer op";
	    isValid = false;
	  }

	  // expirationdate correct?
	  var rex = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
	  if (!rex.test($('expirationdate').value)) {
	    $('errExpirationdate').innerHTML = "incorrect formaat";
	    isValid = false;
	  }
	  // expirationdate provided?
	  if ($('expirationdate').value == "") {
	    $('errExpirationdate').innerHTML = "geef een vervaldatum op";
	    isValid = false;
	  }

	  // return
	  return isValid;
	}
});