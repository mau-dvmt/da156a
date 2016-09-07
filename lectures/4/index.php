<h2>Föreläsning 4 - Introduktion till CSS</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/JSSbGR0DklIalb" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht16-da156a-introduktion-till-css" title="HT16 - DA156A - Introduktion till CSS" target="_blank">HT16 - DA156A - Introduktion till CSS</a> </strong> from <strong><a href="//www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/4/Webbsite.zip">här</a></p>

<h4>table.html</h4>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Min f&ouml;rsta webbsida!&lt;/title&gt;
		&lt;link href=&quot;style.css&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;style&gt;
			table{
				background-color: green;
			}
		&lt;/style&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;V&auml;lkommen till min sida!&lt;/h1&gt;
		&lt;p&gt;Kursen g&aring;r p&aring; &lt;abbr title=&quot;Malm&ouml; H&ouml;gskola&quot;&gt;MAH&lt;/abbr&gt;&lt;/p&gt;
		&lt;hr&gt;
		&lt;p&gt;Bra filmer:&lt;/p&gt;
		&lt;ol&gt;
			&lt;li&gt;Star Wars&lt;/li&gt;
			&lt;li style=&quot;color: red; background-color: blue;&quot;&gt;Fight Club&lt;/li&gt;
			&lt;li&gt;American beauty&lt;/li&gt;
			&lt;li&gt;Inception&lt;/li&gt;
		&lt;/ol&gt;
		&lt;p&gt;Bra l&auml;nkar:&lt;/p&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;http://google.se&quot;&gt;Google&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;http://mah.se&quot;&gt;Malm&ouml; H&ouml;gskola&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;http://mah.se/lms&quot;&gt;It's Learning&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
		&lt;hr&gt;
		&lt;p&gt;S&aring;h&auml;r kul tycker jag att HTML &auml;r:&lt;/p&gt;
		&lt;p&gt;
			&lt;img src=&quot;bilder/me.jpg&quot; alt=&quot;En bild p&aring; mig&quot; class=&quot;pictureOfMe&quot;&gt;
		&lt;/p&gt;
		&lt;p&gt;S&aring;h&auml;r kul tycker jag att CSS &auml;r:&lt;/p&gt;
		&lt;p&gt;
			&lt;img src=&quot;bilder/me2.jpg&quot; alt=&quot;En bild p&aring; mig&quot; class=&quot;pictureOfMe&quot;&gt;
		&lt;/p&gt;
		&lt;hr&gt;
		&lt;table&gt;
			&lt;thead&gt;
				&lt;tr&gt;
					&lt;th&gt;Filmer&lt;/th&gt;
					&lt;th&gt;Betyg&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tfoot&gt;
				&lt;tr&gt;
					&lt;td colspan=&quot;2&quot;&gt;Anton betyg&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tfoot&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;td&gt;Star Wars&lt;/td&gt;
					&lt;td&gt;5&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;Fight Club&lt;/td&gt;
					&lt;td&gt;5&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;Inception&lt;/td&gt;
					&lt;td&gt;4&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
		&lt;hr&gt;
		&lt;h2&gt;H&auml;r kommer massa text i paragrafer&lt;/h2&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet eros sed eleifend efficitur. Suspendisse massa enim, commodo eu mauris id, vulputate malesuada dui. Proin tempus mauris efficitur risus condimentum, sit amet consequat nibh vestibulum.&lt;/p&gt;
		&lt;p&gt;Integer sed massa lacus. Vivamus aliquam, nibh in pharetra fermentum, turpis turpis congue lacus, a sollicitudin dolor elit ac ante. Suspendisse arcu turpis, tempor sit amet semper eu, ultrices et felis. Suspendisse non justo enim.&lt;/p&gt;
		&lt;p&gt;Proin lacinia, dolor non tempor suscipit, justo erat convallis dui, rhoncus lobortis turpis urna ut mauris. Mauris a ullamcorper velit.&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>style.css</h4>
<pre class="language-css line-numbers codepen" data-type="html"><code class="language-css line-numbers">
body{
	background-image: url("bilder/background.png");
	color: white;
}

h1{
	color: blue;
	background-color: red;
	text-align: center;
}

p{
	font-style: italic;
	color: green;
}

.pictureOfMe{
	border: 5px solid white;
	box-shadow: 0px 0px 5px #333;
}
</code></pre>
