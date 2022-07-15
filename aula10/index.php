<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <pre>
    <?php
        require_once './Pessoa.php';
        require_once './Aluno.php';
        require_once './Funcionario.php';
        require_once './Professor.php';

        $pessoa[0] = new Pessoa("Paula",26,"Mulher");
        $pessoa[1] = new Aluno("João",15,"Momem","003","portugues");
        $pessoa[2] = new Funcionario("Tereza",42 ,"Mulher","Cozinha","Lavando Vasilhas");
        $pessoa[3] = new Professor("Carlos",39,"Momem","portugues",3000);

        $pessoa[1]->fazerAniv();
        $pessoa[2]->mudarTrabalho("cozinhar");
        $pessoa[3]->receberMais(300);
        


        print_r($pessoa);
    ?>
    </pre>
</body>
</html>