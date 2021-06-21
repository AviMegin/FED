CREATE TABLE IF NOT EXISTS `poll_result` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `pollid` int(11) NOT NULL,
  `poll_option_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `poll_result` (`id`, `userid`, `pollid`, `poll_option_id`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 1, 1),
(4, 4, 1, 3),
(5, 3, 1, 4),
(6, 1, 1, 3),
(7, 2, 1, 1),
(8, 4, 1, 2),
(9, 1, 1, 4),
(10, 10, 1, 1),
(12, 12, 1, 2);