<?php

    session_start();
    include_once("conexao.php");
    
    $Id_estudante = filter_input(INPUT_GET, 'Id_estudante', FILTER_SANITIZE_NUMBER_INT);
    $result_apagar = "DELETE FROM cadastro_notas WHERE Id_estudante=$Id_estudante";
    $resultado_apagar = mysqli_query($conexao,$result_apagar);

    header("Refresh: 0; url='index.php'")

?>