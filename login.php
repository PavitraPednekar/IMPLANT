<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('config.php');
if(isset($_REQUEST['username'])){
    $username=stripslashes($_REQUEST['username']);
    $username=mysqli_real_escape_string($con,$username);
    $password= stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $query="SELECT * FROM `user` WHERE username='$username' password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
	$result=mysqli_num_rows($result);
	if($rows == 1)
	{
$_SESSION['username'] = $username;
header("Location: index.php");
}else{
echo "<div class='from'>
<h3>Username/Password is incorrect.</h3>
<br/>Click here to <a href='login.php'>login</a></div>";
}
}else{
?>
<div class="from">
<h1>Log In</h1> 
<form name="login" action="" method="post">
<input type="text" name="username" placeholder="username" required />
<input type="password" name="password" placeholder="password" required />
<input type="submit" name="login" value="login" > 
</form>
</div>
<?php } ?>
</body>
</html>