<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Conta.php';
        $c1 = new Conta('cp','Elias Pacífico');
        print_r($c1);

        $c1-> abrirConta();
        $c1-> pagarMensalidade();
        $c1->sacar(200);

    echo"<p> - - - - - -Fim da Trazação - - - - - - - -</p>";
        print_r($c1);
    ?>
    </pre>
</body>
</html>