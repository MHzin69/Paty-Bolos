<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paty Bolos</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="logo" href="index.php">
                    <img src="images\logoPatyBolos.png" alt="Paty Bolos" class="logo-img" title="Paty Bolos">

                </a>
                <a class="navbar-brand" href="#">Paty Bolos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Sabores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Decorações</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary">Faça seu Pedido</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="container">
        <?php
          $pagina = $_GET["param"] ?? "home";

          $pagina = "pages/{$pagina}.php";
        include 'sabores.php';   
          if (file_exists($pagina)) {
            include $pagina;
          } else {
            include "pages/erro.php";
          }
          
        ?>
    </main>

    <footer></footer>
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>