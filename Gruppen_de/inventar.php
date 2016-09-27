<form method=POST action=form_eval_inventar.php>
	<fieldset>
		<legend>Inventar</legend>
		<table>
			<tr>
				<td>Angriff</td>
			</tr>

			<tr>


				<?php
					//Schleife für die Offensiven Items
					$anzahlOItems = 10; //Aus Datenbank
					for($i = 0; $i < $anzahlOItems; $i++) {
						echo
							'<td>
								<ul>
									<li>
										<label for=oitem',$i+1,'>oItem',$i+1,'</label>
										<input type=checkbox id=oitem',$i+1,' name=oitems>
									</li>
								</ul>
							</td>';
					}
				?>
			</tr>
			<tr>
				<td>Verteidigung</td>
			</tr>
			<tr>
				<?php
					//Schleife für die Offensiven Items
					$anzahlDItems = 10; //Aus Datenbank
					for($i = 0; $i < $anzahlDItems; $i++) {
						echo
							'<td>
								<ul>
									<li>
										<label for=ditem',$i+1,'>dItem',$i+1,'</label>
										<input type=checkbox id=ditem',$i+1,' name=ditems>
									</li>
								</ul>
							</td>';
					}
				?>
			</tr>
		
		</table>

	</fieldset>
	<input type=submit id=bestaetigen>
</form>

<?php 
	$inMainMenu = false;
	include("zurueckzumspiel.php") 
?>

<!--
===================================
=== Feedback Alpers, 2016-06-17 ===
===================================

Da hat sich ein böser kleiner Tippfehler eingeschlichen. 
Den Absatz haben Sie in der Gruppendefinition nicht vorgegeben. Bitte überarbeiten Sie die so, dass sie konsistent mit der Umsetzung ist.
Ähnliches für die Radiobuttons: In der Definition ist vorgegeben, dass es sich um Schaltflächen handeln soll, nicht um Radiobuttons.
Außerdem hatten Sie definiert, dass die Gruppe zurueckzumspiel ebenfalls hier integriert werden soll.

Hinweis, um Missverständnissen vorzubeugen: Die Beschreibung in der Projektidee.txt, der strukt.html und im Quellcode sollen konsistent sein; was Sie jeweils anpassen ist Ihnen überlassen, aber es muss durchgehend konsistent sein. Das ist eine der harten Anforderungen beim Projektmanagement. (Wobei die leider auch in der Wirtschaft häufig ignoriert wird. Die Auswirkung sind dann Fehler, die kaum zu bereinigen sind.)

0 / 1 Pk.

-->

