<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gerenciador de Tarefas</title>
    </head>
    <body>
        <h1> Gerenciador de Tarefas</h1>
        <form>

            <fieldset>
                <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome"/>
                </label><br/>
                <label>
                    Descrição(Opcional)
                    <textarea name="descricao"></textarea>
                </label><br/>
                <label>
                    Prazo(Opcional)
                    <input type="text" name="prazo"/>
                </label><br/>
                <fieldset>
                    <legend>Prioridade</legend>
                    <label>
                        <input type="radio" name="prioridade" value="baixa" checked/>Baixa
                        <input type="radio" name="prioridade" value="meida"/>Media
                        <input type="radio" name="prioridade" value="alta"/>Altra
                    </label>
                </fieldset><br/>
                <label>
                    Tarefa concluida:
                    <input type="checkbox" name="concluida" value="sim"/>
                </label><br/>
                <input type="submit" value="Cadastrar"/>
            </fieldset>
        </form>

        <table>
            <tr>
                <th>Tarefas</th>
                <th>Descrição</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Concluida</th>
            </tr>
            <?php 
                      
            foreach ($lista_tarefas as $tarefa): ?>
                <tr>
                    <td><?php echo $tarefa['nome']; ?></td>
                    <td><?php echo $tarefa['descricao']; ?></td>
                    <td><?php echo $tarefa['prazo']; ?></td>
                    <td><?php echo $tarefa['prioridade']; ?></td>
                    <td><?php echo $tarefa['concluida']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
