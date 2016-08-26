<?php
	include "_header.php";
	if(isset($_GET['type']) and isset($_GET['title'])){
		$type = $_GET['type'];
		$nr = $_GET['title'];
		$link2 = "resources/$type/";
		$link = "resources/$type/$nr/";
		if (file_exists("resources/$type/$nr/index.php")) {
            ?>
            <div class="row">
                <div class="col-lg-8 create-submenu">
                    <?php
                     include "resources/$type/$nr/index.php";
                    ?>
               </div>
                <div class="col-lg-4 submenu-area"></div>
        	</div>
            <hr>
            <?php
		} else {
			echo "<h4>Detta är inte sidan du letar efter...</h4>";
		}
	}
?>