<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    //echo "Hello";
    $user = 'root';
    $password = 'root';
    $db = 'testing';
    $host = 'localhost';
    //$port = 3306;
    $dsn = 'mysql:hosp='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);


  ?>
</body>
</html>
