<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos Getter, Setter e construct</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta("BIC","prerto", 0.6);
        // $c1->setModelo("BIC");
        // $c1->setPonta(0.5);

        echo "<pre>";
            print_r($c1);
        echo "</pre>";

        print "<p>Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} </p>";

        $c2 = new Caneta("Nanquin","azul", 0.9);
        echo "<pre>";
        print_r($c2);
    echo "</pre>";

    print "<p>Eu tenho uma caneta {$c2->getModelo()} de ponta {$c2->getPonta()} </p>";

    ?>
</body>
</html>