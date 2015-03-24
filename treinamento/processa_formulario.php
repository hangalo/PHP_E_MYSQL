<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nome  = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

include './config.php';
$insert = mysql_query("INSERT INTO utilizador(nome_utilizador, email_utilizador, senha_utilizador)values('$nome','$email','$senha')");
echo "<script>alert('Utilizador incluido com sucesso!')</script>";

?>