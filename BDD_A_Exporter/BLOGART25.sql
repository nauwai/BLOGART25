-- Adminer 4.8.1 MySQL 8.0.40 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ARTICLE`;
CREATE TABLE `ARTICLE` (
  `numArt` int NOT NULL AUTO_INCREMENT,
  `dtCreaArt` datetime DEFAULT CURRENT_TIMESTAMP,
  `dtMajArt` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `libTitrArt` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `libChapoArt` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `libAccrochArt` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `parag1Art` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `libSsTitr1Art` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `parag2Art` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `libSsTitr2Art` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `parag3Art` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `libConclArt` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `urlPhotArt` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `numThem` int NOT NULL,
  PRIMARY KEY (`numArt`),
  KEY `ARTICLE_FK` (`numArt`),
  KEY `FK_ASSOCIATION_1` (`numThem`),
  CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`numThem`) REFERENCES `THEMATIQUE` (`numThem`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `ARTICLE` (`numArt`, `dtCreaArt`, `dtMajArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`) VALUES
(12,	'2025-02-07 18:19:08',	'2025-02-07 18:20:59',	'Marathon du Médoc 2025 : 42 km de fête, de vin et de folie !',	'Un marathon des vins ? En voilà une  manière de découvrir les terroirs du médoc. Qui  aurait pu croire que courir serait le meilleur moyen de savourer les cépages qui font la fierté de ces châteaux. Les 5, 6 et 7 septembre 2025 : 42 km de  course entre les vignes. Vous l’avez déjà fait ? Alors vous savez que la vraie récompense, c’est  un bon verre à l’arrivée.',	'Un week-end rempli: entre course et découverte.',	'Bien évidemment il ne suffit pas de courir et de manger. La question est: “alors à quoi ressemble ce parcours?”. Je trouve que c’est quand même important de savoir où on met les pieds. Et là, je découvre que cette course est vraiment loin des courses classiques où on suit les lignes, tout droit vers la ligne d’arrivée. On traverse des vignes et on passe devant différents châteaux. Je n’aurai jamais pensé qu’un jour j’aurai envie de courir au milieu des vignes. Le départ se fait à Pauillac, et dès les premiers kilomètres on découvre le fameux château Castera, le premier arrêt. Ensuite, on continue vers le Château Lafite Rothschild, puis le Château Mouton Rothschild,et enfin le château Larose trintaudon. A chaque arrêt, un petit verre, une bouchée de quelque chose de bon, et on repart. On est vraiment loin du chrono et de la compétition. Il ne faut quand même pas se laisser trop emporter car 42 kilomètres de parcours (et oui, c’est un marathon), ça promet quelque chose.',	'Vignes, châteaux et grand large : un marathon sous une brise marine',	'D’après ce qu’on m’a dit, il y a encore autre chose qui différencie totalement ce marathon des autres: le thème. Une course déguisée, c’est une idée de génie, ça me paraît vraiment amusant, je n’ai jamais entendu parler d’une course où tout le monde s’amuse comme ça. Cette année, le thème, c’est…la mer. Ça à l’air marrant de voir des gens courir déguisés peut-être en sirène, en poisson ou même une pieuvre géante, et toute autre chose dans l’univers marin. Je l&#039; imagine déjà. Et le meilleur dans tout ça? C’est que tout le monde (enfin, la majorité, j&#039;espère!), va vraiment jouer le jeu, rien ne me motive encore plus. Vous imaginez, se retrouver entouré de gens en train de courir complètement déguisés ? Ça doit être un vrai moment de bonne humeur. C’est clairement le genre d’évènement où on peut laisser son imagination et sa créativité aller. On s’éclate sans se soucier du regard des autres.',	'Quand la course se transforme en spectacle',	'Je pense que le programme et le thème suffisent largement pour que je me lance dans cette aventure. Mais bon, on peut toujours parfaire un événement avec des mots. On peut bien nous vendre du rêve pour participer. Alors je me lance dans la recherche d’anciennes vidéos pour avoir un vrai aperçu du marathon. Je tombe sur celui de l’année précédente. Des scènes mémorables marquent le cours du marathon. Les participants se déguisent en personnages farfelus avec le thème “Faites vos jeux”. La joie et la bonne humeur des participants en plus de l’ambiance des spectateurs égaient complètement cette course. Je vois des rires, des sourires, partout, et les spectateurs qui sont à fond derrière eux. Et là, je me dis que tout ce qu’on m’a raconté n’était pas un mensonge ou du bluff, ils ont raison, cette course est unique et mémorable. C’est le dernier élément qu’il me fallait pour finir de me convaincre.',	'En bref, le marathon du Médoc, cette aventure est vraiment un mélange de sport, de découvertes et de bonne humeur. Je n’aurai jamais cru dire ça, mais j’ai hâte d’y être, le parcours au cœur des vignes et des châteaux, le thème complètement décalé. Alors oui, je pense que cette année, c’est décidé, je suis prête à me lancer. il n’y a pas de raison de passer à côté de cette expérience.  Bien sûr, je ne peux pas encore confirmer que ce sera aussi incroyable que ce qu’on en dit, mais j’ai vraiment envie de vivre ce moment que tout le monde décrit comme mémorable. Et si celà vous a conquis aussi et bien on se retrouve le 5 septembre. En tout cas, j’ai hâte de voir ce que ça donne, et peut-être que ce sera bien plus que ce à quoi je m’attends !',	'Marath-1352light.jpg',	5),
(13,	'2025-02-07 18:24:00',	'2025-02-07 18:25:41',	'La Brasserie Bordelaise: L’endroit où le partage et la convivialité règne.',	'Passion, persévérance et amour du métier : voilà  ce qui anime Léonore Amrane et Elsa Jeney. Ces deux jeunes femmes ont tracé leur chemin dans l’univers exigeant de la restauration, jusqu’à devenir  responsables adjointes de l’un des meilleurs restaurants de Bordeaux : La Brasserie Bordelaise.  Plongée dans un parcours inspirant, où la convivialité et le partage sont au cœur de leur succès.',	'Partage, Convivialité: deux valeurs  essentielles  pour ces deux restauratrices.',	'Un bon restaurant, ce n’est pas seulement une belle carte ou un bel emplacement. C’est avant tout une âme, une énergie portée par ceux qui le font vivre chaque jour. “La restauration, pour moi, c’est un lieu de rencontre, c’est faire kiffer les gens le temps d’un repas. Mon amour pour ce restaurant se porte plus sur les liens que je crée avec nos clients. Contrairement aux autres restaurants, je ne pouvais pas me permettre de faire de petites blagues. C’est plus strict alors qu’ici je peux être moi-même. Dans ce restaurant, mes valeurs sont plus le partage, la bonne humeur et c’est ce que je voudrais transmettre aussi plus tard quand je créerai mon propre restaurant.” dit Elsa. Si telle est la vision d’Elsa sur l’expérience client, celle de Léonore n’en demeure pas moins marquée par une volonté de créer une atmosphère chaleureuse et familiale. Elle souhaite avant tout mettre en valeur les échanges avec ses clients et leur offrir une expérience conviviale. Son ambition? Développer un concept pour aider et accompagner les restaurateurs en difficulté.',	'Responsabilités et défis d’être responsable.',	'Être responsable adjointe est un meilleur titre, mais c’est bien plus qu’un titre. C’est une véritable mission qui demande de la polyvalence car pour elle la restauration est un métier où l’on bouge beaucoup. Elles doivent s’adapter au rythme du service que ce soit en salle ou en cuisine. Léonore et Elsa doivent superviser l’équipe, veiller à la qualité du service et s’assurer que chaque client reparte avec une expérience inoubliable. “Même si dès fois c’est compliqué en fonction des personnes avec qui on travaille, on essaie toujours de faire en sorte que ça soit familial entre les équipes. Grâce à ça, on a toujours l’envie de venir au travail, parce qu’on sait qu’on va passer de bons moments.” dit Léonore. Être responsable demande également de la rigueur, par exemple savoir gérer les différentes personnalités des équipes. “Il y en a qui ne savent pas séparer vie professionnelle et personnelle, et c’est là qu’on est un peu challengé car on doit savoir les manager.” Ajoute-t-elle.',	'L’expérience de Léonore et Elsa.',	'L’expérience de Léonore et Elsa montre que la restauration est bien plus qu’un simple métier : c’est une vocation, un engagement quotidien au service des autres. Grâce à leur passion et leur énergie, elles contribuent chaque jour à faire de La Brasserie Bordelaise un lieu où l’on ne vient pas seulement manger, mais vivre une véritable expérience. Bien que la gestion des équipes est leur plus grand challenge, cela ne nuit pas à l’atmosphère familiale qu’elles instaurent avec ses équipes . Et qui sait ? Peut-être qu’un jour, elles écriront une nouvelle page de leur histoire en ouvrant son propre établissement, ou alors réaliser son envi d’aider d’autres restaurateurs. Une chose est sûre : elles veulent perdurer leur passion pour la cuisine.',	'Bien plus qu’un simple métier, la restauration est aussi une passion, un art de vivre. L’endroit où l’on passe un bon moment que l’on soit seul ou accompagné. Pour Léonore, cette passion est née grâce à un stage dans la restauration  réalisé en troisième. Elle souligne : “Au début, je voulais être un prof de sport, c’est une de mes passions. Ensuite, en troisième, j’ai réalisé un stage où j’ai découvert un métier qui valorise l’aspect humain: “La restauration”. C’est ainsi que je me suis lancée dans cette aventure. Aujourd’hui, mes 11 années d’expérience m’ont permis d’être responsable adjointe à La Brasserie Bordelaise.”',	'BORDEAUX_PORTE_CAILHAUT_PRINTEMPS_ISTOCK_MARLOGUTL_94086bda5b.webp',	6),
(14,	'2025-02-07 18:28:38',	'2025-02-07 18:29:23',	'Lorem ipsum odor amet',	'Lorem ipsum odor amet, consectetuer adipiscing elit. Mauris diam auctor laoreet sem; commodo urna vitae. Maximus varius leo lobortis sollicitudin enim. Nam duis porttitor torquent; pharetra sem enim cras ultrices.',	'Lorem ipsum odor amet',	'Lorem ipsum odor amet, consectetuer adipiscing elit. Mauris diam auctor laoreet sem; commodo urna vitae. Maximus varius leo lobortis sollicitudin enim. Nam duis porttitor torquent; pharetra sem enim cras ultrices. Vehicula odio morbi vitae elementum condimentum erat. Euismod aliquet praesent pellentesque vehicula suspendisse maximus.',	'Lorem ipsum odor amet',	'Lorem ipsum odor amet, consectetuer adipiscing elit. Mauris diam auctor laoreet sem; commodo urna vitae. Maximus varius leo lobortis sollicitudin enim. Nam duis porttitor torquent; pharetra sem enim cras ultrices. Vehicula odio morbi vitae elementum condimentum erat. Euismod aliquet praesent pellentesque vehicula suspendisse maximus.',	'Lorem ipsum odor amet',	'Lorem ipsum odor amet, consectetuer adipiscing elit. Mauris diam auctor laoreet sem; commodo urna vitae. Maximus varius leo lobortis sollicitudin enim. Nam duis porttitor torquent; pharetra sem enim cras ultrices. Vehicula odio morbi vitae elementum condimentum erat. Euismod aliquet praesent pellentesque vehicula suspendisse maximus.',	'Lorem ipsum odor amet, consectetuer adipiscing elit. Mauris diam auctor laoreet sem; commodo urna vitae. Maximus varius leo lobortis sollicitudin enim. Nam duis porttitor torquent; pharetra sem enim cras ultrices. Vehicula odio morbi vitae elementum condimentum erat. Euismod aliquet praesent pellentesque vehicula suspendisse maximus.',	'chartrons.webp',	7),
(15,	'2025-02-07 18:29:46',	'2025-02-07 18:30:51',	'Lorem ipsum odor amet',	'Lorem ipsum odor amet, consectetuer adipiscing elit. Mauris diam auctor laoreet sem; commodo urna vitae. Maximus varius leo lobortis sollicitudin enim. Nam duis porttitor torquent; pharetra sem enim cras ultrices.',	'Lorem ipsum odor amet',	'Lorem ipsum odor amet, consectetuer adipiscing elit. Mauris diam auctor laoreet sem; commodo urna vitae. Maximus varius leo lobortis sollicitudin enim. Nam duis porttitor torquent; pharetra sem enim cras ultrices. Vehicula odio morbi vitae elementum condimentum erat. Euismod aliquet praesent pellentesque vehicula suspendisse maximus.',	'Lorem ipsum odor amet',	'Lorem ipsum odor amet, consectetuer adipiscing elit. Mauris diam auctor laoreet sem; commodo urna vitae. Maximus varius leo lobortis sollicitudin enim. Nam duis porttitor torquent; pharetra sem enim cras ultrices. Vehicula odio morbi vitae elementum condimentum erat. Euismod aliquet praesent pellentesque vehicula suspendisse maximus.',	'Lorem ipsum odor amet',	'Lorem ipsum odor amet, consectetuer adipiscing elit. Mauris diam auctor laoreet sem; commodo urna vitae. Maximus varius leo lobortis sollicitudin enim. Nam duis porttitor torquent; pharetra sem enim cras ultrices. Vehicula odio morbi vitae elementum condimentum erat. Euismod aliquet praesent pellentesque vehicula suspendisse maximus.',	'Lorem ipsum odor amet, consectetuer adipiscing elit. Mauris diam auctor laoreet sem; commodo urna vitae. Maximus varius leo lobortis sollicitudin enim. Nam duis porttitor torquent; pharetra sem enim cras ultrices. Vehicula odio morbi vitae elementum condimentum erat. Euismod aliquet praesent pellentesque vehicula suspendisse maximus.',	'Bordeaux-8-1-1-2048x1506.jpg',	7);

DROP TABLE IF EXISTS `COMMENT`;
CREATE TABLE `COMMENT` (
  `numCom` int NOT NULL AUTO_INCREMENT,
  `dtCreaCom` datetime DEFAULT CURRENT_TIMESTAMP,
  `libCom` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dtModCom` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `attModOK` tinyint(1) DEFAULT '0',
  `notifComKOAff` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `dtDelLogCom` datetime DEFAULT NULL,
  `delLogiq` tinyint(1) DEFAULT '0',
  `numArt` int NOT NULL,
  `numMemb` int NOT NULL,
  PRIMARY KEY (`numCom`),
  KEY `COMMENT_FK` (`numCom`),
  KEY `FK_ASSOCIATION_2` (`numArt`),
  KEY `FK_ASSOCIATION_3` (`numMemb`),
  CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`numMemb`) REFERENCES `MEMBRE` (`numMemb`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;


DROP TABLE IF EXISTS `LIKEART`;
CREATE TABLE `LIKEART` (
  `numMemb` int NOT NULL,
  `numArt` int NOT NULL,
  `likeA` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`numMemb`,`numArt`),
  KEY `LIKEART_FK` (`numMemb`,`numArt`),
  KEY `FK_LIKEART1` (`numArt`),
  CONSTRAINT `FK_LIKEART1` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_LIKEART2` FOREIGN KEY (`numMemb`) REFERENCES `MEMBRE` (`numMemb`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;


DROP TABLE IF EXISTS `MEMBRE`;
CREATE TABLE `MEMBRE` (
  `numMemb` int NOT NULL AUTO_INCREMENT,
  `prenomMemb` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nomMemb` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pseudoMemb` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `passMemb` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `eMailMemb` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dtCreaMemb` datetime DEFAULT CURRENT_TIMESTAMP,
  `dtMajMemb` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `accordMemb` tinyint(1) DEFAULT '1',
  `cookieMemb` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `numStat` int NOT NULL,
  PRIMARY KEY (`numMemb`),
  KEY `MEMBRE_FK` (`numMemb`),
  KEY `FK_ASSOCIATION_4` (`numStat`),
  CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`numStat`) REFERENCES `STATUT` (`numStat`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `MEMBRE` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `dtMajMemb`, `accordMemb`, `cookieMemb`, `numStat`) VALUES
(56,	'Michel',	'Durant',	'AdminBlog',	'$2y$10$KjsvqBVawDiGVEM/fsqtZuANZVtvfFpG4w7AiZEbbgME483GRZ0fa',	'micheldurant@gmail.com',	'2025-02-07 18:35:36',	NULL,	1,	NULL,	1),
(57,	'Emillie',	'Dupont',	'InternauteDefault',	'$2y$10$0w9K35I/2UaYKGqQBMNnset.yxVPb7AY.s9OMScgSRaj/H2qP5416',	'emillie@gmail.com',	'2025-02-07 18:39:06',	NULL,	1,	NULL,	3);

DROP TABLE IF EXISTS `MOTCLE`;
CREATE TABLE `MOTCLE` (
  `numMotCle` int NOT NULL AUTO_INCREMENT,
  `libMotCle` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`numMotCle`),
  KEY `MOTCLE_FK` (`numMotCle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `MOTCLE` (`numMotCle`, `libMotCle`) VALUES
(14,	'Bordeaux'),
(15,	'Restaurant'),
(16,	'Gastronomie'),
(17,	'Vin'),
(18,	'Tradition'),
(19,	'Cannelé');

DROP TABLE IF EXISTS `MOTCLEARTICLE`;
CREATE TABLE `MOTCLEARTICLE` (
  `numArt` int NOT NULL,
  `numMotCle` int NOT NULL,
  PRIMARY KEY (`numArt`,`numMotCle`),
  KEY `MOTCLEARTICLE_FK` (`numArt`),
  KEY `MOTCLEARTICLE2_FK` (`numMotCle`),
  CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`numMotCle`) REFERENCES `MOTCLE` (`numMotCle`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `MOTCLEARTICLE` (`numArt`, `numMotCle`) VALUES
(12,	14),
(12,	17),
(13,	14),
(13,	15),
(13,	16),
(14,	18),
(14,	19),
(15,	16),
(15,	18),
(15,	19);

DROP TABLE IF EXISTS `STATUT`;
CREATE TABLE `STATUT` (
  `numStat` int NOT NULL AUTO_INCREMENT,
  `libStat` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dtCreaStat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`numStat`),
  KEY `STATUT_FK` (`numStat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `STATUT` (`numStat`, `libStat`, `dtCreaStat`) VALUES
(1,	'Administrateur',	'2023-02-19 15:15:59'),
(2,	'Modérateur',	'2023-02-19 15:19:12'),
(3,	'Membre',	'2023-02-20 08:43:24');

DROP TABLE IF EXISTS `THEMATIQUE`;
CREATE TABLE `THEMATIQUE` (
  `numThem` int NOT NULL AUTO_INCREMENT,
  `libThem` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`numThem`),
  KEY `THEMATIQUE_FK` (`numThem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `THEMATIQUE` (`numThem`, `libThem`) VALUES
(5,	'Événement'),
(6,	'Portrait'),
(7,	'Insolite');

-- 2025-02-07 18:50:55
