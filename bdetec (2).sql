-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/04/2024 às 17:42
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
  `descricaoAnimal` varchar(200) NOT NULL,
  `epocaAcasalamentoAnimal` varchar(100) NOT NULL,
  `mediaVidaAnimal` varchar(30) NOT NULL,
  `fk_idTerritorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbanimal`
--

INSERT INTO `tbanimal` (`idAnimal`, `nomeAnimal`, `imgAnimal`, `descricaoAnimal`, `epocaAcasalamentoAnimal`, `mediaVidaAnimal`, `fk_idTerritorio`) VALUES
(8, 'Leão', 'https://tntsports.com.br/__export/1670064893301/sites/esporteinterativo/img/2022/11/25/neymar-selexo.png_554688468.png', 'FEIO', 'Rei delas', '25 anos', 3),
(9, 'Macaco', '', 'asdasdasd', 'sadasd', 'asdsd', 3),
(10, 'Peixe', '', 'sadsad', 'dsa', 'dsa', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbterritorio`
--

CREATE TABLE `tbterritorio` (
  `idTerritorio` int(11) NOT NULL,
  `nomeTerritorio` varchar(100) NOT NULL,
  `imgTerritorio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbterritorio`
--

INSERT INTO `tbterritorio` (`idTerritorio`, `nomeTerritorio`, `imgTerritorio`) VALUES
(3, 'Territorio Terrestre', 'https://tntsports.com.br/__export/1670064893301/sites/esporteinterativo/img/2022/11/25/neymar-selexo.png'),
(4, 'Territorio Aquatico', 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1kEkb5.img?w=800&h=435&q=60&m=2&f=jpg'),
(5, 'Territorio Savo', 'https://s2-techtudo.glbimg.com/cNMdJED5GrmfdJ5gAxoSzW680OE=/0x0:6000x3375/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2023/Z/z/y1srEYSASwlicXprdrKw/mapa-mental-com-brainstorm-escrito-a-mao-colorido-4-.jpg'),
(7, 'asdsadasdd', 'https://www.frontiersin.org/files/Articles/905484/fonc-12-905484-HTML-r3/image_m/fonc-12-905484-g001.jpg'),
(8, 'dasdasdasdad', 'https://editorial.uefa.com/resources/025a-0e9f8eb911c7-6d6acd24dbfe-1000/cristiano_ronaldo_portugal_.jpeg'),
(9, 'SIUUUUUUUUUUUUU', 'https://th.bing.com/th/id/OIP.LbP0KENVLVPkyuw3_jZMNgHaEK?rs=1&pid=ImgDetMain');

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
(34, 'eae', 'dadd', '1123', '213213'),
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
(54, 'a', 'a', 'ae', 'ae'),
(55, 'ketelyn', 'pppp', 'penis', 'pppp');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbanimal`
--
ALTER TABLE `tbanimal`
  ADD PRIMARY KEY (`idAnimal`),
  ADD KEY `fk_territorio` (`fk_idTerritorio`);

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
  MODIFY `idAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbterritorio`
--
ALTER TABLE `tbterritorio`
  MODIFY `idTerritorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbanimal`
--
ALTER TABLE `tbanimal`
  ADD CONSTRAINT `fk_territorio` FOREIGN KEY (`fk_idTerritorio`) REFERENCES `tbterritorio` (`idTerritorio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
