<?php

// Устанавливаем соединение с СУБД.
require_once '../connect.php';
$connection = connect();

// Присваиваем переменным значения, переданные по HTTP методом POST.
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

/*
 * Подготовка выражения снижает вероятность проведения SQL­‑инъекций I порядка,
 * но не защищает от SQL­‑инъекций II порядка.
 */
$sql = 'INSERT INTO users (username, password) VALUES (?, ?)';
$statement = $connection->prepare($sql);
$result = $statement->execute([$username, $password]);

// Отладочная печать.
$statement->debugDumpParams();

/*
 * Если бы подготовка выражений отсутствовала,
 * атакующему следовало бы зарегистрироваться
 * под именем vasya\';-- (с экранированным апострофом).
 */

// Защищаем сценарий от reflected XSS.
$username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

if (false !== $result) {
    echo "$username добавлен.";
} else {
    echo "$username не добавлен.";
}
