<h2>Föreläsning 7 - JavaScript, forts.</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/AKzXogmraXiFKt" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht16-da156a-javascript-forts" title="HT16 - DA156A - JavaScript forts." target="_blank">HT16 - DA156A - JavaScript forts.</a> </strong> from <strong><a href="//www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/6/Webbsite.zip">här</a></p>

<h4>Ex. 1</h4>

<h5>index.html</h4>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;JS - Exempel&lt;/title&gt;
		&lt;script src="script.js" type="text/javascript"&gt;&lt;/script&gt;
	&lt;/head&gt;
	&lt;body&gt;
        &lt;!-- Inget innehåll --&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>script.js</h4>
<pre class="language-javascript line-numbers codepen" data-type="javascript"><code class="language-javascript line-numbers">
/*
	Detta script frågar användaren om budget och utgifter.
    Visar sedan användaren olika resultat beroende på om budgeten
    hålls eller inte.
*/
// Frågar användaren vilken budget som gäller
var budget = prompt("Vilken budget har du?");
// Frågar användaren om vilka totala utgifter
var expenses = prompt("Vilka utgifter har du?");
// Beräknar skillnaden mellan budget och utgifter
var result = parseInt(budget) - parseInt(expenses);

if(result > 0){
    // Om resultatet är positivt => pengar kvar
	alert("Grattis! Du klarade din budget!");
}else if(result == 0){
    // Om resultatet är +/- 0
	alert("Du gick precis på budget");
}else{
    // Om resulatet är negativt
	alert("Detta gick ju inte så bra...");
}
</code></pre>

<h4>Ex. 2</h4>

<h5>index.html</h4>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;JS - Exempel&lt;/title&gt;
		&lt;script src="script.js" type="text/javascript"&gt;&lt;/script&gt;
	&lt;/head&gt;
	&lt;body&gt;
        &lt;!-- Inget innehåll --&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>script.js</h4>
<pre class="language-javascript line-numbers codepen" data-type="javascript"><code class="language-javascript line-numbers">
// En for-loop som går 10 varv
for(var i = 0; i < 10; i++){
    // Skriver ut i dokumentet "Varv: x" i webbläsaren
	document.write("Varv: " + i + "&lt;br&gt;");
}

// Fel svar är angett (eller inget svar är angett)
var correctAnswer = false;
// En while-loop som körs tills användaren svarar korrekt på frågan
while(correctAnswer == false){
    // Frågar användaren vår fråga
	var answer = prompt("Vilket är Sveriges bästa fotbollslag?");

    // Kontrollerar om användaren svarar korrekt
	if(answer.toLowerCase() == "elfsborg"){
        // Om användaren svarar korrekt, så kommer loopen sluta att köras
		correctAnswer = true;
	}
}
</code></pre>

<h4>Ex. 3</h4>

<h5>index.html</h4>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;JS - Exempel&lt;/title&gt;
		&lt;script src="script.js" type="text/javascript"&gt;&lt;/script&gt;
	&lt;/head&gt;
	&lt;body&gt;
        &lt;button onmouseover="converter()"&gt;
			Klicka här för att konvertera kronor till dollar!
		&lt;/button&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>script.js</h4>
<pre class="language-javascript line-numbers codepen" data-type="javascript"><code class="language-javascript line-numbers">
/*
    En funktion som konverterar kronor till dollar
    @parameter (integer)    Antal kronor
    @returns   (float)      Antal dollar
*/
function krToDollar(kr){
    // Växelkursen är just nu 8.49
	var dollar = kr / 8.49;
	return dollar;
}

/*
    En funktion som frågar användaren att konvertera
    kronor till dollar, och sedan visar upp resultatet.
*/
function converter(){
    // Frågar användaren efter antal kronor
	var amount = prompt("Hur många kr vill du konvertera till dollar?");
    // Beräknar antalet dollar
	var result = krToDollar(amount);
    // Visar upp resultatet
	alert(amount + "kr blir $" + result);
}

//converter();
</code></pre>

<h4>Ex. 4</h4>

<h5>index.html</h4>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Min webbplats!&lt;/title&gt;
		&lt;script type=&quot;text/javascript&quot;&gt;
			/*
				Att k&ouml;ra i utvecklingskonsolen i Chrome (F12)

				Att leta upp taggar i ett dokument
				----------------------------------
				1. Leta upp alla rubriker av typen h1
				document.getElementsByTagName(&quot;h1&quot;)

				2. Leta upp alla rubriker av typen h3
				document.getElementsByTagName(&quot;h3&quot;)

				3. Leta upp alla paragrafer
				document.getElementsByTagName(&quot;p&quot;)

				4. Hitta den andra paragragen
				document.getElementsByTagName(&quot;p&quot;)[1]


				Att leta upp specifika element genom att referera till class
				------------------------------------------------------------
				1. Hitta element med klassen &quot;list&quot;
				document.getElementsByClassName(&quot;list&quot;)


				Att leta upp specifika element genom att referera till id
				---------------------------------------------------------
				1. Leta upp elementet med id &quot;welcome&quot;
				document.getElementById(&quot;welcome&quot;)

				2. Leta upp elementet med id &quot;movies&quot;
				document.getElementById(&quot;movies&quot;)


				Att leta upp barn till ett element
				----------------------------------
				1. Leta upp barn till listan med id &quot;movies&quot;
				document.getElementById(&quot;movies&quot;).childNodes

				2. Leta upp ett specifikt barn (ange nr)
				document.getElementById(&quot;movies&quot;).childNodes[1]

				3. Leta upp det f&ouml;rsta barnet till id &quot;movies&quot;
				document.getElementById(&quot;movies&quot;).firstChild


				Att hitta syskon till barn (och f&ouml;r&auml;lder)
				-----------------------------------------
				1. Vi utg&aring;r fr&aring;n #movies och tar syskonet efter (f&ouml;rsta raden ger tom textnod)
				document.getElementById(&quot;movies&quot;).nextSibling
				document.getElementById(&quot;movies&quot;).nextSibling.nextSibling

				2. Vi utg&aring;r fr&aring;n #movies och tar syskonet f&ouml;re (f&ouml;rsta raden ger tom textnod)
				document.getElementById(&quot;movies&quot;).previousSibling
				document.getElementById(&quot;movies&quot;).previousSibling.previousSibling

				3. Hitta f&ouml;r&auml;ldern till #movies
				document.getElementById(&quot;movies&quot;).parentNode

			*/
		&lt;/script&gt;
		&lt;script src=&quot;script.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1 id=&quot;welcome&quot;&gt;V&auml;lkommen!&lt;/h1&gt;
		&lt;p&gt;&lt;i&gt;Till min vackra webbplats =)&lt;/i&gt;&lt;/p&gt;
		&lt;h2&gt;Inneh&aring;ll&lt;/h2&gt;
		&lt;p&gt;H&auml;r kommer en snabb inneh&aring;llsf&ouml;rteckning:&lt;/p&gt;
		&lt;ol class=&quot;list&quot;&gt;
			&lt;li&gt;Allm&auml;n info&lt;/li&gt;
			&lt;li&gt;Favoritfilmer&lt;/li&gt;
			&lt;li&gt;Bra l&auml;nkar&lt;/li&gt;
		&lt;/ol&gt;
		&lt;h3&gt;1. Allm&auml;n info&lt;/h3&gt;
		&lt;img src=&quot;test.jpg&quot; width=&quot;200&quot; alt=&quot;Anton Tibblin&quot;&gt;
		&lt;p&gt;H&auml;r &auml;r jag!&lt;/p&gt;
		&lt;h3&gt;2. Favoritfilmer&lt;/h3&gt;
		&lt;ol id=&quot;movies&quot; class=&quot;list&quot;&gt;
			&lt;li&gt;Star Wars&lt;/li&gt;
			&lt;li&gt;Fight Club&lt;/li&gt;
			&lt;li&gt;American Beauty&lt;/li&gt;
		&lt;/ol&gt;
		&lt;h3&gt;3. Bra l&auml;nkar&lt;/h3&gt;
		&lt;ul class=&quot;list&quot;&gt;
			&lt;li&gt;&lt;a href=&quot;http://google.se&quot;&gt;Google&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;http://mah.se&quot;&gt;Malm&ouml; H&ouml;gskola&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;http://mah.se/lms&quot;&gt;It's Learning&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>
