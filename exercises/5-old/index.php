<h2>Laboration 4: Interaktivitet med JavaScript</h2>
<p>
    I denna laboration kommer du att utforska enkel händelsehantering med JavaScript, med fokus på att dynamiskt uppdatera presentation.
</p>

<h3>1. Lärandemål</h3>
<p>Efter genomförd laboration ska du:</p>
<ul>
    <li>
        I JavaScript kunna använda <abbr title="Document Object Model">DOM</abbr> för att hämta referenser till enstaka element på en webbsida.
    </li>
    <li>
        Kunna hantera händelserna <code>click</code> och <code>load</code>
        med egna JavaScript-funktioner.
    </li>
    <li>
        Ha förståelse för hur stilmallar och JavaScript kan användas tillsammans.
    </li>
</ul>

<h3>2. Instruktioner</h3>
<p>
    Målet med laborationen är att producera en enkel webbsida som förbluffar användaren med interaktiva stilförändringar. Eller, åtminstone, en webbsida som ser lite annorlunda ut beroende på vilken knapp användaren klickar på. Nedan finner du en kort beskrivning av resultatet.
</p>
<p>Länk till exemplet för den lilla miniföreläsningen i början av labben hittar ni <a href="/exercises/4/JavaScript-Exempel.zip">här</a>.</p>
<p class="focus">
    <img src="/exercises/4/i1.png" alt="Texten har webbläsarens standardutseende">
</p>
<p>
    Webbsidan ska innehålla en kort text, vars faktiska budskap inte är viktigt. Bilden ovan visar en synnerligen låg fantasinivå och använder den klassiska texten
    <a href="http://en.wikipedia.org/wiki/Lorem_ipsum">lorem ipsum</a>. Din text skulle t ex kunna innehålla en beskrivning av webbsidan.
</p>
<p>
    I anslutning till textområdet ska det finnas tre knappar, som användaren kan klicka på för att byta utseende på texten. Målet är att var och en av knapparna ska resultera i ett unikt utseende. Här är tre exempel:
</p>
<ul class="focus">
    <li>
        <img src="/exercises/4/i2.png" alt="Texten har ett formellt utseende">
    </li>
    <li>
        <img src="/exercises/4/i3.png" alt="Texten har ett roligt utseende med starka färger">
    </li>
    <li>
        <img src="/exercises/4/i4.png" alt="Texten ser ut som en gammal datorterminal (grön text, svart bakgrund)">
    </li>
</ul>
<p>
    Du är fri att välja utseende för de tre varianterna helt själv, bara de skiljer sig markant.
</p>


<h4>2.1. Genomförande</h4>
<p>
    Att implementera denna funktionalitet kan göras i tre steg.
</p>
<ol>
    <li>Skapa det underliggande HTML-dokumentet.</li>
    <li>Skapa en stilmall med CSS-regler för respektive utseende.</li>
    <li>Skapa ett JavaScript som gör det möjligt att byta utseende.</li>
</ol>

<h5>2.1.1. HTML-dokumentet</h5>
<p>
    Det första steget bör inte ställa till med några problem. Att skapa textstycke och huvudrubrik har du gjort många gånger; knapparna kan du skapa med taggen <code>button</code>. Placera all text inom ett <code>div</code>-element med identiteten "message" (resterande instruktioner kommer att utgå ifrån detta).
</p>

<h5>2.1.2. Stilmallen</h5>
<p>
    Välj först om du vill ha en inbäddad eller extern stilmall (det senare rekommenderas). Sedan kan du välja den grundstil som dokumentet ska ha. I exemplet ovan är den enda grundstilen att <code>#message</code> ska ha en fast bredd på <code>400px</code>, samt ha lite marginal och padding.
</p>
<p>
    Resten av innehållet i stilmallen bör vara de olika utseendena för textrutan. Detta görs lämpligtvis genom tre olika klasser. I exemplet ovan är klasserna döpta till <code>formal</code>,
    <code>happy</code> och <code>computer</code>. Med denna metod kan utseendet på textrutan bytas enkelt, genom att ange en annan klass. Såhär kan källkoden ut se ut för det sista av exemplets utseende:
</p>
<pre class="line-numbers language-markup" data-type="html"><code class="language-markup">
&lt;div id=&quot;message&quot; class=&quot;computer&quot;&gt;
	...
&lt;/div&gt;</code></pre>
<p>
    När du gjort de tre varianterna och kan byta utseende manuellt (genom att byta klass), så är det dags att gör skriptet som bytar stil via knapparna.
</p>

<h5>2.1.3. Byta utseende med JavaScript</h5>
<p>
    Målet är att bygga ett kort skript som bytar klass på textrutan (som därmed ändrar utseende). Det ska vara ett externt JavaScript, så börja med att skapa en ny fil som du sparar med filändelsen
    <code>.js</code> i samma mapp. Inkludera JavaScript-filen genom taggen <code>script</code>, som på tidigare laborationer.
</p>
<p>
    Börja med att skapa funktionen <code>setUp</code>, som köras när webbsidan laddats klart. Till slut ska funktionen se till att saker och ting händer när knapparna klickas, men först så kan den göra en enkel utskrift, så att du ser att den fungerar.
</p>
<pre class="line-numbers language-javascript" data-type="html"><code class="language-javascript">
function setUp() {
	alert(&quot;Nu har sidan laddats&quot;);
}</code></pre>
<p>
    För att se till att funktionen faktiskt körs vid sidladdning, kan den speciella variabeln
    <code>window</code> användas - specifikt ska händelsen <code>onload</code> ställas in.
</p>
<pre class="line-numbers language-javascript" data-type="html"><code class="language-javascript">
// Funktionen setUp ska köras vid sidladdning:
window.onload = setUp;</code></pre>
<p>
    När du kommit såhär långt bör du säkerställa att alert-rutan faktiskt kommer upp när sidan laddats klart.
</p>
<p>
    Du behöver nu tre stycken funktioner - de som faktiskt ska se till att utseendet (klassen) kan bytas. Den generella mallen för funktionerna kan sammanfattas som:
</p>
<ol>
    <li>Hämta en referens till textrutan (via identiteten <code>message</code>).</li>
    <li>Ändra attributet/egenskapen <code>className</code> till önskat klassnamn.</li>
    <li>Det finns inget steg 3.</li>
</ol>
<pre class="line-numbers language-javascript" data-type="html"><code class="language-javascript">
// Ändrar textrutans klass till 'formal'
function setFormalStyle(){
	var messageBox = document.getElementById(&quot;message&quot;);
    // Ni kan även skriva: var messageBox = document.querySelector(&quot;#message&quot;);
	messageBox.className = &quot;formal&quot;;
}</code></pre>
<p>
    Ovan ser du ett exempel på en sådan funktion. Du får själv skapa de två andra efter samma mall (tänk på att använda dina egna klassnamn överallt).
</p>
<p>
    Till sist måste du se till att klassbytarfunktionerna faktiskt körs när man klickar på knapparna. Det ska göras innuti <code>setUp</code> (istället för alert-rutan). Du gör det separat för varje knapp, genom att hämta först hämta en referens till knappen och sedan ändra attributet <code>onclick</code>. Om du ger knapparna vars en identitet (t ex med samma namn som du kallar motsvarande utseende) så blir det enkelt att hämta knappreferenser.
</p>
<pre class="line-numbers language-javascript" data-type="html"><code class="language-javascript">
// En knapp antas ha identiteten &#x27;formal&#x27;
document.getElementById(&quot;formal&quot;).onclick = setFormalStyle;
// Ni kan även skriva: document.querySelector(&quot;#formal&quot;).onclick = setFormalStyle;</code></pre>
<p>
    När du lyckats se till att knapparna fungerar som de ska, så har du också lyckats med laborationen.
</p>

<h4>2.2. Frivillig, men rekommenderad förbättring</h4>
<p>
    Du kanske tycker att det verkar lite onödigt med tre nästan identiska funktioner? Som med de flesta programmeringsproblem så går det att skapa mer eller mindre eleganta lösningar. Det vore elegant att kunna använda samma funktion till alla knapparna.
</p>
<p>
    Anledningen att ha separata funktioner är att klassnamnet ska vara olika för knapparna - i övrigt är de identiska. Men det är också möjligt att i en funktion lista ut vilken knapp som klickats på, och utifrån detta välja rätt klass. En variant att göra detta lyder:
</p>
<ul>
    <li>
        Ge knapparna samma identitet som den resulterande klassen ska bli (att klick på knappen med id
        <code>formal</code> ska ge textrutan klassen <code>formal</code>).
    </li>
    <li>
        I JavaScript-funktionen kan en referens till det klickade elementet hämtas med hjälp av den speciella variabeln <code>this</code>. Från denna kan namnet på id-attributet läsas av.
    </li>
    <li>
        Namnet på id-attributet kan sedan tilldelas som klassnamn till textrutan, med samma metod som tidigare visats.
    </li>
</ul>
<p>
    Nedanstående funktion visar detta. Byta så att denna funktion körs vid klick för alla tre av knapparna.
</p>
<pre class="line-numbers language-javascript" data-type="html"><code class="language-javascript">
function setStyle() {
	// this &auml;r en referens till det element som aktiverade funktionen
	//   (som klickades p&aring;)
	var styleName = this.id;
	// Textrutans klassnamn blir samma som knappens id:
	document.getElementById(&quot;message&quot;).className = styleName;
    // Ni kan även skriva: document.querySelector(&quot;#message&quot;).className = styleName;
}</code></pre>

<h3>3. Feedback</h3>
<p>
    Som vanligt, se till att HTML och CSS validerar - och hör med labbhandledare och kursare angående kvalitet för din JavaScript-kod.
</p>
