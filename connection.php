<?php
	
$con=mysqli_connect("localhost","root","","complain_system");
if(!$con){
	echo mysqli_connect_error();
}
else
{
	$err_msg="";
	echo $err_msg;
	}
?>