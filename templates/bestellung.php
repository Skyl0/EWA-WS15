	<div class="contentwrap">
		
	
	<div class="col-md-6">
		<h1>Kunde Bestellung</h1>
		<table class="table table-striped bestellung">
			<tr>
				<td class="td-1"><img src="./images/pizza.jpg" alt="Eine Pizza" /></td>
				<td class="td-2">Margherita</td>
				<td class="td-3">4,00 €</td>
			</tr>
					<tr onclick()>
				<td class="td-1"><img src="./images/pizza.jpg" alt="Eine Pizza" /></td>
				<td class="td-2">Tonno</td>
				<td class="td-3">5,00 €</td>
			</tr>
					<tr>
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
					<script>
						function deleteItem() {
							var x = document.getElementById("warenkorb");
							x.remove(x.selectedIndex);
						}
						function addItem() {
							var x = document.getElementById("warenkorb");
							var option = document.createElement("option");
							option.text = "Kiwi";
							x.add(option);
						}
					</script>
					<option id="Marg" value="Marg" class="list-group-item">
						Pizza Margharita
					</option>
					<option id="Tonn" value="Tonn" class="list-group-item">Pizza Tonno</option>
					<option id="Pros" value="Pros" class="list-group-item">Pizza Prosciutto</option>
				</select>
				<button class="btn btn-error delete-item"  onclick="deleteItem();">Lösche Auswahl</button>
			</div>
			<div class="endpreis">
				<input type="text" class="form-control margin-10" name="preis" readonly value="14,50 €"/>
			</div>
			<div class="formbuttons">
				<input type="text" class="form-control margin-10" name="adresse" value="Meier, Soderstraße 96"/>
				<button type="reset" class="btn btn-warning">Alle löschen <span class="glyphicon glyphicon-exclamation-sign"></span></button>
				<button type="submit" class="btn btn-success">Bestellen <span class="glyphicon glyphicon-export"></span></button>
			</div>
		</form>
	</div>
	
	</div>