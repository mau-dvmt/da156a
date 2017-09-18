<h2>Föreläsning 5 - Layout med CSS</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/tglIUyWaqtg0jd" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/secret/tglIUyWaqtg0jd" title="HT17 - DA156A - Layout med HTML &amp; CSS" target="_blank">HT17 - DA156A - Layout med HTML &amp; CSS</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner alla exempel i ZIP-format <a href="/lectures/5/ex.zip">här</a></p>

<h4>Exemepel 1 - HTML</h4>
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

<h4>Exemepel 1 - CSS</h4>
<pre class="language-markup line-numbers" data-type="css"><code class="language-markup line-numbers">
body {
	background-color: #eee;
	font-family: 'Mukta Malar', sans-serif;
	margin: 0px;
	padding-top: 80px;
}

body > h1 {
	text-align: center;
	background-color: black;
	color: #fff;
	margin: 0px;
	position: fixed;
	z-index: 2;
	left: 0;
	right: 0;
	top: 0;
}

.movie {
	width: 500px;
	background-color: #fff;
	margin: 10px auto;
	overflow: hidden;
	height: 150px;
	box-shadow: 0 0 8px #888;
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

.movie > .rating {
	width: 100px;
	height: 25px;
	background-color: rgba(255, 255, 255, 0.5);
	right: 0;
	top: 0;
	position: absolute;
}

.movie > .rating > img {
	float: right;
	height: 17px;
	margin: 2px;
}
</code></pre>

<h4>Exemepel 2 - HTML</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Exempel&lt;/title&gt;
		&lt;link href=&quot;style.css&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;div id=&quot;wrapper&quot;&gt;
			&lt;header&gt;
				&lt;h1&gt;Min Webbplats&lt;/h1&gt;
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
				&lt;h2&gt;Inneh&aring;ll&lt;/h2&gt;
				&lt;p&gt;Lite text...&lt;/p&gt;
				&lt;p&gt;Lite text...&lt;/p&gt;&lt;p&gt;Lite text...&lt;/p&gt;
				&lt;p&gt;Lite text...&lt;/p&gt;
				&lt;p&gt;Lite text...&lt;/p&gt;
				&lt;p&gt;Lite text...&lt;/p&gt;
				&lt;p&gt;Lite text...&lt;/p&gt;
			&lt;/main&gt;
			&lt;footer&gt;
				Made by Anton
			&lt;/footer&gt;
		&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exemepel 2 - CSSL</h4>
<pre class="language-markup line-numbers" data-type="css"><code class="language-markup line-numbers">
body {
	background-color: #eee;
}

#wrapper {
	min-width: 600px;
	max-width: 1200px;
	background-color: #ccc;
	overflow: hidden;
	margin: 20px auto;
}

#wrapper > header {
	background-color: #bbb;
}

#wrapper > header > h1 {
	margin: 0px;
	padding: 20px;
	text-align: center;
}

#wrapper > nav {
	background-color: #ccc;
	width: 20%;
	padding: 10px;
	float: left;
	box-sizing: border-box;
}

#wrapper > main {
	background-color: #ddd;
	width: 80%;
	padding: 10px;
	float: left;
	box-sizing: border-box;
}

#wrapper > footer {
	background-color: #bbb;
	height: 50px;
	line-height: 50px;
	text-align: center;
	clear: both;
}
</code></pre>
