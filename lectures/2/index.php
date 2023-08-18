<h2>Föreläsning 2 - Introduktion till HTML</h2>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.1972%;"><iframe src="https://speakerdeck.com/player/9e792db7a07f4c6a9e36ccc15df61ccf" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="encrypted-media;"></iframe></div>

<hr>

<a href="/resources/pdf/F2.pdf">Ladda ner föreläsningen här</a>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/2/F2.zip">här</a></p>

<h4>Demo</h4>
<h5>index.html</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sv&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Min f&ouml;rsta webbsida&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;V&auml;lkommen till min webbsida!&lt;/h1&gt;
        &lt;p&gt;Visst &auml;r den fin ;). Vill du titta p&aring; mina semesterbilder &lt;a href=&quot;images.html&quot;&gt;klicka h&auml;r&lt;/a&gt;&lt;/p&gt;
        &lt;h2&gt;Mina favoritfilmer&lt;/h2&gt;
        &lt;ol type=&quot;i&quot;&gt;
            &lt;li&gt;Star Wars&lt;/li&gt;
            &lt;li&gt;Sagan om ringen&lt;/li&gt;
            &lt;li&gt;Blade runner&lt;/li&gt;
            &lt;li&gt;Fight Club&lt;/li&gt;
            &lt;li&gt;The gentlemen&lt;/li&gt;
        &lt;/ol&gt;
        &lt;h2&gt;Bra l&auml;nkar&lt;/h2&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href=&quot;https://mau.se&quot;&gt;Malm&ouml; universitet&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;https://google.com&quot;&gt;Google&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;https://aftonbladet.se&quot;&gt;Aftonbladet&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>images.html</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Mina semesterbilder&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Semesterbilder fr&aring;n Nya Zeeland&lt;/h1&gt;
        &lt;p&gt;&lt;a href=&quot;index.html&quot;&gt;Klicka h&auml;r f&ouml;r att komma till startsidan&lt;/a&gt;&lt;/p&gt;
        &lt;h2&gt;Bilder&lt;/h2&gt;
        &lt;img src=&quot;images/Hobbiton.jpg&quot; alt=&quot;Anton tror att han &auml;r en hob&quot;&gt;
        &lt;img src=&quot;images/Isthimus.jpg&quot; alt=&quot;Anton bestiger berg&quot;&gt;
        &lt;img src=&quot;images/Kepler.jpg&quot; alt=&quot;Anton vandrar&quot;&gt;
        &lt;img src=&quot;images/StewartIsland.jpg&quot; alt=&quot;Anton bes&ouml;ker den sydligaste &ouml;n p&aring; Nya Zeeland&quot;&gt;
        &lt;h2&gt;Icke semesterbild&lt;/h2&gt;
        &lt;img src=&quot;https://www.heromic.se/products/1016/101657/58bd60f4bcf1d.jpg&quot; alt=&quot;Star Wars-mugg&quot;&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
