<?php

require_once "./Mamifero.php";

class Lobo extends Mamifero {
    function emitirSom(){
        echo "<p>Auuuuuuuuuuuuuuu!</p>";
    }

    function reagirFrase($frase){
        if ($frase == "Toma comida" || $frase == "Olá"){
            echo "<p>Abanar e latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }
    function reagirHora($hora, $min){
        if ($hora < 12){
            echo "<p>Abanar e latir</p>";
        }elseif ($hora <=18){
            echo "<p>Iguinorar</p>";
        }else{
            echo "<p>Abanar e latir</p>";
        }

    }
    function reagirDono($dono){
        if ($dono){
            echo "<p>Abanar </p>";
        }else{
            echo "<p>Rosnar e latir</p>";
        }

    }
    function reagirIdadePeso($dade,$peso){
        if ($dade < 5 ){
                if ($peso < 10){
                    echo "<p>Abanar</p>";
                }else{
                    echo "<p>Latir</p>";
                }
        }else{
            if ($peso < 10){
                echo "<p>Rosnasr</p>";
            }else{
                echo "<p>Iguinorar</p>";
            }
        }
    }


}