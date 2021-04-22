
CREATE DATABASE `dms`;

----Admin Table ----------------

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` varchar(20) NOT NULL default 'admin',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
);



INSERT INTO `admin`(`id`, `fname`, `lname`, `email`, `password`, `type`) VALUES (1, 'admin', 'admin', 'admin@gmail.com', 'admin123');






---------------Student Table-----------


CREATE TABLE IF NOT EXISTS `student` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mno` varchar(255) NOT NULL,
  `p_mno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `enrollment_no` varchar(255) NOT NULL,
  `enrolled_year` varchar(30) NOT NULL,
  `year` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `status` varchar(60) NOT NULL,
  `branch` varchar(20) NOT NULL default 'cse',
  
   PRIMARY KEY (`s_id`)
) ;


-- Status might be pursuing or completed.
-- Completed year