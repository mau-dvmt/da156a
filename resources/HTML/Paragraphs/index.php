<h2>HTML: Paragrafer & text</h2>
<h3>1. Inledning</h3>
<p>När man skriver text/dokument/rapporter/etc. är det viktigt att man delar upp sin brödtext i stycken. Detta framförallt för att läsaren ska få ett bättre "flow" och översikt när denna läser texten. Men även för att texten i varje stycke <i>på något vis hör ihop</i>. När vi läser en text är det enkelt för oss att lista ut vilken text som hör ihop - det är inte lika enkelt (snarare just nu smått omöjligt) för en dator att göra detta på en webbplats. Det är därför viktigt att vi tydligt märker ut stycken i våra texter så att både vi <i>och</i> datorn kan förstå vad som är stycken.</p>

<h3>2. Korrekt styckesindelning i HTML</h3>
<p>För att skapa ett stycke i HTML använder man sig utav elementet <code>&lt;p&gt;</code>, som är en förkortning av "paragraph". Det kan t.ex. se ut såhär:</p>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- Det första stycket --&gt;
&lt;p&gt;Detta är mitt första, just nu väldigt korta, stycke&lt;/p&gt;
&lt;!-- Det andra stycket --&gt;
&lt;p&gt;Detta är mitt andra, just nu väldigt korta, stycke&lt;/p&gt;
&lt;!-- Det tredje stycket --&gt;
&lt;p&gt;Detta är mitt tredje, just nu väldigt korta, stycke&lt;/p&gt;</code></pre>
<p class="figure-center">Figur 1. Styckesindelning genom elemtet <code>&lt;p&gt;</code></p>
<p>Klicka gärna på knappen "Öppna i CodePen" för att se hur dessa stycken ser ut i webbläsaren. Du kan då notera att det automatiskt i webbläsaren läggs till "luft", eller mellanrum mellan styckena så att läsbarheten ökar för oss.</p>

<h4>2.1. Felaktig styckesindelning i HTML</h4>
<p>Något som man (tyvärr) ofta ser är att man i HTML-koden skapar sina stycken med elemetet <code>&lt;br&gt;</code> istället för elementet <code>&lt;p&gt;</code>. <code>&lt;br&gt;</code>-elementet finns till för radbrytningar ("br" är förkortning för "break"), och ska användas till radbrytningar <i>inom t.ex. ett stycke</i> och <b>inte för att skapa stycken</b>. Tyvärr ser man ofta att det felaktigt används på detta sätt:</p>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- Det är tre stycken --&gt;
&lt;p&gt;
    Detta är mitt första, just nu väldigt korta, stycke
    &lt;br&gt;
    &lt;br&gt;
    Detta är mitt andra, just nu väldigt korta, stycke
    &lt;br&gt;
    &lt;br&gt;
    Detta är mitt tredje, just nu väldigt korta, stycke
&lt;/p&gt;</code></pre>
<p class="figure-center">Figur 2. <b>Felaktig</b> styckesindelning genom elemtet <code>&lt;p&gt;</code></p>
<p>Om ni öppnar exemplet i CodePen så kan ni se att resultatet ser <i>liknande ut</i>, men nu har datorn ingen aning om det faktiskt är tre stycken som vi "har gjort", dator tolkar detta som <b>ett stycke med radbrytningar i</b>.</p>
<p>Så tänk på detta när ni lägger in text och skapar era HTML-dokument, att ni skapar era stycken på ett korrekt sett, enligt HTML-standarden.</p>


<h3>3. Fetstil och kursiv text</h3>
<p>Det händer ofta att man vill göra delar av sin text, eller ord, fetstilta eller kursiva. Det finns olika element för dessa, men i kursen kommer vi att använda följande element för att göra fetstil/kursiv text:</p>
<ul>
    <li><code>&lt;strong&gt;</code> för att göra text <strong>fetstilt</strong></li>
    <li><code>&lt;em&gt;</code> för att göra text <em>kursiv</em></li>
</ul>
<p>Exempel på hur man använder detta är:</p>

<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- Ett stycke med fetstil text --&gt;
&lt;p&gt;
    &lt;strong&gt;
        Här är ett stycket med text i fetstil
    &lt;/strong&gt;
&lt;/p&gt;
&lt;!-- Ett stycke med ett ord i fetstil --&gt;
&lt;p&gt;
    Här är ett stycket med text i &lt;strong&gt;fetstil&lt;/strong&gt;
&lt;/p&gt;
&lt;!-- Ett stycke med kursiv text --&gt;
&lt;p&gt;
    &lt;em&gt;
        Här är ett stycket med kursiv text
    &lt;/em&gt;
&lt;/p&gt;
&lt;!-- Ett stycke med ett kursivt ord --&gt;
&lt;p&gt;
    Här är ett stycket med &lt;em&gt;kursiv&lt;/em&gt; text
&lt;/p&gt;
</code></pre>
<p class="figure-center">Figur 2. <b>Felaktig</b> styckesindelning genom elemtet <code>&lt;p&gt;</code></p>

<p>Klicka på "Öppna i CodePen" för att se hur exemplet ovan ser ut i en webbläsare.</p>


<h4>3.1. Val av element: <code>&lt;strong&gt;</code>/<code>&lt;b&gt;</code> och <code>&lt;em&gt;</code>/<code>&lt;i&gt;</code></h4>
<p><em>Men jag har läst att man kan använda både <code>&lt;strong&gt;</code> och <code>&lt;b&gt;</code> för att göra text fetstil. Hur vet jag vad jag ska välja?</em><br>
- Det stämmer att både elemeten <code>&lt;strong&gt;</code> och <code>&lt;b&gt;</code> i webbläsaren visar upp text som fetstilt. Skillnaden mellan elementen går djupare än så. Kort sagt kan man säga såhär:</p>
<ul>
    <li><code>&lt;strong&gt;</code> används för hur en text/ett ord ska <strong>bli förstått</strong>, alltså ger semantik till texten/ordet. Detta visar sig t.ex. när en text läses upp av en webbläsare (t.ex. för blinda människor) då <code>&lt;strong&gt;</code> indikerar att det ska läggas tyngd på ordet/meningen.</li>
    <li><code>&lt;b&gt;</code> används för att formge ett ord, så att det blir fetstilt. Detta har hängt med sedan lång tid tillbaka, i de tidigare versionerna av HTML, då man formgav element genom HTML. Detta gör man numera genom CSS (vilket vi kommer att titta närmare på senare i kursen), vilket gör att <code>&lt;b&gt;</code>-elementet tappat lite av sitt syfte.</li>
</ul>

<p>Liknande svar gäller kommande fråga, som också brukar dyka upp:</p>

<p><em>Men jag har läst att man kan använda både <code>&lt;em&gt;</code> och <code>&lt;i&gt;</code> för att göra text kursiv. Hur vet jag vad jag ska välja?</em><br>
- Det stämmer att både elemeten <code>&lt;em&gt;</code> och <code>&lt;i&gt;</code> i webbläsaren visar upp kursiv text. Skillnaden mellan elementen går djupare än så. Kort sagt kan man säga såhär:</p>
<ul>
    <li><code>&lt;em&gt;</code> används för hur en text/ett ord ska <strong>bli förstått</strong>, alltså ger semantik till texten/ordet. Detta visar sig t.ex. när en text läses upp av en webbläsare (t.ex. för blinda människor) då <code>&lt;em&gt;</code> indikerar att det ska läggas betoning på ordet/meningen.</li>
    <li><code>&lt;i&gt;</code> används för att formge ett ord, så att det blir kursivt. Detta har hängt med sedan lång tid tillbaka, i de tidigare versionerna av HTML, då man formgav element genom HTML. Detta gör man numera genom CSS (vilket vi kommer att titta närmare på senare i kursen), vilket gör att <code>&lt;i&gt;</code>-elementet tappat lite av sitt syfte.</li>
</ul>