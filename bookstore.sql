CREATE TABLE `cart` (
  `userid` varchar(30) NOT NULL,
  `prodid` int NOT NULL,
  `qty` int NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int NOT NULL,
  `category` varchar(30) NOT NULL
);

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `category`) VALUES
(5, 'Computer Programming'),
(6, 'Database Programming'),
(12, 'Web Designing'),
(13, 'Basic Computer '),
(14, 'Networking'),
(15, 'Data Science');

-- --------------------------------------------------------

--
-- Table structure for table `cust_address`
--

CREATE TABLE `cust_address` (
  `userid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` char(10) NOT NULL,
  `pin` char(8) NOT NULL,
  `locality` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `adtype` varchar(15) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `mybooks`
--

CREATE TABLE `mybooks` (
  `userid` varchar(50) NOT NULL,
  `prodid` int NOT NULL,
  `photo` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `orderdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` varchar(30) NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'Pending'
);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int NOT NULL,
  `prodid` int NOT NULL,
  `qty` int NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prodid` int NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pcat` int DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `publisher` varchar(50) DEFAULT NULL,
  `year` int DEFAULT NULL,
  `ISBN` char(13) DEFAULT NULL,
  `price` decimal(15,2) NOT NULL,
  `disc_price` decimal(16,2) NOT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `pdf` varchar(100) DEFAULT NULL,
  `descr` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodid`, `pname`, `pcat`, `author`, `publisher`, `year`, `ISBN`, `price`, `disc_price`, `photo`, `pdf`, `descr`, `create_date`) VALUES
(166, 'Rapidex Computer Course', 13, 'Anand Singh', 'BPB Publications', 2020, '6598565653232', '900.00', '800.00', '166.jpg', '166.pdf', 'Best computer fundamental book', '2021-03-19 21:39:40'),
(167, 'OOP with C++', 5, 'E. Balagurusamy', 'Oxford Press', 2019, '3252124562335', '800.00', '600.00', '167.jpg', '167.pdf', 'E Balagurusamy Book', '2021-03-19 21:49:04'),
(168, 'Photoshop Studio Skills', 12, 'Anand Singh', 'Oxford Press', 2019, '653623656232', '1200.00', '1100.00', '168.jpg', '168.pdf', 'test', '2021-03-20 06:38:37'),
(169, 'Computer Fundamentals', 13, 'P. K. Sinha', 'BPB Publications', 2020, '1111111111111', '900.00', '750.00', '169.jpg', '169.pdf', 'test', '2021-03-20 06:50:27'),
(170, 'Computer Networks', 14, 'Anand Singh', 'Oxford Press', 2020, '1236547887878', '1000.00', '800.00', '170.jpg', '170.pdf', 'test', '2021-03-20 07:44:41'),
(171, 'MS Excel 2007', 13, 'Anand Singh', 'Oxford Press', 2020, '4656896556565', '600.00', '500.00', '171.jpg', '171.pdf', 'test', '2021-03-20 09:10:49'),
(172, 'Data Structure', 5, 'Yashwant Kanetkar', 'BPB Publications', 2020, '3232656532323', '1200.00', '1000.00', '172.jpg', '172.pdf', 'test', '2021-03-20 11:32:32'),
(173, 'Let Us C', 5, 'Yashwant Kanetkar', 'BPB Publications', 2019, '1232323223223', '1000.00', '900.00', '173.jpg', '173.pdf', 'Best Book for C Programming', '2021-03-23 18:51:26'),
(174, 'HTML, CSS and Javascript', 12, 'Anand Singh', 'BPB Publications', 2020, '3236532323232', '1100.00', '1000.00', '174.jpg', '174.pdf', 'test', '2021-03-23 18:53:43'),
(175, 'MySQL Complete Reference', 6, 'Vikram Vaswani', 'Tata McGraw Hill', 2020, '2323656213233', '1200.00', '1000.00', '175.jpg', '175.pdf', 'Best Book for mysql', '2021-03-26 10:05:44'),
(176, 'SQL Server T-SQL', 6, 'Ben Forta', 'SAMS', 2019, '2154212456523', '1000.00', '900.00', '176.jpg', '176.pdf', 'SQL Server 2019 Book', '2021-03-26 10:06:50'),
(177, 'Oracle PL/SQL Programming', 6, 'Michael McLang', 'Tata McGraw Hill', 2020, '1122552222255', '900.00', '850.00', '177.jpg', '177.pdf', 'test', '2021-03-26 10:08:04'),
(178, 'Let Us C++', 5, 'Yashwant Kanetkar', 'BPB Publications', 2020, '1545653265685', '1000.00', '900.00', '178.jpg', '178.pdf', 'Let Us C++ Book', '2021-03-27 12:18:26'),
(179, 'Python Data Science', 15, 'Jake Vanderplas', 'Orelly', 2020, '1323332326222', '600.00', '550.00', '179.jpg', '179.pdf', '', '2021-05-16 18:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(20) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `role` varchar(15) DEFAULT NULL
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `userid`, `pwd`, `role`) VALUES
('Administrator', 'admin@admin.com', 'anand', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`userid`,`prodid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `cust_address`
--
ALTER TABLE `cust_address`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `mybooks`
--
ALTER TABLE `mybooks`
  ADD PRIMARY KEY (`userid`,`prodid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prodid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prodid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
COMMIT;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `CancelOrder`(`oid` INT)
BEGIN
delete from order_details where order_id=oid;

delete from orders where order_id=oid;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegisterUser`(IN `fname` VARCHAR(30), IN `userid` VARCHAR(40), IN `pwd` VARCHAR(20))
BEGIN
INSERT INTO users VALUES(fname,userid,pwd,'C');
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `AddBook`(`pname` VARCHAR(50), 
`pcat` INT, `price` DECIMAL(15,2), 
`disc_price` DECIMAL(15,2), 
`author` VARCHAR(50), `publisher` VARCHAR(50), 
`year` INT, `isbn` CHAR(13), `descr` TEXT,
out prodid int)
BEGIN
INSERT into products(pname,pcat,price,disc_price,descr,author,
publisher,year,isbn) 
VALUES(pname,pcat,price,disc_price,descr,author,publisher,year,isbn);
set prodid=last_insert_id();

update products p set pdf=concat(prodid,'.pdf'),photo=concat(prodid,'.jpg')
where p.prodid=prodid;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PlaceOrder`(`user` VARCHAR(40), OUT `orderid` INT)
BEGIN
insert into orders(userid) values(user);
set orderid=last_insert_id();

INSERT INTO order_details(prodid,qty,order_id) 
select prodid,qty,orderid from cart where userid=user;

delete from cart where userid=user;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConfirmOrder`(`oid` INT)
BEGIN
UPDATE orders set order_status='Confirmed' where order_id=oid;

insert into mybooks(userid,prodid,photo,pdf,pname)
select o.userid,p.prodid,photo,pdf,pname from products p join  order_details od
on p.prodid=od.prodid join orders o on o.order_id=od.order_id where o.order_id=oid;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateBook`(`pname` VARCHAR(50), `pcat` INT, `price` DECIMAL(15,2), `disc_price` DECIMAL(15,2), `author` VARCHAR(50), `publisher` VARCHAR(50), `year` INT, `isbn` CHAR(13), `descr` TEXT, `prodid` INT)
BEGIN
	UPDATE products p set pname=pname,price=price,pcat=pcat,disc_price=disc_price,
    descr=descr,author=author,year=year,publisher=publisher,isbn=isbn where p.prodid=prodid;
END$$
DELIMITER ;
