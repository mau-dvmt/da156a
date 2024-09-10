<h2>Föreläsning 3 - Tabeller och formulär</h2>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/96suSx3cLqZMQp" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>

<a href="/resources/pdf/HT24-f3.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<a href="/lectures/3/table-24-1.jpg"><img src="/lectures/3/table-24-1.jpg" alt="Tabell ritad på tavlan"></a>

<hr>

<a href="/lectures/3/table-24-2.jpg"><img src="/lectures/3/table-24-2.jpg" alt="Tabell ritad på tavlan"></a>

<h4>table.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Tabeller&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;table border=&quot;1&quot;&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                    &lt;th&gt;&lt;/th&gt;
                    &lt;th&gt;L&auml;speriod 1&lt;/th&gt;
                    &lt;th&gt;L&auml;speriod 2&lt;/th&gt;
                    &lt;th&gt;L&auml;speriod 3&lt;/th&gt;
                    &lt;th&gt;L&auml;speriod 4&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;th rowspan=&quot;2&quot;&gt;Termin 1&lt;/th&gt;
                    &lt;td&gt;Webbutveckling&lt;/td&gt;
                    &lt;td&gt;Programmering&lt;/td&gt;
                    &lt;td colspan=&quot;2&quot;&gt;Systemutveckling och projekt 1&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Datavetenskap&lt;/td&gt;
                    &lt;td&gt;Interaktionsdesign&lt;/td&gt;
                    &lt;td&gt;Databasteknik&lt;/td&gt;
                    &lt;td&gt;Informationsarkitektur&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
        &lt;/table&gt;
    &lt;/body&gt;
&lt;html&gt;
</code></pre>

<hr>

<h4>form.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Formul&auml;r&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Logga in&lt;/h1&gt;
        &lt;form action=&quot;form.html&quot; method=&quot;get&quot;&gt;
            &lt;p&gt;
                &lt;label for=&quot;username-field&quot;&gt;Anv&auml;ndarnamn: &lt;/label&gt;
                &lt;input type=&quot;text&quot; name=&quot;username&quot; id=&quot;username-field&quot; placeholder=&quot;Skriv ditt anv&auml;ndarnamn h&auml;r...&quot; required&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;label for=&quot;password-field&quot;&gt;L&ouml;senord: &lt;/label&gt;
                &lt;input type=&quot;password&quot; name=&quot;password&quot; id=&quot;password-field&quot;&gt;
            &lt;/p&gt;
            &lt;input type=&quot;submit&quot; value=&quot;Logga in&quot;&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<hr>

<h4>guestbook.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Formul&auml;r&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Skapa gästboksinlägg&lt;/h1&gt;
        &lt;form action=&quot;https://guestbook.ia-mau.se/new-post&quot; method=&quot;get&quot;&gt;
            &lt;p&gt;
                &lt;label for=&quot;name-field&quot;&gt;Namn: &lt;/label&gt;
                &lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name-field&quot; placeholder=&quot;Skriv ditt namn h&auml;r...&quot; required&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;label for=&quot;message-field&quot;&gt;Meddelande: &lt;/label&gt;
                &lt;textarea id=&quot;message-field&quot; name=&quot;message&quot;&gt;&lt;/textarea&gt;
            &lt;/p&gt;
            &lt;input type=&quot;submit&quot; value=&quot;Skapa meddelande&quot;&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>