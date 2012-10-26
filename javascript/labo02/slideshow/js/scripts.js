//links foto's
var imglinks
//gebruikte waarden voor de foto's
var lastone;
var lastindex;
//naar welke kant de foto's draaien
var left = true;


// start scripts
window.addEventListener('load', function() {
	imglinks = document.querySelectorAll('#thumbsmenu li>a');
	changeImg(0);	//de start foto
	//events toevoegen per foto
	for (var i = 0; i < imglinks.length; i++) {
		addEvents(i);
	}


//navigatie

	//eerste foto
	$('eerste').addEventListener('click', function(e){
		changeImg(0);
	    e.preventDefault();
	});


	//vorige foto
	$('vorige').addEventListener('click', function(e){
		left = true;
		turn();
	    e.preventDefault();
	});


	//volgende foto
	$('volgende').addEventListener('click', function(e){
		left = false;
		turn();
	    e.preventDefault();
	});


	//laatste foto
	$('laatste').addEventListener('click', function(e){
		changeImg(imglinks.length-1);
	    e.preventDefault();
	});

	//navigatie doormiddel van linkse en rechtse pijl
	document.onkeydown = function(e){
		var index
        switch(window.event.keyCode){
          case 37:  //pijl naar links
          	left = true;
            break;
          case 39:  //pijl naar rechts
			left = false;
            break;
        }
        turn();
    }


//auto slideshow
	//het starten van de slideshow
    $('start').addEventListener('click', function(e) {
    	start_Int();
    });

    //het stoppen van de slideshow
    $('stop').addEventListener('click', function(e) {
    	stop_Int();
    });
});


//getElementById shorthand
var $ = function(id) {
	return document.getElementById(id);
};

//veranderen van de grootte foto naar degene waarvan de index meegegeven is
var changeImg = function(index){
	lastindex = index;
	var img = imglinks[index].querySelector('img');
	if(lastone != null){
  		lastone.className = "";
  	}
  	img.parentNode.parentNode.className = "active";
  	lastone = img.parentNode.parentNode;

    photoBig.src = img.getAttribute('data-src-l');
    photoBig.alt = img.alt;
}

//voegt een event toe aan een link van een foto
var addEvents = function(index) {
  // add click event to link
  imglinks[index].addEventListener('click', function(e) {
  	changeImg(index);
    e.preventDefault();
  });
}

//start een timer die turn() op roept na elke seconde
var intval="";
var start_Int = function (){
    if(intval==""){
		intval=window.setInterval("turn()", 1000);
  	}
}

//stopt de gemaakte timer
var stop_Int = function (){
    if(intval!=""){
      	window.clearInterval(intval);
      	intval="";
  	}
}

//functie die de volgende foto toont
var turn = function() {
	if(left) {
		var index = lastindex == 0 ? imglinks.length-1 : lastindex -1;
		changeImg(index);
	}
	else {
		var index = lastindex == imglinks.length-1 ? 0 : lastindex + 1;
		changeImg(index);
	}
}