<div class="text-center">
    <h2>Deixe sua Avaliação</h2>
    <p>Gostou do nosso serviço? Sua opinião é muito importante para nós!</p>
    <div class="container my-5">
        <div class="card p-4 shadow">
            <h2 class="text-center mb-4">Formulário de Feedback</h2>
            <div class="progress mb-3">
                <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%;"
                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <form id="formFeedback">
                <div class="pergunta">
                    <label class="form-label">1. Nome</label>
                    <input type="text" class="form-control" required />
                </div>
                <div class="pergunta d-none">
                    <label class="form-label">2. WhatsApp (apenas números)</label>
                    <input type="tel" class="form-control" pattern="\\d{10,14}" id="numeroInput" required />
                </div>
                <div class="pergunta d-none">
                    <label class="form-label">3. Sabor</label>
                    <div class="estrelas" data-pergunta="Sabor"></div>
                </div>
                <div class="pergunta d-none">
                    <label class="form-label">4. Apresentação</label>
                    <div class="estrelas" data-pergunta="Apresentação"></div>
                </div>
                <div class="pergunta d-none">
                    <label class="form-label">5. Atendimento</label>
                    <div class="estrelas" data-pergunta="Atendimento"></div>
                </div>
                <div class="pergunta d-none">
                    <label class="form-label">6. Você recomendaria a Paty Bolos?</label>
                    <div class="estrelas" data-pergunta="Recomendaria"></div>
                </div>
                <div class="pergunta d-none">
                    <label class="form-label">7. Comentários adicionais</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                
                <div class="mt-4 text-center">
                    <button type="button" id="btnVoltar" class="btn btn-primary">
                        <i class="fa-solid fa-rotate-left"></i>
                        Voltar
                    </button>
                    <button type="button" id="btnProximo" class="btn btn-primary">
                        <i class="fa-solid fa-rotate-right"></i>
                        Próximo
                    </button>
                </div>
                
            </form>

            <div id="alertaErro" class="alert alert-danger d-none text-center mt-3" role="alert"></div>
            <div id="mensagemFinal" class="alert alert-success d-none text-center mt-4">
                Obrigado pelo seu feedback! 💖
            </div>
        </div>
    </div>
    <div id="paginaInicial">
        <a href="home" class="btn btn-primary" title="Voltar para a página inicial" alt="Voltar para a página inicial">
            Voltar para a Página Inicial
            <i class="fa-solid fa-arrow-left"></i>  
        </a>
    </div>
</div>
<div id="alertaErro" class="alert alert-danger d-none text-center mt-3" role="alert"></div>