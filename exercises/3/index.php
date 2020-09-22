<h2>Laboration 3: Layout med CSS</h2>
<p>I denna laboration ska du öva på positionering genom CSS och att få flera element i en webbsida att samverka. Du kommer lära dig att göra grunden till en webbplats och att använda denna på flera webbsidor.</p>

<p>
    Avancerat:
    <strong>Labben får gärna göras med <code>grids</code> och/eller <code>flexbox</code> för de som föredrar detta. Information om detta finns <a href="/lectures.php?nr=6" title="Kommer att komma upp när föreläsningen har varit">här</a>.</strong>
</p>

<h3>1. Uppgift</h3>
<p>Målet är att producera en layout, som likt många webbplatser på Internet består utav ett sidhuvud, en menykolumn, en innehållskolumn och en sidfot. Följande bild illustrerar målet:</p>
<p>
    <figure>
        <img src="/exercises/3/css2-layout.png" alt="Centrerad webbsida med sidhuvud överst, menykolumn till vänster och innehållskolumn till höger">
    </figure>
</p>
<p>För tydlighetens skull är de olika områdena färglagda, det bör vara framgå vad som är vad. Notera även att denna layout ska ha begränsad bredd samt vara centrerad.</p>

<h4>1.1. Skelettet</h4>
<p>En bra punkt att börja på är att lista ut vilken struktur HTML-dokumentet måste ha för att kunna stödja denna layout. Det ter sig naturligt att ha fyra separata delar för de olika områdena - denna indelning bör göras med element som beskriver vad varje del av webbsidan respresenterar, t.ex. sidhuvud/navigation/sidfot/etc. Genom att ge olika id till de olika områdena kan vi sedan ge dessa olika stilar genom CSS.</p>
<p>Skapa ett HTML-dokument och infoga de taggar som är lämpliga för layouten på bilden ovan (<code>header, nav, section, footer</code>-taggar). Lägg lite platshållartext i varje div, så att det syns att allt fungerar som det ska.</p>
<p>Även om det <em>fungerar</em> så är det ännu inte så visuellt tilltalande. Skapa en extern CSS-stilmall och applicera den på HTML-dokumentet (se taggen <code>link</code> och föregående laboration). Ge sedan olika bakgrundsfärger till de fyra områdena genom att hänvisa till identiteterna du nyss skapat.</p>
<p>I detta skede kan det se ut såhär:
    <img src="/exercises/3/css2-1.png" alt="Fyra horisontella, olikfärgade fält">
</p>

<h4>1.2. Positionering</h4>
<p>Som det nämndes ovan ska denna layout ha fast bredd och centreras. Börja med att innesluta de fyra områdena i en ny <code>&lt;div&gt;</code>, med id <code>container</code>. Sedan kan du i en ny CSS-regel ange bredden för denna - välj en &quot;lagom&quot; bredd (eller ungefär 900 pixlar vid beslutsångest).</p>
<p>Denna div ska sedan centreras. Undersök hur <code>margin</code> kan användas i detta syfte.</p>
<p>Därefter återstår det faktum att navigationen och innehållsområdet ska ligga bredvid varandra. För att åstadkomma detta krävs tre steg:</p>
<ol>
    <li>Ange önskvärd bredd för respektive område. Var noga med att totalbredden inte blir större än bredden för <code>#container</code>.</li>
    <li>Använd egenskapen <code>float</code> för att låta navigationen dra sig åt vänster och innehållsområdet dra sig åt höger (eller tvärt om, om du föredrar det).</li>
    <li>Sidfoten ska alltid hamna under navigationen och innehållet. Detta kan du se till med hjälp av egenskapen <code>clear</code>.</li>
</ol>
<p>I detta skede bör du ha en centrerad layout, som ser ut ungefär såhär:
    <img src="/exercises/3/css2-2.png" alt="Sidhuvud överst, menykolumn till vänster och innehållskolumn till höger">
</p>

<h4>1.3. Innehåll</h4>
<p>Nu ter det sig vara dags att fundera över vad som faktiskt ska ligga i de olika områdena. Som alltid så är det lämpligt att först bestämma vilka HTML-taggar som bäst kan beskriva informationen, för att först därefter definiera utseendet med CSS. Här följer ett förslag på vilket innehåll som bör finnas var, och vilken HTML som är lämplig.</p>

<table id="page-structure" cellspacing="0" style="page-break-before:always;" class="table">
    <thead>
        <tr>
            <th>Område</th>
            <th>Innehåll</th>
            <th>Lämplig HTML</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th rowspan="2">header</th>
            <td>Logotyp</td>
            <td><code>h1</code>
            </td>
        </tr>
        <tr>
            <td>Tagline</td>
            <td><code>p</code>
            </td>
        </tr>
        <tr>
            <th rowspan="2">nav</th>
            <td>Meny med länkar</td>
            <td><code>ul</code>  <code>li</code> och <code>a</code>
            </td>
        </tr>
        <tr>
            <td>Länkar till W3C-validatorn</td>
            <td>Den HTML som ges efter godkänd validering</td>
        </tr>
        <tr>
            <th rowspan="2">main</th>
            <td>Rubrik på innehåll</td>
            <td><code>h2</code>
            </td>
        </tr>
        <tr>
            <td>En mängd text</td>
            <td><code>p</code> och vad annat som ter sig lämpligt</td>
        </tr>
        <tr>
            <th>footer</th>
            <td>Upphovsrättsinformation</td>
            <td><code>p</code>
            </td>
        </tr>
    </tbody>
</table>
<p>Skapa denna struktur. Om du inte kan komma på något eget ämne för innehållet så kan du <em>låna</em> en artikel från din favorittidning (men kopiera i så fall själva texten, inte källkoden).</p>
<p>Därefter kan det se ut ungefär såhär:
    <img src="/exercises/3/css2-3.png" alt="">
</p>

<h4>1.4. Bättre form</h4>
<p>När det gäller vidare visuell utformning av denna webbsida så finns det förstås lika många möjliga inriktningar som det finns människor. Här följer några förslag:</p>
<ul>
    <li>Ta bort bakgrundfärg för <code>nav, section</code> - och lägg till bakgrundfärg för #container. Ändra bakgrundfärg för <code>header</code> och <code>footer</code>.</li>
    <li>Välj ett snyggt typsnitt och ange en textstorlek.</li>
    <li>Definiera hur länkar ska se ut (glöm inte <code>:visited</code> och <code>:hover</code>).</li>
    <li>Lägg till padding för att få lite luft mellan text och layoutens kanter. (Tänk på att padding påverkar totalbredden för ett element)</li>
    <li>Ta bort listpunkterna från navigationsmenyn och gör den mer distinkt till utseendet.</li>
    <li>Ge logotypen ett unikt utseende.</li>
    <li>Centrera texten i <code>footer</code>.</li>
    <li>Experimentera!</li>
</ul>
<p>Dokumentet kan sedan - till exempel - se ut såhär:
    <img src="/exercises/3/css2-4.png" alt="">
</p>

<h4>1.5. Flera sidor</h4>
<p>Eftersom all CSS ligger i en externa stilmall kan samma utseende enkelt fås på flera sidor. Kopiera ditt HTML-dokument till en ny fil. Byt ut innehållet i <code>section</code> till något annat och länka sedan mellan dina två dokument (kanske i navigationsmenyn?).</p>

<h3>2. Validering och feedback</h3>
<p>Som alltid, se till att dokumentet <a href="http://validator.w3.org/">validerar</a>. Använd <a href="http://jigsaw.w3.org/css-validator/">CSS-validatorn</a> för alla stilmallar. Be kursare och labbassistenter om feedback för en djupare bild av vad som är bra och dåligt.</p>

<h3>3. Bonus - mer träning på layouter!</h3>
<p>Gjorde du layouten med:</p>
<ul>
    <li><code>floats</code> - Toppen, testa att göra layouten med <code>grids</code> istället</li>
    <li><code>grids</code> - Toppen, testa att göra layouten med <code>floats</code> istället</li>
    <li><code>flexbox</code> - Toppen, testa att göra layouten med <code>floats</code> istället</li>
    <li>etc. :)</li>
</ul>
<p>Tänk på att det är viktigt att behärska <strong>alla tre teknikerna</strong> för att bli en bra webbutvecklare!</p>