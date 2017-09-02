<h2>Föreläsning 2 - Introduktion till HTML</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/CFpw4YAoInQD40" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht17-da156a-introduktion-till-html" title="HT17 - DA156A - Introduktion till HTML" target="_blank">HT17 - DA156A - Introduktion till HTML</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/2/Webbplats.zip">här</a></p>

<h4>index.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;title&gt;Min webbplats&lt;/title&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;meta name=&quot;author&quot; content=&quot;Anton Tibblin&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;V&auml;lkommen!&lt;/h1&gt;

		&lt;h2&gt;Meny&lt;/h2&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Startsida&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;images.html&quot;&gt;Bilder&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;links.html&quot;&gt;L&auml;nkar&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;

		&lt;p&gt;... till min j&auml;ttefina sida!&lt;/p&gt;

	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>links.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;title&gt;L&auml;nkar&lt;/title&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;meta name=&quot;author&quot; content=&quot;Anton Tibblin&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;L&auml;nkar&lt;/h1&gt;

		&lt;h2&gt;Meny&lt;/h2&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Startsida&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;images.html&quot;&gt;Bilder&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;links.html&quot;&gt;L&auml;nkar&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;

		&lt;h2&gt;Bra l&auml;nkar&lt;/h2&gt;
		&lt;ul&gt;
			&lt;li&gt;
				&lt;a href=&quot;http://mah.se&quot; target=&quot;_blank&quot;&gt;mah.se&lt;/a&gt;
			&lt;/li&gt;
			&lt;li&gt;
				&lt;a href=&quot;http://google.se&quot;&gt;Google&lt;/a&gt;
			&lt;/li&gt;
			&lt;li&gt;
				&lt;a href=&quot;http://aftonbladet.se&quot;&gt;Aftonbladet&lt;/a&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>images.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;title&gt;Bilder&lt;/title&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;meta name=&quot;author&quot; content=&quot;Anton Tibblin&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;Bilder&lt;/h1&gt;

		&lt;h2&gt;Meny&lt;/h2&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Startsida&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;images.html&quot;&gt;Bilder&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;links.html&quot;&gt;L&auml;nkar&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;

		&lt;h2&gt;Bild p&aring; en s&ouml;t katt&lt;/h2&gt;
		&lt;img src=&quot;http://www.readersdigest.ca/wp-content/uploads/2011/01/4-ways-cheer-up-depressed-cat.jpg&quot; alt=&quot;En bild p&aring; en katt&quot;&gt;

		&lt;h2&gt;Bilder fr&aring;n mina semestrar&lt;/h2&gt;
		&lt;img src=&quot;bilder/island.jpg&quot; alt=&quot;Vattenfall p&aring; Island&quot;&gt;

		&lt;img src=&quot;bilder\usa.jpg&quot; alt=&quot;Bild fr&aring;n USA&quot;&gt;

	&lt;/body&gt;
&lt;/html&gt;
</code></pre>
