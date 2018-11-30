<?php
        include "class.php";
	$q= ("CREATE TABLE IF NOT EXISTS Doctor(
	Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	City varchar(50) NOT NULL,
        Spectialization varchar(50) NOT NULL ,
        Name varchar(50) NOT NULL,
        Address varchar(51) NOT NULL,
        Phone varchar(50) NOT NULL,
        Appointments varchar(50));");
	$db->myExec($q);
?>




