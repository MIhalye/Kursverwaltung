<?php


function lesenDatensatz($id, $tabelle)
{
    require_once("db.inc.php");



    $mysqli->close();
}

function lesenAlleDaten($tabelle)
{
    require_once("db.inc.php");
    if ($stmt = $mysqli -> prepare("SELECT name, vname, plz, ort, strasse, hausnr, telefon1, email FROM teilnehmer")) {
        $stmt -> execute();
        $stmt -> bind_result($name, $vname, $plz, $ort, $strasse, $hausnr, $telefon1, $email);
        echo "<table id=\"zebra\">\n\t";
        echo "<tbody>\n\t";
        $count = 0;
        while ($stmt -> fetch()) {
            $count+= 1;
            $zebratyp = "ungerade";
            echo "<tr ";
            if($count % 2 == 0) {
                $zebratyp = "gerade";
            }
            echo "class=\"" .$zebratyp
            ."\">\n\t<td>"
            . htmlspecialchars($name)
            ."</td>\n\t<td>"
            . htmlspecialchars($vname)
            ."</td>\n\t<td>"
            . htmlspecialchars($plz)
            ."</td>\n\t<td>"
            . htmlspecialchars($ort)
            ."</td>\n\t<td>"
            . htmlspecialchars($strasse)
            ."</td>\n\t<td>"
            . htmlspecialchars($hausnr)
            ."</td>\n\t<td>"
            . htmlspecialchars($telefon1)
            ."</td>\n\t<td>"
            . htmlspecialchars($email)
            ."</td>\n</tr>";
        }
        echo "</table>";
    }

    $stmt -> close();
    $mysqli->close();
}



?>