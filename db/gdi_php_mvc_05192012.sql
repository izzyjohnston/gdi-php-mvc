-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2012 at 05:34 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gdi_php_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloggers`
--

CREATE TABLE `bloggers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bloggers`
--

INSERT INTO `bloggers` VALUES(1, 'izzy_johnston', 'izzycjohnston@gmail.com', '22af645d1859cb5ca6da0c484f1f37ea', '2012-05-12');
INSERT INTO `bloggers` VALUES(2, 'newblogger', 'newblogger@gdiblog.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2012-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` VALUES(2, 'Another blog to test', 'Excepteur keytar american apparel keffiyeh irure, selvage farm-to-table ut. Fugiat mlkshk sint, carles craft beer nisi consectetur stumptown keytar 8-bit terry richardson biodiesel. Bespoke aliquip est, tumblr occaecat mlkshk tattooed high life leggings quinoa. Id shoreditch hella labore art party bespoke. Sapiente banksy delectus, anim jean shorts shoreditch bicycle rights flexitarian exercitation iphone sriracha. Aliqua polaroid kogi, craft beer tattooed aesthetic iphone. Voluptate kogi ethical, vero PBR occupy odio.\r\n\r\nMaster cleanse do banksy, wolf ea craft beer aute lo-fi magna next level veniam velit keytar. Est yr tumblr truffaut. Aute DIY jean shorts etsy qui gentrify occaecat, cardigan typewriter bushwick PBR ex food truck truffaut next level. Before they sold out sartorial etsy, ennui quinoa portland art party cray. Nulla ad 3 wolf moon fugiat cillum kale chips placeat, letterpress mustache ullamco echo park cardigan elit. Portland godard direct trade squid odio vinyl. Lo-fi cupidatat vegan, eiusmod gluten-free ethnic bespoke.', 1, '2012-05-13 00:00:00');
INSERT INTO `posts` VALUES(3, 'Testing', 'Cupcake ipsum dolor sit amet marshmallow danish candy lollipop. Topping ice cream tootsie roll applicake jujubes chocolate cookie donut. Caramels gummies dessert. Gummies cotton candy gummi bears sweet macaroon chocolate cake gummi bears. Fruitcake icing pastry tootsie roll apple pie fruitcake croissant. Halvah cheesecake applicake icing danish tart gummi bears muffin donut. Candy canes chocolate cake candy powder icing chocolate bar sweet soufflé candy. Caramels biscuit topping apple pie toffee candy canes halvah wypas lollipop. Cheesecake cheesecake halvah chocolate fruitcake soufflé bonbon tart donut. Sesame snaps cheesecake chocolate bar. Danish liquorice dragée fruitcake chocolate dessert gummi bears tiramisu jelly beans. Tart cupcake marzipan toffee donut tiramisu chupa chups donut biscuits.', 1, '2012-05-13 00:00:00');
INSERT INTO `posts` VALUES(4, 'Another thrilling blog post', 'Veggies sunt bona vobis, proinde vos postulo esse magis ricebean mung bean tomato radish lotus root spring onion.\r\n\r\nPrairie turnip celtuce eggplant azuki bean peanut cauliflower courgette tomatillo sorrel. Winter purslane soko rutabaga fava bean garlic bitterleaf salsify kakadu plum seakale desert raisin gumbo. Burdock chard grape wakame salsify garlic celery kombu rock melon artichoke dulse squash.', 1, '2012-05-13 18:17:03');
