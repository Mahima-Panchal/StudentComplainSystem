<?php
    include '../connection.php';
    if(isset($_GET['id'])){
        $r_id = $_GET['id'];
        // echo $r_id;
        $delete = "DELETE from response WHERE r_id=$r_id";
        // $res = $con->query($delete);
        if($con->query($delete) === true){
            header("location: Response.php");
        }
        else{
            echo "Not Delete";
        }
    }

?>