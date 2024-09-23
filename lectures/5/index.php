<h2>Föreläsning 5 - Layout med CSS (1)</h2>


<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/BQCDpdv3Jf9Jto" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>
<!--
<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/kWEDNvqejaA?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;"></iframe></div>

<hr>
-->

<a href="/resources/pdf/5-2023.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner alla exempel i ZIP-format <a href="/lectures/5/layout-ht24.zip">här</a></p>

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
        &lt;div id=&quot;special-box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
        &lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
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
    background-color: aqua;
}

#special-box {
    background-color: burlywood;
    padding: 25px;
    border: 5px solid white;
    width: 100px;
    box-sizing: border-box;

    position: fixed;
    left: 150px;
    top: 150px;
}

.box {
    background-color: yellow;
    padding: 25px;
    border: 5px solid green;
    width: 100px;

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

body {
    margin: 0px;
}

h1 {
    font-family: "Star Jedi", arial;
    background-color: black;
    color: white;
    text-align: center;
    padding: 20px;
    margin: 0px 0px 25px 0px;
}

.star-wars-box {
    position: relative;
    width: 50%;
    margin: 10px auto;
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
    padding-left: 20px;
    line-height: 100px;
    margin: 0px;
}

.stars {
    position: absolute;
    right: 0px;
    top: 0px;
    background-color: #eeeeeea5;
    min-width: 100px;
}

.stars > img {
    width: 13px;
    float: right;
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
                &lt;img src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiREw-C885pdG2CLEzLSLxKDa5CyV2frME5g&amp;s&quot; alt=&quot;Malm&ouml; universitet logotyp&quot;&gt;
                &lt;h1&gt;Min webbsida&lt;/h1&gt;
                &lt;form action=&quot;#&quot;&gt;
                    &lt;input type=&quot;search&quot; placeholder=&quot;S&ouml;k h&auml;r...&quot; &gt;
                    &lt;input type=&quot;submit&quot; name=&quot;query&quot;&gt;
                &lt;/form&gt;
            &lt;/header&gt;
            &lt;nav&gt;
                &lt;h2&gt;Meny&lt;/h2&gt;
                &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/nav&gt;
            &lt;main&gt;
                &lt;h2&gt;Huvudinneh&aring;ll&lt;/h2&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
                &lt;p&gt;Lite text&lt;/p&gt;
            &lt;/main&gt;
            &lt;footer&gt;
                &lt;h2&gt;Kontakta oss&lt;/h2&gt;
                &lt;p&gt;Vi finns p&aring; ....&lt;/p&gt;
            &lt;/footer&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exemepel 3 - Layout (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    background-color: aqua;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

#wrapper > main > h2, #wrapper > footer > h2 {
    text-align: center;
}

#wrapper {
    width: 80%;
    margin: 20px auto;
    background-color: #2E86AB;
}

#wrapper > * {
    min-height: 100px;
    overflow: hidden;
    box-sizing: border-box;
    padding: 20px;
}

#wrapper > header {
    background-color:#F5F749;
}

#wrapper > header > img {
    float: left;
    height: 100px;
    margin-right: 20px;
}

#wrapper > header > h1 {
    line-height: 100px;
    margin: 0px;
    float: left;
}

#wrapper > header > form {
    float: right;
    line-height: 100px;
}

form > input {
    height: 30px;
}

#wrapper > nav {
    background-color: #2E86AB;
    float: left;
    width: 20%;
}

#wrapper > main {
    background-color: #F24236;
    width: 80%;
}

#wrapper > footer {
    background-color: #F5F749;
}
</code></pre>