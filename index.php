<?php include('connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <h2>Time Board</h2>
    <a class="btn btn-primary" href="insertdata.php">Add time</a>
    <table class="table table-bordered" >
    <tr>
        <th>id</th>
        <th>carName</th>
        <th>time</th>
        <th>penalty</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    <?php 
$sql = "CALL showdata()";
$res = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($res))
{
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['car_name']; ?></td>
        <td><?php  echo $row['ltime']; ?></td>
        <td><?php  echo $row['penalty']; ?></td>
        <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>">edit</a></td>
         <td><a class="btn btn-primary" href="deletetime.php?id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>
    <?php
}
?>
    </table>
</body>
</html>