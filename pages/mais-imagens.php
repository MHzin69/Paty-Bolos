<div class="container">
    <div class="row g-2">

        <h2 class="text-center display-4 text-primary fw-bold mb-3 h2t">
            Decorações
        </h2>
        <?php
        foreach ($decoracoes as $id => $caminho) {
            echo "<div class='col-lg-3 col-md-6 col-sm-12'>
            <div class='card decoration-card h-100 shadow'>
                <img src='{$caminho}' class='decoration-img' alt='Decoração {$id}'>
            </div>
          </div>";
        }
        ?>
    </div>
    <div class="text-center mais-imgs">
        <a href="home" class="btn btn-primary" title="Voltar para a página inicial" alt="Voltar para a página inicial">
            Voltar para a Página Inicial
            <i class="fa-solid fa-arrow-left"></i>  
        </a>
    </div>
</div>