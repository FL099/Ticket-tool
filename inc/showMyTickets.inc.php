<?php
#TODO:statt fixen Werten mit Datenbankwerten befüllen
$num = array(1,2,3,4,5);
$heading = array("Die Farbkombi gefällt mir nicht", "Stürzt andauernd ab", "Ich kann mich nicht einloggen", "Es lagt andauernd", "Ich brauche mehr Funktionen");
$kategorie = array("TODOs", "Alarmstufe rot", "Alarmstufe rot", "wichtig", "TODOs");
$inhalt = array("Ich will besser abgestimmte Farben", "Sobald ich etwas verändern will stürzt es ab und ich muss es neu starten", "Ich weiß, dass ich das richtige Passwort und Usernamen verwenden, aber kann mich sehr oft nicht anmelden","Zb eine bessere Übersicht wäre schön", "Ich kann gewisse Sachen nicht machen, die ich von anderen Systemen gewohnt bin.");
?>
<h1>Ihnen zugewiesene Tickets</h1>
<div class="container" id="overview">
	<div class="row">
		<div class="col-11">
			<table class="table table-hover table-dark">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Titel</th>
						<th scope="col">Kategorie</th>
						<th scope="col">Inhalt</th>
					</tr>
				</thead>
    			<tbody>
                <?php
                include "dbconn.php";
                    for ($x=0; $x < count($num);){
                        echo "<tr><th scope=\"row\">$num[$x]</th>";
                        echo "<td>$heading[$x]</td>";
                        echo "<td>$kategorie[$x]</td>";
                        echo "<td>$inhalt[$x]</td></tr>";
                        $x++;
                    };
                ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

