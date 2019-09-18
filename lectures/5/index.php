<h2>Föreläsning 5 - Layout med CSS</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/5tJqzHD71jdT3V" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht19-da156a-layout-med-css" title="HT19 - DA156A - Layout med CSS" target="_blank">HT19 - DA156A - Layout med CSS</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<a href="/resources/pdf/5.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner alla exempel i ZIP-format <a href="/lectures/5/ex.zip">här</a></p>

<h4>Exempel 1 - Boxar (HTML)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Exempel - Float&lt;/title&gt;
		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box&lt;/div&gt;
		&lt;div class=&quot;box&quot;&gt;Box 2&lt;/div&gt;				

		&lt;div id=&quot;new-box&quot;&gt;Coola boxen&lt;/div&gt;

	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exempel 1 - Boxar (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    background-color: aqua;
}

.box {
    background-color: blueviolet;
    padding: 50px;
    width: 25%;
    border: 5px solid white;
    box-sizing: border-box;

    position: relative;

    float: left;
}

.box:nth-child(odd) {
    background-color: aquamarine;
}

#new-box {
    background-color: coral;
    padding: 20px;
    border: 5px solid black;
    width: 100px;

    position: fixed;
    right: 100px;
    bottom: 100px;
}
</code></pre>

<h4>Exemepel 2 - Star Wars (Star Wars)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Exempel&lt;/title&gt;
		&lt;link href=&quot;https://fonts.googleapis.com/css?family=Mukta+Malar&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;

		&lt;h1&gt;Star Wars&lt;/h1&gt;

		&lt;div class=&quot;movie&quot;&gt;
			&lt;div class=&quot;rating&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Rating star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Rating star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Rating star&quot;&gt;
			&lt;/div&gt;
			&lt;h2&gt;Star Wars: Episode I&lt;/h2&gt;
			&lt;img src=&quot;images/1.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;

		&lt;div class=&quot;movie&quot;&gt;
		      &lt;div class=&quot;rating&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Rating star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Rating star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Rating star&quot;&gt;
			&lt;/div&gt;
			&lt;h2&gt;Star Wars: Episode II&lt;/h2&gt;
			&lt;img src=&quot;images/2.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;

		&lt;div class=&quot;movie&quot;&gt;
		      &lt;div class=&quot;rating&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Rating star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Rating star&quot;&gt;
				&lt;img src=&quot;images/star.png&quot; alt=&quot;Rating star&quot;&gt;
			&lt;/div&gt;
			&lt;h2&gt;Star Wars: Episode III&lt;/h2&gt;
			&lt;img src=&quot;images/3.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;

		&lt;div class=&quot;movie&quot;&gt;
			&lt;h2&gt;Star Wars: Episode IV&lt;/h2&gt;
			&lt;img src=&quot;images/4.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;

		&lt;div class=&quot;movie&quot;&gt;
			&lt;h2&gt;Star Wars: Episode V&lt;/h2&gt;
			&lt;img src=&quot;images/5.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;

		&lt;div class=&quot;movie&quot;&gt;
			&lt;h2&gt;Star Wars: Episode VI&lt;/h2&gt;
			&lt;img src=&quot;images/6.png&quot; alt=&quot;Star Wars poster&quot;&gt;
		&lt;/div&gt;

	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exemepel 2 - Star Wars (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    background-color: #eee;
    padding-top: 75px;
}

h1 {
    position: fixed;
    background-color: black;
    color: white;
    text-align: center;
    padding: 10px;
    box-shadow: 0 0 10px #333333;
    left: 0px;
    right: 0px;
    top: 0px;
    margin:0px;

    z-index: 1;
}

.movie {
    width: 500px;
    margin: 10px auto;
    border: 2px solid black;
    background-color: white;
    box-shadow: 0 0 10px #999;
    overflow: hidden;
    height: 150px;

    position: relative;
}

.movie > h2 {
    float: left;
    line-height: 150px;
    margin: 0px;
    padding-left: 10px;
}

.movie > img {
    float: right;
    height: 150px;
}

.stars {
    position: absolute;
    right: 0px;
    background-color: rgba(255, 255, 255, 0.4);
    width: 100px;
    text-align: center;
}
</code></pre>

<h4>Exemepel 3 - Layout (HTML)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Exempel&lt;/title&gt;
		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;div id=&quot;wrapper&quot;&gt;
			&lt;header&gt;Header&lt;/header&gt;
			&lt;nav&gt;Nav&lt;/nav&gt;
			&lt;main&gt;
				&lt;p&gt;Main&lt;/p&gt;
				&lt;p&gt;Main&lt;/p&gt;
				&lt;p&gt;Main&lt;/p&gt;
				&lt;p&gt;Main&lt;/p&gt;
				&lt;p&gt;Main&lt;/p&gt;
				&lt;p&gt;Main&lt;/p&gt;
				&lt;p&gt;Main&lt;/p&gt;
				&lt;p&gt;Main&lt;/p&gt;
				&lt;p&gt;Main&lt;/p&gt;
				&lt;p&gt;Main&lt;/p&gt;
			&lt;/main&gt;
			&lt;footer&gt;Footer&lt;/footer&gt;
		&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exemepel 3 - Layout (CSS)</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
     background-color: #eee;
}

#wrapper {
    width: 800px;
    margin: 20px auto;
    background-color: green;
}

#wrapper > * {
    min-height: 100px;
}

#wrapper > header {
    background-color: blue;
}

#wrapper > nav {
    background-color: green;
    float: left;
    width: 20%;
}

#wrapper > main {
    background-color: red;
    float: right;
    width: 80%;
}

#wrapper > footer {
    background-color: blue;
    clear: both;
}
</code></pre>