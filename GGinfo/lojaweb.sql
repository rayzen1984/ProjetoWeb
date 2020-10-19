-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2020 às 03:39
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojaweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(5) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `cpf`, `endereco`, `telefone`, `email`) VALUES
(1, 'Luiz Felipe Cavalcanti', '2147483647', 'Rua ubiraci costa ferreir', '85', 'kenshinhimura1984@gmail.c'),
(2, 'fernando josé', '2147483647', 'asjdhajshd ajshdjashd', '85', 'kenshinhimura1984@gmail.c'),
(3, 'Luiz Felipe Cavalcanti', '2147483647', 'Rua ubiraci costa ferreir', '85 996598656', 'kenshinhimura1984@gmail.c'),
(4, 'Luiz Felipe Cavalcanti', '2147483647', 'Rua ubiraci costa ferreir', '85 996598656', 'kenshinhimura1984@gmail.c'),
(5, 'Luiz Felipe Cavalcanti', '05254279451', 'Rua ubiraci costa ferreir', '85 996598656', 'kenshinhimura1984@gmail.c'),
(6, 'Luiz Felipe Cavalcanti', '052.542.794', 'Rua ubiraci costa ferreir', '85 996598656', 'kenshinhimura1984@gmail.com'),
(7, 'Luiz Felipe Cavalcanti', '052.542.794', 'Rua ubiraci costa ferreira', '85 996598656', 'kenshinhimura1984@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dispositivos`
--

CREATE TABLE `dispositivos` (
  `id_dispositivo` int(5) NOT NULL,
  `fabricante` varchar(25) NOT NULL,
  `processador` varchar(25) NOT NULL,
  `memoria` varchar(10) NOT NULL,
  `hd` varchar(10) NOT NULL,
  `tela` varchar(15) NOT NULL,
  `quantidade` int(50) NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dispositivos`
--

INSERT INTO `dispositivos` (`id_dispositivo`, `fabricante`, `processador`, `memoria`, `hd`, `tela`, `quantidade`, `preco`, `tipo`) VALUES
(2, 'Asus', 'AMD Ryzen 7', '6gb', '1TB', '14', 50, '3.00', 'Laptop');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(5) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome`, `cpf`, `cargo`, `login`, `senha`) VALUES
(1, 'Luiz Felipe Cavalcanti', '2147483647', 'vendedor', 'rayzen', '!M0onwalke'),
(2, 'Luiz Felipe Cavalcanti', '052.542.794', 'vendedor', 'gatonego', 'hgfhgf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressora`
--

CREATE TABLE `impressora` (
  `id_impressora` int(5) NOT NULL,
  `fabricante` varchar(25) NOT NULL,
  `impressao` varchar(25) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `quantidade` int(50) NOT NULL,
  `preco` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `impressora`
--

INSERT INTO `impressora` (`id_impressora`, `fabricante`, `impressao`, `tipo`, `quantidade`, `preco`) VALUES
(3, 'Epson', 'Tanque de tinta', 'Multifuncional', 50, '3.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(5) NOT NULL,
  `cliente` int(5) NOT NULL,
  `funcionario` int(5) NOT NULL,
  `computador` int(5) NOT NULL,
  `impressora` int(5) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `preco` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `cliente`, `funcionario`, `computador`, `impressora`, `quantidade`, `preco`) VALUES
(1, 4, 2, 0, 0, 1, '3.00'),
(2, 5, 1, 0, 0, 1, '3.00'),
(3, 4, 2, 0, 0, 1, '3.00'),
(4, 4, 2, 0, 0, 1, '3.00'),
(5, 4, 2, 0, 0, 1, '3.00'),
(6, 3, 2, 0, 0, 1, '3.00'),
(7, 3, 2, 0, 0, 1, '3.00'),
(8, 2, 2, 2, 0, 1, '3.00'),
(9, 3, 2, 0, 0, 1, '203.00'),
(10, 2, 2, 2, 0, 1, '3.00'),
(11, 2, 2, 2, 3, 1, '3.00'),
(12, 4, 2, 0, 3, 1, '3.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`id_dispositivo`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices para tabela `impressora`
--
ALTER TABLE `impressora`
  ADD PRIMARY KEY (`id_impressora`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `id_dispositivo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `impressora`
--
ALTER TABLE `impressora`
  MODIFY `id_impressora` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
