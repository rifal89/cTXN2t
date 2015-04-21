-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2015 at 03:22 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ukm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `name` int(255) NOT NULL,
  `genre` enum('L','P') NOT NULL,
  `address` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `admin_contact` int(11) NOT NULL,
  `level` enum('superadmin','admin') NOT NULL DEFAULT 'admin',
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE IF NOT EXISTS `tb_bank` (
  `bank_id` int(2) NOT NULL,
  `bank_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Bank Data';

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`bank_id`, `bank_name`) VALUES
(1, 'bca'),
(2, 'bni');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank_account`
--

CREATE TABLE IF NOT EXISTS `tb_bank_account` (
`bank_account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_id` int(2) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `account_owner` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Bank Account' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_bank_account`
--

INSERT INTO `tb_bank_account` (`bank_account_id`, `user_id`, `bank_id`, `account_number`, `account_owner`) VALUES
(1, 1, 1, '5000035170', 'muhammad ardian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_city`
--

CREATE TABLE IF NOT EXISTS `tb_city` (
`city_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_city`
--

INSERT INTO `tb_city` (`city_id`, `province_id`, `city_name`) VALUES
(1, 1, 'semarang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_company_account`
--

CREATE TABLE IF NOT EXISTS `tb_company_account` (
`company_account_id` int(1) NOT NULL,
  `bank_id` int(2) NOT NULL,
  `company_account_number` varchar(50) NOT NULL,
  `company_account_owner` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_company_account`
--

INSERT INTO `tb_company_account` (`company_account_id`, `bank_id`, `company_account_number`, `company_account_owner`) VALUES
(1, 1, '80808400', 'PT. UKM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_country`
--

CREATE TABLE IF NOT EXISTS `tb_country` (
`country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Negara Database' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_country`
--

INSERT INTO `tb_country` (`country_id`, `country_name`) VALUES
(1, 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_courier`
--

CREATE TABLE IF NOT EXISTS `tb_courier` (
`courier_id` int(2) NOT NULL,
  `courier_name` varchar(50) NOT NULL,
  `courier_website` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_courier`
--

INSERT INTO `tb_courier` (`courier_id`, `courier_name`, `courier_website`) VALUES
(1, 'JNE', 'jne.co.id'),
(2, 'TIKI', 'tiki-online.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_courier_services`
--

CREATE TABLE IF NOT EXISTS `tb_courier_services` (
`id` int(2) NOT NULL,
  `courier_id` int(2) NOT NULL,
  `service_name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_courier_services`
--

INSERT INTO `tb_courier_services` (`id`, `courier_id`, `service_name`, `description`) VALUES
(1, 1, 'OKE', 'ekonomis'),
(2, 1, 'REG', 'reguler'),
(3, 1, 'YES', 'yakin esok sampai'),
(4, 2, ' SDS', 'same day services'),
(5, 2, 'ONS', 'over night services'),
(6, 2, 'TDS', 'two days services'),
(7, 2, 'REG', 'regular'),
(8, 2, 'ECO', 'economy'),
(9, 2, 'INT', 'internasional');

-- --------------------------------------------------------

--
-- Table structure for table `tb_debt`
--

CREATE TABLE IF NOT EXISTS `tb_debt` (
`debt_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `total_debt` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `total_payment` decimal(10,2) NOT NULL,
  `company_account_id` int(11) NOT NULL,
  `bank_account_id` int(11) NOT NULL,
  `debt_status` enum('on_process','finish','pending') NOT NULL DEFAULT 'on_process',
  `admin_id` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='pembayaran ke penjual' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_debt`
--

INSERT INTO `tb_debt` (`debt_id`, `invoice_id`, `shop_id`, `total_debt`, `payment_date`, `total_payment`, `company_account_id`, `bank_account_id`, `debt_status`, `admin_id`, `info`) VALUES
(1, 2, 1, '250000.00', '2015-01-23', '230000.00', 1, 1, 'finish', 1, ''),
(2, 1, 1, '100000.00', '2015-01-03', '98000.00', 1, 1, 'finish', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_debt_detail`
--

CREATE TABLE IF NOT EXISTS `tb_debt_detail` (
`id` int(11) NOT NULL,
  `debt_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_debt_detail`
--

INSERT INTO `tb_debt_detail` (`id`, `debt_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_delivery_address`
--

CREATE TABLE IF NOT EXISTS `tb_delivery_address` (
`delivery_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delivery_name` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `delivery_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_email`
--

CREATE TABLE IF NOT EXISTS `tb_email` (
`email_id` int(11) NOT NULL,
  `email_type` varchar(50) NOT NULL,
  `email_content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_inbox`
--

CREATE TABLE IF NOT EXISTS `tb_inbox` (
  `inbox_id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `from` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `attachment` text,
  `date` date NOT NULL,
  `status` enum('read','new','trash') NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_inbox`
--

INSERT INTO `tb_inbox` (`inbox_id`, `user_id`, `title`, `from`, `content`, `attachment`, `date`, `status`) VALUES
(1, 1, 'test', 'ardiandro7@gmail.com', 'test', NULL, '2014-12-18', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE IF NOT EXISTS `tb_invoice` (
  `invoice_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_account_id` int(2) NOT NULL COMMENT 'ini untuk nomor rekening user',
  `company_account_id` int(1) NOT NULL COMMENT 'ini untuk nomor rekening perusahaan',
  `total_order` int(2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `payment_receive` decimal(10,2) NOT NULL,
  `invoice_date` datetime NOT NULL,
  `confirmation_date` datetime NOT NULL,
  `description` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `invoice_status` enum('new','confirmation','payment','finish','cancel') NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`invoice_id`, `user_id`, `bank_account_id`, `company_account_id`, `total_order`, `total_price`, `payment_receive`, `invoice_date`, `confirmation_date`, `description`, `admin_id`, `invoice_status`) VALUES
(1, 1, 1, 1, 1, '100000.00', '100000.00', '2014-12-21 08:13:19', '2015-01-03 10:04:05', '', 0, 'finish'),
(2, 1, 1, 1, 2, '250000.00', '250000.00', '2014-12-26 00:00:00', '2014-12-26 10:00:00', '', 0, 'finish'),
(3, 1, 1, 1, 1, '75000.00', '75000.00', '2014-12-26 00:00:00', '2015-01-03 11:00:00', '', 0, 'finish');

--
-- Triggers `tb_invoice`
--
DELIMITER //
CREATE TRIGGER `update_status_di_tb_order` AFTER UPDATE ON `tb_invoice`
 FOR EACH ROW BEGIN

IF NEW.invoice_status = 'payment' THEN
  UPDATE tb_order SET order_status='pay' WHERE tb_order.invoice_id = OLD.invoice_id;
END IF;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE IF NOT EXISTS `tb_order` (
`order_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(4) NOT NULL,
  `option_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_status` enum('buy','pay','deliver','receive','complain') NOT NULL DEFAULT 'buy'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Order Data' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `invoice_id`, `product_id`, `shop_id`, `user_id`, `quantity`, `option_id`, `order_date`, `order_status`) VALUES
(1, 1, 1, 1, 1, 1, 0, '2014-12-26 00:00:00', 'receive'),
(2, 2, 1, 1, 1, 1, 0, '2014-12-26 00:00:00', 'receive'),
(3, 2, 2, 1, 1, 1, 0, '2014-12-26 00:00:00', 'receive'),
(4, 3, 2, 1, 1, 1, 0, '2014-12-26 00:00:00', 'receive');

--
-- Triggers `tb_order`
--
DELIMITER //
CREATE TRIGGER `tambah_daftar_hutang` AFTER UPDATE ON `tb_order`
 FOR EACH ROW BEGIN
  
  DECLARE data1, data3, debt_id_terakhir INT(11);
  DECLARE data2 INT DEFAULT FALSE;
  DECLARE harga1, harga2, payment DECIMAL(10,2);

  IF NEW.order_status = 'receive' THEN
  
    SELECT COUNT(tb_order.order_id) INTO data1 FROM tb_order WHERE invoice_id = OLD.invoice_id AND order_status != 'receive';
  
    SELECT debt_id, total_payment INTO data2, harga2 FROM tb_debt WHERE invoice_id = OLD.invoice_id AND shop_id = OLD.shop_id;      

    /* cari harga product */
    SELECT (tb_order.quantity * tb_product.price) INTO harga1 FROM tb_order, tb_product WHERE tb_order.order_id = OLD.order_id AND tb_order.product_id = tb_product.product_id;  
  
    /* untuk update invoice status */
    IF data1 = 0 THEN
      UPDATE tb_invoice SET invoice_status='finish' WHERE invoice_id = OLD.invoice_id;
    END IF;
  
    /* untuk add data di tb_debt dan tb_debt_detail */
    IF data2 = FALSE THEN
      INSERT INTO tb_debt SET invoice_id = OLD.invoice_id, shop_id = OLD.shop_id, total_payment = harga1;

      /* cari debt id terakhir */
      SELECT debt_id INTO debt_id_terakhir FROM tb_debt WHERE 1 ORDER BY debt_id DESC LIMIT 1;
      INSERT INTO tb_debt_detail SET debt_id = debt_id_terakhir, product_id = OLD.product_id, quantity = OLD.quantity;
    ELSE
      INSERT INTO tb_debt_detail SET debt_id = data2, product_id = OLD.product_id, quantity = OLD.quantity;
      
      /* update harga di total payment yg harus di bayarkan ke penjual */
      UPDATE tb_debt SET total_payment = harga1 + harga2 WHERE debt_id = data2;
    END IF;

  END IF;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE IF NOT EXISTS `tb_order_detail` (
`order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `option_group_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_outbox`
--

CREATE TABLE IF NOT EXISTS `tb_outbox` (
  `outbox_id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `to` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `attachment` text,
  `date` date NOT NULL,
  `status` enum('read','new','trash') NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_outbox`
--

INSERT INTO `tb_outbox` (`outbox_id`, `user_id`, `title`, `to`, `content`, `attachment`, `date`, `status`) VALUES
(1, 1, 'Project Di terima', 'agungpodomoro@gmail.com', 'Dengan ini saya terima tawaran project tersebut.', NULL, '2014-12-14', 'trash');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE IF NOT EXISTS `tb_product` (
`product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `product_tag` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `product_status` enum('active','not active') NOT NULL DEFAULT 'active'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Database Produk' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `shop_id`, `product_name`, `description`, `product_img`, `price`, `product_tag`, `created_date`, `product_status`) VALUES
(1, 1, 1, 'mousepad', 'dipakai untuk tatakan mouse', 'Maichi2.jpg', '100000.00', 'komputer, mouse', '2014-12-26 00:00:00', 'active'),
(2, 1, 1, 'keyboard', 'alat untuk mengetik', '3.jpg', '150000.00', 'komputer, mouse', '2014-12-26 00:00:00', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_album`
--

CREATE TABLE IF NOT EXISTS `tb_product_album` (
`album_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `album_name` varchar(50) NOT NULL,
  `album_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='album product per toko' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_album_detail`
--

CREATE TABLE IF NOT EXISTS `tb_product_album_detail` (
`id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='pengelompokan produk per album' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_category`
--

CREATE TABLE IF NOT EXISTS `tb_product_category` (
`category_id` int(11) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `category_img` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_product_category`
--

INSERT INTO `tb_product_category` (`category_id`, `category_name`, `category_img`) VALUES
(1, 'fashion pria', 'bag-man.png'),
(2, 'fashion wanita', 'bag-woman.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_discussion`
--

CREATE TABLE IF NOT EXISTS `tb_product_discussion` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='diskusi produk' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_product_discussion`
--

INSERT INTO `tb_product_discussion` (`id`, `user_id`, `product_id`, `parent_id`, `comment`, `comment_date`) VALUES
(1, 1, 1, 0, 'Barangnya bagus ga sih? gw mau beli tapi masih ragu :(', '2015-04-06 03:04:00'),
(2, 2, 1, 1, 'Tentu bagus donk gan, pokoknya dijamin kualitas No. 1 :D', '2015-04-06 00:00:00'),
(3, 2, 1, 0, 'Bagus kok kualitas barangnya cuma ya itu, gw pesen agak lama sampenya.. :D', '2015-04-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_image`
--

CREATE TABLE IF NOT EXISTS `tb_product_image` (
`image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Produk Image' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_product_image`
--

INSERT INTO `tb_product_image` (`image_id`, `product_id`, `image`) VALUES
(1, 1, '1.jpg'),
(2, 1, '2.jpg'),
(3, 1, '3.jpg'),
(4, 1, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_option`
--

CREATE TABLE IF NOT EXISTS `tb_product_option` (
`option_id` int(11) NOT NULL,
  `option_group_id` int(11) NOT NULL,
  `option_value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Produk Option' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_option_group`
--

CREATE TABLE IF NOT EXISTS `tb_product_option_group` (
`option_group_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `option_group_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Produk Option Group' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_rate`
--

CREATE TABLE IF NOT EXISTS `tb_product_rate` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rate` int(1) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `response` text NOT NULL,
  `response_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='penilaian kualitas produk' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_product_rate`
--

INSERT INTO `tb_product_rate` (`id`, `user_id`, `product_id`, `rate`, `comment`, `comment_date`, `response`, `response_date`) VALUES
(1, 1, 1, 3, 'Barang udah diterima, kondisi bagus..thx', '2015-04-04 06:36:26', 'ok, slamat berbelanja kembali gan.. .', '2015-04-04 05:22:16'),
(2, 2, 1, 4, 'kereen gan barang nya .. .', '2015-04-06 00:00:00', 'Thank u gan .. .', '2015-04-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_province`
--

CREATE TABLE IF NOT EXISTS `tb_province` (
`province_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `province_name` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Propinsi Database' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_province`
--

INSERT INTO `tb_province` (`province_id`, `country_id`, `province_name`) VALUES
(1, 1, 'jawa tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_refund`
--

CREATE TABLE IF NOT EXISTS `tb_refund` (
`refund_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_account_id` int(1) NOT NULL,
  `bank_account_id` int(11) NOT NULL,
  `total_refund` decimal(10,2) NOT NULL,
  `request_date` date NOT NULL,
  `transaction_date` date NOT NULL,
  `refund_status` enum('new','finish') NOT NULL DEFAULT 'new',
  `admin_id` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_refund`
--

INSERT INTO `tb_refund` (`refund_id`, `user_id`, `company_account_id`, `bank_account_id`, `total_refund`, `request_date`, `transaction_date`, `refund_status`, `admin_id`, `info`) VALUES
(1, 1, 1, 1, '100000.00', '2014-12-28', '2015-01-03', 'finish', 0, ''),
(2, 1, 0, 1, '50000.00', '2014-12-28', '0000-00-00', 'finish', 0, ''),
(3, 1, 1, 1, '10000.00', '2015-02-07', '0000-00-00', 'finish', 0, 'secepatnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_shop`
--

CREATE TABLE IF NOT EXISTS `tb_shop` (
`shop_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_address` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `shop_contact` varchar(50) NOT NULL,
  `shop_image` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `shop_status` enum('active','not active') NOT NULL DEFAULT 'active'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_shop`
--

INSERT INTO `tb_shop` (`shop_id`, `shop_name`, `shop_address`, `city_id`, `province_id`, `shop_contact`, `shop_image`, `created_date`, `shop_status`) VALUES
(1, 'ardian_shop', 'mawar melati indah neari-nari', 1, 1, '085742642046', '', '2014-12-10 00:00:00', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_shop_courier`
--

CREATE TABLE IF NOT EXISTS `tb_shop_courier` (
`id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_shop_courier`
--

INSERT INTO `tb_shop_courier` (`id`, `shop_id`, `courier_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_shop_favorite`
--

CREATE TABLE IF NOT EXISTS `tb_shop_favorite` (
`id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_shop_rate`
--

CREATE TABLE IF NOT EXISTS `tb_shop_rate` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `rate_type` enum('kecepatan','pelayanan','akurasi') NOT NULL,
  `rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='penilaian utk toko' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sms`
--

CREATE TABLE IF NOT EXISTS `tb_sms` (
`sms_id` int(11) NOT NULL,
  `sms_type` varchar(50) NOT NULL,
  `sms_content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `genre` enum('L','P') NOT NULL,
  `birthdate` date NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `wallet` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `user_status` enum('active','not active') NOT NULL DEFAULT 'active'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='User Database' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `email`, `name`, `genre`, `birthdate`, `user_contact`, `address`, `city_id`, `province_id`, `country_id`, `shop_id`, `wallet`, `created_date`, `avatar`, `last_login`, `user_status`) VALUES
(1, 'ardian', 'ardian', 'ardiandro7@gmail.com', 'ardian', 'L', '1990-04-30', '085742642046', 'Melati mawar bersemi', 1, 1, 1, 1, '0.00', '2014-12-10 00:00:00', 'matt.jpg', '2014-12-10 00:00:00', 'active'),
(2, 'andro', '54d6b5933c9275dc26336227e4eb7c15b91aa65d', 'andro@gmail.com', 'andro kan', 'L', '2015-04-06', '085747688898', 'Jl. Kembang mawar No.5', 1, 1, 1, 0, '0.00', '2015-04-06 00:00:00', 'joe.jpg', '2015-04-06 00:00:00', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_video`
--

CREATE TABLE IF NOT EXISTS `tb_video` (
`video_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `video_link` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_wallet_activity`
--

CREATE TABLE IF NOT EXISTS `tb_wallet_activity` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `activity` enum('withdrawal','save','buy') NOT NULL,
  `activity_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
 ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `tb_bank_account`
--
ALTER TABLE `tb_bank_account`
 ADD PRIMARY KEY (`bank_account_id`);

--
-- Indexes for table `tb_city`
--
ALTER TABLE `tb_city`
 ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tb_company_account`
--
ALTER TABLE `tb_company_account`
 ADD PRIMARY KEY (`company_account_id`);

--
-- Indexes for table `tb_country`
--
ALTER TABLE `tb_country`
 ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tb_courier`
--
ALTER TABLE `tb_courier`
 ADD PRIMARY KEY (`courier_id`);

--
-- Indexes for table `tb_courier_services`
--
ALTER TABLE `tb_courier_services`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_debt`
--
ALTER TABLE `tb_debt`
 ADD PRIMARY KEY (`debt_id`);

--
-- Indexes for table `tb_debt_detail`
--
ALTER TABLE `tb_debt_detail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_delivery_address`
--
ALTER TABLE `tb_delivery_address`
 ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `tb_email`
--
ALTER TABLE `tb_email`
 ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `tb_inbox`
--
ALTER TABLE `tb_inbox`
 ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
 ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
 ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tb_outbox`
--
ALTER TABLE `tb_outbox`
 ADD PRIMARY KEY (`outbox_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tb_product_album`
--
ALTER TABLE `tb_product_album`
 ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `tb_product_album_detail`
--
ALTER TABLE `tb_product_album_detail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product_category`
--
ALTER TABLE `tb_product_category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_product_discussion`
--
ALTER TABLE `tb_product_discussion`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product_image`
--
ALTER TABLE `tb_product_image`
 ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tb_product_option`
--
ALTER TABLE `tb_product_option`
 ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `tb_product_option_group`
--
ALTER TABLE `tb_product_option_group`
 ADD PRIMARY KEY (`option_group_id`);

--
-- Indexes for table `tb_product_rate`
--
ALTER TABLE `tb_product_rate`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_province`
--
ALTER TABLE `tb_province`
 ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `tb_refund`
--
ALTER TABLE `tb_refund`
 ADD PRIMARY KEY (`refund_id`);

--
-- Indexes for table `tb_shop`
--
ALTER TABLE `tb_shop`
 ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `tb_shop_courier`
--
ALTER TABLE `tb_shop_courier`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_shop_favorite`
--
ALTER TABLE `tb_shop_favorite`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_shop_rate`
--
ALTER TABLE `tb_shop_rate`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sms`
--
ALTER TABLE `tb_sms`
 ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_video`
--
ALTER TABLE `tb_video`
 ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `tb_wallet_activity`
--
ALTER TABLE `tb_wallet_activity`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_bank_account`
--
ALTER TABLE `tb_bank_account`
MODIFY `bank_account_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_city`
--
ALTER TABLE `tb_city`
MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_company_account`
--
ALTER TABLE `tb_company_account`
MODIFY `company_account_id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_country`
--
ALTER TABLE `tb_country`
MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_courier`
--
ALTER TABLE `tb_courier`
MODIFY `courier_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_courier_services`
--
ALTER TABLE `tb_courier_services`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_debt`
--
ALTER TABLE `tb_debt`
MODIFY `debt_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_debt_detail`
--
ALTER TABLE `tb_debt_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_delivery_address`
--
ALTER TABLE `tb_delivery_address`
MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_email`
--
ALTER TABLE `tb_email`
MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_product_album`
--
ALTER TABLE `tb_product_album`
MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_product_album_detail`
--
ALTER TABLE `tb_product_album_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_product_category`
--
ALTER TABLE `tb_product_category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_product_discussion`
--
ALTER TABLE `tb_product_discussion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_product_image`
--
ALTER TABLE `tb_product_image`
MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_product_option`
--
ALTER TABLE `tb_product_option`
MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_product_option_group`
--
ALTER TABLE `tb_product_option_group`
MODIFY `option_group_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_product_rate`
--
ALTER TABLE `tb_product_rate`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_province`
--
ALTER TABLE `tb_province`
MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_refund`
--
ALTER TABLE `tb_refund`
MODIFY `refund_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_shop`
--
ALTER TABLE `tb_shop`
MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_shop_courier`
--
ALTER TABLE `tb_shop_courier`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_shop_favorite`
--
ALTER TABLE `tb_shop_favorite`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_shop_rate`
--
ALTER TABLE `tb_shop_rate`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_sms`
--
ALTER TABLE `tb_sms`
MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_video`
--
ALTER TABLE `tb_video`
MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_wallet_activity`
--
ALTER TABLE `tb_wallet_activity`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
