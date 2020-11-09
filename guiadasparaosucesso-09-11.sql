-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2020 às 21:38
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
-- Banco de dados: `guiadasparaosucesso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anunciantes`
--

CREATE TABLE `anunciantes` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logradouro` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complemento` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `cidade` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `divulgaendereco` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inicioplano` date DEFAULT NULL,
  `fimplano` date DEFAULT NULL,
  `plano` int(10) DEFAULT NULL,
  `whatsapp` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logotipo` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(5) DEFAULT NULL COMMENT '1.ativo / 2.inativo',
  `datacadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `anunciantes`
--

INSERT INTO `anunciantes` (`id`, `titulo`, `categoria`, `telefone`, `logradouro`, `numero`, `bairro`, `complemento`, `cep`, `datanascimento`, `cidade`, `estado`, `divulgaendereco`, `inicioplano`, `fimplano`, `plano`, `whatsapp`, `email`, `facebook`, `instagram`, `linkedin`, `descricao`, `senha`, `imagem`, `logotipo`, `video`, `status`, `datacadastro`) VALUES
(4, 'Nattu Orgânico', '10', '43  99993-5487', 'Rua Ituituaba', '666', 'Jd. Alvorada', '', '', '0000-00-00', 'Londrina', 'PR', 'sim', '2020-09-29', '2020-09-30', 2, '43  99993-5487', 'slaibi760@gmail.com', 'https://web.facebook.com/slaibifit2014', 'https://www.instagram.com/nattuorganico/', '', 'A Nattu Orgânico se preocupa com o bem estar e a qualidade dos alimentos que estamos consumindo. Apoiamos a idéia da comida natural, vegana e orgânica', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '1604619102.jpg', '1604618609.jpg', '', 1, '2020-09-28 10:28:16'),
(12, 'Resma Design', '11', '4399819-9001', 'Rua Prefeito Hugo Cabral ', '167', 'Centro', '', '', '0000-00-00', 'Londrina', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '4399819-9001', 'resmadesign@gmail.com', 'https://web.facebook.com/resmadesign', 'https://www.instagram.com/resmadesign/', '', 'Diretora criativa: Paula Napo\r\nEspecialistas em marcas. Identidade Visual: empresas, profissionais, eventos - Wedding Branding\r\nRegistro/Gestão de Marca', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '1602645892.jpg', '1603812176.jpg', '', 1, '2020-10-03 19:58:49'),
(22, 'Paula Napo', '15', '+554330296367', 'Rua Prefeito Hugo Cabral ', '167', 'Centro', '', '', '0000-00-00', 'Londrina', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '4399819-9001', 'paulanapo@gmail.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '1603808794.jpg', NULL, '', 2, '2020-10-14 17:06:10'),
(28, 'Rita Bastos Cosméticos Naturais', '33', '43984261482', 'Rua Benjamin Franklin', '300 ', 'Parque Jamaica', '', '', '0000-00-00', 'LONDRINA', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '43984261482', 'ritabastos570@gmail.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '1603812065.jpg', '1603812321.jpg', '', 1, '2020-10-17 14:56:34'),
(40, 'LUIZA SANTOS', '8', '43996636546', 'RUA  JOSE ROQUE SALTON,', '983', 'Terra Bonita', NULL, NULL, NULL, 'LONDRINA', 'PARANA', '1', NULL, NULL, NULL, '', 'luapsan@gmail.com', NULL, NULL, NULL, NULL, '2239da696212d94d495a250d9a39103f', '1603810229.jpg', NULL, NULL, 1, '2020-10-19 15:49:04'),
(41, 'Studio Kelly Moura', '9', '43 98483 8018', 'Rua Vasco Cinquini', '395', 'Jd Santos Dumont', '', '', '0000-00-00', 'Londrina', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '43 98483 8018', 'studiokellymoura@gmail.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '1603811907.jpg', NULL, '', 1, '2020-10-22 01:49:08'),
(44, 'Melissa Sessak', '14', '', 'Rua Maria Lucia da Paz', '450 ', 'Gleba Palhano', 'apto 601', '86050-470', '1978-07-28', 'Londrina ', 'Paraná', '1', NULL, NULL, NULL, '43984016969', 'melissasessak@gmail.com', 'https://www.facebook.com/melissasessak', 'https://www.instagram.com/melissa.sessak/', '', 'Social Media ', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '1603809583.jpg', '1603729488.jpg', NULL, 1, '2020-10-26 16:16:52'),
(45, 'Fernanda Felix Fotografia', '31', '(43) 999514874', 'Rua Caracas', '1200', 'Santa Rosa', 'Torre 2 Apto 502', '86050-070', '1989-05-15', 'Londrina', 'Paraná', 'sim', '0000-00-00', '0000-00-00', 4, '(43) 999514874', 'fernandamfelix@gmail.com', 'https://www.facebook.com/fernandafelix.arqfoto', 'https://www.instagram.com/fernandafelix.fotografia', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '1603999122.jpg', '1603999279.jpg', '', 1, '2020-10-28 13:24:36'),
(47, 'Aline Najla Abdo Cassin', '10', '43996032839', 'Rua Pará', '2072', 'centro', '', '', '0000-00-00', 'LONDRINA', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '', 'alinepilates18@gmail.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '', NULL, '', 1, '2020-10-28 23:14:32'),
(48, 'CAROLINA CANTONI', '32', '43991914271', 'AV RIO DE JANEIRO', '1375', 'CENTRO', '', '', '0000-00-00', 'LONDRINA', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '43991914271', 'cantoni.carolina@gmail.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '1604620022.jpg', '1604618880.jpg', '', 1, '2020-10-28 23:48:47'),
(49, 'Debora Mariani', '22', '(43) 99146-0867', 'Rua mario novaes', '133', 'Jd pacaembu', NULL, NULL, NULL, 'Londrina', 'Parana', '1', NULL, NULL, NULL, '(43) 99146-0867', 'marianidebora@hotmail.com', NULL, NULL, NULL, NULL, 'cef135449afd5d6c29703e4b2c5d6a9e', NULL, NULL, NULL, 1, '2020-10-29 00:59:37'),
(50, 'Rosmelia Kerber - Saboaria Artesanal Ancestral', '33', '4333295343', 'Rua Nelson de Godoy Pereira', '160', 'jd veneza', '', '', '0000-00-00', 'Londrina', 'Paraná', 'sim', '0000-00-00', '0000-00-00', 4, '43991508266', 'rosmeliakerber@hotmail.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '', NULL, '', 1, '2020-10-29 11:36:53'),
(52, 'Trink Gestão', '31', '43996473619', '', '', '', '', '', '0000-00-00', 'Londrina', 'Paraná', 'sim', '0000-00-00', '0000-00-00', 4, '43996473619', 'contato@trinkgestao.com.br', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '', NULL, '', 2, '2020-10-29 23:11:05'),
(53, 'TAISSA SESSAK RIBEIRO', '8', '43999208020', 'Rua Érico Veríssimo', '200', 'Centro', '', '', '0000-00-00', 'Apucarana', 'Pr', 'sim', '0000-00-00', '0000-00-00', 4, '+554399208020', 'taissasr@gmail.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '', NULL, '', 1, '2020-10-29 23:38:51'),
(54, 'Luciana Valejo', '10', '(43) 99687-4080', 'E: Uruguai', '1744', 'Centro', '', '', '0000-00-00', 'Londrina', 'Paraná', 'sim', '0000-00-00', '0000-00-00', 4, '(43)996874080', 'lucianavalejo8@gmail.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '', NULL, '', 2, '2020-10-30 17:24:29'),
(59, 'Cristina Ricardo Gonçalves', '27', '43 998051505', 'Rua Mário oncken', '90', 'Jardim das Américas', '', '', '0000-00-00', 'Londrina', 'Pr', 'sim', '0000-00-00', '0000-00-00', 3, '43998051505', 'crysgoncalvess@gmail.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '', NULL, '', 1, '2020-10-30 23:34:49'),
(61, 'Bianca Baptista Ferreira Costa ', '31', '4396229581', 'Rua Carlos Masso ', '163', 'Santa Rita 5', '', '', '0000-00-00', 'LONDRINA', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '43 9 96229581', 'mixterralondrina@gmail.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '', NULL, '', 1, '2020-10-31 05:23:59'),
(64, 'Kauane Marcela da Silva Parra', '11', '', 'Rua Luiz Vieira Sagrilo', '111', 'São Paulo II', '', '', '0000-00-00', 'Londrina', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '43988218842', 'kauparra@icloud.com', '', '', '', '', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '', NULL, '', 1, '2020-10-31 17:01:14'),
(67, 'GPS', '34', '', 'Rua Pref. Hugo Cabral', '168', 'centro', '', '', '0000-00-00', 'Londrina', 'PR', 'nao', '0000-00-00', '0000-00-00', 2, '', 'contato@guiadasparaosucesso.com.br', 'https://web.facebook.com/GPS-Guiadas-para-o-Sucesso-101191021265160', 'https://www.instagram.com/guiadasparaosucesso/', '', 'Mulheres que se completam e não competem, o grupo traz como principal missão ser recurso de aprendizado e desenvolvimento pessoal para que vivamos no máximo potencial em 5 pilares da nossa vida:\r\nInteligência Emocional,\r\nProsperidade Financeira,\r\nSaúde Inabalável,\r\nRelacionamentos Poderosos e\r\nEspiritualidade.\r\nAlém de oportunidade de networking e divulgar sua empresa, de maneira ética e nessa relação ganha x ganha onde mulheres ajudam mulheres.\r\nÁguias voam com águias!', 'fd4b685eb84bf2ba0c26fd3c82f577b5', '1604619547.jpg', '1604619334.jpg', '', 1, '2020-11-02 22:40:58'),
(69, 'Daniele', '29', '33271183', 'Rua Fábio Luciano Magalhães ', '214', 'Jardim São Paulo ', NULL, NULL, NULL, 'Londrina ', 'Paraná ', NULL, NULL, NULL, NULL, '43999565666', 'dani.christovao@gmail.com', NULL, NULL, NULL, NULL, '85fe04d1b329f0c6a2ebab92674b40e8', NULL, NULL, NULL, 1, '2020-11-03 13:21:54'),
(71, 'Luciana Messagi ', '9', '43 33286583', 'Av Garibaldi Deliberador ', '886 sala 2', 'Jd Aurora ', NULL, NULL, NULL, 'Londrina', 'PR ', NULL, NULL, NULL, NULL, '42991221526', 'messagiluciana@gmail.com', NULL, NULL, NULL, NULL, 'aca478842cf200f221611b6f90f6f96e', '1604695179.jpg', '1604695050.jpg', NULL, 1, '2020-11-03 15:44:55'),
(72, 'Thalita do Nascimento', '31', '', 'Clarice Lima Castro', '255', 'Nova Olinda', NULL, NULL, NULL, 'Londrina', 'Paraná', NULL, NULL, NULL, NULL, '43 984766644', 'thalita.nascimento25tn@gmail.com', NULL, NULL, NULL, NULL, '07afc76c2b389e557a17e11566a7bc28', NULL, NULL, NULL, 1, '2020-11-03 19:51:28'),
(74, 'Livia Bonfim Catanho da Silva ', '27', '', 'Rua Almirante Crocane', '', 'Jardim California', NULL, NULL, NULL, 'Londrina', 'Parana', NULL, NULL, NULL, NULL, '43991713668', 'liviabds@yahoo.com.br', NULL, NULL, NULL, NULL, '27152bce2f350cb6e0d863aa8a92ac3f', NULL, NULL, NULL, 2, '2020-11-04 13:20:27'),
(80, 'LIDIA GIFFONI TORRES', '19', '43999159903', 'AVENIDA INGLATERRA', '671', 'CENTRO', NULL, NULL, NULL, 'CAMBÉ', 'PR', NULL, NULL, NULL, NULL, '43999159903', 'lidiag.torres@outlook.com', NULL, NULL, NULL, NULL, '5a6a87ce1344c4fab36fa6b0267baa2a', NULL, NULL, NULL, 2, '2020-11-05 00:46:47'),
(81, 'Isabela Fonseca', '16', '43991028262', 'Jacarandá', '88', 'Moradas Arvoredo', NULL, NULL, NULL, 'IBIPORÃ', 'Paraná', NULL, NULL, NULL, NULL, '43991028262', 'isabela.a.fonseca@outlook.com', NULL, NULL, NULL, NULL, '7d46269b9524152763f16c0efc37ebc1', '1604621225.jpg', '1604621038.jpg', NULL, 1, '2020-11-05 17:15:22'),
(82, 'Margareth Watanabe', '17', '43996389119', 'Rua Juhei Muramoto', '177', 'Tóquio', NULL, NULL, NULL, 'Londrina', 'Pr', NULL, NULL, NULL, NULL, '43999918020', 'margareth_watanabe@hotmail.com', NULL, NULL, NULL, NULL, '8851d71a056b6b2b7dd23947f1bc5036', NULL, NULL, NULL, 1, '2020-11-05 19:05:00'),
(84, 'Magali Stella Celestrino Zago de Oliveira', '17', '043996062545', 'Rua Irma Thanes ', '143 casa 8', 'Santiago II', NULL, NULL, NULL, 'Londrina', 'Parana', NULL, NULL, NULL, NULL, '043996062545', 'meguistella@hotmail.com', NULL, NULL, NULL, NULL, '675ec16a6c63404280e7bad09d8e2980', '1604620752.jpg', '1604620672.jpg', NULL, 1, '2020-11-05 23:26:39'),
(85, 'Amanda', '17', '920013455', 'cafe burbom', '19', 'jardim continetal', NULL, NULL, NULL, 'Londrina', 'PR', NULL, NULL, NULL, NULL, '43998652250', 'reginapaulinovieira@gmail.com', NULL, NULL, NULL, NULL, '4200391b7f9c3e571d2307c7b334a0f1', NULL, NULL, NULL, 2, '2020-11-06 00:03:06'),
(86, 'Katia Valerio  MASSOTERAPIA ', '10', '43 996472583', 'Fernando de Noronha ', '1158', 'Centro', NULL, NULL, NULL, 'Londrina', 'Parana', NULL, NULL, NULL, NULL, '43 996472583', 'katyavalerio@yahoo.com.br', NULL, NULL, NULL, NULL, 'fc88fbdc096ce355533e40ffa82c7d58', NULL, NULL, NULL, 1, '2020-11-06 12:10:55'),
(88, 'Flávia Araujo Felipe', '34', '', 'Rua Pedro Guedes Alcoforado', '12', 'Camboinhas', NULL, NULL, NULL, 'Niteroi', 'RJ', NULL, NULL, NULL, NULL, '21996432017', 'flaviaafelipe@gmail.com', NULL, NULL, NULL, NULL, '55009f4eaf51a2353f4057cbec3ec657', NULL, NULL, NULL, 1, '2020-11-06 17:20:05'),
(89, 'Corina Fujisawa ', '26', '43996190069', 'Rua Santa Catarina ', '50 ', 'Centro', 'Sala 45 L3', '86010470', '1976-10-17', 'Londrina', 'PR', 'sim', NULL, NULL, NULL, '43984266374', 'corinafuji@gmail.com', '@corinaagf ', '@corinaagf ', '', 'Inteligência Emocional  e Desenvolvimento Humano ', '838aa27471a699b4899c0550a733bbfe', NULL, NULL, NULL, 1, '2020-11-07 14:14:12'),
(91, 'felipedsfgfsd', '9', '', 'sdafs', 'dfsad', 'fsda', '', '', '0000-00-00', 'sdfa', 'fdsf', '', NULL, NULL, NULL, '', 'felipe@grudigital.com.br', '', '', '', 'gsfdgfsdgsdf', 'fd4b685eb84bf2ba0c26fd3c82f577b5', NULL, NULL, NULL, 1, '2020-11-09 17:28:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anunciantes_categoria`
--

CREATE TABLE `anunciantes_categoria` (
  `id` int(11) UNSIGNED NOT NULL,
  `categoria` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `anunciantes_categoria`
--

INSERT INTO `anunciantes_categoria` (`id`, `categoria`, `imagem`) VALUES
(8, 'Gastronomia', '1601300442.jpg'),
(9, 'Beleza', '1601939674.jpg'),
(10, 'Saúde', '1601939718.jpg'),
(11, 'Marketing', '1601939582.jpg'),
(12, 'Direito', ''),
(13, 'Manicure', '1601920050.jpg'),
(14, 'Social Media', ''),
(15, 'Design', ''),
(16, 'Arquiteta', ''),
(17, 'Autônoma', ''),
(19, 'Engenheira', ''),
(20, 'Maquiadora', ''),
(21, 'Fisioterapeuta', ''),
(22, 'Personal Organizer', ''),
(23, 'Contadora', ''),
(24, 'Psicóloga', ''),
(25, 'Enfermeira', ''),
(26, 'Coach', ''),
(27, 'Artesanato', ''),
(28, 'Boleira', ''),
(29, 'Lojista', ''),
(30, 'Massagista', ''),
(31, 'Outra', ''),
(32, 'Professora', ''),
(33, 'Beleza e Saúde', ''),
(34, 'Mentoria', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anunciantes_comentarios`
--

CREATE TABLE `anunciantes_comentarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `estrelas` int(10) DEFAULT NULL,
  `datacomentario` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `anunciantes_comentarios`
--

INSERT INTO `anunciantes_comentarios` (`id`, `anunciante`, `nome`, `cpf`, `email`, `telefone`, `comentario`, `status`, `estrelas`, `datacomentario`) VALUES
(1, '1', 'felipe sergio', '35251690860', 'felipesergio@outlook.com', '11 930937007', 'o fornecedor é excelente adorei os serviços prestados', '1', 2, '2020-09-28 09:39:36'),
(2, '11', 'Felipe Sergio', '35251690860', 'felipesergio@outlook.com', '11930937007', 'otima chefe de cozinha', '2', 4, '2020-09-30 16:46:00'),
(3, '8', 'sdfsdf', 'sdfsdfsd', 'dsfsd', 'sdfsdf', 'sdfsdf', '1', 3, '2020-09-30 16:51:10'),
(4, '7', 'Felipe', '35251690860', 'felipesergio@yahoo.com', '11961503927', 'dsffds', '1', 5, '2020-09-30 18:35:21'),
(5, '11', 'Felipe Sergio', '3525169086023', 'felipesergio@outlook.com', '11930937007', 'dsfdsfds', '1', 2, '2020-09-30 18:40:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anunciantes_estrelas`
--

CREATE TABLE `anunciantes_estrelas` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anunciantes_fotos`
--

CREATE TABLE `anunciantes_fotos` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `anunciantes_fotos`
--

INSERT INTO `anunciantes_fotos` (`id`, `anunciante`, `imagem`) VALUES
(14, '', '1601504266.jpg'),
(15, '8', '1601504374.jpg'),
(17, '8', '1601504735.jpg'),
(18, '8', '1601504746.jpg'),
(19, '0', '1601671074.jpg'),
(24, '0', '1601940183.jpg'),
(25, '0', '1602699485.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anunciantes_orcamento`
--

CREATE TABLE `anunciantes_orcamento` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` int(10) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datacontato` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `anunciantes_orcamento`
--

INSERT INTO `anunciantes_orcamento` (`id`, `anunciante`, `nome`, `email`, `telefone`, `mensagem`, `datacontato`) VALUES
(1, 11, 'felipe sergio', 'felipesergio@outlook.com', '11 930937007', 'o fornecedor é otimo', '0000-00-00 00:00:00'),
(2, 7, 'Felipe Sergio', 'felipesergio@outlook.com', '11 930937007', 'tompero', '2020-09-30 15:53:56'),
(3, 7, 'Felipe Sergio', 'felipesergio@outlook.com', '11930937007', 'tompero 2', '2020-09-30 15:59:45'),
(4, 11, 'Felipe Sergio', 'felipesergio@outlook.com', '11930937007', 'tompero 3', '2020-09-30 16:02:04'),
(5, 45, '', '', '', '', '2020-10-30 12:20:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anunciantes_video`
--

CREATE TABLE `anunciantes_video` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) UNSIGNED NOT NULL,
  `local` int(10) NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `datacadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `local`, `titulo`, `imagem`, `link`, `status`, `datacadastro`) VALUES
(3, 1, '', '1601983836.jpg', 'https://guiadasparaosucesso.com.br/contato.php', 1, '2020-09-24 13:46:24'),
(4, 1, '', '1601758071.jpg', '#m', 1, '2020-09-24 13:46:35'),
(5, 1, '', '1601758090.jpg', '#', 1, '2020-09-24 13:46:54'),
(6, 1, '', '1601758112.jpg', '#', 1, '2020-09-24 13:47:07'),
(7, 1, '', '1601758133.jpg', '#', 1, '2020-09-24 13:47:26'),
(8, 1, '', '1601758365.jpg', '#', 1, '2020-09-24 13:47:37'),
(9, 1, '', '1601758684.jpg', '#', 1, '2020-09-24 13:47:49'),
(10, 1, '', '1601758206.jpg', '#', 1, '2020-09-24 13:48:05'),
(11, 3, 'Conheça o GPS', '1602697253.jpg', '#', 1, '2020-09-24 13:54:21'),
(12, 4, '', '1602269264.jpg', '#', 1, '2020-09-24 13:54:38'),
(13, 5, 'Termos de uso', '1602646634.jpg', '#', 1, '2020-09-24 13:54:54'),
(14, 6, 'Política de privacidade', '1602646551.jpg', '#', 1, '2020-09-24 13:55:16'),
(15, 2, 'Águias voam com águias...', '1602268996.jpg', '#', 1, '2020-09-24 14:01:58'),
(17, 7, 'Nossos Produtos', '1602646681.jpg', '#', 1, '2020-09-24 16:14:36'),
(18, 99, 'Busca', '1601486185.jpg', '#', 1, '2020-09-30 14:14:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners_local`
--

CREATE TABLE `banners_local` (
  `id` int(10) UNSIGNED NOT NULL,
  `local` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `banners_local`
--

INSERT INTO `banners_local` (`id`, `local`) VALUES
(1, 'Home - topo ( 600 x 800 ) '),
(2, 'Home - meio( 1200 x 800 ) '),
(3, 'Quem somos ( 1600 x 950 )'),
(4, 'Faça parte ( 1600 x 950 )'),
(5, 'Termos de uso ( 1600 x 950 )'),
(6, 'Politica de privacidade ( 1600 x 950 )'),
(7, 'Produtos ( 1350 x 550 )');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blocos`
--

CREATE TABLE `blocos` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagina` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resumo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `blocos`
--

INSERT INTO `blocos` (`id`, `titulo`, `pagina`, `resumo`, `texto`, `imagem`) VALUES
(3, 'História', '1', '', '<p style=\"text-align: justify;\">O Despertar para o caminho do desenvolvimento pessoal veio a partir do momento em que as empres&aacute;rias Julliana Juday e D&eacute;bora Vilbert notaram que havia algo travando o crescimento empresarial, que n&atilde;o se tratava mais apenas de no&ccedil;&otilde;es t&eacute;cnicas de gest&atilde;o e gerenciamento de neg&oacute;cios, mas havia necessidade da evolu&ccedil;&atilde;o pessoal e muitas quebras de paradigmas. A&iacute; deu-se in&iacute;cio o despertar para essa trajet&oacute;ria. <br />Ao notar que o CPF fortalecido contribuia para alavancar o CNPJ, a busca se tornou ainda mais ass&iacute;dua. E por que n&atilde;o compartilhar esse aprendizado com outras mulheres que tamb&eacute;m estavam carentes de recursos para construir uma vers&atilde;o ainda melhor de si?<br />Um dos primeiros ensinamentos adquiridos &eacute; que nossos resultados s&atilde;o semelhantes a m&eacute;dia das 5 pessoas que mais convivemos. Um mentor nos ensinou, que apesar de as pessoas quererem voar como &aacute;guias elas estavam cercadas de Urubus, pessoas medianas, que se contentavam a ser feliz aos finais de semana, se limitavam a conversar sobre problemas e muitas vezes n&atilde;o dos pr&oacute;prios, mas sim, os de outras pessoas.<br />Esse crit&eacute;rio de aliar-se a pessoas Extraordin&aacute;rias, junto com o prazer de compartilhar, foi o come&ccedil;o das reuni&otilde;es entre mulheres, positivamente insatisfeitas com a vida que levavam. <br />Deu-se in&iacute;cio, ent&atilde;o, ao GPS.</p>', '1601941148.jpg'),
(4, 'Propósitos do grupo', '1', '', 'Ao longo dos encontros, o grupo trouxe recursos para adquirir robustez diante das adversidades, bem como essa decodificação do que é sucesso. <br>\r\nTrazer clareza sobre onde estamos e principalmente para onde vamos. Como sempre dizemos: “se você não sabe onde quer chegar, qualquer caminho serve”.<br>\r\nSabemos que não é fácil essa mudança de mindset e de quão limitador nosso sistema pode ser. <br>\r\nEntão, porque não engajar e encorajar outras mulheres que também desejam ser ainda melhores?\r\n', '1602268494.jpg'),
(5, 'Atuais gestoras ', '1', '', 'Esse trio da foto se uniu e uma nova etapa que se inicia no GPS.<br>\r\nAcreditamos e muito no potencial do projeto e em cada mulher que participa e que ainda virá a participar.<br>\r\nPor isso essas três amigas juntas buscam trazer novidades e inovações para mulheres que procuram despertar o seu melhor, que querem crescer pessoal e profissionalmente. <br>\r\n<br>\r\n● Julliana Juday, fisioterapeuta, sócia proprietária da Laser & Mais depilação definitiva e locação de equipamentos estéticos, fundadora do Guiadas Para o Sucesso e Head trainer. <br>\r\n<br>\r\n● Melissa Sessak Ribeiro Ceranto, Social Media, criadora de conteúdos digitais, mentora de gestão de mídias sociais, especialista em Marketing e gestão de negócios, Bacharel em Direito, Gestora do Guiadas Para o Sucesso<br>\r\n<br>\r\n● Paula Napo, diretora criativa e proprietária do estúdio Resma Design, doutoranda em Design UNESP, mestre em Design da Informação UFPR e Especialista em Gestão do Design UEL. Professora do Depto de Design da UEL e idealizadora do Lab.Une.\r\n', '1601941227.jpg'),
(6, 'Missão, visão e valores', '1', '', '<p>Mulheres que se completam e n&atilde;o competem, o grupo traz como principal miss&atilde;o ser recurso de aprendizado e desenvolvimento pessoal para que vivamos no m&aacute;ximo potencial em 5 pilares da nossa vida:</p>\r\n<ul>\r\n<li>Intelig&ecirc;ncia Emocional&nbsp;</li>\r\n<li>Prosperidade Financeira</li>\r\n<li>Sa&uacute;de Inabal&aacute;vel</li>\r\n<li>Relacionamentos Poderosos</li>\r\n<li>Espiritualidade&nbsp;</li>\r\n</ul>\r\n<p>Al&eacute;m de oportunidade de networking e divulgar sua empresa, de maneira &eacute;tica e nessa rela&ccedil;&atilde;o ganha x ganha onde mulheres ajudam mulheres.</p>\r\n<p><strong>&Aacute;guias voam com &aacute;guias!</strong></p>', '1602268322.jpg'),
(7, 'Como se tornar uma GPS', '2', 'O principal requisito é buscar ser hoje melhor que ontem, ter empatia e auxiliar outras mulheres a também se desenvolverem. <br>\r\nEstar em busca de sua melhor versão.<br>\r\n', 'O GPS é para você?<br>\r\nVocê, mulher, que no final do dia está cheia de disposição, dinheiro na conta, príncipe encantado ao seu lado e não enfrenta os desafios no seu trabalho??? <br>\r\nHum... Talvez esse grupo não seja para você. <br>\r\nO GPS é para você mulher, que muitas vezes se sente exausta em dar conta de todas as suas obrigações, mas que assim como nós acredita que é possível sim viver uma vida plena, que vai além de pagar boletos. \r\nQue deseja viver e não somente sobreviver se identificou com a gente? <br>\r\nEntão venha fazer parte.', '1602696214.jpg'),
(8, 'Planos e valores', '2', '', '', '1600970217.jpg'),
(9, 'Termos de uso', '3', '', '<p style=\"text-align: justify;\">As presentes Cl&aacute;usulas Gerais tem como objetivo definir os termos e condi&ccedil;&otilde;es da rela&ccedil;&atilde;o entre os usu&aacute;rios e a GPS - Guiadas Para o Sucesso. <br />As presentes cl&aacute;usulas podem, eventualmente, ser complementadas por outras Condi&ccedil;&otilde;es Particulares. No caso de conflito entre as cl&aacute;usulas gerais e as Condi&ccedil;&otilde;es Particulares, estas &uacute;ltimas prevalecer&atilde;o.<br /><br /><strong>DECLARA&Ccedil;&Otilde;ES E RESPONSABILIDADES DO CLIENTE</strong><br />1. O acesso ao site &eacute; totalmente volunt&aacute;rio e atribui a quem realiza a a&ccedil;&atilde;o a condi&ccedil;&atilde;o de usu&aacute;rio, aceitando, desde esse momento, plenamente e sem reservas, o conte&uacute;do das presentes condi&ccedil;&otilde;es gerais de uso, a pol&iacute;tica de prote&ccedil;&atilde;o de dados e se houver, as condi&ccedil;&otilde;es particulares que possam regular determinados servi&ccedil;os.<br />2. Para o acesso a determinados servi&ccedil;os e ferramentas da GPS - Guiadas Para o Sucesso &eacute; necess&aacute;rio o registro do usu&aacute;rio e tamb&eacute;m a aceita&ccedil;&atilde;o expressa das condi&ccedil;&otilde;es particulares que possam regular tais servi&ccedil;os, que se realizar&aacute; atrav&eacute;s de um formul&aacute;rio de registro. Para o efeito, o usu&aacute;rio garante a veracidade e exatid&atilde;o dos dados que facilite como consequ&ecirc;ncia da realiza&ccedil;&atilde;o do formul&aacute;rio de registro, sendo respons&aacute;vel por manifesta&ccedil;&otilde;es falsas ou inexatas que realize e dos poss&iacute;veis danos que possa causar &agrave; GPS - Guiadas Para o Sucesso ou a terceiros pela informa&ccedil;&atilde;o que facilite.<br />3. Para o uso dos servi&ccedil;os oferecidos por este site &eacute; necess&aacute;rio que o usu&aacute;rio tenha no m&iacute;nimo dezoito (18) anos de idade completos, capacidade suficiente para contratar e tenha lido, entendido e aceito as presentes condi&ccedil;&otilde;es gerais de uso, a pol&iacute;tica de privacidade e as condi&ccedil;&otilde;es particulares dos distintos servi&ccedil;os que resultem aplic&aacute;veis. Caso contr&aacute;rio, dever&aacute; abster-se de aceder ao site ou, em tal caso, abandon&aacute;-lo.<br />4. Os usu&aacute;rios comprometem-se a utilizar o servi&ccedil;o em conformidade com as presentes Cl&aacute;usulas Gerais, a lei, a moral, os bons costumes e a ordem p&uacute;blica. Os usu&aacute;rios comprometem-se a n&atilde;o publicar conte&uacute;do que possa ser ofensivo e/ou publicit&aacute;rio e que n&atilde;o respeite as leis em vigor.<br />5. Os usu&aacute;rios comprometem-se a n&atilde;o exigir responsabilidade a GPS - Guiadas Para o Sucesso no que diz respeito ao conte&uacute;do apresentados por eles no site da GPS - Guiadas Para o Sucesso com o objeto de defender sua imagem, propriedade intelectual e vida privada.<br />6. Os usu&aacute;rios aceitam resolver qualquer tipo de conflito ocasionado entre eles sobre os conte&uacute;dos que publiquem no site GPS - Guiadas Para o Sucesso sem a intermedia&ccedil;&atilde;o da GPS - Guiadas Para o Sucesso.<br /><br /><strong>PROPRIEDADE INTELECTUAL</strong><br />1. Os textos e elementos gr&aacute;ficos que constituem o site e divulgados atrav&eacute;s do presente, bem como a sua apresenta&ccedil;&atilde;o e edi&ccedil;&atilde;o, s&atilde;o da exclusiva propriedade da GPS - Guiadas Para o Sucesso, que det&eacute;m os direitos de explor&aacute;-los atrav&eacute;s de acordos com terceiros. Neste sentido, as obras s&atilde;o protegidas como tal pela legisla&ccedil;&atilde;o brasileira.<br />2. GPS - Guiadas Para o Sucesso n&atilde;o concede qualquer licen&ccedil;a ou autoriza&ccedil;&atilde;o relativa ao uso dos seus direitos de propriedade intelectual ou outra, ou direito relacionado com o seu site, exceto com acordo expresso de terceiros.<br />3. Os usu&aacute;rios s&atilde;o autorizados a efetuar a reprodu&ccedil;&atilde;o do conte&uacute;do do site com a finalidade exclusiva de armazenamento, fazer c&oacute;pias de seguran&ccedil;a ou imprimir em papel.<br />4. Para al&eacute;m disso, qualquer apresenta&ccedil;&atilde;o ou reprodu&ccedil;&atilde;o, mesmo parcial, do conte&uacute;do deste site ou quaisquer dos seus elementos, com uma finalidade comercial ou de utiliza&ccedil;&atilde;o para al&eacute;m do acima mencionado &eacute; proibida sempre que n&atilde;o haja expressa autoriza&ccedil;&atilde;o por escrito da GPS - Guiadas Para o Sucesso. A viola&ccedil;&atilde;o do direito exposto permite a GPS - Guiadas Para o Sucesso interpor uma a&ccedil;&atilde;o judicial pertinente.<br />5. S&atilde;o igualmente proibidas a extra&ccedil;&atilde;o ou a reprodu&ccedil;&atilde;o de elementos do site que cause qualquer tipo de preju&iacute;zo a GPS - Guiadas Para o Sucesso.<br />6. Os direitos n&atilde;o expressamente concedidos anteriormente ficam reservados a GPS - Guiadas Para o Sucesso ou, se for caso, aos seus colaboradores.<br />7. Todos os nomes comerciais, marcas ou sinais distintivos, logotipos, s&iacute;mbolos, marcas mistas, figurativas ou nominativas que aparecem neste site pertencem a GPS - Guiadas Para o Sucesso ou, pertencendo a terceiros, GPS - Guiadas Para o Sucesso tem a autoriza&ccedil;&atilde;o ou licen&ccedil;a para a utiliza&ccedil;&atilde;o dos mesmos.<br />8. O usu&aacute;rio concede &agrave; GPS - Guiadas Para o Sucesso, referente aos conte&uacute;dos que publique, uma autoriza&ccedil;&atilde;o de &acirc;mbito mundial e n&atilde;o exclusiva para reproduzir e comunicar publicamente os mesmos no site para transform&aacute;-los com a inten&ccedil;&atilde;o de adapt&aacute;-los &agrave;s necessidades t&eacute;cnicas do servi&ccedil;o, durante o prazo m&aacute;ximo de vig&ecirc;ncia reconhecido na legisla&ccedil;&atilde;o de propriedade intelectual.<br />9. Em caso de que qualquer usu&aacute;rio ou terceiro considere que realizou-se uma viola&ccedil;&atilde;o dos seus leg&iacute;timos direitos de propriedade intelectual, industrial e/ou de imagem pela introdu&ccedil;&atilde;o de um determinado conte&uacute;do no site, dever&aacute; notificar a circunst&acirc;ncia em quest&atilde;o ao correio eletr&ocirc;nico contato@guiadasparaosucesso.com.br <br />indicando: a. Os dados pessoais do interessado titular alegando os supostos direitos infringidos. Se a reclama&ccedil;&atilde;o &eacute; apresentada por um terceiro diferente do interessado, dever&aacute; indicar a representa&ccedil;&atilde;o com a que atua.<br />b. Uma descri&ccedil;&atilde;o dos conte&uacute;dos protegidos e localiz&aacute;-los no site.<br />c. A acredita&ccedil;&atilde;o adequada dos j&aacute; referidos direitos de propriedade intelectual ou industrial.<br />d. Uma declara&ccedil;&atilde;o expressa na qual o interessado responsabiliza-se da veracidade da informa&ccedil;&atilde;o facilitada na notifica&ccedil;&atilde;o. <br /><br /><strong>RESERVA DE DIREITOS E DE ISEN&Ccedil;&Atilde;O DE RESPONSABILIDADE</strong><br />1. GPS - Guiadas Para o Sucesso permite aos usu&aacute;rios registrados inserir imagens, v&iacute;deos e coment&aacute;rios e igualmente, opini&otilde;es e avalia&ccedil;&otilde;es sobre os servi&ccedil;os publicados. Os conte&uacute;dos publicados s&atilde;o criados tanto pelos usu&aacute;rios como pela GPS - Guiadas Para o Sucesso usando fontes pr&oacute;prias ou externas. GPS - Guiadas Para o Sucesso n&atilde;o garante nunca a exatid&atilde;o das caracter&iacute;sticas relativas aos conte&uacute;dos e servi&ccedil;os publicados e est&aacute; expressamente dispensada de qualquer responsabilidade pelos danos e preju&iacute;zos de qualquer natureza que possa derivar-se das faltas ou erros na descri&ccedil;&atilde;o e caracter&iacute;sticas dos conte&uacute;dos publicados. GPS - Guiadas Para o Sucesso revisa periodicamente os conte&uacute;dos do site web, mas n&atilde;o pode verificar a totalidade dessas informa&ccedil;&otilde;es, assim que n&atilde;o pode assumir a responsabilidade sobre os conte&uacute;dos.<br />2. GPS - Guiadas Para o Sucesso p&otilde;e &agrave; disposi&ccedil;&atilde;o do usu&aacute;rio links a outros sites gerenciados e controlados por terceiros, com a exclusiva fun&ccedil;&atilde;o de facilitar aos usu&aacute;rios a procura de informa&ccedil;&atilde;o, conte&uacute;dos e servi&ccedil;os na Internet. GPS - Guiadas Para o Sucesso n&atilde;o comercializa, nem dirige, nem faz pr&oacute;prios os conte&uacute;dos, servi&ccedil;os e informa&ccedil;&otilde;es dispon&iacute;veis nos sites linkados, nem aprova, supervisa ou controla de nenhuma maneira os conte&uacute;dos, servi&ccedil;os e qualquer material de qualquer natureza existente nos j&aacute; referidos, assumindo o usu&aacute;rio de maneira exclusiva toda a responsabilidade da navega&ccedil;&atilde;o atrav&eacute;s dos pr&oacute;prios.<br />3. Se a crit&eacute;rio de GPS - Guiadas Para o Sucesso, existir uma a&ccedil;&atilde;o por parte de um usu&aacute;rio para alterar ou afetar de maneira fraudulenta os valores m&eacute;dio das opini&otilde;es publicadas sobre um servi&ccedil;o ou empresa, isto poder&aacute; resultar na suspens&atilde;o ou na revoga&ccedil;&atilde;o do acesso do usu&aacute;rio e a elimina&ccedil;&atilde;o dos conte&uacute;dos publicados.<br />4. GPS - Guiadas Para o Sucesso reserva-se o direito a Modificar, em qualquer momento e sem necessidade de pr&eacute;vio aviso, a apresenta&ccedil;&atilde;o e configura&ccedil;&atilde;o do site, assim como as presentes condi&ccedil;&otilde;es gerais de uso ou as condi&ccedil;&otilde;es particulares que regulem o uso de determinados servi&ccedil;os.<br />5. Ser&aacute; da responsabilidade do GPS - Guiadas Para o Sucesso fazer tudo o poss&iacute;vel para que o Servi&ccedil;o esteja acess&iacute;vel 24 horas por dia, 7 dias por semana. Os usu&aacute;rios reconhecem que n&atilde;o &eacute; poss&iacute;vel garantir o acesso universal. GPS - Guiadas Para o Sucesso estar&aacute; isento de qualquer responsabilidade, na medida do permitido pela legisla&ccedil;&atilde;o em vigor, por quaisquer danos e preju&iacute;zos de qualquer esp&eacute;cie, que advenham da falta de disponibilidade ou continuidade do funcionamento do Servi&ccedil;o, assim como os erros no acesso &agrave;s diferentes p&aacute;ginas do Website.<br />6. GPS - Guiadas Para o Sucesso se reserva o direito a interromper o Servi&ccedil;o devido a trabalhos de manuten&ccedil;&atilde;o ou melhora dos mesmos.<br />7. GPS - Guiadas Para o Sucesso reserva-se o direito de eliminar do seu Site todos os conte&uacute;dos que considere ofensivos, inapropriados ou sobre os quais existam uma d&uacute;vida razo&aacute;vel, que possa infringir a lei, sem necessidade de aviso pr&eacute;vio ao usu&aacute;rio.<br />8. GPS - Guiadas Para o Sucesso n&atilde;o ser&aacute;, em nenhum caso, respons&aacute;vel pelos conte&uacute;dos gerados por usu&aacute;rios. GPS - Guiadas Para o Sucesso n&atilde;o tem obriga&ccedil;&atilde;o de controlar os conte&uacute;dos inclu&iacute;dos pelos seus usu&aacute;rios.<br />9. Salvo nos casos expressamente descritos nas cl&aacute;usulas gerais, GPS - Guiadas Para o Sucesso n&atilde;o ser&aacute; respons&aacute;vel pelos danos e preju&iacute;zos de qualquer natureza que possam resultar de uma falta de exatid&atilde;o, exaustividade, atualidade, nem mesmo devido a erros ou omiss&otilde;es, causados pelos usu&aacute;rios, que possam sofrer as informa&ccedil;&otilde;es e servi&ccedil;os contidos no Website ou nos Sites Pessoais.<br />10. GPS - Guiadas Para o Sucesso n&atilde;o ser&aacute; em nenhum caso respons&aacute;vel, nem assume qualquer obriga&ccedil;&atilde;o em rela&ccedil;&atilde;o aos casais ou familiares dos Benefici&aacute;rios, usu&aacute;rios ou Contribuintes, que n&atilde;o derivem do presente Contrato.<br /><br /><strong>DISPOSI&Ccedil;&Otilde;ES GERAIS</strong><br />Caso uma das cl&aacute;usulas previstas nas cl&aacute;usulas gerais seja declarada total ou parcialmente ineficaz ou inv&aacute;lida, tal nulidade ou inefic&aacute;cia afetar&aacute; apenas essa disposi&ccedil;&atilde;o ou a parte dela que resulte inv&aacute;lida ou ineficaz, subsistindo todo o resto que for v&aacute;lido, e considerando-se essa mesma disposi&ccedil;&atilde;o como inexistente.<br />Todas as notifica&ccedil;&otilde;es, requerimentos, solicita&ccedil;&otilde;es e outras comunica&ccedil;&otilde;es a serem apresentadas pelas partes em conex&atilde;o com as presentes cl&aacute;usulas gerais, devem ser feitas por escrito e entendem-se devidamente apresentadas quando forem entregues em m&atilde;os ou enviadas por correio para o endere&ccedil;o ou e-mail da outra parte, ou para qualquer outro endere&ccedil;o ou e-mail que para estes fins cada parte possa indicar<br /><br />Para dirimir os conflitos decorrentes destes Termos e Condi&ccedil;&otilde;es de uso &eacute; eleito o foro da Comarca de Londrina - PR sob a legisla&ccedil;&atilde;o vigente no Brasil.</p>', '1602645050.jpg'),
(10, 'Política de privacidade', '4', '', '<p style=\"text-align: justify;\">As presentes Cl&aacute;usulas Gerais tem como objetivo definir os termos e condi&ccedil;&otilde;es da rela&ccedil;&atilde;o entre os usu&aacute;rios e o GPS - Guiadas para o Sucesso. As presentes cl&aacute;usulas podem, eventualmente, ser complementadas por outras Condi&ccedil;&otilde;es Particulares. No caso de conflito entre as cl&aacute;usulas gerais e as Condi&ccedil;&otilde;es Particulares, estas &uacute;ltimas prevalecer&atilde;o.</p>\r\n<p style=\"text-align: justify;\"><br /><strong>PROTE&Ccedil;&Atilde;O DE PRIVACIDADE E DADOS PESSOAIS</strong><br />1. GPS - Guiadas Para o Sucesso declara que cumpre a Constitui&ccedil;&atilde;o Federal, o C&oacute;digo Civil e o C&oacute;digo de Defesa do Consumidor (Lei 8.078/1990) e toda a legisla&ccedil;&atilde;o em vigor pertinente &agrave; prote&ccedil;&atilde;o de dados, &agrave; privacidade, &agrave; intimidade e demais aspectos que envolvem a dignidade da pessoa humana.<br />2. GPS - Guiadas Para o Sucesso mant&eacute;m os n&iacute;veis de seguran&ccedil;a de prote&ccedil;&atilde;o dos dados pessoais exigidos por lei e estabelece todos os meios t&eacute;cnicos dispon&iacute;veis para evitar a perda, mau uso, altera&ccedil;&atilde;o, acesso n&atilde;o autorizado e/ou roubo, dos dados que o usu&aacute;rio fornece atrav&eacute;s do website.<br />3. GPS - Guiadas Para o Sucesso compromete-se a manter a confidencialidade dos dados pessoais contidos em seus registros, em conformidade com a legisla&ccedil;&atilde;o aplic&aacute;vel.<br />4. GPS - Guiadas Para o Sucesso declara que recolhe unicamente os dados dos usu&aacute;rios para uma boa presta&ccedil;&atilde;o de servi&ccedil;os, sendo os dados armazenados apenas enquanto necess&aacute;rio. Ao fornecer o seu e-mail e outros dados pessoais, os usu&aacute;rios d&atilde;o a sua autoriza&ccedil;&atilde;o a GPS - Guiadas Para o Sucesso para que esta informa&ccedil;&atilde;o seja tratada com o objetivo de prestar o Servi&ccedil;o. Autorizam GPS - Guiadas Para o Sucesso a mant&ecirc;-los informados sobre quaisquer tipos de ofertas, promo&ccedil;&otilde;es ou oportunidades, relacionadas com servi&ccedil;o GPS - Guiadas Para o Sucesso e a comunicar essas informa&ccedil;&otilde;es a terceiros, a fim de realizar a&ccedil;&otilde;es comerciais conjuntas ou n&atilde;o. N&atilde;o obstante, os usu&aacute;rios podem a qualquer momento manifestar, por escrito ou enviar um e-mail, sobre o seu desejo de n&atilde;o receber este tipo de informa&ccedil;&atilde;o ou que os seus dados n&atilde;o estejam dispon&iacute;veis para outras empresas.<br />5. Qualquer usu&aacute;rio poder&aacute; exercer os seus direitos de acesso, retifica&ccedil;&atilde;o, oposi&ccedil;&atilde;o e cancelamento do tratamento dos seus dados pessoais nos termos e condi&ccedil;&otilde;es previstas na legisla&ccedil;&atilde;o vigente. Para esse efeito, GPS - Guiadas Para o Sucesso disponibiliza o email (contato@guiadasparaosucesso.com.br) para receber as solicita&ccedil;&otilde;es de cancelamento, que ser&atilde;o atendidas de imediato.</p>\r\n<p style=\"text-align: justify;\"><br /><strong>COOKIES</strong><br />Este site, como tantos outros, usa cookies com a inten&ccedil;&atilde;o de facilitar, melhorar e personalizar a navega&ccedil;&atilde;o dos usu&aacute;rios. As cookies s&atilde;o pequenos arquivos de texto que o servidor de um site armazena no navegador/browser do usu&aacute;rio (Explorer, Safari, Firefox, Chrome...). Desta forma, quando o usu&aacute;rio volta a visitar o site le&ecirc;m-se as cookies para identificar ao usu&aacute;rio pr&oacute;prio e estabelecer as suas prefer&ecirc;ncias de navega&ccedil;&atilde;o.<br />Este site pode usar os seguintes cookies:<br />1. Cookies para facilitar a navega&ccedil;&atilde;o dos usu&aacute;rios e lembrar por onde se encontra o usu&aacute;rio quando navega pelo site.<br />2. Cookies de sess&atilde;o para seguir a sess&atilde;o nas p&aacute;ginas que exigem registro. Estas cookies s&atilde;o necess&aacute;rias para aceder aos servi&ccedil;os ou conte&uacute;dos restringidos aos usu&aacute;rios que navegam como usu&aacute;rios registrados. Se n&atilde;o selecionou lembrar a minha senha estas cookies eliminam-se quando se fecha o navegador ou apaga o computador ou aplicativo inform&aacute;tico.<br />3. Cookies de medi&ccedil;&atilde;o e anal&iacute;tica web. Estas cookies usam-se para analisar as visitas realizadas e os tempos de navega&ccedil;&atilde;o pelo site. A informa&ccedil;&atilde;o coletada por estas cookies &eacute; transmitida e arquivada diretamente nos servidores dos prestadores do servi&ccedil;o.<br />4. Cookies de publicidade. Estas cookies servem para saber se o usu&aacute;rio visualizou um an&uacute;ncio e h&aacute; quanto tempo n&atilde;o o visualiza. Isto permite-nos mostrar-lhe a publicidade mais adequada em cada momento.<br />5. Cookies de publicidade de terceiros. Muitos an&uacute;ncios de publicidade que mostram-se neste site s&atilde;o gerados por terceiros. Alguns de estes terceiros podem armazenar cookies no seu navegador em quanto navega pela GPS - Guiadas Para o Sucesso. As empresas que gerem estas cookies t&ecirc;m as suas pr&oacute;prias pol&iacute;ticas de privacidade. 6. Outras cookies de terceiros que podem armazenar no seu navegador durante o tempo de navega&ccedil;&atilde;o pelo GPS - Guiadas Para o Sucesso. Por exemplo, quando usa o bot&atilde;o de compartilhar conte&uacute;dos GPS - Guiadas Para o Sucesso em redes sociais. As empresas que geram estas cookies t&ecirc;m as suas pr&oacute;prias pol&iacute;ticas de privacidade.</p>\r\n<p style=\"text-align: justify;\"><br /><strong>COMO DESATIVAR OS COOKIES?</strong><br />Pode configurar o seu navegador para que todas estas cookies apaguem-se automaticamente assim que feche o navegador, computador ou dispositivo:<br />Chrome: https://goo.gl/2v7T9i<br />Firefox: http://support.mozilla.org/en-us/kb/cookies-information-websites-store-on-your-computer?redirectlocale=en-us&amp;redirectslug=cookies<br />Internet explorer: http://support.microsoft.com/kb/196955<br />Safari web: http://support.apple.com/kb/ph5042<br />Safari ios: http://support.apple.com/kb/ht1677<br /><br />Pode contatar o titular deste site sobre as cookies no correio eletr&ocirc;nico <a href=\"mailto:contato@guiadasparaosucesso.com.br\">contato@guiadasparaosucesso.com.br</a></p>\r\n<p style=\"text-align: justify;\"><br /><strong>DISPOSI&Ccedil;&Otilde;ES GERAIS</strong><br />Caso uma das cl&aacute;usulas previstas nas cl&aacute;usulas gerais seja declarada total ou parcialmente ineficaz ou inv&aacute;lida, tal nulidade ou inefic&aacute;cia afetar&aacute; apenas essa disposi&ccedil;&atilde;o ou a parte dela que resulte inv&aacute;lida ou ineficaz, subsistindo todo o resto que for v&aacute;lido, e considerando-se essa mesma disposi&ccedil;&atilde;o como inexistente.<br />Todas as notifica&ccedil;&otilde;es, requerimentos, solicita&ccedil;&otilde;es e outras comunica&ccedil;&otilde;es a serem apresentadas pelas partes em conex&atilde;o com as presentes cl&aacute;usulas gerais, devem ser feitas por escrito e entendem-se devidamente apresentadas quando forem entregues em m&atilde;os ou enviadas por correio para o endere&ccedil;o ou e-mail da outra parte, ou para qualquer outro endere&ccedil;o ou e-mail que para estes fins cada parte possa indicar.<br />Para dirimir os conflitos decorrentes destes Termos e Condi&ccedil;&otilde;es de uso &eacute; eleito o foro da Comarca de Londrina - PR sob a legisla&ccedil;&atilde;o vigente no Brasil.<br /><br />Portal GPS (denominada aqui como GPS - Guiadas Para o Sucesso) &eacute; uma Sociedade Comercial registrada no Cadastro Nacional da Pessoa Jur&iacute;dica da Receita Federal (CNPJ) sob o n&ordm; 13.919.179/0001-27, com sede na cidade de Londrina, estado PR.<br /><br />Portal GPS &eacute; propriet&aacute;rio do dominio: www.guiadasparaosucesso.com.br</p>', '1602645696.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blocos_paginas`
--

CREATE TABLE `blocos_paginas` (
  `id` int(10) UNSIGNED NOT NULL,
  `pagina` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `blocos_paginas`
--

INSERT INTO `blocos_paginas` (`id`, `pagina`) VALUES
(1, 'Quem somos'),
(2, 'Faça parte'),
(3, 'Termos de uso'),
(4, 'Políticas de privacidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_categorias`
--

CREATE TABLE `blog_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `blog_categorias`
--

INSERT INTO `blog_categorias` (`id`, `categoria`) VALUES
(4, 'Dicas'),
(5, 'Sobre a GPS'),
(6, 'São Paulo'),
(7, 'Redes sociais'),
(8, 'Mundo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_comentarios`
--

CREATE TABLE `blog_comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `publicacao` int(10) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `status` int(10) NOT NULL,
  `datacomentario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `blog_comentarios`
--

INSERT INTO `blog_comentarios` (`id`, `publicacao`, `nome`, `email`, `mensagem`, `status`, `datacomentario`) VALUES
(1, 6, 'sdfsad', 'fsdaf', 'sdafsdf', 1, '2020-09-15 18:28:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_publicacoes`
--

CREATE TABLE `blog_publicacoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `categoria` int(10) DEFAULT NULL,
  `publicador` varchar(30) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `imagem` varchar(120) DEFAULT NULL,
  `video` varchar(120) DEFAULT NULL,
  `datapublicacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `blog_publicacoes`
--

INSERT INTO `blog_publicacoes` (`id`, `titulo`, `categoria`, `publicador`, `resumo`, `texto`, `imagem`, `video`, `datapublicacao`) VALUES
(9, 'Como o Instagram mudou a forma que consumimos.', 5, '1', '<p>Quantas vezes voc&ecirc; esperou um amigo fotografar a mesa do restaurante para come&ccedil;ar a comer? Vai dizer que nunca chegou em algum lugar e pensou, &ldquo;isso daria uma &oacute;tima foto pro meu feed!&rdquo;.</p>', '<p>Quantas vezes voc&ecirc; esperou um amigo fotografar a mesa do restaurante para come&ccedil;ar a comer? Vai dizer que nunca chegou em algum lugar e pensou, &ldquo;isso daria uma &oacute;tima foto pro meu feed!&rdquo;. As redes sociais j&aacute; fazem parte da nossa cultura e alguns comportamentos s&atilde;o t&atilde;o naturais que nem parece que faz apenas dez anos desde que o Instagram, a maior rede social de fotos do mundo, foi lan&ccedil;ado.&nbsp;</p>\r\n<p>Essa mudan&ccedil;a de h&aacute;bitos afetou a maneira de consumir em v&aacute;rios segmentos. Desde a alimenta&ccedil;&atilde;o at&eacute; a decora&ccedil;&atilde;o da casa, passando at&eacute; mesmo pela forma como nos exercitamos. Usamos as tend&ecirc;ncias que os perfis influentes das m&iacute;dias sociais espalham para criar a nossa pr&oacute;pria comunica&ccedil;&atilde;o no dia a dia. &Eacute; claro que damos um toque pessoal e adequamos ao nosso estilo de vida, mas o padr&atilde;o de comportamento e, consequentemente o de consumo est&aacute; desenhado na tela dos smartphones.&nbsp;</p>\r\n<p>Duvida? Ent&atilde;o, pense nas &uacute;ltimas tend&ecirc;ncias que vimos durante o isolamento social, momento no qual as pessoas estavam em casa, em regime de home office, por causa do novo coronav&iacute;rus. De repente, grande parte das pessoas que seguimos estava interessada em um conjunto de moletom, ou ainda fazendo a pr&oacute;pria roupa tie dye e, al&eacute;m disso, at&eacute; quem n&atilde;o era da cozinha apareceu compartilhando receitas de bolo e de p&atilde;o caseiro. Ser&aacute; que todo mundo foi afetado exatamente do mesmo jeito pela pandemia da COVID-19 ou fomos influenciando uns aos outros, at&eacute; que todos tivessem as mesmas vontades ao mesmo tempo? Voc&ecirc;, com certeza, j&aacute; sabe a resposta. Pensando em toda essa import&acirc;ncia, separamos dicas valiosas que aprendemos com o Instagram e podem ajudar a alavancar a sua empresa:&nbsp;</p>\r\n<p><strong>Humanize seu conte&uacute;do</strong></p>\r\n<p>Pessoas gostam de conversar com pessoas, n&atilde;o com produtos. Por isso, construa uma personalidade para o seu Neg&oacute;cio e, sempre que poss&iacute;vel, apare&ccedil;a nas postagens. Se voc&ecirc; n&atilde;o curte muito as c&acirc;meras, convide algu&eacute;m para ser o rosto da sua Empresa nas redes sociais, tudo alinhado com seus valores e objetivos, &eacute; claro. Isso &eacute; interessante porque gera identifica&ccedil;&atilde;o do p&uacute;blico com a marca.&nbsp;</p>\r\n<p><strong>Conte uma hist&oacute;ria</strong></p>\r\n<p>Sejamos honestos: todo mundo &eacute; um pouco curioso. Somos soci&aacute;veis e sempre muito interessados no que os outros t&ecirc;m a contar. Por isso, construa uma boa narrativa para a sua Empresa. Mostre como voc&ecirc;s surgiram, quais s&atilde;o seus principais objetivos, no que voc&ecirc;s acreditam. A Seguran&ccedil;a dos seus funcion&aacute;rios &eacute; essencial? Ent&atilde;o, conte para o seu p&uacute;blico! &Eacute; muito mais prov&aacute;vel que um cliente se fidelize depois de conhecer a sua hist&oacute;ria.&nbsp;</p>\r\n<p><strong>Entregue valor com seu produto</strong></p>\r\n<p>Lembra do que falamos sobre h&aacute;bitos? Se todos est&atilde;o mais na cozinha e voc&ecirc; tem, por exemplo, uma Empresa que fabrica pratos, por que n&atilde;o pensar em publica&ccedil;&otilde;es ensinando receitas? Seu perfil ser&aacute; mais relevante, j&aacute; que est&aacute; entregando um conte&uacute;do interessante, e o seu produto estar&aacute; muito bem-apresentado em um contexto que conversa com a personalidade do seu Neg&oacute;cio.&nbsp;</p>\r\n<p>Seja a sua loja f&iacute;sica ou virtual, temos certeza que os meios de comunica&ccedil;&atilde;o e a Seguran&ccedil;a podem ser os seus maiores aliados no mercado p&oacute;s-pandemia. Aposte neles!</p>\r\n<p><strong>Fonte:</strong><a href=\"https://forbes.com.br/forbeslife/2020/10/como-a-evolucao-do-instagram-impactou-a-forma-como-comemos/\">&nbsp;https://forbes.com.br/forbeslife/2020/10/como-a-evolucao-do-instagram-impactou-a-forma-como-comemos/</a></p>', '1604936242.jpg', '6okCkGkN51g', '2020-11-09 12:37:05'),
(10, 'O novo normal: em breve', 6, '1', '<p>Duas coisas s&atilde;o certas sobre a pandemia da COVID-19. A primeira certeza &eacute; que a quarentena passar&aacute;, e a segunda &eacute; que o mundo que nos receber&aacute; de volta n&atilde;o ser&aacute; mais o mesmo. Essa nova realidade que nos espera ganhou o nome de &ldquo;novo normal&rdquo;.</p>', '<p>Duas coisas s&atilde;o certas sobre a pandemia da COVID-19. A primeira certeza &eacute; que a quarentena passar&aacute;, e a segunda &eacute; que o mundo que nos receber&aacute; de volta n&atilde;o ser&aacute; mais o mesmo. Essa nova realidade que nos espera ganhou o nome de &ldquo;novo normal&rdquo;. Essa express&atilde;o que est&aacute; sendo massificada nas &uacute;ltimas semanas n&atilde;o &eacute; novidade. Historicamente, ela &eacute; usada para mostrar a readequa&ccedil;&atilde;o da sociedade diante de grandes crises econ&ocirc;micas, sociais, pol&iacute;ticas e culturais (como as guerras mundiais, o ataque terrorista no World Trade Center, a crise de 29, s&oacute; para citar alguns exemplos).<br />Apesar de qualquer previs&atilde;o futur&iacute;stica&nbsp;ser um mero exerc&iacute;cio da imagina&ccedil;&atilde;o, podemos usar alguns dados para nos ajudar na constru&ccedil;&atilde;o dessa imagem coletiva de futuro. Um quebra-cabe&ccedil;a amplo para ajudar os empres&aacute;rios no planejamento estrat&eacute;gico e para te preparar para esse novo momento.</p>\r\n<p>Vale lembrar que esse conceito se aplica enquanto n&atilde;o existir uma imuniza&ccedil;&atilde;o geral da nossa sociedade. Especialistas acreditam que uma vacina com efic&aacute;cia comprovada leve ao menos 18 meses para ficar pronta. Isso sem contar o tempo de distribui&ccedil;&atilde;o e aplica&ccedil;&atilde;o. Enquanto esperamos pela cura, o mundo muda l&aacute; fora e aqui dentro tamb&eacute;m.</p>\r\n<p><strong>O (re)prop&oacute;sito da casa:</strong></p>\r\n<p>Na rotina fren&eacute;tica do dia a dia era comum o olhar pra resid&ecirc;ncia como um lugar de descanso apenas. Existem muitos casos de pessoas que prefeririam morar em lugares menores, menos confort&aacute;veis, pela facilidade de estar perto do trabalho, faculdade, etc. Mas qual a utilidade disso quando estamos quase todos confinados? Est&aacute; cada vez mais claro que a casa deixou de ser o lugar que voc&ecirc; vai quando n&atilde;o tem nada para fazer, ou quando precisa repousar. Ela voltou a ser o que ela foi feita para ser: o lugar de se viver com seus pares. E, atualmente, se tornou seu local de trabalho, sua academia, seu lazer.</p>\r\n<p>Al&eacute;m disso, o entorno virou um diferencial ainda maior. Se antigamente o luxo era morar perto do litoral, agora o importante &eacute; estar cercado por lugares essenciais: mercados, restaurantes, farm&aacute;cias, padarias, hospitais, entre outros.&nbsp; E, principalmente, uma boa conex&atilde;o de internet e poucas restri&ccedil;&otilde;es de acesso aos deliverys.</p>\r\n<p>Esse aprendizado for&ccedil;ado e essa tend&ecirc;ncia podem se refletir nos futuros lan&ccedil;amentos imobili&aacute;rios. O mercado tem v&aacute;rios exemplos de pr&eacute;dios que vendem apartamentos n&atilde;o muito espa&ccedil;osos, mas que possuem uma &aacute;rea completa de lazer coletiva. Ser&aacute; que isso ser&aacute; visto como uma for&ccedil;a, ou uma fraqueza desse modelo de empreendimento? Voc&ecirc; trocaria uma varanda maior para dividir uma academia com dezenas pessoas nesse momento? &Eacute; preciso repensar o &oacute;bvio e ter a certeza que os valores de ontem n&atilde;o se aplicam mais hoje. &Eacute; a verdadeira metamorfose ambulante.</p>\r\n<p>Aproveitando o assunto&hellip;</p>\r\n<p><strong>Lazer coletivo:</strong></p>\r\n<p>As academias fazem parte de um setor da economia que provavelmente precisar&atilde;o readaptar o funcionamento. Os dias de dividir e ignorar a higieniza&ccedil;&atilde;o dos aparelhos ficaram no passado, nos anos A.C. (antes da Covid-19). Uma solu&ccedil;&atilde;o talvez seja desenvolver um sistema de agendamento de treino, no qual poucos alunos teriam acesso aos equipamentos e ao final do uso uma equipe da limpeza seja acionada. Al&eacute;m de determinar um hor&aacute;rio para voc&ecirc; ingressar no espa&ccedil;o f&iacute;sico para treinar, o seu tempo teria um per&iacute;odo m&aacute;ximo de dura&ccedil;&atilde;o, para n&atilde;o atrasar o exerc&iacute;cio do &ldquo;coleguinha&rdquo;. Isso tudo feito com um distanciamento seguro entre os clientes, staff, etc. Mas tem modelos que precisar&atilde;o ser reconstru&iacute;dos do zero. &nbsp;Voc&ecirc; sairia hoje da sua casa pra fazer aulas de spinning, running e jumping, que concentram v&aacute;rias pessoas numa sala pequena com pouca, ou nenhuma, circula&ccedil;&atilde;o de ar? Isso sem mencionar as lutas de contato com jud&ocirc; e jiu-jitsu.</p>\r\n<p>E n&atilde;o para a&iacute;. Shows, teatros, cinemas, restaurantes, pra&ccedil;as, shoppings, s&atilde;o lugares que precisam de pessoas presentes para sobreviver. Nesses casos, coexistir &eacute; existir. Uma certeza &eacute; que eles continuar&atilde;o vivos, mas precisar&atilde;o repensar sua opera&ccedil;&atilde;o e, com certeza, a sua capacidade. Se os cinemas de rua deram lugar para o cinema de shopping por causa da seguran&ccedil;a, pra onde eles migrar&atilde;o agora? O foco &eacute; manter condi&ccedil;&otilde;es para o lazer atrelando-o ao afastamento social saud&aacute;vel entre as pessoas. Vai demorar para estrear a pr&oacute;xima estreia lotada.</p>\r\n<p><strong>A populariza&ccedil;&atilde;o das lives:</strong></p>\r\n<p>Talvez uma alternativa para essa mudan&ccedil;a de cen&aacute;rios esteja na populariza&ccedil;&atilde;o das lives. Ser&aacute; que o setor de espet&aacute;culos est&aacute; preparado para tirar do espa&ccedil;o f&iacute;sico as suas apresenta&ccedil;&otilde;es e coloc&aacute;-los no digital? A resposta (como voc&ecirc; pode perceber nos t&oacute;picos quentes do dia, v&iacute;deos mais assistidos das redes e memes) &eacute; sim. A transmiss&atilde;o ao vivo se tornou algo comum nos dias atuais, tanto para artistas divulgarem a sua arte, quanto para ilustres desconhecidos abordarem os assuntos dos mais variados.</p>\r\n<p>Voc&ecirc; pagaria para ver o seu artista favorito por uma tela? &nbsp;Na &eacute;poca do Vinil, CD, VHS, DVD, Blu-Ray e afins, era comum comprar uma grava&ccedil;&atilde;o de um show ao vivo. A diferen&ccedil;a &eacute; que agora nesse mundo conectado voc&ecirc; pode interagir com as apresenta&ccedil;&otilde;es dos seus artistas favoritos, mandando mensagens e doando dinheiro. Provavelmente essa n&atilde;o ser&aacute; a realidade de todos os espet&aacute;culos, por&eacute;m essa foi uma janela escancarada pela quarentena que dificilmente se fechar&aacute; t&atilde;o r&aacute;pido.</p>\r\n<p>E se em vez de colocar a playlist de um artista para tocar no seu evento voc&ecirc; puder contratar ele para uma apresenta&ccedil;&atilde;o virtual exclusiva para voc&ecirc; e seus amigos compartilharem? Artistas que dependem de couvert art&iacute;stico para angariar recursos costumam estar limitados ao espa&ccedil;o f&iacute;sico, mas com a internet eles possuem (literalmente) um mundo de possibilidades. Sites como o MandaSalve j&aacute; est&atilde;o vendendo mensagens personalizadas de influenciadores e artistas.</p>\r\n<p>Quando falamos do consumo de material audiovisual lembramos do streaming, que continua ganhando for&ccedil;a na crise, mas est&aacute; vendo o renascimento de um antigo concorrente.</p>\r\n<p><strong>A volta da TV e do jornalismo:</strong></p>\r\n<p>O mundo vivia, e vive ainda, uma mudan&ccedil;a de ares quando o assunto &eacute; consumo de conte&uacute;do. As m&iacute;dias tradicionais (r&aacute;dio e TV) come&ccedil;aram a perder for&ccedil;a para os servi&ccedil;os de streaming. No in&iacute;cio do ano de 2020 a Netflix surpreendeu o mercado ao publicar o n&uacute;mero de assinantes. No &uacute;ltimo trimestre de 2019 a empresa aumentou a base de assinantes em 8,8 milh&otilde;es, tendo agora algo em torno de 167 milh&otilde;es de assinantes. O plot twist &eacute; que se esperava um crescimento, mas menor.</p>\r\n<p>Esse exemplo ajuda na ilustra&ccedil;&atilde;o que os servi&ccedil;os de streaming n&atilde;o s&atilde;o mais o futuro, mas o presente. Tanto &eacute; verdade que as mais diversas produtoras de conte&uacute;do audiovisual no mundo est&atilde;o correndo para criar uma plataforma para chamar de sua, como aconteceu com a Disney e com a Globo.</p>\r\n<p>O motivo do crescimento &eacute; simples. No mundo moderno o cotidiano &eacute; t&atilde;o corrido que n&atilde;o d&aacute; para como acompanhar uma grade de programa&ccedil;&atilde;o. Por isso, &eacute; necess&aacute;rio um conte&uacute;do on demand que seja reproduzido no momento que voc&ecirc; quer consumi-lo. Por&eacute;m, no meio do caminho tinha uma pandemia.</p>\r\n<p>Na crise de sa&uacute;de que vivemos e seus in&uacute;meros desdobramentos pol&iacute;ticos, econ&ocirc;micos, sociais e culturais, os programas jornal&iacute;sticos voltaram a chamar aten&ccedil;&atilde;o e o resultado se traduz em espectadores. Prova disso &eacute; que o Jornal Nacional do dia 17 de mar&ccedil;o bateu seu recorde de audi&ecirc;ncia em 2020 na Grande S&atilde;o Paulo, com pico de 41,3 pontos. Cinco em cada dez televisores paulistanos estava sintonizam no telejornal.</p>\r\n<p>Muito disso se deve tamb&eacute;m a express&atilde;o que se destacou no mundo h&aacute; alguns anos &ldquo;Fear of missing out&rdquo; (&ldquo;medo de ficar de fora&rdquo;, em tradu&ccedil;&atilde;o livre), conhecido tamb&eacute;m pela sigla FoMO. A nossa sociedade hiperconectada sente medo de perder alguma coisa. Se antigamente o pavor era ficar de fora de algum meme, ou um trending topics quente no twitter, agora s&atilde;o as informa&ccedil;&otilde;es sobre o coronav&iacute;rus que est&atilde;o no holofote. A internet ainda &eacute; usada como uma ferramenta para esse consumo. Mas quando procuramos informa&ccedil;&otilde;es atualizadas e confi&aacute;veis os meios tradicionais de imprensa ainda s&atilde;o uma op&ccedil;&atilde;o que possuem credibilidade. Em tempos de p&oacute;s-verdade saber onde se informar &eacute; essencial. Afinal, como dizem, &ldquo;fonte &eacute; tudo&rdquo;.</p>\r\n<p><strong>Culin&aacute;ria em alta:</strong></p>\r\n<p>Outra coisa do passado que voltou com for&ccedil;a &eacute; a n&atilde;o depend&ecirc;ncia dos servi&ccedil;os de gastronomia. O setor gastron&ocirc;mico conseguiu rapidamente reformular&nbsp;sua atua&ccedil;&atilde;o e manter algum lucro apesar da crise. Por&eacute;m, com as incertezas sobre o que vai acontecer a ideia geral &eacute; tentar conter gastos desnecess&aacute;rios. Pensando nisso, est&aacute; cada vez mais comum acompanhar nas redes as aventuras gastron&ocirc;micas das pessoas fazendo de tudo: de p&atilde;o a pratos cl&aacute;ssicos. A cozinha &eacute; um lugar de encontro e troca com o outro. Cozinhar pode virar um programa de fam&iacute;lia, que al&eacute;m de baratear sua refei&ccedil;&atilde;o vai gerar novos momentos de conex&atilde;o.</p>\r\n<p>Um dos motivos disso &eacute; enorme oferta de receitas na internet (YouTube, sites e cursos on-line). Al&eacute;m da popularidade que o tema ganhou recentemente no pa&iacute;s com programas sobre o tema como o MasterChef e o Mestres do Sabor.</p>\r\n<p>Ainda s&atilde;o muitas as mudan&ccedil;as dessa nossa nova normalidade. Por isso dividimos esse artigo em dois. Clique aqui para conferir a segunda parte e descobrir que novos rumos o mundo tomar&aacute;.</p>\r\n<p>&nbsp;</p>', '1604936398.jpg', 'oecNzKHOtNU', '2020-11-09 12:39:47'),
(11, 'Três estratégias para voltar com tudo', 8, '1', '<p>Mesmo o mais prudente dos empres&aacute;rios, ao ver o seu setor retomando fica com a pulga atr&aacute;s da orelha para saber quando ser&aacute; o melhor momento para voltar tamb&eacute;m. Muito se fala de reabertura, por&eacute;m o mais certo seria chamarmos de recome&ccedil;o.</p>', '<p>Mesmo o mais prudente dos empres&aacute;rios, ao ver o seu setor retomando fica com a pulga atr&aacute;s da orelha para saber quando ser&aacute; o melhor momento para voltar tamb&eacute;m. Muito se fala de reabertura, por&eacute;m o mais certo seria chamarmos de recome&ccedil;o. Porque o&nbsp;<a href=\"https://especialista-pme.com.br/678-2\">novo normal</a>&nbsp;mudou tudo e ningu&eacute;m tem realmente certeza do que vai acontecer a partir de agora. Por&eacute;m duas coisas parecem certas: uma reabertura atabalhoada ignorando os n&uacute;meros da COVID-19 e sem testes levar&aacute; a uma nova quarentena, e que o planejamento &eacute; a alternativa certa para o empreendedor que visa a voltar com tudo para esse novo mundo.</p>\r\n<p>Como a primeira certeza n&atilde;o est&aacute; no nosso controle (e j&aacute; ganhou o apelido de quarentena i&ocirc;i&ocirc;) vamos focar no segundo, dando exemplos de estrat&eacute;gias de sucesso que j&aacute; despontam como solu&ccedil;&atilde;o para esse momento de instabilidade e de reabertura do com&eacute;rcio.&nbsp;</p>\r\n<p>Conhe&ccedil;a as tr&ecirc;s estrat&eacute;gias para voltar com tudo:</p>\r\n<p><strong>Clubes de Assinatura:</strong></p>\r\n<p>O Clube de Assinatura &eacute; uma estrat&eacute;gia de fideliza&ccedil;&atilde;o de cliente, que ficou famosa com o Dollar Shave Club (que fornece l&acirc;minas de barbear mensalmente, al&eacute;m de outros produtos de limpeza pessoal), e com os clubes de vinho (voc&ecirc; paga uma mensalidade e recebe periodicamente diferentes estilos dessa bebida em casa). Mas em meio a pandemia do novo coronav&iacute;rus, diversos setores aderiram a esse m&eacute;todo e j&aacute; apresentam bons resultados. Se voc&ecirc; achava que pensar em fideliza&ccedil;&atilde;o de clientes em momentos delicados era utopia, &eacute; bom rever os seus conceitos.</p>\r\n<p>Quem adere a esse tipo de estrat&eacute;gia consegue estreitar seu relacionamento com os seus consumidores, al&eacute;m de come&ccedil;ar a fazer parte do cotidiano deles. Qualquer empres&aacute;rio pode elaborar um clube de assinatura para chamar de seu, mas &eacute; preciso ficar de olho em algumas coisas importantes. Caroline Minucci, consultora de neg&oacute;cios do Sebrae-SP, disse em entrevista, que para atingir o sucesso o primeiro ponto &eacute; pensar no produto ou servi&ccedil;o que est&aacute; sendo disponibilizado. No caso de uma assinatura &eacute; ideal que ele tenha um uso recorrente. Ainda segundo Caroline, &ldquo;voc&ecirc; precisa conhecer os h&aacute;bitos de seu cliente e saber se ele consome esse produto ou servi&ccedil;o de forma cont&iacute;nua&rdquo;. Para ajudar a ilustrar, vamos nos basear nesse exemplo: se uma empresa vende l&acirc;mpadas ela pode fornecer esse tipo de produto periodicamente para outras empresas, escrit&oacute;rios ou lugares onde exista um consumo massivo do produto. N&atilde;o faz sentido ela querer fornecer l&acirc;mpadas mensalmente para um casal que mora num apartamento, por exemplo, que pode at&eacute; precisar de uma l&acirc;mpada nova pontualmente, mas n&atilde;o possui uma demanda recorrente para essa oferta.</p>\r\n<p>Se a gente disse que o&nbsp;self-service estava condenado&nbsp;(pelo menos por enquanto) nesse novo normal, quem trabalha no&nbsp;ramo de restaurantes&nbsp;pode encontrar no clube de assinaturas uma sa&iacute;da. E o melhor, nesse modelo, qualquer oferta pode ser adaptada ao p&uacute;blico-alvo. A ideia dessa t&aacute;tica &eacute; usar ao m&aacute;ximo a personaliza&ccedil;&atilde;o e descontos para atrair e reter os clientes. Ou seja, ao mesmo tempo voc&ecirc; pode disponibilizar para quem est&aacute; de dieta e necessita de refei&ccedil;&otilde;es equilibradas e tamb&eacute;m falar com outro estilo de consumidor. Vamos olhar o exemplo de uma pessoa que ama comer feij&atilde;o todos os dias, mas n&atilde;o tem tempo e nem sabe fazer. Essa pessoa poderia receber apenas feij&atilde;o todos os dias, num pre&ccedil;o adaptado pra essa por&ccedil;&atilde;o. Parece pouco, mas de gr&atilde;o em gr&atilde;o&hellip;</p>\r\n<p>E quando falamos que todos os setores podem se adaptar a essa estrat&eacute;gia, usamos o exemplo da Petlove. Marcio Waldman, fundador e CEO da empresa, comemorou recentemente que o clube de assinaturas est&aacute; dando certo. &ldquo;A assinatura &eacute; o grande sucesso da nossa loja. Representa 65% do volume de faturamento da companhia e cresce muito mais do que a Petlove cresce por ano&rdquo;, afirmou em entrevista.</p>\r\n<p>Para operar nesse modelo &eacute; preciso ficar de olho: no planejamento. &Eacute; preciso elaborar todo processo interno de opera&ccedil;&atilde;o, fazer os treinamentos necess&aacute;rios com sua equipe e depois focar em como encantar esse cliente. Vale ter uma aten&ccedil;&atilde;o especial &agrave; log&iacute;stica, j&aacute; que estamos vendendo itens de necessidade b&aacute;sica para quem recebe, portanto nada de falhas na entrega nem de qualidade do produto/servi&ccedil;o.</p>\r\n<p>Por fim, se voc&ecirc; for se aventurar nesse modelo, n&atilde;o se esque&ccedil;a de manter um bom relacionamento com seus clientes. Vale lembrar que o encantamento come&ccedil;a na comunica&ccedil;&atilde;o e no atendimento. S&atilde;o os seus clientes que ir&atilde;o indicar a sua empresa para quem ainda est&aacute; fora do clube de vantagens. Por isso, n&atilde;o se esque&ccedil;a, mapeie, se comunique, se relacione com seus consumidores e potenciais clientes.</p>\r\n<p><strong>Redescubra o seu pr&oacute;prio universo.</strong></p>\r\n<p>Se o mundo n&atilde;o &eacute; mais o mesmo l&aacute; fora, por que o seu neg&oacute;cio permanece igual? Essa &eacute; a pergunta que faz muito empreendedor se revirar no travesseiro, mas calma! Antes de se desesperar, que tal perder um tempo tentando entender o universo no qual sua empresa est&aacute; inserida. Foi essa an&aacute;lise que fez alguns empreendedores buscarem alternativas para se manter no mercado. Os donos de academia, por exemplo, viram de um dia para o outro o seu modelo de opera&ccedil;&atilde;o se tornar incompat&iacute;vel com o momento atual. Muitos migraram &agrave;s aulas virtuais, todavia muitas vezes essa sa&iacute;da (por mais que tenha lados positivos) sozinha n&atilde;o &eacute; o suficiente para manter as contas em dia.&nbsp;</p>\r\n<p>Qual for&ccedil;a intang&iacute;vel que o seu neg&oacute;cio possui que pode ajudar a tra&ccedil;ar um caminho alternativo? No caso das academias, por exemplo, &eacute; poss&iacute;vel recorrer &agrave;s informa&ccedil;&otilde;es que possuem mais valor, sua base de clientes. Sabe quando diziam que a informa&ccedil;&atilde;o detalhada do consumidor seria o petr&oacute;leo do futuro? &Eacute; bom entender que esse futuro j&aacute; chegou h&aacute; algum tempo. As informa&ccedil;&otilde;es de contato, hist&oacute;rico, frequ&ecirc;ncia de treinos, entre outras, podem servir para guiar estrat&eacute;gias que fa&ccedil;am sentido dentro desse universo. Vender produtos da linha fit, refei&ccedil;&otilde;es focadas em cada tipo de objetivo, personal trainer remoto, servi&ccedil;os de nutricionistas, est&atilde;o entre as in&uacute;meras possibilidades.</p>\r\n<p>O empres&aacute;rio Felipe Sato, dono da academia Fitclub, aproveitou esse lead qualificado para fortalecer sua empresa nesse tempo de crise (segundo o Sebrae o setor sofreu uma queda de at&eacute; 72% do faturamento na pandemia). Para manter a empresa ele recorreu &agrave; alimenta&ccedil;&atilde;o, que antigamente representava a apenas 20% do faturamento total, mesmo sem nunca ter trabalhado com delivery antes. Ele conseguiu manter todos os funcion&aacute;rios do empreendimento, mas agora focados nessa nova frente de neg&oacute;cio. A ideia inicial de Sato era focar no com&eacute;rcio local, dentro do seu target, mas agora ele j&aacute; tem pedidos de outros estados e as vendas j&aacute; dobraram desde que a opera&ccedil;&atilde;o de delivery come&ccedil;ou.&nbsp;</p>\r\n<p>Faz sentido colocar no mesmo universo uma academia com a venda de comidas saud&aacute;veis? Agora faz.</p>\r\n<p><strong>N&atilde;o gaste, invista.</strong></p>\r\n<p>A verdade &eacute; simples: muita coisa mudou ou vai mudar, mas &eacute; necess&aacute;rio se adaptar &agrave;s mudan&ccedil;as e, principalmente comunic&aacute;-las. Atualmente a maneira mais f&aacute;cil de fazer essa comunica&ccedil;&atilde;o passa por boas estrat&eacute;gias de marketing digital ou off-line. Concentrar a informa&ccedil;&atilde;o num perfil oficial nas redes sociais ou num site institucional, continua sendo uma maneira f&aacute;cil de atingir o seu p&uacute;blico de forma mais &aacute;gil e com menos custo, por&eacute;m existem alguns investimentos que o empreendedor pode fazer para otimizar os resultados da comunica&ccedil;&atilde;o. Aproveite o seu cadastro de clientes para elabora&ccedil;&atilde;o de uma comunica&ccedil;&atilde;o por e-mail marketing, ou por aplicativos de mensagem. Caso n&atilde;o saiba como criar uma arte boa para essas plataformas, mande uma mensagem de texto mesmo explicando a nova opera&ccedil;&atilde;o ou fa&ccedil;a o bom e velho telefonema.</p>\r\n<p>Muitos empres&aacute;rios fizeram um usu&aacute;rio para vender em grandes marketplaces. &Eacute; claro, d&aacute; visibilidade, rende umas vendas, mas a &ldquo;comiss&atilde;o&rdquo; paga pela opera&ccedil;&atilde;o ainda &eacute; alta. Nesses casos muitos empreendedores mandam com o pedido uma comunica&ccedil;&atilde;o visual convidando o novo cliente a conhecer uma plataforma de propriedade da marca. &Eacute; muito mais f&aacute;cil e barato voc&ecirc; convencer algu&eacute;m que j&aacute; conhece o seu produto a voltar a compr&aacute;-lo do que algu&eacute;m que nunca ouviu falar de voc&ecirc;. Mas pra isso dar certo voc&ecirc; precisa ter um site &aacute;gil com layout intuitivo e uma comunica&ccedil;&atilde;o visual bacana na hora da entrega. N&atilde;o veja isso como um gasto, veja isso como um investimento.</p>\r\n<p>Claro que voc&ecirc; pode investir em outras coisas no digital, como criar impulsionamentos com palavra-chave, pensar no inbound marketing ou em grandes investimentos off-line. Mas quer saber? &Eacute; preciso aprender voltar a andar antes de querer correr. Por isso, tenha calma, planeje seus investimentos para que eles n&atilde;o se tornem gastos desnecess&aacute;rios.</p>\r\n<p>Empreender &eacute; igual a viver, &eacute; preciso de seguran&ccedil;a para ser feliz.</p>\r\n<p>Fontes:</p>\r\n<p><a href=\"https://revistapegn.globo.com/Banco-de-ideias/Saude/noticia/2020/06/na-pandemia-academia-fatura-com-venda-de-refeicoes-saudaveis-pelo-whatsapp.html\">https://revistapegn.globo.com/Banco-de-ideias/Saude/noticia/2020/06/na-pandemia-academia-fatura-com-venda-de-refeicoes-saudaveis-pelo-whatsapp.html</a></p>\r\n<p><a href=\"https://revistapegn.globo.com/Banco-de-ideias/Servicos/noticia/2020/06/clubes-de-assinatura-crescem-com-distanciamento-social.html\">https://revistapegn.globo.com/Banco-de-ideias/Servicos/noticia/2020/06/clubes-de-assinatura-crescem-com-distanciamento-social.html</a></p>', '1604936487.jpg', 'fN3mxNcmDCo', '2020-11-09 12:41:16'),
(12, 'Saúde mental: a pandemia invisível ', 7, '1', '<p>Estamos h&aacute; algum tempo falando da COVID-19 e sua implica&ccedil;&atilde;o para a pessoa f&iacute;sica e jur&iacute;dica, mas n&atilde;o podemos ignorar uma pandemia invis&iacute;vel que se alastra tamb&eacute;m: sa&uacute;de mental.</p>', '<p>Estamos h&aacute; algum tempo falando da COVID-19 e sua implica&ccedil;&atilde;o para a pessoa f&iacute;sica e jur&iacute;dica, mas n&atilde;o podemos ignorar uma pandemia invis&iacute;vel que se alastra tamb&eacute;m: sa&uacute;de mental. Chegou a hora de lembrar que os cuidados para manter a sa&uacute;de corporal v&ecirc;m de cima, da cabe&ccedil;a para ser mais exato.</p>\r\n<p>A incerteza do que est&aacute; por vir e os n&uacute;meros da atual pandemia v&ecirc;m afetando o nosso dia a dia, mesmo que voc&ecirc; n&atilde;o repare. O que pode acabar afetando seu sono, seu cansa&ccedil;o, sua ansiedade e, &eacute; claro, a sua entrega (seja no ambiente corporativo ou n&atilde;o). E d&aacute; para entender o porqu&ecirc;.</p>\r\n<p>Segundo o psic&oacute;logo Felipe Ornell, do Hospital de Cl&iacute;nicas de Porto Alegre: &ldquo;quando estamos diante de uma amea&ccedil;a &agrave; vida, ativamos o mecanismo de luta ou fuga&rdquo;. E se antigamente nossos antepassados usavam esse mecanismo para fugir do predador, atualmente a nossa sociedade enfrenta um inimigo invis&iacute;vel, que pode estar em qualquer lugar. Uma amea&ccedil;a permanente que dispara o gatilho da tens&atilde;o a todo instante. Nosso mecanismo de defesa acaba virando estresse. E estresse em excesso pode desencadear ansiedade e at&eacute; depress&atilde;o. Mas calma! Respira! Tem muitas alternativas para fugir disso tudo.</p>\r\n<p><strong>Socialize no isolamento social.</strong></p>\r\n<p>A sa&iacute;da pontual para frear o avan&ccedil;o do coronav&iacute;rus foi o isolamento social. Que fique claro, essa medida foi (e ainda &eacute;) vital para resguardar a sa&uacute;de p&uacute;blica e diminuir o n&uacute;mero de cont&aacute;gios. Por&eacute;m, temos que frisar: n&atilde;o sair &agrave;s ruas pesa na cabe&ccedil;a.</p>\r\n<p>Um estudo da Universidade Brigham Young, nos Estados Unidos, mostrou que a falta de contatos sociais traz riscos &agrave; sa&uacute;de equivalentes ao consumo de 15 cigarros por dia, al&eacute;m de ser duas vezes mais prejudicial que a obesidade.&nbsp;&nbsp;&Eacute; ineg&aacute;vel que somos seres soci&aacute;veis, necessitamos de trocas di&aacute;rias de carinho, di&aacute;logos, emo&ccedil;&otilde;es e olhares. Ser feliz &eacute; mais do que viver, &eacute; conviver e a falta da conviv&ecirc;ncia afeta, literalmente nossa sa&uacute;de.</p>\r\n<p>Por isso, alertamos para a necessidade de adaptar essas intera&ccedil;&otilde;es. Use e abuse dos aplicativos de conversas, fa&ccedil;a videochamadas, troque mensagens, comente, responda, poste, escreva, leia, componha algo para algu&eacute;m. N&atilde;o &eacute; a mesma coisa do que o conv&iacute;vio ao vivo, mas as intera&ccedil;&otilde;es a dist&acirc;ncia ajudam a preencher o vazio deixado pelo distanciamento.</p>\r\n<p>Se voc&ecirc; estiver se sentindo sozinho, n&atilde;o tenha medo nem cerim&ocirc;nias, fale com algu&eacute;m. Procure quem voc&ecirc; ama para descarregar um pouco no outro, mas lembre-se de absorver do outro tamb&eacute;m. Como diria o poeta Tom Jobim: &ldquo;Fundamental &eacute; mesmo o amor, &eacute; imposs&iacute;vel ser feliz sozinho&rdquo;.</p>\r\n<p><strong>Proposta do bem.</strong></p>\r\n<p>Temos aqui uma dica, ou melhor, uma proposta para fazer:</p>\r\n<p>Resgate um amigo do passado. A gente sabe que a rotina corrida da vida das pessoas acaba, sem querer, levando pro passado amizades que n&atilde;o tem motivo para ficar l&aacute;. Sabe aquele amigo do col&eacute;gio, da faculdade, de um trabalho antigo, que voc&ecirc; se distanciou, mas sente uma saudade danada? Que quando voc&ecirc; lembra de uma hist&oacute;ria com ele, voc&ecirc; logo pensa: &ldquo;nossa eu adorava essa pessoa, como ser&aacute; que ela est&aacute; hoje?&rdquo;. Aproveite essa pandemia para resgatar esse contato. Traz&ecirc;-lo de volta para a sua vida &eacute; um exerc&iacute;cio sadio para sua mente, al&eacute;m de ser uma troca bacana de energia, que te lembrar&aacute; de momentos bons e afastar&aacute;, mesmo que por poucos minutos, do cen&aacute;rio atual. Recupere os amigos que o tempo levou de ti.</p>\r\n<p><strong>Dinheiro n&atilde;o &eacute; rem&eacute;dio.</strong></p>\r\n<p>O enfermeiro Carlos Sequeira, professor da Escola Superior de Enfermagem do Porto, em Portugal, afirma que as dificuldades financeiras podem desenrolar surtos de ansiedade e depress&atilde;o. &nbsp;O seu neg&oacute;cio est&aacute; sofrendo com a pandemia, mas lembre-se que todos est&atilde;o (alguns mais, outros menos, mas tudo est&aacute; sendo impactado). Para driblar essa energia negativa &eacute; preciso se reinventar e readequar suas expectativas e buscar um equil&iacute;brio tanto nas contas quanto na mente. Em vez de focar no quanto voc&ecirc; n&atilde;o ganhou, pense em quanto voc&ecirc; est&aacute; economizando. Evite criar tens&otilde;es desnecess&aacute;rias sobre coisas que voc&ecirc; n&atilde;o pode controlar. Troque o desespero pelo planejamento. Planeje seu neg&oacute;cio para todos os cen&aacute;rios poss&iacute;veis, isso ir&aacute; te ajudar a pensar nas solu&ccedil;&otilde;es e n&atilde;o nos problemas. Foque no plano A, mas fa&ccedil;a tamb&eacute;m B, C, at&eacute; o Z.&nbsp;</p>\r\n<p><strong>Fa&ccedil;a o b&aacute;sico.</strong></p>\r\n<p>Falamos algumas vezes sobre o&nbsp;<a href=\"https://especialista-pme.com.br/678-2\">&ldquo;novo normal&rdquo;&nbsp;</a>aqui no blog, mas temos que resgatar algo ainda mais normal, a rotina. Quando estamos em casa tendemos a ser mais flex&iacute;veis com os hor&aacute;rios para dormir, acordar, almo&ccedil;ar, jantar, se exercitar, etc. Manter uma regularidade de hor&aacute;rio nos afazeres di&aacute;rios ajuda na manuten&ccedil;&atilde;o do seu foco.</p>\r\n<p>Tome alguns minutos de sol todos os dias, pode ser da varanda, da janela, do quintal, da laje, como der. Lembrando sempre que o mais aconselh&aacute;vel &eacute; tomar sol antes das 11h ou ap&oacute;s &agrave;s 14h. E nunca se esque&ccedil;a do filtro solar. Pode parecer pouca coisa, mas essa exposi&ccedil;&atilde;o &agrave; luz estimula a libera&ccedil;&atilde;o de serotonina, subst&acirc;ncia que auxilia na sensa&ccedil;&atilde;o de bem-estar. O sol &eacute; vital para vida.</p>\r\n<p><strong>Corpo s&atilde;o, mente s&atilde;.</strong></p>\r\n<p>Pratique exerc&iacute;cios regularmente. O Dr. Arthur Guerra, professor da Faculdade de Medicina da USP, falou em entrevista para Forbes que o exerc&iacute;cio &eacute; o melhor aliado da sa&uacute;de mental neste per&iacute;odo dif&iacute;cil. Para ele, essa &eacute; a melhor v&aacute;lvula de escape para a ansiedade e o melhor rem&eacute;dio para manter uma nossa sa&uacute;de mental. Os principais benef&iacute;cios s&atilde;o: aliviar a ansiedade e seu efeito antidepressivo poderoso, ao abrandar a resposta do c&eacute;rebro ao estresse; traz uma sensa&ccedil;&atilde;o de bem-estar (atividade f&iacute;sica libera endorfinas, drogas naturais produzidas pelo nosso organismo que d&atilde;o sensa&ccedil;&atilde;o de prazer); a mente fica ocupada, focada no tarefa, abstraindo o entorno momentaneamente; promove melhor qualidade do sono e ajuda a controlar o peso, o que aumenta a autoestima; e fortalece o sistema imunol&oacute;gico.&nbsp;</p>\r\n<p>Ressaltando que o equil&iacute;brio do seu corpo come&ccedil;a pelo o que voc&ecirc; come. Por isso, d&ecirc; prefer&ecirc;ncia para o consumo de frutas, hortali&ccedil;as e alimentos naturais e frescos.&nbsp;</p>\r\n<p><strong>Est&aacute; em crise?</strong></p>\r\n<p>Bateu a &ldquo;depr&ecirc;&rdquo;? Procure ajuda. Caso voc&ecirc; n&atilde;o possua uma assist&ecirc;ncia de apoio emocional, procure o contato de um psic&oacute;logo ou psicanalista e fa&ccedil;a sua consulta. Hoje em dia d&aacute; para fazer tudo por videochamada, voc&ecirc; nem vai precisar sair de casa. Por conta da COVID-19 alguns lugares est&atilde;o fazendo Iniciativas de Acolhimento gratuitas, como o Instituto de Psicologia da USP, a rede &ldquo;Rela&ccedil;&otilde;es Simplificadas&rdquo;, o grupo Escuta 60+, entre outros.&nbsp;</p>\r\n<p>Cuidar da sa&uacute;de mental &eacute; t&atilde;o ou mais importante que os cuidados com sua sa&uacute;de f&iacute;sica e ele come&ccedil;a nas pequenas coisas. Tedros Adhanom, diretor-geral da Organiza&ccedil;&atilde;o Mundial da Sa&uacute;de alerta: &ldquo;o impacto da pandemia na sa&uacute;de mental das pessoas j&aacute; &eacute; extremamente preocupante&rdquo;. Cabe ao empres&aacute;rio zelar pelo bem-estar da sua equipe estimulando momentos reflexivos, mantendo contato e monitorando os seus colaboradores, prestando as assist&ecirc;ncias necess&aacute;rias, investindo em solu&ccedil;&otilde;es para cuidar da manuten&ccedil;&atilde;o de renda deles em caso de doen&ccedil;as ou acidentes, e estando cada vez mais presente mesmo que a dist&acirc;ncia. O l&iacute;der nessas horas precisa ser um norte e mostrar caminhos alternativos para que o objetivo final (bem-estar dos seus colaboradores e o foco dos seus pares) seja mantido.</p>\r\n<p>Compartilhe essa ideia com seu time e preserve quem voc&ecirc; ama.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Fonte:</p>\r\n<p><a href=\"https://www.byu.edu/\">Byu.edu</a></p>\r\n<p><a href=\"https://forbes.com.br/colunas/2020/05/arthur-guerra-exercicio-e-o-melhor-aliado-da-saude-mental-neste-periodo-dificil/\">Forbes.com.br</a></p>\r\n<p><a href=\"https://saude.abril.com.br/mente-saudavel/a-epidemia-oculta-saude-mental-na-era-da-covid-19/\">Saude.abril.com.br</a></p>\r\n<p><a href=\"https://saude.ig.com.br/2020-04-17/isolamento-pesou-veja-grupos-de-psicologos-que-atendem-on-line-e-gratuitamente.html\">Saude.ig.com.br</a></p>\r\n<p><a href=\"http://www.ip.usp.br/site/covid-19-apoio-psicologico-online/\">Ip.usp.br</a></p>\r\n<p><a href=\"https://nacoesunidas.org/oms-o-impacto-da-pandemia-na-saude-mental-das-pessoas-ja-e-extremamente-preocupante/\">Nacoesunidas.org</a></p>', '1604936589.jpg', 'DmebwDTlvrA', '2020-11-09 12:43:00'),
(13, 'Atualize-se - Especialista PME', 4, '1', '<p>Recentemente falamos sobre a import&acirc;ncia do digital num&nbsp;<a href=\"https://especialista-pme.com.br/a-hora-do-digital\">momento de crise</a>, mas precisa ficar claro que n&atilde;o adianta criar um site do zero sem ter em mente algumas coisas, como um layout intuitivo e de f&aacute;cil navega&ccedil;&atilde;o. Al&eacute;m disso, alguns empreendedores at&eacute; possuem uma representa&ccedil;&atilde;o digital, por&eacute;m ela carece de atualiza&ccedil;&atilde;o, seja ela pontual ou robusta. Pensando nisso, vamos compartilhar alguns entraves que os empres&aacute;rios encontram nesse momento para ajudar a dribl&aacute;-los. No final desse artigo, ainda vamos abrir o jogo e mostrar o que estamos preparando para nossos Corretores.</p>', '<p><strong>Tem um dinossauro na rede.</strong></p>\r\n<p>Imagine o seguinte cen&aacute;rio: l&aacute; no in&iacute;cio dos anos 2000 o site era o cart&atilde;o de visitas digital de uma empresa. Se hoje em dia ter um perfil nas redes sociais ativo faz parte do &ldquo;pacote b&aacute;sico&rdquo;, na &eacute;poca que elas ainda estavam engatinhando no Brasil, ter um dom&iacute;nio &ldquo;. com.br&rdquo; era o suprassumo. Por&eacute;m, pouco tempo depois era poss&iacute;vel ver a populariza&ccedil;&atilde;o da socializa&ccedil;&atilde;o na internet com cria&ccedil;&atilde;o do Orkut B&uuml;y&uuml;kk&ouml;kten (lembra dele?) e depois do Mark Zuckerberg. At&eacute; que chegou a vez das PMEs criarem um perfil nessas redes para atingir seu p&uacute;blico.</p>\r\n<p>E o site? Ele continuou no cart&atilde;o de visitas, mas se tornou algo menos essencial e foi, muitas vezes, ignorado por esses empres&aacute;rios. Nessa &eacute;poca, o volume de vendas feitas pelo e-commerce n&atilde;o era nada de perto dos R$75,1 bi atingidos no Brasil em 2019, como mostrou o relat&oacute;rio NeoTrust 2&ordf; edi&ccedil;&atilde;o. Agora, no meio da crise, o empres&aacute;rio voltou correndo para o digital, mas encontrou um dinossauro na sua rede.</p>\r\n<p>O que fazer?</p>\r\n<p>O problema de ter um site com uma linguagem ultrapassada &eacute; que voc&ecirc; precisar&aacute; conviver com ela. Se voc&ecirc; contratou uma empresa para fazer esse servi&ccedil;o pra voc&ecirc; h&aacute; dez anos, voc&ecirc; precisa entender que a linguagem para qual ele foi pensado pode simplesmente n&atilde;o funcionar hoje em dia. Quem acessa um site pode n&atilde;o perceber que ele &eacute; muito al&eacute;m do que se v&ecirc;. Na verdade, podemos dizer que existem dois &ldquo;sites&rdquo;, o externo que qualquer pessoa que digita o dom&iacute;nio consegue ter acesso, e o &ldquo;administrativo&rdquo; um painel de controle no qual quem desenvolve o site consegue operar (modificar, incluir, apagar, etc). Um painel ultrapassado, dif&iacute;cil de entender, tem tudo para inviabilizar qualquer atualiza&ccedil;&atilde;o.</p>\r\n<p>Normalmente esses sites que ficaram no passado n&atilde;o tem uma linguagem moderna e, com um exemplo, vamos explicar o porqu&ecirc;. H&aacute; 10 anos um site dificilmente era pensando para funcionar no celular, porque os celulares mal conseguiam acessar a internet. A fun&ccedil;&atilde;o de celular era focada nas liga&ccedil;&otilde;es, as c&acirc;meras era tirar foto, internet era coisa de computador, pensar que ter&iacute;amos um dispositivo h&iacute;brido capaz de executar com efici&ecirc;ncia todas essas fun&ccedil;&otilde;es h&aacute; 20 anos beirava a insanidade.&nbsp;</p>\r\n<p>O Web Design Responsivo que faz com que as p&aacute;ginas da web sejam renderizadas em uma variedade de dispositivos com formatos e tamanhos diferentes nem estava no radar, n&atilde;o era o padr&atilde;o de antigamente. Ent&atilde;o quando voc&ecirc; abria um site no dispositivo m&oacute;vel o layout simplesmente n&atilde;o era pensando para ele e aparecia todo desconfigurado para quem fazia tal tentativa. Atualizar-se &eacute; preciso, afinal, o que parecia loucura deixou de ser, segundo uma pesquisa da TIC Domic&iacute;lios, em 2019, 58% da popula&ccedil;&atilde;o j&aacute; acessava a internet exclusivamente pelo telefone celular.</p>\r\n<p>Se voc&ecirc;, empreendedor, visa a modernizar um site antigo, &eacute; preciso ter na cabe&ccedil;a que provavelmente ter&aacute; que come&ccedil;ar do zero. Porque o consumidor mudou. Se no ano passado a gente entendia o&nbsp;<a href=\"https://especialista-pme.com.br/quem-e-o-consumidor-3-0\">consumidor 3.0</a>&nbsp;&eacute; bom saber que o&nbsp;<a href=\"https://especialista-pme.com.br/678-2\">novo normal&nbsp;</a>&nbsp;pode (e deve!) trazer &agrave; baila tamb&eacute;m o novo consumidor. N&atilde;o existem muitas certezas sobre ele,&nbsp;<a href=\"https://especialista-pme.com.br/como-esta-o-mercado\">mas os n&uacute;meros</a>&nbsp;mostram que est&aacute; abra&ccedil;ando de vez o digital.&nbsp;</p>\r\n<p>Para atra&iacute;-lo &eacute; necess&aacute;ria uma linguagem que seja simples e objetiva. Por isso, o empres&aacute;rio que n&atilde;o aderir ao marketplace para tentar fugir das grandes taxas ter&aacute; sim que investir num moderno site para chamar de seu. Como um c&oacute;digo antigo cabe a ele o papel da manuten&ccedil;&atilde;o e atualiza&ccedil;&atilde;o do seu neg&oacute;cio. Atualmente existem diversos facilitadores como as APIs (&ldquo;Interface de Programa&ccedil;&atilde;o de Aplicativos&rdquo;, em tradu&ccedil;&atilde;o livre) para solu&ccedil;&otilde;es de marketing digital. D&aacute; para replicar com destaque a sua rede digital dentro do site, ou colocar um calculador de frete do pr&oacute;prio Correios nele, por exemplo. D&aacute; para pensar tamb&eacute;m na estrat&eacute;gia de atrair seus clientes,&nbsp;<a href=\"https://especialista-pme.com.br/cinco-dicas-chave-para-melhorar-o-seo-do-seu-site\">abusar do&nbsp;</a>SEO&nbsp;que, al&eacute;m de gr&aacute;tis, segue sendo uma forma de calibrar ainda mais seus resultados nos motores de busca. Mas as novas informa&ccedil;&otilde;es, novas p&aacute;ginas e design arrojado nada v&atilde;o fazer se voc&ecirc; n&atilde;o der ouvidos para quem realmente importa.</p>\r\n<p><strong>Abrindo o jogo.</strong></p>\r\n<p>Foi pensando nisso que a gente antecipou a atualiza&ccedil;&atilde;o dos nossos portais. Por qu&ecirc;? Porque a gente sabe que neste momento tanto os Corretores, quanto os Clientes e os nossos Colaboradores precisam ter todas as informa&ccedil;&otilde;es fundamentais &agrave; poucos cliques de dist&acirc;ncia. Todo tempo perdido n&atilde;o volta mais, otimizar processos n&atilde;o &eacute; s&oacute; preciso, &eacute; o esperado.</p>\r\n<p>Vamos usar a nova Central do Corretor CAPEMISA para mostrar como fizemos essa atualiza&ccedil;&atilde;o e o que achamos que voc&ecirc; (seja do ramo de Seguros ou n&atilde;o), deve levar em conta na hora de modernizar sua entrega on-line. A ideia sempre &eacute; tornar o que &eacute; bom melhor ainda, mas como fazer isso? &Eacute; isso que vamos explicar agora.</p>\r\n<p><strong>O que fizemos?</strong></p>\r\n<p>Lembra l&aacute; tr&aacute;s no in&iacute;cio dos anos 2000 que a l&oacute;gica era ir fazendo as coisas com o que estava na cabe&ccedil;a? Ent&atilde;o, esse n&atilde;o &eacute; mais um comportamento adequado para qualquer empreendedor. &Eacute; necess&aacute;rio ouvir quem mais usa a plataforma: seus parceiros. Foi com esse feedback que remodelamos a nossa Central do Corretor CAPEMISA. N&atilde;o buscamos uma cara nova qualquer, mas tudo, do layout &agrave; fonte usada, tudo foi pensado por quem tem nesse site a sua fonte de renda. N&atilde;o adianta nada ter uma vis&atilde;o arrojada que n&atilde;o fa&ccedil;a sentido para quem vai us&aacute;-la. Ou pensar numa &oacute;tima tela de carregamento com uma anima&ccedil;&atilde;o mirabolante, mas n&atilde;o conseguir otimizar as integra&ccedil;&otilde;es necess&aacute;rias para facilitar o trabalho de quem acessa.&nbsp;</p>\r\n<p>Para o Corretor CAPEMISA era fundamental que os cotadores estivessem integrados, acesso ao material de apoio &agrave;s vendas e informa&ccedil;&otilde;es completas e foi assim que fizemos. Cada vez mais &eacute; necess&aacute;rio n&atilde;o s&oacute; ficar de olho, mas ouvir e trocar com quem usa o seu servi&ccedil;o. S&oacute; o Corretor e as Corretoras de Seguros entendem que vender seguros on-line &eacute; um desafio, e s&oacute; eles conhecem &agrave; fundo esses desafios. Mais do que o conhecimento sobre os diversos tipos de Seguros de Vida, eles tamb&eacute;m possuem um conhecimento de valor intang&iacute;vel, as dificuldades que eles encontram nessa opera&ccedil;&atilde;o e, at&eacute; mesmo, as ideias que eles possuem para melhor&aacute;-las.</p>\r\n<p>Esses feedbacks n&atilde;o t&ecirc;m pre&ccedil;o e podem te auxiliar na cria&ccedil;&atilde;o de site sempre atualizado para necessidade do seu principal p&uacute;blico. Quanto mais qualitativa essa pesquisa for, melhor a sua percep&ccedil;&atilde;o do seu servi&ccedil;o.</p>\r\n<p>Clique aqui&nbsp;para conhecer a nova&nbsp;<a href=\"https://centraldocorretorcapemisa.com.br/\">Central do Corretor CAPEMISA</a>.</p>\r\n<p>Mesmo com o site pronto n&atilde;o significa que ele est&aacute; finalizado. Porque s&oacute; depois que eles usarem essa nova ferramenta eles poder&atilde;o dizer os pontos positivos e negativos dela. &Eacute; um servi&ccedil;o de manuten&ccedil;&atilde;o de site constante.&nbsp;</p>\r\n<p>Em tempos de pandemia e de fuga para o digital, a comunica&ccedil;&atilde;o segue o material essencial e primordial para qualquer conex&atilde;o. Por isso, n&atilde;o deixe de se comunicar internamente antes de querer expandir sua mensagem para seus clientes. &Eacute; dentro de casa que se tra&ccedil;a a melhor estrat&eacute;gia para atingir um novo patamar. Fica a dica!&nbsp;</p>\r\n<p>Fonte:</p>\r\n<p><a href=\"https://www.ecommercebrasil.com.br/noticias/e-commerce-brasileiro-cresce-2019-compreconfie/\">https://www.ecommercebrasil.com.br/noticias/e-commerce-brasileiro-cresce-2019-compreconfie/</a></p>\r\n<p><a href=\"https://www.folhape.com.br/economia/acesso-a-internet-e-exclusivo-no-celular-para-59-no-brasil/142421/\">https://www.folhape.com.br/economia/acesso-a-internet-e-exclusivo-no-celular-para-59-no-brasil/142421/</a></p>', '1604936694.jpg', 'tDvhzQonDaI', '2020-11-09 12:44:44'),
(14, 'Profissional da Organização', 5, '1', '<p style=\"text-align: justify;\">Profissional da Organiza&ccedil;&atilde;o, Certificada atuando a mais de 2 anos no mercado como Personal Organizer meu objetivo &eacute; transformar mudan&ccedil;as positivas no cotidiano das fam&iacute;lias com a organiza&ccedil;&atilde;o em todos ambientes, prestando tamb&eacute;m consultoria on-line e treinamento de funcion&aacute;rias dom&eacute;sticas.</p>\r\n<p>&nbsp;</p>', '<h5 style=\"text-align: justify;\">Profissional da Organiza&ccedil;&atilde;o, Certificada atuando a mais de 2 anos no mercado como Personal Organizer meu objetivo &eacute; transformar mudan&ccedil;as positivas no cotidiano das fam&iacute;lias com a organiza&ccedil;&atilde;o em todos ambientes, prestando tamb&eacute;m consultoria on-line e treinamento de funcion&aacute;rias dom&eacute;sticas.</h5>\r\n<h5 style=\"text-align: justify;\">&ldquo;Decida organizar-se e passe a sentir os benef&iacute;cios de uma vida organizada&rdquo;.</h5>', '1604950270.jpg', NULL, '2020-11-09 16:30:56');
INSERT INTO `blog_publicacoes` (`id`, `titulo`, `categoria`, `publicador`, `resumo`, `texto`, `imagem`, `video`, `datapublicacao`) VALUES
(15, 'Sou esteticista, micropigmentadora', 4, '1', '<p>Sou esteticista, micropigmentadora e transformo vidas atrav&eacute;s dos cursos que ministro. Comecei na &aacute;rea da est&eacute;tica h&aacute; 8 anos, pela dificuldade de trabalhar fora e cuidar das filhas e da casa. A profiss&atilde;o me proporcional flexibilidade de hor&aacute;rios, maior qualidade de vida e mais tempo para...</p>', '<p style=\"text-align: justify;\">Sou esteticista, micropigmentadora e transformo vidas atrav&eacute;s dos cursos que ministro. Comecei na &aacute;rea da est&eacute;tica h&aacute; 8 anos, pela dificuldade de trabalhar fora e cuidar das filhas e da casa. A profiss&atilde;o me proporcional flexibilidade de hor&aacute;rios, maior qualidade de vida e mais tempo para cuidar da minha fam&iacute;lia, que sempre foi minha prioridade. O que era para ser tempor&aacute;rio, se tornou minha paix&atilde;o e prop&oacute;sito de vida.<br />Realizo procedimentos que ajudam na autoestima das mul<span class=\"text_exposed_show\">heres, al&eacute;m de ensinar uma profiss&atilde;o que pode mudar e transformar vidas.</span></p>\r\n<div class=\"text_exposed_show\">\r\n<h5><strong>Eu sou Luciana Messagi e sou GPS</strong></h5>\r\n</div>', '1604951032.jpg', NULL, '2020-11-09 16:43:32'),
(17, 'Consultora e gestora de redes sociais', 5, '1', '<p>Essa &eacute; Kauane Parra, formada em Administra&ccedil;&atilde;o de Empresas, consultora de marketing.<br />Especialista em marketing digital, atua como consultora e gestora de redes sociais.<br /><br /><br /></p>', '<h5 style=\"text-align: justify;\">Essa &eacute; Kauane Parra, formada em Administra&ccedil;&atilde;o de Empresas, consultora de marketing.<br />Especialista em marketing digital, atua como consultora e gestora de redes sociais.<br /><br /><strong>Kauane Parra &eacute; GPS</strong></h5>', '1604951598.jpg', NULL, '2020-11-09 16:52:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_destaques`
--

CREATE TABLE `categorias_destaques` (
  `id` int(10) UNSIGNED NOT NULL,
  `local` varchar(10) DEFAULT NULL,
  `medidas` varchar(100) DEFAULT NULL,
  `categoria` int(10) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias_destaques`
--

INSERT INTO `categorias_destaques` (`id`, `local`, `medidas`, `categoria`, `imagem`) VALUES
(1, '1', '700x604', 8, '1604620355.jpg'),
(2, '2', '560x480', 13, '1604620419.jpg'),
(3, '3', '560x480', 23, '1604620489.jpg'),
(4, '4', '800x343', 11, '1604620535.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mensagem` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `datacontato` datetime DEFAULT current_timestamp(),
  `status` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `telefone`, `email`, `mensagem`, `datacontato`, `status`) VALUES
(1, 'sdafadsf', 'asdf', 'sdafdsf', 'asdf', '2020-09-23 14:14:56', '2'),
(2, 'Felipe Sergio', '11 930937007', 'felipesergio@outlook.com', '', '2020-09-23 15:35:37', '2'),
(3, 'Felipe Sergio', '11 930937007', 'felipesergio@outlook.com', '', '2020-09-23 15:35:44', '2'),
(4, 'Felipe Sergio', '11 930937007', 'felipesergio@outlook.com', '', '2020-09-23 15:35:50', '2'),
(5, 'Felipe Sergio', '11 930937007', 'felipesergio@outlook.com', '', '2020-09-23 15:36:08', '2'),
(6, 'sdfsdf', '333333', 'sdfds@hotmail.com', 'sdfsdfsd', '2020-09-23 15:37:24', '2'),
(8, 'Loja do Felipe', '11 930937007', 'felipe@grudigital.com.br', 'Quero mudar meu plano.', '2020-10-02 18:12:49', '2'),
(9, 'Loja do Felipe', '11 930937007', 'felipe@grudigital.com.br', 'Quero mudar meu plano.', '2020-10-02 18:13:28', '2'),
(10, 'Melissa', '43984016969', 'msessak@gmail.com', 'OI meninas!!!!!!\r\nMuito sucesso pra vocês!!!!!', '2020-10-05 22:42:33', '2'),
(11, 'TAISSA SESSAK RIBEIRO', '43999208020', 'taissasr@gmail.com', 'Alo teste', '2020-10-09 17:50:19', '2'),
(12, 'Aline NAjla Abdo Cassin', '43996032839', 'alinecassin@hotmail.com', 'Bom dia, nao estou conseguindo conectar, poderiam me ajudar.', '2020-11-04 11:36:40', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) UNSIGNED NOT NULL,
  `perfil` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `iniciodestaque` date NOT NULL,
  `fimdestaque` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimentos`
--

CREATE TABLE `estabelecimentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `logradouro` varchar(120) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  `bairro` varchar(120) DEFAULT NULL,
  `cep` varchar(40) DEFAULT NULL,
  `cidade` varchar(120) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `site` varchar(80) DEFAULT NULL,
  `imagem` varchar(80) DEFAULT NULL,
  `datacadastro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estabelecimentos`
--

INSERT INTO `estabelecimentos` (`id`, `titulo`, `descricao`, `logradouro`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `site`, `imagem`, `datacadastro`) VALUES
(1, 'sdfsda3', '<p>fsadf3</p>', 'sdafs', '342', 'safdsaf', 'adsfads', 'fasd', 'sdafsda', 'dfsdaf', 'dsafsa', 'sadf', '1604952440.jpg', '2020-11-09 17:04:23'),
(3, 'Outback', '<p>Aproveite o seu prato favorito com o #BoldFlavour exclusivo do&nbsp;<em class=\"hcV4Re nkGKTb\">Outback</em>&nbsp;dentro da sua casa. Um menu especial e variado! Descubra sabores incr&iacute;veis para curtir o seu&nbsp;</p>', 'ROD BA 463, Km 110 – Distrito de Roda Velha. São Desidério ', '1200', '', 'Nova Petrópolis', '05311000', 'Londrina', 'PR', '043 3465-6798', 'www.outback.com.br', '1604952628.jpg', '2020-11-09 17:10:15'),
(4, 'Barola', '<p>Comida tipica mineira</p>', 'Rua carlos leão', '123', '', 'Vila Alpina', '06890000', 'londrina', 'PR', '043 7656-9867', 'www.barola.com.br', '1604952746.jpg', '2020-11-09 17:11:45'),
(5, 'Brasiliano 14', '<p>Comidas diversas de todo o Brasil!</p>', 'R. Sebastião Coco', '543', '', 'Santana', '08978987', 'Londrina', 'PR', '043 1234-8965', 'www.brasiliano14.com.br', '1604952863.jpg', '2020-11-09 17:14:06'),
(6, 'Alma Lusitana', '<p>Comida Mexicana</p>', 'Av. Wallace Simonsen', '567', '', 'Vila Ema', '08976555', 'Londrina', 'PR', '043 7867-8124', 'www.almalusitana.com.br', '1604952951.jpg', '2020-11-09 17:15:40'),
(7, 'Coco Bambú', '<p>O Melhor Restaurante de Frutos do Mar do Brasil.</p>', 'R. Caracas', '1200', 'Shopping Abc', 'Jardim Europa', '84656777', 'Londrina', 'PR', '043 3545-6798', 'www.cocobambu.com.br', '1604953151.jpg', '2020-11-09 17:19:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `id` int(11) UNSIGNED NOT NULL,
  `telefone` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `telegram` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(140) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `informacoes`
--

INSERT INTO `informacoes` (`id`, `telefone`, `email`, `instagram`, `facebook`, `telegram`, `youtube`) VALUES
(1, 'telefone2b2', 'contato@guiadasparaosucesso.com.br', 'https://www.instagram.com/guiadasparaosucesso/', 'https://www.facebook.com/GPS-Guiadas-para-o-Sucesso-101191021265160', 'telegram2b2', 'www.instagram.com/guiadasparaosucesso/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamentos`
--

CREATE TABLE `orcamentos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` text COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `dataorcamento` datetime NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE `planos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `valor` varchar(120) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `botao` varchar(120) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id`, `titulo`, `valor`, `resumo`, `descricao`, `botao`, `imagem`, `status`) VALUES
(2, 'Plano Desperte', '40.00', '<p>Plano Desperte</p>', '<br>●	Seja integrante GPS com conteúdo exclusivo de desenvolvimento pessoal, faça networking e tenha acesso a conteúdos educativos na plataforma on LINE. <br>\r\n●	20% desconto em eventos presenciais<br>\r\n●	Clube de consumo com descontos exclusivos em estabelecimentos comerciais de Londrina e região<br>\r\n●	Post apresentação: “eu sou GPS” com foto + logo da empresa + nome e profissão da empresária<br>\r\n●	Divulgação do Post apresentação nas redes sociais do GPS, promovendo maior visibilidade e divulgação da sua página do Portal<br>\r\n●	Portal GPS Business: plataforma online, com uma página que pode ser customizada pela empresária onde irá conter: logotipo da empresa, descrição dos serviços, formulário de contato/solicitação de orçamento, divulgação das redes sociais e galeria de fotos e vídeo e espaço para depoimento de seus clientes.<br>\r\n\r\nValor á vista R$000,00 (média mensal R$00,00) ou 12x de R$00,00', 'http://pag.ae/7WxBLUGcR', '1602696146.jpg', 1),
(3, 'Plano Conquiste', '60.00', '<p>Plano Conquiste</p>', '<br>●	Seja integrante GPS com conteúdo exclusivo de desenvolvimento pessoal, faça networking e tenha acesso a conteúdos educativos na plataforma on LINE. <br>\r\n●	Acesso ao grupo telegram com oportunidade de conexões poderosas entre as integrantes<br>\r\n●	30% desconto em eventos presenciais<br>\r\n●	Clube de consumo com descontos exclusivos em estabelecimentos comerciais de Londrina e região<br>\r\n●	Post apresentação: “eu sou GPS” com foto + logo da empresa + nome e profissão da empresária<br>\r\n●	Divulgação do Post apresentação nas redes sociais do GPS, promovendo maior visibilidade e divulgação da sua página do Portal<br>\r\n●	Portal GPS Business: plataforma online, com uma página que pode ser customizada pela empresária onde irá conter: logotipo da empresa, descrição dos serviços, formulário de contato/solicitação de orçamento, divulgação das redes sociais e galeria de fotos e vídeo e espaço para depoimento de seus clientes.<br>\r\n+<br>\r\n●	Divulgue seu trabalho em eventos presenciais com folder, banner ou cartão de visita do seu trabalho.<br>\r\n●	Espaço para fazer uma palestra (webinário) na reunião semanal para o grupo que faz parte do whats app (20 minutos com tema de sua expertise e que seja relevante para as demais águias GPS)<br>\r\n\r\nValor á vista R$000,00 (média mensal R$00,00) ou 12x de R$00,00\r\n', 'http://pag.ae/7Wxr5mjNR', '1602696163.jpg', 1),
(4, 'Plano Anual Triunfe', '70.00', '<p>Plano Triunfe</p>', '<br>●	Seja integrante GPS com conteúdo exclusivo de desenvolvimento pessoal, faça networking e tenha acesso a conteúdos educativos na plataforma on LINE. <br>\r\n●	50% desconto eventos presenciais<br>\r\n●	Clube de consumo com descontos exclusivos em estabelecimento comercial de Londrina e região<br>\r\n●	Post Apresentação: “eu sou GPS” com foto + logo da empresa + nome e profissão da empresária<br>\r\n●	Divulgação do Post apresentação nas redes sociais do GPS, promovendo maior visibilidade e divulgação da sua página do Portal<br>\r\n●	Portal GPS Business: plataforma online, com uma página que pode ser customizada pela empresária onde irá conter: logotipo da empresa, descrição dos serviços, formulário de contato/solicitação de orçamento, divulgação das redes sociais e galeria de fotos e vídeo e espaço para depoimento de seus clientes.<br>\r\n●     Divulgue seu trabalho em eventos presenciais com folder, banner ou cartão de visita do seu trabalho.<br>\r\n●	Espaço para fazer uma palestra (webinário) na reunião semanal para o grupo que faz parte do whats app (20 minutos com tema de sua expertise e que seja relevante para as demais águias GPS)<br>\r\n+<br>\r\n●	Cartão digital interativo (PDF) da empresária com foto + logo da empresa + ícones de contato (redes sociais, site, e-mail)<br>\r\n●	Acesso ao grupo telegram com oportunidade de conexões poderosas entre as integrantes, rodada de negócios, site da sua empresa, marketing b2b. Conteúdo sobre vendas, gestão estratégica, liderança, marketing digital. podcasts exclusivos<br>\r\n●	Bônus extra: fotos profissionais da GPS<br>\r\n\r\nValor á vista R$000,00 (média mensal R$00,00) ou 12x de R$00,00', 'http://pag.ae/7Wxr3YBEu', '1602696176.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(120) DEFAULT NULL,
  `video` varchar(120) DEFAULT NULL,
  `linkpagamento` varchar(200) DEFAULT NULL,
  `preconovo` varchar(60) DEFAULT NULL,
  `precoantigo` varchar(60) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `datacadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `resumo`, `descricao`, `imagem`, `video`, `linkpagamento`, `preconovo`, `precoantigo`, `status`, `datacadastro`) VALUES
(2, 'Caneca Àguias voam com águias', 'Caneca personalizada com seu nome', 'Caneca personalizada com seu nome', '1602274446.jpg', NULL, 'https://pag.ae/7WvcZnxM6', '25,00', '', 1, '2020-09-24 16:34:07'),
(3, 'Camiseta branca', '<p>resumo do produto 2</p>', 'Camiseta babylook, tamanhos P, M, G e XG', '1602274736.jpg', NULL, 'https://pag.ae/7Wvd4ToNH', '50,00', '', 1, '2020-09-24 16:39:23'),
(4, 'Camiseta preta', '<p>resumo de produto 3</p>', '<p>Camiseta babylook, tamanhos P, M, G e XG</p>', '1602274773.jpg', NULL, 'https://pag.ae/7Wvd58PxH', '50,00', '', 1, '2020-09-24 16:41:22'),
(6, 'Máscara GPS', '<p>resumo de produto 4</p>', '<p>descricao de produto 5</p>', '1602274874.jpg', '', 'https://pag.ae/7Wvd5Dfun', '10,00', '', 1, '2020-09-24 16:43:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `seo`
--

CREATE TABLE `seo` (
  `id` int(11) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `analytics` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `seo`
--

INSERT INTO `seo` (`id`, `description`, `keywords`, `analytics`) VALUES
(1, 'desciptions2', 'keywordss2', 'analytiucss2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Felipe Sergio', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'Lourival Netto', 'netto@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'Paula', 'contato@guiadasparaosucesso.com.br', 'a36e8f285db9990ba9df5dc629db6bf8');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anunciantes`
--
ALTER TABLE `anunciantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `anunciantes_categoria`
--
ALTER TABLE `anunciantes_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `anunciantes_comentarios`
--
ALTER TABLE `anunciantes_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `anunciantes_estrelas`
--
ALTER TABLE `anunciantes_estrelas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `anunciantes_fotos`
--
ALTER TABLE `anunciantes_fotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `anunciantes_orcamento`
--
ALTER TABLE `anunciantes_orcamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `anunciantes_video`
--
ALTER TABLE `anunciantes_video`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `banners_local`
--
ALTER TABLE `banners_local`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blocos`
--
ALTER TABLE `blocos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blocos_paginas`
--
ALTER TABLE `blocos_paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog_categorias`
--
ALTER TABLE `blog_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog_comentarios`
--
ALTER TABLE `blog_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog_publicacoes`
--
ALTER TABLE `blog_publicacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias_destaques`
--
ALTER TABLE `categorias_destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estabelecimentos`
--
ALTER TABLE `estabelecimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anunciantes`
--
ALTER TABLE `anunciantes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de tabela `anunciantes_categoria`
--
ALTER TABLE `anunciantes_categoria`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `anunciantes_comentarios`
--
ALTER TABLE `anunciantes_comentarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `anunciantes_estrelas`
--
ALTER TABLE `anunciantes_estrelas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `anunciantes_fotos`
--
ALTER TABLE `anunciantes_fotos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `anunciantes_orcamento`
--
ALTER TABLE `anunciantes_orcamento`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `anunciantes_video`
--
ALTER TABLE `anunciantes_video`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `banners_local`
--
ALTER TABLE `banners_local`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `blocos`
--
ALTER TABLE `blocos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `blocos_paginas`
--
ALTER TABLE `blocos_paginas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `blog_categorias`
--
ALTER TABLE `blog_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `blog_comentarios`
--
ALTER TABLE `blog_comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `blog_publicacoes`
--
ALTER TABLE `blog_publicacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `categorias_destaques`
--
ALTER TABLE `categorias_destaques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estabelecimentos`
--
ALTER TABLE `estabelecimentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `planos`
--
ALTER TABLE `planos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
