<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<title>Artikel ausgeben</title>
<?php
    require_once("e1_artikel_ausgeben.class.php");
?>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<?php
    require_once("navigation.inc.php");
?>
<h1>Artikel</h1>
<div class="ausgabe">
<?php
    $artikel = new artikel();
    $artikel->lesenAlleDaten();
?>
</div>

</body>
</html>