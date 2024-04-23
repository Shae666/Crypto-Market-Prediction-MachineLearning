CREATE TABLE `organizer_signin` (
  `id` varchar(100) NOT NULL,
  `comname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `number` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer_signin`
--

INSERT INTO `organizer_signin` (`id`, `comname`, `email`, `username`, `password`, `number`, `address`) VALUES
('1', 'event planner', 'sdc12@gmail.com', 'STR', '123', 2147483647, 'trichy');
