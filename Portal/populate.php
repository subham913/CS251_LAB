<?php

$db = new SQLite3('mysqlitedb.db');
$var1="CREATE TABLE CUSTOMERS(
   EMAILID VARCHAR (20)     NOT NULL,
   NAME VARCHAR (20)     NOT NULL,
   ADDRESS  VARCHAR (110)   NOT NULL,
   MOBILENO  INT(10)         NOT NULL,
   ACCOUNT NO INT(5) NOT NULL,
   PASSWORD  VARCHAR(20) NOT NULL       
)";

$db->query($var);
$var1="CREATE TABLE BANK(
   ACCOUNT NO INT(5) NOT NULL,
   PASSWORD  VARCHAR(20) NOT NULL,
   BALANCE INT  NOT NULL      
)";

$db->query($var);

$q1="INSERT INTO CUSTOMERS VALUES('subhamkr@xyz.com','Subham','A-109','9005933688','00001','aaaa')";
$db->query($q1);
$q1="INSERT INTO CUSTOMERS VALUES('pragatis@xyz.com','Pragati','A-109','9005433689','00002','bbbb')";
$db->query($q1);
$q1="INSERT INTO CUSTOMERS VALUES('kkhanna@xyz.com','Kubham','A-110','9005933688','00003','cccc')";
$db->query($q1);
$q1="INSERT INTO CUSTOMERS VALUES('csomesh@xyz.com','Pubham','A-112','9405933688','00004','dddd')";
$db->query($q1);
$q1="INSERT INTO CUSTOMERS VALUES('pratap@xyz.com','Tubham','A-111','9005843688','00005','eeee')";
$db->query($q1);
$q1="INSERT INTO CUSTOMERS VALUES('kumarpr@xyz.com','Subham','A-108','9001933688','00006','ffff')";
$db->query($q1);
$q1="INSERT INTO CUSTOMERS VALUES('maheshc@xyz.com','Subham','A-107','9005933684','00007','gggg')";
$db->query($q1);
$q1="INSERT INTO CUSTOMERS VALUES('rohit@xyz.com','Subham','A-106','9005433688','00008','hhhh')";
$db->query($q1);
$q1="INSERT INTO CUSTOMERS VALUES('sudheer@xyz.com','Sudheer','A-101','9005943688','00009','iiii')";
$db->query($q1);
$q1="INSERT INTO CUSTOMERS VALUES('ankuriit@xyz.com','Ankur Singh','A-101','9004933688','00010','jjjj')";
$db->query($q1);

$q1="INSERT INTO BANK VALUES('00001','aaaa','1000')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00002','bbbb','1002')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00003','cccc','1003')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00004','dddd','1004')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00005','eeee','1005')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00006','ffff','1006')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00007','gggg','1007')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00008','hhhh','1008')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00009','iiii','1009')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00010','jjjj','1010')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00011','kkkk','1011')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00012','llll','500')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00013','mmmm','7000')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00014','nnnn','1900')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00015','oooo','1800')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00016','pppp','1700')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00017','qqqq','1600')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00018','rrrr','1500')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('00019','ssss','3000')";
$db->query($q1);
$q1="INSERT INTO BANK VALUES('0020','tttt','2000')";
$db->query($q1);






?>