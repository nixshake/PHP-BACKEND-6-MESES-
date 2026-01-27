<?php 

    $nome = "Sofia";
    $idade = 23;
    $profissao = "Assistente de T.I.";
    $ativa = true;

    echo "
        Nome: $nome <br>
        Idade: $idade <br>
        Profissão: $profissao <br>
        Ativa: "  . ($ativa ? "true" : "false");

?>