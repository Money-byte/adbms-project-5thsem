<?php include('connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id=$id";
        
        $result = mysqli_query($con, $sql);

        if($result==TRUE)
        {
            $count = mysqli_num_rows($result);
            if($count==1)   
            {
                $row=mysqli_fetch_assoc($result);
                $id=$row['id'];
                $car_name = $row['car_name'];
                $ltime = $row['ltime'];
                $penalty = $row['penalty'];
            }
            else
            {
                header("location:".'http://localhost/Adbmspractical/index.php');
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <h1>update admin</h1><form method="POST">
    <div class="row mb-3">
    <label class="col-sm-2 col-form-label">id</label>
    <div class="col-sm-10">
      <input type="text" value="<?php echo (isset($id)) ? $id : '';; ?>" name="id" class="form-control" >
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Car name</label>
    <div class="col-sm-10">
      <input type="text" value="<?php echo (isset($car_name)) ? $car_name : ''; ?>" name="car_name" class="form-control" >
    </div>
  </div>
  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">Lap Time</label>
    <div class="col-sm-10">
      <input type="text" value="<?php echo (isset($ltime)) ? $ltime : '';; ?>" name="ltime" class="form-control">
    </div>
  </div>
  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">penalty</label>
    <div class="col-sm-10">
      <input type="text" value="<?php echo (isset($penalty)) ? $penalty : '';; ?>" name="penalty" class="form-control">
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">submit</button>
</form>

<?php
if(isset($_POST['submit']))
{  
    $id=$_POST['id'];
   $car_name=$_POST['car_name'];
   $ltime=$_POST['ltime'];
   $penalty=$_POST['penalty'];

   $sql = "CALL updatetime('$id','$car_name','$ltime','$penalty')";

   $res= mysqli_query($con,$sql);
   if($res)
   {
    header("location:".'http://localhost/Adbmspractical/index.php');

   }
   else
   {
    echo "data has not been updated";
   }
}
?>
</body>
</html>