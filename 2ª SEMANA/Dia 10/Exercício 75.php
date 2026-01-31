<?php 

    $planoInternet = "premium";
    $beneficiosExtras = 3;

    switch($planoInternet){
        
        case "basic":
            if($beneficiosExtras == 1 ){
                echo "Um benefício disponível: + 5 MG no plano";
            } else {
                echo "Sem benefícios disponíveis, faça o upgrade do plano";
            }
        break;

        case "pro":
            if($beneficiosExtras == 2){
                echo "Dois benefícios disponíveis: + 5 MG no plano e um mês de assinatura de stream grátis";
            } else {
                echo "Sem benefícios disponíveis, faça o upgrade do plano";
            }
        break;

        case "premium":
            if($beneficiosExtras == 3){
                echo "Dois benefícios disponíveis: + 15 MG no plano e assinatura ilimitada de stream grátis";
            } else {
                echo "Verifique seu plano novamente";
            }
        break;

        default:
            echo "Plano inválido";
    }

?>