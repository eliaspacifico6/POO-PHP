<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos Compostos</title>
</head>
<body>
    <pre>
        <?php
            require_once './Lutador.php';

            $lutador[0] = new Lutador( "Pretty Boy", "Frances", 30, 1.75, 90.9, 11 ,2 ,1);
            $lutador[1] = new Lutador( "Putscript", "Brasileiros", 29, 1.68, 57.8, 14, 2 ,3 );
            $lutador[2] = new Lutador( "SnapShadow", "Americano", 356, 165, 80.9, 12, 2, 1);
            $lutador[3] = new Lutador( "Dead Code", "Australiano", 28, 1.93, 81.6, 13, 0 ,2);
            $lutador[4] = new Lutador( "UFO Cobol", "Brasileiros", 37, 1.70, 119.3, 5, 4, 3);
            $lutador[5] = new Lutador( "Nerdaart", "Americano", 30, 1.81, 105.7, 12, 2, 4 );

           

            $lutador[1]->apresesentar();
            $lutador[1]->status();
            $lutador[3]->status();
            $lutador[5]->status();
            $lutador[2]->status();

            print_r( $lutador);
        
        ?>
    </pre>
</body>
</html>