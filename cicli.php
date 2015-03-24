<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$frutta = array("mela", "pera", "banana", "pesca");

echo "<ul>\n";

for($i=0; $i < count($frutta);$i++){
    if($frutta[$i]=="banana")
        break;
    echo "<li>", $frutta[$i], "</li>\n";
       
}

echo "</ul>";

echo "<ul>\n";
for($i=0; $i< count($frutta); $i++){
    if($frutta[$i]== "banana")
        continue;
    
    echo "<li>", $frutta[$i], "</li>\n";
  }
  
  echo "</ul>\n";
?>