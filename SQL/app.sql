-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Ago-2022 às 17:29
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `app`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, '', '', 'admin', '123'),
(21, 'matheus', 'matheus@matheus.com', 'matheus', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(22, 'isabelly', 'isabelly@isabelly.com', 'isabelly', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(23, 'kelia', 'kelia@kelia.com', 'kelia', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `resumo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `autor` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `data`, `resumo`, `texto`, `autor`) VALUES
(15, 'Belinha', '2020-10-18', 'Desaparecimento', 'Foi vista pela última vez próximo ao supermercado mega. \r\nNa rua 4, setor central ', 'Pedro Afonso'),
(16, 'Macarrão', '2022-08-08', 'Desaparecimento', 'Foi visto na praça central do setor Alegrino.', 'Priscilla Gomes'),
(17, 'Tita', '2022-08-02', 'Desaparecimento', 'Foi vista pela última vez na área rural de Pirenópolis.', 'Isabella Ferreira'),
(18, 'Bob', '2022-08-13', 'Desaparecimento', 'Visto pela última vez na porta do condomínio Portal do Vale em Aguas Claras. ', 'Mauro Bento'),
(19, 'Katarina', '2022-08-18', 'Desaparecimento', 'Vista por último no posto de gasolina em Ribeirão Claro.', 'Brenno Paixão'),
(20, 'Paçoca', '2022-08-18', 'Desaparecimento', 'Foi visto em cima do muro da escola Sizelisío Afonso em Brasília.', 'Paula Cardoso ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `validade` date NOT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `tipo`, `validade`, `descricao`) VALUES
(6, 'belinha', 'poodle', '2020-02-23', 'Cadela de 3 anos de idade, com uma mancha marrom na pata traseira.'),
(7, 'macarrão', 'vira-lata', '2022-08-05', 'Cachorro macho, de porte médio para grande, caramelo com manchas brancas e possui heterocromia nos olhos.'),
(8, 'tita', 'siamês', '2022-07-28', 'Gata com 8 anos, possui uma coleira com identificação rosa.  '),
(9, 'Bob', 'Shih-tzu', '2022-08-13', 'Cão macho de 3 anos, pequeno porte de cor preto com manchas brancas. No momento em que sumiu estava tosado com uma gravatinha verde.'),
(10, 'katarina', 'Basset Dachshund', '2022-08-17', 'Cadela de 7 meses da cor pintadinha, preta com branco, famoso \"salsicha\"'),
(11, 'Paçoca', 'Siberiano', '2022-06-30', 'Gato macho com 1 ano de vida, bastante peludo nas cores cinza e branco. Possui uma coleira azul sem identificação');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
