$("#addTodo").on("click", function () {
	var todo = $("#todo").val();
	$("#todoList").append("<li>"+todo+"<span class='deleteItem'>X</span></li>");
	$("#todo").val("");
});

$("#todoList").on("click", ".deleteItem", function() {
	$(this).parent().remove();
});