<?php

error_reporting(0);
if(isset($_POST['add_employee']))
{
	$username=$_POST['username'];
	$email_id=$_POST['email_id'];
	$mobile_number=$_POST['mobile_number'];
	$gender=$_POST['gender'];
	$designation=$_POST['designation'];

	if(empty($username))
	{
		$err[]='username is required';
	}

	if(empty($email_id))
	{
		$err[]='Email ID is required';
	}

	if(!filter_var($email_id,FILTER_VALIDATE_EMAIL) && !empty($email_id))
	{
        $err[]='Enter a valid Email ID';

	}

	if(empty($mobile_number))
	{
		$err[]='Mobile Number is required';
	}

	if(!is_numeric($mobile_number) && !empty($mobile_number))
	{
		$err[]='Mobile number must be a numeric value';
	}

	if(empty($gender))
	{
		$err[]='Gender is required';
	}

	if(empty($designation))
	{
		$err[]='Designation is required';
	}

	if(count($err)==0)
	{
		echo 'Form has been submitted successfully !';
		$username=$email_id=$mobile_number=$gender=$designation='';
	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php form validation</title>
</head>
<body>

	<?php
    if(count($err)>0)
    {
    	foreach($err as $error)
    	{
    		echo $error.'<br>';
    	}
    }
	?>
    <form action="" method="post">
	<table width="500" border="1" align="center" cellpadding="2" cellspacing="2">
		   <tr>
		   	    <td colspan="2" align="center"><h1>Employee Registration</h1></td>
		   </tr>
		   <tr>
		   	   <td>Name</td>
		   	   <td><input type="text" name="username" placeholder="Username" value="<?=$username?>"></td>
		   </tr>
		   <tr>
		   	   <td>Email ID</td>
		   	   <td><input type="text" name="email_id" placeholder="Email ID" value="<?=$email_id?>"></td>
		   </tr>
		   <tr>
		   	   <td>Mobile Number</td>
		   	   <td><input type="text" name="mobile_number" placeholder="Mobile Number" value="<?=$mobile_number?>"></td>
		   </tr>
		   <tr>
		   	    <td>Gender</td>
		   	    <td><input type="radio" name="gender" value="Male" <?=($gender=='Male' ? 'checked' : '')?>> Male
		   	        <input type="radio" name="gender" value="Female" <?=($gender=='Female' ? 'checked' : '')?>>Female
		   	    </td>
		   </tr>
		   <tr>
		   	   <td>Designation</td>
		   	   <td>
		   	   	   <select name="designation">
		   	   	   	       <option value="">Select Designation</option>
		   	   	   	       <option value="manager" <?=($designation=='manager' ? 'selected' : '')?>>Manager</option>
		   	   	   	       <option value="team_lead" <?=($designation=='team_lead' ? 'selected' : '')?>>Team Lead</option>
		   	   	   	       <option value="sales_person" <?=($designation=='sales_person' ? 'selected' : '')?>>Sales Person</option>
		   	   	   </select>
		   	   </td>
		   </tr>
		   <tr>
		   	<td colspan="2" align="center"><input type="submit" name="add_employee" value="Add Employee"></td>
		   </tr>
	</table>
	</form>

</body>
</html>