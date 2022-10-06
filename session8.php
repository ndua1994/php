<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session 8</title>
</head>
<body>

<?php

/*function add($num1,$num2)
{
	$totl=$num1+$num2;
	echo $totl;

}



$result=add(10,20);

*/



function fullname($fname,$lname)
{
	return 'My name is '.$fname.' '.$lname.'<br>';
}



$uname=fullname('Nishant','Dua');


echo $uname;

echo fullname('Karan','Sharma');


echo strtolower('nishant me');

echo number_format(100000000000);
?>



</body>
</html>