<h2>Laboration 4: Media Queries</h2>
<p>Som bekant, i synnerhet efter <a href="/lectures.php?nr=7">föreläsning 7</a>, är CSS 3 Media Queries en viktig teknik, och möjliggörande för det som kallas Responsive Web Design. Denna laboration går ut på att tillämpa media queries för att förbättra upplevelsen för mindre respektive större skärmar. Det är en god idé att läsa lite om responsive design innan eller i samband med laborationen.</p>

<h3>1. Basfallet</h3>
<p>I detta fall finns en färdig webbsida, som ser okej ut i &quot;mellanstora&quot; webbläsare. <strong><a href="/exercises/4/case/">Kika på den här</a></strong>.</p>
<p>Öppna webbsidan och bekanta dig med den. Testa också att ändra bredd på webbläsarfönstret.</p>
<p>Värt att notera om webbsidan:</p>
<ul>
    <li>Flexibel layout, med en maxbredd på drygt 900 pixlar (styrs av <code>#container</code>).</li>
    <li>Två visuella kolumner, <code>header</code> till vänster, och <code>#content</code>, <code>aside</code> och <code>footer</code> till höger.</li>
    <li>Några bonusegenskaper från CSS 3: typsnitt, tonad bakgrund, rundade hörn, skuggor.</li>
</ul>

<h3>2. Brytpunkt: smal skärm</h3>
<p>Nu är det dags att börja med media queries. Spara <a href="/exercises/4/case/index.html">HTML-</a> och <a href="/exercises/4/case/screen.css">CSS-fil</a> så att du kan följa med.</p>
<p><img src="/exercises/4/narrow.png" style="float:right;" alt="">Webbplatsen är inte lättläst om webbläsaren är för smal. Någonstans kring 480 px bredd verkar det lämpligt att övergå från två kolumner till en. Det viktiga beslutet är hur det ska se ut istället. Ska logotyp och navigation ligga överst (samma eller ändrat utseende?), eller ska innehållet vara i fokus. Du kan välja själv vilka förändringar som passar - men för enkelhetens skulle används den första varianten nedan.</p>
<p>Vår media query (vilket är något osnygg svengelska...), kan se ut såhär, och är lämplig att placera längst ner i stilmallen:</p>
<pre class="line-numbers language-markup" data-type="html"><code class="language-css">
@media screen and (max-width:480px) {

}
</code></pre>
<p>För att &quot;bli av&quot; med kolumnerna behöver vi återställa egenskaperna float och width. Detta är en bra utgångspunkt för minsta anpassningen (placera inuti ovanstående @media-block, alltså):</p>
<pre class="line-numbers language-markup" data-type="html"><code class="language-css">
header, #content, aside, footer{
    float:none;
    width:100%;
	margin:0;
}
header{
    margin-bottom:2em;
}
</code></pre>
<p>Testa detta, med mer eller mindre brett webbläsarfönster. Och lägg för all del till fler förändringar som du tycker passar.</p>

<h3>3. Rätt storlek för visningytan</h3>
<p>Som bekant så kan mobila enheter använda en annan storlek på visningsytan än den faktiska skärmen. En iPhone kan exempelvis utgå ifrån 980 px.
    <img src="https://speakerd.s3.amazonaws.com/presentations/5080014ab096bf0002035382/slide_28.jpg" style="border:1px solid #ddd;" alt="Bredden på webbläsarens visningsyta kan kommas åt genom document.documentElement.clientWidth">
</p>
<p>Vi behöver ange att vi istället föredrar en icke skalad visningsyta (viewport). Det görs enkelt:</p>
<pre class="line-numbers language-markup" data-type="html"><code class="language-markup">
&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
</code></pre>

<h3>4. Brytpunkt: bred skärm</h3>
<p>Över 920 px händer det inte så mycket - vi ser bara mer av bakgrunden. Istället vore det bra om den extra ytan utnyttjades. En variant är att lägga till en tredje kolumn, i form av det som nu ligger under artiklarna (i <code>aside</code>). Informellt förändringarna sammanfattas som:</p>
<ul>
    <li>Se till att vi har bredd nog i <code>#container</code>.</li>
    <li>Se till att de tre kolumnerna får plats bredvid varandra (<code>header</code>, <code>#content</code> och <code>aside</code>).</li>
    <li>Float.</li>
</ul>
<p>Ett förslag på kod (fritt gör förbättring):</p>
<pre class="line-numbers language-markup" data-type="html"><code class="language-css">
@media screen and (min-width:1100px) {
    #container{
        max-width:1600px;
    }
    header{
        width:15%;
    }
	#content{
		width:60%;
		margin-right:2%;
		float:left;
	}
	aside{
		width:21%;
		float:left;
		clear:none;
	}
	aside div{
	    float:none;
	    width:100%;
	    margin:0 0 1.5em;
	}
}
</code></pre>
<p>Hur ser det ut i din (breda) webbläsare?</p>

<h3>5. Vad mer?</h3>
<p>En slutversion kan se ut <a href="/exercises/4/case/index-final.html">såhär</a>. Men nu skulle det passa bra med valfria förbättringar från dig. Kanske några fler brytpunkter? Kanske bör man också testa i flera webbläsare för att säkra att det fungerar som förväntat i de vanligaste webbläsarna.</p>


<h3>6. Vidare laboration - Din tur!</h3>
<p>Använd nu en av dina tidigare layouter (t.ex. den från <a href="/exercises.php?title=3">labb 3</a>) - och mobilanpassa denna efter eget tycke och smak. Tänk på att försöka att ha användbarhet och tillgänglighet i fokus! =)</p>
