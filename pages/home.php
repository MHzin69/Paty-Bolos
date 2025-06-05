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
        <button type="button" class="btn btn-primary">Faça seu Pedido</button>

    </div>
</section>
<section class="sabores">
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
                    $id = htmlspecialchars($sabor['id'] ?? '');
                    $nome = htmlspecialchars($sabor['nome'] ?? 'Sem nome');
                    $preco = number_format($sabor['preco'] ?? 0, 2, ',', '.');

                    echo "<tr class='sabor-container'>
            <td class='sabor-nome'>{$nome}
                <button class='btn btn-sm btn-outline-secondary btn-mini'
                    onclick='mostrarIngredientes(\"igd{$id}\")'>i</button>
                <div id='igd{$id}' class='card-ingredientes'></div>
            </td>
            <td>R$ {$preco}</td>
        </tr>";
                }
                ?>
                </tr>
            </tbody>
        </table>
        <hr>
        <div class="text-center">
            <button type="button" class="btn btn-primary">Faça seu Pedido</button>
        </div>
</section>

<section id="decoracoes" class="decoracoes">
    <div class="container">
        <h2>Exemplos de Decorações</h2>
        <div class="d-flex">
            <a href="mais-imagens" alt="Ver Mais" class="link ms-auto">
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