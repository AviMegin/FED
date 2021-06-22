CREATE TABLE `poll` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `poll` (`id`, `question`) VALUES
(1, 'Are you ok?'),
(2, 'are you sure?');
