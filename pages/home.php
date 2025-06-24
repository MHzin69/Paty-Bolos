<section class="banner">
    <div class="container layout-banner">
        <div class="lateral">
            <div class="logoBanner">
                <img src="images/logoPatyBolos.png" alt="Logo Paty Bolos">
            </div>
            <div class="tituloBanner">
                <h1>Paty Bolos: Bolos decorados e personalizados</h1>
            </div>
        </div>
        <div class="carrosselBanner">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/imgBanner/banner01.png" class="d-block w-100" alt="Bolo 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/imgBanner/banner02.png" class="d-block w-100" alt="Bolo 2">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

    </div>
    <div class="text-center">
    <button type="button" class="btn btn-primary " title="Sabores e Preços">
            <a href="tabela" class="b-link">Ver sabores</a>
    </button>
    </div>
</section>

<section id="decoracoes" class="decoracoes">
    <div class="container">
        <h2>Decorações</h2>
        <div class="d-flex">
            <a href="mais-imagens" alt="Ver Mais" class="link ms-auto ver" title="Ver Mais Decorações">
                Ver Mais
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="row g-4">
            <?php
            if (isset($decoracoes) && is_array($decoracoes) && !empty($decoracoes)) {
                $contador = 0;
                foreach ($decoracoes as $id => $caminho) {
                    if ($contador >= 4)
                        break;
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card decoration-card h-100 shadow">
                            <img src="<?php echo htmlspecialchars($caminho); ?>" class="decoration-img"
                                alt="Decoração <?php echo $id; ?>">


                        </div>
                    </div>
                    <?php
                    $contador++;
                }
            }
            ?>
        </div>
    </div>
    <div class="text-center">
    <button type="button" class="btn btn-primary " title="Sabores e Preços">
            <a href="tabela" class="b-link">Ver sabores</a>
    </button>
    </div>
</section>

<section class="avalie">
    <div class="container">
        <div class="text-center">
            <h2>Gostou dos nossos bolos?</h2>
            <p>Sua opinião é muito importante para nós! Avalie e nos ajude a melhorar ainda mais.</p>
            <a href="feedback" alt="Avaliar" class="btn btn-primary" title="Avalie-nos">
                <i class="fa-solid fa-star"></i>
                Avaliar agora
            </a>
        </div>
    </div>
</section>