<?php
	include "_header.php";
?>
	<div class="row">
		<div class="col-lg-8 create-submenu">
			<h2>Planering</h2>
            <p>För enkelhetens skull är alla viktiga datum och tider sammanställda här. För att undvika motsägande information är digitala platser inte angivna - se det <a href="https://schema.mau.se/setup/jsp/Schema.jsp?startDatum=2023-08-28&intervallTyp=m&intervallAntal=6&sprak=SV&sokMedAND=true&forklaringar=true&resurser=k.DA106A-20232-TS133-" target="_blank">officiella schemat</a>.</p>
            <p>Labbtillfällena är i grunden fria att disponera, men i tabellen nedan anges så långt man minst bör sträva efter att komma. (Det skadar aldrig att jobba senare delar!) Lärare finns på plats 8-12 för att ge råd och svara på frågor.</p>
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
                    <td rowspan="3">35</td>
                    <td>29/8</td>
                    <td>10-12</td>
                    <td>Föreläsning 1: <a href="/lectures.php?nr=1">Kursintroduktion</a></td>
					<td>-</td>
                </tr>
                <tr class="lecture even">
                    <td>30/8</td>
                    <td>13-15</td>
                    <td>Föreläsning 2: <a href="/lectures.php?nr=2">Introduktion till HTML</a></td>
					<td>HTML &amp; CSS: Kap. 1-5</td>
                </tr>
                <tr class="laboration even">
                    <td>1/9</td>
                    <td>08-12</td>
                    <td>Laboration 1: <a href="/exercises.php?title=1">En första webbsida!</a></td>
					<td></td>
                </tr>

                <tr class="lecture odd">
                    <td rowspan="3">36</td>
                    <td>5/9</td>
                    <td>10-12</td>
                    <td>Föreläsning 3: <a href="/lectures.php?nr=3">Tabell &amp; formulär</a></td>
					<td>HTML &amp; CSS: Kap. 6-7</td>
                </tr>
                <tr class="lecture odd">
                    <td>6/9</td>
                    <td>13-15</td>
                    <td>Föreläsning 4: <a href="/lectures.php?nr=4">Introduktion till CSS</a></td>
					<td>HTML &amp; CSS: Kap. 10-14</td>
                </tr>
                <tr class="laboration odd">
                    <td>8/9</td>
                    <td>08-12</td>
                    <td>Laboration 2: a) <a href="/exercises.php?title=2">Formulär &amp; tabeller</a>, b) <a href="/exercises.php?title=2b">Introduktion till CSS</a></td>
					<td></td>
                </tr>

                <tr class="lecture even">
                    <td rowspan="3">37</td>
                    <td>12/9</td>
                    <td>10-12</td>
                    <td>Föreläsning 5: <a href="/lectures.php?nr=5">Layout med CSS (1)</a></td>
					<td>HTML &amp; CSS: Kap. 15</td>
                </tr>
                <tr class="lecture even">
                    <td>13/9</td>
                    <td>13-15</td>
                    <td>Föreläsning 6: <a href="/lectures.php?nr=6">Layout med CSS (2)</a></td>
					<td>HTML &amp; CSS: Kap. 15</td>
                </tr>
                <tr class="laboration even">
                    <td>15/9</td>
                    <td>08-12</td>
                    <td>Laboration 3: <a href="/exercises.php?title=3">Layout med CSS</a></td>
					<td></td>
                </tr>

                <tr class="lecture odd">
                    <td rowspan="4">38</td>
                    <td>19/9</td>
                    <td>10-12</td>
                    <td>Föreläsning 7: <a href="/lectures.php?nr=7">Responsiv webbutveckling</a></td>
					<td>HTML &amp; CSS: Kap. 15</td>
                </tr>
                <tr class="lecture odd">
                    <td>20/9</td>
                    <td>13-15</td>
                    <td>Föreläsning 8: <a href="/lectures.php?nr=8"> Tutorial, att bygga en webbsida</a></td>
					<td></td>
                </tr>
                <tr class="laboration odd">
                    <td>22/9</td>
                    <td>08-12</td>
                    <td>Laboration 4: <a href="/exercises.php?title=4">Responsiv webbplats</a></td>
					<td></td>
                </tr>
                <tr class="tenta assignment odd">
                    <td>24/9</td>
                    <td></td>
                    <td><strong>Deadline: <a href="/assignments.php?nr=1">Inlämningsuppgift 1</a></strong></td>
					<td></td>
                </tr>

                <tr class="lecture even">
                    <td rowspan="3">39</td>
                    <td>26/9</td>
                    <td>10-12</td>
                    <td>Föreläsning 9: <a href="/lectures.php?nr=9">Webbutveckling med JavaScript</a></td>
					<td>-</td>
                </tr>
                <tr class="lecture even">
                    <td>27/9</td>
                    <td>15-17</td>
                    <td>Föreläsning 10: <a href="/lectures.php?nr=10">Ramverk &amp; bibliotek</a></td>
					<td>-</td>
                </tr>
                <tr class="laboration even">
                    <td>29/9</td>
                    <td>08-12</td>
                    <td>Laboration 5: <a href="/exercises.php?title=5">JavaScript på webben</a></td>
					<td></td>
                </tr>

                <tr class="lecture odd">
                    <td rowspan="2">40</td>
					<td>3/10</td>
					<td>10-12</td>
					<td>Föreläsning 11: <a href="/lectures.php?nr=11">Introduktion till användbarhet</a></td>
					<td></td>
				</tr>
                <tr class="laboration odd">
					<td>6/10</td>
					<td>08-12</td>
					<td>Laboration: Extratillfälle</td>
					<td></td>
				</tr>

                <tr class="lecture even">
                    <td rowspan="3">41</td>
                    <td>10/10</td>
                    <td>10-12</td>
                    <td>Föreläsning 12: <a href="/lectures.php?nr=12">Användbarhet med fokus på webben</a></td>
					<td></td>
                </tr>
                <tr class="laboration even">
                    <td>13/10</td>
                    <td>08-12</td>
                    <td>Laboration: Extratillfälle</td>
					<td></td>
                </tr>
                <tr class="tenta assignment even">
                    <td>15/10</td>
                    <td></td>
                    <td><strong>Deadline: <a href="/assignments.php?nr=2">Inlämningsuppgift 2</a></strong></td>
					<td></td>
                </tr>

                <tr class="lecture odd">
                    <td rowspan="1">42</td>
                    <td>18/10</td>
                    <td>13-15</td>
                    <td>Inför tentamen</td>
					<td></td>
                </tr>

                <tr class="tenta even">
                    <td rowspan="1">43</td>
                    <td>25/10</td>
                    <td>14-19</td>
                    <td>Tentamen, ordinarie</td>
					<td></td>
                </tr>

                <tr class="odd">
                    <td rowspan="2">44</td>
                    <td>1/11</td>
                    <td>13-15</td>
                    <td>Tentamensgenomgång</td>
					<td></td>
                </tr>
                 <tr class="tenta assignment odd">
                    <td>5/11</td>
                    <td></td>
                    <td><strong>Deadline: <a href="/assignments.php?nr=3">Inlämningsuppgift 3</a></strong></td>
					<td></td>
                </tr>

                <tr class="tenta even">
                    <td rowspan="1">50</td>
                    <td>13/12</td>
                    <td>08-13</td>
                    <td>Omtentamen 1</td>
					<td></td>
                </tr>

                <tr class="tenta odd">
                    <td rowspan="1">3</td>
                    <td>15/1</td>
                    <td>14-19</td>
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
