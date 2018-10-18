<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<title>Gruppenbezeichnung</title>
<?php
    require_once("e2_gruppenbezeichnung.class.php");
?>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<?php
    require_once("navigation.inc.php");
?>
<h1>Gruppenbezeichnung</h1>
<div class="ausgabe">
<?php
    $gruppen= new gruppen();
    $gruppen->lesenAlleDaten();
?>
</div>

</body>
</html>
