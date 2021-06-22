CREATE TABLE `poll_options` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `pollid` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `poll_options` (`id`, `pollid`, `name`) VALUES
(1, 1, 'Yes'),
(2, 1, 'No'),
(3, 1, 'Im not sure'),
(4, 1, 'Ofcourse not');
