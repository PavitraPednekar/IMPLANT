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
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $trn_date = date("Y-m-d h:i:s");
	$mobile = stripslashes($_REQUEST['mobile']);
    $mobile = mysqli_real_escape_string($con,$mobile);
	$query = "INSERT into `users` (username,email,password,trn_date,mobile)
VALUES ('$username','".md5 ($password)."','$email','$trn_date','$mobile')";
$result = mysqli_query($con,$query);
if($result){
echo"<div class='from'>
<h3>you  are registerd successfuly</h3>
<br/>click here to <a href='login.php'>Login</a></div>";
}
}else{
?>
<div class="from">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="number" name="mobile" placeholder="mobile" required />
<button type="submit" name="submit" value="register"/>
</form>
</div>
<?php } ?>
</body>
</html>


