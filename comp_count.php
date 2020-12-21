<?php 
require_once("session.php");
require_once("connection.php");
if(isset($_SESSION['id'])==''){
	echo "sorry!";
}
else{
	$u_id=$_SESSION['id'];

$comp_count= '';

	$curr_date=date("yy-m-d");
	$sql="SELECT c_date FROM complain WHERE s_id='$u_id'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while($data=mysqli_fetch_array($res)){
			$com_date=$data["c_date"];
			 $exp_date=explode(" ",$com_date);
				 
			 if($exp_date[0]==$curr_date)
			 
			 {
				 $comp_count="false";
				
			 }
			
		}
	}
	//echo $comp_count;
}
	?>