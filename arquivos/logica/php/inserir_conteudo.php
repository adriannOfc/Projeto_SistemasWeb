<?php
    include('conexao.php');
    if(isset($_POST['cadastrar_conteudo'])){
        $nome = $_POST['nome'];
        $categoria = $_POST['categoria'];
        $genero = $_POST['genero'];
        $imagem = $_POST['imagem'];
        $sinopse = $_POST['sinopse'];

        $inserir_conteudo = "INSERT INTO cadastro_componentes (nome, categoria, genero, imagem, sinopse, data_registro, status) VALUES ('". $nome ."', '". $categoria ."', '". $genero ."', '". $imagem ."', '". $sinopse ."', NOW(), 'Não Vi')";
        $inserir_conteudo_res = $conn->query($inserir_conteudo);
        
        if(($inserir_conteudo_res)){
            header("Location: http://localhost/projeto_livro/arquivos/paginas/pagina_dashboard.php");
            exit();
        }else{
            echo("<script>window.alert('NÃO FOI POSSÍVEL CADASTRAR UM CONTEÚDO EM NOSSA BASE DE DADOS. POR FAVOR TENTE NOVAMENTE'); window.location.href = 'http://localhost/projeto_livro/arquivos/paginas/pagina_dashboard.php';</script>");
        }
    }else{
        header("Location: http://localhost/projeto_livro/arquivos/paginas/pagina_dashboard.php");
    }
?>