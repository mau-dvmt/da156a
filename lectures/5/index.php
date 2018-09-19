<h2>Föreläsning 5 - Layout med CSS</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/BlR4OBz9eCShoo" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht18-da156a-layout-med-css" title="HT18 - DA156A - Layout med CSS" target="_blank">HT18 - DA156A - Layout med CSS</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

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
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    padding-top: 60px;
}

h1 {
    position: fixed;
    top: 0px;
    left: 0px;
    right: 0px;
    height: 50px;
    background-color: black;
    color: white;
    text-align: center;
    line-height: 50px;
    margin: 0px;
    box-shadow: 0 0 10px black;
    z-index: 2;
}

.movie {
    width: 50%;
    box-sizing: border-box;
    border: 2px solid black;
    margin: 10px auto;
    box-shadow: 0 0 10px black;
    background-color: #eeeeee;
    height: 150px;
    position: relative;
}

.movie > h2 {
    margin: 0px;
    padding-left: 10px;
    float: left;
    line-height: 150px;
}

.movie > img {
    float: right;
    height: 146px;
}

.stars {
    position: absolute;
    right: 0px;
    top: 0px;
    background-color: rgba(0, 0, 0, 0.5);
    width: 95px;
    text-align: center;
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
			&lt;header&gt;Sidhuvud&lt;/header&gt;
			&lt;nav&gt;Navigation&lt;/nav&gt;
			&lt;main&gt;Main&lt;/main&gt;
			&lt;footer&gt;Sidfot&lt;/footer&gt;
		&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exemepel 2 - CSS</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
#wrapper {
    background-color: green;
    width: 75%;
    min-width: 600px;
    margin: auto;
}

#wrapper > header {
    background-color: lightblue;
    height: 100px;
    line-height: 100px;
    text-align: center;
}

#wrapper > nav {
    background-color: green;
    float: left;
    width: 20%;
    padding: 10px;
    box-sizing: border-box;
}

#wrapper > main {
    background-color: red;
    float: left;
    width: 80%;
    padding: 10px;
    box-sizing: border-box;
    min-height: 200px;
}

#wrapper > footer {
    background-color: purple;
    clear: both;
    height: 100px;
    line-height: 100px;
    text-align: center;
}
</code></pre>

<h4>Exemepel 3 - HTML</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Exempel&lt;/title&gt;
		&lt;link href=&quot;style.css&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;nav&gt;Navigation&lt;/nav&gt;
		&lt;main&gt;
			&lt;h1&gt;Min webbplats&lt;/h1&gt;
			&lt;article&gt;
				&lt;h2&gt;Artikel&lt;/h2&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer turpis ex, scelerisque quis tristique vel, tincidunt eleifend odio. Proin congue hendrerit augue pretium gravida. Sed nec magna risus.&lt;/p&gt;
				&lt;p&gt;Mauris blandit lacus eget nulla rhoncus, id sodales nisl rhoncus. Sed nibh risus, semper sed auctor quis, efficitur et ex. Mauris dapibus venenatis interdum. Nullam eget arcu vulputate, dignissim odio quis, accumsan eros. Aliquam non sapien nibh.&lt;/p&gt;
				&lt;p&gt;Curabitur sagittis in lorem at iaculis. Quisque scelerisque vehicula placerat. Proin sit amet urna non lectus lobortis mollis. Donec vulputate risus nec arcu mollis tincidunt faucibus quis mi. Donec accumsan tristique nibh, in feugiat mauris.&lt;/p&gt;
			&lt;/article&gt;
			&lt;article&gt;
				&lt;h2&gt;Artikel&lt;/h2&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer turpis ex, scelerisque quis tristique vel, tincidunt eleifend odio. Proin congue hendrerit augue pretium gravida. Sed nec magna risus.&lt;/p&gt;
				&lt;p&gt;Mauris blandit lacus eget nulla rhoncus, id sodales nisl rhoncus. Sed nibh risus, semper sed auctor quis, efficitur et ex. Mauris dapibus venenatis interdum. Nullam eget arcu vulputate, dignissim odio quis, accumsan eros. Aliquam non sapien nibh.&lt;/p&gt;
				&lt;p&gt;Curabitur sagittis in lorem at iaculis. Quisque scelerisque vehicula placerat. Proin sit amet urna non lectus lobortis mollis. Donec vulputate risus nec arcu mollis tincidunt faucibus quis mi. Donec accumsan tristique nibh, in feugiat mauris.&lt;/p&gt;
			&lt;/article&gt;
			&lt;article&gt;
				&lt;h2&gt;Artikel&lt;/h2&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer turpis ex, scelerisque quis tristique vel, tincidunt eleifend odio. Proin congue hendrerit augue pretium gravida. Sed nec magna risus.&lt;/p&gt;
				&lt;p&gt;Mauris blandit lacus eget nulla rhoncus, id sodales nisl rhoncus. Sed nibh risus, semper sed auctor quis, efficitur et ex. Mauris dapibus venenatis interdum. Nullam eget arcu vulputate, dignissim odio quis, accumsan eros. Aliquam non sapien nibh.&lt;/p&gt;
				&lt;p&gt;Curabitur sagittis in lorem at iaculis. Quisque scelerisque vehicula placerat. Proin sit amet urna non lectus lobortis mollis. Donec vulputate risus nec arcu mollis tincidunt faucibus quis mi. Donec accumsan tristique nibh, in feugiat mauris.&lt;/p&gt;
			&lt;/article&gt;
			&lt;article&gt;
				&lt;h2&gt;Artikel&lt;/h2&gt;
				&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer turpis ex, scelerisque quis tristique vel, tincidunt eleifend odio. Proin congue hendrerit augue pretium gravida. Sed nec magna risus.&lt;/p&gt;
				&lt;p&gt;Mauris blandit lacus eget nulla rhoncus, id sodales nisl rhoncus. Sed nibh risus, semper sed auctor quis, efficitur et ex. Mauris dapibus venenatis interdum. Nullam eget arcu vulputate, dignissim odio quis, accumsan eros. Aliquam non sapien nibh.&lt;/p&gt;
				&lt;p&gt;Curabitur sagittis in lorem at iaculis. Quisque scelerisque vehicula placerat. Proin sit amet urna non lectus lobortis mollis. Donec vulputate risus nec arcu mollis tincidunt faucibus quis mi. Donec accumsan tristique nibh, in feugiat mauris.&lt;/p&gt;
			&lt;/article&gt;
		&lt;/main&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Exemepel 3 - CSS</h4>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    margin: 0px;
}

body > nav {
    position: fixed;
    left: 0;
    top:0;
    bottom: 0;
    width: 200px;
    background-color: lightblue;
    padding: 20px;
    box-sizing: border-box;
}

body > main {
    width: 50%;
    margin: auto;
    background-color: lightcoral;
    padding: 20px;
    box-sizing: border-box;
}

body > main > h1 {
    margin: 0px;
    text-align: center;
    border-bottom: 1px solid black;
}

body > main > article {
    background-color:rgba(255, 255, 255, 0.5);
    border-bottom: 1px solid black;
    padding: 10px;
    margin: 10px 0;
    box-shadow: 0 0 10px #000;
}
</code></pre>
