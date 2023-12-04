<?php
    include('./conexao.php');
    if(isset($_GET['deletar_conta'])){
        $id_delete = $_GET['deletar_conta'];
        $delete = "DELETE FROM cadastro_usuario WHERE id_usuario = '". $id_delete ."'";
        $deleteres = $conn->query($delete);

        if(($deleteres)){
            echo("<script>window.alert('SUA CONTA FOI DELETADA DE NOSSA TABELA DE REGISTRO COM SUCESSO'); window.location.href = 'http://localhost/projeto_livro/index.php';</script>");
        }else{
            header("Location: http://localhost/projeto_livro/arquivos/paginas/pagina_dashboard.php");
        }
    }else{
        header("Location: ../paginas/perfil_admin.php");
    }
?>