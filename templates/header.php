<?php
/*
 * Template for Header
 * Pizzadienst EWA WS15
 */ 
 ?><!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8"/>
<title><?php
if (empty($_GET["action"] )) { echo "101 Title not found" ; }
else {
	echo htmlspecialchars($_GET["action"]);
} 
?></title>
<link rel="stylesheet" href="./css/style.css"/>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="init()">
<button class="btn btn-info back" onClick="history.back()"><span class="glyphicon glyphicon-chevron-left"></span> Zurück</button>