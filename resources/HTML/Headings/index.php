<h2>HTML: Rubriker</h2>
<h3>1. Inledning</h3>
<p>Rubriker är något som är vanligt att man använder när man författar text-dokument. Därför blir det genast viktigt att man vet hur man ska hantera rubriker i HTML-dokument. Den grunläggande regeln är ju att ju större en rubrik är - ju viktigare är den. Samtidigt kan det vara viktigt att i längre dokument kunna strukturera upp sitt innehåll i rubriker och underrubriker för att förenkla översikten i dokumentet. I HTML-standarden finns det sex storlekar på rubriker, från 1 (största) till 6 (minsta).</p>

<h3>2. Olika nivåer av rubriker</h3>
<p>För att skriva en rubrik i använder man någon av de element som finns för att repesentera rubriker, dessa här:</p>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- Den st&ouml;rsta rubriken --&gt;
&lt;h1&gt;Rubrik 1&lt;/h1&gt;
&lt;!-- Den n&auml;st st&ouml;rsta rubriken --&gt;
&lt;h2&gt;Rubrik 2&lt;/h2&gt;
&lt;!-- Den tredje st&ouml;rsta rubriken --&gt;
&lt;h3&gt;Rubrik 3&lt;/h3&gt;
&lt;!-- Den fj&auml;rde st&ouml;rsta rubriken --&gt;
&lt;h4&gt;Rubrik 4&lt;/h4&gt;
&lt;!-- Den femte st&ouml;rsta rubriken --&gt;
&lt;h5&gt;Rubrik 5&lt;/h5&gt;
&lt;!-- Den sj&auml;tte st&ouml;rsta rubriken --&gt;
&lt;h6&gt;Rubrik 6&lt;/h6&gt;
</code></pre>
<p class="figure-center">Figur 1. Rubriksnivåer</p>
<p>Anledningen till att elementen börjar med ett "h" är för att det är förkortning för "heading".</p>
<p>Klicka gärna på knappen "Öppna i CodePen" för att se hur dessa rubriker ser ut i webbläsaren. Du kan då notera att den största rubriken <code>&lt;h1&gt;</code> automatiskt får det största storleken på texten, samt att <code>&lt;h6&gt;</code> får det minsta.</p>


<p>Det är sedan upp till er att välja rätt rubriknivå för ert innehåll, men en tumregel är att alltid ha <code>&lt;h1&gt;</code>-elementet för er huvudrubrik på er webbsida, och sedan vandra neråt i nivån. Detta bl.a. för att sökmotorer i sina sökresultat tar hänsyn till vilken er huvudrubrik (och ev. underrubriker) är.</p>