<?php
include("../res/x5engine.php");
$nameList = array("fge","5lp","leh","nzc","wyj","uz5","a3f","enw","ajw","h24");
$charList = array("N","Y","V","V","7","J","C","E","M","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
