<html>
	<head>
	<style>
	
	.myheader{
		color:white;
		text-align:center;
		width:100%;
		}
	.mycontainer{
		height:auto;
		width:100%;
		  background:linear-gradient(45deg,rgb(10,10,150),rgb(100,10,100));
		display:flex;
		padding:10px 10px 10px 10px;
		margin:20px;
		justify-content:center;
		
		
	}
	.notice{
		margin:20px;
		background:white;
		height:auto;
		width:400px;
		padding:40px;
		
		border-top:5px solid blue;
		border-bottom:5px solid green;
		border-right:5px solid yellow;
		border-left:5px solid green;
		border-radius:10px;
		transition:transform i
	}
	.notice:hover{
		  background:linear-gradient(45deg,rgb(29, 6, 6),rgb(11, 63, 94));
		  color:white;
	}
	..mya{
		overflow:hidden;
		border-radius:10px;
		background:blue;
		
		color:white;
	}
	.date h2{
		font-size:15px;
	}
	.noticetitle h3{
		font-size:30px;
		text-transform:uppercase
	}
	
	</style>
	</head>
	
	<body>
	<div class="myheader"><h1>Important notices</h1></div>
	<div class="mycontainer">
	<?php 
require_once('connection.php');

  $sql=mysqli_query($con,"select title,date from notice ORDER BY n_id DESC LIMIT 3"); 
while($row=mysqli_fetch_array($sql)){


 		
?>		<div class="notice">
			<div class="noticetitle">
			<h3><?php echo $row['title'];?></h3></div>
			<div class="date">
				<h2><?php echo $row['date'];?></h2></div>
				
			<div class="download">
			<h3> <a class="mya" href="download.php?title=<?php echo $row['title']?>">download now</a></h3></div>
				</div>
<?php }?>
			<!--	<div class="notice">
			<div class="noticetitle">
			<h3> HECKATHON_2020</h3></div>
			<div class="download">
			<h3> <a href="my.pdf">Download Notice</a></h3></div>
				<div class="date">
				<h2>date</h2></div>
				</div>
				<div class="notice">
			<div class="noticetitle">
			<h3> HECKATHON_2020</h3></div>
			<div class="download">
			<h3> <a href="my.pdf">Download Notice</a></h3></div>
				<div class="date">
				<h2>date</h2></div>
</div>				-->
			</div>
		
	
	</body>
</html>