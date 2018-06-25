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
        <pre>
            <?php
                require_once 'Caneta.php';

                $c1 = new Caneta('bic',0.5,'Verde');
                print_r($c1);
                //$c1-> setModelo('Bic cristal');
                //$c1-> setPonta(0.5);
                //print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
                $c2 = new Caneta('KKK', 0.5,'Vermelha'); 
                print_r($c2);
            ?>
        </pre>
    </body>
</html>
