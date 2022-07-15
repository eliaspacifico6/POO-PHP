<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henrança Part 2</title>
</head>
<body>
    <pre>
    <?php
        require_once './Aluno.php';
        require_once './Visitante.php';
        require_once './Professor.php';
        require_once './Bolsista.php';
        require_once './Tecnico.php';

        $v = new Visitante( );
        $a = new Aluno("Elias",25,"homem",003,"POO");
        $p = new Professor("Gustavo",47,"homem","Super/Compl",500 );
        $b = new Bolsista("Guto", 18, "homem",003,"Marcketing");
        $t = new Tecnico("Amanda", 29, "mulher", 07, "HTML-CSS");


        print_r($v);
        print_r($a);
        print_r($p);
        print_r($b);
        print_r($t);

    ?>
    </pre>
</body>
</html>