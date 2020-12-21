<?php
    include '../session.php';
    include '../pagevisit_count.php';
    include '../connection.php';
    include 'admin_header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

        <!-- Font awesome -->
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">   
           
        <!-- Admin Style -->
        <link rel="stylesheet" type="text/css" href="assets/css/adminstyle.css"> 

        <!-- Slick slider -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
        <!-- Fancybox slider -->
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
        <!-- Theme color -->
        <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

        <!-- Main style sheet -->
        <link href="assets/css/style.css" rel="stylesheet">    
        <!-- Main CSS-->
        <link href="css/main2.css" rel="stylesheet" media="all">

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript">
            function checkdata(){
                var title=document.notice.ntitle.value;
                if(document.notice.ntitle.value==''){
		            alert("Enter Title Of Notice");
		            return false;
	            }
                if(title.length >= 25){
		            alert("Title Must Less than 25 Char");
		            return false;
	            }
            }
        </script>
    </head>
    <body>
        <?php
            if(isset($_GET['id'])){
                $title = "";
                $n_date = "";
                $n_file = "";
                $nid = $_GET['id'];
                $_SESSION['n_id'] = $nid;
                $notice = "SELECT * from notice where n_id= $nid";
                $res = $con->query($notice);
                if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                        $title = $row['title'];
                        $n_date = $row['date'];
                        $n_file = $row['file'];
                    }
                }
            
            }
        ?>
        <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Notice Update</h2>
                </div>
                <div class="card-body">
                    <form name="notice" method="POST" action="" enctype="multipart/form-data" onsubmit="return checkdata();">
                        <div class="form-row">
                            <div class="name">Title Of Notice</div>
                            <div class="value">
                                <label class="input--style-6" type="text" name="title" ><?php echo $title; ?></label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">New Title For Notice</div>
                            <div class="value">
                            <input class="input--style-6" type="text" name="ntitle" placeholder="Enter Notice Title">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Notice Date</div>
                            <div class="value">
                                <div class="input-group">
                                <label class="input--style-6" type="text" name="date" ><?php echo $n_date; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload New Document</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="fileupload" id="fileupload"><b>Old File Name : </b><?php echo $n_file; ?>
                                    <!-- <label class="label--file" for="file">Choose file</label> -->
                                    <!-- <span class="input-file__info">No file chosen</span> -->
                                </div>
                                <br><div class="label--desc">Upload Document or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
						<div class="card-footer">
                    <input class="btn btn--radius-2 btn--blue-2" type="submit" name="submit"value="Update Notice"><br>
					<br><input class="btn btn--radius-2 btn--blue-2" type="submit" name="cancel" value="Cancel">
                </div>
                </form> 
                </div>      
            </div>
        </div>
    </div>
    <?php
        // include '../connection.php';
        
    if(isset($_POST['submit'])){
        $id = $_SESSION['n_id'];
        $ntitle = $_POST['ntitle'];
        $filename = $_FILES['fileupload']['name'];
        $des = "uploads/" . basename($_FILES['fileupload']['name']);
        $file = $_FILES['fileupload']['name'];
        $date = date("Y-m-d");
        $statusMsg = '';
        $update = "UPDATE notice SET title='$ntitle', file_destination='$des' , file='$filename', date='$date' WHERE n_id = $id";
        $check = $_FILES['fileupload']['tmp_name'];
        if ($con->query($update) === TRUE){
            // echo "okay";
            $statusMsg = "<h4>The Notice <b><u>".$title. "</u></b> has been Updeted successfully.<h4>";
            if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$des)){
                // exit($statusMsg);
                // echo "Record updated successfully";
            }
        }
        else 
        {
            $statusMsg="Your Notice has not Updated ";
            // echo $con->error;
        }
        echo "<div style='text-align:center;color:red;'>$statusMsg</div>";
    }
    if(isset($_POST['cancel']))
    {
        // echo "oaky";
        // header("location: Response.php");
    }
    ?>
        <!-- jQuery library -->
        <script src="assets/js/jquery.min.js"></script>  
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.js"></script>   
        <!-- Slick slider -->
        <script type="text/javascript" src="assets/js/slick.js"></script>
        <!-- Counter -->
        <script type="text/javascript" src="assets/js/waypoints.js"></script>
        <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
        <!-- Mixit slider -->
        <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
        <!-- Add fancyBox -->        
        <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
        <!-- Custom js -->
        <script src="assets/js/custom.js"></script>

    </body>
    <?php
    include '../footer.php';
    ?>
</html>