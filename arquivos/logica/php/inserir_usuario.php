<?php
    include('conexao.php');
    if(isset($_POST['cadastrar_usuario'])){
        $nome_usuario = $_POST['nome_usuario'];
        $email_usuario = $_POST['email_usuario'];
        $endereco_usuario = $_POST['endereco_usuario'];
        $telefone_usuario = $_POST['telefone_usuario'];
        $imagem_usuario = $_POST['imagem_usuario'];
        $senha_usuario = $_POST['senha_usuario'];

        $inserir = "INSERT INTO cadastro_usuario (nome_usuario, email_usuario, endereco_usuario, telefone_usuario, imagem_usuario, senha_usuario) VALUES ('". $nome_usuario ."' ,'". $email_usuario ."', '". $endereco_usuario ."', '". $telefone_usuario ."', '". $imagem_usuario ."', '". $senha_usuario ."')";
        $inserirres = $conn->query($inserir);

        if(($inserirres == TRUE)){
            header("Location: http://localhost/projeto_livro/arquivos/paginas/pagina_login.php");
            exit();
        }else{
            header("Location: http://localhost/projeto_livro/arquivos/paginas/pagina_registrar.php");
            exit();
        }
    }else{
        header("Location: ./deslogar.php");
    }
?>