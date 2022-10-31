<?php

    include_once("conexao.php");

    $nome_estudante = $_POST['nome_estudante'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    $nota5 = $_POST['nota5'];
    $nota6 = $_POST['nota6'];

    $sql = "insert into cadastro_notas (nome_estudante,nota1,nota2,nota3,nota4,nota5,nota6) values ('$nome_estudante','$nota1','$nota2','$nota3','$nota4','$nota5','$nota6')";
    $salvar = mysqli_query($conexao,$sql);

    mysqli_close($conexao);

?>