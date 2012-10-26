window.addEventListener('load', function() {
	// reeks 1

	//toon de tekst in een alert
	document.getElementById('buttonA').addEventListener('click', function() {
		alert(document.getElementById('textfield1').value);
	});
	//verander tekst naar 'hallo'
	document.getElementById('buttonB').addEventListener('click', function() {
		document.getElementById('textfield1').value = 'hallo';
	});



	//disable de button hiernaast
	document.getElementById('buttonE').addEventListener('click', function() {
		document.getElementById('button1').disabled = true;
	});
	//klik op de button hiernaast
	document.getElementById('buttonF').addEventListener('click', function() {
		document.getElementById('button1').click();
	});



	//schakel de eerste optie aan
	document.getElementById('buttonG').addEventListener('click', function() {
		document.getElementById('checkbox1').checked = true;
	});
	//verander de tweede
	document.getElementById('buttonH').addEventListener('click', function() {
		document.getElementById('checkbox2').checked = !document.getElementById('checkbox2').checked;
	});



	//selecteer de tweede keuze
	document.getElementById('buttonI').addEventListener('click', function() {
		document.getElementById('select1').value = "val2";
	});
	//geef de weergegeven keuze in een alert
	document.getElementById('buttonJ').addEventListener('click', function() {
		alert(document.getElementById('select1').options[document.getElementById('select1').selectedIndex].innerHTML);
	});





	// reeks 2

	//stel de alt van de 1e afbeelding in op 'cursus rietdekken'
	document.getElementById('buttonK').addEventListener('click', function() {
		document.getElementById('cursus1').alt = "cursus rietdekken";
	});
	//verwissel de twee afbeeldingen van plaats
	document.getElementById('buttonL').addEventListener('click', function() {
		var temp = document.getElementById('cursus1').src;
		document.getElementById('cursus1').src = document.getElementById('cursus2').src;
		document.getElementById('cursus2').src = temp;
	});
	//stel de breedte van de 2e afbeelding in op 160
	document.getElementById('buttonM').addEventListener('click', function() {
		document.getElementById('cursus2').width = 160;
	});


// in command line chrome document.getElementById('cursus2').style om alle mogelijke css waarden te krijgen


	// reeks 3

	//verander de tekst van de div in 'dit is plaats1'
	document.getElementById('buttonN').addEventListener('click', function() {
		document.getElementById('place1').innerHTML = "dit is plaats1";
	});
	//verander de kleur van de span in blauw
	document.getElementById('buttonO').addEventListener('click', function() {
		//document.getElementById('place2').style.color = "blue";
		document.getElementById('place2').style.backgroundColor = "blue";
	});
	//verander de css-class van de div in 'errorMsg'
	document.getElementById('buttonP').addEventListener('click', function() {
		document.getElementById('place1').className = "errorMsg";
	});
	//verberg de groene laag
	document.getElementById('buttonQ').addEventListener('click', function() {
		document.getElementById('layer2').style.display = "none";
	});
	//verwissel de stapelvolgorde
	document.getElementById('buttonR').addEventListener('click', function() {
		document.getElementById('layer1').style.zIndex = 3;
		document.getElementById('layer2').style.zIndex = 2;
		document.getElementById('layer3').style.zIndex = 1;
	});
	//breng de lagen op gelijke hoogte
	document.getElementById('buttonS').addEventListener('click', function() {
		document.getElementById('layer1').style.zIndex = 1;
		document.getElementById('layer2').style.zIndex = 1;
		document.getElementById('layer3').style.zIndex = 1;
	});





	// reeks 4

	//verander de achtergrondkleur van deze pagina naar grijs
	document.getElementById('buttonT').addEventListener('click', function() {
		document.bgColor = "grey";
	});
	//ga naar Google
	document.getElementById('buttonU').addEventListener('click', function() {
		window.top.location = "http://www.google.be";
	});
	//stel de titel van dit document in op 'testpagina'
	document.getElementById('buttonV').addEventListener('click', function() {
		document.title = "testpagina";
	});
	//verklein het browservenster tot 800x600 (werkt niet in alle browsers)
	document.getElementById('buttonW').addEventListener('click', function() {
		window.resizeTo(800, 600);
	});
	//verplaats het browservenster 50 pixels naar rechts (werkt niet in alle browsers)
	document.getElementById('buttonX').addEventListener('click', function() {
		window.moveBy(50,0);
	});
	//verander de achtergrondkleur naar blauw, maar vraag eerst om een bevestiging
	document.getElementById('buttonY').addEventListener('click', function() {
		if(confirm("Do you really want to change the backgroundColor to blue?") == true){
			document.bgColor = "blue";
		}
	});
	//verander de achtergrondkleur, maar vraag eerst een kleur
	document.getElementById('buttonZ').addEventListener('click', function() {
		document.bgColor = prompt("What background color do you want?", "yellow");
	});





	// reeks 5

	//zet alle h2's in het groen
	document.getElementById('buttonAA').addEventListener('click', function() {
		var h2s = document.getElementsByTagName("h2");
		for(var i = 0; i < h2s.length; i++) {
			h2s[i].style.color = "green";
		}
	});
	//geef het aantal buttons van het eerste formulier in een alert
	document.getElementById('buttonAB').addEventListener('click', function() {
		alert(document.forms.form1.querySelectorAll("input[type=button]").length);
	});
	//vraag bij de eerste klik een tekst; alert vanaf de volgende kliks die tekst
	var text = "";
	document.getElementById('buttonAC').addEventListener('click', function() {
		if(text == "") {
			text = prompt("Give a text?", "");
		}
		else {
			alert(text);
		}
	});

});