-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2025 at 06:39 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

-- NOTE:
-- I tried to connect the tables in phpMyAdmin,
-- but the software wouldn’t let me create the foreign key links.
-- Thank you.

START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

DROP TABLE IF EXISTS `tbl_projects`;
CREATE TABLE IF NOT EXISTS `tbl_projects` (
  `project_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_title` varchar(200) NOT NULL,
  `project_description` text NOT NULL,
  `industry` varchar(200) NOT NULL,
  `deliverables` varchar(200) NOT NULL,
  `project_date` date NOT NULL COMMENT 'release date',
  `main_image` varchar(200) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`project_id`, `project_title`, `project_description`, `industry`, `deliverables`, `project_date`, `main_image`) VALUES
(1, 'Squeezit Website', 'Now, under the leadership of CEO Mikhail Kirs, Squeezit is blasting back into the spotlight with an entirely new identity. This isn’t just a revival—it’s a complete reimagining of the brand for a new generation. The new era draws inspiration from childhood wonder, science fiction, and the thrill of discovery, with bottles designed to look like flying saucers and alien mascots that give every flavor its own playful personality and story. Every squeeze is meant to feel like opening a tiny adventure, combining taste with imagination in a way that goes beyond ordinary juice. Launching with six exciting flavors—grape, strawberry, orange, and more—each bottle doubles as a collectible, making Squeezit not just a drink, but a fun experience to share, trade, and enjoy. The mission is simple: bring back the excitement, the color, and the unforgettable taste of Squeezit—while adding a dash of mystery, fun, and adventure that kids and adults alike can explore. Squeezit has landed, and it’s ready to capture imaginations all over again.', 'web-development, design', 'Wireframes, finished responsive webpage', '2025-08-14', ''),
(2, 'Couples Resort Website', 'I had a task of remaking the Couples Resort Website with a new, good-looking and easy-to-use design.I had a task of remaking the Couples Resort Website with a new, good-looking and easy-to-use design.', 'web-development, design', 'Wireframes, homepage, basic HTML/CSS site files', '2025-04-14', ''),
(3, 'Music Mixer Project', 'Our team was tasked with creating a fully functional music mixer that allows users to drag and drop sounds into target zones and play music using JavaScript. The concept was to design a vibrant, party-themed page featuring a DJ panel and a speaker to simulate a clubbing atmosphere. During the process, our team was divided into two roles. Kirs Mikhail was responsible for the design, creating an original background, speaker, and DJ panel, as well as writing the HTML and CSS. Chris Macwan handled the JavaScript functionality. We also wrote our original song to the music mixer. Drag the sounds, drop them into the DJ panel and enjoy your party!', 'web-development, design', 'Adobe Illustrator, basic HTML/CSS site files, basic JavaScript ', '2025-07-29', ''),
(4, 'Earbuds Beats', 'In this project I needed to create a 3d model of the Beats Earbuds in cinema 4d.\r\n', '3d and design', 'Basic cinema 4d, animation ', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_images`
--

DROP TABLE IF EXISTS `tbl_project_images`;
CREATE TABLE IF NOT EXISTS `tbl_project_images` (
  `image_id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `alt_text` varchar(200) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tbl_project_images`
--

INSERT INTO `tbl_project_images` (`image_id`, `project_id`, `image_path`, `alt_text`) VALUES
(1, 1, 'images/squeezit_home.jpg', 'Squeezit Website homepage design'),
(2, 2, 'images/couples_resort_home.jpg', 'Couples Resort homepage design'),
(3, 3, 'images/music_mixer_ui.jpg', 'Music Mixer homepage'),
(4, 4, 'images/earbuds_render.jpg', '3D render of Beats Earbuds');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_skills`
--

DROP TABLE IF EXISTS `tbl_project_skills`;
CREATE TABLE IF NOT EXISTS `tbl_project_skills` (
  `project_id` int NOT NULL AUTO_INCREMENT,
  `skill_id` int NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tbl_project_skills`
--

INSERT INTO `tbl_project_skills` (`project_id`, `skill_id`) VALUES
(1, 1),
(2, 2),
(3, 5),
(4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skills`
--

DROP TABLE IF EXISTS `tbl_skills`;
CREATE TABLE IF NOT EXISTS `tbl_skills` (
  `skill_id` int NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(200) NOT NULL,
  `skill_level` varchar(200) NOT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tbl_skills`
--

INSERT INTO `tbl_skills` (`skill_id`, `skill_name`, `skill_level`) VALUES
(1, 'HTML', 'Advanced'),
(2, 'CSS', 'Advanced'),
(3, 'JavaScript', 'Intermediate'),
(4, 'Figma', 'Advanced'),
(5, 'Adobe Illustrator', 'Intermediate'),
(6, 'Adobe Photoshop', 'Intermediate'),
(7, 'Cinema 4D', 'Intermediate'),
(8, 'MySQL', 'Beginner'),
(9, 'PHP', 'Beginner');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
