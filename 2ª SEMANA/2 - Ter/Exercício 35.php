<?php 

    $user = "on";
    $status = "ativo";
    if (($user == "on") & ($status == "ativo")){
        echo "O usuário está logado e ativo";
    } else if (($user == "on") & ($status != "ativo")){
        echo "O usuário está logado mas não está ativo";
    } else {
        echo "O usuário está off";
    }

?>