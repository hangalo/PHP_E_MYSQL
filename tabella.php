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
    </head>
    <body>
        <table>
        <?php
        $max = 100;
        for($i=1; $i<=$max; $i++)
            echo "<tr><td>", $i, "</td><td>", ($i*2.54), "</td></tr>\n";
        ?>
            </table>
    </body>
</html>
