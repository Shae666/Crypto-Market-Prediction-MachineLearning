CREATE TABLE `add_events` (
  `id` varchar(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `stckname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_events`
--

INSERT INTO `add_events` (`id`, `ename`, `hallname`, `price`, `address`, `city`, `state`, `number`) VALUES
('1', 'Benil', 'Breeze', '100000', 'Near Central Bus stand', 'Trichy', 'Tamil Nadu', 2147483647);
('2', 'Francis', 'GooGle Stocks','200000','Mary Street','benguluru','karnataka',93453809159);
