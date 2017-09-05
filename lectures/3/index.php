<h2>Föreläsning 3 - Tabeller och formulär</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/GGWaIRxVYYE8VL" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht17-da156a-tabeller-formulr" title="HT17 - DA156A - Tabeller &amp; Formulär" target="_blank">HT17 - DA156A - Tabeller &amp; Formulär</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h3>Dagens exempel</h3>

<h4>table.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
   &lt;head&gt;
       &lt;meta charset=&quot;utf-8&quot;&gt;
       &lt;title&gt;Tabeller&lt;/title&gt;
   &lt;/head&gt;
   &lt;body&gt;
       &lt;h1&gt;Tabeller&lt;/h1&gt;

       &lt;table border=&quot;1&quot;&gt;
           &lt;thead&gt;
               &lt;tr&gt;
                   &lt;th&gt;&Aring;r&lt;/th&gt;
                   &lt;th&gt;LP1&lt;/th&gt;
                   &lt;th&gt;LP2&lt;/th&gt;
                   &lt;th&gt;LP3&lt;/th&gt;
                   &lt;th&gt;LP4&lt;/th&gt;
               &lt;/tr&gt;
           &lt;/thead&gt;
           &lt;tbody&gt;
               &lt;tr&gt;
                   &lt;td rowspan=&quot;2&quot;&gt;1&lt;/td&gt;
                   &lt;td&gt;Introduktion till webbutveckling&lt;/td&gt;
                   &lt;td&gt;Introduktion till programmering&lt;/td&gt;
                   &lt;td colspan=&quot;2&quot;&gt;Systemutveckling och projekt 1&lt;/td&gt;
               &lt;/tr&gt;
               &lt;tr&gt;
                   &lt;td&gt;Introduktion till datavetenskap&lt;/td&gt;
                   &lt;td&gt;Introduktion till interaktionsdesign&lt;/td&gt;
                   &lt;td&gt;Databasteknik&lt;/td&gt;
                   &lt;td&gt;Informationsarkitektur I&lt;/td&gt;
               &lt;/tr&gt;
           &lt;/tbody&gt;
           &lt;tfoot&gt;
               &lt;tr&gt;
                   &lt;td colspan=&quot;5&quot;&gt;
                       &lt;a href=&quot;https://edu.mah.se/tgiaa&quot;&gt;L&auml;s mer om programmet h&auml;r&lt;/a&gt;
                   &lt;/td&gt;
               &lt;/tr&gt;
           &lt;/tfoot&gt;
       &lt;/table&gt;

   &lt;/body&gt;
&lt;/html&gt;</code></pre>

<h4>form.html</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
   	&lt;head&gt;
   		&lt;meta charset=&quot;utf-8&quot;&gt;
   		&lt;title&gt;Formul&auml;r&lt;/title&gt;
   	&lt;/head&gt;
   	&lt;body&gt;
   		&lt;h1&gt;Formul&auml;r&lt;/h1&gt;
   		&lt;form action=&quot;forms.html&quot; method=&quot;get&quot;&gt;
   			&lt;p&gt;
   				&lt;label for=&quot;name-field&quot;&gt;Namn&lt;/label&gt;
   				&lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name-field&quot; placeholder=&quot;Ange namn...&quot; required&gt;
   			&lt;/p&gt;
   			&lt;p&gt;
   				&lt;label for=&quot;email-field&quot;&gt;Epost&lt;/label&gt;
   				&lt;input name=&quot;email&quot; id=&quot;email-field&quot; placeholder=&quot;Ange epost...&quot; type=&quot;email&quot; required&gt;
   			&lt;p&gt;
   				&lt;input type=&quot;submit&quot; value=&quot;Skicka!&quot;&gt;
   			&lt;/p&gt;
   		&lt;/form&gt;
   	&lt;/body&gt;
&lt;/html&gt;
</code></pre>
