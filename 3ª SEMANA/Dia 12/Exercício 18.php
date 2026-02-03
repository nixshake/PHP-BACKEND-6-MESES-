<?php 

    $contador = 0;

    for($i = 1; $i <= 100; $i++){
        if($i % 7 == 0){
            $contador++;
            echo $i . "<br>";
        }
    }
            echo "Quantidade de número divisíveis: " . $contador;

?>