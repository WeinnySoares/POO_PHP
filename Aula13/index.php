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
        <h1>
        <?php
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        
       
        $c = new Cachorro;
        $c->emitirSom();
        
        $c->reagirFrase('Olá');
        $c->reagirFrase('Vai apanhar');
        $c->reagirHora(6,00);
        $c->reagirHora(1,00);
        $c->reagirDono(true);
        $c->reagirDono(false);
        $c->reagirIdadePeso(2,1.5);
        $c->reagirIdadePeso(6, 15.0);
        
        ?>
    </body>
</html>
