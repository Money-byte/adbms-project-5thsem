<?php 
include('connection.php');
$id = $_GET['id'];

$sql = "CALL deletetime('$id')";

$result = mysqli_query($con, $sql);

if($result==TRUE)
{
   
    header("location:".'http://localhost/Adbmspractical/index.php');   
}
else
{
    
    header("location:".'http://localhost/Adbmspractical/index.php');   
}

?>