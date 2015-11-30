var Preise =
{ Marg: 4.0, Tonn: 4.5, Pros: 5.5 };
var Details =
{ Marg: "Margharita 4,00 €", Tonn: "Tonno 4,50 €", Pros: "Prosciutto 5,50 €"} ;

function init() {
 refreshCart();
 console.log("Init done!");
}

function deleteItem() {
	"use strict";
	var x = document.getElementById("warenkorb");
	x.remove(x.selectedIndex);
	refreshCart();
}
function addItem(ID) {
	"use strict";
	var cart = document.getElementById("warenkorb");
	var option = document.createElement("option");
	option.text = Details[ID];
	//option.value = Preise[ID];
	option.className = 'list-group-item ' + "item-" + ID;;
	option.dataset.price = Preise[ID];
	cart.add(option);
	refreshCart();
}

function refreshCart() {
	"use strict";
	var cart = document.getElementById('warenkorb').options;
	var preisfeld = document.getElementById('gesamtpreis');
	
	//console.log("Warenkorb" + cart);
	var result = 0.0;
	
	for (var i = 0; i < cart.length; i++) {
		result += parseFloat(cart.item(i).dataset.price);
	}
	
	preisfeld.dataset.total = result;
	preisfeld.value = result.toFixed(2) + " €";
	console.log("Refreshed");
}

// JQuery AJAX Teil

jQuery(document).ready(function($)  {
	$('body').addClass('jquery-enabled');
});