<?php include_once 'includes/header.php'; ?>

<main class="pagina-contato">
    <section class="conteudo">
        <section class="esquerda">
            <h3 class="subtitulo">Fale Conosco</h3>
            <h2 class="titulo">
                Reserve sua hospedagem <br />
                em Santos
            </h2>

            <form class="formulario" id="formulario-contato">
                <div class="input-group input-nome">
                    <label class="label" for="nome">Seu nome:</label>
                    <input id="nome" class="input" type="text" placeholder="Ex: Nome Exemplo" name="nome">
                </div>
                <div class="linha">
                    <div class="input-group input-email">
                        <label class="label" for="email">Seu e-mail:</label>
                        <input id="email" class="input" type="text" name="email" placeholder="Ex: mail@exemplo.com.br">
                    </div>
                    <div class="input-group input-telefone">
                        <label class="label" for="telefone">Telefone:</label>
                        <input id="telefone" class="input" type="text" name="telefone" placeholder="Ex: 13 997586542">
                    </div>
                </div>

                <div class="input-group input-mensagem">
                    <label class="label" for="mensagem">Mensagem</label>
                    <textarea id="mensagem" class="input" name="mensagem" placeholder="Digite aqui a mensagem que deseja nos passar" rows="4"></textarea>
                </div>

                <div class="botao-mensagem">
                    <button class="botao" type="submit">Enviar</button>
                    <div class="mensagem">
                        <div class="sucesso">
                            <i class="fas fa-check-circle"></i>
                            Dados enviado com sucesso!
                        </div>
                        <div class="erro">
                            <i class="fas fa-times-circle"></i>
                            Ocorreu um erro
                        </div>
                        <div class="carregando">
                            <img src="public/img/loading.gif" height="32" width="32" alt="Carregando">
                            Enviando...
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <section class="direita">
            <?php include_once 'includes/informacoes-contato.php' ?>
        </section>
    </section>
</main>

<?php include_once 'includes/footer.php'; ?>