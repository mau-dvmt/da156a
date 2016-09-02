<h2>Laboration 2b: CSS</h2>

<h3>1. Syfte</h3>
<p>CSS, <em>Cascading Style Sheets</em>, utgör grunden för i princip alla visuella aspekter av en modern webbplats. CSS är inte begränsat till webbsidor i HTML, utan är ett generellt språk för stilmallar med många användningsområden. Webben är dock dess största anvädningsområde och det är detta som ska utforskas i denna laboration.</p>

<h3>2. Lärandemål</h3>
<p>Efter genomförd laboration ska du:</p>
<ul>
    <li>veta hur CSS skrivs (selektor och deklarationsblock).</li>
    <li>veta hur CSS appliceras på ett HTML-dokument.</li>
    <li>kunna ändra grundläggande CSS-egenskaper, som färger och storlekar</li>
</ul>

<h3>3. Uppgift</h3>
<p>I denna laboration ska du utgå ifrån ett färdigt HTML-dokument för att gradvis bygga på detta med CSS. På vägen kommer du att stöta på många av de grundläggande koncept som krävs för att utforma webbsidor.</p>

<p>Börja med att spara hem detta <a href="/exercises/2b/forskning.html">HTML-dokument</a> (högerklicka, välj &#8220;Spara som&#8221; eller motsvarande, alternativt kopiera källkoden). Studera hur detta dokument är uppbyggt - HTML-strukturen är viktigt för hur CSS-reglerna ska utformas.</p>

<p>När du öppnar dokumentet i en webbläsare så kommer du finna att det inte är så visuellt tilltalande. Detta kan avhjälpas med stilmall skriven i CSS! Genom en sådan stilmall kan webbläsarens standardvärde för presentation överskrivas och eget utseende definieras. Först krävs en plats att skriva CSS på - detta kan göras med elementet <code>style</code>, som infogas inom head:</p>

<pre class="line-numbers language-markup" data-type="css"><code class="language-css">&lt;style type=&quot;text/css&quot;&gt;
/* Här ska CSS skrivas */
&lt;/style&gt;</code></pre>

<h4>3.1. Grundstil</h3>

<p>När du lagt till <code>style</code>-taggen är det dags att faktiskt skriva lite CSS!
Om du inte gjort det, läs kurslitteratur, och/eller Sitepoint (som följande
länkar går till) om <a href="http://reference.sitepoint.com/css/rulesets">CSS-regler</a> och
<a href="http://reference.sitepoint.com/css/declarationblocks">deklarationsblock</a>.
Det kan även vara bra att undersöka hur <a href="http://reference.sitepoint.com/css/comments"> kommentarer fungerar</a>, eftersom välkommenterad kod alltid är lättare att förstå.</p>

<p>Fortsätt sedan med att skriva en CSS-regel som anger bakgrundfärg (<code>background-color</code>) och textfärg (<code>color</code>) för <code>body</code> (för dina färgval kan du använda <a href="http://colorschemedesigner.com/">Color Scheme Designer</a>).</p>

<p>Övergå därefter till att ändra på textens storlek och typsnitt (fortfarande i CSS-regeln för <code>body</code>, eftersom den påverkar allt innehåll i dokumentet). Detta gör du med egenskaperna font-size respektive <code>font-family</code></p>

<div class="extra">
    <h5>3.1.2 Om typsnitt - tänk på</h5>
    <ul>
    <li>Alla typsnitt finns inte installerade överallt. <a href="http://media.24ways.org/2007/17/fontmatrix.html">Denna tabell</a> kan hjälpa dig att avgöra hur vanliga typsnitt är.</li>
    <li>Ange gärna mer än ett typsnitt. Genom att ge en lista på flera typsnitt så kan man även styra andra- och tredjeval (osv.). Typsnitten separeras helt enkelt med kommatecken: <code>font-family: Helvetica, Arial, sans-serif;</code>.</li>
    <li>Ange alltid typsnittsfamilj som sistaval. Detta handlar oftast om typsnitt med eller utan <a href="http://sv.wikipedia.org/wiki/Serif">seriffer</a> (<code>sans-serif</code> eller <code>serif</code>).</li>
    <li>Om ett typsnitt har fler än ett ord i namnet så måste det anges inom citattecken, ex: <code>"Times New Roman"</code>.</li>
    <li>
        I moderna webbläsare går det dock att inkludera egna typsnitt, tack vare <a href="http://reference.sitepoint.com/css/at-fontface">@font-face</a> i CSS. På webbintro.se görs detta med hjälp av typsnitt från <a href="http://www.google.com/webfonts">Google web fonts</a>.
    </li>
    </ul>
</div>

<h4>3.2. Extern CSS-mall</h4>

<p>Fram till hit har du skrivit din CSS i en <em>inbäddad mall</em> (med taggen <code>style</code>). Det är nästan alltid bättre att hålla sin CSS-kod i en <em>extern mall</em>, alltså en helt separat fil. På det viset kan samma stilmall användas i flera HTML-dokument, samtidigt som man separerar på presentation och struktur.</p>

<p>Kopiera all din CSS-kod till en ny, tom textfil. Spara denna fil i samma mapp som ditt HTML-dokument, med filändelsen <code>.css</code>. När du verifierat att filen är sparad kan du ta bort <code>style</code>-taggen, inklusive allt innehåll och sedan applicera den externa mallen istället. Detta gör du genom taggen <code>link</code>:</p>

<pre class="line-numbers language-markup" data-type="html"><code class="language-markup">&lt;link href=&quot;minmall.css&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot;&gt;</code></pre>

<p>Om dokumenttypen HTML5 används, kan attributet <code>type</code> hoppas över:</p>

<pre class="line-numbers language-markup" data-type="html"><code class="language-markup">&lt;link href=&quot;minmall.css&quot; rel=&quot;stylesheet&quot;&gt;</code></pre>

<p>Du bör byta namnet <code>minmall.css</code> till det faktiskta filnamn som du sparade din mall som. Om allt går bra så bör ditt dokument se ut precis som innan. Kontrollera annars filnamn och att HTML-dokument och CSS-fil faktiskt är sparade i samma mapp.</p>

<h4>3.3. Avvikande stilar &amp; länkar</h4>

<p>När man arbetar med CSS så är det en bra strategi att skriva så generella regler som möjligt. Det sparar jobb och gör koden mer kompakt, genom att minska upprepning. Men ofta vill man ha några avvikande egenskaper; allt bör ju inte se likadant ut. Skriv en regel som byter typsnitt för alla rubriker (<code>h1-h6</code>). Du kan även ändra färg eller andra egenskaper som du tycker passar.</p>

<p>Något som av användbarhetsmässiga skäl ofta har en distinkt stil är länkar. Dessa är också speciella i den bemärkelsen att de har en viss internaktivitet; de ser oftast annorlunda ut när de är besökta eller när muspekaren svävar ovanför. För att definiera stilar för dessa olika tillstånd används psuedoklasser. I detta skede behöver du inte fördjupa dig i vad begreppet innebär (men om du vill erbjuder <a href="http://www.w3.org/TR/CSS21/selector.html#pseudo-classes">W3C mer information</a>). Studera följande exempel, som är det typiska användningen:</p>

<pre class="line-numbers language-css" data-type="css"><code class="language-css">a{
    /* Här definieras grundstilen för alla länkar */
}
a:visited{
    /* Gäller bara besökta länkar */
}
a:hover, a:focus{
    /* Gäller bara när muspekaren är över (hover), eller när
    länken är markerad med hjälp av tangenbordet (focus) */
}</code></pre>

<p>Använd denna mall för att bestämma hur dina länkar ska se ut. Se till att skillnaden mellan de tre tillstånden är tillräckligt stor så att användaren märker det.</p>

<h4>3.4. Identiteter</h4>

<p>Studera sedan följande tre CSS-regler. Läs igenom dem, jämför med strukturen på HTML-dokumentet och försök tänka dig vad resultatet kan bli. Klistra sedan in dessa regler i dokumentet och se vad som händer.</p>

<pre class="line-numbers language-css" data-type="css"><code class="language-css">table{
    background-color:#ffff99;
    border:1px solid #cccccc;
    width:300px;
}
thead{
    background-color:#ffff33;
}
td, th{
    padding:5px;
}</code></pre>

<p>Som du bör ha noterat förändrar dessa stilregler utseendet för båda tabellerna i dokumentet. Behåll dessa stilregler, men komplettera med en ny som endast påverkar den andra tabellen (valfritt utseende).</p>

<p>För att åstadkomma detta behöver du kunna identifiera den andra tabellen i din CSS. Detta görs naturligt nog med HTML-attributet <code>id</code>. Den andra tabellen har redan en identitet definierad, <code>id="personal"</code>. Du kan således använda selektorn <code>#personal</code> för att välja ut denna tabell. Skapa en sådan regel och ändra till exempel bakgrundfärgen.</p>

<h4>3.5. Klasser</h4>

<p>En identitet är unik och kan endast förekomma en gång i samma HTML-dokument. Du kan ha flera id med olika namn, men för att påverka flera element samtidigt bör klasser användas. Det fungerar på precis samma vis som identiteter, men HTML-attributet heter, naturligt nog, <code>class</code> och i CSS används punkt (<code>.minklass</code>) istället för brädgård (<code>#mittid</code>).</p>

<p>Skapa en CSS-regel som påverkar klassen <code>viktig</code> och ge den ett utmärkande utseende. De två översta listpunkterna har denna klass och får således detta utseende.</p>

<h3>4. Validering och feedback</h3>

<p>När du är klar kan ditt dokument se ut som bilden nedan. Exakta färger, typsnitt, osv. är valfri - men du får gärna jobba med att göra dokumentet (mer) visuellt tilltalande!</p>

<p><img src="/exercises/2b/2b-01.png" alt="" width="100%" /></p>

<p>Såväl kursare som labbassistenter kan ge bra feedback. Se även till att såväl HTML som CSS validerar.</p>
