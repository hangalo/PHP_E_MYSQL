<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Elenco cita</title>
    </head>
    <body>
        <?php
        $connessione = mysql_connect("localhost", "root", "root")
                or die("Connessione non riuscita");
        mysql_select_db("jsf_e_jpa")
                or die("Seleccione del database non riuscito");

        $query = "SELECT pv.id_provincia, pv.nome_provincia, p.nome_pais FROM provincia pv INNER JOIN pais p ON pv.id_pais=p.id_pais";
        $risultato = mysql_query($query) or die("Query fallita");
        echo "<ul>\n";
        while ($record = mysql_fetch_array($risultato)) {
            echo "<li><strong>", $record["id_provincia"], "</strong>:", $record["nome_provincia"], $record["nome_pais"], "</li>";
        }
        echo "</ul>\n";
        mysql_close($connessione);
        ?>
    </body>
</html>
