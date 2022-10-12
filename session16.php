<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php session 16</title>
</head>
<body>


<?php
/*
$filename = "test.txt"; 
$data=fopen("$filename", 'r');//open file in read mode    
$contents = fread($data, filesize($filename));//read file    
echo $contents;

fclose($data);//close file   */


$myfile = fopen("text.txt", "w") or die("Unable to open file!");
$txt = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
fwrite($myfile, $txt);
fclose($myfile);


?>



</body>
</html>