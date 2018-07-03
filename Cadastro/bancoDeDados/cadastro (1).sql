-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jul-2018 às 16:21
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `job`
--

INSERT INTO `job` (`id`, `nome`) VALUES
(1, 'Programador'),
(2, 'Analista'),
(3, 'Dba'),
(4, 'Gerente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `listadeusuarios`
--

CREATE TABLE `listadeusuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dtNasc` date NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `job_id` int(10) UNSIGNED DEFAULT NULL,
  `salario` decimal(8,2) DEFAULT NULL,
  `matricula` varchar(255) DEFAULT NULL,
  `tipoContrato` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `listadeusuarios`
--

INSERT INTO `listadeusuarios` (`id`, `nome`, `dtNasc`, `endereco`, `job_id`, `salario`, `matricula`, `tipoContrato`) VALUES
(80, 'Luciano', '2018-06-07', 'Rua freijo', 3, '1200.00', '1', 'Estagio'),
(81, 'Kaio GonÃ§alves Carvalho', '1993-06-28', 'Avenida Paulista, 2300', 2, '2500.00', '80', 'CLT'),
(87, 'Kaio Carvalho', '2018-06-04', 'Rua bela cintra', 3, '2498.00', '59', 'Estagio'),
(88, 'Fabio Junior', '2018-06-14', 'Luis', 1, '1000.00', '50', 'CLT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'dcarvalhodgc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'dcarvalho@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listadeusuarios`
--
ALTER TABLE `listadeusuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `listadeusuarios`
--
ALTER TABLE `listadeusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
