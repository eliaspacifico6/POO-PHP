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

            $video = new Video();
            $gafanhoto = new Gafanhoto();

            $video->play();
            $video->pause();
            $gafanhoto->viuMaisUm();
            $video->play();
            $gafanhoto->viuMaisUm();

            print_r($video);
            print_r($gafanhoto);


        ?>
    </pre>
</body>
</html>