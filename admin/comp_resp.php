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
            function validate(){
                var title=document.responce.r_msg.value;
                if(document.responce.r_msg.value==''){
		            alert("Enter Response Message");
		            return false;
	            }
            }
        </script>
    </head>
    <body>
        <?php
            if(isset($_GET['id'])){
            
                $title = "";
                $id = $_GET['id'];
                $_SESSION['c_id'] = $id;
                $comp = "SELECT * from complain where c_id= $id";
                $res = $con->query($comp);
                if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                        $title = $row['c_title'];
                    }
                }
            
            }
        ?>
        <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">RESPONCE BOX</h2>
                </div>
                <div class="card-body">
                    <form name="responce" method="POST" action="" onsubmit="return validate();" enctype="multipart/form-data">
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
                                    <textarea class="textarea--style-6" name="r_msg" value="" placeholder="Responce sent to the university And Student"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload document</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="fileupload" id="fileupload">
                                    <!-- <label class="label--file" for="file">Choose file</label> -->
                                    <!-- <span class="input-file__info">No file chosen</span> -->
                                </div>
                                <br><div class="label--desc">Upload Document or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
						<div class="card-footer">
                    <input class="btn btn--radius-2 btn--blue-2" type="submit" name="submit"value="Send Responce"><br>
					<br><input class="btn btn--radius-2 btn--blue-2" type="reset" value="Cancel">
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
        $res = $_POST['r_msg'];
        $filename = $_FILES['fileupload']['name'];
        $des = "uploads/" . basename($_FILES['fileupload']['name']);
        $file = $_FILES['fileupload']['name'];
        $date = date("Y-m-d");
        $statusMsg = '';
        $insrt_resp = "INSERT INTO response (c_id, r_message, r_date, r_file) VALUES ($id, '$res', '$date', '$filename');";
        $check = $_FILES['fileupload']['tmp_name'];
        if ($con->query($insrt_resp) === TRUE){
            $statusMsg = "<h4>The Response <b><u>".$title. "</u></u> has been uploaded successfully.</h4>";
            if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$des)){
                    // exit($statusMsg);
                    // echo "Record updated successfully";
            }
        }
        else 
        {
            $statusMsg="Your Response has not sent ";
        }
        echo "<div style='text-align:center;color:red;'> $statusMsg</div>";

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