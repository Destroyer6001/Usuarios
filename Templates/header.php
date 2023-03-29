<?php 
    $urlBase ="http://localhost:80/Proyecto/";
?>

<!doctype html>
<html lang="en">

    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    </head>

    <body>
    <header>
        <nav class="nav justify-content-center  ">
            <a class="nav-link active" href="<?php echo $urlBase; ?>" aria-current="page">Inicio</a>
            <a class="nav-link" href="<?php echo $urlBase; ?>Vistas/Usuario/">Usuarios</a>
        </nav>
    </header>
        <main>