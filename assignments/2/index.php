<h2>Inlämningsuppgift 2</h2>
<p>Uppgiften går ut på att redovisa dina kunskaper kring JavaScript, liksom din förmåga att skapa en CSS-baserad layout som är responsiv. Detta gör du genom att lämna in ett resultat som följer specifikationerna nedan. Inlämningsuppgiften är individuell, vilket betyder att studenten enskilt ska skriva sin inlämning och kunna redogöra för alla delar av den.</p>

<h3>1. Uppgiften</h3>

<h4>1.1. Webbsidornas layout</h4>

<p>Du ska skapa en webbplats bestående av minst 2 webbsidor, som båda följer samma visuella utformning. Bilderna till vänster visar layouten för datorer och bilden längst till höger visar hur webbsidan ska se ut på en mobil.</p>

<div class="row">
    <div class="col-sm-12 col-md-7">
        <img src="/assignments/2/layout-1.png" alt="Webbplatsens layout ska följa denna mall: ett sidhuvud med titel och namn på upphovsman till webbplatsen, en horisontell navigationsmeny med länkar till alla webbsidor, ett innehållsområde och en enkel sidfot.">
        <img src="/assignments/2/layout-2.png" alt="Webbplatsens layout ska följa denna mall: ett sidhuvud med titel och namn på upphovsman till webbplatsen, en horisontell navigationsmeny med länkar till alla webbsidor, ett innehållsområde och en enkel sidfot.">
    </div>
    <div class="col-sm-12 col-md-4 col-md-offset-1">
        <img src="/assignments/2/layout-mobile.png" alt="Webbplatsens layout ska följa denna mall: ett sidhuvud med titel och namn på upphovsman till webbplatsen, en horisontell navigationsmeny med länkar till alla webbsidor, ett innehållsområde och en enkel sidfot." style="width: 100%;">
    </div>
</div>

<p>Webbsidornas layout måste följa beskrivningen/figuren ovan, men inom dessa ramar är du fri att välja utseendet.</p>

<h4>2.1. Innehåll på webbsidorna</h4>

<h5>2.1.2. Startsida</h5>

<p>Målet mer startsidan är att förklara varför webbplatsen existerar. En slumpmässig internetsurfare som hittar till din webbplats bör kunna förstå detta efter att ha läst startsidan. Det ska dessutom finnas <strong>ett formulär</strong> likt det som finns ovan på bilden hur startsidans layout ska vara.</p>

<p>Saker som kan vara bra att inkludera är alltså:</p>

<ul>
    <li>kort beskrivning av syftet med webbsida, kurs och program</li>
    <li>vem som står bakom</li>
    <li>kontaktuppgifter (e-postadress).</li>
</ul>

<h5>2.1.3. Om JavaScript</h5>

<p>Denna webbsida ska dels innehålla en löptext, en faktaruta, och dels körbara JavaScript-exempel (kod till dessa exempel presenteras längre ner).</p>

<p><strong>Löptext</strong></p>

<p>Syftet med texten är beskriva vissa intressanta koncept som relaterar till JavaScript. Inled med en kortare beskrivning om vad JavaScript är och vad det brukar användas till (du kanske redan har skrivit en sådan beskrivning?). Därefter ska texten beskriva tre av följande ämnen/koncept:</p>

<ul>
    <li>Välj en webbplats från nätet och beskriv hur JavaScript används där. (På en övergripande nivå, källkoden behöver inte studeras.)</li>
    <li>Vad är ett programmeringsspråk?</li>
    <li>Tillgänglighet och JavaScript, vad bör man tänka på?</li>
    <li>Vad är en algoritm?</li>
    <li>Vad är DOM, Document Object Model, och hur hänger det ihop med JavaScript?</li>
    <li>Vad är ett JavaScript-bibliotek (eller -ramverk) och varför används sådana?</li>
    <li>Två nya möjligheter med JavaScript och HTML5. Rita med <code>canvas</code>, och positionering med W3C Geolocation API. (Beskriv övergripande.)</li>
</ul>

<p>Välj de tre punkterna som intresserar dig mest och skriv minst 150 ord om var och en. För varje punkt ska du också inkludera minst en länk till en webbsida med ytterligare information.</p>

<p><strong>Faktaruta</strong></p>
<p>I faktarutan till höger i layouten ska ni ange följande:</p>
<ul>
    <li>Vilket år gavs JavaScript ut?</li>
    <li>Vem skapade språket?</li>
    <li>Vilken är den senaste versionen av JavaScript?</li>
    <li>Vilken är JavaScripts filändelse?</li>
</ul>


<p><strong>JavaScript-exempel</strong></p>
<p>Utöver texten ska denna webbsida också innehålla två interaktiva exempel som visar några varianter av vad som kan göras med JavaScript. Nedan finns kod för följande:</p>
<ul>
    <li>En funktion som ändrar textens färg på webbsidan.</li>
    <li>En funktion som visar upp bilder i ett större format.</li>
</ul>

<p>Er uppgift är att:</p>
<ol>
    <li>Inkludera JavaScript-koden nedan på ett korrekt sätt.</li>
    <li>Skapa det HTML-element/attribut som behövs för att de två funktionerna ska köras korrekt.</li>
</ol>

<pre class="language-javascript line-numbers" data-type="javascript"><code class="language-javascript line-numbers">
// Väntar på att sidan ska bli redo för att köra vårt JavaScript
$(document).ready(function(){
	$("#changeColor").on("click", function() {
        // Frågar användaren efter en textfärg
		var color = prompt("Ange ny textfärg");
        // Ändrar textfärgen på alla element
		$("*").css("color", color);
	});

	$("img.bigImage").on("click", function() {
        // Hämtar adressen till bilden som användaren klickade på
		var src = $(this).attr("src");
        // Lägger till en större version av bilden (dold)
		$("body").prepend("&lt;img src='" + src + "' style='position: fixed; width: 50%; left: 25%; top: 10%; z-index: 6; border: 10px solid #fff; box-shadow: 0 0 20px #000; display: none;' id='imageModal'&gt;")
        // Lägger till en svart bakgrund (dold)
		$("body").prepend("&lt;div id='backgroundModal' style='top: 0; bottom: 0; left: 0; right: 0; position: fixed; background-color: rgba(0,0,0,0.5); display:none; z-index: 5;'&gt;&lt;/div&gt;");
        // Visar bakgrunden genom en animation
		$("#backgroundModal").fadeIn(500);
        // Visar bilden genom en animation
		$("#imageModal").fadeIn(500);

        // När man klickar på den svarta bakgrunden tas bilden bort
		$("#backgroundModal").on("click", function() {
			$("#backgroundModal").fadeOut(500);
			$("#imageModal").fadeOut(500);
			setTimeout(function() {
				$("#backgroundModal").remove(500);
				$("#imageModal").remove(500);
			}, 500);
		})
	});
});
</code></pre>

<p><strong>Viktigt</strong>, för att ovanstående kod ska fungera behöver vi även inkludera JavaScript-biblioteket <code>jQuery</code>, vilket ni enkelt gör genom elementet nedan. Tänk på att detta element ska ligga <em>före</em> elementet som inkluderar JavaScript-koden ovan.</p>

<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

<p>Du ansvarar för att JavaScript-funktionerna fungerar som beskrivet.</p>

<h3>3. Kravspecifikation</h3>

<ul>
    <li>Webbplatsen måste följa beskrivningen ovan, avseende innehåll, visuell utformning och funktionalitet.</li>
    <li>Alla webbsidor ska validera enligt HTML5.</li>
    <li>Semantisk HTML ska användas. Detta betyder att taggar ska välja, så att de i så stor grad som möjligt beskriver innehåll och struktur.</li>
    <li>Alla webbsidor ska använda samma stilmall(ar).</li>
    <li>CSS-mall(ar) ska validera enligt CSS nivå 3.</li>
    <li>Din JavaScript-kod ska läggas i en extern fil.</li>
</ul>

<h3>4. Redovisning</h3>

<p>Ditt resultat ska publiceras på <strong>WebShare och länken till startsidan lämnas in på it&#8217;s learning</strong>. Till inlämningen ska du även bifoga en kopia på <strong>alla webbplatsens filer i en ZIP-fil</strong>. Deadline är söndagen den 15/10, klockan 23:55. Vid senare inlämning bedöms resultatet i samband med inlämningsuppgift 3.</p>


<h3>5. Notis om individuellt genomförande</h4>
<div class="well">
    <p>Det inlämnade resultatet ska vara skapat av dig och ska representera ditt individuellt utförda arbete. Samarbete (gemensamt skapande av resultat) är inte tillåtet.</p>

    <p>Plagiat kan leda till anmälning för fusk enligt högskoleförordningens 10 kap om disciplinära åtgärder för studenter. Med plagiat menas kopiering/avskrift från böcker, artiklar, studentarbeten (egna eller andras), eller andra källor utan korrekt hänvisning, i syfte att få det att framstå som du själv har skapat resultatet. Såväl text som källkod kan plagieras.</p>
</div>
