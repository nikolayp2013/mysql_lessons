<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    $user = 'root';
    $password = 'root';
    $db = 'testing';
    $host = 'localhost';

    $dsn = 'mysql:hosp='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);

    // $login = 'code999';
    // $email = 'test@test.ru';
    // $name = 'Влад';
    // $surname = 'Дударь';
    //
    // $sql = 'INSERT INTO users(login, email, name, surname) VALUES(:login, :email, :name, :surname)';
    // $query = $pdo->prepare($sql);
    // $query->execute(['login' => $login, 'email' => $email, 'name' => $name, 'surname' => $surname]);

    // $id = 4;
    // $login = "New Login";
    // $email = 'test@testing.com';
    // $sql = 'UPDATE `users` SET `login` = :login, `email` = :email WHERE `id` = :id';
    // $query = $pdo->prepare($sql);
    // $query->execute(['login' => $login, 'email' => $email, 'id' => $id]);

    // $id = 3;
    // $sql = 'DELETE FROM `users` WHERE `id` = ?';
    // $query = $pdo->prepare($sql);
    // $query->execute([$id]);

    
  ?>
</body>
</html>
