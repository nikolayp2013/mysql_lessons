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

    //$query = $pdo->query('SELECT * FROM `users`');
    $query = $pdo->query('SELECT * FROM `users` ORDER BY `id` DESC LIMIT 2');
    // FETCH_ASSOC - возвращает массив
    // выводим результат запроса как массив
    /*while($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo '<h1>' . $row['login'] . '</h1>
        <p><b>Email:</b> ' . $row['email'] . '</p>
        <p><b>Имя:</b> ' . $row['name'] . '</p>
        <p><b>Фамилия:</b> ' . $row['surname'] . '</p>';
    }*/
    // FETCH_OBJ - объект
    while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<h1>' . $row->login . '</h1>
        <p><b>Email:</b> ' . $row->email . '</p>
        <p><b>Имя:</b> ' . $row->name . '</p>
        <p><b>Фамилия:</b> ' . $row->surname . '</p>';
    }

    $name = 'Петр';
    $id = 3;
    //$sql = 'SELECT `name`, `id`, `email` FROM `users` WHERE `name` = ?';
    $sql = 'SELECT `name`, `id`, `email` FROM `users` WHERE `name` = :name && `id` = :id';
    $query = $pdo->prepare($sql);
    //$query->execute([$name]);
    $query->execute(['name' => $name, 'id' => $id]);
    $users = $query->fetchAll(PDO::FETCH_OBJ);

    // var_dump - печатает все содержимое объекта
    //var_dump($users);
    foreach($users as $user) {
      echo '<h1>' . $user->name . '</h1>
      <p><b>Email:</b> ' . $user->email . '</p>';
    }

    // вывод одной конкретной записи
    $sql = 'SELECT * FROM `users` WHERE `id` = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $users = $query->fetch(PDO::FETCH_OBJ);

    echo $user->email;
  ?>
</body>
</html>
