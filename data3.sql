CREATE TABLE `user_signin` (
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(10) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signin`
--

INSERT INTO `user_signin` (`id`, `username`, `password`, `email`, `number`, `address`) VALUES
('1', 'sdc', '12345', 'sdc12@gmail.com', 2147483647, 'trichy'),
('2', 'Vijay', '54321', 'vijayvj@gmail.com', 2147483647, 'Near Chatram Bus stand, Trichy-2.');
