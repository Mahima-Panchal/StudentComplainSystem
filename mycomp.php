<?php 
require_once("session.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modall {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-contentt {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.closee {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-headerr {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-bodyy {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
.btnres{
	background-color:blue;
	color:white;
	height:25px;
	width:100%;
	float:right;
	text-align:center;
	margin-bottom:0px;
	border-radius:5px;
	height:30px;
	
}
.msg_content{
	background-color:white;

	justify-content:center;
	display:flex;
	
}
.main_mt{
	background-color:white;
	margin:40px;
	width:200px;
	height:300px;
	justify-content:center;
	
	border-radius:20px;
	border-bottom:3px solid red;
	border-left:3px solid green;
	border-top:3px solid blue;
	border-right:3px solid yellow;
	text-transform:uppercase;
}
.msg_complain h3{
	font-size:20px;

	height:auto;
}
.msg_header h2{
	font-size:15px;
	background-color:gray;
	border-radius:10px;

}

.msg_date h3{
	font-size:10px;
	text-decoration:bold;
	float:right;
}

.msg_complain h3 .mymsg{
	background-color:black;
	color:white;
	border-radius:5px;

}

</style>
</head>
<body>

<center><h2 style="color:white;"> Your Complains</h2></center>
<?php 
require_once("connection.php");
$sid=$_SESSION['id'];
$err="";
 $sql="select * from complain where s_id='$sid'";
 $res=mysqli_query($con,$sql);
 if(mysqli_num_rows($res)<1){
	 echo " <center><div style='color:white;'>you dont have complain yet</div></center>";
 }
 else{
 while($row=mysqli_fetch_array($res)){
	//S$_SESSION['cid']=$row['c_id'];
 $data=$row['c_id'];
 //echo $data;	
?>
<!-- Trigger/Open The Modal -->
<div class="msg_content">
		<div class="main_mt"><div class="msg_header"><strong><h2><?php echo $row['c_title']; ?></h2></strong></div>
	<hr><div class="msg_complain"><h3>--<span class="mymsg"><?php echo $row['c_message']; ?></span></h3> </div>
	<div class="msg_date"><h3><?php echo $row['c_date'];?></h3> </div>
<hr><a id="myBtn" href="resof_comp.php?cid=<?php echo $row['c_id']?>" class="btnres">see response</a>
</div>
		
</div>
<?php }}?>

<!-- The Modal 
<div id="resModal" class="modall">

  <!-- Modal content 
  <div class="modal-contentt">
    <div class="modal-headerr">
      <span class="closee" onclick="myfun2()">&times;</span>
      <h2>Modal Header</h2><!--<?php echo $_SESSION['cid']?>
    </div>
    <div class="modal-bodyy">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>

<script>



var modal = document.getElementById("myModal");
function myfun(){

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
// Get the modal
  modal.style.display = "block";
}
// When the user clicks the button, open the modal 
btn.onclick = function() {
}

// When the user clicks on <span> (x), close the modal
function myfun2() {
var span = document.getElementsByClassName("closee")[0];
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
-->
	</body>
</html>
