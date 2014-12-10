CREATE DATABASE ticketDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE topic (
    id  int(11) NOT NULL AUTO_INCREMENT,
    status varchar(50) NOT NULL ,
    cuname varchar(50) NOT NULL ,
    title  varchar(255) NOT NULL ,
    description  text NULL ,
    created  datetime NOT NULL ,
    PRIMARY KEY (id)
);

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cuname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_idx` (`email`)
  UNIQUE KEY `cuname_idx` (`cuname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS  `ci_sessions` (
    session_id varchar(40) DEFAULT '0' NOT NULL,
    ip_address varchar(16) DEFAULT '0' NOT NULL,
    user_agent varchar(120) NOT NULL,
    last_activity int(10) unsigned DEFAULT 0 NOT NULL,
    user_data text NOT NULL,
    PRIMARY KEY (session_id),
    KEY `last_activity_idx` (`last_activity`)
);
