<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $connessione = mysql_connect("localhost", "root", "root")
                or die("Connessione non riuscita");
        mysql_select_db("jsf_e_jpa")
                or die("Seleccione del database non riuscito");