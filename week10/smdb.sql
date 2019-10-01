-- recreate database
DROP DATABASE IF EXISTS SMDB;
CREATE DATABASE SMDB;
USE SMDB;

-- create table to persist student class
-- not that i use snake case for field names
CREATE TABLE `smdb`.`students` (
     `id` INT NOT NULL AUTO_INCREMENT , 
     `student_id` VARCHAR(8) NOT NULL , 
     `name` VARCHAR(255) NOT NULL , 
     `email` VARCHAR(255) NOT NULL , 
     `date_of_birth` DATE NULL , 
     PRIMARY KEY (`id`)
) ENGINE = InnoDB;    

-- populate table with data for testing
-- got to https://mockaroo.com/ to generate data like this in sql format
insert into students (id, student_id, name, email, date_of_birth) values (1, '67653817', 'Aime Ten Broek', 'aten0@paypal.com', '1996-08-27');
insert into students (id, student_id, name, email, date_of_birth) values (2, '47095857', 'Robin Dowdell', 'rdowdell1@fda.gov', '1996-06-25');
insert into students (id, student_id, name, email, date_of_birth) values (3, '14198581', 'Tobey O''Hingerty', 'tohingerty2@uol.com.br', '1996-06-06');
insert into students (id, student_id, name, email, date_of_birth) values (4, '93145349', 'Cullie McMichael', 'cmcmichael3@va.gov', '1994-10-04');
insert into students (id, student_id, name, email, date_of_birth) values (5, '31563350', 'Enrichetta Grigoryev', 'egrigoryev4@senate.gov', '1994-03-26');
insert into students (id, student_id, name, email, date_of_birth) values (6, '44206552', 'Tommie Dobbie', 'tdobbie5@shutterfly.com', '1997-10-22');
insert into students (id, student_id, name, email, date_of_birth) values (7, '95729686', 'Yank Colvill', 'ycolvill6@about.me', '1996-08-07');
insert into students (id, student_id, name, email, date_of_birth) values (8, '33832765', 'Wilone Fowells', 'wfowells7@dailymotion.com', '1994-08-22');
insert into students (id, student_id, name, email, date_of_birth) values (9, '56698321', 'Electra Lukacs', 'elukacs8@biglobe.ne.jp', '1995-12-08');
insert into students (id, student_id, name, email, date_of_birth) values (10, '62841417', 'Kristo Kamena', 'kkamena9@shutterfly.com', '1995-08-27');
insert into students (id, student_id, name, email, date_of_birth) values (11, '35379489', 'Sarah Klees', 'skleesa@pcworld.com', '1997-06-21');
insert into students (id, student_id, name, email, date_of_birth) values (12, '12810571', 'Shela Bulled', 'sbulledb@photobucket.com', '1994-05-27');
insert into students (id, student_id, name, email, date_of_birth) values (13, '59694021', 'Goran Skittles', 'gskittlesc@flavors.me', '1996-11-23');
insert into students (id, student_id, name, email, date_of_birth) values (14, '34014544', 'Willem Abeles', 'wabelesd@java.com', '1994-02-23');
insert into students (id, student_id, name, email, date_of_birth) values (15, '41684501', 'Ryun Mulbery', 'rmulberye@privacy.gov.au', '1996-09-20');
insert into students (id, student_id, name, email, date_of_birth) values (16, '32780233', 'Mildred Wolfenden', 'mwolfendenf@acquirethisname.com', '1995-07-27');
insert into students (id, student_id, name, email, date_of_birth) values (17, '66919992', 'Gibby Dodimead', 'gdodimeadg@usgs.gov', '1998-01-27');
insert into students (id, student_id, name, email, date_of_birth) values (18, '84318148', 'Doti Bonhill', 'dbonhillh@ucla.edu', '1994-03-20');
insert into students (id, student_id, name, email, date_of_birth) values (19, '28242442', 'Faun Gillett', 'fgilletti@ocn.ne.jp', '1998-05-24');
insert into students (id, student_id, name, email, date_of_birth) values (20, '08018908', 'Jesus Kanzler', 'jkanzlerj@chronoengine.com', '1994-12-29');
insert into students (id, student_id, name, email, date_of_birth) values (21, '46650752', 'Creight Fellman', 'cfellmank@fc2.com', '1993-12-01');
insert into students (id, student_id, name, email, date_of_birth) values (22, '59057941', 'Lacey Siflet', 'lsifletl@census.gov', '1995-06-02');
insert into students (id, student_id, name, email, date_of_birth) values (23, '93435029', 'Shayna Scudders', 'sscuddersm@altervista.org', '1998-09-26');
insert into students (id, student_id, name, email, date_of_birth) values (24, '51615396', 'Herculie English', 'henglishn@ihg.com', '1993-07-05');
insert into students (id, student_id, name, email, date_of_birth) values (25, '09563057', 'Gene Tearny', 'gtearnyo@studiopress.com', '1994-09-01');
insert into students (id, student_id, name, email, date_of_birth) values (26, '34683110', 'Vince Jacquemet', 'vjacquemetp@prweb.com', '1994-05-29');
insert into students (id, student_id, name, email, date_of_birth) values (27, '80540239', 'Bernete Sipson', 'bsipsonq@ow.ly', '1993-10-16');
insert into students (id, student_id, name, email, date_of_birth) values (28, '17845043', 'Herta Oxtiby', 'hoxtibyr@mac.com', '1993-11-03');
insert into students (id, student_id, name, email, date_of_birth) values (29, '43751002', 'Amalita Cullinane', 'acullinanes@netlog.com', '1995-04-13');
insert into students (id, student_id, name, email, date_of_birth) values (30, '94755262', 'Arne Aphale', 'aaphalet@admin.ch', '1995-12-12');

-- check if database user exists first 
-- create database user with permissions to use tables
DROP USER IF EXISTS 'smdbuser'@'localhost';
CREATE USER 'smdbuser'@'localhost' IDENTIFIED BY 'pwd';
GRANT SELECT, INSERT, UPDATE, DELETE ON SMDB.* TO 'smdbuser'@'localhost';

