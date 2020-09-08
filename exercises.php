<?php
	include "_header.php";
	if(isset($_GET['title'])){
		$exercises = $_GET['title'];

		if(file_exists("exercises/$exercises/index.php")){
            ?>
             <div class="row">
                <div class="col-lg-8 create-submenu">
                <?php
                     include "exercises/$exercises/index.php";
                ?>
               </div>
                <div class="col-lg-4 submenu-area"></div>
        	</div>
        <?php
        }
	}else{
		?>

		<div class="row">
		<div class="col-lg-8 create-submenu">
			<h2>Laborationer</h2>
			<p>Laborationer är rekommenderade övningsuppgifter, som tar upp många viktiga koncept på ett förklarande vis. Studenter kan titta på <a href="plan.php">planen för 2020</a> för handledningstider. Där syns också när respektive labb bör vara gjord, för att hålla kursens tempo.</p>
			<p>För varje genomförd labb på plats som redovisas för labbassistent kan man tillgodoräkna sig <code>0.5p</code> till tentamen.</p>
			<table class="table table-striped">
                <tr>
                    <th>Nr.</th>
                    <th>Laboration</th>
                    <th>Labbhandledare</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><a href="/exercises.php?title=1">En enkel personlig webbsida</a></td>
                    <td>Anton</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>a) <a href="/exercises.php?title=2">Formulär &amp; tabeller</a>, b) <a href="/exercises.php?title=2b">Introduktion till CSS</a></td>
                    <td>Anton</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Layout med CSS</td>
                    <td>Anton</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Responsiv webbutveckling</td>
                    <td>Anton</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>JavaScript och ramverk</td>
                    <td>Anton</td>
                </tr>
			</table>

		</div>
		<div class="col-lg-4 submenu-area">
			<!--<h2>Bra länkar</h2>-->
		</div>
	</div>

    <hr>

    <?php
	}
	include "_footer.php";
?>
