<?php
include ('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add user</title>
  <div class="container my-5">
  <button type="submit" ><a href="user.php">Add User</a></button>
  <table>
                    <tr>
                      <th>id</th>
                      <th>email</th>
                      <th>contact</th>
                <th>password</th>
                      <th>operation</th>
                    <tr>

                      <?php
                $SQL = "SELECT * from users";
                $res = mysqli_query($con,$SQL);
                if($res){

                  while ($row  = mysqli_fetch_assoc($res)) {
                      $id = $row['id'];
                      $email = $row['email'];
                      $contact= $row['contact'];
                      $password = $row['password'];
                      echo '<tr>
                        <td> '.$id.'</td>

                      <td>'.$email.'</td>
                      <td>'.$contact.'</td>
                      <td> '.$password.'</td>
                      <td> <button type="button" name="button">  <a href="update.php?updateid='.$id.'">update</a> </button>
                        <button type="button" name="button"  > <a href="delete.php?deleteid='.$id.'">delete</a> </button>
                      </td>
                      </tr>';
                  }
                }

                       ?>
                  </table>
</head>
<body>

</body>
</html>
