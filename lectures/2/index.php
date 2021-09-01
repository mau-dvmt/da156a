<h2>Föreläsning 2 - Introduktion till HTML</h2>

<p>Videoföreläsningen publiceras så fort den är färdigproducerad.</p>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.1972%;"><iframe src="https://speakerdeck.com/player/5f483e1c3cbe4a35b03fddfed7210680" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="encrypted-media;"></iframe></div>

<hr>

<a href="/resources/pdf/HT21-2.pdf">Ladda ner föreläsningen här</a>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/2/intro-html.zip">här</a></p>

<h4>Demo 1</h4>
<h5>index.html</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sv&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Min f&ouml;rsta webbsida!&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;V&auml;lkommen till min webbsida!&lt;/h1&gt;
        &lt;p&gt;Visst &auml;r den vacker =)&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>


<h4>Demo 2</h2>

<h5>index.html</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sv&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Min f&ouml;rsta webbsida!&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;V&auml;lkommen till min webbsida!&lt;/h1&gt;
        &lt;p&gt;Visst &auml;r den vacker =)&lt;/p&gt;
        &lt;p&gt;Vill du se fina bilder fr&aring;n min resa, &lt;a href=&quot;images.html&quot;&gt;klicka h&auml;r&lt;/a&gt;&lt;/p&gt;
        &lt;h2&gt;Bra filmer&lt;/h2&gt;
        &lt;ol&gt;
            &lt;li&gt;Star Wars&lt;/li&gt;
            &lt;li&gt;Fight Club&lt;/li&gt;
            &lt;li&gt;American Beauty&lt;/li&gt;
        &lt;/ol&gt;
        &lt;h2&gt;Bra l&auml;nkar&lt;/h2&gt;
        &lt;ul&gt;
            &lt;li&gt;
                &lt;a href=&quot;https://mau.se&quot;&gt;Malm&ouml; universitet&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;a href=&quot;https://google.com&quot;&gt;Google&lt;/a&gt;
            &lt;/li&gt;
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
        &lt;title&gt;Mina bilder&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Bilder&lt;/h1&gt;
        &lt;p&gt;Vill du komma till startsidan, &lt;a href=&quot;index.html&quot;&gt;klicka h&auml;r&lt;/a&gt;&lt;/p&gt;
        &lt;h2&gt;Bilder fr&aring;n min resa&lt;/h2&gt;
        &lt;img src=&quot;images/Hobbiton.jpg&quot; alt=&quot;Jag leker hob i Hobbiton&quot;&gt;
        &lt;img src=&quot;images/Kepler.jpg&quot; alt=&quot;Jag g&aring;r p&aring; vandring i Nya Zeeland&quot;&gt;
        &lt;img src=&quot;images/StewartIsland.jpg&quot; alt=&quot;Jag p&aring; den sydligaste &ouml;n i Nya Zeeland&quot;&gt;
        &lt;img src=&quot;images/Isthimus.jpg&quot; alt=&quot;Vi kl&auml;ttrade upp f&ouml;r ett berg&quot;&gt;
        &lt;h2&gt;Bilder fr&aring;n n&auml;tet&lt;/h2&gt;
        &lt;img src=&quot;https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Star_Wars_Logo.svg/1200px-Star_Wars_Logo.svg.png&quot; alt=&quot;Star Wars-logotyp&quot;&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
