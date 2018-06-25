<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            
            //Classes filhas
            require_once 'Cachorro.php';
            require_once 'Canguru.php';
            require_once 'Cobra.php';
            require_once 'Goldfish.php';
            require_once 'Tartaruga.php';
            require_once  'Arara.php';
            
            $m = new Mamifero;
            $m->locomover();
            
            $c= new Canguru;
            $c->locomover();
            
            $k = new Cachorro;
            $k->locomover();
            
            $t = new Tartaruga;
            $t->locomover();
            
        ?>
        </pre>
    </body>
</html>