-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Abr-2019 às 17:23
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadcategoria`
--

CREATE TABLE `cadcategoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadcategoria`
--

INSERT INTO `cadcategoria` (`id`, `nome`) VALUES
(1, 'wellington'),
(2, 'wellington alves'),
(3, 'Wellington rocha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadentrada`
--

CREATE TABLE `cadentrada` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `fornecedor` varchar(30) NOT NULL,
  `quantidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadentrada`
--

INSERT INTO `cadentrada` (`id`, `data`, `categoria`, `produto`, `fornecedor`, `quantidade`) VALUES
(1, '2019-01-03', 'hardware', 'hardware', 'asus', '17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadfornecedor`
--

CREATE TABLE `cadfornecedor` (
  `ID` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadfornecedor`
--

INSERT INTO `cadfornecedor` (`ID`, `nome`, `telefone`, `estado`, `cidade`) VALUES
(1, 'wellington', '4132713926', '3', 'curitiba'),
(2, 'wellington', '4132713926', '3', 'curitiba'),
(3, 'wellington', '4132713926', '2', 'curitiba'),
(4, 'wellington', '4132713926', '3', 'curitiba'),
(5, 'wellington', '4132713926', '3', 'curitiba'),
(6, 'wellington', '4132713926', '3', 'curitiba'),
(7, 'wellington', '4132453127', '3', 'curitiba'),
(8, 'wellington', '4132453127', '1', 'curitiba'),
(9, 'wellington', '4132453127', '4', 'curitiba'),
(10, 'wellington', '4132453127', '4', 'curitiba'),
(11, 'wellington', '1242343342', '1', 'curitiba'),
(12, 'wellington', '232424242', '1', 'curitiba'),
(13, 'wellington', '132323', 'MG', 'curitiba'),
(14, 'wellington', '4132763144', 'RJ', 'curitiba'),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, 'wellington', '4132675321', 'PR', 'rio de janeiro'),
(20, '', '', '', ''),
(21, 'wellington', '4131674238', 'PR', 'araucaria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadprodutos`
--

CREATE TABLE `cadprodutos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `estoque_minimo` varchar(50) NOT NULL,
  `estoque_atual` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadprodutos`
--

INSERT INTO `cadprodutos` (`id`, `categoria`, `nome`, `estoque_minimo`, `estoque_atual`) VALUES
(1, 'informatica', 'wellington', '15', '35'),
(2, 'hardware', 'wellington alves', '7', '11'),
(3, 'informatica', 'wellington rocha', '3', '17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadretirante`
--

CREATE TABLE `cadretirante` (
  `ID` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadretirante`
--

INSERT INTO `cadretirante` (`ID`, `nome`, `empresa`) VALUES
(1, 'wellington', 'Negrao'),
(2, 'wellington', 'Ferragens negrao'),
(3, 'wellington', 'andriatt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadsaida`
--

CREATE TABLE `cadsaida` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `produto` varchar(30) NOT NULL,
  `retirante` text NOT NULL,
  `quantidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadsaida`
--

INSERT INTO `cadsaida` (`id`, `data`, `categoria`, `produto`, `retirante`, `quantidade`) VALUES
(1, '0000-00-00', '', '', '', ''),
(2, '0000-00-00', '', '', '', ''),
(3, '0000-00-00', '', '', '', ''),
(4, '0000-00-00', '', '', '', ''),
(5, '0000-00-00', '', '', '', ''),
(6, '0000-00-00', '', '', '', ''),
(7, '0000-00-00', '', '', '', ''),
(8, '0000-00-00', '', '', '', ''),
(9, '0000-00-00', '', '', '', ''),
(10, '0000-00-00', '', '', '', ''),
(11, '0000-00-00', '', '', '', ''),
(12, '2015-03-01', 'acessorios', 'hardware', 'wellington', '5'),
(13, '0000-00-00', '', '', '', ''),
(14, '2023-03-01', 'software', 'hardware', 'wellington', '5'),
(15, '2017-05-07', 'software', 'software', 'wellington', '5'),
(16, '2017-05-07', 'acessorios', 'acessorios', 'wellington alves', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadcategoria`
--
ALTER TABLE `cadcategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadentrada`
--
ALTER TABLE `cadentrada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadfornecedor`
--
ALTER TABLE `cadfornecedor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cadprodutos`
--
ALTER TABLE `cadprodutos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadretirante`
--
ALTER TABLE `cadretirante`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cadsaida`
--
ALTER TABLE `cadsaida`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadcategoria`
--
ALTER TABLE `cadcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cadentrada`
--
ALTER TABLE `cadentrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cadfornecedor`
--
ALTER TABLE `cadfornecedor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cadprodutos`
--
ALTER TABLE `cadprodutos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cadretirante`
--
ALTER TABLE `cadretirante`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cadsaida`
--
ALTER TABLE `cadsaida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
