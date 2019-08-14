-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2018 às 23:52
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lima`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cloto_dados`
--

CREATE TABLE `cloto_dados` (
  `id` int(8) NOT NULL,
  `user` int(8) NOT NULL,
  `dado` blob NOT NULL,
  `tag` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cloto_dados`
--

INSERT INTO `cloto_dados` (`id`, `user`, `dado`, `tag`) VALUES
(1, 0, 0x4578656d706c6f206465206461646f, 'exempmlo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cloto_user`
--

CREATE TABLE `cloto_user` (
  `id` int(8) NOT NULL,
  `nick` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `poder` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ew_atos`
--

CREATE TABLE `ew_atos` (
  `id` int(11) NOT NULL,
  `atos` text NOT NULL,
  `inicio` int(8) NOT NULL,
  `limit` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ew_atos`
--

INSERT INTO `ew_atos` (`id`, `atos`, `inicio`, `limit`) VALUES
(21, 'me.id', 1538342216, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ew_dialogo`
--

CREATE TABLE `ew_dialogo` (
  `id` int(8) NOT NULL,
  `entrada` varchar(255) DEFAULT '',
  `saida` varchar(255) NOT NULL,
  `personagem` int(8) NOT NULL,
  `uso` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

--
-- Extraindo dados da tabela `ew_dialogo`
--

INSERT INTO `ew_dialogo` (`id`, `entrada`, `saida`, `personagem`, `uso`) VALUES
(205, 'SDF', 'Empty!', 0, 0),
(206, 'WORD', 'Empty!', 0, 0),
(207, 'ME]', 'Empty!', 0, 0),
(2, 'LIFE', 'grimorio.dizer(he );\nme.life;', 0, 0),
(3, 'LIFE', 'grimorio.dizer(seu life he);\nme.life;', 0, 102),
(4, 'MANA', 'grimorio.dizer(este é seu mana); me.magi;', 0, 29),
(29, 'A', 'Empty!', 0, 24),
(0, '', 'grimorio.perceber();', 0, 462),
(39, '[LOGUED=]', 'Empty!', 0, 0),
(203, 'LFIE', 'Empty!', 0, 3),
(204, 'OLIFE', 'Empty!', 0, 0),
(41, 'USAR', 'Empty!', 0, 0),
(42, 'JUREMA', 'Empty!', 0, 37),
(43, 'JUEMA', 'Empty!', 0, 0),
(44, 'GANGORRA', 'Empty!', 0, 0),
(45, 'HUNTER', 'Empty!', 0, 3),
(46, 'D', 'Empty!', 0, 13),
(47, 'DF', 'Empty!', 0, 1),
(48, 'JURE', 'Empty!', 0, 1),
(49, 'MINERVA', 'Empty!', 0, 11),
(50, 'LIDO', 'Empty!', 0, 0),
(51, '[LOGUED=TRUE]', 'grimorio.dizer(Bem vindo de volta );\nuser.nick;grimorio.dizer(! Parece que a pancada foi feia. Lembra-se de alguma coisa?);\ngrimorio.setWeit(quest_noob-se_lembra?);', 0, 52),
(52, 'JRUEMA', 'Empty!', 0, 3),
(53, 'AMANDA', 'grimorio.dizer(Aquela deusa!!!)', 0, 38),
(54, 'MADMA', 'Empty!', 0, 0),
(55, 'MANDA', 'Empty!', 0, 5),
(56, 'MADNA', 'Empty!', 0, 1),
(57, 'ALINE', 'Empty!', 0, 2),
(58, 'CIBELE', 'Empty!', 0, 4),
(59, 'ANA', 'Empty!', 0, 1),
(60, 'ANDERSOM', 'Empty!', 0, 0),
(61, 'ANDERSON', 'Empty!', 0, 0),
(62, 'ANDERS', 'Empty!', 0, 0),
(63, 'DIZER', 'Empty!', 0, 0),
(64, 'AMORA', 'Empty!', 0, 2),
(65, 'MIZERVA', 'Empty!', 0, 0),
(66, 'AMOR', 'Empty!', 0, 0),
(102, '[AMORA=VERDE][LOGUED=FALSE]', 'Empty!', 0, 1),
(67, 'AJUMA', 'Empty!', 0, 0),
(68, 'ARJUMA', 'Empty!', 0, 0),
(69, 'ADSF', 'Empty!', 0, 0),
(70, 'G', 'Empty!', 0, 2),
(71, 'ASDF', 'Empty!', 0, 2),
(72, 'AE', 'Empty!', 0, 0),
(73, 'ASD', 'Empty!', 0, 0),
(74, 'SDFG', 'Empty!', 0, 1),
(75, 'S', 'Empty!', 0, 6),
(76, 'FDH', 'Empty!', 0, 0),
(77, 'FGH', 'Empty!', 0, 0),
(78, 'FSE', 'Empty!', 0, 0),
(79, 'RT', 'Empty!', 0, 0),
(80, 'SGJ', 'Empty!', 0, 0),
(81, 'F', 'Empty!', 0, 14),
(82, 'UI', 'Empty!', 0, 0),
(83, 'YU', 'Empty!', 0, 0),
(84, 'KGHJ', 'Empty!', 0, 0),
(85, 'RET', 'Empty!', 0, 0),
(86, 'S DF', 'Empty!', 0, 0),
(87, 'GS', 'Empty!', 0, 0),
(88, 'Y', 'Empty!', 0, 0),
(89, 'DN', 'Empty!', 0, 0),
(90, 'TU', 'Empty!', 0, 0),
(91, 'MFTI', 'Empty!', 0, 0),
(92, 'HD', 'Empty!', 0, 0),
(93, 'GFH', 'Empty!', 0, 0),
(94, 'DFGH', 'Empty!', 0, 0),
(95, 'TGF', 'Empty!', 0, 0),
(96, 'TUY', 'Empty!', 0, 0),
(97, 'DGH', 'Empty!', 0, 0),
(98, 'MILENA', 'grimorio.dizer(deve ser uma garota bonita!);', 0, 6),
(99, '.', 'Empty!', 0, 1),
(100, 'ME', 'grimorio.dizer(voce Ã© );\nme.nome();', 0, 21),
(101, 'USER', 'user;', 0, 1),
(103, 'JUREGUE', 'Empty!', 0, 1),
(104, '[WEIT=USER][LOGUED=FALSE]', 'Empty!', 0, 95),
(105, '[WEIT=USER][LOGUED=TRUE]', 'Empty!', 0, 28),
(106, 'ASDFASDFAG', 'Empty!', 0, 4),
(107, 'SVCBXRFRT', 'Empty!', 0, 0),
(108, 'AZUL', 'Empty!', 0, 8),
(109, 'VERDE', 'Empty!', 0, 0),
(110, 'PURPLE', 'Empty!', 0, 9),
(111, 'ANDE', 'me.andar();', 0, 63),
(112, 'CORRA', 'Empty!', 0, 0),
(113, 'ATAQUE', 'Empty!', 0, 1),
(114, 'VEJA', 'Empty!', 0, 0),
(115, 'O QUE TEM AI?', 'Empty!', 0, 1),
(116, 'O QUE TEM AI', 'Empty!', 0, 4),
(117, 'IFE', 'Empty!', 0, 1),
(118, 'MNAA', 'Empty!', 0, 0),
(119, 'QUAL O MEU MANA', 'Empty!', 0, 0),
(120, 'QUANTO ESTA O MEU MANA', 'Empty!', 0, 3),
(121, 'QUAL O MEU MANA?', 'Empty!', 0, 1),
(122, 'QUANTO ESTA O MEU MANA?', 'Empty!', 0, 0),
(123, 'VER', 'Empty!', 0, 0),
(124, 'BELONA', 'gri.dizer(Cidade simples e pequena. Banhada pelo rio tinto. Famosa por causa da floresta negra);', 0, 11),
(125, 'JULETE', 'Empty!', 0, 0),
(126, 'SIBELE', 'Empty!', 0, 1),
(127, 'AVANI', 'Empty!', 0, 0),
(128, 'JSON', 'Empty!', 0, 13),
(141, 'QUANTO ESTA MEU MANA', 'me.mana();', 0, 3),
(138, 'MANNA', 'Empty!', 0, 0),
(139, 'QUNTO ESTA O MEU MANA', 'Empty!', 0, 0),
(140, 'QUANTO ESTA MEU MEN', 'Empty!', 0, 0),
(142, 'O QUE TEM AIW', 'Empty!', 0, 0),
(143, 'O QUE TEM IN', 'Empty!', 0, 0),
(144, 'MAN', 'Empty!', 0, 0),
(145, 'CIBELEE', 'Empty!', 0, 0),
(146, 'MOLLY', 'Empty!', 0, 7),
(147, 'MOLU', 'Empty!', 0, 0),
(148, '`', 'Empty!', 0, 5),
(149, 'UJUREMA', 'Empty!', 0, 0),
(150, 'JULIETE', 'Empty!', 0, 0),
(151, 'MOLLLY', 'Empty!', 0, 0),
(152, 'NANDA', 'Empty!', 0, 0),
(153, 'NANAD', 'Empty!', 0, 0),
(154, 'AMADNA', 'Empty!', 0, 3),
(155, 'AMDNA', 'Empty!', 0, 22),
(156, 'LIFEE', 'Empty!', 0, 1),
(157, 'JUDITE', 'Empty!', 0, 3),
(158, 'ALIZABETH', 'Empty!', 0, 0),
(159, 'BETH', 'Empty!', 0, 0),
(160, 'ALCIONE', 'Empty!', 0, 0),
(161, 'MANA', 'grimorio.dizer(Seu mana é: ); me.mana;', 0, 30),
(162, 'SFA', 'Empty!', 0, 0),
(163, 'AD', 'Empty!', 0, 1),
(164, 'ADF', 'Empty!', 0, 1),
(165, 'ADFFADFF', 'Empty!', 0, 3),
(166, 'DFA', 'Empty!', 0, 0),
(167, 'JUDIE', 'Empty!', 0, 0),
(168, 'JUDE', 'Empty!', 0, 0),
(169, 'ALUCARD', 'Empty!', 0, 0),
(170, 'ALICE', 'Empty!', 0, 1),
(171, 'DIGO NADA', 'Empty!', 0, 0),
(172, 'ALANA', 'Empty!', 0, 2),
(173, 'HUTNER', 'Empty!', 0, 1),
(174, 'SIBELLE', 'Empty!', 0, 0),
(175, 'NAO', 'Empty!', 0, 6),
(176, 'SIM', 'Empty!', 0, 1),
(177, 'TALVEL', 'Empty!', 0, 0),
(178, 'TALVEZ', 'Empty!', 0, 1),
(179, 'COMO?', 'Empty!', 0, 0),
(180, 'JREMA', 'Empty!', 0, 0),
(181, 'JULIETA', 'Empty!', 0, 0),
(182, 'UMBRELA', 'Empty!', 0, 0),
(183, 'JUREGE', 'Empty!', 0, 0),
(184, 'JUTRMS', 'Empty!', 0, 0),
(185, 'SLIVR', 'Empty!', 0, 0),
(186, 'MINRTBS', 'Empty!', 0, 0),
(187, 'SINECE', 'Empty!', 0, 0),
(188, 'SINELE', 'Empty!', 0, 0),
(189, 'SOMETE', 'Empty!', 0, 0),
(190, 'ALANDDA', 'Empty!', 0, 0),
(191, 'RAUNNP', 'Empty!', 0, 0),
(192, 'RARUNO', 'Empty!', 0, 0),
(193, 'JULIEETE', 'Empty!', 0, 0),
(194, '[WEIT=RESPOSTA][]', 'Empty!', 0, 4),
(195, '[WEIT=RESPOSTA][P]', 'Empty!', 0, 0),
(196, '[WEIT=RESPOSTA][UOIUO]', 'Empty!', 0, 0),
(197, '[WEIT=RESPOSTA][RESPOSTA=0][VALOR=]', 'gri.dizer(Ammmm?)', 0, 88),
(198, '[WEIT=RESPOSTA][RESPOSTA=0]', 'gri.dizer(ok. entÃ£o vamos continuar. prescisamos chegar ae belona);\ngri.respondido();', 0, 74),
(199, 'JURERMA', 'Empty!', 0, 0),
(200, 'CCIBELEE', 'Empty!', 0, 0),
(201, 'DFSGADFG', 'Empty!', 0, 0),
(202, 'LI', 'Empty!', 0, 0),
(208, 'MINHA POSICAO', 'gri.dizer(Minha posiÃ§Ã£o Ã©: );\nme.getPosition(x);\ngri.dizer(|);\nme.getPosition(y);', 0, 22),
(209, 'MINHA POSICCAO', 'Empty!', 0, 0),
(210, 'MINHA PISICAO', 'Empty!', 0, 0),
(211, 'MINHA POSICOA', 'Empty!', 0, 0),
(212, 'MANDE', 'Empty!', 0, 0),
(213, 'ANDAR', 'gri.ouvir(ande);', 0, 17),
(214, 'AMDE', 'Empty!', 0, 1),
(215, 'MDA', 'Empty!', 0, 0),
(216, 'ADNE', 'Empty!', 0, 0),
(217, 'ANDA', 'Empty!', 0, 3),
(218, 'ME.MAGI', 'Empty!', 0, 0),
(219, 'ANDEE', 'Empty!', 0, 0),
(220, 'ANE', 'Empty!', 0, 0),
(221, 'AANDE', 'Empty!', 0, 0),
(222, 'ONDE ESTOU', 'Empty!', 0, 1),
(223, 'PARA', 'Empty!', 0, 0),
(224, 'PARAR', 'Empty!', 0, 1),
(225, 'MINHA POSCAO', 'Empty!', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ew_inert`
--

CREATE TABLE `ew_inert` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ew_inert`
--

INSERT INTO `ew_inert` (`id`, `name`, `descricao`) VALUES
(1, 'Casa Das Armas', 'strBegin\"Casa debelona\"strEnd'),
(2, 'O machaado do anÃ£o', 'strBegin\"Loja pequena\"strEnd'),
(0, 'strBegin\"\"strEnd', ''),
(11, 'PortÃ£o de Hermes', 'PortÃ£o dimencional para outra cidade'),
(12, 'Ervas da eva', '\"strEnd'),
(13, 'PenÃ§Ã£o Hinata', '\"strEnd\"strEnd'),
(14, 'Rio ira de Leto', 'strBegin\"s\"strEnd'),
(15, 'Floresta negra', '\"strEnd\"strEnd'),
(16, 'Coliseum', 'strBegin\"\"strEnd'),
(17, 'Rolos do Hobs', 'strBegin\"\"strEnd'),
(18, 'SalÃ£o do soluÃ§o', '\"strEnd\"strEnd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ew_object`
--

CREATE TABLE `ew_object` (
  `id` int(8) NOT NULL,
  `x` int(8) NOT NULL,
  `y` int(8) NOT NULL,
  `w` int(8) NOT NULL,
  `h` int(8) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ew_object`
--

INSERT INTO `ew_object` (`id`, `x`, `y`, `w`, `h`, `tipo`) VALUES
(1, -25, -77, 50, 50, 'inert'),
(2, 2, 29, 6, 10, 'inert'),
(3, 100, 141, 1, 1, 'personagem'),
(11, -1, -1, 2, 2, 'inert'),
(12, 27, -25, 5, 5, 'inert'),
(13, -42, 0, 15, 10, 'inert'),
(14, -200, -200, 400, 9, 'inert'),
(15, -452, -150, 400, 300, 'inert'),
(16, -52, 29, 50, 50, 'inert'),
(17, 27, 0, 15, 5, 'inert'),
(18, 10, 29, 15, 10, 'inert');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ew_personagem`
--

CREATE TABLE `ew_personagem` (
  `id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

--
-- Extraindo dados da tabela `ew_personagem`
--

INSERT INTO `ew_personagem` (`id`, `name`, `tipo`) VALUES
(3, 'ApoKrifo', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ew_quests`
--

CREATE TABLE `ew_quests` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `descricao` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

--
-- Extraindo dados da tabela `ew_quests`
--

INSERT INTO `ew_quests` (`id`, `nome`, `descricao`) VALUES
(1, 'noob', 'Primeira quest do jogo'),
(2, 'nao logado', 'Para nao jogadores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ew_user`
--

CREATE TABLE `ew_user` (
  `id` int(8) NOT NULL,
  `nick` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL,
  `tipo` int(8) NOT NULL,
  `personagem` int(8) NOT NULL,
  `config` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

--
-- Extraindo dados da tabela `ew_user`
--

INSERT INTO `ew_user` (`id`, `nick`, `email`, `password`, `tipo`, `personagem`, `config`) VALUES
(1, 'CubeBlack', 'danie_nerd@hotmail.com', 'Ragnarok13', 4, 2, ''),
(2, 'asdf', 'danie_nerd@hotmail.com', 'asdf', 1, 3, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ew_wiki`
--

CREATE TABLE `ew_wiki` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tipo` varchar(100) NOT NULL DEFAULT '',
  `descricao` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

--
-- Extraindo dados da tabela `ew_wiki`
--

INSERT INTO `ew_wiki` (`id`, `title`, `tipo`, `descricao`) VALUES
(1, 'LIFE', 'dialogo', 'Empty!'),
(2, 'Introducao', 'system', 'asdfasdfasd asdf ds');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ew_wikipage`
--

CREATE TABLE `ew_wikipage` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ew_wikipage`
--

INSERT INTO `ew_wikipage` (`id`, `titulo`, `tipo`, `conteudo`) VALUES
(1, 'Life', 'Dialogo', 'Esta a pagina da entrada Life'),
(3, 'Mana', 'a', 'Pergunta curta para saber o mana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cloto_dados`
--
ALTER TABLE `cloto_dados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cloto_user`
--
ALTER TABLE `cloto_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ew_atos`
--
ALTER TABLE `ew_atos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ew_dialogo`
--
ALTER TABLE `ew_dialogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ew_inert`
--
ALTER TABLE `ew_inert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ew_object`
--
ALTER TABLE `ew_object`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ew_personagem`
--
ALTER TABLE `ew_personagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ew_quests`
--
ALTER TABLE `ew_quests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ew_user`
--
ALTER TABLE `ew_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ew_wiki`
--
ALTER TABLE `ew_wiki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ew_wikipage`
--
ALTER TABLE `ew_wikipage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cloto_dados`
--
ALTER TABLE `cloto_dados`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cloto_user`
--
ALTER TABLE `cloto_user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ew_atos`
--
ALTER TABLE `ew_atos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ew_dialogo`
--
ALTER TABLE `ew_dialogo`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `ew_object`
--
ALTER TABLE `ew_object`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ew_personagem`
--
ALTER TABLE `ew_personagem`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ew_quests`
--
ALTER TABLE `ew_quests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ew_user`
--
ALTER TABLE `ew_user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ew_wiki`
--
ALTER TABLE `ew_wiki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ew_wikipage`
--
ALTER TABLE `ew_wikipage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
