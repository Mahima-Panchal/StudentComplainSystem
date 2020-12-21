<?php
session_start();
?>
<html>
<head>
  <link href="css/main2.css" rel="stylesheet" media="all">
  <link type="text/css" rel="stylesheet" href="assets/css/formstyle.css">
	<script type="text/javascript">
	function validate(){
	var email_patt=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	if(email_patt.test(document.frm1.email.value)==false){
		alert("enter valid email address");
		return false;
	}
	}
	</script>
</head>
<body>

<form onsubmit="return validate();"method="POST" action="<?php ($_SERVER["PHP_SELF"]);?>" name="frm1"id="login-form" class="login-form" autocomplete="off" role="main">
  <h1 class="a11y-hidden">Login Form</h1>	
  <div>
    <label class="label-email">
      <input type="text" class="text" name="email" placeholder="Email" tabindex="1" required />
      <span class="required">Email</span>
    </label>
  </div>
  <input type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
  <label class="label-show-password" for="show-password">
    <span>Show Password</span>
  </label>
  <div>
    <label class="label-password">
      <input type="password" class="text" name="pass" placeholder="Password" tabindex="2" required />
      <span class="required">Password</span>
    </label>
  </div>
  <input type="submit" name="submit"value="Log In" />
  <div class="email">

    <a href="signup.php">Create Acoount?</a>
	<a href="index.php">Home</a>
  
  <?php
	include('connection.php');
	if(isset($_POST["submit"])){
		
		$u_email=$_POST["email"];	
		$u_pass=$_POST["pass"];

    if($u_email=="admin@spu.ac.in" && $u_pass=="spu@112233"){
      // echo "It's admin";
      header("location:admin/");
    }
    else{
        echo"Not admin";
      
        $q="SELECT * FROM signup WHERE s_email='$u_email' AND s_password='$u_pass'";
        $reslt=mysqli_query($con,$q);
        $num=mysqli_num_rows($reslt);
        if($num >= 1){
          header("location:index.php");
      	  //$err_msg="log in success";
      	  //echo "<h3 style='color:red;' align='center'>$err_msg</h3>";
        }
        else{
          $err_msg="Incorrect Email or Password";
      	  echo "<div style='color:red;'>$err_msg</div>";
        }
        $sql="SELECT s_id,s_fname FROM signup WHERE s_email='$u_email'";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)>0){
          while($row=mysqli_fetch_array($res)){
            $id=$row["s_id"];
        	  $name=$row["s_fname"];
        	  echo "$id  $name";
        	  $_SESSION['id']=$id;
        	  $_SESSION['name']=$name;
        }
      }
    }
	}
	?>
		
	
	</div>
  <figure aria-hidden="true">
    <div class="person-body"></div>
    <div class="neck skin"></div>
    <div class="head skin">
      <div class="eyes"></div>
      <div class="mouth"></div>
    </div>
    <div class="hair"></div>
    <div class="ears"></div>
    <div class="shirt-1"></div>
    <div class="shirt-2"></div>
  </figure>
</form>
</body>
</html>

