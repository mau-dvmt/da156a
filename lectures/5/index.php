<h2>Föreläsning 5 - Layout med CSS (1)</h2>


<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/BQCDpdv3Jf9Jto" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/kWEDNvqejaA?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;"></iframe></div>

<hr>

<a href="/resources/pdf/5-2023.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner alla exempel i ZIP-format <a href="/lectures/5/5-2023-ex.zip">här</a></p>

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
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;
        &lt;div&gt;Box&lt;/div&gt;

    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exempel 1 - Boxar (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
div {
    background-color: aqua;
    width: 50px;
    height: 50px;
    margin: 5px;
    margin-left: 500px;
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
			&lt;div class=&quot;stars&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
			&lt;/div&gt;
			&lt;h2&gt;Star Wars: Episode IV&lt;/h2&gt;
			&lt;img src=&quot;images/4.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;
		
		&lt;div class=&quot;star-wars-box&quot;&gt;
			&lt;div class=&quot;stars&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
			&lt;/div&gt;
			&lt;h2&gt;Star Wars: Episode V&lt;/h2&gt;
			&lt;img src=&quot;images/5.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;
		
		&lt;div class=&quot;star-wars-box&quot;&gt;
			&lt;div class=&quot;stars&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Star&quot;&gt;
			&lt;/div&gt;
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
    width: 50%;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;
    background-color: #eee;
    box-shadow: 0 0 10px black;
    overflow: hidden;
    position: relative;
}

.star-wars-box > img {
    float: right;
    height: 100px;
}

.star-wars-box > h2 {
    float: left;
    line-height: 100px;
    margin: 0px;
    padding-left: 20px;
}

.stars {
    position: absolute;
    right: 0px;
    bottom: 0px;
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
        &lt;div id=&quot;container&quot;&gt;
            &lt;header&gt;
                &lt;h1&gt;Webbsida&lt;/h1&gt;
            &lt;/header&gt;
            &lt;nav&gt;
                &lt;h2&gt;Meny&lt;/h2&gt;
                &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/nav&gt;
            &lt;main&gt;
                &lt;h2&gt;Huvudinneh&aring;ll&lt;/h2&gt;
                &lt;p&gt;Lite text...&lt;/p&gt;
                &lt;p&gt;Lite text...&lt;/p&gt;
                &lt;p&gt;Lite text...&lt;/p&gt;
                &lt;p&gt;Lite text...&lt;/p&gt;
                &lt;p&gt;Lite text...&lt;/p&gt;
                &lt;p&gt;Lite text...&lt;/p&gt;
                &lt;p&gt;Lite text...&lt;/p&gt;
            &lt;/main&gt;
            &lt;footer&gt;
                &lt;h3&gt;Kontakta oss&lt;/h3&gt;
                &lt;p&gt;
                    &lt;a href=&quot;mailto:anton.tibblin@mau.se&quot;&gt;Maila oss h&auml;r&lt;/a&gt;
                &lt;/p&gt;
            &lt;/footer&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exemepel 3 - Layout (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    background-color: aqua;
}

#container {
    background-color: burlywood;
    width: 80%;
    margin: auto;
}

#container > header {
    background-color: beige;
    overflow: hidden;
}

#container > nav {
    background-color: burlywood;
    float: left;
    width: 20%;
    overflow: hidden;
}

#container > main {
    background-color: white;
    width: 80%;
    float: right;
    border-left: 5px solid black;
    box-sizing: border-box;
}

#container > footer {
    background-color: beige;
    clear: both;
}
</code></pre>