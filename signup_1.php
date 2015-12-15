<?php
	if(isset($_REQUEST['register'])){
		$user = $_REQUEST['emailid'];
		$pwd = $_REQUEST['pwd'];
		$cpwd = $_REQUEST['cpwd'];
		$name = $_REQUEST['name'];
		$age = $_REQUEST['age'];
		
		if(empty($user) || empty($pwd) || empty($cpwd) || empty($name) || empty($age)){
			$err = "All fields have to be filled";
		} else if(!preg_match("/^[(a-z)(A-Z)(0-9).-_]+@[(a-z)(A-Z)(0-9)]+\.[(a-z)(A-Z).]{2,5}$/", $user)){
			$err = "Please enter a valid email id";
		} else if($pwd != $cpwd) {
			$err = "Password Not Match";
		} else if(!preg_match("/^[(a-z)(A-Z)]{2,30}$/", $name)){
			$err = "Please enter a valid name";
		} else if(!preg_match("/^[(0-9)]{2}$/", $age)){
			$err = "Please enter a valid age";
		} else {
			if(file_exists("users/".$user)){
				$err = "This username name has already taken. Please use different One.";
			} else {
				mkdir("users/".$user);
				mkdir("users/".$user."/inbox");
				mkdir("users/".$user."/trash");
				mkdir("users/".$user."/sent");
				mkdir("users/".$user."/draft");
				$file = fopen("users/".$user."/".$pwd, "w+");
					fwrite($file, "Name: $name\nAge: $age");
				fclose($file);
				header("location: welcome.php");
			}
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>PHP DUCAT DEPARTMENT - REGISTER</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<form name="form1" method="post" action="">
  <table width="304" border="0" align="center">
    <tr>
	  <td colspan="2"><font color="#FFFFFF"><b><?php echo @$err; ?></b></font></td>
	</tr>
    <tr>
      <td><strong>Email Id </strong></td>
      <td><input type="text" name="emailid"></td>
    </tr>
    <tr>
      <td><strong>Password</strong></td>
      <td><input type="password" name="pwd"></td>
    </tr>
    <tr>
      <td><strong>Confirm Password </strong></td>
      <td><input type="password" name="cpwd"></td>
    </tr>
    <tr>
      <td><strong>Name</strong></td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td><strong>Age</strong></td>
      <td><input type="text" name="age"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="register" value="Register"></td>
    </tr>
  </table>
</form>

</body>
</html>
