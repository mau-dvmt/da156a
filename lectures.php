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
