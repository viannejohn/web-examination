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

if(empty($email)){
  array_push($errors,"Please enter email");
}
if(empty($contact)){
  array_push($errors,"Please enter contact");
}
if(empty($password)){
  array_push($errors,"Please enter password");
}



if(count($errors)== 0){

  $sql = "SELECT * from users where email= '$email' and password = '$password'";
  $res = mysqli_query($con, $sql);
  if($res){
        $_SESSION['email'] =$email;
        $_SESSION['contact'] =$contact;
        $_SESSION['password'] =$password;
    header("location:dashboard.php");
  }

}

}


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <h1>LOGIN FORM FOR IEEE CONFERENCE</h1>
     <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <form  method="post">
      <?php include ('errors.php') ?>
      <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="contact"><b>Contact</b></label>
        <input type="number" placeholder="Enter Contact"value="<?php echo $contact; ?>" name="contact" id="contact" required><br>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

  <input type="submit" name="submit" value="login">
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
          <a href="registration.php">REGISTER</a>
      </div>
    </form>
  </body>
</html>
