$(document).ready(function() {
	$("#posts").text("Hämtar inlägg...");
	$.ajax({
		url: "https://guestbook.ia-mau.se/api",
		type: "GET",
		dataType: "JSON"
	}).done(function(data) {
		$("#posts").html("");
		for(var i = 0; i < data.length; i++) {
			$("#posts").append(
				'<div class="post">\
					<div class="post-header">\
						<strong>' + data[i].name + '</strong> <em>genom metoden <strong>' + data[i].method + '</strong></em>\
					</div>\
					<div class="post-body">\
						<p>' + data[i].message + '</p>\
					</div>\
					<div class="post-footer">' + data[i].created_at + '</div>\
				</div>'
			);
		}
	}).fail(function() {
		$("#posts").html("<div class='error'>Kunde inte hämta inlägg - kontrollera så att du är ansluten till internet</div>");
	});
});