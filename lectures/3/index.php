<h2>Föreläsning 3 - Tabeller och formulär</h2>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/FtWq3WQLzZM?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe></div>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.1972%;"><iframe src="https://speakerdeck.com/player/95b1497424cc41c5865f712f8ffe93ba" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="encrypted-media;"></iframe></div>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 75%;"><iframe src="https://miro.com/app/embed/o9J_ly9n2AM=/" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>

<a href="/resources/pdf/F3-Tabeller-formular-ht21.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<h4>table.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sv&quot;&gt;
    &lt;head&gt;
        &lt;title&gt;Tabell &ouml;ver IA-programmet&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;&Ouml;versikt &ouml;ver IA-programmet&lt;/h1&gt;

        &lt;table border=&quot;1&quot;&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                    &lt;th&gt;&Aring;r&lt;/th&gt;
                    &lt;th&gt;LP 1&lt;/th&gt;
                    &lt;th&gt;LP 2&lt;/th&gt;
                    &lt;th&gt;LP 3&lt;/th&gt;
                    &lt;th&gt;LP 4&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;td rowspan=&quot;2&quot;&gt;1&lt;/td&gt;
                    &lt;td&gt;Introduktion till webbutveckling&lt;/td&gt;
                    &lt;td&gt;Introduktion till programmering&lt;/td&gt;
                    &lt;td&gt;Databasteknik&lt;/td&gt;
                    &lt;td&gt;Informationsarkitektur f&ouml;r flerplattformsapplikationer&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Introduktion till studier i datavetenskap&lt;/td&gt;
                    &lt;td&gt;Interaktionsdesign f&ouml;r informationsarkitekter&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Systemutveckling och projekt 1&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td rowspan=&quot;2&quot;&gt;2&lt;/td&gt;
                    &lt;td&gt;Objektorienterad programmering och modellering f&ouml;r IA&lt;/td&gt;
                    &lt;td&gt;Webbtj&auml;nster&lt;/td&gt;
                    &lt;td&gt;Informationss&auml;kerhet&lt;/td&gt;
                    &lt;td&gt;flerplattformsapplikationer med webbtekniker&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Information bortom sk&auml;rmar&lt;/td&gt;
                    &lt;td&gt;Informationsdesign&lt;/td&gt;
                    &lt;td&gt;Utv&auml;rderingsmetoder f&ouml;r anv&auml;ndarupplevelse&lt;/td&gt;
                    &lt;td&gt;Forskningsmetodik&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td rowspan=&quot;2&quot;&gt;3&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Examensprojekt: Informationsarkitekt och systemutvecklare&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Valbara kurser&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Examensarbete&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Valbara kurser&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
            &lt;tfoot&gt;
                &lt;tr&gt;
                    &lt;td colspan=&quot;5&quot;&gt;
                        &lt;a href=&quot;https://edu.mah.se/tgiaa&quot;&gt;L&auml;s mer p&aring; Mau:s webbplats&lt;/a&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tfoot&gt;
        &lt;/table&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>

<h4>form.html (1)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sv&quot;&gt;
    &lt;head&gt;
        &lt;title&gt;Exempelformul&auml;r&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Skapa ett inl&auml;gg&lt;/h1&gt;
        &lt;form action=&quot;http://mah.antontibblin.se/ia-gb/new-post&quot; method=&quot;POST&quot;&gt;
            &lt;label for=&quot;name-field&quot;&gt;Namn: &lt;/label&gt;
            &lt;input id=&quot;name-field&quot; type=&quot;text&quot; name=&quot;name&quot;&gt;
            &lt;br&gt;
            &lt;label for=&quot;message-field&quot;&gt;Meddelande: &lt;/label&gt;
            &lt;textarea id=&quot;message-field&quot; name=&quot;message&quot;&gt;&lt;/textarea&gt;
            &lt;br&gt;
            &lt;label for=&quot;check-field&quot;&gt;Godk&auml;nner du allt?&lt;/label&gt;
            &lt;input id=&quot;check-field&quot; value=&quot;yes&quot; type=&quot;checkbox&quot; name=&quot;agreement&quot;&gt;
            &lt;br&gt;
            &lt;input type=&quot;submit&quot; value=&quot;Skicka iv&auml;g formul&auml;ret&quot;&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>