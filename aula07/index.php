<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Lutador.php';
                require_once 'Luta.php';
                
                //Lutadores
                $l = array();

                $l[0] = new Lutador('Pretty boy', 'França', 30, 1.75, 68.9, 11, 2, 1);


                $l[1] = new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);

                $l[2] = new Lutador('Snapshadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1 );

                $l[3] = new Lutador ('Dead code', 'Australia', 28, 1.93, 81.6, 13, 0, 2);
                //$l[3]->setCategoria();

                $l[4] = new Lutador ('UFOCobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3);

                $l[5] = new Lutador ('Nerdaart', 'EUA', 30, 1.81, 105.7, 12, 2, 4);

                // Luta
                $UEC01 = new Luta();
                $UEC01->marcarLuta($l[4],$l[5]);
                $UEC01->lutar();
                
                //Status participantes
                $l[0]->status();
                $l[1]->status();
                


            ?>  
        </pre>
    </body>
</html>
