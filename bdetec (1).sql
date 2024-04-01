-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/04/2024 às 06:04
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdetec`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbanimal`
--

CREATE TABLE `tbanimal` (
  `idAnimal` int(11) NOT NULL,
  `nomeAnimal` varchar(100) NOT NULL,
  `imgAnimal` varchar(200) NOT NULL,
  `descriçãoAnimal` varchar(200) NOT NULL,
  `epocaAcasalamentoAnimal` varchar(100) NOT NULL,
  `idTerritorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbterritorio`
--

CREATE TABLE `tbterritorio` (
  `idTerritorio` int(11) NOT NULL,
  `nomeTerritorio` int(100) NOT NULL,
  `imgTerritorio` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbuser`
--

INSERT INTO `tbuser` (`id`, `nome`, `email`, `senha`, `telefone`) VALUES
(1, 'Luciano', 'luciano@gmail.com', '123', '11987654321'),
(2, 'Chaves', 'chaves@gmail.com', '123', '9111111111'),
(3, 'Chiquinha', 'chiquinha@gmail.com', '123', '40028922'),
(34, 'eae', 'eae', 'eae', 'eae'),
(35, 'b', 'b', 'b', 'b'),
(36, 'c', 'c', 'c', 'c'),
(37, 'd', 'd', 'd', 'd'),
(38, 'e', 'e', 'e', 'e'),
(41, 'ad', 'ad', 'ad', 'ad'),
(42, 'asdasd', 'asdasdas', 'sadas', 'sadasdasd'),
(43, 'ad', 'ddd', 'aaaaaaaaaaaaaaaaaaaa', 'dddaaaaaaaaa'),
(46, 'asdas', 'asdas', 'asdsad', 'dasd'),
(47, 'sda', 'dsa', 'sad', 'sad'),
(48, 'sddsad', 'dsadsad', 'dsadasd', 'sadsadsadsa'),
(53, 'dsasadasdadd', 'sadasdasdas', 'asdasdasds', 'dasdsadas'),
(54, 'a', 'a', 'ae', 'ae');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbanimal`
--
ALTER TABLE `tbanimal`
  ADD PRIMARY KEY (`idAnimal`),
  ADD KEY `idTerritorio` (`idTerritorio`);

--
-- Índices de tabela `tbterritorio`
--
ALTER TABLE `tbterritorio`
  ADD PRIMARY KEY (`idTerritorio`);

--
-- Índices de tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`telefone`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbanimal`
--
ALTER TABLE `tbanimal`
  MODIFY `idAnimal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbterritorio`
--
ALTER TABLE `tbterritorio`
  MODIFY `idTerritorio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbanimal`
--
ALTER TABLE `tbanimal`
  ADD CONSTRAINT `idTerritorio` FOREIGN KEY (`idTerritorio`) REFERENCES `tbterritorio` (`idTerritorio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
