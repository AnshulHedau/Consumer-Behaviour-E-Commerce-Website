create database evoting;
use evoting;

CREATE TABLE IF NOT EXISTS users (
  `pid` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` int(7) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL default 'user',
  PRIMARY KEY  (pid),
  UNIQUE KEY `voterid` (`voterid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `users` (`pid`, `name`, `voterid`, `dob`,
 `mobile`, `password`, `email`, `address`, `gender`) VALUES
(1, 'Anshul', '15BCE2079', '01-03-1998', '9406539777', 940653,
 'anshul01@gmail.com', 'MIG 73/3-A Saket Nagar Bhopal', 'Male');

select * from users;
drop table users;
desc users;

CREATE TABLE IF NOT EXISTS candidate (
  `pid` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  PRIMARY KEY  (pid),
  UNIQUE KEY `voterid` (`voterid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `candidate` (`pid`, `name`, `voterid`, `dob`, `image`, `party`) VALUES
(1, 'Anshul', '15BCE2079', '01-03-1998', 'https://lh3.googleusercontent.com/-Gh89MRpypLo/V6MLBKfL7BI/AAAAAAAAA14/kV4PM2oornA4RcEmrAkVfZ4Ap-mfV__3wCEwYBhgL/w140-h140-p/13423918_1028093480591912_7654423904645202467_n.jpg',
 'BJP');

select * from candidate;
drop table candidate;
desc candidate;

#incomplete
CREATE TABLE IF NOT EXISTS result (
  `pid` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  PRIMARY KEY  (pid),
  UNIQUE KEY `voterid` (`voterid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;