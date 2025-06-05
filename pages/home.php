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
                <tr class="sabor-container">
                    <td class="sabor-nome">Fruta Abacaxi/Pessêgo
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd1')">i</button>
                        <div id="igd1" class="card-ingredientes"></div>
                    </td>
                    <td>R$45,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">BomBom
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd2')">i</button>
                        <div id="igd2" class="card-ingredientes"></div>
                    </td>
                    <td>R$45,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">Creme de coco c/ abacaxi e doce de leite
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd3')">i</button>
                        <div id="igd3" class="card-ingredientes"></div>
                    </td>
                    <td>R$45,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">Creme de doce de leite com coco
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd4')">i</button>
                        <div id="igd4" class="card-ingredientes"></div>
                    </td>
                    <td>R$45,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">Brigadeiro
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd5')">i</button>
                        <div id="igd5" class="card-ingredientes"></div>
                    </td>
                    <td>R$47,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">Prestígio
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd6')">i</button>
                        <div id="igd6" class="card-ingredientes"></div>
                    </td>
                    <td>R$47,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">Cremoso c/ abacaxi
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd7')">i</button>
                        <div id="igd7" class="card-ingredientes"></div>
                    </td>
                    <td>R$50,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">Leite ninho c/ doce de leite
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd8')">i</button>
                        <div id="igd8" class="card-ingredientes"></div>
                    </td>
                    <td>R$50,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">4 Leite
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd9')">i</button>
                        <div id="igd9" class="card-ingredientes"></div>
                    </td>
                    <td>R$53,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">Sensação
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd10')">i</button>
                        <div id="igd10" class="card-ingredientes"></div>
                    </td>
                    <td>R$55,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">Leite ninho c/ Morango
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd11')">i</button>
                        <div id="igd11" class="card-ingredientes"></div>
                    </td>
                    <td>R$60,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">Floresta Branca c/ morango
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd12')">i</button>
                        <div id="igd12" class="card-ingredientes"></div>
                    </td>
                    <td>R$60,00</td>
                </tr>
                <tr class="sabor-container">
                    <td class="sabor-nome">Leite ninho c/ nutella e morango
                        <button class="btn btn-sm btn-outline-secondary btn-mini"
                            onclick="mostrarIngredientes('igd13')">i</button>
                        <div id="igd13" class="card-ingredientes"></div>
                    </td>
                    <td>R$75,00</td>
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
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imgBolos/deco01.jpg" class="d-block carousel-img" alt="Imagem de decoração 1">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco02.jpg" class="d-block carousel-img" alt="Imagem de decoração 2">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco03.jpg" class="d-block carousel-img" alt="Imagem de decoração 3">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco04.jpg" class="d-block carousel-img" alt="Imagem de decoração 4">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco05.jpg" class="d-block carousel-img" alt="Imagem de decoração 5">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco06.jpg" class="d-block carousel-img" alt="Imagem de decoração 6">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco07.jpg" class="d-block carousel-img" alt="Imagem de decoração 7">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco08.jpg" class="d-block carousel-img" alt="Imagem de decoração 8">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco09.jpg" class="d-block carousel-img" alt="Imagem de decoração 9">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco10.jpg" class="d-block carousel-img" alt="Imagem de decoração 10">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco11.jpg" class="d-block carousel-img" alt="Imagem de decoração 11">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco12.jpg" class="d-block carousel-img" alt="Imagem de decoração 12">
                </div>
                <div class="carousel-item">
                    <img src="imgBolos/deco13.jpg" class="d-block carousel-img" alt="Imagem de decoração 13">
                </div>
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>