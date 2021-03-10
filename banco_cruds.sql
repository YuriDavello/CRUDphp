-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jan-2021 às 01:10
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `c:\users\yurid\onedrive`
--
CREATE DATABASE IF NOT EXISTS `c:\users\yurid\onedrive` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `c:\users\yurid\onedrive`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `id_cliente` int(3) NOT NULL,
  `nome_cliente` varchar(99) NOT NULL,
  `telefone_cliente` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`id_cliente`, `nome_cliente`, `telefone_cliente`) VALUES
(1, 'Yuri Davello', '11937036278'),
(2, 'Alberto Silva', '11943234325'),
(3, 'Julia Souza', '11943564926'),
(4, 'Juliana Paes', '11954370065'),
(5, 'Guilherme Vilar', '11985434567'),
(6, 'Vinicius Moraes', '11932454160'),
(7, 'Pedro Luiz', '11945465432'),
(8, 'Ronaldo Sambinelli', '11923243565'),
(9, 'Lucas Montiel', '11904325648'),
(10, 'Kaue Scatigno', '11934321569');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE `tbfuncionario` (
  `numero_func` int(5) NOT NULL,
  `nome_func` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbfuncionario`
--

INSERT INTO `tbfuncionario` (`numero_func`, `nome_func`, `email`) VALUES
(1000, 'Joao Pedro Feitosa', 'joaopedrof@hotmail.com'),
(1001, 'Amanda Mota', 'amandamota@hotmail.com'),
(1002, 'Enzo Lima', 'enzolima@hotmail.com'),
(1003, 'Vicenzo Sacramento', 'vicenzosac@hotmail.com'),
(1004, 'Gabrielle Bertoni', 'gabriellebert@hotmail.com'),
(1005, 'Isabella Camargo', 'isacamargo@hotmail.com'),
(1006, 'Bianca Sartori', 'biancasartori@hotmail.com'),
(1007, 'Giovana Italiano', 'giovanaital@hotmail.com'),
(1008, 'Joao Lima', 'joaolima@hotmail.com'),
(1009, 'Emerson Santos', 'emersonsantos@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `codigo_produto` int(6) NOT NULL,
  `nome_produto` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`codigo_produto`, `nome_produto`) VALUES
(20550, 'Sapato Social Preto'),
(20551, 'Sapato Social Bege'),
(20552, 'Sapato Social cinza'),
(20553, 'Sapato Social Areia'),
(20554, 'Sapatenis Preto'),
(20555, 'Sapatenis Bege'),
(20556, 'Sapatenis Cinza'),
(20557, 'Sapatenis Areia'),
(20558, 'Sapato Esportivo Preto'),
(20559, 'Sapato Esportivo Bege');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD PRIMARY KEY (`numero_func`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`codigo_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `id_cliente` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  MODIFY `numero_func` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `codigo_produto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20560;
--

