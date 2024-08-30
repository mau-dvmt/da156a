<h2>Laboration 2</h2>
<h3>1. Syfte</h3>
<p>Formulär är historiskt sett den primära metoden för kommunikation mellan webbläsare (klient) och webbserver. I HTML finns det en mängd element specifikt utformade för datainmatning; dessa ska utforskas i i denna laboration. Du kommer även att studera en vanlig metod för att presentera data: tabeller.</p>

<h3>2. Lärandemål</h3>
<p>Efter genomförd laboration ska du:</p>
<ul>
    <li>veta hur formulär byggs upp i HTML.</li>
    <li>veta hur tabeller byggs upp i HTML.</li>
    <li>kunna använda de vanligaste formulärkontrollerna.</li>
    <li>vet hur tillgänlighet och användbarhet optimeras med avseende på benämningar.</li>
</ul>

<h3>3. Uppgiften</h3>
<p>Ponera att du fått i uppdrag av en hyresvärd att producera ett formulär för ansökan om lägenhet. Hyresvärden har redan, genom en extern utvecklare, ett skript för att ta emot och spara ansökningar, men behöver din hjälp för att producera ett HTML-formulär. Detta formulär behöver inte vara grafiskt tilltalande, men måste vara tillgängligt för så många personer som möjligt.</p>

<h4>3.1. Lägenhetstabell</h4>
<p>I samma HTML-dokument ska det även finnas kort information om hyresvärdens lediga objekt. Då det ska vara enkelt att snabbt få en bild om hur objekten skiljer sig, ska denna information presenteras i tabellform.</p>
<p>Börja med att skapa ett nytt HTML-dokument (HTML5 standard), för att sedan producera tabellen som över lediga lägenheter. Nedan ser du vilka kolumner som ska finnas, tillsammans med exempeldata.</p>
<p><img src="/exercises/2/2a-01.png" alt="Tabellen ska ha följande rubriker: Objektnummer, Antal rum, Våning, Yta, Hyra och Adress" title="" /></p>
<p>Tabellen ska byggas med taggar som beskriver innehållet så bra som möjligt. Förutom de vanligaste tabellelementen <code>table</code>, <code>tr</code> (tabellrad) och <code>td</code> (tabellcell) så ska du använda:</p>
<ul>
    <li><code>thead</code> och <code>tbody</code> för att skilja på tabellhuvud och tabellinnehåll.</li>
    <li><code>th</code> för markera alla rubrikceller.</li>
    <li><code>caption</code> för att inkludera en beskrivning av tabellen.</li>
</ul>
<p>Du kan läsa mer om alla dessa element i en <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table">genomgång i Mozilla Developer Network</a>.</p>

<h4>3.2. Steg 2: Ett grundläggande formulär</h4>
<p>Under tabellen ska du nu konstruera ett ansökningsformulär. Ett HTML-formulär kan vara väldigt enkelt. Låt oss studera ett exempel:</p>

<pre class="line-numbers language-markup" data-type="html"><code class="language-markup">&lt;form action="http://webshare.mah.se/ctfroh/da158a/formtest.php"&gt;
    &lt;fieldset&gt;
        &lt;legend&gt;Ansök om bostad&lt;/legend&gt;
        &lt;input type="button" value="Ansök"&gt;
    &lt;/fieldset&gt;
&lt;/form&gt;</code></pre>
<p>Från detta kan det utläsas att:</p>
<ul>
    <li>All data från detta formulär ska skickas till ett mottagande skript (på en server hos Malmö högskola, under användaren ctfroh).</li>
    <li>Som enda innehåll i formuläret finns en knapp, med texten &#8220;ansök&#8221;.</li>
    <li>Knappen är innesluten i ett <code>fieldset</code> eftersom den strikta dokumenttypen säger att endast blockelement får placeras direkt i ett formulär. Det hade gått bra att använda <code>div</code>, <code>p</code> eller andra blockelement istället - men <code>fieldset</code> är specifikt till för att ge mer struktur till formulär. Den kan användas för att dela upp formulär i olika delar; här används <code>fieldset</code> endast en gång.</li>
</ul>
<p><em>Infoga ovanstående miniformulär i ditt HTML-dokument</em>. Hur ser det ut? Vad står på knappen och vad händer när man trycker på den?</p>
<ul>
    <li>För att formuläret verkligen ska skickas när man klickar på knappen så måste den vara av en speciell typ. Undersök type-attributet och uppdatera knappen så att den skicka formuläret.</li>
    <li>Uppdatera även formuläret så att det skickas via HTTP-metoden <code>POST</code>.</li>
</ul>

<h4>3.3. Steg 3: Inmatningsmöjligheter</h4>

<p>Användaren ska ju kunna mata in lite information också. Börja med förnamn och efternamn, med en textruta till varje. Skapa dessa två textrutor ovanför submit-knappen. För att skapa textrutor använder du taggen <code>input</code> igen, men med ett annat värde på attributet <code>type</code>.</p>

<p>För data ska kunna skickas krävs en benämning på dessa data (något du kanske känner till från HTTP-standarden, där data skickas namn-/värdepar). Konkret betyder detta att du måste namnge alla formulärkontroller som ska skicka data - detta gör du med attributet <code>name</code>. Tänk på att välja namn som syftet med formulärkontroller och undvik specialtecken och mellanslag i namnen.</p>

<p>När du kommit hit kan formuläret se ut såhär:</p>

<p><img src="/exercises/2/2a-02.png" alt="2 enradiga textrutorn med &quot;Förnamn&quot; resp. &quot;Efternamn&quot;. En knapp med texten &quot;Ansök&quot;" title="" /></p>

<p>När detta formulär skickas (man klickar på &#8220;Ansök&#8221;) bör det se ut ungefär såhär:</p>

<p><img src="/exercises/2/2a-03.png" alt="first_name = IFYLLT FÖRNAMN, last_name = IFYLLT_EFTERNAMN" title="" /></p>

<p>Exakta namn är inte jätteviktiga, bara de är beskrivande. Om det inte syns någon grön ruta alls så skickas inga data via <code>POST</code>. Om inga namn/värden syns så är det problem med <code>name</code>-attributen.</p>

<h3 id="steg4:katillgnglighetochanvndbarhet">4. Steg 4: Öka tillgänglighet och användbarhet</h3>

<p>Nästa steg är att förbättra hur benämningarna på textrutorna är skrivna (benämningarna är &#8220;Förnamn&#8221; och &#8220;Efternamn&#8221; i exempelbilden ovan). Detta görs med taggen label, som just är till för att koppla ihop benämningar med formulärkontroller</p>

<p><code>label</code> ger ingen visuell skillnad, med ökar användbarheten genom att göra benämningen klickbar, samt ökar tillgängligheten genom att göra benämningens syfte explicit. Läs mer om dessa fördelar på <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label">Mozilla developer</a>. Här är ett exempel:</p>

<pre class="line-numbers language-markup" data-type="html"><code class="language-markup">&lt;label for="pris"&gt;Pris&lt;/label&gt;
&lt;input type="text" name="pris" id="pris"&gt;</code></pre>

<ul>
    <li>Textrutan (<code>input</code>) har attributet <code>id</code>, som unikt identifierar den i dokumentet.</li>
    <li>Benämningen (<code>label</code>) har attributet <code>for</code>, som anger vilket element den ska kopplas ihop med.</li>
    <li><code>label</code> kan självklart användas med andra formulärrelaterade taggar än input.</li>
</ul>

<p><em>Gör om ditt formulär så att båda textrutorna har en <code>label</code>.</em></p>

<h3 id="steg5:utkaformulret">5. Steg 5: Utöka formuläret</h3>

<p>Du har nu provat på de grundläggande koncepten kring formulärskapande. Det finns några andra viktiga formulärelement som är bra att känna till. Här är några förslag på vad du kan utöka med för att öva detta:</p>

<ul>
    <li>Nya textfält för telefonnummer och nuvarande adress (adress kanske kräver mer än ett textfält, använd bästa omdöme kring vad som blir lättast att använda).</li>
    <li>En <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea">textarea</a> där man kan ange sina eventuella extrabehov (allergier etc.).</li>
    <li>En &#8220;<a href="http://reference.sitepoint.com/html/select">drop-down</a>&#8221; där man får välja bostad att ansöka om. Valen ska motsvara de objektnummer som finns i tabellen.</li>
    <li>Radioknappar där man anger om man ska bo ensam, sambo eller flera stycken i lägenheten. Radioknapp är en skapas med hjälp av <code>input</code>, <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input">läs mer här</a>.</li>
    <li>Checkboxar där man anger att man a) är över 18 och b) har godkänner att ens uppgifter hanteras enligt personuppgiftslagen.</li>
</ul>

<h3>6. Validering &amp; feedback</h3>
<p>Som alltid, se till att dokumentet <a href="http://validator.w3.org/">validerar</a>. Be kursare och labbassistenter om feedback om du känner dig osäker för en djupar bild av vad som är bra och dåligt. </p>
<p>När du är nöjd med formulär- och tabellskapandet kan du fortsätta till <a href="/exercises.php?title=2b">del två, om CSS</a>!</p>

<hr>
<h3>7. Bonus! Bygg formulär till föreläsningens gästbok!</h3>
<p><em>Denna uppgift är frivillig, men rekommenderad</em>.</p>
<h4>7.1. Gästbokstjänst</h4>
<p>På föreläsningen så tittade vi på en gästbok - där man genom ett formulär kan skicka <code>name</code> och <code>message</code> som ska sparas i gästboken. Ni hittar gästboken här: <a href="http://mah.antontibblin.se/ia-gb">http://mah.antontibblin.se/ia-gb</a>.</p>
<p><strong>Tänk på att allt ni skickar till gästboken finns tillgängligt för de som besöker den</strong>.</p>
<p>Man kan skicka in nya inlägg till gästboken genom antingen metoden <code>GET</code> eller <code>POST</code>. <code>GET</code> kan man använda som metod i formulär, men även direkt genom URL (webbadressen) på följande sätt:</p>
<ul>
    <li>
        http://mah.antontibblin.se/ia-gb/new-post?name=<em>namn</em>&amp;message=<em>meddelande</em>
    </li>
</ul>
<p>Ovan så byt ut <em>ditt namn</em> mot ditt namn, och <em>ditt meddelande</em> mot ditt meddelande - och testa att skriva in adressen i en webbläsare. Fungerar det som förväntat?</p>
<h4>7.2. Bygg ett formulär till gästboken</h4>
<p>Ditt formulär ska ha följande information:</p>
<ul>
    <li>Formuläret ska skickas till adressen: <a href="http://mah.antontibblin.se/ia-gb/new-post">http://mah.antontibblin.se/ia-gb/new-post</a>
    </li>
    <li>Formuläret ska skickas genom metoden <code>POST</code></li>
    <li>Formuläret ska ha följande komponenter:
        <ul>
            <li>Ett textfält för namn (textfältets namn ska vara <code>name</code>)</li>
            <li>En textarea för meddelande (textareans namn ska vara <code>message</code>)</li>
            <li>En knapp för att skicka iväg formuläret, med valfri text</li>
        </ul>
    </li>
</ul>
<p>När du byggt klart ditt formulär så kan du på ett enkelt sätt göra flera gästboksinlägg.</p>
<p>Du har nu inte bara byggt ett formulär som skickar iväg data - du har även byggt ihop din hemsida (formulär) med en <em>extern <strong>webbtjänst</strong></em> - coolt! 😎</p>