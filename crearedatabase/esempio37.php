<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="tabelle.css" rel="stylesheet" type="text/css" />
</HEAD><BODY>
<?php
//percorso del database, in questo caso nella sottocartella db
$percorso = realpath("./db/supermercati.mdb"); 
//Stringa di connessione ADO DB
$sc="DRIVER={Microsoft Access Driver (*.mdb)};DBQ=".$percorso.";";
//Creo due oggetti COM contenenti gli oggetti Connection e Recordset
$cn = new COM("ADODB.Connection") or die("Non va ADO");
$rs = new COM("ADODB.Recordset");
//Apro la Connection ed il Recordset
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