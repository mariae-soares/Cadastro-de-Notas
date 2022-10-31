<?php
    session_start();
    include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <h1>Lista de Notas Atribuidas</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSIOn['msg'];
        unset($_SESSION['msg']);
    }
    
    $result_notas = "SELECT * FROM cadastro_notas";
    $result_notas = mysqli_query($conexao, $result_notas);
    while($row_notas = mysqli_fetch_assoc($result_notas)){
        echo "ID do Estudante: " . $row_notas['Id_estudante'] . "<br>";
        echo "Nome: " . $row_notas['nome_estudante'] . "<br>";
        echo "Nota1: " . $row_notas['nota1'] . "  -  ";
        echo "Nota2: " . $row_notas['nota2'] . "  -  ";
        echo "Nota3: " . $row_notas['nota3'] . "  -  ";
        echo "Nota4: " . $row_notas['nota4'] . "  -  ";
        echo "Nota5: " . $row_notas['nota5'] . "  -  ";
        echo "Nota6: " . $row_notas['nota6'] . "<br>";
        echo "<a href='apagar_notas.php?Id_estudante=" . $row_notas['Id_estudante'] . "'>Apagar Notas</a><br><hr>";
    }
    ?>
</body>
</html>