<?php 
// Reset/Change password form for both change password and reset
if(isset($pass) and isset($cpass))
if(verify_pass($pass, $cpass)){

	$pass = sha1($pass);
	$passhash = password_hash($pass, PASSWORD_BCRYPT);

	$sql = "UPDATE login SET password='$passhash'";
	$con->query($sql);
}
else header("refresh:0; url=index.php");

function verify_pass($pass, $cpass){
	if($pass == $cpass)
	return true;
	return false;
}
?>