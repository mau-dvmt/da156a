<h2>Indentering av kod</h2>
<h3>1. Introduktion</h3>
<p>Med indentering menar vi att man strukuterar upp sin källkod (skriva HTML-kod) på ett sätt som är enkelt för oss människor att läsa. Detta kan tyckas lite tidskrävande, och kanske till och med onödigt nu i början när man har HTML-dokument som har mindre än 100 rader kod, som dessutom jobbar med själv. Men tänk i ett större scenario, där ni är några stycken som jobbar med samma HTML-dokument, som dessutom innehåller över 1000 rader kod, då blir det en utmaning i att snabbt titta på koden och förstå den.</p>
<p>Med förstå menar vi här främst att se <i>strukturen på HTML-elementen</i>, alltså vilka HTML-element som är nästlade i varandra (vilka element som ligger i vilka element).</p>


<h4>1.1. Att läsa kod: Människan vs. datorn</h4>
<p>När datorn läser och tolkar vår HTML-kod (för att sedan visa upp den som en webbsida för oss) bryr den sig inte om indentering. Den bryr sig bara om i vilken ordning tecknen kommer i (och att de följer regelboken, HTML-standard). Med andra ord skulle vi kunna skriva ett enkelt HTML-dokument på följande vis:</p>

<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype HTML&gt;&lt;html&gt;&lt;head&gt;&lt;meta charset=&quot;utf-8&quot;&gt;&lt;title&gt;Testsida&lt;/title&gt;&lt;/head&gt;&lt;body&gt;&lt;h1&gt;V&auml;lkommen till min testsida!&lt;/h1&gt;&lt;p&gt;... och h&auml;r &auml;r en l&auml;nk till &lt;a href=&quot;http://mah.se&quot;&gt;Malm&ouml; H&ouml;gskolas&lt;/a&gt; webbplats.&lt;/p&gt;&lt;/body&gt;&lt;/html&gt;</code></pre>
<p class="figure-center">Figur 1</p>

<p>Samma kod som ovan, fast varje element på en ny rad:</p>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype HTML&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset=&quot;utf-8&quot;&gt;
&lt;title&gt;Testsida&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;V&auml;lkommen till min testsida!&lt;/h1&gt;
&lt;p&gt;... och h&auml;r &auml;r en l&auml;nk till &lt;a href=&quot;http://mah.se&quot;&gt;Malm&ouml; H&ouml;gskolas&lt;/a&gt; webbplats.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<p class="figure-center">Figur 2</p>

<p>Samma kod som ovan, fast indenterad:</p>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype HTML&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Testsida&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;V&auml;lkommen till min testsida!&lt;/h1&gt;
		&lt;p&gt;... och h&auml;r &auml;r en l&auml;nk till &lt;a href=&quot;http://mah.se&quot;&gt;Malm&ouml; H&ouml;gskolas&lt;/a&gt; webbplats.&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<p class="figure-center">Figur 3</p>

<p>Skulle ni kopiera källkoden från figur 1,2 eller 3 och visa upp den genom en webbläsare så kommer ni att se <i>exakt samma resultat</i>. D.v.s. datorn gör ingen skillnad på hur vi strukturerar upp vår kod. Skulle vi däremot försöka läsa källkoden ovan och förstå den, så är det första exemplet (figur 1) nästan oläsligt. Den andra figuren något bättre, och den trejde klart bäst!</p>
<p>I figur 3 kan vi tydligt se genom indenteringen (indragen för de olika elementen) stukturen på dokumentet. Vi kan se att <code>&lt;html&gt;</code>-elementet är det första elementet (så kallat rot-element) och genom indragen kan vi se att <code>&lt;html&gt;</code>-elementet har två barn (element i sig), nämligen elementen <code>&lt;head&gt;</code> och <code>&lt;body&gt;</code>. Detta då dessa två element ligger <i>en nivå (ett indrag)</i> under <code>&lt;html&gt;</code>-elementet (som är dess föräldrar).</p>


<p>Vidare kan vi se att <code>&lt;head&gt;</code>-elementet har två egna barn, <code>&lt;meta&gt;</code> och <code>&lt;title&gt;</code>. Samt att <code>&lt;body&gt;</code> har två egna barn, <code>&lt;h1&gt;</code> <code>&lt;p&gt;</code>.</p>
<p>Med andra ord så kan man se hela HTML-dookumentet och strukturen på elementen i det som ett stort släkträd med föräldrar, barn, syskon etc.</p>

<h3>2. Hjälpmedel</h3>
<p>Det är natruligtvis bäst att själv alltid indentera sin egen kod - så att man vet sin egen struktur (samt att man sparar tid). Men det finns hjälpmedel som i efterhand (när man skrivit klart koden) kan hjälpa till att indentera den korrekt. Ett sådant hjälpmedel är <a href="http://www.dirtymarkup.com/" target="_blank">dirty markup</a>. <b>OBS</b> Tänk dock på att er kod behöver validera för att dirty markup ska göra ett bra jobb att indentera er kod.</p>
<p>Så testa att ta koden i figur 1 ovan, klistra in den på sidan dirty markup och se hur resultatet blir!</p>