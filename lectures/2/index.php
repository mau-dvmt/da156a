<h2>Föreläsning 2 - Introduktion till HTML</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/v8u2WtsOg1Ll0O" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht18-da156a-introduktion-till-html" title="HT18 - DA156A - Introduktion till HTML" target="_blank">HT18 - DA156A - Introduktion till HTML</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<a href="/resources/pdf/1.pdf">Ladda ner föreläsningen här</a>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/2/Webbplats.zip">här</a></p>

<h4>index.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;htmL lang=&quot;sv&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Min f&ouml;rsta webbsida&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- H&auml;r kommer den st&ouml;rsta rubriken --&gt;
        &lt;h1&gt;V&auml;lkommen!&lt;/h1&gt;
        &lt;!-- H&auml;r kommer en paragraf --&gt;
        &lt;p&gt;H&auml;r &auml;r lite text, den &auml;r inte s&aring; kul&lt;/p&gt;

        &lt;p&gt;Vill du l&auml;sa om mig, &lt;a href=&quot;about.html&quot;&gt;klicka h&auml;r&lt;/a&gt;&lt;/p&gt;

        &lt;h2&gt;Bra l&auml;nkar&lt;/h2&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href=&quot;http://google.se&quot;&gt;Google&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;http://mau.se&quot;&gt;Mau&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;http://da156a.ia-mau.se&quot; target=&quot;_blank&quot;&gt;Kurswebbplats&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;

        &lt;h2&gt;Bilder&lt;/h2&gt;
        &lt;figure&gt;
            &lt;img src=&quot;bird.jpg&quot; alt=&quot;En f&aring;gel&quot;&gt;
            &lt;figcaption&gt;Foto av n&aring;gon&lt;/figcaption&gt;
        &lt;/figure&gt;

        &lt;img src=&quot;https://static-cdn.jtvnw.net/jtv_user_pictures/hsdogdog-profile_image-5550ade194780dfc-300x300.jpeg&quot; alt=&quot;En klok hund&quot;&gt;
        &lt;img src=&quot;https://static.boredpanda.com/blog/wp-content/uploads/2018/04/handicapped-cat-rexie-the-handicat-dasha-minaeva-48-5acb4f02de6d6__700.jpg&quot; alt=&quot;Gapande katt&quot;&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>about.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Sida om mig&lt;/title&gt;
    &lt;/head&gt;

    &lt;body&gt;
        &lt;h1&gt;En sida om mig&lt;/h1&gt;
        &lt;p&gt;Jag heter Anton.&lt;/p&gt;
        &lt;p&gt;&lt;a href=&quot;index.html&quot;&gt;Tillbaka till startsidan&lt;/a&gt;&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
