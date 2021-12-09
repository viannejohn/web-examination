<?php
include ('connection.php');

$email = "";
$contact = "";
$password="";

$errors = array();

if(isset($_POST['submit'])){
// if clicked submit
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$password2 = $_POST['password'];

if(empty($email)){
  array_push($errors,"Please enter email");
}
if(empty($contact)){
  array_push($errors,"Please enter contact");
}
if(empty($password)){
  array_push($errors,"Please enter password");
}
if(empty($password2)){
  array_push($errors,"Please enter password");
}
if(!($password == $password2)){

  array_push($errors, "passwords dont match");
}

if(count($errors)== 0){

  $sql = "INSERT into users (email,contact,password) values ('$email','$contact','$password')";
  $res = mysqli_query($con, $sql);

  if($res){
    $_SESSION['email'] =$email;
    header("location:login.php");
  }else{
    header("location:registration.php");
  }
}

}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <form method="POST">
      <?php include ('errors.php'); ?>
      <div class="container">
        <h1>REGISTRATION FORM FOR IEEE CONFERENCE</h1>

        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email"value="<?php echo $email; ?>" name="email" id="email" required><br>

        <label for="contact"><b>Contact</b></label>
        <input type="number" placeholder="Enter Contact"value="<?php echo $contact; ?>" name="contact" id="contact" required><br>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password"value="<?php echo $password; ?>" name="password" id="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password"  name="$password2" placeholder="Repeat Password" value="<?php echo $password; ?>" name="password" id="psw" required  >

      <input type="submit" name="submit" class="registerbtn" value="REGISTER">
      </div>

      <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
      </div>
    </form>

  </body>
</html>
