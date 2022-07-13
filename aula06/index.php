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
        $c->getLigado();
        $c->maisVolume();
        $c->play();
        $c->maisVolume();
        $c->ligarMudo();
        $c->desligarMudo();

        
        $c->desligar();
    
        $c->abrirMenu();
    ?>
    </pre>
</body>
</html>

public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();