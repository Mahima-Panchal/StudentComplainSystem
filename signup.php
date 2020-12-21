
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>
	

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
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
			if(document.frm1.Department.value==''){
				alert("Enter Last name");
				return false;
			}
			if(mo_no_patt.test(document.frm1.mobile.value)==false){
				alert("please enter correct mobile number");
				return false;
			}
			if(email_patt.test(document.frm1.email.value)==false){
				alert("please enter correct Email Id");
				return false;
			}
			if(pass_patt.test(document.frm1.pass.value)==false){
				alert("Password must contain one uppercase,one lowercase and one number,at least 6 char ");
				return false;
			}
			if(document.frm1.pass.value != document.frm1.confirm_pass.value){
				alert("Confirm password mismatch");
				return false;
			}
			
		}
	function reset(){
		document.frm1.reset();
		
	}
	</script>
</head>

<body>
<a class="navbar-brand" href="index.php"><i class="fa fa-university"></i><span>Sakalchand Patel University</span></a>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
	
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST"onsubmit="return validate();" action="<?php ($_SERVER["PHP_SELF"]);?>" name="frm1">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">B_date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="b_date">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="pass">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="confirm_pass">
                                </div>
								Ex.(Skpatel@2020)
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Mobile</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" value="91" name="area_code">
                                            <label class="label--desc">Country Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="mobile">
                                            <label class="label--desc">Mobile Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Department</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Department">
                                            <option disabled="disabled" selected="selected">Choose Your Department</option>
                                            <option>MCA</option>
                                            <option>BCA</option>
                                            <option>B.com</option>
											<option>M.com</option>
                                            <option>B.sc</option>
                                            <option>M.sc</option>
											<option>B.tech</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
						 <div class="name">Gender</div>
                           
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">male
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">female
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit"name="submit">Register</button>
							
							<button class="btn btn--radius-2 btn--red" onclick="reset()"type="reset">Cancle</button>
                        </div>
						<div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<?php
require_once('connection.php');

if(isset($_POST["submit"])){
	
	$f_name=$_POST["first_name"];
	$l_name=$_POST["last_name"];
	$birth_date=$_POST["b_date"];
	$u_pass=$_POST["pass"];
	$u_email=$_POST["email"];
    $u_mobile=$_POST["mobile"];
	$u_sem=$_POST["Department"];
	$u_gender=$_POST["exist"];

//$q="INSERT INTO sign_up(USER_ID,PASSWORD)VALUES('$u_id','$u_pass')";
$q="SELECT * FROM signup WHERE s_email='$u_email'";
$reslt=mysqli_query($con,$q);
$num=mysqli_num_rows($reslt);
if($num >= 1){
	//$id=mysqli_insert_id($reslt);
	$err_msg="user email has been already used " ;
	 echo "<div id='errr' style='background-color:#2c3e50;font-size:25px;width:auto;text-align:center;color:#ecf0f1;'><strong style='color:red;'>warning:</strong>$err_msg<button class='btn btn-primary btn-sm' onclick='myfun()'>ok</button><a class='btn btn--radius-2 btn--green'href='login.php'>login</a></div>";
}
else{
	$qi="INSERT INTO signup(s_fname,s_lname,s_bdate,s_password,s_email,s_mobile,s_department,s_gender)VALUES('$f_name','$l_name','$birth_date','$u_pass','$u_email','$u_mobile','$u_sem','$u_gender')";
	 $rs=mysqli_query($con,$qi);
	 $err_msg2="registration successfull";
	echo "<div id='errr' style='background-color:#2c3e50;font-size:25px;width:auto;text-align:center;color:#ecf0f1;'><strong style='color:red;'>warning:</strong>$err_msg2<button class='btn btn-primary btn-sm' onclick='myfun()'>ok</button><a class='btn btn--radius-2 btn--green'href='login.php'>login</a></div>";
}
}
?>
	
<script>
		function myfun(){
			document.getElementById("errr").style.display="none";
		}
	</script>

<?php
include "footer.php";
?>
