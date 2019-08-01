CREATE DATABASE EEmgmt;
USE EEmgmt;

CREATE TABLE login(
username VARCHAR(100) NOT NULL,
pass VARCHAR(300) NOT NULL,
addcard INTEGER NOT NULL,
editcard INTEGER NOT NULL,
sendnotice INTEGER NOT NULL,
viewexit INTEGER NOT NULL,
viewloginlog INTEGER NOT NULL,
deletelog INTEGER NOT NULL,
initialize INTEGER NOT NULL,
setmail INTEGER NOT NULL,
shutdown INTEGER NOT NULL,
edituser INTEGER NOT NULL,
PRIMARY KEY (username));

CREATE TABLE service_user(
idm VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
mainEmail VARCHAR(300) NOT NULL,
notice VARCHAR(30) NOT NULL,
password VARCHAR(150),
address1 VARCHAR(300),
address2 VARCHAR(300),
address3 VARCHAR(300),
address4 VARCHAR(300),
address5 VARCHAR(300),
PRIMARY KEY (idm));

CREATE TABLE gui(
password INTEGER
);

CREATE TABLE setting(
fromEmail VARCHAR(150),
mailUserid VARCHAR(150),
mailPassword VARCHAR(150),
lineToken VARCHAR(150)
);
