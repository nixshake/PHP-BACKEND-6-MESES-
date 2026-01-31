<?php 

    $cargo = "user";
    $permissao = "total";

    switch($cargo){
        case "admin":
            if ($permissao == "total"){
                echo "Acesso admin completo permitido";
            } else {
                echo "Admin com permissões limitadas";
            }
        break; 
        
        case "user":
            if ($permissao == "basica"){
                echo "Acesso básico permitido";
            } else {
                echo "Usuário sem permissão adequada";
            }
        break;
        
        default:
            echo "Cargo inválido";
    }

?>