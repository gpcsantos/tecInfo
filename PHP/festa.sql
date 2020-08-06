-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jul-2020 às 15:09
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `festa`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `amigosCidade` (`cidade` CHAR(40))  SELECT a.pk_id, nome, email FROM tb_amigos as a, tb_cidade as c
WHERE c.pk_id=a.fk_cidade AND c.nomeCidade = cidade$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `amigosValeParaiba` ()  SELECT nome, email, procura
FROM tb_amigos as a, tb_procura as p, rl_procura_amigos as rl
WHERE (a.pk_id=rl.fk_amigos AND p.pk_id=rl.fk_procura) 
AND (p.procura like 'Amig%'
OR p.procura like 'Relaciona%'
OR p.procura like 'Namora%'
OR p.procura like 'fazer amigos')
ORDER BY nome$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rl_interesses_amigos`
--

CREATE TABLE `rl_interesses_amigos` (
  `fk_amigos` int(11) DEFAULT NULL,
  `fk_interesses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `rl_interesses_amigos`
--

INSERT INTO `rl_interesses_amigos` (`fk_amigos`, `fk_interesses`) VALUES
(1, 29),
(1, 38),
(2, 38),
(2, 18),
(2, 34),
(3, 38),
(3, 34),
(4, 15),
(3, 14),
(5, 20),
(5, 18),
(5, 37),
(6, 18),
(6, 38),
(6, 8),
(7, 15),
(7, 34),
(8, 15),
(8, 31),
(9, 31),
(9, 18),
(10, 34),
(10, 11),
(11, 10),
(11, 38),
(11, 3),
(12, 18),
(12, 29),
(13, 39),
(13, 15),
(14, 18),
(14, 34),
(14, 45),
(15, 18),
(15, 41),
(16, 18),
(16, 37),
(16, 41),
(17, 47),
(17, 34),
(17, 9),
(18, 23),
(18, 47),
(18, 34),
(19, 47),
(19, 29),
(19, 17),
(20, 22),
(20, 29),
(20, 17),
(21, 25),
(21, 35),
(21, 46),
(22, 21),
(22, 34),
(22, 47),
(23, 24),
(23, 3),
(23, 47),
(24, 47),
(24, 3),
(25, 47),
(25, 3),
(25, 29),
(26, 21),
(26, 48),
(26, 34),
(27, 47),
(27, 34),
(22, 29),
(24, 49),
(25, 36),
(26, 21),
(26, 48),
(26, 47),
(26, 29),
(26, 49),
(27, 47),
(27, 34),
(27, 29),
(28, 28),
(28, 34),
(28, 47),
(29, 26),
(29, 47),
(29, 29),
(29, 34),
(30, 47),
(30, 49),
(30, 29),
(30, 3),
(31, 23),
(31, 3),
(31, 46),
(31, 47),
(32, 32),
(32, 7),
(32, 47),
(33, 33),
(33, 12),
(34, 6),
(34, 5),
(35, 2),
(35, 30),
(36, 13),
(36, 40),
(37, 16),
(37, 39),
(38, 42),
(38, 4),
(39, 42),
(39, 44),
(40, 42),
(40, 19),
(41, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rl_procura_amigos`
--

CREATE TABLE `rl_procura_amigos` (
  `fk_amigos` int(11) DEFAULT NULL,
  `fk_procura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `rl_procura_amigos`
--

INSERT INTO `rl_procura_amigos` (`fk_amigos`, `fk_procura`) VALUES
(1, 26),
(1, 16),
(2, 26),
(2, 13),
(2, 8),
(3, 26),
(3, 18),
(3, 9),
(4, 11),
(4, 1),
(5, 15),
(5, 13),
(6, 26),
(6, 6),
(6, 13),
(7, 11),
(7, 18),
(8, 11),
(8, 17),
(9, 13),
(9, 17),
(10, 18),
(11, 7),
(11, 26),
(11, 4),
(12, 13),
(12, 16),
(13, 11),
(13, 13),
(14, 13),
(14, 28),
(15, 13),
(15, 27),
(16, 23),
(16, 27),
(17, 12),
(18, 25),
(19, 25),
(20, 12),
(21, 12),
(21, 30),
(22, 25),
(23, 12),
(24, 25),
(25, 12),
(26, 25),
(27, 25),
(28, 12),
(29, 25),
(30, 25),
(31, 12),
(32, 2),
(33, 24),
(34, 2),
(35, 2),
(36, 10),
(36, 24),
(37, 21),
(38, 5),
(38, 31),
(39, 22),
(39, 19),
(40, 14),
(40, 29),
(41, 20),
(42, 3),
(43, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_amigos`
--

CREATE TABLE `tb_amigos` (
  `pk_id` int(11) NOT NULL,
  `nome` char(50) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `fk_cidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_amigos`
--

INSERT INTO `tb_amigos` (`pk_id`, `nome`, `dataNascimento`, `email`, `fk_cidade`) VALUES
(1, 'Evelyn Ruby Cassidy', '1986-11-25', 'supernatural666@gmail.com', 1),
(2, 'Daryl Norman Dixon', '1969-01-06', 'crossbowOP@hotmail.com', 2),
(3, 'Jesse Bruce Pinkman', '1979-08-29', 'MethamBlue99@gmail.com', 3),
(4, 'Felipe Massa', '1981-04-25', 'FelipePassa@bol.com', 1),
(5, 'Leon Scott Kennedy', '1978-12-15', 'Adda@hotmail.com', 4),
(7, 'Kylian Mbappé Lottin', '1998-12-20', 'Mbappelão@yahoo.com', 6),
(8, 'Dwayne Douglas Johnson', '1972-05-02', 'THEROCK@outlook.com', 7),
(9, 'Jack Chan Kong-sang', '1954-04-07', 'kungfusão@gmail.com', 8),
(10, 'Brian Johnson', '1947-10-05', 'acdc@bol.com', 9),
(11, 'Jon Snow Harington', '1986-12-26', 'WinterIsComing@outlook.com', 22),
(12, 'Lorraine Warren', '1973-08-06', 'bathsheba@gmail.com', 13),
(13, 'Roberto Nascimento', '1976-06-27', 'pedeprasair06@gmail.com', 9),
(14, 'Elon Reeve Musk', '1971-06-28', 'spaceteslaX@gmail.com', 1),
(15, 'Carrie Trinity Moss', '1975-08-21', 'matrix@gmail.com', 10),
(16, 'Gamora Saldanã', '1983-04-09', 'Guardiões@hotmail.com', 11),
(17, 'Antonio Carlos Silva', '1984-05-03', 'acs213@hotmail.com', 12),
(18, 'Maria Clara dos Santos', '1989-02-22', 'mariacsantos@gmail.com', 13),
(19, 'Fabiano Pereira', '1978-07-28', 'fabianop1234@gmail.com', 14),
(20, 'Letícia Oliveira', '2000-02-14', 'leleoliveira@hotmail.com', 7),
(21, 'Gabriel Marcondes', '1998-12-11', 'gmarcondes@outlook.com', 15),
(22, 'Dener Gregorio', '1993-10-07', 'deninhogg@gmail.com', 16),
(24, 'Elizabeth Thiemy', '1990-11-05', 'beththiemy@gmail.com', 17),
(25, 'Maria Alice Morais', '2001-04-02', 'mariaam0199@gmail.com', 5),
(26, 'Rafael Schoant', '1993-10-07', 'rafaelschoant@hotmail.com', 16),
(27, 'Raquel Guerra', '1992-05-01', 'raquelguer221@hotmail.com', 12),
(28, 'Carlos Barbosa', '2000-12-21', 'carlosbarbarosa@outlook.com', 9),
(29, 'Loreta Amaro Santos', '1999-01-22', 'loretaas@gmail.com', 4),
(30, 'Regina Maura Amauri', '1975-04-10', 'reginamamauri@hotmail.com', 18),
(31, 'Carlos Alberto Tompson', '1993-10-17', 'carlosat342@gmail.com', 19),
(32, 'Rafael Pasini', '1984-09-28', 'rafapasini@yahoo.com.br', 13),
(33, 'Charles Fernandes', '1985-05-26', 'charles_fernandes@bol.com.br', 5),
(34, 'Danilo Dozinete', '1985-02-12', 'dan_1985@hotmail.com', 5),
(35, 'Diego Assunção', '1983-10-07', 'diego_baby@hotmail.com', 20),
(36, 'Luiz Gustavo', '1984-01-17', 'luiz_guto@gmail.com', 20),
(37, 'Daniel Ribeiro', '1986-02-20', 'dani_miranda@gmail.com', 21),
(38, 'Fernando de Godoy', '1982-05-21', 'fedigodoy@gmail.com', 12),
(39, 'Marcelo Galvão', '1978-01-19', 'marcelo_gals@hotmail.com', 12),
(40, 'Glauco Santos', '1980-05-30', 'glauco_santos@yahoo.com.br', 12),
(41, 'Sandra Costa', '1975-11-29', 'san_costa@gmail.com', 12),
(42, 'Marcos Aurélio', NULL, 'marcos-au@gmail.com', NULL),
(43, 'Ricardo Santos Silva', '1978-09-25', 'ricardossilva@hotmail.com', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cidade`
--

CREATE TABLE `tb_cidade` (
  `pk_id` int(11) NOT NULL,
  `nomeCidade` char(40) DEFAULT NULL,
  `fk_estado` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cidade`
--

INSERT INTO `tb_cidade` (`pk_id`, `nomeCidade`, `fk_estado`) VALUES
(1, 'São Paulo', 1),
(2, 'Cunha', 1),
(3, 'Queimados', 2),
(4, 'Ouro Preto', 3),
(5, 'Tremembé', 1),
(6, 'Itaúna', 3),
(7, 'Curitiba', 4),
(8, 'Florianópolis', 5),
(9, 'Rio de Janeiro', 2),
(10, 'São Luiz do Paritinga', 1),
(11, 'Varginha', 3),
(12, 'Taubaté', 1),
(13, 'Caçapava', 1),
(14, 'Lagoinha', 1),
(15, 'Lavras', 3),
(16, 'Brusque', 5),
(17, 'Paraty', 2),
(18, 'Jaraguá do Sul', 5),
(19, 'Pomerode', 5),
(20, 'Ubatuba', 1),
(21, 'Pindamonhangaba', 1),
(22, 'Urupema', 5),
(23, 'Arujá', 1),
(24, 'Caieiras', 1),
(25, 'Itatiaia', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estado`
--

CREATE TABLE `tb_estado` (
  `pk_id` int(11) NOT NULL,
  `nomeEstado` char(40) DEFAULT NULL,
  `UF` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_estado`
--

INSERT INTO `tb_estado` (`pk_id`, `nomeEstado`, `UF`) VALUES
(1, 'São Paulo', 'SP'),
(2, 'Rio de Janeiro', 'RJ'),
(3, 'Minas Gerais', 'MG'),
(4, 'Paraná', 'PR'),
(5, 'Santa Catarina', 'SC'),
(6, 'Rio Grande do SUL', 'RS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_interesses`
--

CREATE TABLE `tb_interesses` (
  `pk_id` int(11) NOT NULL,
  `interesses` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_interesses`
--

INSERT INTO `tb_interesses` (`pk_id`, `interesses`) VALUES
(1, 'Administração de Empresas'),
(2, 'Aeromodelismo'),
(3, 'animais'),
(4, 'Arquitetura'),
(5, 'Baladas'),
(6, 'Bebidas'),
(7, 'Bolsa de Valores e Viagem'),
(8, 'bordar'),
(10, 'caçar'),
(9, 'cachorro'),
(11, 'cantar'),
(12, 'Carros'),
(13, 'Cursos Militares'),
(14, 'drogas'),
(15, 'esportes'),
(16, 'Fazenda'),
(17, 'ficar com amigos'),
(18, 'filmes'),
(19, 'Fotografia'),
(20, 'games'),
(21, 'Gosta de computador'),
(22, 'Gosta de ficar em casa'),
(23, 'Gosta de ler'),
(24, 'Gosta de música'),
(25, 'Gosta de pedalar'),
(26, 'Gosta de pintar'),
(28, 'Gosta de video game'),
(29, 'ler'),
(30, 'Livros'),
(31, 'mma'),
(32, 'Montain Bike'),
(33, 'Moto'),
(34, 'músicas'),
(49, 'Ouvir música'),
(35, 'passear com seus cachorros'),
(36, 'pedalar'),
(44, 'Programação'),
(37, 'quadrinhos'),
(38, 'séries'),
(39, 'Sítios'),
(40, 'Surf'),
(41, 'tecnologia'),
(42, 'Tecnologia da Informação'),
(43, 'Tecnologia da Informação'),
(45, 'veiculos'),
(46, 'ver TV'),
(47, 'viajar'),
(48, 'video game');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_procura`
--

CREATE TABLE `tb_procura` (
  `codigo` int(11) NOT NULL,
  `procura` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_procura`
--

INSERT INTO `tb_procura` (`codigo`, `procura`) VALUES
(1, 'fazer amigos'),
(2, 'realcionamento sério'),
(3, 'namorada'),
(4, 'relacionamento com mulheres'),
(5, 'emprego'),
(6, 'AutoCad'),
(7, 'novas amizades'),
(8, 'Revit'),
(9, 'PHP'),
(10, 'MySQL'),
(11, 'Fotografia'),
(12, 'Viagens'),
(13, 'nada'),
(14, 'séries'),
(15, 'ler'),
(16, 'filmes'),
(17, 'Carol'),
(18, 'músicas'),
(19, 'dorgas'),
(20, 'esporte'),
(21, 'mma'),
(22, 'caçar'),
(23, 'animais'),
(24, 'veiculos'),
(25, 'tecnologia'),
(26, 'quadrinhos'),
(27, 'Alonso'),
(28, 'bordar'),
(29, 'games'),
(30, 'amigos para conversar');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_amigos`
--
ALTER TABLE `tb_amigos`
  ADD PRIMARY KEY (`pk_id`),
  ADD KEY `idx_nome` (`nome`),
  ADD KEY `fk_cidade` (`fk_cidade`);

--
-- Índices para tabela `tb_cidade`
--
ALTER TABLE `tb_cidade`
  ADD PRIMARY KEY (`pk_id`),
  ADD KEY `idx_nomeCidade` (`nomeCidade`),
  ADD KEY `fk_estado_01` (`fk_estado`);

--
-- Índices para tabela `tb_estado`
--
ALTER TABLE `tb_estado`
  ADD PRIMARY KEY (`pk_id`);

--
-- Índices para tabela `tb_interesses`
--
ALTER TABLE `tb_interesses`
  ADD PRIMARY KEY (`pk_id`),
  ADD KEY `idx_interesse` (`interesses`);

--
-- Índices para tabela `tb_procura`
--
ALTER TABLE `tb_procura`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_amigos`
--
ALTER TABLE `tb_amigos`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `tb_cidade`
--
ALTER TABLE `tb_cidade`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `tb_estado`
--
ALTER TABLE `tb_estado`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_interesses`
--
ALTER TABLE `tb_interesses`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `tb_procura`
--
ALTER TABLE `tb_procura`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_amigos`
--
ALTER TABLE `tb_amigos`
  ADD CONSTRAINT `tb_amigos_ibfk_1` FOREIGN KEY (`fk_cidade`) REFERENCES `tb_cidade` (`pk_id`);

--
-- Limitadores para a tabela `tb_cidade`
--
ALTER TABLE `tb_cidade`
  ADD CONSTRAINT `fk_estado_01` FOREIGN KEY (`fk_estado`) REFERENCES `tb_estado` (`pk_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
