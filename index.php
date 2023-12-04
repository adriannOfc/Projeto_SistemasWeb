<?php
    include('./arquivos/logica/php/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./arquivos/styles/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="./arquivos/imagens/logo_site.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/3486b4745c.js" crossorigin="anonymous"></script>
    <title>Mundo Leitura | Início</title>
</head>
    <body>
        <main id="conteudo_principal" class="conteudo_principal">
            <header id="header_conteudo" class="header_conteudo">
                <span><a href="./index.php"><img src="./arquivos/imagens/logo_site.png" alt="Imagem logo Site"></a><span>Mundo Leitura</span></span>
                <nav>
                    <ul>
                        <li><a href="./index.php">início</a></li>
                        <li><a href="./arquivos/paginas/pagina_filmes.php">catálagos filmes</a></li>
                        <li><a href="./arquivos/paginas/pagina_livros.php">catálagos livros</a></li>
                        <li><a href="./arquivos/paginas/pagina_series.php">catálagos séries</a></li>
                    </ul>

                    <section class="conteudo_extra">
                        <a href="./arquivos/paginas/pagina_login.php"><span class="material-symbols-outlined">person</span></a>
                        <a href="#"><span class="material-symbols-outlined">notification_add</span></a>
                        <a href="#"><span class="material-symbols-outlined">menu</span></a>
                    </section>
                </nav>
            </header>

            <section class="divisao_conteudo">
                <section class="filtrar_conteudo">
                    <form name="procurar_conteudo" id="procurar_conteudo" class="procurar_conteudo" action="./arquivos/paginas/pagina_conteudo_buscado.php" method="GET">
                        <label for="procurar_txt">Consultar por Busca Avançada</label>
                        <input type="search" name="procurar_txt" id="procurar_txt" placeholder="O que deseja buscar hoje?">
                        <input type="submit" value="Buscar Conteúdo">
                    </form>

                    <section class="categoria_produto">
                        <h1>Busca por Livros</h1>
                        <ul>
                            <?php 
                                $buscalivro = "SELECT * FROM cadastro_componentes WHERE categoria = 'Livros' LIMIT 5";
                                $buscalivrores = $conn->query($buscalivro);
                                while($reslivros = $buscalivrores->fetch_assoc()){
                                    $id = $reslivros['id'];
                                    $nome = $reslivros['nome'];                            ?>
                            <li><a href="#"><?php echo($nome); ?></a></li>
                        </ul>
                        <?php } ?>
                    </section>

                    <section class="categoria_produto">
                        <h1>Busca por Filmes</h1>
                        <ul>
                            <?php 
                                $buscalivro = "SELECT * FROM cadastro_componentes WHERE categoria = 'Filmes' LIMIT 5";
                                $buscalivrores = $conn->query($buscalivro);
                                while($reslivros = $buscalivrores->fetch_assoc()){
                                    $id = $reslivros['id'];
                                    $nome = $reslivros['nome'];
                            ?>
                                <li><a href="#"><?php echo($nome); ?></a></li>
                            <?php } ?>
                        </ul>
                    </section>

                    <section class="categoria_produto">
                        <h1>Busca por Séries</h1>
                        <ul>
                            <?php 
                                $buscalivro = "SELECT * FROM cadastro_componentes WHERE categoria = 'Séries' LIMIT 5";
                                $buscalivrores = $conn->query($buscalivro);
                                while($reslivros = $buscalivrores->fetch_assoc()){
                                    $id = $reslivros['id'];
                                    $nome = $reslivros['nome'];                            ?>
                                <li><a href="#"><?php echo($nome); ?></a></li>
                            <?php } ?>
                        </ul>
                    </section>
                </section>

                <section class="conteudo_principal_pagina">
                    <section class="header_conteudo">
                        <h1>FIQUE POR DENTRO DOS MELHORES FILMES, LIVROS E SÉRIES DA ATUALIDADE</h1>
                    </section>

                        <section class="cartoes_conteudo">
                            <?php 
                                $buscalivro = "SELECT * FROM cadastro_componentes LIMIT 15";
                                $buscalivrores = $conn->query($buscalivro);
                                while($reslivros = $buscalivrores->fetch_assoc()){
                                    $id = $reslivros['id'];
                                    $nome = $reslivros['nome'];
                                    $categoria = $reslivros['categoria'];
                                    $genero = $reslivros['genero'];
                                    $imagem = $reslivros['imagem'];
                                    $sinopse = $reslivros['sinopse'];
                                    $data_registro = $reslivros['data_registro'];
                            ?>

                            <section class="cartao_solo">
                                <img src="<?php echo($imagem); ?>" alt="imagem do conteudo">
                                <section class="descricao_conteudo">
                                    <h1 class="nome"><?php echo($nome); ?></h1>
                                    <h1>Categoria: <?php echo($categoria); ?></h1>
                                    <span>Genêro: <?php echo($genero); ?> <span><?php echo($data_registro) ?></span></span>
                                    <p>SINOPSE: <?php echo($sinopse); ?></p>
                                    <h4><a href="./arquivos/paginas/saber_mais.php?id_page=<?php echo($id); ?>">SABER MAIS SOBRE</a></h4>
                                </section>
                            </section>

                            <?php } ?>
                        </section>
                </section>

                <section class="conteudo_novidades">
                    <section class="header_novidades">
                        <h1>DESTAQUES DA SEMANA</h1>
                    </section>

                    <section class="conteudo_destaque">
                        <?php 
                            $buscalivro = "SELECT * FROM cadastro_componentes LIMIT 4";
                            $buscalivrores = $conn->query($buscalivro);
                            while($reslivros = $buscalivrores->fetch_assoc()){
                                $id = $reslivros['id'];
                                $nome = $reslivros['nome'];
                                $categoria = $reslivros['categoria'];
                                $genero = $reslivros['genero'];
                                $imagem = $reslivros['imagem'];
                                $sinopse = $reslivros['sinopse'];
                                $data_registro = $reslivros['data_registro'];
                            ?>
                        <section class="cartao_destaque">
                                <img src="<?php echo($imagem); ?>" alt="">
                                <section class="descricao_destaque">
                                    <h1 class="titulo_destaque"><?php echo($nome); ?></h1>
                                    <p><?php echo($sinopse); ?></p>
                                </section>
                        </section>
                       <?php } ?>
                    </section>
                </section>
            </section>
        </main>
    </body>
</html>
