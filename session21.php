<?php

$age=12;

if($age>=18)
{
	echo 'You can vote !';
}
else
{
	throw new Exception("You cannot vote !");
	
}


echo 'helo';