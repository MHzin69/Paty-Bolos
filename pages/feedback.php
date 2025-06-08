<div class="text-center">
    <h2>Deixe sua Avaliação</h2>
    <p>Gostou do nosso serviço? Sua opinião é muito importante para nós!</p>
    <div class="container my-5">
    <div class="card p-4 shadow">
      <h2 class="text-center mb-4">Formulário de Feedback</h2>
      <form id="formFeedback">
        <div class="pergunta">
          <label class="form-label">1. Nota para o sabor</label>
          <input type="number" class="form-control" min="1" max="5" required />
        </div>
        <div class="pergunta d-none">
          <label class="form-label">2. Nota para apresentação</label>
          <input type="number" class="form-control" min="1" max="5" required />
        </div>
        <div class="pergunta d-none">
          <label class="form-label">3. Nota para atendimento</label>
          <input type="number" class="form-control" min="1" max="5" required />
        </div>
        <div class="pergunta d-none">
          <label class="form-label">4. O bolo chegou no horário?</label>
          <input type="number" class="form-control" min="1" max="5" required />
        </div>
        <div class="pergunta d-none">
          <label class="form-label">5. Você recomendaria a Paty Bolos?</label>
          <input type="number" class="form-control" min="1" max="5" required />
        </div>
        <div class="pergunta d-none">
          <label class="form-label">6. Comentários adicionais</label>
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