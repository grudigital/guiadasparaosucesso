-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07/11/2020 às 15:20
-- Versão do servidor: 10.4.14-MariaDB-cll-lve
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u319275366_sistema2020`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes`
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
  `status` int(5) DEFAULT NULL COMMENT '1. inativo 2. ativo',
  `datacadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `anunciantes`
--

INSERT INTO `anunciantes` (`id`, `titulo`, `categoria`, `telefone`, `logradouro`, `numero`, `bairro`, `complemento`, `cep`, `datanascimento`, `cidade`, `estado`, `divulgaendereco`, `inicioplano`, `fimplano`, `plano`, `whatsapp`, `email`, `facebook`, `instagram`, `linkedin`, `descricao`, `senha`, `imagem`, `logotipo`, `video`, `status`, `datacadastro`) VALUES
(4, 'Nattu Orgânico', '10', '43  99993-5487', 'Rua Ituituaba', '666', 'Jd. Alvorada', '', '', '0000-00-00', 'Londrina', 'PR', 'sim', '2020-09-29', '2020-09-30', 2, '43  99993-5487', 'slaibi760@gmail.com', 'https://web.facebook.com/slaibifit2014', 'https://www.instagram.com/nattuorganico/', '', 'A Nattu Orgânico se preocupa com o bem estar e a qualidade dos alimentos que estamos consumindo. Apoiamos a idéia da comida natural, vegana e orgânica', '2423*Wxci290989', '1604619102.jpg', '1604618609.jpg', 'w-z5mbZ-yCI', 1, '2020-09-28 10:28:16'),
(12, 'Resma Design', '11', '4399819-9001', 'Rua Prefeito Hugo Cabral ', '167', 'Centro', '', '', '0000-00-00', 'Londrina', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '4399819-9001', 'resmadesign@gmail.com', 'https://web.facebook.com/resmadesign', 'https://www.instagram.com/resmadesign/', '', 'Diretora criativa: Paula Napo\r\nEspecialistas em marcas. Identidade Visual: empresas, profissionais, eventos - Wedding Branding\r\nRegistro/Gestão de Marca', '2423*Wxci290989', '1602645892.jpg', '1603812176.jpg', 'https://youtu.be/WJaz-vjE_RY', 1, '2020-10-03 19:58:49'),
(22, 'Paula Napo', '15', '+554330296367', 'Rua Prefeito Hugo Cabral ', '167', 'Centro', '', '', '0000-00-00', 'Londrina', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '4399819-9001', 'paulanapo@gmail.com', '', '', '', '', '2423*Wxci290989', '1603808794.jpg', NULL, '', 1, '2020-10-14 17:06:10'),
(28, 'Rita Bastos Cosméticos Naturais', '33', '43984261482', 'Rua Benjamin Franklin', '300 ', 'Parque Jamaica', '', '', '0000-00-00', 'LONDRINA', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '43984261482', 'ritabastos570@gmail.com', '', '', '', '', '2423*Wxci290989', '1603812065.jpg', '1603812321.jpg', '', 1, '2020-10-17 14:56:34'),
(40, 'LUIZA SANTOS', '8', '43996636546', 'RUA  JOSE ROQUE SALTON,', '983', 'Terra Bonita', NULL, NULL, NULL, 'LONDRINA', 'PARANA', '1', NULL, NULL, NULL, '', 'luapsan@gmail.com', NULL, NULL, NULL, NULL, '2239da696212d94d495a250d9a39103f', '1603810229.jpg', NULL, NULL, 1, '2020-10-19 15:49:04'),
(41, 'Studio Kelly Moura', '9', '43 98483 8018', 'Rua Vasco Cinquini', '395', 'Jd Santos Dumont', '', '', '0000-00-00', 'Londrina', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '43 98483 8018', 'studiokellymoura@gmail.com', '', '', '', '', '2423*Wxci290989', '1603811907.jpg', NULL, '', 1, '2020-10-22 01:49:08'),
(44, 'Melissa Sessak', '14', '', 'Rua Maria Lucia da Paz', '450 ', 'Gleba Palhano', 'apto 601', '86050-470', '1978-07-28', 'Londrina ', 'Paraná', '1', NULL, NULL, NULL, '43984016969', 'melissasessak@gmail.com', 'https://www.facebook.com/melissasessak', 'https://www.instagram.com/melissa.sessak/', '', 'Social Media ', '2423*Wxci290989', '1603809583.jpg', '1603729488.jpg', NULL, 1, '2020-10-26 16:16:52'),
(45, 'Fernanda Felix Fotografia', '31', '(43) 999514874', 'Rua Caracas', '1200', 'Santa Rosa', 'Torre 2 Apto 502', '86050-070', '1989-05-15', 'Londrina', 'Paraná', 'sim', '0000-00-00', '0000-00-00', 4, '(43) 999514874', 'fernandamfelix@gmail.com', 'https://www.facebook.com/fernandafelix.arqfoto', 'https://www.instagram.com/fernandafelix.fotografia', '', '', '2423*Wxci290989', '1603999122.jpg', '1603999279.jpg', '', 1, '2020-10-28 13:24:36'),
(47, 'Aline Najla Abdo Cassin', '10', '43996032839', 'Rua Pará', '2072', 'centro', '', '', '0000-00-00', 'LONDRINA', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '', 'alinepilates18@gmail.com', '', '', '', '', '2423*Wxci290989', '', NULL, '', 1, '2020-10-28 23:14:32'),
(48, 'CAROLINA CANTONI', '32', '43991914271', 'AV RIO DE JANEIRO', '1375', 'CENTRO', '', '', '0000-00-00', 'LONDRINA', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '43991914271', 'cantoni.carolina@gmail.com', '', '', '', '', '2423*Wxci290989', '1604620022.jpg', '1604618880.jpg', '', 1, '2020-10-28 23:48:47'),
(49, 'Debora Mariani', '22', '(43) 99146-0867', 'Rua mario novaes', '133', 'Jd pacaembu', NULL, NULL, NULL, 'Londrina', 'Parana', '1', NULL, NULL, NULL, '(43) 99146-0867', 'marianidebora@hotmail.com', NULL, NULL, NULL, NULL, 'cef135449afd5d6c29703e4b2c5d6a9e', NULL, NULL, NULL, 1, '2020-10-29 00:59:37'),
(50, 'Rosmelia Kerber - Saboaria Artesanal Ancestral', '33', '4333295343', 'Rua Nelson de Godoy Pereira', '160', 'jd veneza', '', '', '0000-00-00', 'Londrina', 'Paraná', 'sim', '0000-00-00', '0000-00-00', 4, '43991508266', 'rosmeliakerber@hotmail.com', '', '', '', '', '2423*Wxci290989', '', NULL, '', 1, '2020-10-29 11:36:53'),
(52, 'Trink Gestão', '31', '43996473619', '', '', '', '', '', '0000-00-00', 'Londrina', 'Paraná', 'sim', '0000-00-00', '0000-00-00', 4, '43996473619', 'contato@trinkgestao.com.br', '', '', '', '', '2423*Wxci290989', '', NULL, '', 2, '2020-10-29 23:11:05'),
(53, 'TAISSA SESSAK RIBEIRO', '8', '43999208020', 'Rua Érico Veríssimo', '200', 'Centro', '', '', '0000-00-00', 'Apucarana', 'Pr', 'sim', '0000-00-00', '0000-00-00', 4, '+554399208020', 'taissasr@gmail.com', '', '', '', '', '2423*Wxci290989', '', NULL, '', 1, '2020-10-29 23:38:51'),
(54, 'Luciana Valejo', '10', '(43) 99687-4080', 'E: Uruguai', '1744', 'Centro', '', '', '0000-00-00', 'Londrina', 'Paraná', 'sim', '0000-00-00', '0000-00-00', 4, '(43)996874080', 'lucianavalejo8@gmail.com', '', '', '', '', '2423*Wxci290989', '', NULL, '', 2, '2020-10-30 17:24:29'),
(59, 'Cristina Ricardo Gonçalves', '27', '43 998051505', 'Rua Mário oncken', '90', 'Jardim das Américas', '', '', '0000-00-00', 'Londrina', 'Pr', 'sim', '0000-00-00', '0000-00-00', 3, '43998051505', 'crysgoncalvess@gmail.com', '', '', '', '', '2423*Wxci290989', '', NULL, '', 1, '2020-10-30 23:34:49'),
(61, 'Bianca Baptista Ferreira Costa ', '31', '4396229581', 'Rua Carlos Masso ', '163', 'Santa Rita 5', '', '', '0000-00-00', 'LONDRINA', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '43 9 96229581', 'mixterralondrina@gmail.com', '', '', '', '', '2423*Wxci290989', '', NULL, '', 1, '2020-10-31 05:23:59'),
(64, 'Kauane Marcela da Silva Parra', '11', '', 'Rua Luiz Vieira Sagrilo', '111', 'São Paulo II', '', '', '0000-00-00', 'Londrina', 'PR', 'sim', '0000-00-00', '0000-00-00', 4, '43988218842', 'kauparra@icloud.com', '', '', '', '', '2423*Wxci290989', '', NULL, '', 1, '2020-10-31 17:01:14'),
(67, 'GPS', '34', '', 'Rua Pref. Hugo Cabral', '168', 'centro', '', '', '0000-00-00', 'Londrina', 'PR', 'nao', '0000-00-00', '0000-00-00', 2, '', 'contato@guiadasparaosucesso.com.br', 'https://web.facebook.com/GPS-Guiadas-para-o-Sucesso-101191021265160', 'https://www.instagram.com/guiadasparaosucesso/', '', 'Mulheres que se completam e não competem, o grupo traz como principal missão ser recurso de aprendizado e desenvolvimento pessoal para que vivamos no máximo potencial em 5 pilares da nossa vida:\r\nInteligência Emocional,\r\nProsperidade Financeira,\r\nSaúde Inabalável,\r\nRelacionamentos Poderosos e\r\nEspiritualidade.\r\nAlém de oportunidade de networking e divulgar sua empresa, de maneira ética e nessa relação ganha x ganha onde mulheres ajudam mulheres.\r\nÁguias voam com águias!', '2423*Wxci290989', '1604619547.jpg', '1604619334.jpg', '', 1, '2020-11-02 22:40:58'),
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
(89, 'Corina Fujisawa ', '26', '43996190069', 'Rua Santa Catarina ', '50 ', 'Centro', 'Sala 45 L3', '86010470', '1976-10-17', 'Londrina', 'PR', 'sim', NULL, NULL, NULL, '43984266374', 'corinafuji@gmail.com', '@corinaagf ', '@corinaagf ', '', 'Inteligência Emocional  e Desenvolvimento Humano ', '838aa27471a699b4899c0550a733bbfe', NULL, NULL, NULL, 2, '2020-11-07 14:14:12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes_categoria`
--

CREATE TABLE `anunciantes_categoria` (
  `id` int(11) UNSIGNED NOT NULL,
  `categoria` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `anunciantes_categoria`
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
(18, 'Funcionária Pública', ''),
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
-- Estrutura para tabela `anunciantes_comentarios`
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
-- Despejando dados para a tabela `anunciantes_comentarios`
--

INSERT INTO `anunciantes_comentarios` (`id`, `anunciante`, `nome`, `cpf`, `email`, `telefone`, `comentario`, `status`, `estrelas`, `datacomentario`) VALUES
(1, '1', 'felipe sergio', '35251690860', 'felipesergio@outlook.com', '11 930937007', 'o fornecedor é excelente adorei os serviços prestados', '1', 2, '2020-09-28 09:39:36'),
(2, '11', 'Felipe Sergio', '35251690860', 'felipesergio@outlook.com', '11930937007', 'otima chefe de cozinha', '2', 4, '2020-09-30 16:46:00'),
(3, '8', 'sdfsdf', 'sdfsdfsd', 'dsfsd', 'sdfsdf', 'sdfsdf', '1', 3, '2020-09-30 16:51:10'),
(4, '7', 'Felipe', '35251690860', 'felipesergio@yahoo.com', '11961503927', 'dsffds', '1', 5, '2020-09-30 18:35:21'),
(5, '11', 'Felipe Sergio', '3525169086023', 'felipesergio@outlook.com', '11930937007', 'dsfdsfds', '1', 2, '2020-09-30 18:40:11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes_estrelas`
--

CREATE TABLE `anunciantes_estrelas` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes_fotos`
--

CREATE TABLE `anunciantes_fotos` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `anunciantes_fotos`
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
-- Estrutura para tabela `anunciantes_orcamento`
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
-- Despejando dados para a tabela `anunciantes_orcamento`
--

INSERT INTO `anunciantes_orcamento` (`id`, `anunciante`, `nome`, `email`, `telefone`, `mensagem`, `datacontato`) VALUES
(1, 11, 'felipe sergio', 'felipesergio@outlook.com', '11 930937007', 'o fornecedor é otimo', '0000-00-00 00:00:00'),
(2, 7, 'Felipe Sergio', 'felipesergio@outlook.com', '11 930937007', 'tompero', '2020-09-30 15:53:56'),
(3, 7, 'Felipe Sergio', 'felipesergio@outlook.com', '11930937007', 'tompero 2', '2020-09-30 15:59:45'),
(4, 11, 'Felipe Sergio', 'felipesergio@outlook.com', '11930937007', 'tompero 3', '2020-09-30 16:02:04'),
(5, 45, '', '', '', '', '2020-10-30 12:20:55');

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes_video`
--

CREATE TABLE `anunciantes_video` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `banners`
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
-- Despejando dados para a tabela `banners`
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
-- Estrutura para tabela `banners_local`
--

CREATE TABLE `banners_local` (
  `id` int(10) UNSIGNED NOT NULL,
  `local` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `banners_local`
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
-- Estrutura para tabela `blocos`
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
-- Despejando dados para a tabela `blocos`
--

INSERT INTO `blocos` (`id`, `titulo`, `pagina`, `resumo`, `texto`, `imagem`) VALUES
(3, 'História', '1', ' ', 'O Despertar para o caminho do desenvolvimento pessoal veio a partir do momento em que as empresárias Julliana Juday e Débora Vilbert notaram que havia algo travando o crescimento empresarial,  que não se tratava mais apenas de noções técnicas de gestão e gerenciamento de negócios, mas havia necessidade da evolução pessoal e muitas quebras de paradigmas. Aí deu-se início o despertar para essa trajetória. <br>\r\nAo notar que o CPF fortalecido contribuia para alavancar o CNPJ, a busca se tornou ainda mais assídua. E por que não compartilhar esse aprendizado com outras mulheres que também estavam carentes de recursos para construir uma versão ainda melhor de si?<br>\r\nUm dos primeiros ensinamentos adquiridos é que nossos resultados são semelhantes a média das 5 pessoas que mais convivemos. Um mentor nos ensinou, que apesar de as pessoas quererem voar como águias elas estavam cercadas de Urubus, pessoas medianas, que se contentavam a ser feliz aos finais de semana, se limitavam a conversar sobre problemas e muitas vezes não dos próprios, mas sim, os de outras pessoas.<br>\r\nEsse critério de aliar-se a pessoas Extraordinárias, junto com o prazer de compartilhar, foi o começo das reuniões entre mulheres, positivamente insatisfeitas com a vida que levavam. <br>\r\nDeu-se início, então, ao GPS.\r\n', '1601941148.jpg'),
(4, 'Propósitos do grupo', '1', '', 'Ao longo dos encontros, o grupo trouxe recursos para adquirir robustez diante das adversidades, bem como essa decodificação do que é sucesso. <br>\r\nTrazer clareza sobre onde estamos e principalmente para onde vamos. Como sempre dizemos: “se você não sabe onde quer chegar, qualquer caminho serve”.<br>\r\nSabemos que não é fácil essa mudança de mindset e de quão limitador nosso sistema pode ser. <br>\r\nEntão, porque não engajar e encorajar outras mulheres que também desejam ser ainda melhores?\r\n', '1602268494.jpg'),
(5, 'Atuais gestoras ', '1', '', 'Esse trio da foto se uniu e uma nova etapa que se inicia no GPS.<br>\r\nAcreditamos e muito no potencial do projeto e em cada mulher que participa e que ainda virá a participar.<br>\r\nPor isso essas três amigas juntas buscam trazer novidades e inovações para mulheres que procuram despertar o seu melhor, que querem crescer pessoal e profissionalmente. <br>\r\n<br>\r\n● Julliana Juday, fisioterapeuta, sócia proprietária da Laser & Mais depilação definitiva e locação de equipamentos estéticos, fundadora do Guiadas Para o Sucesso e Head trainer. <br>\r\n<br>\r\n● Melissa Sessak Ribeiro Ceranto, Social Media, criadora de conteúdos digitais, mentora de gestão de mídias sociais, especialista em Marketing e gestão de negócios, Bacharel em Direito, Gestora do Guiadas Para o Sucesso<br>\r\n<br>\r\n● Paula Napo, diretora criativa e proprietária do estúdio Resma Design, doutoranda em Design UNESP, mestre em Design da Informação UFPR e Especialista em Gestão do Design UEL. Professora do Depto de Design da UEL e idealizadora do Lab.Une.\r\n', '1601941227.jpg'),
(6, 'Missão, visão e valores', '1', '', 'Mulheres que se completam e não competem, o grupo traz como principal missão ser recurso de aprendizado e desenvolvimento pessoal para que vivamos no máximo potencial em 5 pilares da nossa vida: <br>\r\nInteligência Emocional, <br>\r\nProsperidade Financeira,<br>\r\nSaúde Inabalável, <br>\r\nRelacionamentos Poderosos e <br>\r\nEspiritualidade. <br>\r\nAlém de oportunidade de networking e divulgar sua empresa, de maneira ética e nessa relação ganha x ganha onde mulheres ajudam mulheres.<br> \r\nÁguias voam com águias!<br>\r\n', '1602268322.jpg'),
(7, 'Como se tornar uma GPS', '2', 'O principal requisito é buscar ser hoje melhor que ontem, ter empatia e auxiliar outras mulheres a também se desenvolverem. <br>\r\nEstar em busca de sua melhor versão.<br>\r\n', 'O GPS é para você?<br>\r\nVocê, mulher, que no final do dia está cheia de disposição, dinheiro na conta, príncipe encantado ao seu lado e não enfrenta os desafios no seu trabalho??? <br>\r\nHum... Talvez esse grupo não seja para você. <br>\r\nO GPS é para você mulher, que muitas vezes se sente exausta em dar conta de todas as suas obrigações, mas que assim como nós acredita que é possível sim viver uma vida plena, que vai além de pagar boletos. \r\nQue deseja viver e não somente sobreviver se identificou com a gente? <br>\r\nEntão venha fazer parte.', '1602696214.jpg'),
(8, 'Planos e valores', '2', '', '', '1600970217.jpg'),
(9, 'Termos de uso', '3', '', 'TERMOS DE USO<br>\r\nAs presentes Cláusulas Gerais tem como objetivo definir os termos e condições da relação entre os usuários e a GPS - Guiadas Para o Sucesso. <br>\r\nAs presentes cláusulas podem, eventualmente, ser complementadas por outras Condições Particulares. No caso de conflito entre as cláusulas gerais e as Condições Particulares, estas últimas prevalecerão.<br>\r\n<br>\r\nDECLARAÇÕES E RESPONSABILIDADES DO CLIENTE<br>\r\n1. O acesso ao site é totalmente voluntário e atribui a quem realiza a ação a condição de usuário, aceitando, desde esse momento, plenamente e sem reservas, o conteúdo das presentes condições gerais de uso, a política de proteção de dados e se houver, as condições particulares que possam regular determinados serviços.<br>\r\n2. Para o acesso a determinados serviços e ferramentas da GPS - Guiadas Para o Sucesso é necessário o registro do usuário e também a aceitação expressa das condições particulares que possam regular tais serviços, que se realizará através de um formulário de registro. Para o efeito, o usuário garante a veracidade e exatidão dos dados que facilite como consequência da realização do formulário de registro, sendo responsável por manifestações falsas ou inexatas que realize e dos possíveis danos que possa causar à GPS - Guiadas Para o Sucesso ou a terceiros pela informação que facilite.<br>\r\n3. Para o uso dos serviços oferecidos por este site é necessário que o usuário tenha no mínimo dezoito (18) anos de idade completos, capacidade suficiente para contratar e tenha lido, entendido e aceito as presentes condições gerais de uso, a política de privacidade e as condições particulares dos distintos serviços que resultem aplicáveis. Caso contrário, deverá abster-se de aceder ao site ou, em tal caso, abandoná-lo.<br>\r\n4. Os usuários comprometem-se a utilizar o serviço em conformidade com as presentes Cláusulas Gerais, a lei, a moral, os bons costumes e a ordem pública. Os usuários comprometem-se a não publicar conteúdo que possa ser ofensivo e/ou publicitário e que não respeite as leis em vigor.<br>\r\n5. Os usuários comprometem-se a não exigir responsabilidade a GPS - Guiadas Para o Sucesso no que diz respeito ao conteúdo apresentados por eles no site da GPS - Guiadas Para o Sucesso com o objeto de defender sua imagem, propriedade intelectual e vida privada.<br>\r\n6. Os usuários aceitam resolver qualquer tipo de conflito ocasionado entre eles sobre os conteúdos que publiquem no site GPS - Guiadas Para o Sucesso sem a intermediação da GPS - Guiadas Para o Sucesso.<br>\r\n <br>\r\nPROPRIEDADE INTELECTUAL<br>\r\n1. Os textos e elementos gráficos que constituem o site e divulgados através do presente, bem como a sua apresentação e edição, são da exclusiva propriedade da GPS - Guiadas Para o Sucesso, que detém os direitos de explorá-los através de acordos com terceiros. Neste sentido, as obras são protegidas como tal pela legislação brasileira.<br>\r\n 2. GPS - Guiadas Para o Sucesso não concede qualquer licença ou autorização relativa ao uso dos seus direitos de propriedade intelectual ou outra, ou direito relacionado com o seu site, exceto com acordo expresso de terceiros.<br>\r\n3. Os usuários são autorizados a efetuar a reprodução do conteúdo do site com a finalidade exclusiva de armazenamento, fazer cópias de segurança ou imprimir em papel.<br>\r\n4. Para além disso, qualquer apresentação ou reprodução, mesmo parcial, do conteúdo deste site ou quaisquer dos seus elementos, com uma finalidade comercial ou de utilização para além do acima mencionado é proibida sempre que não haja expressa autorização por escrito da GPS - Guiadas Para o Sucesso. A violação do direito exposto permite a GPS - Guiadas Para o Sucesso interpor uma ação judicial pertinente.<br>\r\n5. São igualmente proibidas a extração ou a reprodução de elementos do site que cause qualquer tipo de prejuízo a GPS - Guiadas Para o Sucesso.<br>\r\n6. Os direitos não expressamente concedidos anteriormente ficam reservados a GPS - Guiadas Para o Sucesso ou, se for caso, aos seus colaboradores.<br>\r\n7. Todos os nomes comerciais, marcas ou sinais distintivos, logotipos, símbolos, marcas mistas, figurativas ou nominativas que aparecem neste site pertencem a GPS - Guiadas Para o Sucesso ou, pertencendo a terceiros, GPS - Guiadas Para o Sucesso tem a autorização ou licença para a utilização dos mesmos.<br>\r\n8. O usuário concede à GPS - Guiadas Para o Sucesso, referente aos conteúdos que publique, uma autorização de âmbito mundial e não exclusiva para reproduzir e comunicar publicamente os mesmos no site para transformá-los com a intenção de adaptá-los às necessidades técnicas do serviço, durante o prazo máximo de vigência reconhecido na legislação de propriedade intelectual.<br>\r\n9. Em caso de que qualquer usuário ou terceiro considere que realizou-se uma violação dos seus legítimos direitos de propriedade intelectual, industrial e/ou de imagem pela introdução de um determinado conteúdo no site, deverá notificar a circunstância em questão ao correio eletrônico contato@guiadasparaosucesso.com.br <br>\r\nindicando:\r\na. Os dados pessoais do interessado titular alegando os supostos direitos infringidos. Se a reclamação é apresentada por um terceiro diferente do interessado, deverá indicar a representação com a que atua.<br>\r\nb. Uma descrição dos conteúdos protegidos e localizá-los no site.<br>\r\nc. A acreditação adequada dos já referidos direitos de propriedade intelectual ou industrial.<br>\r\nd. Uma declaração expressa na qual o interessado responsabiliza-se da veracidade da informação facilitada na notificação. <br>\r\n<br>\r\nRESERVA DE DIREITOS E DE ISENÇÃO DE RESPONSABILIDADE<br>\r\n1. GPS - Guiadas Para o Sucesso permite aos usuários registrados inserir imagens, vídeos e comentários e igualmente, opiniões e avaliações sobre os serviços publicados. Os conteúdos publicados são criados tanto pelos usuários como pela GPS - Guiadas Para o Sucesso usando fontes próprias ou externas. GPS - Guiadas Para o Sucesso não garante nunca a exatidão das características relativas aos conteúdos e serviços publicados e está expressamente dispensada de qualquer responsabilidade pelos danos e prejuízos de qualquer natureza que possa derivar-se das faltas ou erros na descrição e características dos conteúdos publicados. GPS - Guiadas Para o Sucesso revisa periodicamente os conteúdos do site web, mas não pode verificar a totalidade dessas informações, assim que não pode assumir a responsabilidade sobre os conteúdos.<br>\r\n2. GPS - Guiadas Para o Sucesso põe à disposição do usuário links a outros sites gerenciados e controlados por terceiros, com a exclusiva função de facilitar aos usuários a procura de informação, conteúdos e serviços na Internet. GPS - Guiadas Para o Sucesso não comercializa, nem dirige, nem faz próprios os conteúdos, serviços e informações disponíveis nos sites linkados, nem aprova, supervisa ou controla de nenhuma maneira os conteúdos, serviços e qualquer material de qualquer natureza existente nos já referidos, assumindo o usuário de maneira exclusiva toda a responsabilidade da navegação através dos próprios.<br>\r\n3. Se a critério de GPS - Guiadas Para o Sucesso, existir uma ação por parte de um usuário para alterar ou afetar de maneira fraudulenta os valores médio das opiniões publicadas sobre um serviço ou empresa, isto poderá resultar na suspensão ou na revogação do acesso do usuário e a eliminação dos conteúdos publicados.<br>\r\n4. GPS - Guiadas Para o Sucesso reserva-se o direito a Modificar, em qualquer momento e sem necessidade de prévio aviso, a apresentação e configuração do site, assim como as presentes condições gerais de uso ou as condições particulares que regulem o uso de determinados serviços.<br>\r\n5. Será da responsabilidade do GPS - Guiadas Para o Sucesso fazer tudo o possível para que o Serviço esteja acessível 24 horas por dia, 7 dias por semana. Os usuários reconhecem que não é possível garantir o acesso universal. GPS - Guiadas Para o Sucesso estará isento de qualquer responsabilidade, na medida do permitido pela legislação em vigor, por quaisquer danos e prejuízos de qualquer espécie, que advenham da falta de disponibilidade ou continuidade do funcionamento do Serviço, assim como os erros no acesso às diferentes páginas do Website.<br>\r\n6. GPS - Guiadas Para o Sucesso se reserva o direito a interromper o Serviço devido a trabalhos de manutenção ou melhora dos mesmos.<br>\r\n7. GPS - Guiadas Para o Sucesso reserva-se o direito de eliminar do seu Site todos os conteúdos que considere ofensivos, inapropriados ou sobre os quais existam uma dúvida razoável, que possa infringir a lei, sem necessidade de aviso prévio ao usuário.<br>\r\n8. GPS - Guiadas Para o Sucesso não será, em nenhum caso, responsável pelos conteúdos gerados por usuários. GPS - Guiadas Para o Sucesso não tem obrigação de controlar os conteúdos incluídos pelos seus usuários.<br>\r\n9. Salvo nos casos expressamente descritos nas cláusulas gerais, GPS - Guiadas Para o Sucesso não será responsável pelos danos e prejuízos de qualquer natureza que possam resultar de uma falta de exatidão, exaustividade, atualidade, nem mesmo devido a erros ou omissões, causados pelos usuários, que possam sofrer as informações e serviços contidos no Website ou nos Sites Pessoais.<br>\r\n10. GPS - Guiadas Para o Sucesso não será em nenhum caso responsável, nem assume qualquer obrigação em relação aos casais ou familiares dos Beneficiários, usuários ou Contribuintes, que não derivem do presente Contrato.<br>\r\n<br>\r\nDISPOSIÇÕES GERAIS<br>\r\nCaso uma das cláusulas previstas nas cláusulas gerais seja declarada total ou parcialmente ineficaz ou inválida, tal nulidade ou ineficácia afetará apenas essa disposição ou a parte dela que resulte inválida ou ineficaz, subsistindo todo o resto que for válido, e considerando-se essa mesma disposição como inexistente.<br>\r\nTodas as notificações, requerimentos, solicitações e outras comunicações a serem apresentadas pelas partes em conexão com as presentes cláusulas gerais, devem ser feitas por escrito e entendem-se devidamente apresentadas quando forem entregues em mãos ou enviadas por correio para o endereço ou e-mail da outra parte, ou para qualquer outro endereço ou e-mail que para estes fins cada parte possa indicar<br>\r\n<br>\r\nPara dirimir os conflitos decorrentes destes Termos e Condições de uso é eleito o foro da Comarca de Londrina - PR sob a legislação vigente no Brasil.\r\n', '1602645050.jpg'),
(10, 'Política de privacidade', '4', '', 'POLÍTICA DE PRIVACIDADE<br>\r\nAs presentes Cláusulas Gerais tem como objetivo definir os termos e condições da relação entre os usuários e o GPS - Guiadas para o Sucesso. As presentes cláusulas podem, eventualmente, ser complementadas por outras Condições Particulares. No caso de conflito entre as cláusulas gerais e as Condições Particulares, estas últimas prevalecerão.<br>\r\nPROTEÇÃO DE PRIVACIDADE E DADOS PESSOAIS<br>\r\n1. GPS - Guiadas Para o Sucesso declara que cumpre a Constituição Federal, o Código Civil e o Código de Defesa do Consumidor (Lei 8.078/1990) e toda a legislação em vigor pertinente à proteção de dados, à privacidade, à intimidade e demais aspectos que envolvem a dignidade da pessoa humana.<br>\r\n2. GPS - Guiadas Para o Sucesso mantém os níveis de segurança de proteção dos dados pessoais exigidos por lei e estabelece todos os meios técnicos disponíveis para evitar a perda, mau uso, alteração, acesso não autorizado e/ou roubo, dos dados que o usuário fornece através do website.<br>\r\n3. GPS - Guiadas Para o Sucesso compromete-se a manter a confidencialidade dos dados pessoais contidos em seus registros, em conformidade com a legislação aplicável.<br>\r\n4. GPS - Guiadas Para o Sucesso declara que recolhe unicamente os dados dos usuários para uma boa prestação de serviços, sendo os dados armazenados apenas enquanto necessário. Ao fornecer o seu e-mail e outros dados pessoais, os usuários dão a sua autorização a GPS - Guiadas Para o Sucesso para que esta informação seja tratada com o objetivo de prestar o Serviço. Autorizam GPS - Guiadas Para o Sucesso a mantê-los informados sobre quaisquer tipos de ofertas, promoções ou oportunidades, relacionadas com serviço GPS - Guiadas Para o Sucesso e a comunicar essas informações a terceiros, a fim de realizar ações comerciais conjuntas ou não. Não obstante, os usuários podem a qualquer momento manifestar, por escrito ou enviar um e-mail, sobre o seu desejo de não receber este tipo de informação ou que os seus dados não estejam disponíveis para outras empresas.<br>\r\n5. Qualquer usuário poderá exercer os seus direitos de acesso, retificação, oposição e cancelamento do tratamento dos seus dados pessoais nos termos e condições previstas na legislação vigente. Para esse efeito, GPS - Guiadas Para o Sucesso disponibiliza o email (contato@guiadasparaosucesso.com.br) para receber as solicitações de cancelamento, que serão atendidas de imediato.<br>\r\nCOOKIES<br>\r\nEste site, como tantos outros, usa cookies com a intenção de facilitar, melhorar e personalizar a navegação dos usuários. As cookies são pequenos arquivos de texto que o servidor de um site armazena no navegador/browser do usuário (Explorer, Safari, Firefox, Chrome...). Desta forma, quando o usuário volta a visitar o site leêm-se as cookies para identificar ao usuário próprio e estabelecer as suas preferências de navegação.<br>\r\nEste site pode usar os seguintes cookies:<br>\r\n1. Cookies para facilitar a navegação dos usuários e lembrar por onde se encontra o usuário quando navega pelo site.<br>\r\n2. Cookies de sessão para seguir a sessão nas páginas que exigem registro. Estas cookies são necessárias para aceder aos serviços ou conteúdos restringidos aos usuários que navegam como usuários registrados. Se não selecionou lembrar a minha senha estas cookies eliminam-se quando se fecha o navegador ou apaga o computador ou aplicativo informático.<br>\r\n3. Cookies de medição e analítica web. Estas cookies usam-se para analisar as visitas realizadas e os tempos de navegação pelo site. A informação coletada por estas cookies é transmitida e arquivada diretamente nos servidores dos prestadores do serviço.<br>\r\n4. Cookies de publicidade. Estas cookies servem para saber se o usuário visualizou um anúncio e há quanto tempo não o visualiza. Isto permite-nos mostrar-lhe a publicidade mais adequada em cada momento.<br>\r\n5. Cookies de publicidade de terceiros. Muitos anúncios de publicidade que mostram-se neste site são gerados por terceiros. Alguns de estes terceiros podem armazenar cookies no seu navegador em quanto navega pela GPS - Guiadas Para o Sucesso. As empresas que gerem estas cookies têm as suas próprias políticas de privacidade.\r\n6. Outras cookies de terceiros que podem armazenar no seu navegador durante o tempo de navegação pelo GPS - Guiadas Para o Sucesso. Por exemplo, quando usa o botão de compartilhar conteúdos GPS - Guiadas Para o Sucesso em redes sociais. As empresas que geram estas cookies têm as suas próprias políticas de privacidade.<br>\r\nCOMO DESATIVAR OS COOKIES?<br>\r\nPode configurar o seu navegador para que todas estas cookies apaguem-se automaticamente assim que feche o navegador, computador ou dispositivo:<br>\r\nChrome: https://goo.gl/2v7T9i<br>\r\nFirefox: http://support.mozilla.org/en-us/kb/cookies-information-websites-store-on-your-computer?redirectlocale=en-us&redirectslug=cookies<br>\r\nInternet explorer: http://support.microsoft.com/kb/196955<br>\r\nSafari web: http://support.apple.com/kb/ph5042<br>\r\nSafari ios: http://support.apple.com/kb/ht1677<br>\r\n<br>\r\nPode contatar o titular deste site sobre as cookies no correio eletrônico contato@guiadasparaosucesso.com.br<br>\r\nDISPOSIÇÕES GERAIS<br>\r\nCaso uma das cláusulas previstas nas cláusulas gerais seja declarada total ou parcialmente ineficaz ou inválida, tal nulidade ou ineficácia afetará apenas essa disposição ou a parte dela que resulte inválida ou ineficaz, subsistindo todo o resto que for válido, e considerando-se essa mesma disposição como inexistente.<br>\r\nTodas as notificações, requerimentos, solicitações e outras comunicações a serem apresentadas pelas partes em conexão com as presentes cláusulas gerais, devem ser feitas por escrito e entendem-se devidamente apresentadas quando forem entregues em mãos ou enviadas por correio para o endereço ou e-mail da outra parte, ou para qualquer outro endereço ou e-mail que para estes fins cada parte possa indicar.<br>\r\nPara dirimir os conflitos decorrentes destes Termos e Condições de uso é eleito o foro da Comarca de Londrina - PR sob a legislação vigente no Brasil.<br>\r\n<br>\r\nPortal GPS (denominada aqui como GPS - Guiadas Para o Sucesso) é uma Sociedade Comercial registrada no Cadastro Nacional da Pessoa Jurídica da Receita Federal (CNPJ) sob o nº 13.919.179/0001-27, com sede na cidade de Londrina, estado PR.<br>\r\n<br>\r\nPortal GPS é proprietário do dominio: www.guiadasparaosucesso.com.br  ', '1602645696.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blocos_paginas`
--

CREATE TABLE `blocos_paginas` (
  `id` int(10) UNSIGNED NOT NULL,
  `pagina` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `blocos_paginas`
--

INSERT INTO `blocos_paginas` (`id`, `pagina`) VALUES
(1, 'Quem somos'),
(2, 'Faça parte'),
(3, 'Termos de uso'),
(4, 'Políticas de privacidade');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_categorias`
--

CREATE TABLE `blog_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `blog_categorias`
--

INSERT INTO `blog_categorias` (`id`, `categoria`) VALUES
(1, 'Categoria 1'),
(2, 'Categoria 2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_comentarios`
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
-- Despejando dados para a tabela `blog_comentarios`
--

INSERT INTO `blog_comentarios` (`id`, `publicacao`, `nome`, `email`, `mensagem`, `status`, `datacomentario`) VALUES
(1, 6, 'sdfsad', 'fsdaf', 'sdafsdf', 1, '2020-09-15 18:28:48');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_publicacoes`
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
-- Despejando dados para a tabela `blog_publicacoes`
--

INSERT INTO `blog_publicacoes` (`id`, `titulo`, `categoria`, `publicador`, `resumo`, `texto`, `imagem`, `video`, `datapublicacao`) VALUES
(7, 'sdsad', 1, '1', 'sdfsadfdss', 'adfsdf', NULL, NULL, '2020-09-25 22:57:13');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias_destaques`
--

CREATE TABLE `categorias_destaques` (
  `id` int(10) UNSIGNED NOT NULL,
  `local` varchar(10) DEFAULT NULL,
  `medidas` varchar(100) DEFAULT NULL,
  `categoria` int(10) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categorias_destaques`
--

INSERT INTO `categorias_destaques` (`id`, `local`, `medidas`, `categoria`, `imagem`) VALUES
(1, '1', '700x604', 8, '1604620355.jpg'),
(2, '2', '560x480', 13, '1604620419.jpg'),
(3, '3', '560x480', 23, '1604620489.jpg'),
(4, '4', '800x343', 11, '1604620535.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
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
-- Despejando dados para a tabela `contatos`
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
-- Estrutura para tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) UNSIGNED NOT NULL,
  `perfil` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `iniciodestaque` date NOT NULL,
  `fimdestaque` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `informacoes`
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
-- Despejando dados para a tabela `informacoes`
--

INSERT INTO `informacoes` (`id`, `telefone`, `email`, `instagram`, `facebook`, `telegram`, `youtube`) VALUES
(1, 'telefone2b2', 'contato@guiadasparaosucesso.com.br', 'https://www.instagram.com/guiadasparaosucesso/', 'https://www.facebook.com/GPS-Guiadas-para-o-Sucesso-101191021265160', 'telegram2b2', 'www.instagram.com/guiadasparaosucesso/');

-- --------------------------------------------------------

--
-- Estrutura para tabela `orcamentos`
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
-- Estrutura para tabela `planos`
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
-- Despejando dados para a tabela `planos`
--

INSERT INTO `planos` (`id`, `titulo`, `valor`, `resumo`, `descricao`, `botao`, `imagem`, `status`) VALUES
(2, 'Plano Desperte', '40.00', '<p>Plano Desperte</p>', '<br>●	Seja integrante GPS com conteúdo exclusivo de desenvolvimento pessoal, faça networking e tenha acesso a conteúdos educativos na plataforma on LINE. <br>\r\n●	20% desconto em eventos presenciais<br>\r\n●	Clube de consumo com descontos exclusivos em estabelecimentos comerciais de Londrina e região<br>\r\n●	Post apresentação: “eu sou GPS” com foto + logo da empresa + nome e profissão da empresária<br>\r\n●	Divulgação do Post apresentação nas redes sociais do GPS, promovendo maior visibilidade e divulgação da sua página do Portal<br>\r\n●	Portal GPS Business: plataforma online, com uma página que pode ser customizada pela empresária onde irá conter: logotipo da empresa, descrição dos serviços, formulário de contato/solicitação de orçamento, divulgação das redes sociais e galeria de fotos e vídeo e espaço para depoimento de seus clientes.<br>\r\n\r\nValor á vista R$000,00 (média mensal R$00,00) ou 12x de R$00,00', 'http://pag.ae/7WxBLUGcR', '1602696146.jpg', 1),
(3, 'Plano Conquiste', '60.00', '<p>Plano Conquiste</p>', '<br>●	Seja integrante GPS com conteúdo exclusivo de desenvolvimento pessoal, faça networking e tenha acesso a conteúdos educativos na plataforma on LINE. <br>\r\n●	Acesso ao grupo telegram com oportunidade de conexões poderosas entre as integrantes<br>\r\n●	30% desconto em eventos presenciais<br>\r\n●	Clube de consumo com descontos exclusivos em estabelecimentos comerciais de Londrina e região<br>\r\n●	Post apresentação: “eu sou GPS” com foto + logo da empresa + nome e profissão da empresária<br>\r\n●	Divulgação do Post apresentação nas redes sociais do GPS, promovendo maior visibilidade e divulgação da sua página do Portal<br>\r\n●	Portal GPS Business: plataforma online, com uma página que pode ser customizada pela empresária onde irá conter: logotipo da empresa, descrição dos serviços, formulário de contato/solicitação de orçamento, divulgação das redes sociais e galeria de fotos e vídeo e espaço para depoimento de seus clientes.<br>\r\n+<br>\r\n●	Divulgue seu trabalho em eventos presenciais com folder, banner ou cartão de visita do seu trabalho.<br>\r\n●	Espaço para fazer uma palestra (webinário) na reunião semanal para o grupo que faz parte do whats app (20 minutos com tema de sua expertise e que seja relevante para as demais águias GPS)<br>\r\n\r\nValor á vista R$000,00 (média mensal R$00,00) ou 12x de R$00,00\r\n', 'http://pag.ae/7Wxr5mjNR', '1602696163.jpg', 1),
(4, 'Plano Anual Triunfe', '70.00', '<p>Plano Triunfe</p>', '<br>●	Seja integrante GPS com conteúdo exclusivo de desenvolvimento pessoal, faça networking e tenha acesso a conteúdos educativos na plataforma on LINE. <br>\r\n●	50% desconto eventos presenciais<br>\r\n●	Clube de consumo com descontos exclusivos em estabelecimento comercial de Londrina e região<br>\r\n●	Post Apresentação: “eu sou GPS” com foto + logo da empresa + nome e profissão da empresária<br>\r\n●	Divulgação do Post apresentação nas redes sociais do GPS, promovendo maior visibilidade e divulgação da sua página do Portal<br>\r\n●	Portal GPS Business: plataforma online, com uma página que pode ser customizada pela empresária onde irá conter: logotipo da empresa, descrição dos serviços, formulário de contato/solicitação de orçamento, divulgação das redes sociais e galeria de fotos e vídeo e espaço para depoimento de seus clientes.<br>\r\n●     Divulgue seu trabalho em eventos presenciais com folder, banner ou cartão de visita do seu trabalho.<br>\r\n●	Espaço para fazer uma palestra (webinário) na reunião semanal para o grupo que faz parte do whats app (20 minutos com tema de sua expertise e que seja relevante para as demais águias GPS)<br>\r\n+<br>\r\n●	Cartão digital interativo (PDF) da empresária com foto + logo da empresa + ícones de contato (redes sociais, site, e-mail)<br>\r\n●	Acesso ao grupo telegram com oportunidade de conexões poderosas entre as integrantes, rodada de negócios, site da sua empresa, marketing b2b. Conteúdo sobre vendas, gestão estratégica, liderança, marketing digital. podcasts exclusivos<br>\r\n●	Bônus extra: fotos profissionais da GPS<br>\r\n\r\nValor á vista R$000,00 (média mensal R$00,00) ou 12x de R$00,00', 'http://pag.ae/7Wxr3YBEu', '1602696176.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
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
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `resumo`, `descricao`, `imagem`, `video`, `linkpagamento`, `preconovo`, `precoantigo`, `status`, `datacadastro`) VALUES
(2, 'Caneca Àguias voam com águias', 'Caneca personalizada com seu nome', 'Caneca personalizada com seu nome', '1602274446.jpg', NULL, 'https://pag.ae/7WvcZnxM6', '25,00', '', 1, '2020-09-24 16:34:07'),
(3, 'Camiseta branca', '<p>resumo do produto 2</p>', 'Camiseta babylook, tamanhos P, M, G e XG', '1602274736.jpg', NULL, 'https://pag.ae/7Wvd4ToNH', '50,00', '', 1, '2020-09-24 16:39:23'),
(4, 'Camiseta preta', '<p>resumo de produto 3</p>', 'Camiseta babylook, tamanhos P, M, G e XG', '1602274773.jpg', NULL, 'https://pag.ae/7Wvd58PxH', '50,00', '', 1, '2020-09-24 16:41:22'),
(6, 'Máscara GPS', '<p>resumo de produto 4</p>', '<p>descricao de produto 5</p>', '1602274874.jpg', 'epG47IUL68k', 'https://pag.ae/7Wvd5Dfun', '10,00', '', 1, '2020-09-24 16:43:29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `seo`
--

CREATE TABLE `seo` (
  `id` int(11) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `analytics` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `seo`
--

INSERT INTO `seo` (`id`, `description`, `keywords`, `analytics`) VALUES
(1, 'desciptions2', 'keywordss2', 'analytiucss2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Felipe Sergio', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'Lourival Netto', 'netto@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'Paula', 'contato@guiadasparaosucesso.com.br', 'a36e8f285db9990ba9df5dc629db6bf8');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `anunciantes`
--
ALTER TABLE `anunciantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_categoria`
--
ALTER TABLE `anunciantes_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_comentarios`
--
ALTER TABLE `anunciantes_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_estrelas`
--
ALTER TABLE `anunciantes_estrelas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_fotos`
--
ALTER TABLE `anunciantes_fotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_orcamento`
--
ALTER TABLE `anunciantes_orcamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_video`
--
ALTER TABLE `anunciantes_video`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `banners_local`
--
ALTER TABLE `banners_local`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blocos`
--
ALTER TABLE `blocos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blocos_paginas`
--
ALTER TABLE `blocos_paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog_categorias`
--
ALTER TABLE `blog_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog_comentarios`
--
ALTER TABLE `blog_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog_publicacoes`
--
ALTER TABLE `blog_publicacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `categorias_destaques`
--
ALTER TABLE `categorias_destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `anunciantes`
--
ALTER TABLE `anunciantes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `blog_comentarios`
--
ALTER TABLE `blog_comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `blog_publicacoes`
--
ALTER TABLE `blog_publicacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
