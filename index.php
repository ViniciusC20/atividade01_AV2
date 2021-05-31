<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade01_AV2</title>
</head>
<body>
    <h1>Atividade 01 - AV2</h1>
    <h2>Aluno: Guylherme Vieira Sales de Oliveira</h2>

    <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        // Modo de erro na exceção
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Banco de Dados Conectado com Sucesso!!!";
        } catch(PDOException $e) {
        echo "Falha na Conexão do Banco de Dados - ERRO: " . $e->getMessage();
        }
    ?>

    <br>

    <a href="criacao/insercao.php">Inserir</a> Dados na Tabela
    <br>
    <a href="consulta.php">Consultar</a> Tabela
</body>
</html>