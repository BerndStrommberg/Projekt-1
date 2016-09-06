<form method=POST action=form_eval_inventar.php>
	<fieldset>
		<legend>Inventar</legend>
		<table>
			<tr>
				<td>Angriff</td>
				<td>Verteidigung</td>
			</tr>

			<tr>
				<td><ul>
						<li>
							<label for=oitem1>oItem 1</label>
							<input type=radio id=oitem1 name=oitems>
						</li>
						<li>
							<label for=oitem2>oItem 2</label>
							<input type=radio id=oitem2 name=oitems>
						</li>
						<!--Die Liste soll aus einer Datenbank generiert werden und alle bisher gesammelten Items beinhalten, ich weiss aber nicht genau wie das geht-noch nicht-->
					</ul></td>
				<td>
					<ul>
						<li>
							<label for=ditem1>dItem 1</label>
							<input type=radio id=ditem1 name=ditems>
						</li>
						<li>
							<label for=ditem2>dItem 2</label>
							<input type=radio id=ditem2 name=ditems>
						</li>
					</ul>
				</td>
			</tr>
		
		</table>

	</fieldset>

	<label for=bestaetigen>Bestätigen</label>
	<input type=submit id=bestaetigen>
</form>