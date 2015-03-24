<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$bdServidor ="127.0.0.1";
$bdUsuario ="root";
$bdSenha ="root";
$bdBanco ="jsf_e_jpa";

$conexao =  mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

if(mysqli_connect_errno($conexao)){
    echo "Problemas para conectar com o banco. Verifique os dados";
    die();
}



function buscar_tarefas($conexao){
    $sqlBusca = "SELECT * FROM tarefa";
    $resultado = mysqli_query($conexao, $sqlBusca);
    $tarefas = array();
    
    while($tarefa = mysqli_fetch_assoc($resultado)){
        $tarefas[]=$tarefa;
    }
    return $tarefas;
}