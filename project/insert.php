<?php
include "class.php";
$q = "INSERT INTO Doctor(Id,Spectialization,City,Name,Address,Phone,Appointments)VALUES
(1,'Surgery Otolaryngology','Qena','Dr:Mohamed Ali','Al_gomhoria street','01242567421','4pm : 9pm'),
(2,'Ophthalmology','Qena','Abdin street','01111125621','2pm : 10pm'),
(3,'Nephrology','Qena','Dr:Mona Adel','Al_Tahrer street','01142567421','9am : 9pm'),
(4,'Obstetrics Gynecology','Qena','Dr:Eman Mohamed','Abd_Elsalam street','01142567421','6pm : 12pm'),
(5,'Orthopedics','Qena','Dr:Laila Mohamed','Al_Ryad street','01142567421','7pm : 4am'),
(6,'Cardialogy','Qena','Dr:Ahmed Ali','Soliman street','01142567421','3pm : 2am'),


(7,'Surgery Otolaryngology','Cairo','Dr:Ali Esa','Mohamed Mahmoud street','015425644421','4pm : 9pm'),
(8,'Ophthalmology','Cairo','Dr:Tarek Ali','Kasr El_einy street','010999421','2pm : 10pm'),
(9,'Nephrology','Cairo','Dr:Mohab khalid','Talat Harb street','010999421','9am : 9pm'),
(10,'Obstetrics Gynecology','Cairo','Dr:Asmaa Mostafa','Al_Falaky_st','010999421','6pm : 12pm'),
(11,'Orthopedics','Cairo','Dr:Hawaa Mohamed','Makram Ebid street','010999421','7pm : 4am'),
(12,'Cardialogy','Cairo','Dr:Aml Ali','Al_Sanafery street','010999421','3pm : 2am'),


(13,'Surgery Otolaryngology','El Minia','Dr:Hamdy Yasser','Al_Tayaran street','010999421','4pm : 9pm'),
(14,'Ophthalmology','El Minia','Dr:Ehab Ali','Al_Bostan street','010999421','2pm : 10pm'),
(15,'Nephrology','El Minia','Dr:Marwa Salama','Al_Nosouh street','015999421','9am : 9pm'),
(16,'Obstetrics Gynecology','El Minia','Dr:Taha Fathi','Al_City street','010999421','6pm : 12pm'),
(17,'Orthopedics','El Minia','Dr:Ziad Mahmoud','Ramsis street','010999421','7pm : 4am'),
(18,'Cardialogy','El Minia','Dr:Asmaa Ahmed','Al_Shawarby street','010999421','3pm : 2am'),


(19,'Asuit','Surgery Otolaryngology','Dr:Nour Taha','Yousry_Raghib street','010999421','4pm : 9pm'),
(20,'Asuit','Ophthalmology','Dr:Sali Adel','El_Mahta street','010999421','2pm : 10pm'),
(21,'Asuit','Nephrology','Dr:Adel Adham','Al_Gamaa street','010999421','9am : 9pm'),
(22,'Asuit','Obstetrics Gynecology','Dr:Adam Khalid','Al_City street','010999421','6pm : 12pmpm'),
(23,'Asuit','Orthopedics','Dr:Sherif Ahmed','Nemes street','0111999421','7pm : 4am'),
(24,'Asuit','Cardialogy','Dr:Yomna Mohamed','Al_Helali street','010999421','3pm : 2am');";
$db->myExec($q);

?>

