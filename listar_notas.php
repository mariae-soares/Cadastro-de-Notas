<?php
    include_once "conexao.php";

    $result_notas = "SELECT * FROM cadastro_notas ORDER BY id_estudante DESC";
    $resultado_notas = mysqli_query($conexao, $result_notas);

    if(($resultado_notas) AND ($resultado_notas->num_rows != 0)){
        while($row_notas = mysqli_fetch_assoc($resultado_notas)){
            
           // echo $row_notas['nome_estudante']. "<br>";
           // echo $row_notas['nota1']. "<br>";
        }
    }else{
        echo "Nenhuma nota cadastrada";
    }
?>
