setInterval(function() {
	var activeImg = $("#show");
	
	if (activeImg.next().length == 1) {
		activeImg.next().attr("id", "show");
	} else {
		$("#slideshow").children().first().attr("id", "show");
	}
	
	activeImg.removeAttr("id");
	
}, 4000);