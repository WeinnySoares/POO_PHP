<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> </title>
    </head>
    <body>
        <pre>
          <?php
            require_once 'Caneta.php';            
            //Caneta 1
            //Utilizando os atributos diretamente
            $c1 = new Caneta;
            $c1-> modelo = "Bic Cristal";
            //$c1-> ponta = 0.5;
            //$c1-> carga = 99;]
            //$c1-> tampada = True;
            $c1-> tampar();
            $c1-> rabiscar();
            
            print_r($c1);
          ?>
        </pre>
    </body>
</html>
