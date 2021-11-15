-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/11/2021 às 01:33
-- Versão do servidor: 10.4.20-MariaDB
-- Versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agrosantairia`
--
CREATE DATABASE IF NOT EXISTS `agrosantairia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `agrosantairia`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `IDCliente` bigint(20) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `DataNasc` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telefone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`IDCliente`, `Nome`, `DataNasc`, `Email`, `Telefone`) VALUES
(0, 'Anônimo', '', '', ''),
(11, 'Nome Cliente', '2022-02-22', 'email@gmail.com', '(67) 99283-7982'),
(12, 'Larissa', '1998-04-27', 'email@gmail.com', '(67) 98889-8989');

-- --------------------------------------------------------

--
-- Estrutura para tabela `interessado`
--

DROP TABLE IF EXISTS `interessado`;
CREATE TABLE `interessado` (
  `IDInteressado` bigint(255) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `Mensagem` text NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `IDLogin` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `IDGroup` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`IDLogin`, `user`, `password`, `IDGroup`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `IDVenda` int(11) NOT NULL,
  `IDProduto` int(11) NOT NULL,
  `acao` varchar(20) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `logs`
--

INSERT INTO `logs` (`id`, `IDVenda`, `IDProduto`, `acao`, `data`) VALUES
(4, 11, 0, 'INSERT VENDA', '2021-11-14 20:22:50'),
(5, 0, 8, 'INSERT PRODUTO', '2021-11-14 20:32:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `IDProduto` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`IDProduto`, `Nome`) VALUES
(8, 'ui');

--
-- Gatilhos `produtos`
--
DROP TRIGGER IF EXISTS `insertProduto`;
DELIMITER $$
CREATE TRIGGER `insertProduto` AFTER INSERT ON `produtos` FOR EACH ROW INSERT INTO logs VALUES(null, 0, NEW.IDProduto, 'INSERT PRODUTO', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE `vendas` (
  `IDVenda` bigint(20) NOT NULL,
  `Produto` varchar(255) NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `Valor` decimal(7,2) NOT NULL,
  `Total` decimal(7,2) NOT NULL,
  `IDCliente` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`IDVenda`, `Produto`, `Quantidade`, `Valor`, `Total`, `IDCliente`) VALUES
(4, 'Feijão', 3, '23.00', '69.00', 11),
(11, 'Feijão', 2, '7.00', '14.00', 12);

--
-- Gatilhos `vendas`
--
DROP TRIGGER IF EXISTS `deleteVenda`;
DELIMITER $$
CREATE TRIGGER `deleteVenda` BEFORE DELETE ON `vendas` FOR EACH ROW INSERT INTO logs VALUES(null, OLD.IDVenda, "DELETE VENDA", NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insertVenda`;
DELIMITER $$
CREATE TRIGGER `insertVenda` AFTER INSERT ON `vendas` FOR EACH ROW INSERT INTO logs VALUES(null, NEW.IDVenda, 'INSERT VENDA', NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `updateVenda`;
DELIMITER $$
CREATE TRIGGER `updateVenda` AFTER UPDATE ON `vendas` FOR EACH ROW INSERT INTO logs VALUES(null, NEW.IDVenda, 'UPDATE VENDA', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `visitas`
--

DROP TABLE IF EXISTS `visitas`;
CREATE TABLE `visitas` (
  `IDVisita` int(11) NOT NULL,
  `Visitas_agrosantairia` int(11) NOT NULL DEFAULT 0,
  `Data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `visitas`
--

INSERT INTO `visitas` (`IDVisita`, `Visitas_agrosantairia`, `Data`) VALUES
(1, 6, '2021-11-14 22:57:10');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IDCliente`);

--
-- Índices de tabela `interessado`
--
ALTER TABLE `interessado`
  ADD PRIMARY KEY (`IDInteressado`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IDLogin`);

--
-- Índices de tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`IDProduto`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`IDVenda`),
  ADD KEY `IDClient` (`IDCliente`);

--
-- Índices de tabela `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`IDVisita`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `IDCliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `interessado`
--
ALTER TABLE `interessado`
  MODIFY `IDInteressado` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `IDLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `IDProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `IDVenda` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `visitas`
--
ALTER TABLE `visitas`
  MODIFY `IDVisita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `IDClient` FOREIGN KEY (`IDCliente`) REFERENCES `clientes` (`IDCliente`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
