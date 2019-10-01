// När man klickar på elementet med id #addTodo
$("#addTodo").on("click", function () {
	// Hämtar värdet i textrutan med id #todo
	var todo = $("#todo").val();
	// Lägger till, sist i vår punktlista, vår nya todo-sak
	$("#todoList").append("<li>"+todo+"<span class='deleteItem'>X</span></li>");
	// Nollställer värdet i vår textruta med id #todo
	$("#todo").val("");
});

// När man klickar på ett element med klassen .deleteItem som ligger i #todoList
$("#todoList").on("click", ".deleteItem", function() {
	// Gå till elementets förälder, och ta bort det elementet
	$(this).parent().remove();
});