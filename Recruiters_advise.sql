-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2016 at 05:14 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Recruiters_advise`
--

-- --------------------------------------------------------

--
-- Table structure for table `About_us`
--

CREATE TABLE IF NOT EXISTS `About_us` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `About_des` text NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `image_caption` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `About_us`
--

INSERT INTO `About_us` (`id`, `About_des`, `image_url`, `image_caption`) VALUES
(1, 'A well-shaped and correctly targeted CV and good interview training will increase your chances to land that one dream job.With over 14 years of experience recruiting for pharmaceutical companies, we are able to help people from diverse backgrounds and levels to optimize their applications- we can quickly see how and where to help, and above all, we are happy to share our insider knowledge on pharma recruitment processes.', 'upload/team/dummyPic-team.gif', 'This is our team');

-- --------------------------------------------------------

--
-- Table structure for table `Blogs`
--

CREATE TABLE IF NOT EXISTS `Blogs` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Blog_title` varchar(1000) NOT NULL,
  `Blog_image_url` varchar(1000) NOT NULL,
  `Blog_content` text NOT NULL,
  `Blog_time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `Blogs`
--

INSERT INTO `Blogs` (`id`, `Blog_title`, `Blog_image_url`, `Blog_content`, `Blog_time`) VALUES
(10, 'my blog 1', 'upload/blogs/broken-screen-wallpaper-hd.jpg', 'my blog description 1', '24 September, 2016'),
(13, 'My blog 2', 'upload/blogs/coding-programming-code-tech-computer-letters-words-symbols-numbers-screen-monitor-pics-227950.jpg', 'blog 2 description', '29 September, 2016');

-- --------------------------------------------------------

--
-- Table structure for table `Contact_us`
--

CREATE TABLE IF NOT EXISTS `Contact_us` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Address_des` varchar(5000) NOT NULL,
  `Address_short` varchar(500) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `head_mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Contact_us`
--

INSERT INTO `Contact_us` (`id`, `Address_des`, `Address_short`, `Phone`, `Email`, `head_mail`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typese tting industry etwtwet wtwe tw et w tw t we tw et wet we', 'Mirpur New Bazar Road, Block-c, Dhaka-1210', '(732) 803-01 03, (732) 806-01 04', 'economy@mail.com', 'info@recruiters-advice.com');

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE IF NOT EXISTS `Events` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Event_name` varchar(1000) NOT NULL,
  `Event_image_url` varchar(1000) NOT NULL,
  `Event_content` text NOT NULL,
  `Event_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`id`, `Event_name`, `Event_image_url`, `Event_content`, `Event_date`) VALUES
(7, 'Event 1', 'upload/events/coding-programming-code-tech-computer-letters-words-symbols-numbers-screen-monitor-pics-227950.jpg', 'Event 1 description here', '17 September, 2016'),
(8, 'Event 2', 'upload/events/bQRwaWY.jpg', 'Event 2 description here', '28 September, 2016');

-- --------------------------------------------------------

--
-- Table structure for table `Main_slider`
--

CREATE TABLE IF NOT EXISTS `Main_slider` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(500) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `Main_slider`
--

INSERT INTO `Main_slider` (`id`, `image_url`, `title`) VALUES
(47, 'upload/coding-programming-code-tech-computer-letters-words-symbols-numbers-screen-monitor-pics-227950.jpg', 'Your idea and we innovate for you .');

-- --------------------------------------------------------

--
-- Table structure for table `Partners`
--

CREATE TABLE IF NOT EXISTS `Partners` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `part_image_url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `Partners`
--

INSERT INTO `Partners` (`id`, `part_image_url`) VALUES
(15, 'upload/partners/part2.jpg'),
(16, 'upload/partners/part3.jpg'),
(17, 'upload/partners/part4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Service_head`
--

CREATE TABLE IF NOT EXISTS `Service_head` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `service_title` varchar(500) NOT NULL,
  `service_text1` text NOT NULL,
  `service_text2` text NOT NULL,
  `service_text3` text NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Service_head`
--

INSERT INTO `Service_head` (`id`, `service_title`, `service_text1`, `service_text2`, `service_text3`, `contact_number`) VALUES
(1, 'We offer our recruiting experience to help people on all levels to get a job of their dreams. Our goal is to make your job search efficient and smooth.', 'A fresh Graduate wishing to enter pharmaceutical industry', 'Person in transition willing to change or find a new job in pharma or biotech', 'Spouse of recently relocated specialist, planning to start working in Switzerland', '(+880) 17238017299');

-- --------------------------------------------------------

--
-- Table structure for table `service_left1`
--

CREATE TABLE IF NOT EXISTS `service_left1` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `service1_left_title` varchar(500) NOT NULL,
  `service1_image_url` varchar(500) NOT NULL,
  `service1_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `service_left1`
--

INSERT INTO `service_left1` (`id`, `service1_left_title`, `service1_image_url`, `service1_content`) VALUES
(4, 'One-On-One Consulting', 'upload/services/coding-programming-code-tech-computer-letters-words-symbols-numbers-screen-monitor-pics-227950.jpg', 'CV tuning & rewriting to fit potential employer`s expectations, motivation letter prepration');

-- --------------------------------------------------------

--
-- Table structure for table `service_left2`
--

CREATE TABLE IF NOT EXISTS `service_left2` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `service2_left_title` text NOT NULL,
  `service2_image_url` text NOT NULL,
  `service2_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service_left2`
--

INSERT INTO `service_left2` (`id`, `service2_left_title`, `service2_image_url`, `service2_content`) VALUES
(1, 'One Day Workshopa', 'upload/services/aurora.jpg', 'Workshop 1: Self-presentation and personal branding in CV, motivation letter and elevator pitch (click for more details).\r\n\r\nWorkshop 2: Top-20 career choices for entering pharmaceutical industry (click for more details).\r\n\r\nWorkshop 3: Behavioral-based job interview preparation: strategy and tips (click for more details).');

-- --------------------------------------------------------

--
-- Table structure for table `service_left3`
--

CREATE TABLE IF NOT EXISTS `service_left3` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `service3_left_title` text NOT NULL,
  `service3_image_url` text NOT NULL,
  `service3_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service_left3`
--

INSERT INTO `service_left3` (`id`, `service3_left_title`, `service3_image_url`, `service3_content`) VALUES
(1, 'Relocation Services', 'upload/services/AIS198A (28).jpg', 'Evaluation of the spouseâ€™s current standpoint: goals, existing skills.\r\n\r\nIntroduction to Swiss job market, discussion of the existing opportunities, help in orientating among companies and specialties.\r\n\r\nDefining which skills need to be added, help in choosing additional education\r\n\r\nPreparing the best application tailored to Swiss employers expectations, â€œdoâ€™sâ€ and â€œdontâ€™sâ€ of the Swiss job application dossier. We support in preparation of the full profile including a proper CV and motivation letter for several possible types of positions.\r\n\r\nPreparation for the job interview and contract negotiation process. (please contact us for the customized offers).');

-- --------------------------------------------------------

--
-- Table structure for table `service_left4`
--

CREATE TABLE IF NOT EXISTS `service_left4` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `service4_left_title` text NOT NULL,
  `service4_image_url` text NOT NULL,
  `service4_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service_left4`
--

INSERT INTO `service_left4` (`id`, `service4_left_title`, `service4_image_url`, `service4_content`) VALUES
(2, 'Extensive Group Traning', 'upload/services/employee.jpg', 'Extensive group trainings and workshops for corporate clients: we help specialists in the situation of restructuring and lay-offs to prepare them for efficient job search, improve their application skills, update them on the interview styles. \r\n\r\nWe offer information-packed lectures and exercises followed by 1-on-1 sessions, individually preparing CVs, application dossiers, making job interview trainings and career counseling (please contact us for the customized offers).');

-- --------------------------------------------------------

--
-- Table structure for table `service_left5`
--

CREATE TABLE IF NOT EXISTS `service_left5` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `service5_left_title` text NOT NULL,
  `service5_image_url` text NOT NULL,
  `service5_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service_left5`
--

INSERT INTO `service_left5` (`id`, `service5_left_title`, `service5_image_url`, `service5_content`) VALUES
(1, 'AVL Insured Packages', 'upload/services/na_pali_coast,_kauai,_hawaii.jpg', 'Service packages for the ALV-insured people: \r\n\r\nFor individuals: \r\nIn collaboration with RAV Basel we offer career counseling, support in improving the application profile, defining the application strategy, job interview coaching. Before contacting us you need to get a confirmation from your RAV Coordinator that the costs of our services are going to be covered by RAV. \r\n\r\nFor groups:\r\nIn coordination with RAV we also offer the group trainings followed up by 1-on-1 consulting for unemployed specialists and workers of all levels. If you are interested in participation please contact your RAV Coordinator who will include you in one of the upcoming group events and will confirm if the costs are going to be covered.');

-- --------------------------------------------------------

--
-- Table structure for table `Team`
--

CREATE TABLE IF NOT EXISTS `Team` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `designation` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `Team`
--

INSERT INTO `Team` (`id`, `name`, `image_url`, `designation`) VALUES
(12, 'mathew david', 'upload/team/dummyman.png', 'team lead'),
(13, 'stark botham', 'upload/team/dummyman.png', 'manager'),
(14, 'john smith', 'upload/team/dummyman.png', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `Testimonials`
--

CREATE TABLE IF NOT EXISTS `Testimonials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(10000) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_image_url` varchar(500) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `Testimonials`
--

INSERT INTO `Testimonials` (`id`, `content`, `user_name`, `user_image_url`, `user_address`) VALUES
(17, 'But I must explain to you the how all this mistaken idea of thealorem qco denouncing pleasure', 'Mark Pine', 'upload/testimonial/testi-image-1.jpg', 'australia');

-- --------------------------------------------------------

--
-- Table structure for table `What_we_do`
--

CREATE TABLE IF NOT EXISTS `What_we_do` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `What_we_do`
--

INSERT INTO `What_we_do` (`id`, `content`) VALUES
(12, 'General Career Counselling to help candidates\r\nWorkshops covering topics from Personal Branding to work-life balance, from \r\n career counselling of graduates to prevention of burnouts \r\nGeneral Career Counselling to help candidates navigate mordern pharmaceutical industry\r\nGeneral Career Counselling to help candidates Workshops covering topics from Personal Branding to work-life balance, from career counselling of graduates to prevention of burnouts General Career Counselling to help candidates navigate mordern pharmaceutical industry');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
