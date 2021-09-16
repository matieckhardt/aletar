<?php
include("../res/x5engine.php");
$nameList = array("yny","2h6","e4u","fl2","nyh","5wf","3p7","42a","rs2","38a");
$charList = array("H","G","X","J","L","2","T","M","Y","S");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
