<?php header('X-XSS-Protection: 0'); ?>
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
    <title>ЯнеRндекс</title>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"
        >
    <link
        rel="stylesheet"
        href="main.css"
        integrity="sha256-dQHv5A/OhkgWhtQH28/91aNWWTcmuUR8u86rywQct7E="
        crossorigin="anonymous"
        >
</head>
<body class="h-100 text-center" style="background: linear-gradient(#ddd, #fff)">
    <main class="container-fluid">
        <nav class="bg-light navbar navbar-light row">
            <h1 class="navbar-brand">
                <a href="/hole/">
                    <span>Я</span>не<span>R</span>ндекс
                </a>
            </h1>

            <form class="form-inline">
                <input
                    aria-label="Searchbox"
                    autofocus
                    class="form-control mr-sm-2"
                    name="query"
                    type="search"
                    value="<?= !empty($_GET['query']) ? $_GET['query'] : ''; ?>"
                    >

                <input
                    class="btn btn-warning my-2 my-sm-0"
                    type="submit"
                    >
            </form>
        </nav>
        <nav class="row">
            <div class="col"><?php if (!empty($_GET['query'])) {
                    echo "Поисковая выдача по запросу «$_GET[query]».";
            } ?></div>
        </nav>
    </main>
</body>
</html>
