<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção</title>
</head>
<body>
    <?php
        $servername = "bmlx3df4ma7r1yh4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $username = "vkq7duqk43riyga7";
        $password = "x45hrl24syx3vm75";
        $dbname = "tillepja9tm4a3ce";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        // Modo de erro na exceção
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO dadosescola (Nome, Disciplina, Nota_I, Nota_II)
        VALUES ('João', 'Banco de Dados I', '7.5', '8')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Novo Cadastro Realizado com Sucesso!!!";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    ?>
</body>
</html>