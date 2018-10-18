<?php

 require("db.inc.php");

$sql = "SELECT DISTINCT ANR, NAME FROM artikel";
$result = mysqli_query($mysqli, $sql) or die ("Falsche SQL: $sql");

$option = "<select name='loeschen'>";
while($row = mysqli_fetch_assoc($result)) {
	$option .="<option value=\"$row[ANR]|$row[NAME]\">$row[ANR]|$row[NAME]</option>";
}

$option .="</select>"

?>
<?php


    if(isset($_GET["anr"])) {
    $artikel = new termin();
    $artikel -> loeschen($_GET["anr"]);
    echo "<h2>Termin gelöscht</h2>";
    }
    header("refresh:3; url=e3_artikel_loeschen.php");




?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<title>Artikel löschen</title>


<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <?php
    require_once("navigation.inc.php");
?>
<h1>Artikel</h1>
<?php
	echo  $option;
?>
<button id="anr" href="löschen.php?anr=?php" $row['anr']."> Datensatz löschen</button>

</body>
</html>
