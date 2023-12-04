<?php
    include('conexao.php');
    if(isset($_POST['fazer_login'])){
        $nome_usuario = $_POST['nome_usuario'];
        $email_usuario = $_POST['email_usuario'];
        $senha_usuario = $_POST['senha_usuario'];

        $verificar_usuario = "SELECT * FROM cadastro_usuario";
        $verificar_usuario_res = $conn->query($verificar_usuario);
        
        while($linhares = $verificar_usuario_res->fetch_assoc()){
            $id = $linhares['id_usuario'];
            $nome_usuario_tbl = $linhares['nome_usuario'];
            $email_usuario_tbl = $linhares['email_usuario'];
            $senha_usuario_tbl = $linhares['senha_usuario'];
        }

        if($nome_usuario == $nome_usuario_tbl && $email_usuario == $email_usuario_tbl && $senha_usuario == $senha_usuario_tbl){
            $_SESSION['id_session_usuario'] = $id;
            header("Location: http://localhost/projeto_livro/arquivos/paginas/pagina_dashboard.php");
        }else{
            echo("<script>alert('Analisamos e vimos que pelas credênciais passas pelo formulário não corresponde com os registros do banco de dados'); window.location.href = 'http://localhost/projeto_livro/arquivos/paginas/pagina_login.php';</script>");
        }
    }else{
        header("Location: ./deslogar.php");
    }
?>