<h2>Föreläsning 4 - Introduktion till CSS</h2>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/RiMgs2O7_BU?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe></div>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.1972%;"><iframe src="https://speakerdeck.com/player/b522df45a1a84e5db77fd0c6d9b38212" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="encrypted-media;"></iframe></div>

<hr>

<a href="/resources/pdf/f4-21.pdf">Ladda ner föreläsningen här</a>

<h3>Dagens exempel</h3>

<h4>HTML - Exempel på block / inline-element</h4>

<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Min f&ouml;rsta webbsida!&lt;/title&gt;
		&lt;style&gt;
			
		&lt;/style&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;En rubrik&lt;/h1&gt;
		&lt;p&gt;En paragraf&lt;/p&gt;
		&lt;a href=&quot;http://mau.se&quot;&gt;L&auml;nk till Mau.se&lt;/a&gt;
		&lt;strong&gt;Detta &auml;r lite felstil text&lt;/strong&gt;
		&lt;em&gt;Detta &auml;r lite kursiv text&lt;/em&gt;
		&lt;p&gt;En paragraf till&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>HTML - Star Wars</h4>

<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Star Wars&lt;/title&gt;
		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;Om Star Wars&lt;/h1&gt;
		
		&lt;p id=&quot;first-p&quot;&gt;Star Wars är en franchise som främst består av en serie amerikanska science fiction-filmer skapade av George Lucas under 1970-, 1980-, 1990-, 2000- och 2010-talet. Den första i filmserien, Stjärnornas krig, hade premiär 25 maj 1977 i USA och blev snabbt ett världsomfattande populärkulturfenomen. Filmens framgång ledde till två uppföljare, Rymdimperiet slår tillbaka (1980) och Jedins återkomst (1983). Tjugotvå år efter den ursprungliga filmens premiär började George Lucas arbetet med en andra trilogi som en prequel till originaltrilogin bestående av Episod I – Det mörka hotet (1999), Episod II – Klonerna anfaller (2002) och Episod III – Mörkrets hämnd (2005). Under 2012 sålde Lucas rättigheterna till Walt Disney Company. Tio år efter Episod III släpptes den första delen i uppföljartrilogin, den sjunde filmen i serien Episod VII – The Force Awakens (2015). Ytterligare två uppföljare är planerade, Episod VIII (2017) och Episod IX (2019).&lt;/p&gt;
		
		&lt;p&gt;Filmserien har också resulterat i böcker, tv-serier, datorspel och serietidningar. Dessa tillägg utgör grunden för Star Wars: Expanded Universe, och har resulterat i en märkbar utveckling i seriens fiktiva universum. Fram till mars 2016 har de sex filmerna tillsammans genererat uppskattningsvis 9,2 miljarder US dollar, vilket gör dem till den tredje mest inkomstbringande filmserien.&lt;/p&gt;
		
		&lt;h2&gt;Filmerna&lt;/h2&gt;
		
		&lt;table&gt;
			&lt;thead&gt;
				&lt;tr&gt;
					&lt;th&gt;#&lt;/th&gt;
					&lt;th&gt;Titel&lt;/th&gt;
					&lt;th&gt;Premiär&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;td&gt;I&lt;/td&gt;
					&lt;td&gt;Det mörka hotet&lt;/td&gt;
					&lt;td&gt;19 maj 1999&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;II&lt;/td&gt;
					&lt;td&gt;Klonerna anfaller&lt;/td&gt;
					&lt;td&gt;16 maj 2002&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;III&lt;/td&gt;
					&lt;td&gt;Mörkrets hämnd&lt;/td&gt;
					&lt;td&gt;19 maj 2005&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;IV&lt;/td&gt;
					&lt;td&gt;Ett nytt hopp&lt;/td&gt;
					&lt;td&gt;25 maj 1977&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;V&lt;/td&gt;
					&lt;td&gt;Rymdimperiet slår tillbaka&lt;/td&gt;
					&lt;td&gt;	21 maj 1980&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;VI&lt;/td&gt;
					&lt;td&gt;Jedins återkomst&lt;/td&gt;
					&lt;td&gt;25 maj 1983&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;VII&lt;/td&gt;
					&lt;td&gt;The Force Awakens&lt;/td&gt;
					&lt;td&gt;16 december 2015&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;VIII&lt;/td&gt;
					&lt;td&gt;The Last Jedi&lt;/td&gt;
					&lt;td&gt;17 december 2017&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;IX&lt;/td&gt;
					&lt;td&gt;Star Wars: Episod IX&lt;/td&gt;
					&lt;td&gt;24 maj 2019&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
		
		&lt;p&gt;Källa: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Star_Wars&quot;&gt;https://sv.wikipedia.org/wiki/Star_Wars&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/I/51dnPvQrJ6L.jpg&quot; alt=&quot;Star Wars episode 1 poster&quot;&gt;
		&lt;h3&gt;Star Wars I - Det mörka hotet&lt;/h3&gt;
		&lt;p&gt;Filmen följer Jedimästaren Qui-Gon Jinn och hans lärling Obi-Wan Kenobi, som eskorterar och skyddar drottning Amidala under deras resa från planeten Naboo till planeten Coruscant i hopp om att hitta en fredlig lösning på en omfattande interplanetarisk handelstvist. Filmen innehåller en ung Anakin Skywalker innan han blev en Jedi, och introduceras som en ung slavpojke som verkar vara ovanligt stark med Kraften, och måste brottas med Sithernas mystiska återkomst.&lt;/p&gt;
		&lt;p class=&quot;source&quot;&gt;Källa: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_I_%E2%80%93_Det_m%C3%B6rka_hotet&quot;&gt;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_I_%E2%80%93_Det_m%C3%B6rka_hotet&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/I/51u4eDvof5L._SY300_.jpg&quot; alt=&quot;Star Wars episode 2 poster&quot;&gt;
		&lt;h3&gt;Star Wars II - Klonorna anfaller&lt;/h3&gt;
		&lt;p&gt;Filmen utspelar sig 10 år efter händelserna i Star Wars: Episod I – Det mörka hotet, när galaxen är på väg mot inbördeskrig. Under ledning av en överlöpande Jedi vid namn Greve Dooku, hotar tusentals solsystem att utträda ur den Galaktiska republiken. När senatorn Padmé Amidala, före detta drottning av Naboo, utsätts för ett mordförsök, anlitas den 20-åriga Jedilärlingen Anakin Skywalker för att skydda henne, medan hans mentor Obi-Wan Kenobi anlitas för att undersöka mordförsöket. Det dröjer inte länge förrän Anakin, Padmé och Obi-Wan dras in i hjärtat av de separatistiska områdena och början på ett nytt hot mot galaxen, Klonkriget.&lt;/p&gt;
		&lt;p class=&quot;source&quot;&gt;Källa: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_II_%E2%80%93_Klonerna_anfaller&quot;&gt;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_II_%E2%80%93_Klonerna_anfaller&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/I/51bbxBXI8nL._SL500_AC_SS350_.jpg&quot; alt=&quot;Star Wars episode 3 poster&quot;&gt;
		&lt;h3&gt;Star Wars III - Mörkrets hämnd&lt;/h3&gt;
		&lt;p&gt;Klonkriget rasar i galaxen. Republiken kämpar mot greve Dooku och hans arméer av stridsrobotar, då en flotta under ledning av general Grievous stormar republikens huvudplanet Coruscant och kidnappar överkansler Palpatine. Jediriddarna Anakin Skywalker och Obi-Wan Kenobi sänds till striden för att undsätta den kidnappade kanslern. Jakten efter Palpatine leder till en slutgiltig strid med Dooku, vilket slutar med att Anakin besegrar och dödar honom. På vägen från skeppet blir de fångade och förda till Grievous. Lyckligtvis lyckas de att sätta fienden ur spel, men Grievous flyr undan skeppet, som störtar ner mot planeten. Äventyret slutar med att Anakin och Obi-Wan lyckas nödlanda det störtande skeppet på en av planetens landningsbanor.&lt;/p&gt;
		&lt;p class=&quot;source&quot;&gt;Källa: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_III_%E2%80%93_M%C3%B6rkrets_h%C3%A4mnd&quot;&gt;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_III_%E2%80%93_M%C3%B6rkrets_h%C3%A4mnd&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://upload.wikimedia.org/wikipedia/en/thumb/0/0a/Star_Wars_%281997_re-release_poster%29.jpg/170px-Star_Wars_%281997_re-release_poster%29.jpg&quot; alt=&quot;Star Wars episode 4 poster&quot;&gt;
		&lt;h3&gt;Star Wars IV - Ett nytt hopp&lt;/h3&gt;
		&lt;p&gt;Filmen utspelar sig &quot;för länge sedan i en galax långt, långt borta&quot;, där den följer en grupp frihetskämpar känd som Rebellalliansen i deras planer att förstöra den kraftfulla rymdstationen Dödsstjärnan, ett förödande vapen som skapats av det onda Rymdimperiet. Denna konflikt stör drängpojken Luke Skywalkers isolerade liv när han oavsiktligt förvärvar ett par droider som bär på de stulna planerna över Dödsstjärnan. Efter att imperiet påbörjat en grym och destruktiv jakt på droiderna, beslutar Skywalker sig för att följa med jediriddaren Obi-Wan Kenobi på ett vågat uppdrag att rädda robotarnas ägare, rebelledaren Prinsessan Leia, samt rädda galaxen.&lt;/p&gt;
		&lt;p class=&quot;source&quot;&gt;Källa: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Stj%C3%A4rnornas_krig_(film)&quot;&gt;https://sv.wikipedia.org/wiki/Stj%C3%A4rnornas_krig_(film)&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/M/MV5BYmViY2M2MTYtY2MzOS00YjQ1LWIzYmEtOTBiNjhlMGM0NjZjXkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_UX182_CR0,0,182,268_AL_.jpg&quot; alt=&quot;Star Wars episode 5 poster&quot;&gt;
		&lt;h3&gt;Star Wars V - Rymdimperiet slår tillbaka&lt;/h3&gt;
		&lt;p&gt;Rymdimperiets makt har åter stigit. Rebellerna har därför byggt en ny bas på den avlägsna snöplaneten Hoth. Rymdimperiet får genom sina rymdsonder reda på rebellbasens position och inleder en markattack. Rebellerna tvingas evakuera, och Luke Skywalker får, efter att ha deltagit i slaget, ge sig av i sitt rymdskepp tillsammans med R2-D2. Prinsessan Leia, Han Solo, Chewbacca och C-3PO flyr samtidigt i Millenniefalken.&lt;/p&gt;
		&lt;p class=&quot;source&quot;&gt;Källa: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Rymdimperiet_sl%C3%A5r_tillbaka&quot;&gt;https://sv.wikipedia.org/wiki/Rymdimperiet_sl%C3%A5r_tillbaka&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/I/51UdiBUkerL._SY450_.jpg&quot; alt=&quot;Star Wars episode 6 poster&quot;&gt;
		&lt;h3&gt;Star Wars VI - Jedins återkomst&lt;/h3&gt;
		&lt;p&gt;Luke Skywalker och hans vänner befinner sig åter på ökenplaneten Tatooine, för att där rädda Han Solo ifrån maffiabossen Jabba the Hutts palats. Räddningsaktionen lyckas så småningom, och Luke återvänder till planeten Dagobah för att slutföra sin jediträning under mäster Yoda. Yoda berättar för Luke att han redan kan allt han behöver, och han erkänner också att Darth Vader verkligen är Lukes far. Yoda dör sedan av ålderdom.&lt;/p&gt;
		&lt;p class=&quot;source&quot;&gt;Källa: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Jedins_%C3%A5terkomst&quot;&gt;https://sv.wikipedia.org/wiki/Jedins_%C3%A5terkomst&lt;/a&gt;&lt;/p&gt;
		
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Star Wars - CSS</h4>

<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    background-color: #CA6573;
}

p {
    background-color: black;
    color: yellow;
}

img {
    width: 200px;
    display: block;
    margin: auto;
    border: 10px solid white;
    box-shadow: 0px 0px 20px #000;
}

#first-p {
    font-size: 20px;
}

.source {
    padding: 10px;
    border: 2px solid white;
    text-align: center;
}

thead {
    background-color: black;
    color: white;
}

thead th {
    padding: 10px;
}
</code></pre>
