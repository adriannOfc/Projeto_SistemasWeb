<?php
    include('conexao.php');
    $id_user = $_SESSION['id_session_usuario'];
    if(isset($_POST['atualizar_usuario'])){
        $nome_usuario = $_POST['nome_usuario'];
        $imagem_usuario = $_POST['imagem_usuario'];
        $email_usuario = $_POST['email_usuario'];
        $endereco_usuario = $_POST['endereco_usuario'];
        $telefone_usuario = $_POST['telefone_usuario'];
        $senha_usuario = $_POST['senha_usuario'];

        $atualizarregistro = "UPDATE cadastro_usuario SET nome_usuario = '". $nome_usuario ."', imagem_usuario = '". $imagem_usuario ."' ,email_usuario = '". $email_usuario ."', endereco_usuario = '". $endereco_usuario ."', telefone_usuario = '". $telefone_usuario ."', senha_usuario = '". $senha_usuario ."' WHERE id_usuario = '". $id_user ."'";
        $atualizarres = $conn->query($atualizarregistro);

        if(($atualizarres == TRUE)){
            echo("<script>window.alert('SUAS INFORMAÇÕES FORAM ATUALIZADAS COM SUCESSO. PARA MAIS SEGURANÇA PEDIMOS QUE VOCÊ FAÇA LOGIN NOVAMENTE EM NOSSA PLATAFORMA :)'); window.location.href = 'http://localhost/projeto_livro/arquivos/paginas/pagina_login.php';</script>");
        }else{
            header("Location: http://localhost/projeto_livro/arquivos/paginas/perfil_admin.php");
        }
    }else{
        header("Location: ./deslogar.php");
    }
?>