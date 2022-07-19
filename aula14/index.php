<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerciocios Pratico</title>
</head>
<body>
    <pre>
        <?php 
            require_once "./Gafanhoto.php";
            require_once "./Video.php";
            require_once "./Visualizacao.php";

            $video[0] = new Video("Aula 1 de POO");
            $video[1] = new Video("Aula 12 de PHP");
            $video[2] = new Video("Aula 15 de HTML5");
            $gafanhoto[0] = new Gafanhoto("João",16, "Masculino", "joao@cev.com");
            $gafanhoto[1] = new Gafanhoto("Maria",19, "Feminino", "maria@cev.com");

            $view[0] = new Visualizacao($gafanhoto[0],$video[1]);
            $view[0] = new Visualizacao($gafanhoto[1],$video[1]);
            $view[1] = new Visualizacao($gafanhoto[1],$video[0]);
            $view[2] = new Visualizacao($gafanhoto[1],$video[2]);

            // $video[1] ->play();
            // $video[1] ->pause();
            // $gafanhoto['joao']->viuMaisUm();
            // $video[1] ->play();
            // $gafanhoto['joao']->viuMaisUm();
            // $gafanhoto['maria']->viuMaisUm();

            print_r($view);


        ?>
    </pre>
</body>
</html>