<?php



/*$email='test@email.com';

if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "$email is not a valid Email ID";
}
else
{
    echo "$email is a valid Email ID";
}*/

/*
$content='<h1>Hello user</h1>';


$rec=filter_var($content,FILTER_SANITIZE_STRING);
echo $rec;
*/


/*$num=22;

if(!filter_var($num,FILTER_VALIDATE_INT))
{
    echo "$num is not a integer";
}
else
{
    echo "$num is a integer";
}
*/


$ip='127.0.0.1';

if(!filter_var($ip,FILTER_VALIDATE_IP))
{
    echo "$ip is not a valid IP Address";
}
else
{
    echo "$ip is a valid IP Address";
}

?>