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
    <title>Mundo Leitura | Cadastrar Conteúdo</title>
</head>
    <body id="login">
        <main id="conteudo_principal" class="conteudo_principal">
            <header id="header_conteudo" class="header_conteudo">
                <span><a href="../../index.php"><img src="../imagens/logo_site.png" alt="Imagem logo Site"></a><span>Mundo Leitura</span></span>
                <nav>
                    <ul>
                        <li><a href="./pagina_dashboard.php">início</a></li>
                        <li><a href="./cadastrar_conteudo.php">Cadastrar Conteúdo</a></li>
                        <li><a href="./cadastrar_franquia.php">Cadastrar Franquia</a></li>
                    </ul>

                    <section class="conteudo_extra">
                        <a href="../logica/php/deslogar.php" class="sair" href="#">SAIR DA CONTA</a>
                    </section>
                </nav>
            </header>

            <section id="loginform" class="login">
                <section class="header_login">
                    <h1>Cadastre um Conteúdo :) </h1>
                    <img src="../imagens/logo_site.png" alt="logo do site">
                </section>

                <form name="inserir" class="inserir" id="inserir" action="../logica/php/inserir_conteudo.php" method="POST">
                    <label for="nome">Nome do Conteúdo</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite o Nome do Conteúdo" required>

                    <label for="categoria">Qual tipo de conteúdo deseja cadastrar?</label>
                    <select name="categoria" id="categoria">
                        <option value="Livros">Conteúdo Sobre Livros</option>
                        <option value="Filmes">Conteúdo Sobre Filmes</option>
                        <option value="Séries">Conteúdo Sobre Séries</option>
                    </select>

                    <label for="genero">Gênero do Conteúdo</label>
                    <input type="text" name="genero" id="genero" placeholder="Digite o Gênero do Conteúdo" required>

                    <label for="imagem">URL imagem de Capa</label>
                    <input type="text" name="imagem" id="imagem" placeholder="Cole a URL para a Capa da Imagem" required>

                    <label for="sinopse">Escreva a Sinopse do seu Conteúdo</label>
                    <textarea name="sinopse" id="sinopse" cols="30" rows="10" placeholder="Digite uma breve Sinopse sobre o Livro, Filme, ou Série que você quer Cadastrar"></textarea>

                    <input type="submit" name="cadastrar_conteudo" id="cadastrar_conteudo" value="Cadastrar Conteúdo">
                </form>
            </section>
        </main>
    </body>
</html>

