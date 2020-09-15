<h2>Föreläsning 5 - Layout med CSS (1)</h2>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.1972%;"><iframe src="https://speakerdeck.com/player/03bef7a219c341d7b5a9607535081234" style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;" allowfullscreen scrolling="no" allow="encrypted-media"></iframe></div>

<hr>

<iframe width="560" height="315" src="https://www.youtube.com/embed/bHPOpGhWp7A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<hr>

<a href="/resources/pdf/5-2020.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner alla exempel i ZIP-format <a href="/lectures/5/5-2020.zip">här</a></p>

<h4>Exempel 1 - Boxar (HTML)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Test med CSS&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;div id=&quot;box-absolute&quot;&gt;Absolute&lt;/div&gt;
        &lt;div id=&quot;box-absolute-2&quot;&gt;Absolute&lt;/div&gt;

        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Lite inneh&aring;ll&lt;/div&gt;

    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exempel 1 - Boxar (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    background-color: #eee;
}

#box-absolute {
    position: fixed;
    width: 100px;
    height: 100px;
    background-color: red;
    right: 0px;
    z-index: 2;
}

#box-absolute-2 {
    position: fixed;
    width: 100px;
    height: 100px;
    background-color: blue;
    right: 0px;
    top: 50px;
    z-index: 3;
}

.box {
    background-color: green;
    text-align: center;
    width: 100px;
    border: 5px solid black;
    padding: 20px;
    box-sizing: border-box;
    float: left;
    margin: 5px;
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

body{
    margin: 0px;
}

h1 {
    font-family: 'Star Jedi', arial;
    background-color: black;
    color: white;
    text-align: center;
    padding: 20px;
    margin: 0px;
}

.star-wars-box {
    position: relative;
    width: 50%;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    background-color: #eee;
    box-shadow: 0 0 10px black;
    overflow: hidden;
}

.star-wars-box > img {
    float: right;
    height: 100px;
}

.star-wars-box > h2 {
    float: left;
    line-height: 100px;
    margin: 0px;
    padding-left: 10px;
}

.stars {
    position: absolute;
    right: 0px;
    height: 20px;
    width: 66px;
}

.stars > img {
    width: 10px;
}
</code></pre>

<h4>Exemepel 3 - Layout (HTML)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Layout med CSS&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;div id=&quot;wrapper&quot;&gt;
            &lt;header&gt;
                &lt;h1&gt;Min webbplats&lt;/h1&gt;
            &lt;/header&gt;
            &lt;nav&gt;
                &lt;h2&gt;Meny&lt;/h2&gt;
                &lt;ul&gt;
                    &lt;li&gt;Starsida&lt;/li&gt;
                    &lt;li&gt;Om webbplatsen&lt;/li&gt;
                    &lt;li&gt;Kontakta oss&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/nav&gt;
            &lt;main&gt;
                &lt;h2&gt;Inneh&aring;ll&lt;/h2&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
            &lt;/main&gt;
            &lt;footer&gt;&lt;a href=&quot;mailto:anton.tibblin@mau.se&quot;&gt;anton.tibblin@mau.se&lt;/a&gt;&lt;/footer&gt;
        &lt;/div&gt;

    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exemepel 3 - Layout (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
#wrapper {
    width: 50%;
    background-color: green;
    margin: auto;
}

#wrapper > header {
    background-color: red;
    overflow: hidden;
}

#wrapper > nav {
    background-color: green;
    width: 20%;
    float: left;
}

#wrapper > main {
    background-color: yellow;
    width: 80%;
    float: right;
}

#wrapper > footer {
    background-color: pink;
    clear: both;
}
</code></pre>