
CREATE TABLE `pizza` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cn` varchar(10) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `d` varchar(10) NOT NULL,
  `pt` varchar(20) NOT NULL,
  `ps` varchar(10) NOT NULL,
  `q` int(4) NOT NULL,
  `s` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


INSERT INTO `pizza` VALUES 
(0001,'Kavinda','0711234567','96000000V','2020.07.01','chillie chicken','large',2,'new order'),
(0002,'Tathsarani','0771234567','98000070V','2020.07.01','spicy','small',4,'new order'),
(0003,'kumari','0721234568','94000070V','2020.07.02','chillie chicken','small',5,'new order'),
(0004,'menaka','0751234568','93000010V','2020.07.02','cheese','medium',1,'new order'),
(0005,'nisha','0701234567','92000030V','2020.07.02','chillie chicken','large',4,'new order'),
(0006,'nuvan','0761234567','20051489564165V','2020.06.21','cheese','small',5,'new order');


CREATE TABLE `price` (
  `pt` varchar(20) NOT NULL,
  `ps` varchar(10) NOT NULL,
  `p` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `price` VALUES 
('chillie chicken','small',400),
('chillie chicken','medium',650),
('chillie chicken','large',1100),
('spicy','small',450),
('spicy','medium',700),
('spicy','large',1200),
('cheese','small',550),
('cheese','medium',800),
('cheese','large',1450);
