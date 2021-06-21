CREATE TABLE `poll` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `poll` (`id`, `question`) VALUES
(1, 'Which JS framework you recently used?'),
(2, 'Another question');