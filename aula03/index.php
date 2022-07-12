<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurando visibilidade</title>
</head>
<body>
    <?php
    require_once 'caneta.php';

    $c1 = new Caneta;
    $c1->modelo = 'BIC Cristal';
    $c1->cor = 'Azul';
    // $c1->ponta = 0.6;
    // $c1->carga = 60;
     $c1->destampar();


    echo "<pre>";
        print_r($c1);
    echo"</pre>";
    $c1->rabiscar();
    $c1->tampar();
    
    echo "<pre>";
        print_r($c1);
    echo"</pre>";


    


?>
</body>
</html>