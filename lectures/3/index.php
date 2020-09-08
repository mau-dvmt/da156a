<h2>Föreläsning 3 - Tabeller och formulär</h2>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.1972%;"><iframe src="https://speakerdeck.com/player/d35e1be87454422785526ee9b3b67076" style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;" allowfullscreen scrolling="no" allow="encrypted-media"></iframe></div>

<hr>

<a href="/resources/pdf/F3-Tabeller-formular.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<h4>table.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Informationsarkitektprogrammet&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;table border=&quot;1&quot;&gt;
            &lt;caption&gt;&Ouml;versikt av IA-programmets f&ouml;rsta temin&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                    &lt;th&gt;&Aring;r&lt;/th&gt;
                    &lt;th&gt;L&auml;speriod 1&lt;/th&gt;
                    &lt;th&gt;L&auml;speriod 2&lt;/th&gt;
                    &lt;th&gt;L&auml;speriod 3&lt;/th&gt;
                    &lt;th&gt;L&auml;speriod 4&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;td rowspan=&quot;2&quot;&gt;1&lt;/td&gt;
                    &lt;td&gt;Introduktion till webbutveckling&lt;/td&gt;
                    &lt;td&gt;Introduktion till programmering&lt;/td&gt;
                    &lt;td&gt;Databasteknik&lt;/td&gt;
                    &lt;td&gt;Informationsarkitektur f&ouml;r flerplattformer&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;!-- H&auml;r kommer 1:n att l&auml;ggas in automatiskt --&gt;
                    &lt;td&gt;Introduktion datavetenskap&lt;/td&gt;
                    &lt;td&gt;Interkationsdesign f&ouml;r informationsarkitekter&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Systemutveckling och projekt I&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td rowspan=&quot;2&quot;&gt;2&lt;/td&gt;
                    &lt;td&gt;OOP och modellering f&ouml;r IA&lt;/td&gt;
                    &lt;td&gt;Webbtj&auml;nster&lt;/td&gt;
                    &lt;td&gt;Utv&auml;rderingsmetoder f&ouml;r anv&auml;ndarupplevelse&lt;/td&gt;
                    &lt;td&gt;Flerplattformersapplikationer med webbtekniker&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Information bortom sk&auml;rmar&lt;/td&gt;
                    &lt;td&gt;Informationsdesign&lt;/td&gt;
                    &lt;td&gt;Informationss&auml;kerhet&lt;/td&gt;
                    &lt;td&gt;Forskningsmetodik&lt;/td&gt; 
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td rowspan=&quot;2&quot;&gt;3&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Examensprojekt&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Examensarbete&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td colspan=&quot;4&quot;&gt;Valbara kurser&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
            &lt;tfoot&gt;
                &lt;tr&gt;
                    &lt;td colspan=&quot;5&quot;&gt;L&auml;s mer om programmet h&auml;r: &lt;a href=&quot;https://edu.mah.se/tgiaa&quot;&gt;https://edu.mah.se/tgiaa&lt;/a&gt;&lt;/td&gt;
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
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Exempelformul&auml;r&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;h1&gt;Logga in&lt;/h1&gt;

        &lt;form action=&quot;form.html&quot; method=&quot;post&quot;&gt;
            &lt;p&gt;
                &lt;label for=&quot;username-input&quot;&gt;Anv&auml;ndarnamn:&lt;/label&gt;
                &lt;input type=&quot;text&quot; name=&quot;username&quot; id=&quot;username-input&quot; placeholder=&quot;Skriv ditt anv&auml;ndarnam h&auml;r...&quot;&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;label for=&quot;password-input&quot;&gt;L&ouml;senord: &lt;/label&gt;
                &lt;input type=&quot;password&quot; name=&quot;password&quot; id=&quot;password-input&quot; placeholder=&quot;Skriv ditt l&ouml;senord h&auml;r...&quot;&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;label for=&quot;agree-input&quot;&gt;Jag godk&auml;nner vilkoren&lt;/label&gt;
                &lt;input type=&quot;checkbox&quot; name=&quot;agree&quot; id=&quot;agree-input&quot;&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type=&quot;submit&quot; value=&quot;Logga in&quot;&gt;
            &lt;/p&gt;
        &lt;/form&gt;

    &lt;/body&gt;
&lt;/html&gt;
</code></pre>


<h4>form.html (2) - Gästboken</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;G&auml;stboksformul&auml;r&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action=&quot;http://mah.antontibblin.se/ia-gb/new-post&quot; method=&quot;POST&quot;&gt;
            &lt;p&gt;
                &lt;label for=&quot;input-name&quot;&gt;Namn: &lt;/label&gt;
                &lt;input type=&quot;text&quot; id=&quot;input-name&quot; name=&quot;name&quot; required&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;label for=&quot;input-message&quot;&gt;Meddelande&lt;/label&gt;
                &lt;textarea id=&quot;input-message&quot; name=&quot;message&quot; required&gt;&lt;/textarea&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type=&quot;submit&quot; value=&quot;Skapa inl&auml;gg&quot;&gt;
            &lt;/p&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
