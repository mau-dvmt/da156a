<h2>Föreläsning 2 - Introduktion till HTML</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/tWB0FAHYGrr06a" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht16-da156a-introduktion-till-html" title="HT16 - DA156A - Introduktion till HTML" target="_blank">HT16 - DA156A - Introduktion till HTML</a> </strong> from <strong><a target="_blank" href="//www.slideshare.net/AntonTibblin">Anton Tibblin</a></strong> </div>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/2/Webbsida.zip">här</a></p>

<h4>index.html</h4>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Min f&ouml;rsta webbplats!&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;!-- H&auml;r &auml;r en kommentar --&gt;
		&lt;h1&gt;V&auml;lkommen!&lt;/h1&gt;
		&lt;p&gt;Till min fantastikt vackra hemsidan =)&lt;/p&gt;
		&lt;p&gt;&lt;a href=&quot;http://mah.se&quot;&gt;Klicka h&auml;r&lt;/a&gt; f&ouml;r att komma till MAHs webbplats&lt;/p&gt;
		&lt;p&gt;&lt;a href=&quot;sida2.html&quot;&gt;Klicka h&auml;r f&ouml;r att titta p&aring; n&aring;gra fina bilder&lt;/a&gt;&lt;/p&gt;

		&lt;h2&gt;Mina favoritfilmer&lt;/h2&gt;
		&lt;ol&gt;
			&lt;li&gt;Star Wars&lt;/li&gt;
			&lt;li&gt;Fight Club&lt;/li&gt;
			&lt;li&gt;American Beauty&lt;/li&gt;
		&lt;/ol&gt;

		&lt;h2&gt;Bra l&auml;nkar&lt;/h2&gt;
		&lt;ul&gt;
			&lt;li&gt;
				&lt;a href=&quot;http://mah.se&quot;&gt;MAH&lt;/a&gt;
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

<h4>sida2.html</h4>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Min andra sida!&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;!-- H&auml;r &auml;r en kommentar --&gt;
		&lt;h1&gt;Bilder&lt;/h1&gt;
		&lt;p&gt;&lt;a href=&quot;index.html&quot;&gt;Tillbaka till startsidan&lt;/a&gt;&lt;/p&gt;
		&lt;h2&gt;Bilderna&lt;/h2&gt;
		&lt;img src=&quot;images/elfsborg.png&quot; alt=&quot;Sveriges b&auml;sta lag&quot;&gt;
		&lt;img src=&quot;http://static1.squarespace.com/static/51b3dc8ee4b051b96ceb10de/t/56e2f52555598683b8c9b218/1457714478729/?format=1500w&quot; alt=&quot;Darth Jar Jar&quot;&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>
