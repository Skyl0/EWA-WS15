	<div class="contentwrap">
		
	
	<div class="col-md-6">
		<h1>Kunde Bestellung</h1>
		<table class="table table-striped bestellung">
			<tr onclick="addItem('Marg')">
				<td class="td-1"><img src="./images/pizza.jpg" alt="Eine Pizza" /></td>
				<td class="td-2">Margherita</td>
				<td class="td-3">4,00 €</td>
			</tr>
			<tr onclick="addItem('Tonn')">
				<td class="td-1"><img src="./images/pizza.jpg" alt="Eine Pizza" /></td>
				<td class="td-2">Tonno</td>
				<td class="td-3">5,00 €</td>
			</tr >
			<tr onclick="addItem('Pros')">
				<td class="td-1"><img src="./images/pizza.jpg" alt="Eine Pizza" /></td>
				<td class="td-2">Prosciutto</td>
				<td class="td-3">6,00 €</td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<h1>Warenkorb</h1>
		<form action="echo.php" method="post">
			<div class="warenkorb">
				<select name="warenkorb[]" multiple class="list-group" id="warenkorb">

				</select>
				<div class="delete-button"><button class="btn btn-danger btn-xs delete-item"  type="button" onclick="deleteItem();"><span class="glyphicon glyphicon-minus"></span> Lösche Auswahl</button></div>
			</div>
			<div class="endpreis">
				<input type="text" id="gesamtpreis" class="form-control margin-10" name="gesamtpreis" readonly value="0.0"/>
			</div>
			<div class="formbuttons">
				<input type="text" class="form-control margin-10" name="adresse" required />
				<button type="reset" class="btn btn-warning disabled">Alle löschen <span class="glyphicon glyphicon-exclamation-sign"></span></button>
				<button type="submit" class="btn btn-success">Bestellen <span class="glyphicon glyphicon-export"></span></button>
			</div>
		</form>
	</div>
	
	</div>