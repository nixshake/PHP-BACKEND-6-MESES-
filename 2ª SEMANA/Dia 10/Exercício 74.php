<?php 

    $turno = "manhã";
    $horario = 8;

    switch($turno){

        case "manhã":
            if ($horario >= 6 && $horario <= 11){
                echo "Você está no horário da manhã";
            } else {
                echo "Você passou do horário";
            }
        break;

        case "tarde":
            if ($horario >= 12 && $horario <= 17){
                echo "Você está no horário da tarde";
            } else {
                echo "Você passou do horário";
            }
        break;

        case "noite":
            if ($horario >= 18 && $horario <= 23){
                echo "Você está no horário da noite";
            } else {
                echo "Você passou do horário";
            }
        break;

        default:
            echo "Turno inválido";
    }

?>