<h2>Föreläsning 3 - Tabeller och formulär</h2>

<hr>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/3DFfDdgE6gMX4H" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht16-da156a-tabeller-och-formulr" title="HT16 - DA156A - Tabeller och formulär" target="_blank">HT16 - DA156A - Tabeller och formulär</a> </strong> from <strong><a href="//www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h3>Dagens exempel</h3>

<p> Ni kan ladda ner hela webbplatsen i ZIP-format <a href="/lectures/3/Webbsida.zip">här</a></p>

<h4>table.html</h4>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Exempel p&aring; tabell&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;table border=&quot;1&quot;&gt;
			&lt;caption&gt;&Ouml;versikt av kurser&lt;/caption&gt;
			&lt;thead&gt;
				&lt;tr&gt;
					&lt;th&gt;&Aring;r&lt;/th&gt;
					&lt;th&gt;L&auml;speriod 1&lt;/th&gt;
					&lt;th&gt;L&auml;speriod 2&lt;/th&gt;
					&lt;th&gt;L&auml;speriod 3&lt;/th&gt;
					&lt;th&gt;L&auml;speriod 4&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tfoot&gt;
				&lt;tr&gt;
					&lt;td colspan=&quot;5&quot;&gt;L&auml;s mer p&aring; &lt;a href=&quot;http://mah.se&quot;&gt;mah.se&lt;/a&gt;&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tfoot&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;td rowspan=&quot;2&quot;&gt;1&lt;/td&gt;
					&lt;td&gt;Introduktion till Webbutveckling&lt;/td&gt;
					&lt;td&gt;Introduktion till interaktionsdesign&lt;/td&gt;
					&lt;td&gt;Informationsarkitektur I&lt;/td&gt;
					&lt;td&gt;Databasteknik&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;!-- H&auml;r kommer &quot;1&quot;-kolumnen fr&aring;n raden ovan --&gt;
					&lt;td&gt;Introduktion till datavetenskap&lt;/td&gt;
					&lt;td&gt;Introduktion till programmering&lt;/td&gt;
					&lt;td colspan=&quot;2&quot;&gt;Systemutveckling och Projekt I&lt;/td&gt;
                &lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
	&lt;/body&gt;
&lt;/html&gt;</code></pre>

<h4>form.html</h4>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Exempel p&aring; formul&auml;r&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;Exempelformul&auml;r&lt;/h1&gt;
		&lt;form action=&quot;http://webshare.mah.se/ctfroh/da158a/formtest.php&quot; method=&quot;get&quot;&gt;
			&lt;fieldset&gt;
				&lt;legend&gt;Information om dig&lt;/legend&gt;
				&lt;p&gt;
					&lt;label for=&quot;name&quot;&gt;Namn: &lt;/label&gt;
					&lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot; placeholder=&quot;Skriv ditt namn h&auml;r...&quot; required&gt;
				&lt;/p&gt;
				&lt;p&gt;
					&lt;label for=&quot;email&quot;&gt;Epostadress: &lt;/label&gt;
					&lt;input type=&quot;email&quot; name=&quot;email&quot; id=&quot;email&quot;&gt;
				&lt;/p&gt;
			&lt;/fieldset&gt;
			&lt;fieldset&gt;
				&lt;legend&gt;&Ouml;vrig information&lt;/legend&gt;
				&lt;p&gt;
					&lt;label for=&quot;date&quot;&gt;Ange datum: &lt;/label&gt;
					&lt;input type=&quot;date&quot; name=&quot;date&quot; id=&quot;date&quot;&gt;
				&lt;/p&gt;
				&lt;p&gt;
					&lt;input type=&quot;submit&quot; value=&quot;Skicka&quot;&gt;
				&lt;/p&gt;
			&lt;/fieldset&gt;
		&lt;/form&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>
