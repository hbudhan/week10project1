<?php
//get data from form
$reg_email = $_POST['reg_email'];
$reg_password = $_POST['reg_password'];
$reg_fname = $_POST['reg_fname'];

//login fname
if ( $reg_email == 'mjlee@njit.edu') {
  $reg_fname = "Mike Lee";
}
if ( $reg_email == 'hb247@njit.edu') {
  $reg_fname = "Henna Budhan";
}
if ( $reg_email == 'janedoe@njit.edu') {
  $reg_fname = "John Doe";
}
if ( $reg_email == 'ml24q73@njit.edu') {
  $reg_fname = "1 1";
}
if ( $reg_email == 'ml241q73@njit.edu') {
  $reg_fname = "1 1";
}
if ( $reg_email == 'test@njit.edu') {
  $reg_fname = "Yong Zhao";
}
if ( $reg_email == 'Rebecca@gmail.com') {
  $reg_fname = "Rebecca Cortes";
}
if ( $reg_email == 'test@gmail.com') {
  $reg_fname = "Test Test";
}
if ( $reg_email == 'test2@gmail.com') {
  $reg_fname = "Test Test";
}
if ( $reg_email == 'mjlee@njit.edu0') {
  $reg_fname = "Yong Yong";
}
//login email
if ( $reg_email != 'hb247@njit.edu' && $reg_email != 'mjlee@njit.edu' && $reg_email != 'janedoe@njit.edu' && $reg_email != 'ml4q73@njit.edu' && $reg_email != 'ml24q73@njit.edu' && $reg_email != 'ml241q73@njit.edu' && $reg_email != 'js829' && $reg_email != 'test@njit.edu' && $reg_email != 'Rebecca@gmail.com' && $reg_email != 'test@gmail.com' && $reg_email != 'test2@gmail.com' && $reg_email != 'mjlee@njit.edu0' ) {
  $message = 'Invalid login! Try again.';
} else {
  $message = "Welcome back, $reg_fname!";
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
    <form action="login.php" method ="post">
      <span><?php echo $message; ?></span><br>
</body>
</html>  

