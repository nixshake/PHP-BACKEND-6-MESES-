<?php 

    $tipoAcesso = "evento_infantil";
    $idade = 13;

    switch ($tipoAcesso){
        case "cinema":
            if ($idade >= 18){
                echo "Acesso permitido ao cinema";
            } else {
                echo "Acesso negado. Idade mínima: 18 anos";
            }
            break;

        case "show":
            if ($idade >= 16){
                echo "Acesso permitido ao show";
            } else {
                echo "Acesso negado. Idade mínima: 16 anos";
            }
            break;

        case "evento_infantil":
            echo "Acesso permitido para todas as idades";
            break;

        default:
            echo "Tipo de acesso inválido";      
    }

?>