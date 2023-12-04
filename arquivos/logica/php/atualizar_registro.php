<?php
    include('conexao.php');
    $id = $_SESSION['atualizar_session'];

    if(isset($_POST['atualizar_conteudo'])){
        $novo_nome = $_POST['novo_nome'];
        $novo_categoria = $_POST['novo_categoria'];
        $novo_genero = $_POST['novo_genero'];
        $novo_imagem = $_POST['novo_imagem'];
        $nova_sinopse = $_POST['nova_sinopse'];

        $atualizar = "UPDATE cadastro_componentes SET nome = '". $novo_nome ."', categoria = '". $novo_categoria ."', genero = '". $novo_genero ."', imagem = '". $novo_imagem ."', sinopse = '". $nova_sinopse ."' WHERE id = '". $id ."'";
        $atualizarres = $conn->query($atualizar);

        if(($atualizarres)){
            header("Location: http://localhost/projeto_livro/arquivos/paginas/pagina_dashboard.php");
        }else{
            header("Location: http://localhost/projeto_livro/arquivos/paginas/pagina_dashboard.php");
        }
    }else{
        header("Location: http://localhost/projeto_livro/arquivos/paginas/pagina_dashboard.php");
    }
?>

