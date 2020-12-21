<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Complain portal</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

	<style type="text/css">

		.res_header{
			background-color:blue;
			color:white;
		}
		.resmain{
		height:400px;
		width:300px;
		margin:40px;
		border-bottom:2px solid green;
		border-left:2px solid blue;
		border-right:2px solid red;
		border-top:2px solid yellow;
		border-radius:30px 30px 30px 30px;
		}
		.clgimg{
			height:200px;
			width:100%;
			border-radius:50px;
		}
		.resmsg{
		height:auto;
		font-size:20px;
		}
		.resdate{
		height:auto;
		width:100%;
		float:;
		}
		.btnlink {
			background-color:blue;
			color:white;
			text-decoration:none;
			height:50px;
			width:25px;
		}
		
	</style>
	</head>
	<body>
		<?php
			include"header.php";
		?>
		<center><div class="resmain">
<?php 
require_once("connection.php");
if(isset($_GET['cid'])){
	$val=$_GET['cid'];
	//echo $val;
	$q="select r_id,r_message,r_file,r_date from response where c_id='$val'";
	$res=mysqli_query($con,$q);
	/*while($res=mysqli_fetch_array($resultofres)){
		echo $res['r_date'];*/
		if(mysqli_num_rows($res)>=1){
			while($row=mysqli_fetch_array($res)){
				?>
			<div class="img">
				<img src="assets/img/logospu.png" class="clgimg">
			</div>
			<div class="resmsg">
				<h3><?php echo $row['r_message']; ?></h3>
			</div>
			<div class="resdate">
				<h3><?php echo $row['r_date']; ?></h3>
			</div>
			<div class="download">
			<?php if($row['r_file'] == null){
                                    echo "No Any File";
                                } 
                                else{
                                ?>
                                <a href="download2.php?id=<?php echo $row['r_id'] ?>">Download </a>
                                <?php } ?>
			</div>
			<!-- <div class="download">
				<a class="btnlink" href="download2.php?rid="">Download File</a>
			</div> -->
		</div> </center>
			<?php
				
				
				
				}
			
		}
		else{?>
		
			
		<div class="img">
				<img src="assets/img/logospu.png" class="clgimg">
			</div>
			<div class="resmsg">
				<h3><?php echo "Request Pending" ?></h3>
			</div></div></center>
	<?php	}
	}
else{
	echo "sorry";
}

?>
	
	</body>
</html>