<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'ControleRemoto.php';
                $c = new ControleRemoto();
                $c->ligar();
                $c->almentaVolume();
                $c->abaixaVolume();
                $c->abrirMenu();
            ?>
        </pre>
    </body>
</html>
