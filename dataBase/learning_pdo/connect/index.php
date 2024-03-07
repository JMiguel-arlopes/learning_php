<?php 

    $host = 'localhost';
    $nameDataBase = 'learning_pdo';

    $pdo = new PDO("mysql:host=$host; dbname=$nameDataBase", "root", "");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System simple to PDO test</title>
</head>
<body>
    <form method="POST">
        <label for="name">Nome</label><br>
        <input type="text" name="name"/>
        <br>
        <label for="lastname">Sobrenome</label><br>
        <input type="text" name="lastname"/>
        <br>
        <label for="name">Senha</label><br>
        <input type="password" name="psw"/>
        <br>
        <input type="submit" value="enviar" name="submit">
    </form>
</body>
</html>

<?php 
    date_default_timezone_set('America/Sao_Paulo');
    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $psw = $_POST["psw"];
        $datetime = date('Y-m-d H:i:s');


        $sql = $pdo->prepare("INSERT INTO `learning_pdo_base` VALUES (null, :n, :l, :d, :p)");
        $sql->bindValue(":n", $name);
        $sql->bindValue(":l", $lastname);
        $sql->bindValue("d", $datetime);
        $sql->bindValue(":p", $psw);
        $sql->execute();
        echo "clinte inserindo com sucesso!";
    }
?>