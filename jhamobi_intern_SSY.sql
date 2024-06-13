-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 11:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jhamobi_intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_options`
--

CREATE TABLE `answer_options` (
  `answerOptionId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `answerOptions` int(11) DEFAULT NULL,
  `answerOptType` varchar(45) DEFAULT NULL,
  `answerOpt1Text` text NOT NULL,
  `answerOpt1Pic` text DEFAULT NULL,
  `answerOpt1Icon` text DEFAULT NULL,
  `answerOpt2Text` text NOT NULL,
  `answerOpt2Pic` text DEFAULT NULL,
  `answerOpt2Icon` text DEFAULT NULL,
  `answerOpt3Text` text DEFAULT NULL,
  `answerOpt3Pic` text DEFAULT NULL,
  `answerOpt3Icon` text DEFAULT NULL,
  `answerOpt4Text` text DEFAULT NULL,
  `answerOpt4Pic` text DEFAULT NULL,
  `answerOpt4Icon` text DEFAULT NULL,
  `answerOpt5Text` text DEFAULT NULL,
  `answerOpt5Pic` text DEFAULT NULL,
  `answerOpt5Icon` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `answer_options`
--

INSERT INTO `answer_options` (`answerOptionId`, `questionId`, `answerOptions`, `answerOptType`, `answerOpt1Text`, `answerOpt1Pic`, `answerOpt1Icon`, `answerOpt2Text`, `answerOpt2Pic`, `answerOpt2Icon`, `answerOpt3Text`, `answerOpt3Pic`, `answerOpt3Icon`, `answerOpt4Text`, `answerOpt4Pic`, `answerOpt4Icon`, `answerOpt5Text`, `answerOpt5Pic`, `answerOpt5Icon`) VALUES
(25, 38, 4, '2', '-5', '', '', '-4', '', '', '3', '', '', '6', '', '', '', '', ''),
(26, 39, 4, '2', 'maximum value of 2', '', '', 'minimum value of 2', '', '', 'maximum value of 3', '', '', 'minimum value of 3', '', '', '', '', ''),
(27, 40, 4, '2', 'y = -(x-3)<sup>2</sup> + 4', '', '', 'y = -x<sup>2</sup> + 6(x) - 5', '', '', 'y = (x+3)<sup>2</sup> + 4', '', '', 'y = x<sup>2</sup> + 6(x) + 5', '', '', '', '', ''),
(28, 41, 4, '2', '-x &#60 0', '', '', '\r\n\r\n<html>\r\n<body>\r\n<style>\r\nspan.frac {\r\n  display: inline-block;\r\n  text-align: center;\r\n  vertical-align: middle;\r\n}\r\nspan.frac > sup, span.frac > sub {\r\n  display: block;\r\n  font: inherit;\r\n  padding: 0 0.3em;\r\n}\r\nspan.frac > sup {border-bottom: 0.08em solid;}\r\nspan.frac > span {display: none}</style>\r\n&nbsp;<span \r\n\r\nclass=\"frac\"><sup>1</sup><span>&frasl;</span><sub>x</sub></span> is \r\n\r\nrational\r\n</body>\r\n</html>', '', '', '\r\n\r\n<html>\r\n<body>\r\n<style>\r\nspan.frac {\r\n  display: inline-block;\r\n  text-align: center;\r\n  vertical-align: middle;\r\n}\r\nspan.frac > sup, span.frac > sub {\r\n  display: block;\r\n  font: inherit;\r\n  padding: 0 0.3em;\r\n}\r\nspan.frac > sup {border-bottom: 0.08em solid;}\r\nspan.frac > span {display: none}</style>\r\n&nbsp;<span class=\"frac\"><sup>x</sup><span>&frasl;</span><sub>x\r\n\r\n+1</sub> </span> &#60; 1\r\n</body>\r\n</html>', '', '', '<html>\r\n<body>\r\n<style>\r\nspan.frac {\r\n  display: inline-block;\r\n  text-align: center;\r\n  vertical-align: middle;\r\n}\r\nspan.frac > sup, span.frac > sub {\r\n  display: block;\r\n  font: inherit;\r\n  padding: 0 0.3em;\r\n}\r\nspan.frac > sup {border-bottom: 0.08em solid;}\r\nspan.frac > span {display: none}</style>\r\n<span class=\"frac\"><sup>1</sup><span>&frasl;</span><sub>x</sub> </span > &#62 1 , if 0 &#60 x &#60 1 \r\n</body>\r\n</html>', '', '', '', '', ''),
(29, 42, 4, '2', 'Cos 66°', '', '', 'Cos 20°', '', '', 'Sin 66°', '', '', 'Sin 20°', '', '', '', '', ''),
(30, 43, 4, '2', 'A minimum y value and a negative y intercept.', '', '', 'A maximum y value and a positive y intercept.', '', '', 'A minimum y value and a positive y intercept.', '', '', 'A maximum y value and a negative y intercept.', '', '', '', '', ''),
(31, 44, 4, '2', '60 m', '', '', '65 m', '', '', '70 m', '', '', '75 m', '', '', '', '', ''),
(32, 45, 4, '2', '2', '', '', '3', '', '', '4', '', '', '5', '', '', '', '', ''),
(33, 46, 4, '2', '6?<sup>2</sup> - <span class=\"frac\"><sup>??<sup>2</sup></sup><span>?</span><sub>4</sub> </span>', '', '', '6?<sup>2</sup> - 2??<sup>2</sup>', '', '', '6?<sup>2</sup> - <span class=\"frac\"><sup>??<sup>2</sup></sup><span>?</span><sub>8</sub> </span>', '', '', '6?<sup>2</sup> - <span class=\"frac\"><sup>??<sup>2</sup></sup><span>?</span><sub>2</sub> </span>', '', '', '', '', ''),
(34, 47, 4, '4', '1000(1, 015)<sup>20</sup>', '', '', '1000(1, 02)<sup>15</sup>', '', '', '1000(1, 03)<sup>20</sup>', '', '', '1000(1, 06)<sup>5</sup>', '', '', '', '', ''),
(35, 49, 4, '2', '100', '', '', '200', '', '', '300', '', '', '400', '', '', '', '', ''),
(36, 50, 4, '2', 'yes', '', '', 'no', '', '', 'both', '', '', 'may be', '', '', '', '', ''),
(37, 52, 4, '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `chapterId` int(11) NOT NULL,
  `chapterName` varchar(45) DEFAULT NULL,
  `subjectId` varchar(45) DEFAULT NULL,
  `subjectName` varchar(45) DEFAULT NULL,
  `unitsId` varchar(45) DEFAULT NULL,
  `unitsName` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`chapterId`, `chapterName`, `subjectId`, `subjectName`, `unitsId`, `unitsName`) VALUES
(1, 'Relations and Functions', '1', 'Mathematics', '1', 'Unit I: Relations and Functions'),
(2, 'Inverse Trigonometric Functions', '1', 'Mathematics', '1', 'Unit I: Relations and Functions'),
(3, 'Matrices', '1', 'Mathematics', '2', 'Unit II: Algebra'),
(4, 'Determinants', '1', 'Mathematics', '2', 'Unit II: Algebra'),
(5, 'Continuity and Differentiability', '1', 'Mathematics', '3', 'Unit III: Calculus	'),
(6, 'Application of Derivatives', '1', 'Mathematics', '3', 'Unit III: Calculus	'),
(7, 'Integrals', '1', 'Mathematics', '3', 'Unit III: Calculus	'),
(8, 'Application of Integrals', '1', 'Mathematics', '3', 'Unit III: Calculus	'),
(9, 'Differential Equations', '1', 'Mathematics', '3', 'Unit III: Calculus	'),
(10, 'Vector Algebra', '1', 'Mathematics', '4', 'Unit IV: Vectors and Three-Dimensional Geometry'),
(11, 'Three Dimensional Geometry', '1', 'Mathematics', '4', 'Unit IV: Vectors and Three-Dimensional Geometry'),
(12, 'Linear Programming', '1', 'Mathematics', '5', 'Unit V: Linear Programming	'),
(13, 'Probability', '1', 'Mathematics', '6', 'Unit VI: Probability	');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `gradeId` int(11) NOT NULL,
  `gradeName` varchar(45) DEFAULT NULL,
  `gradeDesc` varchar(45) DEFAULT NULL,
  `gradeRoman` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`gradeId`, `gradeName`, `gradeDesc`, `gradeRoman`) VALUES
(1, 'BCA', 'Matric', NULL),
(2, 'B.cs', NULL, NULL),
(3, 'M.SC', NULL, NULL),
(4, 'MCA', NULL, NULL),
(5, 'B.TECH', NULL, NULL),
(6, 'M.TECH', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paper_details`
--

CREATE TABLE `paper_details` (
  `id` int(11) NOT NULL,
  `quesSetId` int(11) NOT NULL,
  `instituteName` varchar(255) NOT NULL,
  `examDate` varchar(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `gradeName` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionID` int(11) NOT NULL,
  `complexityLevel` varchar(45) DEFAULT NULL,
  `gradeId` varchar(45) DEFAULT NULL,
  `gradeName` varchar(45) DEFAULT NULL,
  `subjectId` varchar(45) DEFAULT NULL,
  `subjectName` varchar(90) DEFAULT NULL,
  `unitsId` varchar(45) DEFAULT NULL,
  `unitsName` varchar(90) DEFAULT NULL,
  `chapterId` varchar(45) DEFAULT NULL,
  `chapterName` varchar(90) DEFAULT NULL,
  `questionText` text DEFAULT NULL,
  `questionPic` text DEFAULT NULL,
  `addedOn` varchar(45) DEFAULT NULL,
  `addedBy` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `marks` int(11) NOT NULL,
  `isCompleted` binary(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionID`, `complexityLevel`, `gradeId`, `gradeName`, `subjectId`, `subjectName`, `unitsId`, `unitsName`, `chapterId`, `chapterName`, `questionText`, `questionPic`, `addedOn`, `addedBy`, `status`, `marks`, `isCompleted`) VALUES
(38, 'Simple', '1', 'BCA', '1', 'Mathematics', '1', 'Unit I: Relations and Functions', '1', 'Relations and Functions', '                                    <html>\r\n<body>\r\nThe sum of the roots of the equation -x<sup>2</sup>+6x-5=0 is\r\n</body>\r\n</html>				  				  ', '', '2023-05-14 11:14:23', 'admin', '1', 5, NULL),
(39, 'Simple', '1', 'BCA', '1', 'Mathematics', '2', 'Unit II: Algebra', '12', 'Linear Programming', '<html>\r\n<body>\r\nThe expression &radic;<span style=\"text-decoration: overline\">-x<sup>2</sup>+6x?5 </span>has a\r\n</body>\r\n</html>', '', '2020-04-08 22:57:17', 'admin', '1', 5, NULL),
(40, 'Simple', '1', 'BCA', '1', 'Mathematics', '2', 'Unit II: Algebra', '12', 'Linear Programming', '                  <html>\r\n<body>\r\nIf the graph of y = -x<sup>2</sup> + 6(x) - 5 is reflected in the x-axis and the resulting graph is then reflected in the y-axis, the new equation is\r\n</body>\r\n</html>				  ', 'http://34.229.183.41/backend/yofundowebapp/images/questions/XII/math/quesid_40/q1.png', '2023-06-20 16:54:01', 'admin', '1', 5, NULL),
(41, 'Simple', '1', 'BCA', '1', 'Mathematics', '2', 'Unit II: Algebra', '12', 'Linear Programming', 'For any real number <i>x</i>, which one of the following statements is always true?', '', '2020-04-09 09:49:15', 'admin', '1', 5, NULL),
(42, 'Simple', '1', 'BCA', '1', 'Mathematics', '3', 'Unit III: Calculus	', '2', 'Inverse Trigonometric Functions', '                                                                                          <html>\r\n<body>\r\nsin 43° cos 23° - cos 43° sin 23° is eqaul to\r\n</body>\r\n</html>				  				  				  				  				  ', '', '2020-04-10 14:29:30', 'admin', '1', 5, NULL),
(43, 'Simple', '1', 'BCA', '1', 'Mathematics', '1', 'Unit I: Relations and Functions', '1', 'Relations and Functions', 'The function &#402 is defined by y= &#402(x)=-x<sup>2</sup>+6x-5 has\n', '', '2020-04-09 23:47:15', 'admin', '1', 10, NULL),
(44, 'Simple', '1', 'BCA', '1', 'Mathematics', '4', 'Unit IV: Vectors and Three-Dimensional Geometry', '11', 'Three Dimensional Geometry', 'The angle of elevation of the top of cell phone tower B from the top of cell phone tower A is 30°.  \r\nThe angle of depression of the foot of cell phone tower B from the top of cell phone tower A is \r\n60°. The height of cell phone tower B is 100m.  The foot of cell phone tower A and the foot of cell \r\nphone tower B are in the same horizontal plane. The height of cell phone tower A is\r\n', 'http://34.229.183.41/backend/yofundowebapp/images/questions/XII/math/quesid_44/q1.jpg', '2020-04-10 09:32:55', 'admin', '1', 5, NULL),
(45, 'Medium', '1', 'BCA', '1', 'Mathematics', '4', 'Unit IV: Vectors and Three-Dimensional Geometry', '11', 'Three Dimensional Geometry', 'Suppose ABCD is a square with side length (x -1 ) cm. If the area of rectangle ABFE is (x<sup>2</sup> + x - 2) cm², then the length of FC, in cm, is				  				  				  ', 'http://34.229.183.41/backend/yofundowebapp/images/questions/XII/math/quesid_45/q1.jpg', '2020-04-10 21:52:43', 'admin', '1', 5, NULL),
(46, 'Simple', '1', 'BCA', '1', 'Mathematics', '4', 'Unit IV: Vectors and Three-Dimensional Geometry', '11', 'Three Dimensional Geometry', '                  The figure represents an empty cube with a circular opening at the top. The diameter of the\r\nopening is half the length of the diagonal AB. The outer surface area of the cube (in square\r\ncentimeters) is:				  ', 'http://34.229.183.41/backend/yofundowebapp/images/questions/XII/math/quesid_46/q1.jpg', '2023-06-20 16:57:12', 'admin', '1', 5, NULL),
(47, 'Simple', '2', 'B.cs', '1', 'Mathematics', '5', 'Unit V: Linear Programming	', '12', 'Linear Programming', '                                                      An amount of Rs 1000 is invested at an annual interest rate of 6%. Interest is compounded every three months (quarterly). After 5 years the investment, in rands, will be worth\r\n				  				  				  ', '', '2024-01-25 15:13:16', 'admin', '1', 5, NULL),
(48, 'Medium', '3', 'M.SC', '1', 'Mathematics', '', '', '', '', 'The length of the abstract may be ______ words.', NULL, '2023-06-21 15:19:42', 'admin', '1', 5, NULL),
(49, 'Simple', '3', 'M.SC', '1', 'Mathematics', '', '', '', '', 'The length of the abstract may be ______ words.', '', '2023-06-21 15:42:00', 'admin', '1', 5, NULL),
(50, 'Medium', '5', 'B.TECH', '1', 'Technical', '', '', '', '', 'my question will be here ?', '', '2023-06-22 14:12:09', 'admin', '1', 5, NULL),
(52, 'Simple', '1', 'BCA', '1', 'technical', '', '', '', '', 'What is the full form of RAM?', '', '2024-01-25 14:17:41', 'admin', '1', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questionset`
--

CREATE TABLE `questionset` (
  `quesSetId` int(11) NOT NULL,
  `quesSetName` varchar(45) DEFAULT NULL,
  `quesCount` varchar(45) DEFAULT NULL,
  `gradeId` varchar(45) DEFAULT NULL,
  `gradeName` varchar(45) DEFAULT NULL,
  `subjectId` varchar(45) DEFAULT NULL,
  `subjectName` varchar(45) DEFAULT NULL,
  `topicId` varchar(45) DEFAULT NULL,
  `topicName` varchar(45) DEFAULT NULL,
  `chapterId` varchar(45) DEFAULT NULL,
  `chapterName` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `createdOn` varchar(45) DEFAULT NULL,
  `createdBy` varchar(45) DEFAULT NULL,
  `quesIdList` text DEFAULT NULL,
  `SemName` varchar(25) DEFAULT NULL,
  `institute` varchar(225) DEFAULT NULL,
  `examDate` varchar(50) DEFAULT NULL,
  `marksQuest` int(25) DEFAULT NULL,
  `total_marks` int(50) DEFAULT NULL,
  `examDuration` int(25) DEFAULT NULL,
  `questionID` int(20) DEFAULT NULL,
  `questionText` varchar(200) DEFAULT NULL,
  `complexityLevel` varchar(22) DEFAULT NULL,
  `selectedQuestions` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questionset`
--

INSERT INTO `questionset` (`quesSetId`, `quesSetName`, `quesCount`, `gradeId`, `gradeName`, `subjectId`, `subjectName`, `topicId`, `topicName`, `chapterId`, `chapterName`, `status`, `createdOn`, `createdBy`, `quesIdList`, `SemName`, `institute`, `examDate`, `marksQuest`, `total_marks`, `examDuration`, `questionID`, `questionText`, `complexityLevel`, `selectedQuestions`) VALUES
(1, 'A', '9', '1', 'BCA', '1', 'Mathematics', '', '', '', '', '1', '2023-08-10 18:25:42', 'admin', '46,45,44,43,42,41,40,39,38,', '', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'kkhsd', '7', '1', 'BCA', '1', 'Mathematics', '', '', '', '', '1', '2023-06-20 14:16:06', 'admin', '44,43,42,41,40,39,38,', '', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'J', '2', '1', 'BCA', '1', 'Mathematics', '', '', '', '', '1', '2023-06-19 17:02:29', 'admin', '47,46,', '', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Ld', '1', '2', 'B.cs', '1', 'Mathematics', '', '', '', '', '1', '2023-06-20 17:13:31', 'admin', '47,', '', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'B', '1', '3', 'M.SC', '1', 'Mathematics', '', '', '', '', '1', '2023-06-21 16:01:57', 'admin', '49,', '', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'set C', '5', '1', 'BCA', '1', 'Mathematics', NULL, NULL, NULL, NULL, '1', '2024-01-25 15:02:24', 'admin', '38,39,40,41,42', '4', 'SNDT univercity', '0000-00-00', 2, 20, 1, 42, '                                                                                          <html>\r\n<body>\r\nsin 43° cos 23° - cos 43° sin 23° is eqaul to\r\n</body>\r\n</html>				  				  				  				  				  ', 'Simple', NULL),
(132, 'Set B', '1', '2', 'B.cs', '1', 'Mathematics', NULL, NULL, NULL, NULL, '1', '2024-01-25 20:06:46', 'admin', '47', '3', 'spmm', '0000-00-00', 2, 20, 1, 47, '                                                      An amount of Rs 1000 is invested at an annual interest rate of 6%. Interest is compounded every three months (quarterly). After 5 years the invest', 'Simple', NULL),
(133, 'set F', '1', '3', 'M.SC', '1', 'Mathematics', NULL, NULL, NULL, NULL, '1', '2024-01-25 20:11:04', 'admin', '48', '2', 'Shivaji University', '0000-00-00', 2, 50, 1, 48, 'The length of the abstract may be ______ words.', 'Medium', NULL),
(134, 'Set D', '2', '3', 'M.SC', '1', 'Mathematics', NULL, NULL, NULL, NULL, '1', '2024-01-25 20:14:27', 'admin', '48,49', '2', 'SNDT', '0000-00-00', 2, 20, 1, 49, 'The length of the abstract may be ______ words.', 'Simple', NULL),
(135, 'f', '1', '1', 'BCA', '2', 'Technical', NULL, NULL, NULL, NULL, '1', '2024-01-25 20:16:44', 'admin', '52', '2', 'ssbs', '0000-00-00', 2, 10, 1, 52, 'What is the full form of RAM?', 'Simple', NULL),
(136, 'set G', '6', '1', 'BCA', '1', 'Mathematics', NULL, NULL, NULL, NULL, '1', '2024-01-25 20:20:03', 'admin', '38,39,40,41,42,43', '3', 'yoshoda  university', '0000-00-00', 2, 30, 1, 43, 'The function &#402 is defined by y= &#402(x)=-x<sup>2</sup>+6x-5 has\n', 'Simple', NULL),
(137, 'E', '1', '1', 'BCA', '2', 'Technical', NULL, NULL, NULL, NULL, '1', '2024-01-25 20:25:41', 'admin', '52', '4', 'dthi', NULL, 2, 5, 1, 52, 'What is the full form of RAM?', 'Simple', NULL),
(138, 'set Q', '5', '1', 'BCA', '1', 'Mathematics', NULL, NULL, NULL, NULL, '1', '2024-01-26 20:22:01', 'admin', '38,39,40,41,42', '5', 'spmm', '0000-00-00', 2, 10, 1, 42, '                                                                                          <html>\r\n<body>\r\nsin 43° cos 23° - cos 43° sin 23° is eqaul to\r\n</body>\r\n</html>				  				  				  				  				  ', 'Simple', NULL),
(139, 'set A', '7', '1', 'BCA', '1', 'Mathematics', NULL, NULL, NULL, NULL, '1', '2024-01-26 21:01:01', 'admin', '38,39,40,41,44,45,46', '2', 'szdxc', '0000-00-00', 2, 24, 1, 46, '                  The figure represents an empty cube with a circular opening at the top. The diameter of the\r\nopening is half the length of the diagonal AB. The outer surface area of the cube (in squ', 'Simple', NULL),
(140, 'H', '1', '2', 'B.cs', '1', 'Mathematics', NULL, NULL, NULL, NULL, '1', '2024-01-26 21:12:52', 'admin', '47', '7', 'bn,m', '0000-00-00', 2, 45, 1, 47, '                                                      An amount of Rs 1000 is invested at an annual interest rate of 6%. Interest is compounded every three months (quarterly). After 5 years the invest', 'Simple', NULL),
(141, 'G', '1', '1', 'BCA', '2', 'Technical', NULL, NULL, NULL, NULL, '1', '2024-01-26 21:24:57', 'admin', '52', '4', 'dafagssgf', '0000-00-00', 2, 23, 1, 52, 'What is the full form of RAM?', 'Simple', NULL),
(142, 'SET J', '5', '1', 'BCA', '1', 'Mathematics', NULL, NULL, NULL, NULL, '1', '2024-01-27 13:53:19', 'admin', '38,39,40,41,42', '5', 'sppus', '2024', 20, 100, 2, 42, '                                                                                          <html>\r\n<body>\r\nsin 43° cos 23° - cos 43° sin 23° is eqaul to\r\n</body>\r\n</html>				  				  				  				  				  ', 'Simple', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolId` int(11) NOT NULL,
  `schoolName` varchar(45) DEFAULT NULL,
  `schoolAddress` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `pincode` varchar(45) DEFAULT NULL,
  `studentCount` varchar(45) DEFAULT NULL,
  `schoolPic` varchar(45) DEFAULT NULL,
  `addedOn` varchar(45) DEFAULT NULL,
  `addedBy` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `solutionId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `solutionText` text DEFAULT NULL,
  `solutionPic` text DEFAULT NULL,
  `correctAnswerOption` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`solutionId`, `questionId`, `solutionText`, `solutionPic`, `correctAnswerOption`) VALUES
(24, 38, 'Not Available', '', 1),
(25, 39, 'Not Available', '', 1),
(26, 40, 'Not Available', '', 1),
(27, 41, 'Not Available', '', 1),
(28, 42, 'Not Available', '', 1),
(29, 43, 'Not Available', '', 1),
(30, 44, 'Not Available', '', 1),
(31, 45, 'Not Available', '', 1),
(32, 46, 'Not Available', '', 1),
(33, 47, 'Not Available', '', 1),
(34, 49, '', '', 2),
(35, 50, '', '', 1),
(36, 52, 'Random Access Memory', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

CREATE TABLE `study_material` (
  `studyMatId` int(11) NOT NULL,
  `studyMatName` varchar(45) DEFAULT NULL,
  `studyMatDesc` text DEFAULT NULL,
  `gradeId` varchar(45) DEFAULT NULL,
  `grade` varchar(45) DEFAULT NULL,
  `subjectId` varchar(45) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `topicId` varchar(45) DEFAULT NULL,
  `topicOrUnit` varchar(45) DEFAULT NULL,
  `chapterId` varchar(45) DEFAULT NULL,
  `chapter` varchar(45) DEFAULT NULL,
  `fileSize` varchar(45) DEFAULT NULL,
  `fileName` text DEFAULT NULL,
  `fileType` varchar(45) DEFAULT NULL,
  `addedOn` varchar(45) DEFAULT NULL,
  `addedBy` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `study_material`
--

INSERT INTO `study_material` (`studyMatId`, `studyMatName`, `studyMatDesc`, `gradeId`, `grade`, `subjectId`, `subject`, `topicId`, `topicOrUnit`, `chapterId`, `chapter`, `fileSize`, `fileName`, `fileType`, `addedOn`, `addedBy`, `status`) VALUES
(6, 'Probablity ', 'Video letcure: Basic concept of Probability', '1', 'BCA', '1', 'Mathematics', '6', 'Unit VI: Probability	', '13', 'Probability', '551719383', 'http://34.229.183.41/backend/yofundowebapp/studymaterial/XII/math/Probability/studyMatId_7/YoFunfo_12_Math_Probablity.mp4', '2', '2020-04-09 21:18:14', 'admin', '1'),
(7, 'Probablity ', 'Basic concept of Probability', '1', 'BCA', '1', 'Mathematics', '6', 'Unit VI: Probability	', '13', 'Probability', '122651', 'http://34.229.183.41/backend/yofundowebapp/studymaterial/XII/math/Probability/studyMatId_7/doc.pdf', '1', '2020-04-11 16:36:52', 'admin', '1'),
(8, 'Vector Algebra', 'Basic concept of Vector Algebra', '1', 'BCA', '1', 'Mathematics', '4', 'Unit IV: Vectors and Three-Dimensional Geomet', '10', 'Vector Algebra', '135846', 'http://34.229.183.41/backend/yofundowebapp/studymaterial/XII/math/Vector Algebra/studyMatId_8/doc.pdf', '1', '2020-04-11 16:49:47', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectId` int(11) NOT NULL,
  `subjectName` varchar(45) DEFAULT NULL,
  `shortcode` varchar(45) DEFAULT NULL,
  `gradeId` varchar(45) DEFAULT NULL,
  `grade` varchar(45) DEFAULT NULL,
  `bannerPic` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectId`, `subjectName`, `shortcode`, `gradeId`, `grade`, `bannerPic`) VALUES
(1, 'Mathematics', 'Math', '1', 'BCA', 'http://34.229.183.41/backend/yofundowebapp/images/subjects/coverpic/Math.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject_units`
--

CREATE TABLE `subject_units` (
  `unitsId` int(11) NOT NULL,
  `unitsName` varchar(90) DEFAULT NULL,
  `subjectId` varchar(45) DEFAULT NULL,
  `subjectName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subject_units`
--

INSERT INTO `subject_units` (`unitsId`, `unitsName`, `subjectId`, `subjectName`) VALUES
(1, 'Unit I: Relations and Functions', '1', 'Mathematics'),
(2, 'Unit II: Algebra', '1', 'Mathematics'),
(3, 'Unit III: Calculus	', '1', 'Mathematics'),
(4, 'Unit IV: Vectors and Three-Dimensional Geometry', '1', 'Mathematics'),
(5, 'Unit V: Linear Programming	', '1', 'Mathematics'),
(6, 'Unit VI: Probability	', '1', 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userMailId` varchar(45) DEFAULT NULL,
  `userType` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `phoneNum` varchar(45) DEFAULT NULL,
  `schoolId` varchar(45) DEFAULT NULL,
  `schoolName` varchar(45) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userMailId`, `userType`, `gender`, `phoneNum`, `schoolId`, `schoolName`, `subject`, `password`) VALUES
(0, 'admin@jhamobi.com', 'admin', 'M', '123456789', '001', 'American International School of Johannesburg', NULL, 'Password01$');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_options`
--
ALTER TABLE `answer_options`
  ADD PRIMARY KEY (`answerOptionId`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`chapterId`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`gradeId`);

--
-- Indexes for table `paper_details`
--
ALTER TABLE `paper_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionID`),
  ADD UNIQUE KEY `questionID_UNIQUE` (`questionID`);

--
-- Indexes for table `questionset`
--
ALTER TABLE `questionset`
  ADD PRIMARY KEY (`quesSetId`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolId`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`solutionId`);

--
-- Indexes for table `study_material`
--
ALTER TABLE `study_material`
  ADD PRIMARY KEY (`studyMatId`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectId`);

--
-- Indexes for table `subject_units`
--
ALTER TABLE `subject_units`
  ADD PRIMARY KEY (`unitsId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_options`
--
ALTER TABLE `answer_options`
  MODIFY `answerOptionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `gradeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paper_details`
--
ALTER TABLE `paper_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `questionset`
--
ALTER TABLE `questionset`
  MODIFY `quesSetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `solutionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `study_material`
--
ALTER TABLE `study_material`
  MODIFY `studyMatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
