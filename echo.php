<?php
include '/templates/header.php' ;

echo '<div class="contentwrap padding-20"><h1><span class="glyphicon glyphicon-thumbs-up blue"></span> ECHO Skript für Testzwecke</h1>';

echo "<p>ALL _POST: </p><ul class='list-group'>";
foreach($_POST as $key => $value) 
{
	if (is_array($value) ) {

		foreach($value as $key2 => $value2) 
		{
			echo "<li class='list-group-item list-group-item-success'>" . $key2 . " => " . $value2 . "</li>";
		}
		
	} else {
		echo "<li class='list-group-item'>" . $key . " => " . $value . "</li>";
	}
}  

echo "</ul><p>ALL _GET: </p><ul>";

foreach($_GET as $key => $value) 
{
echo "<li class='list-group-item'>" . $key . " => " . $value . "</li>";
}  
echo "</ul></div>";

include '/templates/footer.php' ;
?>
