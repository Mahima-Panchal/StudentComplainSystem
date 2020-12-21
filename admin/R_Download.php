<?php
    require('../connection.php');

    echo "OKAY";
    if(isset($_GET['id']))
    {
    $id = $_GET['id'];
    $dow = "select * FROM response WHERE r_id=$id";
    $res = $con->query($dow);
    $file = $res->fetch_assoc();
    $path = "uploads/" . $file['r_file'];
    echo $path;
    if(file_exists($path))
    {
        header('Content-Type: application/octet-stream');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=' .basename($path));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma:public');
        header('Content-length:' . filesize('uploads/'.$file['image']));
        readfile('uploads/' . $file['image']);
    }
    else
        echo "file not exist";
}
?>