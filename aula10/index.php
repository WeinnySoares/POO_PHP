<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professores.php';
                require_once 'Funcionario.php';

                //Programa Principal
                $p = array();
                
                $p[0] = new Pessoa();
                $p[1] = new Aluno();
                $p[2] = new Professores();
                $p[3] = new Funcionario();

                $p[0]->setNome('Pedro');
                $p[1]->setNome('Maria');
                $p[2]->setNome('Cláudio');
                $p[3]->setNome('Faniana');
                
                $p[1]->setCurso('Informática');
                $p[2]->setSalario('2500.75');
                $p[3]->setSetor('Estoque');
                
                $p[2]->receberAumento(550.20);
                $p[3]->mudarTrabalho();
                $p[1]->cancelarMatricula();

                for($i=0; $i<=3; $i++){
                    var_dump( $p[$i]);
                  
                }

            ?>
        </pre>
    </body>
</html>
