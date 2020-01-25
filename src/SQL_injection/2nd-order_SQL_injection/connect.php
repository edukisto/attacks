<?php

function connect()
{
    // Устанавливаем соединение с СУБД.
    $pathToCredentials = "$_SERVER[DOCUMENT_ROOT]/credentials.json";
    $data = json_decode(file_get_contents($pathToCredentials));
    $dsn = "mysql:host={$data->host};port={$data->port};dbname={$data->db}";
    return new PDO($dsn, $data->username, $data->password);
}
