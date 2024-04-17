-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/04/2024 às 20:59
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

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
  `imgAnimal` varchar(10000) NOT NULL,
  `descricaoAnimal` varchar(200) NOT NULL,
  `epocaAcasalamentoAnimal` varchar(100) NOT NULL,
  `mediaVidaAnimal` varchar(30) NOT NULL,
  `fk_idTerritorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbanimal`
--

INSERT INTO `tbanimal` (`idAnimal`, `nomeAnimal`, `imgAnimal`, `descricaoAnimal`, `epocaAcasalamentoAnimal`, `mediaVidaAnimal`, `fk_idTerritorio`) VALUES
(8, 'Leão', 'https://upload.wikimedia.org/wikipedia/commons/7/73/Lion_waiting_in_Namibia.jpg', 'Rei da floresta, Carnivoro', 'Rei delas', '25 anos', 3),
(9, 'Mamaco', 'https://ichef.bbci.co.uk/ace/ws/640/amz/worldservice/live/assets/images/2015/09/26/150926165742__85730600_monkey2.jpg', 'Onivoro', 'sadasd', 'asdsd', 3),
(10, 'Elefante', 'https://braziljournal.com/wp-content/uploads/2023/11/elefante.jpeg', 'Herbivoro', 'dsa', '48 anos', 3),
(12, 'Tubarão Martelo', 'data:image/jpeg;base64,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', 'Carnivoro', '', '30 anos', 4),
(13, 'Cavalo-marinho', 'https://www.infoescola.com/wp-content/uploads/2008/05/cavalo-marinho-109485932.jpg', 'Carnivoro', '', '7 anos', 4),
(14, 'Penguin', 'https://i.natgeofe.com/k/88de42b8-764c-40d2-89ee-e72d55dc95b8/emperor-penguin-chicks.jpg', 'Carnivoro', '', '20 anos', 4),
(15, 'Arara-azul-grande', 'https://s1.static.brasilescola.uol.com.br/be/conteudo/images/arara-azul.jpg', 'Herbivoro', '', '40 anos', 5),
(16, 'Gavião', 'https://www.reinodasaves.club/wp-content/uploads/2022/08/Mmaiores-aves-de-rapina-Aguia-calva-e1661304938615.jpg', 'Carnivoro', '', '25 anos', 5),
(17, 'João-de-barro', 'https://s2-g1.glbimg.com/ULHEAA4M7_7sRgzOil-zBc4CH-M=/0x0:1200x800/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2019/p/a/0OJgOYT5SCh9sYDa9tFQ/joao-de-barro-ninho.jpg', 'Onivoro', '', '3 anos', 5);

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
(3, 'Territorio Terrestre', 'https://cdn.pixabay.com/photo/2020/03/26/10/08/the-nature-of-the-4969925_1280.jpg'),
(4, 'Territorio Aquatico', 'https://cdn.pixabay.com/photo/2018/10/28/19/41/sea-3779717_960_720.jpg'),
(5, 'Territorio Aéreo', 'https://img.nsctotal.com.br/wp-content/uploads/2023/10/Ceu-Azul-944x531.jpg');

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
(55, 'ketelyn', 'pppp', 'penis', 'pppp'),
(56, 'Bruno', 'Bruno@gmail.com', '1234', '11111111111111');

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
  MODIFY `idAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tbterritorio`
--
ALTER TABLE `tbterritorio`
  MODIFY `idTerritorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
