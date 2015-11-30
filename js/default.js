var Preise =
{ Marg: 4.0, Tonn: 4.5, Pros: 5.5 }
var Details =
{ Marg: "Margharita 4,00 Eur", Tonn: "Tonno 4,50 Eur", Pros: "Prosciutto 5,50 Eur"} 

function deleteItem() {
	"use strict";
	var x = document.getElementById("warenkorb");
	x.remove(x.selectedIndex);
	refreshCart();
}
function addItem(ID) {
	"use strict";
	var x = document.getElementById("warenkorb");
	var option = document.createElement("option");
	option.text = Details[ID];
	option.id = Details[ID];
	option.value = Preise[ID];
	option.className = 'list-group-item';
	x.add(option);
	refreshCart();
}

function refreshCart() {
	"use strict";
	var warenkorb = document.getElementById('warenkorb').options;
	var preisfeld = document.getElementById('gesamtpreis');
	
	console.log("Warenkorb" + warenkorb);

	var result = 0.0;
	
	for (var i = 0; i < warenkorb.length; i++) {
		result += parseFloat(warenkorb.item(i).value);
	}
	
	preisfeld.value = result;
	console.log("Refreshed");
}