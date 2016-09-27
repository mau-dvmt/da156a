/*
	När sidan laddats klar körs funktionen "start"
*/
window.onload = start;

/*
	Funktionen start knyter händelserna
	- onfocus (när ett <input>-element är markerat)
	- onblur (när ett <input>-element blir avmarkerat)
	till funktionen "animateSearchBox", samt händelsen
	- onclick (när man klickar på ett element)
	till funktionen "showHideMenu"
*/
function start(){
	var searchBox = document.querySelector("#search-box"); // Letar upp elementet med id "search-box" och sparar det i variabeln "searchBox"
	searchBox.onfocus = animateSearchBox; // När elmenetet i searchBox blir i fokus körs funktionen "animateSearchBox"
	searchBox.onblur = animateSearchBox; // När elmenetet i searchBox blir ur fokus körs funktionen "animateSearchBox"
	
	var menuBtn = document.querySelector("#menu-btn"); // Letar upp elementet med id "menu-btn" och sparar det i variabeln "menuBtn"
	menuBtn.onclick = showHideMenu; // När elmenetet i menuBtn klickas på körs funktionen "showHideMenu"
}

/*
	Funktionen lägger till klassen "active" till elementet som triggade funktionen om denna klass ej finns på elmentet redan, annars (om elementet har klassen "active" tas klassen bort)
*/
function animateSearchBox(){
	if(this.className == "active"){
		this.className = "";
	}else{
		this.className = "active";
	}
}

/*
	Funktionen lägger till klassen "active" till elementet som triggade funktionen om denna klass ej finns på elmentet redan, annars (om elementet har klassen "active" tas klassen bort)
*/
function showHideMenu(){
	var menu = document.querySelector("#menu");
	if(menu.className == ""){
		menu.className = "show";
	}else{
		menu.className = "";
	}
}