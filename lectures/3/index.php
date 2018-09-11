<h2>Föreläsning 3 - Tabeller och formulär</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/oshIf0rloykTIH" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht18-da156a-tabeller-formulr" title="HT18 - DA156A - Tabeller &amp; Formulär" target="_blank">HT18 - DA156A - Tabeller &amp; Formulär</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h3>Dagens exempel</h3>

<h4>table.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;&Ouml;versikt av IA-programmet&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;/head&gt;

    &lt;body&gt;
        &lt;table border=&quot;1&quot;&gt;
            &lt;caption&gt;&Ouml;versikt av IA-programmet&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                    &lt;th&gt;&lt;/th&gt;
                    &lt;th&gt;LP 1&lt;/th&gt;
                    &lt;th&gt;LP 2&lt;/th&gt;
                    &lt;th&gt;LP 3&lt;/th&gt;
                    &lt;th&gt;LP 4&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;th rowspan=&quot;2&quot;&gt;1&lt;/th&gt;
                    &lt;td&gt;Introduktion til webbutveckling&lt;/td&gt;
                    &lt;td&gt;Introduktion till programmering&lt;/td&gt;
                    &lt;td&gt;Databasteknik&lt;/td&gt;
                    &lt;td&gt;Informationsarkitektur&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Introduktion till datavetenskap&lt;/td&gt;
                    &lt;td&gt;Introduktion till interaktionsdesign&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Systemutveckling och projekt I&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th rowspan=&quot;2&quot;&gt;2&lt;/th&gt;
                    &lt;td&gt;Programmering och modellering&lt;/td&gt;
                    &lt;td&gt;Webbtj&auml;nster&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Metodik f&ouml;r m&auml;tning av anv&auml;ndbarhet&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Informationsarkitektur II&lt;/td&gt;
                    &lt;td&gt;Informationsdesign&lt;/td&gt;
                    &lt;td&gt;Informationss&auml;kerhet&lt;/td&gt;
                    &lt;td&gt;Flerplattformsapplikationer med webbtekniker&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th rowspan=&quot;2&quot;&gt;3&lt;/th&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Examensprojekt IA&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Examenarbete&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Valbar kurs&lt;/td&gt;
                    &lt;td&gt;Valbar kurs&lt;/td&gt;
                    &lt;td&gt;Valbar kurs&lt;/td&gt;
                    &lt;td&gt;Valbar kurs&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
            &lt;tfoot&gt;
                &lt;tr&gt;
                    &lt;td colspan=&quot;5&quot;&gt;
                        &lt;a href=&quot;http://edu.mah.se/tgiaa&quot;&gt;L&auml;s mer p&aring; v&aring;r webbplats&lt;/a&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tfoot&gt;
        &lt;/table&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>

<h4>form.html (1)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Ett exempelformul&auml;r&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;/head&gt;

    &lt;body&gt;
        &lt;form action=&quot;form.html&quot; method=&quot;get&quot;&gt;
            &lt;label for=&quot;email&quot;&gt;Epost&lt;/label&gt;
            &lt;input type=&quot;email&quot; name=&quot;email&quot; id=&quot;email&quot; required placeholder=&quot;Ange epostadress h&auml;r...&quot;&gt;

            &lt;label for=&quot;password&quot;&gt;L&ouml;senord&lt;/label&gt;
            &lt;input type=&quot;password&quot; name=&quot;password&quot; id=&quot;password&quot; required&gt;

            &lt;input type=&quot;submit&quot; value=&quot;Logga in&quot;&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>


<h4>form.html (2)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Ett exempelformul&auml;r&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;/head&gt;

    &lt;body&gt;
        &lt;form action=&quot;http://mah.antontibblin.se/ia-gb/new-post&quot; method=&quot;post&quot;&gt;
            &lt;label for=&quot;name&quot;&gt;Namn&lt;/label&gt;
            &lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot; required placeholder=&quot;Ange namn h&auml;r...&quot;&gt;

            &lt;label for=&quot;message&quot;&gt;L&ouml;senord&lt;/label&gt;
            &lt;input type=&quot;text&quot; name=&quot;message&quot; id=&quot;message&quot; required placeholder=&quot;Ange meddelande h&auml;r...&quot;&gt;

            &lt;input type=&quot;submit&quot; value=&quot;Ska g&auml;stboksinl&auml;gg&quot;&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
