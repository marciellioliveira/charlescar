-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Mar-2017 às 00:52
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concessionaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`nome`, `sobrenome`, `email`, `senha`) VALUES
('Joelma', 'Juliana', 'jo@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `sobrenome`, `email`, `senha`) VALUES
('Dener', 'Carvalho', 'dener@gmail.com', '123'),
('Joelma', 'Juliana', 'jo@gmail.com', '123'),
('Marcielli', 'Oliveira', 'ma@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `sobrenome`, `email`, `senha`) VALUES
('Dener', 'Carvalho', 'dener@gmail.com', '123'),
('Joelma', 'Juliana', 'jo@gmail.com', '123'),
('Marcielli', 'Oliveira', 'ma@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `modelo` varchar(40) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `preco` varchar(40) NOT NULL,
  `caminho_foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`modelo`, `categoria`, `preco`, `caminho_foto`) VALUES
('CrossFox', 'Cross', 'R$ 15.000', 'nao'),
('Fox', 'Cross', 'R$ 20.000', 'nao'),
('Fusca', 'Sedan', 'R$ 35.000', 'nao'),
('CrossFox', 'Hatch', 'R$100.000', 'nao'),
('Fusca', 'Cross', 'R$ 40.000', 'nao'),
('dsa', 'dsa', 'das', 'strangerthings-1.jpg'),
('', '', '', ''),
('teste', 'test', 'fsdfsd', 'strangerthings-1.jpg'),
('outro teste', 'outro test', 'outro teste', '4b446800059631b4b7c0f0b8cb8c5f3e.jpg'),
('Teste', 'teste', 'teste', 'saveiro-cross-cd-1-6-msi--completo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
