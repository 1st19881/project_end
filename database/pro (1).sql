-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 01:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(11) NOT NULL,
  `a_user` varchar(20) NOT NULL,
  `a_pass` varchar(20) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_level` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_user`, `a_pass`, `a_name`, `a_level`, `datesave`) VALUES
(1, 'admin', 'admin', 'admin drew', 'admin', '2021-07-07 14:02:46'),
(2, 'thah', 'tha', 'tha', 'admin', '2021-07-08 03:02:22'),
(3, 'admin1234', 'admin1234', 'admin 007x', 'admin', '2021-09-13 09:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `c_id` int(11) NOT NULL,
  `ref_p_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `c_detail` text NOT NULL,
  `reply_name` varchar(100) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`c_id`, `ref_p_id`, `member_id`, `c_detail`, `reply_name`, `c_date`) VALUES
(1, 2, 2, 'WTF ????????', '', '2021-09-20 14:43:52'),
(2, 2, 2, 'น่าอยู่นะครับ', '', '2021-09-20 19:10:55'),
(4, 1, 2, 'กรุณา ใช้คำพูดที่เหมาะสมครับ', 'ระพีพัฒน์ 2021222222', '2021-09-25 11:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment_report`
--

CREATE TABLE `tbl_comment_report` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `ref_p_id` int(11) NOT NULL,
  `report` varchar(255) NOT NULL,
  `c_status` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment_report`
--

INSERT INTO `tbl_comment_report` (`id`, `c_id`, `ref_p_id`, `report`, `c_status`, `member_id`, `date`) VALUES
(1, 1, 2, 'ไม่เหมาะสม', 2, 2, '2021-09-20 19:07:37'),
(2, 1, 2, 'ไเนื้อหาไม่เหมาะสำหรับเด็ก', 2, 2, '2021-09-20 19:08:35'),
(3, 2, 2, 'ไม่เหมาะสมครับบบบบบบบบบ', 2, 2, '2021-09-20 20:30:09'),
(4, 3, 1, 'เนื่องจากไม่เหมาะสมครับ', 2, 1, '2021-09-25 11:08:16'),
(5, 3, 1, 'ใช้คำที่ไม่เหมาะสม ', 2, 10, '2021-09-25 11:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dormitory`
--

CREATE TABLE `tbl_dormitory` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `detail_Facilities` text NOT NULL,
  `detail_service` text NOT NULL,
  `detail_contac` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `p_img2` varchar(255) NOT NULL,
  `p_img3` varchar(255) NOT NULL,
  `p_img4` varchar(255) NOT NULL,
  `p_link` text NOT NULL,
  `p_view` int(11) NOT NULL,
  `tag_name` text NOT NULL,
  `member_id` int(11) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dormitory`
--

INSERT INTO `tbl_dormitory` (`p_id`, `p_name`, `type_id`, `detail`, `detail_Facilities`, `detail_service`, `detail_contac`, `price`, `unit`, `p_img`, `p_img2`, `p_img3`, `p_img4`, `p_link`, `p_view`, `tag_name`, `member_id`, `datesave`) VALUES
(1, 'หอพักหญิงพาร์ควิลล์', 18, '<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; สำหรับน้องๆคนไหนที่กำลังมองหาห้องพักสวยๆ บรรยากาศดีๆ ร่มรื่นน่าอยู่ มีความปลอดภัยสูง แนะนำเป็นที่นี่เลยค่ะหอพักหญิงพาร์ควิลล์ (Parkville dormitory) อยู่ทางด้านฝั่งทางขาออกของมหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร อยู่ติดกับบ็อกโซน สามารถสังเกตเห็นได้ง่ายเลย<br />\r\nที่นี่นั้นเป็นหอพักหญิงล้วน ห้ามนิสิตชายหรือบุคคลภายนอกอื่นๆที่เป็นผู้ชายขึ้นตึกโดยเด็ดขาดค่ะ ผู้ชายสามารถเข้า-ออกเวลากลางวันได้ แต่หลังจาก 18.00 น. ทางเจ้าหน้าที่ รปภ. จะมาประจำการอยู่ที่ประตูและห้ามบุคคลภายนอกหรือนิสิตชายเข้ามาภายในหอพักเลยค่ะ</span></span></p>\r\n', '<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ร้านค้าภายใน&nbsp; &nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">หน่วยรักษาความปลอดภัย</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">กล้องวงจรปิด&nbsp; &nbsp;&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">อินเตอร์เน็ต Wifi</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ประตูเข้าคีย์การ์ด&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ร้านซักอบรีด</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เครื่องซักผ้าหยอดเหรียญ&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">&nbsp;ตู้เสื้อผ้า</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้น้ำหยอดเหรียญ&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">โทรทัศน์</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เตียงนอน&nbsp; &nbsp;&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">โต้ะและเก้าอี้สำหรับอ่านหนังสือ</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้เย็น&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">โทรศัพท์บ้าน</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เครื่องทำน้ำอุ่น</span></span></p>\r\n', '<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าไฟ หน่วยละ 7 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าน้ำเหมาจ่าย คน ละ 100 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าประกันห้องพัก ราคา 3,000 บ</span></span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">โทร 042-754123</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">โทร 042-754222</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">LINE ID</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">0818313866</span></span></li>\r\n</ul>\r\n', '15000', 'เทอม', '200227490420210910_002135.jfif', '70328289520210910_002135.jfif', '163614787620210910_002135.jfif', '192707910520210910_002135.jfif', '<iframe scrolling=\"no\" allowtransparency=\"true\" width=600 height=400 src=\"https://map.longdo.com/snippet/iframe.php?locale=th&zoom=16&mode=icons&map=epsg3857&ooi=A10600544&zoombar=auto&toolbar=no&mapselector=no&scalebar=no¢ermark=yes\" frameborder=0></iframe>', 359, 'หอพักสีเขียว', 2, '2021-09-09 17:21:35'),
(2, 'หอพักเดอะไวท์ ม.เกษตร สกลนคร', 13, '<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">หอพักหรู มีสระว่ายน้ำ อยู่ใกล้ๆๆปั้ม ปตท หน้า ม เดินทางง่าย และ สะดวกมีห้องให้เลือกหลากหลาย</span></span></p>\r\n', '<p><br />\r\n<span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">สระว่ายน้ำ&nbsp; &nbsp; </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">&nbsp;หน่วยรักษาความปลอดภัย</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">กล้องวงจรปิด&nbsp; &nbsp; </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">อินเตอร์เน็ต Wifi</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">ประตูเข้าคีย์การ์ด&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">เครื่องซักผ้าหยอดเหรียญ</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">ตู้น้ำหยอดเหรียญ&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">โทรทัศน์&nbsp; &nbsp; &nbsp; </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">เตียงนอน</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">โต้ะและเก้าอี้สำหรับอ่านหนังสือ&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">ตู้เสื้อผ้า&nbsp; &nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">&nbsp;ตู้เย็น</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">โทรศัพท์บ้าน&nbsp; &nbsp; </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">เครื่องทำน้ำอุ่น</span><br />\r\n<img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:26px\" /><span style=\"background-color:#ecf0f1\">พัดลมเพดาน</span></span></p>\r\n', '<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าไฟ หน่วยละ 7 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าน้ำเหมาจ่าย คน ละ 100 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าประกันห้องพัก ราคา 3,000 บาท</span></span></li>\r\n</ul>\r\n', '<p><span style=\"font-size:16px\">FB :&nbsp;<a href=\"https://www.facebook.com/taksila3/?__cft__[0]=AZVfCT6-NcAcwJvUkWsoXre0vksgDnk2p-4_c1K8DFGyyqt9SxdJrX9E5YNZbMqmrlQ5HyFWmG9UYL7GV6srQVHI-jR5pjBs6VoszmIDUKVoiTO6nHNghmid1WJCa6WJBmKPhOgzakZtqRrOBQuplIsY&amp;__tn__=-UC%2CP-R\" tabindex=\"0\"><strong>เดอะไวด์ &amp;หอพัก ม.เกษตรสกลนคร</strong></a></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '20000', 'เทอม', '164031742920210910_025036.jpg', '99426814620210910_025036.jpg', '63291484520210910_025036.jpg', '51531432720210910_025036.jpg', '<iframe scrolling=\"no\" allowtransparency=\"true\" width=600 height=400 src=\"https://map.longdo.com/snippet/iframe.php?locale=th&zoom=16&mode=icons&map=epsg3857&ooi=A10634209&zoombar=auto&toolbar=no&mapselector=no&scalebar=no¢ermark=yes\" frameborder=0></iframe>', 199, 'หอพักมีสระว่ายน้ำ', 2, '2021-09-09 19:50:36'),
(3, 'หอพักพิมรดา เรสซิเดนซ์ ', 25, '<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">สำหรับน้องๆนิสิตที่กำลังมองหาห้องพักดีๆ กว้างขวาง สะอาด ปลอดภัย เดินทางสะดวก( ใกล้ประตูม.ประมาณ600-700เมตร) ตั้งอยู่ในแหล่งชุมชน ใกล้ๆมีร้านอาหาร มินิมาร์ท ตู้เอ.ที.เอ็ม.ให้บริการ</span></span></p>\r\n', '<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เฟอร์นิเจอร์บิ้วอิน </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">โต๊ะ&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้&nbsp; &nbsp; </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เตียง+ที่นอน เก้าอี้</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เครื่องใช้ไฟฟ้า&nbsp; &nbsp;&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ทีวี&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้เย็น&nbsp; &nbsp; </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">แอร์&nbsp; &nbsp; </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เครื่องทำน้ำอุ่น</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เครื่องซักผ้า </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้อบผ้าแห้ง&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้น้ำหยอดเหรียญให้บริการภายในตัวตึก</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เข้า-ออกตึก ด้วยระบบคีย์การ์ด</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เสริมความปลอดภัยด้วยกล้องวงจรปิด CCTV.ทั้งภายในตึก และบริเวณรอบๆหอพัก</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ที่จอดรถจักยานยนต์ รถยนต์ ในร่มและกลางแจ้ง</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ถนนภายในหอพักเป็นคอนกรีต กว้างขวาง</span></span></p>\r\n', '<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าไฟ หน่วยละ 7 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าน้ำเหมาจ่าย คน ละ 100 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าประกันห้องพัก ราคา 3,000 บ</span></span></li>\r\n</ul>\r\n', '<p><span style=\"font-size:16px\">FB :&nbsp;<a href=\"https://www.facebook.com/%E0%B8%AB%E0%B8%AD%E0%B8%9E%E0%B8%B1%E0%B8%81%E0%B8%9E%E0%B8%B4%E0%B8%A1%E0%B8%9E%E0%B9%8C%E0%B8%A3%E0%B8%94%E0%B8%B2-%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B9%80%E0%B8%82%E0%B8%95%E0%B9%80%E0%B8%89%E0%B8%A5%E0%B8%B4%E0%B8%A1%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B8%A2%E0%B8%A3%E0%B8%95%E0%B8%B4-100913528084880/?__cft__[0]=AZWfIbQLIB6QQAogq4sP-3sNy5m72QrwQrkWgurqoIoQ0sFxZzJB40KazKRQKHd6pEmuD90aB_-1XLhrY8xEkycb1lyl_Bvo_m1KTv7cp182oUo9NpPbKHfz3NN2Akrxt4cv-1senDFBEda87o-KxTTf&amp;__tn__=-UC%2CP-R\" tabindex=\"0\"><strong>หอพักพิมพ์รดา มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกียรติ</strong></a></span></p>\r\n', '18000', 'เทอม', '205312714620210914_032047.jpg', '40192859820210914_032047.jpg', '201954375620210914_032047.jpg', '163595646220210914_032047.jpg', '<iframe scrolling=\"no\" allowtransparency=\"true\" width=600 height=400 src=\"https://map.longdo.com/snippet/iframe.php?locale=th&zoom=16&mode=icons&map=epsg3857&ooi=A10609361&zoombar=auto&toolbar=no&mapselector=no&scalebar=no¢ermark=yes\" frameborder=0></iframe>', 14, 'หอพักตรงข้าม boxzone', 21, '2021-09-13 20:20:47'),
(4, 'หอพักทรัพย์ธนพงษ์ ', 25, '<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">&nbsp; &nbsp;เปิดจองแล้ว ห้องพักสำหรับเทอม 2/2564 </span><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t5/1.5/16/1f4cc.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t5/1.5/16/1f4cc.png\" style=\"height:16px; width:16px\" /><span style=\"background-color:#ecf0f1\">&nbsp; &nbsp;&nbsp;</span><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" style=\"height:16px; width:16px\" /><span style=\"background-color:#ecf0f1\">จองก่อน ได้เลือกห้องก่อน อย่าช้า!! ไม่งั้นห้องเต็ม</span><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" style=\"height:16px; width:16px\" /><span style=\"background-color:#ecf0f1\">&nbsp;&ldquo;กันเอง เน็ตไว สะดวกสบาย สไตล์เรา</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">กินอิ่ม นอนหลับ อยู่ดีกินดี มีอาหารส่งฟรี24ชม.&rdquo;</span></span></p>\r\n', '<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เฟอร์นิเจอร์บิ้วอิน&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">โต๊ะ&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้&nbsp; &nbsp;&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เตียง+ที่นอน เก้าอี้</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เครื่องใช้ไฟฟ้า&nbsp; &nbsp;&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ทีวี&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้เย็น&nbsp; &nbsp;&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">แอร์&nbsp; &nbsp;&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เครื่องทำน้ำอุ่น</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เครื่องซักผ้า&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้อบผ้าแห้ง&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้น้ำหยอดเหรียญให้บริการภายในตัวตึก</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เข้า-ออกตึก ด้วยระบบคีย์การ์ด</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">เสริมความปลอดภัยด้วยกล้องวงจรปิด CCTV.ทั้งภายในตึก และบริเวณรอบๆหอพัก</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ที่จอดรถจักยานยนต์ รถยนต์ ในร่มและกลางแจ้ง</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:34px; width:30px\" /><span style=\"background-color:#ecf0f1\">ถนนภายในหอพักเป็นคอนกรีต กว้างขวาง</span></span></p>\r\n', '<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าไฟ หน่วยละ 7 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าน้ำเหมาจ่าย คน ละ 100 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าประกันห้องพัก ราคา 3,000 บ</span></span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าไฟ หน่วยละ 7 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าน้ำเหมาจ่าย คน ละ 100 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าประกันห้องพัก ราคา 3,000 บ</span></span></li>\r\n</ul>\r\n', '20000', 'เทอม', '196830170620210914_035555.jpg', '163016651820210914_035555.jpg', '33118086620210914_035555.jpg', '77630115120210914_035555.jpg', '<iframe scrolling=\"no\" allowtransparency=\"true\" width=600 height=400 src=\"https://map.longdo.com/snippet/iframe.php?locale=th&zoom=16&mode=icons&map=epsg3857&ooi=A10600000&zoombar=auto&toolbar=no&mapselector=no&scalebar=no¢ermark=yes\" frameborder=0></iframe>', 4, 'ร้านข้าว24ชั่วโมง', 21, '2021-09-13 20:55:55'),
(5, 'หอพักเชรวี', 27, '<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">หอพัก ใกล้ๆ หน้า ม เดินทางง่าย และ สะดวกมีห้องให้เลือกหลากหลาย</span></span></p>\r\n', '<p><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"background-color:#ecf0f1\">เตียงเดี่ยวขนาด3ฟุต </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"background-color:#ecf0f1\">2เตียงพร้อมที่นอน&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"background-color:#ecf0f1\">โต๊ะอ่านหนังสือ+เก้าอี้ 2ชุด</span></p>\r\n\r\n<p><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้เสื้อผ้า&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"background-color:#ecf0f1\"> พัดลมเพดาน&nbsp; &nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"background-color:#ecf0f1\">โทรทัศน์ + กล่อง TV Digital</span></p>\r\n\r\n<p><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"background-color:#ecf0f1\">ตู้เย็น&nbsp; </span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"background-color:#ecf0f1\">&nbsp;เครื่องทำน้ำอุ่น&nbsp;</span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"background-color:#ecf0f1\">&nbsp;</span><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">โถง สำหรับอ่านหนังสือ&nbsp;</span></span></p>\r\n\r\n<p><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">พักผ่อน&nbsp;&nbsp; </span></span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">โรงจอดรถ&nbsp; &nbsp;</span></span><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ตู้ ATM กรุงไทย</span></span><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\"> </span></span></p>\r\n\r\n<p><img alt=\"ตรวจสอบ ถูกต้อง เขียว - กราฟิกแบบเวกเตอร์ฟรีบน Pixabay\" src=\"https://cdn.pixabay.com/photo/2013/07/13/10/48/check-157822_960_720.png\" style=\"height:30px; width:30px\" /><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ร้านค้าต่าง ๆ หน้าหอพัก เช่น มินิมาร์ท, ร้านถ่ายเอกสาร, ร้านอาหาร, ร้านกาแฟ, ร้านบริการเครื่องซักผ้าหยอดเหรียญ เป็นต้น</span></span></p>\r\n', '<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ห้องแอร์ 15,000 บาท/ห้อง/เทอม (ห้องหนึ่งอยู่ได้ 1 หรือ 2 คน) </span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าอินเตอร์เน็ต บัตรราคา 100 บาท ใช้ได้ 5 วัน (ไม่จำกัดชั่วโมง),</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">บัตรราคา 180 บาท ใช้ได้ 30 วัน (60 ชั่วโมง)</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">บัตรราคา 300 บาท ใช้ได้ 30 วัน(ไม่จำกัดชั่วโมง)</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าไฟหน่วยละ 7 บาท</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าน้ำหน่วยละ 7 บาท (ขั้นต่ำห้องละ 50 บาท/เดือน)</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ค่าประกันของเสียหาย ห้องพัดลม 2,000 บาท/ห้อง, ห้องแอร์ 3,000 บาท/ห้อง</span></span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">เบอร์โทรศัพท์ติดต่อ : สำนักงานหอพักเชรวี ตึก A 042-754073, 042-754142</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">E-mail : c.cherave@hotmail.com</span></span></li>\r\n</ul>\r\n', '15000', 'เทอม', '106922617320210914_040805.jpg', '7356559220210914_040805.jpg', '169501669620210914_040805.jpg', '154777410620210914_040805.png', '<iframe scrolling=\"no\" allowtransparency=\"true\" width=600 height=400 src=\"https://map.longdo.com/snippet/iframe.php?locale=th&zoom=16&mode=icons&map=epsg3857&ooi=A10600212&zoombar=auto&toolbar=no&mapselector=no&scalebar=no&centermark=yes\" frameborder=0></iframe>', 20, 'หอพักเย็นสบาย', 21, '2021-09-13 21:08:05'),
(6, 'หอพักหญิงนนทรี', 20, '', '', '', '', '5000', 'เทอม', '130849202520210914_132826.jpg', '76197450220210914_132826.jpg', '45768216920210914_132826.jpg', '145044023820210914_132826.jpg', '<iframe scrolling=\"no\" allowtransparency=\"true\" width=600 height=400 src=\"https://map.longdo.com/snippet/iframe.php?locale=th&zoom=16&mode=icons&map=epsg3857&ooi=A10634201&zoombar=auto&toolbar=no&mapselector=no&scalebar=no&centermark=yes\" frameborder=0></iframe>', 0, 'หอพักหญิง , หอใน', 21, '2021-09-14 06:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_have`
--

CREATE TABLE `tbl_have` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `ref_p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_have`
--

INSERT INTO `tbl_have` (`id`, `c_id`, `ref_p_id`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL,
  `m_user` varchar(20) NOT NULL,
  `m_pass` varchar(20) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_last` varchar(100) NOT NULL,
  `m_sex` varchar(100) NOT NULL,
  `m_date` varchar(100) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_tel` varchar(20) NOT NULL,
  `m_address` varchar(200) NOT NULL,
  `m_img` varchar(200) NOT NULL,
  `level_m` varchar(100) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `m_user`, `m_pass`, `m_name`, `m_last`, `m_sex`, `m_date`, `m_email`, `m_tel`, `m_address`, `m_img`, `level_m`, `date_save`) VALUES
(1, '1st19881', '1st19881', 'ระพีพัฒน์ 2021222222', 'ลาสา', 'เพศชาย', '1999-11-07', 'rapeepat.la@ku.th', '0640232594', '28/11 นครพนม', '9276611520210909_235354.png', 'สมาชิก', '2021-05-24 10:25:38'),
(2, 'do19881', 'do19881', 'ระพีพัฒน์ ', 'ลาสา', 'เพศหญิง', '2021-06-21', 'ws@gmail.com', '0442622234', '28/11 นครพนม', '97922246620210909_234650.png', 'เจ้าของหอพัก', '2021-05-27 08:37:10'),
(3, 'june19881', 'june19881', 'จุฑามาศ', 'สร้อยทอง', 'เพศหญิง      ', '2021-05-23', 'jun@gmail.com', '0951838978', '28/11 บึงกาฬ', '178869150420210910_114957.png', 'เจ้าของหอพัก', '2021-05-29 14:13:40'),
(5, 'qazwsx19881', 'qazwsx19881', 'dreplay', 'kit', 'เพศชาย  ', '2021-06-06', 'ws@gmail.com', '0442622234', '28/11 กรุงเทพมหานคร 19881', '32139228520210910_115007.png', 'สมาชิก', '2021-06-06 09:26:57'),
(6, 'rapeepat19881', 'rapeepat19881', 'นัทดนัย', 'นัทดนัย', 'เพศชาย  ', '2021-06-10', 'qqq@gmail.com', '0928866389', '29/12  ต.บลเชียงเครือ อ.เมือง จ.สกลนคร 47000', '82834517220210910_115014.png', 'เจ้าของหอพัก', '2021-06-10 13:42:40'),
(7, 'member', 'member', 'member', 'member', 'เพศชาย  ', '2021-06-10', 'aaaaa@gmail.com', '0442622234', '19 /1 สกลนคร ', '193066327620210910_115023.png', 'สมาชิก', '2021-06-10 14:23:39'),
(8, '123', '123', '123', '123', 'เพศชาย  ', '2021-06-28', 'rapeepat.la@ku.th', '0442622234', '123123123123123123123123123', '100671374520210910_115108.png', 'เจ้าของหอพัก', '2021-06-28 05:45:42'),
(10, '1111', '1111', '1111', '1111', 'เพศชาย  ', '2021-07-11', 'rapeepat.la@ku.th', '0442622234', '28/11 นครพนม', '105507167920210910_115058.png', 'สมาชิก', '2021-06-28 11:04:19'),
(11, 'qqqqq', 'qqqqq', 'qqqqq', 'qqqqq', 'เพศชาย  ', '2021-07-06', 'rapeepat.la@ku.th', '0640232594', '28/11 นครพนม', '57508356120210910_115042.png', 'เจ้าของหอพัก', '2021-07-05 20:35:38'),
(12, 'drowwy19881', 'drowwy19881', 'nadanai', 'mike', 'เพศชาย  ', '2542-07-24', 'mike@gmail.com', '0442622234', '28/11 นครพนม', '202206943820210910_115034.png', 'สมาชิก', '2021-07-06 04:55:20'),
(21, 'user01', 'user01', 'กะทิ', 'ต้นมะพร้าว', 'เพศชาย', '2021-09-14', 'ggg@gmail.com', '0640232594', '28  บ้านพรือ สกลนคร 47000', '85108903120210914_025421.png', 'เจ้าของหอพัก', '2021-09-13 19:54:21'),
(22, 'do19881111', 'do19881', 'jutarmas  ', 'soytong', 'เพศชาย', '2021-09-14', 'ggg@gmail.com', '0640232594', '28  บ้านไคสี บึงกาฬ  46000', '110387017720210914_150100.png', 'เจ้าของหอพัก', '2021-09-14 08:01:00'),
(23, 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'เพศชาย', '2021-09-25', 'ggg@gmail.com', '0951838978', '28  บ้านพรือ สกลนคร 47000', '83147580020210925_161759.png', 'เจ้าของหอพัก', '2021-09-25 09:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pro_dormitory`
--

CREATE TABLE `tbl_pro_dormitory` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `proimg` text NOT NULL,
  `pro_detail` text NOT NULL,
  `detail_Facilities` text NOT NULL,
  `detail_contac` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `startdate` varchar(255) NOT NULL,
  `enddate` varchar(255) NOT NULL,
  `member_id` int(11) NOT NULL,
  `pro_view` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pro_dormitory`
--

INSERT INTO `tbl_pro_dormitory` (`pro_id`, `pro_name`, `proimg`, `pro_detail`, `detail_Facilities`, `detail_contac`, `price`, `pro_price`, `startdate`, `enddate`, `member_id`, `pro_view`, `date`) VALUES
(6, 'โปรเทอมต้น 64 หอพักบ้านแสนสุข ม.เกษตร สกลนคร ', '158447044920210909_234046.jpg', '<p>โปรเทอมต้น 64 หอพักบ้านแสนสุข ม.เกษตร สกลนคร จัดโปรโมชั่นลดราคาหอพัก จาก17000 บาท เหลือ 15000 บาท</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<ul>\r\n	<li>เตียง คู่ เดี่ยว</li>\r\n	<li>เก้าอี้</li>\r\n	<li>โต๊ะ</li>\r\n	<li>อินเทอร์เน็ต</li>\r\n	<li>แอร์</li>\r\n	<li>ราวตากผ้า</li>\r\n	<li>ที่ล้างจาน</li>\r\n	<li>ที่จอดรถ</li>\r\n</ul>\r\n', '<ul>\r\n	<li>ติดต่อ xxxxxxxxxxxxxxxxxxxxxxxx</li>\r\n	<li>FB :หอพักบ้านแสนสุข&nbsp;</li>\r\n	<li>LINE : doinxqu</li>\r\n</ul>\r\n', '17000', '15000', '2021-06-23', '2021-07-03 ', 3, 51, '2021-06-07 08:32:03'),
(8, 'โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564  จาก18000 เหลือ 17500', '178380627220210909_232909.jpg', '<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้', '<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นป', '<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เ</p>\r\n\r\n<p>โปรโมช</p>\r\n', '18000', '14500', '2021-06-29', '2021-07-10', 2, 169, '2021-06-14 11:59:35'),
(10, 'โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564  จาก16500 เหลือ 15000', '63498207120210914_135700.jpg', '<p>โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 sssssssssssssssssssssssssssssssssssssssssssssssssss</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564&nbsp;โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564&nbsp;โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564&nbsp;โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564&nbsp;โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564&nbsp;โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นป</p>\r\n', '<p>line doinxqu</p>\r\n', '16500', '15000', '2021-07-04', '2021-07-26', 2, 6, '2021-07-04 08:47:51'),
(11, 'โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564  จาก16500 เหลือ 15000', '98782431120210914_135629.jpg', '<p>โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 &nbsp;จาก16500 เหลือ 15000ssssssssssssssssssssssssssssssss</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 &nbsp;จาก16500 เหลือ 15000 ตั้งแต่วันนี้ - ถึง14/7/2564 ด่วนๆๆมีจำนวนจำกัดโปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 &nbsp;จาก16500 เหลือ 15000 ตั้งแต่วันนี้ - ถึง14/7/2564 ด่วนๆๆมีจำนวนจำกัดโปรโมชั่นหอทรัพย์ธนพงษ์ เท</p>\r\n', '<p>โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 &nbsp;จาก16500 เหลือ 15000 ตั้งแต่วันนี้ - ถึง14/7/2564 ด่วนๆๆมีจำนวนจำกัดโปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 &nbsp;จาก16500 เหลือ 15000 ตั้งแต่วันนี้ - ถึง14/7/2564 ด่วนๆๆมีจำนวนจำกัดโปรโมชั่นหอทรัพย์ธนพงษ์ เท</p>\r\n', '18000', '17500', '2021-07-04', '2021-07-14', 2, 17, '2021-07-04 12:44:50'),
(12, 'โปรโมชั่นหอทรัพย์ธนพงษ์ ตึกใหม่ เทอมต้นปี 2564 จาก16500 เหลือ 15000', '125929080820210914_134448.jpg', '<p><span style=\"font-size:16px\"><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t14/1.5/16/1f4a0.png\" style=\"height:16px; width:16px\" /><span style=\"background-color:#ecf0f1\"> โปรโมชั่นต่อเนื่อง &ldquo; ลดฮึดสู้ ฝ่าวิกฤตCOVID-19 &rdquo; </span><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t14/1.5/16/1f4a0.png\" style=\"height:16px; width:16px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">เฟสเดิมลดพิเศษสุดๆจากที่ไม่เคยลดทุกห้องขนาดนี้มาก่อน</span></span></p>\r\n', '<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ห้องแอร์ เฟอร์นิเจอร์ครบทุกห้อง กว้าง26-28ตร.ม.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">ไมโครเวฟบริการฟรีทุกตึก ร้านอาหารเปิด24ชม. ส่งฟรีถึงห้องพัก อินเตอร์เน็ตความเร็วไม่ลดสปีด ไม่จำกัดuser</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">มีตำรวจประจำตรวจตรา ดูแลความปลอดภัยสม่ำเสมอ</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:#ecf0f1\">หอพักอยู่ติดถนน ใกล้มอ เดินทางสะดวก มีที่จอดรถ ข้างเคียงมีร้านอาหาร มินิมาร์ท ชานมไข่มุก ซักรีด ร้านเสริมสวย ร้านซ่อม,ล้างรถ ร้านถ่ายเอกสาร มีตู้ Vending 7-11 บริการ24ชม.และอุ่นอาหารฟรี</span></span></p>\r\n', '<p dir=\"auto\"><strong><span style=\"font-size:16px\">FB :&nbsp;<a href=\"https://www.facebook.com/%E0%B8%AB%E0%B8%AD%E0%B8%9E%E0%B8%B1%E0%B8%81%E0%B8%97%E0%B8%A3%E0%B8%B1%E0%B8%9E%E0%B8%A2%E0%B9%8C%E0%B8%98%E0%B8%99%E0%B8%9E%E0%B8%87%E0%B8%A9%E0%B9%8C-%E0%B8%A1%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C-%E0%B8%AA%E0%B8%81%E0%B8%A5%E0%B8%99%E0%B8%84%E0%B8%A3-472264112788492/?__cft__[0]=AZX1cz6v62PTiaxOL1jDivv-tkF7oJs5-eADddy3mZgxOQpGSKmeKYM4AnwBvxzMNU30KK2sy-j-uWNmxVBS70mlPpzUFy0IJ4g6E8khTjE35mfBplPIiNbpRQUwaKPd5N3p7GRf2JIg1CPazC7_UMqY&amp;__tn__=-UC%2CP-R\" tabindex=\"0\">หอพักทรัพย์ธนพงษ์ ม.เกษตรศาสตร์ สกลนคร</a></span></strong></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t5/1.5/16/1f4cc.png\" style=\"height:16px; width:16px\" /><span style=\"background-color:#ecf0f1\">สนใจจองด่วน ราคาดีกว่านี้ไม่มีอีกแล้ว ติดต่อได้เลยที่เบอร์ด้านล่างนี้</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ta6/1.5/16/1f4de.png\" style=\"height:16px; width:16px\" /><span style=\"background-color:#ecf0f1\">&nbsp; 081-5455098 , 098-2905624&nbsp;&nbsp;</span><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ta6/1.5/16/1f4de.png\" style=\"height:16px; width:16px\" /></span></p>\r\n', '18500', '18000', '2021-09-14', '2021-11-07', 21, 3, '2021-09-14 06:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(13, 'หอพักหรู'),
(17, 'หอพักชาย'),
(18, 'หอพักหญิง'),
(19, 'หอใน ชาย'),
(20, 'หอใน หญิง'),
(25, 'หอพักรวม'),
(27, 'หอพักเครือข่ายมหาวิทยาลัย'),
(29, 'หอพักเดี่ยว'),
(30, 'หอพักสวย');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_comment_report`
--
ALTER TABLE `tbl_comment_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dormitory`
--
ALTER TABLE `tbl_dormitory`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_have`
--
ALTER TABLE `tbl_have`
  ADD PRIMARY KEY (`id`,`c_id`,`ref_p_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_pro_dormitory`
--
ALTER TABLE `tbl_pro_dormitory`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comment_report`
--
ALTER TABLE `tbl_comment_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_dormitory`
--
ALTER TABLE `tbl_dormitory`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_have`
--
ALTER TABLE `tbl_have`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_pro_dormitory`
--
ALTER TABLE `tbl_pro_dormitory`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
