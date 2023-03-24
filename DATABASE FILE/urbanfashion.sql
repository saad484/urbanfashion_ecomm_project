
--
-- Database: `urbanfashion`
--
-- --------------------------------------------------------

-- -- Table structure for table `admins`

-- CREATE TABLE `admins` (
--   `admin_id` int(10) NOT NULL,
--   `admin_name` varchar(255) NOT NULL,
--   `admin_email` varchar(255) NOT NULL,
--   `admin_pass` varchar(255) NOT NULL);

--   -- Dumping data for table `admins`

--   INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
--   (1, 'Administrator', 'admin@gmail.com', 'Password@123');





  
-- Table structure for table `customers`
--
CREATE TABLE `customers` (
  `customer_id` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_address` text NOT NULL);


-- Dumping data for table `customers`
--
INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`,`customer_country`, `customer_city`,  `customer_address`)VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 'Morocco','Agadir','49 rue Riad'),
(2, 'saad484', 'saad@gmail.com', '123', 'France', 'Arras','49 rue de Lille'),
(3, 'imane', 'imane@gmail.com', '123','Canada','Quebec','2473 Ste. Catherine Ouest');






CREATE TABLE `products` (
  `product_id` int(10)  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_img4` text NOT NULL,
  `product_img5` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--
INSERT INTO `products` (`product_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`,`product_img4`,`product_img5`, `product_price`,`product_desc`) VALUES
(2,'2023-01-11 09:13:25', 'Cartoon Astronaut T-Shirts','img/products/f1.jpg','img/products/f3.jpg','img/products/f4.jpg','img/products/f5.jpg','','120','<p>Our t-shirt is made from a soft and comfortable cotton blend fabric, ensuring a perfect fit and all-day comfort. The shirt features a classic fit with a crew neckline and short sleeves, making it a versatile choice for any casual occasion. The shirt has been pre-shrunk to ensure a consistent fit wash after wash, and it is machine washable for easy care. The durable construction and high-quality materials make this shirt a reliable choice for everyday wear.</p>'),

(3,'2023-01-11 09:14:25', 'Cartoon Astronaut T-Shirts','img/products/n4.jpg','','','','','150','<p>Our t-shirt is made from a soft and comfortable cotton blend fabric, ensuring a perfect fit and all-day comfort. The shirt features a classic fit with a crew neckline and short sleeves, making it a versatile choice for any casual occasion. The shirt has been pre-shrunk to ensure a consistent fit wash after wash, and it is machine washable for easy care. The durable construction and high-quality materials make this shirt a reliable choice for everyday wear.</p>'),

(4,'2023-01-11 09:16:25', 'Cartoon Astronaut T-Shirts','img/products/f6.jpg','','','','','130','<p>Our t-shirt is made from a soft and comfortable cotton blend fabric, ensuring a perfect fit and all-day comfort. The shirt features a classic fit with a crew neckline and short sleeves, making it a versatile choice for any casual occasion. The shirt has been pre-shrunk to ensure a consistent fit wash after wash, and it is machine washable for easy care. The durable construction and high-quality materials make this shirt a reliable choice for everyday wear.</p>'),

(5,'2023-01-11 09:16:44', 'Cartoon Astronaut T-Shirts','img/products/n5.jpg','img/products/n8.jpg','','','','130','<p>Our t-shirt is made from a soft and comfortable cotton blend fabric, ensuring a perfect fit and all-day comfort. The shirt features a classic fit with a crew neckline and short sleeves, making it a versatile choice for any casual occasion. The shirt has been pre-shrunk to ensure a consistent fit wash after wash, and it is machine washable for easy care. The durable construction and high-quality materials make this shirt a reliable choice for everyday wear.</p>'),

(6,'2023-01-11 09:16:44', 'Cartoon Astronaut T-Shirts','img/products/n8.jpg','','','','','70','<p>Our t-shirt is made from a soft and comfortable cotton blend fabric, ensuring a perfect fit and all-day comfort. The shirt features a classic fit with a crew neckline and short sleeves, making it a versatile choice for any casual occasion. The shirt has been pre-shrunk to ensure a consistent fit wash after wash, and it is machine washable for easy care. The durable construction and high-quality materials make this shirt a reliable choice for everyday wear.</p>'),

(7,'2023-01-11 09:20:44', 'Cartoon Astronaut T-Shirts','img/products/f13.jpg','','','','','70','<p>Our t-shirt is made from a soft and comfortable cotton blend fabric, ensuring a perfect fit and all-day comfort. The shirt features a classic fit with a crew neckline and short sleeves, making it a versatile choice for any casual occasion. The shirt has been pre-shrunk to ensure a consistent fit wash after wash, and it is machine washable for easy care. The durable construction and high-quality materials make this shirt a reliable choice for everyday wear.</p>'),

(8,'2023-01-11 09:25:44', 'Cartoon Astronaut T-Shirts','img/products/f15.jpg','img/products/f14.jpg','','','','70','<p>Our t-shirt is made from a soft and comfortable cotton blend fabric, ensuring a perfect fit and all-day comfort. The shirt features a classic fit with a crew neckline and short sleeves, making it a versatile choice for any casual occasion. The shirt has been pre-shrunk to ensure a consistent fit wash after wash, and it is machine washable for easy care. The durable construction and high-quality materials make this shirt a reliable choice for everyday wear.</p>'),

(9,'2023-01-11 09:25:50', 'Cartoon Astronaut T-Shirts','img/products/f10.jpg','img/products/f11.jpg','img/products/f12.jpg','img/products/f9.jpg','','70','<p>Our t-shirt is made from a soft and comfortable cotton blend fabric, ensuring a perfect fit and all-day comfort. The shirt features a classic fit with a crew neckline and short sleeves, making it a versatile choice for any casual occasion. The shirt has been pre-shrunk to ensure a consistent fit wash after wash, and it is machine washable for easy care. The durable construction and high-quality materials make this shirt a reliable choice for everyday wear.</p>');

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `contact_name` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_heading` text NOT NULL,
  `contact_desc` text NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`,`contact_name`, `contact_email`, `contact_heading`, `contact_desc`) VALUES
(1,'urbanfashion', 'urbanfashion@mail.com', 'Contact  To Us', 'If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.');


