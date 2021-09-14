<h2>Föreläsning 5 - Layout med CSS (1)</h2>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.1972%;"><iframe src="https://speakerdeck.com/player/53e29b02cced4877bb8f50592089e218" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="encrypted-media;"></iframe></div>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/CmZ5erScom0?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe></div>

<hr>

<a href="/resources/pdf/5-2021.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner alla exempel i ZIP-format <a href="/lectures/5/Layout-med-css-1.zip">här</a></p>

<h4>Exempel 1 - Boxar (HTML)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;CSS - Positionering&lt;/title&gt;
        &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div id=&quot;absolut-box&quot;&gt;Absolut box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exempel 1 - Boxar (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    background-color: lightblue;
    margin: 0px;
}

div {
    background-color: tomato;
}

#absolut-box {
    position: absolute;
    width: 200px;
    height: 100px;
    top: 200px;
    left: 200px;
    z-index: 2;
}

.box {
    background-color: yellow;
    padding: 20px;
    border: 5px solid black;
    width: 50%;
    box-sizing: border-box;
    float: left;
    position: relative;
}
</code></pre>

<h4>Exemepel 2 - Star Wars (Star Wars)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Exempel&lt;/title&gt;
		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
	
		&lt;h1&gt;Star Wars&lt;/h1&gt; 
	
		&lt;div class=&quot;star-wars-box&quot;&gt;
			&lt;div class=&quot;stars&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
			&lt;/div&gt;
			&lt;h2&gt;Star Wars: Episode I&lt;/h2&gt;
			&lt;img src=&quot;images/1.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;
		
		&lt;div class=&quot;star-wars-box&quot;&gt;
			&lt;div class=&quot;stars&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
			&lt;/div&gt;
			&lt;h2&gt;Star Wars: Episode II&lt;/h2&gt;
			&lt;img src=&quot;images/2.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;
		
		&lt;div class=&quot;star-wars-box&quot;&gt;
			&lt;div class=&quot;stars&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
			&lt;/div&gt;
			&lt;h2&gt;Star Wars: Episode III&lt;/h2&gt;
			&lt;img src=&quot;images/3.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;
		
		&lt;div class=&quot;star-wars-box&quot;&gt;
			&lt;h2&gt;Star Wars: Episode IV&lt;/h2&gt;
			&lt;img src=&quot;images/4.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;
		
		&lt;div class=&quot;star-wars-box&quot;&gt;
			&lt;h2&gt;Star Wars: Episode V&lt;/h2&gt;
			&lt;img src=&quot;images/5.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;
		
		&lt;div class=&quot;star-wars-box&quot;&gt;
			&lt;h2&gt;Star Wars: Episode VI&lt;/h2&gt;
			&lt;img src=&quot;images/6.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;
		
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exemepel 2 - Star Wars (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
/* Ladda ner Star Wars-font här: Länk till Star Wars-font: https://allfont.net/download/star-jedi/ */

body {
    background-color: #eee;
    margin: 0px;
    margin-top: 100px;
}

h1 {
    font-family: 'Star Jedi', arial;
    background-color: black;
    color: white;
    margin-top: 0px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 0 20px #333;
    position: fixed;
    width: 100%;
    z-index: 2;
    top: 0px;
}

.star-wars-box {
    width: 75%;
    background-color: white;
    box-shadow: 0 0 5px #999;
    margin: 10px auto;
    clear: both;
    overflow: hidden;
    position: relative;
}

.star-wars-box > h2 {
    float: left;
    padding-left: 10px;
    line-height: 150px;
    margin: 0px;
}

.star-wars-box > img {
    float: right;
}

.stars {
    position: absolute;
    right: 0px;
    background-color: rgba(0, 0, 0, 0.5);
}

</code></pre>

<h4>Exemepel 3 - Layout (HTML)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;CSS - Layout&lt;/title&gt;
        &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.googleapis.com&quot;&gt;
        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.gstatic.com&quot; crossorigin&gt;
        &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Montserrat:wght@200&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div id=&quot;wrapper&quot;&gt;
            &lt;header&gt;
                &lt;h1&gt;Antons hemsida&lt;/h1&gt;
            &lt;/header&gt;
            &lt;nav&gt;
                &lt;h2&gt;Meny&lt;/h2&gt;
                &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/nav&gt;
            &lt;main&gt;
                &lt;h2&gt;Min fina rubrik&lt;/h2&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;

            &lt;/main&gt;
            &lt;footer&gt;
                &lt;p&gt;Copyright Anton Tibblin&lt;/p&gt;
            &lt;/footer&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exemepel 3 - Layout (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    font-family: 'Montserrat', sans-serif;
}

#wrapper {
    width: 80%;
    margin: auto;
    box-shadow: 0 0 10px #333;
}

header {
    background-color: #eee;
    width: 100%;
    border-bottom: 2px solid #333;
}

h1 {
    margin: 0px;
    padding: 20px;
}

nav {
    width: 25%;
    padding: 20px;
    float: left;
    box-sizing: border-box;
}

main {
    background-color: darkolivegreen;
    width: 75%;
    float: left;
    background-color: #eee;
    padding: 20px;
    box-sizing: border-box;
}

footer {
    width: 100%;
    clear: both;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
    background-color: #eee;
    border-top: 2px solid #333;
}
</code></pre>