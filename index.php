<?php
include '/templates/header.php' ;

if (!empty($_GET["action"] )) {

	 switch ($_GET["action"] ) {
	 	
	  	 case "Fahrer": include '/templates/fahrer.php'; break;
		 case "Pizzabaecker": include '/templates/pizzabaecker.php'; break;
		case "Lieferstand": include '/templates/lieferstand.php'; break;
		case "Bestellung": include '/templates/bestellung.php'; break;
		
		default: include '/templates/chose.php'; break;
		 }
} else {
	include '/templates/chose.php';
}

include '/templates/footer.php' ;
 ?>
