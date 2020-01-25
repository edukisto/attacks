<?php

// Аутентификация.

// Устанавливаем соединение с СУБД.
$data       = json_decode(file_get_contents('credentials.json'));
$dsn        = "mysql:host={$data->host};port={$data->port};dbname={$data->db}";
$connection = new PDO($dsn, $data->username, $data->password);

// Выбираем кортеж по имени пользователя и паролю, указанным в запросе.

/*
 * Вариант 1. С интерполяцией (вклеиванием) значений аргументов
 * без фильтрации и экранирования, что порождает уязвимость для SQL­‑инъекций.
 */
$statement = $connection->query("
    SELECT * FROM users
    WHERE username = '$_POST[username]' AND password = '$_POST[password]'
");

/*
 * Вариант 2. С подготовкой предложения SQL и подстановкой значений аргументов.
 */
/*
$statement = $connection->prepare(
    'SELECT * FROM users WHERE username = ? AND password = ?'
);
$statement->execute([
    $_POST['username'],
    $_POST['password'],
]);
*/

// Если выборка состоялась,
if ((false !== $statement) && ($statement->rowCount() > 0)) {
    // то преобразуем кортеж в объект,
    $user = $statement->fetchObject();
    // защищаем сценарий от stored XSS
    $username = htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8');
    // и выводим сообщение.
    echo "Вы аутентифицированы как пользователь {$username}.";
} else {
    echo 'Аутентификация не удалась.';
}
