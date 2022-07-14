<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execrcicios</title>
</head>
<body>
    <pre>
        <?php
            require_once "./Pessoa.php";
            require_once "./Livro.php";
            require_once "./Publicacao.php";

            $p[0] = new Pessoa("Elias" , 26, "Homem");
            $p[1] = new Pessoa("Amanda" , 29, "Mulher");

            $l[0] = new Livro("Geneses","Moises", "Pentateuco", 60);
            $l[1] = new Livro("Apocalipse","João", "Escatologco", 22);

            $l[0]->Le($p[1]);
            $l[1]->Le($p[0]);
            
            
            $l[0]->abrir();
            $l[1]->folear(20);
            $l[0]->avancarPag();
            $l[1]->voltarPag();
            $l[1]->folear(30);
            $l[0]->fechar();



            $l[0]->detales();
            $l[1]->detales();


            // print_r( $l);
            // print_r( $p);


        ?>
    </pre>
</body>
</html>