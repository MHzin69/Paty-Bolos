<section class="sabores" id="sabores">
    <div class="container">
        <h2 class="text-center display-4 text-primary fw-bold mb-3 h2t">Sabores e Preços</h2>
        <table class="table table-bordered">
            <thead>
                <th class="thTitle">Sabores</th>
                <th class="thTitle">Preços(Kg)</th>
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
            <button class='btn btn-primary' title='Ver ingredientes' onclick=\"mostrarIngredientes('{$nome}', '{$id}')\">Ingredientes</button>
          </td>
          <td class='preco'>R$ {$preco}</td>
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