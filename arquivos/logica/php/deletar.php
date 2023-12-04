<?php
    include('conexao.php');
    if(isset($_GET['deletar'])){
        $id_deletar = $_GET['deletar'];
        $delconteudo = "DELETE FROM cadastro_componentes WHERE id = '". $id_deletar ."'";
        $delconteudores = $conn->query($delconteudo);

        if(($delconteudores)){
            echo("<script>window.alert('O CONTEÚDO CLICADO FOI DELETADO DE NOSSA BASE DE DADOS COM SUCESSO'); window.location.href = 'http://localhost/projeto_livro/arquivos/paginas/pagina_dashboard.php';</script>");
        }else{
            header("Location: http://localhost/projeto_livro/arquivos/paginas/pagina_dashboard.php");
        }
    }
?>