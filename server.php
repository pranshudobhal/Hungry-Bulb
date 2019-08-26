<?php
session_start();

$fullname = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'hungrybulb');

if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "logged in";
      header('location: success.php');
    }else {
      array_push($errors, "incorrect details, login again");
    }
  }
}


if (isset($_POST['reg_user'])) {
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  

  if (empty($fullname)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  
  $user_check_query = "SELECT * FROM users WHERE fullname='$fullname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if (($user['fullname'] === $fullname) && ($user['email'] === $email)) {
      array_push($errors, "user already registered");
    }

     }

  if (count($errors) == 0) {
    $password = md5($password);

    $query = "INSERT INTO users (fullname, email, password) 
          VALUES('$fullname', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['fullname'] = $fullname;
    $_SESSION['success'] = "logged in";
    header('location: success.php');
  }
}



?>