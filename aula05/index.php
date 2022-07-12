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
        $p1 = new Conta;
        $p2 = new Conta;

        $p1->abrirConta("CC");
        $p1->setDono("Jubleu");
        $p1->setNumConta("11111");
        $p2->abrirConta("CP");
        $p2->setDono("Julesca");
        $p2->setNumConta("22222");

        
        $p1->depositar(300);
        $p2->depositar(500);
        
        $p2->sacar(100);

        $p1->pagarMensalidade();
        $p2->pagarMensalidade();
        


    echo"<p> - - - - - -Fim da Trazação - - - - - - - -</p>";
        
    print_r($p1);
    print_r($p2);

    ?>
    </pre>
</body>
</html>