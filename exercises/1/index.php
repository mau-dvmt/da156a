<h2>Laboration 1: En första webbsida!</h2>

<h3>1. Inledning</h3>
<p>Alla bör ha en webbplats!</p>
<p>Som student på Malmö universitet har du automatiskt möjlighet att publicera webbsidor på Internet. Där finns det möjlighet att publicera information, bilder, länkar, m.m. som blir tillgängligt för alla! (som har adressen till din webbplats, såklart). Att skapa och publicera en webbsida är alltså syftet för denna laboration!</p>

<h4>1.1. Exempel</h4>
<p>Såhär har några (nuvarande och föredetta) lärare och forskare vid Institutionen för datavetenskap valt att göra med sina startsidor:</p>
<ul>
    <li><a href="http://webshare.mah.se/tsbeni/">Bengt Nilsson</a></li>
    <li><a href="http://webshare.mah.se/ctpada/">Paul Davidsson</a></li>
    <li><a href="http://webshare.mah.se/ctmagu/">Marie Gustafsson Friberger</a></li>
    <li><a href="http://webshare.mah.se/tsanti/">Anton Tibblin</a></li>
</ul>
<p>Som synes finns det en betydande variation i utformning, såväl visuellt som tekniskt. Testa öppna några av ovanstående sidor, och att i din webbläsare högerklicka på sidan och välja <em>visa källkod</em> (eller motsvarande). Vilken av källkoderna är enklast/svårast att förstå?</p>
<p>Genom hela kursen Introduktion till webbutveckling kommer snygg, läsbar och korrekt källkod att vara viktigt. Denna laboration börjar utforska vad det betyder.</p>
<h3>2. Lärandemål</h3>
<p>Denna laboration introducerar HTML, språket bakom mycket av webben. Det är en kärnkompetens inom modern informationsteknologi.</p>
<p>Efter genomförd laboration bör du:</p>
<ul>
    <li>ha en förståelse för vad HTML-taggar är och hur de används för att bygga upp webbsidor.</li>
    <li>känna till de vanligaste elementen i HTML och deras syfte.</li>
    <li>veta vad HTML5 innebär samt hur man kontrollerar sin kod gentemot denna standard.</li>
    <li>ha publicerat en personlig webbsida som andra kan besöka!</li>
</ul>

<h3>3. Din webbsida</h3>
<p>Din egna webbsida skapas genom att skriva källkod i HTML, HyperText Markup Language. Innan du börjar kan det vara bra att se över vilka verktyg och resurer som behövs.</p>

<h4>3.1. Resurser</h4>
<p>Du behöver några verktyg/resurser för att skapa din webbsida:</p>
<ul>
    <li>
        <p>Ett bra textredigeringsprogram. Med &#8220;bra&#8221; menas framförallt att programmet stödjer <a href="http://en.wikipedia.org/wiki/Syntax_highlighting">syntaxmarkering</a> för HTML - därutöver finns en mängd andra personliga preferenser.</p>
        <ul>
            <li>För Windows så medföljer Notepad (Anteckningar), för Mac OS X medföljer TextEdit (Textredigerare). Dessa är inte jättebra.</li>
            <li>På datorerna i skolan rekommenderas Visual Studio Code, Atom eller Brackets.</li>
            <li>För nedladdning till din egen dator finns otaliga alternativ. Några gratisvarianter är:
                <ul>
                    <li><a href="https://code.visualstudio.com/">VS Code</a> (Windows, OS X, Linux)</li>
                    <li><a href="http://atom.io/">Atom</a> (Windows, OS X, Linux)</li>
                    <li><a href="http://brackets.io/">Brackets</a> (Windows, OS X, Linux)</li>
                    <li><a href="http://notepad-plus-plus.org/">Notepad++</a> (Windows)</li>
                    <li><a href="http://www.sublimetext.com/">Sublime Text</a> (Windows, OS X, Linux)</li>
                    <li><a href="http://www.barebones.com/products/textwrangler/">TextWrangler</a> (OS X)</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <p>En referens för att slå upp hur HTML skrivs.</p>
        <ul>
            <li>I kursboken <a href="http://www.bokfynd.nu/1118871642.html">HTML and CSS: Design and Build Websites</a> görs detta bra.</li>
            <li>Mozilla publicerar ett slags upppslagsverk för många aspekter kring HTML: <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla HTML Reference</a>.</li>
            <li>Även webbplatsen <a href="https://www.w3schools.com/tags/default.asp">w3schools</a> har bra och tydligt information kring HTML-element och hur man kan använda dessa.</li>
        </ul>
    </li>
</ul>

<h4>3.2. Ett startdokument</h3>
<p>Börja med att aktivera <strong>tjänsten Webshare</strong> <a href="http://idservice.mah.se">här</a>.</p>
<h5>3.2.1. Om du använder en dator i skolan (annars hoppa till 3.2.2.)</h5>
<p>Du kanske har noterat att det finns nätverksplats som heter <code>Webshare</code> (L:\) när du öppnar "Den här datorn". Detta är en speciell plats, då alla filer som läggs där i automatiskt blir tillgängliga över Internet. Om du redan provat att publicera filer via Webshare kan du hoppa till nästa rubrik. Annars bör du gå igenom följande steg för att testa på webbpublicering via Webshare:</p>

    <ol>
    <li><p>En väldigt enkel webbsida är förberedd för er att använda. Källkoden för sidan är:</p>
    <pre class=" line-numbers codepen language-markup" data-type="html"><code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;Min Webshare&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Min Webshare&lt;/h1&gt;
        &lt;p&gt;
            Denna webbsida ska strax fyllas på med information.
        &lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
        <p>Skapa ett nytt dokument i din textredigerare (t.ex. VS code, Atom, Notepad++, etc.) och klistra in ovanstående kod i dokumentet. Spara filen i din <code>Webshare</code>-plats, med filnamnet <code>index.html</code>.</p>
    </li>

    <li><p>För att nu surfa in till sidan som ni precis publicerade, surfar ni till <code>http://webshare.mah.se/datorid</code>, där datorid är din egen datoridentitet (den som du använder för att logga in på Canvas).</p></li>

    <li><p>Om du får felet <code>404 - File or directory not found</code> så betyder det att ingen fil med namnet <code>index.html</code> (eller <code>index.htm</code>) hittas. Använd i så fall utforskaren för att kontrollera att filen från steg 1 är sparad i nätverksplatsen <code>Webshare</code>. Börja om från steg 1 om du inte hittar filen alls. Om filen finns, men har fel filnamn - använd utforskaren rätta till namnet.</p>

        <div class="extra" style="padding:5px; font-size:0.875em;">
            Ser tecknet &quot;å&quot; konstigt ut när du öppnar webbsidan i webbläsaren? I så fall tolkas dokumentet på ett annat vis än det är sparat. Rekommenderad lösning: används &quot;spara som&quot; och ange Encoding/Teckenkodning till <code>UTF-8</code>. Mer om detta på föreläsningarna.
        </div>
    </li>

    <li><p>Öppna den nyss sparade filen i ett textredigeringsprogram - det är dags att lägga till ditt eget innehåll.</p></li>
    </ol>


    <h5>3.2.2. Andra metoder för att komma åt hemkatalogen</h4>

    <p>Om man inte är inne på Malmö universitets nätverk så kan man använda <a href="http://access.mah.se">ett webbgränssnitt</a> för att överföra filer till Webshare. Se <strong>videon nedan</strong> för hur ni kan arbeta med Webshare. (Obs. videon är från 2021, alltså behöver själva webbsidan som publiceras inte vara samma som vi gjorde på årets föreläsning.)</p>

    <div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/36iM3rZ5LBU?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe></div>

    <h3>4. Mer innehåll, mer HTML</h3>
    <p>Nu när du har ett startdokument så kan det vara bra att repetera den grundläggande strukturen för HTML. Här finns guide som kan vara bra att läsa:</p>
    <ol>
        <li><a href="https://www.w3schools.com/html/html_intro.asp">w3schools - HTML introduction</a></li>
    </ol>
    <p>Med den genomgången är det dags för dig att fylla på med valfritt innehåll!</p>
    <blockquote>
        <strong>Viktigt!</strong> Eftersom att era inlämninade uppgifter är <em>allmäna handlingar</em> och då potentiellt skulle kunna hämtas ut på begäran (som en kopia) av andra än er själva, är det lämpligt att i denna uppgift inte ange någon information som skulle kunna vara känslig.
    </blockquote>
    <h4>Vad för innehåll?</h4>
    <p>Ni har fria tyglar på vad er webbsida ska handla om, det viktigaste är att ni använder <em>som minimum</em> de element som finns i tabellen nedan. Har ni idétorka så kommer här några förslag på var ni skulle kunna ha för information på den webbplatsen som ni ska skapa:</p>
    <ul>
        <li>En känd person</li>
        <li>Ett sportlag</li>
        <li>Ett land</li>
        <li>Ett djur</li>
        <li>En bilmodell</li>
        <li>Ett företag</li>
        <li>etc.</li>
    </ul>
    <p>Det är förstås fritt att välja vad du inkluderar - men ju mer desto roligare.</p>
    <p>Du bör också öva på att använda flera viktiga element i HTML. Förslagsvis bör din webbsida innehålla minst dessa (men även här - ju fler du övar på desto bättre):</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Syfte</th>
                <th>Element</th>
                <th>Tutorial</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Textstycke</td>
                <td><code>p</code></td>
                <td><a href="/tutorials.php?type=HTML&title=Paragraphs">Tutorial</a></td>
            </tr>
            <tr>
                <td>Länk</td>
                <td><code>a</code></td>
                <td><a href="/tutorials.php?type=HTML&title=Links">Tutorial</a></td>
            </tr>
            <tr>
                <td>Rubrik</td>
                <td><code>h1</code> - <code>h6</code></td>
                <td><a href="/tutorials.php?type=HTML&title=Headings">Tutorial</a></td>
            </tr>
            <tr>
                <td>Punktlista</td>
                <td><code>ul</code> och <code>li</code></td>
                <td><a href="/tutorials.php?type=HTML&title=Lists">Tutorial</a></td>
            </tr>
            <tr>
                <td>Bild</td>
                <td><code>img</code></td>
                <td><a href="/tutorials.php?type=HTML&title=Images">Tutorial</a></td>
            </tr>
            <tr>
                <td>Betonad text</td>
                <td><code>em</code></td>
                <td><a href="/tutorials.php?type=HTML&title=Paragraphs">Tutorial</a></td>
            </tr>
            <tr>
                <td>Starkt betonad text</td>
                <td><code>strong</code></td>
                <td><a href="/tutorials.php?type=HTML&title=Paragraphs">Tutorial</a></td>
            </tr>
        </tbody>
    </table>

    <p>Så, vidareutveckla din webbsida - kontrollera ofta med webbläsaren att du får förväntat resultat. Du är färdig när du tycker att rätt information är inkluderad, men rätt val av HTML-taggar. (Ett tips är att experimentera mycket - allt behöver inte tas med i &#8220;slutversionen&#8221; av din webbsida.)</p>

    <p>Först i nästa laboration kommer fokus ligga på att anpassa presentationen. Du får gärna utforska stilmallar och <abbr title="Cascading Style Sheets">CSS</abbr> på egen hand, men tanken är att webbläsarens standardsutseende fungerar bra så länge.</p>

    <h3>5. Validera din kod</h3>

    <p>Det är lätt att göra misstag, så även när man skriver HTML5. Använd därför en tjänst hos W3C för att validera dokumentet. Validatorn söker igenom ditt dokument efter misstag och talar om för dig vad som är fel om den hittar något. Validatorn hittar du på <a href="http://validator.w3.org/">validator.w3.org</a>.</p>

    <p>Ett bra dokument saknar fel (som rödmarkeras i validatorn) - och helst även varningar.</p>

    <h3>6. Feedback</h3>
    <p>Hur ska du veta om du skapat bra eller dålig HTML? Kontrollera först följande punkter:</p>
    <ul>
        <li>Validerar webbsidan?</li>
        <li>Är källkoden lätt att läsa?</li>
        <li>Har du valt element som bra beskriver innehållet? (Exempelvis <code>p</code> för alla textstycken, <code>ul</code>/<code>li</code> för punktlistor, osv.)</li>
    </ul>
    <p>Din labbhandledare hjälper gärna till med feedback! Bäst är att be henne/honom
    kika på din källkod - både för utesluta att du missförstått något, och för att tipsa om förbättringar som kan göras.</p>
    <hr>
    <p><strong>Lycka till!</strong></p>
    <hr>
