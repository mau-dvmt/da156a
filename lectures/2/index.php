<h2>Föreläsning 2 - Introduktion till HTML</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/vfUbVGbJ5k72vq" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht19-da156a-introduktion-till-html" title="HT19 - DA156A - Introduktion till HTML" target="_blank">HT19 - DA156A - Introduktion till HTML</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<a href="/resources/pdf/2.pdf">Ladda ner föreläsningen här</a>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/2/Webbplats.zip">här</a></p>

<h4>index.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html lang=&quot;sv&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Min f&ouml;rsta webbsida!&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;V&auml;lkommen!&lt;/h1&gt;
        &lt;p&gt;H&auml;r kommer n&aring;gra bra l&auml;nkar:&lt;/p&gt;
        &lt;ul&gt;
            &lt;li&gt;
                &lt;a href=&quot;http://google.com&quot; target=&quot;_blank&quot;&gt;Google&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;a href=&quot;http://mau.se&quot;&gt;Mau&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;a href=&quot;http://aftonbladet.se&quot;&gt;Aftonbladet&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;

        &lt;p&gt;
            &lt;a href=&quot;norge.html&quot;&gt;Klicka h&auml;r f&ouml;r att se mina semesterbilder fr&aring;n Norge&lt;/a&gt;
        &lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>norge.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Min Norgeresa&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Min Norgeresa&lt;/h1&gt;
        &lt;p&gt;
            &lt;a href=&quot;index.html&quot;&gt;Klicka h&auml;r f&ouml;r att komma tillbaka till startsidan&lt;/a&gt;
        &lt;/p&gt;
        &lt;figure&gt;
            &lt;img src=&quot;images/bessegen.jpg&quot; alt=&quot;Bessegen&quot;&gt;
            &lt;figcaption&gt;Bessegen&lt;/figcaption&gt;
        &lt;/figure&gt;
        &lt;figure&gt;
            &lt;img src=&quot;images/galdhopiggen.jpg&quot; alt=&quot;En n&ouml;jd Anton p&aring; toppen av Galdh&ouml;piggen&quot;&gt;
            &lt;figcaption&gt;Galdh&ouml;piggen&lt;/figcaption&gt;
        &lt;/figure&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
