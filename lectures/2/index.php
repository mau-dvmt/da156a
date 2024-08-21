<h2>Föreläsning 2 - Introduktion till HTML</h2>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/1yAiXnRuecJYGa" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>

<a href="/resources/pdf/F2-ht23.pdf">Ladda ner föreläsningen här</a>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/2/f2.zip">här</a></p>

<h4>Demo</h4>
<h5>index.html</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html lang=&quot;sv&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Min f&ouml;rsta webbsida!&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;V&auml;lkommen till min webbsida!&lt;/h1&gt;
		&lt;p&gt;Visst &auml;r den fin?&lt;/p&gt;
		&lt;p&gt;Vill du se mina fina semesterbilder, &lt;a href=&quot;page.html&quot;&gt;klicka h&auml;r!&lt;/a&gt;&lt;/p&gt;
		&lt;h2&gt;Filmrekommendationer&lt;/h2&gt;
		&lt;ol&gt;
			&lt;li&gt;Star Wars&lt;/li&gt;
			&lt;li&gt;Oppenheimer&lt;/li&gt;
			&lt;li&gt;Barbie&lt;/li&gt;
			&lt;li&gt;Inception&lt;/li&gt;
			&lt;li&gt;Matrix&lt;/li&gt;
		&lt;/ol&gt;
		&lt;h2&gt;Bra l&auml;nkar&lt;/h2&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;http://mau.se&quot;&gt;Malm&ouml; universitet&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;http://google.com&quot;&gt;Google&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>page.html</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sv&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Mina semesterbilder&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Semesterbilder&lt;/h1&gt;
		&lt;p&gt;&lt;a href=&quot;index.html&quot;&gt;Klicka h&auml;r f&ouml;r att komma tillbaka till startsidan&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;images/Hobbiton.jpg&quot; alt=&quot;Anton leker hob&quot;&gt;
		&lt;img src=&quot;images/Isthimus.jpg&quot; alt=&quot;Anton och en fin utsikt&quot;&gt;
		&lt;img src=&quot;images/Kepler.jpg&quot; alt=&quot;Anton p&aring; hike&quot;&gt;
		&lt;img src=&quot;images/StewartIsland.jpg&quot; alt=&quot;Anton vid b&auml;ck&quot;&gt;
		
		&lt;h2&gt;Inte en semesterbild&lt;/h2&gt;
		&lt;img src=&quot;https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQTv0ezBtjKuvUDqu2E2zAy9wqdEshdMM6mPK6YAi407754oJa4UpyxoCOuJ1Wq0nOJNxbxdPUzkEH08mhe13YJB1SWVv00xr7tqIVPLFjT8UoK8nqLyCZ-&amp;usqp=CAc&quot; alt=&quot;Star Wars kaffemugg&quot;&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
