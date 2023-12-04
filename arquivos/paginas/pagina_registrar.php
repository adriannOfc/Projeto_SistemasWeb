<?php
    include('../logica/php/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/3486b4745c.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../imagens/logo_site.ico" type="image/x-icon">
    <title>Mundo Leitura | Cadastrar-Se</title>
</head>
    <body id="login">
        <main id="conteudo_principal" class="conteudo_principal">
            <header id="header_conteudo" class="header_conteudo">
                <span><a href="../../index.php"><img src="../imagens/logo_site.png" alt="Imagem logo Site"></a><span>Mundo Leitura</span></span>
                <nav>
                    <ul>
                        <li><a href="../../index.php">início</a></li>
                        <li><a href="./pagina_filmes.php">catálagos filmes</a></li>
                        <li><a href="./pagina_livros.php">catálagos livros</a></li>
                        <li><a href="./pagina_series.php">catálagos séries</a></li>
                    </ul>

                    <section class="conteudo_extra">
                        <a href="./pagina_login.php"><span class="material-symbols-outlined">person</span></a>
                        <a href="#"><span class="material-symbols-outlined">notification_add</span></a>
                        <a href="#"><span class="material-symbols-outlined">menu</span></a>
                    </section>
                </nav>
            </header>

            <section class="login">
                <section class="header_login">
                    <h1>Crie uma nova Conta :) </h1>
                    <img src="../imagens/logo_site.png" alt="logo do site">
                </section>

                <form name="inserir" class="inserir" id="inserir" action="../logica/php/inserir_usuario.php" method="POST">
                    <label for="nome_usuario">Nome de Usuário</label>
                    <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Digite o seu Nome de Usuário" required>

                    <label for="email_usuario">Endereço de E-mail</label>
                    <input type="email" name="email_usuario" id="email_usuario" placeholder="Digite o seu Endereço de E-mail" required>

                    <label for="endereco_usuario">Endereço Local</label>
                    <input type="text" name="endereco_usuario" id="endereco_usuario" placeholder="Digite o seu Endereço Local" required>

                    <label for="telefone_usuario">Telefone</label>
                    <input type="tel" name="telefone_usuario" id="telefone_usuario" placeholder="Digite o seu Telefone">
                    
                    <label for="imagem_usuario">Cole a URL para imagem de Perfil</label>
                    <input type="text" name="imagem_usuario" id="imagem_usuario" placeholder="Cole a URL para imagem de Perfil" required>

                    <label for="senha_usuario">Senha de Acesso</label>
                    <input type="password" name="senha_usuario" id="senha_usuario" placeholder="Digite a sua Senha de Acesso" required>

                    <input type="submit" name="cadastrar_usuario" id="cadastrar_usuario" value="Criar Conta">

                    <p>Já possui uma Conta? <a href="./pagina_login.php">Fazer Login</a></p>
                </form>
            </section>
        </main>
    </body>
</html>

