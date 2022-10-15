<?php


$cookie_name = "user";
$cookie_value = "John Doe";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_COOKIE['user'])) {
    echo 'Cookie is set !';
} 
else
{
	echo 'Cookie is not set';
}


?>