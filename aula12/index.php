<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <pre>
        <?php
        require_once "./Mamifero.php";
        require_once "./Reptil.php";
        require_once "./Peixe.php";
        require_once "./Ave.php";
        require_once "./Canguru.php";
        require_once "./Cachorro.php";


        $m = new Mamifero;
        $m->locomover();
        $m->emitirSom();
        $m->alimentar();

        $r = new Reptil;
        $r->locomover();
        $r->emitirSom();
        $r->alimentar();

        $p = new Peixe;
        $p->locomover();
        $p->emitirSom();
        $p->alimentar();
        $p->soltarBolhas(); 

        $a = new Ave;
        $a->locomover();
        $a->emitirSom();
        $a->alimentar();
        $a->fazerNinho(); 

        $c = new Canguru;
        $c->locomover();

        $k= new Cachorro;
        $k->emitirSom();
        $k->locomover();


        ?>
    </pre>
</body>
</html>