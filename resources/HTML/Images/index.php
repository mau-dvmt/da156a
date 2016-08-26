<h2>HTML: Bilder</h2>
<h3>1. Inledning</h3>
<p>Ett talessätt är att <i>en bild säger mer än tusen ord</i>, och visst vill vi ha möjlighet att inkludera bilder på våra webbplatser. Det kan inte bara bli mer informativt med bilder, utan ofta ger det även mer liv till webbsidan. Bilder är bra!</p>

<h3>2. Bildelementets uppbyggnad</h3>
<p>Elementet för att skapa en bild på en webbsida är <code>&lt;img&gt;</code>. Men bara genom att skriva <code>&lt;img&gt;</code> kommer man inte så långt. Man säger visserligen att en bild ska visas, <i>men inte vilken bild</i>. Vi behöver alltså specificera var bilden som vi vill visa ligger. Detta gör man genom attributet <code>src</code>, och sökvägen till bilden kan anges på två olika sätt:</p>
<ul>
    <li>Relativt</li>
    <li>Absolut</li>
</ul>
<h4>2.1. Sökvägar</h4>
<h5>2.1.1. Relativa sökvägar</h5>
<p>En reltiv sökväg innebär att man utgår från den plats som HTML-filen som bilden ska visas på finns. Detta innebär att man inte behöver oroa sig över vilken URL (webbadress) som bilden har - bara man vet var den ligger i förhållandet till HTML-filen där bilden ska visas. <b>Relativa sökvägar används när bilden man vill visa ligger inom webbplatsen</b>.</p>
<p>Ett exempel. Vi har en filstuktur som ser ut såhär:</p>
<pre>| Webbplats
| -- index.html
| -- sommar.jpg
</pre>
<p>Alltså vi har mappen "Webbplats" och i den mappen finns filerna "index.html" (vår webbsida) och "sommar.jpg" (vår bild). Skulle jag nu vilja visa bilden "sommar.jpg" på min webbplats ("index.html") skulle jag skriva följande:</p>

<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;img src="sommar.jpg"&gt;</code></pre>
<p class="figure-center">Figur 1. En bild med relativ sökväg</p>

<p>Detta eftersom jag <i>utgår</i> från platsen där "index.html" ligger, och från den säger jag att <i>i samma mapp, inkludera bilden "sommar.jpg"</i>.</p>

<p>Skulle strukturen på våra filer istället se ut såhär (och vi fortfarande vill visa bilden "sommar.jpg"):</p>
<pre>| Webbplats
| -- index.html
| -- Bilder
     | -- sommar.jpg
</pre>
<p>Alltså att bilden "sommar.jpg" nu ligger i mappen "Bilder" skulle jag behöva skriva följande HTML-kod för att visa bilden:</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;img src="Bilder/sommar.jpg"&gt;</code></pre>
<p class="figure-center">Figur 2. En bild med relativ sökväg</p>

<p>Detta eftersom bilden, i förhållande till "index.html", nu ligger i mappen "Bilder". Alltså måste jag först ange bildens mapp "Bilder" och sedan bildens namn "sommar.jpg" för att bilden ska visas korrekt på vår webbsida "index.html".</p>


<h5>2.1.2. Absoluta sökvägar</h5>
<p>Absoluta sökvägar innebär istället att man anger en <i>exakt</i> plats var bilden ligger, en hel webbadress. <b>Detta gör man när bilden man vill visa ligger utanför webbplatsen</b>, t.ex. om man vill visa bilder som man hittar genom en sökmotor.</p>
<p>Låt säga att jag vill visa en bild på Star Wars-logotypen och genom en sökmotor hittat en bild som ligger på adressen <code>https://c2.staticflickr.com/4/3801/13389420833_99e5b4bc70_b.jpg</code>. För att visa upp denna bild på min webbsida skulle jag då skriva:</p>

<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;img src="https://c2.staticflickr.com/4/3801/13389420833_99e5b4bc70_b.jpg"&gt;</code></pre>
<p class="figure-center">Figur 3. En bild med absolut sökväg</p>


<p>Med andra ord anger jag alltid hela sökvägen till en bild som ligger utanför min egen webbplats.</p>


<h4>2.2. Om en bild inte kan visas?</h4>
<p>Det hände ibland att bilder inte kan visas av olika anledningar. Det kan vara så att sökvägen till en bild helt enkelt är fel eller att en bild bytt plats (detta riskerar man framförallt när man länkar till bilder utanför sin webbplats, då man inte kan styra över om dessa t.ex. tas bort). Då skulle man ändå vilja berätta om att det var tänkt att visa en bild, och en text som beskriver vad bilden visar. Detta gör man genom attributet <code>alt</code>. Exempel på användning av <code>alt</code>-attributet:</p>

<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;img src="star_wars.jpg" alt="Star Wars-logotyp"&gt;</code></pre>
<p class="figure-center">Figur 4. Användning av <code>alt</code>-attributet</p>


<p>Testa att öppna kod-exemplet ovan i codepen och se hur bilden visas där (det finns ingen bild med sökvägen "star_wars.jpg") - och hur man på sätt använda sig utan <code>alt</code>-attributet för att förtydliga sina bilder.</p>
<p>En annan anledning att använda <code>alt</code>-attributet är att datorer som läser upp webbsidor (t.ex. hjälpmedel för synskadade) är att de kan berätta att det finns en bild, samt genom <code>alt</code>-attributet vad denna bild föreställer. Detta kan bli ännu mer användbart om t.ex. bilden visar en graf där <code>alt</code>-attributet berättar om vad som visas på grafen.</p>