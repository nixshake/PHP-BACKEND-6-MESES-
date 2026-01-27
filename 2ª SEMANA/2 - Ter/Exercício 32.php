<?php 

    $user = "normal";
    if ($user == "ADM"){
        echo "O user é um admin";
    } else if ($user == "MOD"){
        echo "O user é um moderador";
    } else {
        echo "O user é um user padrão";
    }

?>