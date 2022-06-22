CREATE TABLE `ft_table` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT 'toto',
  `groupe` enum('staff','student','other') NOT NULL,
  `date_de_creation` date DEFAULT NULL
) 
 