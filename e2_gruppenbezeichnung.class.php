<?php

class gruppen {


private $tabelle = "Artikel";


public function lesenAlleDaten()
{
    $sql = "SELECT anr,
                    gnr,
                    name,
                    preis

                    FROM " .$this->tabelle ."
                    ORDER BY gnr";
    $this->baueGruppenTabelle($sql);
}



private function baueGruppenTabelle($sql)
{
     require_once("db.inc.php");
    if ($stmt = $mysqli -> prepare($sql)) {
        $stmt -> execute();
        $stmt -> bind_result($anr,
                            $gnr,
                            $name,
                            $preis
							);
        echo "<table id=\"zebra\">\n\t";
        echo "<thead>
                <tr>
                    <th>Artikelnummer</th><th>Artikelgruppe</th><th>Name</th><th>Preis</th>

                </tr>
            </thead>";
        echo "<tbody>\n\t";
        $count = 0;
        while ($stmt -> fetch()) {
            $count += 1;
            $zebratyp = "ungerade";
            echo "<tr ";
            if($count % 2 == 0) {
                $zebratyp = "gerade";
            }
            echo "class=\"" .$zebratyp
            ."\">\n\t<td>"
            . htmlspecialchars($anr)
            ."</td>\n\t<td>"
            . htmlspecialchars($gnr)
            ."</td>\n\t<td>"
            . htmlspecialchars($name)
            ."</td>\n\t<td>"
            . htmlspecialchars($preis)
            ."</td>\n\t";
        }
        echo "</table>";
    $stmt->close();
    }
    $mysqli->close();
}

}
?>
