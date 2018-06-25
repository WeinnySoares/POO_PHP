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
                require_once 'Pessoa.php';
                require_once 'livro.php';
                $p = new Pessoa('Weinny',23,'M');
                $p->fazerAniver();
                $p->detalhe();
        
                $l = new Livro('Mentiram para mim','Weinny',255);
                $l->setLeitor($p);
                $l->avancarPag();
                //$l->folhear(200);
                $l->setMarcarPag();
                $l->abrir();
                //$l->fechar();
                
                $l->setPagMarcada();
                $l->detalhes();
                
            ?>
        </pre>
    </body>
</html>
