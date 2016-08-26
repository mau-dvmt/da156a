<h2>HTML: Länkar</h2>
<h3>1. Inledning</h3>
<p>Vad vore webben utan länkar? Inte speciellt utforskande i alla fall, tänk om man hade behövt veta alla webbadresser man ville besöka helt utantill (eller nerskrivna någonstans)? En av grundidéerna med World Wide Web var att man enkelt skulle kunna dela information med varandra - mellan olika servrar - genom navigation med länkar. Så ni ska vi se hur man skapar länkar i HTML.</p>

<h3>2. Länkelementets uppbyggnad</h3>
<p>Elementet för att skapa en länk på en webbsida är <code>&lt;a&gt;</code>. Men bara genom att skriva <code>&lt;a&gt;</code> kommer man inte så långt. Man behöver veta två saker till:</p>
<ul>
    <li>Vart man ska komma när man klickar på länken</li>
    <li>Namnet på länken (det man klickar på för att komma till länkens adress)</li>
</ul>
<p>En komplett länk skulle därför kunna se ut såhär:</p>
 <pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;a href="http://google.se"&gt;Klicka här för att komma till Google&lt;/a&gt;</code></pre>
<p class="figure-center">Figur 1. En länk som leder till Google</p>
<p>Attributet <code>href</code> säger vart man kommer när man klickar på länken, och texten mellan start-taggen <code>&lt;a&gt;</code> och sluttaggen <code>&lt;/a&gt;</code> blir texten på länken. Koden i exemplet ovan ger förljande resultat i webbläsaren:</p>
<p><a href="http://google.se">Klicka här för att komma till Google</a></p>
<hr>
<p>Precis som med bilder så kan man ange sökvägen, dit man kommer när man klickar på länken på två olika sätt: <i>relativt</i> eller <i>absolut</i>. Principen är den samma som för bilder.</p>

<h4>2.1. Sökvägar</h4>
<h5>2.1.1. Relativa sökvägar</h5>
<p>En reltiv sökväg innebär att man utgår från den plats som HTML-filen som man länkar <b>från</b> finns. Detta innebär att man inte behöver oroa sig över vilken URL (webbadress) som HTML-filen man <b>länkar till</b> har - bara man vet var den ligger i förhållandet till HTML-filen som man <b>länkar från</b>. <b>Relativa sökvägar används när länken man vill visa ligger inom webbplatsen</b>.</p>
<p>Ett exempel. Vi har en filstuktur som ser ut såhär:</p>
<pre>| Webbplats
| -- index.html
| -- about.html
</pre>
<p>Alltså vi har mappen "Webbplats" och i den mappen finns filerna "index.html" (vår startsida) och "about.html" (vår andra sida). Skulle vi nu vilja göra en länk från startsidan (index.html) som går till "about.html" så skrver vi såhär i filen "index.html":</p>

<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;a href="about.html"&gt;Länk till vår andra sida&lt;/a&gt;</code></pre>
<p class="figure-center">Figur 1. En länk med relativ sökväg</p>

<p>Detta eftersom jag <i>utgår</i> från platsen där "index.html" ligger, och från den säger jag att <i>i samma mapp, länka till filen "about.html"</i>.</p>

<p>Skulle strukturen på våra filer istället se ut såhär (och vi fortfarande vill länka till "about.html"):</p>
<pre>| Webbplats
| -- index.html
| -- Sidor
     | -- about.html
</pre>
<p>Alltså att HTML-sidan "about.html" nu ligger i mappen "Sidor" skulle jag behöva skriva följande HTML-kod för att länka korrekt:</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;a href="Sidor/about.html"&gt;Länk till vår andra sida&lt;/a&gt;</code></pre>
<p class="figure-center">Figur 2. En länk med relativ sökväg</p>

<p>Detta eftersom sidan vi länkar till ("about.html"), i förhållande till "index.html", nu ligger i mappen "Sidor". Alltså måste jag först ange HTML-filens mapp "Sidor" och sedan HTML-filens namn "about.html" för att länken ska fungera korrekt på vår webbsida "index.html".</p>


<h5>2.1.2. Absoluta sökvägar</h5>
<p>Absoluta sökvägar innebär istället att man anger en <i>exakt</i> plats var HTML-filen som vi vill länka till ligger, en hel webbadress. <b>Detta gör man när HTML-filen som man vill länka till ligger utanför webbplatsen</b>, t.ex. om man vill länka till någon externa webbplats så som t.ex. Google, Twitter, Facebook, etc.</p>
<p>Låt säga att jag då vill skapa en länk till Malmö Högskolas webbplats, som har adressen "http://mah.se", då skriver jag:</p>

<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;a href="http://mah.se"&gt;Malmö Högskola&lt;/a&gt;</code></pre>
<p class="figure-center">Figur 3. En länk med absolut sökväg</p>


<p>Med andra ord anger jag alltid hela sökvägen till en HTML-sida som ligger utanför min egen webbplats.</p>


<h4>3. Hur ska länken öppnas?</h4>
<p>Man kan genom attributet <code>target</code> ange hur man vill att länken ska öppnas när en besökare klickar på den. Det finns framförallt två värden här som är intressanta:</p>
<ul>
    <li>_self (standard, om man inte ange något annat)</li>
    <li>_blank</li>
</ul>
<p><b>_self</b> innebär att man öppnar webbsidan i samma fönster/flik som man just nu är i. Alltså försvinner man bort från den sida man just nu besöker.</p>
<p><b>_blank</b> innebär att man öppnar webbsidan i ett nytt fönster/i en ny flik, och sidan man besöker när man klickar på länken finns kvar.</p>

<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- Öppnar länken i samma fönster/flik --&gt;
&lt;a href="http://mah.se" target="_self"&gt;Malmö Högskola&lt;/a&gt;
&lt;!-- Öppnar länken i nytt fönster/ny flik --&gt;
&lt;a href="http://mah.se" target="_blank"&gt;Malmö Högskola&lt;/a&gt;</code></pre>
<p class="figure-center">Figur 4. Exempel på attributet <code>target</code></p>
<p>Öppna gärna exempelkoden i codepen och se vad som händer när du klickar på de olika länkarna.</p>