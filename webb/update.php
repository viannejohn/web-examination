
<?php
include('connection.php');

$id = $_GET['updateid'];
$sql= "SELECT * FROM users where id = $id";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);

$email = $row['email'];
$contact= $row['contact'];
$password =$row['password'];

if(isset($_POST['submit'])){

  $email = $_POST['email'];
    $contact = $_POST['contact'];
  $password =  $_POST['password'];

  $query = "UPDATE users SET id = '$id', email = '$email',contact = '$contact',password = '$password' where id ='$id'";
              $results = mysqli_query($con, $query);
              if($results){
              header('location:display.php');
              }
              else{die(mysqli_error($con));}


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

        <div class="container">
          <h1>ADD USER</h1>

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

          </div>
          </div>
          <input type="submit" >
        </form>
      </div>

    </body>
  </html>
