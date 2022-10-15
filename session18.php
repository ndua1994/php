<?php

session_start();


if(empty($_SESSION))
{
	header('Location:session17.php');
}

echo $_SESSION['name'].' '.$_SESSION['age'];;


?>