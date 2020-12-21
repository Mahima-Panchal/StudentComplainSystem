<?php
include("header.php");
?>
<html>
<!DOCTYPE html>
<html lang="en">
    <head>
       <!-- <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
		<script type="text/javascript">  
		function validate(){
			var mo_no_patt=/^\d{10}$/;
			var email_patt=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			var pass_patt=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;


			if(document.frm1.first_name.value==''){
				alert("Enter first name");
				return false;
			}
			if(document.frm1.last_name.value==''){
				alert("Enter Last name");
				return false;
			}
		
			if(mo_no_patt.test(document.frm1.mobile.value)==false){
				alert("please enter correct mobile number");
				return false;
			}
			/*if(email_patt.test(document.frm1.email.value)==false){
				alert("please enter correct Email Id");
				return false;
			}*/
			if(pass_patt.test(document.frm1.pass.value)==false){
				alert("Password must contain one uppercase,one lowercase and one number,at least 6 char ");
				return false;
			}
	}
	</script>
    </head>
    <body>
	<div class="img_div"><img src="assets/img/slider/my.jpg"></div>
        <div class="container">
            <div class="container-box rotated">
                <button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModal">EDIT PROFILE</button>
            </div>
			<div class="page_container">
	<div class="row login_box">
	    <div class="col-md-12 col-xs-12" align="center">
            <div class="line"><h3></h3></div>
			<?php
require_once("connection.php");
$s_id=$_SESSION['id'];
//echo "$s_id";
$sql ="select * from signup where s_id='$s_id'";
//"select signup.s_email,response.r_message FROM((complain INNER JOIN signup ON complain.s_id='$s_id')INNER JOIN response ON complain.c_id=response.c_id)";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	//echo $row['s_id'];
		?>
               
            <h1>Hi <?php echo $row['s_fname']." ".$row['s_lname'];
?></h1>
            <span>SAKALCHAND PATEL UNIVERSITY</span>
	    </div>
        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
                <strong> Birth Date</strong><br/> <span><?php echo $row['s_bdate'];?></span>
            </h3>
        </div>
        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
                 <strong> Password</strong><br/> <span><?php echo $row['s_password'];?></span>
            </h3>
        </div>
		        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
                 <strong> Email Address</strong><br/> <span><?php echo $row['s_email'];?></span>
            </h3>
        </div>
        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
				<strong> Mobile Number</strong><br/> <span><?php echo $row['s_mobile'];?></span>
            </h3>
        </div>
		        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
				<strong> Department </strong><br/> <span><?php echo $row['s_department'];?></span>
            </h3>
        </div>
			<div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
				<strong> Gender </strong><br/> <span><?php echo $row['s_gender'];?></span>
            </h3>
        </div>

		<?php //echo $row['s_lname'];
	

	
	//echo $row['s_mobile'];

}?>
              
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">
                                EDIT PROFILE
                            </h4>
							<?php
							$query="select * from signup where s_id='$s_id'";
							$res=mysqli_query($con,$query);
							while($row=mysqli_fetch_array($res)){
								
							
							?>
                        </div>
                        <div class="modal-body">
                            <form method="post" name="frm1" onsubmit="return validate();" action="<?php ($_SERVER["PHP_SELF"]);?>">
                                <p> Edit your Profile Details. </p>
                                <div class="form-group">
                                    <label for="name"> FIRST NAME:</label>
                                    <input type="text" class="form-control" id="name" name="first_name" value="<?php echo $row['s_fname'];?>">
                                </div>
								
                                <div class="form-group">
                                    <label for="name"> LAST NAME:</label>
                                    <input type="text" class="form-control" id="name" name="last_name" value="<?php echo $row['s_lname'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="email"> EMAIL:</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['s_email'];?>">
                                </div>
								
                                <div class="form-group">
                                    <label for="name"> 	MOBILE:</label>
                                    <input type="text" class="form-control" id="name" name="mobile"value="<?php echo $row['s_mobile'];?>">
                                </div>
								                                <div class="form-group">
                                    <label for="email"> PASSWORD:</label>
                                    <input type="text" class="form-control" id="email" name="pass" value="<?php echo $row['s_password'];?>">
                                </div>
								
                                <!--<div class="form-group">
                                    <label for="name"> Message:</label>
                                    <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                                </div>-->
                                <input type="submit" class="btn btn-lg btn-success btn-block" name="submit" value="update"/>
                            </form>
							<?php }?>
				
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
?>
                            <div id="success_message" style="width:100%; height:100%; display:block; "> <h3><?php echo"record not updated"?></h3> </div>
 
	<?php
		}
		else{?>
			<div id="success_message" style="width:100%; height:100%; display:block; "> <h3><?php echo"record updated"?></h3> </div>
		<?php
			
		}
	}
	else{
		echo "sorry!";
	}
	
?>	
							</div>         
							</div>
                    </div>
                </div>
            </div>
        </div>
	


                <div align="center">
				<form action="logout.php" method="get">
                     <input type="submit"name="submit" value="LOGOUT" class="lgout" style="color:white;font-size:30px;background-color:blue;">
			
</form>
</div>
<?php
include("mycomp.php"); 
?>
    </body>
</html>