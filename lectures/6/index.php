<h2>Föreläsning 6 - Layout med CSS (2)</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/d9E3jWKpeli8uV" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht18-da156a-layout-med-css-2" title="HT18 - DA156A - Layout med CSS (2)" target="_blank">HT18 - DA156A - Layout med CSS (2)</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner alla exempel i ZIP-format <a href="/lectures/6/ex-2018.zip">här</a></p>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/6/Webbsite.zip">här</a></p>

<h4>Animation</h4>

<p><a href="/lectures/6/Animation/a.html">Surfa till exemplet här</a></p>

<h5>HTML</h5>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Demo&lt;/title&gt;
		&lt;link href=&quot;https://fonts.googleapis.com/css?family=Ubuntu&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;link href=&quot;reset.css&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;link href=&quot;a.css&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;link href=&quot;animate.css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	
	&lt;body&gt;
		&lt;article id=&quot;cards&quot;&gt;
			&lt;h1&gt;Demo - bilder&lt;/h1&gt;
			&lt;figure&gt;
				&lt;img src=&quot;images/island.jpg&quot; alt=&quot;Semesterbild&quot;&gt;
				&lt;figcaption&gt;Island&lt;/figcaption&gt;
			&lt;/figure&gt;
			&lt;figure&gt;
				&lt;img src=&quot;images/malta.jpg&quot; alt=&quot;Semesterbild&quot;&gt;
				&lt;figcaption&gt;Malta&lt;/figcaption&gt;
			&lt;/figure&gt;
			&lt;figure&gt;
				&lt;img src=&quot;images/newcastle.jpg&quot; alt=&quot;Semesterbild&quot;&gt;
				&lt;figcaption&gt;Newcastle&lt;/figcaption&gt;
			&lt;/figure&gt;
			&lt;figure&gt;
				&lt;img src=&quot;images/usa.jpg&quot; alt=&quot;Semesterbild&quot;&gt;
				&lt;figcaption&gt;USA&lt;/figcaption&gt;
			&lt;/figure&gt;
		&lt;/article&gt;
		
		&lt;article id=&quot;runner&quot;&gt;
			&lt;h1&gt;Demo - runner&lt;/h1&gt;
			&lt;div id=&quot;runner-box-btn&quot;&gt;Starta animation&lt;/div&gt;
			&lt;div id=&quot;runner-box&quot;&gt;&lt;/div&gt;
		&lt;/article&gt;
		
		&lt;article id=&quot;animate-test&quot;&gt;
			&lt;h1&gt;Fler tips: &lt;a href=&quot;https://daneden.github.io/animate.css/&quot;&gt;Animate.css&lt;/a&gt;&lt;/h1&gt;
			&lt;div class=&quot;animate-test animated bounceOutLeft&quot;&gt;Test&lt;/div&gt;
			&lt;div class=&quot;animate-test animated jello&quot;&gt;Test&lt;/div&gt;
			&lt;div class=&quot;animate-test animated rotateOut&quot;&gt;Test&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>CSS</h5>
<pre class="language-css line-numbers codepen" data-type="javascript"><code class="language-css line-numbers">
body {
	margin: 0px;
	font-family: 'Ubuntu', sans-serif;
}

h1 {
	text-align: center;
	font-size: 30px;
	padding: 20px;
}

#cards {	
	background: #feffff;
	background: -moz-linear-gradient(top, #feffff 0%, #ddf1f9 35%, #a0d8ef 100%);
	background: -webkit-linear-gradient(top, #feffff 0%,#ddf1f9 35%,#a0d8ef 100%);
	background: linear-gradient(to bottom, #feffff 0%,#ddf1f9 35%,#a0d8ef 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#a0d8ef',GradientType=0 );
	
	overflow: hidden;
	border-bottom: 10px solid black;
}

#cards > figure {
	width: 20%;
	margin: 2.5%;
	box-sizing: border-box;
	float: left;
	position: relative;
	box-shadow: 0 0 10px #999;
	border: 5px solid white;
	overflow: hidden;
	opacity: 0.5;
	
	border-radius: 10px;
	transform: rotate(10deg);
	transition: all 0.3s;
}

#cards > figure:hover {
	transform: rotate(-10deg);
	opacity: 1;
}

#cards > figure > img {
	display: block;
	border-radius: 5px;
}

#cards > figure > figcaption {
	box-sizing: border-box;
	text-align: center;
	position: absolute;
	background-color: rgba(0, 0, 0, 0.7);
	color: white;
	left: 0;
	right: 0;
	bottom: 0;
	text-shadow: 1px 1px 5px #000;
	height: 0px;
	transition: all 0.3s;
}

#cards > figure:hover figcaption {
	height: 30px;
	line-height: 30px;
}

#runner-box {
	position: absolute;
	left: 0px;
	width: 50px;
	height: 50px;
	background-color: red;
}

#runner-box-btn {
	width: 200px;
	box-shadow: 0 0 5px #999;
	color: white;
	background-color: black;
	margin: 10px auto;
	padding: 10px;
	text-align: center;
	border: 2px solid #333;
	cursor: pointer;
}

#runner-box-btn:hover + #runner-box {
	animation-name: run;
	animation-duration: 2s;
    animation-iteration-count: 1;
}

@keyframes run {
    0%   {background-color:red; left:0px;}
    50%  {background-color:blue; left: calc(100% - 50px)}
    100% {background-color:red; left:0px;}
}

#animate-test {
	margin-top: 100px;
	border-top: 10px solid black;
}

.animate-test {
	text-align: center;
	background-color: lightblue;
	padding: 50px;
	width: 200px;
	margin: 5px auto;
}
</code></pre>

<h4>Flexbox</h4>

<p><a href="/lectures/6/Flexbox/a.html">Surfa till exemplet här</a></p>

<h5>HTML</h5>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Demo&lt;/title&gt;
		&lt;link href=&quot;https://fonts.googleapis.com/css?family=Ubuntu&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;link href=&quot;a.css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	
	&lt;body&gt;
		&lt;div id=&quot;container&quot;&gt;
			&lt;div class=&quot;item&quot;&gt;1&lt;/div&gt;
			&lt;div class=&quot;item&quot;&gt;2&lt;/div&gt;
			&lt;div class=&quot;item&quot;&gt;3&lt;/div&gt;
			&lt;div class=&quot;item&quot;&gt;4&lt;/div&gt;
			&lt;div class=&quot;item&quot;&gt;5&lt;/div&gt;
			&lt;div class=&quot;item&quot;&gt;6&lt;/div&gt;
		&lt;/div&gt;
		
		&lt;div id=&quot;menu&quot;&gt;
			&lt;a href=&quot;#&quot;&gt;Hem&lt;/a&gt;
			&lt;a href=&quot;#&quot;&gt;Produkter&lt;/a&gt;
			&lt;a href=&quot;#&quot;&gt;&Aring;terf&ouml;rs&auml;ljare&lt;/a&gt;
			&lt;a href=&quot;#&quot;&gt;Kontakt&lt;/a&gt;
			&lt;input type=&quot;search&quot; placeholder=&quot;S&ouml;k h&auml;r...&quot;&gt;
		&lt;/div&gt;
		
		&lt;div id=&quot;absolute-center&quot;&gt;
			&lt;div&gt;This is some content&lt;/div&gt;
		&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>CSS</h5>
<pre class="language-css line-numbers codepen" data-type="javascript"><code class="language-css line-numbers">
#container {
	display: flex;
	background-color: lightblue;
	padding: 20px;
	box-sizing: border-box;
	height: 300px;

	/* Rad eller kolumn? Bakvänt`*/
	flex-direction: row; /* column | row | column-reverse | row-reverse */
	
	/* Samma rad (no-wrap), flera rader (wrap) */
	flex-wrap: wrap; /* wrap | no-wrap */
	
	/* Hur ska vi förhålla oss horisontell? */
	justify-content: space-between; /* center | flex-start | flex-end | space-around | space-between */
	
	/* Hur ska vi förhålla oss vertikalt? */
	align-items: stretch; /* flex-start | flex-end | center | stretch | baseline */
	
	/* Hur ska raderna förhålla oss vertikalt? */
	align-content: space-between; /* space-around | space-between | stretch | center | flex-start | flex-end */
	
}

.item {
	background-color: yellow;
	padding: 20px;
	margin: 5px;
	
	/* Vilken ordning ska de visas? */
}

.item:first-child {
	background-color: yellow;
	padding: 20px;
	margin: 5px;
	
	/* Vilken ordning ska de visas? */
	order: 0;
	
	/* Flex-grow */
	flex-grow: 2;
	
	flex-basis: 200px; /* Set the initial length of the third flex item to 200 pixels */
}

/* Separerad menu */
#menu {
	display: flex;
	flex-wrap: no-wrap;
	background-color: orange;
	margin: 10px 0;
	padding: 10px;
}

#menu > a {
	display: block;
	padding: 10px;
	margin: 2px;
	background-color: yellow;
}

#menu > input {
	margin-left: auto;
	padding: 10px;
}

/* Absolut centrerat */
#absolute-center {
	display: flex;
	align-items: center;
	justify-content: center;
	height: 500px;
	background-color: lightgreen;
}

#absolute-center > div {
	padding: 20px;
	background-color: red;
}
</code></pre>

<h4>Grids</h4>

<p><a href="/lectures/6/Grids/a.html">Surfa till exemplet här</a></p>

<h5>HTML</h5>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Demo&lt;/title&gt;
		&lt;link href=&quot;https://fonts.googleapis.com/css?family=Ubuntu&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;link href=&quot;a.css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	
	&lt;body&gt;
		&lt;div id=&quot;grid&quot;&gt;
			&lt;header&gt;Sidhuvud&lt;/header&gt;
			&lt;nav&gt;Navigation&lt;/nav&gt;
			&lt;main&gt;Main&lt;/main&gt;
			&lt;aside&gt;Aside&lt;/aside&gt;
			&lt;footer&gt;Sidfot&lt;/footer&gt;
		&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>CSS</h5>
<pre class="language-css line-numbers codepen" data-type="javascript"><code class="language-css line-numbers">
#grid {
    display: grid;
    grid-template-columns: 100px 1fr 100px;
    grid-template-rows: auto auto auto;
    grid-gap: 10px;
    grid-template-areas:    
        "header header header"
        "nav main aside"
        "footer footer footer"
    ;
}

#grid > * {
    min-height: 100px;
}

#grid > header {
    background-color: lightblue;
    grid-area: header;
}

#grid > footer {
    background-color: lightblue;
    grid-area: footer;
}

#grid > nav {
    background-color: aquamarine;
    grid-area: nav;
}

#grid > main {
    background-color: blueviolet;
    grid-area: main;
}

#grid > aside {
    background-color: chartreuse;
    grid-area: aside;
}
</code></pre>