<?php 

    $idade = 19;
    $carteiramotorista = "Não";
    if (($idade >= 18) & ($carteiramotorista == "Sim")){
        echo "É maior de idade e tem carteira";
    } else if (($idade >= 18) & ($carteiramotorista != "Sim")){
        echo "É maior de idade, mas não tem carteira";
    } else {
        echo "Não é maior de idade";
    }

?>