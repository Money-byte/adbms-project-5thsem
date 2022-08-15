<?php

// creating session
// creating connection and selecting database

$con = mysqli_connect('localhost:3306','root','') or die(mysqli_error());
$db_select = mysqli_select_db($con, 'lapmanagement') or die(mysqli_error());
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">