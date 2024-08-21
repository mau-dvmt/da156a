<h2>Föreläsning 3 - Tabeller och formulär</h2>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/bXzNzdQGuOYojC" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>

<a href="/resources/pdf/3-2023.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<a href="/lectures/3/table.jpg"><img src="/lectures/3/table.jpg" alt="Tabell ritad på tavlan"></a>

<h4>table.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;&Ouml;versikt &ouml;ver IA-programmet&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;table border=&quot;1&quot;&gt;
            &lt;caption&gt;Kurser i IA-programmet&lt;/caption&gt;
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
                    &lt;td&gt;Introduktion till webbutveckling&lt;/th&gt;
                    &lt;td&gt;Introduktion till programmering&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Systemutv. och projekt 1&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Intro studier i dv&lt;/td&gt;
                    &lt;td&gt;Interaktionsdesign f&ouml;r IA&lt;/td&gt;
                    &lt;td&gt;Databasteknik&lt;/td&gt;
                    &lt;td&gt;IA f&ouml;r flerplattformsapp&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th rowspan=&quot;2&quot;&gt;2&lt;/th&gt;
                    &lt;td&gt;OOP f&ouml;r IA&lt;/td&gt;
                    &lt;td&gt;Webbtj&auml;nster&lt;/td&gt;
                    &lt;td&gt;Metoder f&ouml;r UX&lt;/td&gt;
                    &lt;td&gt;Forskningsmetodik&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Information bortom sk&auml;rmar&lt;/td&gt;
                    &lt;td&gt;Informationsdesign&lt;/td&gt;
                    &lt;td&gt;Informationss&auml;kerhet&lt;/td&gt;
                    &lt;td&gt;Webbutveckling f&ouml;r fler.&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th rowspan=&quot;2&quot;&gt;3&lt;/th&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Examensprojekt&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;C-uppsats&lt;/td&gt;
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
                        &lt;a href=&quot;https://edu.mah.se/tgiaa&quot;&gt;Klicka h&auml;r f&ouml;r att l&auml;sa hela utbildningsplanen&lt;/a&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tfoot&gt;
        &lt;/table&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>

<h4>form.html (1)</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Formul&auml;r&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action=&quot;http://mah.antontibblin.se/ia-gb/new-post&quot; method=&quot;post&quot;&gt;
            &lt;label for=&quot;name-field&quot;&gt;Namn:&lt;/label&gt;
            &lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name-field&quot; required&gt;
            &lt;br&gt;
            &lt;label for=&quot;message-field&quot;&gt;Meddelande: &lt;/label&gt;
            &lt;textarea id=&quot;message-field&quot; name=&quot;message&quot; required&gt;&lt;/textarea&gt;
            &lt;br&gt;
            &lt;input type=&quot;checkbox&quot; name=&quot;agree&quot; value=&quot;yes&quot; id=&quot;agree-box&quot;&gt;
            &lt;label for=&quot;agree-box&quot;&gt;Jag godk&auml;nner allt&lt;/label&gt;
            &lt;br&gt;
            &lt;input type=&quot;submit&quot; value=&quot;Skapa inl&auml;gg&quot;&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>