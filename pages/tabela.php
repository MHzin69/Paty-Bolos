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