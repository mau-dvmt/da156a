<h2>Laboration 4: Media Queries</h2>
<p>Som bekant, i synnerhet efter <a href="/lectures.php?nr=7">föreläsning 7</a>, är CSS 3 Media Queries en viktig teknik, och möjliggörande för det som kallas Responsive Web Design. Denna laboration går ut på att skapa och tillämpa media queries för att förbättra upplevelsen för mindre respektive större skärmar. Det är en god idé att läsa lite om responsive design innan eller i samband med laborationen.</p>


<h3>1. Förarbete</h3>
<p>Innan vi sätter igång med att lära oss om responsivitet måste vi ha något att jobba med. Följ stegen nedan för att skapa en enkel layout som vi sedan kan jobba med.</p>

<ol>
  <li>Börja med att skapa ett html dokument. Skapa sedan en enkel layout med en <code>header</code>, en <code>main</code> och en <code>footer</code>.</li>
  <li>Skapa två <code>section</code> i <code>main</code>. Lägg in en <code>h2</code>, en paragraph och en bild i den ordningen för de två sektionerna.</li>
  <li>Skapa en enkel css-fil och styla din layout. Använd dig av flexbox för att skapa en enkel layout.</li>
</ol>

Exempel på hur det bör se ut:
<pre class="line-numbers language-markup" data-type="html"><code class="language-markup">
&lt;!DOCTYPE html&gt;
&lt;html lang="sv"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Introduktion till Media Queries&lt;/title&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;link rel="stylesheet" href="style.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
        &lt;h1&gt;Introduktion till Media Queries&lt;/h1&gt;
    &lt;/header&gt;
    &lt;main&gt;
        &lt;section id="first"&gt;
            &lt;h2&gt;Sektion 1&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit
                &lt;a&gt; href="#"&gt;link&lt;/a&gt;
            &lt;/p&gt;
            &lt;img src="https://via.placeholder.com/300" alt="placeholder"&gt;
        &lt;/section&gt;
        &lt;section id="second"&gt;
            &lt;h2&gt;Sektion 2&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit
                &lt;a&gt; href="#"&gt;link&lt;/a&gt;
            &lt;/p&gt;
            &lt;img src="https://via.placeholder.com/300" alt="placeholder"&gt;
        &lt;/section&gt;
    &lt;/main&gt;
    &lt;footer&gt;
        &lt;p&gt;Malmö universitet&lt;/p&gt;
    &lt;/footer&gt;
&lt;/html&gt;</code></pre>

<p>Exempel på css:</p>
<pre class="line-numbers language-markup" data-type="html"><code class="language-css">
body {
  background-color: #ffffff;
  font-family: Arial, sans-serif;
  display: flex;
  flex-direction: column;
  margin: 0;
  padding: 0;
}

#first {
  background-color: #abd6ff;
}

#second {
  background-color: #b6ffc8;
}</code></pre>

<h3>2. Inspektera sidan</h3>
<p>Nu ska vi inspektera hur sidan beter sig i för olika skärmstorlekar.</p>
<ol>
  <li>Plocka fram Inspect/DevTools. Notera att du kan både högerklicka på sidan och välja "Inspect" eller använda kortkommandot <code>Ctrl + Shift + C</code> för Windows och <code>Cmd + Option + C</code> för Mac, för att öppna Inspect.</li>
  <li>Klicka nu på ikonen för att ändra storleken på webbläsaren. Den ser ut som en liten mobiltelefon och finns i övre vänstra hörnet i Inspect fönstret.<img src="/exercises/4/mobil-ikonen.png"></li>
  <li>Ändra storleken på webbläsaren och se hur sidan beter sig. Det finns 4 olika sätt att ändra storleken på webbläsaren. 
    <ol>
      <li>Genom att klicka på de olika enheterna som finns i Inspect verktyget.</li>
      <li>Genom att dra i de gråa kanterna som nu omger webbsidan.</li>
      <li>Genom att skriva in en specifik storlek i fältet som finns i längst upp.</li>
      <li>Genom att välja olika "vanliga" storlekar som finns. Den ligger precis under enheterna och de fält där man kan skriva in exakta värden.</li>
    </ol>
  </li>
</ol>

<h3>3. Skapa en media query för mobil</h3>
<p>Vi ska nu skapa media queries för att förbättra användarupplevelsen för olika skärmstorlekar. Vi börjar med att skapa en för mobiler, låt oss säga att en mobil är under 600 pixlar i bredd.</p>
<ol>
  <li>Skapa en media query för mobiler. Använd <code>max-width</code> för att sätta en maxbredd på 600 pixlar.
    <pre class="line-numbers language-markup" data-type="html"><code class="language-css">
@media only screen and (max-width: 600px) {

}</code></pre>
  </li>
  <li>Nu vill vi byta ordning på sektionerna. I mobilläget vill vi att sektion 2 ska komma först. Använd <code>flex-direction</code> för att ändra ordningen på sektionerna.
    <pre class="line-numbers language-markup" data-type="html"><code class="language-css">
@media only screen and (max-width: 600px) {
  main {
    display: flex;
    flex-direction: column-reverse;
  }
}</code></pre>
  </li>
  <li>Ändra storleken på webbläsaren och se hur sidan beter sig.</li>
  <li>Testa att centrera bilderna i sektionerna i mobilläget. Detta kan vi lösa med <code>flex</code> och <code>align-items</code>.
    <pre class="line-numbers language-markup" data-type="html"><code class="language-css">
@media screen and (max-width: 600px) {
  main {
    display: flex;
    flex-direction: column-reverse;
  }

  section {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
}</code></pre>
    </li>
    <li>Testa att ändra storleken på webbläsaren och se hur sidan beter sig.</li>
    <li>Ser du att texten inte har blivit centrerad i sektionerna om sidan är smalare än 400 pixlar? Men <code>align-items</code> borde ju centrera både text och bild? Nja, inte riktigt. <code>align-items</code> centrera element. För att centrera texten i sektionerna kan vi använda <code>text-align</code>.
      <pre class="line-numbers language-markup" data-type="html"><code class="language-css">
@media screen and (max-width: 600px) {
  main {
    display: flex;
    flex-direction: column-reverse;
  }

  section {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
}</code></pre>
    </li>
</ol>


<h3>4. Utmaningar</h3>
<ol>
  <li>Skapa en media query för tablets (iPad m.m.). Använd <code>min-width</code> och <code>max-width</code> för att sätta en minsta och högsta bredd. För tablets brukar man sätta max 768 pixlar i bredd, men det är upp till dig att bestämma. Fundera över vad som är en lämplig <code>min-width</code> med mobilanpassningen i åtanke.</li>
  <li>Ändra layouten för tablets. Exempel på vad du kan göra är att ändra flex-direction, font-size, padding, margin, etc.</li>
</ol>



<h3>6. Avslutande övning</h3>
Använd nu en din layout från labb 3 - och mobilanpassa denna efter eget tycke och smak. Tänk på att försöka att ha användbarhet och tillgänglighet i fokus! 😊