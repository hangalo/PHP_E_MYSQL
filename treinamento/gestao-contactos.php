<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Siste de Cadastro de Contacto</title>
    </head>
    <body>
        <h3>Sistema de cadastro de Contactos</h3>
        <a href="contacto-novo.php">Cadastrar novo contacto</a><br/><br/>

        <table border="1" style="text-align: center">
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Endereço</td>
                <td>Provincia</td>
                <td>Pais</td>
            </tr>
            <?php
            include './config.php';
            $qry = "SELECT c.nome, c.email, c.endereco, pv.nome_provincia,p.nome_pais FROM contacto c inner join provincia pv on c.id_provincia=pv.id_provincia inner join pais p on pv.id_pais = p.id_pais ORDER BY c.nome DESC";
            $consulta = mysql_query($query);
            $query = mysql_num_rows($consulta);
            while ($exibir = mysql_fetch_array($consulta)) {
                echo " <tr> "
                . "<td>" . $exibir['nome'] . "</td>
                        <td>" . $exibir['email'] . "</td>
                            <td>" . $exibir['endereco'] . "</td>
                                <td>" . $exibir['nome_provincia'] . "</td>
                                    <td>" . $exibir['nome_pais'] . "</td>
                                        <td class=\"alterar\">
                                        <a onclick=\"window.open(this.href, this.target, 'width=700, height=400, toolbar=no, location=no, status=no, menubar=no, scrollbars=no, resizabeel=no, top=180,, left=300');return fales;\" target=\"_blank\" href=\"alterar.php?id=" . $exibir['id'] . "\">
                                            <img src=\"imanges/editar.png\"/>
                                            </a>
                                            </td>
                                            
                                        <td class=\"excluir\">
                                        <a onclick=\"javascript:if(confirm('Deseja realmente exluir este registo')) location.href=deletar.php?id=" . $exibir['id'] . "';\" style=\"cursor:hand;\">
                                            <img src=\"imagens/eliminar.png\"/>
                                            </a>
                                            </td>
                                            </tr>
                                            ";
            }
            ?>

        </table>
    </body>
</html>
