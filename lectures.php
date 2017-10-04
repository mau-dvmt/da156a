<?php
	include "_header.php";
	if(isset($_GET['nr'])){;
		$nr = $_GET['nr'];
		$link2 = "lectures/$nr/";
		$link = "lectures/$nr/";
		if (file_exists("lectures/$nr/index.php")) {
            ?>
            <div class="row">
                <div class="col-lg-8 create-submenu">
                    <?php
                     include "lectures/$nr/index.php";
                    ?>
               </div>
                <div class="col-lg-4 submenu-area"></div>
        	</div>
            <hr>
            <?php
		} else {
			echo "<h4>Detta är inte sidan du letar efter...</h4>";
		}
	}else{
	?>
	<div class="row">
		<div class="col-lg-8 create-submenu">
			<h2>Föreläsningar</h2>
			<p>I kursen ges en föreläsningsserie, med sammanfattande förklaring, exempel, livedemos och tips. Föreläsningarna spelas inte in, men det mesta av stödmaterialet (bildspel, exempeldokument, etc.) publiceras här.</p>

            <table class="table table-striped">
                <tr>
                    <th>Nr.</th>
                    <th>Ämne</th>
                    <th>Föreläsare</th>
                </tr>
                <tr>
                    <td>1</td>
					<td><a href="/lectures.php?nr=1">Föreläsning 1: Kursintroduktion</a></td>
					<td>Anton</td>
                </tr>
				<tr>
					<td>2</td>
					<td><a href="/lectures.php?nr=2">Föreläsning 2: Introduktion till HTML</a></td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>3</td>
					<td><a href="/lectures.php?nr=3">Föreläsning 3: Tabeller &amp; formulär</a></td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>4</td>
					<td><a href="/lectures.php?nr=4">Föreläsning 4: Introduktion till CSS</a></td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>5</td>
					<td><a href="/lectures.php?nr=5">Föreläsning 5: Layout med HTML &amp; CSS</a></td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>6</td>
					<td><a href="/lectures.php?nr=6">Föreläsning 6: Layout med HTML &amp; CSS (2)</a></td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>7</td>
					<td><a href="/lectures.php?nr=7">Föreläsning 7: Responsiv webbdesign</a></td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>8</td>
					<td><a href="/lectures.php?nr=8">Föreläsning 8: Tutorial, att bygga en webbsida</a></td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>9</td>
					<td><a href="/lectures.php?nr=9">Föreläsning 9: Webbutveckling med JavaScript</a></td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>10</td>
					<td><a href="/lectures.php?nr=10">Föreläsning 10: Ramverk och bibliotek</a></td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>11</td>
					<td><a href="/lectures.php?nr=11">Föreläsning 11: Introduktion till användbarhet</a></td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>12</td>
					<td><a href="/lectures.php?nr=12">Föreläsning 12: Användbarhet: Fokus IT</a></td>
					<td>Anton</td>
				</tr>
            </table>

			<p>Notera även att innehållet kan ändras något under kursens gång - studenter har möjlighet att påverka vad som fördjupas.</p>
		</div>
		<div class="col-lg-4 submenu-area">
		</div>
	</div>

    <hr>

	<?php
	}
	include "_footer.php";
?>
