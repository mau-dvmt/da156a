<?php
	include "_header.php";
?>
	<div class="row">
		<div class="col-lg-8 create-submenu">
			<h2>Planering</h2>
            <p>För enkelhetens skull är alla viktiga datum och tider sammanställda här. För att undvika motsägande information är salar inte angivna - se det <a href="http://schema.mah.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=m&intervallAntal=6&sprak=SV&sokMedAND=true&forklaringar=true&resurser=k.DA156A-20182-TS089-">officiella schemat</a>.</p>
            <p>Labbtillfällena är i grunden fria att disponera, men i tabellen nedan anges så långt man minst bör sträva efter att komma. (Det skadar aldrig att jobba senare delar!) Assistenter finns på plats 8-12 för att ge råd och svara på frågor.</p>
            <p>Innehållet för varje tillfälle presenteras, eller kommer att presenteras, på sidorna för <a href="/lectures.php">föreläsningar</a>, <a href="/exercises.php">laborationer</a> och <a href="/assignments.php">inlämningsuppgifter</a>.</p>
            <h3>1. Tillfällen och deadline</h3>
            <table class="table" id="plan">
                <tr class="odd header">
                    <th>Vecka</th>
                    <th>Datum</th>
                    <th>Tid*</th>
                    <th>Vad</th>
					<th>Läshänvisningar</th>
                </tr>
                <tr class="lecture even">
                    <td rowspan="3">36</td>
                    <td>4/9</td>
                    <td>08-10</td>
                    <td><a href="/lectures.php?nr=1">Föreläsning 1: Kursintroduktion</a></td>
					<td>-</td>
                </tr>
                <tr class="lecture even">
                    <td>5/9</td>
                    <td>13-15</td>
                    <td><a href="/lectures.php?nr=2">Föreläsning 2: Introduktion till HTML</a></td>
					<td>HTML &amp; CSS: Kap. 1-5</td>
                </tr>
                <tr class="laboration even">
                    <td>7/9</td>
                    <td>08-12</td>
                    <td><a href="/exercises.php?title=1">Laboration 1: Enkel personlig webbsida</a></td>
					<td></td>
                </tr>

                <tr class="lecture odd">
                    <td rowspan="3">37</td>
                    <td>11/9</td>
                    <td>08-10</td>
                    <td><a href="/lectures.php?nr=3">Föreläsning 3: Tabell &amp; formulär</a></td>
					<td>HTML &amp; CSS: Kap. 6-7</td>
                </tr>
                <tr class="lecture odd">
                    <td>12/9</td>
                    <td>13-15</td>
                    <td><a href="/lectures.php?nr=4">Föreläsning 4: Introduktion till CSS</a></td>
					<td>HTML &amp; CSS: Kap. 10-14</td>
                </tr>
                <tr class="laboration odd">
                    <td>14/9</td>
                    <td>08-12</td>
                    <td>Laboration 2: <a href="/exercises.php?title=2">a) Formulär &amp; tabeller</a>, <a href="/exercises.php?title=2b">b) Introduktion till CSS</a></td>
					<td></td>
                </tr>

                <tr class="lecture even">
                    <td rowspan="3">38</td>
                    <td>18/9</td>
                    <td>08-10</td>
                    <td>Föreläsning 5: Layout med CSS (1)</td>
					<td>HTML &amp; CSS: Kap. 15</td>
                </tr>
                <tr class="lecture even">
                    <td>19/9</td>
                    <td>13-15</td>
                    <td>Föreläsning 6: Layout med CSS (2)</td>
					<td>HTML &amp; CSS: Kap. 15</td>
                </tr>
                <tr class="laboration even">
                    <td>21/9</td>
                    <td>08-12</td>
                    <td>Laboration 3: Layout med CSS</td>
					<td></td>
                </tr>

                <tr class="lecture odd">
                    <td rowspan="4">39</td>
                    <td>25/9</td>
                    <td>10-12</td>
                    <td>Föreläsning 7: Responsiv webbutveckling</td>
					<td>HTML &amp; CSS: Kap. 15</td>
                </tr>
                <tr class="lecture odd">
                    <td>26/9</td>
                    <td>15-17</td>
                    <td>Föreläsning 8: Tutorial, att bygga en webbsida</td>
					<td></td>
                </tr>
                <tr class="laboration odd">
                    <td>28/9</td>
                    <td>8-12</td>
                    <td>Laboration 4: Responsiv webbplats</td>
					<td></td>
                </tr>
                <tr class="tenta assignment odd">
                    <td>30/9</td>
                    <td></td>
                    <td>Deadline: <a href="/assignments.php?nr=1">Inlämningsuppgift 1</a></td>
					<td></td>
                </tr>

                <tr class="lecture even">
                    <td rowspan="3">40</td>
                    <td>2/10</td>
                    <td>08-10</td>
                    <td>Föreläsning 9: Webbutveckling med JavaScript</td>
					<td>-</td>
                </tr>
                <tr class="lecture even">
                    <td>3/10</td>
                    <td>13-15</td>
                    <td>Föreläsning 10: Ramverk &amp; bibliotek</td>
					<td>-</td>
                </tr>
                <tr class="laboration even">
                    <td>5/10</td>
                    <td>08-12</td>
                    <td>Laboration 5: JavaScript på webben</td>
					<td></td>
                </tr>

                <tr class="lecture odd">
                    <td rowspan="3">41</td>
                    <td>9/10</td>
                    <td>10-12</td>
                    <td>Föreläsning 11: Introduktion till användbarhet</td>
					<td>-</td>
                </tr>
				<tr class="lecture odd">
					<td>10/10</td>
					<td>13-15</td>
					<td>Föreläsning 12: Användbarhet med fokus på webben</td>
					<td></td>
				</tr>
                <tr class="laboration odd">
                    <td>12/10</td>
                    <td>08-12</td>
                    <td>Laboration: Extratillfälle</td>
					<td></td>
                </tr>

                <tr class="lecture even">
                    <td rowspan="3">42</td>
                    <td>17/10</td>
                    <td>13-15</td>
                    <td>Föreläsning 13: Extra</td>
					<td></td>
                </tr>
                <tr class="laboration even">
                    <td>19/10</td>
                    <td>8-12</td>
                    <td>Laboration: Extratillfälle</td>
					<td></td>
                </tr>
                <tr class="tenta assignment even">
                    <td>21/10</td>
                    <td></td>
                    <td>Deadline: Inlämningsuppgift 2</td>
					<td></td>
                </tr>

                <tr class="lecture odd">
                    <td rowspan="1">43</td>
                    <td>24/10</td>
                    <td>13-15</td>
                    <td>Inför tentamen</td>
					<td></td>
                </tr>

                <tr class="tenta even">
                    <td rowspan="1">44</td>
                    <td>30/10</td>
                    <td>8-12</td>
                    <td>Tentamen, ordinarie</td>
					<td></td>
                </tr>

                 <tr class="tenta assignment odd">
                    <td rowspan="1">45</td>
                    <td>11/11</td>
                    <td></td>
                    <td>Deadline: Inlämningsuppgift 3</a></td>
					<td></td>
                </tr>

                <tr class="tenta even">
                    <td rowspan="1">50</td>
                    <td>13/12</td>
                    <td>8-12</td>
                    <td>Omtentamen 1</td>
					<td></td>
                </tr>

                <tr class="tenta odd">
                    <td rowspan="1">7</td>
                    <td>14/2</td>
                    <td>08-12</td>
                    <td>Omtentamen 2</td>
					<td></td>
                </tr>
            </table>

            <p>*Notera att <a href="https://sv.wikipedia.org/wiki/Akademisk_kvart">akademisk kvart</a> tillämpas, vilket betyder att undervisning kör igång 15 minuter efter utsatt tid.</p>

		</div>
		<div class="col-lg-4 submenu-area">
		</div>
	</div>

	<hr>

<?php
	include "_footer.php";
?>
