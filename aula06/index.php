<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <pre>
    <?php
        require_once './ControleRemoto.php';
        $c = new ControleRemoto();
        $c->Ligar();
        $c-getLigado();
        $c->maisVolume();
    
        $c->abrirMenu();
    ?>
    </pre>
</body>
</html>