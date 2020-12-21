<?php
    include '../connection.php';
    if(isset($_GET['id'])){
        $n_id = $_GET['id'];
        // echo $r_id;
        $delete = "DELETE from notice WHERE n_id=$n_id";
        // $res = $con->query($delete);
        if($con->query($delete) === true){
            header("location: Notice.php");
        }
        else{
            echo "Not Delete";
        }
    }

?>