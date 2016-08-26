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
			<p>Laborationer är rekommenderade övningsuppgifter, som tar upp många viktiga koncept på ett förklarande vis. Studenter kan titta på <a href="plan.php">planen för 2016</a> för handledningstider. Där syns också när respektive labb bör vara gjord, för att hålla kursens tempo.</p>
			<p>För varje genomförd labb på plats som redovisas för labbassistent kan man tillgodoräkna sig <code>0.5p</code> till tentamen.</p>
			<table class="table table-striped">
                <tr>
                    <th>Datum</th>
                    <th>Laboration</th>
                    <th>Labbhandledare</th>
                </tr>
                <tr>
                    <td>2/9</td>
                    <td><a href="/exercises.php?title=1">1. Enkel personlig webbsida</a></td>
                    <td>Sofia, Jacob (, Anton)</td>
                </tr>
                <tr>
                    <td>8/9</td>
                    <td>2.a. Mer HTML-element och 2.b. stilmallar</td>
                    <td>Jacob, Anton)</td>
                </tr>
                <tr>
                    <td>15/9</td>
                    <td>3. Layout med CSS</td>
                    <td>Sofia, Jacob (, Anton)</td>
                </tr>
                <tr>
                    <td>21/9</td>
                    <td>4. Interaktivitet med JavaScript</td>
                    <td>Sofia, Jacob (, Anton)</td>
                </tr>
                <tr>
                    <td>29/9</td>
                    <td>5. Media Queries</td>
                    <td>Sofia, Jacob (, Anton)</td>
                </tr>
			</table>

            <h3>1. Labbgrupper HT 2016</h3>
            <p>Till <em>nästan</em> alla laborationer har vi två datorsalar. Finns det inte plats i den första sal ni går i, testa den andra på schemat - där bör det finnas plats då.</p>
            <p>Notera också att det går några fler individer per grupp än vad det finns datorer i många salar. Det löser sig om ett fåtal i varje sal har bärbar dator med, eller kan samarbeta.</p>
            <p>Schemat med salar för laborationerna hittar ni <a href="http://schema.mah.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=m&intervallAntal=6&sprak=SV&sokMedAND=true&forklaringar=true&resurser=k.DA156A-20162-TS789-">här</a></p>
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
