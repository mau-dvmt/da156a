<h2>HTML: Listor</h2>
<h3>1. Inledning</h3>
<p>Att lista upp saker är ibland ett smidigt sätt att presentera information på. Ibland vill man lista upp saker utan inbördes ordning (oordnade listor) och ibland numrerade listor (ordnade listor). Vi ska här titta på hur man gör detta genom HTML.</p>

<h3>2. En listas uppbyggnad</h3>
<p>En lista i HTML innebär alltid minst två element. Det första är antingen <code>&lt;ul&gt;</code> (för en oordnad lista) eller <code>&lt;ol&gt;</code> (för en ordnad lista). Dessa element definierar en lista (utan några punkter i den). För att sedan lägga till punkter i listan användaren man elementet <code>&lt;li&gt;</code> (som står för "list item", alltså en sak i listan). Har man gjort en oordnad lista (<code>&lt;ul&gt;</code>) så visas varje sak i listan med en punkt framför sig, har man istället gjort en ordnad lista <code>&lt;ol&gt;</code> så visas en siffra framför varje sak i listan.</p>
<p>En oordnad lista skulle alltså kunna se ut såhär:</p>

<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- En oordnad lista med tre punkter --&gt;
&lt;ul&gt;
    &lt;li&gt;Första punkten&lt;/li&gt;
    &lt;li&gt;Andra punkten&lt;/li&gt;
    &lt;li&gt;Tredje punkten&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<p class="figure-center">Figur 1. En oordnad lista med tre punkter</p>
<p>Klicka gärna på "Öppna i CodePen" för att se hur detta ser ut i en webbläsare. Ni kommer då att se en punktlista med tre punkter, följt av texten som är inskriven vid varje punkt.</p>

<p>En ordnad lista skulle istället kunna se ut såhär:</p>

<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- En ordnad lista med tre punkter --&gt;
&lt;ol&gt;
    &lt;li&gt;Första punkten&lt;/li&gt;
    &lt;li&gt;Andra punkten&lt;/li&gt;
    &lt;li&gt;Tredje punkten&lt;/li&gt;
&lt;/ol&gt;</code></pre>
<p class="figure-center">Figur 2. En ordnad lista med tre punkter</p>
<p>Klicka gärna på "Öppna i CodePen" för att se hur detta ser ut i en webbläsare. Ni kommer då att se en numrerad punktlista med tre saker, följt av texten som är inskriven vid varje punkt.</p>

<h3>3. Nästlade listor</h3>
<p>Det går utmärkt att ha "listor i listor", alltså nästlade listor genom HTML. Detta kan i början vara lite småknepigt, då nästlade element lätt blir förvirrade om man inte är van vid en större mängd HTML-kod.</p>
<p>Tanken bakom nästlade listor är att man har en lista (som innehåller alla saker i listan). En sak (<code>&lt;li&gt;</code>) i listan kan sedan ha en egen lista i sig (en underlista). Denna underlista definieras då <b>inom</b> sakens <code>&lt;li&gt;</code>-element. Exempel på en nästlad lista:</p>

<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- En ordnad nästlad lista --&gt;
&lt;ol&gt;
    &lt;li&gt;Första punkten
        &lt;!-- En ordnad underlista till "Första punkten" --&gt;
        &lt;ol&gt;
            &lt;li&gt;Första underpunkten&lt;/li&gt;
            &lt;li&gt;Andra underpunkten&lt;/li&gt;
            &lt;li&gt;Tredje underpunkten&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/li&gt;
    &lt;li&gt;Andra punkten
        &lt;!-- En ordnad underlista till "Andra punkten" --&gt;
        &lt;ol&gt;
            &lt;li&gt;Första underpunkten&lt;/li&gt;
            &lt;li&gt;Andra underpunkten&lt;/li&gt;
            &lt;li&gt;Tredje underpunkten&lt;/li&gt;
        &lt;/ol&gt
    &lt;/li&gt;
    &lt;li&gt;Tredje punkten
        &lt;!-- En ordnad underlista till "Tredje punkten" --&gt;
        &lt;ol&gt;
            &lt;li&gt;Första underpunkten&lt;/li&gt;
            &lt;li&gt;Andra underpunkten&lt;/li&gt;
            &lt;li&gt;Tredje underpunkten&lt;/li&gt;
        &lt;/ol&gt
    &lt;/li&gt;
&lt;/ol&gt;</code></pre>
<p class="figure-center">Figur 3. En ordnad nästlad lista med tre punkter (med vars tre underpunkter)</p>

<p>Klicka på "Öppna i CodePen" för att se hur koden ovan ser ut i en webbläsare.</p>