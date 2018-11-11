DROP TABLE IF EXISTS `ew_inert`;
CREATE TABLE IF NOT EXISTS `ew_inert` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `ew_inert` (`id`,`name`, `descricao`) VALUES
(1,'igreja', 'Capela catolica, tao antiga quanto a cidade, contruida em pedra'),
(2,'Ferreiro', 'Loja pequena, com armas e armaduras espalhadas pelas paredes');

DROP TABLE IF EXISTS `ew_object`;
CREATE TABLE IF NOT EXISTS `ew_object` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `x` int(8) NOT NULL,
  `y` int(8) NOT NULL,
  `w` int(8) NOT NULL,
  `h` int(8) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `ew_object` (`x`, `y`, `w`, `h`, `tipo`) VALUES
(-25, -25, 50, 50, 'inert'),
(2, 29, 25, 25, 'inert'),
(100, 100, 1, 1, 'personagem');

DROP TABLE IF EXISTS `ew_personagem`;
CREATE TABLE IF NOT EXISTS `ew_personagem` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `ew_personagem` (`id`,`name`, `tipo`) VALUES
(3, 1, 0);

DROP TABLE IF EXISTS `ew_user`;
CREATE TABLE IF NOT EXISTS `ew_user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nick` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL,
  `tipo` int(8) NOT NULL,
  `personagem` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


insert into ew_user values
	(2,'asdf','danie_nerd@hotmail.com','asdf',1,0),
	(1,'CubeBlack','danie_nerd@hotmail.com','Ragnarok13',4,0)
;


DROP TABLE IF EXISTS `ew_dialogo`;
CREATE TABLE `ew_dialogo` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `entrada` varchar(255) NOT NULL,
  `saida` varchar(255) NOT NULL,
  `personagem` int(8) NOT NULL,
  `uso` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

insert into ew_dialogo values
	(3,'LIFE','grimorio.dizer(seu life he[])',0,0),
	(2,'LIFE','grimorio.dizer(he[])',0,0),
	(1,'LIFE','grimorio.dizer(igla a [])',0,0)
;


DROP TABLE IF EXISTS `ew_forumpost`;
CREATE TABLE IF NOT EXISTS `ew_forumpost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `tipo` varchar(100) NOT NULL DEFAULT '',
  `descricao` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

insert into ew_forumpost values
	(2,'Introducao','system','asdfasdfasd asdf ds'),
	(1,'LIFE','dialogo','Empty!')
;

