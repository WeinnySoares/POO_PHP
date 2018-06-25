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
                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                require_once 'Visualizacao.php';

                $v[0] = new Video ('<p>Aula 1 de POO</p>');
                $v[1] = new Video ('<p>Aula 12 de Php</p>');
                $v[2] = new Video ('<p>Aula 15 de HTML5</p>');
                
                print_r($v);
                
                $g[0] = new Gafanhoto('Jubileu', 22, 'M', 'juba');
                $g[1] = new Gafanhoto ('Creuza', 15, 'F', 'creuzinha');
                
                print_r($g);
                
                $vis[0] = new Visualizacao($g[0],$v[2]);//Jubileu assiste HTML5
                $vis[0]->avaliarNota(85);
                
                $vis[1] = new Visualizacao($g[0],$v[1]);//Jubileu assiste PHP
                
                print_r($vis[1]);
                print_r($vis[0]);
            ?>
        </pre>
    </body>
</html>
