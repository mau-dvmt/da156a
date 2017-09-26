<h2>Föreläsning 9 - JavaScript i webbutveckling</h2>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/xg63koqojltQ0j" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht17-da156a-javascript-i-webbutveckling" title="HT17 - DA156A - JavaScript i webbutveckling" target="_blank">HT17 - DA156A - JavaScript i webbutveckling</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h2>Dagens exempel</h2>

<h3>Todo-lista</h3>
<p>
    <a href="/lectures/9/todo/index.html">Här hittar du exemplet live</a>
</p>
<h4>HTML</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;link href=&quot;style.css&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
	&lt;/head&gt;

	&lt;body&gt;
		&lt;div id=&quot;todoWrapper&quot;&gt;
			&lt;h1&gt;Todo&lt;/h1&gt;
			&lt;fieldset&gt;
				&lt;legend&gt;Att g&ouml;ra:&lt;/legend&gt;
				&lt;input type=&quot;text&quot; id=&quot;todo&quot;&gt;
				&lt;button id=&quot;addTodo&quot;&gt;L&auml;gg till&lt;/button&gt;
			&lt;/fieldset&gt;
			&lt;h2&gt;Saker att g&ouml;ra:&lt;/h2&gt;
			&lt;ul id=&quot;todoList&quot;&gt;

			&lt;/ul&gt;
		&lt;/div&gt;

		&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js&quot;&gt;&lt;/script&gt;
		&lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>JavaScript</h4>
<pre class="language-css line-numbers" data-type="javascript"><code class="language-css line-numbers">
// När användaren klickar på elementet med id "addTodo" (vår knapp)
$("#addTodo").on("click", function () {
    // Hämta värdet från elementet med id "todo" (texten i vår textruta)
	var todo = $("#todo").val();
    // Lägg till en ny punkt i vår punktlista med id "todoList" (texten är den från vår textruta)
	$("#todoList").append("<li>"+todo+"<span class='deleteItem'>X</span></li>");
    // Ta bort värdet från elementet med id "todo" (nollställ vår textruta)
	$("#todo").val("");
});

// När man klickar på ett element med klassen "deleteItem" (vår "X"-knapp för att ta bort en todo-item)
$("#todoList").on("click", ".deleteItem", function() {
    // Från elementet man klickade på (knappen) ta bort föräldern (todo-item)
	$(this).parent().remove();
});
</code></pre>

<h4>CSS</h4>
<pre class="language-css line-numbers" data-type="html"><code class="language-css line-numbers">
body{
	font-family:"century gothic";
	margin-top:50px;
}

h1{
	margin:5px 0;
}

h2{
	font-size:16px;
	border-bottom: 1px solid #666;
}

#todoWrapper{
	width:400px;
	padding:20px;
	height:auto;
	overflow:hidden;
	margin:0px auto;
	background-color:#EFEFEF;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 0px 0px 10px 0px #666;
	box-shadow: 0px 0px 10px 0px #666;
}

.deleteItem {
	float: right;
	border: 2px solid #000;
	background-color: #eee;
	padding: 0px 5px;
	border-radius: 5px;
	font-size: 12px;
	cursor: pointer;
}
</code></pre>

<h3>Bildspel</h3>

<h4>HTML</h4>
<p>
    <a href="/lectures/9/slideshow/index.html">Här hittar du exemplet live</a>
</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;link href=&quot;style.css&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
	&lt;/head&gt;

	&lt;body&gt;
		&lt;div id=&quot;slideshow&quot;&gt;
			&lt;img src=&quot;images/1.jpg&quot; alt=&quot;image&quot; id=&quot;show&quot;&gt;
			&lt;img src=&quot;images/2.jpg&quot; alt=&quot;image&quot;&gt;
			&lt;img src=&quot;images/3.jpg&quot; alt=&quot;image&quot;&gt;
		&lt;/div&gt;

		&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js&quot;&gt;&lt;/script&gt;
		&lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>JavaScript</h4>
<pre class="language-css line-numbers" data-type="javascript"><code class="language-css line-numbers">
// Koden inuti funktionen nedan körs var 4:e sekund
setInterval(function() {
    // Leta upp elementet med id "show" (bilden som just nu visas i bildspelet)
	var activeImg = $("#show");

    // Kontrollera om det finns en bild efter den som just nu visas (nästkommande syskon), eller om bildspelet ska börja om från början
	if (activeImg.next().length == 1) {
        // Om det finns en bild efter, visa den bilden
		activeImg.next().attr("id", "show");
	} else {
        // Annars visa den första bilden i bildspelet
		$("#slideshow").children().first().attr("id", "show");
	}

    // Ta bort id "show" från bilden som tidigare visats
	activeImg.removeAttr("id");

}, 4000);
</code></pre>

<h4>CSS</h4>
<pre class="language-css line-numbers" data-type="html"><code class="language-css line-numbers">
#slideshow{
	position: relative;
	width:600px;
	height: 300px;
	padding:20px;
	overflow:hidden;
	margin:0px auto;
	background-color:#EFEFEF;
	border-radius: 10px;
	box-shadow: 0px 0px 10px 0px #666;
}

#slideshow > img {
	position: absolute;
	opacity: 0;
	transition: all 1s;
}

#slideshow > #show {
	opacity: 1;
}
</code></pre>
