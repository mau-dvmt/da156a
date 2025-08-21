<h2>Föreläsning 4 - Introduktion till CSS</h2>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/8mOULhFtT85SSr" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>

<a href="/resources/pdf/F4-HT24.pdf">Ladda ner föreläsningen här</a>

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

<h4>Introduktion till CSS</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Min f&ouml;rsta webbsida!&lt;/title&gt;
		&lt;style&gt;
			h1 {
				background-color: aqua;
				padding: 20px;
				border: 5px solid black;
				font-size: 24px;
				text-align: center;
			}

			li {
				background-color: rgb(0, 255, 225);
			}

			a {
				color: green;
			}

			img {
				width: 400px;
				border-radius: 20px;
			}

			table {
				border: 2px dotted red;
				background-color: aqua;
			}

			thead {
				background-color: brown;
			}

			td, th {
				padding: 5px;
				border: 1px dotted black;
			}

		&lt;/style&gt;
	&lt;/head&gt;
	&lt;body&gt;	
		&lt;h1&gt;V&auml;lkommen till min sida!&lt;/h1&gt;
		&lt;p&gt;Kursen g&aring;r p&aring; &lt;abbr title=&quot;Malm&ouml; univeristet&quot;&gt;mau&lt;/abbr&gt;&lt;/p&gt;
		&lt;hr&gt;
		&lt;p&gt;Bra filmer:&lt;/p&gt;
		&lt;ol&gt;
			&lt;li&gt;Star Wars&lt;/li&gt;
			&lt;li&gt;Fight Club&lt;/li&gt;
			&lt;li&gt;American beauty&lt;/li&gt;
			&lt;li&gt;Inception&lt;/li&gt;
		&lt;/ol&gt;
		&lt;p&gt;Bra l&auml;nkar:&lt;/p&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;http://google.se&quot;&gt;Google&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;http://mah.se&quot;&gt;Malm&ouml; universitet&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;https://www.mah.se/ext/Canvas/&quot;&gt;Canvas&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
		&lt;hr&gt;
		&lt;p&gt;S&aring;h&auml;r kul tycker jag att HTML &auml;r:&lt;/p&gt;
		&lt;p&gt;
			&lt;img src=&quot;bilder/me.jpg&quot; alt=&quot;En bild p&aring; mig&quot;&gt;
		&lt;/p&gt;
		&lt;p&gt;S&aring;h&auml;r kul tycker jag att CSS &auml;r:&lt;/p&gt;
		&lt;p&gt;
			&lt;img src=&quot;bilder/me2.jpg&quot; alt=&quot;En bild p&aring; mig&quot;&gt;
		&lt;/p&gt;
		&lt;hr&gt;
		&lt;table&gt;
			&lt;thead&gt;
				&lt;tr&gt;
					&lt;th&gt;Filmer&lt;/th&gt;
					&lt;th&gt;Betyg&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;td&gt;Star Wars&lt;/td&gt;
					&lt;td&gt;5&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;Fight Club&lt;/td&gt;
					&lt;td&gt;5&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;Inception&lt;/td&gt;
					&lt;td&gt;4&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
			&lt;tfoot&gt;
				&lt;tr&gt;
					&lt;td colspan=&quot;2&quot;&gt;Anton betyg&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tfoot&gt;
		&lt;/table&gt;
		&lt;hr&gt;
		&lt;h2&gt;H&auml;r kommer massa text i paragrafer&lt;/h2&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet eros sed eleifend efficitur. Suspendisse massa enim, commodo eu mauris id, vulputate malesuada dui. Proin tempus mauris efficitur risus condimentum, sit amet consequat nibh vestibulum.&lt;/p&gt;
		&lt;p&gt;Integer sed massa lacus. Vivamus aliquam, nibh in pharetra fermentum, turpis turpis congue lacus, a sollicitudin dolor elit ac ante. Suspendisse arcu turpis, tempor sit amet semper eu, ultrices et felis. Suspendisse non justo enim.&lt;/p&gt;
		&lt;p&gt;Proin lacinia, dolor non tempor suscipit, justo erat convallis dui, rhoncus lobortis turpis urna ut mauris. Mauris a ullamcorper velit.&lt;/p&gt;
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
		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;Om Star Wars&lt;/h1&gt;
		
		&lt;p id=&quot;first-p&quot;&gt;Star Wars &auml;r en franchise som fr&auml;mst best&aring;r av en serie amerikanska science fiction-filmer skapade av George Lucas under 1970-, 1980-, 1990-, 2000- och 2010-talet. Den f&ouml;rsta i filmserien, Stj&auml;rnornas krig, hade premi&auml;r 25 maj 1977 i USA och blev snabbt ett v&auml;rldsomfattande popul&auml;rkulturfenomen. Filmens framg&aring;ng ledde till tv&aring; uppf&ouml;ljare, Rymdimperiet sl&aring;r tillbaka (1980) och Jedins &aring;terkomst (1983). Tjugotv&aring; &aring;r efter den ursprungliga filmens premi&auml;r b&ouml;rjade George Lucas arbetet med en andra trilogi som en prequel till originaltrilogin best&aring;ende av Episod I &ndash; Det m&ouml;rka hotet (1999), Episod II &ndash; Klonerna anfaller (2002) och Episod III &ndash; M&ouml;rkrets h&auml;mnd (2005). Under 2012 s&aring;lde Lucas r&auml;ttigheterna till Walt Disney Company. Tio &aring;r efter Episod III sl&auml;pptes den f&ouml;rsta delen i uppf&ouml;ljartrilogin, den sjunde filmen i serien Episod VII &ndash; The Force Awakens (2015). Ytterligare tv&aring; uppf&ouml;ljare &auml;r planerade, Episod VIII (2017) och Episod IX (2019).&lt;/p&gt;
		
		&lt;p&gt;Filmserien har ocks&aring; resulterat i b&ouml;cker, tv-serier, datorspel och serietidningar. Dessa till&auml;gg utg&ouml;r grunden f&ouml;r Star Wars: Expanded Universe, och har resulterat i en m&auml;rkbar utveckling i seriens fiktiva universum. Fram till mars 2016 har de sex filmerna tillsammans genererat uppskattningsvis 9,2 miljarder US dollar, vilket g&ouml;r dem till den tredje mest inkomstbringande filmserien.&lt;/p&gt;
		
		&lt;h2 id=&quot;important&quot;&gt;Filmerna&lt;/h2&gt;
		
		&lt;table&gt;
			&lt;thead&gt;
				&lt;tr&gt;
					&lt;th&gt;#&lt;/th&gt;
					&lt;th&gt;Titel&lt;/th&gt;
					&lt;th&gt;Premi&auml;r&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;td&gt;I&lt;/td&gt;
					&lt;td&gt;Det m&ouml;rka hotet&lt;/td&gt;
					&lt;td&gt;19 maj 1999&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;II&lt;/td&gt;
					&lt;td&gt;Klonerna anfaller&lt;/td&gt;
					&lt;td&gt;16 maj 2002&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;III&lt;/td&gt;
					&lt;td&gt;M&ouml;rkrets h&auml;mnd&lt;/td&gt;
					&lt;td&gt;19 maj 2005&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;IV&lt;/td&gt;
					&lt;td&gt;Ett nytt hopp&lt;/td&gt;
					&lt;td&gt;25 maj 1977&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;V&lt;/td&gt;
					&lt;td&gt;Rymdimperiet sl&aring;r tillbaka&lt;/td&gt;
					&lt;td&gt;	21 maj 1980&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;VI&lt;/td&gt;
					&lt;td&gt;Jedins &aring;terkomst&lt;/td&gt;
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
					&lt;td&gt;Star Wars: The rise of Skywalker&lt;/td&gt;
					&lt;td&gt;24 maj 2019&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
		
		&lt;p class=&quot;center&quot;&gt;K&auml;lla: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Star_Wars&quot;&gt;https://sv.wikipedia.org/wiki/Star_Wars&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/I/51dnPvQrJ6L.jpg&quot; alt=&quot;Star Wars episode 1 poster&quot;&gt;
		&lt;h3&gt;Star Wars I - Det m&ouml;rka hotet&lt;/h3&gt;
		&lt;p&gt;Filmen f&ouml;ljer Jedim&auml;staren Qui-Gon Jinn och hans l&auml;rling Obi-Wan Kenobi, som eskorterar och skyddar drottning Amidala under deras resa fr&aring;n planeten Naboo till planeten Coruscant i hopp om att hitta en fredlig l&ouml;sning p&aring; en omfattande interplanetarisk handelstvist. Filmen inneh&aring;ller en ung Anakin Skywalker innan han blev en Jedi, och introduceras som en ung slavpojke som verkar vara ovanligt stark med Kraften, och m&aring;ste brottas med Sithernas mystiska &aring;terkomst.&lt;/p&gt;
		&lt;p class=&quot;center&quot;&gt;K&auml;lla: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_I_%E2%80%93_Det_m%C3%B6rka_hotet&quot;&gt;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_I_%E2%80%93_Det_m%C3%B6rka_hotet&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/I/51u4eDvof5L._SY300_.jpg&quot; alt=&quot;Star Wars episode 2 poster&quot;&gt;
		&lt;h3&gt;Star Wars II - Klonorna anfaller&lt;/h3&gt;
		&lt;p&gt;Filmen utspelar sig 10 &aring;r efter h&auml;ndelserna i Star Wars: Episod I &ndash; Det m&ouml;rka hotet, n&auml;r galaxen &auml;r p&aring; v&auml;g mot inb&ouml;rdeskrig. Under ledning av en &ouml;verl&ouml;pande Jedi vid namn Greve Dooku, hotar tusentals solsystem att uttr&auml;da ur den Galaktiska republiken. N&auml;r senatorn Padm&eacute; Amidala, f&ouml;re detta drottning av Naboo, uts&auml;tts f&ouml;r ett mordf&ouml;rs&ouml;k, anlitas den 20-&aring;riga Jedil&auml;rlingen Anakin Skywalker f&ouml;r att skydda henne, medan hans mentor Obi-Wan Kenobi anlitas f&ouml;r att unders&ouml;ka mordf&ouml;rs&ouml;ket. Det dr&ouml;jer inte l&auml;nge f&ouml;rr&auml;n Anakin, Padm&eacute; och Obi-Wan dras in i hj&auml;rtat av de separatistiska omr&aring;dena och b&ouml;rjan p&aring; ett nytt hot mot galaxen, Klonkriget.&lt;/p&gt;
		&lt;p class=&quot;center&quot;&gt;K&auml;lla: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_II_%E2%80%93_Klonerna_anfaller&quot;&gt;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_II_%E2%80%93_Klonerna_anfaller&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/I/51bbxBXI8nL._SL500_AC_SS350_.jpg&quot; alt=&quot;Star Wars episode 3 poster&quot;&gt;
		&lt;h3&gt;Star Wars III - M&ouml;rkrets h&auml;mnd&lt;/h3&gt;
		&lt;p&gt;Klonkriget rasar i galaxen. Republiken k&auml;mpar mot greve Dooku och hans arm&eacute;er av stridsrobotar, d&aring; en flotta under ledning av general Grievous stormar republikens huvudplanet Coruscant och kidnappar &ouml;verkansler Palpatine. Jediriddarna Anakin Skywalker och Obi-Wan Kenobi s&auml;nds till striden f&ouml;r att unds&auml;tta den kidnappade kanslern. Jakten efter Palpatine leder till en slutgiltig strid med Dooku, vilket slutar med att Anakin besegrar och d&ouml;dar honom. P&aring; v&auml;gen fr&aring;n skeppet blir de f&aring;ngade och f&ouml;rda till Grievous. Lyckligtvis lyckas de att s&auml;tta fienden ur spel, men Grievous flyr undan skeppet, som st&ouml;rtar ner mot planeten. &Auml;ventyret slutar med att Anakin och Obi-Wan lyckas n&ouml;dlanda det st&ouml;rtande skeppet p&aring; en av planetens landningsbanor.&lt;/p&gt;
		&lt;p class=&quot;center&quot;&gt;K&auml;lla: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_III_%E2%80%93_M%C3%B6rkrets_h%C3%A4mnd&quot;&gt;https://sv.wikipedia.org/wiki/Star_Wars:_Episod_III_%E2%80%93_M%C3%B6rkrets_h%C3%A4mnd&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://upload.wikimedia.org/wikipedia/en/thumb/0/0a/Star_Wars_%281997_re-release_poster%29.jpg/170px-Star_Wars_%281997_re-release_poster%29.jpg&quot; alt=&quot;Star Wars episode 4 poster&quot;&gt;
		&lt;h3&gt;Star Wars IV - Ett nytt hopp&lt;/h3&gt;
		&lt;p&gt;Filmen utspelar sig &quot;f&ouml;r l&auml;nge sedan i en galax l&aring;ngt, l&aring;ngt borta&quot;, d&auml;r den f&ouml;ljer en grupp frihetsk&auml;mpar k&auml;nd som Rebellalliansen i deras planer att f&ouml;rst&ouml;ra den kraftfulla rymdstationen D&ouml;dsstj&auml;rnan, ett f&ouml;r&ouml;dande vapen som skapats av det onda Rymdimperiet. Denna konflikt st&ouml;r dr&auml;ngpojken Luke Skywalkers isolerade liv n&auml;r han oavsiktligt f&ouml;rv&auml;rvar ett par droider som b&auml;r p&aring; de stulna planerna &ouml;ver D&ouml;dsstj&auml;rnan. Efter att imperiet p&aring;b&ouml;rjat en grym och destruktiv jakt p&aring; droiderna, beslutar Skywalker sig f&ouml;r att f&ouml;lja med jediriddaren Obi-Wan Kenobi p&aring; ett v&aring;gat uppdrag att r&auml;dda robotarnas &auml;gare, rebelledaren Prinsessan Leia, samt r&auml;dda galaxen.&lt;/p&gt;
		&lt;p class=&quot;center&quot;&gt;K&auml;lla: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Stj%C3%A4rnornas_krig_(film)&quot;&gt;https://sv.wikipedia.org/wiki/Stj%C3%A4rnornas_krig_(film)&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/M/MV5BYmViY2M2MTYtY2MzOS00YjQ1LWIzYmEtOTBiNjhlMGM0NjZjXkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_UX182_CR0,0,182,268_AL_.jpg&quot; alt=&quot;Star Wars episode 5 poster&quot;&gt;
		&lt;h3&gt;Star Wars V - Rymdimperiet sl&aring;r tillbaka&lt;/h3&gt;
		&lt;p&gt;Rymdimperiets makt har &aring;ter stigit. Rebellerna har d&auml;rf&ouml;r byggt en ny bas p&aring; den avl&auml;gsna sn&ouml;planeten Hoth. Rymdimperiet f&aring;r genom sina rymdsonder reda p&aring; rebellbasens position och inleder en markattack. Rebellerna tvingas evakuera, och Luke Skywalker f&aring;r, efter att ha deltagit i slaget, ge sig av i sitt rymdskepp tillsammans med R2-D2. Prinsessan Leia, Han Solo, Chewbacca och C-3PO flyr samtidigt i Millenniefalken.&lt;/p&gt;
		&lt;p class=&quot;center&quot;&gt;K&auml;lla: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Rymdimperiet_sl%C3%A5r_tillbaka&quot;&gt;https://sv.wikipedia.org/wiki/Rymdimperiet_sl%C3%A5r_tillbaka&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/I/51UdiBUkerL._SY450_.jpg&quot; alt=&quot;Star Wars episode 6 poster&quot;&gt;
		&lt;h3&gt;Star Wars VI - Jedins &aring;terkomst&lt;/h3&gt;
		&lt;p&gt;Luke Skywalker och hans v&auml;nner befinner sig &aring;ter p&aring; &ouml;kenplaneten Tatooine, f&ouml;r att d&auml;r r&auml;dda Han Solo ifr&aring;n maffiabossen Jabba the Hutts palats. R&auml;ddningsaktionen lyckas s&aring; sm&aring;ningom, och Luke &aring;terv&auml;nder till planeten Dagobah f&ouml;r att slutf&ouml;ra sin jeditr&auml;ning under m&auml;ster Yoda. Yoda ber&auml;ttar f&ouml;r Luke att han redan kan allt han beh&ouml;ver, och han erk&auml;nner ocks&aring; att Darth Vader verkligen &auml;r Lukes far. Yoda d&ouml;r sedan av &aring;lderdom.&lt;/p&gt;
		&lt;p class=&quot;center&quot;&gt;K&auml;lla: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Jedins_%C3%A5terkomst&quot;&gt;https://sv.wikipedia.org/wiki/Jedins_%C3%A5terkomst&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images-na.ssl-images-amazon.com/images/I/51ot43IHOkL._SL500_AC_SS350_.jpg&quot; alt=&quot;Star Wars episode 7 poster&quot;&gt;
		&lt;h3&gt;Star Wars  VII - The Force Awakens&lt;/h3&gt;
		&lt;p&gt;Handlingen utspelar sig ungef&auml;r 30 &aring;r efter Jedins &aring;terkomst och Darth Vaders och Darth Sidious d&ouml;d. Den fokuserar p&aring; en trio unga huvudrollsinnehavare, samt ett flertal k&auml;nda ansikten fr&aring;n tidigare filmer. Episod VII&ndash;IX kommer inte att anv&auml;nda sig av de historier eller rollfigurer som kommer fr&aring;n Expanded Universe, dock kan element fr&aring;n detta material inkluderas f&ouml;r att bli kanon, som i fallet med TV-serien Star Wars Rebels.&lt;/p&gt;
		&lt;p class=&quot;center&quot;&gt;K&auml;lla: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Star_Wars:_The_Force_Awakens&quot;&gt;https://sv.wikipedia.org/wiki/Star_Wars:_The_Force_Awakens&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://www.bleedingcool.com/wp-content/uploads/2017/07/SWTLJ6-600x890.jpg&quot; alt=&quot;Star Wars episode 8 poster&quot;&gt;
		&lt;h3&gt;Star Wars VIII - The Last Jedi&lt;/h3&gt;
		&lt;p&gt;Efter att ha funnit Luke Skywalker f&ouml;rs&ouml;ker Rey &ouml;vertala honom att ansluta sig till rebellstyrkorna, men Luke har tappat tron p&aring; jediriddarnas roll i kampen efter att ha misslyckats med Ben Solo. Samtidigt leder Leia rebellstyrkorna i kraftigt underl&auml;ge, och deras chanser blir inte b&auml;ttre n&auml;r det visar sig att F&ouml;rsta orden har utvecklat en teknologi som kan sp&aring;ra deras skepp i ljushastighet.&lt;/p&gt;
		&lt;p class=&quot;center&quot;&gt;K&auml;lla: &lt;a href=&quot;https://sv.wikipedia.org/wiki/Star_Wars:_The_Last_Jedi&quot;&gt;https://sv.wikipedia.org/wiki/Star_Wars:_The_Last_Jedi&lt;/a&gt;&lt;/p&gt;
		
		&lt;img src=&quot;https://images.justwatch.com/poster/178536888/s718/star-wars-episode-ix.jpg&quot; alt=&quot;Star Wars episode 9 poster&quot;&gt;
		&lt;h3 class=&quot;center&quot;&gt;Star Wars IX - The rise of Skywalker&lt;/h3&gt;
		&lt;p&gt;&quot;Star Wars: The Rise of Skywalker&quot; &auml;r det nionde och sista kapitlet i den episka Skywalker-sagan. Det episka, avg&ouml;rande slaget mellan det goda och det onda n&auml;rmar sig. Hj&auml;ltarna Rey, Poe och Finn forts&auml;tter Motst&aring;ndsr&ouml;relsens kamp mot F&ouml;rsta ordningen, och Kylo Ren f&aring;r ett meddelande fr&aring;n kejsaren Palpatine som troddes vara d&ouml;d.&lt;/p&gt;
		
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>Star Wars - CSS</h4>

<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    background-color: beige;
    margin: 0px;
}

h1 {
    background-color: black;
    color: white;
    padding: 20px;
    text-align: center;
    margin: 0px;
}

p, h2, h3 {
    color: darkslategrey;
    padding-left: 20px;
    padding-right: 20px;
}

img {
    width: 150px;
    display: block;
    margin: auto;
}

#important {
    border: dotted 5px black;
    text-align: center;
    padding: 10px;
}

.center {
    text-align: center;
}

#first-p {
    margin-bottom: 40px;
}

table, td, th {
    border: 1px solid black;
}
</code></pre>