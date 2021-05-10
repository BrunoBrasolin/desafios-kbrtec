<?php include_once 'includes/header.php'; ?>

<main class="pagina-contato">
    <section class="conteudo">
        <section class="esquerda">
            <h3 class="subtitulo">Fale Conosco</h3>
            <h2 class="titulo">
                Reserve sua hospedagem <br />
                em Santos
            </h2>

            <form class="formulario">
                <div class="input-group input-nome">
                    <label class="label" for="nome">Seu nome:</label>
                    <input type="text" placeholder="Ex: Nome Exemplo" name="nome">
                </div>
                <div class="linha">
                    <div class="input-group input-email">
                        <label class="label" for="email">Seu e-mail:</label>
                        <input type="email" name="email" placeholder="Ex: mail@exemplo.com.br">
                    </div>
                    <div class="input-group input-telefone">
                        <label class="label" for="telefone">Telefone:</label>
                        <input type="text" name="telefone" placeholder="Ex: 13 997586542">
                    </div>
                </div>

                <div class="input-group input-mensagem">
                    <label class="label" for="mensagem">Mensagem</label>
                    <textarea name="mensagem" placeholder="Digite aqui a mensagem que deseja nos passar" rows="4"></textarea>
                </div>

                <div class="botao-mensagem">
                    <button class="botao" type="submit">Enviar</button>
                    <div class="mensagem">
                        <div class="mensagem sucesso">
                            <i class="fas fa-check-circle"></i>
                            Dados enviado com sucesso!
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </section>
</main>

<?php include_once 'includes/footer.php'; ?>