<?php
include "config.php";


    $id=$_GET['updateid'];
    $sql="SELECT * FROM `user` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $fname=$row['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $gender=$row['gender'];
    $password=$row['password'];

    if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $password= $_POST['password'];


$sql="UPDATE `user` SET `id`='$id',`fname`='$fname',`lname`='$lname',`email`='$email',`gender`='$gender',`password`='$password' WHERE id=$id";
$result = $conn->query($sql);

if($result == true){
// echo "record insert succesfully";
header("location: view.php");
   //header('location: login.php');
}
else{
    echo "Error".$sql .  "<br>" .$conn->error;
}
}
$conn->close()
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
        <body>
            <h2>Sign up </h2>
            <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First name</label>
    <input type="name" class="form-control"  name="fname" value=<?php echo $fname ?>>
      </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last name</label>
    <input type="name" class="form-control"  name="lname" value=<?php echo $lname?>>
  </div>
  <div class="mb-3 ">
  <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="Email" class="form-control" name="email" value =<?php echo $email?>>
    
</div>
<div class="form-check">
  <label for="exampleInputPassword1" class="form-label">gender</label>
    <input type="radio" class="form-check-input"  name="gender" value="male">Male
    <input type="radio" class="form-check-input"  name="gender" value="fmale"> Female
    
</div>

<div class="mb-3 ">
  <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="password" class="form-control"  name="password" value=<?php echo $password?>>
    
</div>
  <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>
</body>
</html>