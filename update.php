<?php 
require_once("session.php");
require_once("connection.php");
	if(isset($_POST["submit"])){
		$f_name=$_POST["first_name"];
		$l_name=$_POST["last_name"];
		$u_pass=$_POST["pass"];
		$u_email=$_POST["email"];
		$u_mobile=$_POST["mobile"];
		$s_id=$_SESSION['id'];
		//$success="record updated successfully";
		//$fail="something went wrong";
		$q="UPDATE signup SET s_fname='$f_name',s_lname='$l_name',s_password='$u_pass',s_email='$u_email',s_mobile='$u_mobile' where s_id='$s_id'";
		$resup=mysqli_query($con,$q);
		//$num=mysqli_num_rows($resup);
		if(!$resup){
			echo "update";
		}
		else{
			echo "sorry";	
		}
	}
	else{
		echo "sorry2";
	}
	
?>	