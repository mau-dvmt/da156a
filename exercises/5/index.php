<h2>Laboration 5 - JavaScript och ramverk</h2>
<p>I denna laboration ska vi titta på praktiska tillämpningar av JavaScript och webbutvecklingsramverket <a href="http://getbootstrap.com/">Bootstrap</a>. Laborationen är uppdelad i två delar:</p>
<ol>
    <li>Att använda sig utav färdig JavaScript-kod</li>
    <li>Att använda sig utav ett webbutvecklingsramverk (Bootstrap)</li>
</ol>
<p>De två delarna är <strong>fristående från varandra</strong> - och kommer alltså att bli två olika webbsidor.</p>

<h3>Del 1 - Att använda färdigt JavaScript</h3>
<p>Vi ska nu använda lite JavaScript-kod som gör det möjligt att visa/dölja innehåll i en artikel genom att klicka på artikelns sidhuvud. Ta en titt på följande JavaScript-kod:</p>

<pre class="language-javascript line-numbers" data-type="javascript"><code class="language-javascript line-numbers">
$(document).ready(function() {
    // Kod inne i denna funktionen körs när sidan har laddats klart

    /*
        Döljer alla element (utom "&lt;header&gt;") i alla element av typen
        "&lt;article&gt;" med klassen "foldable"
    */
    $("article.foldable > *:not(header)").hide();

    /*
        När man klickar på ett "&lt;header&gt;"-element i ett "&lt;article&gt;"-
        element med klassen "foldable" så döljs/visas alla element
        som ligger efter "&lt;header&gt;"-elementet som användaren klickade på
    */
    $("article.foldable header").on("click", function() {
        $(this).nextAll("*").slideToggle();
    });
});
</code></pre>

<h4>1. Förbered ett HTML-dokument</h4>
<p>Börja med att skapa en ny mapp för denna del av labben (t.ex. mappen <code>Labb 5.a</code>) med ett HTML-dokument i (t.ex. HTML-filen <code>index.html</code>) (detta borde ni vara experter på nu 😊). Det är i denna mapp som alla filer i denna del av labben ska ligga i sedan.</p>

<h4>2. Skapa och inkludera JavaScript-dokumentet</h4>
<p>Skapa ett nytt JavaScript-dokument (t.ex. <code>script.js</code>) och lägg i samma mapp som den HTML-fil som du skapade i steg 1. Klistra sedan in JavaScript-koden ovan i dokumentet. Slutligen länka in följande JavaScript i ditt HTML-dokument, genom koden:</p>

<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!-- Inkluderar JavaScript-biblioteket jQuery --&gt;
&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer&gt;&lt;/script&gt;
&lt;!-- Inkluderar vårt egna JavaScript-dokument --&gt;
&lt;script src="script.js" defer&gt;&lt;/script&gt;
</code></pre>


<p><em>Vad ska jag klistra in koden?</em>. Det korta svaret är antingen i "&lt;head&gt;"-elementet, eller sist i "&lt;body&gt;"-elementet. För den intresserade finns <a href="https://stackoverflow.com/questions/436411/where-should-i-put-script-tags-in-html-markup">bra läsning här</a> om för- och nackdelar med de olika metoderna.</p>

<h4>3. Skapa en korrekt HTML-struktur för att aktivera JavaScript-funktionaliteten</h4>
<p>Nu är det dags att lista ut hur ni sa skriva er HTML-kod för att JavaScriptet som ni precis länkat in ska fungera. Försök att analysera JavaScript-koden ovan och rita ett träd (DOM-träd) över hur en artikel ska se ut. Jobba gärna i grupp för att lista ut detta. Det är en <stong>utmaning</strong> - och skulle ni inte lyckas så prata gärna med labbhandledare för tips!</p>
<p>När ni sedan skapat korrekt HTML-struktur så kommer ni kunna klicka på huvudet ("&lt;header&gt;""-elementet) i artikeln för att visa/dölja artikelns innehåll!</p>

<h4>4. Styla webbsidan</h4>
<p>Ge lite snabb styling på er sida, så att innehållet blir presenterat på ett snyggt sätt. Tänk på att formgivningen ska ligga i ett eget CSS-dokument och länkas till från HTML-dokumentet.</p>

<h4>Exempel på hur resultatet kan se ut</h4>
<img src="/exercises/5/5.1.gif" alt="Result">
<p>När ni fått det att fungera som ovan är ni klara med del 1!</p>

<h3>Del 2 - Bildspel med Bootstraps plugin</h3>
<p>I denna del så ska vi använda oss utav ramverket <a href="http://getbootstrap.com/">Bootstrap</a>. Målet är att skapa ett webbsida med struktur enligt bootstraps dokumentation, med ett bildspel. En stor del i labben är att lära sig att läsa och förstå dokumentation, varav instruktionerna är sparsamma.</p>

<h4>1. Skapa en webbsida utifrån bootstraps ramverk</h4>
<p>Ni kan nu välja mellan två metoder att skapa er webbplats:</p>
<ol>
    <li>Skapa layouten själva, börja då att läsa <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">här</a></li>
    <li>Utgå från en färdig layout som bootstrap erbjuder, börja då att läsa <a href="https://getbootstrap.com/docs/5.3/examples/">här</a></li>
</ol>
<h4>2. Bildspel med komponenten <em>Carousel</em></h4>
<p>När ni fått en fram en webbsida som ni tycker ser bra ut är det dags för er att implementera ett bildspel. Bootstrap har en <a href="https://getbootstrap.com/docs/5.3/components/carousel/">komponent</a> som vi ska använda till detta. Ditt jobb är ni är nu att läsa dokumentationen för komponenten - och implementera bildspelet på din webbsida.

<h4>Exempel på hur resultatet kan se ut</h4>
<img src="/exercises/5/5.2.gif" alt="Result">

<h3>Del 3 - Bootstrap and beyond!</h3>
<p><strong>Denna del är viktig träning, men behöver inte redovisas.</strong></p>
<p>Nu är det upp till dig att bygga ut din webbsida. Titta gärna på <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">Bootstraps dokumentation</a> för att inspirerad kring hur man kan använda deras komponenter för att bygga en mordern webbplats. Välj gärna ut några komponenter i bootstrap som ni implementerar på er webbplats. Fråga gärna labbhandledare om ni har några frågor eller andra tankar kring detta!</p>
