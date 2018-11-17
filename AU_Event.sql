-- Create database `AU_Events`
-- http://localhost:8888/phpmyadmin/
-- 
CREATE DATABASE `la`;
use `la`;
--
-- Table structure for table `#1 student`
--

CREATE TABLE IF NOT EXISTS `STUDENT` (
  `Student_Id` int(10) unsigned NOT NULL,
  `Full_name` varchar(30) NOT NULL default '',
  `Faculty` varchar(30) NOT NULL default '',
  `Major` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL default '',
  PRIMARY KEY (`Student_Id`)
)
  DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

--
-- Table structure for table `#2 Admin`
--
CREATE TABLE IF NOT EXISTS `ADMIN` (
  `Admin_Id` int(10) unsigned NOT NULL,
  `Admin_name` varchar(30) NOT NULL default '',
  `Admin_email` varchar(30) NOT NULL default '',
  `Admin_password` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`Admin_Id`)
)
  DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

--
-- Table structure for table `#3 Admin phone`
--
CREATE TABLE IF NOT EXISTS `ADMIN_PHONE` (
`Admin_Id` int(10) unsigned NOT NULL,
`Number` int(20) NOT NULL,
PRIMARY KEY (`Admin_Id`, `Number`)
)
DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

ALTER TABLE `ADMIN_PHONE` ADD  FOREIGN KEY (`Admin_Id`) REFERENCES `ADMIN`(`Admin_Id`) 
ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Table structure for table `#4 event`
--
Create TABLE IF NOT EXISTS `EVENT` (
`Event_Id` int(7) unsigned NOT NULL  auto_increment,
`Admin_Id` int(7) unsigned NOT NULL,
`Event_name` int(7) NOT NULL,
`Event_venue` int(30) NOT NULL,
`Event_date` datetime(6) NOT NULL,
`Event_time` varchar(30) NOT NULL,
`Event_description` text NOT NULL,
`Event_link` varchar(50) NOT NULL,
`Event_photo` varchar (50) NOT NULL,
`Date_create` datetime(6) NOT NULL,
PRIMARY KEY (`Event_Id`)
)
DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

ALTER TABLE `EVENT` ADD  FOREIGN KEY (`Admin_Id`) REFERENCES `ADMIN`(`Admin_Id`) 
ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Table structure for table `#5 Attends`
--
Create TABLE IF NOT EXISTS `ATTENDS` (
`Student_Id` int(10) unsigned NOT NULL,
`Event_Id` int(7) unsigned NOT NULL  auto_increment,
PRIMARY KEY (`Student_Id`,`Event_Id`),
FOREIGN KEY (`Student_Id`) REFERENCES `STUDENT`(`Student_Id`) 
ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (`Event_Id`) REFERENCES `EVENT`(`Event_Id`)
ON DELETE CASCADE ON UPDATE CASCADE
)
DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

--
-- Table structure for table `#6 Mandatory`
--
Create TABLE IF NOT EXISTS `MANDATORY` (
`Event_Id` int(7) unsigned NOT NULL  auto_increment,
`Dress_code` varchar(30) NOT NULL,
PRIMARY KEY (`Event_Id`)
)
DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

ALTER TABLE `MANDATORY` ADD  FOREIGN KEY (`Event_Id`) REFERENCES `EVENT`(`Event_Id`) 
ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Table structure for table `#7 Entertainment`
--
Create TABLE IF NOT EXISTS `ENTERTAINMENT` (
`Event_Id` int(7) unsigned NOT NULL  auto_increment,
`Entrance_cost` varchar(30) NOT NULL,
PRIMARY KEY (`Event_Id`)
)
DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;


ALTER TABLE `ENTERTAINMENT` ADD  FOREIGN KEY (`Event_Id`) REFERENCES `EVENT`(`Event_Id`) 
ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Table structure for table `#8 Volunteer`
--
Create TABLE IF NOT EXISTS `VOLUNTEER` (
`Event_Id` int(7) unsigned NOT NULL  auto_increment,
`Required_number` varchar(30) NOT NULL,
PRIMARY KEY (`Event_Id`)
)
DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

ALTER TABLE `VOLUNTEER` ADD  FOREIGN KEY (`Event_Id`) REFERENCES `EVENT`(`Event_Id`) 
ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Table structure for table `#9 About`
--
Create TABLE IF NOT EXISTS `OTHERS` (
`Event_Id` int(7) unsigned NOT NULL  auto_increment,
`About` varchar(30) NOT NULL,
PRIMARY KEY (`Event_Id`)
)
DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

ALTER TABLE `OTHERS` ADD  FOREIGN KEY (`Event_Id`) REFERENCES `EVENT`(`Event_Id`) 
ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Table structure for table `#10 Faculty`
--
Create TABLE IF NOT EXISTS `FACULTY` (
`Event_Id` int(7) unsigned NOT NULL  auto_increment,
`Faculty_type` varchar(30) NOT NULL,
PRIMARY KEY (`Event_Id`)
)
DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

ALTER TABLE `FACULTY` ADD  FOREIGN KEY (`Event_Id`) REFERENCES `EVENT`(`Event_Id`) 
ON DELETE CASCADE ON UPDATE CASCADE;

