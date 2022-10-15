<?php

session_start();


$_SESSION['name']='Nishant Dua';
$_SESSION['age']=20;



print_r($_SESSION);

echo $_SESSION['age'];





?>