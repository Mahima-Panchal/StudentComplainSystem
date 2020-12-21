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
                console.log(5 + 6);
                var r_msg=document.getElementsByName(r_msg);
                var r_file=document.responce.fileupload.value;
                if(document.r_msg.value == "")
                {
                    window.alert("Please Enter the Message More Then 6 Charector...!". r_msg);
                    return false;
                }
                if(r_msg.length <= 6){
                    alert("Please Enter the Message More Then 6 Charector...!". r_msg);
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <?php
            if(isset($_GET['cid'])){
                $title = "";
                $cid = $_GET['cid'];
                $_SESSION['c_id'] = $cid;
                $comp = "SELECT * from complain where c_id= $cid";
                $res = $con->query($comp);
                if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                        $title = $row['c_title'];
                    }
                }
            
            }
            if(isset($_GET['id'])){
                $r_message = "";
                $r_file = "";
                $r_date = "";
                $r_id = $_GET['id'];
                $_SESSION['r_id'] = $r_id;
                $resp = "SELECT * from response where r_id=$r_id";
                $result = $con->query($resp);
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc()){
                        $r_message = $row['r_message'];
                        $r_file = $row['r_file'];
                        $r_date = $row['r_date'];
                    }
                }
            }
        ?>
        <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Response Update</h2>
                </div>
                <div class="card-body">
                    <form name="responce" method="POST" action="<?php ($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" onsubmit="return checkdata();">
                        <div class="form-row">
                            <div class="name">Title Of Complain</div>
                            <div class="value">
                                <label class="input--style-6" type="text" name="title" ><?php echo $title; ?></label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Responce Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="r_msg" placeholder="Responce sent to the university And Student"><?php echo $r_message; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Responded Date</div>
                            <div class="value">
                                <div class="input-group">
                                <label class="input--style-6" type="text" name="date" ><?php echo $r_date; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload New Document</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="fileupload" id="fileupload"><b>Old File Name : </b><?php echo $r_file; ?>
                                    <!-- <label class="label--file" for="file">Choose file</label> -->
                                    <!-- <span class="input-file__info">No file chosen</span> -->
                                </div>
                                <br><div class="label--desc">Upload Document or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
						<div class="card-footer">
                    <input class="btn btn--radius-2 btn--blue-2" type="submit" name="submit"value="Update Responce"><br>
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
        $id = $_SESSION['c_id'];
        $r_id = $_SESSION['r_id'];
        $res = $_POST['r_msg'];
        $filename = $_FILES['fileupload']['name'];
        $des = "uploads/" . basename($_FILES['fileupload']['name']);
        $file = $_FILES['fileupload']['name'];
        $date = date("Y-m-d");
        $statusMsg = '';
        echo "c= $id r= $r_id date=$date";
        $insrt_resp = "UPDATE response SET c_id=$id, r_message='$res', r_date='$date', r_file='$filename' WHERE r_id = $r_id";
        $check = $_FILES['fileupload']['tmp_name'];
        if ($con->query($insrt_resp) === TRUE){
            echo "okay";
            $statusMsg = "<h4>The Response <b><u>'".$title. "'</u></b> has been Updeted successfully.</h4>";
            if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$des)){
                // exit($statusMsg);
                // echo "Record updated successfully";
            }
        }
        else 
        {
            $statusMsg="Your Response has not Updated ";
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