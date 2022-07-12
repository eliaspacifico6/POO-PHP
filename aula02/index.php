<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php
        require_once 'caneta.php';
        $c1 = new caneta;
        $c1->cor = "azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;

        var_dump($c1);
        print '</p>';
        print_r ($c1);

        $c1-> rabiscar();
        $c1-> destampar();
        $c1-> rabiscar();
        $c1-> tampar();

        $c2 = new caneta;
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2-> tampar();
        print_r ($c2);

        echo "<pre>";
            print_r($c1);
        echo"</pre>";



    ?>
</body>
</html>