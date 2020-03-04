-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 05:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `ckeditor`
--

CREATE TABLE `ckeditor` (
  `id` int(11) NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ckeditor`
--

INSERT INTO `ckeditor` (`id`, `description`) VALUES
(1, '<p>testing</p>'),
(2, '<p>This&nbsp;<strong>is <em>ckeditor&nbsp;<s>Testing&nbsp;&nbsp;</s></em></strong></p>\r\n\r\n<h1>MY Name&nbsp; Priyanka</h1>\r\n'),
(6, '<p>q sd.jblfuilhgwif vnkcjudvg cbmkij5rhygkmltgjhtr5oigojhenwcvk j</p>\r\n\r\n<hr />\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Name</strong></td>\r\n			<td><strong>Email Id</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>priyanka</td>\r\n			<td>priyankamangukiya148@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td>jinal</td>\r\n			<td>jinalmangukiya148@gmail.com</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(8, '<p><img alt=\"\" src=\"/home/dell/Evotingimage/images/banner_1.jpeg\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE `tbl_admin_login` (
  `admin_login_id` int(5) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`admin_login_id`, `password`, `email`, `last_login`) VALUES
(1, '15170e1d04e9a4e8fcc382f3e46529ac0a35b115f7554dd62471d1a947b26ff6e236686e9606b2ad9120301a0dd41a18b23d00616d45a2c2e2564d3e7e600b6f9PWQ3AswgGRNw6IOmh+beMQLStzNYqrjCtI2pRfLDHM=', 'mygovrn@gmail.com', '2019-12-01 11:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `b_id` int(5) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `banner_path` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`b_id`, `title`, `banner_path`, `description`) VALUES
(6, 'Bharatiya Janata Party', 'banner/photo_0.jpg', 'The Bharatiya Janata Party (abbreviated BJP) is one the two largest political parties of India. (The other is the Indian National Congress).'),
(9, 'Indian National Congress', 'banner/photo_6.jpg', 'The Indian National Congress (INC, often called Congress) is a broad-based political party in India.'),
(11, 'Aam Aadmi Party', 'banner/photo_9.jpg', 'Aam Aadmi Party (AAP, English: Common Man\'s Party) is an Indian political party.'),
(12, 'Bahujan Samaj Party', 'banner/photo_11.jpg', 'The Bahujan Samaj Party (BSP) is the third largest national political party in India.'),
(13, 'All India Trinamool Congress', 'banner/photo_12.jpg', 'The All India Trinamool Congress is an Indian political party based in West Bengal .'),
(14, 'Communist Party of India', 'banner/photo_13.png', 'The Communist Party of India (CPI) (Bh?rat?ya Kamyunis? P?r??) is a communist party in India. There are different views on exactly when it was founded.'),
(15, 'Communist Party of India (Marxist)', 'banner/photo_14.jpg', 'The Communist Party of India (Marxist) (abbreviated CPI(M)) is a communist party in India.'),
(16, 'Nationalist Congress Party', 'banner/photo_15.jpg', 'The Nationalist Congress Party (NCP) is a political party in India. Its youth wing is the Nationalist Youth Congress.'),
(17, 'Bahujan Samaj Party', 'banner/photo_16.jpg', 'The Bahujan Samaj Party (Ambedkar) was a splinter group of the Bahujan Samaj Party in Punjab and Haryana, India.'),
(18, 'Bharatiya Janata Party', 'banner/photo_17.jpg', 'The Bharatiya Janata Party (BJP) is one of the two major political parties in India and was the main opposition party during the 15th Lok Sabha.'),
(19, 'Bharatiya Janata Party', 'banner/photo_18.jpg', 'Its is Bharatiya janta party');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_registration`
--

CREATE TABLE `tbl_candidate_registration` (
  `candidate_id` int(5) NOT NULL,
  `party_id` int(5) NOT NULL,
  `location_id` int(5) NOT NULL,
  `candidate_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `profile_pic` varchar(1000) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` int(5) NOT NULL,
  `r_date` varchar(200) NOT NULL,
  `category_id` int(5) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `office_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_candidate_registration`
--

INSERT INTO `tbl_candidate_registration` (`candidate_id`, `party_id`, `location_id`, `candidate_name`, `gender`, `profile_pic`, `email_id`, `password`, `description`, `status`, `r_date`, `category_id`, `dob`, `office_address`) VALUES
(2, 1, 1872, 'Paresh Dhanani', 'Male', 'candidate/photo_1_1520575738.jpg', 'pareshdhanani@gmail.com', 'pareshdhanani', 'Paresh Dhirajlal Dhanani is an Indian politician from Gujarat associated with Bharatiya Janata Party. He is an incumbent leader of opposition in Gujarat Legislative Assembly. He is an MLA from Adajan since 2017. He earlier represented Amreli from 2002 to 2007 and from 2012 to 2017.', 1, '2018-03-09', 2, '15-August-1976', 'Mahavishnu Krupa”, Gajera Para,Amreli – 365 601'),
(3, 2, 1872, 'Firhad Hakim', 'Male', 'candidate/photo_2_1520577969.jpg', 'firhadhakim@gmail.com', 'firhadhakim', 'Firhad Hakim is an Indian politician and the present Minister for Urban Development and the Minister for Municipal Affairs in the Government of West Bengal.', 1, '2018-03-09', 3, '1-January-1959', '4, Peary Mohan Roy Road, PO Alipore, PS Chetla, Kolkata 700027'),
(4, 1, 1873, 'Chhabilbhai Patel', 'Male', 'candidate/photo_3_1520828519.jpg', 'chhabilbhaipatel@gmail.com', 'chhabilbhaipatel', 'Chhabilbhai Patel is an Indian politician from the Bharatiya Janata Party. He has been chief minister of Gujarat since 7 August 2016, and is a member of the Gujarat Legislative Lok representing Althan.', 1, '2018-03-12', 2, '13-April-1966', 'NAKHATRANA, 55, OMKARNAGAR'),
(5, 1, 1873, 'Virendrasinh Jadeja', 'Male', 'candidate/photo_4_1520828955.jpg', 'Virendrasinhjadeja@gmail.com', 'Virendrasinhjadeja', 'Virendrasinh Jadeja  is an Indian politician from the Aam Aadmi Party.He  is a member of the Gujarat Legislative Assembly representing Althan.', 1, '2018-03-12', 2, '13-April-1978', 'At. Bhachau, Tal. Rapar, Dist. Kutchh'),
(6, 1, 1874, 'Pankajbhai Mehata', 'Male', 'candidate/photo_5_1520829585.jpg', 'pankajmehata@gmail.com', 'Bharatiya Janata Party', 'Pankajbhai Mehata is an Indian politician from Gujarat associated with Bharatiya Janata Party. He is an incumbent leader of opposition in Gujarat Legislative Assembly. He is an MLA from Amroli since 2017. He earlier represented Amroli from 2002 to 2007 and from 2012 to 2017.', 1, '2018-03-12', 2, '18-March-1950', '667,K,NICHALO VAS,POST - SUVAI, TA.RAPAR,DIST.KUTCHH'),
(7, 1, 1824, 'Ramanbhai Vora', 'Male', 'candidate/photo_6_1520830099.jpg', 'ramanlalvora@gmail.com', 'ramanlalvora', 'Ramanlal Vora is an Indian politician of the Bharatiya Janata Party from Gujarat state of India. He is elected to Gujarat Legislative Assembly for five consecutive terms from Anand Mahal Road from 1995 to 2017. He was serving as a speaker of Gujarat Legislative Assembly since 22 August 2016', 1, '2018-03-12', 2, '1-December-1951', 'Damodoar Complex, Ambikanagar, Javanpura'),
(8, 1, 1825, 'Nitinbhai Ratilal Patel', 'Male', 'candidate/photo_7_1521539930.jpg', 'nitinpatel@gmail.com', 'nitinpatel', 'Nitinbhai Ratilal Patel is an Indian politician from Gujarat. He serves as Deputy Chief Minister and cabinet minister for Health, Medical Education, Family Welfare, Road and Building, Capital Project.He was formerly Minister for Water Supply, Water Resources, (excluding Kalpsar Division), Urban Development and Urban Housing. He was elected to Gujarat Legislative Assembly from Mehsana in 2012. On August 5, 2016, Patel was appointed Deputy Chief Minister.', 1, '2018-03-20', 2, '22-June-1956', '17- Rajlaxmi Complex ,Near Atwagate Circle'),
(9, 1, 1826, 'Seema Mohiuddin Jameeli', 'Female', 'candidate/photo_8_1521540478.jpeg', 'seemamohiuddinjameeli@gmail.com', 'seemamohiuddinjameeli', 'Seema Mohiuddin Jameeli is a Candidate of Bharatatiya Janata Party for Lok Sabha election. She was elected to the Lok Sabha eleciton of Gujarat as a candidate of Bharatiya Janata Party on a seat reserved for women from Surat.', 1, '2018-03-20', 3, '10-July-1952', 'B- 21 Divyashakti Apt ,Near Bamroligam Road'),
(10, 1, 1827, 'Jitendra Sukhadia', 'Male', 'candidate/photo_9_1521544133.jpeg', 'jitendrasukhadia@gmail.com', 'jitendrasukhadia', ' Shri Jitendra Ratilal Sukhadia is a candidate of bharatiya Janata Party for Lok sabha election', 1, '2018-03-20', 2, '5-January-1950', '148-Bumipark Residency,Near Bardoli Circle Road'),
(11, 1, 1828, 'Jasubhai Rathva', 'Male', 'candidate/photo_10_1521544398.jpg', 'jashubhairathva@gmail.com', 'jashubhairathva', 'Jasubhai Rathva is a candidate of Bharatiya Janata Party for Lok Sabha election.The Rathwa are a Adivasi caste found in the state of Gujarat in India.They are also known as Rathwa and Rathiya(Rathia) in Gujarat and Madhya Pradesh. In Gujarat, the Rathwa consist of number of sub-groups.They speak Rathwi (a Bhil language) and/or Gujarati.', 1, '2018-03-20', 2, '5-August-1964', '70-Satyanarayan Road,Near OM campus'),
(12, 1, 1829, 'Madhubhai vastav', 'Male', 'candidate/photo_11_1521544771.jpg', 'madhubhaivastav@gmail.com', 'madhubhaivastav', 'Madhu Shrivastav (Shrivastav Madhubhai Babubhai) is a BJP MLA from Surat, a city in Gujarat, India. A land developer by profession, he is also a co-accused in the Best Bakery case of 2002 in which 18 Muslims were burned alive by setting a bakery afire.', 1, '2018-03-20', 2, '15-April-1957', 'A-17 DivyaShakti residency,Near Bhatar Char Rasta'),
(13, 1, 1830, 'Shaileshbhai Sumanbhai Bhabhor', 'Female', 'candidate/photo_12_1521545295.jpg', 'shaileshbhaisumanbhaibhabhor@gmail.com', 'shaileshbhaisumanbhaibhabhor', 'Shaileshbhai Sumanbhai Bhabhor is an Indian politician and the current Minister of State (Independent Charge) for Micro, Small and Medium Enterprises in the Government of India. He is the Member of Parliament from the Nawada parliamentary constituency in the 16th Lok Sabha', 1, '2018-03-20', 2, '22-August-1966', '33-35, South Avenue,Bhestan-110011Tel : (011) 23795180, 09013869130 (M)'),
(14, 1, 1831, 'Kanubhai Dabhi', 'Male', 'candidate/photo_13_1521545726.jpg', 'kanubhaibhulabhaidabhi@gmail.com', 'kanubhaibhulabhaidabhi', 'Kanubhai Bhulabhai Dabhi is a Candidate of Bharatiya Janata Party (BJP)\'s party candidate from the Surat Lok constituency in gujarat', 1, '2018-03-20', 2, '18-November-1967', '25-Raj laxmi Residency,Near Savani Circle'),
(19, 1, 1832, 'Bharatsinh Parmar', 'Male', 'candidate/photo_15_1521547465.jpg', 'bharatsinhparmar@gmail.com', 'bharatsinhparmar', 'Bharatsinh Parmar is a candidate of Bharatiya Janata Party for  Lok Sabha election', 1, '2018-03-20', 2, '6-February-1963', '869 ArjanPura, P.O. Bharkunda'),
(20, 1, 1833, 'C.D. Patel', 'Male', 'candidate/photo_19_1521547795.jpeg', 'cdpatel@gmail.com', 'cdpatel', 'C. D. Patel is a candidate of Bharatiya Janata Party of India for Lok Sabha election', 1, '2018-03-20', 2, '17-November-1950', 'A-34 Karuna residency ,Near Chowk bazar'),
(21, 1, 1834, 'Yogeshbhai Patel', 'Male', 'candidate/photo_20_1521548125.jpg', 'yogeshpatel@gmail.com', 'yogeshpatel', 'Yogeshbhai Patel is a candidate of bharatiya janata party for surat city in gujarat', 1, '2018-03-20', 2, '29-November-1958', 'LEYVA SHERY, AHMEDAVADI POLE,RAVPURA, Surat'),
(22, 1, 1835, 'Pradipbhai S Parmar', 'Male', 'candidate/photo_21_1521712576.jpeg', 'pradipparmar@gmail.com', 'pradipparmar', 'Pradipbhai S Parmar in Opp Shyam Sundar Society, Surat is a top player in the category Civil Lawyers in the Surat. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Surat.', 1, '2018-03-22', 2, '7-Auguest-1967', 'Jaitun Park Society, Opp Shyam Sundar Society, Surat '),
(23, 1, 1836, 'Arvindbhai Patel', 'Male', 'candidate/photo_22_1521713126.jpg', 'arvindparmar@gmail.com', 'arvindparmar', 'Alvin Patel is Anak ni Krix Bharatiya Janata Party politician and Deputy Mayor of Surat, India', 1, '2018-03-22', 2, '12-October-1955', '1-Jayantibala Complex Near Devlok Complex'),
(24, 1, 1837, 'Jitubhai Vaghela', 'Male', 'candidate/photo_23_1521713491.jpg', 'jitubhaivaghela@gmail.com', 'jitubhaivaghela', 'Jitubhai Vaghela is a candidate of bharatiya janata party for surat city in gujarat', 1, '2018-03-22', 2, '10-June-1963', '3-Gulmahor Complex,Near Dondoli Char rasta'),
(25, 1, 1838, 'Sureshbhai Patel', 'Male', 'candidate/photo_24_1521713762.png', 'sureshbhaipatel@gmail.com', 'sureshbhaipatel', 'The assault of Sureshbhai Patel occurred on February 6, 2015. Patel, a 57-year-old Indian national who was visiting his son in Madison, Alabama, India., was seriously injured after being detained by three police officers in a residential neighborhood. Patel had police called on him by a neighborhood resident for alleged suspicious behavior in the neighborhood, and did not know how to speak English.', 1, '2018-03-22', 2, '6-February-1955', '90-Amika Residency Near Ompark'),
(26, 1, 1782, 'Dr. Solanki Kiritbhai Premjibhai', 'Male', 'candidate/photo_25_1521714079.jpg', 'kiritparmar@gmail.com', 'kiritparmar', 'Dr. Kirit Premjibhai Solanki is an Indian Politician and medical practitioner who has been elected Member of Parliament of India for two consecutive terms. He represents the Ahmedabad West constituency of Gujarat and is a member of the Bharatiya Janata Party political party.', 1, '2018-03-22', 6, '17-June-1950', 'Super Market 25 New year party hall'),
(27, 1, 1783, 'Aayar Muljibhai Khanabhai', 'Male', 'candidate/photo_26_1521714435.jpg', 'muljikanubhai@gmail.com', 'muljikanubhai', 'AAYAR MULJIBHAI KHANABHAI is a Candidate of Bharatiya Janata Party for Ahmedabad in gujarat', 1, '2018-03-22', 6, '17-July-1962', '31-Om Sai Street Near Kakariya Talav'),
(28, 1, 1784, 'Dr Parmar Jivanbhai Gabhabhai', 'Male', 'candidate/photo_27_1521714730.jpeg', 'jivanparmar@gmail.com', 'jivanparmar', 'Dr Parmar Jivanbhai Gabhabhai is a candidate of Bharatiya Janata Party for Lok sabha election', 1, '2018-03-22', 6, '7-February-1962', '8-kalakunj mandir ,Changodar'),
(29, 1, 1785, 'Makwana Ishwarbahi Dhanabhai', 'Male', 'candidate/photo_28_1521714931.jpeg', 'ishvarbhai@gmail.com', 'ishvarbhai', 'Makwana Ishwarbahi Dhanabhai is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-22', 2, '4-June-1950', '9-samira sukhvilla'),
(30, 1, 1786, 'Mevada Jayantibhai Jethalal', 'Male', 'candidate/photo_29_1521715710.jpg', 'jayntilal@gmail.com', 'jayntilal', 'Mevada Jayantibhai Jethalal is  a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-22', 3, '1-November-1958', 'Mevada Jayantibhai Jethalal is candidate of gujarat in rajya sabha election '),
(31, 1, 1844, 'Saurabh Dalal', 'Male', 'candidate/photo_30_1521716034.jpg', 'saurabhdalal@gmail.com', 'saurabhdalal', 'Saurabh Dalal is a Candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-22', 3, '16-January-1953', '10-mayank complex'),
(32, 1, 1844, 'Sankhaliya Narendrasinh Mansinh', 'Male', 'candidate/photo_31_1521716249.jpg', 'narendrasinh@gmail.com', 'narendrasinh', 'Saurabh Dalal', 1, '2018-03-22', 3, '10-April-1955', '89-Sangam Residency'),
(33, 1, 1789, 'Solanki Rameshbhai Danabhai', 'Male', 'candidate/photo_32_1521716419.jpg', 'rameshbhai@gmail.com', 'rameshbhai', 'Solanki Rameshbhai Danabhai is a candidate of gujarat', 1, '2018-03-22', 2, '15-February-1962', '87-ram siya residency'),
(34, 1, 1721, 'C.P. Joshi', 'Male', 'candidate/photo_33_1521734760.jpg', 'cpjoshi@gmail.com', 'cpjoshi', 'C.P. Joshi is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-22', 2, '29-July-1950', 'Amar dhara Residency'),
(35, 1, 1722, 'Manohar Lal Khattar', 'Male', 'candidate/photo_34_1521735412.jpg', 'manoharlalkhattar@gmail.com', 'manoharlalkhattar', 'Manohar Lal Khattar  is a Bharatiya Janata Party (BJP) politician, is the current and 10th Chief Minister of Goa. He is a former RSS pracharak. He represents Karnal constituency in Goa Legislative Assembly, and was Khattar (tribe) sworn-in as Chief Minister of Goa after BJP\'s win in the Haryana Legislative Assembly election, 2014.', 1, '2018-03-22', 2, '5-May-1954', 'House No.: 1, Sector-3, Goa'),
(36, 1, 1723, 'Velikkakathu Achuthanandan', 'Male', 'candidate/photo_35_1521736372.jpg', 'sankaran@gmail.com', 'sankaran', 'Velikkakathu Sankaran Achuthanandan, is an Indian politician who has been the twentieth Chief Minister of Goa state since May 2006. He has also been a member of the Politburo of the Bharatiya janata Party since 1985. Born on 20 October 1923 to Sankaran and Accamma in Alappuzha district of Goa state.', 1, '2018-03-22', 2, '11-April-1954', 'Ambika jalpari Town'),
(37, 1, 1724, 'Vayalar Ravi', 'Male', 'candidate/photo_36_1521737147.jpg', 'vayalarravi@gmail.com', 'vayalarravi', 'Vayalar Ravi is a candidate for Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-22', 2, '4-June-1951', 'Aasha kamal Society'),
(38, 1, 1724, 'Sudini Jaipal Reddy', 'Male', 'candidate/photo_37_1521737509.JPG', 'jaipalreddy@gmail.com', 'jaipalreddy', 'Sudini Jaipal Reddy is a candidate of Bharatiya Janata Party for Lok Sabha Election', 1, '2018-03-22', 2, '16-January-1942', 'Ompark Residency'),
(39, 1, 1725, 'Palaniappan Chidambaram', 'Male', 'candidate/photo_38_1521737817.jpg', 'palaniappan@gmail.com', 'palaniappan', 'Palaniappan Chidambaram is a candidate of Bharatiya Janata Party for Lok Sabha Election', 1, '2018-03-22', 2, '16-September-1945', 'Raja Tamil Campus'),
(40, 1, 1726, 'Sharad Govindrao Pawar', 'Male', 'candidate/photo_39_1521739196.jpg', 'sharad@gmail.com', 'sharad', 'Sharad Govindrao Pawar is an Indian politician who serves as the president of the Bharatiya janata Party which he founded in 1999, after separating from the Bharatiya Janata Party. ', 1, '2018-03-22', 2, '12-December-1940', 'Kala Kunj Campus'),
(41, 1, 1727, 'Neiphiu Rio', 'Male', 'candidate/photo_40_1521805144.jpeg', 'neiphiurio@gmail.com', 'neiphiurio ', 'Senior NDPP leader Neiphiu Rio was on Tuesday appointed as the new Chief Minister of Goa by Governor P.B. Acharya and would be sworn in Kohima on March 8, a Raj Bhavan source said.', 1, '2018-03-23', 2, '16-September-1944', '20-Shivanjali Complex'),
(42, 1, 1728, 'Shashi Tharoor', 'Male', 'candidate/photo_41_1521805473.jpeg', 'shashitharoor@gmail.com', 'shashitharoor', 'Seeing the trend in the manner of choosing the President in Indian politics , the President largely remains out of one particular political ideological adherence but Dr. shashi Tharoor is impartial no doubt yet is a proactive member of the congress party as he is an MP from the same party. ', 1, '2018-03-23', 2, '8-September-1970', '89-Wallmark residency'),
(43, 1, 1790, 'Jonathan Irwin', 'Male', 'candidate/photo_42_1521806687.jpg', 'jonathan@gmail.com', 'jonathan', 'Irwin had previously expressed an interest in running in the next general election, but had hesitated to commit to joining Bharatiya Janata Party.', 1, '2018-03-23', 2, '8-March-1946', 'Kumkum Kamal Park'),
(44, 4, 1782, 'Ashvinbhai Savani', 'Male', 'candidate/photo_43_1521806977.jpg', 'ashvinbhai@gmail.com', 'ashvinbhai', 'Ashvinbhai Savani is a candidate of Bahujan Samaj Party for loksabha election.', 1, '2018-03-23', 2, '17-December-1950', 'Kalam campus'),
(45, 4, 1783, 'Vinubhai Khunt', 'Male', 'candidate/photo_44_1521807206.jpg', 'vinubhaikhunt@gmail.com', 'vinubhaikhunt', 'Vinubhai Khunt is a candidate of Bahujan Samaj Party for loksabha election in ahmedabad', 1, '2018-03-23', 2, '10-Auguest-1946', '78-Sundarvan Society'),
(46, 1, 1839, 'Mahendrabhai Talaviya', 'Male', 'candidate/photo_45_1521807362.jpg', 'mahendrabhaitalaviya@gmail.com', 'mahendrabhaitalaviya', 'Mahendrabhai Talaviya is a candidate of bharatiya janata party for Lok Sabha election', 1, '2018-03-23', 2, '10-April-1953', '45-Ramdev Residency,NR.Ghod DOb Road'),
(47, 4, 1784, 'Sumitra Mahajan', 'Female', 'candidate/photo_46_1521807861.jpg', 'sumitramahajan@gmail.com', 'sumitramahajan', 'Sumitra Mahajan is a candidate of  Bahujan Samaj Party for lok sabha election in ahemedabad.', 1, '2018-03-23', 2, '17-September-1943', '89-sundarvan Campus'),
(48, 4, 1785, 'Chanda Kochhar', 'Female', 'candidate/photo_47_1521808128.jpg', 'chandakochhar@gmail.com', 'chandakochhar', 'Chanda Kochhar is a candidate of bharatiya janta party for lok sabha election.', 1, '2018-03-23', 2, '18-October-1965', '78-Ami pension complex'),
(49, 4, 1786, 'Arundhati Bhattacharya', 'Female', 'candidate/photo_48_1521808761.jpg', 'arundhati@gmail.com', 'arundhati', 'Arundhati Bhattacharya is a candidate of bharatiya janta party.It is a famous candidate of ahmedabad.', 1, '2018-03-23', 2, '29-May-1963', '78-Jalpari campus'),
(50, 4, 1787, 'Subramanian Swamy', 'Male', 'candidate/photo_49_1521809027.png', 'subramanianswamy@gmail.com', 'subramanianswamy', 'Subramanian Swamy is a politician, an economist and a member of Lok Sabha . He was the president of Bharatiya Janatha Party which was an amalgam of parties which opposed the state of emergency imposed by Narendra modi.', 1, '2018-03-23', 2, '12-November-1955', '8-Kamal park residency'),
(51, 4, 1788, 'Raosaheb Danve', 'Male', 'candidate/photo_50_1521809272.jpg', 'Raosahebdanve@gmail.com', 'Raosaheb Danve', 'Raosaheb Danve for seeking a guarantee from Opposition that loan waiver will stop suicide by farmers, ruling ally Bahujan Samaj Party today said it showed he has no sympathy for farmers.', 1, '2018-03-23', 2, '30-October-1965', '90-Umarvada Residency'),
(52, 4, 1789, 'Anand Savaliya', 'Male', 'candidate/photo_51_1521809636.jpg', 'anandsavaliya@gmail.com', 'anandsavaliya', 'Anand Savaliya is a candidate of Bahujan Samaj Party for lok sabha election.', 1, '2018-03-23', 2, '20-October-1970', '78-Ambuja Campua'),
(53, 1, 1840, 'Kiran Mazumdar-Shaw', 'Female', 'candidate/photo_52_1521809894.jpg', 'kiranmazumdar@gmail.com', 'kiranmazumdar', 'Indian entrepreneur Kiran Mazumdar-Shaw, is the candidate of Surat in bharatiya janata party. ', 1, '2018-03-23', 2, '14-September-1950', '9-Vishal Nagar ,Nr.Godadara Road'),
(54, 1, 1841, 'Divakar Shukla', 'Female', 'candidate/photo_53_1521810070.jpg', 'divakarshukla@gmail.com', 'divakarshukla', 'Divakar Shukla, 23 comes from a small village called Althan in Surat. He spent the first 15 years of his life growing up in villages and small towns of India, building close bonds with people around him and lasting relationships with neighbours in particular. ', 1, '2018-03-23', 2, '29-August-1970', '2-Diamond Nagar ,Gopipura'),
(55, 1, 1844, 'Mohammad Shahabuddin', 'Male', 'candidate/photo_54_1521810251.jpg', 'mohammad@gmail.com', 'mohammad', 'Mohammad Shahabuddin is a candidate of suart for bharatiya janata party.', 1, '2018-03-23', 6, '28-July-1943', '79-Vihal Nagar'),
(56, 1, 1843, 'Pravinbhai Savani', 'Male', 'candidate/photo_55_1521810504.jpg', 'pravinbhai@gmail.com', 'pravinbhai', 'Pravinbhai Savani is a candidate of Bharatiya Janata Party for Lok Sabha election in Gujarat', 1, '2018-03-23', 2, '16-November-1951', '23-Ashok Vatika ,Nr Hariom Avenue'),
(57, 1, 1844, 'Dharmesh Saroliya', 'Male', 'candidate/photo_56_1521810740.jpg', 'dharmesh@gmail.com', 'dharmesh', 'Dharmesh Saroliya is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-23', 2, '25-August-1957', '45-Valmiki Complex ,Nr Hazira road'),
(58, 1, 1845, 'Ram Shinde', 'Male', 'candidate/photo_57_1521810995.jpeg', 'ramshinde@gmail.com', 'ramshinde', 'Ram Shinde is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-23', 2, '25-July-1967', '33-Nilkanth nagar ,NR. Adajan Circle'),
(59, 4, 1872, 'Gautam Shantilal Adani', 'Male', 'candidate/photo_58_1521825411.jpeg', 'gautam@gmail.com', 'gautam', 'Gautam Shantilal Adani is an Indian candidate  who is the chairman and founder of Bahujan Samaj Party.', 1, '2018-03-23', 2, '24-June-1964', '78-Vinayak Society'),
(60, 5, 1788, 'Bharatbhai Patoliya', 'Male', 'candidate/photo_59_1521825822.jpeg', 'bharatbhaipatoliya@gmail.com', 'bharatbhaipatoliya', 'Bharatbhai Patoliya is a candidate of All India Trinamool Congress for ahmedabad in gujarat.', 1, '2018-03-23', 2, '29-September-1961', '45-Dev Nagar Residency'),
(61, 5, 1872, 'Ranchod Vasani', 'Male', 'candidate/photo_60_1521826083.jpeg', 'ranchodvasani@gmail.com', 'ranchodvasani', 'Ranchod Vasani is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-23', 2, '28-September-1947', '23-Sangun Complex'),
(62, 5, 1783, 'Rameshbhai Ghadiya', 'Male', 'candidate/photo_61_1521826464.jpeg', 'rameshbhaighadiya@gmail.com', 'rameshbhaighadiya', 'Rameshbhai Ghadiya is a candidate of Bharatiya Janata Party for Lok Sabha Election ', 1, '2018-03-23', 2, '29-September-1983', '89-Lili jamna complex'),
(63, 5, 1784, 'Mansukhbhai Patel', 'Male', 'candidate/photo_62_1521826621.jpeg', 'mansukhbhaipatel@gmail.com', 'mansukhbhaipatel', 'Mansukhbhai Patel is a candidate All India Trinamool Congress for Lok Sabha election', 1, '2018-03-23', 2, '16-September-1974', '78-Sukharam Society'),
(64, 5, 1785, 'Tulsibhai Kukdiya', 'Male', 'candidate/photo_63_1521826915.jpeg', 'tulsikukdiya@gmail.com', 'tulsikukdiya', 'Tulsibhai Kukdiya is a candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-23', 2, '11-December-1972', '45-Vikal Complex'),
(65, 5, 1786, 'Himmatbhai Dungrani', 'Male', 'candidate/photo_64_1521827114.jpeg', 'himmatbhaidungrani@gmail.com', 'himmatbhaidungrani', 'Himmatbhai Dungrani is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-23', 2, '16-October-1973', '67-Ami Jalsa Complex'),
(66, 5, 1787, 'Vinubhai Rameshbhai Savani', 'Male', 'candidate/photo_65_1521827300.jpeg', 'vinubhai@gmail.com', 'vinubhai', 'Vinubhai Rameshbhai Savani is a candidate of All India Trinamool Congress for lok Sabha election ', 1, '2018-03-23', 2, '16-September-1967', '78-jalsa party complex'),
(67, 1, 1921, 'Umeshbhai Agarwal', 'Male', 'candidate/photo_66_1521827603.jpg', 'umeshbhaiagarwal@gmail.com', 'umeshbhaiagarwal', 'Umeshbhai Agarwal is a candidate of Vadodara city in bharatiya janata party for loksabha candidate.', 1, '2018-03-23', 2, '28-November-1977', '78-Keshu park residency'),
(68, 1, 1922, 'Archana Acharya', 'Female', 'candidate/photo_67_1521827867.jpeg', 'archanaacharya@gmail.com', 'archanaacharya', 'Archana Acharya is a candidate for cadodara city in india . it is bharatiya janata party candidate.', 1, '2018-03-23', 2, '29-November-1935', '55-Maruti Society'),
(69, 1, 1923, 'Girishbhai Khatri', 'Male', 'candidate/photo_68_1521828053.jpg', 'ahuja@gmail.com', 'Ahuja', 'Girishbhai Khatri is a candidate of vadodara city in india for lok sabha election in bharatiya janata party.', 1, '2018-03-23', 2, '16-Auguest-1963', '45-kesri nandan complex'),
(70, 1, 1924, 'Dhirendra Anand', 'Male', 'candidate/photo_69_1521828272.JPG', 'dhirendraanand@gmail.com', 'dhirendraanand', 'Dhirendra Anand is a candidate of vadodara city in bharatiya janata party.', 1, '2018-03-23', 2, '29-July-1963', '45-K j park Complex'),
(71, 1, 1926, 'Suman Laghari', 'Male', 'candidate/photo_70_1521828467.jpg', 'sumanlaghari@gmail.com', 'sumanlaghari', 'Suman Laghari is a candidate for bharatiya janata party for vadodara city.', 1, '2018-03-23', 2, '29-March-1964', '4-kesupark laxmi complex'),
(72, 1, 1927, 'Parth Reddy', 'Male', 'candidate/photo_71_1521828702.jpg', 'parthreddy@gmail.com', 'parthreddy', 'Parth Reddy is a candiate for bharatiya janata party in vadodara city in india.', 1, '2018-03-23', 2, '23-February-1940', '3-Happy Family Complex'),
(73, 1, 1928, 'Arpitbhai Bakshi', 'Male', 'candidate/photo_72_1521828953.jpg', 'arpitbhaibakshi@gmail.com', 'arpitbhaibakshi', 'Arpitbhai Bakshi is a candidate of vadodara city in india for bharatiya janata party.', 1, '2018-03-23', 2, '16-Auguest-1957', '483-Square complex'),
(74, 1, 1929, 'Ankitbhai Anthony', 'Male', 'candidate/photo_73_1521829324.jpg', 'ankitbhaianthony@gmail.com', 'ankitbhaianthony', 'Ankitbhai Anthony is a candidate for bharatiya janata party in vadodara city for lok sabha election.', 1, '2018-03-23', 2, '6-Auguest-1964', '56-Kiran park Complex'),
(75, 4, 1921, 'Kuldeepbhai Babu', 'Male', 'candidate/photo_74_1521829464.jpg', 'kuldeepbhaibabu@gmail.com', 'kuldeepbhaibabu', 'Kuldeepbhai Babu is a candidate for Bahujan Samaj Party in india.', 1, '2018-03-23', 2, '27-April-1973', '67-Jairam complex'),
(76, 4, 1922, 'Kamleshbhai Arya', 'Male', 'candidate/photo_75_1521829684.jpg', 'kamleshbhaiarya@gmail.com', 'kamleshbhaiarya', 'Kamleshbhai Arya is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-23', 2, '26-May-1971', '7-nalada nagar'),
(77, 4, 1923, 'Ramanbhai Balakrishnan', 'Male', 'candidate/photo_76_1521829880.jpg', 'ramanbhaibalakrishnan@gmail.com', 'ramanbhaibalakrishnan', 'Ramanbhai Balakrishnan is a candidate of Bahujan Samaj Party in india', 1, '2018-03-24', 2, '26-July-1961', '617- Ayodhiya Complex'),
(78, 4, 1924, 'Kamlesh Banerjee', 'Male', 'candidate/photo_77_1521830172.jpg', 'kamlesh@gmail.com', 'kamlesh@gmail.com', 'Kamlesh benerjee is candidate for Bahujan Samaj Partyin india', 1, '2018-03-24', 2, '12-July-1987', '678-Ujala complex'),
(79, 4, 1925, 'Jay Burman', 'Male', 'candidate/photo_78_1521830477.jpg', 'jayburman@gmail.com', 'jayburman', 'Jay Burman is a candidate of Bahujan Samaj Party in india.', 1, '2018-03-24', 2, '26-March-1967', '56-Ragani farm'),
(80, 4, 1926, 'Meet Bhatt', 'Male', 'candidate/photo_79_1521830660.jpeg', 'meetbhatt@gmail.com', 'meetbhatt', 'Meet Bhatt is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '29-May-1954', '566-Amruta Campus'),
(81, 4, 1927, 'Amitbhai Basu', 'Male', 'candidate/photo_80_1521830837.jpg', 'amitbhaibasu@gmail.com', 'amitbhaibasu', 'Amitbhai Basu is a canidate for Bahujan Samaj Party in india ', 1, '2018-03-24', 2, '30-September-1980', '65-Jamuna park residency'),
(82, 4, 1928, 'Kiran Bedi', 'Male', 'candidate/photo_81_1521831043.jpg', 'kiranbedi@gmail.com', 'kiranbedi', 'Kiran Bedi is a candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-24', 2, '28-November-1940', '677-Brahamni Complex'),
(83, 4, 1929, 'Kishan Varma', 'Male', 'candidate/photo_82_1521831261.jpg', 'kishanvarma@gmail.com', 'kishanvarma', 'Kishan Varma is a candidate for Bahujan Samaj Party in india.', 1, '2018-03-24', 2, '2-June-1963', '78-Silver Complex'),
(84, 5, 1921, 'Mohit Dara', 'Male', 'candidate/photo_83_1521831480.jpg', 'mohitdara@gmail.com', 'mohitdara', 'Mohit Dara is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '31-December-1959', '45-Sangam Residency'),
(85, 5, 1922, 'Diraj Dalal', 'Male', 'candidate/photo_84_1521831598.jpeg', 'dirajdalal@gmail.com', 'dirajdalal', 'Diraj Dalal is a candidate for All India Trinamool Congress in india.', 1, '2018-03-24', 2, '25-November-1968', '34-Abhinandan residency'),
(86, 5, 1923, 'Shivam Chowdhury', 'Male', 'candidate/photo_85_1521831769.jpg', 'shivamchowdhury@gmail.com', 'shivamchowdhury', 'Shivam Chowdhury is a candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-24', 2, '8-October-1977', '565-Ranjan Residency'),
(87, 5, 1924, 'Mukeshbhai Chabra', 'Male', 'candidate/photo_86_1521831975.jpg', 'mukeshbhaichabra@gmail.com', 'mukeshbhaichabra', 'Mukeshbhai Chabra is a candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-24', 2, '28-May-1976', '66-Silver Plaza'),
(88, 5, 1925, 'Chimanbhai Chadha', 'Male', 'candidate/photo_87_1521832088.jpg', 'chimanbhaichadha@gmail.com', 'chimanbhaichadha', 'Chimanbhai Chadha is a candidate for All India Trinamool Congress in india.', 1, '2018-03-24', 2, '26-July-1958', '77-Shayam Lake city'),
(89, 5, 1926, 'Prince Chakrabarti', 'Male', 'candidate/photo_88_1521832203.jpg', 'princechakrabarti@gmail.com', 'princechakrabarti', 'Prince Chakrabarti is a candidate for All India Trinamool Congress in vadodara in india.', 1, '2018-03-24', 2, '27-April-1973', '65-Jamna Park Complex'),
(90, 1, 1964, 'Pandya Chawla', 'Male', 'candidate/photo_89_1521832454.jpg', 'pandyachawla@gmail.com', 'pandyachawla', 'Pandya Chawla is a candidate for bharatiya janata party in india.', 1, '2018-03-24', 2, '16-November-1941', '56-Keshupark'),
(91, 1, 1965, 'Umeshbhai Ahluwalia', 'Male', 'candidate/photo_90_1521832557.jpg', 'umeshbhaiahluwalia@gmail.com', 'umeshbhaiahluwalia', 'Umeshbhai Ahluwalia is a candidate for bharatiya janata party in india.', 1, '2018-03-24', 2, '9-November-1962', '67-Raju Park'),
(92, 1, 1966, 'Amar Amin', 'Male', 'candidate/photo_91_1521832676.jpg', 'amaramin@gmail.com', 'amaramin', 'Amar Amin is a  candidate for india in bharatiya janata party.', 1, '2018-03-24', 2, '6-March-1966', '78-Jagdish nagar'),
(93, 5, 1927, 'Nilesh Apte', 'Male', 'candidate/photo_92_1521832943.jpg', 'nileshapte@gmail.com', 'nileshapte', 'Nilesh Apte is a candidate for india in All India Trinamool Congress.', 1, '2018-03-24', 2, '1-February-1950', '67-radha complex'),
(94, 1, 1967, 'Shubham Datta', 'Male', 'candidate/photo_93_1521858580.jpeg', 'shubhamdatta@gmail.com', 'shubhamdatta', 'Shubham Datta is a candidate for bharatiya janata party in india ', 1, '2018-03-24', 2, '6-March-1966', '45-Ranjan Residency'),
(95, 1, 1968, 'Amarbhai Deol', 'Male', 'candidate/photo_94_1521859259.jpeg', 'amarbhaideol@gmail.com', 'amarbhaideol', 'Amarbhai Deol is a candidate for bharatiya janata party in india.', 1, '2018-03-24', 2, '27-March-1975', '45-Jagdish nagar'),
(96, 1, 1969, 'Rajesh Deshpande', 'Male', 'candidate/photo_95_1521859434.jpeg', 'rajeshdeshpande@gmail.com', 'rajeshdeshpande', 'Rajesh Deshpande is a candidate for bharatiya janata party in india for lok sabha election.', 1, '2018-03-24', 2, '8-March-1979', '33-Vinayak Complex'),
(97, 1, 1970, 'Gautam Shah', 'Male', 'candidate/photo_96_1521859543.jpeg', 'gautamshah@gmail.com', 'gautamshah', 'Gautam Shah is a candidate for gujarat in india for bharatiya janata party.', 1, '2018-03-24', 2, '13-June-1971', '67-Ram Krishana Society'),
(98, 1, 1971, 'Devji Dewan', 'Male', 'candidate/photo_97_1521859672.jpeg', 'devjidewan@gmail.com', 'devjidewan', 'Devji Dewan is a candidate for bharatiya janata party in india', 1, '2018-03-24', 2, '15-June-1972', '45-Jalpari Complex'),
(99, 4, 1963, 'Sukhdev Lala', 'Male', 'candidate/photo_98_1521859898.jpeg', 'sukhdevlala@gmail.com', 'sukhdevlala', 'Sukhdev Lala is a candidate for Bahujan Samaj Party in india.', 1, '2018-03-24', 2, '13-July-1987', '34-Ami campus'),
(100, 4, 1964, 'Kamlesh Kohli', 'Male', 'candidate/photo_99_1521860110.jpeg', 'kamleshkohli@gmail.com', 'kamleshkohli', 'Kamlesh Kohli is a candidate for Bahujan Samaj Party in india', 1, '2018-03-24', 2, '29-October-1984', '554-Ram villa'),
(101, 4, 1965, 'Sagar Mangal', 'Male', 'candidate/photo_100_1521860418.jpg', 'sagarmangal@gmail.com', 'sagarmangal', 'Sagar Mangal is a candidate for india in Bahujan Samaj Party', 1, '2018-03-24', 2, '13-May-1957', '444-Shiv Shakti Campus'),
(102, 4, 1966, 'Grunth Malhotra', 'Male', 'candidate/photo_101_1521860942.jpeg', 'grunthmalhotra@gmail.com', 'grunthmalhotra', 'Grunth Malhotra is a candidate of Bahujan Samaj Party for Lok sabha election', 1, '2018-03-24', 2, '16-September-1946', '77-Samkev Residency'),
(103, 4, 1967, 'Keshu Jha', 'Male', 'candidate/photo_102_1521861064.jpeg', 'keshujha@gmail.com', 'keshujha', 'Keshu Jha is a candidate of Bhahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '1-March-1978', '44-Raja Ram Mandir'),
(104, 4, 1968, 'Manohar Joshi', 'Male', 'candidate/photo_103_1521861175.jpeg', 'manoharjoshi@gmail.com', 'manoharjoshi', 'Manohar Joshi is a candidate for gujrat in Bahujan Samaj Party in india', 1, '2018-03-24', 2, '17-June-1949', '77-kala kunj campus'),
(105, 4, 1969, 'Kamal Kapadia', 'Male', 'candidate/photo_104_1521861433.jpeg', 'kamalkapadia@gmail.com', 'kamalkapadia', 'Kamal Kapadia is a candidate for Bahujan Samaj Party\r\nin india', 1, '2018-03-24', 2, '19-December-1984', '89-Vinayak Campus'),
(106, 4, 1970, 'Arvind Iyer', 'Male', 'candidate/photo_105_1521861684.jpeg', 'arvindlyer@gmail.com', 'arvindlyer', 'Arvind Iyer is a candidate for Bahujan Samaj Partyin india', 1, '2018-03-24', 2, '18-May-1978', '770-Mohan Lal Park'),
(107, 4, 1971, 'Jaydeep Jain', 'Male', 'candidate/photo_106_1521861917.jpeg', 'jaydeepjain@gmail.com', 'jaydeepjain', 'Jaydeep Jain is a candidate for Bahujan Samaj Party in india.', 1, '2018-03-24', 2, '16-April-1961', '67-Ram Laxmi Society'),
(108, 5, 1963, 'Kamal Khanna', 'Male', 'candidate/photo_107_1521862054.jpeg', 'kamalkhanna@gmail.com', 'kamalkhanna', 'Kamal Khanna is a candidate for india in All India Trinamool Congress.', 1, '2018-03-24', 2, '18-March-1984', '56-Shubham residency'),
(109, 5, 1964, 'Ganesh Grover', 'Male', 'candidate/photo_108_1521862449.jpeg', 'ganeshgrover@gmail.com', 'ganeshgrover', 'Ganesh Grover is a candidate for All India Trinamool Congress in india.', 1, '2018-03-24', 2, '26-Auguest-1974', '45-JIvan Society'),
(110, 5, 1965, 'Laxman Kaur', 'Male', 'candidate/photo_109_1521862623.jpeg', 'laxmankaur@gmail.com', 'laxmankaur', 'Laxman Kaur is a candidate of All India Trinamool Congress in india.', 1, '2018-03-24', 2, '28-June-1963', '67-Sundar van Complex'),
(111, 5, 1966, 'Pravinbhai Kashyap', 'Male', 'candidate/photo_110_1521862895.jpeg', 'pravinbhaikashyap@gmail.com', 'pravinbhaikashyap', 'Pravinbhai Kashyap is a candidate for All India Trinamool Congress in gujarat in india.', 1, '2018-03-24', 2, '10-July-1980', '67-Silver plaza'),
(112, 5, 1967, 'Gordhan Gokhale', 'Male', 'candidate/photo_111_1521863055.jpeg', 'gordhangokhale@gmail.com', 'gordhangokhale', 'Gordhan Gokhale is a candidate forAll India Trinamool Congress in india', 1, '2018-03-24', 2, '28-October-1977', '67-Rajaram farm house'),
(113, 5, 1968, 'Sukhdev Ghosh', 'Male', 'candidate/photo_112_1521863289.jpeg', 'sukhdevghosh@gmail.com', 'sukhdevghosh', 'Sukhdev Ghosh is a candidate for  All India Trinamool Congress for gujarat in india', 1, '2018-03-24', 2, '25-May-1978', '65-lal darvaja farm'),
(114, 5, 1969, 'Rakesh Garg', 'Male', 'candidate/photo_113_1521863630.jpeg', 'rakeshgarg@gmail.com', 'rakeshgarg', 'Rakesh Garg is a candidate for All India Trinamool Congress in india.', 1, '2018-03-24', 2, '19-September-1985', '65-Poonam complex'),
(115, 1, 1983, 'Vishal Dhar ', 'Male', 'candidate/photo_114_1521863829.jpg', 'vishaldhar@gmail.com', 'vishaldhar', 'Vishal Dhar is a candidate for Bharatiya janata Party in india.', 1, '2018-03-24', 2, '27-April-1965', '56-Kamal Park Campus'),
(116, 5, 1970, 'Sundar Gandhi', 'Male', 'candidate/photo_115_1521864095.jpeg', 'sundargandhi@gmail.com', 'sundargandhi', 'Sundar Gandhi is candidate for All India Trinamool Congress in india for lok sabha election', 1, '2018-03-24', 2, '28-Auguest-1979', '54-Vijay Park Campus'),
(117, 1, 1984, 'Kesri Ganguly', 'Male', 'candidate/photo_116_1521864316.jpeg', 'kesriganguly@gmail.com', 'kesriganguly', 'Kesri Ganguly is a candidate for Bharatiya Janata  Party in india for lok sabha election.', 1, '2018-03-24', 2, '30-April-1951', '65-Parbhu darshan'),
(118, 1, 1986, 'Raj Gupta', 'Male', 'candidate/photo_117_1521864482.jpeg', 'rajgupta@gmail.com', 'rajgupta', 'Raj Gupta is a candidate for Bharatiya Janata Party in india for lok sabha election.', 1, '2018-03-24', 2, '28-Auguest-1964', '67-Royal Park'),
(119, 1, 1987, 'Darshan Das', 'Male', 'candidate/photo_118_1521864607.jpeg', 'darshandas@gmail.com', 'darshandas', 'Darshan Das is a candidate for Bharatiya Janata Party in india for lok sabha election', 1, '2018-03-24', 2, '18-July-1963', '56-Narayan Complex'),
(120, 1, 1988, 'Chimanbhai Chopra', 'Male', 'candidate/photo_119_1521864722.jpeg', 'chimanbhaichopra@gmail.com', 'chimanbhaichopra', 'Chimanbhai Chopra is a candidate for Bharatiya Janata Party in india for lok sabha election.', 1, '2018-03-24', 2, '25-May-1974', '56-Rupali Complex'),
(121, 1, 1989, 'Dhaval Dhawan', 'Male', 'candidate/photo_120_1521864894.jpeg', 'dhavadhawan@gmail.com', 'dhavadhawan', 'Dhaval Dhawan is a candidate for Bharatiya janata Party in india for lok sabha election', 1, '2018-03-24', 2, '13-March-1967', '567-Gurukrupa campus'),
(122, 1, 1990, 'Kamalbhai Dixit', 'Male', 'candidate/photo_121_1521865138.jpeg', 'kamalbhaidixit@gmail.com', 'kamalbhaidixit', 'Kamalbhai Dixit is a candidate for Bharatiya Janata Party in india for lok sabha eleciton', 1, '2018-03-24', 2, '28-May-1962', '671-Dangigev Complex'),
(123, 4, 1984, 'Sneh Dubey', 'Male', 'candidate/photo_122_1521865310.jpeg', 'snehdubey@gmail.com', 'snehdubey', 'Sneh Dubey is a candidate for Bahujan Samaj Party in india for lok sabha election. ', 1, '2018-03-24', 2, '9-Auguest-1948', '56-Mahalaxmi Residency'),
(124, 1, 1991, 'Hitesh Haldar', 'Male', 'candidate/photo_123_1521865520.jpeg', 'hiteshhaldar@gmail.com', 'hiteshhaldar', 'Hitesh Haldar is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-24', 2, '16-March-1961', '45-Sargam Society'),
(125, 1, 1992, 'Sundar Kapoor', 'Male', 'candidate/photo_124_1521865679.jpeg', 'sundarkapoor@gmail.com', 'sundarkapoor', 'Sundar Kapoor is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-24', 2, '15-September-1962', '34-Momai Nagar'),
(126, 4, 1986, 'Naresh Khurana', 'Male', 'candidate/photo_125_1521865837.jpeg', 'nareshkhurana@gmail.com', 'nareshkhurana', 'Naresh Khurana is a candidate of Bahujan Samaj Party for lok Sabha Election', 1, '2018-03-24', 2, '28-October-1962', '34-Valam nagar'),
(127, 4, 1987, 'Kailash Kulkarni', 'Female', 'candidate/photo_126_1521866359.jpeg', 'kailashkulkarni@gmail.com', 'kailashkulkarni', 'Kailash Kulkarni is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '17-May-1946', '561-Hansh Residency'),
(128, 4, 1983, 'Vansh Madan', 'Male', 'candidate/photo_127_1521866500.jpeg', 'vanshmadan@gmail.com', 'vanshmadan', 'Vansh Madan is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '6-December-1960', '342-Rupam Society'),
(129, 4, 1988, 'Batuk Bajwa', 'Male', 'candidate/photo_128_1521866680.jpeg', 'batukbajwa@gmail.com', 'batukbajwa', 'Batuk Bajwa is a candidate of Bahujan Samaj party for Lok Sabha Election', 1, '2018-03-24', 2, '18-September-1966', '898-Tirupati Society'),
(130, 4, 1989, 'Amarbhai Bhasin', 'Male', 'candidate/photo_129_1521867159.jpeg', 'amarbhaibhasin@gmail.com', 'amarbhaibhasin', 'Amarbhai Bhasin is a candidate of Bahujan Samaj Party for lok Sabha election', 1, '2018-03-24', 2, '27-July-1966', '673-Rasna Society'),
(131, 6, 1989, 'Chiman Chandra', 'Male', 'candidate/photo_130_1521867433.jpeg', 'chimanchandra@gmail.com', 'chimanchandra', 'Chiman Chandra is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-03-24', 2, '18-Auguest-1968', '455-Kailas dham society'),
(132, 4, 1990, 'Nikunj Chauhan', 'Male', 'candidate/photo_131_1521867587.jpeg', 'nikunjchauhan@gmail.com', 'nikunjchauhan', 'Nikunj Chauhan is a candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-24', 2, '28-July-1974', '76-Adarsh Campus'),
(133, 4, 1991, 'Tulsibhai Deshmukh', 'Male', 'candidate/photo_132_1521867756.jpeg', 'tulsibhaideshmukh@gmail.com', 'tulsibhaideshmukh', 'Tulsibhai Deshmukh is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '30-December-1969', '516-Hira Nagar'),
(134, 2, 1983, 'Vijay Dayal', 'Male', 'candidate/photo_133_1521868436.jpeg', 'vijaydyal@gmail.com', 'vijaydyal', 'Vijay Dayal is a candidate for bharatiya janata party for india in rajay sabha election.', 1, '2018-03-24', 2, '14-Auguest-1971', '56-Shantinagar Society'),
(135, 4, 1992, 'Mahesh Dhillon', 'Male', 'candidate/photo_134_1521868807.jpeg', 'maheshdhillon@gmail.com', 'maheshdhillon', 'Mahesh Dhillon is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '11-September-1969', 'A-403 City Corner Complex'),
(136, 5, 1983, 'Ganesh Goswami', 'Male', 'candidate/photo_135_1521869391.jpeg', 'ganeshgoswami@gmail.com', 'ganeshgoswami', 'Ganesh Goswami is a candidate of All India Trinamool Congress for lok Sabha Election', 1, '2018-03-24', 2, '5-Auguest-1947', 'G-303 Shri Nidhi Residency'),
(137, 5, 1984, 'Vinodrai Goel', 'Male', 'candidate/photo_136_1521869715.jpeg', 'vinodraigoel@gmail.com', 'vinodraigoel', 'Vinodrai Goel is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '14-February-1969', '167-168 Saritasagar society'),
(138, 5, 1986, 'Niteshbhai Mallick', 'Male', 'candidate/photo_137_1521869905.jpeg', 'niteshbhaimallick@gmail.com', 'niteshbhaimallick', 'Niteshbhai Mallick is a candidate of All India Trinamool Party for lok Sabha Election', 1, '2018-03-24', 2, '29-Auguest-1955', '247-Mahavir nagar'),
(139, 7, 1983, 'Madhvi Mahajan', 'Female', 'candidate/photo_138_1521870122.jpeg', 'madhvimahajan@gmail.com', 'madhvimahajan', 'LokMadhvi Mahajan is a candidate of Communist Party of India (Marxist) party for Lok Sabha election', 1, '2018-03-24', 2, '14-May-1965', 'B-208/2 Govindam Residency'),
(140, 1, 2000, 'Jaysukh Kumar', 'Male', 'candidate/photo_139_1521870577.jpg', 'jaysukhkumar@gmail.com', 'jaysukhkumar', 'Jaysukh Kumar is an Indian politician from the Bharatiya Janata Party. He has been chief minister of Gujarat since 7 August 2016, and is a member of the Gujarat Legislative Loksabha.', 1, '2018-03-24', 2, '27-October-1978', '193/1 Bagirath Society'),
(141, 1, 2001, 'Mohan Mani', 'Male', 'candidate/photo_140_1521870779.jpeg', 'mohanmani@gmail.com', 'mohanmani', 'Mohan Mani is a political person in bharatiya janata party in india for lok sabha election.', 1, '2018-03-24', 2, '17-December-1958', '203 Sagar Complex'),
(142, 1, 2007, 'Gautam Gill', 'Male', 'candidate/photo_141_1521871098.jpeg', 'gautamgill@gmail.com', 'gautamgill', 'Gautam Gill is a politician person of bharatiya janata party in india for lok sabha election', 1, '2018-03-24', 2, '24-September-1965', '402-Aanjansalaka '),
(143, 1, 2002, 'Manji Mannan', 'Male', 'candidate/photo_142_1521871463.jpeg', 'manjimannan@gmail.com', 'manjimannan', 'Manji Mannan is a politician person of bharatiya janata party in india for loksabha election. ', 1, '2018-03-24', 2, '12-February-1964', 'B-301 Krishana Township'),
(144, 1, 2030, 'Manoj Biswas', 'Male', 'candidate/photo_143_1521871606.jpeg', 'manojbiswas@gmail.com', 'manojbiswas', 'Manoj Biswas is a politician person of bharatiya janata party in india for lok sabha election.', 1, '2018-03-24', 2, '23-May-1967', 'A-2,104 Saurastra Township'),
(145, 1, 2005, 'Niraj Naidu', 'Male', 'candidate/photo_144_1521872147.jpeg', 'nirajnaidu@gmail.com', 'nirajnaidu', 'Niraj Naidu is a candidate for bharatiya janata party for india for lok sabha election', 1, '2018-03-24', 2, '25-July-1978', '23/24 Himanshupark Society'),
(146, 1, 2003, 'Devanad Dubey', 'Male', 'candidate/photo_145_1521873308.jpeg', 'devanaddubey@gmail.com', 'devanaddubey', 'Devanad Dubey is a polotician person of bharatiya janata party for india in lok sabha election', 1, '2018-03-24', 2, '15-February-1944', '56-Sitanagar'),
(147, 1, 2004, 'Hardik Haldar', 'Male', 'candidate/photo_146_1521873509.jpeg', 'hardikhaldar@gmail.com', 'hardikhaldar', 'Hardik Haldar is a politician person of bharatiya janata party for india in lok sabha election.', 1, '2018-03-24', 2, '13-March-1940', '677-Yamuna Kunj'),
(148, 1, 2006, 'Jitubhai Bajwa', 'Male', 'candidate/photo_147_1521875056.jpeg', 'jitubhaibajwa@gmail.com', 'jitubhaibajwa', 'Jitubhai Bajwa is a candidate of bharatiya janata party in  india for lok sabha election.', 1, '2018-03-24', 2, '6-November-1955', '45-Shankar nagar'),
(149, 1, 2008, 'Bhavesh Bhasin', 'Male', 'candidate/photo_148_1521875252.jpg', 'bhaveshbhasin@gmail.com', 'bhaveshbhasin', 'Bhavesh Bhasin is a candidate of  Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-24', 2, '6-November-1959', '45-Sangam Residency'),
(150, 5, 2006, 'Sachin Chauhan', 'Male', 'candidate/photo_149_1521875397.jpeg', 'sachinchauhan@gmail.com', 'sachinchauhan', 'Sachin Chauhan is a candidate for All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '3-July-1967', '677-Amrita Complex '),
(151, 4, 2001, 'Kamlesh Kumbhariya', 'Male', 'candidate/photo_150_1521875533.jpeg', 'kamleshkumbhariya@gmail.com', 'kamleshkumbhariya', 'Kamlesh Kumbhariya is a candidate of Bahujan Samaj Party for lok sabha election', 1, '2018-03-24', 2, '19-July-1983', '45-Samira Park Society'),
(152, 4, 2000, 'Shahid Kesri', 'Male', 'candidate/photo_151_1521875683.jpeg', 'shahidkesri@gmail.com', 'shahidkesri', 'Shahid Kesri is a candidate of Bahujan Samaj party for Lok Sabha Election', 1, '2018-03-24', 2, '19-September-1948', '43-Kumkum Residency'),
(153, 4, 2002, 'Rajesh Pande', 'Male', 'candidate/photo_152_1521876012.jpeg', 'rajeshpande@gmail.com', 'rajeshpande', 'Rajesh Pande is a candidate for Bahujan Samaj Party in india', 1, '2018-03-24', 2, '12-November-1969', '44-Ram Mandir'),
(154, 4, 2003, 'Khatabhai Deshmukh', 'Male', 'candidate/photo_153_1521876215.jpeg', 'khatabhaideshmukh@gmail.com', 'khatabhaideshmukh', 'Khatabhai Deshmukh is a candidate for india in Bahujan Samaj Party.', 1, '2018-03-24', 2, '17-December-1947', '453-Mohini Palace'),
(155, 4, 2004, 'Naresh Dhillon', 'Male', 'candidate/photo_154_1521876567.jpeg', 'nareshdhillon@gmail.com', 'nareshdhillon', 'Naresh Dhillon is a candidate of Bahujan Samaj party for Lok Sabha election', 1, '2018-03-24', 2, '17-July-1971', '545-kailash park'),
(156, 4, 2005, 'Suman Goswami', 'Male', 'candidate/photo_155_1521876648.jpeg', 'sumangoswami@gmail.com', 'sumangoswami', 'Suman Goswami is a candidate for Bahujan Samaj Party in india', 1, '2018-03-24', 2, '12-June-1959', '56-Sarita Society'),
(157, 4, 2006, 'Kusum Suvagiya', 'Male', 'candidate/photo_156_1521880742.jpeg', 'kusumsuvagiya@gmail.com', 'kusumsuvagiya', 'Kusum Suvagiya is a candidate of Bahujan Samaj party for Lok Sabha election', 1, '2018-03-24', 2, '15-May-1947', '67- Mahavir society'),
(158, 4, 2007, 'Hevin Zacharia', 'Male', 'candidate/photo_157_1521880975.jpeg', 'hevinaacharia@gmail.com', 'hevinaacharia', 'Hevin Zacharia is a candidate of Bahujan Samaj party for lok Sabha election', 1, '2018-03-24', 2, '19-Auguest-1970', '65-Brince Palace'),
(159, 4, 2008, 'Jay Shah', 'Male', 'candidate/photo_158_1521881195.jpeg', 'jayshah@gmail.com', 'jayshah', 'Jay Shah is a candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-24', 2, '13-September-1953', 'Sitanagar '),
(160, 5, 2007, 'Mohan Ray', 'Male', 'candidate/photo_159_1521881391.jpeg', 'mohanray@gmail.com', 'mohanray', 'Mohan Ray is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '22-July-1962', '33-Shiv Parvati'),
(161, 5, 2008, 'Rajesh Khanna', 'Male', 'candidate/photo_160_1521881638.jpeg', 'rajeshkhanna@gmail.com', 'rajeshkhanna', 'Rajesh Khanna is a candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-24', 2, '7-Auguest-1945', '34- Ram vatika'),
(162, 5, 2000, 'Dhirubhai Pandey', 'Male', 'candidate/photo_161_1521881994.jpeg', 'dhirubhaipandey@gmail.com', 'dhirubhaipandey', 'Dhirubhai Pandey is a candidate of All India Trinamool Congress for lok Sabha election', 1, '2018-03-24', 2, '18-September-1952', '56-Khodiyar nagar'),
(163, 5, 2001, 'Vikas Naidu', 'Male', 'candidate/photo_162_1521882280.jpeg', 'vikasnaidu@gmail.com', 'vikasnaidu', 'Vikas Naidu is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '15-September-1967', '34 , Guru nagar '),
(164, 5, 2002, 'Ravina Pandey', 'Male', 'candidate/photo_163_1521882659.jpg', 'ravinapandey@gmail.com', 'ravinapandey', 'Ravina Pandey is a candidate of All India Trinamool Party for Lok Sabha Election', 1, '2018-03-24', 2, '13-Auguest-1956', '45- Raj Hans'),
(165, 1, 2022, 'Darshan Pandey', 'Male', 'candidate/photo_164_1521885734.jpeg', 'darshanpandey@gmail.com', 'Darshan Pandey', 'Darshan Pandey is a candidate for bharatiya janata party in india for lok sabha election.', 1, '2018-03-24', 2, '30-April-1963', '45-Arjun Nagar'),
(166, 1, 2023, 'Darsti Naidu', 'Female', 'candidate/photo_165_1521885851.jpeg', 'darstinaidu@gmail.com', 'darstinaidu', 'Darsti Naidu is candidate of bharatiya janata party in india for lok sabha election.', 1, '2018-03-24', 2, '28-June-1977', '45,Mahavir Society'),
(167, 1, 2024, 'Raja Mohanrai', 'Male', 'candidate/photo_166_1521885959.jpeg', 'rajamohanrai@gmail.com', 'rajamohanrai', 'Raja Mohanrai is a candidate of bharatiya janata party in india for lok sabha election.', 1, '2018-03-24', 2, '13-April-1957', '78-madhav park Residency'),
(168, 1, 2025, 'Raman Vora', 'Male', 'candidate/photo_167_1521886145.jpeg', 'ramanvora@gmail.com', 'ramanvora', 'Raman Vora is a candidate for bharatiya janata party in india for lok sabha election.It is very famous candidate in bharatiya janata party.', 1, '2018-03-24', 2, '15-November-1963', '56-Shub laxmi Society'),
(169, 1, 2026, 'Ashok beladiya', 'Male', 'candidate/photo_168_1521886309.jpeg', 'ashokbeladiya@gmail.com', 'ashokbeladiya', 'Ashok beladiya is a candidate for bharatiya janata party in gujarat at india for lok sabha election. ', 1, '2018-03-24', 2, '10-December-1969', '545-Shiv Darshan'),
(170, 1, 2027, 'Daniel M. Ziff', 'Male', 'candidate/photo_169_1521886535.jpeg', 'danielziff@gmail.com', 'danielziff', 'Daniel M. Ziff is a candidate for gujrat bharatiya janata party in lok sabh election in india', 1, '2018-03-24', 2, '16-May-1970', '34-Khodiyar park Society'),
(171, 1, 2028, 'Manubhai Dhameliya', 'Male', 'candidate/photo_170_1521886856.jpeg', 'manubhaidhameliya@gmail.com', 'manubhaidhameliya', 'Manubhai Dhameliya is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-24', 2, '13-February-1962', '203,Sagar Complex'),
(172, 1, 2029, 'Kishorbhai Pandey ', 'Male', 'candidate/photo_171_1521887030.jpeg', 'kishorbhaipandey@gmail.com', 'kishorbhaipandey', 'Kishorbhai Pandey  is a candidate for bharatiya janata party in india for lok sabha election.', 1, '2018-03-24', 2, '11-February-1948', '200-SaritaVihar Society'),
(173, 4, 2022, 'Piyushbhai Ranganathan', 'Male', 'candidate/photo_172_1521887393.jpeg', 'piyushbhairanganathan@gmail.com', 'piyushbhairanganathan', 'Piyushbhai Ranganathan is a candidate of Bahujan Samaj party for Lok Sabha election', 1, '2018-03-24', 2, '14-September-1982', '75-Sadhana Society');
INSERT INTO `tbl_candidate_registration` (`candidate_id`, `party_id`, `location_id`, `candidate_name`, `gender`, `profile_pic`, `email_id`, `password`, `description`, `status`, `r_date`, `category_id`, `dob`, `office_address`) VALUES
(174, 4, 2023, 'Muljibhai Sachdev', 'Male', 'candidate/photo_173_1521888006.jpeg', 'muljibhaiaachdev@gmail.com', 'muljibhaiaachdev', 'Muljibhai Sachdev is a candidate of Bahujan Samaj Party for lok Sabha election', 1, '2018-03-24', 2, '8-November-1959', 'B-301 Krishna Township'),
(175, 1, 2044, 'Atulbhai Sharma', 'Male', 'candidate/photo_174_1521888311.jpeg', 'atulbhaisharma@gmail.com', 'atulbhaisharma', 'Atulbhai Sharma is a candidate of Bharatiya Janata Party for lok Sabha election', 1, '2018-03-24', 2, '30-April-1974', '145-Shankar Parvati Society'),
(176, 4, 2024, 'Kalpeshbhai Viradiya', 'Male', 'candidate/photo_175_1521888529.jpeg', 'kalpeshbhaiviradiya@gmail.com', 'kalpeshbhaiviradiya', 'Kalpeshbhai Viradiya is a candidate of Bahujan Samaj party for Lok Sabha Election', 1, '2018-03-24', 2, '19-September-1964', '32-Trupti Society'),
(177, 4, 2025, 'Sahaj Bhadani', 'Male', 'candidate/photo_176_1521889567.jpeg', 'sahajbhadani@gmail.com', 'sahajbhadani', 'Sahaj Bhadani is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '16-February-1979', '145-Kusum park Society'),
(178, 4, 2026, 'Atulbhai lakhakana', 'Male', 'candidate/photo_177_1521889992.jpeg', 'atulbhailakhakana@gmail.com', 'atulbhailakhakana', 'Atulbhai lakhakana is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '18-December-1978', 'F-403 Shukan velly Apt'),
(179, 4, 2027, 'Kalubhai Gabani', 'Male', 'candidate/photo_178_1521895045.jpeg', 'kalubhaigabani@gmail.com', 'kalubhaigabani', 'Kalubhai Gabani is a candidate of Bahujan Samaj Party for lok Sabha election', 1, '2018-03-24', 2, '28-December-1970', '108-Gokul Complex'),
(180, 4, 2028, 'Rajubhai Avaiya', 'Male', 'candidate/photo_179_1521895211.jpeg', 'rajubhaiavaiya@gmail.com', 'rajubhaiavaiya', 'Rajubhai Avaiya is a candidate of Bahujan Samaj party for Lok Sabha elecction', 1, '2018-03-24', 2, '27-May-1959', '8-Royal Park'),
(181, 4, 2029, 'Pravinbhai Vaghani', 'Male', 'candidate/photo_180_1521895538.jpeg', 'pravinbhaivaghani@gmail.com', 'pravinbhaivaghani', 'Pravinbhai Vaghani is a candidate of Bahujan Samaj party for lok Sabha election', 1, '2018-03-24', 2, '22-Auguest-1957', '67-Raghuvir Society'),
(182, 4, 2030, 'Mukeshbhai Gadhiya', 'Male', 'candidate/photo_181_1521895746.jpeg', 'mukeshbhaigadhiya@gmail.com', 'mukeshbhaigadhiya', 'Mukeshbhai Gadhiya is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '18-January-1973', 'Ridham Residency'),
(183, 5, 2022, 'Hareshbhai Kakdiya', 'Male', 'candidate/photo_182_1521896033.jpeg', 'hareshbhaikakdiya@gmail.com', 'hareshbhaikakdiya', 'Hareshbhai Kakdiya is a Candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '15-March-1977', '48-Gadhpur Township'),
(184, 5, 2023, 'Shivabhai Maniya', 'Male', 'candidate/photo_183_1521896624.jpeg', 'shivabhaimaniya@gmail.com', 'shivabhaimaniya', 'Shivabhai Maniya is a candidate of All India TrinamoolCongress for Lok Sabha election', 1, '2018-03-24', 2, '28-April-1961', 'C/302,Harekrishna  Complex'),
(185, 5, 2024, 'Nileshbhai Virani', 'Male', 'candidate/photo_184_1521896903.jpeg', 'nileshbhaivirani@gmail.com', 'nileshbhaivirani', 'Nileshbhai Virani is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '29-July-1957', '540,Ghadhpur Township'),
(186, 5, 2025, 'Dineshbhai Kuvadiya', 'Male', 'candidate/photo_185_1521897318.jpeg', 'dineshbhaikuvadiya@gmail.com', 'dineshbhaikuvadiya', 'Dineshbhai Kuvadiya is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '24-October-1961', '57 Shantiniketan House'),
(187, 5, 2026, 'Sureshbhai Kheni', 'Male', 'candidate/photo_186_1521897758.jpeg', 'sureshbhaikheni@gmail.com', 'sureshbhaikheni', 'Sureshbhai Kheni is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '26-November-1960', '101-Ashutosh Apt'),
(188, 5, 2027, 'Sureshbhai Vekriya', 'Male', 'candidate/photo_187_1521897911.jpeg', 'sureshbhaivekriya@gmail.com', 'sureshbhaivekriya', 'Sureshbhai Vekriya is a candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-24', 2, '18-November-1976', 'B-2/203,Krishana Avenue'),
(189, 1, 2052, 'Bhaveshbhai Etaliya', 'Male', 'candidate/photo_188_1521898122.jpeg', 'bhaveshbhaietaliya@gmail.com', 'bhaveshbhaietaliya', 'Bhaveshbhai Etaliya is a candidate of bharatiya janata party in gujarat lok sabha election in india', 1, '2018-03-24', 2, '12-July-1943', '9-Nijanand Society '),
(190, 1, 2045, 'Hiteshbhai Ghantala', 'Male', 'candidate/photo_189_1521898384.jpeg', 'hiteshbhaighantala@gmail.com', 'hiteshbhaighantala', 'Hiteshbhai Ghantala is a candidate of bharatiya janata party in gujarat lok sabha election', 1, '2018-03-24', 2, '8-Auguest-1963', '9-Nijanand Society'),
(191, 1, 2046, 'Maheshbhai Mavani', 'Male', 'candidate/photo_190_1521898529.jpeg', 'maheshbhaimavani@gmail.com', 'maheshbhaimavani', 'Maheshbhai Mavani is a candidate of bharatiya janata party in anand city for gujarat lok sabha election', 1, '2018-03-24', 2, '17-June-1971', '124/125, Tejendra Park Society'),
(192, 1, 2051, 'Rajeshbhai Goyani', 'Male', 'candidate/photo_191_1521898700.jpeg', 'rajeshbhaigoyani@gmail.com', 'rajeshbhaigoyani', 'Rajeshbhai Goyani is a candidate of bharatiya janata party in gujarat lok sabha election ', 1, '2018-03-24', 2, '24-July-1959', '25-Gurukrupa Society'),
(193, 1, 2047, 'Ashokbhai Lukhi', 'Male', 'candidate/photo_192_1521899387.jpeg', 'ashokbhailukhi@gmail.com', 'ashokbhailukhi', 'Ashokbhai Lukhi is a candidate of bharatiya janata party in gujarat lok sabha election', 1, '2018-03-24', 2, '18-November-1957', '124/125  Tejendra society '),
(194, 1, 2048, 'Bhanubhai Ghevariya', 'Male', 'candidate/photo_193_1521899558.jpeg', 'bhanubhaighevariya@gmail.com', 'bhanubhaighevariya', 'Bhanubhai Ghevariya is a candidate of bharatiya janata party of anand in gujarat lok sabha election.', 1, '2018-03-24', 2, '15-July-1971', '17,Shriji Apt'),
(195, 1, 2049, 'Atulbhai Bhandariya', 'Male', 'candidate/photo_194_1521899736.jpeg', 'atulbhaibhandariya@gmail.com', 'atulbhaibhandariya', 'Atulbhai Bhandariya is a candidate of bharatiya janata party in gujarat lok sabha election', 1, '2018-03-24', 2, '7-December-1976', '148-IshvarKrupa Society'),
(196, 1, 2050, 'Damjibhai Miyani', 'Male', 'candidate/photo_195_1521900128.jpeg', 'damjibhaimiyani@gmail.com', 'damjibhaimiyani', 'Damjibhai Miyani is a candidate of bharatiya janata party in gujarat lok sabha election', 1, '2018-03-24', 2, '22-Auguest-1959', 'A-58 Saiffy Society'),
(197, 4, 2044, 'Sureshbhai Balar', 'Male', 'candidate/photo_196_1521900334.jpeg', 'sureshbhaibalar@gmail.com', 'sureshbhaibalar', 'Sureshbhai Balar is a candidate of Bahujan Samaj Party for lok Sabha election', 1, '2018-03-24', 2, '15-September-1964', 'B-202 Sunrise Apt'),
(198, 4, 2045, 'Gaurang Damrala', 'Male', 'candidate/photo_197_1521900777.jpeg', 'gaurangdamrala@gmail.com', 'gaurangdamrala', 'Gaurang Damrala is a candidate of Bahujan Samaj party for Lok Sabha election', 1, '2018-03-24', 2, '22-Auguest-1958', 'B-19 Marutidham Society'),
(199, 4, 2046, 'Maheshbhai Zadakiya', 'Male', 'candidate/photo_198_1521901188.jpeg', 'maheshbhaizadakiya@gmail.com', 'maheshbhaizadakiya', 'Maheshbhai Zadakiya is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '23-May-1963', '67-Nilkanth Raw House'),
(200, 4, 2047, 'Vipulbhai Katrodiya', 'Male', 'candidate/photo_199_1521901314.jpeg', 'vipulbhaikatrodiya@gmail.com', 'vipulbhaikatrodiya', 'Vipulbhai Katrodiya is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '29-October-1959', 'B-101 Abishek Apt'),
(201, 4, 2048, 'Sureshbhai Khunt', 'Male', 'candidate/photo_200_1521901462.jpeg', 'sureshbhaikhunt@gmail.com', 'sureshbhaikhunt', 'Sureshbhai Khunt is a candidate of Bahujan Samaj Party for Lok sabha election', 1, '2018-03-24', 2, '30-November-1981', 'D-2/304 Gangotri Resi'),
(202, 4, 2049, 'Jagdishbhai Lukhi', 'Male', 'candidate/photo_201_1521901685.jpeg', 'jagdishbhailukhi@gmail.com', 'jagdishbhailukhi', 'Jagdishbhai Lukhi is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '18-July-1968', '203-204 Prayagraj Apt'),
(203, 4, 2050, 'Jagdishbhai Katrodiya', 'Male', 'candidate/photo_202_1521910029.jpeg', 'jagdishbhaikatrodiya@gmail.com', 'jagdishbhaikatrodiya', 'Jagdishbhai Katrodiya is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '5-Auguest-1963', '31-Sarita Sagar Society'),
(204, 4, 2051, 'Maheshbhai Savani', 'Male', 'candidate/photo_203_1521910246.jpeg', 'maheshbhaisavani@gmail.com', 'maheshbhaisavani', 'Maheshbhai Savani is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '11-June-1954', '117-Shiv Shankar Pravit Society'),
(205, 4, 2052, 'Damjibhai Godhani', 'Male', 'candidate/photo_204_1521910670.jpeg', 'damjibhaigodhani@gmail.com', 'damjibhaigodhani', 'Damjibhai Godhani is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-24', 2, '18-September-1971', 'D-504 Rushikesh Township'),
(206, 5, 2044, 'Aakash Dobariya', 'Male', 'candidate/photo_205_1521910872.jpeg', 'aakashdobariya@gmail.com', 'aakashdobariya', 'Aakash Dobariya is a candidate All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '18-November-1972', '165-Gautam park Society'),
(207, 5, 2050, 'Mansukhbhai Mendpara', 'Male', 'candidate/photo_206_1521911291.jpeg', 'mansukhbhaimendpara@gmail.com', 'mansukhbhaimendpara', 'Mansukhbhai Mendpara is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-24', 2, '15-February-1966', 'D-204 Sai darshan Sankul'),
(208, 5, 2046, 'Prakashbhai Chakrani', 'Male', 'candidate/photo_207_1521911468.jpg', 'prakashbhaichakrani@gmail.com', 'prakashbhaichakrani', 'Prakashbhai Chakrani is a candidate of All India Trinamool Congress for gujarat election in india', 1, '2018-03-24', 2, '17-January-1959', 'A-29 Sai Krupa Society'),
(209, 5, 2047, 'Shaileshbhai Devani', 'Male', 'candidate/photo_208_1521911603.jpeg', 'shaileshbhaidevani@gmail.com', 'shaileshbhaidevani', 'Shaileshbhai Devani is a candidate of All India Trinamool Congress for india', 1, '2018-03-24', 2, '16-March-1961', 'C-503 Afill Tower'),
(210, 1, 2069, 'Vajubhai Desai', 'Male', 'candidate/photo_209_1521912247.jpeg', 'vajubhaidesai@gmail.com', 'vajubhaidesai', 'Vajubhai Desai is a candidate of bharatiya Janata Party in gujarat ', 1, '2018-03-24', 2, '10-September-1960', '302-Shriramnagar Society'),
(211, 1, 2061, 'Bipinbhai Mavani', 'Male', 'candidate/photo_210_1521912409.jpeg', 'bipinbhaimavani@gmail.com', 'bipinbhaimavani', 'Bipinbhai Mavani is a candidate of bharatiya janata party in gujarat lok sabha election in india', 1, '2018-03-24', 2, '6-October-1968', 'F-1/204 Anand Vatika Residency'),
(212, 1, 2062, 'Mukeshbhai Meshiya', 'Male', 'candidate/photo_211_1521912503.jpeg', 'mukeshbhaimeshiya@gmail.com', 'mukeshbhaimeshiya', 'Mukeshbhai Meshiya is  a candidate of bharatiya janata party in india', 1, '2018-03-24', 2, '23-September-1962', 'B-58 Purvi Society'),
(213, 1, 2063, 'Bipinbhai Jivani', 'Male', 'candidate/photo_212_1521912667.jpeg', 'bipinbhaijivani@gmail.com', 'bipinbhaijivani', 'Bipinbhai Jivani is a candidate of bharatiya janata party for gujarat lok sabha election in india', 1, '2018-03-24', 2, '7-September-1945', '78-Yamuna Kunj Society'),
(214, 1, 2064, 'Pankajbhai Tejani', 'Male', 'candidate/photo_213_1521913072.jpeg', 'pankajbhaitejani@gmail.com', 'pankajbhaitejani', 'Pankajbhai Tejani is a candidate of bharatiya janata party in india lok sabha election', 1, '2018-03-24', 2, '17-June-1948', '133,Vandana Society'),
(215, 1, 2065, 'Virjibhai Vaghani', 'Male', 'candidate/photo_214_1521913197.jpeg', 'virjibhaivaghani@gmail.com', 'virjibhaivaghani', 'Virjibhai Vaghani is candidate of bharatiya janata party in india for lok sabha election', 1, '2018-03-24', 2, '20-January-1969', '57-Saikrupa Society'),
(216, 1, 2066, 'Samirbhai Bharoliya', 'Male', 'candidate/photo_215_1521913345.jpeg', 'samirbhaibharoliya@gmail.com', 'samirbhaibharoliya', 'Samirbhai Bharoliya is a candidate of bharatiya janata party for gujarat election in india', 1, '2018-03-24', 2, '16-June-1963', '34-Subhash Residency'),
(217, 1, 2067, 'Jigneshbhai Goti', 'Male', 'candidate/photo_216_1521913499.jpeg', 'jigneshbhaigoti@gmail.com', 'jigneshbhaigoti', 'Jigneshbhai Goti is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-24', 2, '14-Auguest-1960', '133-vandana Society'),
(218, 1, 2068, 'Jagdishbhai Vaghani', 'Male', 'candidate/photo_217_1521913641.jpeg', 'jagdishbhaivaghani@gmail.com', 'jagdishbhaivaghani', 'Jagdishbhai Vaghani is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-24', 2, '3-November-1961', '87-Suman Society'),
(219, 4, 2061, 'Tribhovanbhai Bhimani', 'Male', 'candidate/photo_218_1521913860.jpeg', 'tribhovanbhaibhimani@gmail.com', 'tribhovanbhaibhimani', 'Tribhovanbhai Bhimani is a candidate of Bahujan Samaj party for Lok Sabha election', 1, '2018-03-24', 2, '5-December-1957', '30-Samrat Society'),
(220, 4, 2062, 'Premjibhai Langdiya', 'Male', 'candidate/photo_219_1521914006.jpeg', 'premjibhailangdiya@gmail.com', 'premjibhailangdiya', 'Premjibhai Langdiya is a candidate of Bahujan Samaj Party  in india', 1, '2018-03-24', 2, '12-March-1967', '156-Nilkanth Society'),
(221, 4, 2063, 'Dineshbhai Vegani', 'Male', 'candidate/photo_220_1521914108.jpeg', 'dineshbhaivegani@gmail.com', 'dineshbhaivegani', 'Dineshbhai Vegani is a candidate for Bahujan Samaj Party in india ', 1, '2018-03-24', 2, '13-July-1960', '67-Obeyy palace'),
(222, 4, 2064, 'Bhagavanbhai Donda', 'Male', 'candidate/photo_221_1521914226.jpeg', 'bhagavanbhaidonda@gmail.com', 'bhagavanbhaidonda', 'Bhagavanbhai Donda is a candidate for Bahujan Samaj Party in india', 1, '2018-03-24', 2, '19-November-1961', '45-Samadhi Nagar'),
(223, 4, 2065, 'Shantibhai Ghelani', 'Male', 'candidate/photo_222_1521914429.jpeg', 'shantibhaighelani@gmail.com', 'shantibhaighelani', 'Shantibhai Ghelani is a candidate of Bahujan Samaj Party in india', 1, '2018-03-24', 2, '17-January-1945', '45-Jalaram Society'),
(224, 4, 2066, 'Bipinbhai Dholiya', 'Male', 'candidate/photo_223_1521914586.jpeg', 'bipinbhaidholiya@gmail.com', 'bipinbhaidholiya', 'Bipinbhai Dholiya is a candidate of Bahujan Samaj Party in india', 1, '2018-03-24', 2, '19-November-1976', '67-JayRam Park'),
(225, 4, 2067, 'Rameshbhai Dobariya', 'Male', 'candidate/photo_224_1521914731.jpeg', 'rameshbhaidobariya@gmail.com', 'rameshbhaidobariya', 'Rameshbhai Dobariya is a candidate of Bahujan Samaj Party for lok Sabha election', 1, '2018-03-24', 2, '17-May-1966', '565-Kesri Naman Society'),
(226, 4, 2068, 'Sanjaybhai Koshiya', 'Male', 'candidate/photo_225_1521950335.jpeg', 'sanjaybhaikoshiya@gmail.com', 'sanjaybhaikoshiya', 'Sanjaybhai Koshiya is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-25', 2, '17-March-1980', '6-Sundarbaug Society'),
(227, 4, 2069, 'Nirav Vithani', 'Male', 'candidate/photo_226_1521950559.jpeg', 'niravvithani@gmail.com', 'niravvithani', 'Nirav Vithani is a candidate of Bahujan Samaj Party for lok Sabha election', 1, '2018-03-25', 2, '17-May-1975', '25-Harikunj Society'),
(228, 5, 2061, 'Chiragbhai Aanghan', 'Male', 'candidate/photo_227_1521950911.jpeg', 'chiragbhaiaanghan@gmail.com', 'chiragbhaiaanghan', 'Chiragbhai Aanghan is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-25', 2, '10-April-1960', '7-V-1 Panchdev Society'),
(229, 5, 2062, 'Pravinbhai Shihora', 'Male', 'candidate/photo_228_1521951161.jpeg', 'pravinbhaishihora@gmail.com', 'pravinbhaishihora', 'Pravinbhai Shihora is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-25', 2, '12-March-1965', '24-Mamta park Society'),
(230, 5, 2063, 'Dhanjibhai Bathani', 'Male', 'candidate/photo_229_1521951299.jpeg', 'dhanjibhaibathani@gmail.com', 'dhanjibhaibathani', 'Dhanjibhai Bathani is a candidate of All India Trinamool Congress for lok Sabha election', 1, '2018-03-25', 2, '17-December-1981', '44-Sarita Darshan Society'),
(231, 1, 2079, 'Maheshbhai Katrodiya', 'Male', 'candidate/photo_230_1521953056.jpeg', 'maheshbhaikatrodiya@gmail.com', 'maheshbhaikatrodiya', 'Maheshbhai Katrodiya is a candidate of bharatiya janata party loksabha election in gujarat', 1, '2018-03-25', 2, '7-March-1956', 'C-703 Shirdi Dham Society'),
(232, 1, 2080, 'Vasu Sheta', 'Male', 'candidate/photo_231_1521953239.jpeg', 'vasusheta@gmail.com', 'vasusheta', 'Vasu Sheta is a candidate of bharatiya janata party in gujarat loksabha election in india', 1, '2018-03-25', 2, '15-February-1960', 'B-78 panchdev Society'),
(233, 1, 2081, 'Aman Ravani', 'Male', 'candidate/photo_232_1521954009.jpeg', 'amanravani@gmail.com', 'amanravani', 'Aman Ravani is a candidate of Bharatiya janata party in gujarat lok sabha election in india', 1, '2018-03-25', 2, '17-April-1969', '67-Ajana Park Society'),
(234, 1, 2082, 'Dhavalbhai Bathani', 'Male', 'candidate/photo_233_1521954266.jpeg', 'dhavalbhaibathani@gmail.com', 'dhavalbhaibathani', 'Dhavalbhai Bathani is a Candidate of Bharatiya Janata Party in gujarat Lok sabha election', 1, '2018-03-25', 2, '29-Auguest-1962', '67-Raj Laxmi Society'),
(235, 1, 2083, 'Muljibhai Vaghani', 'Male', 'candidate/photo_234_1521955391.jpeg', 'muljibhaivaghani@gmail.com', 'muljibhaivaghani', 'Muljibhai Vaghani is a candidate of bharatiya janata party in gujarat lok sabha election  in india', 1, '2018-03-25', 2, '14-February-1957', 'B-18 Panchdev Society'),
(236, 1, 2084, 'Popatbhai Kevdiya', 'Male', 'candidate/photo_235_1521971367.jpeg', 'popatbhaikevdiya@gmail.com', 'popatbhaikevdiya', 'Popatbhai Kevdiya is a candidate of bharatiya janata party for lok sabha election for gujarat', 1, '2018-03-25', 2, '26-Auguest-1978', '210-Rukshmani Society'),
(237, 1, 2086, 'Muljibhai Kheni', 'Male', 'candidate/photo_236_1521971514.jpeg', 'muljibhaikheni@gmail.com', 'muljibhaikheni', 'Muljibhai Kheni is a candidate of bharatiya janata party in gujarat lok sabha election.', 1, '2018-03-25', 2, '23-June-1972', '25-Rameshvar Society'),
(238, 1, 2085, 'Nikunjbhai Bhadiyadara', 'Male', 'candidate/photo_237_1521971950.jpeg', 'nikunjbhaibhadiyadara@gmail.com', 'nikunjbhaibhadiyadara', 'Nikunjbhai Bhadiyadara is a candidate of Bharatiya Janata Party for Lok Sabha election', 1, '2018-03-25', 2, '15-October-1964', '66-MarutiDham Society'),
(239, 5, 2064, 'Sureshbhai Pandya', 'Male', 'candidate/photo_238_1521972478.jpeg', 'sureshbhaipandya@gmail.com', 'sureshbhaipandya', 'Sureshbhai Pandya is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-25', 2, '12-September-1962', '56-Sundarvan Society'),
(240, 1, 2087, 'Pareshbhai Balar', 'Male', 'candidate/photo_239_1521972646.jpeg', 'pareshbhaibalar@gmail.com', 'pareshbhaibalar', 'Pareshbhai Balar is candidate of bharatiya janata party for gujarat election in india', 1, '2018-03-25', 2, '6-Auguest-1937', '78-Square palace'),
(241, 5, 2084, 'Rameshbhai Monpara', 'Male', 'candidate/photo_240_1521972974.jpeg', 'rameshbhaimonpara@gmail.com', 'rameshbhaimonpara', 'Rameshbhai Monpara is a candidate of All India Trinamool Congress for lok Sabha election', 1, '2018-03-25', 2, '9-November-1963', '67-Amar park'),
(242, 4, 2079, 'Om Goyani', 'Male', 'candidate/photo_241_1521973208.jpeg', 'omgoyani@gmail.com', 'omgoyani', 'Om Goyani is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-25', 2, '26-September-1974', '78-Sundarvan Residency'),
(243, 4, 2082, 'Kuldeepbhai Jodhani', 'Male', 'candidate/photo_242_1521973393.jpeg', 'kuldeepbhaijodhani@gmail.com', 'kuldeepbhaijodhani', 'Kuldeepbhai Jodhani is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-25', 2, '17-June-1962', '67-Kailashdham Society'),
(244, 4, 2083, 'Ramjibhai Dankhara', 'Male', 'candidate/photo_243_1521974990.jpeg', 'ramjibhaidankhara@gmail.com', 'ramjibhaidankhara', 'Ramjibhai Dankhara is a candidate of Ba', 1, '2018-03-25', 2, '17-December-1958', '667-Amar Park Residency'),
(245, 4, 2080, 'Kusumbhai Kothiya', 'Male', 'candidate/photo_244_1521975175.jpeg', 'kusumbhaikothiya@gmail.com', 'kusumbhaikothiya', 'Kusumbhai Kothiya is a candidate of Bahujan Samaj party for Lok Sabha election', 1, '2018-03-25', 2, '16-Auguest-1959', '67-Puja Residency'),
(246, 4, 2081, 'Rajnibhai Vasani', 'Male', 'candidate/photo_245_1521975349.jpeg', 'rajnibhaivasani@gmail.com', 'rajnibhaivasani', 'Rajnibhai Vasani is a candidate of Bahujan Samaj party for lok Sabha election', 1, '2018-03-25', 2, '14-November-1947', '456-Satyanarayan Residency'),
(247, 4, 2084, 'Suraj Ghor', 'Male', 'candidate/photo_246_1521976486.jpeg', 'surajghor@gmail.com', 'surajghor', 'Suraj Ghor is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-25', 2, '5-July-1936', '45-Chandni Park Campus'),
(248, 4, 2085, 'Vinod Parikh', 'Male', 'candidate/photo_247_1521976615.jpeg', 'vinodparikh@gmail.com', 'vinodparikh', 'Vinod Parikh is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-25', 2, '19-December-1961', '34-Kesri Nandan'),
(249, 4, 2086, 'Ramnikbhai Surti', 'Male', 'candidate/photo_248_1521976728.jpeg', 'ramnikbhaisurti@gmail.com', 'ramnikbhaisurti', 'Ramnikbhai Surti is a candidate of Bahujan Samaj Party for gujarat election in india', 1, '2018-03-25', 2, '2-June-1964', '34-Ompuri Complex'),
(250, 4, 2087, 'Umangbhai Patel', 'Male', 'candidate/photo_249_1521976852.jpeg', 'umangbhaipatel@gmail.com', 'umangbhaipatel', 'Umangbhai Patel is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-25', 2, '14-Auguest-1940', '56-Kumkum Complex'),
(251, 5, 2079, 'Rameshbhai Ranpara', 'Male', 'candidate/photo_250_1521977021.jpeg', 'rameshbhairanpara@gmail.com', 'rameshbhairanpara', 'Rameshbhai Ranpara is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-25', 2, '5-June-1946', '78-Samira Complex'),
(252, 5, 2080, 'Bachubhai Balar', 'Male', 'candidate/photo_251_1521977125.jpeg', 'bachubhaibalar@gmail.com', 'bachubhaibalar', 'Bachubhai Balar is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-25', 2, '11-November-1955', '45-Ramdev Society'),
(253, 1, 2089, 'Pravinbhai Parmar', 'Male', 'candidate/photo_252_1521978350.jpeg', 'pravinbhaiparmar@gmail.com', 'pravinbhaiparmar', 'Pravinbhai Parmar is a candidate for bharatiya janata party for gujarat election in india', 1, '2018-03-25', 2, '18-Auguest-1960', '56-Jagdamba Complex'),
(254, 1, 2090, 'Sureshbhai Kukadiya', 'Male', 'candidate/photo_253_1521978443.jpeg', 'sureshbhaikukadiya@gmail.com', 'sureshbhaikukadiya', 'Sureshbhai Kukadiya is a candidate of bharatiya janata party for gujarat lok sabha election in india', 1, '2018-03-25', 2, '22-October-1964', '55-Ram nagar complex'),
(255, 1, 2091, 'Chiragbhai Gadhiya ', 'Male', 'candidate/photo_254_1521978660.jpeg', 'chiragbhaigadhiya@gmail.com', 'chiragbhaigadhiya', 'Chiragbhai Gadhiya  is a candidate for gujarat bharatiya janata party in india', 1, '2018-03-25', 2, '20-June-1962', '34-Raj Laxmi Complex'),
(256, 1, 2092, 'Kanjibhai Kachhadiya', 'Male', 'candidate/photo_255_1522039496.jpeg', 'kanjibhaikachhadiya@gmail.com', 'kanjibhaikachhadiya', 'Kanjibhai Kachhadiya is a candidate of bharatiya janata Party for gujarat lok sabha election.', 1, '2018-03-26', 2, '17-January-1953', '45-Radhe Residency'),
(257, 1, 2093, 'Vijaybhai Lakhanaka', 'Male', 'candidate/photo_256_1522039725.jpeg', 'vijaybhailakhanaka@gmail.com', 'vijaybhailakhanaka', 'Vijaybhai Lakhanaka is a candidate of bharatiya janata party for gujarat lok sabha election in india', 1, '2018-03-26', 2, '11-November-1955', '78-Suraj residency'),
(258, 1, 2094, 'Bhavesh Butani', 'Male', 'candidate/photo_257_1522039862.jpeg', 'bhaveshbutani@gmail.com', 'bhaveshbutani', 'Bhavesh Butani is a candidate of bharatiya janata party for gujarat lok sabha election', 1, '2018-03-26', 2, '26-December-1972', '67-Ramdev Society'),
(259, 1, 2096, 'Hardikbhai Kakadiya', 'Male', 'candidate/photo_258_1522040016.jpeg', 'hardikbhaikakadiya@gmail.com', 'hardikbhaikakadiya', 'Hardikbhai Kakadiya is a candidate of bharatiya janata party for gujarat lok sabha election in india', 1, '2018-03-26', 2, '15-December-1975', 'Hardikbhai Kakadiya is a candidate of bharatiya janata party for gujarat lok sabha election in india'),
(260, 5, 2095, 'Bhadreshbhai Vadaliya', 'Male', 'candidate/photo_259_1522040162.jpeg', 'bhadreshbhaivadaliya@gmail.com', 'bhadreshbhaivadaliya', 'Bhadreshbhai Vadaliya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '19-July-1959', '56-Kurji Campus'),
(261, 1, 2097, 'Sundar Gadhiya', 'Male', 'candidate/photo_260_1522040323.jpeg', 'sundargadhiya@gmail.com', 'sundargadhiya', 'Sundar Gadhiya is a Candidate of Bharatiya Janata Party for Lok Sabha Election', 1, '2018-03-26', 2, '15-January-1948', '56-Raj Laxmi Society'),
(262, 1, 2097, 'Bharatbhai Kukdiya', 'Male', 'candidate/photo_261_1522041514.jpeg', 'bharatbhaikukdiya@gmail.com', 'bharatbhaikukdiya', 'Bharatbhai Kukdiya is a Candidate of Bharatiya Janata Party for Lok Sabha Election', 1, '2018-03-26', 2, '14-Auguest-1954', '56-SundarVan Society'),
(263, 4, 2089, 'Fenilbhai Vasoya', 'Male', 'candidate/photo_262_1522041733.jpeg', 'fenilbhaivasoya@gmail.com', 'fenilbhaivasoya', 'Fenilbhai Vasoya is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-26', 2, '13-December-1962', '56-Raj Complex'),
(264, 4, 2090, 'Sureshbhai Dhola', 'Male', 'candidate/photo_263_1522042799.jpeg', 'sureshbhaidhola@gmail.com', 'sureshbhaidhola', 'Sureshbhai Dhola is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-26', 2, '18-September-1958', '90-Kusum Park'),
(265, 4, 2091, 'Jaydeepbhai Parikh', 'Male', 'candidate/photo_264_1522042931.jpeg', 'jaydeepbhaiparikh@gmail.com', 'jaydeepbhaiparikh', 'Jaydeepbhai Parikh is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-26', 2, '18-October-1971', '67-Kamal Park'),
(266, 4, 2092, 'Minaxi Patel', 'Female', 'candidate/photo_265_1522043060.jpeg', 'minaxipatel@gmail.com', 'Minaxi Patel', 'Minaxi Patel is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-26', 2, '25-December-1967', '56-Kaisha baa Complex'),
(267, 4, 2093, 'Suman Patel', 'Female', 'candidate/photo_266_1522043462.jpeg', 'sumanpatel@gmail.com', 'sumanpatel', 'Suman Patel is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-26', 2, '2-Auguest-1970', '44-Lok Ram Sabha'),
(268, 4, 2094, 'Bhaveshbhai Maisuriya', 'Male', 'candidate/photo_267_1522044020.jpeg', 'bhaveshbhaimaisuriya@gmail.com', 'bhaveshbhaimaisuriya', 'Bhaveshbhai Maisuriya is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-26', 2, '13-March-1987', '34-Ramdev Complex'),
(269, 4, 2095, 'Mohanbhai Ramani', 'Male', 'candidate/photo_268_1522044241.jpeg', 'mohanbhairamani@gmail.com', 'mohanbhairamani', 'Mohanbhai Ramani is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-26', 2, '13-June-1986', '45-Ramji Park'),
(270, 4, 2096, 'Umeshbhai Rank', 'Male', 'candidate/photo_269_1522044430.jpeg', 'umeshbhairank@gmail.com', 'umeshbhairank', 'Umeshbhai Rank is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-26', 2, '29-September-1973', '568-Vidhyamandir Society'),
(271, 4, 2097, 'Manojbhai Rakholiya', 'Male', 'candidate/photo_270_1522044629.jpeg', 'manojbhairakholiya@gmail.com', 'manojbhairakholiya', 'Manojbhai Rakholiya is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-26', 2, '25-September-1973', '45-Sanjay Villa'),
(272, 5, 2089, 'Vijaybhai Malaviya', 'Male', 'candidate/photo_271_1522044800.jpeg', 'vijaybhaimalaviya@gmail.com', 'vijaybhaimalaviya', 'Vijaybhai Malaviya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '18-September-1970', '56-Sujal Complex'),
(273, 5, 2090, 'Rameshbhai Rajpara', 'Male', 'candidate/photo_272_1522044910.jpeg', 'rameshbhairajpara@gmail.com', 'rameshbhairajpara', 'Rameshbhai Rajpara is a candidate of All India Trinamool Congress in india', 1, '2018-03-26', 2, '7-February-1960', '458-Krishana Park Residency'),
(274, 2, 1822, 'Arvidbhai Malaviya', 'Male', 'candidate/photo_273_1522045281.jpeg', 'arvidbhaimalaviya@gmail.com', 'arvidbhaimalaviya', 'Arvidbhai Malaviya is a candidate of indian national congress.', 1, '2018-03-26', 2, '10-March-1964', '27-Apple Plaza'),
(275, 2, 1823, 'Dhirubhai Pandya', 'Male', 'candidate/photo_274_1522045676.jpeg', 'dhirubhaipandya@gmail.com', 'dhirubhaipandya', 'Dhirubhai Pandya is a candidate of Indian National Congress for Gujarat Lokshabha.', 1, '2018-03-26', 2, '18-July-1954', 'A-23 National Plaza'),
(276, 2, 1824, 'Gokulbhai Vasoya', 'Male', 'candidate/photo_275_1522046046.jpeg', 'gokulbhaivasoya@gmail.com', 'gokulbhaivasoya', 'Gokulbhai Vasoya is a candidate of indian national congress for gujarat lok sabha.', 1, '2018-03-26', 2, '28-June-1957', '12, Shantiniketan Residency'),
(277, 2, 1825, 'Vishalbhai Mangroliya', 'Male', 'candidate/photo_276_1522046251.jpeg', 'vishalbhaimangroliya@gmail.com', 'vishalbhaimangroliya', 'Vishalbhai Mangroliya is a candidate of indian national congress for Gujarat lokshabha.', 1, '2018-03-26', 2, '29-April-1950', 'C-123, Rajhans Appartment'),
(278, 2, 1826, 'Bhaveshbhai Malaviya', 'Male', 'candidate/photo_277_1522046566.jpeg', 'bhaveshbhaimalaviya@gmail.com', 'bhaveshbhaimalaviya', 'Bhaveshbhai Malaviya is a candidate of indian national congress for Gujarat Lokshabha election in india.', 1, '2018-03-26', 2, '21-June-1957', 'C-123, Smart Society'),
(279, 2, 1827, 'Vimalbhai Monpara', 'Male', 'candidate/photo_278_1522048288.jpeg', 'vimalbhaimonpara@gmail.com', 'vimalbhaimonpara', 'Vimalbhai Monpara is a candidate of indian national congress for gujarat lok sabha election in india', 1, '2018-03-26', 2, '14-June-1953', 'A-243, Bhumi Appartment'),
(280, 2, 1828, 'Shantibhai Gobara', 'Male', 'candidate/photo_279_1522048586.jpeg', 'shantibhaigobara@gmail.com', 'shantibhaigobara', 'Shantibhai Gobara is a indian national congress candidate for Gujarat lokshabha.', 1, '2018-03-26', 2, '18-May-1945', 'A-12, Gitanagar Society'),
(281, 2, 1829, 'Kaishikbhai Vasoya', 'Male', 'candidate/photo_280_1522048809.jpeg', 'kaishikbhaivasoya@gmail.com', 'kaishikbhaivasoya', 'Kaishikbhai Vasoya is a candidate of indian national congress for Gujarat Rajya Shabha.', 1, '2018-03-26', 2, '9-May-1943', 'B-148, Ashokvatika Society'),
(282, 2, 1830, 'Kamleshbhai Bhingroliya', 'Male', 'candidate/photo_281_1522049024.jpeg', 'kamleshbhaibhingroliya@gmail.com', 'kamleshbhaibhingroliya', 'Kamleshbhai Bhingroliya is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '13-May-1960', 'C-34, Divya Shakti Society.'),
(283, 2, 1831, 'Bhavinbhai Rokad', 'Male', 'candidate/photo_282_1522049205.jpeg', 'bhavinbhairokad@gmail.com', 'bhavinbhairokad', 'Bhavinbhai Rokad is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '8-December-1951', 'C-32, Sitanagar Society.'),
(284, 2, 1833, 'Arjunbhai Vasani', 'Male', 'candidate/photo_283_1522049365.jpeg', 'arjunbhaivasani@gmail.com', 'arjunbhaivasani', 'Arjunbhai Vasani is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '15-June-1963', '125, Shankarnagar Society'),
(285, 2, 1834, 'Rambhai Vadaliya', 'Male', 'candidate/photo_284_1522049618.jpeg', 'rambhaivadaliya@gmail.com', 'rambhaivadaliya', 'Rambhai Vadaliya is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '8-July-1938', 'A-323, Ramvatika Society'),
(286, 2, 1835, 'Sureshbhai Bhimani', 'Male', 'candidate/photo_285_1522049772.jpeg', 'sureshbhaibhimani@gmail.com', 'sureshbhaibhimani', 'Sureshbhai Bhimani is a candidate of indian national congress for gujarat.', 1, '2018-03-26', 2, '12-April-1939', 'A-35, Raj Complex'),
(287, 2, 1832, 'Rakeshbhai Rakholiya', 'Male', 'candidate/photo_286_1522049993.jpeg', 'rakeshbhairakholiya@gmail.com', 'rakeshbhairakholiya', 'Rakeshbhai Rakholiya is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '6-June-1946', 'A-12, Yamuna Darshan'),
(288, 2, 1836, 'Vikasbhai Dudhat', 'Male', 'candidate/photo_287_1522050227.jpeg', 'vikasbhaidudhat@gmail.com', 'vikasbhaidudhat', 'Vikasbhai Dudhat is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '10-Auguest-1941', 'A-12, Rajhans appartment'),
(289, 2, 1837, 'Arvindbhai Savaliya', 'Male', 'candidate/photo_288_1522052321.jpeg', 'arvindbhaisavaliya@gmail.com', 'arvindbhaisavaliya', 'Arvindbhai Savaliya is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '7-May-1943', 'A-12, Ramsita nagar society.'),
(290, 2, 1838, 'Rahulbhai Sojitra', 'Male', 'candidate/photo_289_1522052505.jpeg', 'rahulbhaisojitra@gmail.com', 'rahulbhaisojitra', 'Rahulbhai Sojitra is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '11-May-1948', 'C-123, Sarda society'),
(291, 2, 1839, 'Ravibhai Bhikadiya', 'Male', 'candidate/photo_290_1522052819.jpeg', 'ravibhaibhikadiya@gmail.com', 'ravibhaibhikadiya', 'Ravibhai Bhikadiya is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '9-Auguest-1949', 'C-123, Shakti Appartrment.'),
(292, 2, 1840, 'Bhavikbhai Asodariya', 'Male', 'candidate/photo_291_1522053076.jpeg', 'bhavikbhaiasodariya@gmail.com', 'bhavikbhaiasodariya', 'Bhavikbhai Asodariya is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '10-Auguest-1958', 'A-12, Rachana Society.'),
(293, 2, 1841, 'Shankarbhai Thummar', 'Male', 'candidate/photo_292_1522053288.jpeg', 'shankarbhaithummar@gmail.com', 'shankarbhaithummar', 'Shankarbhai Thummar is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '10-October-1965', 'A-45, Kailash Nagar'),
(294, 2, 1782, 'Dineshbhai Ramwala', 'Male', 'candidate/photo_293_1522053515.jpeg', 'dineshbhairamwala@gmail.com', 'dineshbhairamwala', 'Dineshbhai Ramwala is a candidate for indian national congress for gujarat loksabha.', 1, '2018-03-26', 2, '31-March-1969', 'A-12, Umiya park'),
(295, 2, 1783, 'Bhupatbhai Vasani', 'Male', 'candidate/photo_294_1522053684.jpeg', 'bhupatbhaivasani@gmail.com', 'bhupatbhaivasani', 'Bhupatbhai Vasani is a candidate of Indian national congress for gujarat lok sabha.', 1, '2018-03-26', 2, '18-September-1965', 'A-12, Sapana Society.'),
(296, 2, 1785, 'Lakshmanbhai Tank', 'Male', 'candidate/photo_295_1522053863.jpeg', 'lakshmanbhaitank@gmail.com', 'lakshmanbhaitank', 'Lakshmanbhai Tank is a candidate of indian national congress for gujarat lok sabha.', 1, '2018-03-26', 2, '9-November-1962', 'A-34, Smart Society'),
(297, 2, 1787, 'Gobarbhai Golakiya', 'Male', 'candidate/photo_296_1522054034.jpg', 'gobarbhaigolakiya@gmail.com', 'gobarbhaigolakiya', 'Gobarbhai Golakiya is a candidate of indian national congress for gujarat lok sabha', 1, '2018-03-26', 2, '16-April-1962', 'C-123, Sagar Society'),
(298, 2, 1784, 'Rameshbhai Kachhadiya', 'Male', 'candidate/photo_297_1522054215.jpg', 'rameshbhaikachhadiya@gmail.com', 'rameshbhaikachhadiya', 'Rameshbhai Kachhadiya is a candidate of indian natioan congress for gujarat lok sabha.\r\n', 1, '2018-03-26', 2, '16-May-1971', 'B-20, Ashwin Society.'),
(299, 2, 1786, 'Kantibhai Mavani', 'Male', 'candidate/photo_298_1522054426.jpg', 'kantibhaimavani@gmail.com', 'kantibhaimavani', 'Kantibhai Mavani is a candidate of indian national congress for gujarat.  ', 1, '2018-03-26', 2, '19-September-1973', 'A-45, Ishvar Krupa society'),
(300, 2, 1788, 'Rajeshbhai Gohil', 'Male', 'candidate/photo_299_1522054661.jpg', 'rajeshbhaigohil@gmail.com', 'rajeshbhaigohil', 'Rajeshbhai Gohil is a candidate of indian national congress for gujarat lok sabha.', 1, '2018-03-26', 2, '24-May-1969', 'A-34, Swaminarayan Society.'),
(301, 2, 1789, 'Mansukhbhai Monpara', 'Male', 'candidate/photo_300_1522054874.jpg', 'mansukhbhaimonpara@gmail.com', 'mansukhbhaimonpara', 'Mansukhbhai Monpara is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '29-November-1972', '23, Shiva Appartment.'),
(302, 2, 1790, 'Shlokbhai Gundarniya', 'Male', 'candidate/photo_301_1522055067.jpg', 'shlokbhaigundarniya@gmail.com', 'shlokbhaigundarniya', 'Shlokbhai Gundarniya is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '28-September-1981', 'A-12, Yogi Darshan Society'),
(303, 5, 1790, 'Madhubhai Nakarani', 'Male', 'candidate/photo_302_1522073639.jpeg', 'madhubhainakarani@gmail.com', 'madhubhainakarani', 'Madhubhai Nakarani is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '5-June-1978', 'A-45, RamKrishna Apt'),
(304, 1, 1728, 'Grunth Moradiya', 'Male', 'candidate/photo_303_1522073756.jpg', 'grunthmoradiya@gmail.com', 'grunthmoradiya', 'Grunth Moradiya is a Candidate of Bharatiya Janata Party for Lok Sabha Election', 1, '2018-03-26', 2, '13-April-1964', '65-Sundarvan Complex'),
(305, 1, 1846, 'Maheshbhai Dungrani', 'Male', 'candidate/photo_304_1522074290.jpg', 'maheshbhaidungrani@gmail.com', 'maheshbhaidungrani', 'Maheshbhai Dungrani is a candidate of Bharatiya Janata Party for lok sabha election.', 1, '2018-03-26', 2, '9-November-1971', 'A-54,Amideep Residency,Ichchhapor'),
(306, 5, 1928, 'Bharatbhai Patel', 'Male', 'candidate/photo_305_1522074486.jpg', 'bharatbhaipatel@gmail.com', 'bharatbhaipatel', 'Bharatbhai Patel is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '8-October-1979', '56-Laxmi Residency'),
(307, 5, 1929, 'Nileshbhai Vasani', 'Male', 'candidate/photo_306_1522074633.jpeg', 'nileshbhaivasani@gmail.com', 'nileshbhaivasani', 'Nileshbhai Vasani is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '25-September-1982', 'A-45,Vijay Nagar Residency'),
(308, 6, 1921, 'Suresh Jariwala', 'Male', 'candidate/photo_307_1522074770.jpg', 'sureshjariwala@gmail.com', 'sureshjariwala', 'Suresh Jariwala is a Candidate of Communist Party of India for Lok Sabha Election', 1, '2018-03-26', 2, '23-October-1972', 'A-45,Suman Nagar'),
(309, 5, 1971, 'Mayankbhai Parikh', 'Male', 'candidate/photo_308_1522074944.jpg', 'mayankbhaiparikh@gmail.com', 'mayankbhaiparikh', 'Mayankbhai Parikh is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '18-February-1963', 'D-45 ,Abhinadan Residency'),
(310, 6, 1963, 'Vinodbhai Parikh', 'Male', 'candidate/photo_309_1522075070.jpeg', 'vinodbhaiparikh@gmail.com', 'vinodbhaiparikh', 'Vinodbhai Parikh is a Candidate of Communist Party of India for Lok Sabha Election', 1, '2018-03-26', 2, '18-December-1964', '67-Maruti nagar Society'),
(311, 5, 1987, 'Sureshbahi Maisuriya', 'Male', 'candidate/photo_310_1522075180.jpg', 'sureshbahimaisuriya@gmail.com', 'sureshbahimaisuriya', 'Sureshbahi Maisuriya is a candidate of All India Trinamool Congress for gujarat lok sabha election in india', 1, '2018-03-26', 2, '17-July-1978', 'C-75 Radhika Residency'),
(312, 5, 1988, 'Popatbhai Dobariya', 'Male', 'candidate/photo_311_1522078018.jpg', 'popatbhaidobariya@gmail.com', 'popatbhaidobariya', 'Popatbhai Dobariya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '8-September-1965', 'A-34,Pravina Complex'),
(313, 8, 1984, 'Mukeshbhai Goyani', 'Male', 'candidate/photo_312_1522078193.JPG', 'mukeshbhaigoyani@gmail.com', 'mukeshbhaigoyani', 'C-34, Raj Laxmi Complex', 1, '2018-03-26', 2, '8-December-1953', '45-Silver palace'),
(314, 5, 2003, 'Amarbhai Lathiya', 'Male', 'candidate/photo_313_1522078354.jpg', 'amarbhailathiya@gmail.com', 'amarbhailathiya', 'Amarbhai Lathiya is a candidate of All India Trinamool Congress for loksabha election', 1, '2018-03-26', 2, '16-December-1969', '45-Gajanand Residency'),
(315, 5, 2004, 'Popatbhai Nakarani', 'Male', 'candidate/photo_314_1522078479.jpg', 'popatbhainakarani@gmail.com', 'popatbhainakarani', 'Popatbhai Nakarani is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '12-October-1955', 'D-34,Abinandan Residency'),
(316, 5, 2005, 'Vipulbhai Dhanani', 'Male', 'candidate/photo_315_1522078615.png', 'vipulbhaidhanani@gmail.com', 'vipulbhaidhanani', 'Vipulbhai Dhanani is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '16-May-1952', '877-Umiya Park Society'),
(317, 5, 2028, 'Sureshbhai Suvagiya', 'Male', 'candidate/photo_316_1522078879.png', 'sureshbhaisuvagiya@gmail.com', 'sureshbhaisuvagiya', 'Sureshbhai Suvagiya is a candidate of All India Trinamool Congress for gujarat lok sabha election in india\r\n', 1, '2018-03-26', 2, '12-June-1965', '34-Samir Campus'),
(318, 5, 2029, 'Amarbhai Vadaliya', 'Male', 'candidate/photo_317_1522079091.jpg', 'amarbhaivadaliya@gmail.com', 'amarbhaivadaliya', 'Amarbhai Vadaliya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '9-February-1965', '23-Mansi Residency'),
(319, 5, 2030, 'Nikunjbhai Balar', 'Male', 'candidate/photo_318_1522079320.jpg', 'nikunjbhaibalar@gmail.com', 'nikunjbhaibalar', 'Nikunjbhai Balar is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '26-October-1979', 'C-446 Silver Campus'),
(320, 5, 2048, ' Laljibhai Shiyal', 'Male', 'candidate/photo_319_1522079479.jpeg', 'laljibhaishiyal@gmail.com', 'laljibhaishiyal', 'Laljibhai Shiyal is a candidate of All India Trinamool Congress of gujarat lok sabha election', 1, '2018-03-26', 2, '9-July-1964', '33-Amar Vekariya'),
(321, 5, 2045, 'Amar Desai', 'Male', 'candidate/photo_320_1522079616.jpg', 'amardesai@gmail.com', 'amardesai', 'Amar Desai is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '20-July-1967', 'A-55, Vinayak Society'),
(322, 5, 2049, 'Krunal Koshiya', 'Male', 'candidate/photo_321_1522079810.jpeg', 'krunalkoshiya@gmail.com', 'krunalkoshiya', 'Krunal Koshiya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '11-May-1963', 'C-31, Amar javan Residency'),
(323, 5, 2051, 'Rameshbhai Pokiya', 'Male', 'candidate/photo_322_1522080025.jpeg', 'rameshbhaipokiya@gmail.com', 'rameshbhaipokiya', 'Rameshbhai Pokiya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '22-July-1970', 'C-33,Sitanagar'),
(324, 5, 2052, 'Kartikbhai Vasoya', 'Male', 'candidate/photo_323_1522080145.jpg', 'kartikbhaivasoya@gmail.com', 'kartikbhaivasoya', 'Kartikbhai Vasoya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '7-May-1961', '23-Om Campus'),
(325, 5, 2065, 'Vinubhai Pavchiya', 'Male', 'candidate/photo_324_1522080318.jpg', 'vinubhaipavchiya@gmail.com', 'vinubhaipavchiya', 'Vinubhai Pavchiya is a candidate of All India Trinamool Congress  for gujarat lok sabha election', 1, '2018-03-26', 2, '11-April-1963', 'C-23,Vrundavan Campus'),
(326, 5, 2066, 'Jayantibhai Sirvi', 'Male', 'candidate/photo_325_1522080510.jpg', 'jayantibhaisirvi@gmail.com', 'jayantibhaisirvi', 'Jayantibhai Sirvi is a candidate of All India Trinamool Congress for lok sabha election', 1, '2018-03-26', 2, '12-Auguest-1962', 'C-89,Divu Nagar  Society'),
(327, 5, 2067, 'Babubhai Biladiya', 'Male', 'candidate/photo_326_1522080742.jpeg', 'babubhaibiladiya@gmail.com', 'babubhaibiladiya', 'Babubhai Biladiya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '9-April-1959', '45-Dangigev Society'),
(328, 5, 2068, 'Vinubhai Mithaiwala', 'Male', 'candidate/photo_327_1522080853.jpg', 'vinubhaimithaiwala@gmail.com', 'vinubhaimithaiwala', 'Vinubhai Mithaiwala is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '7-November-1962', 'C-34,Jivan Jyoti Society'),
(329, 5, 2069, 'Hardikbhai Dodiya', 'Male', 'candidate/photo_328_1522081013.jpg', 'hardikbhaidodiya@gmail.com', 'hardikbhaidodiya', 'Hardikbhai Dodiya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '7-July-1951', 'D-66,Vikas Society'),
(330, 5, 2081, 'Ramanbhai Rasik', 'Male', 'candidate/photo_329_1522081130.jpg', 'ramanbhairasik@gmail.com', 'ramanbhairasik', 'Ramanbhai Rasik is a candidate of All India Trinamool Congress for lok sabha election', 1, '2018-03-26', 2, '16-September-1971', 'C-150,Puja Residency'),
(331, 5, 2082, 'Jagdishbhai Dudhat', 'Male', 'candidate/photo_330_1522081301.jpg', 'jagdishbhaidudhat@gmail.com', 'jagdishbhaidudhat', 'Jagdishbhai Dudhat is a candidate of All India Trinamool Congress for gujarat lok sabha election', 1, '2018-03-26', 2, '12-October-1973', 'A-34,Kailash Complex'),
(332, 5, 2084, 'Rameshbhai Dondiya', 'Male', 'candidate/photo_331_1522082120.jpg', 'rameshbhaidondiya@gmail.com', 'rameshbhaidondiya', 'Rameshbhai Dondiya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '9-September-1957', 'C-24, Radhika Complex'),
(333, 5, 2083, 'Amar Kakdiya', 'Male', 'candidate/photo_332_1522082317.jpg', 'amarkakdiya@gmail.com', 'amarkakdiya', 'Amar Kakdiya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '14-July-1979', 'A-67,Sukhdev Society'),
(334, 5, 2085, 'Vinayak Chaturvedi', 'Male', 'candidate/photo_333_1522082478.jpg', 'vinayakchaturvedi@gmail.com', 'vinayakchaturvedi', 'Vinayak Chaturvedi is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '17-October-1960', 'C-23,Samira complex'),
(335, 5, 2086, 'Jagdishbhai Rakholiya', 'Male', 'candidate/photo_334_1522082609.jpg', 'jagdishbhairakholiya@gmail.com', 'jagdishbhairakholiya', 'Jagdishbhai Rakholiya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '11-September-1985', 'D-34,Sun Park'),
(336, 5, 2091, 'Ankitbhai Vasani', 'Male', 'candidate/photo_335_1522082758.jpg', 'ankitbhaivasani@gmail.com', 'ankitbhaivasani', 'Ankitbhai Vasani is a candidate of All India Trinamool Congress for lok sabha election', 1, '2018-03-26', 2, '9-September-1959', 'C-57,Kamal Park Society'),
(337, 5, 2092, 'Gordhanbhai Vanpariya', 'Male', 'candidate/photo_336_1522082935.jpg', 'gordhanbhaivanpariya@gmail.com', 'gordhanbhaivanpariya', 'Gordhanbhai Vanpariya is a candidate of gujarat lok sabha election  for All India Trinamool Congress', 1, '2018-03-26', 2, '8-July-1970', 'D-23,Gayatri'),
(338, 5, 2093, 'Pankajbhai Gohil', 'Male', 'candidate/photo_337_1522083123.jpeg', 'pankajbhaigohil@gmail.com', 'pankajbhaigohil', 'Pankajbhai Gohil is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '13-September-1960', 'E-66,Narved Sagar Society'),
(339, 5, 2094, 'Laljibhai Kumbhar', 'Male', 'candidate/photo_338_1522083257.jpg', 'laljibhaikumbhar@gmail.com', 'laljibhaikumbhar', 'Laljibhai Kumbhar is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '10-Auguest-1978', 'F-88,Sai Hights'),
(340, 5, 2096, 'Sureshbhai Vanpariya', 'Male', 'candidate/photo_339_1522083400.jpeg', 'sureshbhaivanpariya@gmail.com', 'sureshbhaivanpariya', 'Sureshbhai Vanpariya is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '26-October-1961', 'C-34,Om Hights'),
(341, 5, 2097, 'Vinodbhai Dankhara', 'Male', 'candidate/photo_340_1522083567.jpeg', 'vinodbhaidankhara@gmail.com', 'vinodbhaidankhara', 'Vinodbhai Dankhara is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-26', 2, '21-November-1962', 'C-88,Jalpa Complex'),
(342, 2, 2089, 'Vishalbhai Vaghasiya', 'Male', 'candidate/photo_341_1522084966.jpg', 'vishalbhaivaghasiya@gmail.com', 'vishalbhaivaghasiya', 'Vishalbhai Vaghasiya is a candidate of indian national Congress for gujarat lok sabha', 1, '2018-03-26', 2, '24-Auguest-1959', 'C-56,Sarita Complex'),
(343, 2, 1842, 'Karshanbhai Dhudat', 'Male', 'candidate/photo_342_1522085313.jpg', 'karshanbhaidhudat@gmail.com', 'karshanbhaidhudat', 'Karshanbhai Dhudat is a Indian National Congress Candidate for lok sabha election', 1, '2018-03-26', 2, '21-July-1948', 'C-87,Amipark Complex'),
(344, 2, 1843, 'Suraj Rathi', 'Male', 'candidate/photo_343_1522085475.jpg', 'surajrathi@gmail.com', 'surajrathi', 'Suraj Rathi is a candidate for Indian National Congress for lok sabha election', 1, '2018-03-26', 2, '16-May-1967', 'A-89,Yamini Society'),
(345, 7, 1782, 'Vinubhai Chauhan', 'Male', 'candidate/photo_344_1522085652.jpg', 'vinubhaichauhan@gmail.com', 'vinubhaichauhan', 'Vinubhai Chauhan is a candidate for Communist Party of India (Marxist)  for loksabha election', 1, '2018-03-26', 2, '10-July-1982', 'A-78,Vidhi Complexx'),
(346, 7, 1783, 'Rameshbhai Dugarani', 'Male', 'candidate/photo_345_1522085791.jpg', 'rameshbhaidugarani@gmail.com', 'rameshbhaidugarani', 'Rameshbhai Dugarani is a Communist Party of India (Marxist)  for lok sabha election', 1, '2018-03-26', 2, '12-July-1967', 'A-56,Laxmi nagar'),
(347, 2, 1844, 'Mohanbhai Dhameliya', 'Male', 'candidate/photo_346_1522085935.jpg', 'mohanbhaidhameliya@gmail.com', 'mohanbhaidhameliya', 'Mohanbhai Dhameliya is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '11-June-1967', 'C-75,Kailash Complex'),
(348, 2, 1845, 'Parth Viradiya', 'Male', 'candidate/photo_347_1522086047.jpeg', 'parthviradiya@gmail.com', 'parthviradiya', 'Parth Viradiya is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '6-October-1961', 'E-778,Sita Complex'),
(349, 6, 1782, 'Vinubhai Vaghasiya', 'Male', 'candidate/photo_348_1522086196.jpeg', 'vinubhaivaghasiya@gmail.com', 'vinubhaivaghasiya', 'Vinubhai Vaghasiya is a Candidate of Communist Party of India for Lok Sabha Election', 1, '2018-03-26', 2, '9-July-1965', 'C-55,Sarita Nagar Complex');
INSERT INTO `tbl_candidate_registration` (`candidate_id`, `party_id`, `location_id`, `candidate_name`, `gender`, `profile_pic`, `email_id`, `password`, `description`, `status`, `r_date`, `category_id`, `dob`, `office_address`) VALUES
(350, 7, 1784, 'Sureshbhai Dondiya', 'Male', 'candidate/photo_349_1522086331.jpg', 'sureshbhaidondiya@gmail.com', 'sureshbhaidondiya', 'Sureshbhai Dondiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-26', 2, '12-July-1957', 'C-78,Narmada Sagar Society'),
(351, 7, 1785, 'Mohanbhai kasi', 'Male', 'candidate/photo_350_1522086435.jpg', 'mohanbhaikasi@gmail.com', 'mohanbhaikasi', 'Mohanbhai kasi is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-26', 2, '12-Auguest-1970', 'C-34,Sivanjali Complex'),
(352, 7, 1786, 'Kamlesh Koshiya', 'Male', 'candidate/photo_351_1522086653.jpg', 'kamleshkoshiya@gmail.com', 'kamleshkoshiya', 'Kamlesh Koshiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-26', 2, '12-Auguest-1980', 'E-89,Vishal Nagar'),
(353, 7, 1787, 'Naresh Rakholiya', 'Male', 'candidate/photo_352_1522086749.jpeg', 'nareshrakholiya@gmail.com', 'nareshrakholiya', 'Naresh Rakholiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-26', 2, '12-September-1944', 'C-45,Namrata Society'),
(354, 7, 1788, 'Vikasbhai Monpara', 'Male', 'candidate/photo_353_1522086937.jpg', 'vikasbhaimonpara@gmail.com', 'vikasbhaimonpara', 'Vikasbhai Monpara is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-26', 2, '5-October-1977', 'C-34,Vinayak Chowk'),
(355, 7, 1872, 'Balubhai Findoliya', 'Male', 'candidate/photo_354_1522087606.jpg', 'balubhaifindoliya@gmail.com', 'balubhaifindoliya', 'Balubhai Findoliya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-26', 2, '14-October-1961', 'A-7,Jamuna nagar'),
(356, 7, 1790, 'Manojbhai Pandya', 'Male', 'candidate/photo_355_1522087828.jpeg', 'manojbhaipandya@gmail.com', 'manojbhaipandya', 'Manojbhai Pandya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-26', 2, '5-October-1960', 'C-21,Shiv Nagar Society'),
(357, 8, 1872, 'Balubhai Vaghasiya', 'Male', 'candidate/photo_356_1522088027.jpg', 'balubhaivaghasiya@gmail.com', 'balubhaivaghasiya', 'Balubhai Vaghasiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-26', 2, '14-October-1961', 'D-44,Amideep Square'),
(358, 2, 1838, 'Pankaj Patil', 'Male', 'candidate/photo_357_1522088678.jpg', 'pankajpatil@gmail.com', 'pankajpatil', 'Pankaj Patil is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '10-Auguest-1949', 'C-67, Vinayak Complex'),
(359, 2, 1846, 'Dhiraj Morbi', 'Male', 'candidate/photo_358_1522088785.jpg', 'dhirajmorbi@gmail.com', 'dhirajmorbi', 'Dhiraj Morbi is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-26', 2, '15-June-1967', 'C-78, Umiya Dham'),
(360, 8, 1783, 'Umeshbhai Malviya', 'Male', 'candidate/photo_359_1522088928.jpg', 'umeshbhaimalviya@gmail.com', 'umeshbhaimalviya', 'Umeshbhai Malviya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-26', 2, '22-June-1974', 'C-89,90 Rameshvar Society'),
(361, 8, 1784, 'Vinodbhai kakadiya', 'Male', 'candidate/photo_360_1522089058.jpeg', 'vinodbhaikakadiya@gmail.com', 'vinodbhaikakadiya', 'Vinodbhai kakadiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '4-September-1983', '45-Rajesh Society'),
(362, 8, 1785, 'Suresh Chaturvedi', 'Male', 'candidate/photo_361_1522089250.jpg', 'sureshchaturvedi@gmail.com', 'sureshchaturvedi', 'Suresh Chaturvedi is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '16-October-1970', 'C-34,Lal Darvaja'),
(363, 8, 1786, 'Amarbhai Dankhara', 'Male', 'candidate/photo_362_1522089385.jpeg', 'amarbhaidankhara@gmail.com', 'amarbhaidankhara', 'Amarbhai Dankhara is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '17-April-1973', 'C-55,Sita Complex'),
(364, 8, 1787, 'Suresh Nakarani', 'Male', 'candidate/photo_363_1522089639.jpg', 'sureshnakarani@gmail.com', 'sureshnakarani', 'Suresh Nakarani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '15-October-1966', 'A-45,Ananddhara Society'),
(365, 8, 1788, 'Rasikbhai Morbivala', 'Male', 'candidate/photo_364_1522089771.jpg', 'rasikbhaimorbivala@gmail.com', 'rasikbhaimorbivala', 'Rasikbhai Morbivala is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '18-October-1946', 'c-45,Daya Park Society'),
(366, 8, 1789, 'Karmsibhai Viradiya', 'Male', 'candidate/photo_365_1522089963.jpg', 'karmsibhaiviradiya@gmail.com', 'karmsibhaiviradiya', 'E-90,Sliver Plaza', 1, '2018-03-27', 2, '21-Auguest-1972', '23-Samira Residency'),
(367, 2, 1925, 'Kalpeshbhai Shiroya', 'Male', 'candidate/photo_366_1522090088.jpg', 'kalpeshbhaishiroya@gmail.com', 'kalpeshbhaishiroya', 'Kalpeshbhai Shiroya is a candidate of Indian national Congress for lok sabha election in india', 1, '2018-03-27', 2, '8-Auguest-1975', '89-Ram mandir '),
(368, 2, 1924, 'Dilipbhai Bakxi', 'Male', 'candidate/photo_367_1522090213.jpg', 'dilipbhaibakxi@gmail.com', 'dilipbhaibakxi', 'Dilipbhai Bakxi is a candidate of Indian national Congress for lok sabh election in india', 1, '2018-03-27', 2, '10-December-1972', 'D-99,Suraj Residency'),
(369, 2, 1922, 'Vijaybhai Dankhara', 'Male', 'candidate/photo_368_1522090367.jpeg', 'vijaybhaidankhara@gmail.com', 'vijaybhaidankhara', 'Vijaybhai Dankhara is a candidate of indian national congress for lok sabha election in vadodara', 1, '2018-03-27', 2, '24-December-1978', 'F-345,Kalpit Society'),
(370, 2, 1921, 'Sureshbhai Lakhani', 'Male', 'candidate/photo_369_1522102395.jpg', 'sureshbhailakhani@gmail.com', 'sureshbhailakhani', 'Sureshbhai Lakhani is a indian National congress of lok sabha election', 1, '2018-03-27', 2, '8-December-1969', 'C-171,Gurukrupa Society'),
(371, 2, 1923, 'Sagarbhai Thummar', 'Male', 'candidate/photo_370_1522102609.jpg', 'sagarbhaithummar@gmail.com', 'sagarbhaithummar', 'Sagarbhai Thummar is a candidate of Indian National Congress for loksabha election', 1, '2018-03-27', 2, '10-April-1964', '23-Suman Residency'),
(372, 2, 1926, 'Paresh Jani', 'Male', 'candidate/photo_371_1522102714.jpg', 'pareshjani@gmail.com', 'pareshjani', 'Paresh Jani is a candidate of Indian National Congress for lok sabha election in india', 1, '2018-03-27', 2, '17-May-1955', '78-Kartik Residency'),
(373, 2, 1927, 'Maheshbhai Vaghani', 'Male', 'candidate/photo_372_1522103032.jpg', 'maheshbhaivaghani@gmail.com', 'maheshbhaivaghani', 'Maheshbhai Vaghani is a candidate of Indian National Party for lok sabha election', 1, '2018-03-27', 2, '8-November-1955', 'C-78,Samira Heights'),
(374, 2, 1928, 'Suresh Dalal', 'Male', 'candidate/photo_373_1522103162.jpg', 'sureshdalal@gmail.com', 'sureshdalal', 'Suresh Dalal is a candidate of Indian National Congress for loksabha election in india', 1, '2018-03-27', 2, '9-May-1953', 'A-56,Amideep Complex'),
(375, 2, 1929, 'Mahendrabhai Kalthiya', 'Male', 'candidate/photo_374_1522103281.jpg', 'mahendrabhaikalthiya@gmail.com', 'mahendrabhaikalthiya', 'Mahendrabhai Kalthiya is a candidate of Indian National Congress for lok sabha election', 1, '2018-03-27', 2, '7-September-1941', '448,Shivanjali Complex'),
(376, 7, 1921, 'Pareshbhai Mehta', 'Male', 'candidate/photo_375_1522103406.jpg', 'pareshbhaimehta@gmail.com', 'pareshbhaimehta', 'Pareshbhai Mehta is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '8-October-1964', 'A-67,Varsha Society'),
(377, 7, 1922, 'Hiteshbhai Lakhani', 'Male', 'candidate/photo_376_1522103558.jpg', 'hiteshbhailakhani@gmail.com', 'hiteshbhailakhani', 'Hiteshbhai Lakhani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '1-April-1950', 'D-45,Vimal Complex'),
(378, 7, 1923, 'Mohanbhai Nakarani', 'Male', 'candidate/photo_377_1522103653.jpeg', 'mohanbhainakarani@gmail.com', 'mohanbhainakarani', 'Mohanbhai Nakarani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '16-June-1970', 'D-88,Valmiki Society'),
(379, 7, 1924, 'Rajubhai Bhimani', 'Male', 'candidate/photo_378_1522103758.jpg', 'rajubhaibhimani@gmail.com', 'rajubhaibhimani', 'Rajubhai Bhimani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '18-June-1964', 'D-399,Umarvada Complex'),
(380, 7, 1925, 'Mayankbhai Ahir', 'Male', 'candidate/photo_379_1522103878.jpeg', 'mayankbhaiahir@gmail.com', 'mayankbhaiahir', 'Mayankbhai Ahir is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '6-April-1964', 'D-57,Silver Complex'),
(381, 7, 1926, 'Keyurbhai Lakhani', 'Male', 'candidate/photo_380_1522103980.jpeg', 'keyurbhailakhani@gmail.com', 'keyurbhailakhani', 'Keyurbhai Lakhani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '6-September-1973', 'C-77,Shubham Residency'),
(382, 7, 1927, 'Rambhai Padsala', 'Male', 'candidate/photo_381_1522104078.jpg', 'rambhaipadsala@gmail.com', 'rambhaipadsala', 'Rambhai Padsala is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '14-Auguest-1960', 'd-44,Ramji Mandir'),
(383, 7, 1928, 'Kamleshbhai Kalthiya', 'Male', 'candidate/photo_382_1522104192.jpeg', 'kamleshbhaikalthiya@gmail.com', 'kamleshbhaikalthiya', 'Kamleshbhai Kalthiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '23-July-1967', 'D-88,Kala Kunj Complex'),
(384, 7, 1929, 'Laljibhai Dhanani', 'Male', 'candidate/photo_383_1522104288.jpg', 'laljibhaidhanani@gmail.com', 'laljibhaidhanani', 'Laljibhai Dhanani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '7-December-1959', 'd-99,Nayana Society'),
(385, 8, 1921, 'Shaileshbhai Bavishi', 'Male', 'candidate/photo_384_1522104529.jpg', 'shaileshbhaibavishi@gmail.com', 'shaileshbhaibavishi', 'Shaileshbhai Bavishi is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '12-September-1961', 'c-88,Maharaja Farm'),
(386, 8, 1922, 'Suresh Parikh', 'Male', 'candidate/photo_385_1522104663.jpg', 'sureshparikh@gmail.com', 'sureshparikh', 'Suresh Parikh is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '13-April-1956', '49-Shivam Plaza'),
(387, 8, 1923, 'Manoj Patidar', 'Male', 'candidate/photo_386_1522117170.jpg', 'manojpatidar@gmail.com', 'manojpatidar', 'Manoj Patidar is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '9-September-1959', 'A-78,Amixa Apt'),
(388, 8, 1924, 'Vinodbhai Monpara', 'Male', 'candidate/photo_387_1522117692.jpg', 'vinodbhaimonpara@gmail.com', 'vinodbhaimonpara', 'Vinodbhai Monpara is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '18-December-1943', 'C-23,Kokial Complex'),
(389, 8, 1925, 'Amarbhai Patoliya', 'Male', 'candidate/photo_388_1522117876.jpg', 'amarbhaipatoliya@gmail.com', 'amarbhaipatoliya', 'Amarbhai Patoliya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '18-June-1949', 'C-239,Suhas Appartment'),
(390, 8, 1926, 'Sharadkumar Kesariya', 'Male', 'candidate/photo_389_1522118022.jpeg', 'sharadkumarkesariya@gmail.com', 'sharadkumarkesariya', 'Sharadkumar Kesariya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '21-June-1960', 'C-56,Samira Society'),
(391, 8, 1927, 'Ranabhai Sutariya', 'Male', 'candidate/photo_390_1522118181.jpg', 'ranabhaisutariya@gmail.com', 'ranabhaisutariya', 'Ranabhai Sutariya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '9-July-1964', '55,Adarsh Society'),
(392, 8, 1928, 'Kantibhai Jivani', 'Male', 'candidate/photo_391_1522118290.jpg', 'kantibhaijivani@gmail.com', 'kantibhaijivani', 'Kantibhai Jivani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '10-September-1961', '56-Sahyoj Society'),
(393, 8, 1929, 'Jairambhai Zadafiya', 'Male', 'candidate/photo_392_1522118376.jpg', 'jairambhaizadafiya@gmail.com', 'jairambhaizadafiya', 'Jairambhai Zadafiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '22-March-1963', '33-Ajamaldham Society'),
(394, 2, 1963, 'Chaganbhai Sabhadiya', 'Male', 'candidate/photo_393_1522118558.jpg', 'chaganbhaisabhadiya@gmail.com', 'chaganbhaisabhadiya', 'Chaganbhai Sabhadiya is a candidate of Indian National Congress for Lok sabha election', 1, '2018-03-27', 2, '16-Auguest-1962', '111-Vishal Nagar'),
(395, 2, 1964, 'Pankajbhai Chaklasiya', 'Male', 'candidate/photo_394_1522118650.jpg', 'pankajbhaichaklasiya@gmail.com', 'pankajbhaichaklasiya', 'Pankajbhai Chaklasiya is a candidate of Indian National Congress for Lok Sabha election in india', 1, '2018-03-27', 2, '31-December-1963', 'B-201,Omkar Residency'),
(396, 2, 1965, 'Ramnibhai Kukadiya', 'Male', 'candidate/photo_395_1522118764.jpg', 'ramnibhaikukadiya@gmail.com', 'ramnibhaikukadiya', 'Ramnibhai Kukadiya is a candidate of Indian National Congress for loksabha election in india', 1, '2018-03-27', 2, '28-July-1961', 'B-107, Swati Society'),
(397, 2, 1967, 'Rajeshbhai Ghelani', 'Male', 'candidate/photo_396_1522118925.jpg', 'rajeshbhaighelani@gmail.com', 'rajeshbhaighelani', 'Rajeshbhai Ghelani is a candidate of Indian National Congress for lok sabha election in india', 1, '2018-03-27', 2, '27-April-1960', '421-422,Marutidham Society'),
(398, 2, 1966, 'Dineshbhai Maniya', 'Male', 'candidate/photo_397_1522119042.jpeg', 'dineshbhaimaniya@gmail.com', 'dineshbhaimaniya', 'Dineshbhai Maniya is a candidate of Indian National Congress for Lok sabha election in india', 1, '2018-03-27', 2, '28-February-1956', 'A-33,V-1,Dharmanandan Raw-House'),
(399, 2, 1968, 'Chandubhai Dhameliya', 'Male', 'candidate/photo_398_1522119160.jpg', 'chandubhaidhameliya@gmail.com', 'chandubhaidhameliya', 'Chandubhai Dhameliya is a candidate of Indian National Congress for Lok sabha election in india', 1, '2018-03-27', 2, '23-Auguest-1958', 'Om Raw-House'),
(400, 2, 1969, 'Karshanbhai Ghori', 'Male', 'candidate/photo_399_1522119303.jpeg', 'karshanbhaighori@gmail.com', 'karshanbhaighori', 'Karshanbhai Ghori is a candidate of Indian National Congress for lok sabha election in india', 1, '2018-03-27', 2, '23-October-1987', '75-Hemkunj Society'),
(401, 2, 1971, 'Bhikhabha Thummar', 'Male', 'candidate/photo_400_1522119419.jpeg', 'bhikhabhathummar@gmail.com', 'bhikhabhathummar', 'Bhikhabha Thummar is a candidate of Indian national Congress for lok sabha election in india', 1, '2018-03-27', 2, '29-December-1965', '45-Sahyoj Society'),
(402, 7, 1963, 'Kurjibhai Godhat', 'Male', 'candidate/photo_401_1522119540.jpeg', 'kurjibhaigodhat@gmail.com', 'kurjibhaigodhat', 'Kurjibhai Godhat is a candidate of Communist Party of India (Marxist)  for lok sabha election in india', 1, '2018-03-27', 2, '12-June-1959', '134-Hastinapur Society'),
(403, 7, 1964, 'Bhupatbhai Gangani', 'Male', 'candidate/photo_402_1522119654.jpg', 'bhupatbhaigangani@gmail.com', 'bhupatbhaigangani', 'Bhupatbhai Gangani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '15-July-1957', 'A-48, Narayan nagar Society'),
(404, 7, 1965, 'Jagdishbhai Ghantala', 'Male', 'candidate/photo_403_1522119786.jpeg', 'jagdishbhaighantala@gmail.com', 'jagdishbhaighantala', 'Jagdishbhai Ghantala is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '7-October-1964', 'B-62,Siddharth Nagar '),
(405, 7, 1966, 'Ranabhai Gorasiya', 'Male', 'candidate/photo_404_1522120348.jpeg', 'ranabhaigorasiya@gmail.com', 'ranabhaigorasiya', 'Ranabhai Gorasiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '29-June-1960', '90-Ravipark Society'),
(406, 6, 1872, 'Rasikbhai Dhankhara', 'Male', 'candidate/photo_405_1522120451.jpeg', 'rasikbhaidhankhara@gmail.com', 'rasikbhaidhankhara', 'Rasikbhai Dhankhara is a Candidate of Communist Party of India for Lok Sabha Election', 1, '2018-03-27', 2, '10-July-1954', '34-Laxminagar Society'),
(407, 7, 1967, 'Jivarajbhai Chachani', 'Male', 'candidate/photo_406_1522120556.jpeg', 'jivarajbhaichachani@gmail.com', 'jivarajbhaichachani', 'Jivarajbhai Chachani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '18-Auguest-1961', 'B-64,Siddharth Nagar Society'),
(408, 7, 1968, 'Dhanjibhai Lathiya', 'Male', 'candidate/photo_407_1522120659.jpg', 'dhanjibhailathiya@gmail.com', 'dhanjibhailathiya', 'Dhanjibhai Lathiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '8-June-1962', 'D-67,Sarvopari Society'),
(409, 7, 1969, 'Balabhai Lathiya', 'Male', 'candidate/photo_408_1522120841.jpg', 'balabhailathiya@gmail.com', 'balabhailathiya', 'Balabhai Lathiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '28-September-1955', '10-Balkrishana Society'),
(410, 7, 1970, 'Dayabhai Chopada', 'Male', 'candidate/photo_409_1522120952.jpeg', 'dayabhaichopada@gmail.com', 'dayabhaichopada', 'Dayabhai Chopada is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '19-Auguest-1958', '12-Valamnagar Society'),
(411, 8, 1963, 'Dayabhai Mandani', 'Male', 'candidate/photo_410_1522121257.jpg', 'dayabhaimandani@gmail.com', 'dayabhaimandani', 'Dayabhai Mandani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '20-Auguest-1956', '239/1,Matavadi'),
(412, 8, 1964, 'Devsibhai Ghori', 'Male', 'candidate/photo_411_1522121513.jpg', 'devsibhaighori@gmail.com', 'devsibhaighori', 'Devsibhai Ghori is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '22-September-1958', '34-Sarita Society'),
(413, 8, 1965, ' Nagjibhai Nakarani', 'Male', 'candidate/photo_412_1522121637.jpeg', 'nagjibhainakarann@gmail.com', 'nagjibhainakarann', ' Nagjibhai Nakarani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '20-November-1963', '65- Bajrang Society'),
(415, 8, 1966, 'Ramnikbhai Khandera', 'Male', 'candidate/photo_413_1522124973.jpeg', 'ramnikbhaikhandera@gmail.com', 'ramnikbhaikhandera', 'Ramnikbhai Khandera is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '12-October-1966', 'A-123, Sapna park'),
(416, 8, 1967, 'Ronibhai Rokad', 'Male', 'candidate/photo_415_1522125873.jpg', 'ronibhairokad@gmail.com', 'ronibhairokad', 'Ronibhai Rokad is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '15-October-1962', 'A-12, Radhe krishna'),
(417, 8, 1968, 'Mukeshbhai Godhani', 'Male', 'candidate/photo_416_1522126117.jpeg', 'mukeshbhaigodhani@gmail.com', 'mukeshbhaigodhani', 'Mukeshbhai Godhani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '12-September-1962', 'A-39, Mahalaxmi Society'),
(418, 8, 1969, 'Divyeshbhai Shroff', 'Male', 'candidate/photo_417_1522126358.jpeg', 'divyeshbhaishroff@gmail.com', 'divyeshbhaishroff', 'Divyeshbhai Shroff is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '9-Auguest-1969', 'A-12, Prabhudarshan Society'),
(419, 8, 1970, 'Bharatbhai Ramvala', 'Male', 'candidate/photo_418_1522126595.jpeg', 'bharatbharamvala@gmail.com', 'bharatbharamvala', 'Bharatbhai Ramvala is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '14-April-1969', 'A-23, Ram krishna Society'),
(420, 8, 1971, 'Yogeshbhai Savaliya', 'Male', 'candidate/photo_419_1522126787.jpeg', 'yogeshbhaisavaliya@gmail.com', 'yogeshbhaisavaliya', 'Yogeshbhai Savaliya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '10-September-1975', 'A-23, Yogikrupa Society'),
(421, 2, 1977, 'Kantibhai Kachhi', 'Male', 'candidate/photo_420_1522127426.jpg', 'kantibhaikachhi@gmail.com', 'kantibhaikachhi', 'Kantibhai Kachhi is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-27', 2, '10-Auguest-1968', 'A-16, Ramvatika Society'),
(422, 5, 1989, 'Lalabhai Gevariya', 'Male', 'candidate/photo_421_1522128158.jpg', 'lalabhaigevariya@gmail.com', 'lalabhaigevariya', 'Lalabhai Gevariya is a candidate of All India Trinamool Congress for gujarat lok sabha.', 1, '2018-03-27', 2, '18-Auguest-1948', 'A-40, Apple Park Society'),
(423, 2, 1984, 'Sandipbhai Solanki', 'Male', 'candidate/photo_422_1522128353.jpg', 'sandipbhaisolanki@gmail.com', 'sandipbhaisolanki', 'Sandipbhai Solanki is a candidate of indian national congress for gujarat lok sabha.', 1, '2018-03-27', 2, '16-May-1973', '23, Ganga Sagar Society'),
(424, 2, 1986, 'Manubhai Dobariya', 'Male', 'candidate/photo_423_1522128580.jpeg', 'manubhaidobariya@gmail.com', 'manubhaidobariya', 'Manubhai Dobariya is a candidate of indian national congress for gujarat lok sabha', 1, '2018-03-27', 2, '31-March-1973', 'C-23, Divya Park Society'),
(425, 2, 1987, 'Tapubhai Gada', 'Male', 'candidate/photo_424_1522128808.jpg', 'tapubhaigada@gmail.com', 'tapubhaigada', 'Tapubhai Gada is a candidate of indian national congress for gujarat lok sabha. ', 1, '2018-03-27', 2, '10-July-1975', '59, Sagar Society'),
(426, 2, 1989, 'Baghabhai Thummar', 'Male', 'candidate/photo_425_1522129074.jpeg', 'baghabhaithummar@gmail.com', 'baghabhaithummar', 'Baghabhai Thummar is a candidate of indian national congress for gujarat in bhavnagar lok sabha.', 1, '2018-03-27', 2, '26-Auguest-1971', '67, Shiv parvati Society'),
(427, 2, 1988, 'Kishorbhai Goti', 'Male', 'candidate/photo_426_1522129221.jpg', 'kishorbhaigoti@gmail.com', 'kishorbhaigoti', 'Kishorbhai Goti is a candidate of indian national congress for gujarat lok sabha.', 1, '2018-03-27', 2, '23-October-1975', '3, Shradha Society'),
(428, 2, 1990, 'Keshubhai Kapoor', 'Male', 'candidate/photo_427_1522129380.jpg', 'keshubhaikapoor@gmail.com', 'keshubhaikapoor', 'Keshubhai Kapoor is a candidate of indian national congress for bhavnagar lok sabha', 1, '2018-03-27', 2, '15-September-1967', 'c-34, Ishavar Krupa Society'),
(429, 2, 1991, 'Batukbhai Rai', 'Male', 'candidate/photo_428_1522129536.jpeg', 'batukbhairai@gmail.com', 'batukbhairai', 'Batukbhai Rai is a candidate of indian national congress for gujarat lok sabha', 1, '2018-03-27', 2, '31-May-1992', 'D-45, Raviraj Appartment'),
(430, 2, 1992, 'Priyancebhai Patoliya', 'Male', 'candidate/photo_429_1522129712.jpg', 'priyancebhaipatoliya@gmail.com', 'priyancebhaipatoliya', 'Priyancebhai Patoliya is a candidate of indian national congress for bhavnagar lok sabha.', 1, '2018-03-27', 2, '29-Auguest-1967', '56, Sitaram Society'),
(431, 5, 1990, 'Girdharbhai Jani', 'Male', 'candidate/photo_430_1522130179.jpeg', 'girdharbhaijani@gmail.com', 'girdharbhaijani', 'Girdharbhai Jani is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-27', 2, '24-June-1968', '45, Ankita Appartment'),
(432, 7, 1984, 'DarshanBhai Gorasiya', 'Male', 'candidate/photo_431_1522130356.jpg', 'darshanBhaigorasiya@gmail.com', 'darshanBhaigorasiya', 'DarshanBhai Gorasiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '18-October-1970', '30, Shiv Shakti Appartment'),
(433, 8, 1983, 'Parthbhai Bhimani', 'Male', 'candidate/photo_432_1522130530.jpg', 'parthbhaibhimani@gmail.com', 'parthbhaibhimani', 'Parthbhai Bhimani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '31-September-1965', '46, Surendranagar Society'),
(434, 7, 1986, 'Jashbhai Dhupeliya', 'Male', 'candidate/photo_433_1522130727.jpg', 'jashbhaidhupeliya@gmail.com', 'jashbhaidhupeliya', 'Jashbhai Dhupeliya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '10-July-1968', '67, Giriraj Appartment'),
(435, 7, 1987, 'Prasunbhai Adak', 'Male', 'candidate/photo_434_1522130900.jpeg', 'prasunbhaiadak@gmail.com', 'prasunbhaiadak', 'Prasunbhai Adak is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '17-July-1970', '43, Giri Park Society'),
(436, 7, 1988, 'Vishalbhai Chander', 'Male', 'candidate/photo_435_1522131035.jpeg', 'vishalbhaichander@gmail.com', 'vishalbhaichander', 'Vishalbhai Chander is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '31-May-1962', '45, Raja Appartment'),
(437, 7, 1989, 'Kirtibhai Sharma', 'Male', 'candidate/photo_436_1522131164.jpg', 'kirtibhaisharma@gmail.com', 'kirtibhaisharma', 'Kirtibhai Sharma is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '22-March-1960', 'B-23, Shakti Society'),
(438, 7, 1990, 'Ankitbhai Vaghani', 'Male', 'candidate/photo_437_1522131356.jpeg', 'ankitbhaivaghani@gmail.com', 'ankitbhaivaghani', 'Ankitbhai Vaghani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '24-May-1975', '45, Rajarani Appartment'),
(439, 5, 1991, 'Surojitbhai Das', 'Male', 'candidate/photo_438_1522131490.jpg', 'surojitbhaidas@gmail.com', 'surojitbhaidas', 'Surojitbhai Das is a Candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-03-27', 2, '14-July-1961', '34, Alpesh Park'),
(440, 7, 1991, 'Rajdeepbhai Ghosh', 'Male', 'candidate/photo_439_1522131752.jpeg', 'rajdeepbhaighosh@gmail.com', 'rajdeepbhaighosh', 'Rajdeepbhai Ghosh is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '22-July-1960', '67, Divyesh Appartment'),
(441, 7, 1992, 'Sreerambhai Kavadiya', 'Male', 'candidate/photo_440_1522131886.jpg', 'sreerambhaikavadiya@gmail.com', 'sreerambhaikavadiya', 'Sreerambhai Kavadiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '15-September-1971', '67, sree Appartment'),
(442, 8, 1986, 'Jiledarbhai Bind', 'Male', 'candidate/photo_441_1522132024.jpg', 'jiledarbhaibind@gmail.com', 'jiledarbhaibind', 'Jiledarbhai Bind is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '31-July-1954', 'v-67, Hans Appartment'),
(443, 8, 1987, 'Sarvajeetbhai Singh', 'Male', 'candidate/photo_442_1522132248.jpg', 'sarvajeetbhaisingh@gmail.com', 'sarvajeetbhaisingh', 'Sarvajeetbhai Singh is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '11-May-1969', '45, National Park Society'),
(444, 8, 1988, 'Sureshbhai Kumar', 'Male', 'candidate/photo_443_1522132383.jpg', 'sureshbhaikumar@gmail.com', 'sureshbhaikumar', 'Sureshbhai Kumar is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '19-Auguest-1972', '30, Ajay Park Society'),
(445, 8, 1989, 'Jeffrey Johnson', 'Male', 'candidate/photo_444_1522132520.jpg', 'jeffreyjohnson@gmail.com', 'jeffreyjohnson', 'Jeffrey Johnson is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '27-October-1973', '45, Ram Appartment'),
(446, 8, 1990, 'Pravinbhai Bhamare', 'Male', 'candidate/photo_445_1522132689.jpeg', 'pravinbhaibhamare@gmail.com', 'pravinbhaibhamare', 'Pravinbhai Bhamare is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '16-September-1983', '30, Jay Park Society'),
(447, 8, 1991, 'Harshvardhanbhai Bhuva', 'Male', 'candidate/photo_446_1522132859.jpg', 'harshvardhanbhaibhuva@gmail.com', 'harshvardhanbhaibhuva', 'Harshvardhanbhai Bhuva is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '31-March-1976', 'C-120, Hari Appartment'),
(448, 8, 1992, 'Sunilkumar Molli', 'Male', 'candidate/photo_447_1522133003.jpeg', 'sunilkumarmolli@gmail.com', 'sunilkumarmolli', 'Sunilkumar Molli is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '28-Auguest-1965', 'A-48, Vishnu Appartment'),
(449, 2, 2000, 'MurliBhai Krishna', 'Male', 'candidate/photo_448_1522134477.jpeg', 'murliBhaikrishna@gmail.com', 'murliBhaikrishna', 'MurliBhai Krishna is a candidate of indian national congress for lok saha in gujarat', 1, '2018-03-27', 2, '19-Auguest-1958', 'A-37, Siddhi Vonayak Society'),
(450, 2, 2001, 'Yashkumar Darva', 'Male', 'candidate/photo_449_1522134890.jpeg', 'yashkumardarva@gmail.com', 'yashkumardarva', 'Yashkumar Darva is a candidate of indian national congress for lok sabha', 1, '2018-03-27', 2, '17-October-1966', '38, Parag Palace'),
(451, 2, 2002, 'Prashantbhai Kandhare ', 'Male', 'candidate/photo_450_1522135027.jpeg', 'prashantbhaikandhare@gmail.com', 'prashantbhaikandhare ', 'Prashantbhai Kandhare is a candidate of indian national congress for lok sabha in Jamnagar', 1, '2018-03-27', 2, '27-June-1964', 'A-23,Ekta Appartment'),
(452, 2, 2003, 'Murtazabhai Ranalvi', 'Male', 'candidate/photo_451_1522135177.jpeg', 'murtazabhairanalvi@gmail.com', 'murtazabhairanalvi', 'Murtazabhai Ranalvi is a candidate of indian national congress for lok sabha in Jamnagar', 1, '2018-03-27', 2, '23-Auguest-1960', 'A-34, Harmani Appartment'),
(453, 2, 2006, 'Arjunbhai Basavaraj', 'Male', 'candidate/photo_452_1522135436.jpeg', 'arjunbhaibasavaraj@gmail.com', 'arjunbhaibasavaraj', 'Arjunbhai Basavaraj is a candidate of indian national congress for gujarat lok sabha.', 1, '2018-03-27', 2, '24-July-1959', 'A-34, Ram Vishnu Appartment'),
(454, 2, 2004, 'Akashbhai Gupta', 'Male', 'candidate/photo_453_1522137535.jpeg', 'akashbhaigupta@gmail.com', 'akashbhaigupta', 'Akashbhai Gupta is candidate of indian national congress for jamnagar lok sabha election', 1, '2018-03-27', 2, '10-February-1964', '36, Amipark Society'),
(455, 2, 2005, 'Mahavirbhai Gandhi', 'Male', 'candidate/photo_454_1522137686.jpg', 'mahavirbhaigandhi@gmail.com', 'mahavirbhaigandhi', 'Mahavirbhai Gandhi is a candidate of indian national congress for lok sabha election', 1, '2018-03-27', 2, '18-July-1957', 'B-34, Amit Appartment'),
(456, 2, 2007, 'Parasbhai Prajapati', 'Male', 'candidate/photo_455_1522137880.jpeg', 'parasbhaiprajapati@gmail.com', 'parasbhaiprajapati', 'Parasbhai Prajapati is a candidate of indian national congress for Jamnagar lok sabha election', 1, '2018-03-27', 2, '28-June-1964', 'A-234, Ashwinikumar Society'),
(457, 2, 2008, 'Richard Modi', 'Male', 'candidate/photo_456_1522138019.jpg', 'richardmodi@gmail.com', 'richardmodi', 'Richard Modi is a candidate for lok sabha election of indian national congress party', 1, '2018-03-27', 2, '12-November-1972', 'A-324, Kailash Parvati Society'),
(458, 8, 2006, 'Vivekbhai Mangroliya', 'Male', 'candidate/photo_457_1522138214.jpg', 'vivekbhaimangroliya@gmail.com', 'vivekbhaimangroliya', 'Vivekbhai Mangroliya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '31-July-1964', 'B-27, Bhavna Society'),
(459, 7, 2000, 'Veeramanibhai Iyer', 'Male', 'candidate/photo_458_1522138393.jpg', 'veeramanibhaiiyer@gmail.com', 'veeramanibhaiiyer', 'Veeramanibhai Iyer is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '24-July-1968', 'C-45, Ronak Appartment'),
(460, 7, 2001, 'Virajbhai Pawar', 'Male', 'candidate/photo_459_1522138545.jpg', 'virajbhaipawar@gmail.com', 'virajbhaipawar', 'Virajbhai Pawar is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '12-November-1975', 'A-23, Ashoka Appartment'),
(461, 7, 2002, 'Jayeshbhai Sahani', 'Male', 'candidate/photo_460_1522138687.jpeg', 'jayeshbhaisahani@gmail.com', 'jayeshbhaisahani', 'Jayeshbhai Sahani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '6-April-1963', 'A-348, Rajeshwari Appartment'),
(462, 7, 2003, 'Mustafa Hussain', 'Male', 'candidate/photo_461_1522142043.jpg', 'mustafahussain@gmail.com', 'mustafahussain', 'Mustafa Hussain is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '27-July-1965', 'A-234, Ruchi Appartment'),
(463, 7, 2004, 'Jenishbhai Divakar', 'Male', 'candidate/photo_462_1522142347.jpeg', 'jenishbhaidivakar@gmail.com', 'jenishbhaidivakar', 'Jenishbhai Divakar is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '12-September-1970', 'A-56, Gopi Appartment'),
(464, 7, 2005, 'Yashbhai Patel', 'Male', 'candidate/photo_463_1522142521.jpeg', 'yashbhaipatel@gmail.com', 'yashbhaipatel', 'Yashbhai Patel is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '14-Auguest-1950', '58, Nirali Park Society'),
(465, 7, 2006, 'Tejasbhai Batapati', 'Male', 'candidate/photo_464_1522142664.jpeg', 'tejasbhaibatapati@gmail.com', 'tejasbhaibatapati', 'Tejasbhai Batapati is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '17-July-1953', '34-Umiya Nagar'),
(466, 7, 2007, 'Sudhanshubhai Vishodia', 'Male', 'candidate/photo_465_1522142832.jpg', 'sudhanshubhaivishodia@gmail.com', 'sudhanshubhaivishodia', 'Sudhanshubhai Vishodia is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '8-May-1964', '75, Akashvani Society'),
(467, 7, 2008, 'Aniruddhbhai Borderwala', 'Male', 'candidate/photo_466_1522142988.jpg', 'aniruddhbhaiborderwala@gmail.com', 'aniruddhbhaiborderwala', 'Aniruddhbhai Borderwala is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '9-November-1960', 'B-34, Moni Appartment'),
(468, 8, 2000, 'Anurupbhai Chakraborty', 'Male', 'candidate/photo_467_1522143340.jpeg', 'anurupbhaichakraborty@gmail.com', 'anurupbhaichakraborty', 'Anurupbhai Chakraborty is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '17-October-1965', '34, Gokul nagar Society'),
(469, 8, 2001, 'Krishnabhai Hansalia', 'Male', 'candidate/photo_468_1522143524.jpg', 'krishnabhaihansalia@gmail.com', 'krishnabhaihansalia', 'Krishnabhai Hansalia is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '18-December-1968', 'D-23, Swagat Society'),
(470, 8, 2002, 'Chandubhai Malaviya', 'Male', 'candidate/photo_469_1522143755.jpg', 'chandubhaimalaviya@gmail.com', 'chandubhaimalaviya', 'Chandubhai Malaviya is a candidate of indian national congress for rajyya sabha election', 1, '2018-03-27', 2, '19-May-1965', 'B-354, National Appartment'),
(471, 8, 2003, 'Sreeharibhai Darva', 'Male', 'candidate/photo_470_1522144028.jpg', 'sreeharibhaidarva@gmail.com', 'sreeharibhaidarva', 'Sreeharibhai Darva is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '3-September-1946', 'A-57, Sairam Appartment'),
(472, 8, 2004, 'Manojbhai Patil', 'Male', 'candidate/photo_471_1522144221.jpeg', 'manojbhaipatil@gmail.com', 'manojbhaipatil', 'Manojbhai Patil is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '14-July-1970', 'C-23, Shivanjali Appartment-1'),
(473, 8, 2005, 'Veerbhai Parekh', 'Male', 'candidate/photo_472_1522144443.jpeg', 'veerbhaiparekh@gmail.com', 'Veerbhai Parekh', 'Veerbhai Parekh is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '6-Auguest-1976', 'A-32, Pratibha Appartment'),
(474, 8, 2007, 'Jentibhai Vekariya', 'Male', 'candidate/photo_473_1522144621.jpg', 'jentibhaivekariya@gmail.com', 'jentibhaivekariya', 'Jentibhai Vekariya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '19-November-1949', '32-Shreenathji Society'),
(475, 8, 2008, 'Ramjibhai Dholakiya', 'Male', 'candidate/photo_474_1522144837.jpg', 'ramjibhaidholakiya@gmail.com', 'ramjibhaidholakiya', 'Ramjibhai Dholakiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '20-November-1961', '34, Shreenathji Appartment'),
(476, 2, 2022, 'Ankitbhai Parikh', 'Male', 'candidate/photo_475_1522145083.jpg', 'ankitbhaiparikh@gmail.com', 'ankitbhaiparikh', 'Ankitbhai Parikh is a candidate of Indian National Congress for Lok Sabha in Junagadh', 1, '2018-03-27', 2, '14-September-1982', 'A-32, Shreenathji Society-2'),
(477, 2, 203, 'Manavbhai Makhija', 'Male', 'candidate/photo_476_1522145270.jpg', 'manavbhaimakhija@gmail.com', 'manavbhaimakhija', 'Manavbhai Makhija is a candidate of Indian National Congress for lok sabha election', 1, '2018-03-27', 2, '10-September-1959', '34, Rajshree Appartment'),
(478, 2, 2023, 'Dineshbhai Kevadiya', 'Male', 'candidate/photo_477_1522145457.jpg', 'dineshbhaikevadiya@gmail.com', 'dineshbhaikevadiya', 'Dineshbhai Kevadiya is a candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-27', 2, '17-September-1966', '32- Om Park Society'),
(479, 2, 2024, 'Damubhai Savaliya', 'Male', 'candidate/photo_478_1522145642.jpeg', 'damubhaisavaliya@gmail.com', 'damubhaisavaliya', 'Damubhai Savaliya is a candidate of Indian National Congress for lok sabha election', 1, '2018-03-27', 2, '15-July-1962', 'A-34, Omprakash Complex'),
(480, 2, 2025, 'Hansbhai Hathi', 'Male', 'candidate/photo_479_1522145849.jpeg', 'hansbhaihathi@gmail.com', 'hansbhaihathi', 'Hansbhai Hathi is a candidate of indian national congress for lok sabha election', 1, '2018-03-27', 2, '10-November-1945', 'A-43, Shivkrupa Society'),
(481, 2, 2026, 'Rameshbhai Dankhara', 'Male', 'candidate/photo_480_1522146023.jpeg', 'rameshbhaidankhara@gmail.com', 'rameshbhaidankhara', 'Rameshbhai Dankhara is a candidate of indian national congress for lok sabha election', 1, '2018-03-27', 2, '9-February-1944', '354, Gokul Complex'),
(482, 2, 2027, 'Dharmeshbhai Rokadiya', 'Male', 'candidate/photo_481_1522146172.jpg', 'dharmeshbhairokadiya@gmail.com', 'dharmeshbhairokadiya', 'Dharmeshbhai Rokadiya is a candidate of indian national congress for gujarat lok sabha', 1, '2018-03-27', 2, '11-September-1966', 'A-342, Nirav Complex'),
(483, 2, 2028, 'Ratibhai Virani', 'Male', 'candidate/photo_482_1522146444.jpeg', 'ratibhaivirani@gmail.com', 'ratibhaivirani', 'Ratibhai Virani is a candidate of Indian National Congress for lok sabha election in Junagadh', 1, '2018-03-27', 2, '14-Auguest-1972', 'A-32, Ayodhiya Nagar'),
(484, 2, 2029, 'Keyurbhai Jariwala', 'Male', 'candidate/photo_483_1522146703.jpg', 'keyurbhaijariwala@gmail.com', 'keyurbhaijariwala', 'Keyurbhai Jariwala is a candidate of indian national congress for lok sabha election', 1, '2018-03-27', 2, '16-October-1975', '76, Vrajdham Society'),
(485, 8, 2029, 'Nikunjbhai Bhikadiya', 'Male', 'candidate/photo_484_1522146868.jpg', 'nikunjbhaibhikadiya@gmail.com', 'nikunjbhaibhikadiya', 'Nikunjbhai Bhikadiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '18-June-1969', '34, Akansha Complex'),
(486, 7, 2022, 'Parvatbhai Patoliya', 'Male', 'candidate/photo_485_1522147090.jpg', 'parvatbhaipatoliya@gmail.com', 'parvatbhaipatoliya', 'Parvatbhai Patoliya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '19-September-1964', '23, Anupam Society'),
(487, 7, 2023, 'Kaishikbhai Ramani', 'Male', 'candidate/photo_486_1522147379.jpeg', 'kaishikbhairamani@gmail.com', 'kaishikbhairamani', 'Kaishikbhai Ramani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '18-Auguest-1963', 'B-23, Omshanti Society'),
(488, 7, 2024, 'Amitbhai Koladiya', 'Male', 'candidate/photo_487_1522147526.jpg', 'amitbhaikoladiya@gmail.com', 'amitbhaikoladiya', 'Amitbhai Koladiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '15-October-1958', '23,Ram Krishna Complex'),
(489, 7, 2025, 'Hiyanbhai Mulani', 'Male', 'candidate/photo_488_1522147707.jpg', 'hiyanbhaimulani@gmail.com', 'hiyanbhaimulani', 'Hiyanbhai Mulani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '24-November-1969', 'C-32, Vishnu Park Society'),
(490, 7, 2026, 'Yogeshwarbhai Talaviya', 'Male', 'candidate/photo_489_1522148002.jpg', 'yogeshwarbhaitalaviya@gmail.com', 'yogeshwarbhaitalaviya', 'Yogeshwarbhai Talaviya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '13-May-1939', '56, Yogeshwar Society'),
(491, 7, 2027, 'Nishanbhai Vaghela', 'Male', 'candidate/photo_490_1522148162.jpg', 'nishanbhaivaghela@gmail.com', 'nishanbhaivaghela', 'Nishanbhai Vaghela is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '15-October-1974', '34, Sagar Society '),
(492, 7, 2028, 'Jaysukhbhai Asodariya', 'Male', 'candidate/photo_491_1522148310.jpg', 'jaysukhbhaiasodariya@gmail.com', 'jaysukhbhaiasodariya', 'Jaysukhbhai Asodariya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '9-July-1956', '45, Nirav Plaza'),
(493, 7, 2029, 'Ishwarbhai Makavana', 'Male', 'candidate/photo_492_1522148473.png', 'ishwarbhaimakavana@gmail.com', 'ishwarbhaimakavana', 'Ishwarbhai Makavana is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '17-September-1966', '45, Rameshwar Society'),
(494, 7, 2030, 'Kalubhai Goyani', 'Male', 'candidate/photo_493_1522148866.jpg', 'kalubhaigoyani@gmail.com', 'kalubhaigoyani', 'Kalubhai Goyani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '15-July-1950', '21, Mansarovar Society'),
(495, 8, 2022, 'Rakeshbhai Sojitra', 'Male', 'candidate/photo_494_1522149114.jpg', 'rakeshbhaisojitra@gmail.com', 'rakeshbhaisojitra', 'Rakeshbhai Sojitra is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '31-Auguest-1961', '74, Raviganj Society'),
(496, 8, 2023, 'Ravindrabhai Raswala', 'Male', 'candidate/photo_495_1522149353.jpg', 'ravindrabhairaswala@gmail.com', 'ravindrabhairaswala', 'Ravindrabhai Raswala is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '16-June-1971', 'A-32, Gyanganga Society'),
(497, 8, 2024, 'Kailashbhai Kukadiya', 'Male', 'candidate/photo_496_1522149522.jpg', 'kailashbhaikukadiya@gmail.com', 'kailashbhaikukadiya', 'Kailashbhai Kukadiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '17-February-1955', '343, Komal Complex'),
(498, 8, 2025, 'Robinbhai Singhaniya', 'Male', 'candidate/photo_497_1522149720.jpg', 'robinbhaisinghaniya@gmail.com', 'robinbhaisinghaniya', 'Robinbhai Singhaniya is a candidate of indian national congress for Rajya sabah election in junagadh', 1, '2018-03-27', 2, '11-May-1963', '32, Rahul Complex'),
(499, 8, 2026, 'Kiranbhai Kamani', 'Male', 'candidate/photo_498_1522149900.jpg', 'kiranbhaikamani@gmail.com', 'kiranbhaikamani', 'Kiranbhai Kamani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '11-May-1960', '54, Ratnasagar Society'),
(500, 8, 2027, 'Pratikbhai Patil', 'Male', 'candidate/photo_499_1522150073.jpg', 'pratikbhaipatil@gmail.com', 'pratikbhaipatil', 'Pratikbhai Patil is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '25-September-1976', '45, Lovely Appartment'),
(501, 8, 2028, 'Dishanbhai Dodakiya', 'Male', 'candidate/photo_500_1522150235.jpeg', 'dishanbhaidodakiya@gmail.com', 'dishanbhaidodakiya', 'Dishanbhai Dodakiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '11-September-1947', '253, Ramnarayan Society'),
(502, 2, 2030, 'Kishanbhai Badani', 'Male', 'candidate/photo_501_1522150449.jpeg', 'kishanbhaibadani@gmail.com', 'kishanbhaibadani', 'Kishanbhai Badani is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-27', 2, '24-Auguest-1968', '45, Ramprakash Society'),
(503, 2, 2044, 'Manojbhai Mithaiwala', 'Male', 'candidate/photo_502_1522150720.jpeg', 'manojbhaimithaiwala@gmail.com', 'manojbhaimithaiwala', 'Manojbhai Mithaiwala is a candidate of indian national congress for lok sabha in anand', 1, '2018-03-27', 2, '19-September-1972', '45, Raj Krishna Society'),
(504, 2, 2045, 'Mailikbhai Malik', 'Male', 'candidate/photo_503_1522151252.jpeg', 'mailikbhaimalik@gmail.com', 'mailikbhaimalik', 'Mailikbhai Malik is a candidate of indian national congress for lok sabha election in Anand', 1, '2018-03-27', 2, '16-April-1942', '34, Rajnarayan Society'),
(505, 2, 2047, 'Tarakbhai Dholkiya', 'Male', 'candidate/photo_504_1522151453.jpg', 'tarakbhaidholkiya@gmial.com', 'tarakbhaidholkiya', 'Tarakbhai Dholkiya is a candidate of indian national congress for lok sabha election', 1, '2018-03-27', 2, '17-Auguest-1958', '56, Shivanjali Society-2'),
(506, 2, 2046, 'Niranjanbhai Narola', 'Male', 'candidate/photo_505_1522151599.jpeg', 'niranjanbhainarola@gmail.com', 'niranjanbhainarola', 'Niranjanbhai Narola is a candidate of indian national congress for lok sabha election in anand', 1, '2018-03-27', 2, '10-July-1948', '43, Raviraj Complex'),
(507, 2, 2048, 'Rohitbhai Rankoliya', 'Male', 'candidate/photo_506_1522151809.jpeg', 'rohitbhairankoliya@gmail.com', 'rohitbhairankoliya', 'Rohitbhai Rankoliya is a candidate of indian national congress for lok sabha election in Anand', 1, '2018-03-27', 2, '14-October-1968', '43, Shivshakti Society'),
(508, 2, 2050, 'Sarasbhai Pancholi', 'Male', 'candidate/photo_507_1522151993.jpeg', 'sarasbhaipancholi@gmail.com', 'sarasbhaipancholi', 'Sarasbhai Pancholi is a candidate for lok sabha election of indian national congress in Anand ', 1, '2018-03-27', 2, '23-June-1975', 'B-32, Laxmi Appartment'),
(509, 2, 2049, 'Chetanbhai Chovatiya', 'Male', 'candidate/photo_508_1522152123.jpeg', 'chetanbhaichovatiya@gmail.com', 'chetanbhaichovatiya', 'Chetanbhai Chovatiya is a candidate of indian national congress for lok sabha election in Gujarat', 1, '2018-03-27', 2, '23-October-1942', '45, Ramkrupa Society'),
(510, 2, 2051, 'Chimanbhai Chodvadiya', 'Male', 'candidate/photo_509_1522152256.jpeg', 'chimanbhaichodvadiya@gmail.com', 'chimanbhaichodvadiya', 'Chimanbhai Chodvadiya is a candidate of indidan national congress for lok sabha election', 1, '2018-03-27', 2, '27-April-1969', '34, Ramsagar Society'),
(511, 2, 2052, 'Harikrishnabhai Ramoliya', 'Male', 'candidate/photo_510_1522152445.jpeg', 'harikrishnabhairamoliya@gmail.com', 'harikrishnabhairamoliya', 'Harikrishnabhai Ramoliya is a candidate of indian national congress for lok sabha election in Anand', 1, '2018-03-27', 2, '11-March-1981', '75, Harikrishna Society'),
(512, 7, 2044, 'Sanjbhai Sanghani', 'Male', 'candidate/photo_511_1522152949.jpeg', 'sanjbhaisanghani@gmail.com', 'sanjbhaisanghani', 'Sanjbhai Sanghani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '18-May-1939', '45, Rukshamani Society'),
(513, 7, 2045, 'Jerambhai Jodhani', 'Male', 'candidate/photo_512_1522153093.jpeg', 'jerambhaijodhani@gmail.com', 'jerambhaijodhani', 'Jerambhai Jodhani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '4-July-1972', '34, Shama Complex'),
(514, 7, 2046, 'Kamanbhai Khurana', 'Male', 'candidate/photo_513_1522153440.jpeg', 'kamanbhaikhurana@gmail.com', 'kamanbhaikhurana', 'Kamanbhai Khurana is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '17-April-1964', '33, Radhakrishna Society'),
(515, 7, 2047, 'Ravindranath Pokiya', 'Male', 'candidate/photo_514_1522153696.jpeg', 'ravindranathpokiya@gmail.com', 'ravindranathpokiya', 'Ravindranath Pokiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '14-November-1956', '43, Rahulraj Appartment'),
(516, 7, 1985, 'Vinodbhai Viradiya', 'Male', 'candidate/photo_515_1522153945.jpeg', 'vinodbhaiviradiya@gmail.com', 'vinodbhaiviradiya', 'Vinodbhai Viradiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '20-June-1975', '76, Rasberry COmplex'),
(517, 7, 2048, 'Pankajbhai Vadodariya', 'Male', 'candidate/photo_516_1522154215.jpeg', 'pankajbhaivadodariya@gmail.com', 'pankajbhaivadodariya', 'Pankajbhai Vadodariya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '26-September-1970', '54, Valamnagar Society'),
(518, 7, 2049, 'Naitikbhai Ponkiya', 'Male', 'candidate/photo_517_1522154497.jpeg', 'naitikbhaiponkiya@gmail.com', 'naitikbhaiponkiya', 'Naitikbhai Ponkiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '19-December-1967', 'B-32, Raj Complex'),
(519, 7, 2050, 'Ranchodbhai Dhanani', 'Male', 'candidate/photo_518_1522154693.jpeg', 'ranchodbhaidhanani@gmail.com', 'ranchodbhaidhanani', 'Ranchodbhai Dhanani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '31-June-1961', '43, Shiva Complex'),
(520, 7, 2052, 'Bhupatbhai Sanghani', 'Male', 'candidate/photo_519_1522154869.jpeg', 'bhupatbhaisanghani@gmail.com', 'bhupatbhaisanghani', 'Bhupatbhai Sanghani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '10-April-1967', '32, Saras Complex'),
(521, 7, 2051, 'Balubhai Pikadiya', 'Male', 'candidate/photo_520_1522168710.jpeg', 'balubhaipikadiya@gmail.com', 'balubhaipikadiya', 'Balubhai Pikadiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '13-September-1963', 'A-231, Yoginath society'),
(522, 8, 2044, 'Kanjibhai Kukadiya', 'Male', 'candidate/photo_521_1522168862.jpg', 'kanjibhaikukadiya@gmail.com', 'kanjibhaikukadiya', 'Kanjibhai Kukadiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '26-July-1978', 'C-323, Kiran Appartment');
INSERT INTO `tbl_candidate_registration` (`candidate_id`, `party_id`, `location_id`, `candidate_name`, `gender`, `profile_pic`, `email_id`, `password`, `description`, `status`, `r_date`, `category_id`, `dob`, `office_address`) VALUES
(523, 8, 2045, 'Vimalbhai Khunt', 'Male', 'candidate/photo_522_1522169049.jpeg', 'vimalbhaikhunt@gmail.com', 'vimalbhaikhunt', 'Vimalbhai Khunt is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '19-March-1965', 'F-32, Lakshman Complex'),
(524, 8, 2046, 'Vithalbhai Gundraniya', 'Male', 'candidate/photo_523_1522169437.jpeg', 'vithalbhaigundraniya@gmail.com', 'vithalbhaigundraniya', 'Vithalbhai Gundraniya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '16-Auguest-1972', '32, Kiran park Society'),
(525, 8, 2048, 'Ritikbhai Ramoliya', 'Male', 'candidate/photo_524_1522169669.jpeg', 'ritikbhairamoliya@gmail.com', 'ritikbhairamoliya', 'Ritikbhai Ramoliya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '26-September-1982', '32, Akanksha Complex'),
(526, 8, 2049, 'Roshanbhai Reshamwala', 'Male', 'candidate/photo_525_1522169819.jpeg', 'roshanbhaireshamwala@gmail.com', 'roshanbhaireshamwala', 'Roshanbhai Reshamwala is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '28-October-1976', 'D-312, Niru Complex'),
(527, 8, 2047, 'Dayalbhai Dokadiya', 'Male', 'candidate/photo_526_1522169949.jpeg', 'dayalbhaidokadiya@gmail.com', 'dayalbhaidokadiya', 'Dayalbhai Dokadiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '10-May-1969', 'A-32, Ramvatika Complex'),
(528, 8, 2050, 'Rokadbhai Tikhaliya', 'Male', 'candidate/photo_527_1522170072.jpeg', 'rokadbhaitikhaliya@gmail.com', 'rokadbhaitikhaliya', 'Rokadbhai Tikhaliya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '31-December-1986', '65, Roshan Complex'),
(529, 8, 2051, 'Mansukhbhai Vivadiya', 'Male', 'candidate/photo_528_1522170243.jpeg', 'mansukhbhaivivadiya@gmail.com', 'mansukhbhaivivadiya', 'Mansukhbhai Vivadiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-27', 2, '4-March-1976', '54, Ramkrupa Society'),
(530, 2, 2061, 'Riteshbhai Mulani', 'Male', 'candidate/photo_529_1522170672.jpeg', 'riteshbhaimulani@gmail.com', 'riteshbhaimulani', 'Riteshbhai Mulani is a candidate of indian national congress for lok sabha election in Navasari', 1, '2018-03-27', 2, '11-July-1964', '54, Rohan Complex'),
(531, 2, 2063, 'Vikasbhai Jagani', 'Male', 'candidate/photo_530_1522170879.jpeg', 'vikasbhaijagani@gmail.com', 'vikasbhaijagani', 'Vikasbhai Jagani is a candidate of indian national congress for lok sabha election in Navasari', 1, '2018-03-27', 2, '9-January-1974', '65, Raviraj Complex'),
(532, 2, 2064, 'Alpeshbhai Akhirotali', 'Male', 'candidate/photo_531_1522171215.jpeg', 'alpeshbhaiakhirotali@gmail.com', 'alpeshbhaiakhirotali', 'Alpeshbhai Akhirotali is a candidate of indian national congress for lok sabha election in Navasari', 1, '2018-03-27', 2, '11-October-1973', '23, Raghuveer Complex'),
(533, 2, 2065, 'Raghuveerbhai Satasiya', 'Male', 'candidate/photo_532_1522171350.jpg', 'raghuveerbhaisatasiya@gmail.com', 'raghuveerbhaisatasiya', 'Raghuveerbhai Satasiya is a candidate for lok sabha election of indian national congress party in Navasari', 1, '2018-03-27', 2, '10-April-1966', '54, Krupa Society'),
(534, 2, 2066, 'Smitbhai Khambaliya', 'Male', 'candidate/photo_533_1522171564.jpeg', 'smitbhaikhambaliya@gmial.com', 'smitbhaikhambaliya', 'Smitbhai Khambaliya is a candidate of indian national congress for lok sabha election in Navasari', 1, '2018-03-27', 2, '6-April-1967', '75, Smit Residency'),
(535, 2, 2067, 'Mayurbhai Ghoghari', 'Male', 'candidate/photo_534_1522171888.jpg', 'mayurbhaighoghari@gmial.com', 'mayurbhaighoghari', 'Mayurbhai Ghoghari is a candidate of indian national congress for lok sabha election', 1, '2018-03-27', 2, '28-March-1974', '43, Shivganga Society'),
(536, 2, 2069, 'Rupeshbhai Bhut', 'Male', 'candidate/photo_535_1522172061.jpeg', 'rupeshbhaibhut@gmail.com', 'rupeshbhaibhut', 'Rupeshbhai Bhut is a candidate of indian national congress for lok sabha election in Navasari', 1, '2018-03-27', 2, '8-March-1982', 'B-321, Khushi Kush Complex'),
(537, 2, 2062, 'Krishbhai Anghan', 'Male', 'candidate/photo_536_1522172235.jpeg', 'krishbhaianghan@gmail.com', 'krishbhaianghan', 'Krishbhai Anghan is a candidate for lok sabha election of indian national congress in Navasari', 1, '2018-03-27', 2, '19-June-1965', '43, Rameshwaram Complex'),
(538, 2, 2068, 'Devbhai Nakarani', 'Male', 'candidate/photo_537_1522172357.jpeg', 'devbhainakarani@gmail.com', 'devbhainakarani', 'Devbhai Nakarani is a candidate of indian national congress for lok sabha election in Navasari', 1, '2018-03-27', 2, '5-February-1975', '86, Devbhoomi Society'),
(539, 7, 2061, 'Dakshbhai Narola', 'Male', 'candidate/photo_538_1522172520.jpeg', 'dakshbhainarola@gmail.com', 'dakshbhainarola', 'Dakshbhai Narola is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '11-February-1959', 'A-64, Vitoriagreen Appartment'),
(540, 7, 2062, 'Samarbhai Soladiya', 'Male', 'candidate/photo_539_1522172681.jpeg', 'samarbhaisoladiya@gmail.com', 'samarbhaisoladiya', 'Samarbhai Soladiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '6-March-1967', '53, Karnavati Appartment'),
(541, 7, 2063, 'Munshibhai Mithawala', 'Male', 'candidate/photo_540_1522172822.jpeg', 'munshibhaimithawala@gmial.com', 'munshibhaimithawala', 'Munshibhai Mithawala is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '15-February-1960', '32, Sarjan Palace'),
(542, 7, 2064, 'Rokibhai Maheshwari', 'Male', 'candidate/photo_541_1522172941.jpeg', 'rokibhaimaheshwari@gmail.com', 'rokibhaimaheshwari', 'Rokibhai Maheshwari is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '20-December-1967', '93, Vardhan Society'),
(543, 7, 2065, 'Raghvajibhai Rankoliya', 'Male', 'candidate/photo_542_1522173175.jpeg', 'raghvajibhairankoliya@gmail.com', 'raghvajibhairankoliya', 'Raghvajibhai Rankoliya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '11-Auguest-1972', '54, Vaishnodevi Appartment'),
(544, 7, 2066, 'Ahembhai Lakhani', 'Male', 'candidate/photo_543_1522173369.jpeg', 'ahembhailakhani@gmail.com', 'ahembhailakhani', 'Ahembhai Lakhani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '21-September-1982', '54, Anandi Complex'),
(545, 7, 2067, 'Chimanjibhai Lathiya', 'Male', 'candidate/photo_544_1522173477.jpeg', 'chimanjibhailathiya@gmail.com', 'chimanjibhailathiya', 'Chimanjibhai Lathiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '11-March-1985', '83, Pal Appartment'),
(546, 7, 2068, 'Jalbhai Dabbawala', 'Male', 'candidate/photo_545_1522173655.jpeg', 'jalbhaidabbawala@gmail.com', 'jalbhaidabbawala', 'Jalbhai Dabbawala is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '10-September-1967', '42, Siddhachakra Complex'),
(547, 7, 2069, 'Gordhanbhai Rupareliya', 'Male', 'candidate/photo_546_1522173985.jpeg', 'gordhanbhairupareliya@gmail.com', 'gordhanbhairupareliya', 'Gordhanbhai Rupareliya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-27', 2, '12-September-1979', '54, Divya Appartment'),
(548, 8, 2061, 'Aakashbhai Vekariya', 'Male', 'candidate/photo_547_1522212529.jpg', 'aakashbhaivekariya@gmail.com', 'aakashbhaivekariya', 'Aakashbhai Vekariya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '14-Auguest-1957', 'C-56,Umiya Park Society'),
(549, 8, 2062, 'Vinodbhai Sanagni', 'Male', 'candidate/photo_548_1522212763.jpg', 'vinodbhaisangani@gmail.com', 'vinodbhaisangani', 'Vinodbhai Sanagni is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '15-June-1958', '54, Bhoomi Complex'),
(550, 8, 2063, 'Sureshbhai Limbani', 'Male', 'candidate/photo_549_1522212956.jpg', 'sureshbhailimbani@gmail.com', 'sureshbhailimbani', 'Sureshbhai Limbani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '9-June-1957', '45-Suman nagar'),
(551, 8, 2064, 'Piyushbhai Modi', 'Male', 'candidate/photo_550_1522213303.jpg', 'piyushbhaimodi@gmail.com', 'piyushbhaimodi', 'Piyushbhai Modi is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '16-September-1953', '78-sundarvan Society'),
(552, 8, 2065, 'Hareshbhai Mehta', 'Male', 'candidate/photo_551_1522213403.jpg', 'hareshbhaimehta@gmail.com', 'hareshbhaimehta', 'Hareshbhai Mehta is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '24-Auguest-1959', '56-Kiran Society'),
(553, 8, 2066, 'Sureshbhai Baghel', 'Male', 'candidate/photo_552_1522213500.jpg', 'sureshbhaibaghel@gmail.com', 'sureshbhaibaghel', 'Sureshbhai Baghel is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '8-Auguest-1957', '45-Laxmi Nagar Society'),
(554, 8, 2067, 'Rajubhai Makvana', 'Male', 'candidate/photo_553_1522213677.jpg', 'rajubhaimakvana@gmail.com', 'rajubhaimakvana', 'Rajubhai Makvana is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '17-June-1955', '67,Kailashdham Society'),
(555, 8, 2068, 'Mohanbhai Golakiya', 'Male', 'candidate/photo_554_1522213815.jpg', 'mohanbhaigolakiya@gmail.com', 'mohanbhaigolakiya', 'Mohanbhai Golakiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '20-Auguest-1960', 'C-88,Gold Plaza'),
(556, 8, 2069, 'Punitbhai Godhani', 'Male', 'candidate/photo_555_1522213964.jpg', 'punitbhaigodhani@gmail.com', 'punitbhaigodhani', 'Punitbhai Godhani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '16-June-1962', '30-Amideep residency'),
(557, 2, 2079, 'Pavankumar Surti', 'Male', 'candidate/photo_556_1522214134.jpg', 'pavankumarsurti@gmail.com', 'pavankumarsurti', 'Pavankumar Surti is a Candidate of Indian National Congress for Lok Sabha Election', 1, '2018-03-28', 2, '1-Auguest-1959', '67-Vinunagar'),
(558, 2, 2080, 'Laljibhai Solanki', 'Male', 'candidate/photo_557_1522214242.jpg', 'laljibhaisolanki@gmail.com', 'laljibhaisolanki', 'Laljibhai Solanki is a candidate of indian National Congress for lok sabha election', 1, '2018-03-28', 2, '10-October-1945', '78-Raghunandan Residency'),
(559, 2, 2083, 'Dharmendrabhai Padsala', 'Male', 'candidate/photo_558_1522214461.jpg', 'dharmendrabhaipadsala@gmail.com', 'dharmendrabhaipadsala', 'Dharmendrabhai Padsala is a candidate of Indian National Congerss for lok sabha election in india', 1, '2018-03-28', 2, '16-December-1963', '78-Radha Swami Society'),
(560, 2, 2081, 'Bavanbhai Sirvi', 'Male', 'candidate/photo_559_1522214552.jpg', 'bavanbhaisirvi@gmail.com', 'bavanbhaisirvi', 'Bavanbhai Sirvi is a candidate of Indian National Congress for Lok sabha election', 1, '2018-03-28', 2, '13-June-1957', '78-Shri Villa'),
(561, 2, 2082, 'Jitendrabhai Reshamwala', 'Male', 'candidate/photo_560_1522214673.jpg', 'jitendrabhaireshamwala@gmail.com', 'jitendrabhaireshamwala', 'Jitendrabhai Reshamwala is a candidate of Indian National Congress for loksabha election', 1, '2018-03-28', 2, '9-Auguest-1953', '89-Shri Apt'),
(562, 2, 2084, 'Gautambhai Vidani', 'Male', 'candidate/photo_561_1522214812.jpg', 'gautambhaividani@gmail.com', 'gautambhaividani', 'Gautambhai Vidani is a candidate of Indian national Congress for lok sabha election', 1, '2018-03-28', 2, '11-September-1959', 'C-45,varsha Society'),
(563, 2, 2085, 'Dhirubhai Jivani', 'Male', 'candidate/photo_562_1522214922.jpg', 'dhirubhaijivani@gmail.com', 'dhirubhaijivani', 'Dhirubhai Jivani is a candidate of Indian national Congress for lok sabha election', 1, '2018-03-28', 2, '20-November-1967', 'A-89,Yoginagar'),
(564, 2, 2086, 'Vikasbhai Parmar', 'Male', 'candidate/photo_563_1522215011.jpg', 'vikasbhaiparmar@gmail.com', 'vikasbhaiparmar', 'Vikasbhai Parmar is a candidate of indian national Congress for lok sabha election ', 1, '2018-03-28', 2, '12-September-1960', '677-Nidhi Residency'),
(565, 2, 2087, 'Amanbhai Maisuriya', 'Male', 'candidate/photo_564_1522215133.jpeg', 'amanbhaimaisuriya@gmail.com', 'amanbhaimaisuriya', 'Amanbhai Maisuriya is a candidate of Indian National congress for lok sabha election', 1, '2018-03-28', 2, '9-March-1966', '78-Suresh Apt'),
(566, 7, 2079, 'Kanubhai Chaudhari', 'Male', 'candidate/photo_565_1522215268.jpg', 'kanubhaichaudhari@gmail.com', 'kanubhaichaudhari', 'Kanubhai Chaudhari is a candidate of Communist Party of India (Marxist)  for Lok sabha election', 1, '2018-03-28', 2, '20-December-1956', '78-Suresh Complex'),
(567, 7, 2080, 'Shrenikbhai Vidani', 'Male', 'candidate/photo_566_1522215387.jpg', 'shrenikbhaividani@gmail.com', 'shrenikbhaividani', 'Shrenikbhai Vidani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '11-June-1954', '78-Yogi Nagar'),
(568, 7, 2081, 'Vinodbhai Dobariya', 'Male', 'candidate/photo_567_1522215519.jpg', 'vinodbhaidobariya@gmail.com', 'vinodbhaidobariya', 'Vinodbhai Dobariya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '11-December-1940', '78-Yogidarshan Society'),
(569, 7, 2082, 'Kamleshbhai Kesariya', 'Male', 'candidate/photo_568_1522215685.jpg', 'kamleshbhaikesariya@gmail.com', 'kamleshbhaikesariya', 'Kamleshbhai Kesariya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '10-September-1960', 'C-45,Sukha villa'),
(570, 7, 2083, 'Vishrambhai Vivani', 'Male', 'candidate/photo_569_1522215848.jpg', 'vishrambhaivivani@gmail.com', 'vishrambhaivivani', 'Vishrambhai Vivani is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '16-October-1951', '23, Kalakunj Complex'),
(571, 7, 2084, 'Ravjibhai Ronawala', 'Male', 'candidate/photo_570_1522216041.jpg', 'ravjibhaironawala@gmail.com', 'ravjibhaironawala', 'Ravjibhai Ronawala is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '9-September-1968', '432, Shubh Appartment'),
(572, 7, 2085, 'Vijaykumar Ahir', 'Male', 'candidate/photo_571_1522216216.jpg', 'vijaykumarahir@gmail.com', 'vijaykumarahir', 'Vijaykumar Ahir is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '11-November-1972', '43, Silver Palace'),
(573, 7, 2086, 'Ratanjibhai Baghel', 'Male', 'candidate/photo_572_1522216353.jpg', 'ratanjibhaibaghel@gmail.com', 'ratanjibhaibaghel', 'Ratanjibhai Baghel is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '20-September-1959', '32, Shivalik Complex'),
(574, 7, 2087, 'Niranjanbhai Pandya', 'Male', 'candidate/photo_573_1522216475.jpg', 'niranjanbhaipandya@gmail.com', 'niranjanbhaipandya', 'Niranjanbhai Pandya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '6-April-1960', '32, Ayush Palace'),
(575, 8, 2079, 'Gatubhai Bhide', 'Male', 'candidate/photo_574_1522216658.jpg', 'gatubhaibhide@gmail.com', 'gatubhaibhide', 'Gatubhai Bhide is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '24-October-1973', '422, Jalaram Society'),
(576, 8, 2080, 'Bhupendrabhai Narola', 'Male', 'candidate/photo_575_1522216823.jpg', 'bhupendrabhainarola@gmail.com', 'bhupendrabhainarola', 'Bhupendrabhai Narola is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '20-March-1974', '32, Gopinagar'),
(577, 8, 2081, 'Vinubhai Variyar', 'Male', 'candidate/photo_576_1522217057.jpg', 'vinubhaivariyar@gmail.com', 'vinubhaivariyar', 'Vinubhai Variyar is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '12-July-1965', '43, Silver Complex'),
(578, 8, 2082, 'Munnabhai Kohli', 'Male', 'candidate/photo_577_1522217298.jpg', 'munnabhaikohli@gmail.com', 'munnabhaikohli', 'Munnabhai Kohli is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '17-November-1962', '42, Approach Plaza'),
(579, 8, 2083, 'Poojanbhai Kikani', 'Male', 'candidate/photo_578_1522217524.jpg', 'poojanbhaikikani@gmail.com', 'poojanbhaikikani', 'Poojanbhai Kikani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '23-October-1965', '432, Valamnagar'),
(580, 8, 2084, 'Mehulbhai Kalyani', 'Male', 'candidate/photo_579_1522217766.jpg', 'mehulbhaikalyani@gmail.com', 'mehulbhaikalyani', 'Mehulbhai Kalyani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '9-April-1976', '54, Raghu Residency'),
(581, 8, 2085, 'Krunalbhai Saravaiya', 'Male', 'candidate/photo_580_1522217950.jpg', 'krunalbhaisaravaiya@gmail.com', 'krunalbhaisaravaiya', 'Krunalbhai Saravaiya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '10-June-1968', '53, Pramukhpark Society'),
(582, 8, 2086, 'Bhanuben Mishra', 'Male', 'candidate/photo_581_1522218115.jpeg', 'bhanubenmishra@gmail.com', 'bhanubenmishra', 'Bhanuben Mishra is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '12-September-1972', '43, Shivnagar Society'),
(583, 8, 2087, 'Nikishaben Jariwala', 'Male', 'candidate/photo_582_1522218389.jpg', 'nikishabenjariwala@gmail.com', 'nikishabenjariwala', 'Nikishaben Jariwala is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '11-June-1962', '53, Gurunagar Society'),
(584, 2, 2092, 'Ankurbhai Kachhadiya', 'Male', 'candidate/photo_583_1522218642.jpg', 'ankurbhaikachhadiya@gmail.com', 'ankurbhaikachhadiya', 'Ankurbhai Kachhadiya is a candidate of indian national congress for lok sabha election', 1, '2018-03-28', 2, '7-April-1964', '52, Pramukh Chaya Society'),
(585, 2, 2090, 'Karanbhai Pipaliya', 'Male', 'candidate/photo_584_1522218801.jpg', 'karanbhaipipaliya@gmail.com', 'karanbhaipipaliya', 'Karanbhai Pipaliya is a candidate of indian national congress for lok sabha election', 1, '2018-03-28', 2, '5-Auguest-1955', '54, Meeranagar'),
(586, 2, 2091, 'Brijeshbhai Salodiya', 'Male', 'candidate/photo_585_1522218931.jpg', 'brijeshbhaisalodiya@gmail.com', 'brijeshbhaisalodiya', 'Brijeshbhai Salodiya is a candidate of indian national congress for lok sabha election', 1, '2018-03-28', 2, '6-September-1972', '53, Ramleela Plaza'),
(587, 2, 2094, 'Tapanbhai Hadid', 'Male', 'candidate/photo_586_1522226010.jpg', 'tapanbhaihadid@gmail.com', 'tapanbhaihadid', 'Tapanbhai Hadid is a candidate of Indian National Congress for Lok Sabha election in Morbi', 1, '2018-03-28', 2, '18-September-1964', '78-Renuka Bhavan'),
(588, 2, 2095, 'Zayn Malik', 'Male', 'candidate/photo_587_1522226153.jpg', 'zaynmalik@gmail.com', 'zaynmalik', 'Zayn Malik is a candidate of Indian national Congress for lok sabha election', 1, '2018-03-28', 2, '10-July-1960', '78-Khodiyar Krupa Society'),
(589, 2, 2093, 'Vivekbhai Rajput', 'Male', 'candidate/photo_588_1522226267.jpg', 'vivekbhairajput@gmail.com', 'vivekbhairajput', 'Vivekbhai Rajput is a candidate of Indian National Cogress for loksabha election', 1, '2018-03-28', 2, '10-September-1961', '90-Krishana Kunj Society'),
(590, 2, 2096, 'Harshbhai Yadav', 'Male', 'candidate/photo_589_1522226400.jpg', 'harshbhaiyadav@gmail.com', 'harshbhaiyadav', 'Harshbhai Yadav is a candidate of Indian National Congress for lok sabha election', 1, '2018-03-28', 2, '17-September-1955', '67-Kailash Tower'),
(591, 2, 2097, 'Pareshbhai Dudhat', 'Male', 'candidate/photo_590_1522226499.jpg', 'pareshbhaidudhat@gmail.com', 'pareshbhaidudhat', 'Pareshbhai Dudhat is a candidate of Indian National Congress for Loksabha election', 1, '2018-03-28', 2, '12-November-1963', '78-Raj Narayan Tower'),
(592, 7, 2089, 'Pareshbhai Raval', 'Male', 'candidate/photo_591_1522226711.jpg', 'pareshbhairaval@gmail.com', 'pareshbhairaval', 'Pareshbhai Raval is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '20-Auguest-1950', '45-Neel Square'),
(593, 7, 2090, 'Ramanbhai Ravat', 'Male', 'candidate/photo_592_1522226832.jpg', 'ramanbhairavat@gmail.com', 'ramanbhairavat', 'Ramanbhai Ravat is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '13-June-1962', '56-Rajaji Nagar'),
(594, 7, 2091, 'Babubhai Parmar', 'Male', 'candidate/photo_593_1522226975.jpg', 'babubhaiparmar@gmail.com', 'babubhaiparmar', 'Babubhai Parmar is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '17-July-1960', '56-Bengal Intelligence Park'),
(595, 7, 2092, 'Bhimjibhai Khothari', 'Male', 'candidate/photo_594_1522227094.jpg', 'bhimjibhaikhothari@gmail.com', 'bhimjibhaikhothari', 'Bhimjibhai Khothari is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '16-Auguest-1954', '898-Padmatvati Residency'),
(596, 7, 2093, 'Ravidrabhai Tagore', 'Male', 'candidate/photo_595_1522227829.jpg', 'ravidrabhaitagore@gmail.com', 'ravidrabhaitagore', 'Ravidrabhai Tagore is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '14-December-1958', 'A-66 Kush kunj Society'),
(597, 7, 2094, 'Jayantibhai Moradiya', 'Male', 'candidate/photo_596_1522228000.jpg', 'jayantibhaimoradiya@gmail.com', 'jayantibhaimoradiya', 'Jayantibhai Moradiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '11-July-1957', '78-Rustam Pura '),
(598, 7, 2095, 'Snehal Sirvi', 'Male', 'candidate/photo_597_1522228139.jpeg', 'snehalsirvi@gmail.com', 'snehalsirvi', 'Snehal Sirvi is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '11-Auguest-1956', 'A-202,Shradha Apt'),
(599, 7, 2096, 'Bhavik Suvagiya', 'Male', 'candidate/photo_598_1522228277.jpg', 'bhaviksuvagiya@gmail.com', 'bhaviksuvagiya', 'Bhavik Suvagiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '16-June-1959', '78-The Villa'),
(600, 7, 2097, 'Surendrabhai Lathiya', 'Male', 'candidate/photo_599_1522228391.jpg', 'surendrabhailathiya@gmail.com', 'surendrabhailathiya', 'Surendrabhai Lathiya is a Candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-03-28', 2, '10-Auguest-1957', '78-Madhuram'),
(601, 8, 2089, 'Kalpeshbhai Pansuriya', 'Male', 'candidate/photo_600_1522228484.jpg', 'kalpeshbhaipansuriya@gmail.com', 'kalpeshbhaipansuriya', 'Kalpeshbhai Pansuriya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '20-Auguest-1960', '67-Pansuriya Impex'),
(602, 8, 2090, 'Madhubhai Pipaliya', 'Male', 'candidate/photo_601_1522228631.jpg', 'madhubhaipipaliya@gmail.com', 'madhubhaipipaliya', 'Madhubhai Pipaliya is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '13-September-1957', '78-Raj Green'),
(603, 8, 2091, 'Mustafa Mirza', 'Male', 'candidate/photo_602_1522228788.jpg', 'mustafamirza@gmail.com', 'mustafamirza', 'Mustafa Mirza is a candidate of Indian national Congress for rajaya sabha election', 1, '2018-03-28', 2, '17-September-1967', '78-Star Life'),
(604, 8, 2092, 'Harpalbhai Vora', 'Male', 'candidate/photo_603_1522228903.jpg', 'harpalbhaivora@gmail.com', 'harpalbhaivora', 'Harpalbhai Vora is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '16-Auguest-1956', '178-Shiv Digja'),
(605, 8, 2093, 'Harshadbhai Vasani', 'Male', 'candidate/photo_604_1522229011.jpg', 'harshadbhaivasani@gmail.com', 'harshadbhaivasani', 'Harshadbhai Vasani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '15-September-1957', '45-Garden Residency'),
(606, 8, 2094, 'Sushant Jadeja', 'Male', 'candidate/photo_605_1522229131.jpg', 'sushantjadeja@gmail.com', 'sushantjadeja', 'Sushant Jadeja is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '14-September-1954', 'A-55,Sai Smruti Residency'),
(607, 8, 2095, 'Harsh Ravani', 'Male', 'candidate/photo_606_1522229306.jpg', 'harshravani@gmail.com', 'harshravani', 'Harsh Ravani is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '17-June-1950', '78-Bapu Nagar'),
(608, 8, 2096, 'Jashbhai Khunt', 'Male', 'candidate/photo_607_1522229493.jpg', 'jashbhaikhunt@gmail.com', 'jashbhaikhunt', 'Jashbhai Khunt is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '16-April-1964', 'D-66,Sarajan Palace'),
(609, 8, 2097, 'Mansi Kachhi', 'Male', 'candidate/photo_608_1522229642.jpg', 'mansikachhi@gmail.com', 'mansikachhi', 'Mansi Kachhi is a Candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-03-28', 2, '10-July-1960', 'C-90,White Wings'),
(610, 3, 1872, 'Pappu Patel', 'Male', 'candidate/photo_609_1522230304.jpg', 'pappupatel@gmail.com', 'pappupatel', 'Pappu Patel is a candidate of  Aam Aadmi Party for Lok sabha election', 1, '2018-03-28', 2, '6-September-1965', 'A-66,Jolly Plaza'),
(611, 3, 1833, 'Shilpa Tondy', 'Male', 'candidate/photo_610_1522230436.jpg', 'shilpatondy@gmail.com', 'shilpatondy', 'Shilpa Tondy is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '15-October-1961', '77-Monark Residency'),
(612, 3, 1822, 'Digvijay Singh', 'Male', 'candidate/photo_611_1522230544.jpg', 'digvijaysingh@gmail.com', 'digvijaysingh', 'Digvijay Singh is a candidate of Aam Aadmi Party for lok sabha  election', 1, '2018-03-28', 2, '16-July-1958', 'A-78,Star Avenue'),
(613, 3, 1823, 'Pradipbhai Tevari', 'Male', 'candidate/photo_612_1522230901.jpg', 'pradipbhaitevari@gmail.com', 'pradipbhaitevari', 'Pradipbhai Tevari is a candidate of Aam Aadmi Party for Lok Sabha election in india', 1, '2018-03-28', 2, '19-Auguest-1959', 'C-45,Bal Mukund Society'),
(614, 3, 1824, 'Kartikbhai Iryan', 'Male', 'candidate/photo_613_1522231373.jpg', 'kartikbhaiiryan@gmail.com', 'kartikbhaiiryan', 'Kartikbhai Iryan is a candiddate of Aam Aadmi Party for lok sabha  election.', 1, '2018-03-28', 2, '23-September-1978', '99-Morgan Villa'),
(615, 3, 1825, 'Nitibha Kaul', 'Female', 'candidate/photo_614_1522231526.jpg', 'nitibhakaul@gmail.com', 'nitibhakaul', 'Nitibha Kaul is a candidate of Aam Aadmi Party for Lok sabha election', 1, '2018-03-28', 2, '10-July-1981', 'A-78,Manohar Park Society'),
(616, 3, 1826, 'Surajbhai Pancholi', 'Male', 'candidate/photo_615_1522231641.jpg', 'surajbhaipancholi@gmail.com', 'surajbhaipancholi', 'Surajbhai Pancholi is a candidate of Aam Aadmi Party for Lok sabha election', 1, '2018-03-28', 2, '17-Auguest-1969', '90-Deep Son Colony'),
(617, 3, 1827, 'Sukhbir Singh', 'Male', 'candidate/photo_616_1522231785.jpg', 'sukhbirsingh@gmail.com', 'sukhbirsingh', 'Sukhbir Singh is a candidate of Aam Aadmi Party for Lok sabha election', 1, '2018-03-28', 2, '27-October-1970', 'A-56,Bhagal'),
(618, 3, 1828, 'Bhumikaben Reddy', 'Female', 'candidate/photo_617_1522231919.jpg', 'bhumikabenreddy@gmail.com', 'bhumikabenreddy', 'Bhumikaben Reddy is a candidate of Aam Aadmi Party for loksabha election', 1, '2018-03-28', 2, '27-Auguest-1972', 'C-77,Maduri Complex'),
(619, 3, 1830, 'Yashwant Sinha', 'Male', 'candidate/photo_618_1522232220.jpg', 'yashwantsinha@gmail.com', 'yashwantsinha', 'Yashwant Sinha is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '21-September-1993', 'C-56,Full Park'),
(620, 3, 1829, 'Shayam Siroya', 'Male', 'candidate/photo_619_1522232334.jpg', 'shayamsiroya@gmail.com', 'shayamsiroya', 'Shayam Siroya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '17-June-1970', '77-Sangini Swaraj'),
(621, 3, 1831, 'Swaraj Patil', 'Male', 'candidate/photo_620_1522232546.jpg', 'swarajpatil@gmail.com', 'swarajpatil', 'Swaraj Patil is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '16-October-1974', 'C-77,Amrapali Society'),
(622, 3, 1832, 'Amarpali Kukadiya', 'Male', 'candidate/photo_621_1522232672.jpg', 'amarpalikukadiya@gmail.com', 'amarpalikukadiya', 'Amarpali Kukadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '10-December-1970', 'C-561,Vaishnodevi Heights'),
(623, 3, 1834, 'Suryabhai Sundar', 'Male', 'candidate/photo_622_1522232813.jpg', 'suryabhaisundar@gmail.com', 'suryabhaisundar', 'Suryabhai Sundar is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '29-June-1964', '67-Jainabpuri Society'),
(624, 3, 1835, 'Janak Pande', 'Male', 'candidate/photo_623_1522233007.jpg', 'janakpande@gmail.com', 'janakpande', 'Janak Pande is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '18-Auguest-1960', '90-Slok Society'),
(625, 3, 1837, 'Om Puri', 'Male', 'candidate/photo_624_1522233093.jpg', 'ompuri@gmail.com', 'ompuri', 'Om Puri is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '21-December-1963', 'D-34,Shashant Park'),
(626, 3, 1836, 'Jay Lalita', 'Female', 'candidate/photo_625_1522233255.jpg', 'jaylalita@gmail.com', 'jaylalita', 'Jay Lalita is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '14-July-1950', '67-Mox Suda Society'),
(627, 3, 1838, 'Sandya Rathi', 'Female', 'candidate/photo_626_1522233408.jpg', 'sandyarathi@gmail.com', 'sandyarathi', 'Sandya Rathi is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '23-June-1968', '78-Mukul Residency'),
(628, 3, 1839, 'Vishalbhai Viradiya', 'Male', 'candidate/photo_627_1522233811.jpg', 'vishalbhaiviradiya@gmail.com', 'vishalbhaiviradiya', 'Vishalbhai Viradiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '11-November-1962', '32, Khodiyar Park'),
(629, 3, 1840, 'Nathubhai Bhikadiya', 'Male', 'candidate/photo_628_1522234160.jpg', 'nathubhaibikadiya@gmail.com', 'nathubhaibikadiya', 'Nathubhai Bhikadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '8-July-1961', '43, Ankur Society'),
(630, 3, 1841, 'Guru Randhava', 'Male', 'candidate/photo_629_1522234375.jpg', 'gururandhava@gmail.com', 'gururandhava', 'Guru Randhava is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '10-Auguest-1964', '32, Ashwin Society'),
(631, 3, 1842, 'Pragajibhai Dungarani', 'Male', 'candidate/photo_630_1522234557.jpg', 'pragajibhaidungarani@gmail.com', 'pragajibhaidungarani', 'Pragajibhai Dungarani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '7-March-1966', '43, Mani Darshan Appartment'),
(632, 3, 1843, 'Chandanbhai Tiger', 'Male', 'candidate/photo_631_1522234752.jpg', 'chandanbhaitiger@gmail.com', 'chandanbhaitiger', 'Chandanbhai Tiger is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '16-Auguest-1972', '43, Shivnagar'),
(633, 3, 1844, 'Motibhai Motiwala', 'Male', 'candidate/photo_632_1522234922.jpg', 'motibhaimotiwala@gmail.com', 'motibhaimotiwala', 'Motibhai Motiwala is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '7-May-1962', '43, Jamuna Park'),
(634, 3, 1845, 'Bajarangbhai Daruwala', 'Male', 'candidate/photo_633_1522235104.jpg', 'bajarangbhaidaruwala@gmail.com', 'bajarangbhaidaruwala', 'Bajarangbhai Daruwala is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '10-May-1962', '32, Rang Avdhut Society'),
(635, 3, 1849, 'Laljibhai Mandani', 'Male', 'candidate/photo_634_1522235309.jpeg', 'laljibhaimandani@gmail.com', 'laljibhaimandani', 'Laljibhai Mandani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '2-July-1966', '53, Ambawadi Society'),
(636, 3, 1852, 'Sagarbhai Kapadiya', 'Male', 'candidate/photo_635_1522235608.jpg', 'sagarbhaikapadiya@gmail.com', 'sagarbhaikapadiya', 'Sagarbhai Kapadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '9-Auguest-1972', '54, Prince Palace'),
(637, 3, 1785, 'Harmanbhai Gandhi', 'Male', 'candidate/photo_636_1522235861.jpg', 'harmanbhaigandhi@gmail.com', 'harmanbhaigandhi', 'Harmanbhai Gandhi is a candidate of Aam Aadmi Party for lok sabha in ahemdabad', 1, '2018-03-28', 2, '21-April-1959', '54, Arjun nagar'),
(638, 3, 1785, 'Prakashbhai Borad', 'Male', 'candidate/photo_637_1522236357.jpg', 'prakashbhaiborad@gmail.com', 'prakashbhaiborad', 'Prakashbhai Borad is a cadidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '6-January-1959', '52, Giriraj Complex'),
(639, 3, 1789, 'Himani Zalavadiya', 'Female', 'candidate/photo_638_1522236604.jpg', 'hemantbhaizalavadiya@gmail.com', 'hemantbhaizalavadiya', ' Himani Zalavadiya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '10-Auguest-1965', '53, Bhavani Society'),
(640, 3, 1791, 'Sureshbhai Zalim', 'Male', 'candidate/photo_639_1522236750.jpg', 'sureshbhaizalim@gmial.com', 'sureshbhaizalim', 'Sureshbhai Zalim is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '5-June-1958', '654, Royal Palaza'),
(641, 3, 1794, 'Keshubhai Kevadiya', 'Male', 'candidate/photo_640_1522236863.png', 'keshubhaikevadiya@gmail.com', 'keshubhaikevadiya', 'Keshubhai Kevadiya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '6-March-1969', '53, Bhavna Park'),
(642, 3, 1801, 'Arnavbhai Raijada', 'Male', 'candidate/photo_641_1522237023.jpeg', 'arnavbhairaijada@gmail.com', 'arnavbhairaijada', 'Arnavbhai Raijada is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '27-September-1978', '65, Ravi Park Society'),
(643, 3, 1803, 'Tarakbhai Mehta', 'Male', 'candidate/photo_642_1522237187.jpg', 'tarakbhaimehta@gmail.com', 'tarakbhaimehta', 'Tarakbhai Mehta is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '19-July-1972', '64, Tapi Society'),
(644, 3, 1813, 'Hirabhai Heerawala', 'Male', 'candidate/photo_643_1522237350.jpg', 'hirabhaiheerawala@gmail.com', 'hirabhaiheerawala', 'Hirabhai Heerawala is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '13-Auguest-1962', '75, Yogi Park Society'),
(645, 3, 1807, 'Kanubhai Kagadiya', 'Male', 'candidate/photo_644_1522237479.jpg', 'kanubhaikagadiya@gmail.com', 'kanubhaikagadiya', 'Kanubhai Kagadiya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '8-Auguest-1976', '65, Shiva Palace'),
(646, 3, 1782, 'Divyambhai Bavishi', 'Male', 'candidate/photo_645_1522237667.jpg', 'divyambhaibavishi@gmail.com', 'divyambhaibavishi', 'Divyambhai Bavishi is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '26-September-1978', '64, Shivalik Complex'),
(647, 3, 1785, 'Bhavinbhai Golakiya', 'Male', 'candidate/photo_646_1522237812.jpg', 'bhavinbhaigolakiya@gmail.com', 'bhavinbhaigolakiya', 'Bhavinbhai Golakiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '8-Auguest-1972', '76, Parvatinagar'),
(648, 3, 1794, 'Dakshbhai Dalal', 'Male', 'candidate/photo_647_1522238155.jpg', 'dakshbhaidalal@gmail.com', 'dakshbhaidalal', 'Dakshbhai Dalal is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '16-June-1959', '53, Pruthvi nagar'),
(649, 3, 1802, 'Nareshbhai Fulwala', 'Male', 'candidate/photo_648_1522238397.jpg', 'nareshbhaifulwala@gmail.com', 'nareshbhaifulwala', 'Nareshbhai Fulwala is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '12-June-1977', '64, Gangeshwar Society'),
(650, 3, 1812, 'Kalubhai Kubhariya', 'Male', 'candidate/photo_649_1522238658.jpg', 'kalubhaikubhariya@gmail.com', 'kalubhaikubhariya', 'Kalubhai Kubhariya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '17-July-1970', '754, Ratanji Park'),
(651, 3, 1813, 'Khimajibhai Tejani', 'Male', 'candidate/photo_650_1522238842.jpg', 'khimajibhaitejani@gmail.com', 'khimajibhaitejani', 'Khimajibhai Tejani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '11-September-1969', '43, Vikramnagar'),
(652, 3, 1818, 'Chimanbhai Chovatiya', 'Male', 'candidate/photo_651_1522239104.jpg', 'chimanbhaichovatiya@gmail.com', 'chimanbhaichovatiya', 'Chimanbhai Chovatiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '19-April-1974', '75, Radhe Society'),
(653, 3, 1813, 'Kanjibhai Kapadiya', 'Male', 'candidate/photo_652_1522239285.jpg', 'kanjibhaikapadiya@gmail.com', 'kanjibhaikapadiya', 'Kanjibhai Kapadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '15-Auguest-1967', '64, Shivdurga Palace'),
(654, 3, 1818, 'Marmikbhai Harkhani', 'Male', 'candidate/photo_653_1522239425.jpg', 'marmikbhaiharkhani@gmail.com', 'marmikbhaiharkhani', 'Marmikbhai Harkhani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '22-September-1976', '63, Balaji nagar'),
(655, 3, 1792, 'Kevinbhai Babariya', 'Male', 'candidate/photo_654_1522239567.jpg', 'kevinbhaibabariya@gmail.com', 'kevinbhaibabariya', 'Kevinbhai Babariya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '18-November-1984', '74, Vilok Avenue'),
(656, 3, 1793, 'Chintanbhai Pavasiya', 'Male', 'candidate/photo_655_1522239731.jpg', 'chintanbhaipavasiya@gmail.com', 'chintanbhaipavasiya', 'Chintanbhai Pavasiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '19-October-1978', '64, Blog quote velly'),
(657, 3, 1798, 'Sinubhai Butani', 'Male', 'candidate/photo_656_1522239864.jpg', 'sinubhaibutani@gmail.com', 'sinubhaibutani', 'Sinubhai Butani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '17-October-1972', '63, Saujanya Park'),
(658, 3, 1807, 'Sarthakbhai Gami', 'Male', 'candidate/photo_657_1522240006.jpg', 'sarthakbhaigami@gmail.com', 'sarthakbhaigami', 'Sarthakbhai Gami is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '9-March-1976', '94, Brahma nagar'),
(659, 3, 1794, 'Harshilbhai Bakshi', 'Male', 'candidate/photo_658_1522240195.jpg', 'harshilbhaibakshi@gmail.com', 'harshilbhaibakshi', 'Harshilbhai Bakshi is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '14-October-1980', '721, Vinayak Chowk'),
(660, 3, 1801, 'Vaidikbhai Sorthiya', 'Male', 'candidate/photo_659_1522240372.jpg', 'vaidikbhaisorthiya@gmail.com', 'vaidikbhaisorthiya', 'Vaidikbhai Sorthiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '28-December-1961', '92, Shubhlaxmi Society'),
(661, 3, 1793, 'Shamalbhai Chanchad', 'Male', 'candidate/photo_660_1522240507.jpg', 'shamalbhaichanchad@gmail.com', 'shamalbhaichanchad', 'Shamalbhai Chanchad is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '19-April-1966', '632, Ananddhara Society'),
(662, 3, 1792, 'Ishanbhai Awasthi', 'Male', 'candidate/photo_661_1522240744.jpg', 'ishanbhaiawasthi@gmail.com', 'ishanbhaiawasthi', 'Ishanbhai Awasthi is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '14-July-1965', '93, Kesrinandan Society'),
(663, 3, 1794, 'Abhishekbhai Shamal', 'Male', 'candidate/photo_662_1522240955.jpg', 'abhishekbhaishamal@gmail.com', 'abhishekbhaishamal', 'Abhishekbhai Shamal is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '26-July-1969', '792, Maninagar'),
(664, 3, 1923, 'Azmal Faruki', 'Male', 'candidate/photo_663_1522241162.jpg', 'azmalfaruki@gmail.com', 'azmalfaruki', 'Azmal Faruki is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '14-June-1968', '83, Ramjinagar'),
(665, 3, 1926, 'Darshanbhai Findoliya', 'Male', 'candidate/photo_664_1522241344.jpg', 'darshanbhaifindoliya@gmail.com', 'darshanbhaifindoliya', 'Darshanbhai Findoliya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '7-Auguest-1962', '72, Shakti Park'),
(666, 3, 1931, 'Dhanajibhai Dhaduk', 'Male', 'candidate/photo_665_1522241479.jpg', 'dhanajibhaidhaduk@gmail.com', 'dhanajibhaidhaduk', 'Dhanajibhai Dhaduk is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '30-December-1966', '72, Sarvopari Society'),
(667, 3, 1932, 'Raghavjibhai Dobariya', 'Male', 'candidate/photo_666_1522241859.jpg', 'raghavjibhaidobariya@gmail.com', 'raghavjibhaidobariya', 'Raghavjibhai Dobariya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '10-July-1977', '632, Ramkunj Complex'),
(668, 3, 1949, 'Rikinbhai Gujarati', 'Male', 'candidate/photo_667_1522242065.jpg', 'rikinbhaigujarati@gmail.com', 'rikinbhaigujarati', 'Rikinbhai Gujarati is a candidate of Aam Aadmi party for lok sabha election', 1, '2018-03-28', 2, '15-March-1977', '82, Shradhya Society'),
(669, 3, 1931, 'Sujalbhai Ranpariya', 'Male', 'candidate/photo_668_1522242287.jpg', 'sujalbhairanpariya@gmail.com', 'sujalbhairanpariya', 'Sujalbhai Ranpariya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '15-May-1969', '71, Truptinagar'),
(670, 3, 1934, 'Amanbhai Desai', 'Male', 'candidate/photo_669_1522242572.jpg', 'amanbhaidesai@gmail.com', 'amanbhaidesai', 'Amanbhai Desai is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '15-Auguest-1980', '231, Kavita nagar'),
(671, 3, 1950, 'Dharmshibhai Vaddoriya', 'Male', 'candidate/photo_670_1522242689.jpg', 'dharmshibhaivaddoriya@gmail.com', 'dharmshibhaivaddoriya', 'Dharmshibhai Vaddoriya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '7-March-1964', '821, Trikamnagar'),
(672, 3, 1955, 'Manshukhbhai Mulani', 'Male', 'candidate/photo_671_1522242804.jpg', 'manshukhbhaimulani@gmail.com', 'manshukhbhaimulani', 'Manshukhbhai Mulani is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-28', 2, '14-February-1975', '672, Kevatnagar'),
(673, 3, 1921, 'Dipakbhai Miyani', 'Male', 'candidate/photo_672_1522255186.jpg', 'dipakbhaimiyani@gmail.com', 'dipakbhaimiyani', 'Dipakbhai Miyani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '18-September-1966', '148-Yogeshvar Society'),
(674, 3, 1922, 'Jemitbhai Goti', 'Male', 'candidate/photo_673_1522255309.jpg', 'jemitbhaigoti@gmail.com', 'jemitbhaigoti', 'Jemitbhai Goti is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '20-June-1965', '61-Bhaktinagar Society'),
(675, 3, 1925, 'Bhimajibhai Roy', 'Male', 'candidate/photo_674_1522255434.jpeg', 'bhimajibhairoy@gmail.com', 'bhimajibhairoy', 'Bhimajibhai Roy is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '27-July-1965', '22- ShriKrupa Society'),
(676, 3, 1927, 'Savjibhai Tavethiya', 'Male', 'candidate/photo_675_1522255840.jpg', 'savjibhaitavethiya@gmail.com', 'savjibhaitavethiya', 'Savjibhai Tavethiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '16-October-1963', 'D-202,Rushikesh Township'),
(677, 3, 1928, 'Baicharbhai Kosiya', 'Male', 'candidate/photo_676_1522255960.jpg', 'baicharbhaikosiya@gmail.com', 'baicharbhaikosiya', 'Baicharbhai Kosiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '17-July-1962', '19-Bhavani Society'),
(678, 3, 1929, 'Meghjibhai Bhanderi', 'Male', 'candidate/photo_677_1522256176.jpg', 'meghjibhaibhanderi@gmail.com', 'meghjibhaibhanderi', 'Meghjibhai Bhanderi is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '8-July-1965', '32-Soham Appartment'),
(679, 3, 1931, 'Kishorbhai Jasani', 'Male', 'candidate/photo_678_1522256347.jpg', 'kishorbhaijasani@gmail.com', 'kishorbhaijasani', 'Kishorbhai Jasani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '12-December-1978', '65-Arjunnagar'),
(680, 3, 1932, 'Thakarshibhai Jasani', 'Male', 'candidate/photo_679_1522256460.jpg', 'thakarshibhaijasani@gmail.com', 'thakarshibhaijasani', 'Thakarshibhai Jasani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '16-July-1966', '36-Devdeep Society'),
(681, 3, 1931, 'Vallabhbhai Ghoghari', 'Male', 'candidate/photo_680_1522256578.jpeg', 'vallabhbhaighoghari@gmail.com', 'vallabhbhaighoghari', 'Vallabhbhai Ghoghari is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '25-Auguest-1962', '10-ShantiNagar Society'),
(682, 3, 1932, 'Aryan Jajadiya', 'Male', 'candidate/photo_681_1522256686.jpg', 'aryanjajadiya@gmail.com', 'aryanjajadiya', 'Aryan Jajadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '12-September-1966', '16-Laxmi Baa Raw House'),
(683, 3, 1929, 'Satishbhai Gorasiya', 'Male', 'candidate/photo_682_1522256894.jpg', 'satishbhaigorasiya@gmail.com', 'satishbhaigorasiya', 'Satishbhai Gorasiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '17-September-1969', '175-Navi Shakti Society'),
(684, 3, 1934, 'Herishvbhai Diyora', 'Male', 'candidate/photo_683_1522257040.jpg', 'herishvbhaidiyora@gmail.com', 'herishvbhaidiyora', 'Satishbhai Gorasiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '22-November-1965', '36-Dev deep Society'),
(685, 3, 1929, 'Kanubhai Lakhani', 'Male', 'candidate/photo_684_1522257213.jpg', 'kanubhailakhani@gmail.com', 'kanubhailakhani', 'Satishbhai Gorasiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '16-May-1965', '11-Subhash Nagar Society'),
(686, 3, 1937, 'Kalpeshbhai Navadiya', 'Male', 'candidate/photo_685_1522257427.jpg', 'kalpeshbhainavadiya@gmail.com', 'kalpeshbhainavadiya', 'Satishbhai Gorasiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '19-Auguest-1968', '4-SundarBaug Society'),
(687, 3, 1939, 'Dharmik Kasodariya', 'Male', 'candidate/photo_686_1522257528.jpg', 'dharmikkasodariya@gmail.com', 'dharmikkasodariya', 'Dharmik Kasodariya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '15-February-1968', '19-Radhamandir Society'),
(688, 3, 1943, 'Popatbhai Lathiya', 'Male', 'candidate/photo_687_1522257698.jpg', 'popatbhailathiya@gmail.com', 'popatbhailathiya', 'Popatbhai Lathiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '17-Auguest-1957', 'A-38,Saiffy Society'),
(689, 3, 1953, 'Rasikbhai Italiya', 'Male', 'candidate/photo_688_1522257807.jpg', 'rasikbhaiitaliya@gmail.com', 'rasikbhaiitaliya', 'Rasikbhai Italiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '15-October-1970', 'A-903,Vastu Society'),
(690, 3, 1927, 'Kunjbhai Koshiya', 'Male', 'candidate/photo_689_1522258338.jpg', 'kunjbhaikoshiya@gmail.com', 'kunjbhaikoshiya', 'Kunjbhai Koshiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-28', 2, '19-October-1969', 'B-18,Panchdev Society'),
(691, 3, 1963, 'Maulikbhai Bathani', 'Male', 'candidate/photo_690_1522258580.jpg', 'maulikbhaibathani@gmail.com', 'maulikbhaibathani', 'Maulikbhai Bathani is a candidate of Aam Aadmi Party for Lok sabha election in india', 1, '2018-03-28', 2, '11-June-1972', '24-Mamta park Society'),
(692, 3, 1967, 'Sanjaybhai Sheta', 'Male', 'candidate/photo_691_1522287872.jpg', 'sanjaybhaisheta@gmail.com', 'sanjaybhaisheta', 'Sanjaybhai Sheta is a candidate of Aam Aadmi Party for Lok Sabha election in Rajkot', 1, '2018-03-29', 2, '23-May-1971', '56-Shirdidham Society'),
(693, 3, 1971, 'Vivanbhai Bathani', 'Male', 'candidate/photo_692_1522288072.jpg', 'vivanbhaibathani@gmail.com', 'vivanbhaibathani', 'Vivanbhai Bathani is a candidate of Aam Aadmi Party for lok sabha election in rajkot', 1, '2018-03-29', 2, '24-November-1969', '227-ShivShankar Pravit Society'),
(694, 3, 1972, 'Shamjibhai Bodarya', 'Male', 'candidate/photo_693_1522288200.jpg', 'shamjibhaibodarya@gmail.com', 'shamjibhaibodarya', 'Shamjibhai Bodarya is a candidate of Aam Aadmi Party for Lok Sabha election in Rajkot', 1, '2018-03-29', 2, '21-November-1961', '44-SaritaDarshan Society'),
(695, 3, 1970, 'Jinabhai Dholiya', 'Male', 'candidate/photo_694_1522288302.jpg', 'jinabhaidholiya@gmail.com', 'jinabhaidholiya', 'Jinabhai Dholiya is a candidate of Aam Aadmi Party for Lok sabha election for Rajkot', 1, '2018-03-29', 2, '11-July-1968', '164-Gautam Park Society'),
(696, 3, 1976, 'Manjibhai Godhani', 'Male', 'candidate/photo_695_1522288474.jpeg', 'manjibhaigodhani@gmail.com', 'manjibhaigodhani', 'Manjibhai Godhani is a candidate of Aam Aadmi Party for lok sabha election in Rajkot', 1, '2018-03-29', 2, '17-May-1975', 'C-503,Afil Tower'),
(697, 3, 1980, 'Parsotambhai Sitapara', 'Male', 'candidate/photo_696_1522288763.png', 'parsotambhaisitapara@gmail.com', 'parsotambhaisitapara', 'Parsotambhai Sitapara is a candidate of Aam Aadmi Party for Lok sabha election in Rajkot', 1, '2018-03-29', 2, '12-July-1965', '13-Tirupati Society'),
(698, 3, 1966, 'Nagajibhai Devani', 'Male', 'candidate/photo_697_1522288902.jpeg', 'nagajibhaidevani@gmail.com', 'nagajibhaidevani', 'Nagajibhai Devani is a candidate of Aam Aadmi Party for Lok sabha election in Rajkot', 1, '2018-03-29', 2, '19-Auguest-1967', 'C-703,RajHans Tower'),
(699, 3, 1979, 'Dipenbhai Chakarani', 'Male', 'candidate/photo_698_1522289033.jpg', 'dipenbhaichakarani@gmail.com', 'dipenbhaichakarani', 'Dipenbhai Chakarani is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-29', 2, '19-October-1970', 'A-29,SaiKrupa Society'),
(700, 3, 1963, 'Gauriben Sitapara', 'Male', 'candidate/photo_699_1522289990.jpg', 'gauribensitapara@gmail.com', 'gauribensitapara', 'Gauriben Sitapara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '9-December-1972', 'D-204,Saidarshan Sankul');
INSERT INTO `tbl_candidate_registration` (`candidate_id`, `party_id`, `location_id`, `candidate_name`, `gender`, `profile_pic`, `email_id`, `password`, `description`, `status`, `r_date`, `category_id`, `dob`, `office_address`) VALUES
(701, 3, 1967, 'Jasminbhai Bhojanani', 'Male', 'candidate/photo_700_1522290121.jpeg', 'jasminbhaibhojanani@gmail.com', 'jasminbhaibhojanani', 'Jasminbhai Bhojanani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '27-September-1965', '37-GreenPark Society'),
(702, 3, 1980, 'Govindbhai Galani', 'Male', 'candidate/photo_701_1522290296.jpeg', 'govindbhaigalani@gmail.com', 'govindbhaigalani', 'Govindbhai Galani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '16-July-1963', '58-Valkeshvar Society'),
(703, 3, 1977, 'Rasilaben Mayani', 'Female', 'candidate/photo_702_1522290443.jpg', 'rasilabenmayani@gmail.com', 'rasilabenmayani', 'Rasilaben Mayani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '22-September-1967', 'D-104,ShivDhara Complex'),
(704, 3, 1963, 'Dhavnitbhai Sachpara', 'Male', 'candidate/photo_703_1522290754.jpg', 'dhavnitbhaisachpara@gmail.com', 'dhavnitbhaisachpara', 'Dhavnitbhai Sachpara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '10-September-1961', '85/1,Sahyog Society'),
(705, 3, 1965, 'Khodabhai Bhisara', 'Male', 'candidate/photo_704_1522290956.jpg', 'khodabhaibhisara@gmail.com', 'khodabhaibhisara', 'Khodabhai Bhisara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '17-Auguest-1965', '14-Vandana Society'),
(706, 3, 1969, 'Jasvantbhai Dhola', 'Male', 'candidate/photo_705_1522291183.jpg', 'jasvantbhaidhola@gmail.com', 'jasvantbhaidhola', 'Jasvantbhai Dhola is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '14-Auguest-1967', 'A-7,SwamiNarayan Society'),
(707, 3, 1964, 'Paurikbhai Golakiya', 'Male', 'candidate/photo_706_1522291369.jpg', 'paurikbhaigolakiya@gmail.com', 'paurikbhaigolakiya', 'Paurikbhai Golakiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '11-July-1975', 'B-58,Purvi Society'),
(708, 3, 1964, 'Druvenbhai Aambaliya', 'Male', 'candidate/photo_707_1522291547.jpeg', 'druvenbhaiaambaliya@gmail.com', 'druvenbhaiaambaliya', 'Druvenbhai Aambaliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '15-Auguest-1972', '67-ThakorDwar Society'),
(709, 3, 1973, 'Vajubhai Meshiya', 'Male', 'candidate/photo_708_1522291887.jpg', 'vajubhaimeshiya@gmail.com', 'vajubhaimeshiya', 'Vajubhai Meshiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '17-September-1968', '125-Chakrata Society'),
(710, 3, 1963, 'Tribhavanbhai Valani', 'Male', 'candidate/photo_709_1522292072.jpg', 'tribhavanbhaivalani@gmail.com', 'tribhavanbhaivalani', 'Tribhavanbhai Valani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '22-November-1969', '156-Nilkanth Society'),
(711, 3, 1980, 'Sujitbhai Lukhi', 'Male', 'candidate/photo_710_1522292186.jpg', 'sujitbhailukhi@gmail.com', 'sujitbhailukhi', 'Sujitbhai Lukhi is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '27-November-1971', '128-Madhuvan Society'),
(712, 3, 1980, 'Niharbhai Limbani', 'Male', 'candidate/photo_711_1522292303.jpg', 'niharbhailimbani@gmail.com', 'niharbhailimbani', 'Niharbhai Limbani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '16-October-1971', '366-Bhagirath Society'),
(713, 3, 1965, 'Purva Khadela', 'Male', 'candidate/photo_712_1522296252.jpg', 'purvakhadela@gmail.com', 'purvakhadela', 'Purva Khadela is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '18-July-1968', '239/1,Radhe Residency'),
(714, 3, 1979, 'Jadavbhai Gagani', 'Male', 'candidate/photo_713_1522296363.jpeg', 'jadavbhaigagani@gmail.com', 'jadavbhaigagani', 'Jadavbhai Gagani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '29-Auguest-1970', '113,Shri Ganesh Raw House'),
(715, 3, 1964, 'Padambhai Vasava', 'Male', 'candidate/photo_714_1522297073.jpg', 'padambhaivasava@gmail.com', 'padambhaivasava', 'Padambhai Vasava is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '24-October-1969', '190-Varsha Society'),
(716, 3, 1971, 'Navratnabhai Navapara', 'Male', 'candidate/photo_715_1522299446.jpg', 'navratnabhainavapara@gmail.com', 'navratnabhainavapara', 'Navratnabhai Navapara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '24-July-1960', '56-City Corner Complex'),
(717, 3, 1977, 'RatnakalaBhai Guna', 'Male', 'candidate/photo_716_1522299613.jpg', 'ratnakalaBhaiguna@gmail.com', 'ratnakalaBhaiguna', 'RatnakalaBhai Guna is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '15-October-1969', '89-Mahavir Nagar'),
(718, 5, 1992, 'Ratnabhai Jasoliya', 'Male', 'candidate/photo_717_1522299792.jpg', 'ratnabhaijasoliya@gmail.com', 'ratnabhaijasoliya', 'Ratnabhai Jasoliya is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-03-29', 2, '18-June-1966', '78-Dhaval Appartment'),
(719, 3, 1988, 'Vedbhai Budheliya', 'Male', 'candidate/photo_718_1522300095.jpeg', 'vedbhaibudheliya@gmail.com', 'vedbhaibudheliya', 'Vedbhai Budheliya is a candidate of  Aam Aadmi Party for Lok Sabha election', 1, '2018-03-29', 2, '19-Auguest-1964', '56-Raghunadan Society'),
(720, 3, 1988, 'Aklavyabhai Amdavadi', 'Male', 'candidate/photo_719_1522300226.jpg', 'aklavyabhaiamdavadi@gmail.com', 'aklavyabhaiamdavadi', 'Aklavyabhai Amdavadi is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '27-September-1984', '82, Shirdidham Society'),
(721, 3, 1989, 'Taprndrabhai Ghori', 'Male', 'candidate/photo_720_1522300351.png', 'taprndrabhaighori@gmail.com', 'taprndrabhaighori', 'Taprndrabhai Ghori is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '10-March-1972', '92, Mohandeep Society'),
(722, 3, 1991, 'Mohitbhai Kosiya', 'Male', 'candidate/photo_721_1522300493.jpg', 'mohitbhaikosiya@gmail.com', 'mohitbhaikosiya', 'Mohitbhai Kosiya is a candidate of Aam Aadmi Party for lok sabha election in Bhavanagar', 1, '2018-03-29', 2, '24-Auguest-1976', '83, Kusum Park Society'),
(723, 3, 1993, 'Mehulbhai Sonani', 'Male', 'candidate/photo_722_1522300624.jpg', 'mehulbhaisonani@gmail.com', 'mehulbhaisonani', 'Mehulbhai Sonani is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '14-December-1973', '62, Kamalbaug Society'),
(724, 3, 1996, 'Mayankbhai Gorashu', 'Male', 'candidate/photo_723_1522300763.jpg', 'mayankbhaigorashu@gmail.com', 'mayankbhaigorashu', 'Mayankbhai Gorashu is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '10-January-1978', '52, Chintan Society'),
(725, 3, 1997, 'Bhimshankarbhai Bagadiya', 'Male', 'candidate/photo_724_1522300866.jpg', 'bhimshankarbhaibagadiya@gmail.com', 'bhimshankarbhaibagadiya', 'Bhimshankarbhai Bagadiya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '8-September-1979', '21, Vastukala Society'),
(726, 3, 1998, 'Vishnubhai Gabani', 'Male', 'candidate/photo_725_1522300977.jpg', 'vishnubhaigabani@gmail.com', 'vishnubhaigabani', 'Vishnubhai Gabani is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '13-June-1972', '52, Karnavati Society'),
(727, 3, 1984, 'Valajibhai Lukhi', 'Male', 'candidate/photo_726_1522301156.jpg', 'valajibhailukhi@gmail.com', 'valajibhailukhi', 'Valajibhai Lukhi is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '14-June-1960', '42, Sarjanvatika Society'),
(728, 3, 1986, 'Vasubhai Hathela', 'Male', 'candidate/photo_727_1522301303.jpg', 'vasubhaihathela@gmail.com', 'vasubhaihathela', 'Vasubhai Hathela is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '8-December-1968', '83, Deepdarshan Society'),
(729, 3, 1988, 'Shahilbhai Bhadani', 'Male', 'candidate/photo_728_1522301455.jpg', 'shahilbhaibhadani@gmail.com', 'shahilbhaibhadani', 'Shahilbhai Bhadani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '20-November-1976', '763, Suryam Society'),
(730, 3, 1991, 'Ashishbhai Medpara', 'Male', 'candidate/photo_729_1522301595.jpg', 'ashishbhaimedpara@gmail.com', 'ashishbhaimedpara', 'Ashishbhai Medpara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '8-May-1976', '52, Devashi Society'),
(731, 3, 1990, 'Mantrabhai Sanghani', 'Male', 'candidate/photo_730_1522301777.jpg', 'mantrabhaisanghani@gmail.com', 'mantrabhaisanghani', 'Mantrabhai Sanghani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '9-September-1967', '73, Shukan velly Appartment'),
(732, 3, 1991, 'Trushalbhai Khadsaliya', 'Male', 'candidate/photo_731_1522302011.jpg', 'trushalbhaikhadsaliya@gmail.com', 'trushalbhaikhadsaliya', 'Trushalbhai Khadsaliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '10-January-1962', '24, Rajratan Avenue'),
(733, 3, 1991, 'Kalyanbhai Diyora', 'Male', 'candidate/photo_732_1522302319.jpg', 'kalyanbhaidiyora@gmail.com', 'kalyanbhaidiyora', 'Kalyanbhai Diyora is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '15-July-1973', '82, Vasanjipark Society'),
(734, 3, 1993, 'Miteshbhai Vithani', 'Male', 'candidate/photo_733_1522302496.jpeg', 'miteshbhaivithani@gmail.com', 'miteshbhaivithani', 'Miteshbhai Vithani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '21-October-1980', '821, Ramanpark Society'),
(735, 3, 1993, 'Ghanshyambhai Hihoriya', 'Male', 'candidate/photo_734_1522302611.jpg', 'ghanshyambhaihihoriya@gmail.com', 'ghanshyambhaihihoriya', 'Ghanshyambhai Hihoriya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '16-May-1975', '63, Panchvati Palace'),
(736, 3, 1984, 'Pranavbhai Shekhadiya', 'Male', 'candidate/photo_735_1522316960.jpg', 'pranavbhaishekhadiya@gmail.com', 'pranavbhaishekhadiya', 'Pranavbhai Shekhadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '13-Auguest-1960', '52, Krishnajivan Society'),
(737, 3, 1986, 'Gaurangbhai Jetani', 'Male', 'candidate/photo_736_1522317101.jpg', 'gaurangbhaijetani@gmail.com', 'gaurangbhaijetani', 'Gaurangbhai Jetani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '19-Auguest-1978', '62, Riverview Park'),
(738, 3, 1988, 'Trilokbhai Vidiya', 'Male', 'candidate/photo_737_1522317227.jpg', 'trilokbhaividiya@gmail.com', 'trilokbhaividiya', 'Trilokbhai Vidiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '26-January-1967', '72, Aanjansalaka Society'),
(739, 3, 1990, 'Chandbhai Dabara', 'Male', 'candidate/photo_738_1522317352.jpg', 'chandbhaidabara@gmail.com', 'chandbhaidabara', 'Chandbhai Dabara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '11-February-1979', '72, Amijara Palace'),
(740, 3, 1990, 'Pratapbhai Miyani', 'Male', 'candidate/photo_739_1522317470.jpg', 'pratapbhaimiyani@gmail.com', 'pratapbhaimiyani', 'Pratapbhai Miyani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '9-October-1972', '82, Sarvamangal Complex'),
(741, 3, 1992, 'Saumybhai Gudaliya', 'Male', 'candidate/photo_740_1522317596.jpg', 'saumybhaigudaliya@gmail.com', 'saumybhaigudaliya', 'Saumybhai Gudaliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '14-Auguest-1968', '92, Millennium Appartment'),
(742, 3, 1993, 'Bhautikbhai Katrodiya', 'Male', 'candidate/photo_741_1522317698.jpg', 'bhautikbhaikatrodiya@gmail.com', 'bhautikbhaikatrodiya', 'Bhautikbhai Katrodiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '19-April-1966', '62, Nandubaa Appartment'),
(743, 3, 1996, 'Devanbhai Sutariya', 'Male', 'candidate/photo_742_1522317806.jpeg', 'devanbhaisutariya@gmail.com', 'devanbhaisutariya', 'Devanbhai Sutariya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '13-May-1963', '41, Bramalok Society'),
(744, 3, 1998, 'Dharmabhai Devaliya', 'Male', 'candidate/photo_743_1522317918.jpeg', 'dharmabhaidevaliya@gmail.com', 'dharmabhaidevaliya', 'Dharmabhai Devaliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '7-December-1964', '72, Akshardham Society'),
(745, 3, 2001, 'Yugbhai Kuvadiya', 'Male', 'candidate/photo_744_1522318093.jpg', 'yugbhaikuvadiya@gmail.com', 'yugbhaikuvadiya', 'Yugbhai Kuvadiya is a candidate of Aam Aadmi Party for lok sabha election in Jamnagar', 1, '2018-03-29', 2, '6-February-1974', '52, Bansi Appartment'),
(746, 3, 2003, 'Lakshyabhai Bhayani', 'Male', 'candidate/photo_745_1522318218.jpeg', 'lakshyabhaibhayani@gmail.com', 'lakshyabhaibhayani', 'Lakshyabhai Bhayani is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '15-March-1971', '62, Purshottamnagar Society'),
(747, 3, 2004, 'Varunbhai Chaklasiya', 'Male', 'candidate/photo_746_1522318339.jpeg', 'varunbhaichaklasiya@gmail.com', 'varunbhaichaklasiya', 'Varunbhai Chaklasiya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '10-March-1968', '72, Gadhpur Township'),
(748, 3, 2007, 'Lalitbhai Sakariya', 'Male', 'candidate/photo_747_1522318444.jpeg', 'lalitbhaisakariya@gmail.com', 'lalitbhaisakariya', 'Lalitbhai Sakariya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '13-July-1970', '11, Amrakunj Society'),
(749, 3, 2011, 'Hirenbhai Lawani', 'Male', 'candidate/photo_748_1522318549.jpeg', 'hirenbhailawani@gmail.com', 'hirenbhailawani', 'Hirenbhai Lawani is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '10-June-1965', '63, Mehtanagar Society'),
(750, 3, 2013, 'Suhasbhai Idaliya', 'Male', 'candidate/photo_749_1522318650.jpg', 'suhasbhaiidaliya@gmail.com', 'suhasbhaiidaliya', 'Suhasbhai Idaliya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '12-Auguest-1972', '72, Hastinapur Society'),
(751, 3, 2014, 'Mamtaben Dhola', 'Female', 'candidate/photo_750_1522318762.jpg', 'mamtabendhola@gmail.com', 'mamtabendhola', 'Mamtaben Dhola is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '17-May-1956', '32, Purvi Society'),
(752, 3, 2016, 'Revanbhai Vaghani', 'Male', 'candidate/photo_751_1522318879.jpg', 'revanbhaivaghani@gmail.com', 'revanbhaivaghani', 'Revanbhai Vaghani is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '15-March-1976', '72, Shreenidhi Society'),
(753, 3, 2014, 'Riyanbhai Kunjadiya', 'Male', 'candidate/photo_752_1522319519.jpg', 'riyanbhaikunjadiya@gmail.com', 'riyanbhaikunjadiya', 'Riyanbhai Kunjadiya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '11-May-1965', '51, Haridarshan Society'),
(754, 3, 2011, 'Ruhanbhai Navadiya', 'Male', 'candidate/photo_753_1522319657.jpg', 'ruhanbhainavadiya@gmail.com', 'ruhanbhainavadiya', 'Ruhanbhai Navadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '17-April-1981', '72, Thakordwar Society'),
(755, 3, 2002, 'Rakshbhai Kasodariya', 'Male', 'candidate/photo_754_1522319816.jpeg', 'rakshbhaikasodariya@gmail.com', 'rakshbhaikasodariya', 'Rakshbhai Kasodariya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '19-June-1975', '52, Platinum Park'),
(756, 3, 2013, 'Yudhisthirbhai Kevadiya', 'Male', 'candidate/photo_755_1522319995.jpg', 'yudhisthirbhaikevadiya@gmail.com', 'yudhisthirbhaikevadiya', 'Yudhisthirbhai Kevadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '18-June-1973', '62, Vastusidhi Appartment'),
(757, 3, 2013, 'Nakulbhai Rupani', 'Male', 'candidate/photo_756_1522320116.png', 'nakulbhairupani@gmail.com', 'nakulbhairupani', 'Nakulbhai Rupani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '14-June-1981', '85, Jaldarshan Society'),
(758, 3, 2013, 'Sahdevbhai Jadvani', 'Male', 'candidate/photo_757_1522320260.jpeg', 'sahdevbhaijadvani@gmail.com', 'sahdevbhaijadvani', 'Sahdevbhai Jadvani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '28-Auguest-1975', '72, Sanskrut Appartment'),
(759, 3, 2011, 'Karnbhai Badhiwala', 'Male', 'candidate/photo_758_1522320402.jpg', 'karnbhaibadhiwala@gmail.com', 'karnbhaibadhiwala', 'Karnbhai Badhiwala is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '10-June-1977', '73, Sarthi Complex'),
(760, 3, 2015, 'Yagnikbhai Kankotiya', 'Male', 'candidate/photo_759_1522320531.jpg', 'yagnikbhaikankotiya@gmail.com', 'yagnikbhaikankotiya', 'Yagnikbhai Kankotiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '12-May-1965', '74, Poojan Appartment'),
(761, 3, 2016, 'Kanshbhai Patodiya', 'Male', 'candidate/photo_760_1522320638.jpg', 'kanshbhaipatodiya@gmail.com', 'kanshbhaipatodiya', 'Kanshbhai Patodiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '10-March-1974', '73, Kantareshwar Society'),
(762, 3, 2021, 'Vibhishanbhai Pipaliya', 'Male', 'candidate/photo_761_1522320779.jpeg', 'vibhishanbhaipipaliya@gmail.com', 'vibhishanbhaipipaliya', 'Vibhishanbhai Pipaliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '23-July-1973', '73, Balvantnagar Society'),
(763, 3, 2008, 'Udaybhai Dangasiya', 'Male', 'candidate/photo_762_1522320936.jpg', 'udaybhaidangasiya@gmail.com', 'udaybhaidangasiya', 'Udaybhai Dangasiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '26-October-1979', '72, Balchandra Society'),
(764, 3, 2016, 'Abhimanyubhai Dhabhi', 'Male', 'candidate/photo_763_1522321057.jpeg', 'abhimanyubhaidhabhi@gmail.com', 'abhimanyubhaidhabhi', 'Abhimanyubhai Dhabhi is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '14-May-1974', '73, Alnkara Society'),
(765, 3, 2005, 'Abhilashbhai Rajadiya', 'Male', 'candidate/photo_764_1522321152.jpg', 'abhilashbhairajadiya@gmail.com', 'abhilashbhairajadiya', 'Abhilashbhai Rajadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '11-April-1983', '62, Harinagar Society'),
(766, 3, 2014, 'Akhileshbhai Zada', 'Male', 'candidate/photo_765_1522321264.jpeg', 'akhileshbhaizada@gmail.com', 'akhileshbhaizada', 'Akhileshbhai Zada is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '27-May-1981', '32, Laxmivadi Society'),
(767, 3, 2013, 'Drumanbhai Shiroya', 'Male', 'candidate/photo_766_1522321402.jpg', 'drumanbhaishiroya@gmail.com', 'drumanbhaishiroya', 'Drumanbhai Shiroya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '9-July-1981', '53, Rashmikiran Society'),
(768, 3, 2013, 'Mahibhai Baravadiya', 'Male', 'candidate/photo_767_1522321496.jpeg', 'mahibhaibaravadiya@gmail.com', 'mahibhaibaravadiya', 'Mahibhai Baravadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '4-June-1978', '732, Prabhunagar Society'),
(769, 3, 2005, 'Vihanbhai Badhiwala', 'Male', 'candidate/photo_768_1522321619.jpg', 'vihanbhaibadhiwala@gmail.com', 'vihanbhaibadhiwala', 'Vihanbhai Badhiwala is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '21-Auguest-1978', '73, Shamla Appartment'),
(770, 3, 2020, 'Aadityabhai Bungaliya', 'Male', 'candidate/photo_769_1522321725.jpg', 'aadityabhaibungaliya@gmail.com', 'aadityabhaibungaliya', 'Aadityabhai Bungaliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '11-July-1976', '73, Sundaram Park'),
(771, 3, 2011, 'Reyanshbhai Barodiya', 'Male', 'candidate/photo_770_1522321834.jpeg', 'reyanshbhaibarodiya@gmail.com', 'reyanshbhaibarodiya', 'Reyanshbhai Barodiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '21-September-1975', '21, Madhavkunj Society'),
(772, 3, 2023, 'Aaryanbhai Bishra', 'Male', 'candidate/photo_771_1522321979.jpeg', 'aaryanbhaibishra@gmail.com', 'aaryanbhaibishra', 'Aaryanbhai Bishra is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '16-July-1977', '73, Aditya Residency'),
(773, 3, 2025, 'Mahomand Ali', 'Male', 'candidate/photo_772_1522322102.jpg', 'mahomandali@gmail.com', 'mahomandali', 'Mahomand Ali is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '17-April-1959', '73, Jivandhara Appartment'),
(774, 3, 2024, 'Anshbhai Dudhat', 'Male', 'candidate/photo_773_1522322220.jpg', 'anshbhaidudhat@gmail.com', 'anshbhaidudhat', 'Anshbhai Dudhat is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '9-July-1979', '42, Lake view Appartment'),
(775, 3, 2027, 'Arathavbhai Londaliya', 'Male', 'candidate/photo_774_1522322368.jpeg', 'arathavbhailondaliya@gmail.com', 'arathavbhailondaliya', 'Arathavbhai Londaliya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '22-September-1963', '72, Saimilan Appartment'),
(776, 3, 2031, 'Vaithikbhai Paravadiya', 'Male', 'candidate/photo_775_1522322497.jpg', 'vaithikbhaiparavadiya@gmail.com', 'vaithikbhaiparavadiya', 'Vaithikbhai Paravadiya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '28-June-1980', '21, Tulsidarshan Society'),
(777, 3, 2030, 'Kabirbhai Bhigaradiya', 'Male', 'candidate/photo_776_1522322641.jpeg', 'kabirbhaibhigaradiya@gmail.com', 'kabirbhaibhigaradiya', 'Kabirbhai Bhigaradiya is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '9-May-1981', '73, Alnkar Society'),
(778, 3, 2033, 'Rudrabhai Munjani', 'Male', 'candidate/photo_777_1522322823.jpg', 'rudrabhaimunjani@gmail.com', 'rudrabhaimunjani', 'Rudrabhai Munjani is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '19-April-1974', '63, Mahek Residency'),
(779, 3, 2035, 'Anikbhai Bhuva', 'Male', 'candidate/photo_778_1522322910.jpg', 'anikbhaibhuva@gmail.com', 'anikbhaibhuva', 'Anikbhai Bhuva is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '8-April-1978', '73, Saify Society'),
(780, 3, 2034, 'Bodhibhai Sheta', 'Male', 'candidate/photo_779_1522323033.jpg', 'bodhibhaisheta@gmail.com', 'bodhibhaisheta', 'Bodhibhai Sheta is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-29', 2, '9-January-1978', '92, Aashutosh Appartment'),
(781, 3, 2037, 'Navinbhai Dhundiya', 'Male', 'candidate/photo_780_1522323182.jpg', 'navinbhaidhundiya@gmail.com', 'navinbhaidhundiya', 'Navinbhai Dhundiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '11-September-1968', '62, Shreenathji Palace'),
(782, 3, 2032, 'Aadvikbhai Ambaliya', 'Male', 'candidate/photo_781_1522323299.jpg', 'aadvikbhaiambaliya@gmail.com', 'aadvikbhaiambaliya', 'Aadvikbhai Ambaliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '9-April-1971', '53, Nijanand Society'),
(783, 3, 2034, 'Abdul Dayani', 'Male', 'candidate/photo_782_1522323414.jpg', 'abduldayani@gmail.com', 'abduldayani', 'Abdul Dayani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '10-May-1968', '85, Sunrise Appartment'),
(784, 3, 2035, 'Shivanshbhai Jajadiya', 'Male', 'candidate/photo_783_1522323540.jpg', 'shivanshbhaijajadiya@gmail.com', 'shivanshbhaijajadiya', 'Shivanshbhai Jajadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '8-July-1968', '64, Gangotri Residency'),
(785, 3, 2040, 'Pradishbhai Rohisaliya', 'Male', 'candidate/photo_784_1522323706.jpeg', 'pradishbhairohisaliya@gmail.com', 'pradishbhairohisaliya', 'Pradishbhai Rohisaliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '8-October-1972', '74, Prayagraj Residency'),
(786, 3, 2028, 'Nilbhai Mavani', 'Male', 'candidate/photo_785_1522323817.jpg', 'nilbhaimavani@gmail.com', 'nilbhaimavani', 'Nilbhai Mavani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '22-Auguest-1976', '73, Riverhevan Residecy'),
(787, 3, 2043, 'Devanshbhai Kanadiya', 'Male', 'candidate/photo_786_1522323931.jpeg', 'devanshbhaikanadiya@gmail.com', 'devanshbhaikanadiya', 'Devanshbhai Kanadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '10-April-1976', '73, Paliheel Residency'),
(788, 3, 2041, 'Janaviben Surani', 'Female', 'candidate/photo_787_1522324043.jpg', 'janavibensurani@gmail.com', 'janavibensurani', 'Janaviben Surani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '4-February-1975', '21, Saidwar Residency'),
(789, 3, 2030, 'Sonaliben Ghevariya', 'Female', 'candidate/photo_788_1522324173.jpg', 'sonalibenghevariya@gmail.com', 'sonalibenghevariya', 'Sonaliben Ghevariya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '3-December-1964', '53, Anandnagar Society'),
(790, 3, 2024, 'Talsibhai Bhigaradiya', 'Male', 'candidate/photo_789_1522338296.jpeg', 'talsibhaibhigaradiya@gmail.com', 'talsibhaibhigaradiya', 'Talsibhai Bhigaradiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '16-June-1968', '45-Ridham Residency'),
(791, 3, 2030, 'Junjabhai Mujani', 'Male', 'candidate/photo_790_1522338672.jpg', 'junjabhaimujani@gmail.com', 'junjabhaimujani', 'Junjabhai Mujani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '9-Auguest-1966', '108-Gokul Complex'),
(792, 3, 2028, 'Kiritbhai Khokhasiya', 'Male', 'candidate/photo_791_1522339098.jpg', 'kiritbhaikhokhasiya@gmail.com', 'kiritbhaikhokhasiya', 'Kiritbhai Khokhasiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '30-Auguest-1968', '8-Royal Park'),
(793, 3, 2031, 'Pasabhai Dhola', 'Male', 'candidate/photo_792_1522339202.jpg', 'pasabhaidhola@gmail.com', 'pasabhaidhola', 'Pasabhai Dhola is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '21-May-1970', 'B/91,Tulsidarshan Society'),
(794, 3, 2037, 'Kirtanbhai Golakiya', 'Male', 'candidate/photo_793_1522339364.jpg', 'kirtanbhaigolakiya@gmail.com', 'kirtanbhaigolakiya', 'Kirtanbhai Golakiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '11-June-1961', '67-Raghuvir Society'),
(795, 3, 2039, 'Harjibhai Jasoliya', 'Male', 'candidate/photo_794_1522339631.jpg', 'harjibhaijasoliya@gmail.com', 'harjibhaijasoliya', 'Harjibhai Jasoliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '17-May-1969', '8-Indralok Banglows'),
(796, 3, 2024, 'Rutvikbhai Galani', 'Male', 'candidate/photo_795_1522339783.jpg', 'rutvikbhaigalani@gmail.com', 'rutvikbhaigalani', 'Rutvikbhai Galani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '15-October-1967', 'B/91,Tulsidarshan Society'),
(797, 3, 2029, 'Aashishbhai Dudheliya', 'Male', 'candidate/photo_796_1522340435.png', 'aashishbhaidudheliya@gmail.com', 'aashishbhaidudheliya', 'Aashishbhai Dudheliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '14-September-1964', '88-ShriNathji Banglows'),
(798, 3, 2042, 'Jevinbhai Bhadiyadra', 'Male', 'candidate/photo_797_1522340547.png', 'jevinbhaibhadiyadra@gmail.com', 'jevinbhaibhadiyadra', 'Jevinbhai Bhadiyadra is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '13-November-1973', '47-Aashutosh Appartment'),
(799, 3, 2044, 'Prathambhai Vaghani', 'Male', 'candidate/photo_798_1522340751.jpg', 'prathambhaivaghani@gmail.com', 'prathambhaivaghani', 'Prathambhai Vaghani is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-29', 2, '11-September-1971', '9-Nijanand Society'),
(800, 3, 2045, 'Romitbhai Valani', 'Male', 'candidate/photo_799_1522341196.jpeg', 'romitbhaivalani@gmail.com', 'romitbhaivalani', 'Romitbhai Valani is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-29', 2, '14-September-1961', '25-MadhavKunj Society'),
(801, 3, 2049, 'Julubhai Jesar', 'Male', 'candidate/photo_800_1522341317.jpeg', 'julubhaijesar@gmail.com', 'julubhaijesar', 'Julubhai Jesar is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-29', 2, '20-May-1966', 'A-80,Gopinath Society'),
(802, 3, 2054, 'Abhaybhai Nanivavdi', 'Male', 'candidate/photo_801_1522341467.jpg', 'abhaybhainanivavdi@gmail.com', 'abhaybhainanivavdi', 'Abhaybhai Nanivavdi is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-29', 2, '12-July-1972', '104-AnandVatika Society'),
(803, 3, 2057, 'Devarshbhai Vanani', 'Male', 'candidate/photo_802_1522341654.jpg', 'devarshbhaivanani@gmail.com', 'devarshbhaivanani', 'Devarshbhai Vanani is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-29', 2, '21-July-1976', 'A-204,Goldenplam Appartment'),
(804, 3, 2046, 'Milapbhai Sachpara', 'Male', 'candidate/photo_803_1522341784.jpeg', 'milapbhaisachpara@gmail.com', 'milapbhaisachpara', 'Milapbhai Sachpara is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-29', 2, '9-February-1965', '67-Shyamdham Mandir'),
(805, 3, 2050, 'Jigarbhai Surani', 'Male', 'candidate/photo_804_1522341961.jpg', 'jigarbhaisurani@gmail.com', 'jigarbhaisurani', 'Jigarbhai Surani is a candidate of Aam Aadmi Party for Lok sabha election', 1, '2018-03-29', 2, '10-October-1973', 'J-502,Sarjansrusti Society'),
(806, 3, 2057, 'Pritbhai Zadafiya', 'Male', 'candidate/photo_805_1522342092.png', 'pritbhaiszadafiya@gmail.com', 'pritbhaiszadafiya', 'Pritbhai Zadafiya is a candidate of Aam Aadmi Party for Lok sabha election', 1, '2018-03-29', 2, '31-December-1967', 'B-104,Sarovar View Appartment'),
(807, 3, 2048, 'Jilbhai Vachani', 'Male', 'candidate/photo_806_1522342227.jpeg', 'jilbhaivachani@gmail.com', 'jilbhaivachani', 'Jilbhai Vachani is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-29', 2, '18-April-1965', '24-Jaybhavani Society'),
(808, 3, 2044, 'Jemishbhai Saliya', 'Male', 'candidate/photo_807_1522342436.jpg', 'jemishbhaisaliya@gmail.com', 'jemishbhaisaliya', 'Jemishbhai Saliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '26-May-1964', 'B-601,White House'),
(809, 3, 2055, 'Dheyaybhai Gajera', 'Male', 'candidate/photo_808_1522342597.jpg', 'dheyaybhaigajera@gmail.com', 'dheyaybhaigajera', 'Dheyaybhai Gajera is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '28-July-1974', '82,Harinadan Banglows'),
(810, 3, 2049, 'Tirthbhai Vanani', 'Male', 'candidate/photo_809_1522343161.jpg', 'tirthbhaivanani@gmail.com', 'tirthbhaivanani', 'Tirthbhai Vanani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '12-November-1970', 'A-Varniraj Appartment'),
(811, 3, 2054, 'Ketanbhai Goti', 'Male', 'candidate/photo_810_1522344017.jpg', 'ketanbhaigoti@gmail.com', 'ketanbhaigoti', 'Ketanbhai Goti is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '12-June-1970', '120-Sharadhhadeep Society'),
(812, 3, 2048, 'Jitenbhai Roy', 'Male', 'candidate/photo_811_1522344437.jpg', 'jitenbhairoy@gmail.com', 'jitenbhairoy', 'Jitenbhai Roy is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '14-September-1978', 'A-34,Chitrakut Society'),
(813, 3, 2049, 'Kiyanbhai Bharodiya', 'Male', 'candidate/photo_812_1522345294.jpeg', 'kiyanbhaibharodiya@gmail.com', 'kiyanbhaibharodiya', 'Kiyanbhai Bharodiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '12-Auguest-1975', '125-Chakrata Society'),
(814, 3, 2046, 'Jatinbhai Langadiya', 'Male', 'candidate/photo_813_1522345572.jpg', 'jatinbhailangadiya@gmail.com', 'jatinbhailangadiya', 'Jatinbhai Langadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '13-July-1968', '81-Gaganand Society'),
(815, 3, 2045, 'Nutanbhai Vejani', 'Male', 'candidate/photo_814_1522345679.jpg', 'nutanbhaivejani@gmail.com', 'nutanbhaivejani', 'Nutanbhai Vejani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '18-May-1958', '366-Bhagirath Society'),
(816, 3, 2048, 'Pankitbhai Lakhani', 'Male', 'candidate/photo_815_1522345994.jpg', 'pankitbhailakhani@gmail.com', 'pankitbhailakhani', 'Pankitbhai Lakhani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-29', 2, '7-July-1970', '104-New Shantivan Society'),
(817, 3, 2045, 'Denishbhai Bhurakhiya', 'Male', 'candidate/photo_816_1522395363.jpg', 'denishbhaibhurakhiya@gmail.com', 'denishbhaibhurakhiya', 'Denishbhai Bhurakhiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '12-September-1967', '67-Sujeshnagar Society'),
(818, 3, 2044, 'Dharmshibhai Vaghela', 'Male', 'candidate/photo_817_1522395502.jpg', 'dharmshibhaivaghela@gmail.com', 'dharmshibhaivaghela', 'Dharmshibhai Vaghela is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '11-September-1964', '88-Dipeshnagar Society'),
(819, 3, 2054, 'Harmitbhai Dholiya', 'Male', 'candidate/photo_818_1522396640.jpg', 'harmitbhaidholiya@gmail.com', 'harmitbhaidholiya', 'Harmitbhai Dholiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '15-April-1966', '104-New Shantivan Society'),
(820, 3, 2057, 'Chayankbhai Koladiya', 'Male', 'candidate/photo_819_1522397063.jpg', 'chayankbhaikoladiya@gmail.com', 'chayankbhaikoladiya', 'Chayankbhai Koladiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '8-April-1967', '95-Gangotri Society'),
(821, 3, 2060, 'Dasharathbhai Jadvani', 'Male', 'candidate/photo_820_1522397292.jpg', 'dasharathbhaijadvani@gmail.com', 'dasharathbhaijadvani', 'Dasharathbhai Jadvani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '18-July-1979', 'E-32,Nilkanth Society'),
(822, 3, 2046, 'Juvishbhai Dayani', 'Male', 'candidate/photo_821_1522397418.jpg', 'juvishbhaidayani@gmail.com', 'juvishbhaidayani', 'Juvishbhai Dayani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '17-September-1973', '282-Natvar Nagar Society'),
(823, 3, 2051, 'Priyankbhai Nayani', 'Male', 'candidate/photo_822_1522398264.jpg', 'priyankbhainayani@gmail.com', 'priyankbhainayani', 'Priyankbhai Nayani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '27-July-1975', '80-Mangaldeep Society'),
(824, 3, 2044, 'Rinkeshbhai Sitapara', 'Male', 'candidate/photo_823_1522398794.jpg', 'rinkeshbhaisitapara@gmail.com', 'rinkeshbhaisitapara', 'Rinkeshbhai Sitapara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '8-July-1960', '19-Sidhika Park'),
(825, 3, 2047, 'Gaivsil limbani', 'Male', 'candidate/photo_824_1522398906.jpg', 'gaivsillimbani@gmail.com', 'gaivsillimbani', 'Gaivsil limbani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '10-December-1964', '3-Nilam Society'),
(826, 3, 2061, 'Manthanbhai Rabadiya', 'Male', 'candidate/photo_825_1522399390.jpg', 'manthanbhairabadiya@gmail.com', 'manthanbhairabadiya', 'Manthanbhai Rabadiya is a candidate of Aam Aadmi Party for Lok sabha election', 1, '2018-03-30', 2, '29-January-1977', '285-Sham Palace'),
(827, 3, 2075, 'Parl Radadiya', 'Male', 'candidate/photo_826_1522399724.jpeg', 'parlradadiya@gmail.com', 'parlradadiya', 'Parl Radadiya is a candidate of Aam Aadmi Party for Lok sabha election', 1, '2018-03-30', 2, '25-June-1975', 'C-227,Pramukhchaya Society'),
(828, 3, 2064, 'Hitbhai Kathiriya', 'Male', 'candidate/photo_827_1522399954.jpg', 'hitbhaikathiriya@gmail.com', 'hitbhaikathiriya', 'Hitbhai Kathiriya is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '10-March-1965', 'D-401,Opera House'),
(829, 3, 2068, 'Savanbhai Talaviya', 'Male', 'candidate/photo_828_1522400206.jpeg', 'savanbhaitalaviya@gmail.com', 'savanbhaitalaviya', 'Savanbhai Talaviya is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '24-October-1976', 'A-76,Ravi Appartment'),
(830, 3, 2068, 'Hilbhai Vahanka', 'Male', 'candidate/photo_829_1522400795.jpg', 'hilbhaivahanka@gmail.com', 'hilbhaivahanka', 'Hilbhai Vahanka is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '12-September-1961', '32-Tapshil Society'),
(831, 3, 2076, 'Devkiranbhai Sakdasariya', 'Male', 'candidate/photo_830_1522401130.jpeg', 'devkiranbhaisakdasariya@gmail.com', 'devkiranbhaisakdasariya', 'Devkiranbhai Sakdasariya is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '17-April-1971', '302-Sanskar Flates'),
(832, 3, 2066, 'Narendrabhai Bhungaliya', 'Male', 'candidate/photo_831_1522401261.jpeg', 'narendrabhaibhungaliya@gmail.com', 'narendrabhaibhungaliya', 'Narendrabhai Bhungaliya is a candidate of Aam Aadmi Party for Lok sabha election', 1, '2018-03-30', 2, '27-November-1970', 'F-503,Silver Stone Palace'),
(833, 3, 2064, 'Anashbhai Sakdasariya', 'Male', 'candidate/photo_832_1522401479.jpeg', 'anashbhaisakdasariya@gmail.com', 'anashbhaisakdasariya', 'Anashbhai Sakdasariya is a candidate of Aam Aadmi party for Lok sabha election', 1, '2018-03-30', 2, '15-December-1969', '28-Radhabaug Society'),
(834, 3, 2069, 'Haribhai Shivare', 'Male', 'candidate/photo_833_1522401637.jpg', 'haribhaishivare@gmail.com', 'haribhaishivare', 'Haribhai Shivare is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '28-September-1976', '82-Shaktinagar Society'),
(835, 3, 2069, 'Anilbhai Pavasiya', 'Male', 'candidate/photo_834_1522401742.jpeg', 'anilbhaipavasiya@gmail.com', 'anilbhaipavasiya', 'Anilbhai Pavasiya is a candidate of Aam Aadmi Party for lok Sabha election', 1, '2018-03-30', 2, '12-October-1962', '64-Bhalchandra Society'),
(836, 3, 2061, 'Priyanshbhai Limda', 'Male', 'candidate/photo_835_1522402086.jpeg', 'priyanshbhailimda@gmail.com', 'priyanshbhailimda', 'Priyanshbhai Limda is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '28-Auguest-1976', 'G-2,Gyandhara Society'),
(837, 3, 2073, 'Trishant Bhadani', 'Male', 'candidate/photo_836_1522402225.jpg', 'trishantbhadani@gmail.com', 'trishantbhadani', 'Trishant Bhadani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '11-September-1966', '184-Laxmikant Society'),
(838, 3, 2061, 'Shrutbhai Londliya', 'Male', 'candidate/photo_837_1522402369.png', 'shrutbhailondliya@gmail.com', 'shrutbhailondliya', 'Shrutbhai Londliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '28-Auguest-1976', 'A-201,Shital Society'),
(839, 3, 2078, 'Vinitbhai Kanadiya', 'Male', 'candidate/photo_838_1522402522.jpeg', 'vinitbhaikanadiya@gmail.com', 'vinitbhaikanadiya', 'Vinitbhai Kanadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '17-Auguest-1972', '115-Laxmidhan Society'),
(840, 3, 2072, 'Vedanshbhai Jadvani', 'Male', 'candidate/photo_839_1522402662.jpg', 'vedanshbhaijadvani@gmail.com', 'vedanshbhaijadvani', 'Vedanshbhai Jadvani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '20-December-1970', 'A-202,Nency Residency'),
(841, 3, 2070, ' Bhavybhai Lakhani', 'Male', 'candidate/photo_840_1522402834.jpeg', 'bhavybhailakhani@gmail.com', 'bhavybhailakhani', ' Bhavybhai Lakhani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '19-Auguest-1975', '84-Bhagunagar Society'),
(842, 3, 2068, 'Purvinshbhai Pansuriya', 'Male', 'candidate/photo_841_1522403069.jpeg', 'purvinshbhaipasuriya@gmail.com', 'purvinshbhaipasuriya', 'Purvinshbhai Pansuriya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '9-April-1974', '90-Gauranj Appartment'),
(843, 3, 2074, 'Dhavanitbhai Dobariya', 'Male', 'candidate/photo_842_1522403184.jpeg', 'dhavanitbhaidobariya@gmail.com', 'dhavanitbhaidobariya', 'Dhavanitbhai Dobariya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '20-July-1971', '78-Sarita Sagar Society'),
(844, 3, 2063, 'Sunabhai Marmar', 'Male', 'candidate/photo_843_1522403293.jpg', 'sunabhaimarmar@gmail.com', 'sunabhaimarmar', 'Sunabhai Marmar is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '12-Auguest-1972', '67-Kaily Complex'),
(845, 3, 2061, 'Tainurbhai Ghoghari', 'Male', 'candidate/photo_844_1522403447.jpeg', 'tainurbhaighoghari@gmail.com', 'tainurbhaighoghari', 'Tainurbhai Ghoghari is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '16-September-1977', '402-Ajani House'),
(846, 3, 2078, 'Pragneshbhai Golakiya', 'Male', 'candidate/photo_845_1522403579.jpeg', 'pragneshbhaigolakiya@gmail.com', 'pragneshbhaigolakiya', 'Pragneshbhai Golakiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '31-December-1962', 'D-501,Satvan Society'),
(847, 3, 2075, 'Sohambhai Vaishnav', 'Male', 'candidate/photo_846_1522403768.jpg', 'sohambhaivaishnav@gmail.com', 'sohambhaivaishnav', 'Sohambhai Vaishnav is a candidate of Aam Aadmi Party for Rajya  sabha election', 1, '2018-03-30', 2, '10-Auguest-1975', '78-Bapu Villa'),
(848, 3, 2068, 'Divyangbhai Shachpara', 'Male', 'candidate/photo_847_1522404169.jpg', 'divyangbhaishachpara@gmail.com', 'divyangbhaishachpara', 'Divyangbhai Shachpara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '18-September-1969', '57-Gokuldham Society'),
(849, 3, 2061, 'Jamneshhai Kajavadra', 'Male', 'candidate/photo_848_1522404346.jpeg', 'jamneshhaikajavadra@gmail.com', 'jamneshhaikajavadra', 'Jamneshhai Kajavadra is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '11-December-1964', 'A-12,301,Platinium Plaza'),
(850, 3, 2071, 'Chetanbhai Sakariya', 'Male', 'candidate/photo_849_1522404468.jpg', 'chetanbhaisakariya@gmail.com', 'chetanbhaisakariya', 'Chetanbhai Sakariya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '20-December-1976', '78-Devprayag Residency'),
(851, 3, 2066, 'Kantilal Jariwala', 'Male', 'candidate/photo_850_1522404569.jpeg', 'kantilaljariwala@gmail.com', 'kantilaljariwala', 'Kantilal Jariwala is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '19-September-1971', '90-Devki Building'),
(852, 3, 2067, 'Jalpeshbhai Kajavadara', 'Male', 'candidate/photo_851_1522404696.jpg', 'jalpeshbhaikajavadara@gmail.com', 'jalpeshbhaikajavadara', 'Jalpeshbhai Kajavadara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '11-April-1963', '78-Maknjipark'),
(853, 3, 2079, 'Vishvasbhai Bhagamiya', 'Male', 'candidate/photo_852_1522404895.jpg', 'vishvasbhaibhagamiya@gmail.com', 'vishvasbhaibhagamiya', 'Vishvasbhai Bhagamiya is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '12-Auguest-1962', 'A/1,Sachanand Society'),
(854, 3, 2080, 'Mavjibhai Domadiya', 'Male', 'candidate/photo_853_1522405117.jpeg', 'mavjibhaidomadiya@gmail.com', 'mavjibhaidomadiya', 'Mavjibhai Domadiya is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '15-Auguest-1975', '78-Rajanand Society'),
(855, 3, 2081, 'Khimjibhai Golakiya', 'Male', 'candidate/photo_854_1522405309.jpeg', 'khimjibhaigolakiya@gmail.com', 'khimjibhaigolakiya', 'Khimjibhai Golakiya is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '19-November-1972', '39/40,Rugved Banglows'),
(856, 3, 2082, 'Sunilbhai Vithani', 'Male', 'candidate/photo_855_1522405407.jpeg', 'sunilbhaivithani@gmail.com', 'sunilbhaivithani', 'Sunilbhai Vithani is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '29-April-1968', '268-Haridarshan No Khado'),
(857, 3, 2083, 'Mihanbhai Kasodariya', 'Male', 'candidate/photo_856_1522405594.jpg', 'mihanbhaikasodariya@gmail.com', 'mihanbhaikasodariya', 'Mihanbhai Kasodariya is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '26-June-1972', '11,Gokul Row House'),
(858, 3, 2084, 'Bhavybhai Kujadiya', 'Male', 'candidate/photo_857_1522406081.jpeg', 'bhavybhaikujadiya@gmail.com', 'bhavybhaikujadiya', 'Bhavybhai Kujadiya is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '28-Auguest-1974', '89-Yamini Nagar'),
(859, 3, 2085, 'Bablibhai Sutariya', 'Male', 'candidate/photo_858_1522431406.jpeg', 'bablibhaisutariya@gmail.com', 'bablibhaisutariya', 'Bablibhai Sutariya is a candidate of Aam Aadmi party for Lok Sabha election', 1, '2018-03-30', 2, '15-Auguest-1959', '67-Anajani Residency'),
(860, 3, 2086, 'Vinaybhai Viradiya', 'Male', 'candidate/photo_859_1522431702.jpeg', 'vinaybhaiviradiya@gmail.com', 'vinaybhaiviradiya', 'Vinaybhai Viradiya is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '12-July-1970', '89-Light House'),
(861, 3, 2087, 'Hariombhai Hitachi', 'Male', 'candidate/photo_860_1522431928.jpg', 'hariombhaihitachi@gmail.com', 'hariombhaihitachi', 'Hariombhai Hitachi is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-30', 2, '13-June-1969', '78-Shivani Complex'),
(862, 3, 2079, 'Girishbhai Parmar', 'Male', 'candidate/photo_861_1522432352.jpeg', 'girishbhaiparmar@gmail.com', 'girishbhaiparmar', 'Girishbhai Parmar is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '15-July-1964', '66-Suhas Appartment'),
(863, 3, 2080, 'Samratbhai Kediya', 'Male', 'candidate/photo_862_1522432532.jpeg', 'samratbhaikediya@gmail.com', 'samratbhaikediya', 'Samratbhai Kediya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '12-Auguest-1963', '78-Shiv Nagar Society'),
(864, 3, 2080, 'Satishbhai Vanpariya', 'Male', 'candidate/photo_863_1522432856.jpeg', 'satishbhaivanpariya@gmail.com', 'satishbhaivanpariya', 'Satishbhai Vanpariya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '12-Auguest-1968', '786-Shyam Lake City'),
(865, 3, 2082, 'Aadeshbhai Kevadiya', 'Male', 'candidate/photo_864_1522433019.jpeg', 'aadeshbhaikevadiya@gmail.com', 'aadeshbhaikevadiya', 'Aadeshbhai Kevadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '10-September-1963', '89-Jaybhavani Society'),
(866, 3, 2083, 'Jaganbhai Karkar', 'Male', 'candidate/photo_865_1522433226.jpeg', 'jaganbhaikarkar@gmail.com', 'jaganbhaikarkar', 'Jaganbhai Karkar is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '12-November-1977', '78-Sharddhadeep Society'),
(867, 3, 2084, 'Garvbhai Ambaliya', 'Male', 'candidate/photo_866_1522433388.jpeg', 'garvbhaiambaliya@gmail.com', 'garvbhaiambaliya', 'Garvbhai Ambaliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '11-June-1965', '78-Jaybhavani Society'),
(868, 3, 2085, 'Ratishbhai Aryal', 'Male', 'candidate/photo_867_1522433560.jpeg', 'ratishbhaiaryal@gmail.com', 'ratishbhaiaryal', 'Ratishbhai Aryal is a candidate of Aam Aadmi Party for Vidhna sabha election', 1, '2018-03-30', 2, '19-June-1962', '67-Kaushik Society'),
(869, 3, 2086, 'Fredibhai Nandvami', 'Male', 'candidate/photo_868_1522433871.jpeg', 'fredibhainandvami@gmail.com', 'fredibhainandvami', 'Fredibhai Nandvami is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-30', 2, '14-July-1964', '89-Dikishit Appartment'),
(870, 3, 2087, 'Purvilbhai Dankhara', 'Male', 'candidate/photo_869_1522434790.jpg', 'purvilbhaidankhara@gmail.com', 'purvilbhaidankhara', 'Purvilbhai Dankhara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '14-May-1965', '77-Tishan Residency'),
(871, 3, 2079, 'Hasinbhai Dudhrejiya', 'Male', 'candidate/photo_870_1522435031.jpg', 'hasinbhaidudhrejiya@gmail.com', 'hasinbhaidudhrejiya', 'Hasinbhai Dudhrejiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '20-November-1967', '89-Amar Residency'),
(872, 3, 2080, 'Amarbhai Kamani', 'Male', 'candidate/photo_871_1522435207.jpeg', 'amarbhaikamani@gmail.com', 'amarbhaikamani', 'Amarbhai Kamani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '21-Auguest-1967', '78-Raiyansh Society'),
(873, 3, 2081, 'Kushbhai Lukhi', 'Male', 'candidate/photo_872_1522459666.jpeg', 'kushbhailukhi@gmail.com', 'kushbhailukhi', 'Kushbhai Lukhi is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '10-July-1960', '7-Bhidbhangan Society'),
(874, 3, 2083, 'Akshaybhai Dhodiya', 'Male', 'candidate/photo_873_1522459850.jpeg', 'akshaybhaidhodiya@gmail.com', 'akshaybhaidhodiya', 'Akshaybhai Dhodiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '14-March-1967', '3,Jaldarshan Raw House'),
(875, 3, 2084, 'Monilbhai Hatala', 'Male', 'candidate/photo_874_1522459984.jpg', 'monilbhaihatala@gmail.com', 'monilbhaihatala', 'Monilbhai Hatala is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '11-June-1965', '46-Tulsishyam Society'),
(876, 3, 2085, 'Jasmatbhai Khadela', 'Male', 'candidate/photo_875_1522460135.jpeg', 'jasmatbhaikhadela@gmail.com', 'jasmatbhaikhadela', 'Jasmatbhai Khadela is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '23-June-1959', 'A/2,504,Vrajvatika Society'),
(877, 3, 2085, 'Tusharbhai Saliya', 'Male', 'candidate/photo_876_1522460313.jpeg', 'tusharbhaisaliya@gmail.com', 'tusharbhaisaliya', 'Tusharbhai Saliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '9-June-1974', 'B-115,Panchvati Society'),
(878, 3, 2086, 'Kenilbhai Chauhan', 'Male', 'candidate/photo_877_1522460433.jpg', 'kenilbhaichauhan@gmail.com', 'kenilbhaichauhan', 'Kenilbhai Chauhan is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '18-March-1967', 'B-115,Mehta Nagar'),
(879, 3, 2087, 'Yashivn Rathod', 'Male', 'candidate/photo_878_1522460541.jpg', 'yashivnrathod@gmail.com', 'yashivnrathod', 'Yashivn Rathod is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '11-July-1967', '1001-Prijam Hights'),
(880, 3, 2089, 'Vrushal Kanani', 'Male', 'candidate/photo_879_1522460698.jpeg', 'vrushalkanani@gmail.com', 'vrushalkanani', 'Vrushal Kanani is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-31', 2, '9-July-1962', '65-Sahjanand Society');
INSERT INTO `tbl_candidate_registration` (`candidate_id`, `party_id`, `location_id`, `candidate_name`, `gender`, `profile_pic`, `email_id`, `password`, `description`, `status`, `r_date`, `category_id`, `dob`, `office_address`) VALUES
(881, 3, 2090, 'Darshbhai Vala', 'Male', 'candidate/photo_880_1522460788.jpg', 'darshbhaivala@gmail.com', 'darshbhaivala', 'Darshbhai Vala is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-31', 2, '17-Auguest-1966', '73-Sundaram Society'),
(882, 3, 2091, 'Dhruvbhai Kapadiya', 'Male', 'candidate/photo_881_1522460947.jpeg', 'dhruvbhaikapadiya@gmail.com', 'dhruvbhaikapadiya', 'Dhruvbhai Kapadiya is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-31', 2, '14-July-1978', '401-Devki Buliding'),
(883, 3, 2092, 'Manekbhai Morbiwala', 'Male', 'candidate/photo_882_1522461055.jpg', 'manekbhaimorbiwala@gmail.com', 'manekbhaimorbiwala', 'Manekbhai Morbiwala is a candidate of Aam Aadmi Party for Lok sabha election', 1, '2018-03-31', 2, '12-July-1964', '6/A,V-2,Laxminarayan Society'),
(884, 3, 2093, 'Narshibhai Soni', 'Male', 'candidate/photo_883_1522461163.jpeg', 'narshibhaisoni@gmail.com', 'narshibhaisoni', 'Narshibhai Soni is a candidate of Aam Aadmi Party for lok sabha election', 1, '2018-03-31', 2, '29-December-1977', 'B-6,Banglowtype Society'),
(885, 3, 2094, 'Jasmitbhai Davara', 'Male', 'candidate/photo_884_1522461308.jpg', 'jasmitbhaidavara@gmail.com', 'jasmitbhaidavara', 'Jasmitbhai Davara is a candidate of Aam Aadmi Party for Lok Sabha election ', 1, '2018-03-31', 2, '19-Auguest-1978', '542,Krantisheri'),
(886, 3, 2095, 'Montubhai Falki', 'Male', 'candidate/photo_885_1522461465.jpeg', 'montubhaifalki@gmail.com', 'montubhaifalki', 'Montubhai Falki is a candidate of Aam Aadmi Party for Lok Sabha election', 1, '2018-03-31', 2, '16-May-1978', '52-Jogani Nagar'),
(887, 3, 2098, 'Lavjibhai Jasoliya', 'Male', 'candidate/photo_886_1522461792.jpg', 'lavjibhaijasoliya@gmail.com', 'lavjibhaijasoliya', 'Lavjibhai Jasoliya is a candidate of Aam Aadmi Party for Lok sabha election', 1, '2018-03-31', 2, '12-April-1983', 'A-14,Aakshdeep Society'),
(888, 3, 2096, 'Devshribhai Dhanani', 'Male', 'candidate/photo_887_1522461902.jpg', 'devshribhaidhanani@gmail.com', 'devshribhaidhanani', 'Devshribhai Dhanani is a candidate of Aam Aadmi party for Lok Sabha election', 1, '2018-03-31', 2, '10-May-1961', 'C-502,Avishkar Garden'),
(889, 3, 2090, 'Hasmukhbhai Khunt', 'Male', 'candidate/photo_888_1522462045.jpg', 'hasmukhbhaikhunt@gmail.com', 'hasmukhbhaikhunt', 'Hasmukhbhai Khunt is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '16-July-1958', '8,Bhagatnagar society'),
(890, 3, 2090, 'Gulvantbhai Rangani', 'Male', 'candidate/photo_889_1522462169.jpg', 'gulvantbhairangani@gmail.com', 'gulvantbhairangani', 'Gulvantbhai Rangani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '14-December-1952', '29-Gayatri Society'),
(891, 3, 2091, 'Dalpatrambhai Moradiya', 'Male', 'candidate/photo_890_1522462290.jpeg', 'dalpatrambhaimoradiya@gmail.com', 'dalpatrambhaimoradiya', 'Dalpatrambhai Moradiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '14-February-1963', 'A-35,Jay Ranchhodnagar Society'),
(892, 3, 2092, 'Panthbhai Beladiya', 'Male', 'candidate/photo_891_1522462386.jpg', 'panthbhaibeladiya@gmail.com', 'panthbhaibeladiya', 'Panthbhai Beladiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '26-November-1976', '1,Subhashnagar society'),
(893, 3, 2093, 'Ukshilbhai Hun', 'Male', 'candidate/photo_892_1522462521.jpg', 'ukshilbhaihun@gmail.com', 'ukshilbhaihun', 'Ukshilbhai Hun is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '18-May-1964', '14-Archana Society'),
(894, 3, 2094, 'Hetulbhai Golakiya', 'Male', 'candidate/photo_893_1522462648.jpeg', 'hetulbhaigolakiya@gmail.com', 'hetulbhaigolakiya', 'Hetulbhai Golakiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '31-March-1957', '158-Keshavpark Society'),
(895, 3, 2095, 'Trupesh Tapadi', 'Male', 'candidate/photo_894_1522462836.jpg', 'trupeshtapadi@gmail.com', 'trupeshtapadi', 'Trupesh Tapadi is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '17-Auguest-1961', 'C-401,Satvan Society'),
(896, 3, 2095, 'Dharmilbhai Nayani', 'Male', 'candidate/photo_895_1522462944.jpg', 'dharmilbhainayani@gmail.com', 'dharmilbhainayani', 'Dharmilbhai Nayani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '31-September-1972', '204,Madhav Mandir Residency'),
(897, 3, 2098, 'Manbhai Saliya', 'Male', 'candidate/photo_896_1522463055.jpeg', 'manbhaisaliya@gmail.com', 'manbhaisaliya', 'Manbhai Saliya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '29-September-1961', '15-Manishnagar Society'),
(898, 3, 2089, 'Mananbhai Dobariya', 'Male', 'candidate/photo_897_1522463268.jpg', 'mananbhaidobariya@gmail.com', 'mananbhaidobariya', 'Mananbhai Dobariya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '17-May-1961', '306,Akruti Residency'),
(899, 3, 2090, 'Bhavdeepbhai Shigala', 'Male', 'candidate/photo_898_1522463369.jpeg', 'bhavdeepbhaishigala@gmail.com', 'bhavdeepbhaishigala', 'Bhavdeepbhai Shigala is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '13-May-1953', '102-Harismruti Appartment'),
(900, 3, 2091, 'Divyeshbhai Ramanunj', 'Male', 'candidate/photo_899_1522463477.jpeg', 'divyeshbhairamanunj@gmail.com', 'divyeshbhairamanunj', 'Divyeshbhai Ramanunj is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '23-December-1959', '134-Citycorner Appartment'),
(901, 3, 2092, 'Savjibhai Jivani', 'Male', 'candidate/photo_900_1522463578.jpg', 'savjibhaijivani@gmail.com', 'savjibhaijivani', 'Savjibhai Jivani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '5-June-1965', 'B-8,Ganesh Raw House'),
(902, 3, 2093, 'Chandreshbhai Varsadiya', 'Male', 'candidate/photo_901_1522463680.png', 'chandreshbhaivarsadiya@gmail.com', 'chandreshbhaivarsadiya', 'Chandreshbhai Varsadiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '7-April-1966', '14/3,Saraswati Society'),
(903, 3, 2094, 'Kevalbhai Navapara', 'Male', 'candidate/photo_902_1522463841.jpg', 'kevalbhainavapara@gmail.com', 'kevalbhainavapara', 'Kevalbhai Navapara is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '20-September-1967', '71-Ishri Khodiyarkrupa society'),
(904, 3, 2095, 'Mikunjbhai Madhvani', 'Male', 'candidate/photo_903_1522463950.jpg', 'mikunjbhaimadhvani@gmail.com', 'mikunjbhaimadhvani', 'Mikunjbhai Madhvani is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '15-Auguest-1968', '78-Devkikrupa society'),
(905, 3, 2096, 'Rudrabhai Sagiya', 'Male', 'candidate/photo_904_1522464059.jpg', 'rudrabhaisagiya@gmail.com', 'rudrabhaisagiya', 'Rudrabhai Sagiya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '16-June-1965', '878-Parsotam Society'),
(906, 3, 2098, 'Dhavnitbhai Kantheriya', 'Male', 'candidate/photo_905_1522464161.jpeg', 'dhavnitbhaikantheriya@gmail.com', 'dhavnitbhaikantheriya', 'Dhavnitbhai Kantheriya is a Candidate of Aam Aadmi Party for Lok Sabha Election', 1, '2018-03-31', 2, '17-April-1956', '78-Gurunagar Society'),
(907, 4, 1821, 'Chaturbhai Sagpariya', 'Male', 'candidate/photo_906_1522480614.jpeg', 'chaturbhaisagpariya@gmail.com', 'chaturbhaisagpariya', 'Chaturbhai Sagpariya is a candidate of Bahujan Samaj Party for lok sabha election', 1, '2018-03-31', 2, '13-May-1963', '67-Sartam Society'),
(908, 4, 1822, 'Nikhilbhai Malaviya', 'Male', 'candidate/photo_907_1522480802.jpeg', 'nikhilbhaimalaviya@gmail.com', 'nikhilbhaimalaviya', 'Nikhilbhai Malaviya is a  candidate of Bahujan Samaj Party for lok sabha election', 1, '2018-03-31', 2, '11-September-1966', '89-Ami Society'),
(909, 4, 1823, 'Sumitbhai Suvagiya', 'Male', 'candidate/photo_908_1522481056.jpeg', 'sumitbhaisuvagiya@gmail.com', 'sumitbhaisuvagiya', 'Sumitbhai Suvagiya is a candidate of Bahujan Samaj Party for lok sabha election', 1, '2018-03-31', 2, '14-May-1959', '78-Star Complex'),
(910, 4, 1834, 'Mukund Lakhota', 'Male', 'candidate/photo_909_1522481146.jpg', 'mukundlakhota@gmail.com', 'mukundlakhota', 'Mukund Lakhota is a candidate of Bahujan Samaj party for Lok sabha election', 1, '2018-03-31', 2, '12-March-1969', '12,Sunshine Complex'),
(911, 4, 1838, 'Tiranshbhai Chavada', 'Male', 'candidate/photo_910_1522481334.jpg', 'tiranshbhaichavada@gmail.com', 'tiranshbhaichavada', 'Tiranshbhai Chavada is a candidate of Bahujan Samaj Party for lok sabha election', 1, '2018-03-31', 2, '13-Auguest-1963', '89,Sun Society'),
(912, 4, 1852, 'Ranjitbhai Singh', 'Male', 'candidate/photo_911_1522481452.jpg', 'ranjitbhaisingh@gmail.com', 'ranjitbhaisingh', 'Ranjitbhai Singh is a candidate of Bahujan Samaj Party for Lok sabha election', 1, '2018-03-31', 2, '10-May-1963', '78-Sujal Appartment'),
(913, 4, 1911, 'Punitbhai Pathan', 'Male', 'candidate/photo_912_1522481546.jpeg', 'punitbhaipathan@gmail.com', 'punitbhaipathan', '67-Sivam Complex', 1, '2018-03-31', 2, '16-July-1961', '78-Shine Appartment'),
(914, 4, 1854, 'Shreyansh Maisuriya', 'Male', 'candidate/photo_913_1522481734.jpg', 'shreyanshmaisuriya@gmail.com', 'shreyanshmaisuriya', 'Shreyansh Maisuriya is a candidate of Bahujan Samaj Party for Lok Sabha election', 1, '2018-03-31', 2, '10-October-1967', '67-Shrmjivi Society'),
(915, 4, 1893, 'Dhavleshbhai Baghel', 'Male', 'candidate/photo_914_1522481921.jpeg', 'dhavleshbhaibaghel@gmail.com', 'dhavleshbhaibaghel', 'Dhavleshbhai Baghel is a candidate of Bahujan Samaj Party for lok sabha election', 1, '2018-03-31', 2, '9-Auguest-1980', '78-Trupti Appartment'),
(916, 4, 1821, 'Rustambhai Bhanderi', 'Male', 'candidate/photo_915_1522482153.jpeg', 'rustambhaibhanderi@gmail.com', 'rustambhaibhanderi', 'Rustambhai Bhanderi is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-31', 2, '9-June-1966', '78-Manjupara'),
(917, 4, 1822, 'Mukeshbhai Mishra', 'Male', 'candidate/photo_916_1522482314.jpeg', 'mukeshbhaimishra@gmail.com', 'mukeshbhaimishra', 'Mukeshbhai Mishra is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-31', 2, '12-April-1961', '78-Vanita Vishram Society'),
(918, 4, 1825, 'Hemanbhai Tandel', 'Male', 'candidate/photo_917_1522482700.jpeg', 'hemanbhaitandel@gmail.com', 'hemanbhaitandel', 'Hemanbhai Tandel is a Candidate of Bahujan Samaj Party for Lok Sabha Election', 1, '2018-03-31', 2, '18-February-1980', '222,Dream Cultuer'),
(919, 8, 1821, 'Kaushalbhai Tadavi', 'Male', 'candidate/photo_918_1522566946.jpg', 'kaushalbhaitadavi@gmail.com', 'kaushalbhaitadavi', ' Kaushalbhai Tadavi is a candidate of Nationalist Congress Party for Lok Sabha Election', 1, '2018-04-01', 2, '20-June-1968', '8, Nanawata Road, Nanavat, Gopipura, Surat\r\n'),
(920, 8, 1822, 'Mayurbhai Ghelani', 'Male', 'candidate/photo_919_1522567154.jpeg', 'mayurbhaighelani@gmail.com', 'mayurbhaighelani', 'Mayurbhai Ghelani is a candidate of Nationalist Congress Party for Lok Sabha election', 1, '2018-04-01', 2, '13-July-1970', '67-Udhana Station Road ,Road No 11,Opposite BSNL Office'),
(921, 8, 1823, 'Surendrabhai Malek', 'Male', 'candidate/photo_920_1522570611.jpg', 'surendrabhaimalek@gmail.com', 'surendrabhaimalek', 'Surendrabhai Malek is a candidate of Nationalist Congress Party for Lok Sabha election', 1, '2018-04-01', 2, '30-July-1959', '6th floor,Resham Bhavan,Lal Darwaja'),
(922, 8, 1824, 'Dharmeshbhai Kevadiya', 'Male', 'candidate/photo_921_1522570859.jpeg', 'dharmeshbhaikevadiya@gmail.com', 'dharmeshbhaikevadiya', 'Dharmeshbhai Kevadiya is a candidate of Nationalist Congress Party for Lok sabha election', 1, '2018-04-01', 2, '8-March-1950', 'Surat - Dumas Rd, Opp.Talati Office, Athwalines, Athwa Gate'),
(923, 8, 1825, 'Uttambhai Gorasiya', 'Male', 'candidate/photo_922_1522571016.jpeg', 'uttambhaigorasiya@gmail.com', 'uttambhaigorasiya', 'Uttambhai Gorasiya is a candidate of Nationalist Congress party for lok sabha election', 1, '2018-04-01', 2, '8-June-1958', 'Plot No.174, Near Grahak Bhawan, Opp. Police Quarters, Umra'),
(924, 8, 1826, 'Miteshbhai Bharoliya', 'Male', 'candidate/photo_923_1522571161.jpeg', 'miteshbhaibharoliya@gmail.com', 'miteshbhaibharoliya', 'Miteshbhai Bharoliya is candidate of Nationalist Congress party for Lok Sabha election', 1, '2018-04-01', 2, '11-February-1964', 'Muglia Sarai Athwalines'),
(925, 8, 1827, 'Satishbhai Miyani', 'Male', 'candidate/photo_924_1522571320.jpeg', 'satishbhaimiyani@gmail.com', 'satishbhaimiyani', 'Satishbhai Miyani is a candidate of Nationalist Congress Party for Lok Sabha election', 1, '2018-04-01', 2, '14-March-1955', 'Bardoli Circle,Near Bardoli station '),
(926, 8, 1828, 'Pankajbhai  Mepani', 'Male', 'candidate/photo_925_1522571437.jpeg', 'pankajbhaimepani@gmail.com', 'pankajbhaimepani', 'Pankajbhai  Mepani is a candidate of Nationalist Congress Party for lok sabha election', 1, '2018-04-01', 2, '12-April-1954', 'Bhagal Vadi'),
(927, 8, 1829, 'Mohitbhai Lodaliya', 'Male', 'candidate/photo_926_1522571755.jpg', 'mohitbhailodaliya@gmail.com', 'mohitbhailodaliya', 'Mohitbhai Lodaliya is a candidate of Nationalist Congress Party for Lok sabha election', 1, '2018-04-01', 2, '12-May-1953', ' Dakol Pole, Behind Bhajiwali Pole, Mahidharpura, Bhagal'),
(928, 8, 1790, 'Niteshbhai Desai', 'Male', 'candidate/photo_927_1522571996.jpeg', 'niteshbhaidesai@gmail.com', 'niteshbhaidesai', 'Niteshbhai Desai is a candidate of Nationalist Congress Party for Lok Sabha election', 1, '2018-04-01', 2, '14-July-1957', '83B,Productivity Rd'),
(929, 8, 2030, 'Babubhai Bharodiya', 'Male', 'candidate/photo_928_1522572190.jpg', 'babubhaibharodiya@gmail.com', 'babubhaibharodiya', 'Babubhai Bharodiya is candidate of Nationalist Congress Party for Lok Sabha election', 1, '2018-04-01', 2, '16-May-1959', 'E.R.I. Compound'),
(930, 8, 2052, 'Vishnubhai Thaper', 'Male', 'candidate/photo_929_1522572528.jpeg', 'vishnubhaithaper@gmail.com', 'vishnubhaithaper', 'Vishnubhai Thaper is a candidate of Nationalist Congress Party for lok Sabha election', 1, '2018-04-01', 2, '17-June-1956', ' Near Golden Chokdi, NH 8, Darji Pura'),
(931, 7, 1821, 'Darshanbhai Sachapara', 'Male', 'candidate/photo_930_1522572981.jpeg', 'darshanbhaisachapara@gmail.com', 'darshanbhaisachapara', 'Darshanbhai Sachapara is a candidate Communist Party of India(Marxist) for Lok Sabha election', 1, '2018-04-01', 2, '5-July-1965', 'Station Road'),
(932, 7, 1822, 'Nishantbhai Vavadiya', 'Male', 'candidate/photo_931_1522573184.jpg', 'nishantbhaivavadiya@gmail.com', 'nishantbhaivavadiya', 'Nishantbhai Vavadiya is a candidate of Communist Party of India (Marxist) for Lok Sabha Election', 1, '2018-04-01', 2, '10-November-1959', 'Nirmal Complex Near Sudama Chowk'),
(933, 7, 1823, 'Keyurbhai Surani', 'Male', 'candidate/photo_932_1522573317.jpeg', 'keyurbhaisurani@gmail.com', 'keyurbhaisurani', 'Keyurbhai Surani is a candidate of Communist Party of India (Marxist) for Lok Sabha election', 1, '2018-04-01', 2, '14-June-1961', 'Mehasul Seva Sadan'),
(934, 7, 1824, 'Yugbhai Bodarya', 'Male', 'candidate/photo_933_1522573449.jpg', 'yugbhaibodarya@gmail.com', 'yugbhaibodarya', 'Yugbhai Bodarya is a candidate of Communist Party of India (Marxist) for lok sabha election', 1, '2018-04-01', 2, '12-December-1965', '339,Railway Station Road'),
(935, 7, 1825, 'Darshanbhai Bharoliya', 'Male', 'candidate/photo_934_1522573682.jpg', 'darshanbhaibharoliya@gmail.com', 'darshanbhaibharoliya', 'Darshanbhai Bharoliya is a candidate of Communist Party of India (Marxist) in Lok Sabha election', 1, '2018-04-01', 2, '19-December-1966', 'Race Course Road ,Race Course ,Sadar'),
(936, 7, 1828, 'Priyanshbhai Aryal', 'Male', 'candidate/photo_935_1522573904.jpeg', 'priyanshbhaiaryal@gmail.com', 'priyanshbhaiaryal', 'Priyanshbhai Aryal is  candidate of Communist Party of India (Marxist) for Lok Sabha election', 1, '2018-04-01', 2, '7-Auguest-1974', '26/2, Rander Rd, Morabhagal, Ramnagar, Rander'),
(937, 7, 1826, 'Jigneshbhai Nathani', 'Male', 'candidate/photo_936_1522574077.jpg', 'jigneshbhainathani@gmail.com', 'jigneshbhainathani', 'Jigneshbhai Nathani is a candidate of Communist Party of India (Marxist) for Lok Sabha election', 1, '2018-04-01', 2, '31-October-1964', 'Navsari Rd,opp,BRTS Road'),
(938, 7, 1827, 'Punitbhai Karkar', 'Male', 'candidate/photo_937_1522574229.jpeg', 'punitbhaikarkar@gmail.com', 'punitbhaikarkar', 'Punitbhai Karkar is a candidate of Communist Party of India (Marxist) for Lok Sabha election', 1, '2018-04-01', 2, '16-July-1963', 'Shantinagar ,Near Aashanagr Udhana'),
(939, 7, 1829, 'Zarnabhai Rustagi', 'Male', 'candidate/photo_938_1522574416.jpeg', 'zarnabhairustagi@gmail.com', 'zarnabhairustagi', 'Zarnabhai Rustagi is a candidate of Communist Party of India (Marxist) for Lok Sabha election', 1, '2018-04-01', 2, '25-July-1962', 'Umiya Nagar ,Near Rander'),
(940, 5, 1821, 'Aahavabhai Khabhadiya', 'Male', 'candidate/photo_939_1522574730.jpg', 'aahavabhaikhabhadiya@gmail.com', 'aahavabhaikhabhadiya', 'Aahavabhai Khabhadiya is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-04-01', 2, '22-June-1959', '56-Abhay Shopping Centre'),
(941, 5, 1822, 'Kesubhai Sachani', 'Male', 'candidate/photo_940_1522574865.jpg', 'kesubhaisachani@gmail.com', 'kesubhaisachani', 'Kesubhai Sachani is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-04-01', 2, '5-June-1955', '45-Ami Complex,Althan Chowk,Althan'),
(942, 5, 1823, 'Mehulbhai Survilas', 'Male', 'candidate/photo_941_1522575335.jpg', 'mehulbhaisurvilas@gmail.com', 'mehulbhaisurvilas', 'Mehulbhai Survilas is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-04-01', 2, '24-September-1967', '78,Sukh villa Road,Near Alroli Circle'),
(943, 5, 1824, 'Dixitbhai Ambani', 'Male', 'candidate/photo_942_1522578222.jpeg', 'dixitbhaiambani@gmail.com', 'dixitbhaiambani', 'Dixitbhai Ambani is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-04-01', 2, '17-July-1965', 'Radhe Complex ,Near Surat Municipal Corporation Office'),
(944, 5, 1825, 'Samirbhai Khokhani', 'Male', 'candidate/photo_943_1522578418.jpeg', 'samirbhaikhokhani@gmail.com', 'samirbhaikhokhani', 'Samirbhai Khokhani is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-04-01', 2, '19-October-1968', '67-Mughaliya Sarai Complex'),
(945, 5, 1826, 'Taimoorbhai Desai', 'Male', 'candidate/photo_944_1522578538.jpg', 'taimoorbhaidesai@gmail.com', 'taimoorbhaidesai', 'Taimoorbhai Desai is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-04-01', 2, '12-September-1961', 'Suraj Chowk ,Bestan Road,Bestan'),
(946, 5, 1827, 'Satishbhai Donda', 'Male', 'candidate/photo_945_1522579083.jpeg', 'satishbhaidonda@gmail.com', 'satishbhaidonda', 'Satishbhai Donda is a candidate of All India Trinamool Congress for Lok Sabha Election', 1, '2018-04-01', 2, '19-Auguest-1967', '78-Om Complex Near Sardar Patel Chowk'),
(947, 5, 1828, 'Dipenbhai Vasavada', 'Male', 'candidate/photo_946_1522579269.jpeg', 'dipenbhaivasavada@gmail.com', 'dipenbhaivasavada', 'Dipenbhai Vasavada is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-04-01', 2, '20-Auguest-1962', '78-Jamuna Complex,Near Bhagal'),
(948, 5, 1829, 'Drusyam Bhisara', 'Male', 'candidate/photo_947_1522579397.jpg', 'drusyambhisara@gmail.com', 'drusyambhisara', 'Drusyam Bhisara is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-04-01', 2, '13-December-1959', '6-Suman Complex,Near Bhatar Char Rasta,Bhatar'),
(949, 5, 1790, 'Nikunjbhai Kumbhar', 'Male', 'candidate/photo_948_1522579510.jpg', 'nikunjbhaikumbhar@gmail.com', 'nikunjbhaikumbhar', 'Nikunjbhai Kumbhar is a candidate of All India Trinamool Congress for Lok Sabha election', 1, '2018-04-01', 2, '18-June-1956', '89-Shanivar Char Darvaja'),
(950, 6, 1821, 'Manishbhai Dholiya', 'Male', 'candidate/photo_949_1522579818.jpeg', 'manishbhaidholiya@gmail.com', 'manishbhaidholiya', 'Manishbhai Dholiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '10-June-1963', '78-Amin Complex,Near Adajan Char Rasta,Adajan'),
(951, 6, 1822, 'Ronnybhai Patel', 'Male', 'candidate/photo_950_1522580129.jpeg', 'ronnybhaipatel@gmail.com', 'ronnybhaipatel', 'Ronnybhai Patel is a candidate of Communist Party of Lok Sabha election', 1, '2018-04-01', 2, '29-June-1962', '67-Vishvas Complex,Near Althan Road,Althan'),
(952, 6, 1823, 'Sagar Ganagani', 'Male', 'candidate/photo_951_1522580405.jpeg', 'sagarganagani@gmail.com', 'sagarganagani', 'Sagar Ganagani is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '17-September-1966', '78,Suhas Apprtment ,Near Utran Road,Amroli'),
(953, 6, 1824, 'Buntybhai Mithaiwala', 'Male', 'candidate/photo_952_1522580556.jpg', 'buntybhaimithaiwala@gmail.com', 'buntybhaimithaiwala', 'Buntybhai Mithaiwala is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '26-December-1955', '45-Althan Road '),
(954, 6, 1825, 'Mohit Sharma', 'Male', 'candidate/photo_953_1522580680.jpeg', 'mohitsharma@gmail.com', 'mohitsharma', 'Mohit Sharma is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '25-April-1960', '89-Champa Masjid Road,Nanavat'),
(955, 6, 1826, 'Vinaybhai Jasoliya', 'Male', 'candidate/photo_954_1522580798.jpeg', 'vinaybhaijasoliya@gmail.com', 'vinaybhaijasoliya', 'Vinaybhai Jasoliya is a candidate of Communist Party of India For Lok Sabha election', 1, '2018-04-01', 2, '22-June-1961', '67-Jahangirpura Road.Jahangirpura'),
(956, 6, 1827, 'Bhupatbhai Dudheliya', 'Male', 'candidate/photo_955_1522580958.jpg', 'bhupatbhaidudheliya@gmail.com', 'bhupatbhaidudheliya', 'Bhupatbhai Dudheliya is a candidate of Communist Party of India for Lok Sabha election  ', 1, '2018-04-01', 2, '18-December-1964', '78-Bardoli Station Near Bardoli Circle,Bardoli'),
(957, 6, 1828, 'Umeshbhai Dankhara', 'Male', 'candidate/photo_956_1522581082.jpeg', 'umeshbhaidankhara@gmail.com', 'umeshbhaidankhara', 'Umeshbhai Dankhara is a communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '23-April-1963', '78-Bamroligam '),
(958, 6, 1829, 'Bhikubhai Gadhvi', 'Male', 'candidate/photo_957_1522581538.jpg', 'bhikubhaigadhvi@gmail.com', 'bhikubhaigadhvi', 'Bhikubhai Gadhvi is a candidate of Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '17-Auguest-1967', '67-Bhatar char rasta ,near bhatar road,Bhatar'),
(959, 6, 1783, 'Mohanbhai Bodariya', 'Male', 'candidate/photo_958_1522582167.jpg', 'mohanbhaibodariya@gmail.com', 'mohanbhaibodariya', 'Mohanbhai Bodariya is a candiate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '24-Auguest-1979', '78-Bharat Bagar Char rasta near Karaiya talav road'),
(960, 6, 1784, 'Dharmeshbhai Rakholiya', 'Male', 'candidate/photo_959_1522582265.jpeg', 'dharmeshbhairakholiya@gmail.com', 'dharmeshbhairakholiya', 'Dharmeshbhai Rakholiya is a candidate of Communist Party of india for lok sabha election', 1, '2018-04-01', 2, '15-September-1968', '78-Majura Complex,Near Government Hospital'),
(961, 6, 1785, 'Abhibhai Mehta', 'Male', 'candidate/photo_960_1522582444.jpeg', 'abhibhaimehta@gmail.com', 'abhibhaimehta', 'Abhibhai Mehta is a candidate of Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '22-Auguest-1967', '65-Popatnagar Complex,Near Sundar Residency '),
(962, 6, 1786, 'Pradipbhai Jasoliya', 'Male', 'candidate/photo_961_1522582580.jpeg', 'pradipbhaijasoliya@gmail.com', 'pradipbhaijasoliya', 'Pradipbhai Jasoliya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '14-December-1958', '78-Sundar Villa,Near Sabarmati Road'),
(963, 6, 1787, 'Dipenbhai Davara', 'Male', 'candidate/photo_962_1522582749.jpg', 'dipenbhaidavara@gmail.com', 'dipenbhaidavara', 'Dipenbhai Davara is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '17-July-1964', '2nd floor ,Dharti Smart Club,Near Sardar Chowk'),
(964, 6, 1788, 'Mavjibhai Monpara', 'Male', 'candidate/photo_963_1522582923.jpg', 'mavjibhaimonpara@gmail.com', 'mavjibhaimonpara', 'Mavjibhai Monpara is a candidate of Communist party of India for Lok Sabha election', 1, '2018-04-01', 2, '15-July-1964', '6,Vishal Complex,Near Sardar Garden'),
(965, 6, 1789, 'Mohitbhai Ambaliya', 'Male', 'candidate/photo_964_1522583017.jpeg', 'mohitbhaiambaliya@gmail.com', 'mohitbhaiambaliya', 'Mohitbhai Ambaliya is a candidate of Communist party of India for lok sabha election', 1, '2018-04-01', 2, '20-October-1976', '8,Bodakkdev Road'),
(966, 6, 1790, 'Shivambhai Sutariya', 'Male', 'candidate/photo_965_1522583157.jpeg', 'shivambhaisutariya@gmail.com', 'shivambhaisutariya', 'Shivambhai Sutariya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '18-Auguest-1968', '9,Manoj Villa ,Near Sabarmati River fund'),
(967, 6, 1922, 'Jayshukhbhai Balar', 'Male', 'candidate/photo_966_1522583292.jpeg', 'jayshukhbhaibalar@gmail.com', 'jayshukhbhaibalar', 'Jayshukhbhai Balar is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '26-September-1958', '9-laxya Villa,near Ambedkar Chowk'),
(968, 6, 1923, 'Drupadbhai Maurya', 'Male', 'candidate/photo_967_1522583435.jpeg', 'drupadbhaimaurya@gmail.com', 'drupadbhaimaurya', 'Drupadbhai Maurya is a candidate of Communist party of India for Lok Sabha election', 1, '2018-04-01', 2, '12-November-1958', '90-Vadodara Station road'),
(969, 6, 1924, 'Vivanbhai Jetani', 'Male', 'candidate/photo_968_1522583541.jpeg', 'vivanbhaijetani@gmail.com', 'vivanbhaijetani', 'Vivanbhai Jetani is a candidate of Communist party of India for lok Sabha election', 1, '2018-04-01', 2, '24-October-1968', '1,Umarvada Complex'),
(970, 6, 1925, 'Dharmeshbhai Dholiya', 'Male', 'candidate/photo_969_1522583635.jpeg', 'dharmeshbhaidholiya@gmail.com', 'dharmeshbhaidholiya', 'Dharmeshbhai Dholiya is a candidate of Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '19-February-1960', '2,Darshan Square'),
(971, 6, 1926, 'Tipen Sutariya', 'Male', 'candidate/photo_970_1522583759.jpeg', 'tipensutariya@gmail.com', 'tipensutariya', 'Tipen Sutariya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '23-July-1962', '90-Devshri Villa ,Near Station road'),
(972, 6, 1927, 'Nirupambhai Sakariya', 'Male', 'candidate/photo_971_1522583896.jpg', 'nirupambhaisakariya@gmail.com', 'nirupambhaisakariya', 'Nirupambhai Sakariya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '16-July-1960', '1st floor-Minaxi Complex,Near Sagvadi'),
(973, 6, 1928, 'Vishalbhai Vaghani', 'Male', 'candidate/photo_972_1522584118.JPG', 'vishalbhaivaghani@gmail.com', 'vishalbhaivaghani', 'Vishalbhai Vaghani is a candidate of Communist Party of India in lok Sabha election', 1, '2018-04-01', 2, '17-July-1957', '2nd floor ,Shagun Complex'),
(974, 6, 1929, 'Balubhai Radadiya', 'Male', 'candidate/photo_973_1522584306.jpg', 'balubhairadadiya@gmail.com', 'balubhairadadiya', 'Balubhai Radadiya is a candidate Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '20-Auguest-1963', '8,Jagu Square,Near Spining Mall'),
(975, 6, 1965, 'Rushabhbhai Dhameliya', 'Male', 'candidate/photo_974_1522584438.jpeg', 'rushabhbhaidhameliya@gmail.com', 'rushabhbhaidhameliya', 'Rushabhbhai Dhameliya is a candidate of Communist Party for lok sabha election ', 1, '2018-04-01', 2, '12-November-1961', '78-Nasham Residency,Near Station Road'),
(976, 6, 1966, 'Samitbhai Sheladiya', 'Male', 'candidate/photo_975_1522585860.jpg', 'samitbhaisheladiya@gmail.com', 'samitbhaisheladiya', 'Samitbhai Sheladiya is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '12-July-1961', '3rd floor,Silver Plaza'),
(977, 6, 1967, 'Hirenbhai Kakadiya', 'Male', 'candidate/photo_976_1522586062.jpeg', 'hirenbhaikakadiya@gmail.com', 'hirenbhaikakadiya', 'Hirenbhai Kakadiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '19-Auguest-1963', '8-Trushana Vihar,Near Ramji Temple'),
(978, 6, 1968, 'Vinayakbhai Chaturvedi', 'Male', 'candidate/photo_977_1522586178.jpeg', 'vinayakbhaichaturvedi@gmail.com', 'vinayakbhaichaturvedi', 'Vinayakbhai Chaturvedi is a candidate of Communist Party of india for Lok Sabha election', 1, '2018-04-01', 2, '12-June-1961', '89-Narayan Villa,near Vihan Mall'),
(979, 6, 1968, 'Keshubhai Bhuva', 'Male', 'candidate/photo_978_1522586518.jpeg', 'keshubhaibhuva@gmail.com', 'keshubhaibhuva', 'Keshubhai Bhuva is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '20-September-1963', '89-Amideep Residency,NEAR Amrakala Residency'),
(980, 6, 1970, 'Dineshbhai Vasoya', 'Male', 'candidate/photo_979_1522586626.jpg', 'dineshbhaivasoya@gmail.com', 'dineshbhaivasoya', 'Dineshbhai Vasoya is a candidate of Communist Party of India For lok Sabha election', 1, '2018-04-01', 2, '12-July-1968', '67-Samira hights,Near Magdalla Road'),
(981, 6, 1971, 'Manoharbhai Ambaliya', 'Male', 'candidate/photo_980_1522586796.jpeg', 'manoharbhaiambaliya@gmail.com', 'manoharbhaiambaliya', 'Manoharbhai Ambaliya is a candiadate of Communist Party of India For Lok Sabha election', 1, '2018-04-01', 2, '13-Auguest-1969', '2nd Floor,Rakesh Appartment,Near Pujan Park'),
(982, 6, 1984, 'Bhaveshbhai Thummar', 'Male', 'candidate/photo_981_1522586929.jpg', 'bhaveshbhaithummar@gmail.com', 'bhaveshbhaithummar', 'Bhaveshbhai Thummar is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '11-October-1962', '89-Maruti Villa,Near Balaji Bangalows'),
(983, 6, 1986, 'Parthbhai Chopada', 'Male', 'candidate/photo_982_1522587013.jpeg', 'parthbhaichopada@gmail.com', 'parthbhaichopada', 'Parthbhai Chopada is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '19-Auguest-1965', '2-Tejas Villa ,Near Station Road'),
(984, 6, 1987, 'Prathambhai Vavadiya', 'Male', 'candidate/photo_983_1522587173.jpg', 'prathambhaivavadiya@gmail.com', 'prathambhaivavadiya', 'Prathambhai Vavadiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '14-Auguest-1962', 'Millenium Arcade,Near Simple Restuarant'),
(985, 6, 1988, 'Samirbhai Ghodhani', 'Male', 'candidate/photo_984_1522587339.jpeg', 'samirbhaighodhani@gmail.com', 'samirbhaighodhani', 'Samirbhai Ghodhani is a candidate of Communist party of India for Lok Sabha election', 1, '2018-04-01', 2, '19-July-1963', 'Dhanmora Circle ,Tejas College'),
(986, 6, 1983, 'Narotambhai Desai ', 'Male', 'candidate/photo_985_1522587531.jpg', 'narotambhaidesai@gmail.com', 'narotambhaidesai', 'Narotambhai Desai  is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '22-April-1959', '8,V 86 A,Udhana UdyogNagar sahakari Sangh Limited,Centeral Rd.No-19'),
(987, 6, 1990, 'Utsavbhai Surani', 'Male', 'candidate/photo_986_1522587672.jpeg', 'utsavbhaisurani@gmail.com', 'utsavbhaisurani', 'Utsavbhai Surani is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '18-June-1963', '90-Tripura complex near Ambavadi'),
(988, 6, 1991, 'Thakatbhai Mangukiya', 'Male', 'candidate/photo_987_1522587774.jpeg', 'thakatbhaimangukiya@gmail.com', 'thakatbhaimangukiya', 'Thakatbhai Mangukiya is a candidate of Communist Party for Lok Sabha election', 1, '2018-04-01', 2, '19-April-1969', '89-Suraj Complex,Near Shagun Park'),
(989, 6, 1992, 'Dhirubhai Biladiya', 'Male', 'candidate/photo_988_1522587875.jpg', 'dhirubhaibiladiya@gmail.com', 'dhirubhaibiladiya', 'Dhirubhai Biladiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '16-September-1964', '78,Sushma Palace,Near Sushma Circle'),
(990, 6, 2000, 'Sureshbhai Soradiya', 'Male', 'candidate/photo_989_1522587998.jpg', 'sureshbhaisoradiya@gmail.com', 'sureshbhaisoradiya', 'Sureshbhai Soradiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '15-Auguest-1968', '8,Tejas Palace Near Sardar Chowk'),
(991, 6, 2001, 'Trikambhai Bhadiyadra', 'Male', 'candidate/photo_990_1522588161.jpeg', 'trikambhaibhadiyadra@gmail.com', 'trikambhaibhadiyadraq', 'Trikambhai Bhadiyadra is a candidate of Communist Party of India for Lok sabha election', 1, '2018-04-01', 2, '13-May-1964', 'Champa Masjid Road, Nanavat'),
(992, 6, 2002, 'Vivanbhai Asodariya', 'Male', 'candidate/photo_991_1522588260.jpg', 'vivanbhaiasodariya@gmail.com', 'vivanbhaiasodariya', 'Vivanbhai Asodariya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '22-May-1963', '9-Ved Residency,Near Apple Square'),
(993, 6, 2003, 'Sushantbhai Dayani', 'Male', 'candidate/photo_992_1522588407.jpg', 'sushantbhaidayani@gmail.com', 'sushantbhaidayani', 'Sushantbhai Dayani is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '13-July-1961', '8-Vastushastra Square,Near Dabholi Road'),
(994, 6, 2004, 'DarshanBhai Jasoliya', 'Male', 'candidate/photo_993_1522588514.jpeg', 'darshanBhaijasoliya@gmail.com', 'darshanBhaijasoliya', 'DarshanBhai Jasoliya is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '11-June-1968', '3,Sujal Hights'),
(995, 6, 2005, 'Vishnubhai Dobariya', 'Male', 'candidate/photo_994_1522588678.jpg', 'vishnubhaidobariya@gmail.com', 'vishnubhaidobariya', 'Vishnubhai Dobariya is a candidate of Communist Party for Lok Sabha election', 1, '2018-04-01', 2, '20-November-1963', '6,Jairam Residency'),
(996, 6, 2006, 'Maanbhai Bharodiya', 'Male', 'candidate/photo_995_1522588828.jpeg', 'maanbhaibharodiya@gmail.com', 'maanbhaibharodiya', 'Maanbhai Bharodiya is a candidate of Communist party of India for Lok Sabha election', 1, '2018-04-01', 2, '11-Auguest-1965', 'Taimur Vihar,L.H.Road'),
(997, 6, 2007, 'Arpitbhai Gadhiya', 'Male', 'candidate/photo_996_1522589261.jpg', 'arpitbhaigadhiya@gmail.com', 'arpitbhaigadhiya', 'Arpitbhai Gadhiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '12-July-1967', '21,Shivam Plaza,Near Golden Plaza'),
(998, 6, 2008, 'Vinodbhai Sutariya', 'Male', 'candidate/photo_997_1522589427.jpeg', 'vinodbhaisutariya@gmail.com', 'vinodbhaisutariya', 'Vinodbhai Sutariya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '20-Auguest-1960', '3,Vishvas Complex,Near Sharda Sankul'),
(999, 6, 2022, 'Tarunbhai Dhameliya', 'Male', 'candidate/photo_998_1522589803.jpeg', 'tarunbhaidhameliya@gmail.com', 'tarunbhaidhameliya', 'Tarunbhai Dhameliya is a candidate of Communist party of India for Lok sabha election', 1, '2018-04-01', 2, '22-June-1968', '2,Silver Complex,Near Karnimata chowk'),
(1000, 6, 2023, 'Sureshbhai Rohisaliya', 'Male', 'candidate/photo_999_1522590198.jpg', 'sureshbhairohisaliya@gmail.com', 'sureshbhairohisaliya', 'Sureshbhai Rohisaliya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '15-July-1964', '3,Savaliya Complex,Near Silver Chowk'),
(1001, 6, 2024, 'Pradipbhai Khokhani', 'Male', 'candidate/photo_1000_1522590512.jpg', 'pradipbhaikhokhani@gmail.com', 'pradipbhaikhokhani', 'Pradipbhai Khokhani is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '20-June-1960', '2,Krishna Arcade,Near Jamuna Park'),
(1002, 6, 2024, 'Mohitbhai Sharma', 'Male', 'candidate/photo_1001_1522590610.jpeg', 'mohitbhaisharma@gmail.com', 'mohitbhaisharma', 'Mohitbhai Sharma is a candidate of Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '17-December-1958', '89-Vinayak Arcade'),
(1003, 6, 2026, 'Sujalbhai Tagadiya', 'Male', 'candidate/photo_1002_1522590694.jpeg', 'sujalbhaitagadiya@gmail.com', 'sujalbhaitagadiya', 'Sujalbhai Tagadiya is a candidate of Communist party of India for lok sabha election', 1, '2018-04-01', 2, '11-November-1958', '5,Shivam Plaza'),
(1004, 6, 2027, 'Chandbhai Dhameliya', 'Male', 'candidate/photo_1003_1522590812.jpeg', 'chandbhaidhameliya@gmail.com', 'chandbhaidhameliya', 'Chandbhai Dhameliya is a candidate of Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '18-June-1964', '8,Mangukiya Arcade'),
(1005, 6, 2028, 'Sunilbhai Viradiya', 'Male', 'candidate/photo_1004_1522590944.jpeg', 'sunilbhaivradiya@gmail.com', 'sunilbhaivradiya', 'Sunilbhai Viradiya is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '10-December-1956', '1,Vinayak Arcade'),
(1006, 6, 2029, 'Samirabhai Sheta', 'Male', 'candidate/photo_1005_1522591096.jpeg', 'samirabhaisheta@gmail.com', 'samirabhaisheta', 'Samirabhai Sheta is a candidate of communist party of india for lok sabha election', 1, '2018-04-01', 2, '16-May-1963', '4,Samira Residency ,Near Grunth Circle'),
(1007, 6, 2030, 'Sumitbhai Desai', 'Male', 'candidate/photo_1006_1522591354.jpeg', 'sumitbhaidesai@gmail.com', 'sumitbhaidesai', 'Sumitbhai Desai is a candidate of Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '15-July-1962', '4,Lucky Complex'),
(1008, 6, 2044, 'Kavyabhai Kothiya', 'Male', 'candidate/photo_1007_1522594268.jpeg', 'kavyabhaikothiya@gmail.com', 'kavyabhaikothiya', 'Kavyabhai Kothiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '11-September-1961', '89-Shri Virat Complex,Near Holi Circle'),
(1009, 6, 2045, 'Bhargav Chauhan', 'Male', 'candidate/photo_1008_1522594369.jpeg', 'bhargavchauhan@gmail.com', 'bhargavchauhan', 'Bhargav Chauhan is a candidate of Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '20-Auguest-1961', '67-Shivam Residency,Near Sugam Circle'),
(1010, 6, 2046, 'Shubham Lathiya', 'Male', 'candidate/photo_1009_1522594471.jpeg', 'shubhamlathiya@gmail.com', 'shubhamlathiya', 'Shubham Lathiya is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '14-Auguest-1959', '403,Shubham Residency,Near Abrama Campus'),
(1011, 6, 2047, 'Darshan Rayani', 'Male', 'candidate/photo_1010_1522594560.jpeg', 'darsharayani@gmail.com', 'darsharayani', 'Darshan Rayani is a candidate of Communist party of India for Lok Sabha election', 1, '2018-04-01', 2, '19-September-1961', '78,Trupti Vihar,Near Sarita Sagar Circle'),
(1012, 6, 2048, 'Hetbhai Lathiya', 'Male', 'candidate/photo_1011_1522594663.jpeg', 'hetbhailathiya@gmail.com', 'hetbhailathiya', 'Hetbhai Lathiya is a candidate of Commiunist Party of India for lok Sabha election', 1, '2018-04-01', 2, '22-September-1962', '78,Majura Gate ,Near Sudama Chowk'),
(1013, 6, 2049, 'Bheem Bharodiya', 'Male', 'candidate/photo_1012_1522594961.jpeg', 'bheembharodiya@gmail.com', 'bheembharodiya', 'Bheem Bharodiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '11-May-1960', '8,Trishul hights,Near Somdev Chowk'),
(1014, 6, 2050, 'Suhasbhai Saroliya', 'Male', 'candidate/photo_1013_1522595112.jpg', 'suhasbhaisaroliya@gmail.com', 'suhasbhaisaroliya', 'Suhasbhai Saroliya is a candidate of Communist Party of India for Lok sabha election', 1, '2018-04-01', 2, '15-June-1961', '1st floor,Dmart complex,Near Diamond House'),
(1015, 6, 2051, 'Devbhai Luni', 'Male', 'candidate/photo_1014_1522595276.jpeg', 'devbhailuni@gmail.com', 'devbhailuni', 'Devbhai Luni is a candidate of Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '13-June-1961', '89-Dev Decor,Near Doctor House'),
(1016, 6, 2052, 'Taxbhai Vanpariya', 'Male', 'candidate/photo_1015_1522595569.jpg', 'taxbhaivanpariya@gmail.com', 'taxbhaivanpariya', 'Taxbhai Vanpariya is a candidate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '22-May-1958', '7,ICC Trade Center,Near Borsad Chowkdi'),
(1017, 6, 2061, 'Dikshitbhai Ghori', 'Male', 'candidate/photo_1016_1522596401.jpg', 'dikshitbhaighori@gmail.com', 'dikshitbhaighori', 'Dikshitbhai Ghori is  a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '18-November-1958', '1st floor City Palace Near Sardar Gunj'),
(1018, 6, 2062, 'Tarunbhai Kamli', 'Male', 'candidate/photo_1017_1522597625.jpeg', 'tarunbhaikamli@gmail.com', 'tarunbhaikamli', 'Tarunbhai Kamli is a candidate of Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '11-May-1959', '7,Tirth Residency,Near Batar Char Rasta'),
(1019, 6, 2063, 'Krunalbhai Dankhara', 'Male', 'candidate/photo_1018_1522597784.jpeg', 'krunalbhaidankhara@gmail.com', 'krunalbhaidankhara', 'Krunalbhai Dankhara is a candiate of Communist Party of India for lok Sabha election', 1, '2018-04-01', 2, '29-Auguest-1962', '8,Vinayak Chal,Near Sudama Chowk'),
(1020, 6, 2064, 'Kalpeshbhai Suvadiya', 'Male', 'candidate/photo_1019_1522597958.jpeg', 'kalpeshbhaisuvadiya@gmail.com', 'kalpeshbhaisuvadiya', 'Kalpeshbhai Suvadiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '10-February-1959', '8,Sulabh hights ,Near Vadvala Circle'),
(1021, 6, 2065, 'Brigeshbhai Dholiya', 'Male', 'candidate/photo_1020_1522598245.jpg', 'brigeshbhaidholiya@gmail.com', 'brigeshbhaidholiya', 'Brigeshbhai Dholiya is a candidate of Communist Party of India for Lok Sabha Election', 1, '2018-04-01', 2, '14-September-1962', '9,Sarthi Complex,Near kamrej Circle'),
(1022, 6, 2066, 'Sujitbhai Sharma', 'Male', 'candidate/photo_1021_1522598555.jpeg', 'sujitbhaisharma@gmail.com', 'sujitbhaisharma', 'Sujitbhai Sharma is a candidate of Communist Party of India for Lok sabha election', 1, '2018-04-01', 2, '19-September-1962', '7,Devki Arcade'),
(1023, 6, 2067, 'Umangbhai Vaghasiya', 'Male', 'candidate/photo_1022_1522598671.jpeg', 'umangbhaivaghasiya@gmail.com', 'umangbhaivaghasiya', 'Umangbhai Vaghasiya is a candidate of Communist party of India for lok sabha election', 1, '2018-04-01', 2, '12-October-1964', '8,9 Damini House,Above Damini Complex,Near Damini Circle'),
(1024, 6, 2068, 'Kaushikbhai Sutariya', 'Male', 'candidate/photo_1023_1522598879.jpeg', 'kaushikbhaisutariya@gmail.com', 'kaushikbhaisutariya', 'Kaushikbhai Sutariya is a  candidate of Communist Party of India For Lok Sabha election', 1, '2018-04-01', 2, '14-July-1963', '45,46 Sukanya Office,Near Sukanya Circle'),
(1025, 6, 2069, 'Mukeshbhai Bhadani', 'Male', 'candidate/photo_1024_1522602941.jpg', 'mukeshbhaibhadani@gmail.com', 'mukeshbhaibhadani', 'Mukeshbhai Bhadani is a candidate of Communist Party of India for lok sabha election', 1, '2018-04-01', 2, '14-July-1960', '8,Tripura hights,Near Tripura Circle'),
(1026, 6, 2079, 'Miteshbhai Vadaliya', 'Male', 'candidate/photo_1025_1522603125.jpeg', 'miteshbhaivadaliya@gmail.com', 'miteshbhaivadaliya', 'Miteshbhai Vadaliya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '14-May-1960', '5,Sangam Office, Sruti Hights'),
(1027, 6, 2080, 'Mohitbhai Sabhadiya', 'Male', 'candidate/photo_1026_1522603275.jpg', 'mohitbhaisabhadiya@gmail.com', 'mohitbhaisabhadiya', 'Mohitbhai Sabhadiya is a candidate of Communist Party of India For Lok Sabha election', 1, '2018-04-01', 2, '10-March-1960', '6,Shivalik House,Radhe Hights'),
(1028, 6, 2081, 'Tenishbhai Moradiya', 'Male', 'candidate/photo_1027_1522603474.jpg', 'tenishbhaimoradiya@gmail.com', 'tenishbhaimoradiya', 'Tenishbhai Moradiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '14-Auguest-1963', '7,Sai heights ,Near Shirman Complex'),
(1029, 6, 2082, 'Tirthbhai Padsala', 'Male', 'candidate/photo_1028_1522603620.jpg', 'tirthbhaipadsala@gmail.com', 'tirthbhaipadsala', 'Tirthbhai Padsala is a candidate of Communist party of India for Lok sabha election', 1, '2018-04-01', 2, '15-June-1962', '20,Sumul Office,Near Opera House'),
(1030, 6, 2083, 'Satishbhai Findoliya', 'Male', 'candidate/photo_1029_1522603826.jpg', 'satishbhaifindoliya@gmail.com', 'satishbhaifindoliya', 'Satishbhai Findoliya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '10-March-1955', '2-Krushi Bhavan,Near P.T.C. Hostel'),
(1031, 6, 2084, 'Satishbhai Sagpara', 'Male', 'candidate/photo_1030_1522603922.jpg', 'satishbhaisagpara@gmail.com', 'satishbhaisagpara', 'Satishbhai Sagpara is a candidate of Communist party of India for lok sabha election', 1, '2018-04-01', 2, '8-November-1954', '2,VIP Road'),
(1032, 6, 2085, 'Prakashbhai Dankhara', 'Male', 'candidate/photo_1031_1522604059.jpg', 'prakashbhaidankhara@gmail.com', 'prakashbhaidankhara', 'Prakashbhai Dankhara is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '18-July-1962', '4,Inox Appartment,Near Abmika Circle'),
(1033, 6, 2086, 'Rahulbhai Hirpara', 'Male', 'candidate/photo_1032_1522604179.jpg', 'rahulbhaihirpara@gmail.com', 'rahulbhaihirpara', 'Rahulbhai Hirpara is a candidate of Communist party of India for Lok Sabha election', 1, '2018-04-01', 2, '9-July-1963', '1,Opera house,Near Jamuna Circle'),
(1034, 6, 2087, 'Diptiben Vaghela', 'Female', 'candidate/photo_1033_1522604309.jpg', 'diptibenvaghela@gmail.com', 'diptibenvaghela', 'Diptiben Vaghela is a candidate of Communist Party of India for Lok sabha election', 1, '2018-04-01', 2, '7-February-1958', '23,24,Mohan Hights,Near Sadgun Complex'),
(1035, 6, 2089, 'Jahanviben Pokiya', 'Female', 'candidate/photo_1034_1522604500.jpg', 'jahanvibenpokiya@gmail.com', 'jahanvibenpokiya', 'Jahanviben Pokiya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '6-Auguest-1956', '2,Sarita hights ,Near Sadgun Residency'),
(1036, 6, 2090, 'Kuldeepbhai Patoliya', 'Male', 'candidate/photo_1035_1522604605.jpg', 'kuldeepbhaipatoliya@gmail.com', 'kuldeepbhaipatoliya', 'Kuldeepbhai Patoliya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '12-September-1964', '2,Yamini Basker,Near Siroya Complex'),
(1037, 6, 2091, 'Vinaybhai Sutariya', 'Male', 'candidate/photo_1036_1522604831.png', 'vinaybhaisutariya@gmail.com', 'vinaybhaisutariya', 'Vinaybhai Sutariya is a candidate of Communist party of india for lok sabha election', 1, '2018-04-01', 2, '11-June-1963', '1,Shivam Complex,Edit Circle'),
(1038, 6, 2092, 'Prathambhai Dungarani', 'Male', 'candidate/photo_1037_1522605099.jpg', 'prathambhaidungarani@gmail.com', 'prathambhaidungarani', 'Prathambhai Dungarani is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '24-Auguest-1958', '8,Om office,Om Complex,Om Circle'),
(1039, 6, 2093, 'Trushalbhai Monpara', 'Male', 'candidate/photo_1038_1522605438.jpg', 'trushalbhaimonpara@gmail.com', 'trushalbhaimonpara', 'Trushalbhai Monpara is a candidate of Communist Party of India For lok sabha election', 1, '2018-04-01', 2, '10-May-1957', '34,Jivandhara Complex,Near Hajira Circle'),
(1040, 6, 2094, 'Vanshilbhai Suvagiya', 'Male', 'candidate/photo_1039_1522605669.JPG', 'vanshilbhaisuvagiya@gmail.com', 'vanshilbhaisuvagiya', 'Vanshilbhai Suvagiya is a candidate of Communist party of India for Lok Sabha election', 1, '2018-04-01', 2, '5-May-1957', '3,Gopipura hights,Near Gopi Banglow'),
(1041, 6, 2095, 'Hireshbhai Dankhara', 'Male', 'candidate/photo_1040_1522605821.jpg', 'hireshbhaidankhara@gmail.com', 'hireshbhaidankhara', 'Hireshbhai Dankhara is a candidate of Communist Party of India for Lok sabha election', 1, '2018-04-01', 2, '15-July-1964', '2,Shiv Complex,Near OMG Market'),
(1042, 6, 2096, 'Punitbhai Vasoya', 'Male', 'candidate/photo_1041_1522606002.jpg', 'punitbhaivasoya@gmail.com', 'punitbhaivasoya', 'Punitbhai Vasoya is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '9-February-1954', '6,Tainoor Complex,Near Nasib Hights'),
(1043, 6, 2097, 'Tejasbhai Vaghela', 'Male', 'candidate/photo_1042_1522606115.jpg', 'tejasbhaivaghela@gmail.com', 'tejasbhaivaghela', 'Tejasbhai Vaghela is a candidate of Communist Party of India for Lok Sabha election', 1, '2018-04-01', 2, '22-Auguest-1963', '4,Arman Residency,Near Udhna Circle'),
(1044, 3, 1783, 'Manishbhai Duderejiya', 'Male', 'candidate/photo_1043_1522660401.jpg', 'manishbhaiduderejiya@gmail.com', 'manishbhaiduderejiya', 'Manishbhai Duderejiya is a candidate of Aam Aadmi Party for Lok Sabha election', 0, '2018-04-02', 2, '26-October-1959', '89-Amija Complex,Near Sarthi Appartment');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `c_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_election_category`
--

CREATE TABLE `tbl_election_category` (
  `category_id` int(5) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_election_category`
--

INSERT INTO `tbl_election_category` (`category_id`, `category`, `description`) VALUES
(2, 'lok sabha', 'The Lok Sabha (House of the People) is the Lower house of India\'s bicameral Parliament, with the Upper house being the Rajya Sabha. Members of the Lok Sabha are elected by adult universal suffrage and a first-past-the-post system to represent their respective constituencies, and they hold their seats for five years or until the body is dissolved by the President on the advice of the council of ministers. The house meets in the Lok Sabha Chambers of the Sansad Bhavan in New Delhi.'),
(3, 'Taluka Election', 'State Election Commission, Gujarat was constituted in September 1993 under Article 243K of the Constitution of India. State Election Commission has been entrusted with the function of conducting free, fair and impartial elections to the local bodies in the state.\r\n\r\nPart-IX and Part-IXA were incorporated through the amendment no.73 and no.74 in the constitution of India covering provisions regarding the Panchayats and Municipalities respectively. These parts cover constitutions of Panchayats and Municipality including their elections by the State Election Commission.. \r\n\r\nState election commission carries out activities related to preparation of wards / election division as per local bodies rules, decision of boundaries and distribution of seats along with preparation of voters list for the local bodies organizations like Gram Panchayat, Taluka and District Panchayat / Municipality and Municipal Corporation of the state and conducting general / mid-term / bye-elections and supervising them. For all these functions, the authority is vested in the State Election Commission under Article 243 K under which it has been empowered with Superintendence, Direction and Control of elections of local bodies.'),
(4, 'panchayat election', 'jya Sabha. Members of the Lok Sabha are elected by adult universal suffrage and a first-past-the-post system to represent their respective constituencies, and they hold their seats for five years or until the body is dissolved by the Presiden');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_subscriber`
--

CREATE TABLE `tbl_email_subscriber` (
  `es_id` int(11) NOT NULL,
  `email_id` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enhancement`
--

CREATE TABLE `tbl_enhancement` (
  `enhancement_id` int(11) NOT NULL,
  `party_id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enhancement`
--

INSERT INTO `tbl_enhancement` (`enhancement_id`, `party_id`, `description`) VALUES
(2, 1, '<p>Addressing party MPs, MLAs and other public representatives through an &quot;<strong>audio bridge</strong>&quot; technology, he also launched on a massive programme that will take its leaders to villages under &quot;<strong>Gram Swaraj Abhiyan</strong>&quot; programme.&nbsp;</p>\r\n'),
(10, 1, '<p>In an effort to enhance the BJP&#39;s connect with people, Prime Minister <em><strong>Narendra Modi</strong></em> on Wednesday called upon the party&#39;s elected representatives to go to villages to ensure that the benefits of the government&#39;s welfare schemes aimed at the poor and those living in rural areas reach them.&nbsp;\r\n&nbsp;</p>\r\n'),
(12, 2, '<p>While the Union Budget of 2018-2019 was generally full of lofty claims with no details, perhaps the biggest of them all was that of the Universal Health Coverage&nbsp;dubbed as &#39;Modicare&#39;. The Scheme totued as the &quot;World&#39;s Laregest govrnment-Funded healthcare programme&quot; claims to provide free health insurance of&nbsp;Rs 5 lakh&nbsp;per family to nearly 40% of the population.</p>\r\n'),
(13, 3, '<p>The Aam Aadmi Party (AAP) today demanded that the security of EVMs be enhanced, alleging that the standard procedure is neglected while guarding the strong rooms where the polling machines are kept here.&nbsp;</p>\r\n'),
(14, 3, '<p>Urging the Election Commission (EC) to beef-up the security of EVMs, Senior AAP leader and Advocate H S Phoolka said, &quot;the surveillance of EVMs here should be increased as the arrangements are inadequate&quot;.&nbsp;</p>\r\n'),
(16, 5, '<p>I&#39;m hopeful that better days are going to come for the State. Though there would be impediments on the way, I&#39;m sure people will reap benefits of growth and development. in near future. The dwindling opposition from the Comrades will find lesser and lesser people support - one need not have to bother about what they say or do, in stead focus on the important mandate people of the State have given.</p>\r\n'),
(17, 8, '<p>The party had promised steps for improving old wadas in the city while also stressing on preservation of bio-diversity park. However this time around, its manifesto released on Thursday has stressed that the party will work on the goals set by the UN, including ending poverty in all its forms everywhere, ending hunger, ensuring healthy lives while promoting well-being and education for all, gender equality, building resilient infrastructure, promoting inclusive and sustainable industrialization while fostering innovation.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_idproof`
--

CREATE TABLE `tbl_idproof` (
  `proof_id` int(11) NOT NULL,
  `voter_id` int(5) NOT NULL,
  `type` varchar(100) NOT NULL,
  `path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_idproof`
--

INSERT INTO `tbl_idproof` (`proof_id`, `voter_id`, `type`, `path`) VALUES
(3, 2, 'Election/Voting Card', '7bb6d4dfafb4ab09e3cecf687ff12c34291d40ea54b8764758c6b08647408334ca1e4721ed206cfe7095af3c2a1c51e39cfdda8f599e99e75739de78ff7f61fcDKT3pOa5GsGrb4+LTv5z5SCG/lQpXf0g9nqXU2MCTOD8k+0uCbHIC+4q+t0LSh3f'),
(4, 2, 'Passport', 'abd10470cf9662eb4d4b20d414c14673108c0685f772352814701214bb0d7a7c1eda757b7f56e014479dc97aacb6966fae0d8c848b973c998b8a7460b7cc6be7XIgGIY1w2jZWcxspi2E86KB1aasiE97J18rmOrfOFAERKYQDlNijdfiE9gSq9fU8'),
(5, 13, 'Adhar Card', 'b571e2e432bfa48e8342d225a6e37695793246c7328e9e09299146865105e18efe7fefe7b6deb92749b2fb132311b1ab60922594363f2c95ca9cae5dab2b7214k7Jseb5Vkk63fjePC+MAqyWUPjGVjgaoXzrpXJarQSYtB83vbwlQog4XWwSnHzaq'),
(6, 13, 'Election/Voting Card', 'beaadd8d71ae91244037f702cef266277027ab06e6c9b5ac83bfc8e6782919a495ed394bd2562116b84a9d5bc5a2eeef5222acc3d66bb4f683349dc099db1104A0d/kcC03tn8MJocqjDeS0fAdv3sksvPE6+Xaai5KhcEehO+00eUq/VkP6K5suRn'),
(7, 13, 'Adhar Card', 'fa108f527c8121d5e413f5bfe3586dd5c2ded341b975137dfe19de3c17b53c2eb64da5770a2deac9284e163dab085f946ab3641e6ca6ebc19897ac3f9ce13d47tzPVZwLN2bUUkYcrTtB10KFEhIgVOrfSmRIoi2lTGHbP7Hle6N4LvEqiUmCAD7C6'),
(8, 13, 'Election/Voting Card', '9792e60fe6d8b968dd50ca6f2095199a7f34a2ab0a2343d979dbca5c30560b58c90b6ec9b4d77a46ff9989d81d5e616f41a36866a9b8d46b67de7b00a215174ebwQRpl/7IJE4gSySe8z+0CgArwFGe/uXldA4FzbKwgoLwZsC00sYoDo3t8bb/ZH2'),
(9, 13, 'Passport', '9fda5c3c1b76f77897cf21933516fa9493c6b4651c9933a83486082f7f378ce55a7804c080ff8a972f643c251e1b8a92d76502dd83f9d8c0536172a46333826bou+un1YHkpY0dBTThMVxoeOW/TP8NN3BNbzk0jUNEaTNK48Q3d9z9aPNOjUZbrvn'),
(10, 13, 'Pan Card', '40a3d6bbc70e46419ae5a7154d3e89e1a1618c4decb0842bbdac0af9d794276b2913feb36c34aac1426dc6325c55bd62f6b69dc52b84d85c19230c352e604f8aPUq2ZVIqbJmHscLoefqKeLu2gDDqUx1HOlSAGOniKV4DYX7bsROV7RvyFtY4vauI'),
(11, 13, 'Pan Card', '54ba235ed292887cd1d6a5449d1c7fae5f1e8c3aa6e7e41c9eba8cf2909c6c4ba8b6b6964ec71db20e9939085b4dd6b31a7d270124cd7508609cd225c7c34eb1VLDw/WgHOEZ2uHtNWnIT15qNtg2SZ5rq1MrCEHSfbCkbmqBrnok5gqS8eB0BU7GG'),
(12, 15, 'Election/Voting Card', '275754dc7c3888e6734c5d1a8b8e5cb352cfb372e7d486987a99fc4c62b1c59493eff8bd5040f1e8d4fba98eb8837023153b5135fcd66c7f7ddcf056f2b3d3a4XhJ09J4nLT+3Oxs6Svcii9tI74lwzustkZSi3+DVuay951ZibQKlb3/DHNPFRfpO'),
(13, 15, 'Passport', '550149c882acd6d8a2edf100244b3a397f2fc63ffcea3028665e59f743431ba4b1f4fa88a7a659e13fbe93248d49c975d2c3f19daf1d19d9ff0224ef67056c15hhKG/2jBW6p3BL+nrBfMLpfBzN3qjhzipAKkynnd+bzkzAXTfQUhbv09YIMetUVq'),
(14, 15, 'Pan Card', 'b94136ff6bc3795d056acfc51e6e06925882c475051b659cfc4372d1a66bd2a67cba989525a54d0f0675b912ed139b482712ba00376918d9a1fa341200730cc0T5LHBlbWzEqB9/jSqUA918tlrNUWLxQVHLGMoZkABfXfIQBL1Vqf0PdP5H8qsE9B'),
(16, 15, 'Election/Voting Card', '89fa9a33ed9e1c56d8cbebe0dd66c595ffff52bc431202c6e4d4a7cedeba4cfb116ee5742852bad8790fc717ae6c234e8b1dd8cc6233333d39af7d55f7fc6b62eiWQ/xnxO4cVQ35bP7EC10MhQYZQx+sUhrxDBuaN1DHbFF+NY1u3ToDD6B7RmtN0'),
(17, 15, 'Election/Voting Card', '099b574bcbafc41876c91dea43d713715af0f5fb1f4683dca81e224f9627365c4a588de8c6d97c9fc5ed7ba03af2ca1396df67e4a4f98c678165900f0a17a48dtY8VEby5uNug5xt3708JmKxC6EbG6+emDqZmJGtJUh02bLCgASoVNNg+l9h6Ygb8'),
(18, 14, 'Adhar Card', '1dde83f95d392759b8179e47834ee4839abfbb831eba20f6701d37f74199e79c0b14fb783a7337992144b6a84a8a4c7a1c582a79b82b500b9a053db3c9ad4fa0icIi4WiGWNWgVhhHPytD4HE8lCy+3uVS6nxtffAas5dGUuHcv41m3YgUAIssdzq+'),
(19, 14, 'Adhar Card', '3d6c5e166041c27bfc6d38ce2e8399549ae20adf0dea92845d69b62773d6509900e91f769765d7f60608c21597692117ac7d2b2e77e68603c8cca01ff0438661admsBmXohdb+MLWjLojN/U4ool+MKC17QB7QVYkx7RpUhQmu//xHPCnwdRnmH7O1'),
(20, 14, 'Election/Voting Card', '29bf792339d55dd2016495f0a24918e75b635fffc535a0669c1339366c708213b88362eea86c651e4060fbd35cdecc5ce7e91d89ded394b9e97d98cc9a8f14f6xc54dXLGau0ifpZ6nA4oSGB4yoiPB3JZfAsu9DkljR6xVPnYVSbMXxx4BQQRUuoH'),
(21, 14, 'Election/Voting Card', '0f5b80e50228e3d636b81e049e588ffbea148aa77b9b50a1750858e89f17a3728ff1e9582e53ac94624528686c68d1ca9e4067e204bff13274647afaca0dcb83FGPfePyGfcW6XrVlQpcoS0QCq1ZCZaNsXsp2mU5L3mhwFg3lAopCDVmJ2netUKrW'),
(22, 14, 'Passport', '2d519fa7a3ffecb16a1792b6a475bb6f4b52afccf69dd4db8f3bf6be8d4b8a6098aae0a254429fde4e6269cd69ff5585ac8809bacee3afd478f7e67491c6fe68kL+qXTPqI13uFpGQYNEgEsVZXLDtF+ev2bRSAQR8QkRQVTcjWcs7Sc8o2yt5ht9J'),
(23, 14, 'Pan Card', '2c1b7c042f73c186beeb5eb348a00fa6b5cea21fc8ab8f2a1d33a8c686452d2ac4b6714efc51902d68f9e39d879a0b18f6f3ce90124d966a5d95a5ea529ab6d0mHQk1n4rBHeRuixSsnNTQGS+hda7WWnF+T/wN33Cnx15QBjhIN45oeEb1q7q+SVS'),
(24, 14, 'Pan Card', '4d80f94ce96b3f2ac6ebbf10f6b81879ca7543cf14c70edd636c178650dec8fb965fba6ef36e65188730f2c4a3e06b804e9fbc1f76c30bbc016cb5c54fe7ba1dLmvlHDtHgFQW6bxIK6Hj5DdL1BygZX5ngN'),
(25, 5, 'Adhar Card', 'afa914b2a529c1b1658783fbd2ff23c3a725177f7638b8c452bc923d7fa0e86e49343b26434d139a7f07edf07bfe72a2bba4479d740eaf729a6000a96290d61aJYbfw4CL0jgSS0YeEh7mVrxaX2wqMFaIPKf9PSl9r6LP7UaKC9oXjVux19t6/oDR'),
(26, 5, 'Adhar Card', '1bbb5e4d15cecca5af0d93e12ca9bfa856c0e6aa018d804e6077fb5456772e5b9160baf0556b6146d56155fded9b013e88cc2e3848e80c91aa00b1170383f1e8M+VwH29NPeToqnDOARMPo11fu7dyxihIGeLw8IHTSZVNzgLeYv6bEt0KDTarLMfi'),
(27, 5, 'Election/Voting Card', 'cb9b74cb105bca05e319fb131e27fe8ea7e2330ffea0813b99c2fde555d51aeb6b8da9a8749e883000ed87e8672215f70f30a82ef7e53e596fd5185bafdf77f3g6CFcsY/QT6k/rW5rDYNwD4SmVWI+B1TkQGeK8LkGICDFkh9/R5Fe5uykBpPoeTJ'),
(28, 5, 'Election/Voting Card', 'b9edfab77319b8cd732392767ab61d79d163384a05e8752c42473ccb9310084d826d179e5398cbfad33020c4ed7c20f41ad6af18512c7a804e5b4612ae54303dvz2rJIbePqj3fBzR4isDL9nKanrhJfwy5TX+RNBVZwW5xA/aQkpBfaGJZlg1tto/'),
(29, 5, 'Passport', '8f16e7395d4b428bd659579669a14b326fbd3d6046157ec455547d296fb9ea42e2f28d46d1dacfc1994cbdc2f103628dbd7132e5fe1214e2ce7c46d9bc82a5d5UhB6d71LwufWVFT4qOn4uNgZlHFmObN7RW6/3NLRFZAZvDbzfHA8ewx2C/vysm7z'),
(30, 5, 'Pan Card', '4e0fe87ee763160a45895b52b30f7e96212e18fb9882944e6c89a076e5cf859866c1a8e81fbee7328cd8f3dfa7fa212877b40f432068bf460fcc56bd548edfcfWJlZAcs5RHa75+H5HYqr598LTz5+kpukbL+XAxsCpARaDbW9aLv/f0pRDXVu4Q7Q'),
(31, 5, 'Pan Card', '6ed8c07657412039ab6349fa83c6340993b0a68b093bf68bc24a6868edc1816380296ea86bb4d533238e9f9598c78f9c28f67606ace1f0ecd00b9db7f3cf452bUPkjMtfbBWNYujRDioJ6rorLTI8wDRtfgDLEEc0F+EYgPjVGCKyean/LJk8yMH2g'),
(32, 17, 'Election/Voting Card', '51a50bfdf61a47e7027ab7814833cc3a1ceb035381764001bab6deb6691890c59484679fb08b1235cdf7f671a5d8e5148d90cf8ae0f7cc05d26e1d1e7dd348deyyaYgb/ky0ZGx6SyQpAUH/zSuTV+BC/Dc2oc7yu6pVQx2igzFtBY0445qvQKOR5G'),
(33, 17, 'Election/Voting Card', 'db43f1c8a846003f38f32aeb00bd4d962cecd3c3796032aaab197b7240426054474191e661958aab94ca5544faba77e631ccd0011d2bbec7bbf1470935773898KO6lcuuEolhEwl6UrMWaaAf+baVPOOmdQyNL4oclEHjqbPV3Ekf9ANQ6XUe6rnGT'),
(34, 17, 'Passport', 'b3278a47faa8b8e1d198eec1f8ca61ea10d1b0c0348ea95484453b93119ae408e01a82b8ba61d00c9da3402d3f88c016c39a17c3832d998b63e31b3a90cda255VssP1GApoEO917/M+7Y3sA2JrCvnGd9BzOJUwGzgYgpIcoYGiPnNNIPs1Lg+P2Ez'),
(35, 19, 'Adhar Card', '8cb27566475bb7828e597b75384962e0775cd8c76a03558dc3677bd0ec17f76b39cae78aba0db0cd12496f208c5a9063fec4f52915c155aa45be4ae36943dd48VS0dbZly++PvB2VChQS+6PVnkcTd6XhM5lnelpwY28bVJBKDUobkgTJf3Ow4WTK7'),
(36, 19, 'Adhar Card', '6d3403183b8470431d883104cb336937189277adebb0aa537b2db0a9f904ff9514f9d9fe25323b6266c8caa764ee1f5152670aeb787867da47402e7595ee9101YqIVikiT+D9Bg0Bx630IEY5ioT94u2Svdvb54ckMUqCB8AuMW0FktuC2IQ1cXe8K'),
(37, 19, 'Election/Voting Card', '50ebcab9ed23b9c3f03b1ad49c2dc4c32106ece53f45250b8f78531fbf16d5a19339e3d9c932fbefda08b60f4b28988cac3b65f33d5c46e4fe8e2f7682c79f56T1giUDxmriQ3ZlW3nI87c2dpnBlFps+PqPdTzQV2tqLQzNnaFvLwCMnN100NowwR'),
(38, 19, 'Election/Voting Card', '6575d99e3d9da17a5ec4ed1e4a19f17468a48168489c5457fe28e78aed37dcd4b9acbf372c581ffd9be0ffc4c980dcf69239ef7050bdd0daf354f14634c5bfbc7RjP6eDnODpnKLAjgagJ4c8ElCyCjm/56dl0jHiKPfVCtkBYMHeWu9rO/AlqCp+G'),
(39, 19, 'Passport', 'ce6fc8dd7acd7bf0d7bf2f353a8a8e09110446c3dff2646be8fce1797bc828601d3b248f0077ec1a50e5fefe655cc85734f5aebd86d8c0b33e8ebb76b8ec21ee2s8yUO8hb2mXRwMLelWgivetXdh8yHjm3gcKNyK619CI5l2DCcdVXMVpQCzPJ8Tz'),
(40, 18, 'Adhar Card', 'f7fb6af52945cffa28bc7c092b0c04e22cbcc3ca37318712544f6071717fc61bfb6be6a9a192ecf61ab3bfb14c628ee91d121edcbf270b2bdd4dbfcbe001a6dbE3f5PdrhHHe42ae/mqj1fjGJNMz/KCytIzFieRJ6OnP+Jws+43FGZ73m0nj0Srlm'),
(41, 18, 'Adhar Card', 'd93b76ff880d1b2df08d381de4a5c4bcc9d29e8e4ece1cf3ea3282825964d9935578b6aad4ea2d2c07b90cddde65a1a1d3e35ceb14b932f2d2bebbdb4c49648cKz0Hz7VGtgU13iXq4eEhj9UvLE81+4DQdDCvhgArDCIQ25+om1W9W2zbFbA3ByFP'),
(42, 18, 'Driving Licence', 'd18057c447861d321671222d280d6dbe36d309dc2a61d4badced8dad6d72c1393549a4a07c45ade98b30d03f8693eb52042c4edcb9a06d31b7728c1611490532zShe8Gr+TitHK6T5KFSQAvPyamGIySR3zmR3nUfkPQrWd7ycXP9krvogX2CkOfdE'),
(43, 18, 'Driving Licence', 'f5a394803b7076b7182698c35c40829909a8f351c20f93d0ca3348fc70d3306ba4df227a7ffc7721d0c8b96a61faeb903b86b27dc3374107f0a4b5741fcbc914WM3WKG1G6DyPXdqgKgbm8VpgG54FedMaVc8/1LRy0/c2XJWj34N4L1B+k2+kqqzp'),
(44, 18, 'Election/Voting Card', 'e2c76d2746a97c6970be1de21bc51e5229d7ba91e605200a8a8f7a81dc01de7d6956c469e071662c9c189a77f9d693e877a9bb29c99619ea8ed3bb6978baa3c709qE0970K1fIZ+vHNiy5fDlBVEHQalo4PV33QJZRtaLoCdv07tF8Y6kJgq/VWBQL'),
(45, 18, 'Election/Voting Card', 'bed4efb048f924ed18e9ddd629d6101a2dfb80ddadba3d7183b86e6d16a0cf4e00b8806d1e18670c5b73b345aecfdb6dd02f7c3d487ec1c106826fe80e86a5c1zIsnGtzjCNHivzX3Yr+lb6Ua8tIG6UAuNbtNlQhFfYepkpaf39j+k0cXAtjwamHZ'),
(46, 18, 'Passport', '1218d64a013b621c57031951e41e08fbbc83ec7f54495c830b4cdc726801bdb50ac550304e040bdcd4000ca0d7277b8efa2690a05d0524d469b666a38692db51hBpGxYGm6CpnG0tAuWRf6msUVtBJT+PWHTx7/5F8JBFVkEKVl+ooTc99X7+dJQVT'),
(47, 20, 'Adhar Card', '6677d805cfd71fdd4a6ceefe256bf6acd25edb16baf7a22eb3d2e6e4e705ca619f4bcec40ebae1212db5c32d9d9849122384c4e601b3c1e2e77f94ce071c892fozlCMNheP3LmZ6ABOKHN5a8gJnWa3ypALdbb/ymfv+2aqNwNSkZb68Dti0NoYmnW'),
(48, 20, 'Election/Voting Card', 'e3613eadd457b56cb22cd2ab7dbea09f74a5a14264348e6432e87e58865dad2da0ebb626d6f6887f02d942bde034b098905ede0936fed5dc2da8f146bdd08eb1RG8gtBHv4ze6j3D6nEGWe1rcH+kEYMc/KNycxN/u2Vg5GxouE/SrzoGd/oegUxSy'),
(49, 20, 'Election/Voting Card', '50b5507cb3fb18aaf27923c64e0373490d7b41a8132339d6c0cd255e4817ee6e4af11cbd3a98fce61aac4a4c6787f5dc88afcffe02d77c99424ac9708b2250932y/HiNXamg17Tz0T/uGq5SFRmFhpOXWyzen/ALJf2jsu8r70v4EMq+7rVdAx5z46'),
(50, 20, 'Passport', 'b47d9e0dba634f271b3dfcea80004056f1b43cb8cabf8787f9b643c02ba24a78a1580752cb38982db792fe663fe9fad6705bdc9115d466825bbacc34b8d9dfe0xjUnzdVoVEvl8r4WGFwxtVDuwxm15A/Acur0Fbo85z1YwZdqs5VKkUWXslc8vhTe'),
(51, 20, 'Pan Card', '1f31a89e23e4d4907a5a837e4278aeb724347a161d473fb574d9a06dd41669389de76386a82d359cc14c26b00938b6563fa2f2ae709947dc954839a2f2f83fc1Oznn7ajtHHi2YBj9Z0nFBIj85QlacSdlL6PbV4yKapJZrzYRUFfYEoup/TWMKt+M'),
(52, 20, 'Pan Card', 'eedace946f120a3ca6660b4b7b9bcc6d432c1985cdf9466304d74f6561d1beaebf3224b9252593a7da8ad43aa059ae81975997e6ff7dad836222c395e1fed0baruGDlvpr2825Wk5aYx1X6jSybq3q2uMjsK9062fokNu1t2EotKzGpDBkFWoNi7M1'),
(53, 21, 'Election/Voting Card', '6903ece38fabb8c4bd098fe95e6b5856ce5729310dcd819e63e8af0569d753e883b2db2808a6c05092ceb0e52c8e2bbcc79796a4bed974768c8279ae59751dbbDD157SlNTwFtVbFHDUkLuBPUipreCcRP1v/i39+SfaFLOwClT1D8Ttb60eMZHEzU'),
(54, 21, 'Election/Voting Card', '2e567da800ab2f0fdad269a9ebbe670cee5b440525f35e9c58cee99bf30bb375dbb8633f8d6b2901174327038578e1f75164a9943f4a20c1747e21f5796978dbEXOkNC1R0woMLNKJPrKB8OP45GlikMOcNfoFG+FYWsOUtXboRDIi1PHc7QhsdBBO'),
(55, 21, 'Adhar Card', 'd87d2f204759d530d524edd9eab3d7f4ef6e64b0d3514599478de21c03d92082bc84f48ae3cf3d8ff2e7265af52a49e8f280878f05a68fefe4510b1852d71832+2Vg0HKN14abNefBp+rkr8r4rcx8LLIy+4ePl01uyF+IpeK9V9QXlhsm/UmYcTxT'),
(56, 21, 'Adhar Card', '4dc36aaffa1ef2fb2865ad3694bcf28aa61ad7c5936472286eb9ff0bccb3a562c6d111eb57a8d5919affd3c53c92d3215fd166620ae6ddc91df3c819acafe6c3BsD26Sz3LNaF5Zx308lZLySBLgZQzQihRVncKrtTpRLeAClfl0xX2Das1Mg/Bh6y'),
(57, 21, 'Passport', '4833cea0086104fd9c562d72607400aac57f229ba3a3db5bbbd3f333d7a430dac9c12ecdecf74aa72eeeed2830612b0872a982ac8f62616c2ff4e87348fdedb03X3Sg2oLY35V3F34kHIpWrcMs6lw9fcJO6CCuxfRpvqYw111zsziomObpzBM4drB'),
(58, 21, 'Pan Card', '86c71383f87f43dadc99e26c2b2ad948150d05ce6c110e9bf42ec3d426a09f7d73b166190342e5fa20770b23d86b15e7cdac40ee8b9a9476b9bb68b26c3332fdhbNy+wl9VADi6U4NPvHcwJ9RcDZcbMHQ9HICEMgWvSnCPqswD/9LxwxDEN26P7cZ'),
(59, 21, 'Pan Card', '7a2f02b27f1c1f016751ba8e8e92664844c8983d857888ea1cd0b4889dc229882647ff86225b084fd90884307584bbe658175ce4001217f1a6418acad19f4edbhv9FR2XTzrV7oSS+RFbBOhlOrMJqTt79wzXqCZ7nnaSfAV3lCYuGdLWOivQgD9f8'),
(60, 22, 'Adhar Card', '31ae8297ad0b29d20dd9c732db1a473272699e1441f4df04bf1d5787875025d5d99af7d186a1ede7402c80c207bc87c4d56d6ab041f7a958452b0bda68ac1d07ZEEyXefof9Ce90dlmnJ7EWARMx+O6qeZO//0XtRUZavrJAPrhOg1joEtufOG6x8K'),
(61, 22, 'Adhar Card', '9ca11fc8ce79a4643065bad01317f452ced4aede7469411b5c918c6495dcccb0dcfdc870a4fe93711f3af03edae26db7874b164725c4f98312eb6894f9df7ea6GtraPeu8sjAQZ4VSABJ2Vf5txKD+aKBRZnhbj0QyIaGJCHzgBdE5M8FUGoFp0XkH'),
(62, 22, 'Election/Voting Card', 'bfa4614f1d62e75650c32c4e38daf36f213817a1d0cfc6af5e126d6a5d44272bdf38121c8035c4aa453352ef591b2293894461d94e666b07c4dd6bfa3a70b58abgVkJslbBkXXGkEp7z2p3jcvuRhn9p+HO+HDxMnrkdpA8fO0BzLI61ei7Tr/718s'),
(63, 22, 'Election/Voting Card', '367a5921c594fc8af0c5fb9330c1fa1c09a1078750d051b6a0d8b89ceb813cb345de60e53cecdde9cca9888ce937a74e283064934424e177923832fd6b270d9eR/cJNjDukR9vU4ubaK7ShhWATnWkvF7zvqdx+fEfXXFHw8ubsK7FkJNBmJm3kd0/'),
(64, 22, 'Passport', 'b2b0240ae97718ba196e6a2fab7369c51d36a38e5dae76ffeeaf527263edb95609632856d20fd5a5cc43970a15ad69a816b470ec673ee79a44e3bc2bc04aa8c4SZMDUZ9eq8gAMbgcz0t9YWxNh1Ozcj+ZIIKP8DAZhootAuIZucOvEqRMr+xT8e8X'),
(65, 23, 'Election/Voting Card', 'c53c68f0b7b5c030f6658991d749c11a946f0d7962ce9c094947bb3824717b60fcd9c96fbe21699b4bb3dd61b41fe7d7a1af9bfd6b810a7ced2dcc57251e400a7Bi6wkaVffL0nVwz80cvkKmt05aJ32qGIKWq4EZvrXwTQgCKShMT9LeSDx7slL42'),
(66, 23, 'Election/Voting Card', '08e316e36cf01bbe3e44752d17884cdea332e91590e6ad3db622440d5e6ed3d0dc8b4e45a62bad0e0e684aafd3f309fab4827d61e034265ed238e4a308e557342kVbpn2SF/c7tqzEzAGLBEWqA2y13idCOE72KSKih5cKAz9USdsXpEctMSs7atFi'),
(67, 23, 'Passport', '594c06d8e74558ed74827ac7b3ca946fb9098dbd2a80ae84668820434e4800be4c345c0a0ff20fc956f132560f78df62e99e23769c5534a9058522f1e31e1336BGZlTfT+JwA4KUCd6NhX6iZxwlg1wLXqHFSln884ZjDl8RD+jZjb7bZJRv4QAXEe'),
(68, 24, 'Adhar Card', '93ae3dde1cef8db16108f4e2caeda99d4beee042db3342b9404ed2541ca1295f56c5eeee9229b6c9c417d294b78c2f31392cd35bad91a7b5116a2d626c88d490b+dHJrWsTg/cBs7RgCDMlfVLyfW3n6iZrdRfKsb4xOmu1JcDmuZU14wBzKXTVw09'),
(69, 24, 'Adhar Card', '9f967279ece6abf240c84b70c6c96bec30508206891330599528b6e6d9beef009b239e07ce721ad3fb00e7e1b3faa0828b2ace95b81c274e9f02a08362e48f56mCi3TD+8EtwiYIudY/OtLM1RuBZ5d+DcyUrE1q9SonO8H+N3YMQHFLKC89STfx02'),
(70, 24, 'Passport', '238ae982b240d90345fbd4412074f80a21488696baf1ff0ebb665039aa115723c800173c5150653164c95a7575ed900a54b4e0bf39fc5b989b52d0170294c264rMhIyuu+dBwA5PMrS/4VmLIYX1aI/kX3dmMG58QaMaZzifbfM49M0CewXVxg9Zg6'),
(71, 25, 'Adhar Card', '1f5138a8a41795184ae360362c5e01021f748fb0e85351cd060dd9e681537659b3f08cb1eb6b1952d10cabd8c78d78b0840cd1305adcbf654bb3b6c10916762eM2a7N873FGfvLp2XwqBYK0Ez4/q50wIfdn+sW84oT3LrnBZ7NKEDqYtFBbFl8abg'),
(72, 25, 'Adhar Card', '0d23cfd59efbf5097c649b72a5fb568fc0c85b975ae44e68fd503e20b8ce315030648211ab768a76f801cf256502df0a02cafa1bfb2c66d222d8e226dac6bb6bGId2vKSlHW3SMBb0z6G4lzXyruyD9UDunpLWw8UZCINxnuJFdTiOiyh4iWc/8GSO'),
(73, 25, 'Election/Voting Card', '4884a466d6f4a4b4327a364147c2c8c55a276596f9f64a1381253a5ab736b7cc3056ee9268610f697db0fe3e1864adccd02c4e3be7b415df6ffc0fa881b1ee95JXx7lZjl50imW1+h/WTnZ0/rxzqy7/mMtrfLAQSIRi1i+gosz49LZ4cxXF3JgNKM'),
(74, 25, 'Election/Voting Card', '1224e44973d352c0e914e34776a7e86b228ddeaf2a7f276608c064965e944bf837b1e4c0ed0f6f488e6c1b71116e69fa9e5dd3d282617b0672194193beead687kxDJiu/SkFOgsMfiNsQmmeeWoiT2oN04zB831NRtr3GbZbQZRRSoiQgNkyP/dofx'),
(75, 25, 'Passport', '99a995bbcd244205a3351f57d6a39906af86f77624e094c2a59ad55e118810cef952612fdcb7853adb44e55fbf20bde2055835a7e1833956552c940e1e1980373HQR9mOA+ieQ3UxrSsiUIf+CScFHppGhm8qRaGqjDhQR8D/Gokhy3tVNkH5IaTof'),
(76, 25, 'Pan Card', '25c5cf4c136bb90b2c515e68eeeaa4de8d47b6c25e52946d1d4238c480832500846f95f2fa37195f7b55632e48139bbdd9bd471471573ddb136110f7c5d8774cpY9KEfLSp+IJaRWonU1GzIgunQMQpUDZEXqIqKqr0MyZhL+PCfur0JaEFOPZTf7Z'),
(77, 25, 'Pan Card', '4ed9670b7a01a9262273c4c42943613092ef30460e03fc396dc81e93445cb404e8e41a1db06b912e034611de30be416a7c2d1895765913502ed234eae37d9cdbc5XYYvThaRB0rc3IopHPfeGDepGNIKhF5KKl7OE8QPHT4Ntr/9+6akW62EuY5X/t'),
(78, 26, 'Adhar Card', 'f1754ac865a0eac895e4da5b30ac2a4f4494f506e60f5de9bef9c435f6ab71f775279575e5b2193a6e547f7ac4986cdee12d6d05aff14bd8964a61103aedf8ee++MyJYIKgC76M9zz4hGnRXf9ptsyLEOiuxn9Sz2hwj3AXVQgWXIriDu1Xy2ODDve'),
(79, 26, 'Adhar Card', '4f29f53373ffada37d7115c55515d9d61d0ab6bc51a26f38c3949b92654b08bb73892735700c09e040dab7ea6b8cf85b1f93d04714834039d49b1c681aee5381Wo6QmnW9oL3HweeNrPf/GbAtoVCwX8JglcSq7EJHLJ8yaqzFKLPhtsN3Tt/di92L'),
(80, 26, 'Driving Licence', 'ec3dd9ccbde60299713cffb2217d7d5c072c34994baa02c6deb990e6338bcc814cf8f059aa1b7df917c85beefaf35028c1adf0e1484a9917658c5bf310a191e9G555uyU5r4LSUuishTlHahHJiDaABunyOQFnI4u3zrH57i2JekTNa22sgoZzvlxM'),
(81, 26, 'Driving Licence', '161a3187a34176a12118aa3734381a185b48cb71057e90a667dc66a67710e1021374068abd77abfbe96cf4a147509459f9dffa151eb2401bb6a446ae9f43b3f1U8b7tOxHTMSW35Izg8Rdx8HrRoQO0DPj93nFZLyjYaU+Sr72ty3ykaF157RYaNVY'),
(82, 26, 'Election/Voting Card', 'c75b752ccd65729d10cfd4040cc96233eb10a0dcbfd570e5c1182c97c9a6eb2d91f80b7a60e088d3b669eaca5f31988c1b093b533e5f44d1c4f764c965a7729aR/HLX2LIFrqOwyOOJBA9FsNzotfWo3Zvt9fVUw7jgkfEeE/8a6orw3548/4F5RZ5'),
(83, 26, 'Election/Voting Card', 'ceaef4c76f1764da5ef227e725020ff3997e0a1f13d88eea556eabfb58ff0e779fab6ca819dc5bcacdac7a5f0bc00fc46a66d6b9808b178988923487a598b44fCfQs5gFI6yvdkKkjGgLqUMg+891zlDOCexmLsb/p9m5CTM+A0yuSg72CnyzYqe9i'),
(84, 26, 'Passport', '09e4f54c3ee5c5cec4f8602098e7798524f867d25cc9073ac88eacd07460dc34d6573785ea28694ad90bc338b9a7d3866c573bd2d9440068df98cb535e8ad0c7OvG7yIqGFQawMmYejlJ53ClP7L0Lggh8E+mV2kPsg8T7kxEALbiBe0WRGWuuaZjb'),
(85, 26, 'Pan Card', '514b0db250c32315c88629c5e3347fcd86efadf4ff81a999a7dd99cf68289aa8f8b43194d23cca25d1b38bc8428346dc645a3fcdbb436f923da34949ed2b8b38otvTikfXFANSGA3MO7Aed8wjb212crTxiV3H2cSRRSwB0inO2wtjMSzvWCncrySj'),
(86, 26, 'Pan Card', '7f6650e1017fb6c737bb6d319d45f7a69bdeefec423ed42b141ecb971c205df1d127ab1cb5791c4e11cceb2d2393fcd83092c8fe6e804808913fe6915d35e2c9aHX9v9JKk3OF/k9GB8NJUFROOt1RHHbC3wq5F69DMznuLbBgJZWlhDps7kCjQItC'),
(87, 27, 'Adhar Card', '2b7078ec24c34858450e128f6aa8ebf140e7c31bf8ad18c940bf194e8daab91bd7a91ab0f43889feff4491ced1f85e9ad9dd48b71d09136cf85eb5c0f93e0a5ejKQUDi51QxKiION27DnvBFrYBUMxIR6+tU3De8wO7JXBMnAsXtmbjzyw96WhDd3f'),
(88, 27, 'Adhar Card', 'db2fff4c9a6f1ce69891a4b54da30c7cdc778d3fdada3e9bb819a874077aef41965008b7d87c1d6206fb5563e89364cd56bef0998d44ef367229e6dd2246fec3vrsbHMFAgZfFF9ydapULY+ujnnEzUxbQgiwyPW5gmAt+mc3fkhd1lJY+2X+IcInE'),
(89, 27, 'Driving Licence', '16cd8c6c9915c808739ca2c0bbdf071e08f2c244023df97c3cbc8a49f46f08e360b3a4f234f05c480231b829758710f4aa1e1b2e114abd23b173ef209b2aa166R2klvczSeJG6SH2KwR3uyjDtjMUjF2DmgQNHnJIAChE62sP1rNqmRJAc3BBaUKTc'),
(90, 27, 'Driving Licence', '999f88e298ec92572b5e7eb17cb3d93b310a7eb0f040ec5c1abaa32e95ad0e1685e3c75f903f38a7fd6adec074d10e787bc6f64c934757030e4bac4f53924988AmTnZSTxUlPIeHFZWK2TFmD8VPn+YF0LwQS9iMzRbdw0qWVuUObP9MZhyBAIUghv'),
(91, 27, 'Election/Voting Card', 'c16a269fb3876ad2425b6c981eabdf785ac2c1d02d030022509d43dc55caf6dc191d3ac5468e0b9ca5262cbfbeb4bfaa48c3a4b1866df6a36f78d834cd5b4ee6kK6G4AX1QU8XkoZltShpC30FrUoO6j7xRWxi35HuRfxP21+PUaudlQdZypGCtdlH'),
(92, 27, 'Election/Voting Card', 'ba9e0fffe1c31994bacfcc7923ff4051c1095b0fbaa5e05fb031199ef3c66cb42637890b85e68d543ca035d8673537830990f95f437cdfcb332fe534d718041aw+vo4XD4y/ydX3v1E9BQ4sT2acL2mB8EmqeZLOBxyKKEG0/K5Wy54/paXK5E+dsT'),
(93, 27, 'Passport', 'b302f424a1dfd7e7fb282eb0ffb32d708d09cf2465bdd2b61fbe3379986933161e7df9cd944ef1c2ec6f3cd3f9e88e83e5fa4ce378b115e594ba9f614368265bEaob3PaxWLRGQhAflpw8w4F8Rgq4THaho/k/RBtKmTj30RYjvdZXarXDiF8r3yGZ'),
(94, 28, 'Adhar Card', '3ddefc20d4f952e7fdbbeb925b4ac02d99cd9822d51a0487ad7403d2c695f32011df2e2923eff99c4f76347f95aa69989f462cb64922c81808f1409f73e0f8efyS/NtJzAlsXeeGmzTaNGCohgWfDLo9VN1+7d/Jv4KspfX8h4oKivrmK7hf2pzhZG'),
(95, 28, 'Adhar Card', 'b2d8a9bf7f2f4e25ad5e92eadfab5b34aa281abb3fff1634796e575a43efcf45be4f3bcafd17fbddf86c28c6694c2f9c42d4cde1774b1ff697179175b025f7abQDmCJQzM8p++XZEw0hvM7BLn9qcX7kUE4KHR5x6BwBtkQIGRQd2o3CAFbE39Q2/I'),
(96, 28, 'Election/Voting Card', '08771d0e796dd244159b7a8e8a85e3eb5fc88157fedf1c7e7396ace2b67891c2b7b9e40b5e4f8b085287e069f8b1b28f77e3bfe54dbc3dd0cc2d15ae806aa4cdwQjzgGvJkJoof3bPQAqLk8ZpO+Jez5BApI/LGKwCJrqQUd33i+fU64kt+6f+1JzQ'),
(97, 28, 'Election/Voting Card', '399724ea4320f0423aa84e07d50d2dc568b7f4cf91c152e16ba6e2111438b0671923c1be32aee04c3cfc42a80aed9d2a402496bedf4ebc2d73a2f7b6ee589462ojRKkQU3F/gzTA2rn9IJ9NfhOhvzAn0lTPKif2do/V9DFZhYHIrXKzCfHT/k/RZ+'),
(98, 28, 'Passport', '11d2596c37e7ef5d0111e59e78b19bdd9d0ade4abf7ae70d5ef404127040f36ee428332848738cb1bf8da8f042d8b3c0532a44cf15b97f44217f8196ec42d9ferU7dXecRBGtGRriP6FonY2a9W2HcMt7L1WNVgSwFXc5uMTNfb01bGnjZFegxx1PQ'),
(99, 29, 'Adhar Card', 'cc9e872ccc031e4140169bea44b4972d0ffcbfa83b5813460e704b7a33e57176bcc1162a5b18f45e1b799a50057be3d79faadac7aa2e4d6c262443257e8dc6718uBWTu8gRBsXy9Z6Vl93X9b74cYF4YSPLUrXhmENCO2R8Vu0RzwRl+2ho4m/phdi'),
(100, 29, 'Adhar Card', '1e5bb3b599e7350990beed2acce1bb8a8428f0f7ba6772557280beebbe4094ac0f1e3aa4ce4021eb1068a128854615403c8b8a0e85b044120a884a7b7fa217e02CQTcgrOlF8dwdz7Wdh17xaB2dEmkU1bi1RYvQTclW4EctzOZ8UQrJO6qXu5VJSX'),
(101, 29, 'Election/Voting Card', 'ae714c25fcc4f9030d71a323158c09a8f52637f91df8fa1045d85361a12ec9cc5856aea3e3d84c3a0725f6408df02fa48966a2e16b993ad82c1b1bf2a09dc29fZ9vMs6u01CKr8ngGKG1PPL+YHdFTmwd3warmbvM1Zhn+LlPUr7LWioH8ka+ITX45'),
(102, 29, 'Election/Voting Card', '487e4a4996570dc21d3481e2662223fb4735a2423608c6914304c011c043c36baa580e011efdc9e57e1a9b7de6b70827e3f5b1ca5487d594dc241f7799d303209O3Pr5op7W9vQ67FVdf6qjEtWtPFb9nz+5QOs4mj/x5WU2RMMjC8tc4uDL098JoS'),
(103, 29, 'Passport', '4781077cb94131e4c3aaaaf27e57bce6206c09fc2b86764c8d913b3a5283227f82927122e2bf7968b0841d847eb1d7203ac16e5b3356b2ae02c4fa248de031d0drcGPtQGxtINk7HZfYFQlq9hCaRR56zCEffSePRpGGQ1vkCAj3rBOodQhk610nv1'),
(104, 30, 'Passport', '3a3406df1cff24f48834f4a8749ed439dda598ce521d7a9c1eef4d84196cb614bb6c4acfdf0ed3c8666e02589715ede374c6c2694cba3167a69690687a84bb30Gvpq4ztCdhlhsemHLjf0uWuVhfJbmcoAIrAzdsG5Iep5Y8nC0bGo3bAul4cgS5s1'),
(105, 30, 'Adhar Card', '7ed0a49cdf4df0fbbf844d6a50b06d510f64c6f19ab0b156c58d51daaf184f5af6d2b6d0eb86e028f09dd099981ee6a4e721a52498acedbb17ea739cea35b69cWV6y3m69cEYSvo6rh5BnBu0rblSqZA7xfTtAKTp5dcPiSoxxis2EAf3Eeg9tCEuy'),
(106, 30, 'Adhar Card', 'dd007f6fa715612689d1c6402bed591720c10fba41c6ad58ec3c4b05e6d39b8bd776d64ed265a0c8f90b292d8decd47f466994c99eba7e77bd4fbfe08f23da34xnLpq5qJWR7vyccoD+u2jh29xWbOIyFRRGaJ1moamSgOlrPg6ze4wLo3hvTvwRHY'),
(107, 30, 'Election/Voting Card', '508735f41dafc0f2939fa6480d2739748e776149cb753c3c112931c53429b1c52404eab1b52c35a659f5229d01619d114c1cc77d802c19bb7acca4ef6eb321b7FglPydqOTiV2wgPlhzE0EwcZ7WFsfL0SKNS5LyZs1M11jR00ZoVCqkM1K+a84F2L'),
(108, 30, 'Election/Voting Card', '8f712676571695b5d50169e615ebdbf56e1cb7c36bb7edbaac9ad596eee4128e0c4ca2047250fc8b3c9c1c15a236921f906836f02714b4472ab1d483c9f533c3HOESMpSvpklZzA8Yk+HsnFObKeASNZ9x4zAKA6b/KPxcyx1OmT/i86mZCsaMZaFW'),
(109, 30, 'Pan Card', 'c05f14073981acc031f48dcbd83e20b2b1b06a1886568603abb1eb0a3ced2951ee8cf75bb8fbbb08c16afd10f7f35f6f32a6cf098e290d25201fef29906dcd88b8IgN0f0kgsiZUBxFXKMeJQ4uTO9oHIdTCqhd0rc1l0ymxG6dPhIn111d6pLIGPO'),
(110, 30, 'Pan Card', '4806a9baec62d434ab49abb7157fb590c9a6a4a47ac61fc55a5c577101d1d39907df247c86842a36a93d3b9afb122f1ca098ed3037feab8a31c1470b6474e9883BBd26286oFhf0u65rm3HCU9KObi4ClO+XfI42kG885MMvnNBzSd6EKhgGgfOP7k'),
(111, 31, 'Adhar Card', '794438087a49c79928e1e6a1d0176096580213fc9c74e357e2f363734eb37235d70299e465e51a9e58065743f306ecc13b5ada1c42a4e656ada0099500eeda70pHFOJS621yxHjhgW028e6MY9HkZHGlEaIlaU0bt87lhdp2utAdt15qxW1A/0rCcd'),
(112, 31, 'Passport', 'aff1878a1d7b23ed55cb2b25370c48066090ef4293491a443d2cdbd0171a6a054e961d646962fe68326ebeeb31a2bd8ac1eed14925a6aa1a6cc150194d694ae1ZR7NO40356aNPTHIvJzmUU5BsiEbVLI9et6fFChLyuHrMWDtJxu7qq6AxaSel+wV'),
(113, 31, 'Adhar Card', '13336d5f6e41abb87b4b42358361388abc558c5fb770af47a38fa621ccbb2d2539f3ab411806779b95021366372c7976dbf534e9734be114a02984ada4d6aeefDRp+M5Vouo6SWGEP6obNgqQ+yfp3CmFsnrgCnyvh0WHgZ0N1uMZErY+tFTY72qp1'),
(114, 31, 'Pan Card', 'cc6f5166a875c802d5154e38fda9f1d0d37b7f38780102329079f44bced23d9626af8e7a02cd4815fbb364d99b0e431312cd891111c3be532c514a8dff2b74e6DNcURpME2VxELGALA6ycfdrZNLMwAz2GatvQzVpj0XgVHsojkfnHU+SagIQM5gGM'),
(115, 31, 'Pan Card', 'a66029dda4c16f83e4f3f44d4d8703a11fd1a393c846dc246a64f889083df598125108288f12308b320679256fe37b97bd77fa571d6bff3beae62a7610f3dce27IVWQk2HlMlFNm4quf2ikz8x3/fSFP/U4kd2zIMzRlxdJPu4cXY4LhTZAXfIMhGF'),
(116, 31, 'Election/Voting Card', '7e400a5270851ff886cc341e5aaa4144bd9b0dbc4438ee610d33d2647b040f08e2fab1901d31f9eafad9449c0d42ff6c1e9290a7c6031a9bf98edaf35de86ed4K0o7U7MN6451piBP2lWLtk8Cn7XW5L2dMRz1dFSOpqMrDyEwzgYDnU1GR4mNCVdV'),
(117, 31, 'Election/Voting Card', '6dbfe6815d667aa307c29dfcb8988113598d9be3e39a87317394304aa4c5ce3f48798e21935a2912d3a4d849070e49140a805f7e693447670543dc6debc31f77CUVJW4lF9fxPxoRLfmJLMauZzovYONNz7DO08eoRzfGFSZzClLce57u0JYjKPF8I'),
(118, 16, 'Adhar Card', '7c317dbbaac0f995a50bab520f076ad265d3d14bd94b8908db632f0e060fd1b6ee06dc97605140a701f93bcdeebfdedc5a86b42d49f93b335bb8f25b64beaf4dCp8jLTUigY3l29fvbPoBAkarwXOI0VXb+RL2VVramqv+VbadidOdCZqXiQn75zSH'),
(119, 16, 'Adhar Card', 'd777a6aa40aad9443f918c92898d1c7bb88f6e34fb86a3a8bffdc7647efe908dedb6e3585a347b3949535f2f49f24df42bfd2163a3c2123fad5ef68ce7c45273dYP/jNMBP2r7J4G1m1rsW0ba/+K3vl0HbH8jQXeH5fO1jy7h8EE3xE+9PHLqkz7S'),
(120, 16, 'Election/Voting Card', '1bc5875b170f7647e2a00e6c90174f1aee5155419fdc74d78c0f84c9fe7279976383c61528ba831daec3581c7550277afdb1a600e39c26b61f1d512f295bbe75WjRz1Q6OjPJLdUpF2VIJNWNwbqMNPvoIjf1eHhktQd1F4x/GsyHoenccnpGj63gO'),
(121, 16, 'Election/Voting Card', '89338c95859534938581210f44a2f40b977d4358a43921518151074d75683a31c3151cf09ac65a8d0a94e7025c1e0694391c592002bab7e266ddac9489579b5bo9EArGjs7VZowllPcEIDRzjo3spaNBGHoPqcHg+s/A/VWmL4/lDudM584NKK+Bmo'),
(122, 16, 'Pan Card', '5c90a2df0fdab0495fa49b3344b6586c1d1e77819156f16138a442312581ed9a60cf680682aff496a4d34fce4f4070405db3bf438864d461a252e2cdce410366iqo0pzlF5kUJ5rFVDJnI4jdZDOaRA0KLMDPudI5Tusa6aP4rb+DnWCQbydVbJ0bo'),
(123, 16, 'Pan Card', '1fdda798ef36bd91ab3e8152fa5ac0fdc722d20187bfac4d0a27c22c4f5df80a22988dac6b5aaddf22e0e6a166a0112a0db2f8f1f3c56c58a3a0692841c071782OMc6MsVum10jGXXJU1Vwn3XWzy49GAB45vgx0Rf28K3DGg4HoThypZ8qPV8VWcs'),
(124, 16, 'Passport', 'ff1d6a67a4cc5096bf4145cbe497ba119831205c6fdc0613b737fac58bf531fedce710ef857c583689d66f62d5bed33335e3f175f56d294265c23d82c8fcb6fbZ+INFmMeE7kJE0mMtI/Wodfg/pJJY7QPG7j+XY9hbByEJX5M8y2ii5V04PnbRQGE'),
(125, 32, 'Passport', '60712246514e254b3c9cd711d53e29420b7a5d459733016bd62e2d457db9064b6c2e936d123e7020dcecb53ae97fa9669c765ba09212b878482c4d8c0871279fDwjGFEWTfOiNwBPCbZw3hNoX1qBMNJ9LYBor+FvkttC3hJwxO6qJwLzPjNfG3hxW'),
(126, 32, 'Adhar Card', 'fcc6be9b22a1b7abc45a70a8f6577db054afbbab0628c8f28056abc5cd7d96bb41a701c79f44955e0329a3775bbe7855b9ecfe4a27f8ac7c3c78f6eeb70fbdeakMKryFEl68vICw2YQajoGqnD/lSm7cI3RfY4igzfZ8i0h5lGb8kdGCdois5Stnky'),
(127, 32, 'Adhar Card', '1878123a21797af468941110da0339496567d620e15b5a658745e33de79f3ea4a08c438c95ae0386615ebb136922d1ae392e01ddc2baab29e1041f92a14e0b25//YfAA29HY3hTQ/Q61z8Q0y0DVPA65HtYR9W5LnhswVfQBNvGibaLobZk0dEPG2l'),
(128, 32, 'Election/Voting Card', '50216aaf20e6500d0e297a939f9f572031dc36649b152b77b7cc847a8187a6b0101b497bb435d9ce203806318c762681299ee77143248f7d8f1180ef616352da4OSDxmhWaMquLz703d44ndRMhHUT846n7LpRoZ9NUF6VDaKB3YGfcXyLbHGZ66F0'),
(129, 32, 'Election/Voting Card', '01b890da4e50ae80d5e44cbfac7236502f60bd33a5f37dec8975dc69990bb6c72f6eec5c0ef84fc860f49c547211c8f6f0a0efb7f0411d1a0f701cfe2441dd80uCDmXkfWxYJG30Njm/BMGZlmSa5D1MPbVcYkG3nqgSV9OCFdMyfPv39Q3W1REPAh'),
(130, 32, 'Pan Card', '2a1338bb129232cfeebaaa9fa4fb5f751b032834fd43ff0c57842b7bb96a362cea0dd1f2be7fc330bcc8226f846630e7a2a3a147b38e628b6d10c9a184782696wW1vzeAQR+XX9ZSPFDmWXouRCzrgAUv5IyL/+Vtbe1bfLSA+okueCTlHezxzdIy9'),
(131, 32, 'Pan Card', '051e6c9dcdfb8027e183979a05e16cd2669373e9266840d8ddaa2b61a24727291584c59ba8f8403b0faf420e08dd04be983e20a50b0e215915fcb4ce0e09d355BvHVizPdR60MkmXbrzwgoPfrPEzL9mQrKikD1rJuK5dvjt1xnpxm+YI9ux0YaD/2'),
(132, 33, 'Passport', '76d3b524fb65ef6f6398fa30be256207a48979a9bcce89a21ddfa39d82359e21194845e8666740be6c3cabf166ef72cac6e6e2703d443282da922c6008b7c2e5LF5Ktg3YuXd50zysMFQF1ReaYMf/6+0lULc/wZ1ASRqBu+TbhU4Znu7TiV4y0hV/'),
(133, 33, 'Adhar Card', 'ea7da0aa2eef4a504aa1d9d91e602c585728dd2eab39166da4d8dc36db853239210cecb213d743058510914cf28cb1b9d11e65835681af292c0b79788194cb23Ts4dUSULSmrlrnwa9SgOfKGsJMSJm7QBpS8qmC0il9BKVc4ok3a/cFuZ9RbK6rVG'),
(134, 33, 'Adhar Card', '748c3e2f0f735109ec25bbe7c1aa29fac189e7fa5d5949a178eae49b0c14164a171ed5de961f5233f0c123ee458b348e3aa1e07d4f6adb3fc9899ccf44a2d11cuhVyY53irKGe4qv/DLMACCVH+DniEDP46fh0cKPo4FhUPuGpfRfpALg0UbLJuV4v'),
(135, 33, 'Election/Voting Card', '0d8906c35d3f18c9c68c9c698bcef55f8afda1438b019fd8d91fe556d333e06316b4e8e83c60b843f081c780237aa8d84bf7970934955e6a21042b92d94bcd5fhL+5zuPuogqFSns0uu30FXqeyaQGc7ngcotIjHxwhmxFii5Y72QLqV76eEPs7kIB'),
(136, 33, 'Election/Voting Card', '9cad243a711a050aa916be698948d53c8004e61666ae55457ae5f559262927f6da8668235ef76dcab547811dafead890d98c83c5c521729aa6c5c8901cc69eda56VpZk2imb9iXhfSoesOXOV3Aq7YYyTVGdYuYuJcWmDF5ziCt/bWBS+mX9rBFHdk'),
(137, 33, 'Pan Card', 'bb7d39efacb79eaaf359475470f5b1f68255f6450c62f3b18cc1a92e1ff269564b17fae5c3b11967f46bd273d5b226cc796124c49432e92601b911da242b9828MpsE7PF4OcCJRO6D9QGjLpf8JPJbw1GvEgqcY0eHa33Eha5DuQ2w0EBQwW4qjOEG'),
(138, 33, 'Pan Card', '754ed2de4c494ebaffb44d59e21dd4774e0a99c2b12f440b26e3c256a5684da9a4413c7a0d966c56bb229d32fc327c70d5c81128196c241c8a65bb4d06007acd3rhX6+7ivisi/NtiENK3DI9YeaFrz6ieZhskY/a7CPu3jdBVXbOoqIvDcBEktumV'),
(139, 35, 'Adhar Card', '4843f9d16224d5f74a15439954e38827d4d85675d6a245991e2d73005282e2d0e531863a3d5afdd9403b319a6a3631c535460c737a1e9b23af53dfeb7275e9aatZB8MLpFTI+FTV+mmNJ5VsW271+G3fgqtxW5xMcw+yt9FyTn2P9I3C8qtoejFhoc'),
(140, 35, 'Adhar Card', '349e924a637f6576cc98d6b21867f798e166f21c4d230f3721ae0ca38ef80de79446532357e0a700dbbd07d86c0351751c2087733c275324033c94540c45523dPNaAdiwW3XmsIs4KlGUl+VMzfAmbE7x+B9rUwZ8oK5V+KaTChWAlfUDdzc/8l7pD'),
(141, 35, 'Election/Voting Card', '7eacc276584160c0b806fd0951bf9c2c25c09a31a6e175ab37cec7519a1aa955dbc79abbfaedfacc08eebdd3d175ef6136074668bb3dc991240af707c372fd47smEq7hUCowYc6Aa4qJW2Axy5QgwvnPQrZ79iNgZm1At1COmPyHkT9alYuLg6uSou'),
(142, 35, 'Election/Voting Card', 'ff3fa9b950c931006996fff6112b491f4eea1a833a26e7e99dd28e408d58fd3fba89ec1495a0f137fecb9038d8262da248f86fa2792b09526de46baddffa6eabTte9NJr3wGPMJqkl5f1AdLSUBDCnkg6ZmYrqDLnRQIqGammXpTf7T1n+D7gYrycj'),
(143, 35, 'Pan Card', '997fa79da835959d7e778199b2707a621eb1f83cc26190dae33e37966febbdc524843e36666f947c69039193cb5eb233ac7ecf1d35de07b9e887eb2f97732607orbk23NM+at307p0s7NaxeGD74Fgf4iczwa8lyyp0hmkcGXQ7TOkKoqYfpsoLwXi'),
(144, 35, 'Pan Card', '007dff200914f47ceae247542874db74197c7a634a4d04e15921e2e83fcb03beb89a9c3dccce0dd0629aadbdd16f77bda9abe353d0e0bd3034714cd7fafaa4a8oaTS7XrAckahw8A/2MI0VnLRY8M77ejCRc3kGLkh0GgSPzybCIcfkHdr0V6YLTgY'),
(145, 35, 'Passport', 'e825df90e32e59b6a55447cd6ab84931dce56d2b2051d049c63f0fc12d4c46f75e7df823a679ad5cf79871e2375f7765ad47c49ce82573a74e50f7532e4c9c31gXJJn5pWYJcVZSE7Do4ACTVUT9mpBn8NCvCb5L+IfwDRlzNg7KlZ3Oyl+ircpZqa'),
(146, 34, 'Passport', '6c8edf17fc2d108cb41d84744c58412558ebbbd92b34b84ca8dcf96a4ca3b2d792909b1bb7843f5876e33f778e92fc337792cb83cb667b7606f9a286a06b2f313836k6q/23PONWdoOiGRp6237bl/oJinWap0g9LPrHK+cvbHpDax2Hy1zj5/U/XR'),
(147, 34, 'Adhar Card', 'aa720733afc3be930e0d5aae785962a3c198c7481669d1b8268a3b88a2188728a7e198084d9ef60c2ba79b2fc84bdec282f4a53e4d452bad88bf55d1a174370fZRjl3Zv5erQFQWIFn/GlFQ+8Mt/Il+/nIV+R2TAOtj3OMyoAULUv1fX1RK2ul2cm'),
(148, 34, 'Adhar Card', '8de9f2bcb5659f09c0cfef82d0de7faa6a7e02d800bc086d8ecdf0d9d1fb96a6f428fc63f0f6a4c2e3e73e7b3ad32ddc75b002febc590f223c73a2ae3c379555gcT5ICJ/b3iww26keEeXq9lO36v+DoCcla0e86os3NW2mjdzOQfh1jODDAKy+CZs'),
(149, 34, 'Election/Voting Card', '2f040191f1da12b2a697e1a77c906aac1c90cbbe95a2962fcd07b8c02c1c2b80b45f9b4b296305e602bc8d2402e9a2dc082d18fabcb7a96d6ccd5c1be70979b6PdOwzfWH9IlfhooN885kqYQz/nQSkHLKvJ/fRGuILQzW3H/LO7ByA2VDKRsznv7L'),
(150, 34, 'Election/Voting Card', 'aa86b7489f24367d55d838d412a4085771a78b9bb1beb691bfa3306339c36c5eaa665c590620b1b7a08e3f3b8a3a73ea203e70245c2502f8392a108fff7bfa968YNuFfqxLHRVg6zqiWBPyNhANQVVFMvq0KCO0NCzuBQpgIS6PDv7OB6zNOO50z8H'),
(151, 34, 'Pan Card', 'ef24a3e1cab5231c95371820e6142df495ea8d25a271652b1e7eadf838eb1eab8975cd043ae2ea240ef9f7a5923c771d2aab31c952b42b16a3cdfa84e548b8a0soVcDKLAjAHlnz5YEFAN/1YxlERIRCwFs2BFXteymrTG49peZwL8Ng7c4cWMrYTa'),
(152, 34, 'Pan Card', '5a5bec0dd7d6d984d77ecec5989639a3f545ea0efeebaf51c2d2acb9cb10492a6be46fb1a95ab57a1dcc78c9a4b15c4928aba8d0f49c2884839ed6dd08f3490bHP8Wg0EGP1nm/yb8/cqcGEU/J6c/pHTX3ZG1G9KgobXbhMMLwUO2x9QA/uubOJTc'),
(153, 36, 'Adhar Card', '20bf7431a8e4d392cb4b23f587c1a8ac66fe3fa61063a7874401ffa6450c1eae5d827772dae7db67af1f7024124222b9887d5ea86650eb004835bfd22f32a91bb+srE4msUmB/jh6Ht+rcS532xCXx7kkpE+eGcZ4yiIKZ9EAEE/t3XLfDGcAsvKVF'),
(154, 36, 'Adhar Card', '88dbd589e7731703113b8f96e7b0792eb54deb50ce335efff2c2686da5ceef86536aae0c44e5dbe333305b7f5423dc08d2a27dc5cfae312ba02204eab07a7546GyaRnWjxprOQbjMjhEyjQqjiTivYS1+mqmWGiAC0xogUfqDYaOm0n0lI3qCmHiCI'),
(155, 36, 'Election/Voting Card', 'c46d7a90268be9eeaf5accc8aab5105df6e460a043a4b5c98f00ef1611fa948eecaf5252066370b132316b0eac42e518c1854cffc85686509188d28e5ed68f865UlJejosd7+H9i9QW82Tcfr65N1TgvOyT3a0+TJG4KZaA2sNREAicp9noKJbNrlM'),
(156, 36, 'Election/Voting Card', '98da3ed7d676b88f6fa7c75cf0da68521b3cc36722885b95b159ac541fdc5ff4744b838adcd378a2a9e5c2777cd7c9c7f109bf9d092981d300d8d7036608df32ESxw1IXp3p7rfbr5HCk7HaNDpXjD4yiGCPCyYkv2GlwqsGtHj2WHZ8ZLPRaXunCy'),
(157, 36, 'Passport', '6337029da18eef7cb294800d6f2dd67026f689c9428f8313fd9353d1668f4e8d246b97c81c10b16efc06fa0576e429350278628f2c298e0fc3e46211effa1e16h6LAa5OIcU1joBqzI6LXDG/caHEz+W0LQKXwPuMazBpZmZwDveJu9GMAjhwyrrai'),
(158, 36, 'Pan Card', '82578507fd3f241c741a3bfeaff52cc9de81618b42883c8bb646c431c6a475f52c23b4a50d98d3e57809a160571c0b98e09e6c0661e5b5bf4e5dff7daa32ce9fbdmGSjirW3oW9nMLQSPqobaIb49DL22EsmPwk1iUSCpMik2fiSDh7ZIdFBV1h++/'),
(159, 36, 'Pan Card', 'ddbc152ddd110ea92da6a05921191c71137966629803e2e68f5a92404bc9da40f06924145321271aa4194d35c1f9e5e0f6a5dca4ba57636f5beb143045b254c5aIouBV0W8wNRx/J191ZAN/2Mq6dfr/KwPFfQLfj+vTmkcr3p3UoeqPSybrXMuLDi'),
(160, 37, 'Adhar Card', '5f418adf3a0c23b1aee28dcf3ee4590fce05f633cff49cf8165fd7f25d2d3a82a08e48dca0d74858ea1342f1b3af62bed17f362902ed74a2b228162345e062d9orxpxLFCZywFvyqaG1BfrAOrMBZqCn7Qf8OKXYA1ajR8Hr8gNzsRqbNXE9PWQeNr'),
(161, 37, 'Adhar Card', 'd5f75e0cf3db164c69f6782b81279326cfc85d437650e34a372c60fea6289f6899b04f85103121636146ca0e21ea56cd579e19df356772ef4baa5ddb476bace32zgsJheL0tfvoWXVx8SGlDo20XguWUyBi7OBDQX8kAUQ8px/nQ7nDQSAzf7dhQyi'),
(162, 37, 'Election/Voting Card', 'e6b0c8d4a1a42685af88851cc681f16cca92c14418271548d1d6e6f1c5ad9f4554d554a33e4ea68e935b56996c01771f3e56b790376b813e84e64b5d9b753e10gK9QhF9lmgZavkC3M9faBJ9EN874OMt8a/Y5T6oFO9aR0qHtTvbwlOiQKa3zYLWW'),
(163, 37, 'Election/Voting Card', '28efb29dda20ca28671f7e6e72e6b812ff8aa08a2590e32706b8f088f10425089acaebc80b7082a46add8809a7dc7b9cf4b72465d2d446a03b3a2045557974b3MVNLWM5cZVZN5wsdgqdEaDXwf4jOF0K3PY/CrP1OQolfKOtPrHk85BKSG7S+ZM/g'),
(164, 37, 'Pan Card', '82870337fd2d768a2fd8f8fc048035d8b82282df9db47f8b3ab00d23e759a37ed8188d8919379ef5574f4e70470a6386bd9b4c77f24c6fda8b887ac9268a988c/9mlfvzt7yX91N8qYRjtjf8vdbLcFDgUUbZEMMNQ0puRIr+8/htFGA9ZkYxr8HNQ'),
(165, 37, 'Pan Card', '9d2a0ea390d3093bce42e6ea151c0a53a3796f2e37339d3b52290f22f11e56d7f4c04c4125c84fb1c5a2d83ac52e4a7159d16b5678752b6eb28e305e65e1f752NYpwp+zDlPIzR4hl0OJPsMysaQSWwSPCV3VHS3JyNBEnzGeBoTXBAHGAdQa8kqLx'),
(166, 37, 'Passport', '656205f3d05fc4e4fe7e04861682ce5044a30ae28e76f13801f4de642052f218c09103bbde406610ec295884294fcb298121ce7b8d361f53986bb539b118511cUD83U0+ut64OCEBJSDO14H57AjnsbrD0iPDS27E57O4TR5PHWJougsFNZnxukU1H'),
(167, 38, 'Adhar Card', '7ed3bd1959cc9737cbfd884c03dc3b83147b9469dc706b6cf6156788cfd06f37c9608844d8a9dabd994898aae00847ac54885b44cbacd74e011879eddeb1bda9vQ1rW8bKVVrAX+iBisqeXjq/ywwPGqGQp7JnO8f1H5cSqI/5yzHiLM7hrrc2bVms'),
(168, 38, 'Adhar Card', '3192322107551b96aa32134134a8911b1a56935bd3db461ec43999924214c4b233e931b09f93ab258fb934862ed747beb4eb180a17f8f6684657f8cf3b6558175J09jW/qEzXbLg3LpG6aad3pUv+8czq4YE8BfaTQuRdp3ao1fhaAt8sypcSq+jOO'),
(169, 38, 'Election/Voting Card', '6e30f619a2167e335c11e9e5dc794969c7260c3a6f227e8a093039829effaf66f70bc61dcbd9c9abfe9102c2c1cf6a4e7925917500fcb6129f40d7eb980dc75eUcsOZoUl9PC1nQwbGXfuvU/tYbz8wlEAm7pKVbH59WfsH7GCljMvY0adEOUNb501'),
(170, 38, 'Election/Voting Card', 'c155cf85f904969ff7bec20c2c528a50c8b615bfd9f6347575d4a89c9bc21315cb8d9131478c9bd940d275f28b79fe68847453a01aa3e5ee3e5a117086a77babTp/sF9WO2gzd2iENOShBd5hX7K/Z5e9HHkJFMBrl0Ph1waPC2CAk8JualIR5YsT+'),
(171, 38, 'Passport', '9c7de9a0a2a276d9fc755e1b44d43c7528b6d1b659554f779c4c6881a9940fa9fe82f980206454e50b1e6d408a9f8f6b8dc252ef1d54cab2ff749faa2a55d95fttGP5NL9Zgnk0jZIQcV4I6Ub5noElvgw2gqfQW80wjO64YOT7CF13q3JY3t2qHmB'),
(172, 38, 'Pan Card', '331a9e650fa036eb4c9970ce3719776cd392ef7272962be82842fbc88711546b806a7882e16b10fb1ca8167d8d927c7a94850f7ad087e7f7d3bd52d867843b90gzDyN51oH/707eod0jBR2FehxMH8R1UBNza+E8QBz+96zO96rlU/kvTCfG9YwU1b'),
(173, 38, 'Pan Card', '7be824029f7bf755eaee58497121873a5b239f894788f3924320e8298fb73ab1ecdd17efe6f6c34c61a7a0e630010f9a18995d0717854a10b4c1cbede55ad831t2HqwYB1+FVgdtBTUhi5st/jpecdT4sdlDcPzAkpYl9qV5YMKsMxUxXaKzbdtnvC'),
(174, 39, 'Adhar Card', '4634ad79a597c8aceefc8da514d3e5b4a73352e5bd393d9dba8c1d97a04f814700274014a0c33be86bf72f21e3ff880d7e56af251ed211cca2e06d47cc5dc4dc1jeejQROSyL2EOleeURBCa8No78k6uTMAANUNmw7zMfDZCdhGxOPQdey3iE2Y4uz'),
(175, 39, 'Adhar Card', '10b67d6bf092c552bff9a952038e695012a09d19f7010cab43129d8c3cdd3894d2e9dbfadff2acd05e81d672498a12f468decfca1f7e6938367288c0e45876b2ONDpkztflpUNvnB7mGvYaHsvVso5BauGL7szc98BF29ExoLrUIm6FexCG5QWBjL5'),
(176, 39, 'Election/Voting Card', '2f47af9f8d7e3f64db81d8ef986690fe30cf7abc856c606e2bd52038d9f54ecc4bc00078d2cea66951993c8fc89cf2a60ca983cc08c6ffc364b32327f4f75551mvQzkBoIeoNz3zu5bFXkVJJXwFwa4ZvGB6CalyuC1iBn/e3HPkXWAvJ7CnGIpU9s'),
(177, 39, 'Election/Voting Card', '61cf7ed52551de7ddcf9b4c5a44b6130aa3bbaf25cd94866e0a428fa28dacb2c8036bac2c3f2bb224f72d12eaee886e36529d108dd3687a1240211463184958amVpnWXv14LaaecVD8LDvC0mM9knEY8WJTjTK+ESJ7zzFoo8xvuPehzZPl1sGDYJZ'),
(178, 39, 'Passport', '067b4f3d25f38625242822cf92c4615a313767d807f6ef585952ebd1ec209c9c528552a6ee84d763022f43e55676101c678ba52745d5da8719905eb46a22a354x4ph/dy+pLiCstFTCoJnZ6QVPkllPIyNa2/FKnOSWJqGo/7CltsSJhgxy7l0xqIN'),
(179, 39, 'Pan Card', '7dcd0615cdaec2274d93c573752e04500fd1c37c36d79eb545da537df842e85efb732800f250bc583fc20ec67a5dac4dc03926ee3675686a908f27687178bfa58eTB+cBUEpCpgZ7YN7YQU05Yx/+m6juTsfwOs8ooTqSCLprIqxf0nswiLgjE/apw'),
(180, 39, 'Pan Card', '58c7d6541b858ff47f88c630ec7662f7c40c9924f55eb8ff92b6e452ba38ad837a1b960538de50d8146c60b10d2c6e9507b9b91b523a84b12ecf25814e567bedd1waqh7ugHHWRetDd67UVcJGvwKB4mm+h8JQidKMp37Bs1/bS+9j0ioS8qPecMJJ'),
(181, 40, 'Adhar Card', 'bcc0c043ea067df34d820d8b6a239d49c16147e87efeedd683e15005e13d06e8bf96cba8743a5358e801991d7939e86003d27bd90effce14677c293aa30619b35NSLBvuWAX/xNuxB4w1QPAR3ytK0ICwIuccQWQal1csNrN7cGxcnF0cRJUeUzhkM'),
(182, 40, 'Adhar Card', '1a190a12710dd272e46c8cbbe329d9d9782559bb621ed653f1bb1407963d70ac826b8f3f6ab50e13b0f869d7d18a9d35be49b9ba4efc3e8ff2979b19fb4a7a2briO/8OhKL5+GhPJZi9Gld6RUfa8G1hD50a9fYSUX6yhMYOk0gvMtz2UOUfCHU+Ge'),
(183, 40, 'Election/Voting Card', 'e5ccb3ce991b9edf9424de52121c2f1a47f9927e43ff67e29c2c86435ed26b0ac53bf6ebbafe8d949bf3d11f7c457e8fe3b515b6319492fa2742503a6471bedavvFRvOzIXOt5BdkrvCF9J748K4YD1q9U08Oe7lvH/y1Ot3ZZdNq6sB9EPOAtwrZ4'),
(184, 40, 'Election/Voting Card', '0cef0fd20484e228aa8b12c0f338beedc0baf632a1a93811037d2016e61bb3e1a95f870eeb734d1acfa16b588bff4a634a5a5e0503aff28f5c4e27eb93433a34/rE41s8RrcWH96ocHjuVOX0LFRVQuoJFzaELoPkpTw6c0Z5qC9xX8rYOqM9DSQAi'),
(185, 40, 'Passport', '077b44ef5bae86cb2864ba24b27f020968fa8e7b12308e7a9bac57320a3063f6db50ccf4c9c871ac4c5d5aa067022b8d5ec39bb282cf611e7a6f4a23f51bdbcbgAE9vgokDL+B60OWBnFknHSFBaK0bmGtQHrq2ZMzWAQaHtB/ca+krHZvRUTj2N4o'),
(186, 40, 'Pan Card', 'fa5a024202cb78df9df5189538f144d36e5f139409481334e82687ef8e1043f1abcd57dd747a66e014a61f575c0d9808511d2c516b49b99faa04a7235a1a2070KJnT9ooKAY2bEYNhPl1wy3jQWWa3km7GwXVTTEHVg9RNWz47w0XP5TOkmyI/Ryp0'),
(187, 40, 'Pan Card', '7a051166c565c570ef0e639a2cd93192ca9e3fd256defef8687a7145ecfd34ac7660f924f79a0b23a36d64d7f4b9a64b9ac34207b26bc85a2d2fe3c8bbef0b3dmboQLo9e1cr9sJCP+SoWIRVDfiHr0GARJWq0OFuCM+KbOPm+4tmyS1crZWcCYBRE'),
(188, 41, 'Adhar Card', '06f38c827912ca833f5bd4a1f123a7b2add5bfd8cc4ff4b0e6ef659d341809f0466b0ceab0b55b6ddcf6968b4402d00c4300450674d602b2fb60ad9d0d1fe65631pkMEtF/yDcSEKhkQRnsmu1Za70d+1Tkk+9U39t1DK7iDxHHEk7UUIpT1Ibqtj5'),
(189, 41, 'Adhar Card', 'f0046cc2c9c434fa97268eca22278d660890a467c5c60dc5ee388dd4199b5354f58fcebc2b9be2efa677b03a77cc7ea4f79d799ab42c7dc1b59ffd12831a84f0CNyuTsZaEPEaF6KI1ImSaqM5diB3xyrPh4EYKt3WqhXb3u6WdWgUmnFlozJ9IsNY'),
(190, 41, 'Election/Voting Card', '1f6183e1676fae74bc71941c2ccc0a4c38c9576aef2a70a23af11eafb19e7fc579ff83355657762d8195a6c0c7de805bcf89fb17bb75a41bafb5dad2eccd066ec7ahHWWttU6JMcAsYqD9TKKroAyqMxvpZMuIc9l39Yd70I7d4joHx6PlN0f/wYaJ'),
(191, 41, 'Election/Voting Card', 'b7d217ac412b0c5a4feb11c263b6806f46231747f6dbc9f7523dba1104ed82f69621a6653a8155c9e84511806a1cfd654dbac3b1d2e6a1eaef5e0884c3c4dc08HPGRLEMmT9ZOY82WFpveL9+tgwFT537VGLCIXE+gOiMbq7uYZQpeDGK7sSikVjJf'),
(192, 41, 'Passport', 'e6b13ee55f66b496255a6f94f360e704464aaf74e79e912ff1b59f5356e79f1032806161216a54d52b979a53d1dc64c2900a6c25beb12f707c35c93ee6b5239ant2kKdVcCB3AuipJGuQ2QKC8qr++t2MVUGSBLDH1aLhl/SU25U5illzRifPegRtm'),
(193, 41, 'Pan Card', 'ecf29b97dc9d30d2c07b77ed90a13597f365fe61e32bbbc82823088d258598dd5c7e61f6f31cc44402c9ea8eb2502b590ea55e4d5dfc3e238f603efa88739250afjmdBEfwzeugKIglH3IlsTfmTxRwjkx/SyIeTLxqR9q4EPYT5P292NM/ZrSOwXU'),
(194, 41, 'Pan Card', 'c4621ef2774128d4f5f2e60960cf53f418960beb7db8d23565a7e45cb7625fde698f7d4e554886363bf085192c838da96ac996ac12e7cf461dc517081add3c86f9poQYK2aQH+DIso0dUq9Ij2jaxWBq2IU3IaRRxiitGgEPqY3pAD6kpE5ZrfBco+'),
(195, 42, 'Adhar Card', 'cfb829c8511fe24537bad7480d599da9df4882a55b9a8856cb6a2f3e6adc68168b5acd37f485d2334f5506843848da7668d042e187897d4af75f4c7968abcab1JftI2qgri4ys1AHYByno3t4DnsgkS/vHjMG/jzEFLK3r5F7cWpDf24iEpieRflMQ'),
(196, 42, 'Adhar Card', '52f7ee0c69125107aa1c783d77ab92d2a1cbd4a62b94f7db4fcb5daf4f1ef2fc497c5795df467f366ec7dec008ee29a918bd1ef203f8acb12f861d27b86206b2aAjiLB1cMgAcudyq19DdboCkHXw5l2U7U+qgPZoGcej320g7Q2Jh8jTRg8LmYJXy'),
(197, 42, 'Election/Voting Card', 'b1549a4ab7233061229035b02c38a7e3792037cc17bda56f8ec6f94bb3d281156831f12996d94ac3a9168c8e6906bcbc483d8b26d7f50e776637e382eb4027e598Ecg8nnYr5F4vjwhzezXA1r5b5Zx89V6OIg6wkYDkNpst0vNa+Une4vdMDeUz0J'),
(198, 42, 'Election/Voting Card', '659d63003c8fa8f3058e902b26573b0ab6e8dba5f0f46470c3697c483eb8b391291735f8f369db9669bef86e06b84d106838d5fb3d8c36baf8d4c597f988a0ac+DhJXPZ1hCDEfw9Lo2O8vjDd257Kim4wsEIYGq2cfB3JPdCLHoOB1YGd46kyyUEy'),
(199, 42, 'Passport', '5dfb15c75895b8bab3e2153ca0d0c30fbf0cb9d6787c80867311d1b38691c6d5a7f3651bfb1cbf4ba725d25c9802ef6b94e636a498feab10e5174aff7c8f29dexrQgLr+ZacZ4l/LXGtuGwAzCdXpkACU9ETBlzqP7wg+n49ztVm1DEs4eNo+i8MMo'),
(200, 42, 'Pan Card', '0790f4a73495864359e0aa914d9a9fe3e1bec63763ce7d328288facdc43f22bf3f49766f6fa15905686e9c406cedf79a571952a9272efc1ee9f1dee482ca9946TVJmkdvCRprbZSoaW9vlL/zd2WHXsxT9e1FBjjAen2/2xtpS9VC+CraVjvUMQvdN'),
(201, 42, 'Pan Card', 'd4577cfa43acb1242f0a09587643b0b2827a4aeeb8c1bb422ac88bdefc2f73d11d688b0c899f09d1bcdfb4acf503092be226981e156a1879ce489f1da66b3d45bTmEFb2ULWamPXhFtCSvPjJbCwFksBk9wPZ0tYRyv4qW7jR9KZdP06QNb6EhUYtu'),
(202, 43, 'Adhar Card', '91f30e8493892575d0c216393345b4a1f549764e9aec4c452a6a61ddf22861787a12928b2803d950b1cfa36829a0969bcc2f7ca3d32594dd056305a9e1a535d66BK8jZBdU5LEP9YnQsgPN1cHtz9zsYWVD7/cIymf8S7lSSHnSow6CzWYdg913j4L'),
(203, 43, 'Adhar Card', '49ddcc2f130ea1db7e97a481713a49d7731ea551c59f1a99d5fb08933768acb2bd512f9cd6ad17dbaf9e97eb17383fc70602a872d0598f142f89fe82f35a4389rt4z97e7AzXTTquE8nqOMrAKokJliGwbAsX2WmVn/zHV38Lt/utVQO7WR7WnLRqy'),
(204, 43, 'Election/Voting Card', '1e714724c0dff9b83145e0e6d4277f2410bbe4ab70f0e9454459842b19748e90b4291bcd33435c1edc92170da6dc0046e1450b650e0d1f231d6d23c8f874dbacHypYikbLHWUEw2SeJKhV9wszflR3tph//YYdhStzoxFIMnDrlXlnc2UYnYPJ8Q7h'),
(205, 43, 'Election/Voting Card', '61de22412d4850a837413e0bc5a097c03e1711fc9454fab1ac3986bc065282d28c6e5fe1a059da720643b7d2783c9a1f1b5d1d9524d7606bd4065211dcbe3323RxYGMuCF8XAIZJLD70M69eiMcOvfI4vfE5UwjJs+WGuJymhFEbOhajbsSadCAiWO'),
(206, 43, 'Pan Card', 'bd8a2e695ed0afdf3e4287a665aeb7d1523ca80c7bddec23b07c36236c255aa4751d9113be1a5d888458ac9f731b29e4e11f142d3ea866a6b359c9aab2f624518t50h5voYJmVWjuEGALN87jMUwxipeE3ZB5HgE+YxKC6xc8Z7QYesQAMiMgPHpAT'),
(207, 43, 'Pan Card', 'c6684dd45a0535d019dd573f9c54118841952311a68e20d46b6a6807b425cbdf31a71c33492ca2db302d1770160f28f26b6bba28c99454b18485b2f62f058e02R3y+Coz+c5W9ORjWDdH+BCWjyK+tB5r8vYmAcZjIBne4UCcSp4JHZ7v8IJEUpebQ'),
(208, 43, 'Passport', 'cfd6e1d8cddcf6a49b72c2cad09ac5d657769550f52223d8053372a66c38c510f04c51487e9a39563113476c522ffa232e883de880c87019b87b07602d8275d1v6wfGHBPbfIh3duwYIlQXoYhWkNHqOYEkgCY4bNh9Lj5Wf6CEo6o0jdVWQLwix4y'),
(209, 44, 'Adhar Card', 'a65205741dcd2cdea2224edd91cec1c1054cf1c3b61c3cbf5b8613ed728939d749da539de2ef64a43011fad6cf6980130436d58d18a4bf3d704c6fb0c06e9cbfciMlAH/2Sdg2eI0x0gibz6DF9CNOKZBPv+wExqyqsIKboiADm1/KmyoATuTK16U/'),
(210, 44, 'Adhar Card', 'e476949316c61d4bc3a2bde00d314a6e4dbae4a6b937638b9447ce58e25ca0b3c99a713c1d1f69c9cf92740897fe1f25fd3c2fb2f6456042841ae8ec2bf29a6b6DYJUU007Kes/36mWb+cd1ndqhHULbUs/V+j8Td+rUd1VMK0BeI68iteLQo3eJzH'),
(211, 44, 'Election/Voting Card', '970bc5e7940ef4103211d0d700a3e1fa500ca2a89132ff408716e36e09901b187485b79cffa6b535b5c110aa54fb58d66b6d62c3251dadbc6c3648dfbe155744HW3Y1LPbCNmeokeUtNiGjmI2YOxTKtd31tPTcvOFzRejuRtoruEkMBDvOcHLE7XL'),
(212, 44, 'Election/Voting Card', 'a1b36e8fd9e5e55ac1536a0c5bd64133bb9d61b4ccce510ddf259a7ea1fe5281b91f201fc2991d4780dab3107d3fe9b6152ada45ec2d1d39bf04257090a7be4bSmy0nfc1kIWnneqlhmmomQZwGJX65yfTDTLY98TmA4UIuFcn0hLItd5bytNYsgtQ'),
(213, 44, 'Passport', 'a5e7b43cef8835806626e976c65ffc063f79cc9056220a81e1309df768aefa317ef961f8aef1ac93c1cfe05636ab3e473d95decbf31ed30d661261c456af7431FZQg55y1y2+kS7yBtxW4+wiBagk9okTAGCQQXEkipoi9xWnrA2tvrLJgLIF/LTJz'),
(214, 44, 'Pan Card', 'b84e7bba8de86a710d9d507dfca5396664465b93544d7dd7604cf9d5b9169f91d247eae074141c5761e361f6c0716a773c780040b6b3f7d2fd56712a21d7be86p5OmQmK+SrKgFuCnoNpVbHcXbYSgRKmN0UofS6tkO46JUcldi+aXfvpcCIWL5LW+'),
(215, 44, 'Pan Card', '5a38c539ad703af0cc53fc1cc358c9f7ce6b4669b96f204bfb2b7658d425ec99cd3b5b7e6b83a594ee43b6924d00a489553e85e97b0f0725a2afab6744861beclmJJqoEIAmAQptKCBCOgYSn3lIgUk4GiVfAyMziFVqcS/4rOgWPDffUKc5VHdwHz'),
(216, 45, 'Adhar Card', '145a9af1e9815f5d8c0b9d48ca87fad6872fc857fa12074df177245bd1a60238c5f99abed30a0bf0626d2980e2ea692616cf0a532caad5d4733ae102a7766821Qkk1DKBfNUzV7eE7LNz876gPVPxgJ+8VW/ofuGRedtN87IfKZqm5YfkVtfydMfKH'),
(217, 45, 'Adhar Card', '1fd07bd9b849641f757b96e079fd8df43decd01c5393c16ce5624e352cc17d69939d7bb1306c9efaf9d097ba3f87b429af7969b04aec519c20720f2478b0d4fbZYJbUq3Ngv9A1HwpPqao9woAA4nTb6EDU3jfKtZQuFcdrsh4jpQ9KCGJveaCTDNb'),
(218, 45, 'Election/Voting Card', 'd800e09f0b3ff5df35e0c7861a79c9b6607331ca089f9a38f2022694cdbe3566c455e6ce8557a2a880da4fc4315e77f49750d1b08c83307ebc02e941a833912cYbbjm+/V+pDYlOXFBeQ4FhR0BwQETUUip/apefSiqdZPwxOKBU4g8qi3vbAvmbwk'),
(219, 45, 'Election/Voting Card', 'fd3609e020e3b6e00281fc634053d722f257c898cacf77cd15b70701844a99f7fb1a2d7559444a3189f0d63032625364b61b8f193f22eeed130239ea8c8fa7b1nmpCfcrBw4vRPcgv0JYzNPBhbJeqH+34hdRQv/TBmexx642pF4GnOHb/75PTYps8'),
(220, 45, 'Passport', '0b34c813e75d4e7b4890bc5279310d241d99fa44423c495ad1c736a8a13836dbdd25f0caa52665b2dfa9346fde4230c57f5e6a3d9c6879889e0ab4120265cd34fVpnu3bG5Tvf3WGF4z6Fi5qnqXs+TMVFz9sMtxsKa5vyaMfXDSTmd6KLQT0APREY'),
(221, 45, 'Pan Card', '1799bc5ee80d39deb740030049be1977c3b7e46c4953fbb43f2d883821a07443a29ae560eea7cdb1b25c1e09a94555f1d44c03c40e271242745cd6e2b23f48c5mVi8k0ZxclQ5DHjFpdobppKUxJopVrR3D0WvO7Nvi8LlixsLrwZ3wR/buz7HKMUG'),
(222, 45, 'Pan Card', 'e661ffd7c2709ecf1f7416f31f9dc7f857b58f7383514e06c183455ad360d4c0c27d441638cba1d759fdc14a68826bc3f2f7f3a1ae9f150e223e73f354710e6b9lSQCemtIxPJ4DOlJOpLoCONqDEIZyi8fa7xKJmDY0ohaDadq77O6mf0KNtLFPRr'),
(223, 46, 'Adhar Card', '71b51865203855dc33fbcb6205a4e1c4db1bf725063e847ce1f9bfdf832f3f73d5f80b4f3be3c7c24d64ca6457f97c23fcd90d5aed97b141fb0f22d530f19dacGOpuRBzSzFJor4MUQU9iOT7FmFiLx7jpsqoil451Biieu4MLTGbe0hk5RfIUyWor'),
(224, 46, 'Adhar Card', 'da7a17b7fc312064761bf2726c59273c34380577754194216b92044b3fb80ec925eee892fb11dcaca3098d2acc6585f796c17c7c6dfb4401a20f218a862e3efcLHFrby03rozxLPoANHAypsbo5E377bgRNaZQMrNM0w3Ef2ZBbf/4TpJEXX8wGb7o'),
(225, 46, 'Election/Voting Card', '6c789f9bf3a5c58ae7fd24128e601ac6afa2a06cf76685744474cc5db0863f600eaf6ed678d20190a9beeac1c9217e1e4bdf047721633644f5507351dff1577b6bfsKj8qi2HgU6u4VQoDfVdCzXep/L8/6O40UnAF4AyzsXRwcL/usQ6cFOVUIUov'),
(226, 46, 'Election/Voting Card', '17e89df55e0cb447070131452d9dc7446cb764b8d76f1ce4d6b7d6c72613a4439ecc1e0d2a1a0bc433c394a0e7883b114763c1ad3c0fc02d532c2202c444adaaS3ZvTpxauIBQYuLFnQPAb7ITdySiAEbydvcu5wgAlgNVRprJGIeN7qb6i2xpWhve'),
(227, 46, 'Pan Card', '29a48d4995060eb0e342dbdb10b8c216d8a6926a956303f06a943abf30685406a6e90b7b3c1d22abfe88375be42d3c04575bacc84f64a9cd56c6580312d6054ca+ElWyPRmcqAKzgh2GlGteQvzYztrEifQSrJPcM7BB/ExKtIvk3XySCYUhXo42+e'),
(228, 46, 'Pan Card', '6eda6aaca67ff27da4b3a5307b66b73ebe1252dd227cc306f1668309382a2d52f830f2906b9f95f936d19ec63f599d97c466e6baceef7943f9e2f312696d1765rcKCBwmuTWf0m7L7TMfnoCcsADYhOp7z3UYwkBSt99wmceB3B/ACXReBpLd2n3p6'),
(229, 46, 'Passport', 'c99ebbcb8f6810f2417baf7a3eb5bf3e20743e6f2fe4cde3a1e0d4dba8ecc202f67c3fd03727ea5a64dca352dc9435bbbca35fdfe5017f50881b2163e44cd0c5vnAL1SObnlsnGJZGtUbXWxAr0rMokUo7TciWB9CyUM08k3FMnQA3G3TuYd6jmac9');
INSERT INTO `tbl_idproof` (`proof_id`, `voter_id`, `type`, `path`) VALUES
(230, 47, 'Adhar Card', '2cd72f46c441ee340b17876a851656a8a36a6ebca9a333163c2aa7b679268c9b9e7904c8bf6355753d89904d4700df7c3eb769c7f83f6ebee14332cf5766b846tFt7mM6MtSuhnSFPpAABBqGv51DePKSsKv7gpBcn3Fus9NoGJSaZQy2UlAT1Z+Vd'),
(231, 47, 'Adhar Card', 'f38dec13a8d59e409cda77a24bf8b9b804cd99a1d7634e304810190bb53bca8d75b4acd77725983a9c4203750ba8e9f7dd37f92ceeb710643c0e573f3fb14b28xeZQp8Ny7I4TR33yA/0Em4ANAx6opHNI/XlFRS+is6SeeBcPJ9l6k4LJF2GE+UiD'),
(232, 47, 'Election/Voting Card', 'ed0bdad84415ffacdb32fc2c8702c8b08f4cf76b7778b72b5b44c813bdbbf641a5eca334fd11948af8f24a5e84e792cd291e5c3b8f6eb0e42cb87e6bbba43219Si12Cxns4NXM4RsXO1TeOtHNCrIkquu5JeGxrx9VQ6SlCPzj9h9rYPEQXs/67j6R'),
(233, 47, 'Election/Voting Card', '76863a9d5e587156291a261317c480293155b96df45948f0b5051c3524b4428b7c9e9dfed22aa50037faf3ab109ab2be444fefb086f0b43a4cca643fb9a9f81d2KsL/nkFY25sPdEK6+wZbn/huTUmfKgw2j4Sqql15iQeVTMSRKdE32FgeWprMxLp'),
(234, 47, 'Passport', '4d87678da9d15ea83c86ec618586e639193d0db9c3b252849b5739045fa5b1567283a5cf2728ccc486ecb6d33a12cdd2bad0ccb521f9b087672733ba5063f3d0bDBSTvG+dd8fE1ZFVarYoUX3QTGfbVvSKJMK7b2iwT1bjBk9sG5lBTmd5JjvYudo'),
(235, 47, 'Pan Card', '476fbca5911cba3e0f8161860a232984fb007a8e0078eea43fbcfa244e93a1cccb40a7e9916b4be54648a69a0269d7dc1bab0d50f4da130637f370af2bc741f8r7ecggAWGSb5iSu7xMbwp5YJRthjOg8CW1B5wsaO4VtUJM1QgPuZF5E4yiiqhlGf'),
(236, 47, 'Pan Card', 'f7be1a9c02882e00aa876ac8edde88b4e5e0432bd12bb2f1c4b30ce07467495982c945bdc1e37e680c9ea0a9aaaa211c262751a8a28c8b6a2fcc7775d50b3b21vtwTgxaYRa79GZ5oozWQPwn+wkqJAXfd9+XmoaSOpcKbi/LwSf26BquWzDcMJ/5q'),
(237, 48, 'Adhar Card', 'ded081d6921273b1647cc2fc3ec8b526407df908de7e00fe9035275a2f0269acd24110bfd6353536936882c85e4a5c08236d53a45c4d5272900413768053de9e5fGnBuMhJ0gASTYcPg6r3TaNYbH4Xc5lyBeJVe9L0PqG7iqAW1D+fCkGfFyuM+Gp'),
(238, 48, 'Adhar Card', '704630eab0f261971cc088d49fc4bd7a6f9d89ccd5d56ea4fced05bf14d1c005193ace0e015e3bc49071d7a5cf24a8ba5e2e77446d5dd78659ba2ef55b132118p9EE9LAuwHWrIKT0/+8Dew5YQFYvT9oKiLCSykfurNngRdEOOK/dmge3XOz9y+ki'),
(239, 48, 'Election/Voting Card', '0797d7c85d95ac490a72458130eb12c47f3d31e22a3a37a6066a5fae013e56c04b6da4231342f4646e3273dabc04c50ebaa29c194c97365dd9c347f007c84a570/yncJV816vlmsozxcntC4D+qQQBLfKD8ewuLSYh6SS5QasAQkM68Y8bgsgWY80/'),
(240, 48, 'Election/Voting Card', '36bc65d1ba45483409df1bbbbd594c0c0668d1ba2497d36511e60131c2b2942eb09e73c8ed4f8184f3e42c5b3dc6a1d2e72872d53e98f319d43ea9b49eeade8blXrxAAPBdg1NnfEaPFz+wVsnws1eGUqkmWsmtJpOsehPZAxReb/1kp71L4AZo+BO'),
(241, 48, 'Passport', 'ff470dbdd81e57c764846ce0c761a4b35679317076d7d11a846ec15567503ec580374c50ba5e9738dbfec9d6e44d6d80c6dcbad1b01d477c3ee47d599074dcacFzSuuSv1hT4kq3qJNdNd+h47OrAHJjbbPO2xeTworOhDngGZyzRay4ExBVmphZCv'),
(242, 48, 'Pan Card', '7d419f8962bb85512127f3a7bac0976f02a33cc84284f2c4854e8daca22da8028933977d1944139dda803ee1c4d28066c8374aa79e97d962ea22bd518dbeca954dyAG9aEwiZkMLXPNytEXBmAjU0F6RoTSRnjzwSwC2AO4bX/KRPZ+wDF2Bnafzvw'),
(243, 48, 'Pan Card', '5114195ca588825cfc570e8692c2d186f7af9525015b2afeae95a25224903c6b36eff4864becc41b5f03472446612ab9cb2b619832ba84ebe0c12170181730ffw1FWJ7nkL0EJkQ0FdC0H6Va3DLOpXZvqFbrhmZ0Kuf5Tdmf7HD10rHO1k5fIu00Q'),
(244, 49, 'Adhar Card', '51076e1c796158c41b1decbce236d99c5690ed612e1afa44ec53ebbe73eccbb0a4458dad88df40b640c4d04af82936544c8c7dab2a6a0e60f7f1f5ffd0648ad6SG9+ozUlHznlen7T/aQEJ0Ix43x8nwoKQpe+UICt2HXSdqfZRH1Gdl2/SphVsUFz'),
(245, 49, 'Adhar Card', '69eb4683b3397aee5d0811fd84ef8c718982a2a2bcf0683a0ee706f30006b26a47bc5a1f5f192052f758c8b93fc5bd49826e68dd41b2891275ebe7a34088ac42qtTkzlhuzlaEO0mLEgNsp5yeVXEDuawz4uohytABvoT4Hc1AQTxyqdIz2J42ITC0'),
(246, 49, 'Election/Voting Card', '8847e9769ce1ebfd156520ee6231368191ca414146eaec4b52631ddf4d1a2a0b18bdd2d962f7108c51e88fc92aa89ea6dc9d5fb05d92a7b17a537bc4fa4572ec2MvwtfDJC3DX4flzQwhWQTok8+9e5RuSZAY7rbPpf1AU0pt5XYJSW95hqlS7mg0e'),
(247, 49, 'Election/Voting Card', 'b05dc311d1e555236f4b272d6fe5c5e267db5b77481da8cd7265656c12f63d54689fa148fcc57a06cdd43952568762a05210feca20663fb2ec82fd3e4b4f8c2bGzvNdoEd8a3tm6fX6rKsNTDphJykkLSYRYWuDypVmW1tfyNqSOu00odv5/06XrYl'),
(248, 49, 'Passport', 'a30844140d709547b80a2355f64b525c3ba1dcecc9a3a4d290761bc094c53363bcec3c75ef27d5fd27b076ff17ce719acff08e0a23b837f1c068a989faf94c08x5FSSkFZ+qjq5luAOu73yDuTjCbZbPAVQsybGkwhQVFta36DRJDx/WkFXEl/E7iY'),
(249, 49, 'Pan Card', 'c69d62925da0ca0e90a6caecef6cc9c2a01d8937ddbe8b37c6e2093df5648ed50ffb5a50a524d5bb5d53f4e15c96ce584b786e140ccd39b3d03dbe241f53620azTIEheJJeuprIgn6gisHMO5uNJnKaiuI24/OeAmTnYPm+Rf4CodHbGja9pANzIa4'),
(250, 49, 'Pan Card', '0696e659439c97b43609ea339ae69579f744fd07098613d20afe85c026bd742b39e765ac4e2f59e4d7e38de4f63bf1ca8e7e28ce562d29cec71c616f751292e95D++dvJkUkOLU2bxT3gdkzNwJP974xr9ArqYznEQuBduEJI7Pj2HSZoz7+6YuiZ5'),
(251, 50, 'Adhar Card', 'bab897ad74f78c04b6942a7a80f19907c1c27da87ce99ab3038c8c14bc560aa9a667cae93db6aab7f06fe8f9a88e3a137846e8a1d07a0ffbd657af6e4994e12cIX5dhM7LWpY9kzE8jEgC2V9VOue8YTjiP2pUzR2MLTZ99FiF2wTaxi07L27Z5oIX'),
(252, 50, 'Adhar Card', '0115731b237d755f7000ba082f8b4e72ac085d40904a83f5ec184dabef8c8f6a844f2a75f1d183f41b11471c71b3efba211fc6eb8269fe14415717441e11094bjg9iTE7rTJ5z/Pkycknm38fWAGHSc8ADP3wOAeRAE0VIeyyhdBiwLXGJuAJLf9jc'),
(253, 50, 'Election/Voting Card', '36a6d98a84a4f34e227a538ee90cfaa46c6a5a66da3e7c59ddbf6c6599cde3a888086ce8b5efa564aa694e3337784329f2beec6c401ab3550748d22a41f528da5txiDIqx2suY96eUDIasTslPr5P8kcfiNLWt+buyU+AcvMbsjXYsi02Cih/Sm+sM'),
(254, 50, 'Election/Voting Card', 'b817a9974a5519d50c604d69b24dec95a4d291e647920e14175c3166793f2b1efb9a492518fe698bd52b1d23d4a9c2bfd7fbdf5e32e95a29de5b215d8d42229fo0t+C7M4BeYBVt9Lpm4qX3wyKGqBPkRqDE/8gL3ZRgfykDrrSGJc7ws1JlHQxdHe'),
(255, 50, 'Passport', '6701713cf97b999ce77727d36e62dd84917079da54fa19962864e3c5a348538632e706fa99be7abe9cf3eeeee29a10564d09759a34db6bcb6ca4b26b2c3749d1IwZYQo7rzvNhJJx6JadYz1gc59UeH7HwoncDrVHvEssPgWOHCifrG+E3IuKDYYsR'),
(256, 50, 'Pan Card', '97c713bfcdb67d3ea57adae9f8006f4a9174babca5562da6be309ed43590bc09fe23d2f71b0264cc6f6a7d2e3af7c70b42870cecdfc0041c0d640fd66d119bcacX+sjFQ63Ocp5zaJOmlBtEzvIKfD2W0l9tsrEzvy5yc/3VvCw1DN5H0m4A1XKb9y'),
(257, 50, 'Pan Card', '8c73aa1aedf8f49a06af90bff2e3f1347735266acae99aaeb4132d1f92d82c2b1c4f14002d879e08149a47aaef3f975d2a3b781039cdb9861f70f4a10c023e88sdeOp09J+T13J6JBmOGtOF61s3hhcaO+fgiGgVGmUMpSqQlsmXUKoixT4McF/87m'),
(258, 51, 'Adhar Card', '6cac4b0a4a03c26545aee6bb47671939c83ac8f353499abe29a7153caf3355f54f74af0b9b31d59a0dbcb3f1b4a99be51616031ca2a160d4616ff0a66072c02d7GphS/q+0je8sbKCjzdeqhIRQF5kLnh44UsszToqqdac05JY+8jkUpLukFa0QVX/'),
(259, 51, 'Adhar Card', 'af252b8af47edaf71731c60862e46ad6d1a64d0f5cf3ddebe56a0fee280cdba01929e9b1bae631276641e8a7f0b87c5afc0f35350408e935b394a1cb2f399816hrqsrUQ9ltql8Ohb56n2Rp1Ifg1tjvrWr1/ySlKV0cd/cqrz7tGC408ILHeJuprZ'),
(260, 51, 'Election/Voting Card', '7bd677f99a6519af2fecde44d3970ab7e50af7f1dbb22babec413b23fead728ff872ecca183deba78d4b80bfe9a91857bdf69097399b57b64a2f02a35ce17eb2i1FJVDd4DhSndjeo7JGRe1UdbNAC+BIBmZSw9dqEiHnuasnHxIEv+sNmgmNOB1Dj'),
(261, 51, 'Election/Voting Card', '7cceb64208d96cda4079113d645600f3da81921c22e15ecbc68c78fbe3a074931d93b8867efe446f2ec6e4c7af7eac26cb283a9a7423d4e3b23497f61f580fb9qz0ywdihNPPJbjsJLb3QyLiBN94UVdiECg0g98Vbo5EpGwQr3fxv61fJTIMlBruV'),
(262, 51, 'Passport', '0aa582a438978735046f1037e3bc499d90f5eda73b85425665978dbfdc1198af2c0d661892b78b7c32ff2d78e27c2497c0c65e3b628354555d2aeee2455c3aceYsodADTFm145yqSF4blAlyIk8Mj9cLJVic+d+eEJsuXRI53z7k9EY1JJX4MXvIof'),
(263, 51, 'Pan Card', '504e243dab838294331f4017960ddaf5b8203196ccbd7bb8bdb456a6f39408ceb7784f26a2b0166e29e18115f490de43b53f16f85c3a168e5d1570144df70730v0PmCwT5xtbg5xLIn95X5HKc70naZcI1wNaOrWpid/hJ+F6qlOIZ/8Xt40czz8xw'),
(264, 51, 'Pan Card', '429fb07e58259f3086ade496322026f8a1b31075c3b9a6ab36d1fbb9efe2f3545ac4e2ca006f60a87205c2c891edeecda8f9561498181d8d40459538d6b24135U0f7XN15VZcMMHKUwMdlIi/KP3ezz5fX33W76bArSoGlIAYHIjaEr0Fap5eat4np'),
(265, 52, 'Adhar Card', '7ba658fef6ba48957bed41a67e5a4599e33c09f3ff23e191897c8ed5e32117931d9ea90942bb55a84cf9f9e8acb5586a6c1a3422e6d5f398fe2b8ffc807a082cQzfI34VfFkqFGAU8L2xHZDClLr/rRe38B1j3DWIcN2cOksHOx1TB5x7TJ5FBEDhG'),
(266, 52, 'Adhar Card', '7b07c4dcff970968b0b41e758ab70a793dfafcf42a93824d2eb8e4a589c3d254a7d3d7e6dc2267bc26db02be7900090191bbe57f21edcfe9a792896169ebd11fVX0hEdbjTCRbiurQINrDnmI1FPoDtFuDgW2sKQBensDh1qnu3Axxgfw+rAEOrwD8'),
(267, 52, 'Election/Voting Card', '917aeaed1e32a9f638c425ce3534b8384e78bcc6f288f9d08391870d130820c008a18678cb931c520a538f375cb95116595d8202becb6a27afa7accd2c8908a6CZmJKyTaW/TtCVCEDgbEu3WDmY3INc54VBHGYBYXfWVKyt6nI0UNgR3wM6Swvbto'),
(268, 52, 'Election/Voting Card', 'b4fbce056b56a59afe6fa300144bf611f2f4b517ba9f6b0e6c1830cbb237f3f86aac346b0b30921c05b87e62c398f5fd01603b1cc0c416fdcb6df3ca0b49dc5dvqL4hotUbojIzunokfT8lYoBqNQHQqeqGOBJFwrU5CUpmq8kMSkDAGcPM32lcDVM'),
(269, 52, 'Pan Card', '7584cecf9a3f19dd62ad0da7d74ef6c99966e39186a085a3f271db44ed678f474605ba6beaf4755ffd38dc5bade32cb31b66ff32d0cfb46bf395ea20144ff6a6kwaobLvn8XfDNLsY34GkW5xAy2ahVFVFgLbTvVvX4wZReYqaJS6rxljsdwdHjvRR'),
(270, 52, 'Pan Card', 'c04cd29972dbfeca5f664f450ef46fa00e0c2e9f75af3e6bd57de3070ce4f5ed51b8d42169bdd199ae95e6f8b0c43e417fb98aa7cc7856dd2e176720323a136eSAIsmdIGs/fonQdX8JidqC+Zt/06NvW+ywterLEj7FIX8eWmThczV2Bopqf3/oN5'),
(271, 52, 'Passport', 'ba33c001df8081e19cd21ed2e56dd0ebb6975406d4bcf0d8c8e296019ba860aa2ddc65eeb5f5e1d436d57d4d62d7914d0850eb14213f7c8299fe04ef3d80435ehUtUO3+u90VrS3X8sFyp4LEEZLotfIfCo2AS69opL6tPUbrwqcKnLVx4ms9l9KnY'),
(272, 79, 'Adhar Card', 'c2b4ebe9e77697a7f4191ad35907b0d994d5f90d06981d112e6a5d15a25854a4bf7bb6500dbc8c06b07f2cf495726c553e885750c0f7a49624652ba582770792RAHqHFxEqmUGVNnMSamhJuPDOBpKOwuDrO3WNzW5rJl+0lvEJzAamChAc7vYybQ0'),
(273, 79, 'Adhar Card', '9d670828da9459cb69da2e82cafb8171b273eb35ebfb847284742676c2d6cea34c05d2414c908d566f7a19945532b6c49dd698d5de86d62a3f249e10e16f2d66qrJcX4rsvaGlCbr/yjAUhAxwfGCRsIe815X4OybYcV68ADGrSH5H0qWCN7zj0vDW'),
(274, 1, 'Adhar Card', '777a25743a14feddca52d829d0fff1392884045a5c47bf1c72cead0120dad6acfca10fce16926cee7e83770426afa48a7bd5619e6656de648f3e97d89a5b5616yc0a8Yr9nmR0DQ+kLqQiC3NMYOAdlkkCL1aUoj5/0btCj2T8jJzyYyBkx6TTUSAa'),
(275, 1, 'Adhar Card', '9f4737c51403c006b0190698e0c8127cafd96ca9ec0dd0547bf4f507153eb2438e6c1bf1894751cc54603721ecfac667e1d3540db232cf3d69924057294f401eyDgQQG1fftk9JDFE0NNgPhzlI7uEPQ8EbWAThF6bmRZ2obXGhkgPoEm7pzt25XES'),
(276, 88, 'Adhar Card', '18a96e76fa00ac2d9d8cb49b5931954416e76373c93cf80d4d5e1e45f796bfb7bc1dfb9ea4b450e2982509c93e95b59734f507f28920099f3091fd9583c3220655BpVmfJ1JcgjMX2QelkJAlwXqRUxrZ5584cdOzzWDNf1TwjueRviKeal3Yax/0R'),
(277, 88, 'Adhar Card', '528a71bf124a22c0c6bd32c603fcd6ee3b20037ef9cdc11fe3f718c3d9758b138409bff580e8f4c99424d6dd5c8c19dd74d45d808840980af04757de10a6da96q2KMpDhLfmFSFfLDl8zmZTB4jXD15nvlaZbf85Lnld+63rfPVs2zqHu5mPwTw6tf'),
(278, 88, 'Election/Voting Card', '52b5ab45f72fde2e7e00ab27b8e9b46132118d693808066cc4cd8ef6e049e04d5b21370535055f431fd64f4a53d1f932ab79014b7e97fd3fc014e036670603506Qu6BEATKatvqCmRoL4G9ywl1SBvj0ZpBkfMgtAe78BSIRxLNDzZmxAV3/OionOO'),
(279, 88, 'Election/Voting Card', 'a576be4e367b4127c1d551eabcb56b320db94a6286f6495c073b3b4faa3110970236bce9a4c72203efdd940155436f2d9ff81037b2953c7c72a2c835399fd07avoYfdSIVVLp+RDDSGNAQJsdEdfVewJ2fB9tR9M/aqbZV17QuLmY88FAfZAAaWreb'),
(280, 88, 'Passport', '04e12ab92fa3a8b61db6e458b95b51bc8c9d3cdfb1c61521c3695740d918b1e9651168092f6ee75b9fb3d28cff1e858182dab113e3a87e79a7f285f3a0fc8ea9XNyy8bn64o3QsCnfutqwgLDKdcrjU3gbT3OtOup1r7+Q7e68Ck0Kdar1uHaPRcnN'),
(281, 88, 'Pan Card', '05e9f311e22fded31eca7b837b75ae735ccfa22b9bc995b5a97ce8555a588fe35e88b1e891d7fe9b7309180fc38296b5f26fc52a2796b88e1edc384133f4b8774CLgVb6MCCZ2cyvtKwvthi6nk2NiPLLCzrDA4lcRfdyZt+W+esUYJ7tjOAumXZq3'),
(282, 88, 'Pan Card', '38bbff8dc156b4d10a7fba5f9ada0def3fbb5942ad44cb4f65611cb1bf3db47aba3ac0f9c853175c3e51174873f021c5edcd842ab96a2b1491c0c94a966d7141xEBi4+gYkIEC2IHCI16OIdkWV+y9OtKBrDOYkmdIwGkDvRQqPusj3AlLfWVojfYu'),
(283, 88, 'Pan Card', 'd86e3d49fd4debad5bd8f87094d7b52891effffdc5631347b3e5c04fdd9700eb56875689b382d3b5e688ac57d405fe40c375fca9a8a856c568df3256a502ef61cdCpWL0o//SD9yUu5FPxrlMH03PJKklIxU5NhJX7hc5nKeZ4OMT9xSyvx0Jd6xNx'),
(284, 89, 'Driving Licence', '2f2a9f079b14d81d2b506a4ae1fa229f907742014024df0d55f0462e2fa2fa36aa917ad8511eab0c3167fc392b5f6ea7d9d187623d30b399c6c56436c5db9bbazjiFXae56v0sKrsqzrr0urWujMBTckDD+aJFE6hYniboqyWGSGhUASV6X3vD9x+A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `l_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`l_id`, `name`, `parent_id`, `label`) VALUES
(244, 'Gujarat', 0, 'state'),
(361, 'Ahmedabad', 244, 'city'),
(362, 'Surat', 244, 'city'),
(363, 'Vadodara', 244, 'city'),
(364, 'Rajkot', 244, 'city'),
(365, 'Bhavnagar', 244, 'city'),
(366, 'Jamnagar', 244, 'city'),
(367, 'Junagadh', 244, 'city'),
(368, 'Anand', 244, 'city'),
(369, 'Navsari', 244, 'city'),
(370, 'Surendranagar', 244, 'city'),
(371, 'Morbi', 244, 'city'),
(1782, 'Bayad', 361, 'area'),
(1783, 'Bagodra', 361, 'area'),
(1784, 'Changodar', 361, 'area'),
(1785, 'Chekhla', 361, 'area'),
(1786, 'Bodakdev', 361, 'area'),
(1787, 'Amraiwadi', 361, 'area'),
(1788, 'Bhat', 361, 'area'),
(1789, 'Chanakyapuri', 361, 'area'),
(1790, 'Dholera', 361, 'area'),
(1791, 'Gurukul', 361, 'area'),
(1792, 'Hansol', 361, 'area'),
(1793, 'Kadi', 361, 'area'),
(1794, 'Isanpur', 361, 'area'),
(1795, 'Kamiyala', 361, 'area'),
(1796, 'Manipur', 361, 'area'),
(1797, 'Mumatpura', 361, 'area'),
(1798, 'Aslali', 361, 'area'),
(1799, 'Ambli', 361, 'area'),
(1800, 'CG Road', 361, 'area'),
(1801, 'Chandkheda', 361, 'area'),
(1802, 'Lambha', 361, 'area'),
(1803, 'Shela', 361, 'area'),
(1805, 'Satellite', 361, 'area'),
(1806, 'Bopal', 361, 'area'),
(1807, 'SG Highway', 361, 'area'),
(1808, 'Prahlad Nagar', 361, 'area'),
(1809, 'Gota', 361, 'area'),
(1810, 'Thaltej', 361, 'area'),
(1811, 'Mani Nagar', 361, 'area'),
(1812, 'Dholka', 361, 'area'),
(1813, 'Kheda', 361, 'area'),
(1814, 'Mankol', 361, 'area'),
(1815, 'Odhav', 361, 'area'),
(1816, 'Vastrapur', 361, 'area'),
(1817, 'Shilaj', 361, 'area'),
(1818, 'Visalpur', 361, 'area'),
(1819, 'Mandal', 361, 'area'),
(1820, 'Naryanpura', 361, 'area'),
(1821, 'Adajan', 362, 'area'),
(1822, 'Althan', 362, 'area'),
(1823, 'Amroli', 362, 'area'),
(1824, 'Anand Mahal Road', 362, 'area'),
(1825, 'Athwalines', 362, 'area'),
(1826, 'Bamroligam', 362, 'area'),
(1827, 'Bardoli', 362, 'area'),
(1828, 'Begampura', 362, 'area'),
(1829, 'Bhatar', 362, 'area'),
(1830, 'Bhestan', 362, 'area'),
(1831, 'Bhimrad', 362, 'area'),
(1832, 'Canal Road', 362, 'area'),
(1833, 'Chowk Bazar', 362, 'area'),
(1834, 'City Light', 362, 'area'),
(1835, 'Dabholi', 362, 'area'),
(1836, ' Dahin Nagar', 362, 'area'),
(1837, 'Dindoli', 362, 'area'),
(1838, 'Dumas', 362, 'area'),
(1839, 'Ghod Dod Road', 362, 'area'),
(1840, 'Godadara', 362, 'area'),
(1841, 'Gopipura', 362, 'area'),
(1842, 'Gothan', 362, 'area'),
(1843, 'Haripura', 362, 'area'),
(1844, 'Hazira', 362, 'area'),
(1845, 'Hazira  Adajan Road', 362, 'area'),
(1846, 'Ichchhapor', 362, 'area'),
(1847, 'Jahangir Pura', 362, 'area'),
(1848, 'Jahangirabad', 362, 'area'),
(1849, 'Kadodara', 362, 'area'),
(1850, 'Kadodara Nagar', 362, 'area'),
(1851, 'Kamrej', 362, 'area'),
(1852, 'Kapodra', 362, 'area'),
(1853, 'Karamala', 362, 'area'),
(1854, 'Katargam', 362, 'area'),
(1855, 'Kharwar Nagar', 362, 'area'),
(1856, 'Khodiyar Nagar', 362, 'area'),
(1857, 'Kim', 362, 'area'),
(1858, 'Kosamba', 362, 'area'),
(1859, 'Kumbharia Gam', 362, 'area'),
(1860, 'Laskana', 362, 'area'),
(1861, 'Limbayat', 362, 'area'),
(1862, 'Limla', 362, 'area'),
(1863, 'Magob', 362, 'area'),
(1864, 'Mahadev Nagar', 362, 'area'),
(1865, 'Mahindra Pur', 362, 'area'),
(1866, ' Mahuva', 362, 'area'),
(1867, 'Majura Gate', 362, 'area'),
(1868, 'Mandvi', 362, 'area'),
(1869, 'Maroli', 362, 'area'),
(1870, 'Mora Bhagal', 362, 'area'),
(1871, 'Rander', 362, 'area'),
(1872, 'Punagam', 362, 'area'),
(1873, ' Piplod', 362, 'area'),
(1874, 'Patel Nagar', 362, 'area'),
(1875, 'Pasodara', 362, 'area'),
(1876, 'Parvat Patiya', 362, 'area'),
(1877, 'Parvat Gam', 362, 'area'),
(1878, ' Pankaj Nagar', 362, 'area'),
(1879, ' Pandesara', 362, 'area'),
(1880, ' Palsana', 362, 'area'),
(1881, 'Palanpur Jakatnaka', 362, 'area'),
(1882, 'Palanpur Gam', 362, 'area'),
(1883, 'Pal Gam', 362, 'area'),
(1884, ' Olpad', 362, 'area'),
(1885, 'New City Light Road', 362, 'area'),
(1886, 'New City Light', 362, 'area'),
(1887, 'Navsari Road', 362, 'area'),
(1888, 'Navagam', 362, 'area'),
(1889, 'Narthan', 362, 'area'),
(1890, 'Narotam Nagar', 362, 'area'),
(1891, 'Nanpura', 362, 'area'),
(1892, 'Nanavat', 362, 'area'),
(1893, 'Nana Varachha', 362, 'area'),
(1894, ' Mughal Sarai', 362, 'area'),
(1895, 'Mota Varachha', 362, 'area'),
(1896, 'Mota', 362, 'area'),
(1897, 'Rander Road', 362, 'area'),
(1898, 'Rustampura', 362, 'area'),
(1899, 'Sachin', 362, 'area'),
(1900, 'Sagrampura', 362, 'area'),
(1901, 'Salabatpura', 362, 'area'),
(1902, 'Saniya Hemad', 362, 'area'),
(1903, 'Saroli', 362, 'area'),
(1904, 'Sayan', 362, 'area'),
(1905, 'Shahpore', 362, 'area'),
(1906, 'Shakti Nagar', 362, 'area'),
(1907, 'Sima Nagar', 362, 'area'),
(1908, 'Subhash Nagar', 362, 'area'),
(1909, 'Surat Dumas Road', 362, 'area'),
(1910, 'Tadwadi', 362, 'area'),
(1911, 'Udhna', 362, 'area'),
(1912, 'Umarwada', 362, 'area'),
(1913, 'Uttran', 362, 'area'),
(1914, 'Varachha', 362, 'area'),
(1915, 'Vareli', 362, 'area'),
(1916, 'Vesu', 362, 'area'),
(1917, 'Vidhey Nagar', 362, 'area'),
(1918, 'VIP Road', 362, 'area'),
(1919, 'Vishal Nagar', 362, 'area'),
(1920, 'Vishnu Nagar', 362, 'area'),
(1921, 'Ampad', 363, 'area'),
(1922, 'Akota', 363, 'area'),
(1923, 'Alkapuri', 363, 'area'),
(1924, 'Atladara', 363, 'area'),
(1925, 'Bhayli', 363, 'area'),
(1926, 'Dabhoi', 363, 'area'),
(1927, 'Gotri Road', 363, 'area'),
(1928, 'Harni', 363, 'area'),
(1929, 'Kalali', 363, 'area'),
(1930, 'Kevdabaug', 363, 'area'),
(1931, 'Makarpura', 363, 'area'),
(1932, 'Navapura', 363, 'area'),
(1933, 'Padra', 363, 'area'),
(1934, 'Ratanpur', 363, 'area'),
(1935, 'Sama', 363, 'area'),
(1936, 'Sangma', 363, 'area'),
(1937, 'Sayajipura', 363, 'area'),
(1938, 'Sevasi', 363, 'area'),
(1939, 'Tandalja', 363, 'area'),
(1940, 'Undera', 363, 'area'),
(1941, 'Vasana Bhayli Road', 363, 'area'),
(1942, 'Vasna Road', 363, 'area'),
(1943, 'Waghodia', 363, 'area'),
(1944, 'Abrampura', 363, 'area'),
(1945, 'Ankodiya', 363, 'area'),
(1946, 'Bill', 363, 'area'),
(1947, 'Chhani', 363, 'area'),
(1948, 'Diwalipura', 363, 'area'),
(1949, 'Gokul Nagar', 363, 'area'),
(1950, 'Gorwa', 363, 'area'),
(1951, 'Gotri', 363, 'area'),
(1952, 'Halol', 363, 'area'),
(1953, 'Haripura', 363, 'area'),
(1954, 'Karadiya', 363, 'area'),
(1955, 'Karelibagh', 363, 'area'),
(1956, 'Laxmipura', 363, 'area'),
(1957, 'Madhavpura', 363, 'area'),
(1958, 'Manjalpur', 363, 'area'),
(1959, 'Maretha', 363, 'area'),
(1960, 'Nimeta', 363, 'area'),
(1961, 'Rayan Talavadi', 363, 'area'),
(1962, 'Tarsali', 363, 'area'),
(1963, 'Avadh Road', 364, 'area'),
(1964, 'Bhakti Nagar', 364, 'area'),
(1965, 'Canal Road', 364, 'area'),
(1966, 'Dhebhar road', 364, 'area'),
(1967, 'Everest', 364, 'area'),
(1968, 'Gavliwad', 364, 'area'),
(1969, 'Jamnagar Road', 364, 'area'),
(1970, 'Kalawad Road', 364, 'area'),
(1971, 'Lakshmiwadi', 364, 'area'),
(1972, 'Metoda', 364, 'area'),
(1973, 'Near Sterling Hospital', 364, 'area'),
(1974, ' Phulchhab Chowk', 364, 'area'),
(1975, 'Rajputpara', 364, 'area'),
(1976, ' Vijay Plot', 364, 'area'),
(1977, ' Sant Kabir Main Road', 364, 'area'),
(1978, 'Taraghadi', 364, 'area'),
(1979, 'Yagnik Rd', 364, 'area'),
(1980, 'Rajkot Bus Station', 364, 'area'),
(1981, 'Sterling', 364, 'area'),
(1982, 'Raiya Road', 364, 'area'),
(1983, 'Alang Ship Yard', 365, 'area'),
(1984, 'Budhel', 365, 'area'),
(1985, 'Chitra Gujarat Industrial Development Corporation', 364, 'area'),
(1986, 'City Center', 365, 'area'),
(1987, 'Dabgar Street', 365, 'area'),
(1988, 'Hill Drive', 365, 'area'),
(1989, ' Jail Road', 365, 'area'),
(1990, ' Kalubha Road', 365, 'area'),
(1991, 'Madhuban', 365, 'area'),
(1992, 'Nilambaug', 365, 'area'),
(1993, ' Panwadi', 365, 'area'),
(1994, 'Nilambag Palace Hotel', 365, 'area'),
(1995, 'St Station Rd', 365, 'area'),
(1996, 'Takhteshwar Plots', 365, 'area'),
(1997, 'Vithalwadi', 365, 'area'),
(1998, 'Vidhyanagar', 365, 'area'),
(1999, 'Waghawadi Road', 365, 'area'),
(2000, ' Airport Road', 366, 'area'),
(2001, 'Bedi Gate Road', 366, 'area'),
(2002, 'Bedi Road', 366, 'area'),
(2003, 'Corporation Bank', 366, 'area'),
(2004, 'Digjam Circle', 366, 'area'),
(2005, 'Hotel Asha', 366, 'area'),
(2006, 'Indradeep Society', 366, 'area'),
(2007, ' Indira Marg', 366, 'area'),
(2008, ' Indira Gandhi Marg', 366, 'area'),
(2009, 'Jamnagar Airport', 366, 'area'),
(2010, 'Jamnagar Bypass Road', 366, 'area'),
(2011, 'Kadiawad', 366, 'area'),
(2012, ' Khodiyar Colony', 366, 'area'),
(2013, 'Motikhavdi', 366, 'area'),
(2014, 'Mohan Nagar', 366, 'area'),
(2015, 'New Super Market', 366, 'area'),
(2016, 'Patrakar Colony', 366, 'area'),
(2017, 'Reliance Road', 366, 'area'),
(2018, 'Summair Club Road', 366, 'area'),
(2019, 'Tin Batti', 366, 'area'),
(2020, ' Town Hall', 366, 'area'),
(2021, 'Patel Colony', 366, 'area'),
(2022, 'Bhalgam', 367, 'area'),
(2023, 'Bhesan', 367, 'area'),
(2024, 'Choki', 367, 'area'),
(2025, 'Dolatpara', 367, 'area'),
(2026, 'Gandhi Gram', 367, 'area'),
(2027, 'Green City', 367, 'area'),
(2028, 'Hariom Nagar', 367, 'area'),
(2029, 'Kadiyavad', 367, 'area'),
(2030, 'Keshod', 367, 'area'),
(2031, 'Kodinar', 367, 'area'),
(2032, 'Majevadi', 367, 'area'),
(2033, ' Manavadar', 367, 'area'),
(2034, 'Mendarda', 367, 'area'),
(2035, ' Moti Palace', 367, 'area'),
(2036, 'Ramnagar Society', 367, 'area'),
(2037, 'Sasan Gir', 367, 'area'),
(2038, 'Shashikunj', 367, 'area'),
(2039, 'Talala', 367, 'area'),
(2040, 'Vanthali Junagadh Road', 367, 'area'),
(2041, 'Visavadar', 367, 'area'),
(2042, 'Zanzarda', 367, 'area'),
(2043, 'Zanzarda road', 367, 'area'),
(2044, ' Anand', 368, 'area'),
(2045, ' Ganesh Chokdi', 368, 'area'),
(2046, ' Ismaile Nagar', 368, 'area'),
(2047, 'Khwaja Nagar', 368, 'area'),
(2048, 'Laksh Prime', 368, 'area'),
(2049, ' Mahadev Char Rasta', 368, 'area'),
(2050, 'Nandanvan Society', 368, 'area'),
(2051, 'Old Bus Stand', 368, 'area'),
(2052, 'Palavasna Circle', 368, 'area'),
(2053, 'Rahtlav', 368, 'area'),
(2054, 'RAILWAY STATION', 368, 'area'),
(2055, ' Rahtlav', 368, 'area'),
(2056, 'Shastri Street', 368, 'area'),
(2057, 'Sardar Ganj', 368, 'area'),
(2058, 'Town Hall', 368, 'area'),
(2059, 'vandematram k dip complex', 368, 'area'),
(2060, 'Vithal Udyognagar', 368, 'area'),
(2061, 'Amalsad', 369, 'area'),
(2062, 'Antalia', 369, 'area'),
(2063, 'Bilimora', 369, 'area'),
(2064, 'Chhapra', 369, 'area'),
(2065, 'Chikhli', 369, 'area'),
(2066, 'Dudhia Talav', 369, 'area'),
(2067, 'Endhal', 369, 'area'),
(2068, 'Gandevi Road', 369, 'area'),
(2069, 'Italva', 369, 'area'),
(2070, 'Kabilpore', 369, 'area'),
(2071, 'Lunsikui', 369, 'area'),
(2072, 'Maroli', 369, 'area'),
(2073, 'Navsari', 369, 'area'),
(2074, 'Parujan', 369, 'area'),
(2075, 'Rangoon Nagar', 369, 'area'),
(2076, 'Vesma', 369, 'area'),
(2077, 'Sisodra', 369, 'area'),
(2078, 'Viraval', 369, 'area'),
(2079, 'Alkapuri', 370, 'area'),
(2080, ' Bus Stand Area', 370, 'area'),
(2081, 'Sayla', 370, 'area'),
(2082, 'Sudamda Road', 370, 'area'),
(2083, 'Thoriyali', 370, 'area'),
(2084, ' Gujarat', 370, 'area'),
(2085, 'Honest Restaurant', 370, 'area'),
(2086, 'Muli', 370, 'area'),
(2087, 'Main Road', 370, 'area'),
(2088, 'Nr Malvan Cross Road', 370, 'area'),
(2089, 'Rafaleshwar', 371, 'area'),
(2090, 'Bridgewater', 371, 'area'),
(2091, 'Sanala', 371, 'area'),
(2092, 'Dhuva', 371, 'area'),
(2093, 'Waghpara', 371, 'area'),
(2094, 'Jambudiya', 371, 'area'),
(2095, 'Khakhariya', 371, 'area'),
(2096, 'Lalpar', 371, 'area'),
(2097, ' Morbi', 371, 'area'),
(2098, 'Old Ghuntu Road', 371, 'area'),
(2099, 'Wankaner Village Road', 371, 'area'),
(2100, 'Rajasthan', 0, 'state');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `news` varchar(2000) NOT NULL,
  `news_path` varchar(2000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `name`, `news`, `news_path`, `date`, `status`) VALUES
(3, 'Budget 2018', 'The Union Budget 2018-19 will be presented by Finance Minister Arun Jaitley in Parliament on February 1 in what will be the final full budget of this NDA government before the Lok Sabha polls in 2019.', 'news/photo_0.jpg', '28-Feb-2018', 0),
(7, 'Gujarat civic poll results', '“The results are below expectation in district and taluka panchayats and we will analyse where we have made mistakes and try to resolve the same. With very short time for campaigning, the party successfully won all six municipal corporations of the state. We were not successful in rural areas, but we’ll continue our progress agenda across the state,” she added.\r\nPatel also said she had advised party workers to go to rural areas where the BJP has lost and work more aggressively for the betterment of locals.\r\nAn ecstatic Ahmed Patel, Congress president Sonia Gandhi’s political secretary, who also hails from Gujarat, tweeted: “My sincere gratitude to the people of Gujarat. These results indicate the BJP govt is on its way out in 2017. Their anti-poor policies have taken a toll on people #GujaratResults.”\r\nPatel went onto say, “The BJP govt has also paid a heavy price for its vindictive attitude and witch hunt towards agitators.” All India Congress Committee general secretary Gurudas Kamat said the BJP witnessed a “complete rout” in areas represented by the Prime Minister, BJP veteran L K Advani as also Chief Minister Anandiben Patel, BJP chief Amit Shah and state Home Minister and state Finance Minister.', 'news/photo_3.jpg', '28-March-2018', 0),
(8, 'PNB Fraud Gets Bigger', 'Punjab National Bank or PNB, which earlier this month announced detection of an alleged fraud worth an estimated Rs. 11,400 crore at one of its Mumbai branches, on Monday said the amount of the scam could go up by Rs. 1,300 crore. That would make the PNB scam to be worth Rs. 12,700 crore. At Rs. 11,400 crore, the PNB scam is already one of the biggest in the country\'s banking system. The bank also referred to its filing made on February 14 when it first disclosed the fraud and at that time, the \"fraudulent and unauthorised transactions\" was estimated at $1.77 billion (about Rs. 11,400 crore). PNB shares slumped over 7 per cent to fresh 52-week low of Rs. 102.10 in early trade today.\r\n', 'news/photo_7.jpg', '28-Feb-2018', 0),
(9, 'Politics', 'Firstpost provides the latest politics news india, today\'s politics news, current affairs politics, indian politics news india, top politics news, latest news in indian politics.', 'news/photo_8.jpg', '12-Mar-2018', 0),
(10, 'Stop Attacks on Opposition', 'The bypolls were necessitated after Uttar Pradesh Chief Minister Yogi Adityanath and Deputy Chief Minister Keshav Prasad Maurya vacated the Gorakhpur and Phulpur Lok Sabha seats, respectively following their election to the state legislative council.', 'news/photo_9.jpg', '12-Mar-2018', 0),
(11, 'Modi, Macron inaugurate UP\'s biggest solar power plant', 'The prime minister and the French president pressed a button to energise the solar panels and dedicated the 75 MW facility to the people.', 'news/photo_10.jpg', '12-Mar-2018', 0),
(12, 'Rajya Sabha polls', 'Rashtriya Janata Dal (RJD) candidates Manoj Jha and Ashfaque Karim on Monday filed nomination papers for the biennial elections to the Rajya Sabha from Bihar, to be held on March 23, officials said.\r\nTheir names were announced by the RJD on Sunday. Manoj Jha, a Professor at Delhi University, is the national spokesperson of RJD and Ashfaque Karim is the Managing Director of the Katihar Medical College and Hospital in Bihar.', 'news/photo_11.jpg', '12-Mar-2018', 0),
(13, 'Mumbai farmers protest', 'The farmers are protesing under the banner of Akhil Bharatiya Kisan Sabha (ABKS), a CPM- affiliated outfit. The CPM has decided to make the farmers walk the entrie 180-km stretch from Nashik to Mumbai.', 'news/photo_12.jpg', '12-Mar-2018', 0),
(14, 'Kurangani hills forest fire doused', 'The massive forest fire in Kurangani hills of Tamil Nadu\'s Theni district, that claimed 9 lives, has now been doused, informed Defence Minister Nirmala Sitharaman on Monday.', 'news/photo_13.jpg', '12-Mar-2018', 0),
(15, 'Kathmandu airport plane crash', 'A Bangladeshi aircraft carrying 67 passengers crashed on Monday while coming in to land at the airport in Nepal\'s capital, Kathmandu, an airport official said, adding that 17 people on board had been rescued. ', 'news/photo_14.jpg', '12-Mar-2018', 0),
(16, 'Salt March or Dandi March was a 24-day non-violent march led', 'On March 12, 1930, Mahatma Gandhi embarked a historic Salt March from Sabarmati Ashram in Gujarat\'s Ahmedabad to the village of Dandi in the state\'s coastal area to protest against the steep tax the British levied on salt. The significant march came to be known as Dandi March or Salt March, also referred as the Dandi Satyagraha. The Salt March was a The 24-day Salt March, which was non-violent in nature, is historically significant as it led to the mass Civil Disobedience Movement.', 'news/photo_15.jpeg', '12-Mar-2018', 0),
(17, ' Mumbai With Farmers', 'Mumbai With Farmers. Food, Footwear, Flowers For Protesters. Click to Play. Locals distributed biscuits, snacks and water to the protesting farmers in Mumbai. Mumbai: As thousands of farmers entered Mumbai on Sunday, having walked 180 km over five days to draw attention to their cause.', 'news/photo_16.jpg', '12-Mar-2018', 0),
(18, ' IndiGo Flight Returns To Ahmedabad After Engine Failure', 'The aircraft returned to Ahmedabad after being airborne for over 40 minutes, state aviation ministry said. Mumbai: A mid-air engine failure forced an IndiGo flight bound for Lucknow to return to Ahmedabad, where it made an emergency landing this morning, an official said. The Airbus A320 Neo plane', 'news/photo_17.jpeg', '12-Mar-2018', 0),
(19, 'Arun Jaitley Files Nomination Papers For Rajya Sabha Polls From Uttar Pradesh', 'Arun Jaitley Files Nomination Papers For Rajya Sabha Polls From Uttar Pradesh. Apart from Arun Jaitley, BJP announced 7 other Rajya Sabha candidates. Lucknow: Union Finance Minister Arun Jaitley today filed his nomination papers for the Rajya Sabha election from Uttar Pradesh.', 'news/photo_18.jpeg', '12-Mar-2018', 0),
(20, 'Passive euthanasia', 'Days after the SC allowed passive euthanasia, the Church Monday said legalising the same would place the lives of vulnerable people at risk. The Catholic Bishops\' Conference of India (CBCI) said no one has the right to ask for this act of killing.', 'news/photo_19.jpg', '12-Mar-2018', 0),
(21, 'Ambedakar staue', 'dcdcvdf', 'news/photo_20.jpg', '23-Apr-2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_party_registration`
--

CREATE TABLE `tbl_party_registration` (
  `party_id` int(5) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_logo` varchar(1000) NOT NULL,
  `since` varchar(10) NOT NULL,
  `p_chairman_name` varchar(100) NOT NULL,
  `chairman_photo` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `slogan` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  `lastlogin` varchar(50) NOT NULL,
  `president` varchar(100) NOT NULL,
  `parliamentary_chairperson` varchar(100) NOT NULL,
  `lok_sabha_leader` varchar(100) NOT NULL,
  `rajya_sabha_leader` varchar(100) NOT NULL,
  `headquarters` varchar(200) NOT NULL,
  `newspaper` varchar(1000) NOT NULL,
  `youth_wing` varchar(200) NOT NULL,
  `women_wing` varchar(200) NOT NULL,
  `minority_wing` varchar(200) NOT NULL,
  `membership` varchar(200) NOT NULL,
  `ideology` varchar(200) NOT NULL,
  `political_position` varchar(200) NOT NULL,
  `international_affiliation` varchar(200) NOT NULL,
  `colours` varchar(200) NOT NULL,
  `eci_status` varchar(200) NOT NULL,
  `alliance` varchar(200) NOT NULL,
  `seats_in_lok_sabha` varchar(200) NOT NULL,
  `seats_in_rajya_sabha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_party_registration`
--

INSERT INTO `tbl_party_registration` (`party_id`, `p_name`, `p_logo`, `since`, `p_chairman_name`, `chairman_photo`, `description`, `email`, `password`, `slogan`, `status`, `lastlogin`, `president`, `parliamentary_chairperson`, `lok_sabha_leader`, `rajya_sabha_leader`, `headquarters`, `newspaper`, `youth_wing`, `women_wing`, `minority_wing`, `membership`, `ideology`, `political_position`, `international_affiliation`, `colours`, `eci_status`, `alliance`, `seats_in_lok_sabha`, `seats_in_rajya_sabha`) VALUES
(1, 'Bharatiya Janata Party', 'party/logo_8_1522951987.png', '1980', 'Amit Shah', 'party/photo_0.jpg', 'The Bharatiya Janata Party (pronounced (About this sound listen); translation: Indian People\'s Party; abbr. BJP) is one of the two major political parties in India, along with the Indian National Congress.As of 2016, it is the country\'s largest political party in terms of representation in the national parliament and state assemblies, and it is the world\'s largest party in terms of primary membership. The BJP is a right-wing party,with close ideological and organisational links to the Hindu nationalist Rashtriya Swayamsevak Sangh.', 'bjp@gmail.com', 'hellobjp', 'Abki Baar Modi Sarkaar', 1, '2018-07-05 03:59:27', 'Amit Shah', 'Narendra Modi', 'Narendra Modibhai', 'Arun Jaitley', '6-A, Deen Dayal Upadhayay Marg, Mata Sundari Railway Colony, Mandi House, New Delhi-110002', 'Kamal Sandesh', 'Kamal Sandesh Bharatiya Janata Yuva Morcha', 'BJP Mahila Morcha', 'BJP Minority Morcha', '110 million', 'Hindutva', 'Right-wing', 'International Democratic Union', 'Saffron', 'National Party', 'National Democratic Alliance', '58 / 245', '274 / 545'),
(2, 'Indian National Congress', 'party/logo_1.png', '1885', 'Rahul Gandhi', 'party/photo_1.jpg', 'The Indian National Congress (About this sound pronunciation (help·info)) (INC, often called Congress) is a broad-based political party in India. Founded in 1885, it was the first modern nationalist movement to emerge in the British Empire in Asia and Africa. From the late 19th century, and especially after 1920, under the leadership of Mahatma Gandhi, Congress became the principal leader of the Indian independence movement, with over 15 million members and over 70 million participants. Congress led India to independence from Great Britain and powerfully influenced other anti-colonial nationalist movements in the British Empire', 'priyankamangukiya148@gmail.com', 'hellocongress', 'Indira is India and India is Indira', 0, '2018-04-17 11:12:00', 'Rahul Gandhi', 'Sonia Gandhi', 'Mallikarjun Kharge', 'Ghulam Nabi Azad', '24, Akbar Road, New Delhi 110001', 'Congress Sandesh', 'Indian Youth Congress', 'All India Mahila Congress', 'Minority Congress', '20 – 40 million', 'Social democracy', 'Centre-left', 'Progressive Alliance, Socialist International', 'Sky blue', 'National Party', 'United Progressive Alliance', '54 / 245', '48 / 545'),
(3, 'Aam Aadmi Party', 'party/logo_2.jpg', '2012', 'Arvind Kejriwal', 'party/photo_2.jpg', 'Aam Aadmi Party (AAP, English: Common Man\'s Party) is an Indian political party, formally launched on 26 November 2012, and is currently the ruling party of the National Capital Territory of Delhi. It came into existence following differences between the activists Arvind Kejriwal and Anna Hazare regarding whether or not to politicise the popular India Against Corruption movement that had been demanding a Jan Lokpal Bill since 2011. Hazare preferred that the movement should remain politically unaligned while Kejriwal felt the failure of the agitation route necessitated a direct political involvement.', 'dishavadaliya282@gmail.com', 'helloaap', 'Aam Aadmi Party LAIYE  APNI SARKAR PAIYE ', 0, '2018-04-17 02:23:38', 'Arvind Kejriwal', 'Arvind Kejriwal', '', '', '206, Rouse Avenue, Deen Dayal Upadhyay Marg, ITO, New Delhi, India-08', '', 'Aam Aadmi Party Youth Wing', 'AAP Ki Mahila Shakti', '', '', 'Democratic socialism ,Anti-corruption Populism', 'Fiscal policy', '', 'Sky blue', 'State Party', '', '', ''),
(4, 'Bahujan Samaj Party', 'party/logo_3.png', '1984', 'Mayawati', 'party/photo_3.jpg', 'The Bahujan Samaj Party (BSP) is the third largest national political party in India. It was formed mainly to represent Bahujans (literally meaning \"People in minority\"), referring to people from the Scheduled Castes, Scheduled Tribes and Other Backward Castes (OBC), as well as religious minorities that together consist of 65 percent of India\'s population but still divided into 6000 different castes', 'bsp@gmail.com', 'hellobsp', 'Bahujan Hitay Bahujan Sukhay', 0, '2018-04-17 02:25:33', 'Mayawati', 'Mayawati', '', '', '12, Gurudwara Rakabganj Road, New Delhi, India-110001', '', '', '', '', '', 'Ambedkarism,Human rights, Buddhism', 'Centre-left', '', 'Blue', 'National Party', '', '5 / 245', '0 / 545'),
(5, 'All India Trinamool Congress', 'party/logo_4.png', '1998', 'Mamata Banerjee', 'party/photo_4.jpeg', 'The All India Trinamool Congress (abbreviated AITC, TMC or Trinamool Congress) is an Indian political party based in West Bengal . Founded on 1 January 1998 as a breakaway faction of the Indian National Congress, the party is led by its founder and current Chief Minister of West Bengal Mamata Banerjee. Prior to the 2009 general election it was the sixth largest party in the Lok Sabha with 19 seats; following the 2014 general election, it is currently the fourth largest party in the Lok Sabha with 34 seats.', 'tricongress@gmail.com', 'hellotricongress', 'Ma Mati Manush', 0, '2018-04-17 11:33:43', 'Mamata Banerjee', 'Mamata Banerjee', 'Sudip Bandyopadhyay', 'Derek O\'Brien', '36G Tapsia Road, Kolkata, West Bengal, India-700039', 'Jago Bangla', 'All India Trinamool Youth Congress', 'All India Trinamool Mahila Congress', '', '', 'Regionalism,Nationalism,Secularism,Socialism', 'Centre-left', '', 'Green', 'National Party', 'NDA, UPA', '12 / 245', '34 / 545'),
(6, 'Communist Party of India', 'party/logo_5.jpg', '1925', 'Suravaram Sudhakar Reddy', 'party/photo_5.jpg', 'The Communist Party of India (CPI) is a communist party in India. There are different views on exactly when it was founded. The date maintained as the foundation day by the CPI is 26 December 1925. The Communist Party of India (Marxist), which separated from the CPI, believes it was founded in 1920.', 'cpi@gmail.com', 'hellocpi', 'Bharat Mata Ki Jai', 0, '2018-04-01 04:18:15', 'Sitaram Yechury', 'Shripad Amrit Dange', 'C. N. Jayadevan', 'Duraisamy Raja', 'Indrajit Gupta Marg, New Delhi, India-110002', 'Mukti Sangharsh,New Age', 'All India Youth Federation', 'National Federation of Indian Women', '', '', 'Marxism–Leninism', 'Far-left', 'International Meeting of Communist and Workers\' Parties', 'Red', 'State Party', 'Left Front (West Bengal), Left Front (Tripura), Left Democratic Front (Kerala)', '1 / 245', '1 / 545'),
(7, 'Communist Party of India (Marxist)', 'party/logo_6.jpg', '1964', 'Sitaram Yechury', 'party/photo_6.jpeg', 'The Communist Party of India (Marxist) (abbreviated CPI(M)) is a communist party in India. The party emerged from a split from the Communist Party of India in 1964. The CPI(M) was formed at the Seventh Congress of the Communist Party of India held in Calcutta from 31 October to 7 November 1964. As of 2018, CPI(M) is leading the state government in Kerala. It also leads the West Bengal Left Front and Left Front (Tripura). As of 2016, CPI(M) claimed to have 1,094,867 members. The highest body of the party is the Politburo.', 'cpim@gmail.com', 'hellocpim', 'Hindustan Zindabad', 0, '2018-04-06 05:47:17', 'Sitaram Yechury', '', 'P. Karunakaran', 'T. K. Rangarajan', 'Bhai Vir Singh Marg, New Delhi,\r\nIndia-110 001', 'People\'s Democracy ,Ganashakti ,Deshabhimani', 'Democratic Youth Federation of India', 'All India Democratic Women\'s Association', 'Prafulla Chandra Ghosh', '1,094,867', 'Communism Marxism–Leninism', 'Left-wing to Far-left', 'International Meeting of Communist and Workers\' Parties', 'Red', 'National Party', 'Left Front (West Bengal), Left Front (Tripura), Left Democratic Front (Kerala), Left-Democratic Manch, Assam', '7 / 245', '9 / 545'),
(8, 'Nationalist Congress Party', 'party/logo_7.png', '1999', 'Sharad Pawar', 'party/photo_7.jpg', 'The Nationalist Congress Party (NCP) is a political party in India. Its youth wing is the Nationalist Youth Congress.The NCP was formed on 25 May 1999, by Sharad Pawar, P. A. Sangma, and Tariq Anwar after they were expelled from the Indian National Congress (INC) on 20 May 1999, for disputing the right of Italian-born Sonia Gandhi to lead the party. At the time of formation of the NCP, the Indian Congress (Socialist) party merged with the new party.', 'ncp@gmail.com', 'helloncp', 'Me Nahi Hum', 0, '2018-04-17 02:24:08', 'Sharad Pawar', '', '', '', '', '', 'Nationalist Youth Congress', 'Nationalist Mahila Congress', '', '', 'Indian nationalism, Civic nationalism, Social Justice, Social Equality, Socialism', 'Centre-left', '', 'Pacific Blue', 'National Party', 'Left Democratic Front', '5 / 245', '6 / 545');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(5) NOT NULL,
  `candidate_id` int(5) NOT NULL,
  `voter_id` int(5) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `candidate_id`, `voter_id`, `review`, `datetime`, `status`) VALUES
(33, 6, 21, 'Pankajbhai Mehata is a good candidate.', '2018-04-23', 1),
(34, 6, 21, 'Pankajbhai Mehata is a good candidate.', '2018-04-23', 1),
(35, 3, 18, 'It is Good Candidate', '2018-04-23', 1),
(36, 4, 18, 'Best Candidate Worked', '2018-04-23', 1),
(37, 3, 32, 'Best Personality of Firhad Hakim', '2018-04-23', 1),
(38, 4, 88, 'Chhabhilbhai Is a good candidate', '2018-04-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `s_id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL,
  `date` varchar(100) NOT NULL,
  `location_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`s_id`, `category_id`, `date`, `location_id`) VALUES
(1, 3, '2018-04-12', 362),
(5, 2, '2018-04-19', 362),
(9, 3, '2018-04-22', 362),
(10, 3, '2018-04-25', 362),
(25, 2, '2018-06-09', 362),
(26, 2, '2018-06-02', 362);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voter_registration`
--

CREATE TABLE `tbl_voter_registration` (
  `voter_id` int(5) NOT NULL,
  `voting_id` varchar(20) NOT NULL,
  `voter_name` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `location_id` int(5) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `lastlogin` varchar(50) NOT NULL,
  `profile` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voting`
--

CREATE TABLE `tbl_voting` (
  `v_id` int(5) NOT NULL,
  `candidate_id` int(5) NOT NULL,
  `voter_id` int(5) NOT NULL,
  `s_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_voting`
--

INSERT INTO `tbl_voting` (`v_id`, `candidate_id`, `voter_id`, `s_id`) VALUES
(1, 2, 15, 1),
(3, 2, 16, 1),
(4, 3, 32, 1),
(5, 2, 57, 3),
(6, 3, 16, 3),
(7, 2, 13, 4),
(16, 2, 2, 4),
(17, 2, 15, 5),
(18, 2, 5, 5),
(19, 2, 13, 5),
(20, 2, 14, 5),
(21, 2, 16, 5),
(22, 2, 18, 5),
(23, 2, 21, 5),
(24, 3, 22, 5),
(25, 3, 25, 5),
(26, 3, 26, 5),
(27, 3, 27, 5),
(28, 610, 28, 5),
(29, 610, 29, 5),
(30, 59, 30, 5),
(31, 61, 31, 5),
(32, 406, 33, 5),
(33, 406, 34, 5),
(34, 355, 35, 5),
(35, 357, 36, 5),
(36, 357, 37, 5),
(37, 357, 38, 5),
(38, 8, 39, 5),
(39, 8, 40, 5),
(40, 277, 41, 5),
(41, 8, 42, 5),
(42, 615, 42, 5),
(43, 935, 43, 5),
(44, 918, 44, 5),
(45, 944, 45, 5),
(46, 954, 46, 5),
(47, 923, 47, 5),
(48, 8, 48, 5),
(49, 8, 49, 5),
(50, 277, 50, 5),
(51, 277, 51, 5),
(52, 615, 52, 5),
(53, 615, 79, 7),
(54, 2, 15, 27),
(55, 59, 15, 8),
(58, 357, 13, 9),
(59, 357, 15, 9),
(60, 2, 17, 9),
(61, 3, 18, 9),
(62, 8, 20, 9),
(63, 277, 25, 9),
(64, 8, 31, 9),
(65, 8, 32, 9),
(66, 2, 88, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ckeditor`
--
ALTER TABLE `ckeditor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  ADD PRIMARY KEY (`admin_login_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_candidate_registration`
--
ALTER TABLE `tbl_candidate_registration`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_election_category`
--
ALTER TABLE `tbl_election_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_email_subscriber`
--
ALTER TABLE `tbl_email_subscriber`
  ADD PRIMARY KEY (`es_id`);

--
-- Indexes for table `tbl_enhancement`
--
ALTER TABLE `tbl_enhancement`
  ADD PRIMARY KEY (`enhancement_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_idproof`
--
ALTER TABLE `tbl_idproof`
  ADD PRIMARY KEY (`proof_id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_party_registration`
--
ALTER TABLE `tbl_party_registration`
  ADD PRIMARY KEY (`party_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_voter_registration`
--
ALTER TABLE `tbl_voter_registration`
  ADD PRIMARY KEY (`voter_id`);

--
-- Indexes for table `tbl_voting`
--
ALTER TABLE `tbl_voting`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ckeditor`
--
ALTER TABLE `ckeditor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  MODIFY `admin_login_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `b_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_candidate_registration`
--
ALTER TABLE `tbl_candidate_registration`
  MODIFY `candidate_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1045;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_election_category`
--
ALTER TABLE `tbl_election_category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_email_subscriber`
--
ALTER TABLE `tbl_email_subscriber`
  MODIFY `es_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_enhancement`
--
ALTER TABLE `tbl_enhancement`
  MODIFY `enhancement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_idproof`
--
ALTER TABLE `tbl_idproof`
  MODIFY `proof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `l_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2101;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_party_registration`
--
ALTER TABLE `tbl_party_registration`
  MODIFY `party_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `s_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_voter_registration`
--
ALTER TABLE `tbl_voter_registration`
  MODIFY `voter_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_voting`
--
ALTER TABLE `tbl_voting`
  MODIFY `v_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
