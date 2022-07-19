<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tste</title>
</head>
<body>

<?php 
    // $n = isset($_GET['num']) ? $_GET['num'] :    'não ha numero';
    $n =  $_GET['num'] ??   'não ha numero';
    echo $n;

?>
    
</body>
</html>