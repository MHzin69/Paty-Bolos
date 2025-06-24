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
</section>

<section class="sabores" id="sabores">
    <div class="container">
        <h2>Sabores e Preços</h2>
        <table class="table table-bordered">
            <thead>
                <th>Sabores</th>
                <th>Preços(Kg)</th>
            </thead>
            <tbody>
                <?php
                foreach ($sabores as $sabor) {
                    $nome = htmlspecialchars($sabor['nome']);
                    $id = strtolower(preg_replace('/[^a-z0-9]/i', '', $nome));
                    $preco = number_format($sabor['preco'], 2, ',', '.');

                    echo "<tr>
          <td class='sabor-nome'>
            {$nome}
            <button class='btn btn-primary btn-ing' title='Ver ingredientes' onclick=\"mostrarIngredientes('{$nome}', '{$id}')\">Ingredientes</button>
          </td>
          <td>R$ {$preco}</td>
        </tr>
        <tr id='linha-ing{$id}' class='linha-ingredientes' style='display:none'>
          <td colspan='2'>
            <div class='ingredientes-card'>
              <button class='btn-fechar' onclick='fecharTodos()'>❌</button>
              <div id='ing{$id}'></div>
            </div>
          </td>
        </tr>";
                }
                ?>


                </tr>
            </tbody>
        </table>
        <hr>
        <div class="text-center">
            <button type="button" class="btn btn-primary" title="Faça seu Pedido">
                <a href="contato" class="b-link">Faça seu Pedido</a>
            </button>
        </div>
</section>

<section id="decoracoes" class="decoracoes">
    <div class="container">
        <h2>Exemplos de Decorações</h2>
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
</section>
<section class="sobre text-center" id="sobre">
    <div class="container ">

        <h2>Bolos personalizados com amor e sabor</h2>
        <p>Na Paty Bolos, cada detalhe importa! Criamos bolos artesanais sob medida para o seu gosto e
            ocasião.
            Você escolhe o sabor e a decoração, e nós entregamos um doce que encanta pelo visual e conquista
            pelo sabor. Ideal para aniversários, eventos e momentos especiais. Nossa missão é transformar
            sonhos
            em fatias de felicidade!</p>
        <p>Entre em contato e descubra como podemos tornar seu evento ainda mais doce!</p>
        <button type="button" class="btn btn-primary" title="Faça seu Pedido">
            <a href="contato" class="b-link">Faça seu Pedido</a>
        </button>

    </div>
</section>
<section class="avalie">
    <div class="container">
        <div class="text-center">
            <h2>Gostou? Avalie-nos!</h2>
            <p>Se você já experimentou nossos bolos, deixe sua avaliação e ajude outras pessoas a conhecerem
                nosso trabalho!</p>
            <a href="feedback" alt="Avaliar" class="btn btn-primary" title="Avalie-nos">Avaliar</a>
        </div>
    </div>
</section>