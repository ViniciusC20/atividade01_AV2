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
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDBPDO";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Modo de erro na exceção
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";
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