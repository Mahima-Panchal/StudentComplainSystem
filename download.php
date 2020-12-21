
<?php
require_once('connection.php');
if (isset($_GET['title'])) {
    $id = $_GET['title'];
	
	/*$sql=mysqli_query($con,"Select c_file from ekalp where c_title = $id"); 
$result=mysqli_fetch_assoc($sql);
//$resu=$result['c_file']; 
$resu=$result['c_file'];
echo $result."<br>";
$filename = $resu;
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $filename . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  ob_clean();
  ob_flush ();
  @readfile($filename);
 mysqli_close($connection);
*/
// fetch file to download from database
    $sql = "SELECT file FROM notice WHERE title='$id'";
    $result = mysqli_query($con, $sql);

while($row=mysqli_fetch_array($result)){
		//echo $row['c_file'];
   $filepath ='admin/uploads/'.$row['file'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('admin/uploads/' . $row['file']));
        readfile('admin/uploads/'.$row['file']);

        // Now update downloads count
        /*$newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;*/
    }
	else{
		echo "file not fouund";
	}
}
}
