<h2>Föreläsning 9 - JavaScript i webbutveckling</h2>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/JkZerE7kzJ4Jb3" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>

<a href="/resources/pdf/2023-JavaScript.pdf">Ladda ner föreläsningen här</a>

<hr>

<!--
<h2>Video från förra året</h2>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/Hu6x10afirE?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe></div>

<hr>

--> 

<h2>Dagens exempel</h2>

<h3>Bildspel</h3>

<h4>HTML</h4>
<p>
    <a href="/lectures/9/slideshow/index.html">Här hittar du exemplet live</a>
</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt; 
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Bildspel&lt;/title&gt;
        &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
        &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div id=&quot;slideshow&quot;&gt;
            &lt;img src=&quot;images/1.jpg&quot; id=&quot;active&quot; alt=&quot;an image&quot;&gt;
            &lt;img src=&quot;images/2.jpg&quot; alt=&quot;an image&quot;&gt;
            &lt;img src=&quot;images/3.jpg&quot; alt=&quot;an image&quot;&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>JavaScript</h4>
<pre class="language-javascript line-numbers" data-type="javascript"><code class="language-javascript line-numbers">
setInterval(function(){
    /*
        Kod här inne, körs var 3:e sekund
    */

    // 1) Letar upp elementet (bilden) med id: active och sparar det i variabeln "currentImage"
    var currentImage = $("#active");

    // 2) Kontrollerar om bilden har ett syskon efter sig i DOM-trädet
    if (currentImage.next().length > 0 ) {
        // 2a) Det finns en bild som nästkommande syskon, ge det nästkommande syskonet id:t "active"
        currentImage.next().attr("id", "active");
    } else {
        // 2b) Det finns ingen nästa bild, ge den första bilden av syskonen id:t "active"
        $("#slideshow").children().first().attr("id", "active");
        /*
            Förklaring av kodraden ovan:
            $("#slideshow")         => Letar upp elementet med id "slideshow"
            .children()             => Hämtar alla barn till elementet med id "slideshow"
            .first()                => Hämtar det första barnet (första bilden)
            .attr("id", "active")   => Tilldelar den första bilden attributet "id" med värdet "active"
        */
    }

    // 3) Ta bort attributet id på aktiv bild
    currentImage.removeAttr("id");
}, 3000)
</code></pre>

<h4>CSS</h4>
<pre class="language-css line-numbers" data-type="html"><code class="language-css line-numbers">
#slideshow {
    width: 500px;
    margin: auto;
    position: relative;
}

#slideshow img {
    max-width: 100%;
    position: absolute;
    opacity: 0;
    transition: 0.5s all;
}

img#active {
    opacity: 1;
}
</code></pre>


<h3>Todo-lista</h3>

<h4>HTML</h4>
<p>
    <a href="/lectures/9/todo/index.html">Här hittar du exemplet live</a>
</p>
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
<pre class="language-javascript line-numbers" data-type="javascript"><code class="language-javascript line-numbers">
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
