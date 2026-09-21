<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controle de Acesso</title>
</head>
<body>

    <h1>Controle de Acesso</h1>

    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>Ano de Nascimento:</label>
        <input type="number" name="ano_nascimento" required>
        <br><br>

        <button type="submit">Verificar Acesso</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST["nome"];
        $anoNascimento = $_POST["ano_nascimento"];

        $anoAtual = date("Y");
        $idade = $anoAtual - $anoNascimento;

        if ($idade >= 18) {
            echo "<h2>Acesso permitido, $nome!</h2>";

            $dados = "Nome: $nome | Idade: $idade | Ano de nascimento: $anoNascimento\n";

            file_put_contents("log_acessos.txt", $dados, FILE_APPEND);
        } else {
            echo "<h2>Acesso negado, $nome!</h2>";
        }
    }
    ?>

</body>
</html>