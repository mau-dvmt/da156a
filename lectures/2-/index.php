<h2>Föreläsning 2 - Introduktion till HTML</h2>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/qhEgFsl5wMwmqv" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>

<a href="/resources/pdf/F2-ht24.pdf">Ladda ner föreläsningen här</a>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/2/f2-h24.zip">här</a></p>

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
        &lt;h1&gt;V&auml;lkommen till min fantastiska sida&lt;/h1&gt;
        &lt;p&gt;H&auml;r &auml;r lite text... Vill du se mina semesterbilder &lt;a href=&quot;photos.html&quot;&gt;klicka h&auml;r!&lt;/a&gt;&lt;/p&gt;

        &lt;h2&gt;Filmtips&lt;/h2&gt;
        &lt;p&gt;H&auml;r kommer n&aring;gra filmtips:&lt;/p&gt;
        &lt;ul&gt;
            &lt;li&gt;Harry Potter&lt;/li&gt;
            &lt;li&gt;Barbie&lt;/li&gt;
            &lt;li&gt;Iron man&lt;/li&gt;
            &lt;li&gt;Oppenheimer&lt;/li&gt;
            &lt;li&gt;Top Gun&lt;/li&gt;
        &lt;/ul&gt;

        &lt;h2&gt;Bra l&auml;nkar&lt;/h2&gt;
        &lt;ol&gt;
            &lt;li&gt;
                &lt;a href=&quot;https://mau.se&quot;&gt;Malm&ouml; Universitet&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;a href=&quot;https://da106a.ia-mau.se&quot;&gt;Kurswebbplats&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;a href=&quot;https://google.se&quot;&gt;Google&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ol&gt;
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
        &lt;h1&gt;Mina semesterbilder&lt;/h1&gt;
        &lt;p&gt;&Auml;r du tr&ouml;tt p&aring; fina semesterbilder, &lt;a href=&quot;index.html&quot;&gt;klicka h&auml;r&lt;/a&gt; f&ouml;r att komma till startsidan&lt;/p&gt;
        &lt;h2&gt;Bilder&lt;/h2&gt;
        &lt;img src=&quot;images/Hobbiton.jpg&quot; alt=&quot;Anton leker att han &auml;r en hob&quot;&gt;
        &lt;img src=&quot;images/Isthimus.jpg&quot; alt=&quot;Anton vandrar i berg&quot;&gt;
        &lt;img src=&quot;images/Kepler.jpg&quot; alt=&quot;Anton vandrar i ett annat berg&quot;&gt;
        &lt;h2&gt;Logotyper&lt;/h2&gt;
        &lt;img src=&quot;https://upload.wikimedia.org/wikipedia/commons/6/6c/Star_Wars_Logo.svg&quot; alt=&quot;Star Wars-logo&quot;&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
