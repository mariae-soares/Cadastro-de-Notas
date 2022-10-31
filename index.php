<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Atividade Horácio I 31/10</title>
</head>
<body>
    <!--Botões laterais-->
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="lista.php"><li>Consultas</li></a>
            </ul>
        </nav>

        <section>
            <h1>Cadastro de Notas</h1>
            <hr><br><br>
            <!--Campos de preenchimento-->
            <form method="post" action="processa.php">
                <br>
                Nome do Estudante<br>
                <input type="text" name="nome_estudante" class="campo" maxlength="40" required autofocus><br>
                <h2>Insira as notas do estudante</h2><br>
                Nota da Disciplina 1<br>
                <input type="text" name="nota1" class="campo" maxlength="40" required autofocus><br>
                Nota da Disciplina 2<br>
                <input type="text" name="nota2" class="campo" maxlength="40" required autofocus><br>
                Nota da Disciplina 3<br>
                <input type="text" name="nota3" class="campo" maxlength="40" required autofocus><br>
                Nota da Disciplina 4<br>
                <input type="text" name="nota4" class="campo" maxlength="40" required autofocus><br>
                Nota da Disciplina 5<br>
                <input type="text" name="nota5" class="campo" maxlength="40" required autofocus><br>
                Nota da Disciplina 6<br>
                <input type="text" name="nota6" class="campo" maxlength="40" required autofocus><br>
                <br>

                <!--Botão para finalizar-->
                <input type="submit" value="Salvar" class="btn">
    
            </form>

        </section>
    </div>
</body>
</html>