<?php
//get data from form
$reg_uname = $_POST['reg_uname'];
$reg_password = $_POST['reg_password'];
$reg_fname = $_POST['reg_fname'];
$reg_email = $_POST['reg_email'];
$reg_phone = $_POST['reg_phone'];
$reg_bday = $_POST['reg_bday'];
$reg_gen = $_POST['reg_gen'];

//signup submit
if ( $reg_email != 'hb247@njit.edu' && $reg_email != 'mjlee@njit.edu' && $reg_email != 'janedoe@njit.edu' && $reg_email != 'ml4q73@njit.edu' && $reg_email != 'ml24q73@njit.edu' && $reg_email != 'ml241q73@njit.edu' && $reg_email != 'js829' && $reg_email != 'test@njit.edu' && $reg_email != 'Rebecca@gmail.com' && $reg_email != 'test@gmail.com' && $reg_email != 'test2@gmail.com' && $reg_email != 'mjlee@njit.edu0' ) {
  $message = 'Welcome. Thank you for registering!';
} else {
  $message = 'Email address already exists! Please enter another one.';
}
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
 <link rel="stylesheet" type="text/css" href="mystyle.css">
 <!-- <style>
 body {background-color: green;}
 </style> -->
</head>
<body>
      <div class="container">
  <section id="content">
    <form action="signup.php" method ="post">
      <span><?php echo $message; ?></span><br>
</body>
</html>