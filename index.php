<!DOCTYPE html>
<?php

$zeilen = file ('waerte.txt');


$kilometer=  $zeilen[0];
$bzeit=   $zeilen[1];
$temp=    $zeilen[2];
$durchschnitt=$zeilen[3];



     echo'
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
	<title>Sk8board</title>
	<h1 style="color: #5e9ca0;">E-Sk8board:</h1>
	</head>
<body>
  	<p>(c) by Victoria Bratuscha, Nikischer Rudolph and Stefan Taucher.</p>
	<table style="height: 120px; margin-right: auto; margin-left: auto;background-color: #f5f5f5;" width="400">
		<tbody>
		<tr>
		<td>
		<h4>&nbsp;Kilometerstand (km)</h4>
		</td>
		<td>'; echo $kilometer; echo 'kilometer</td>
		</tr>
		<tr>
		<td>
		<h4>&nbsp;Betriebszeit (Std)</h4>
		</td>
		<td>'; echo $bzeit; echo 'Stunden</td>
		</tr>
		<tr>
		<td>
		<h4>&nbsp;Motortemperatur (&deg;C)</h4>
		</td>
		<td>'; echo $temp; echo 'Grad Celsius</td>
		</tr>
		<tr>
		<td>
		<h4>&nbsp;Durchschnittsgeschwindigkeit</h4>
		</td>
		<td>'; echo $durchschnitt; echo ' km/h</td>
		</tr>
		</tbody>
	</table>
</body>
</html>   ';


?>
