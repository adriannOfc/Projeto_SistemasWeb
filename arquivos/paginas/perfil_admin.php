<?php
    include('../logica/php/conexao.php');
    $id_perfil = $_SESSION['id_session_usuario'];
    $selectusuario = "SELECT * FROM cadastro_usuario WHERE id_usuario = '". $id_perfil ."'";
    $selectusuariores = $conn->query($selectusuario);

    if(($selectusuariores)){
        while($linhauserres = $selectusuariores->fetch_assoc()){
            $id_usuario = $linhauserres['id_usuario'];
            $nome_usuario = $linhauserres["nome_usuario"];
            $imagem_usuario = $linhauserres["imagem_usuario"];
            $email_usuario = $linhauserres["email_usuario"];
            $endereco_usuario = $linhauserres["endereco_usuario"];
            $telefone_usuario = $linhauserres["telefone_usuario"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../imagens/logo_site.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/3486b4745c.js" crossorigin="anonymous"></script>
    <title>Mundo Leitura | Perfil</title>
</head>
    <body>
        <main id="conteudo_principal" class="conteudo_principal">
            <header id="header_conteudo" class="header_conteudo">
                <span><a href="./pagina_dashboard.php"><img src="../imagens/logo_site.png" alt="Imagem logo Site"></a><span>Mundo Leitura</span></span>
                <nav>
                    <ul>
                        <li><a href="./pagina_dashboard.php">início</a></li>
                        <li><a href="./cadastrar_conteudo.php">Cadastrar Conteúdo</a></li>
                        <li><a href="./perfil_admin.php">Perfil de Administrador</a></li>
                    </ul>

                    <section class="conteudo_extra">
                        <a href="../logica/php/deslogar.php" class="sair" href="#">SAIR DA CONTA</a>
                    </section>
                </nav>
            </header>

            <section class="divisao_conteudo">
                <section class="conteudo_perfil">
                    <section class="header_perfil">
                        <h1>Configurações do Perfil</h1>
                    </section>

                    <section class="informacoes">
                        <img src="<?php echo($imagem_usuario); ?>" alt="Imagem de Perfil">
                        <li><p><i class="fa-solid fa-user"></i> <?php echo($nome_usuario); ?></p></li>
                        <li><p><i class="fa-regular fa-envelope"></i> <?php echo($email_usuario); ?></p></li>
                        <li><p><i class="fa-solid fa-house"></i> <?php echo($endereco_usuario); ?></p></li>
                        <li><p><i class="fa-solid fa-phone"></i> <?php echo($telefone_usuario); ?></p></li>
                        <li><p><i class="fa-solid fa-lock"></i> <?php echo("***************"); ?></p></li>
                        <li class="deletar_conta"><a href="../logica/php/deletar_conta.php?deletar_conta=<?php echo($id_usuario); ?>"><i id="deletar" class="fa-solid fa-trash"></i> DELETRA CONTA</a></li>
                    </section>
                </section>

                <section class="form_perfil">
                    <section class="header_perfil">
                        <h1>Altere as Configurações já salvas do seu Perfil</h1>
                    </section>

                    <form name="inserir" class="inserir" id="inserir" action="../logica/php/atualizar_credenciais.php" method="POST">
                        <label for="nome_usuario">Nome de Usuário</label>
                        <input type="text" value="<?php echo($nome_usuario); ?>" name="nome_usuario" id="nome_usuario" placeholder="Digite o seu Nome de Usuário" required>

                        <label for="email_usuario">Endereço de E-mail</label>
                        <input type="email" value="<?php echo($email_usuario); ?>" name="email_usuario" id="email_usuario" placeholder="Digite o seu Endereço de E-mail" required>

                        <label for="endereco_usuario">Endereço Local</label>
                        <input type="text" value="<?php echo($endereco_usuario); ?>" name="endereco_usuario" id="endereco_usuario" placeholder="Digite o seu Endereço Local" required>

                        <label for="telefone_usuario">Telefone</label>
                        <input type="tel"  value="<?php echo($telefone_usuario); ?>" name="telefone_usuario" id="telefone_usuario" placeholder="Digite o seu Telefone">
                        
                        <label for="imagem_usuario">Cole a URL para imagem de Perfil</label>
                        <input type="text"  value="<?php echo($imagem_usuario); ?>"  name="imagem_usuario" id="imagem_usuario" placeholder="Cole a URL para imagem de Perfil" required>

                        <label for="senha_usuario">Senha de Acesso</label>
                        <input type="password" name="senha_usuario" id="senha_usuario" placeholder="Digite a sua Senha de Acesso" required>

                        <input type="submit" name="atualizar_usuario" id="atualizar_usuario" value="Atualizar Credênciais">
                    </form>
                </section>
            </section>
        </main>
    </body>
</html>

