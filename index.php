<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paty Bolos</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-... (truncado)" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="home" title="Paty Bolos">
                    <img src="images\logoPatyBolos.png" alt="Paty Bolos" class="logo-img">
                    Paty Bolos
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home#sobre" title="Sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="home#sabores" title="Sabores">Sabores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="mais-imagens" title="Decorações">Decorações</a>
                        </li>
                        <li class="nav-item">
                            <type="button" class="btn btn-primary" title="Faça seu Pedido">
                                <a href="contato" class="b-link">Faça seu Pedido</a>
                                </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="container">
        <?php
        $pagina = $_GET["param"] ?? "home";

        $pagina = "pages/{$pagina}.php";
        include 'sabores.php';
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }

        ?>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <img src="images/logoPatyBolos.png" alt="logo Paty Bolos" class="logo-img">
                    <h5>Paty Bolos</h5>
                    <p>&copy; 2025 Paty Bolos. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

    <!-- script botao ingredientes -->
    <script>
        function mostrarIngredientes(nome, id) {
            fecharTodos();
            fetch('sabores.php?nome=' + encodeURIComponent(nome))
                .then(res => res.text())
                .then(texto => {
                    const destino = document.getElementById('ing' + id);
                    const linha = document.getElementById('linha-ing' + id);
                    if (destino && linha) {
                        destino.innerText = texto;
                        linha.style.display = 'table-row';
                    }
                });
        }

        function fecharTodos() {
            const linhas = document.querySelectorAll('.linha-ingredientes');
            linhas.forEach(l => l.style.display = 'none');
        }
    </script>

    <!-- script para formulario de feedback-->
    <script>
        const perguntas = document.querySelectorAll('.pergunta');
        const btn = document.getElementById('btnProximo');
        const finalMsg = document.getElementById('mensagemFinal');
        const form = document.getElementById('formFeedback');
        let etapa = 0;

        // Criar estrelas para perguntas de 1 a 4
        document.querySelectorAll('.estrelas').forEach(div => {
            for (let i = 1; i <= 5; i++) {
                const span = document.createElement('span');
                span.innerText = '★';
                span.classList.add('star');
                span.dataset.valor = i;

              
                span.addEventListener('click', () => {
                    div.dataset.valor = i;
                    pintarEstrelas(div, i);
                });

               
                span.addEventListener('mouseover', () => {
                    pintarEstrelas(div, i);
                });

               
                span.addEventListener('mouseout', () => {
                    const valor = parseInt(div.dataset.valor) || 0;
                    pintarEstrelas(div, valor);
                });

                div.appendChild(span);
            }
        });

        
        function pintarEstrelas(div, valor) {
            const stars = div.querySelectorAll('.star');
            stars.forEach((star, idx) => {
                if (idx < valor) {
                    star.classList.add('selecionada');
                } else {
                    star.classList.remove('selecionada');
                }
            });
        }

        btn.addEventListener('click', () => {
            const atual = perguntas[etapa];
            const input = atual.querySelector('textarea') || atual.querySelector('input[type="text"]');
            const estrelas = atual.querySelector('.estrelas');
            const numeroInput = atual.querySelector('input[type="tel"]');

            if (estrelas && !estrelas.dataset.valor) {
                exibirAlerta("Por favor, selecione uma nota.");
                return;
            }

            if (input && input.value.trim() === "") {
                exibirAlerta("Por favor, preencha o campo.");
                return;
            }

            if (numeroInput) {
                let numero = numeroInput.value.replace(/\D/g, '');

                if (!/^[0-9]{10,11}$/.test(numero)) {
                    exibirAlerta("Digite um número de telefone válido.");
                    return;
                }
            }

            atual.classList.add('d-none');
            etapa++;

            if (etapa < perguntas.length) {
                perguntas[etapa].classList.remove('d-none');
            } else {
                form.classList.add('d-none');
                finalMsg.classList.remove('d-none');
                mostrarResumo();
            }
        });


        function mostrarResumo() {
            const respostas = [];

            document.querySelectorAll('.estrelas').forEach(div => {
                const pergunta = div.dataset.pergunta;
                const valor = div.dataset.valor || "Sem resposta";
                respostas.push(`${pergunta}: ${valor} estrela(s)`);
            });

            const comentario = document.querySelector('textarea')?.value.trim();
            if (comentario) respostas.push(`Comentário: ${comentario}`);

            console.log("📋 Resumo do feedback:");
            console.log(respostas.join('\n'));
        }

        function exibirAlerta(mensagem) {
            const alerta = document.getElementById('alertaErro');
            alerta.innerText = mensagem;
            alerta.classList.remove('d-none');

            setTimeout(() => {
                alerta.classList.add('d-none');
            }, 3000);
        }
        const numeroInput = document.getElementById('numeroInput');

        numeroInput.addEventListener('input', function (e) {
            let numero = e.target.value.replace(/\D/g, '');

            if (numero.length > 11) numero = numero.slice(0, 11);

            if (numero.length > 2 && numero.length <= 6) {
                e.target.value = `(${numero.slice(0, 2)}) ${numero.slice(2)}`;
            } else if (numero.length > 6 && numero.length <= 10) {
                e.target.value = `(${numero.slice(0, 2)}) ${numero.slice(2, 6)}-${numero.slice(6)}`;
            } else if (numero.length === 11) {
                e.target.value = `(${numero.slice(0, 2)}) ${numero.slice(2, 7)}-${numero.slice(7)}`;
            } else if (numero.length <= 2) {
                e.target.value = `(${numero}`;
            }
        });


    </script>
</body>

</html>