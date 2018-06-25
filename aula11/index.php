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
                require_once 'Visitante.php';
                require_once 'Aluno.php';
                require_once 'Bolsista.php';
                require_once 'Professor.php';
                require_once 'Tecnico.php';

                //$p1 = new Pessoa();
                
                $v1 = new visitante;            
                $v1->setNome('Weinny');
                $v1->setIdade(23);
                $v1->setSexo('M');

                $a1 = new Aluno;
                $a1->setNome('Arthur');
                $a1->setMatricula(111);
                $a1->setIdade(22);
                $a1->setSexo('M');
                $a1->setCurso('Informática');
                $a1->pagarMensalidade();
                
                $b1 = new Bolsista;
                $b1->setNome('Jubileu');
                $b1->setIdade(17);
                $b1->setCurso('Administração');
                $b1->setBolsa(12.5);
                $b1->pagarMensalidade();
                
                $t1 = new Tecnico('Lucas','M', 25);
                $t1->praticar();
                
                $p1 = new Professor('Andre',44,'M');
                $p1->setSalario(1500);
                $p1->setPeriodo('nt');
                
                
                var_dump($p1);
                
                var_dump($t1);
                
                var_dump($b1);
                
                var_dump($a1);

                var_dump($v1);
            ?>
        </pre>
    </body>
</html>
