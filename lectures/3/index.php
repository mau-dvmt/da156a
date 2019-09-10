<h2>Föreläsning 3 - Tabeller och formulär</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/pMEZSMdE1hZvWD" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht19-da156a-tabeller-formulr" title="HT19 - DA156A - Tabeller &amp; formulär" target="_blank">HT19 - DA156A - Tabeller &amp; formulär</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<a href="/resources/pdf/3.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<h4>table.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Min fina tabellsida&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;&Ouml;versikt &ouml;ver programmet informationsarkitekt&lt;/h1&gt;
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
                    &lt;th rowspan=&quot;2&quot;&gt;1&lt;/th&gt;
                    &lt;td&gt;Introduktion till webbutveckling&lt;/td&gt;
                    &lt;td&gt;Introduktion till interaktiondesign&lt;/td&gt;
                    &lt;td&gt;Databasteknik&lt;/td&gt;
                    &lt;td&gt;Informationsarkitektur I&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Introduktion till datavetenskap&lt;/td&gt;
                    &lt;td&gt;Introduktion till programmering&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Systemutveckling och projekt I&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th rowspan=&quot;2&quot;&gt;2&lt;/th&gt;
                    &lt;td&gt;OOP och modellering f&ouml;r IA&lt;/td&gt;
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
                    &lt;td colspan=&quot;2&quot;&gt;Examensarbete&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Valbara kurser&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Valbara kurser&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
            &lt;tfoot&gt;
                &lt;tr&gt;
                    &lt;td colspan=&quot;5&quot;&gt;L&auml;s mer h&auml;r: &lt;a href=&quot;https://edu.mah.se/tgiaa&quot;&gt;Utbildningsplan IA&lt;/a&gt;&lt;/td&gt;
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
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Min fina formul&auml;rsida&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Logga in&lt;/h1&gt;
        &lt;form action=&quot;index.html&quot; method=&quot;get&quot;&gt;
            &lt;label for=&quot;username&quot;&gt;Anv&auml;ndarnamn:&lt;/label&gt;
            &lt;input type=&quot;text&quot; name=&quot;username&quot; placeholder=&quot;Skriv ditt anv&auml;ndarnamn h&auml;r...&quot; id=&quot;username&quot;&gt;
            &lt;br&gt;
            &lt;label for=&quot;password&quot;&gt;L&ouml;senord&lt;/label&gt;
            &lt;input type=&quot;password&quot; name=&quot;password&quot; id=&quot;password&quot;&gt;
            &lt;br&gt;
            &lt;p&gt;Vilka skolor har du pluggat vid?&lt;/p&gt;
            &lt;p&gt;
                &lt;input type=&quot;checkbox&quot; name=&quot;school&quot; value=&quot;Malmo&quot; id=&quot;malmo&quot;&gt; &lt;label for=&quot;malmo&quot;&gt;Malm&ouml; universitet&lt;/label&gt;
                &lt;br&gt;
                &lt;input type=&quot;checkbox&quot; name=&quot;school&quot; value=&quot;Lund&quot;&gt; Lund universitet
                &lt;br&gt;
                &lt;input type=&quot;checkbox&quot; name=&quot;school&quot; value=&quot;Mitt&quot;&gt; Mittuniversitetet
            &lt;/p&gt;
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
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Min fina formul&auml;rsida&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Logga in&lt;/h1&gt;
        &lt;form action=&quot;http://mah.antontibblin.se/ia-gb/new-post&quot; method=&quot;post&quot;&gt;
            &lt;label for=&quot;name&quot;&gt;Namn: &lt;/label&gt;
            &lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot;&gt;
            &lt;label for=&quot;message&quot;&gt;Meddelande: &lt;/label&gt;
            &lt;textarea name=&quot;message&quot; id=&quot;message&quot;&gt;&lt;/textarea&gt;
            &lt;input type=&quot;submit&quot; value=&quot;Skapa inl&auml;gg&quot;&gt;  
        &lt;/form&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
