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
                require_once'ContaBanco.php';
                $p1 = new ContaBanco(); // Jbbileu
                $p2 = new ContaBanco(); // Creuza
                $p1->abrirConta('cc');
                $p1->setDono('Jubileu');
                $p1->setnumConta(1111);
                $p1->depositar(300);
                
                $p2->abrirConta('cp');
                $p2->setDono('Creuza');
                $p2->setnumConta(2222);
                $p2->depositar(500);
                
                $p2->sacar(100);
                
                $p1->sacar(350);
                $p2->sacar(550);
                
                $p1->fecharConta();
                $p2->fecharConta();
               
                print_r($p1);
                print_r($p2);
                
            ?>
        </pre>
    </body>
</html>
