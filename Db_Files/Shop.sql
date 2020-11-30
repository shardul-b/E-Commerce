-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2020 at 12:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE `Cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Cart`
--

INSERT INTO `Cart` (`user_id`, `product_id`, `cart_id`, `quantity`) VALUES
(2, 30, 1, 1),
(2, 17, 24, 1),
(5, 11, 25, 1),
(5, 31, 26, 1),
(5, 13, 27, 1),
(5, 18, 28, 1),
(2, 11, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE `Order` (
  `Order_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total_Amount` int(11) NOT NULL,
  `Order_Date` varchar(500) NOT NULL,
  `Delivery_Date` varchar(500) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Order`
--

INSERT INTO `Order` (`Order_ID`, `User_ID`, `Product_ID`, `Quantity`, `Total_Amount`, `Order_Date`, `Delivery_Date`, `Status`) VALUES
(25, 5, 11, 1, 20489, '20201120', '20201126', 'In Progress'),
(26, 5, 31, 1, 22499, '20201120', '20201126', 'In Progress'),
(27, 5, 13, 1, 20899, '20201120', '20201126', 'In Progress'),
(28, 5, 18, 1, 570, '20201120', '20201126', 'In Progress'),
(29, 2, 30, 1, 9990, '20201122', '20201128', 'In Progress'),
(30, 2, 31, 1, 22499, '20201122', '20201128', 'In Progress'),
(31, 2, 31, 1, 22499, '20201122', '20201128', 'In Progress'),
(32, 2, 31, 1, 22499, '20201122', '20201128', 'In Progress'),
(33, 2, 31, 1, 22499, '20201122', '20201128', 'In Progress'),
(34, 2, 17, 1, 575, '20201122', '20201128', 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Pro_id` int(11) NOT NULL,
  `Pro_name` varchar(100) NOT NULL,
  `Pro_desc` varchar(300) NOT NULL,
  `Pro_seller` varchar(200) NOT NULL,
  `Pro_cost` int(10) NOT NULL,
  `Pro_stock` int(10) NOT NULL,
  `Pro_category` varchar(25) NOT NULL,
  `Pro_details` varchar(300) NOT NULL,
  `Pro_image` varchar(100) NOT NULL,
  `Pro_offer` int(100) NOT NULL,
  `Pro_ratings` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Pro_id`, `Pro_name`, `Pro_desc`, `Pro_seller`, `Pro_cost`, `Pro_stock`, `Pro_category`, `Pro_details`, `Pro_image`, `Pro_offer`, `Pro_ratings`) VALUES
(9, 'Fujifilm Instax Mini 9 Instant Camera - Flamingo Pink', 'Shake up your life with the Fujifilm instax mini 9 - a compact instant camera with a cute and iconic design. Including a selfie mirror and close-up lens, this camera captures perfect selfie photos eve', 'Fujifilm', 3599, 5, 'camera', 'New Selfie Mirror and close-up lense attachment for perfect selfies; Produces instant credit card size photos. The new, Instax Mini 9 features a selfie mirror for the perfect selfie photo every time. ', './Assets/Images/Instax.png', 35, 5),
(11, 'Nikon Coolpix B600 16.0 MP Point-and-Shoot Digital Camera with 60x Optical Zoom (Black)', 'Capture beautiful images near and far with the COOLPIX B600. Equipped with 60x optical zoom and 120x Dynamic Fine Zoom, photograph your subjects from a distance with pristine picture quality. Magnify ', 'Nikon', 20489, 8, 'camera', 'See the world in stunning clarity with 16 megapixels, and an ISO of 6400\r\nPerfectly portable and lightweight, the COOLPIX B600 weighs only approximately 500g\r\nShoot and share with your friends and fam', './Assets/Images/camera1.jpg', 23, 4),
(13, 'Nikon Coolpix B600 16.0 MP Point-and-Shoot Digital Camera with 60x Optical Zoom (Red)', 'Capture beautiful images near and far with the COOLPIX B600. Equipped with 60x optical zoom and 120x Dynamic Fine Zoom, an ISO of 6400, and backside illumination CMOS sensor, the compact camera lets you experience crisp and clear shots in a diverse range of situations. Explore your creativity with e', 'Nikon', 20899, 6, 'camera', 'See the world in stunning clarity with 16 megapixels, and an ISO of 6400\r\nPerfectly portable and lightweight, the COOLPIX B600 weighs only approximately 500g\r\nShoot and share with your friends and family in an instant with SnapBridge 2.5 and Wi-Fi connectivity\r\nCountry of Origin: Japan', './Assets/Images/camera2.png', 5, 5),
(14, 'FINIVO Men\'s Tailored Fit Casual Shirt', 'Finivo Fashion is a contemporary and fashionable creation and collection for Men\'s range of clothing. The shirts are designed for the working or business men who like to look good. The shirts are very versatile and offers a professional as well as a casual look. It is sewn with great care and attent', 'finivo', 558, 4, 'clothingmen', 'Care Instructions: Dry Clean Only\r\nFit Type: Regular Fit\r\nFabric: 100% Cotton\r\nStyle: Regular\r\nNeck Style: Collared\r\nPattern: Solid', './Assets/Images/clothingmen1.jpg', 0, 3),
(16, 'Symbol Women\'s Color Block Long Sleeve Hooded Terry Sweatshirt Warm Up Jacket', 'Start every outfit with Symbol\'s elevated wardrobe basics that are versatile, stylish and compliment your everyday look. This regular fit sweatshirt in terry fabric is a go to piece for a relaxed and effortless look - Keep it simple and layer this over a t-shirt and a pair of jeans.', 'Amazon', 570, 7, 'clothingwomen', 'Care Instructions: Machine Wash\r\nWomen\'s Color Block Long Sleeve Hooded Terry Sweatshirt\r\nThe sweatshirt features a contrast color block detail, raglan sleeves and a hood.\r\nThe fabric is treated with Bio Wash for an enhanced soft handfeel.\r\nCombine this sweatshirt with a pair of denims and sneakers ', './Assets/Images/clothingwomen1.jpg', 5, 3),
(17, 'Jam & Honey girls Lightweight Sweatshirt', 'Jam & honey printed round neck long sleeve cool sweatshirt for girls.', 'Amazon', 575, 8, 'clothingwomen', 'Care Instructions: Machine Wash\r\n60% Cotton & 40% Polyester\r\nLong sleeve\r\nmachine wash\r\nLightweight All weather Sweatshirt', './Assets/Images/clothingwomen2.jpg', 0, 5),
(18, 'Symbol Women\'s Color Block Long Sleeve Hooded Terry Sweatshirt Warm Up Jacket', 'Start every outfit with Symbol\'s elevated wardrobe basics that are versatile, stylish and compliment your everyday look. This regular fit sweatshirt in terry fabric is a go to piece for a relaxed and effortless look - Keep it simple and layer this over a t-shirt and a pair of jeans.', 'Amazon', 570, 7, 'clothingwomen', 'Care Instructions: Machine Wash\r\nWomen\'s Color Block Long Sleeve Hooded Terry Sweatshirt\r\nThe sweatshirt features a contrast color block detail, raglan sleeves and a hood.\r\nThe fabric is treated with Bio Wash for an enhanced soft handfeel.\r\nCombine this sweatshirt with a pair of denims and sneakers ', './Assets/Images/clothingwomen1.jpg', 5, 3),
(19, 'Jam & Honey girls Lightweight Sweatshirt', 'Jam & honey printed round neck long sleeve cool sweatshirt for girls.', 'Amazon', 575, 8, 'clothingwomen', 'Care Instructions: Machine Wash\r\n60% Cotton & 40% Polyester\r\nLong sleeve\r\nmachine wash\r\nLightweight All weather Sweatshirt', './Assets/Images/clothingwomen2.jpg', 0, 5),
(20, 'EYEBOGLER Regular Fit Men\'s Cotton T-Shirt', 'EyeBogler t-shirts are made up of Polycotton with 180 GSM fabric, not to heavy but simply PERFECT for Indian summer. Our fabrics are tested for shrinkage, colorfastness, and treated with silicone to give the customer the ultimate experience of quality T-shirts.', 'Amazon', 399, 7, 'clothing', 'Care Instructions: Machine Wash\r\nFit Type: Regular Fit\r\nColor name: White-Dark Navy-Mustard\r\nMaterial: cotton\r\nPattern: Solid\r\nHalf Sleeve\r\nmachine wash', './Assets/Images/clothingmen2.jpg', 0, 2),
(25, 'TRACI Fashion Full Sleeve Slim Fit Plain Formal Shirt for Men,Cotton Shirts,Office wear,Formal Shirt', 'Stylish shirt for men, CASUAL SHIRT Partywear Design shirt SLIMFIT LOOKING Slim Fit Cotton Shirt with solid pattern Care Instructions : Wash Separately & Dry Clean WashLatest Shirt Traci Fashion, Its a perfect choice for your cart. We sell all genuine product with best quality to satisfy our valuabl', 'TRACI', 625, 9, 'clothingmen', 'Care Instructions: Hand Wash Only\r\nFit Type: Regular Fit\r\nFit Type: Slim Fit\r\nMaterial - 100% Cotton\r\nPattern - Solid Men’s Formal Shirt\r\nCollar style - Semi cut away collar; Cuff style - Single cuff\r\nPackage quantity -1 piece', './Assets/Images/clothingmen3.jpg', 25, 5),
(28, 'Skinn By Titan Women\'s Amalfi Bleu Perfume EDP, 30ml', 'Fresh. Spirited. Captivating.\r\n\r\nMagically suspended between the blue sky and the iridescent sea, this refreshing aquatic scent transports you to the azure waters of the Amalfi Coast. This fragrance captures the spirit of the blooming flowers and fluttering orange leaves in the cool Mediterranean br', 'Skinn', 945, 12, 'perfume', 'Product Dimensions : 5.7 x 10.7 x 11.7 cm; 180 Kilograms\r\nDate First Available : 29 June 2018\r\nManufacturer : AccraPac (INDIA) Pvt. Ltd., Plot No. 1105, 3rd Phase, G.I.D.C., VAPI 396195, India\r\nASIN : B07F4945J1\r\nItem part number : NCFW14PH1\r\nCountry of Origin : India\r\nManufacturer : AccraPac (INDIA', './Assets/Images/perfume2.jpg', 0, 8),
(29, 'UNITED COLORS OF BENETTON Colors Pink Eau De Toilette 80ml', 'Colors Pink is Benetton\'s invitation to celebrate the diversity all around us. To fill our lives with other flavors, other cultures, other languages...  other colors!! Let’s celebrate diversity, because diversity isn’t just seeing life in color, it’s learning from those colors! Diversity is surprisi', 'UCB', 1140, 21, 'perfume', 'Is Discontinued By Manufacturer : No\r\nProduct Dimensions : 5.08 x 10.16 x 12.7 cm; 80 Grams\r\nDate First Available : 25 May 2017\r\nManufacturer : Benetton\r\nASIN : B01N94SLCW\r\nItem model number : 8433982003844\r\nCountry of Origin : España\r\nManufacturer : Benetton\r\nPacker : BACCAROSE Perfumes & Beauty Pr', './Assets/Images/perfume3.jpg', 10, 5),
(30, 'OPPO A15 (Dynamic Black, 3GB RAM, 32GB Storage)', '13MP Main Camera + 2MP Depth Camera + 2 MP Macro Lens AI Rear Dual Camera| 5MP Front Camera. Large Screen 16.55 centimeters (6.52-inch) HD+ display with 1600 x 720 pixel resolution with additional features like: Eye Comfort-Filters blue light to reduce damage to the eyes. AI Brightness -The device w', 'oppo', 9990, 60, 'phone', '13MP main camera + 2MP depth camera + 2MP macro lens AI triple primary camera with photo, video, panoramic, portrait, time-lapse | 5MP AI beautification front camera\r\n16.55 centimeters (6.52 inch) HD+ multi-touch capacitive touchscreen with 1600 x 720 pixels resolution, 269 ppi pixel density and 16.', './Assets/Images/phone1.jpg', 25, 5),
(31, 'Samsung Galaxy M51 (Electric Blue, 6GB RAM, 128GB Storage)', 'The symmetric Infinity-O display introduces un-interrupted visual experience for gaming, watching videos, multi-tasking, browsing and more with Versatile Quad Camera. Its Ultra wide camera captures scenes with 123˚ angle of view whilst the Depth camera brings beautiful portraits with Live Focus Effe', 'samsung', 22499, 50, 'phone', 'Quad camera setup - 64MP (F1.8) main camera + 12MP (F2.2) ultra wide camera + 5MP (F2.4) depth camera + 5MP (F2.4) macro camera and 32MP (F2.2) front camera\r\n16.95 cm (6.7-inch) sAMOLED Plus - Infinity-O display, FHD+ capacitive touchscreen with 1080 x 2400 pixels resolution, Contrast Ratio: 78960:1', './Assets/Images/phone2.png\r\n', 35, 5),
(32, 'Sony Camera', 'A good quality camera', 'SONY', 50000, 0, 'Camera', 'Good Camera for capturing images', './Assets/Images/sony.png', 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `Firstname` varchar(40) NOT NULL,
  `Lastname` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Address` varchar(500) NOT NULL DEFAULT 'Enter Address',
  `password` varchar(20) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`Firstname`, `Lastname`, `Email`, `Phone`, `Address`, `password`, `id`) VALUES
('Shardul', 'Birje', 'shardul@gmail.com', '1234567891', 'Room No.5, Sector-3, Dadar, Mumbai\r\n                                                \r\n                                                ', 'shardul@15AB', 2),
('asqwsa', 'asd', 'abc@gmail.com', NULL, 'Enter Address', 'UWrKbvaByd2QxhC@', 4),
('Shardul', 'B', 'asd@gmail.com', '9876543212', '                                                    Room No.2, Sector:3, Malad\r\n                                                \r\n                                                ', 'AB@ab123', 5),
('cat', 'rat', 'asd@gmail.com', '1234567899', 'Enter Address', 'ca@TY123', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Pro_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cart`
--
ALTER TABLE `Cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `Order`
--
ALTER TABLE `Order`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
