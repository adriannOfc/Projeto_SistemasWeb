-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11-Nov-2023 às 23:02
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_livro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_componentes`
--

CREATE TABLE `cadastro_componentes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `genero` varchar(30) DEFAULT NULL,
  `imagem` text DEFAULT NULL,
  `sinopse` text DEFAULT NULL,
  `data_registro` date DEFAULT NULL,
  `status` enum('Já vi','Estou vendo','Não vi') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_componentes`
--

INSERT INTO `cadastro_componentes` (`id`, `nome`, `categoria`, `genero`, `imagem`, `sinopse`, `data_registro`, `status`) VALUES
(2, 'a', 'Livros', 'Ação', 'https://i.pinimg.com/474x/95/5f/6d/955f6da6faf2fe6b93901378cfb01579.jpg', 'a', '2023-11-11', 'Não vi');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_componentes`
--
ALTER TABLE `cadastro_componentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_componentes`
--
ALTER TABLE `cadastro_componentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
