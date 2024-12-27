-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 04:58 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabinet_details`
--

CREATE TABLE `cabinet_details` (
  `cbtid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `cbtName` varchar(100) NOT NULL,
  `cbtCompany` varchar(20) NOT NULL,
  `cbtPrice` int(5) NOT NULL,
  `cbtDescription` varchar(500) NOT NULL,
  `cbtKeywords` varchar(500) NOT NULL,
  `cbtQuantity` int(5) NOT NULL,
  `cbtImg` varchar(100) NOT NULL,
  `cbtType` varchar(10) NOT NULL,
  `cbtCoolingSupport` varchar(200) NOT NULL,
  `cbtFrontIO` varchar(75) NOT NULL,
  `cbtFormFactor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabinet_details`
--

INSERT INTO `cabinet_details` (`cbtid`, `cid`, `cbtName`, `cbtCompany`, `cbtPrice`, `cbtDescription`, `cbtKeywords`, `cbtQuantity`, `cbtImg`, `cbtType`, `cbtCoolingSupport`, `cbtFrontIO`, `cbtFormFactor`) VALUES
('cbt0000001', 'cbt', 'Ant Esports ICE-120AG Mid Tower Computer Case with 1 x 120 mm Rear Fan Preinstalled - Black', 'Ant Esports', 2049, 'Black Matte Finish, Acrylic Side Panel<br/> Support 2 x HDD and 2 x SSD, 7 PCI Slots<br/> Fan Support: 120 mm x 3 Front, 120 mm x 2 Top, 120 mm x 2 Bottom<br/> Liquid Cooler Support: 120 / 240 mm x 1 Front, 120 mm x 1 Rear<br/> Cable Management Support, Separate zone for Power, Supply and other components', '', 45, '', 'Mid Tower', 'Fan Support: 120 mm x 3 Front, 120 mm x 2 Top, 120 mm x 2 Bottom, 120mm x 1 Rear, Liquid Cooling Support: 120 / 240 mm x 1 Front, 120 mm x 1 Rear', '1 x USB 2.0, 1 x USB 3.0, 1 x Audio In, 1 x Mic', 'ATX, Micro-ATX, ITX Motherboard'),
('cbt0000002', 'cbt', 'Corsair Carbide SPEC-05 Mid-Tower Gaming Case - Black', 'Corsair', 3229, 'Minimalist exterior design with an edge-to-edge tinted side panel window<br/> Room for up to five 120mm fans with one 120mm front fan pre-installed<br/> Expansive storage space with mounts for up to three hdd\'s and two ssd\'s<br/>\r\nClean, front panel with high-speed usb 3.0 port<br/> Cable routing cutouts and tie downs keep your build looking clean and uncluttered<br/> 2 Years Warranty', '', 34, '', 'Mid Tower', 'Fan Locations: Front: 3x 120mm, 2x 140mm (120mm included), Top: 2x 120mm, 2x 140mm, Rear: 120mm (Included), Radiator Compatibility: 120mm, 140mm, 240mm', 'USB 3.0 (x1), USB 2.0 (x1), Headphone (x1), Microphone (x1), Power, Reset', 'ATX, Micro-ATX, ITX Motherboard'),
('cbt0000003', 'cbt', 'Cooler Master MasterBox K501L RGB Mid Tower Cabinet with Tempered Glass Side Panel\r\n', 'Cooler Master', 3770, 'Angled Ventilation, Illuminated Fan & Power Button, an illuminated fan glows through the angled ventilation<br/> Top Panel Ventilation: the top panel is ventilated to support cooling components and filtered<br/> Cooling Support – Support for up to 6 fans and top, front, and rear water cooling<br/> Edge-to-Edge Tempered Glass Side Panel<br/> Clean Routing Space – There is 19~27mm width of space behind<br/> Versatile Component Support, 3 Years Warranty', '', 32, '', 'Mid Tower', 'Pre-installed Front 120m, Rear 120mm, Fan Support Top 120mm x 2 140mm x 2, Front 120mm x 3 140mm x 2, Rear 120mm x 1, Radiator Support Top 120mm 240mm, Front 120mm 140mm 240mm 280mm 360mm, Rear 120mm', 'USB 3.2 Gen1 x 1 (USB 3.0) USB 2.0 x 1,	1 x 3.5mm Audio 1 x 3.5mm Mic Jack', ' Mini ITX, Micro ATX, ATX, E-ATX* Motherboards'),
('cbt0000004', 'cbt', 'MSI MAG Forge 100R Addressable RGB Computer Gaming Cabinet', 'MSI', 5999, 'OPTIMIZED AIR FLOW<br/> Designed with multiple easy installation mechanisms and accommodated an up to ATX motherboard to provide an unhindered building experience<br/> The light gray tone of 4mm tempered glass side panel is ideal for displaying RGB lighting effects and provides clear internal component construction<br/> Customizing Addressable RGB LEDs integrated in the front, top & rear cover with a dedicated control button<br/> 1 Year Warranty', '', 24, '', 'Mid Tower', 'Front 3 x 120 mm / 2 x 140 mm, Top 2 x 120 mm / 2 x 140 mm, Rear 1 x 120 mm, Pre-install Front 2 x 120 mm, Rear 1 x 120 mm System Fan, Radiator Layout	Front and top: Up to 240 mm, Rear: Up to 120 mm', '2 x USB 3.2 Gen1 Type-A / 1 x HD Audio / 1 x Mic', 'ATX, Micro-ATX, ITX Motherboard'),
('cbt0000005', 'cbt', 'NZXT H510 Middle Tower Supports Mini-ITX, MicroATX, and ATX Computer Cabinet Black/Red', 'NZXT', 6648, 'NEW FEATURES: Front I/O USB Type-C Port and Tempered glass side panel with single screw installation<br/>\r\nENHANCED CABLE MANAGEMENT: Our patented cable routing kit with pre-installed channels and straps makes wiring easy and intuitive<br/>\r\nSTREAMLINED COOLING: Two Aer F120mm fans included for optimal internal airflow & PSU intakes has removable filters & bracket designed for radiators upto 240mm, simplifies installation of water cooling<br/> 2 Years Warranty', '', 16, '', 'Mid Tower', 'Radiator Support Front: 2x 140 or 2x 120mm with Pull\r\nRear: 1x 120mm, Fan Support Front: 2 x 120/ 2 x 140mm, Top: 1x 120mm/ 1x 140mm (included), Rear: 1x 120mm (included)', '1x USB 3.1 Gen 2 Type-C, 1x USB 3.1 Gen 1 Type-A, 1 x HD Audio', ' Mini ITX, mATX, ATX Motherboards');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `userid` varchar(50) NOT NULL,
  `cartid` int(10) NOT NULL,
  `productid` varchar(10) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `quantity` int(2) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`userid`, `cartid`, `productid`, `product_name`, `product_image`, `quantity`, `price`) VALUES
('8', 213, 'mse0000003', 'Logitech G 402 Hyperion Fury Wired Gaming Mouse, 4,000 DPI, Lightweight, 8 Programmable Buttons', '/mouse/mse0000003/mse1.jpg', 1, 2345),
('8', 214, 'mb00000001', 'Asrock H410M-HDV M.2 Motherboard', '/motherboard/mb00000001/mb1.jpg', 1, 6980),
('7', 217, 'cbt0000005', 'NZXT H510 Middle Tower Supports Mini-ITX, MicroATX, and ATX Computer Cabinet Black/Red', '/cabinet/cbt0000005/cbt1.jpg', 7, 6648);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `ID` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `CustomerName` varchar(30) NOT NULL,
  `CustomerEmail` varchar(30) NOT NULL,
  `ComplaintStatus` varchar(15) NOT NULL,
  `ComplaintDesc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`ID`, `CustomerID`, `CustomerName`, `CustomerEmail`, `ComplaintStatus`, `ComplaintDesc`) VALUES
(1, 7, 'Pruthvi', 'dhamechapruthvi@gmail.com', 'Resolved', 'This website has no issues '),
(2, 7, 'Pruthvi', 'dhamechapruthvi@gmail.com', 'Pending', 'this is another complaint');

-- --------------------------------------------------------

--
-- Table structure for table `featured_product_details`
--

CREATE TABLE `featured_product_details` (
  `productid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `graphics_card_details`
--

CREATE TABLE `graphics_card_details` (
  `gcid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `gcName` varchar(100) NOT NULL,
  `gcCompany` varchar(20) NOT NULL,
  `gcPrice` int(5) NOT NULL,
  `gcDescription` varchar(500) NOT NULL,
  `gcKeywords` varchar(500) NOT NULL,
  `gcQuantity` int(5) NOT NULL,
  `gcImg` varchar(100) NOT NULL,
  `gcMemory` varchar(10) NOT NULL,
  `gcEngineClock` varchar(10) NOT NULL,
  `gcBoostClock` varchar(10) NOT NULL,
  `gcMemoryClock` varchar(10) NOT NULL,
  `gcDimensions` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphics_card_details`
--

INSERT INTO `graphics_card_details` (`gcid`, `cid`, `gcName`, `gcCompany`, `gcPrice`, `gcDescription`, `gcKeywords`, `gcQuantity`, `gcImg`, `gcMemory`, `gcEngineClock`, `gcBoostClock`, `gcMemoryClock`, `gcDimensions`) VALUES
('gc00000001', 'gc', 'Asus TUF Gaming GeForce GTX 1650 Super 4GB Edition Graphics Card (TUF-GTX1650S-O4G-GAMING)', 'Asus', 15999, 'GeForce GTX 1650 SUPER, 1280 CUDA Cores, 4GB GDDR6, 128 Bit Memory Bus, 1770 MHz Boost, 1530 MHz Base 1800 overcloacked, Memory Speed 12002 MHz<br/> DVI Output : Yes x 1 (Native) (DVI-D), HDMI Output : Yes x 1 (Native) (HDMI 2.0b)\r\nDisplay Port : Yes x 1 (Native) (DisplayPort 1.4) <br/>\r\nHDCP Support : Yes (2.2), Microsoft DirectX 12 API, Vulkan API, OpenGL 4.6, Power Connectors: 1 x 6-pin', '', 45, '', '4GB GDDR6', '1530MHz', '1770MHz', '12002 MHz', '20.6 x 12.4 x 4.6 cm'),
('gc00000002', 'gc', 'Asus TUF Gaming GeForce GTX 1660 Super 6GB Edition \r\nGraphics Card (TUF-GTX1660S-O6G-GAMING)', 'Asus', 22260, 'GeForce GTX 1660 SUPER, 1408 CUDA Cores, 6GB GDDR6, 192 Bit Memory Bus, 1815 MHz Boost, 1530 MHz Base 1845 overcloacked, Memory Speed 14002 MHz <br/> DVI Output : Yes x 1 (Native) (DVI-D)\r\nHDMI Output : Yes x 1 (Native) (HDMI 2.0b)\r\nDisplay Port : Yes x 1 (Native) (DisplayPort 1.4) <br/>\r\nHDCP Support : Yes (2.2), Microsoft DirectX 12 API, Vulkan API, OpenGL 4.6, Power Connectors: 1 x 8-pin', '', 34, '', '6GB GDDR6', '1530MHz', '1815MHz', '14002Mhz', '20.6 x 12.4 x4.6 cm'),
('gc00000003', 'gc', 'ZOTAC Gaming GeForce RTX 2060 6GB GDDR6 192-bit Gaming Graphics Card, ZT-T20600H-10M', 'Zotac', 29999, 'New turing architecture, real-time raytracing, dlss with deep learning ai<br/> 6gb 192-bit gddr6<br/> Dual slot, super compACt 8.3-inch card<br/> 4k/ HDR/ VR ready<br/> 3 x DisplayPort 1.4, 1 x HDMI 2.0b<br/> Boost clock 1680 mhz \r\n', '', 42, '', '6GB GDDR6', '1350MHz', '11680MHz', '14002 MHz', '20.9 x 11.9 x 4.1 cm'),
('gc00000004', 'gc', 'ZOTAC Gaming GeForce RTX 2070 Super Mini 8GB GDDR6 256-Bit 14Gbps Graphics Card, IceStorm 2.0\r\n', 'Zotac', 41550, 'Turing architecture, Ray Tracing Cores, tensor Cores, NVIDIA dlss<br/> 8GB 256-Bit GDDR6, 14Gbps<br/> Icestorm 2. 0, our strongest cooling, metal wraparound backplate<br/> 4K ready, 4 Display ready<br/> Super compact 8. 3-Inch length<br/>\r\n3 x DisplayPort 1. 4, 1 x HDMI 2. 0B<br/>\r\nBoost Clock 1770 MHz', '', 23, '', '8GB GDDR6', 'NA', '1770MHz', '14002Mhz', '20.9 x 12.6 x 4.1cm');

-- --------------------------------------------------------

--
-- Table structure for table `headphone_details`
--

CREATE TABLE `headphone_details` (
  `hdpid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `hdpName` varchar(100) NOT NULL,
  `hdpCompany` varchar(20) NOT NULL,
  `hdpPrice` int(5) NOT NULL,
  `hdpDescription` varchar(500) NOT NULL,
  `hdpKeywords` varchar(500) NOT NULL,
  `hdpQuantity` int(5) NOT NULL,
  `hdpimg` varchar(100) NOT NULL,
  `hdpType` varchar(20) NOT NULL,
  `hdpDriverSize` varchar(20) NOT NULL,
  `hdpFrequencyRange` varchar(10) NOT NULL,
  `hdpWireless` varchar(10) NOT NULL,
  `hdpMic` varchar(10) NOT NULL,
  `hdpNoiseCancellation` varchar(20) NOT NULL,
  `hdpImpedance` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headphone_details`
--

INSERT INTO `headphone_details` (`hdpid`, `cid`, `hdpName`, `hdpCompany`, `hdpPrice`, `hdpDescription`, `hdpKeywords`, `hdpQuantity`, `hdpimg`, `hdpType`, `hdpDriverSize`, `hdpFrequencyRange`, `hdpWireless`, `hdpMic`, `hdpNoiseCancellation`, `hdpImpedance`) VALUES
('hdp0000001', 'hdp', 'RHA - MA390 Universal', 'RHA', 1899, 'WIRED CONNECTIVITY 3.5mm Input<br/> 130.8 DYNAMIC Neodymium DRIVERS FOR A POWERFUL BASS-DRIVEN SOUND<br/> AEROPHONIC™ ALUMINIUM DESIGN FOR MAXIMUM ISOLATION, MINIMUM DISTORTION<br/> TRULY UNIVERSAL: WORKS WITH ALL PHONES ALIKE<br/> 3 PAIRS OF TIPS FOR COMFORTABLE CUSTOMIZABLE FIT FOR LONGER LISTENING DURATIONS<br/> 2 YEAR WARRANTY<br/> SENSITIVITY: 89dB', '', 76, '', 'In-ear', 'Unavailable', '16Hz-22KHz', 'No', 'Yes', 'No', '16 Ohms'),
('hdp0000002', 'hdp', 'Sennheiser Over Ear Wireless HD 350BT Black Headphone', 'Sennheiser', 5999, 'Great wireless sound with deep dynamic bass and codec support including AAC and AptX Low Latency<br/> 30-hour battery life 300mAh<br/> App support providing an equalizer<br/> Podcast Mode and Firmware updates<br/> 2 YEAR WARRANTY<br/> Intuitive controls including Virtual Assistant button for Siri and Google Assistant<br/> USB-C fast charging and advanced wireless Bluetooth 5.0 technology for effortlessly reliable connectivity<br/> Sensity 108 DB', '', 43, '', 'Over Over', 'Unavailable', '18Hz-22KHz', 'Bluetooth', 'Yes', 'No', 'NA'),
('hdp0000003', 'hdp', 'Sony WH-1000XM3 Wireless Noise Cancelling Headphones, Bluetooth Headset with Mic', 'Sony', 21990, 'Active Noise Cancellation (ANC), Alexa enabled (In-built) Activate with a simple touch<br/> Cover the right ear cup with your palm to turn down your music<br/> WH-1000XM3 adjusts the ambient sound to your activity<br/> 30 hrs Long battery life, \r\nQuick charging<br/> Touch controls : Change the track, turn the volume up or down and take or make calls by tapping or swiping the panel with your fingertip <br/> Super soft, pressure-relieving earpads in foamed urethane<br/> 1 Year of Warranty<br/> Sen', '', 12, '', 'Over Ear with ANC', '40 mm', '4-40KHz', 'Bluetooth', 'Yes', 'Yes', '47 ohm'),
('hdp0000004', 'hdp', 'Corsair HS35 Stereo Gaming Headset - Headphones Designed for PC and Mobile – Carbon', 'Corsair', 3299, 'Compatible with PC, Xbox One, PS4, Nintendo Switch and mobile devices<br/> custom-tuned 50mm neodymium speaker drivers<br/> A fully detachable unidirectional microphone is optimized for voice quality while reducing ambient noise<br/> Plush memory foam with adjustable earcups, combined with lightweight construction<br/>\r\nOn-ear volume and mute controls let you adjust on-the-fly<br/> Discord-certified<br/> Sensitivity 113dB, ', '', 34, '', ' Over Ear Gaming', '50 mm', '20Hz-20kHz', 'No', 'Yes', 'No', '32 ohms'),
('hdp0000005', 'hdp', 'HyperX Cloud Alpha Pro Gaming Headset for PC, PS4 & Xbox One, Nintendo Switch (HX-HSCA-RD/AS)', 'HyperX', 8690, 'HyperX Dual chamber drivers for more distinction and less distortion<br/> Signature award-winning HyperX comfort<br/> Type: Circumaural, closed back<br/> Durable aluminium frame with expanded headband<br/> Detachable braided cable with convenient in-line audio control<br/> detachable noise cancellation microphone, Microphone Frequency response: 50Hz-18,000Hz,<br/>Sensitivity 98db<br/> Warranty 2 Years', '', 26, '', 'Over Ear Gaming', '50 mm', '13Hz–27KHz', 'No', 'Yes', 'No', '65 ohms');

-- --------------------------------------------------------

--
-- Table structure for table `keyboard_details`
--

CREATE TABLE `keyboard_details` (
  `kbid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `kbName` varchar(100) NOT NULL,
  `kbCompany` varchar(20) NOT NULL,
  `kbPrice` int(5) NOT NULL,
  `kbDescription` varchar(500) NOT NULL,
  `kbKeywords` varchar(500) NOT NULL,
  `kbQuantity` int(5) NOT NULL,
  `kbImg` varchar(100) NOT NULL,
  `kbSwitchType` varchar(50) NOT NULL,
  `kbLayout` varchar(50) NOT NULL,
  `kbInterface` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyboard_details`
--

INSERT INTO `keyboard_details` (`kbid`, `cid`, `kbName`, `kbCompany`, `kbPrice`, `kbDescription`, `kbKeywords`, `kbQuantity`, `kbImg`, `kbSwitchType`, `kbLayout`, `kbInterface`) VALUES
('kb00000001', 'kb', 'Dell KB216 Wired Multimedia USB Keyboard', 'Dell', 599, 'Hot keys function: volume, mute, play/pause, backward, forward<br/>The convenient multimedia keys let you easily access functions such as play, pause, rewind and fast-forward plus volume control<br/> Compact design that still features a full-sized keyboard and number pad<br/> Dell wired keyboard also has a palm rest that is available for separate purchase<br/>Interface: usb<br/> device type: keyboard - wired<br/>dimensions (wxdxh) 44. 2 Cm x 12. 7 Cm x 2. 44 Cm, weight: 503 g<br/>1 Year warranty', '', 160, '', 'Membrane', 'Full key layout With multimedia keys ', 'Wired USB'),
('kb00000002', 'kb', 'Logitech K480 Wireless Multi-Device Keyboard for Windows, Apple iOS android - Black', 'Logitech', 2595, 'WIRELESS BLUETOOTH MULTIDEVICE KEYBOARD<br/> EASY-SWITCH DIAL: Just turn the dial of the Logitech K480 keyboard to switch typing between 3 connected Bluetooth wireless devices<br/> INTEGRATED CRADLE: A cradle to hold your phone or tablet<br/> COMPATIBLE DEVICES - PC: Windows 7, Windows 8, Windows 10 ; Mac: Mac OS X or later ; Chrome OS ; iPad or iPhone: iOS 5 or later ; Android tablet or smartphone: Android 3.2 or later<br/>\r\nWARRANTY: 1 Year', '', 34, '', 'Membrane', '10-key-less with windows, mac android and ios keys', 'Bluetooth Multidevice'),
('kb00000003', 'kb', 'Redragon Karura K502 USB Gaming Keyboard', 'Redragon', 1459, 'Low Profile Design RGB LED Backlit Illuminated 104 Key ERGONOMIC Keyboard<br/> SILENT GAMING, RGB BACKLIT GAMING, ERGONOMIC SPLASH PROOF, BACKLIT ANTI GHOSTING, RGB Advanced backlight control<br/>7-RGB Backlight Colors and 4 different lighting modes, The user has the ability to adjust backlight brightness, breathing speed<br/>\r\nNon-Slip Ergonomic Design<br/> The K502 comes with Non-Slip adjustable rear feet and extra-large Wrist rest for the perfect typing angle', '', 56, '', 'Membrane', '104 key layout', 'Wired USB'),
('kb00000004', 'kb', 'Corsair K55 RGB Gaming Keyboard LED Backlit Keys Media Controls Wrist Rest Included', 'Corsair', 3399, 'Three-zone dynamic RGB backlighting with 10+ preconfigured vivid RGB lighting modes allow you to choose immersive lighting effects<br/> 6 programmable macro keys enable powerful actions, key remaps and combos<br/> Dedicated Volume and multimedia controls for direct Audio control without interrupting your game<br/> Quiet and responsive keys give a satisfying feel<br/> Multi-key anti-ghosting ensures the most accurate simultaneous key presses<br/> Warranty 2 Years', '', 26, '', 'Membrane', '110 keys plus 7 multimedia keys and 6 macro keys', 'Wired USB'),
('kb00000005', 'kb', 'Logitech G512 Mechanical Gaming Keyboard,RGB Lightsync Backlit Keys,GX Brown Key Switches Black', 'Logitech', 7995, 'Personalize lighting for each individual key, customize lighting effects with Logitech G HUB.1<br/> GX Brown is a traditional mechanical switch<br/> USB passthrough port makes it a snap to plug in your mouse, flash drive or phone<br/> Media and lighting controls are right at your fingertips<br/> Use FN + F keys to control volume, play and pause, skip track, mute, toggle lighting, enter game mode, etc.<br/> Customize lighting, Brushed Aluminum Case<br/> 2 Years Warranty', '', 11, '', 'Mechanical GX Brown', 'Full key layout With 7 multimedia keys ', 'Wired USB');

-- --------------------------------------------------------

--
-- Table structure for table `laptop_details`
--

CREATE TABLE `laptop_details` (
  `ltpid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `ltpName` varchar(200) NOT NULL,
  `ltpCompany` varchar(20) NOT NULL,
  `ltpPrice` int(6) NOT NULL,
  `ltpDescription` varchar(500) NOT NULL,
  `ltpKeywords` varchar(500) NOT NULL,
  `ltpQuantity` varchar(20) NOT NULL,
  `ltpImg` varchar(100) NOT NULL,
  `ltpProcessor` varchar(20) NOT NULL,
  `ltpGraphics` varchar(20) NOT NULL,
  `ltpRAM` varchar(10) NOT NULL,
  `ltpScreenSize` varchar(10) NOT NULL,
  `ltpScreenRefreshRate` varchar(10) NOT NULL,
  `ltpStorage` varchar(30) NOT NULL,
  `ltpOS` varchar(10) NOT NULL,
  `ltpPorts` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop_details`
--

INSERT INTO `laptop_details` (`ltpid`, `cid`, `ltpName`, `ltpCompany`, `ltpPrice`, `ltpDescription`, `ltpKeywords`, `ltpQuantity`, `ltpImg`, `ltpProcessor`, `ltpGraphics`, `ltpRAM`, `ltpScreenSize`, `ltpScreenRefreshRate`, `ltpStorage`, `ltpOS`, `ltpPorts`) VALUES
('ltp0000001', 'ltp', 'ASUS VivoBook 15 Intel Celeron N3350 15.6-inch HD Laptop (4GB RAM/1TB HDD/Windows 10/Integrated Graphics/Black/2.0 kg), X540NA-GQ285T', 'Asus', 24949, 'Processor: Intel Celeron N3350 Processor, 1.1 GHz (2MB Cache, up to 2.4 GHz, 2 Cores, 2 Threads)<br/> Memory: 4GB LPDDR3 on board RAM<br/> Storage: 1TB SATA 5400RPM 2.5-inch HDD<br/> Graphics: Integrated Intel HD Graphics 500<br/> Display: 15.6-inch (16:9) LED-backlit LCD HD (1366x768) 60Hz Anti-Glare Panel with 45% NTSC<br/> Operating System: Pre-loaded Windows 10 Home with lifetime validity<br/> Laptop weight: 2 kg<br/>33WHrs, 3-Cell Li-ion battery<br/>Keyboard: Full-size Chiclet keyboard', '', '56', '', 'Intel Celeron N3350', 'Intel HD 500', '4GB DDR3', '15.6 inch', '60Hz', '1TB SATA 5400RPM HDD', 'Windows 10', 'USB 3.0 slots X 1, USB 2.0 slots X 2'),
('ltp0000002', 'ltp', 'Lenovo IdeaPad Slim 3i Intel Core i3 10th Gen 15.6\" FHD Thin and Light Laptop (4GB/1TB HDD/Windows10/Platinum Grey/1.85Kg), 81WE00RVIN', 'Lenovo', 30990, 'Processor: 10th Gen Intel Core i3 (i3-1005G1) Speed: 1.2 GHz (Base) - 3.4 GHz (Max) 2 Cores 4MB Cache<br/>\r\nMemory and Storage: 4GB RAM DDR4-2666, Upgradable up to 12GB 1TB HDD<br/>\r\nDisplay: 15.6\" Full HD (1920x1080) Anti-Glare<br/>\r\nDesign: 1.99 cm Thin and 1.85 kg Light Narrow Bezel <br/> Battery Life: 5 Hours | Rapid Charge (Up to 80% in 1 Hour)<br/>\r\nCamera (Built-in): 0.3 MP with Privacy Shutter Fixed Focus Integrated Dual Array Microphone<br/>\r\nAudio: 2 x 1.5W Stereo Speakers | HD Audio |', '', '46', '', 'Intel Core i3-1005G1', 'Intel UHD Graphics', '4GB DDR3', '15.6 inch', '60Hz', '1 TB HDD', 'Windows 10', '2 x USB 3.1 (Gen 1), USB 2.0, HDMI 1.4b, SD card reader'),
('ltp0000003', 'ltp', 'ASUS TUF Gaming FX505DT 15.6\" FHD 120Hz Laptop GTX 1650 4GB Graphics (Ryzen 5-3550H/8GB RAM/512GB PCIe SSD/Windows 10/Stealth Black/2.20 Kg), FX505DT-AL106T', 'Asus', 50990, 'Processor: AMD Ryzen 5-3550H processor, 2.1GHz Base speed (6MB cache, up to 3.7GHz)<br/>\r\nMemory & Storage: 8GB DDR4 2400MHz RAM upgradeable upto 32GB RAM with<br/> NVIDIA GeForce GTX 1650 GDDR5 4GB VRAM Graphics<br/> Storage: PCIe NVMe 512GB M.2 SSD<br/>\r\nDisplay: 15.6\" (16:9) LED-backlit FHD (1920x1080) 120Hz Anti-Glare IPS-level Panel with 45% NTSC<br/>\r\nLaptop weight 2.20kg <br/> Lithium battery 3-Cell<br/>\r\nHypercool Technology Keyboard: Highlighted WASD key group<br/> All-zone RGB Backligh', '', '43', '', 'AMD Ryzen 5-3550H', 'NVIDIA GTX 1650', '8GB', '15.6 inch', '120Hz', '512GB PCIe SSD', 'Windows 10', '1 x COMBO audio jack\r\n1 x Type-A USB2.0\r\n2 x Type-A USB 3.1 (Gen 1)\r\n1 x RJ45 LAN jack for LAN insert\r\n1 x HDMI, HDMI support 2.0'),
('ltp0000004', 'ltp', 'ASUS TUF Gaming A15 Laptop 15.6\" FHD 144Hz Ryzen 5 4600H, GTX 1650 4GB Graphics (8GB RAM/1TB HDD + 256GB NVMe SSD/Windows 10/Bonfire Black/2.30 Kg), FA506IH-AL057T', 'Asus', 62990, 'Processor: AMD Ryzen 5 4600H Processor 3.0 GHz (8MB Cache, up to 4.0 GHz, 6 Cores, 12 Threads)<br/>\r\nMemory & Storage: 8GB DDR4 3200MHz RAM, Upgradeable up to 32GB using 2x SO-DIMM Slot with | Storage: 1TB 5400RPM 2.5-inch SATA HDD + 256GB M.2 NVMe PCIe 3.0 SSD<br/>\r\nGraphics: NVIDIA GeForce GTX 1650 GDDR6 4GB VRAM<br/>\r\nDisplay: 15.6-inch (16:9) LED-backlit FHD (1920x1080) 144Hz Refresh Rate Adaptive Sync<br/> Laptop Weight: 2.30 Kg | 48WHrs Battery<br/>\r\nCooling System: Dual-Fan Design', '', '34', '', 'AMD Ryzen 5 4600H', 'NVIDIA GTX 1650', '8GB DDR$', '15.6 inch', '144Hz', '1TB HDD + 256GB NVMe SSD', 'Windows 10', '1 x COMBO audio jack\r\n2 x Type-A USB 3.2 (Gen 1)\r\n1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4\r\n1 x Type-A USB2.0\r\n1 x RJ45 LAN jack for LAN insert\r\n1 x HDMI, HDMI support 2.0b\r\n1 x AC adapter'),
('ltp0000005', 'ltp', 'ASUS ZenBook Duo UX481FL-BM5811T Intel Core i5 10th Gen 14-inch FHD Thin and Light Laptop (8GB RAM/512GB NVMe SSD/Windows 10/2GB NVIDIA GeForce MX250 Graphics/ScreenPad Plus/1.50 Kg), Celestial Blue', 'Asus', 89980, 'Processor: 10th Gen Intel Core i5-10210U Processor 1.6 GHz (6MB Cache, up to 4.2 GHz, 4 Cores, 8 Threads)<br/>\r\nMemory: 8GB Onboard LPDDR3 2133MHz RAM <br/> Storage: 512GB M.2 NVMe PCIe 3.0 <br/>\r\nGraphics: NVIDIA GeForce MX250 GDDR5 2GB VRAM<br/>\r\nDisplay: 14” LED-backlit FHD (1920 x 1080) 16:9 Anti-Glare Display, 100% sRGB, PANTONE Validated<br/> Laptop weight 1.5 Kg<br/> 70Whrs battery<br/>\r\nScreenPad Plus: 12.6-inch touch display<br/> Keyboard : Full-size Backlit keyboard ErgoLift hinge with', '', '12', '', 'Intel Core i5-10210U', 'NVIDIA MX250', '8GB DDR3', '14 inch', '60Hz', '512GB NVMe SSD', 'Windows 10', '1 x USB 3.1 Gen 2 Type-C™ (up to 10Gbps)\r\n1 x USB 3.1 Gen 2 Type-A (up to 10Gbps)\r\n1 x USB 3.1 Gen 1 Type-A (up to 5Gbps)\r\n1 x HDMI\r\n1 x Audio combo jack\r\n1 x MicroSD card reader\r\n1 x DC-in');

-- --------------------------------------------------------

--
-- Table structure for table `monitor_details`
--

CREATE TABLE `monitor_details` (
  `monid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `monName` varchar(100) NOT NULL,
  `monCompany` varchar(20) NOT NULL,
  `monPrice` int(5) NOT NULL,
  `monDescription` varchar(500) NOT NULL,
  `monKeywords` varchar(500) NOT NULL,
  `monQuantity` varchar(5) NOT NULL,
  `monImg` varchar(100) NOT NULL,
  `monScreenSize` varchar(10) NOT NULL,
  `monResolution` varchar(10) NOT NULL,
  `monAspectRatio` varchar(10) NOT NULL,
  `monDisplayPorts` varchar(100) NOT NULL,
  `monRefreshRate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitor_details`
--

INSERT INTO `monitor_details` (`monid`, `cid`, `monName`, `monCompany`, `monPrice`, `monDescription`, `monKeywords`, `monQuantity`, `monImg`, `monScreenSize`, `monResolution`, `monAspectRatio`, `monDisplayPorts`, `monRefreshRate`) VALUES
('mon0000001', 'mon', 'LG 22 inch (55cm) IPS Monitor - Full HD, IPS Panel with VGA, HDMI, DVI, Audio Out Ports - 22MP68VQ', 'LG', 7899, 'Screen Size: 22 inch (54.61 cm) Full HD (1920 X 1080) Borderless IPS Panel<br/>\r\nConnectivity Port: 1 VGA Port, 1 HDMI Port, 1 DVI Port, 1 Audio-Out Port, 1 Headphone Port<br/>\r\nAspect Ratio: 16:9, Brightness (Typical): 250 cd/m², Consumption( Normal On(EPA)): 13.7W<br/>\r\nRefresh Rate: 60 Hz, Response Time: 5 ms<br/>\r\nViewing Angle: 178 degree horizontal 178 degree vertical<br/>\r\nEnjoy Smoother Game Play<br/>\r\nWall Mount: Yes', '', '67', '', '22 inch', '1080p', '16:9', 'D-Sub, DVI-D, HDMI , Headphone Out', '60Hz'),
('mon0000002', 'mon', 'Acer B227Q 21.5\" IPS LED Full HD Monitor - Inbuilt HD Web CAM with MIC 2W X 2 Speakers', 'Acer', 11099, '21.5\" IPS Full HD Resolution with Zero Frame Design, 178 Degree View Angle<br/>\r\nBuild In HD Webcam -4 MS Response Time - 250 Nits Brightness<br/>\r\nHeight Adjustment ErgoStand-Tilt, swivel and height adjust with flexibility<br/>\r\nHDMI + VGA + Display Port + USB 3.0 x 4 Ports with Inbox DP, VGA and USB Cable<br/>\r\nStereo Speakers 2W x 2 - Wall Mount Ready<br/>\r\nBlue Light Shield - Flickerless - Comfyview - Low Dimming Technology', '', '43', '', '21.5 inch', '1080p', '16:9', 'HDMI, DisplayPort, USB 3.0 Ports 4, VGA, Audio Line In, Audio Line Out', '60Hz'),
('mon0000003', 'mon', 'BenQ Zowie XL2411P 24-inch (60.96 cm) 144Hz FHD (1080p) Gaming Monitor for Esports - M353299', 'BenQ', 15990, 'Ultra-fast 144 Hz refresh rate, True 1ms Response Time (GTG), eQualizer technology to enhance visual clarity<br/> Multiple connectivity options featuring DisplayPort, Dual-Link DVI-D to reach 144Hz, HDMI, and Headphone/Microphone Jack input<br/>\r\nHeight adjustment upto 130mm; tilt, and swivel adjustment with VESA Compatibility: 100mm x 100mm for improved ergonomicsv\r\nSpecially-designed bezel frame minimizes visual distractions<br/> low blue light and flicker free technology for reduced eye strai', '', '43', '', '24 inch', '1080p', '16:9', 'DVI-DL, HDMIx1, DP1.2, headphone jack', '144Hz'),
('mon0000004', 'mon', 'Samsung 27 inch Curved Speakers FHD VA Panel with DP HDMI VGA Ports LC27T550FDWXXL', 'Samsung', 18999, '27\" Curved 1000R FHD monitor<br/> Panel Type VA<br/> AMD Freesync, 75hz refresh rate<br/> Incredibly slim and sleek design<br/> Response Time 4(GTG), ', '', '37', '', '27 inch', '1080p', '16:9', 'D-Sub, EA, Display Port, Display Port 1.2, HDMI 1.4, Audio In, Headphone', '75Hz'),
('mon0000005', 'mon', 'BenQ 28-inch UHD 4K HDR 1ms Response Time Monitor with Free Sync HDMI DP Built-in Speakers EL2870U', 'BenQ', 21990, '28-inch LED UHD (3840x2160 resolution) TN Display, HDR<br/> Brightness Intelligence Plus Technology: Monitor adjusts brightness and color temperature according to on-screen content and ambient light conditions<br/> AMD FreeSync<br/> Connectivity: HDMI 2.0, DP1.4, DisplayPort inputs for multi-device connection<br/> Built-in Speakers<br/> 3 Years on-site warranty', '', '12', '', '28 inch', '4K', '16:9', 'HDMI (v2.0)x2, DisplayPort (v1.4)x1', '60Hz'),
('mon0000006', 'mon', 'LG Ultragear 27\" 240Hz 1ms G-Sync Compatible HDR 10 IPS Display Height Adjust Pivot Stand 27GN750', 'LG', 27999, '27 inch UltraGear Gaming Monitor - G-Sync Compatible, 240Hz Refresh Rate, 1ms Response Time<br/> Full HD IPS Screen with HDR 10 - 400 nits Brightness, sRGB 99%<br/>, Ports: Display Port, HDMI x 2, Headphone Out, USB (1 Up 2 Down)<br/> 3 Side Virtually Borderless Screen Design<br/> height Adjustable, Titt & Pivot Stand - Wall Mount (VESA 100 x 100)<br/>Warranty: 3 Year Comprehensive Parts & Labor', '', '9', '', '27 inch', '1080p', '16:9', 'HDMI x 2 DisplayPort (ver. 1.4) Headphone Out USB Up-stream x 1 USB Down-stream x 2', '240Hz');

-- --------------------------------------------------------

--
-- Table structure for table `motherboard_details`
--

CREATE TABLE `motherboard_details` (
  `mbid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `mbName` varchar(100) NOT NULL,
  `mbCompany` varchar(20) NOT NULL,
  `mbPrice` int(5) NOT NULL,
  `mbDescription` varchar(1000) NOT NULL,
  `mbKeywords` varchar(500) NOT NULL,
  `mbQuantity` int(5) NOT NULL,
  `mbImg` varchar(100) NOT NULL,
  `mbChipset` varchar(10) NOT NULL,
  `mbSocket` varchar(10) NOT NULL,
  `mbMemorySlots` varchar(10) NOT NULL,
  `mbMaxMemory` varchar(10) NOT NULL,
  `mbExpansionSlots` varchar(150) NOT NULL,
  `mbStorageSlots` varchar(150) NOT NULL,
  `mbInternalIO` varchar(500) NOT NULL,
  `mbBackIO` varchar(500) NOT NULL,
  `mbFormFactor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard_details`
--

INSERT INTO `motherboard_details` (`mbid`, `cid`, `mbName`, `mbCompany`, `mbPrice`, `mbDescription`, `mbKeywords`, `mbQuantity`, `mbImg`, `mbChipset`, `mbSocket`, `mbMemorySlots`, `mbMaxMemory`, `mbExpansionSlots`, `mbStorageSlots`, `mbInternalIO`, `mbBackIO`, `mbFormFactor`) VALUES
('mb00000001', 'mb', 'Asrock H410M-HDV M.2 Motherboard', 'Asrock', 6980, 'Supports 10th Gen Intel® Core™ Processors (Socket 1200)<br/>\r\n7 Power Phase Design<br/>\r\nSupports DDR4 2933 MHz<br/>\r\n1 PCIe 3.0 x16, 1 PCIe 3.0 x1, 1 M.2 Key E for WiFi<br/>\r\nGraphics Output Options: HDMI, DVI-D, D-Sub<br/>\r\n7.1 CH HD Audio (Realtek ALC887 Audio Codec)<br/>\r\n4 SATA3, 1 Ultra M.2 (PCIe Gen3 x4 & SATA3)<br/>\r\n4 USB 3.2 Gen1 (2 Front, 2 Rear)\r\nIntel® Gigabit LAN', '', 41, '', 'Intel H410', 'LGA 1200', '2', '64GB', '1 x PCI Express 3.0 x16 Slot*,  1 x PCI Express 3.0 x1 Slot', '4 x SATA3 6.0 Gb/s Connectors,e M.2 device, 1 x Ultra M.2 Socket (M2_1), 2260/2280 M.2 SATA3 6.0 Gb/s module and M.2 PCI Express module up to Gen3 x4', '1 x Print Port Header\r\n1 x COM Port Header\r\n1 x SPI TPM Header\r\n1 x Chassis Intrusion and Speaker Header\r\n1 x CPU Fan Connector (4-pin)\r\n1 x CPU/Water Pump Fan Connector (4-pin)\r\n2 x Chassis/Water Pump Fan Connectors (4-pin)\r\n1 x 24 pin ATX Power Connector\r\n1 x 8 pin 12V Power Connector\r\n1 x Front Panel Audio Connector\r\n2 x USB 2.0 Headers (Support 4 USB 2.0 ports) (Supports ESD Protection)\r\n1 x USB 3.2 Gen1 Header (Supports 2 USB 3.2 Gen1 ports) (Supports ESD Protection)', '1 x Antenna Bracket, 1 x PS/2 Mouse/Keyboard Port, 1 x D-Sub Port, 1 x DVI-D Port, 1 x HDMI Port, 4 x USB 2.0 Ports (Supports ESD Protection), 2 x USB 3.2 Gen1 Ports (Supports ESD Protection), 1 x RJ-45 LAN Port with LED (ACT/LINK LED and SPEED LED), HD Audio Jacks: Line in / Front Speaker / Microphone', 'Micro ATX'),
('mb00000002', 'mb', 'MSI B450M PRO-M2 Max AMD Ryzen AM4 M.2 USB 3 DDR4 D-Sub DVI HDMI Micro-ATX Motherboard', 'MSI', 6902, 'Supports 1st, 2nd and 3rd Gen AMD Ryzen™ / Ryzen™ with Radeon™ Vega Graphics and 2nd Gen AMD Ryzen™ with Radeon™ Graphics / Athlon™ with Radeon™ Vega Graphics Desktop Processors for Socket AM4<br/>\r\nSupports DDR4 Memory, up to 3466+(OC) MHz<br/>\r\nTurbo M.2: Running at PCI-E Gen3 x4 maximizes performance for NVMe based SSDs.<br/>\r\nDDR4 Boost: Advanced technology to deliver pure data signals for the best performance and stability.<br/>\r\nAudio Boost: Reward your ears with studio grade sound quality.<br/>\r\nEZ Debug LED: Easiest way to troubleshoot<br/>\r\nCore Boost: With premium layout and fully digital power design to support more cores and provide better performance.<br/>\r\nPCI-E Steel Slot: Protecting VGA cards against bending.', '', 37, '', 'B450', 'AMD AM4', '2', '64GB', '1 PCI-E X16, 2 PCI-E X1\r\n', '4 SATA III, 1 M.2 Solt', '	\r\n1 x 24-pin ATX main power connector\r\n1 x 8-pin ATX 12V power connector\r\n4 x SATA 6Gb/s connectors\r\n2 x USB 2.0 connectors (supports additional 4 USB 2.0 ports)\r\n1 x USB 3.1 Gen1 connector (supports additional 2 USB 3.1 Gen1 ports)\r\n1 x 4-pin CPU fan connector\r\n1 x 4-pin system fan connector\r\n1 x Front panel audio connector\r\n2 x Front panel connectors\r\n1 x TPM module connector\r\n1 x Chassis Intrusion connector\r\n1 x Serial port connector\r\n1 x LED strip connector\r\n1 x Clear CMOS jumper', '4 USB 3.2 ports, 2 USB 2.0 ports, AUDIO PORTS 7.1-Channel High Definition Audio, DVI-D VGA HDMI, LAN port', 'Micro ATX'),
('mb00000003', 'mb', 'GIGABYTE B460M Motherboard with 8118 Gaming LAN, PCIe Gen3 x4 M.2, Anti-Sulfur Resistor', 'Gigabyte', 7955, 'Supports 10th Gen Intel® Core™ Processors<br/>\r\nDual Channel Non-ECC Unbuffered DDR4, 2 DIMMs<br/>\r\nHigh Quality Audio Capacitors and Audio Noise Guard with LED Trace Path Lighting<br/>\r\nUltra-Fast M.2 with PCIe Gen3 X4 & SATA Interface<br/>\r\nGIGABYTE Exclusive 8118 Gaming LAN with Bandwidth Management<br/>\r\nSmart Fan 5 features Multiple Temperature Sensors and Hybrid Fan Headers with FAN STOP<br/>\r\nAnti-Sulfur Resistors Design<br/>\r\nUltra Durable™ 15KV Surge LAN Protection<br/>\r\nIntel® Optane™ Memory Ready<br/>\r\nWarranty 3 Years', '', 34, '', 'Intel B460', 'LGA1200', '2', '64GB', '1 x PCI Express x16 slot, running at x16\r\n1 x PCI Express x1 slot', '1 x M.2 connector (Socket 3, M key, type 2242/2260/2280 SATA and PCIe x4/x2 SSD support)\r\n4 x SATA 6Gb/s connectors', '1 x 24-pin ATX main power connector\r\n1 x 8-pin ATX 12V power connector\r\n1 x CPU fan header\r\n1 x system fan header\r\n1 x RGB LED strip header\r\n4 x SATA 6Gb/s connectors\r\n1 x M.2 Socket 3 connector\r\n1 x front panel header\r\n1 x front panel audio header\r\n1 x USB 3.2 Gen 1 header\r\n2 x USB 2.0/1.1 headers\r\n1 x Trusted Platform Module header (For the GC-TPM2.0 SPI/GC-TPM2.0 SPI 2.0 module only)\r\n1 x serial port header\r\n1 x Clear CMOS jumper', '1 x PS/2 mouse port, 1 x PS/2 keyboard port, 1 x D-Sub port, 1 x HDMI port, 4 x USB 3.2 Gen 1 ports, 2 x USB 2.0/1.1 ports, 1 x RJ-45 port, 3 x audio jacks', 'Micro ATX'),
('mb00000004', 'mb', 'MSI MAG Z490 Tomahawk Motherboard', 'MSI', 20999, 'Supports 10th Gen Intel® Core™ / Pentium® Celeron® processors for LGA 1200 socket<br/>\r\nSupports DDR4 Memory, up to 4800(OC) MHz<br/>\r\nSet Core Power Free: 12+1+1 Duet Rail Power System, 8+4 pin CPU power connectors, Core Boost, DDR4 Boost<br/>\r\nPremium Thermal Solution: Extended Heatsink Design and M.2 Shield Frozr are built for high performance system and non-stop works<br/>\r\n2.5G LAN: Upgraded network solution for professional and multimedia use. Delivers a secure, stable and fast network connection<br/>\r\nTurbo M.2: Running at PCI-E Gen3 x4 maximizes performance for NVMe based SSDs<br/>\r\nLightning USB 20G: Powered by ASmedia 3241 USB 3.2 Gen2x2 controller, offering never before seen USB speeds up to 20Gb/s with USB Type-C<br/>\r\nAudio Boost: Reward your ears with studio grade sound quality<br/>\r\nMulti-GPU: With Steel armor PCI-E slots. Supports 2-Way AMD Crossfire<br/>\r\nWarranty 3 Years', '', 24, '', 'Intel Z490', 'LGA 1200', '4', '128GB', '1x PCIe 3.0 x16 slot (from CPU)\r\n1x PCIe 3.0 x16 slot (from PCH? supports x4 mode)\r\n2x PCIe x1 slots (from PCH)', '6x SATA 6Gb/s ports \r\n2x M.2 slots (Key M)\r\nM2_1 supports up to PCIe 3.0 x4 and SATA 6Gb/s, 2242/ 2260/ 2280/ 22110 storage devices ', '1x 24-pin ATX main power connector\r\n1x 8-pin ATX 12V power connector\r\n1x 4-pin ATX 12V power connector\r\n6x SATA 6Gb/s connectors\r\n1x USB 3.2 Gen 1 5Gbps Type-C port\r\n1x USB 3.2 Gen 1 5Gbps connectors \r\n2x USB 2.0 connectors \r\n1x 4-pin CPU fan connector\r\n1x 4-pin water pump connector\r\n6x 4-pin system fan connectors\r\n1x front panel audio connector\r\n2x system panel connectors\r\n1x Chassis Intrusion connector\r\n2x 4-pin RGB LED connector\r\n2x 3-pin RAINBOW LED connectors', 'PS/2 Combo Port\r\nDisplayPort\r\nUSB 3.2 Gen 2 10Gbps (Type-A)\r\n1G LAN Port\r\n2.5G LAN\r\nHD Audio Connectors\r\nUSB 2.0 Ports\r\nHDMI Port\r\nUSB 3.2 Gen 2x2 20Gbps (Type-C)\r\nUSB 3.2 Gen 1 5Gbps (Type-A)\r\nUSB 3.2 Gen 1 5Gbps (Type-A)\r\nOptical S/PDIF OU', 'ATX'),
('mb00000005', 'mb', 'ASUS TUF Gaming B550 Plus AM4 PCIe 4.0 DDR4 (4600 O.C.) 2X M.2 2.5Gb Ethernet and Aura Sync', 'Asus', 15945, 'AMD AM4 socket: Ready for 3rd Gen AMD Ryzen™ processors<br/>\r\nEnhanced power solution: 8+2 DrMOS power stages, ProCool sockets, military-grade TUF components, and Digi+ VRM for maximum durability<br/>\r\nComprehensive cooling: VRM heatsink, PCH fanless heatsink, M.2 heatsink, hybrid fan headers and Fan Xpert 4 utility<br/>\r\nNext-gen connectivity: PCIe 4.0 M.2, USB 3.2 Gen 2 Type-A and Type-C support<br/>\r\nMade for online gaming: 2.5 Gb Ethernet, M.2 slot (Key E) for Wi-Fi module, TUF LANGuard, and Turbo LAN technology<br/>\r\nRealtek S1200A codec: Pristine audio quality with unprecedented 108 dB signal-to-noise ratio for stereo line out and 103 dB SNR for line in<br/>\r\nAI noise-canceling microphone: provides crystal-clear in-game voice communication', '', 27, '', 'AMD B550', 'AMD AM4', '4', '128GB', '1 x PCIe 4.0 x16 (x16 mode), 1 x PCIe 3.0 x16 (x4 mode), 3 x PCIe 3.0 x1 ', '1 x M.2 Socket 3, with M key, type 2242/2260/2280/22110 storage devices support(SATA & PCIe 4.0 x4 mode), 1 x M.2 Socket 3, 6 x SATA 6Gb/s port(s)', '1 x CPU Fan connector\r\n1 x CPU OPT Fan connector\r\n3 x Chassis Fan connectors\r\n1 x AIO_PUMP connector\r\n2 x Aura RGB Strip Headers\r\n1 x Addressable Gen 2 header\r\n1 x USB 3.2 Gen 1(up to 5Gbps)\r\n2 x USB 2.0 connectors\r\n2 x M.2 Socket 3 with M key\r\n1 x M.2 with E key for Wi-Fi module\r\n1 x SPI TPM header\r\n6 x SATA 6Gb/s connectors\r\n1 x 24-pin EATX Power connector\r\n1 x 8-pin EATX 12V Power connectors\r\n1 x Front panel audio connector (AAFP)\r\n1 x Thermal sensor connector\r\n1 x System panel connector', '1 x DisplayPort\r\n1 x HDMI\r\n1 x LAN (2.5G) port(s)\r\n2 x USB 3.2 Gen 2 (teal blue) (1 x Type-A+1 x USB Type-C®)\r\n4 x USB 3.2 Gen 1 (blue) Type-A\r\n2 x USB 2.0 (one port can be switched to USB BIOS FlashBack™)\r\n1 x Optical S/PDIF out\r\n5 x Audio jack(s)\r\n1 x BIOS FlashBack™ Button(s)', 'ATX'),
('mb00000006', 'mb', 'MSI Components MPG X570 Gaming PRO Carbon Wi-Fi Motherboard AMD AM4 ATX', 'MSI', 25800, 'Supports 2nd and 3rd Gen AMD Ryzen / Ryzen with Radeon Vega Graphics Desktop Processors for AM4 socket<br/>\r\nOn-board Wi-Fi 6 (802.11ax) with MU-MIMO support<br/>\r\nMystic Light RGB lets you customize the lighting with 16.8 million colors and 29 effects with support for additional RGB and RAINBOW LED strips<br/>\r\nAUDIO BOOST 4 technology with NAHIMIC 3 software enhancement for immersive experiences<br/>\r\nFROZR Heatsink with patented fan design – Propeller Blade Technology and double ball bearings<br/> Warranty 3 Years', '', 8, '', 'Intel X570', 'AMD AM4', '4', '128GB', '1x PCIe 4.0/3.0 x16 slot (PCI_E1), 1x PCIe 4.0/3.0 x4 slot (PCI_E3), 2x PCIe 3.0 x1 slots', '6x SATA 6Gb/s ports\r\n2x M.2 slots (Key M)', '1x 24-pin ATX main power connector\r\n1x 8-pin ATX 12V power connector\r\n1x 4-pin ATX 12V power connector\r\n6x SATA 6Gb/s connectors\r\n2x USB 2.0 connectors\r\n2x USB 3.2 Gen1 connectors\r\n1x 4-pin CPU fan connector\r\n1x 4-pin water-pump connector\r\n4x 4-pin system fan connectors\r\n1x Front panel audio connector\r\n2x System panel connectors\r\n1x TPM module connector\r\n1x Chassis Intrusion connector\r\n1x 4-pin RGB LED connector\r\n2x 3-pin RAINBOW LED connectors\r\n1x 3-pin CORSAIR connector\r\n1x 2-pin LED Demo Conn', 'Keyboard / Mouse\r\nUSB 3.2 Gen1 Type-A\r\nWireless / Bluetooth\r\nLAN\r\nAudio Connectors\r\nFlash BIOS Button\r\nUSB 2.0\r\nHDMI\r\nUSB 3.2 Gen2 Type-A + C\r\nUSB 3.2 Gen2 Type-A\r\nOptical S/PDIF out', 'ATX');

-- --------------------------------------------------------

--
-- Table structure for table `mouse_details`
--

CREATE TABLE `mouse_details` (
  `mseid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `mseName` varchar(100) NOT NULL,
  `mseCompany` varchar(20) NOT NULL,
  `msePrice` int(5) NOT NULL,
  `mseDescription` varchar(500) NOT NULL,
  `mseKeywords` varchar(500) NOT NULL,
  `mseQuantity` int(5) NOT NULL,
  `msuImg` varchar(100) NOT NULL,
  `mseNumOfBtn` int(1) NOT NULL,
  `mseInterface` varchar(25) NOT NULL,
  `mseDPI` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mouse_details`
--

INSERT INTO `mouse_details` (`mseid`, `cid`, `mseName`, `mseCompany`, `msePrice`, `mseDescription`, `mseKeywords`, `mseQuantity`, `msuImg`, `mseNumOfBtn`, `mseInterface`, `mseDPI`) VALUES
('mse0000001', 'mse', 'HP X1000 Wired Mouse (Black/Grey)', 'HP', 299, '3 buttons improve productivity<br/> Optical sensor works on most surfaces<br/> The sleek and modern HP Mouse X1000 adds an instant touch of trend-setting style to any work space<br/> Glossy black and metallic gray shine with sophistication<br/> 1 year warranty', '', 151, '', 3, 'Wired USB', 'NA'),
('mse0000002', 'mse', 'Lenovo 300 Wireless Compact Mouse (GX30K79401)', 'Lenovo', 549, 'Connector Type :- Wireless - USB<br/> Pointing Device Resolution :- 1000DPI, Pointing Device Type :- 3 Button USB Laser Mouse,<br/>Wireless Reception Range :- 10 metres<br/> Warranty Period :- 18 months', '', 134, '', 3, 'Wireless USB', 'NA'),
('mse0000003', 'mse', 'Logitech G 402 Hyperion Fury Wired Gaming Mouse, 4,000 DPI, Lightweight, 8 Programmable Buttons', 'Logitech', 2345, 'HIGH SPEED TRACKING : Fusion engine tracking speeds of up to 500 IPS, 8 PROGRAMMABLE BUTTONS, ON-THE-FLY DPI : Shift through up to four DPI settings, from pixel-precise targeting (250 DPI) to lightning-fast manoeuvres (4000 DPI)<br/>\r\nADVANCED RESPONSE RATE : They will be communicated to the game at the highest possible speed<br/> COMFORTABLE DESIGN : Lightweight materials, rubber grips and low friction feet help ensure that your gaming sessions last as long as you can<br/> WARRANTY: 2 Year ', '', 64, '', 8, 'Wired USB', '240-4000'),
('mse0000004', 'mse', 'Logitech G 304 Lightspeed Wireless Mouse, Hero Sensor, 12,000 DPI, 6 Buttons, 250h Battery life', 'Logitech', 3295, 'HERO GAMING SENSOR: 400 IPS precision and up to 12000 DPI sensitivity<br/> LIGHTSPEED WIRELESS : Ultra-fast Lightspeed<br/> The G304 wireless gaming mouse delivers super-fast 1ms report rate<br/> ULTRA LONG BATTERY LIFE: 250 hours of continuous gameplay on a single AA battery<br/> LIGHT WEIGHT DESIGN: only 99 grams<br/> PORTABLE CONVENIENCE : built-in nano receiver storage<br/> ON-BOARD MEMORY<br/> WARRANTY: 2 Year', '', 34, '', 6, 'Wireless USB', 'upto 12000'),
('mse0000005', 'mse', 'Logitech MX Master 2S Wireless Mouse, Multi-Device, Bluetooth or 2.4GHz Wireless with USB, 4000 DPI', 'Logitech', 5995, 'Cross Computer Control: Logitech flow allows you to seamlessly control multiple devices and even copy-paste content and documents between those computers<br/> Tracks even on glass<br/> Rechargeable battery, up to 70 days of power on single charge<br/>\r\nDual Connectivity: Use with up to three Windows or Mac computers via included Unifying receiver or Bluetooth smart wireless technology<br/> Speed adaptive scroll wheel auto-shift from click-to-click to hyper-fast scroll', '', 16, '', 7, 'Wireless USB or Bluetooth', '200-4000');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `userid` varchar(50) NOT NULL,
  `orderid` int(5) NOT NULL,
  `productid` varchar(10) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `quantity` int(1) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userContact` varchar(10) NOT NULL,
  `userAddress` varchar(250) NOT NULL,
  `price` int(6) NOT NULL,
  `orderStatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`userid`, `orderid`, `productid`, `product_name`, `quantity`, `order_date`, `delivery_date`, `userEmail`, `userContact`, `userAddress`, `price`, `orderStatus`) VALUES
('7', 7, 'ltp0000001', 'ASUS VivoBook 15 Intel Celeron N3350 15.6-inch HD Laptop (4GB RAM/1TB HDD/Windows 10/Integrated Graphics/Black/2.0 kg), X540NA-GQ285T', 2, '2020-12-17', '2020-12-24', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 24949, 'Completed'),
('7', 8, 'ltp0000002', 'Lenovo IdeaPad Slim 3i Intel Core i3 10th Gen 15.6', 1, '2020-12-17', '2020-12-24', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 30990, 'Completed'),
('7', 9, 'ltp0000001', 'ASUS VivoBook 15 Intel Celeron N3350 15.6-inch HD Laptop (4GB RAM/1TB HDD/Windows 10/Integrated Graphics/Black/2.0 kg), X540NA-GQ285T', 1, '2020-12-17', '2020-12-24', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 24949, 'Completed'),
('7', 10, 'hdp0000003', 'Sony WH-1000XM3 Wireless Noise Cancelling Headphones, Bluetooth Headset with Mic', 1, '2020-12-17', '2020-12-24', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 21990, 'pending'),
('7', 11, 'ltp0000001', 'ASUS VivoBook 15 Intel Celeron N3350 15.6-inch HD Laptop (4GB RAM/1TB HDD/Windows 10/Integrated Graphics/Black/2.0 kg), X540NA-GQ285T', 1, '2020-12-18', '2020-12-25', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 24949, 'pending'),
('7', 12, 'hdp0000003', 'Sony WH-1000XM3 Wireless Noise Cancelling Headphones, Bluetooth Headset with Mic', 2, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 21990, 'pending'),
('7', 13, 'ltp0000003', 'ASUS TUF Gaming FX505DT 15.6', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 50990, 'pending'),
('7', 14, 'hdp0000001', 'RHA - MA390 Universal', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 1899, 'pending'),
('7', 15, 'kb00000002', 'Logitech K480 Wireless Multi-Device Keyboard for Windows, Apple iOS android - Black', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 2595, 'pending'),
('7', 16, 'cpu0000002', 'AMD Ryzen 5 3600XT Processor 6 cores 12 Threads 3.8GHz AM4 Socket(100-100000281BOX)', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 21999, 'pending'),
('7', 17, 'gc00000002', 'Asus TUF Gaming GeForce GTX 1660 Super 6GB Edition \r\nGraphics Card (TUF-GTX1660S-O6G-GAMING)', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 22260, 'pending'),
('7', 18, 'mb00000003', 'GIGABYTE B460M Motherboard with 8118 Gaming LAN, PCIe Gen3 x4 M.2, Anti-Sulfur Resistor', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 7955, 'pending'),
('7', 19, 'mon0000002', 'Acer B227Q 21.5', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 11099, 'pending'),
('7', 20, 'hdp0000003', 'Sony WH-1000XM3 Wireless Noise Cancelling Headphones, Bluetooth Headset with Mic', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 21990, 'pending'),
('7', 21, 'sd00000004', 'Western Digital Purple 2TB SATA Internal Surveillance Hard Drive ', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 5330, 'pending'),
('7', 22, 'cbt0000001', 'Ant Esports ICE-120AG Mid Tower Computer Case with 1 x 120 mm Rear Fan Preinstalled - Black', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 2049, 'pending'),
('7', 23, 'ltp0000002', 'Lenovo IdeaPad Slim 3i Intel Core i3 10th Gen 15.6', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 30990, 'pending'),
('7', 24, 'kb00000002', 'Logitech K480 Wireless Multi-Device Keyboard for Windows, Apple iOS android - Black', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 2595, 'pending'),
('7', 25, 'mon0000003', 'BenQ Zowie XL2411P 24-inch (60.96 cm) 144Hz FHD (1080p) Gaming Monitor for Esports - M353299', 1, '2021-01-26', '2021-02-02', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 15990, 'pending'),
('7', 26, 'cbt0000001', 'Ant Esports ICE-120AG Mid Tower Computer Case with 1 x 120 mm Rear Fan Preinstalled - Black', 1, '2021-01-27', '2021-02-03', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 2049, 'pending'),
('7', 27, 'ltp0000002', 'Lenovo IdeaPad Slim 3i Intel Core i3 10th Gen 15.6', 1, '2021-01-27', '2021-02-03', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 30990, 'pending'),
('7', 28, 'ltp0000003', 'ASUS TUF Gaming FX505DT 15.6\" FHD 120Hz Laptop GTX 1650 4GB Graphics (Ryzen 5-3550H/8GB RAM/512GB PCIe SSD/Windows 10/Stealth Black/2.20 Kg), FX505DT-AL106T', 1, '2021-01-27', '2021-02-03', 'dhamechapruthvi@gmail.com', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 50990, 'pending'),
('9', 29, 'mse0000003', 'Logitech G 402 Hyperion Fury Wired Gaming Mouse, 4,000 DPI, Lightweight, 8 Programmable Buttons', 1, '2021-01-27', '2021-02-03', 'abs@gmail.com', '9998236897', 'Manjalpur', 2345, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `processor_details`
--

CREATE TABLE `processor_details` (
  `cpuid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `cpuName` varchar(100) NOT NULL,
  `cpuCompany` varchar(20) NOT NULL,
  `cpuPrice` int(5) NOT NULL,
  `cpuDescription` varchar(500) NOT NULL,
  `cpuKeywords` varchar(500) NOT NULL,
  `cpuQuantity` varchar(5) NOT NULL,
  `cpuImg` varchar(100) NOT NULL,
  `cpuCoreCount` int(1) NOT NULL,
  `cpuThreadCount` int(1) NOT NULL,
  `cpuSocketType` varchar(10) NOT NULL,
  `cpuCache` varchar(50) NOT NULL,
  `cpuBaseClock` varchar(10) NOT NULL,
  `cpuBoostClock` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processor_details`
--

INSERT INTO `processor_details` (`cpuid`, `cid`, `cpuName`, `cpuCompany`, `cpuPrice`, `cpuDescription`, `cpuKeywords`, `cpuQuantity`, `cpuImg`, `cpuCoreCount`, `cpuThreadCount`, `cpuSocketType`, `cpuCache`, `cpuBaseClock`, `cpuBoostClock`) VALUES
('cpu0000001', 'cpu', 'AMD Ryzen 3 3200G with Radeon Vega 8 Graphics 4 Cores AM4 Socket (YD3200C5FHBOX)', 'AMD', 10499, '4 Cores & 4 Threads<br/> Base Clock: 3.6GHz, Max Boost Clock: up to 4GHz, 6MB Cache<br/> \r\nSystem Memory Specification: 2933MHz, System Memory Type: DDR4, Memory Channels: 2<br/>\r\nSocket: AM4,  TDP: 65W<br/>\r\nMotherboard Compatibility: AMD 300, 400, 500 serles chipset based motherboards<br/>\r\nGraphics: AMD Radeon Vega 8 Graphics<br/> \r\nHeatsink Fan: Wraith Stealth<br/> \r\nWarranty: 3 Years', '', '56', '', 4, 4, 'AM4', 'L1 Cache 384KB,  L2 Cache 2MB, L3 Cache 4MB', '3.6Ghz', '4.0GHz'),
('cpu0000002', 'cpu', 'AMD Ryzen 5 3600XT Processor 6 cores 12 Threads 3.8GHz AM4 Socket(100-100000281BOX)', 'AMD', 21999, '6 Cores & 12 Threads<br/> 35MB Cache, Base Clock: 3.8GHz, Max Boost Clock: up to 4.5GHz<br/> Memory Support: DDR4 3200MHz, Memory Channels: 2<br/> PCI Express Generation : PCIe Gen 4<br/> Compatible with Motherboards based on 400 & 500 Series Chipset<br/> Socket AM4, TDP: 95W <br/>Separate Graphic Card Required<br/> Included Heatsink Fan: Wraith Spire<br/> 3 Years Brand Warranty.', '', '42', '', 6, 12, 'AM4', 'L2 Cache 3MB, L3 Cache 32MB', '3.8Ghz', '4.5GHz'),
('cpu0000003', 'cpu', 'AMD Ryzen 7 3700X 3.6GHz 8 Core 16 Threads AM4 Socket Processor with Wraith Prism(100000071BOX)', 'AMD', 28550, '8 Cores & 16 Threads<br/> 36MB Cache, Base Clock: 3.6GHz, Max Boost Clock: up to 4.4GHz<br/> Memory Support: DDR4 3200MHz, Memory Channels: 2<br/> PCI Express Generation: PCIe Gen 4 <br/> it is recommended to go with X570 Chipset<br/> Socket AM4, TDP: 65W<br/> it comes with Wraith PRISM Thermal Solution with the added RGB<br/> 3 Years Brand Warranty. ', '', '36', '', 8, 16, 'AM4', 'L1 Cache 512KB, L2 Cache 4MB, L3 Cache 32MB', '3.6', '4.4'),
('cpu0000004', 'cpu', 'AMD Ryzen 7 3800XT Processor 8 cores 16 Threads 36MB Cache 3.9GHz AM4 Socket(100-100000279WOF)', 'AMD', 34999, '8 Cores & 16 Threads<br/> 36MB Cache, Base Clock: 3.9GHz, Max Boost Clock: up to 4.7GHz<br/> Memory Support: DDR4 3200MHz, Memory Channels: 2<br/> PCI Express Generation: PCIe Gen 4 <br/>\r\nCompatible with Motherboards based on 400 & 500 Series Chipset<br/> Socket AM4, TDP: 105W <br/> Separate Graphic Card Required <br/> Included Heatsink Fan <br/> No, 3 Years Brand Warranty. ', '', '42', '', 8, 16, 'AM4', 'L2 Cache 4MB, L3 Cache 32MB', '3.9Ghz', '4.7GHz'),
('cpu0000005', 'cpu', 'AMD Ryzen 9 3950X Processor with 16 Cores 32 Threads Base Clock of 3.5Ghz AM4 Socket', 'AMD', 64990, '16 Cores & 32 Threads<br/> 73MB Cache, Base Clock: 3.5GHz, Max Boost Clock: up to 4.7GHz <br/>\r\nMemory Support: DDR4 3200MHz, Memory Channels: 2<br/> PCI Express Generation : PCIe Gen 4 <br/>\r\nrecommended to go with X570 Chipset<br/> Socket AM4, TDP: 105W <br/> Included Heatsink Fan: No <br/>\r\n3 Years Brand Warranty. ', '', '26', '', 16, 32, 'AM4', 'L1 Cache 1MB, L2 Cache 8MB, L3 Cache 64MB', '3.5Ghz', '4.7GHz'),
('cpu0000006', 'cpu', 'Intel® Core™ i3-10100 Processor FCLGA1200 Socket Intel® UHD Graphics 630 3.60 GHz', 'Intel', 10299, '4 Cores & 8 Threads<br/> Base Clock: 3.6GHz, Max Boost Clock: up to 4.3GHz, 6MB Cache<br/> System Memory Specification: 2666MHz, System Memory Type: DDR4, Memory Channels: 2 <br/>\r\nSocket: FCLGA1200, TDP: 65W <br/> Motherboard Compatibility: 400 series chipset based motherboards<br/>\r\nGraphics: Intel® UHD Graphics 630<br/> Heatsink Fan: Intel Stock cooler<br/> Warranty: 3 Years', '', '56', '', 4, 8, 'FCLGA1200', ' 6 MB Intel® Smart Cache', '3.6Ghz', '4.3GHz'),
('cpu0000007', 'cpu', 'Intel Core i5-10500 Desktop Processor 6 Cores  Intel® UHD Graphics 630 3.1 GHz LGA1200  Socket', 'Intel', 18700, '6 Cores & 12 Threads<br/> Base Clock: 3.6GHz, Max Boost Clock: up to 4.5GHz, 12MB Cache<br/> System Memory Specification: 2666MHz, System Memory Type: DDR4, Memory Channels: 2<br/> Socket: FCLGA1200, TDP: 65W <br/> Motherboard Compatibility: 400 series chipset based motherboards <br/>\r\nGraphics: Intel® UHD Graphics 630<br/> Heatsink Fan: Intel Stock cooler<br/> Warranty: 3 Years', '', '36', '', 6, 12, 'FCLGA1200', ' 12 MB Intel® Smart Cache', '3.1Ghz', '4.5GHz'),
('cpu0000008', 'cpu', 'Intel Core i7-10700k Processor 8 Cores 16 Threads Intel® UHD Graphics 630 3.8 GHz LGA1200 Socket', 'Intel', 34300, '8 Cores & 16 Threads<br/> Base Clock: 3.8GHz, Max Boost Clock: up to 5.1GHz, 12MB Cache<br/> System Memory Specification: 2933MHz, System Memory Type: DDR4, Memory Channels: 2<br/> Socket: FCLGA1200, TDP: 125W <br/> Motherboard Compatibility: 400 series chipset based motherboards <br/>Warranty: 3 Years\r\n', '', '36', '', 8, 16, 'FCLGA1200', ' 16 MB Intel® Smart Cache', '3.8Ghz', '5.1GHz'),
('cpu0000009', 'cpu', 'Intel Core i9-10900k Processor 10 Cores 20 Threads 3.7 GHz Intel® UHD Graphics 630 LGA1200 Socket', 'Intel', 53299, '10 Cores & 20 Threads<br/> Base Clock: 3.7GHz, Max Boost Clock: up to 5.3GHz, 20MB Cache<br/> System Memory Specification: 2933MHz, System Memory Type: DDR4, Memory Channels: 2 <br/> Socket: FCLGA1200, TDP: 125W <br/> Motherboard Compatibility: 400 series chipset based motherboards <br/> Warranty: 3 Years\r\n', '', '12', '', 10, 20, 'FCLGA1200', ' 20 MB Intel® Smart Cache', '3.7Ghz', '5.3GHz');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `cid` varchar(10) NOT NULL,
  `cName` varchar(20) NOT NULL,
  `cImg` varchar(100) NOT NULL,
  `cTableName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`cid`, `cName`, `cImg`, `cTableName`) VALUES
('cam', 'Webcam', '', 'webcam_details'),
('cbt', 'Cabinet', '', 'cabinet_details'),
('cpu', 'Processor', '', 'processor_details'),
('gc', 'Graphics Card', '', 'graphics_card_details'),
('hdp', 'Headphone', '', 'headphone_details'),
('kb', 'Keyboard', '', 'keyboard_details'),
('ltp', 'Laptop', '', 'laptop_details'),
('mb', 'Motherboard', '', 'motherboard_details'),
('mon', 'Monitor', '', 'monitor_details'),
('mse', 'Mouse', '', 'mouse_details'),
('psu', 'PSU', '', 'psu_details'),
('ram', 'RAM', '', 'ram_details'),
('sd', 'Storage Device', '', 'storage_device_details');

-- --------------------------------------------------------

--
-- Table structure for table `product_rating_details`
--

CREATE TABLE `product_rating_details` (
  `ratingid` varchar(10) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `orderid` varchar(16) NOT NULL,
  `productid` varchar(10) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `psu_details`
--

CREATE TABLE `psu_details` (
  `psuid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `psuName` varchar(100) NOT NULL,
  `psuCompany` varchar(20) NOT NULL,
  `psuPrice` int(5) NOT NULL,
  `psuDescription` varchar(500) NOT NULL,
  `psuKeywords` varchar(500) NOT NULL,
  `psuQuantity` int(5) NOT NULL,
  `psuImg` varchar(100) NOT NULL,
  `psuCapacity` varchar(5) NOT NULL,
  `psuEfficiency` varchar(25) NOT NULL,
  `psuModularity` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psu_details`
--

INSERT INTO `psu_details` (`psuid`, `cid`, `psuName`, `psuCompany`, `psuPrice`, `psuDescription`, `psuKeywords`, `psuQuantity`, `psuImg`, `psuCapacity`, `psuEfficiency`, `psuModularity`) VALUES
('psu0000001', 'psu', 'Thermaltake Litepower 450W Black Edition Power Supply SMPS', 'Thermaltake', 2690, '1 x 20+4pin main connector (400mm)<br/>\r\n1 x EPS / ATX 4+4pin +12V power connector (550mm)<br/>\r\n3 x Molex and 1 x FDD connectors (400mm + 150mm + 150mm + 150mm) 2 x Molex connectors (400mm + 150mm)', '', 46, '', '450W', 'NA', 'Non modular'),
('psu0000002', 'psu', 'Corsair CV450, CV Series, 80 Plus Bronze Certified, 450 Watt Non-Modular Power Supply', 'Corsair', 3499, '80 PLUS Bronze Certified: Provides up to 88% operational efficiency, generating less heat and lowering your energy costs<br/>\r\nFull Continuous Power: CORSAIR CV Series power supplies are guaranteed to deliver their full rated wattage of continuous power<br/> Low-Noise Cooling: A 120 mm thermally controlled low-noise cooling fan only spins at high speed when your power supply is under heavy stress, slowing down for quieter operation at lower loads<br/> Compact Casing: 125 mm length, Black Sleevin', '', 45, '', '450W', '80 Plus Bronze', 'Non Modular'),
('psu0000003', 'psu', 'Corsair CV550, CV Series, 80 Plus Bronze Certified, 550 Watt Non-Modular Power Supply', 'Corsair', 4299, '80 PLUS Bronze Certified: Provides up to 88% operational efficiency, generating less heat and lowering your energy costs<br/>\r\nFull Continuous Power: CORSAIR CV Series power supplies are guaranteed to deliver their full rated wattage of continuous power<br/>\r\nLow-Noise Cooling: A 120 mm thermally controlled low-noise cooling fan only spins at high speed when your power supply is under heavy stress, slowing down for quieter operation at lower loads<br/>\r\nCompact Casing: 125 mm length, Black Sleev', '', 56, '', '550W', '80 Plus Bronze', 'Non modular'),
('psu0000004', 'psu', 'Corsair CV650, CV Series, 80 Plus Bronze Certified, 650 Watt Non-Modular Power Supply', 'Corsair', 5299, '80 PLUS Bronze Certified: Provides up to 88% operational efficiency, generating less heat and lowering your energy costs<br/>\r\nFull Continuous Power: CORSAIR CV Series power supplies are guaranteed to deliver their full rated wattage of continuous power<br/>\r\nLow-Noise Cooling: A 120 mm thermally controlled low-noise cooling fan only spins at high speed when your power supply is under heavy stress, slowing down for quieter operation at lower loads<br/>\r\nCompact Casing: 125 mm length, Black Sleev', '', 42, '', '650W', '80 Plus Bronze', 'Non Modular'),
('psu0000005', 'psu', 'Corsair CX650 650 Watt 80 Plus Bronze Certified ATX Power Supply (CP-9020122-NA)', 'Corsair', 7500, 'The Corsair CX650 650 Wattb PSU is a 80 Plus Bronze Certified efficient and is designed for little or no detectable fan noise during regular operation.<br/>\r\nThe CX650 comes with MTBF hours of 100,000. The PSU supports ATX12V 2.4 and EPS12V 2.92 standards.<br/>\r\nThe ATX sized PSU comes with 1x EPS12V Connector, 2x PCIE Connector, 6x SATA Connector and 4x PATA Connector<br/>\r\nThe CX550 is occupied with a 120mm sized fan to work over an operating temperature of 0-40 degre Celsius<br/> 5 Year Warra', '', 34, '', '650W', '80 Plus Bronze', 'Modular'),
('psu0000006', 'psu', 'Antec EA750G PRO 80 Plus Gold Certified 750 Watt Semi- Modular Gaming Power Supply', 'Antec', 7490, '80 PLUS Gold certified PSU<br/> Active PFC and 750Watt<br/> semi-Modular<br/> Supports ATX12V and EPS12V 2.92 standards<br/> 200-240 VAC ±10%, 1 x 24(20+4)-pin / 2 x 8(4+4)-pin / 4 x 8(6+2)-pin PCI-E / 8 x SATA / 3 x SATA<br/> 120mm Silent Fan<br/> 7 Year Brand Warranty', '', 31, '', '750W', '80 Plus Gold', 'Semi Modular');

-- --------------------------------------------------------

--
-- Table structure for table `ram_details`
--

CREATE TABLE `ram_details` (
  `ramid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `ramName` varchar(100) NOT NULL,
  `ramCompany` varchar(20) NOT NULL,
  `ramPrice` int(5) NOT NULL,
  `ramDescription` varchar(500) NOT NULL,
  `ramKeywords` varchar(500) NOT NULL,
  `ramQuantity` int(5) NOT NULL,
  `ramImg` varchar(100) NOT NULL,
  `ramSize` varchar(10) NOT NULL,
  `ramSpeed` varchar(10) NOT NULL,
  `ramConfiguration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram_details`
--

INSERT INTO `ram_details` (`ramid`, `cid`, `ramName`, `ramCompany`, `ramPrice`, `ramDescription`, `ramKeywords`, `ramQuantity`, `ramImg`, `ramSize`, `ramSpeed`, `ramConfiguration`) VALUES
('ram0000001', 'ram', 'HyperX Fury 8GB 2400MHz DDR4 CL15 DIMM 1Rx8  Black XMP Desktop Memory (HX424C15FB3/8)', 'HyperX', 2984, 'Updated low-profile heat spreader design<br/> Cost-efficient, high-performance DDR4 upgrade<br/> Intel XMP-ready profiles optimized for Intel’s latest chipsets<br/>\r\nAvailable in fast speeds up to 3466MHz*<br/> Plug N Play functionality at 2400MHz and 2666MHz', '', 51, '', '8GB', '2400MHz', '1x8GB'),
('ram0000002', 'ram', 'Corsair Vengeance LPX 8GB (1x8GB) DDR4 3200MHZ C16 Desktop RAM', 'Corsair', 3400, 'XMP 2.0 SUPPORT: One setting is all it takes to automatically adjust to the fastest safe speed for your VENGEANCE LPX<br/> ALUMINUM HEAT SPREADER: The unique design of the VENGEANCE LPX heat spreader optimally pulls heat away from the ICs and into your system’s cooling path, so you can push it harder<br/> DESIGNED FOR HIGH-PERFORMANCE<br/> OVERCLOCKING: Each VENGEANCE LPX module is built from any customy performance PCB and highly-screened memory ICs<br/> LOW-PROFILE DESIGN: small form factor', '', 125, '', '8GB', '3200MHz', '1x8GB'),
('ram0000003', 'ram', 'Crucial Ballistix 2666 MHz DDR4 DRAM Desktop Memory Kit 16GB (8GBx2) CL16 BL2K8G26C16U4R (RED)', 'Crucial', 5199, 'Ideal for gamers and performance enthusiasts<br/> Engineered for the latest AMD and Intel platforms<br/> XMP 2. 0 support for automatic overclocking or run at JEDEC default profile<br/> Modern aluminum heat spreader available in multiple colors to match your system build or style, ', '', 42, '', '16GB', '2666MHz', '2x8GB'),
('ram0000004', 'ram', 'ADATA XPG GAMMIX D30 DDR4 16GB (1x16GB) 3200MHz U-DIMM Desktop Memory - AX4U3200316G16A-SR30', 'Adata', 5999, 'Unique heatsink design with edgy wing-shaped<br/> 16GB (1x16GB) DDR4 RAM<br/> Fast speeds up to 3200MHz<br/> U-DIMM Desktop Memory<br/> Supports Intel X299 platform and AMD AM4/Ryzen Platforms<br/> Intel XMP 2.0 for hassle-free overclocking<br/> 3 years manufacturer warranty', '', 36, '', '16GB', '3200MHz', '1x16GB'),
('ram0000005', 'ram', 'Ballistix Crucial 3000 MHz DDR4 DRAM Desktop Memory Kit 32GB (16GBx2) CL15 BL2K16G30C15U4R (RED)', 'Crucial', 12899, 'Ideal for gamers and performance enthusiasts<br/> Engineered for the latest AMD and Intel platforms<br/>\r\nXMP 2.0 support for automatic overclocking or run at JEDEC default profile<br/> Modern aluminum heat spreader available in multiple colors to match your system build or style', '', 34, '', '32GB', '3000MHz', '2x16GB');

-- --------------------------------------------------------

--
-- Table structure for table `storage_device_details`
--

CREATE TABLE `storage_device_details` (
  `sdid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `sdName` varchar(100) NOT NULL,
  `sdCompany` varchar(20) NOT NULL,
  `sdPrice` int(5) NOT NULL,
  `sdDescription` varchar(750) NOT NULL,
  `sdKeywords` varchar(500) NOT NULL,
  `sdQuantity` int(5) NOT NULL,
  `sdImg` varchar(100) NOT NULL,
  `sdCapacity` varchar(5) NOT NULL,
  `sdInterface` varchar(10) NOT NULL,
  `sdType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage_device_details`
--

INSERT INTO `storage_device_details` (`sdid`, `cid`, `sdName`, `sdCompany`, `sdPrice`, `sdDescription`, `sdKeywords`, `sdQuantity`, `sdImg`, `sdCapacity`, `sdInterface`, `sdType`) VALUES
('sd00000001', 'sd', 'Western Digital WD10EZEX 1TB Internal Hard Drive 7200 RPM (Blue)', 'Western Digital', 3399, '1TB capacity<br/> 3.5-inch internal hard drive<br/> 64MB buffer size<br/> 7200 RPM Class<br/>1 Year warranty', '', 70, '', '1TB', 'SATA', 'Hard Disk'),
('sd00000002', 'sd', 'Seagate BarraCuda 1 TB Internal Hard Drive HDD – 3.5 Inch SATA 6 Gb/s 7200 RPM 64 MB Cache', 'Seagate', 3199, '1TB capacity<br/> 3.5-inch internal hard drive<br/> 64MB buffer size<br/> 7200 RPM Class<br/> 2 Year warranty', '', 68, '', '1TB', 'SATA', 'Hard Drive'),
('sd00000003', 'sd', 'Seagate Barracuda 2 TB Internal Hard Drive HDD – 3.5 Inch SATA 6 Gb/s 7200 RPM Cache', 'Seagate', 4749, '2TB capacity<br/> 3.5-inch internal hard drive<br/> 64MB buffer size<br/> 7200 RPM Class<br/> 2 Year warranty', '', 43, '', '2TB', 'SATA', 'Hard Disk'),
('sd00000004', 'sd', 'Western Digital Purple 2TB SATA Internal Surveillance Hard Drive ', 'Western Digital', 5330, '2TB capacity 3.5-inch internal hard drive<br/> 64MB buffer size<br/> 7200 RPM Class<br/> 2 Year warranty<br/> Engineered specifically for surveillance security systems<br/>\r\nSupports up to 180 TB per year work load rate, Prioritized write-operations for maximized surveillance performance<br/>\r\nSupport for more than eight bays<br/>\r\nTuned for write-intensive, low bit-rate, high stream-count applications typical to most surveillance applications<br/>\r\nTLER and ATA streaming support<br/>\r\nTarnish-resistant components', '', 30, '', '2TB', 'SATA', 'Hard Drive'),
('sd00000005', 'sd', 'Seagate IronWolf 8 TB NAS Internal Hard Drive HDD – 3.5 Inch SATA 6 Gb/s 7200 RPM 256 MB Cache', 'Seagate', 26700, 'Iron Wolf hard drives are the ideal solution for multi-user NAS environments craving powerhouse performance<br/> NAS-optimized hard drive<br/> cache 256 MB<br/> Purpose built for NAS enclosures<br/> Iron Wolf delivers little to no noise/vibration<br/>no down time, increased file-sharing performance and much more<br/> Easily monitor the health of drives using the integrated Iron Wolf Health Management system and enjoy long-term reliability with 1M hours MTBF<br/> Three-year limited warranty protection plan included', '', 15, '', '8TB', 'SATA', 'Hard Disk'),
('sd00000006', 'sd', 'WD Blue 250GB M.2 Internal Solid State Drive', 'Western Digital', 3199, 'High capacity with enhanced reliability and superior performance for high end computing<br/>\r\nEnhanced power efficiency, leading edge reliability and broad compatibility<br/>\r\nDownloadable WD SSD dashboard and Acronis software, 3 year limited warranty<br/>\r\nAverage Active Power: 60mW<br/>\r\nReliability: Up to 1.75M hours\r\nMaximum Read Operating: 3000mbps and 3800 maximum write operating', '', 45, '', '250GB', 'M.2 SATA', 'SSD'),
('sd00000007', 'sd', 'Samsung 860 EVO 500GB SATA 2.5\" Internal Solid State Drive (SSD)', 'Samsung', 6477, 'Sequential Read/Write speeds up to 550/520 MB/s respectively<br/> SSD Capacity: 500GB, Cache: Samsung 512 MB Low Power DDR4 SDRAM<br/> Interface : SATA 6Gb/s, compatible with SATA 3Gb/s and SATA 1.5Gb/s interfaces<br/> Form Factor : 2.5 inches<br/> Advanced Drive Management through Samsung Magician Software to help you manage the drive. A user friendly tools help keep your drive up to date, monitor drive health and speed, and even boost performance<br/> Warranty : 5 year limited. ', '', 34, '', '500GB', 'SATA', 'SSD'),
('sd00000008', 'sd', 'Samsung 860 EVO 1TB SATA 2.5\" Internal Solid State Drive (SSD)', 'Samsung', 9999, 'Sequential Read/Write speeds up to 550/520 MB/s respectively<br/>SSD Capacity: 1TB, Cache: Samsung 1 GB Low Power DDR4 SDRAM<br/> Interface : SATA 6Gb/s, compatible with SATA 3Gb/s and SATA 1.5Gb/s interfaces<br/> Form Factor : 2.5 inches<br/> Advanced Drive Management through Samsung Magician Software to help you manage the drive. A user friendly tools help keep your drive up to date, monitor drive health and speed, and even boost performance<br/> Warranty : 5 year limited.', '', 24, '', '1TB', 'SATA', 'SSD'),
('sd00000009', 'sd', 'Samsung 970 EVO Plus 250GB PCIe NVMe M.2 (2280) Internal Solid State Drive (SSD) ', 'Samsung', 3999, 'Performance: Sequential Read/Write speeds up to 3,500/3,300 MB/s respectively<br/> Interface : NVMe (PCIe Gen 3.0 x 4)<br/> Form Factor : M.2 (2280)<br/> Available Capacity : up to 2TB<br/> Advanced Drive Management through Samsung Magician Software to help you manage the drive. A user friendly tools help keep your drive up to date, monitor drive health and speed, and even boost performance<br/> Warranty : 5 year limited', '', 37, '', '250GB', 'M.2', 'SSD'),
('sd00000010', 'sd', 'WD Blue m.2 SSD, 560MB/s R, 530MB/s W, 5 Y Warranty, 2TB', 'Western Digital', 26999, 'High capacity with enhanced reliability and superior performance for high end computing<br/>\r\nSequential read speeds up to 560MB/s and sequential write speeds up to 530MB/s.<br/>\r\nAn industry-leading 1.75M hours mean time to failure (MTTF) and up to 500 terabytes written (TBW) for enhanced reliability<br/> Available in 2.5”/7mm cased and M.2 2280 form factors to accommodate most PCs. WD F.I.T. Lab certification for compatibility with a wide range of computers<br/> Includes a Brand Warranty:5 year limited.', '', 13, '', '2TB', 'M.2 SATA', 'SSD');

-- --------------------------------------------------------

--
-- Table structure for table `temp2`
--

CREATE TABLE `temp2` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp2`
--

INSERT INTO `temp2` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Leonovo Legion GX30 Gaming Mouse ', 'MX064TY31', 'product-images/mouse.jpg', 1249.00),
(2, 'Noise ColorFit Pro 2 Smart Watch', 'SW03AX95', 'product-images/watch.jpg', 3199.00),
(3, 'Redragon Karura K502 Gaming Keyboard ', 'KB07KXVN', 'product-images/keyboard.jpg', 1649.00),
(4, 'Sennheiser HD 205 II Headphones ', 'HP06982GH', 'product-images/headphone.jpg', 2999.00);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `email` varchar(40) NOT NULL,
  `keytoken` varchar(200) NOT NULL,
  `expDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `userid` int(50) NOT NULL,
  `userEmail` varchar(40) NOT NULL,
  `userFirstName` varchar(20) NOT NULL,
  `userLastName` varchar(20) NOT NULL,
  `userPassword` varchar(32) NOT NULL,
  `userDOB` date NOT NULL,
  `userContact` varchar(10) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userCity` varchar(20) NOT NULL,
  `userState` varchar(20) NOT NULL,
  `userCountry` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`userid`, `userEmail`, `userFirstName`, `userLastName`, `userPassword`, `userDOB`, `userContact`, `userAddress`, `userCity`, `userState`, `userCountry`) VALUES
(7, 'dhamechapruthvi@gmail.com', 'Pruthvi', 'Dhamecha', '827ccb0eea8a706c4c34a16891f84e7b', '1999-03-31', '9876543210', 'abcdefghijklmnopqrstuvwxyz', 'Vadodara', 'Gujarat', 'India'),
(8, 'dhamechapruthvi203@gmail.com', 'Pruthvi', 'Dhamecha', 'e10adc3949ba59abbe56e057f20f883e', '1997-03-31', '0123456789', 'ZXDFG', 'Vadodara', 'Gujarat', 'India'),
(9, 'abs@gmail.com', 'Pruthvi', 'dhamecha', '827ccb0eea8a706c4c34a16891f84e7b', '2000-03-27', '9998236897', 'Manjalpur', 'Vadodara', '11', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `webcam_details`
--

CREATE TABLE `webcam_details` (
  `camid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `camName` varchar(100) NOT NULL,
  `camCompany` varchar(20) NOT NULL,
  `camPrice` int(5) NOT NULL,
  `camDescription` varchar(500) NOT NULL,
  `camKeywords` varchar(500) NOT NULL,
  `camQuantity` int(5) NOT NULL,
  `camImg` varchar(100) NOT NULL,
  `camMic` varchar(20) NOT NULL,
  `camResolution` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcam_details`
--

INSERT INTO `webcam_details` (`camid`, `cid`, `camName`, `camCompany`, `camPrice`, `camDescription`, `camKeywords`, `camQuantity`, `camImg`, `camMic`, `camResolution`) VALUES
('cam0000001', 'cam', 'Logitech C270 HD Webcam, HD 720p/30fps, Widescreen HD Video Calling, Noise-Reducing Mic', 'Logitech', 2594, 'Logitech C270 let you make widescreen video calls in HD 720p at 30fps with 60-degree field of view<br/>HD lighting adjustment: Automatically improves the warmth and balance of your image for whatever setting you are in<br/>Built-in noise-reducing mic,<br/>Universal clip, the clip mounts at different angles<br/>Ideal for laptop or tablet: Compatible with Windows 10 or later, Windows 8, Windows 7, Mac OS 10.10 or later, and Chrome OS via the USB port', '', 42, '', 'Noise reducing mic', '720p'),
('cam0000002', 'cam', 'Zebronics Zeb-Ultimate Pro (Full HD) Web Camera with 5P Lens,Built-in Microphone,Auto White Balance', 'Zebronics', 1609, 'Zeb-Ultimate Pro is a full HD web camera with a quality 5P lens with a resolution of 1920x 1080<br/>The web camera comes with a built-in microphone, an auto white balance, night vision feature, and a manual switch for LED<br/>Interface USB image sensor CMOS lens 5P quality lens, Video resolution 1920 x 1080 (30 fps) cable length 1.58 meter<br/>High resolution webcam built-in microphone automatic white balance night vision manual switch for LED<br/>It comes with USB interface for video calls.', '', 65, '', 'Built-in mic', '1080p'),
('cam0000003', 'cam', 'Mi XMSXT001TM Webcam  (Silver)', 'Xiaomi', 1499, 'Color: Silver<br/> HD Support, 0.92 MP Image Resolution<br/> USB Interface<br/> Built In Microphone: No,<br/> 1 Year Warranty ', '', 24, '', 'No', '720p'),
('cam0000004', 'cam', 'FINGERS 1080 Hi-Res Webcam with 1080p Wide Angle Lens and Built-in Mic HD Video Calling & Recording', 'Fingers', 2119, 'True 1080p Wide-Angle lens: With studio-like lighting and full HD capability, 1080 Hi-Res webcam lets you view or shoot more. The wide field of view captures more team members or presentations, with equal ease<br/>Full HD 1080p & HD 720p video calling and recording with up to 1920 x 1080 pixels<br/>Built-in High-Quality USB Microphone for Premium Sound<br/>Portable with Perfect grip: With a universal clip for laptops<br/>Flat surface LCD & CRT monitors, you can mount 1080 Hi-Res', '', 34, '', 'Built-in Mic', '1080p'),
('cam0000005', 'cam', 'Logitech B525 Commercial HD Webcam', 'Logitech', 4990, 'Full HD 1080p video calling (up to 1920 x 1080 pixels) with this version of Skype for Windows<br/>720p HD video calling (up to 1280 x 720 pixels) with supported clients<br/>Full HD video recording (up to 1920 x 1080 pixels)<br/>H.264 video compression<br/>Built-in dual stereo mics with automatic noise reduction<br/>Automatic low-light correction<br/>Tripod-ready universal clip fits laptops, LCD or monitors', '', 25, '', 'dual stereo mics', '1080p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinet_details`
--
ALTER TABLE `cabinet_details`
  ADD PRIMARY KEY (`cbtid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `featured_product_details`
--
ALTER TABLE `featured_product_details`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `cid_2` (`cid`);

--
-- Indexes for table `graphics_card_details`
--
ALTER TABLE `graphics_card_details`
  ADD PRIMARY KEY (`gcid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `headphone_details`
--
ALTER TABLE `headphone_details`
  ADD PRIMARY KEY (`hdpid`);

--
-- Indexes for table `keyboard_details`
--
ALTER TABLE `keyboard_details`
  ADD PRIMARY KEY (`kbid`);

--
-- Indexes for table `laptop_details`
--
ALTER TABLE `laptop_details`
  ADD PRIMARY KEY (`ltpid`);

--
-- Indexes for table `monitor_details`
--
ALTER TABLE `monitor_details`
  ADD PRIMARY KEY (`monid`);

--
-- Indexes for table `motherboard_details`
--
ALTER TABLE `motherboard_details`
  ADD PRIMARY KEY (`mbid`);

--
-- Indexes for table `mouse_details`
--
ALTER TABLE `mouse_details`
  ADD PRIMARY KEY (`mseid`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`orderid`) USING BTREE;

--
-- Indexes for table `processor_details`
--
ALTER TABLE `processor_details`
  ADD PRIMARY KEY (`cpuid`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product_rating_details`
--
ALTER TABLE `product_rating_details`
  ADD PRIMARY KEY (`ratingid`);

--
-- Indexes for table `psu_details`
--
ALTER TABLE `psu_details`
  ADD PRIMARY KEY (`psuid`);

--
-- Indexes for table `ram_details`
--
ALTER TABLE `ram_details`
  ADD PRIMARY KEY (`ramid`);

--
-- Indexes for table `storage_device_details`
--
ALTER TABLE `storage_device_details`
  ADD PRIMARY KEY (`sdid`);

--
-- Indexes for table `temp2`
--
ALTER TABLE `temp2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `webcam_details`
--
ALTER TABLE `webcam_details`
  ADD PRIMARY KEY (`camid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `cartid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `orderid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `temp2`
--
ALTER TABLE `temp2`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cabinet_details`
--
ALTER TABLE `cabinet_details`
  ADD CONSTRAINT `cabinet_details_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `product_category` (`cid`);

--
-- Constraints for table `featured_product_details`
--
ALTER TABLE `featured_product_details`
  ADD CONSTRAINT `featured_product_details_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `product_category` (`cid`);

--
-- Constraints for table `graphics_card_details`
--
ALTER TABLE `graphics_card_details`
  ADD CONSTRAINT `graphics_card_details_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `product_category` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
