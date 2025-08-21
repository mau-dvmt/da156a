<h2>Föreläsning 7 - Responsiv webbutveckling</h2>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/6hJ7Ng6e3gvos3" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>

<a href="/resources/pdf/2024ResponsivWebbutveckling.pdf">Ni kan ladda ner PDF:n här</a>.

<hr>

<h3>Dagens exempel</h3>

<h4>Exempel 1 - Media queries & brytpunkter</h4>
<h5>HTML</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Responsiv Design&lt;/title&gt;
		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot; media=&quot;screen&quot;&gt;
		&lt;link href=&quot;print.css&quot; rel=&quot;stylesheet&quot; media=&quot;print&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;nav&gt;
			&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;
			&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;
			&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;
			&lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;
		&lt;/nav&gt;
		&lt;h1&gt;Min webbsida&lt;/h1&gt;
		&lt;p&gt;Lite text...&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>CSS - print.css</h5>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
h1 {
    text-align: center;
}

nav {
    display: none;
}
</code></pre>

<h5>CSS - style.css</h5>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    background-color: aqua;
    font-family: 'Courier New', Courier, monospace;
}

@media screen and (max-width: 600px) {
    body {
        background-color: green;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
}
</code></pre>

<h4>Exempel 2 - Responsiv design (block-element & float)</h4>
<h5>HTML</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
		&lt;title&gt;Responsiv Design&lt;/title&gt;
		&lt;link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'&gt;
		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
		&lt;script&gt;
			//alert(document.documentElement.clientWidth);
		&lt;/script&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;div id=&quot;wrapper&quot;&gt;
			&lt;header&gt;
				&lt;img src=&quot;images/mau.png&quot; alt=&quot;Malm&ouml; H&ouml;gskola&quot;&gt;
				&lt;h1&gt;Responsiv design&lt;/h1&gt;
				&lt;nav&gt;
					&lt;a href=&quot;#&quot; class=&quot;chosen&quot;&gt;Hem&lt;/a&gt;
					&lt;a href=&quot;/&quot;&gt;Nyheter&lt;/a&gt;
					&lt;a href=&quot;#&quot;&gt;Om&lt;/a&gt;
					&lt;a href=&quot;#&quot;&gt;Kontakt&lt;/a&gt;
				&lt;/nav&gt;
			&lt;/header&gt;
			&lt;main&gt;
				&lt;section&gt;
					&lt;h2&gt;Lorem ipsum dolor&lt;/h2&gt;
					&lt;img src=&quot;images/bild1.jpg&quot; alt=&quot;&quot;&gt;
					&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/p&gt;
					&lt;p&gt;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;
				&lt;/section&gt;
				&lt;section&gt;
					&lt;h2&gt;Ut enim ad minim&lt;/h2&gt;
					&lt;p&gt;Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;
				&lt;/section&gt;
			&lt;/main&gt;
			&lt;footer&gt;
				&copy; Typisk copyrighttext 2021
			&lt;/footer&gt;
		&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>CSS</h5>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
/*
	Background from: http://subtlepatterns.com/
	Fonts from: https://www.google.com/fonts
*/
body{
	background-image:url("images/seamless_paper_texture.png");
	font-family: 'Francois One', sans-serif;
}

img{
	max-width: 100%;
}

#wrapper{
	width:90%;
	max-width: 900px;
	margin: auto;
	background-color: #fff;
	overflow:hidden;
	padding: 20px;
	box-shadow: 0 0 10px #666;
	box-sizing: border-box;
}

#wrapper > header{
	overflow: hidden;
	text-align:center;
}

#wrapper > header img{
	max-width: 150px;
}

#wrapper > header > nav a{
	display:block;
	width: 25%;
	color: #000;
	background-color: #eee;
	padding: 10px 0;
	float:left;
}

#wrapper > header > nav a:hover{
	background-color: #ddd;
}

#wrapper > header > nav .chosen{
	background-color: #ddd;
}

#wrapper > main > section{
	width: 46%;
	padding: 2%;
	float: left;
}

footer{
	clear:both;
	text-align: center;
	border-top: 1px solid #333;
	padding-top: 20px;
}

@media  screen and (max-width: 600px) {
	#wrapper > header > nav a {
		width: 100%;
	}

	#wrapper > main > section {
		width: 96%;
	}

	#wrapper {
		width: 100%;
	}

	body {
		margin: 0px;
	}
}
</code></pre>

<h4>Exempel 3 - Responsiv layout: CSS grid</h4>
<h5>HTML</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Demo&lt;/title&gt;
		&lt;link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'&gt;
		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	
	&lt;body&gt;
	
		&lt;div id=&quot;grid&quot;&gt;
			&lt;header&gt;
				&lt;img src=&quot;images/mau.png&quot; alt=&quot;Malm&ouml; H&ouml;gskola&quot;&gt;
				&lt;h1&gt;Exempel p&aring; responsiv webbdesign&lt;/h1&gt;
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
				&lt;h2&gt;Inneh&aring;ll&lt;/h2&gt;
				&lt;img src=&quot;images/bild1.jpg&quot; alt=&quot;Bild p&aring; Malm&ouml;&quot;&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tellus erat, facilisis eu dui vel, porta sodales tellus. Donec convallis quam sed justo ultrices, et aliquet dui tempus. Nam interdum, lacus sed posuere dignissim, sem dolor sollicitudin neque, at congue dui augue et sapien. Proin rutrum ligula id arcu lobortis, vel tristique ipsum efficitur. Cras interdum rutrum neque nec lacinia. Ut consequat neque nec sagittis eleifend. Praesent vulputate sem a est egestas dictum id non nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam porttitor tellus sed nibh ornare, sit amet ullamcorper libero tincidunt. Phasellus luctus mi at molestie venenatis. Curabitur molestie arcu eget nisl volutpat, eu faucibus orci lobortis. Maecenas et iaculis erat. Nullam iaculis libero ante, ut finibus sapien posuere ac. Maecenas vel semper nibh, ac cursus urna.&lt;/p&gt;
				&lt;p&gt;Nunc dictum elit ut velit iaculis gravida. Aenean et turpis id turpis ullamcorper eleifend eget quis lacus. Curabitur et odio et nisl laoreet cursus sed dictum sapien. Aliquam tempus nulla felis, et vestibulum lorem congue ut. Donec tempus, neque sed commodo feugiat, massa dui rutrum magna, nec faucibus enim enim eget tellus. Etiam ut laoreet arcu. Donec at nunc turpis. Sed fermentum nec quam sit amet condimentum. Mauris lobortis a mauris vel malesuada. Etiam rutrum mauris in justo fermentum maximus. Duis a est at quam auctor egestas eu non erat. Quisque efficitur consequat erat sed tristique. Duis iaculis risus tellus, non facilisis neque convallis sit amet. Vestibulum posuere, elit eu lobortis ullamcorper, sem lectus egestas est, quis gravida erat neque non odio. Integer porta turpis eu augue facilisis porta. Phasellus sed dui interdum, tempus tortor congue, consectetur lorem.&lt;/p&gt;
			&lt;/main&gt;
			&lt;aside&gt;
				&lt;h2&gt;L&auml;s mer!&lt;/h2&gt;
				&lt;img src=&quot;images/social-media-icons.png&quot; alt=&quot;Social media&quot;&gt;
			&lt;/aside&gt;
			&lt;footer&gt;&copy; Typisk copyrighttext 2019&lt;/footer&gt;
		&lt;/div&gt;
	
		
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>CSS</h5>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
/*
	Background from: http://subtlepatterns.com/
	Fonts from: https://www.google.com/fonts
*/
body{
	background-image:url("images/seamless_paper_texture.png");
	font-family: 'Francois One', sans-serif;
}

#grid {
	width: 100%;
	margin: auto;
	background-color: white;
	box-shadow: 0 0 10px #aaa;
	display: grid;
	grid-template-columns: minmax(100px, 200px) 1fr minmax(100px, 200px);
	grid-template-rows: auto auto auto;
	grid-template-areas:
		"header header header"
		"nav main aside"
		"footer footer footer";
}

#grid > * {
	padding: 10px;
}

#grid > aside h2, #grid > nav h2 {
	text-align: center;
}

#grid > header {
	grid-area: header;
	line-height: 50px;
	text-align: center;
	border-bottom: 1px solid #ccc;
}

#grid > header img{
	float: left;
	height: 90px;
}

#grid > nav {
	grid-area: nav;
}

#grid > nav ul{
	margin: 0px;
	padding: 0px;
	list-style: none;
}

#grid > nav a{
	display: block;
	background-color: #eee;
	border-bottom: 1px solid #ccc;
	text-decoration: none;
	padding: 10px;
	color: #333;
	transition: all 0.5s;
}

#grid > nav a:hover{
	background-color: #ddd;
}

#grid > main {
	grid-area: main;
}

#grid > main img{
	width: 50%;
	float: right;
	margin: 0 0 10px 10px;
	border: 5px solid #fff;
	box-shadow: 0 0 5px #aaa;
}

#grid > aside {
	grid-area: aside;
}

#grid > aside img {
	max-width: 100%;
}

#grid > footer {
	grid-area: footer;
	text-align: center;
	border-top: 1px solid #ccc;
}

@media  screen and (max-width: 900px) {
	#grid {
		grid-template-rows: auto auto 1fr auto;
		grid-template-columns: 200px 1fr;
		grid-template-areas: 
		"header header"
		"nav main"
		"aside main"
		"footer footer";
	}
}

@media  screen and (max-width: 600px) {
	#grid {
		grid-template-rows: auto auto auto auto;
		grid-template-columns: 1fr;
		grid-template-areas: 
		"header"
		"nav"
		"aside"
		"main"
		"footer";
	}
}
</code></pre>





<!--
<p> Ni kan ladda ner alla exempel i ZIP-format <a href="/lectures/7/2023-Responsiv.zip">här</a></p>

<hr>


<h3>Inspelning från två år sedan året</h3>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/7A3T9PgM8FY?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe></div>

<hr>

<h3>Videons exempel</h3>

<p> Ni kan ladda ner alla exempel i ZIP-format <a href="/lectures/7/7-ex.zip">här</a></p>
-->