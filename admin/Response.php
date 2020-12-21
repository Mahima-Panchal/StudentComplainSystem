<?php
    include '../session.php';
    include '../pagevisit_count.php';
    include 'admin_header.php';
    include '../connection.php';
?>
<html>
    <head>
        <style>
        body {
	        margin: 0;
	        background: linear-gradient(45deg, #49a09d, #5f2c82);
        }
        .rescontainer {

          margin-top: 10px;
          padding-top: 10px;
          font-size: 30px;
          color: #fff;
          text-transform: uppercase;
          font-weight: 500;
          text-align: center;
        }
        table {
          margin-right: 0;
	        width: 1075px;
            height: 105%;
          position: relative;
          text-align: left;
	        border-collapse: collapse;
	        overflow-x: auto;
        }
        th,
        td {
            padding: 15px;
            width: 1075px;
        	background-color: rgba(255,255,255,0.2);
	        box-shadow: 0 0 20px rgba(0,0,0,0.3);
        	color: #fff;
        }
        th {
	        width: 20px;
            height: 50px;
        		background-color: rgba(85, 96, 143,0.5);
        	  text-align: center;
        }
        td, th {
          position: relative;
        }
        tr:hover{
          background-color: rgba(255, 255, 255, 0.2);
          z-index: -1;
        }
        </style>
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


        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <img src="assets/img/admin/Resp.png" width="100%" height="250px" style="background-color: #bfb8b8;" class="img-fluid" alt="Responsive image">
        <div class="table-responsive"><hr>
	        <table class="table">
	        	<thead>
	        	<tr> 
                    <th scope="res-col">No.</th><!-- 1 -->
                    <th scope="res-col">Response</th><!-- 2 -->
                    <th scope="res-col">Date</th><!-- 3 -->
                    <th scope="res-col">File</th><!-- 4 -->
                    <th scope="res-col">Update</th><!-- 5 -->
                    <th scope="res-col">Delete</th><!-- 6 -->
            	</tr>
	        	</thead>
	        	<tbody>
              <?php
                $count = 0;
                $sql = "SELECT * FROM response ORDER BY response.r_date DESC";
                $res = $con->query($sql);
                if($res->num_rows > 0){
                  while($row = $res->fetch_assoc()){
                    // $c_title = "SELECT c_title FROM complain WHERE c_id= $row['c_id']";
                    // $c_res = $con->query($c_title);
                    
                        ?>
                        <tbody>
                        <tr>
                            <th scope="res-row"><?php $count++; echo $count; ?></th><!-- 1 -->
                            <td><?php echo $row['r_message']; ?></td><!-- 2 -->
                            <td><?php echo $row['r_date']; ?></td><!-- 3 -->
                            <td><?php if($row['r_file'] == null){
                                    echo "No Any File";
                                } 
                                else{
                                ?>
                                <a href="R_Download.php?id=<?php echo $row['r_id'] ?>">Download</a>
                                <?php } ?>
                            </td><!-- 5 -->
                            <td><?php echo "<a href='R_Update.php?id=".$row['r_id']."&cid=".$row['c_id']."' onClick=\"javascript:return confirm('Are You Sure You Want To Upadate This Responce ?');\">Upadate</a>"; ?></td><!-- 6 -->
                            <td><?php
                                echo "<a href='R_Delete.php?id=".$row['r_id']."' onClick=\"javascript:return confirm('Are You Sure You Want Delete This Response ?');\">Delete</a>";
                            ?></td><!-- 7 -->
                        </tr>
                        </tbody>
                        <?php
                    }
                }
                ?>
              </div>
            </tbody>
          </table>
          <hr>
        </div>
      </div>


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