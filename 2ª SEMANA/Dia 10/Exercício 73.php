<?php 

    $tipoUsuario = "admin";

    switch($tipoUsuario){
        case "basic":
            echo "Acesso básico permitido";
        break;

        case "admin":
            echo "Acesso admin permitido";
        break;

        default:
            echo "Acesso inválido";
    }

?>