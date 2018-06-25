<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <pre>
          <?php
            require_once 'Caneta.php';
            
            //Caneta 1
            //Utilizando os atributos diretamente
            $c1 = new Caneta;
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            
            $c1->destampar();
            print_r($c1);
            $c1->rabiscar();
            
            //Caneta 2
            //Utilizando os atributos diretamente
            $c2 = new Caneta;
            $c2->cor = "Vermelha";
            $c2->carga = 50;
            $c2->tampar();
            print_r($c2);
            $c2->rabiscar();
            
            
            
           ?>  
        </pre>   
    </body>
</html>
