<div class="text-center">
    <h2>Deixe sua Avaliação</h2>
    <p>Gostou do nosso serviço? Sua opinião é muito importante para nós!</p>
    <div class="container my-5">
        <div class="card p-4 shadow">
            <h2 class="text-center mb-4">Formulário de Feedback</h2>
            <form id="formFeedback">
                <div class="pergunta">
                    <label class="form-label">1. Nome</label>
                    <input type="text" class="form-control" required />
                </div>
                <div class="pergunta d-none">
                    <label class="form-label">2. WhatsApp (apenas números)</label>
                    <input type="tel" class="form-control" pattern="\\d{10,14}" required />
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
                    <button type="button" id="btnProximo" class="btn btn-primary">Próximo</button>
                </div>
            </form>


            <div id="mensagemFinal" class="alert alert-success d-none text-center mt-4">
                Obrigado pelo seu feedback! 💖
            </div>
        </div>
    </div>
</div>