<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="tabelle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        $percorso = realpath("./db/supermercati.mdb");
        $sc = "DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=" . $percorso . ";";
        $cn = new COM("ADODB.Connection") or die("Non va ADO");
        $rs = new COM("ADODB.Recordset");
        $cn->Open($sc);
        $rs->Open("SELECT * FROM Prodotti", $cn);
        //Stampa tabella con riga di intestazione
echo "<TABLE><TR><TH>ID_prodotto<TH>Nome prodotto<TH>Scorta
      <TH>Marca<TH>Fornitore<TH>Giacenza<TH>Imponibile<TH>Sconto %<TH>IVA%";
$alt = false;
//Ciclo di lettura e stampa del recordset
while (!$rs->eof) 
{
   //in base al contenuto della variabile $alt viene inserito lo stile altClass
   //per ottenere l'effetto del colore di sfondo alternato nelle righe
   $altClass = $alt ? " class='alt'" : "";
   echo "<TR>";
   //Stampa del singolo campo in ogni cella
   echo'<TD'.$altClass.'>'.$rs->fields['id_prodotto']->value."</TD>";
   echo'<TD'.$altClass.'>'.$rs->fields['nome']->value."</TD>";
   echo'<TD'.$altClass.'>'.$rs->fields['scorta']->value;
   echo'<TD'.$altClass.'>'.$rs->fields['marca']->value;
   echo'<TD'.$altClass.'>'.$rs->fields['fornitore']->value;
   echo'<TD'.$altClass.'>'.$rs->fields['giacenza']->value;
   echo'<TD'.$altClass.'>'.$rs->fields['imponibile']->value;
   echo'<TD'.$altClass.'>'.$rs->fields['sconto%']->value;
   echo'<TD'.$altClass.'>'.$rs->fields['iva%']->value;
   echo'</TR>';
   //Metodo movenext() per passare al record successivo
   $rs->movenext();
   //negazione del contenuto di $alt per riga successiva
   $alt = !$alt;
}
echo "</TABLE>";
//Chiusura connessione
$cn->close();
?>