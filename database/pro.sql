-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 11:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
(1, 'admin', 'admin', 'admin drew', 'ผู้ดูแลระบบ', '2021-07-07 14:02:46'),
(2, 'thah', 'tha', 'tha', 'admin', '2021-07-08 03:02:22');

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
(1, 1, 1, '555555555555555', '', '2021-06-27 08:11:31'),
(3, 2, 1, '555555555555555', '', '2021-06-28 05:42:08'),
(4, 2, 8, '55555555555555555', 'ระพีพัฒน์', '2021-06-28 05:58:06'),
(5, 1, 1, 'ffffff', '', '2021-06-29 04:18:10'),
(6, 2, 2, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '', '2021-06-29 04:25:32'),
(7, 2, 2, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '', '2021-06-29 04:51:31'),
(8, 3, 1, 'สวัสดีครับผม', '', '2021-06-29 11:24:04'),
(9, 3, 1, 'มีเรื่องสอบถามหน่อยจ้า', '', '2021-06-29 11:25:19'),
(10, 4, 15, 'aaaaaaaaaaaa', '', '2021-07-08 03:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dormitory`
--

CREATE TABLE `tbl_dormitory` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `detail_Facilities` varchar(255) NOT NULL,
  `detail_service` varchar(255) NOT NULL,
  `detail_contac` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `p_img2` varchar(255) NOT NULL,
  `p_img3` varchar(255) NOT NULL,
  `p_img4` varchar(255) NOT NULL,
  `p_link` text NOT NULL,
  `p_view` int(11) NOT NULL,
  `tag_name` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dormitory`
--

INSERT INTO `tbl_dormitory` (`p_id`, `p_name`, `type_id`, `detail`, `detail_Facilities`, `detail_service`, `detail_contac`, `price`, `p_img`, `p_img2`, `p_img3`, `p_img4`, `p_link`, `p_view`, `tag_name`, `member_id`, `datesave`) VALUES
(1, 'หอพักอะไรก็ได้อยู่สบายๆ', 30, '<p>หอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบาย', '<p>หอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบาย', '<p>หอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบาย', '<p>หอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบายๆหอพักอะไรก็ได้อยู่สบาย', '25000', '4199396820210626_230828.png', '138448718120210626_230828.png', '169622125620210626_230828.png', '188722264120210626_230828.png', '<iframe scrolling=\"no\" allowtransparency=\"true\" width=356 height=398 src=\"https://map.longdo.com/snippet/iframe.php?locale=th&zoom=16&mode=icons&map=epsg3857&ooi=A10600000&zoombar=auto&toolbar=no&mapselector=no&scalebar=no&centermark=yes&tagicon=https://map.longdo.com/mmmap/images/snippet/pin_style_1.png&iconposx=17&iconposy=40\" frameborder=0></iframe>', 69, 'หอพักสวยน่าอยู่', 2, '2021-06-26 16:08:28'),
(3, 'หอระพีพัน', 17, '<p>หอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพัน', '<p>หอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพัน', '<p>หอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพัน', '<p>หอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพันหอระพีพัน', '10000', '93164261320210628_124741.jpg', '86282927920210628_124741.jpg', '186706041220210628_124741.jpg', '1240120320210628_124741.jpg', '<iframe scrolling=\"no\" allowtransparency=\"true\" width=356 height=398 src=\"https://map.longdo.com/snippet/iframe.php?locale=th&zoom=16&mode=icons&map=epsg3857&ooi=A10600000&zoombar=auto&toolbar=no&mapselector=no&scalebar=no&centermark=yes&tagicon=https://map.longdo.com/mmmap/images/snippet/pin_style_1.png&iconposx=17&iconposy=40\" frameborder=0></iframe>', 137, 'หอพักหน้า ม', 8, '2021-06-28 05:47:41'),
(4, 'a', 27, '<p>a</p>\r\n', '<p>a</p>\r\n', '<p>a</p>\r\n', '<p>a</p>\r\n', '18000', '33811648220210708_101305.png', '193781610120210708_101305.png', '144957090720210708_101305.png', '78310640820210708_101305.png', '<iframe scrolling=\"no\" allowtransparency=\"true\" width=356 height=398 src=\"https://map.longdo.com/snippet/iframe.php?locale=th&zoom=16&mode=icons&map=epsg3857&ooi=A10600000&zoombar=auto&toolbar=no&mapselector=no&scalebar=no&centermark=yes&tagicon=https://map.longdo.com/mmmap/images/snippet/pin_style_1.png&iconposx=17&iconposy=40\" frameborder=0></iframe>', 26, 'หอพักสวยน่าอยู่', 2, '2021-07-08 03:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_have`
--

CREATE TABLE `tbl_have` (
  `ref_p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '1st19881', '1st19881', 'ระพีพัฒน์ 2021', 'ลาสา', 'เพศชาย        ', '1999-11-07', 'rapeepat.la@ku.th', '0640232594', '28/11 นครพนม', '186248157620210707_204108.png', 'สมาชิก', '2021-05-24 10:25:38'),
(2, 'do19881', 'do19881', 'ระพีพัฒน์ ', 'ลาสา', 'เพศหญิง         ', '2021-06-21', 'ws@gmail.com', '0442622234', '28/11 นครพนม', '69183590420210627_151237.png', 'เจ้าของหอพัก', '2021-05-27 08:37:10'),
(3, 'june19881', 'june19881', 'จุฑามาศ', 'สร้อยทอง', 'เพศหญิง     ', '2021-05-23', 'jun@gmail.com', '0951838978', '28/11 บึงกาฬ', '29008066520210623_220502.png', 'เจ้าของหอพัก', '2021-05-29 14:13:40'),
(5, 'qazwsx19881', 'qazwsx19881', 'dreplay', 'kit', 'เพศชาย ', '2021-06-06', 'ws@gmail.com', '0442622234', '28/11 กรุงเทพมหานคร 19881', '15896573820210606_162657.png', 'สมาชิก', '2021-06-06 09:26:57'),
(6, 'rapeepat19881', 'rapeepat19881', 'นัทดนัย', 'นัทดนัย', 'เพศชาย ', '2021-06-10', 'qqq@gmail.com', '0928866389', '29/12  ต.บลเชียงเครือ อ.เมือง จ.สกลนคร 47000', '180123222220210610_204240.png', 'เจ้าของหอพัก', '2021-06-10 13:42:40'),
(7, 'member', 'member', 'member', 'member', 'เพศชาย ', '2021-06-10', 'aaaaa@gmail.com', '0442622234', '19 /1 สกลนคร ', '29860018720210610_212339.png', 'สมาชิก', '2021-06-10 14:23:39'),
(8, '123', '123', '123', '123', 'เพศชาย ', '2021-06-28', 'rapeepat.la@ku.th', '0442622234', '123123123123123123123123123', '41554302720210628_124542.jpg', 'เจ้าของหอพัก', '2021-06-28 05:45:42'),
(10, '1111', '1111', '1111', '1111', 'เพศชาย ', '2021-07-11', 'rapeepat.la@ku.th', '0442622234', '28/11 นครพนม', '140143728820210628_180419.png', 'สมาชิก', '2021-06-28 11:04:19'),
(11, 'qqqqq', 'qqqqq', 'qqqqq', 'qqqqq', 'เพศชาย ', '2021-07-06', 'rapeepat.la@ku.th', '0640232594', '28/11 นครพนม', '154455955720210706_033538.jpg', 'เจ้าของหอพัก', '2021-07-05 20:35:38'),
(12, 'drowwy19881', 'drowwy19881', 'nadanai', 'mike', 'เพศชาย ', '2542-07-24', 'mike@gmail.com', '0442622234', '28/11 นครพนม', '102190231220210706_115520.png', 'สมาชิก', '2021-07-06 04:55:20'),
(13, 'mike19881', 'mike19881', 'ronin', 'ronin', 'เพศชาย ', '2542-07-25', 'qazwsx@ku.th', '0254589785', '28/11 นครพนม', '45701748820210706_115653.png', 'เจ้าของหอพัก', '2021-07-06 04:56:53'),
(14, 'ada', 'ada', 'ada', 'ada', 'เพศหญิง  ', '2021-07-08', 'ws@gmail.com', '0442622234', '28/11 นครพนม', '60164808320210708_100831.png', 'เจ้าของหอพัก', '2021-07-08 03:08:31'),
(15, '123456789', '1st19881', '1234', '123', 'เพศชาย  ', '2021-07-08', 'rapeepat.la@ku.th', '0442622234', '28/11 นครพนม', '191603622120210708_102519.png', 'สมาชิก', '2021-07-08 03:25:19'),
(19, 'adc19881', 'adc19881', 'adc', 'adc', 'เพศชาย ', '2021-07-09', 'rapeepat.la@ku.th', '0442622234', 'june', '36259957320210709_131926.png', 'เจ้าของหอพัก', '2021-07-09 06:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pro_dormitory`
--

CREATE TABLE `tbl_pro_dormitory` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `proimg` varchar(255) NOT NULL,
  `pro_detail` varchar(255) NOT NULL,
  `detail_Facilities` varchar(255) NOT NULL,
  `detail_contac` varchar(255) NOT NULL,
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
(6, 'โปรเทอมต้น 64 หอพักบ้านแสนสุข ม.เกษตร สกลนคร ', '208992046420210623_215939.png', '<p>โปรเทอมต้น 64 หอพักบ้านแสนสุข ม.เกษตร สกลนคร จัดโปรโมชั่นลดราคาหอพัก จาก17000 บาท เหลือ 15000 บาท</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<ul>\r\n	<li>เตียง คู่ เดี่ยว</li>\r\n	<li>เก้าอี้</li>\r\n	<li>โต๊ะ</li>\r\n	<li>อินเทอร์เน็ต</li>\r\n	<li>แอร์</li>\r\n	<li>ราวตากผ้า</li>\r\n	<li>ที่ล้างจาน</li>\r\n	<li>ที่จอดรถ</li>\r\n</ul>\r\n', '<ul>\r\n	<li>ติดต่อ xxxxxxxxxxxxxxxxxxxxxxxx</li>\r\n	<li>FB :หอพักบ้านแสนสุข&nbsp;</li>\r\n	<li>LINE : doinxqu</li>\r\n</ul>\r\n', '17000', '15000', '2021-06-23', '2021-07-03 ', 3, 51, '2021-06-07 08:32:03'),
(8, 'โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564  จาก18000 เหลือ 17500', '90645937220210614_200524.png', '<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้</p>\r\n', '<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นป', '<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เหลือ 17500</p>\r\n\r\n<p>โปรโมชั่นหอบ้านแสนสุข เทอมต้นปี 2564 &nbsp;จาก18000 เ</p>\r\n\r\n<p>โปรโมช</p>\r\n', '18000', '14500', '2021-06-29', '2021-07-10', 2, 167, '2021-06-14 11:59:35'),
(10, 'โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564  จาก16500 เหลือ 15000', '192111252320210704_154751.png', '<p>โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 sssssssssssssssssssssssssssssssssssssssssssssssssss</p>\r\n', '<p>โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564&nbsp;โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564&nbsp;โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564&nbsp;โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564&nbsp;โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564&nbsp;โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นป', '<p>line doinxqu</p>\r\n', '16500', '15000', '2021-07-04', '2021-07-26', 2, 2, '2021-07-04 08:47:51'),
(11, 'โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564  จาก16500 เหลือ 15000', '11540446020210707_215412.png', '<p>โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 &nbsp;จาก16500 เหลือ 15000ssssssssssssssssssssssssssssssss</p>\r\n', '<p>โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 &nbsp;จาก16500 เหลือ 15000 ตั้งแต่วันนี้ - ถึง14/7/2564 ด่วนๆๆมีจำนวนจำกัดโปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 &nbsp;จาก16500 เหลือ 15000 ตั้งแต่วันนี้ - ถึง14/7/2564 ด่วนๆๆมีจำนวนจำกัดโปรโมชั่นหอทรัพย์ธนพงษ์ เท', '<p>โปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 &nbsp;จาก16500 เหลือ 15000 ตั้งแต่วันนี้ - ถึง14/7/2564 ด่วนๆๆมีจำนวนจำกัดโปรโมชั่นหอทรัพย์ธนพงษ์ เทอมต้นปี 2564 &nbsp;จาก16500 เหลือ 15000 ตั้งแต่วันนี้ - ถึง14/7/2564 ด่วนๆๆมีจำนวนจำกัดโปรโมชั่นหอทรัพย์ธนพงษ์ เท', '18000', '17500', '2021-07-04', '2021-07-14', 2, 10, '2021-07-04 12:44:50');

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
(15, 'คอนโด'),
(17, 'หอพักชาย'),
(18, 'หอพักหญิง'),
(19, 'หอใน ชาย'),
(20, 'หอใน หญิง'),
(25, 'หอพักรวม'),
(27, 'หอพักเครือข่ายมหาวิทยาลัย'),
(29, 'หอพักเดี่ยว'),
(30, 'หอพักสวย'),
(31, 'หอพักหลัง ม');

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
-- Indexes for table `tbl_dormitory`
--
ALTER TABLE `tbl_dormitory`
  ADD PRIMARY KEY (`p_id`);

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
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_dormitory`
--
ALTER TABLE `tbl_dormitory`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_pro_dormitory`
--
ALTER TABLE `tbl_pro_dormitory`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
