-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Mar-2017 às 15:43
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
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(40) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `cpf` varchar(40) NOT NULL,
  `telefone` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `nomeModelo` varchar(40) NOT NULL,
  `cor` varchar(40) NOT NULL,
  `ano` int(5) NOT NULL,
  `quilometragem` varchar(40) NOT NULL,
  `portas` int(10) NOT NULL,
  `combustivel` varchar(40) NOT NULL,
  `cambio` varchar(40) NOT NULL,
  `finaldaplaca` varchar(40) NOT NULL,
  `opcionais` varchar(40) NOT NULL,
  `observacoes` varchar(140) NOT NULL,
  `preco` varchar(40) NOT NULL,
  `financiamento` varchar(40) NOT NULL,
  `caminho_foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
