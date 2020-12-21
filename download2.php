<?php
require_once("connection.php");
if(isset($_GET['rid'])){
	$r_id=$_GET['rid'];
	//echo "$r_id";
	$q="select r_file from response where r_id='$r_id'";
    $result=mysqli_query($con,$q);
    if($result->num_rows > 0){

        while($row=mysqli_fetch_array($result)){
            //echo $row['c_file'];
            $filepath ='admin/uploads/'.$row['r_file'];
            if($row['r_file'] == NULL){
                echo "<a href='' onClick=\"javascript:return confirm('Are You Sure You Want To Upadate This Responce ?');\">Upadate</a>";
            }else{

            
            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('admin/uploads/' . $row['r_file']));
                readfile('admin/uploads/'.$row['r_file']);
                
                // Now update downloads count
                /*$newCount = $file['downloads'] + 1;
                $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
                mysqli_query($conn, $updateQuery);
                exit;*/
            }
            
            
            else{
                echo "no file on that perticular response";
            }
        }
        }
    }
    echo "<a href='' onClick=\"javascript:return confirm('Are You Sure You Want To Upadate This Responce ?');\">Upadate</a>";
}

else{
	echo "sorry!";
}

	
?>